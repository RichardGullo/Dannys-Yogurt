<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container main-container border" style="min-height:100vh;">

<!--Nav -->
<nav class="navbar navbar-expand-sm navbar-light">
    <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_file_uri('images/logo.svg') ?>"</a>
    <a id="logo" href="index.html">Danny's Yogurt</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
      <div class="navbar-nav">
        <a class="nav-link <?php if(is_page('home')) echo "active" ?>" href="<?php echo site_url(); ?>">Home</a>
        <a class="nav-link <?php if(is_page('contact-us')) echo "active" ?>" href="<?php echo site_url('/contact-us'); ?>">Contact</a>
        <a class="nav-link <?php if(is_page('about-us')) echo "active" ?>" href="<?php echo site_url('/about-us'); ?>">About</a>
      </div>
    </div>
  </nav>
