<!DOCTYPE html>
<html>
<head>
  <meta charset="<?php bloginfo('chartset');?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php bloginfo('name');?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
  <header class="site-header">
  <h1><a href="<?php echo home_url();?>"><?php bloginfo("name");?> </a></h1>
  <h5><?php bloginfo("description") ?></h5>
  
  </header>
