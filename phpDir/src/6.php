<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>

  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">


    <?php

		/*  Step1: Make a form that submits one value to POST super global


 */

// Проверка дали формата е изпратена

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Вземаме стойността от input полето
  $value = $_POST['myValue'];
  echo "<h2>YOU submitted: " . htmlspecialchars($value) . "</h2>";
}

		?>
<!-- Step1: Форма, която изпраща стойност чрез POST -->

<!-- 
method="post" → изпраща данните чрез POST супер глобалната променлива

$_POST['myValue'] → съдържа стойността от полето myValue

htmlspecialchars() → предпазва от потенциални HTML/JS атаки

Когато натиснеш Submit, стойността се показва на същата страница "You submitted: [твоят текст]" -->
 <form method="post" action="">
  <lable for="myValue">Enter something:</lable>
  <input type="text" name="myValue" id="myValue" required>
  <button type="submit">Submit</button>
</form>

  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>