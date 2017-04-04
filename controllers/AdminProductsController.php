<?php

/**
 * Контроллер AdminProductsController
 * Управление продуктами в админпанели
 */
class AdminProductsController extends AdminBase
{

    /**
     * Action для страницы "Управление продуктами"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем список товаров
        $productsList = Products::getProductsList();

        // Подключаем вид
        require_once(ROOT . '/views/admin_products/index.php');
        return true;
    }

    /**
     * Action для страницы "Добавить новый продукт"
     */
    public function actionCreate()
    {
        // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['name'] = $_POST['name'];
            $options['description'] = $_POST['description'];
            $options['type'] = $_POST['type'];
            $options['price'] = $_POST['price'];

            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новую запись
                $id = Products::createProduct($options);

                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: /admin/price");
            }
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_products/create.php');
        return true;
    }

    /**
     * Action для страницы "Редактировать продукт"
     */
    public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем данные о конкретной записи
        $products = Products::getProductsById($id);

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $options['name'] = $_POST['name'];
            $options['description'] = $_POST['description'];
            $options['type'] = $_POST['type'];
            $options['price'] = $_POST['price'];

            // Сохраняем изменения
            Products::updateProductById($id, $options);

            // Перенаправляем пользователя на страницу управлениями прайсом
            header("Location: /admin/products");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_products/update.php');
        return true;
    }

    /**
     * Action для страницы "Удалить запись"
     */
    public function actionDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем запись
            Products::deleteProductById($id);

            // Перенаправляем пользователя на страницу управлениями прайсами
            header("Location: /admin/products");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_products/delete.php');
        return true;
    }

}
