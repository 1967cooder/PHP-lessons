<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">
	
	
	<?php  

	/*  Step 1 -Make a variable with some text as value

		Step 2 - Use crypt() function to encrypt it

		Step 3 - Assign the crypt result to a variable

		Step 4 - echo the variable

	*/
	// Step 1: 
$text = "Hello PHP";

// Step 2 + 3: 
$encrypted = crypt($text, '$6$rounds=5000$mysalt$');

// Step 4: показване
echo "<p>Encrypted text: " . $encrypted . "</p>";
	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>