<?php
    function ju_customize_register($wp_customize) {
        /**
         * 1. Setting - a value that is saved in the database
         * 2. Section - a way to gruop input fields together
         * 3. Controller - an input field that is used placed inside a section  and modifies one setting.
         */

        ju_social_customizer_section($wp_customize);
        ju_misc_customizer_section($wp_customize);
    }
?>