<?php
add_action( 'init', function() {
  add_theme_support('title_tag');
  add_theme_support('post_thumbnails');

  register_nav_menus([
    'global_nav' => 'グローバルナビゲーション',
  ]);
});