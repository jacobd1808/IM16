<?php 
  include_once "app/config/conn.php";
	
	$pageOpt = array(
		"title"			    =>	"Welcome", 
		'navName' 		  	=> 	"home", 
		'cssIncludes'	  	=>	" ", 
		"jsIncludes"	 	=>	" ",
	);

  // Example of how to call a Class Method

  //$user = new User($conn);
  //$newUser = $user->createUser($data);

?>
<!DOCTYPE html>
    <head>
		<?php include_once "app/views/meta.php";?>
    </head>
    <body>
      <?php include_once "app/views/header.php"; ?>
      <div class='view'> 
          All Set Up
      </div>
    	<?php include_once "app/views/scripts.php"; ?>
    </body>
</html>