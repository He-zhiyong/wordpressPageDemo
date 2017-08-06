<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link href="<?php echo get_template_directory_uri()?>/css/smallslider.css" rel="stylesheet" type="text/css" />
<meta name="keywords" content="党委办公室，校长办公室，党办校办" />
<meta name="description" content="党委办公室" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>杭电党校办</title>
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/js/jquery.smallslider.js"></script>
<script type="text/javascript">
$(document).ready(function () {   
    $('#exp2').smallslider({
        switchEffect: 'ease',
        switchMode: 'click',
        showText: false
    });
});
</script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="container">
        
            
        