<?php 
  include_once "app/config/conn.php";
	
	$pageOpt = array(
		"title"			    =>	"IM16 . Coming Soon", 
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
          <div id="clockdiv">
            <div class='countdown-ele'>
              <span class="countdown-days countdown-big"></span>
              <div class="countdown-small">Days</div>
            </div>
            <div class='countdown-ele'>
              <span class="countdown-hours countdown-big"></span>
              <div class="countdown-small">Hours</div>
            </div>
            <div class='countdown-ele'>
              <span class="countdown-minutes countdown-big"></span>
              <div class="countdown-small">Minutes</div>
            </div>
            <div class='countdown-ele'>
              <span class="countdown-seconds countdown-big"></span>
              <div class="countdown-small">Seconds</div>
            </div>
            <div class='clear'></div>
          </div>
      </div>
    	<?php include_once "app/views/scripts.php"; ?>
    </body>
</html>