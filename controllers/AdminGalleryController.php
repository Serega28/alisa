<?php

/**
 * Контроллер AdminProductsController
 * Управление прайсом в админпанели
 */
class AdminGalleryController extends AdminBase
{

    /**
     * Action для страницы "Управление галереей"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем список изображений
        $imagesList = Gallery::getImagesList();

        // Подключаем вид
        require_once(ROOT . '/views/admin_gallery/index.php');
        return true;
    }

    /**
     * Action для страницы "Добавить изображение в галерею"
     */
    public function actionCreate()
    {
        // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы

            $options['type'] = $_POST['type'];

            // Добавляем новую запись
            $id = Gallery::createImage($options);

            // Перенаправляем пользователя на страницу управлениями изображениями
            header("Location: /admin/gallery");

        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_gallery/create.php');
        return true;
    }

    /**
     * Action для страницы "Редактировать изображение"
     */
    public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем данные о конкретной картинке
        $image = Gallery::getImageById($id);

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $options['type'] = $_POST['type'];

            // Сохраняем изменения
            Gallery::updateImageById($id, $options);

            // Перенаправляем пользователя на страницу управлениями галереей
            header("Location: /admin/gallery");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_gallery/update.php');
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
            Gallery::deleteImageById($id);

            // Перенаправляем пользователя на страницу управлениями галереей
            header("Location: /admin/gallery");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_gallery/delete.php');
        return true;
    }


}