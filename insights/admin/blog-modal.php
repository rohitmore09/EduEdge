<div class="modal" id="blogModal">
  <form id="blogForm" enctype="multipart/form-data">
    <input type="hidden" name="slug" id="blogSlug">
    <input type="text" name="title" required placeholder="Title"><br>
    <textarea name="content" required placeholder="Content"></textarea><br>
    <select name="category_id" required>
      <option value="">--Category--</option>
      <?php
      $cats = $conn->query("SELECT * FROM categories");
      while ($cat = $cats->fetch_assoc()) {
          echo "<option value='{$cat['id']}'>{$cat['name']}</option>";
      }
      ?>
    </select><br>
    <input type="file" name="image"><br>
    <select name="status">
      <option value="draft">Draft</option>
      <option value="published">Published</option>
    </select><br>
    <button type="submit">Save</button>
  </form>
</div>
