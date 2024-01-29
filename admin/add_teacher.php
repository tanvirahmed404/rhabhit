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
    <title>Add Teacher - RHABHIT Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>


<?php
require_once("includes/header.php");
require_once("message.php");
?>
<h1 class="ms-2 mb-3"> Add Teacher</h1>

<form action="cores/add_teacher_core.php" method="POST">
    <div class="container">
        <div class="row">
            <div class="form-floating col-md-12 mb-3">
                <input name="tName" type="text" class="form-control" id="floatingInput"
                    placeholder="Enter Teacher Name Here">
                <label for="floatingInput" class="ps-4">Name</label>
            </div>

            <div class="form-floating col-md-12 mb-3">
                <input name="designation" type="text" class="form-control" id="floatingInput"
                    placeholder="Enter Designation Here">
                <label for="floatingInput" class="ps-4">Designation</label>
            </div>

            <div class="form-floating col-md-12 mb-3">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="Enter Email Here">
                <label for="floatingInput" class="ps-4">Email</label>
            </div>



            <div class="d-grid gap-2 col-12 mx-auto">
                <button type="submit" class="btn btn-primary" type="button">Add Teacher</button>
            </div>
        </div>
    </div>
</form>

<?php
require_once("includes/footer.php");
require_once("includes/scripts.php");
?>