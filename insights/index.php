<?php
require_once 'api/config.php';

// Detect category slug from the URL
$uri = trim($_SERVER['REQUEST_URI'], '/');
$parts = explode('/', $uri);

// e.g., insights/blog/
$categorySlug = isset($parts[2]) ? $parts[2] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>EduEdge Pro | Resources</title>
  <?php include '../style_css.php'; ?>
</head>
<body>
  <?php include '../components/header.php'; ?>
  <div class="pt-space"></div>

  <section>
    <div class="container">
      <div class="hdng text-center">
        <h1 class="blue_mnhdng">Resources</h1>
      </div>

      <div class="blog-section">
        <form id="filterForm">
            <div class="blog-drops">
            <select name="sort" id="sort">
              <option value="">Sort By</option>
              <option value="latest">Latest</option>
              <option value="oldest">Oldest</option>
            </select>
            <select name="category" id="category">
              <option value="">Select Category</option>
              <?php
              $catQ = $conn->query("SELECT id, slug, name FROM categories");
              while ($cat = $catQ->fetch_assoc()):
              ?>
              <option
                value="<?php echo $cat['id']; ?>"
                data-slug="<?php echo htmlspecialchars($cat['slug']); ?>"
                <?php if ($categorySlug === $cat['slug']) echo 'selected'; ?>>
                <?php echo htmlspecialchars($cat['name']); ?>
              </option>
              <?php endwhile; ?>
            </select>
            <select name="course" id="course">
              <option value="">Select Course</option>
              <?php
              $courseQ = $conn->query("SELECT DISTINCT course FROM posts WHERE course != ''");
              while ($course = $courseQ->fetch_assoc()):
              ?>
              <option value="<?php echo htmlspecialchars($course['course']); ?>">
                <?php echo htmlspecialchars($course['course']); ?>
              </option>
              <?php endwhile; ?>
            </select>
          </form>
        </div>

        <div class="main-blogs"></div>

        <div class="text-center mt-4">
          <button id="loadMore" class="blogs-more">Load More</button>
        </div>
      </div>
    </div>
  </section>

  <?php include '../components/footer.php'; ?>
  <?php include '../style_js.php'; ?>

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    const filters = ['#sort', '#category', '#course'];
    let page = 1;

    function loadPosts(reset = false) {
      if (reset) {
        page = 1;
        document.querySelector('.main-blogs').innerHTML = '';
      }

      const params = new URLSearchParams();
      params.append('page', page);

      // Get slug from current URL
      const pathParts = window.location.pathname.split('/').filter(p => p);
      const categorySlug = pathParts[2] || '';

      if (categorySlug) {
        params.append('categorySlug', categorySlug);
      }

      filters.forEach(selector => {
        const val = document.querySelector(selector).value;
        if (val) {
          params.append(selector.replace('#', ''), val);
        }
      });

      fetch('/insights/fetch_posts.php?' + params.toString())
        .then(res => res.text())
        .then(data => {
          if (data.trim() === '' && page === 1) {
            document.querySelector('.main-blogs').innerHTML = '<p>No posts found.</p>';
            document.getElementById('loadMore').style.display = 'none';
          } else {
            document.querySelector('.main-blogs').insertAdjacentHTML('beforeend', data);
            if (data.trim() === '') {
              document.getElementById('loadMore').style.display = 'none';
            } else {
              document.getElementById('loadMore').style.display = 'inline-block';
            }
          }
        });
    }

    // Load first posts
    loadPosts(true);

    // Filter changes
    filters.forEach(selector => {
      document.querySelector(selector).addEventListener('change', function() {

        // Update URL when category changes
        if (selector === '#category') {
          const selectEl = document.querySelector('#category');
          const selectedOption = selectEl.options[selectEl.selectedIndex];
          const slug = selectedOption.getAttribute('data-slug');

          let newUrl = '/insights/';
          if (slug) {
            newUrl += slug + '/';
          }

          window.history.pushState({}, '', newUrl);
        }

        loadPosts(true);
      });
    });

    // Load more button
    document.getElementById('loadMore').addEventListener('click', function() {
      page++;
      loadPosts(false);
    });
  });
  </script>
</body>
</html>
