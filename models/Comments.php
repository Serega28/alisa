<?php

/**
 * Класс Comments - модель для работы с отзывами
 */
class Comments
{
    //returns an array of available comments items
    public static function getCommentsList()
    {
        // Соединение с БД
        $db = Db::getConnection();

        $commentsList = array();
        // Текст запроса к БД
        $result = $db->query('SELECT id, name, comment FROM user WHERE comment_type = 1 ORDER BY id DESC LIMIT 5');

        $i = 0;
        while ($row = $result->fetch()) {
            $commentsList[$i]['id'] = $row['id'];
            $commentsList[$i]['name'] = $row['name'];
            $commentsList[$i]['comment'] = $row['comment'];
            $i++;
        }

        return $commentsList;
    }

    //returns an array of all news items
    public static function getAllComments()
    {
        // Соединение с БД
        $db = Db::getConnection();

        $allComments = array();
        // Текст запроса к БД
        $result = $db->query('SELECT id, name, comment, comment_type FROM user ORDER BY id');

        $i = 0;
        while ($row = $result->fetch()) {
            $allComments[$i]['id'] = $row['id'];
            $allComments[$i]['name'] = $row['name'];
            $allComments[$i]['comment'] = $row['comment'];
            $allComments[$i]['comment_type'] = $row['comment_type'];
            $i++;
        }

        return $allComments;
    }

    /**
     * Создание комментария
     * @param integer $id <p>id пользователя</p>
     * @param string $comment <p>Комментарий</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function createComment($id, $comment)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE user 
            SET comment = :comment 
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':comment', $comment, PDO::PARAM_STR);
        return $result->execute();

    }

    /**
     * Создание комментария
     * @param integer $id <p>id пользователя</p>
     * @param string $comment <p>Комментарий</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function updateComment($id, $commentText,  $commentType)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE user 
            SET comment = :comment, comment_type = :comment_type 
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':comment', $commentText, PDO::PARAM_STR);
        $result->bindParam(':comment_type', $commentType, PDO::PARAM_INT);
        return $result->execute();

    }
    /**
     * Возвращает новость с указанным id
     * @param integer $id <p>id комментария</p>
     * @return array <p>Массив с информацией о пользователе</p>
     */
    public static function getCommentsById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM user WHERE id = :id';

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

