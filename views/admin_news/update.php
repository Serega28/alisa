<?php include ROOT . '/views/layouts/header.php'; ?>

<div id="holder" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">

    <div class="pagetitle">
        <h2>Редактирование новости</h2>
        <ul>
            <li><img src="/upload/images/icons/edit.png" alt="" />
        </ul>
    </div>

    <div id="content">

        <div id="wide" class="contact">
            <br/>
            <p>
                Вернуться к <a href="/admin/news">управлению новостями</a>.
            </p>

            <div id="contact-form">
                <form action="#" method="post" enctype="multipart/form-data">
                    <blockquote>
                        <ul>
                            <li>
                                <p>Заголовок:</p>
                                <input type="text" name="title"  class="text" value="<?php echo $news['title']; ?>">
                                <br/>
                                <br/>
                            </li>
                            <div class="clear sep"></div>

                            <li>
                                <p>Текст новости:</p>
                                <textarea name="content"><?php echo $news['content']; ?></textarea>
                                <br/>
                                <br/>
                            </li>
                            <div class="clear sep"></div>

                            <li>
                                <p>Изображение:</p>
                                <p><img src="<?php echo News::getImage($news['id']); ?>" width="589" alt="" /></p>
                                <p><input type="file" name="image"  value="<?php echo $news['image']; ?>"></p>
                                <br/>
                            </li>
                            <div class="clear sep"></div>

                            <li>
                                <p>Отображать новость?</p>
                                <select name="type" >
                                    <option value="1" <?php if ($news['type'] == 1) echo ' selected="selected"'; ?>>Да</option>
                                    <option value="0" <?php if ($news['type'] == 0) echo ' selected="selected"'; ?>>Нет</option>
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

