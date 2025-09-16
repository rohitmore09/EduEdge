<?php
require_once 'api/config.php';

$order = "DESC";
if ($_POST['sort'] == 'oldest') {
    $order = "ASC";
}

$courseFilter = "";
if (!empty($_POST['course'])) {
    $courseFilter = " AND posts.course = '".$conn->real_escape_string($_POST['course'])."'";
}

$q = $conn->query("SELECT posts.*, categories.name AS category 
                   FROM posts 
                   LEFT JOIN categories ON posts.category_id = categories.id 
                   WHERE posts.status = 'published' AND posts.category_id = '4' $courseFilter
                   ORDER BY posts.created_at $order");

if ($q->num_rows === 0): ?>
  <p>No posts found.</p>
<?php endif; ?>

<?php while ($row = $q->fetch_assoc()): ?>
<a class="blogs" href="<?php echo $row['slug']; ?>">
  <div class="blog-img">
    <?php if (!empty($row['image'])): ?>
      <img src="<?php echo $base_url; ?>insights/admin/uploads/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['title']); ?>" width="384" height="280">
    <?php else: ?>
      <img src="<?php echo $base_url; ?>assets/imgs/blog/default-blog.jpg" alt="Default Image" width="384" height="280">
    <?php endif; ?>
    <small><?php echo htmlspecialchars($row['course']); ?></small>
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
  </div>
</a>
<?php endwhile; ?>
