<?php
class Gallery
{
//returns an array of available image items
    public static function getImagesList()
    {
// Соединение с БД
        $db = Db::getConnection();

        $newsList = array();
// Текст запроса к БД
        $result = $db->query('SELECT id, date, type FROM gallery WHERE type =1 ORDER BY id DESC LIMIT 50');

        $i = 0;
        while ($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['type'] = $row['type'];
            $i++;
        }

        return $newsList;
    }

    /**
     * Возвращает путь к изображению
     * @param integer $id
     * @return string <p>Путь к изображению</p>
     */
    public static function getImage($id)
    {
        // Название изображения-пустышки
        $noImage = 'no_image.jpg';

        // Путь к папке с товарами
        $path = '/upload/images/gallery/';

        // Путь к изображению товара
        $pathToGalleryImage = $path . $id . '.jpg';

        if (file_exists($_SERVER['DOCUMENT_ROOT'] . $pathToGalleryImage)) {
            // Если изображение для новости существует
            // Возвращаем путь изображения новости
            return $pathToGalleryImage;
        }

        // Возвращаем путь изображения-пустышки
        return $path . $noImage;
    }

    /**
     * Добавляет новое изображение
     * @param array $options <p>Массив с информацией об изображении</p>
     * @return integer <p>id добавленной в таблицу записи</p>
     */
    public static function createImage($options)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO gallery '
            . '(type)'
            . 'VALUE '
            . '(:type)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':type', $options['type'], PDO::PARAM_INT);
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }

    /**
     * Редактирует изображение с заданным id
     * @param integer $id <p>id картинки</p>
     * @param array $options <p>Массив с информацей об изображении</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function updateImageById($id, $options)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE gallery 
            SET 
                type = :type 
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':type', $options['type'], PDO::PARAM_INT);
        return $result->execute();
    }


    /**
     * Удаляет изображение с указанным id
     * @param integer $id <p>id картинки</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function deleteImageById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM gallery WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Возвращает изображение с указанным id
     * @param integer $id <p>id картинки</p>
     * @return array <p>Массив с информацией об изображении</p>
     */
    public static function getImageById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM gallery WHERE id = :id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        return $result->fetch();
    }

}