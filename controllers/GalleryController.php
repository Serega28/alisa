<?php


class GalleryController
{
    /**Выводим все изображения
     * @return bool
     */

    public function actionIndex()
    {

        $imagesList = array();
        $imagesList = Gallery::getImagesList();

        //Подключаем вид
        require_once(ROOT . '/views/gallery/index.php');
        return true;
    }
}