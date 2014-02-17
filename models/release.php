<?php

  class Release {

    public $id;
    public $version;
    public $released_on;
    public $description;
    public $is_current;
    public $ipa;
    public $plist;
    public $created_on;
    public $updated_on;

    // CLASS METHODS
    ////////////////////////////////////////////////////////////
    public static function find($id) {
      global $database;
      $data = array($id);
      $sql = "SELECT id, version, released_on, description, is_current, ipa, plist, created_on, updated_on FROM releases WHERE id = ? LIMIT 1";
      $statement = $database->prepare($sql);
      $statement->setFetchMode(PDO::FETCH_CLASS, 'Release');
      try {
        $statement->execute($data);
        $row = $statement->fetch();
        return $row;
      } catch ( PDOException $e ) {
        echo $e->getMessage();
        exit;
      }
    }

    public static function all() {
      global $database;
      $sql = "SELECT id, version, released_on, description, is_current, ipa, plist, created_on, updated_on FROM releases ORDER BY created_on DESC";
      $statement = $database->query($sql);
      $statement->setFetchMode(PDO::FETCH_CLASS, 'Release');
      $rows = array();
      while($row = $statement->fetch()) {
        $rows[] = $row;
      }
      return $rows;
    }

    // grab the associative array $params
    // add created_on and updated_on values
    // add is_current = 1 to make this new one the current release
    // verify that everything is valid enough to be in the db
    // update any old records of is_current to false
    // run the insert query
    // $mock = array('version' => '3.0.9', 'released_on' => '2014-02-16', 'description' => 'New UI', 'ipa' => 'VIPMobileClinic.ipa', 'plist' => 'VIPMobileClinic.plist');
    public static function save( $params ) {
      global $database;
      $created_on_and_updated_on = date( "Y-m-d H:i:s" );
      $params['is_current'] = 1;
      $params['created_on'] = $created_on_and_updated_on;
      $params['updated_on'] = $created_on_and_updated_on;
      // if( ReleaseValidator::is_valid($params) ) {
      $sql = "INSERT INTO releases (version, released_on, description, is_current, production_ipa, production_plist, training_ipa, training_plist, created_on, updated_on) values (:version, :released_on, :description, :is_current, :production_ipa, :production_plist, :training_ipa, :training_plist, :created_on, :updated_on)";
      $statement = $database->prepare($sql);
      self::switch_all_is_current_to_false();
      $statement->execute($params);
    }

    public static function current_version() {
      global $database;
      $sql = "SELECT version FROM releases WHERE is_current = 1 ORDER BY created_on DESC LIMIT 1";
      $statement = $database->query($sql);
      $version = $statement->fetch();
      return $version[0];
    }

    public static function switch_all_is_current_to_false() {
      global $database;
      $sql = "UPDATE releases SET is_current = 0 WHERE is_current = 1";
      $statement = $database->prepare($sql);
      $row = $statement->execute();
    }

    // INSTANCE METHODS
    ////////////////////////////////////////////////////////////
    public function release_notes() {
      global $database;
      $data = array($this->id);
      $statement = $database->prepare("
        SELECT *
        FROM release_notes
        WHERE release_notes.release_id = ?
        ORDER BY release_notes.created_on DESC
      ");
      $statement->setFetchMode(PDO::FETCH_CLASS, 'ReleaseNote');
      try {
        $statement->execute($data);
        $rows = $statement->fetch();
        print_r($rows);
      } catch ( PDOException $e ) {
        echo $e->getMessage();
        exit;
      }
    }
  }

?>