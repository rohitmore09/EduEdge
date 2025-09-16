<?php
require_once '../api/config.php';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Better error handling

$action = $_REQUEST['action'] ?? '';

// Slug generator
function slugify($text) {
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = preg_replace('~[^-\w]+~', '', $text);
    $text = trim($text, '-');
    $text = preg_replace('~-+~', '-', $text);
    return strtolower($text ?: 'n-a');
}

if ($action === 'list') {
    $q = $conn->query("SELECT posts.*, categories.name AS category 
                       FROM posts 
                       LEFT JOIN categories ON posts.category_id = categories.id 
                       ORDER BY posts.id DESC");

    echo "<table border='1'>
            <tr>
                <th>Title</th><th>Category</th><th>Status</th><th>Type</th>
                <th>Course</th><th>Tags</th><th>Publish Date</th><th>Actions</th>
            </tr>";
    while ($row = $q->fetch_assoc()) {
        echo "<tr>
                <td>{$row['title']}</td>
                <td>{$row['category']}</td>
                <td>{$row['status']}</td>
                <td>{$row['type']}</td>
                <td>{$row['course']}</td>
                <td>{$row['tags']}</td>
                <td>{$row['publish_date']}</td>
                <td>
                    <button class='editBtn' data-slug='{$row['slug']}'>Edit</button>
                    <button class='deleteBtn' data-slug='{$row['slug']}'>Delete</button>
                </td>
              </tr>";
    }
    echo "</table>";
}

if (in_array($action, ['save', 'add', 'update'])) {
    $title         = $_POST['title'] ?? '';
    $submittedSlug = $_POST['slug'] ?? '';
    $originalSlug  = $_POST['original_slug'] ?? '';
    $content       = $_POST['content'] ?? '';
    $category_id   = $_POST['category_id'] ?? 0;
    $status        = $_POST['status'] ?? 'draft';
    $type          = $_POST['type'] ?? 'blog';
    $tags          = $_POST['tags'] ?? '';
    $course        = $_POST['course'] ?? '';
    $publish_date  = $_POST['publish_date'] ?? date('Y-m-d');
    $image         = '';

    $newSlug = slugify($submittedSlug ?: $title);

    // Image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $allowedExts = ['jpg', 'jpeg', 'png'];
        $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
        $tmpName = $_FILES['image']['tmp_name'];
        $fileSize = $_FILES['image']['size'];

        if (!in_array($ext, $allowedExts)) {
            exit("Invalid image format. Only JPG, JPEG, and PNG allowed.");
        }

        if ($fileSize > 2 * 1024 * 1024) {
            exit("Image size must be less than 2MB.");
        }

        if (!getimagesize($tmpName)) {
            exit("Uploaded file is not a valid image.");
        }

        $image = time() . '_' . uniqid() . '.' . $ext;
        $uploadPath = "../admin/uploads/$image";

        if (!move_uploaded_file($tmpName, $uploadPath)) {
            exit("Image upload failed.");
        }
    } elseif (isset($_FILES['image']) && $_FILES['image']['error'] !== UPLOAD_ERR_NO_FILE) {
        // Handle other upload errors
        switch ($_FILES['image']['error']) {
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                exit("Uploaded image exceeds the allowed size limit (2MB).");
            case UPLOAD_ERR_PARTIAL:
                exit("The uploaded file was only partially uploaded.");
            case UPLOAD_ERR_NO_TMP_DIR:
                exit("Missing a temporary folder.");
            case UPLOAD_ERR_CANT_WRITE:
                exit("Failed to write file to disk.");
            default:
                exit("Unknown file upload error.");
        }
    }

    // UPDATE
    if (!empty($originalSlug)) {
        if ($image) {
            $stmt = $conn->prepare("UPDATE posts SET 
                title = ?, slug = ?, content = ?, image = ?, category_id = ?, status = ?, type = ?, tags = ?, course = ?, publish_date = ?
                WHERE slug = ?");
            $stmt->bind_param("ssssissssss", $title, $newSlug, $content, $image, $category_id, $status, $type, $tags, $course, $publish_date, $originalSlug);
        } else {
            $stmt = $conn->prepare("UPDATE posts SET 
                title = ?, slug = ?, content = ?, category_id = ?, status = ?, type = ?, tags = ?, course = ?, publish_date = ?
                WHERE slug = ?");
            $stmt->bind_param("sssissssss", $title, $newSlug, $content, $category_id, $status, $type, $tags, $course, $publish_date, $originalSlug);
        }

        echo $stmt->execute() ? "Updated successfully" : "Update failed: " . $stmt->error;
    }
    // INSERT
    else {
        $stmt = $conn->prepare("INSERT INTO posts 
            (title, slug, content, image, category_id, status, type, tags, course, publish_date) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssisssss", $title, $newSlug, $content, $image, $category_id, $status, $type, $tags, $course, $publish_date);

        echo $stmt->execute() ? "Inserted successfully" : "Insert failed: " . $stmt->error;
    }
}

if ($action === 'get') {
    $slug = $_GET['slug'] ?? '';
    $stmt = $conn->prepare("SELECT * FROM posts WHERE slug = ?");
    $stmt->bind_param("s", $slug);
    $stmt->execute();
    $result = $stmt->get_result();
    echo json_encode($result->fetch_assoc());
}

if ($action === 'delete') {
    $slug = $_POST['slug'] ?? '';
    $stmt = $conn->prepare("DELETE FROM posts WHERE slug = ?");
    $stmt->bind_param("s", $slug);
    echo $stmt->execute() ? "Deleted successfully" : "Delete failed: " . $stmt->error;
}
