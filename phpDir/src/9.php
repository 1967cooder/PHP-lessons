<?php // Step 3: Стартираме session преди HTML
session_start();
$_SESSION['message'] = "Session is active";

// Step 2: Създаваме cookie преди HTML
setcookie("myCookie", "HelloCookie", time() + (7 * 24 * 60 * 60));

// Вече включваме header.php, HTML output е безопасен
include "functions.php";
include "includes/header.php";
?>


<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">



    <?php

		/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
  
  //Step 1
  echo '<a href="9.php?name=Lola&age=25">Click Here</a><br><br>';
  // Проверка дали има GET параметри
  if (isset($_GET['name']) && isset($_GET['age'])) {
    echo "Name: " . $_GET['name'] . "<br>";
    echo "Age: " . $_GET['age'] . "<br>";
  }
  // Показване на session
  echo "<br>Session value: " . $_SESSION['message'];

  // Показване на cookie (ако вече съществува)
  if (isset($_COOKIE['myCookie'])) {
    echo "<br>Cookie value: " . $_COOKIE['myCookie'];
  }

		?>





  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>