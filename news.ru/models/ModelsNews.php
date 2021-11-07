<?php
namespace models;
use PDO;
use core\conndb;

 class ModelsNews {

	public static function getCount () {

		$db = ConnDB::getConn();
        $get_count = $db->prepare("SELECT COUNT(*) FROM news");
        $get_count -> execute();
        $array = $get_count->fetchall(PDO::FETCH_COLUMN);
        return $array;
	}

	public static function get_5_News($limit, $offset)
    {
        $db = ConnDB::getConn();
        $get_news = $db->prepare("SELECT * FROM news ORDER BY idate DESC LIMIT $offset, $limit");
        $get_news -> execute();
        $array = $get_news->fetchall(PDO::FETCH_ASSOC);
        return $array;
    }

    public static function get_1_News ($id)
    {
        $db = ConnDB::getConn();
        $get_1_news = $db->prepare("SELECT * FROM news WHERE id =$id");
        $get_1_news -> execute();
        $array = $get_1_news->fetch(PDO::FETCH_ASSOC);
        return $array;
    }

}

?>