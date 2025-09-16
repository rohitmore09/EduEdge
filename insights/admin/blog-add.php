<?php require_once 'auth.php'; ?>
<?php require_once '../api/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Add Blog</title>

    <!-- Styles -->
    <link href="../assets/admin/css/sb-admin-2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/admin/css/custom.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">
</head>
<body>
<?php include 'topbar.php'; ?>

<div class="container-fluid pt-5">
    <a href="blog-list.php" class="btn btn-secondary mb-3">Back to Blog List</a>
    <h1 class="h3 mb-4">Add Blog</h1>

    <form id="blogForm" enctype="multipart/form-data" novalidate>
        <div class="form-group">
            <label>Title *</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="form-group">
            <label>Content *</label>
            <textarea name="content" id="contentEditor" class="form-control" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label>Category *</label>
            <select name="category_id" class="form-control">
                <option value="">-- Select --</option>
                <?php
                $cats = $conn->query("SELECT * FROM categories");
                while ($cat = $cats->fetch_assoc()) {
                    echo "<option value='{$cat['id']}'>{$cat['name']}</option>";
                }
                ?>
            </select>
        </div>

        <?php $courses = ['Gmat', 'GRE', 'GREt', 'GREd']; ?>
        <div class="form-group">
            <label>Select Course *</label>
            <select name="course" class="form-control">
                <option value="">-- Select --</option>
                <?php foreach ($courses as $course): ?>
                    <option value="<?= htmlspecialchars($course) ?>"><?= htmlspecialchars($course) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label>Tags (Press Enter for New Tag)</label>
            <input name="tags" id="tagsInput" class="form-control">
        </div>

        <div class="form-group">
            <label>Image *</label>
            <input type="file" name="image" id="image" class="form-control">
            <div id="imageError" class="invalid-feedback d-block"></div>
        </div>

        <div class="form-group">
            <label>Publish Date *</label>
            <input type="date" name="publish_date" class="form-control">
        </div>

        <div class="form-group">
            <label>Status *</label>
            <select name="status" class="form-control">
                <option value="draft">Draft</option>
                <option value="published">Published</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Add</button>
    </form>
</div>

<!-- Scripts -->
<script src="../assets/js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>

<script>
$(document).ready(function () {
    // Initialize Summernote
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

    // Initialize Tagify
    const tagInput = document.querySelector('#tagsInput');
    const tagify = new Tagify(tagInput);

    const $form = $('#blogForm');

    const showError = ($el, message) => {
        $el.addClass('is-invalid');
        if ($el.next('.invalid-feedback').length === 0) {
            $el.after(`<div class="invalid-feedback d-block">${message}</div>`);
        }
    };

    const clearErrors = () => {
        $('.invalid-feedback').remove();
        $('.is-invalid').removeClass('is-invalid');
    };

    $form.on('submit', function (e) {
        e.preventDefault();
        clearErrors();

        const formData = new FormData(this);
        const content = $('#contentEditor').summernote('code');
        const tags = tagify.value.map(tag => tag.value).join(",");

        let hasError = false;

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

        const imageInput = $('#image')[0];
        const imageError = $('#imageError');
        imageError.text('');
        
        
        if (imageInput.files.length === 0) {
            imageError.text("Image is required.");
            hasError = true;
        } else {
            const file = imageInput.files[0];
            const allowed = ['image/jpeg', 'image/png', 'image/jpg'];

            if (!allowed.includes(file.type)) {
                imageError.text("Only JPG, JPEG, and PNG formats are allowed.");
                hasError = true;
            } else if (file.size > 2 * 1024 * 1024) {
                console.log(file);
                imageError.text("Image must be smaller than 2MB.");
                hasError = true;
            }
        }


        if (hasError) return;

        formData.set("content", content);
        formData.set("tags", tags);
        formData.append("action", "add");

        $.ajax({
            url: "../ajax/blog-action.php",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: () => $form.find('button[type=submit]').prop('disabled', true),
            success: function (res) {
                alert(res);
                location.href = "blog-list.php";
            },
            error: function () {
                alert("An error occurred while submitting the form.");
            },
            complete: () => $form.find('button[type=submit]').prop('disabled', false)
        });
    });
});
</script>
</body>
</html>
