<?php include ROOT . '/views/layouts/header.php'; ?>

<div id="holder" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">

    <div class="pagetitle">
        <h2>Редактирование изображения</h2>
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

            <div id="contact-form">

                <form action="#" method="post" enctype="multipart/form-data">
                    <blockquote>
                        <ul>

                            <li>
                                <p>Изображение:</p>
                                <p><img src="<?php echo Gallery::getImage($image['id']); ?>" width="800" alt="" /></p>
                                <p><input type="file" name="image"  value="<?php echo $image['image']; ?>"></p>
                                <br/>
                            </li>
                            <div class="clear sep"></div>

                            <li>
                                <p>Отображать изображение?</p>
                                <select name="type" >
                                    <option value="1" <?php if ($image['type'] == 1) echo ' selected="selected"'; ?>>Да</option>
                                    <option value="0" <?php if ($image['type'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                                </select>
                                <br/>
                                <br/>
                            </li>
                            <div class="clear sep"></div>

                            <br/>
                            <br/>
                            <input type="submit" name="submit" class="submit" value="Сохранить">
                            <br/>
                            <br/>
                        </ul>
                    </blockquote>
                </form>

            </div>

        </div>

    </div>

</div>



<?php include ROOT . '/views/layouts/footer.php'; ?>

