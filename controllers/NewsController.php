<?php

class NewsController
{
    /**Выводим список новостей
     * @return bool
     */

    public function actionList()
    {

        $newsList = array();
        $newsList = News::getNewsList();

        //Подключаем вид
        require_once (ROOT.'/views/news/index.php');
        return true;
    }

}
