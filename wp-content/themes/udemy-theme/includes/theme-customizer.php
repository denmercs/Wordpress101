<?php
    function ju_customize_register($wp_customize) {

        // echo '<pre>';
        // var_dump($wp_customize);
        // echo '</pre>';

        $wp_customize->get_section('title_tagline')->title = 'General';

        $wp_customize->add_panel('udemy', [
            'title' => __('Udemy', 'udemy'),
            'description' => '<p>Udemy Theme Settings</p>',
            'priority' => 160
        ]);

        /**
         * 1. Setting - a value that is saved in the database
         * 2. Section - a way to gruop input fields together
         * 3. Controller - an input field that is used placed inside a section  and modifies one setting.
         */

        ju_social_customizer_section($wp_customize);
        ju_misc_customizer_section($wp_customize);
    }
?>