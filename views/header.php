<!doctype html>
<html>
<head>
	<title>Test</title>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css" />
        <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
</head>
<body>

<?php Session::init(); ?>    

<div class="wrapper">

        
    
<div class="header">
    
    <?php if (Session::get('loggedIn') == false):?>
	<a href="<?php echo URL; ?>index">Home</a>
	<a href="<?php echo URL; ?>help">Help</a>
	<a href="<?php echo URL; ?>login">Login</a>
    <?php endif; ?>     
        
     <?php if (Session::get('loggedIn') == true):?>
        <a href="<?php echo URL; ?>index">Home</a>
	<a href="<?php echo URL; ?>admin_page">Admin</a>
        <a href="<?php echo URL; ?>article_creation">Create</a>
        <a href="<?php echo URL; ?>admin_page/logout">Logout</a>    
    <?php endif; ?>     
        
</div>

<div id="content">
	
	