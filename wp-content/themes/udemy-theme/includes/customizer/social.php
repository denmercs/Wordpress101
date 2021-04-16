<?php 
    function ju_social_customizer_section($wp_customize) {
        // settings
        $wp_customize->add_setting('ju_facebook_handle', [
            'default' => ''
       ]);
      
       $wp_customize->add_setting('ju_twitter_handle', [
            'default' => ''
       ]);

        $wp_customize->add_section('ju_social_section', [
            'title' => __('Udemy Social Settings', 'udemy'),
            'priority' => 30,
            'panel' => 'udemy'
       ]);
        
       // control
       $wp_customize->add_control(new WP_Customize_Control(
           $wp_customize,
           'ju_social_facebook_input',
           array(
               'label' => __('Facebook handle', 'udemy'),
               'section' => 'ju_social_section',
               'settings' => 'ju_facebook_handle',
           )
       ));
       $wp_customize->add_control(new WP_Customize_Control(
           $wp_customize,
           'ju_social_twitter_input',
           array(
               'label' => __('Twitter handle', 'udemy'),
               'section' => 'ju_social_section',
               'settings' => 'ju_twitter_handle',
           )
       ));
    }
?>