<?php
require_once 'api/config.php';

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$limit = 3;
$offset = ($page - 1) * $limit;

$where = "WHERE posts.status = 'published' AND posts.category_id != 4";

$categorySlug = !empty($_GET['categorySlug']) ? $_GET['categorySlug'] : '';

if (!empty($categorySlug)) {
    // Resolve slug to category ID
    $stmt = $conn->prepare("SELECT id FROM categories WHERE slug = ?");
    $stmt->bind_param("s", $categorySlug);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows) {
        $cat = $result->fetch_assoc();
        $where .= " AND posts.category_id = '".intval($cat['id'])."'";
    }
}

// If a numeric category parameter is passed, it overrides categorySlug
if (!empty($_GET['category'])) {
    $where .= " AND posts.category_id = '".intval($_GET['category'])."'";
}
if (!empty($_GET['course'])) {
    $where .= " AND posts.course = '".$conn->real_escape_string($_GET['course'])."'";
}

$order = "ORDER BY posts.created_at DESC";
if (!empty($_GET['sort']) && $_GET['sort'] === 'oldest') {
    $order = "ORDER BY posts.created_at ASC";
}

$sql = "
  SELECT posts.*, categories.slug AS category
  FROM posts
  LEFT JOIN categories ON posts.category_id = categories.id
  $where
  $order
  LIMIT $limit OFFSET $offset
";

$q = $conn->query($sql);

if ($q->num_rows === 0) {
    // Return empty so JS shows "No posts found"
    exit;
}

while ($row = $q->fetch_assoc()): //echo "<pre>";print_r($row);exit;?>
<a class="blogs" href="/insights/<?php echo strtolower($row['category']); ?>/<?php echo htmlspecialchars($row['slug']); ?>">
  <div class="blog-img">
    <?php if (!empty($row['image'])): ?>
      <img src="<?php echo $admin_url; ?>uploads/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['title']); ?>" width="384" height="280">
    <?php else: ?>
      <img src="<?php echo $admin_url; ?>assets/imgs/blog/default-blog.jpg" alt="Default Image" width="384" height="280">
    <?php endif; ?>
    <small><?php echo htmlspecialchars($row['category']); ?></small>
  </div>
  <div class="tag-date">
    <small><?php echo htmlspecialchars($row['course']); ?></small>
    <p><?php echo date('d/m/Y', strtotime($row['created_at'])); ?></p>
  </div>
  <div class="blog-title">
    <h3><?php echo htmlspecialchars($row['title']); ?></h3>
  </div>
  <div class="secondary-btn">
    <span>Read more</span>
    <svg width="10" height="15" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M1 1.5L9 9.5L1 17.5" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
    </svg>
  </div>
</a>
<?php endwhile; ?>
