        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
  		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
        <title><?php echo $pageOpt['title']; ?></title>
        <!-- Font Loading -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900,100,200,600' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Pure Framework-->
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.sidr/2.1.0/stylesheets/jquery.sidr.dark.min.css">
        <!-- -->
        <?php if($pageOpt['cssIncludes']) { echo $pageOpt['cssIncludes']; } ?> 
        <!-- Main CSS File-->
        <link rel="stylesheet" href="assets/css/main.css?<?php echo time(); ?>">
