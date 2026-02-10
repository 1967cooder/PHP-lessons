<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>


  </aside>
  <!--SIDEBAR-->

  <article class="main-content col-xs-8">


    <?php

		/*  Step 1: Use the Make a class called Dog

		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 4: Make a method named ShowAll that echos all the properties

		Step 5: Instantiate the class / create object and call it pitbull

Step 6: Call the method ShowAll*/

//Step 1:
class Dog {
  //Step2: properties
  public $eyeColor;
  public $noseColor;
  public $furColor;

   // Конструктор (за по-удобно създаване на обекта)
   public function __construct($eye, $nose, $fur) {
    $this->eyeColor = $eye;
    $this->noseColor = $nose;
    $this->furColor = $fur;

   }
   //Step 4:
   public function ShowAll() {
    echo "<h3>Dog Properties:</h3>";
    echo "Eye Color: " . $this->eyeColor . "<br>"; 
    echo "Nose Color: " . $this->noseColor . "<br>"; 
    echo "Fur Color: " . $this->furColor . "<br>"; 
   }

}
//Step 5:
$pitbull = new Dog("Brown", "Black", "Light Brown");

//Step 6:
$pitbull->ShowAll();

		?>





  </article>
  <!--MAIN CONTENT-->

  <?php include "includes/footer.php"; ?>