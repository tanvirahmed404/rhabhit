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
    <title>Edit Video - RHABHIT Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>


<?php
require_once("includes/header.php");
require_once("message.php");

$id=$_REQUEST["id"];

$query="SELECT * FROM videos WHERE video_id='$id'";
$run=mysqli_query($con,$query) or die("Error");
$count=mysqli_num_rows($run);
if($count>0){
    while($getData=mysqli_fetch_array($run)){
      $id=$getData["video_id"];
      $title=$getData["title"];
      $link=$getData["link"];
    }
}

?>
<h1 class="ms-2 mb-3"> Edit Video</h1>

<form action="cores/edit_video_core.php" method="POST">
    <div class="container">
        <div class="row">
            <div class="form-floating col-md-12 mb-3">
                <input required type="text" name="title" class="form-control" id="floatingInput"
                    placeholder="Enter Title Here" value="<?php echo $title ?>">
                <label for="floatingInput" class="ps-4">Title</label>
            </div>

            <div class="form-floating col-md-12 mb-3">
                <input required type="text" name="link" class="form-control" id="floatingInput"
                    placeholder="Enter link Here" value="<?php echo $link; ?>">
                <label for="floatingInput" class="ps-4">Video link</label>
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">


            <div class="d-grid gap-2 col-12 mx-auto">
                <button type="submit" name="edit-video-btn" class="btn btn-primary" type="button">Edit
                    Video</button>
            </div>
        </div>
    </div>
</form>

<?php
require_once("includes/footer.php");
require_once("includes/scripts.php");
?>