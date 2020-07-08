<?php include 'option.php' ?>
<?php 
  /*
  Plugin Name: LAMANU-cookie-law
  Version: 0.1
  Plugin URI: retroland/
  Description: WordPress Plugin for european cookie law.
  Author: TotoAuthor URI: http://www.
  */
function LAMANU_scripts(){
  echo '<script type="text/javascript" src="wp-content/plugins/LAMANU-cookie-law/js/tarteaucitron/tarteaucitron.js/tarteaucitron.js"></script>

  <script type="text/javascript">
  tarteaucitron.init({
  "privacyUrl": "", /* Privacy policy url */

  "hashtag": "#tarteaucitron", /* Open the panel with this hashtag */
  "cookieName": "tarteaucitron", /* Cookie name */

  "orientation": "middle", /* Banner position (top - bottom) */
  "showAlertSmall": true, /* Show the small banner on bottom right */
  "cookieslist": true, /* Show the cookie list */

  "adblocker": false, /* Show a Warning if an adblocker is detected */
  "AcceptAllCta" : true, /* Show the accept all button when highPrivacy on */
  "highPrivacy": true, /* Disable auto consent */
  "handleBrowserDNTRequest": false, /* If Do Not Track == 1, disallow all */

  "removeCredit": false, /* Remove credit link */
  "moreInfoLink": true, /* Show more info link */
  "useExternalCss": false, /* If false, the tarteaucitron.css file will be loaded */

  //"cookieDomain": ".my-multisite-domaine.fr", /* Shared cookie for multisite */
                    
    "readmoreLink": "/cookiespolicy", /* Change the default readmore link */

    "mandatory": false, /* Show a message about mandatory cookies */
  });
  </script>';
}
        add_action('wp_head', 'LAMANU_scripts');
?>
<?php
/*
Plugin Name: Test Plugin
Description: un plugin de test pour l’ajout d’un menu admin WordPress
Author: WPN
Version: 0.1
*/
add_action('admin_menu','test_plugin_setup_menu');
function test_plugin_setup_menu(){
      add_menu_page('Test Plugin Page', 'Test Plugin', 'manage_options', 'test-plugin', 'test_init' );
}
function content_page(){
      echo"<h1>Salut tous le monde!</h1>";
}
?>