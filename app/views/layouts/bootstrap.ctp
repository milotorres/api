<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title><?php echo $core_configuracion['CoreConfiguracion']['nombre_aplicacion']?></title>
        <meta name="description" content="ModulApp">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href=<?php echo $html->url('/files/proui/')?>"img/favicon.ico">
        <link rel="apple-touch-icon" href=<?php echo $html->url('/files/proui/')?>"img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href=<?php echo $html->url('/files/proui/')?>"img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href=<?php echo $html->url('/files/proui/')?>"img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href=<?php echo $html->url('/files/proui/')?>"img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href=<?php echo $html->url('/files/proui/')?>"img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href=<?php echo $html->url('/files/proui/')?>"img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href=<?php echo $html->url('/files/proui/')?>"img/icon152.png" sizes="152x152">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
		<link href="https://fonts.googleapis.com/css?family=Encode+Sans" rel="stylesheet"> 
        <link rel="stylesheet" href="<?php echo $html->url('/files/proui/')?>css/bootstrap.min.css">

        <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
        <script src="<?php echo $html->url('/files/proui/')?>js/vendor/modernizr-2.7.1-respond-1.4.2.min.js"></script>
		
		<!-- Remember to include excanvas for IE8 chart support -->
        <!--[if IE 8]><script src="<?php echo $html->url('/files/proui/')?>js/helpers/excanvas.min.js"></script><![endif]-->
		
		<!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="<?php echo $html->url('/files/proui/')?>js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
        <script src="<?php echo $html->url('/files/proui/')?>js/vendor/bootstrap.min.js"></script>
        
    </head>
    <body>
		<?php echo $content_for_layout ?>
    </body>
</html>