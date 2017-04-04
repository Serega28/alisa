<?php include ROOT . '/views/layouts/header.php'; ?>

        <div id="holder">

            <div class="pagetitle">
                <h2>Главная</h2>
            </div>

            <div id="content" class="contact">

                <blockquote>
                    <p>
                        <b>Пятничный отрыв начинается с самой вкусной и сочной вечеринки!
                        Попади на ночь экзотического изобилия! Море позитива и сумасшедшего настроения!
                        Пей самые лучшие, красивые и вкусные коктейли и заряжайся позитивным настроением и оторвись на полную катушку!
                        И все это исключительно в #ALISA и специально для вас!</b>
                    </p>
                </blockquote>
                <br>
            </div>		<!-- #main ends -->

            <div id="content">

                <?php foreach ($lastNews as $lastNewsItem) : ?>

                    <div id="main" class="blogpost">

                        <p><img src="<?php echo News::getImage($lastNewsItem['id']); ?>" width="589"></p>

                    </div>

                <?php endforeach; ?>

                <div id="content">

                    <div id="side">

                        <blockquote>
                            <h4>График работы:</h4><br>
                            <p>
                                Пятница,суббота с 21:00 до 3:00<br><br>
                                Со вторника по четверг с 9:00 до 23:00<br><br>
                                Воскресенье,понедельник - выходные
                            </p>
                        </blockquote>

                    </div>

                </div><!-- #side ends -->

                <div id="services">

                    <ul>

                        <li class="design">
                            <h3>Контакты:</h3>
                            <p>
                                <b>Телефон: +380993654943<br><br>
                                Email:Shportoon1991@mail.ru<br><br>
                                Наша группа</b>  <a href="https://vk.com/club61161207"><img src="/upload/images/icons/vk.png"></a><br>

                            </p>
                        </li>


                        <li class="middle build">
                            <h3>Адрес:</h3>
                                <p>
                                    <b>Кировоградская обл.,<br><br>
                                    пгт.Компанеевка,<br><br>
                                    ул.Ленина(Победы) 156
                                    </b>
                                </p>
                        </li>


                        <li class="manage">
                            <h3>Карта</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m11!1m3!1d1137.343733120125!2d32.2072092077599!3d48.249722047193025!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sru!2sua!4v1490107562262" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </li>

                    </ul>

                </div>		<!-- #services ends -->

            </div>		<!-- #content ends -->

        </div>		<!-- #holder ends -->

<?php include ROOT . '/views/layouts/footer.php'; ?>