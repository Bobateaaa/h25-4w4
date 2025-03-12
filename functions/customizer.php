<?php
function theme_tp_customize_register($wp_customize) {
    // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
    // Création d'une nouvelle section dans le customizer
    $wp_customize->add_section('hero_section', array(
      'title' => __('Section Hero', 'theme_tp'),
      'priority' => 30,
  ));
  //ajout de la donnée
  $wp_customize->add_setting('hero_auteur', array(
    'default' => __('Matilda Kang', 'theme_tp'),
    'sanitize_callback' => 'sanitize_text_field'
  ));
  //ajout du contrôle de la donnée
  $wp_customize->add_control('hero_auteur', array(
    'label' => __('Auteur', 'theme_tp'),
    'section' => 'hero_section',
    'type' => 'text',
  ));
  // ajout de la donnée image en background
  $wp_customize->add_setting('hero_background', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  // ajout du contrôle de la donnée
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
    'label' => __('Image en arrière plan', 'theme_tp'),
    'section' => 'hero_section',
  )));
  // ajout de la donnée du bouton CTA
  $wp_customize->add_setting('hero_cta_text', array(
    'default' => __('Learn More', 'theme_tp'),
    'sanitize_callback' => 'sanitize_text_field',
  ));
  // ajout du contrôle de la donnée
  $wp_customize->add_control('hero_cta_text', array(
    'label' => __('CTA Button Text', 'theme_tp'),
    'section' => 'hero_section',
    'type' => 'text',
  ));
  // Lien du bouton CTA
  $wp_customize->add_setting('hero_cta_link', array(
    'default' => '#',
    'sanitize_callback' => 'esc_url_raw',
  ));
  // ajout du contrôle de la donnée
  $wp_customize->add_control('hero_cta_link', array(
    'label' => __('CTA Button Link', 'theme_tp'),
    'section' => 'hero_section',
    'type' => 'url',
  ));
  // Couleur principale
  $wp_customize->add_setting('main_color', array(
    'default'           => '#ff0000', // Valeur par défaut : rouge
    'sanitize_callback' => 'sanitize_hex_color',
  ));
  // ajout du contrôle de la donnée
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'main_color', array(
    'label'   => __('Couleur principale', 'theme_tp'),
    'section' => 'contact_section',
  )));
  
  // Nouvelle section pour les contacts
  $wp_customize->add_section('contact_section', array(
    'title'    => __('Informations de contact', 'theme_tp'),
    'priority' => 35,
  ));
  
  // Customizer pour la couleure principale
  $wp_customize->add_setting('main_color', array(
    'default'           => '#ff0000', // Rouge par défaut
    'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'main_color', array(
    'label'   => __('Couleur principale', 'theme_tp'),
    'section' => 'contact_section',
  )));
  
  // Customizer pour slogan/message
  $wp_customize->add_setting('hero_text', array(
    'default'           => __('Notre mission est de...', 'theme_tp'),
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('hero_text', array(
    'label'   => __('Mission', 'theme_tp'),
    'section' => 'contact_section',
    'type'    => 'textarea',
  ));
  
  // Customizer pour adresse
  $wp_customize->add_setting('contact_address', array(
    'default'           => __('5800 Sherbrooke-est - Montréal (Québec) H1X 2A2', 'theme_tp'),
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('contact_address', array(
    'label'   => __('Adresse', 'theme_tp'),
    'section' => 'contact_section',
    'type'    => 'text',
  ));
  
  // Customizer pour téléphone
  $wp_customize->add_setting('contact_phone', array(
    'default'           => __('514-254-7131', 'theme_tp'),
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('contact_phone', array(
    'label'   => __('Téléphone', 'theme_tp'),
    'section' => 'contact_section',
    'type'    => 'text',
  ));
  }
  


add_action('customize_register', 'theme_tp_customize_register');
?>