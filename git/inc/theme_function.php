<?php

function wasi_customizar_register($wp_customize){

  //Header Area Function
  $wp_customize->add_section('wasi_header_area', array(
    'title' =>__('Header Area', 'gitone'),
    'description' => 'If you interested to update your header area, you can do it here.'
  ));

  $wp_customize->add_setting('wasi_logo', array(
    'default' => get_bloginfo('template_directory') . '/img/logo.png',
  ));

  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'wasi_logo', array(
    'label' => 'Logo Upload',
    'description' => 'If you interested to change or update your logo you can do it.',
    'setting' => 'wasi_logo',
    'section' => 'wasi_header_area',
  ) ));

  // Menu Position Option
  $wp_customize->add_section('wasi_menu_option', array(
    'title' => __('Menu Position Option', 'gitone'),
    'description' => 'If you interested to change your menu position you can do it.'
  ));

  $wp_customize->add_setting('wasi_menu_position', array(
    'default' => 'right_menu',
  ));

  $wp_customize-> add_control('wasi_menu_position', array(
    'label' => 'Menu Position',
    'description' => 'Select your menu position',
    'setting' => 'wasi_menu_position',
    'section' => 'wasi_menu_option',
    'type' => 'radio',
    'choices' => array(
      'left_menu' => 'Left Menu',
      'right_menu' => 'Right Menu',
      'center_menu' => 'Center Menu',
    ),
  ));


  // Footer Option
  $wp_customize->add_section('wasi_footer_option', array(
    'title' => __('Footer Option', 'gitone'),
    'description' => 'If you interested to change or update your footer settings you can do it.'
  ));

  $wp_customize->add_setting('wasi_copyright_section', array(
    'default' => '&copy; Copyright 2022 | Ruhul Amin BD',
  ));

  $wp_customize-> add_control('wasi_copyright_section', array(
    'label' => 'Copyright Text',
    'description' => 'If need you can update your copyright text from here',
    'setting' => 'wasi_copyright_section',
    'section' => 'wasi_footer_option',
  ));

}

add_action('customize_register', 'wasi_customizar_register');
