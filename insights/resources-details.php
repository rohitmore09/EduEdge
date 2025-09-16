<?php
require_once 'api/config.php';

$slug = $_GET['slug'] ?? '';

if (!$slug) {
    die("Slug is missing.");
}

// Get current post
$stmt = $conn->prepare("
    SELECT posts.*, categories.slug AS category 
    FROM posts 
    LEFT JOIN categories ON posts.category_id = categories.id 
    WHERE posts.slug = ? AND posts.status = 'published' AND posts.category_id != 4
");
$stmt->bind_param("s", $slug);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die("Post not found");
}

$post = $result->fetch_assoc();

// Get related posts
$relatedStmt = $conn->prepare("
    SELECT posts.*, categories.slug AS category 
    FROM posts
    LEFT JOIN categories ON posts.category_id = categories.id
    WHERE posts.category_id = ? AND posts.status = 'published' AND posts.slug != ? AND posts.category_id != 4
    ORDER BY created_at DESC LIMIT 3
");
$relatedStmt->bind_param("is", $post['category_id'], $slug);
$relatedStmt->execute();
$relatedResult = $relatedStmt->get_result();

// Get previous post (created before this one)
$prevStmt = $conn->prepare("
    SELECT posts.slug, posts.title, categories.slug AS category
    FROM posts
    LEFT JOIN categories ON posts.category_id = categories.id
    WHERE posts.status = 'published' AND posts.created_at < ? AND posts.category_id != 4
    ORDER BY posts.created_at DESC
    LIMIT 1

");
$prevStmt->bind_param("s", $post['created_at']);
$prevStmt->execute();
$prevResult = $prevStmt->get_result();
$prevPost = $prevResult->fetch_assoc();

// Get next post (created after this one)
$nextStmt = $conn->prepare("
    SELECT posts.slug, posts.title, categories.slug AS category
    FROM posts
    LEFT JOIN categories ON posts.category_id = categories.id
    WHERE posts.status = 'published' AND posts.created_at > ? AND posts.category_id != 4
    ORDER BY posts.created_at ASC
    LIMIT 1
");
$nextStmt->bind_param("s", $post['created_at']);
$nextStmt->execute();
$nextResult = $nextStmt->get_result();
$nextPost = $nextResult->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($post['title']); ?> | EduEdge Pro</title>
<meta name="description" content="<?php echo htmlspecialchars(mb_substr(strip_tags($post['content']), 0, 160)); ?>">
<meta property="og:title" content="<?php echo htmlspecialchars($post['title']); ?> | EduEdge Pro">
<meta property="og:description" content="<?php echo htmlspecialchars(mb_substr(strip_tags($post['content']), 0, 160)); ?>">
<meta property="og:image" content="<?php echo !empty($post['image']) ? $base_url . 'admin/uploads/' . $post['image'] : $base_url . 'assets/imgs/blog/default-blog.jpg'; ?>">
<meta property="og:url" content="<?php echo $base_url . 'resources-details.php?slug=' . urlencode($slug); ?>">
<meta property="og:type" content="article">
<?php include '../style_css.php'; ?>
</head>
<body>
<?php include '../components/header.php'; ?>

<div class="pt-space"></div>

<div class="breadcrumb">
    <div class="container">
        <ul class="breadcrumb-item">
            <li>
                <a href="<?php echo $base_url; ?>">Home</a>
                <img src="<?php echo $base_url; ?>assets/imgs/logo/righticon_green.svg" alt="Icon" class="spcbtwn">
            </li>
            <li>
                <a href="<?php echo $base_url; ?>insights/<?php echo $post['category']; ?>"><?php echo $post['category']; ?></a>
            </li>
        </ul>
    </div>
</div>

<section>
<div class="container">
    <div class="blog-details">
        <div class="blg-bck">
            <a href="<?php echo $base_url; ?>insights/<?php echo $post['category']; ?>"><?php echo $post['category']; ?></a>
        </div>
        <div class="blgs-info">
            <div class="blog-heading">
                <h1><?php echo htmlspecialchars($post['title']); ?></h1>
                <div class="tag-date">
                    <small><?php echo date('d/m/Y', strtotime($post['created_at'])); ?></small>
                </div>
            </div>
            <div class="blog-content">
                <?php echo $post['content']; ?>
            </div>

            <?php if (!empty($post['tags'])): ?>
                <div class="tags-sec">
                    <?php foreach (explode(',', $post['tags']) as $tag): ?>
                        <a href="#" class="tags_cls"><?php echo htmlspecialchars(trim($tag)); ?></a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!-- Next/Previous Buttons -->
            <div class="nxbl-btn">
                <?php if ($prevPost): ?>
                <div class="nvbtn">
                    <a href="<?php echo $base_url; ?>insights/<?php echo $prevPost['category']; ?>/<?php echo urlencode($prevPost['slug']); ?>">
                        <div class="ins-btnvs">
                            <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round"></path>
                                    </svg>
                            
                            <span>Previous</span>
                        </div>
                        <h4><?php echo htmlspecialchars($prevPost['title']); ?></h4>
                    </a>
                </div>
                <?php endif; ?>

                <?php if ($nextPost): ?>
                <div class="nvbtn">
                    <a href="<?php echo $base_url; ?>insights/<?php echo $nextPost['category']; ?>/<?php echo urlencode($nextPost['slug']); ?>">
                        <div class="ins-btnvs">
                            <span>Next</span>
                            <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round"></path>
                                    </svg>
                        </div>
                        <h4><?php echo htmlspecialchars($nextPost['title']); ?></h4>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <?php if ($relatedResult->num_rows > 0): ?>
            <div class="related-blogs sidefix">
                <div class="reltd-lst">
                    <h3>Related Resources</h3>
                    <ul>
                        <?php while ($relatedPost = $relatedResult->fetch_assoc()): //echo "<pre>";print_r($relatedPost);exit;?>
                            <li>
                                <h3 class="related-title"><?php echo htmlspecialchars($relatedPost['title']); ?></h3>
                                <a class="secondary-btn" href="<?php echo $base_url; ?>insights/<?php echo $relatedPost['category']; ?>/<?php echo urlencode($relatedPost['slug']); ?>">
                                    <span>Read More</span>
                                    <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
</section>

<?php include '../components/footer.php'; ?>
<?php include '../style_js.php'; ?>
</body>
</html>
