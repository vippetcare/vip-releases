<?php

  try {

    $database = new PDO(
      "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT,
      DB_USERNAME,
      DB_PASSWORD
    );

    // set PDO to throw an exception if there is an error with a query
    $database->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    // define the character set as utf8
    $database->exec( "SET NAMES 'utf8'" );

    // let's try to make sure the database is living in utc
    date_default_timezone_set("UTC");

  } catch( PDOException $e ) {

    echo $e->getMessage();
    exit;

  }

?>