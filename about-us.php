<?php /* Template Name: About Us Template*/ ?>

<?php get_header(); ?>

<?php 
    //load hero
    include "template-blocks/full-sized-hero-block.php"; 
?>

<?php 
    include "template-blocks/left-aligned-image-text-block.php"; 
?>

<?php 
    include "template-blocks/plain-text-box-general-block.php"; 
?>

<?php 
    include "template-blocks/right-aligned-image-text-block.php"; 
?>

<?php 
    //load news feed
    include "template-blocks/our-news-feed-block.php"; 
?>

<?php 
    //load info cta
    include "template-blocks/info-cta-box-block.php"; 
?>

<?php   
    //load newsletter
    include "template-blocks/newsletter-block.php"; 
?>

<?php get_footer(); ?>