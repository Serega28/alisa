<?php include ROOT . '/views/layouts/header.php'; ?>

<div id="holder" xmlns="http://www.w3.org/1999/html">

    <div class="pagetitle">
        <h2>Управление продуктами</h2>
        <ul>
            <li><img src="/upload/images/icons/edit.png" alt="" />
        </ul>
    </div>

    <div id="content">

        <div id="wide" class="contact">

            <blockquote>
                В этом разделе Вы можете <a href="/admin/products/create" class="">добавить новый продукт </a> или редактировать существующие.
            </blockquote>

            <h4>Список продуктов:</h4>

            <table class="news_list">
                <tr>
                    <th>ID:</th>
                    <th>Продукт:</th>
                    <th>Состав:</th>
                    <th>Цена:</th>
                    <th></th>
                    <th></th>
                </tr>

                <?php foreach ($productsList as $products): ?>

                <tr>
                    <td><?php echo $products['id']; ?>.</td>
                    <td><?php echo $products['name']; ?></td>
                    <td><?php echo $products['description']; ?></td>
                    <td><?php echo $products['price']; ?> грн.</td>
                    <td><a href="/admin/products/update/<?php echo $products['id']; ?>" title="Редактировать"><i class="">Редактировать</i></a></td>
                    <td><a href="/admin/products/delete/<?php echo $products['id']; ?>" title="Удалить"><i class=""></i>Удалить</a></td>
                </tr>

                <?php endforeach; ?>

            </table>

        </div>

    </div>

</div>


<?php include ROOT . '/views/layouts/footer.php'; ?>

