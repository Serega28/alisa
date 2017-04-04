<?php

/**
 * Контроллер SiteController
 */
class SiteController
{
    /**
     * Action для главной страницы
     */
    public function actionIndex()
    {
        $lastNews = array();
        $lastNews = News::getLastNews();

        //Подключаем вид
        require_once (ROOT.'/views/site/index.php');
        return true;
    }


}