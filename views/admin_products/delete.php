<?php include ROOT . '/views/layouts/header.php'; ?>
<div id="holder" xmlns="http://www.w3.org/1999/html">

    <div class="pagetitle">
        <h2>Удаление продукта</h2>
        <ul>
            <li><img src="/upload/images/icons/delete.png" alt="" />
        </ul>
    </div>

    <div id="content">

        <div id="wide" class="contact">
            <br>
            <blockquote>
                <p>Вы действительно хотите удалить этот продукт?</p>
            </blockquote>
            <br>

            <div class="post_short">
                <form method="post">
                    <input type="submit" name="submit" class="submit" value="Удалить" />
                </form>
            </div>

                <div id="side">
                    Вернуться к <a href="/admin/products">управлению продуктами</a>.
                </div>
        </div>
        <br><br>
        <br><br>
    </div>
</div>

<?php include ROOT . '/views/layouts/footer.php'; ?>

