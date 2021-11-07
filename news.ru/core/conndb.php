<?php
namespace core;
use PDO;
use lib\settings;


 class ConnDB {



   public static function getConn () {

      $db = null;
      $host = Settings::$host;
      $db_name = Settings::$db_name;
      $db_user = Settings::$db_user;
      $db_pass = Settings::$db_pass;

      if (is_null($db)) {
         try {
      $db = new PDO('mysql:host='.$host.';dbname='.$db_name.';charset=utf8', $db_user, $db_pass);
      }
      catch (PDOException $e) {
      die($e->getMessage());
      }
      return $db;
      }
   }
}