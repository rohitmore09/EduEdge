<?php
require_once '../api/config.php';
require_once 'auth.php';

$slug = $_GET['slug'] ?? '';
$stmt = $conn->prepare("SELECT * FROM posts WHERE slug = ?");
$stmt->bind_param("s", $slug);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows === 0) {
    die('Blog not found');
}
$post = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Edit Blog</title>
    <link href="../assets/admin/css/sb-admin-2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css">
    <style>.invalid-feedback { color: red; font-size: 0.9rem; }</style>
</head>
<body>
<?php include 'topbar.php'; ?>
<div class="container-fluid pt-5">
    <a href="index.php" class="btn btn-secondary mb-3">Back to Blog List</a>
    <h1 class="h3 mb-4">Edit Blog</h1>
    <form id="blogForm" enctype="multipart/form-data">
        <input type="hidden" name="original_slug" value="<?= htmlspecialchars($post['slug']) ?>">

        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" id="title" class="form-control" value="<?= htmlspecialchars($post['title']) ?>">
        </div>

        <div class="form-group">
            <label>Slug</label>
            <button type="button" class="btn btn-sm btn-primary" id="generateSlugBtn">Generate</button>
            <input type="text" name="slug" id="slug" class="form-control mt-2" value="<?= htmlspecialchars($post['slug']) ?>">
        </div>

        <div class="form-group">
            <label>Content</label>
            <textarea name="content" id="contentEditor" class="form-control" rows="10"><?= htmlspecialchars($post['content']) ?></textarea>
        </div>

        <div class="form-group">
            <label>Category</label>
            <select name="category_id" class="form-control">
                <option value="">-- Select --</option>
                <?php
                $cats = $conn->query("SELECT * FROM categories");
                while ($cat = $cats->fetch_assoc()) {
                    $selected = $cat['id'] == $post['category_id'] ? 'selected' : '';
                    echo "<option value='{$cat['id']}' $selected>{$cat['name']}</option>";
                }
                ?>
            </select>
        </div>

        <?php $courses = ['Gmat', 'GRE', 'GREt', 'GREd']; ?>
        <div class="form-group">
            <label>Select Course</label>
            <select name="course" class="form-control">
                <?php foreach ($courses as $course): ?>
                    <option value="<?= $course ?>" <?= ($post['course'] === $course) ? 'selected' : '' ?>>
                        <?= htmlspecialchars($course) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label>Tags</label>
            <input name="tags" id="tagsInput" class="form-control">
        </div>

        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" id="image" class="form-control">
            <div id="imageError" class="invalid-feedback d-block"></div>
            <?php if (!empty($post['image'])): ?>
                <br><img src="uploads/<?= $post['image'] ?>" height="80">
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label>Publish Date</label>
            <input type="date" name="publish_date" class="form-control" value="<?= htmlspecialchars($post['publish_date']) ?>">
        </div>

        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="draft" <?= $post['status'] === 'draft' ? 'selected' : '' ?>>Draft</option>
                <option value="published" <?= $post['status'] === 'published' ? 'selected' : '' ?>>Published</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>

<script src="../assets/js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
<script>
$(function () {
    // Initialize Summernote with image upload
    $('#contentEditor').summernote({
        height: 300,
        callbacks: {
            onImageUpload: function(files) {
                for (let i = 0; i < files.length; i++) {
                    uploadImage(files[i]);
                }
            }
        }
    });

    function uploadImage(file) {
        let data = new FormData();
        data.append("image", file);
        $.ajax({
            url: "../ajax/upload-summernote-image.php",
            method: "POST",
            data: data,
            contentType: false,
            processData: false,
            success: function (url) {
                $('#contentEditor').summernote('insertImage', url);
            },
            error: function () {
                alert("Image upload failed.");
            }
        });
    }

    const tagify = new Tagify(document.querySelector('#tagsInput'));
    tagify.addTags(<?= json_encode(explode(",", $post['tags'])) ?>);

    const showError = ($el, message) => {
        $el.addClass('is-invalid');
        if ($el.next('.invalid-feedback').length === 0) {
            $el.after(`<div class="invalid-feedback d-block">${message}</div>`);
        }
    };

    $('#generateSlugBtn').on('click', function () {
        const title = $('#title').val().trim().toLowerCase().replace(/[^a-z0-9\s]/g, '').replace(/\s+/g, '-');
        $('#slug').val(title);
    });

    $('#blogForm').on('submit', function (e) {
        e.preventDefault();
        const content = $('#contentEditor').summernote('code');
        $('.invalid-feedback').text('');
        $('.is-invalid').removeClass('is-invalid');
        let hasError = false;
        
        const form = this;
        const formData = new FormData(form);
        formData.set("content", content);
        formData.set("tags", tagify.value.map(tag => tag.value).join(","));
        formData.append("action", "update");

        const imageInput = $('#image')[0];
        const imageError = $('#imageError');
        imageError.text('');

        if (!$('[name="title"]').val().trim()) {
            showError($('[name="title"]'), "Title is required.");
            hasError = true;
        }
        if (!$('[name="category_id"]').val()) {
            showError($('[name="category_id"]'), "Category is required.");
            hasError = true;
        }
        if (!$('[name="course"]').val()) {
            showError($('[name="course"]'), "Course is required.");
            hasError = true;
        }
        
        if (!content || content === '<p><br></p>') {
            showError($('#contentEditor'), "Content is required.");
            hasError = true;
        }
       
        if (!$('[name="publish_date"]').val()) {
            showError($('[name="publish_date"]'), "Publish date is required.");
            hasError = true;
        }
        if (!$('[name="status"]').val()) {
            showError($('[name="status"]'), "Status is required.");
            hasError = true;
        }
        if (imageInput.files.length > 0) {
            const file = imageInput.files[0];
            const allowed = ['image/jpeg', 'image/png', 'image/jpg'];
            if (!allowed.includes(file.type)) {
                imageError.text("Only JPG, JPEG, and PNG formats are allowed.");
                hasError = true;
            } else if (file.size > 2 * 1024 * 1024) {
                imageError.text("Image must be smaller than 2MB.");
                hasError = true;
            }
        }

        if (hasError) return;

        $.ajax({
            url: "../ajax/blog-action.php",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success(res) {
                alert(res);
                window.location.href = "blog-list.php";
            },
            error() {
                alert("Error occurred while updating the blog.");
            }
        });
    });
});
</script>
</body>
</html>
