<?php
require_once '../api/config.php';
require_once 'auth.php';

$stmt = $conn->prepare("SELECT posts.*, categories.name AS category FROM posts LEFT JOIN categories ON posts.category_id = categories.id ORDER BY posts.id DESC");
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Blog List</title>
    <link href="../assets/admin/css/sb-admin-2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/admin/css/newdatatable.css" />
    <link rel="stylesheet" type="text/css" href="../assets/admin/css/custom.css" />
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
</head>
<body id="page-top">
<div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <?php include 'topbar.php'; ?>
            <div class="container-fluid pt-5">
                <a href="blog-add.php" style="float:right;" class="btn btn-success">Add New Blog</a>
                <h1 class="h3 mb-2 text-gray-800">Blog List</h1>
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="99%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    while ($row = $result->fetch_assoc()) {
                                        $created_at = date_format(date_create($row['created_at']), "d-m-Y ");
                                        echo "<tr>
                                            <td>{$i}</td>
                                            <td>{$row['title']}</td>
                                            <td>{$row['category']}</td>
                                            <td>{$row['status']}</td>
                                            <td>{$created_at}</td>
                                            <td>
                                                <a href='blog-edit.php?slug={$row['slug']}' class='btn btn-sm btn-primary'>Edit</a>
                                                <button class='btn btn-sm btn-danger deleteBtn' data-slug='{$row['slug']}'>Delete</button>
                                            </td>
                                        </tr>";
                                        $i++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../assets/js/jquery.min.js?v3.4.1"></script>
<script src="../assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/admin/js/newdatatable.js"></script>
<script>
    $('#dataTable').dataTable({
        dom: 'Bfrtip',
        "aLengthMenu": [[25, 100, 200], [25, 100, 200, "All"]],
        //"buttons": ['csv', 'excel']
        buttons: []
    });
</script>
<script>
$(document).on('click', '.deleteBtn', function () {
    if (!confirm('Are you sure you want to delete this blog post?')) return;

    const slug = $(this).data('slug');

    $.ajax({
        url: '../ajax/blog-action.php',
        type: 'POST',
        data: {
            action: 'delete',
            slug: slug
        },
        success: function (res) {
            alert(res);
            location.reload(); // Refresh the list after delete
        },
        error: function () {
            alert('Something went wrong while deleting.');
        }
    });
});
</script>

</body>
</html>