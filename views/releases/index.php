<?php

  include( '../../includes/header.php' );

  if( isset( $_POST["release"] ) ) {
    $release = $_POST["release"];

    if( isset( $_POST["release_notes"] ) ) {
      $release_notes = $_POST["release_notes"];
    }
  }

  $visible = $_FILES;

  // $mock = array('version' => '3.0.13', 'released_on' => '2014-02-16', 'description' => 'New UI', 'production_ipa' => 'VIPMobileClinic.ipa', 'production_plist' => 'VIPMobileClinic.plist', 'training_ipa' => 'VIPMobileClinic.ipa', 'training_plist' => 'VIPMobileClinic.plist');
  Release::save($_POST["release"]);

?>
<h1>Releases Index</h1>
<?php include( ROOT_PATH . '/includes/footer.php' ); ?>