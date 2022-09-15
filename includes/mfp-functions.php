<?php
/*
 * Add my new menu to the Admin Control Panel
 */
 
// // Hook the 'admin_menu' action hook, run the function named 'mfp_Add_My_Admin_Link()'
// add_action( 'admin_menu', 'mfp_Add_My_Admin_Link' );

// // Add a new top level menu link to the ACP
// function mfp_Add_My_Admin_Link()
// {
//       add_menu_page(
//         'My First Page', // Title of the page
//         'My First Plugin', // Text to show on the menu link
//         'manage_options', // Capability requirement to see the link
//         'includes/mfp-first-acp-page.php' // The 'slug' - file to display when clicking the link
//     );
// }

//[foobar]
function information($var = null){
	return "<h1 style='font-size:40px'>Page d'information</h1>";
}
add_shortcode( 'foobar', 'information' );

function autre($var = null)
{
  global $wpdb;
  $result = $wpdb->get_results("SELECT * FROM wp_annuaire");
  foreach($result as $rest){
    echo (
      
      "<table>".
      "<tr>".
          "<td>".$rest->nom_entreprise."</td>".
          "<td>".$rest->localisation_entreprise."</td>".
          "<td>".$rest->prenom_contact."</td>".
          "<td>".$rest->nom_contact."</td>".
          "<td>".$rest->mail_contact."</td>".
                
      "</tr>"
      ."</table>"
  );
  }

}
add_shortcode( 'azerty', 'autre' );

