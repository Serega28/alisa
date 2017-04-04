<?php include ROOT . '/views/layouts/header.php'; ?>

<div id="holder" xmlns="http://www.w3.org/1999/html">

    <div class="pagetitle">
        <h2>Управление новостями</h2>
        <ul>
            <li><img src="/upload/images/icons/edit.png" alt="" />
        </ul>
    </div>

    <div id="content">

        <div id="wide" class="contact">

            <blockquote>
                В этом разделе Вы можете <a href="/admin/news/create" class=""> добавить новую запись </a> или редактировать существующие.
            </blockquote>

            <h4>Список новостей:</h4>

            <table class="news_list">
                <tr>
                    <th>ID:</th>
                    <th>Дата:</th>
                    <th>Заголовок:</th>
                    <th>Текст:</th>
                    <th></th>
                    <th></th>
                </tr>

                <?php foreach ($allNews as $news): ?>

                <tr>
                    <td><?php echo $news['id']; ?>.</td>
                    <td><?php echo $news['date']; ?></td>
                    <td><?php echo $news['title']; ?></td>
                    <td><?php echo $news['content']; ?></td>
                    <td><a href="/admin/news/update/<?php echo $news['id']; ?>" title="Редактировать"><i class="">Редактировать</i></a></td>
                    <td><a href="/admin/news/delete/<?php echo $news['id']; ?>" title="Удалить"><i class=""></i>Удалить</a></td>
                </tr>

                <?php endforeach; ?>

            </table>

        </div>		<!-- #wide ends -->

    </div>		<!-- #content ends -->

</div>		<!-- #holder ends -->

<?php include ROOT . '/views/layouts/footer.php'; ?>

