<?php
/**
 * Initialize the custom Theme Options.
 */
add_action( 'init', 'colour_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @return    void
 * @since     2.0
 */
function colour_theme_options() {

  /* OptionTree is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;

  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    
    // section parts

    'sections'        => array( 

      array(
        'id'          => 'header_logo',
        'title'       => __( 'Header logo', 'colour' )
      ),

      array(
        'id'          => 'with_us_section_setting',
        'title'       => __( 'With Us Section settings', 'colour' )
      ),

      array(
        'id'          => 'service_section_setting',
        'title'       => __( 'Service Section settings', 'colour' )
      ), 

      array(
        'id'          => 'team_section_setting',
        'title'       => __( 'Team Section settings', 'colour' )
      ), 

      array(
        'id'          => 'profile_section_setting',
        'title'       => __( 'profile Section settings', 'colour' )
      ),

      array(
        'id'          => 'client_section_setting',
        'title'       => __( 'Client Section settings', 'colour' )
      ),

      array(
        'id'          => 'our_blog_section_setting',
        'title'       => __( 'Our Blog Section settings', 'colour' )
      ),

       array(
        'id'          => 'contact_section_setting',
        'title'       => __( 'Contact Section settings', 'colour' )
      ),

      



    ),


    // section setting parts

    'settings'        => array( 
      
      array(
        'id'          => 'site_logo',
        'label'       => __( 'Upload logo', 'colour' ),
        'desc'        => sprintf( __( 'The Upload logo for in header', 'colour' ), '<code>ot-upload-attachment-id</code>' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'header_logo',
        'rows'        => '',
        'class'       => '',
      ),

      array(
        'id'          => 'with_us_se_title',
        'label'       => __( 'With Us title', 'colour' ),
        'desc'        => sprintf( __( 'Write with_us title', 'colour' ), '<code>ot-upload-attachment-id</code>' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'with_us_section_setting',
        'rows'        => '',
        'class'       => '',
      ),
      array(
        'id'          => 'with_us_se_des',
        'label'       => __( 'With Us description', 'colour' ),
        'desc'        => sprintf( __( 'Write with_us description', 'colour' ), '<code>ot-upload-attachment-id</code>' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'with_us_section_setting',
        'rows'        => '',
        'class'       => '',
      ),

      // for service section

      array(
        'id'          => 'service_se_title',
        'label'       => __( 'service title', 'colour' ),
        'desc'        => sprintf( __( 'Write service title', 'colour' ), '<code>ot-upload-attachment-id</code>' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'service_section_setting',
        'rows'        => '',
        'class'       => '',
      ),
      array(
        'id'          => 'service_se_des',
        'label'       => __( 'service description', 'colour' ),
        'desc'        => sprintf( __( 'Write service description', 'colour' ), '<code>ot-upload-attachment-id</code>' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'service_section_setting',
        'rows'        => '',
        'class'       => '',
      ),

            // for team section

      array(
        'id'          => 'team_se_title',
        'label'       => __( 'team title', 'colour' ),
        'desc'        => sprintf( __( 'Write team title', 'colour' ), '<code>ot-upload-attachment-id</code>' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'team_section_setting',
        'rows'        => '',
        'class'       => '',
      ),
      array(
        'id'          => 'team_se_des',
        'label'       => __( 'team description', 'colour' ),
        'desc'        => sprintf( __( 'Write team description', 'colour' ), '<code>ot-upload-attachment-id</code>' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'team_section_setting',
        'rows'        => '',
        'class'       => '',
      ),

            // for profile section

      array(
        'id'          => 'profile_se_title',
        'label'       => __( 'profile title', 'colour' ),
        'desc'        => sprintf( __( 'Write profile title', 'colour' ), '<code>ot-upload-attachment-id</code>' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'profile_section_setting',
        'rows'        => '',
        'class'       => '',
      ),
      array(
        'id'          => 'profile_se_des',
        'label'       => __( 'profile description', 'colour' ),
        'desc'        => sprintf( __( 'Write profile description', 'colour' ), '<code>ot-upload-attachment-id</code>' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'profile_section_setting',
        'rows'        => '',
        'class'       => '',
      ),

            // for client section

      array(
        'id'          => 'client_se_title',
        'label'       => __( 'client title', 'colour' ),
        'desc'        => sprintf( __( 'Write client title', 'colour' ), '<code>ot-upload-attachment-id</code>' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'client_section_setting',
        'rows'        => '',
        'class'       => '',
      ),
      array(
        'id'          => 'client_se_des',
        'label'       => __( 'client description', 'colour' ),
        'desc'        => sprintf( __( 'Write client description', 'colour' ), '<code>ot-upload-attachment-id</code>' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'client_section_setting',
        'rows'        => '',
        'class'       => '',
      ),

            // for our_blog section

      array(
        'id'          => 'our_blog_se_title',
        'label'       => __( 'our_blog title', 'colour' ),
        'desc'        => sprintf( __( 'Write our_blog title', 'colour' ), '<code>ot-upload-attachment-id</code>' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'our_blog_section_setting',
        'rows'        => '',
        'class'       => '',
      ),
      array(
        'id'          => 'our_blog_se_des',
        'label'       => __( 'our_blog description', 'colour' ),
        'desc'        => sprintf( __( 'Write our_blog description', 'colour' ), '<code>ot-upload-attachment-id</code>' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'our_blog_section_setting',
        'rows'        => '',
        'class'       => '',
      ),

      // for contact section

      array(
        'id'          => 'contact_se_title',
        'label'       => __( 'contact title', 'colour' ),
        'desc'        => sprintf( __( 'Write contact title', 'colour' ), '<code>ot-upload-attachment-id</code>' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contact_section_setting',
        'rows'        => '',
        'class'       => '',
      ),
      array(
        'id'          => 'contact_se_des',
        'label'       => __( 'contact description', 'colour' ),
        'desc'        => sprintf( __( 'Write contact description', 'colour' ), '<code>ot-upload-attachment-id</code>' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'contact_section_setting',
        'rows'        => '',
        'class'       => '',
      ),



    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}