<?php

class ProductsController
{
    /**Выводим список товаров с ценами и описанием
     * @return bool
     */
    public function actionList()
    {

        $productsList = array();
        $productsList = Products::getProductsList();

        //Подключаем вид
        require_once (ROOT.'/views/products/index.php');
        return true;
    }
}