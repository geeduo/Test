<?php
namespace controllers;
use models\ModelsNews;


class Controller {


	public static function get_news($page)
    {
        $params['title'] = 'Новости';
        $limit = 5;
        $offset = $limit * ($page - 1);
        $params['items'] = ModelsNews::get_5_News($limit, $offset);
       	$count = ModelsNews::getCount();
        $params['total_pages'] = ceil($count[0] / $limit);
        require_once 'views/viewNews.php';
    }

    public static function get_one ($id)
    {
    	$params['items'] = ModelsNews::get_1_News($id);
    	require_once 'views/view1news.php';
    }

}