 <?php

  // set to false in production!
  $is_development = true;

  if( $is_development == true ) {
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(-1);
  }

  define( 'ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/' );
  define( 'SITE_PATH', $_SERVER['HTTP_HOST'] . '/' );

  if( $is_development == true ) {
    define( 'DB_NAME', 'releases_development' );
    define( 'DB_HOST', 'localhost' );
    define( 'DB_PORT', '8889' ); // default: 3306
    define( 'DB_USERNAME', 'releases' );
    define( 'DB_PASSWORD', 'george420' );
  } elseif( $is_development == false ) {
    define( 'DB_NAME', '' );
    define( 'DB_HOST', '' );
    define( 'DB_PORT', '3306' ); // default: 3306
    define( 'DB_USERNAME', '' );
    define( 'DB_PASSWORD', '' );
  } else {
    return false;
  }

  require_once( ROOT_PATH . 'lib/database.php' );
  require_once( ROOT_PATH . 'models/release.php' );
  require_once( ROOT_PATH . 'lib/vip.release.php' );
  require_once( ROOT_PATH . 'lib/vip.releases_collection.php' );

  $releases = new VIP\ReleasesCollection(
    new VIP\Release('3.0.1', '1/24/2015', array(
      'Auth.net credentials are downloaded.',
      'Ability to send client an SMS text message.',
      'Assign coupons to a specific product / pet.',
      'Refunding a product that has a coupon attached will auto select the coupon to refund.',
      'Fixed floating weight / age info when more than 3 pets.',
      'Database memory optimizations.',
      'Mark CCards in training version with TRAIN on invoice.',
      'Complete redesign of all receipts including store recap.'
      )
    ),
    new VIP\Release('3.0.4', '1/24/2014', array(
      'Auth.net credentials are downloaded.',
      'Ability to send client an SMS text message.',
      'Assign coupons to a specific product / pet.',
      'Refunding a product that has a coupon attached will auto select the coupon to refund.',
      'Fixed floating weight / age info when more than 3 pets.',
      'Database memory optimizations.',
      'Mark CCards in training version with TRAIN on invoice.',
      'Complete redesign of all receipts including store recap.'
      )
    ),
    new VIP\Release('3.0.3', '1/24/2014', array(
      'Auth.net credentials are downloaded.',
      'Ability to send client an SMS text message.',
      'Assign coupons to a specific product / pet.',
      'Refunding a product that has a coupon attached will auto select the coupon to refund.',
      'Fixed floating weight / age info when more than 3 pets.',
      'Database memory optimizations.',
      'Mark CCards in training version with TRAIN on invoice.',
      'Complete redesign of all receipts including store recap.'
      )
    )
  );

  $currentRelease = $releases->currentRelease;
  $allReleases = $releases->releases;
  $currentVersion = Release::current_version();
  $releaseDate = $currentRelease->releaseDate;

?>