<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {

include "db_conn.php";
include 'php/User.php';
$user = getUserById($_SESSION['id'], $conn);


 ?>
<!DOCTYPE html >
<html dir="rtl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>الصفحة الرئيسية للطالب</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
    <?php if ($user) { ?>
<div class="sidebar">
                <img src="upload/<?=$user['pp']?>"
    		     class="img-fluid rounded-circle">
				 <h3 class="name">اهلا  <?=$user['fname']?></h3>
              <a href="edit.php" target="_blank" rel="noopener noreferrer"> <h2>تعديل معلومات الحساب <i class="fa-solid fa-pen-to-square"></i></h2></a>  
			  <a href="logout.php" target="_blank" rel="noopener noreferrer"> <h2>تسجيل الخروح  <i class="fa-solid fa-arrow-right-from-bracket"></i></h2></a>	
			  <a href="index.html" target="_blank" rel="noopener noreferrer"><h2>العودة للصفحة الرئيسية <i class="fa-solid fa-house"></i></h2></a> 
		
</div>

<center>
    <!-- First Card -->
   
    <div class="card">
        <img class="lesson-image" src="images/Home  للصف الثالث الثانوي.png" alt="Lesson 1">
        <a href="3secondary-check.html" target="_blank" rel="noopener noreferrer">  <div class="lesson-name">لغة المانية : للصف الثالث الثانوي</div></a>
    </div>


    <!-- Second Card -->
    <div class="card">
        <img class="lesson-image" src="https://mrredaelfarouk.com/frontend/images/mirror-3.jpg" alt="Lesson 2">
        <div class="lesson-name">Lesson 2: Advanced Topics</div>
    </div>
</center>

</body>
    <?php }else { 
     header("Location: login.php");
     exit;
    } ?>
</body>
</html>

<?php }else {
	header("Location: login.php");
	exit;
} ?>