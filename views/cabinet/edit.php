<?php include ROOT . '/views/layouts/header.php'; ?>

    <div id="holder">

        <div class="pagetitle">
            <h2>Личные данные</h2>
            <ul>
                <li><img src="/upload/images/icons/edit_user.png" alt="" />
            </ul>
        </div>

        <div id="content">

            <div id="wide" class="contact">

                <?php if ($result): ?>
                    <p>Данные отредактированы!</p>
                <?php else: ?>
                <?php if (isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li> - <?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <div class="clear sep"></div>

                <form id="contact-form" action="#" method="post" >
                    <fieldset class="right">

                        <p>Введите новый E-mail и пароль:</p>

                        <p><label>Введите новый логин:</label> <br />
                            <input type="text" name="name" class="text" value="<?php echo $name; ?>"/>
                        </p>

                        <p><label>Введите пароль:</label> <br />
                            <input type="text" name="password" class="text" value="<?php echo $password; ?>"/>
                        </p>

                        <p><input type="submit" name="submit" class="submit" value="Сохранить" /></p>

                    </fieldset>
                </form>

            </div><!--/sign up form-->
            <?php endif; ?>

        </div>		<!-- #wide ends -->

    </div>		<!-- #content ends -->




<?php include ROOT . '/views/layouts/footer.php'; ?>