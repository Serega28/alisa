<?php


class CabinetController
{
    /**
     * Action для страницы "Кабинет пользователя"
     */
    public function actionIndex()
    {
        //получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();

        //Получаем информацию о пользователе из БД
        $user = User::getUserById($userId);
        //echo $userId;

        require_once (ROOT.'/views/cabinet/index.php');
        return true;
    }

    /**
     * Action для страницы "Редактировать имя и пароль пользователя"
     */
    public function actionEdit()
    {
        //Получаем идентификатор пользователя из сессии
        $userId = User::checkLogged();

        //Получаем информацию о пользователе из БД
        $user = User::getUserById($userId);

        $name = $user['name'];
        $password = $user['password'];

        $result = false;

        if (isset($_POST['submit'])) {
            //Если форма отправлена
            //Получаем данные из формы
            $name = $_POST['name'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            //Если ошибок нет - обновляем данные в БД
            if ($errors == false) {
                $result = User::edit($userId, $name, $password);
            }
        }
        require_once (ROOT.'/views/cabinet/edit.php');
        return true;
    }

}




