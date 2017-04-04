<?php include ROOT . '/views/layouts/header.php'; ?>
<div id="holder" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">


    <div class="pagetitle">
        <h2>Редактирование продукта</h2>
        <ul>
            <li><img src="/upload/images/icons/edit.png" alt="" />
        </ul>
    </div>


    <div id="content">

        <div id="wide" class="contact">
            <br/>

            <p>
                Вернуться к <a href="/admin/products">управлению продуктами</a>.
            <p>
            <br/>

                <div id="contact-form">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <blockquote>
                            <ul>
                                <li>
                                    <p>Продукт:</p>
                                    <input type="text" name="name" class="text" placeholder="" value="<?php echo $products['name']; ?>">
                                    <br/>
                                    <br/>
                                </li>
                                    <div class="clear sep"></div>

                                <li>
                                    <p>Состав:</p>
                                    <input type="text" class="text" name="description" placeholder="" value="<?php echo $products['description']; ?>">
                                    <br/>
                                    <br/>
                                </li>
                                    <div class="clear sep"></div>

                                <li>
                                    <p>Отображать продукт?</p>
                                    <select name="type">
                                        <option value="1" <?php if ($products['type'] == 1) echo ' selected="selected"'; ?>>Да</option>
                                        <option value="0" <?php if ($products['type'] == 0) echo ' selected="selected"'; ?>>Нет</option>
                                    </select> <br/>
                                    <br/>
                                </li>
                                    <div class="clear sep"></div>


                                <li>
                                    <p>Цена, грн.:</p>
                                    <input type="text" name="price" class="text" placeholder="" value="<?php echo $products['price']; ?>">
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

