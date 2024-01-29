<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Add Result - RHABHIT Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<?php
require_once("includes/header.php");
?>

<h1 class="mb-3 ms-2">
    Add New Result
</h1>

<form action="cores/add_result_core.php" method="POST" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            <div class="form-floating col-md-12 mb-3">
                <input type="text" class="form-control" name="title" id="floatingInput" placeholder="type title here">
                <label for="floatingInput" class="ps-4">Title</label>
            </div>

            <div class="col-md-12 mb-3">

                <input class="form-control" accept="application/pdf,image/*" name="inpfile" type="file" id="formFile">
            </div>

            <div class="d-grid gap-2 col-12 mx-auto">
                <button type="submit" name="add-result-btn" class="btn btn-primary" type="button">Add Result</button>
            </div>
        </div>
    </div>
</form>



<?php
require_once("includes/footer.php");
require_once("includes/scripts.php");
?>