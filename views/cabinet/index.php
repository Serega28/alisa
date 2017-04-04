<?php include ROOT . '/views/layouts/header.php'; ?>

        <div id="holder">


            <div class="pagetitle">
                <h2>Личный кабинет</h2>
                <ul>
                    <li><img src="/upload/images/icons/checked_user.png" alt="" />
                </ul>
            </div>


            <div id="content">


                <div id="wide" class="contact">

                    <blockquote>
                        Привет, <?php echo $user['name'];?>! Это Ваш личный кабинет.
                        Здесь Вы можете изменить свои данные либо перейти к управлению содержимым сайта.
                    </blockquote>

                    <blockquote>
                        <ul>
                            <li><a href="/cabinet/edit">Редактировать данные</a></li>
                            <?php if($user['role'] == 'admin'):?>
                                <li><a href="/admin">Админпанель</a></li>
                            <?php endif ;?>
                        </ul>
                    </blockquote>
                </div>		<!-- #wide ends -->

            </div>		<!-- #content ends -->

        </div>		<!-- #holder ends -->

<?php include ROOT . '/views/layouts/footer.php'; ?>