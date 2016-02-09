<?php
function divi_child_theme_setup() {
   if ( class_exists('ET_Builder_Module')) {
      get_template_part( 'custom-modules/ctm' );

      $ctm = new FDL_Builder_Module_Team_Member();

      remove_shortcode( 'et_pb_team_member' );

      add_shortcode( 'et_pb_team_member', array($ctm, '_shortcode_callback') );
   }
}
add_action('wp', 'divi_child_theme_setup', 9999);
