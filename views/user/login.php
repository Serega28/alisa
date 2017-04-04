<?php include ROOT . '/views/layouts/header.php'; ?>

    <div id="holder">

        <div class="pagetitle">
            <h2>Вход</h2>
            <ul>
                <li><img src="/upload/images/icons/add_user.png" alt="" />
            </ul>
        </div>

        <div id="content">

            <div id="wide" class="contact">

                <p></p>
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

                            <p>
                                <label>Введите Ваш E-mail:</label> <br />
                                <input type="email" name="email" class="text" value="<?php echo $email; ?>"/>
                            </p>

                            <p>
                                <label>Введите пароль:</label> <br />
                                <input type="password" name="password" class="text" value="<?php echo $password; ?>"/>
                            </p>

                            <p>
                                <input type="submit" name="submit" class="submit" value="Вход" />
                            </p>

                        </fieldset>
                    </form>

            </div><!--/sign up form-->

        </div>		<!-- #wide ends -->

    </div>		<!-- #content ends -->




<?php include ROOT . '/views/layouts/footer.php'; ?>