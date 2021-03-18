<?php 



function IndustrailPark_customize_register($wp_customize ) {

    $wp_customize->add_setting('IndustrailPark_rights_handle', [ 
        'default' => ''
    ]);
      
    $wp_customize->add_setting('IndustrailPark_social_handle', [ 
        'default' => ''
    ]);

    $wp_customize->add_setting('IndustrailPark_facebook_handle', [ 
        'default' => ''
    ]); 
    
    $wp_customize->add_setting('IndustrailPark_instagram_handle', [ 
        'default' => ''
    ]);

    $wp_customize->add_setting('IndustrailPark_twitter_handle', [ 
        'default' => ''
    ]);

    $wp_customize->add_setting('IndustrailPark_linkedin_handle', [ 
        'default' => ''
    ]);

    $wp_customize->add_setting('IndustrailPark_headoffice_handle', [ 
        'default' => ''
    ]);

    $wp_customize->add_setting('IndustrailPark_industrialpark_handle', [ 
        'default' => ''
    ]);

    $wp_customize->add_setting('IndustrailPark_email_handle', [ 
        'default' => ''
    ]);


    $wp_customize->add_section( 'IndustrailPark_rights_section', [
        'title'         => __( 'Footer Settings',  'IndustrailPark'),
        'priority'      =>  30
    ]);
    
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'IndustrailPark_rights',
        array(
            'label'     => __('Copyrights', 'IndustrailPark'),
            'section'   => 'IndustrailPark_rights_section',
            'settings'  =>  'IndustrailPark_rights_handle',
            'type'      =>  'textarea',
        )
        ));
        

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'IndustrailPark_social',
        array(
            'label'     => __('Social Heading', 'IndustrailPark'),
            'section'   => 'IndustrailPark_rights_section',
            'settings'  =>  'IndustrailPark_social_handle',
            'type'      =>  'text',
        )
        ));
    
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'IndustrailPark_facebook',
        array(
            'label'     => __('Facebook Link', 'IndustrailPark'),
            'section'   => 'IndustrailPark_rights_section',
            'settings'  =>  'IndustrailPark_facebook_handle',
            'type'      =>  'text',
        )
        ));
 
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'IndustrailPark_instagram',
        array(
            'label'     => __('Instagram Link', 'IndustrailPark'),
            'section'   => 'IndustrailPark_rights_section',
            'settings'  =>  'IndustrailPark_instagram_handle',
            'type'      =>  'text',
        )
        ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'IndustrailPark_twitter',
        array(
            'label'     => __('Twitter Link', 'IndustrailPark'),
            'section'   => 'IndustrailPark_rights_section',
            'settings'  =>  'IndustrailPark_twitter_handle',
            'type'      =>  'text',
        )
        ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'IndustrailPark_linkdein',
        array(
            'label'     => __('LinkedIn Link', 'IndustrailPark'),
            'section'   => 'IndustrailPark_rights_section',
            'settings'  =>  'IndustrailPark_linkedin_handle',
            'type'      =>  'text',
        )
        ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'IndustrailPark_headoffice',
        array(
            'label'     => __('Head Office', 'IndustrailPark'),
            'section'   => 'IndustrailPark_rights_section',
            'settings'  =>  'IndustrailPark_headoffice_handle',
            'type'      =>  'textarea',
        )
        ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'IndustrailPark_industrialpark',
        array(
            'label'     => __('IndustrialPark', 'IndustrailPark'),
            'section'   => 'IndustrailPark_rights_section',
            'settings'  =>  'IndustrailPark_industrialpark_handle',
            'type'      =>  'textarea',
        )
        ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'IndustrailPark_email',
        array(
            'label'     => __('Email', 'IndustrailPark'),
            'section'   => 'IndustrailPark_rights_section',
            'settings'  =>  'IndustrailPark_email_handle',
            'type'      =>  'text',
        )
        ));
    
}

