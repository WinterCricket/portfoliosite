

 <h1><?php bloginfo("name" ); ?></h1>
 <p><?php bloginfo("description"); ?></p>

 This would be a lame duck.
<?php 
	function greet($name, $color){
		echo "<h2>Hello, my name is $name and my favorite color is $color.</h2>";
	}
	greet("Bob", "runny yellow");
	greet("Alice", "hard purple");
 ?>

 <?php 

 $names = array("Dogman", "Catman", "Batman", "Catamaranman", "Atmanman");
 
 $count = 1;

 while($count < 54) {
 	echo "<li> $count </li>";
 	$count++;

 }

  ?>
 