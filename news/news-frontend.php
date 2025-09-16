<?php
require_once 'api/config.php';

// Default query (initial load)
$q = $conn->query("SELECT posts.*, categories.name AS category 
                   FROM posts 
                   LEFT JOIN categories ON posts.category_id = categories.id 
                   WHERE posts.status = 'published' AND posts.category_id = '4' 
                   ORDER BY posts.created_at DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EduEdge Pro | News</title>
  <?php include '../style_css.php'; ?>
</head>
<body>
  <?php include '../components/header.php'; ?>

  <div class="pt-space"></div>

  <!-- Breadcrumb -->
  <div class="breadcrumb">
    <div class="container">
      <ul class="breadcrumb-item">
        <li>
          <a href="<?php echo $base_url; ?>">Home</a>
          <img src="<?php echo $base_url; ?>assets/imgs/logo/righticon_green.svg" alt="Icon" class="spcbtwn">
        </li>
        <li><a>News</a></li>
      </ul>
    </div>
  </div>

  <!-- Section -->
  <section>
    <div class="container">
      <div class="hdng text-center" data-aos="fade-up">
        <h1 class="blue_mnhdng">News</h1>
      </div>

      <div class="blog-section">
        <!-- Dropdowns -->
        <div class="blog-drops">
          <select id="sort" name="sort">
            <option value="">Sort By</option>
            <option value="latest">Latest</option>
            <option value="oldest">Oldest</option>
          </select>

          <select id="course" name="course">
            <option value="">Select Course</option>
            <?php
            $courses = $conn->query("SELECT DISTINCT course FROM posts WHERE course != ''");
            while ($course = $courses->fetch_assoc()):
            ?>
              <option value="<?php echo htmlspecialchars($course['course']); ?>">
                <?php echo htmlspecialchars($course['course']); ?>
              </option>
            <?php endwhile; ?>
          </select>
        </div>

        <!-- Blogs Container -->
        <div class="main-blogs" id="blog-container">
          <?php while ($row = $q->fetch_assoc()): ?>
            <div class="blogs">
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
              <a class="secondary-btn" href="<?php echo $row['slug']; ?>">
                <span>Read more</span>
              </a>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </section>

  <?php include '../components/footer.php'; ?>
  <?php include '../style_js.php'; ?>

  <!-- AJAX Script -->
  <script>
  document.addEventListener("DOMContentLoaded", function() {
    const sortSelect = document.getElementById("sort");
    const courseSelect = document.getElementById("course");
    const blogContainer = document.getElementById("blog-container");

    function fetchPosts() {
      const sort = sortSelect.value;
      const course = courseSelect.value;

      const formData = new FormData();
      formData.append("sort", sort);
      formData.append("course", course);

      blogContainer.innerHTML = "<p>Loading...</p>";

      fetch("fetch_posts.php", {
        method: "POST",
        body: formData
      })
      .then(response => response.text())
      .then(html => {
        blogContainer.innerHTML = html;
      })
      .catch(error => {
        console.error("Error:", error);
        blogContainer.innerHTML = "<p>Error loading posts.</p>";
      });
    }

    sortSelect.addEventListener("change", fetchPosts);
    courseSelect.addEventListener("change", fetchPosts);
  });
  </script>
</body>
</html>
