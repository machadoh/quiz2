<?php 

include 'register.php';
if($_POST)
{
	$post = $_POST;
	$n = $post['first'];
	$e = $post['last'];
	$a = $post['email'];
	var $person = new register($n, $e, $a);
	var $output = $person.produce_output();
}


?>

<!doctype html>
<html>
  <head>
    <title> Quiz 2 </title>
    <meta name ="author" content="Henrique Machado">
    <link rel="stylesheet" href="./CSS/style.css">
  </head>
  <body>
    <header>
      <nav>
	<h2>Sign up for Free Food</h2>
	<h3>Add personal Information</h3>
      </nav>
    </header>

   	<form method="post" action="">
		<p>First Name:</p>
		<input type="text" name="first"/>
		<p>Last Name:</p>
		<input type="text" name="last"/>
		<p>Email:</p>
		<input type="text" name="email"/>
		<input type="submit" value="Submit!"/>
	</form>
    <footer>
      <p id="character-entities">
	&copy; Henrique Machado 2017
      </p>  
    </footer>

  </body>
</html>