<?php include ROOT . '/views/layouts/header.php'; ?>

    <div id="holder">

        <div class="pagetitle">
            <h2>Регистрация</h2>
            <ul>
                <li><img src="/upload/images/icons/add_user.png" alt="" />
            </ul>
        </div>

        <div id="content">

            <div id="wide" class="contact">

                <?php if ($result): ?>
                    <p>Вы зарегистрированы!</p>
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
                        <p>Введите свой E-mail и пароль:</p>

                        <p><label>Введите логин:</label> <br />
                            <input type="text" name="name" class="text" value="<?php echo $name; ?>"/>
                        </p>

                        <p><label>Введите E-mail:</label> <br />
                            <input type="email" name="email" class="text" "<?php echo $email; ?>"
                        </p>

                        <p><label>Введите пароль:</label> <br />
                            <input type="text" name="password" class="text" value="<?php echo $password; ?>"/>
                        </p>

                        <p><input type="submit" name="submit" class="submit" value="Регистрация" /></p>

                    </fieldset>
                </form>

            </div><!--/sign up form-->

            <?php endif; ?>

    </div>		<!-- #wide ends -->

</div>		<!-- #content ends -->




<?php include ROOT . '/views/layouts/footer.php'; ?>