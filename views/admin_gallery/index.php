<?php include ROOT . '/views/layouts/header.php'; ?>

<div id="holder" xmlns="http://www.w3.org/1999/html">

    <div class="pagetitle">
        <h2>Управление галереей</h2>
        <ul>
            <li><img src="/upload/images/icons/edit.png" alt="" />
        </ul>
    </div>

    <div id="content">

        <div id="wide" class="contact">

            <blockquote>
                В этом разделе Вы можете <a href="/admin/gallery/create" class=""> добавить новое изображение </a> или редактировать существующие.
            </blockquote>

            <h4>Изображения:</h4>

            <table class="news_list">
                <tr>
                    <th>ID:</th>
                    <th>Дата:</th>
                    <th>Изображение:</th>
                    <th></th>
                    <th></th>

                </tr>

                <?php foreach ($imagesList as $imageItem): ?>

                <tr>
                    <td><?php echo $imageItem['id']; ?>.</td>
                    <td><?php echo $imageItem['date']; ?></td>
                    <td><img src="<?php echo Gallery::getImage($imageItem['id']); ?>" width="260"></td>

                    <td><a href="/admin/gallery/update/<?php echo $imageItem['id']; ?>" title="Редактировать"><i class="">Редактировать</i></a></td>
                    <td><a href="/admin/gallery/delete/<?php echo $imageItem['id']; ?>" title="Удалить"><i class=""></i>Удалить</a></td>
                </tr>

                <?php endforeach; ?>

            </table>

        </div>		<!-- #wide ends -->

    </div>		<!-- #content ends -->

</div>		<!-- #holder ends -->

<?php include ROOT . '/views/layouts/footer.php'; ?>

