<?php
require_once '../api/config.php';

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$limit = 3; // Posts per page
$offset = ($page - 1) * $limit;

$where = "WHERE posts.status = 'published'";

// Filters
if (!empty($_GET['category'])) {
    $where .= " AND posts.category_id = '".intval($_GET['category'])."'";
}
if (!empty($_GET['course'])) {
    $where .= " AND posts.course = '".$conn->real_escape_string($_GET['course'])."'";
}

// Sort
$order = "ORDER BY posts.created_at DESC";
if (!empty($_GET['sort'])) {
    if ($_GET['sort'] === 'oldest') {
        $order = "ORDER BY posts.created_at ASC";
    }
}

$sql = "
  SELECT posts.*, categories.name AS category
  FROM posts
  LEFT JOIN categories ON posts.category_id = categories.id
  $where
  $order
  LIMIT $limit OFFSET $offset
";

$q = $conn->query($sql);

while ($row = $q->fetch_assoc()): ?>
<div class="blogs">
  <div class="blog-img">
    <?php if (!empty($row['image'])): ?>
      <img src="admin/uploads/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['title']); ?>" width="384" height="280">
    <?php else: ?>
      <img src="assets/imgs/blog/default-blog.jpg" alt="Default Image" width="384" height="280">
    <?php endif; ?>
  </div>
  <div class="tag-date">
    <small><?php echo htmlspecialchars($row['course']); ?></small>
    <p><?php echo date('d/m/Y', strtotime($row['created_at'])); ?></p>
  </div>
  <div class="blog-title">
    <h3><?php echo htmlspecialchars($row['title']); ?></h3>
  </div>
  <a class="secondary-btn" href="<?php echo htmlspecialchars($row['slug']); ?>">
    <span>Read more</span>
    <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
    </svg>
  </a>
</div>
<?php endwhile; ?>
