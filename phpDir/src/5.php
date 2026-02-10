<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<section class="content">

  <aside class="col-xs-4">
    <?php Navigation();?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">


    <?php 


/* Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */
//Step1:
echo "<h2>Math function (sqrt): " . sqrt(64) . "</h2>";//sqrt(64) → корен квадратен(square root, )

echo "<hr>";

//Step 2:
$text = "I love PHP";
echo "<h2>String function (strlen): " . strlen($text) . "</h2>";//strlen($text) → брои символите в текста

echo "<hr>";

//Step 3:
$array = array(10, 20, 30, 40);
echo "<h2>Array function (count): " . count($array) . "</h2>";

//--------------Martin's code -----------------
// use a pre-built math function and echo it
echo "The square root of 100 is ".sqrt(100);
echo "<br>";

// use a pre-built string function and echo it
echo "The length of the string 'Hello World' is ".strlen("Hello World");
echo "<br>";

// use a pre-built Array function and echo it
$array = array(1, 2, 3, 4, 5);
echo "The array is ".implode(", ", $array);
echo "<br>";
echo "The sum of the array is ".array_sum($array);
echo "<br>";
 
	
?>





  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>