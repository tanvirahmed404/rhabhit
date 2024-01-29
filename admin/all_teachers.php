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
    <title>All Notice - RHABHIT Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<?php
require_once("includes/header.php");
require_once("message.php");
?>


<h1 class="ms-2 mb-3"> All Teachers & Stuff</h1>

<table class="table" style="text-align:center">
    <thead class="table-dark">
        <tr>
            <th>Serial</th>
            <th>DB ID</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php


$limit=8;

if(isset($_REQUEST["page"])){
    $page_number=$_REQUEST["page"];
}else{
    $page_number=1;
}

$offset=($page_number - 1) * $limit;


$showUser="SELECT * FROM teachers LIMIT $offset,$limit";
$runShowUserQuery=mysqli_query($con,$showUser);
if($runShowUserQuery==true){
    $serial=1;
    if(mysqli_num_rows($runShowUserQuery)>0){
        while($data=mysqli_fetch_array($runShowUserQuery)){
        
?>

        <tr>
            <td><?php echo $serial++; ?></td>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['designation']; ?></td>
            <td><?php echo $data['email']; ?>
            </td>
            <td><a href="edit_teacher.php?id=<?php echo $data["id"]; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
            </td>
            <td><a onclick="return confirm('Are you Sure?');"
                    href="cores/delete_teacher_core.php?id=<?php echo $data["id"]; ?>"><i
                        class="fa-solid fa-trash"></i></a>
            </td>

        </tr>

        <?php
        }
        }else{
            $_SESSION["message"] = "No Data Found";
        }
    }else{
        $_SESSION["message"] = "Query Error";
    }
?>
    </tbody>
</table>

<!-- pagination-start -->


<?php


$showNotice1="SELECT * FROM teachers";
$runshowNoticeQuery1=mysqli_query($con,$showNotice1);
if(mysqli_num_rows($runshowNoticeQuery1)>0){
    $total_data=mysqli_num_rows($runshowNoticeQuery1);
    $total_page=ceil($total_data/$limit);

?>
<ul class="pagination col-md-12 d-flex justify-content-center"">

<?php
if($page_number>1){
?>
<li class=" page-item">
    <a class="page-link" href="./all_teachers.php?page=<?php echo ($page_number-1); ?>">Previous</a>
    </li>
    <?php
}
?>
    <?php

    for($i=1;$i<=$total_page;$i++){
if($i==$page_number){
    $active="active";
}else{
    $active='';
}

?>
    <li class=" page-item <?php echo $active; ?>"><a class="page-link"
            href="./all_teachers.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
    </li>

    <?php
    }


?>
    <?php
if($total_page>$page_number){
?>
    <li class="page-item">
        <a class="page-link" href="./all_teachers.php?page=<?php echo ($page_number+1); ?>">Next</a>
    </li>
    <?php
}
?>

</ul>
<?php
}
?>




<?php
require_once("includes/footer.php");
require_once("includes/scripts.php");
?>