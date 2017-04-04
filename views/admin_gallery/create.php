<?php include ROOT . '/views/layouts/header.php'; ?>

<div id="holder" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">

    <div class="pagetitle">
        <h2>Добавление нового изображения</h2>
        <ul>
            <li><img src="/upload/images/icons/edit.png" alt="" />
        </ul>
    </div>

    <div id="content">

        <div id="wide" class="contact">
            <br/>

            <p>
                Вернуться к <a href="/admin/gallery">управлению галереей</a>.
            </p>

            <?php if (isset($errors) && is_array($errors)): ?>

                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div id="contact-form">

                <form action="#" method="post" enctype="multipart/form-data">
                    <blockquote>
                        <ul>

                            <li>
                                <p>Изображение:</p>
                                <p><img src="" width="589" alt="" /></p>
                                <p><input type="file" name="image"  value=""></p>
                                <br/>
                            </li>
                            <div class="clear sep"></div>


                            <li>
                                <p>Отображать?</p>
                                <select name="type" >
                                    <option value="1" selected="selected">Да</option>
                                    <option value="0">Нет</option>
                                </select>
                                <br/>
                                <br/>
                            </li>
                            <div class="clear sep"></div>

                            <br/><br/>
                            <input type="submit" name="submit" class="submit" value="Сохранить">
                            <br/><br/>
                        </ul>
                    </blockquote>
                </form>

            </div>

        </div>

    </div>

</div>



<?php include ROOT . '/views/layouts/footer.php'; ?>

