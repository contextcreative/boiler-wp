<?php

        function context_colours_customizer_section( $wp_customize ){

        /* Colour Settings
         * For each field you want in the customizer you need to set up an instance
         *
         * $wp_customize->add_setting($id, $args);
         *
         * More Info: https://codex.wordpress.org/Class_Reference%5CWP_Customize_Manager%5Cadd_setting
        ============================================= */
        $wp_customize->add_setting( 'context_colours_primary', [
           'default'            =>  '#ffffff',
        ] );

        $wp_customize->add_setting( 'context_colours_secondary', [
           'default'            =>  '#F5F5F5',
        ] );

        $wp_customize->add_setting( 'context_colours_text_primary', [
           'default'            =>  '#000000',
        ] );

        $wp_customize->add_setting( 'context_colours_text_secondary', [
           'default'            =>  '#4265FF',
        ] );

        $wp_customize->add_setting( 'context_colours_link_primary', [
           'default'            =>  '#E01A80',
        ] );

        $wp_customize->add_setting( 'context_colours_link_primary', [
           'default'            =>  '#E01A80',
        ] );

        $wp_customize->add_setting( 'context_colours_additional_one', [
           'default'            =>  '#37817E',
        ] );

        $wp_customize->add_setting( 'context_colours_additional_two', [
           'default'            =>  '#DA380B',
        ] );
        



        /* Colour Section
         * Create the section which the settings will live
         * The higher the priority the lower in the customize panel list
         * Needs to be called in an add_action( 'customize_register', 'ID' ); to be displayed
         *
         * function mytheme_add_section( $wp_customize ) {
                $wp_customize->add_section($id, $args);
           }
           add_action( 'customize_register', 'mytheme_add_section' );
         *
         * More Info: https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_section
        ============================================= */
        $wp_customize->add_section( 'context_colours_section', [
            'title'             =>  __( 'Colour Settings', 'context' ),
            'priority'          =>  30,
        ] );



        /* Colour Controls
         * Create the input fields for the settings to allow customization
         * Default 'type' is text
         * 
         * $wp_customize->add_control($id, $args);
         *
         * More Info: https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_control
        ============================================= */
        $wp_customize->add_control( new WP_Customize_Color_Control(
            $wp_customize,
            'context_colours_primary_input',
            array(
                'label'         =>  __( 'Primary Color', 'context' ),
                'section'       =>  'context_colours_section',
                'settings'      =>  'context_colours_primary',
            )
        ) );

        $wp_customize->add_control( new WP_Customize_Color_Control(
            $wp_customize,
            'context_colours_secondary_input',
            array(
                'label'         =>  __( 'Secondary Color', 'context' ),
                'section'       =>  'context_colours_section',
                'settings'      =>  'context_colours_secondary',
            )
        ) );


        $wp_customize->add_control( new WP_Customize_Color_Control(
            $wp_customize,
            'context_colours_text_primary_input',
            array(
                'label'         =>  __( 'Primary Text Color', 'context' ),
                'section'       =>  'context_colours_section',
                'settings'      =>  'context_colours_text_primary',
            )
        ) );

        $wp_customize->add_control( new WP_Customize_Color_Control(
            $wp_customize,
            'context_colours_text_secondary_input',
            array(
                'label'         =>  __( 'Secondary Text Color', 'context' ),
                'section'       =>  'context_colours_section',
                'settings'      =>  'context_colours_text_secondary',
            )
        ) );

        $wp_customize->add_control( new WP_Customize_Color_Control(
            $wp_customize,
            'context_colours_link_primary_input',
            array(
                'label'         =>  __( 'Primary Link Color', 'context' ),
                'section'       =>  'context_colours_section',
                'settings'      =>  'context_colours_link_primary',
            )
        ) );

        $wp_customize->add_control( new WP_Customize_Color_Control(
            $wp_customize,
            'context_colours_additional_one_input',
            array(
                'label'         =>  __( 'First Additional Color', 'context' ),
                'section'       =>  'context_colours_section',
                'settings'      =>  'context_colours_additional_one',
            )
        ) );

        $wp_customize->add_control( new WP_Customize_Color_Control(
            $wp_customize,
            'context_colours_additional_two_input',
            array(
                'label'         =>  __( 'Second Additional Color', 'context' ),
                'section'       =>  'context_colours_section',
                'settings'      =>  'context_colours_additional_two',
            )
        ) );



    }

?>