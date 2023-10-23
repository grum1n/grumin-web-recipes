<?php 
    include('../../path.php'); 
    include(ROOT_PATH . '/app/controllers/users.php');

    $page_title = 'SIGN UP';
?>

<?php include(ROOT_PATH . '/views/includes/public/header.php'); ?>

<main>
    <section class="contact-container">
        <article>
            <?php include(ROOT_PATH . '/app/helpers/formErrors.php') ?>
           
            <form action="signup.php" method="POST" class="form contact-form" >

                <div class="form-row">
                    <label for="username" class="form-label">Name</label>
                    <input type="text" name="username" id="username" value="<?php echo $username; ?>" class="form-input" />
                </div>

                <div class="form-row">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" value="<?php echo $email; ?>" class="form-input" />
                </div>

                <div class="form-row">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" value="<?php echo $password; ?>" class="form-input" />
                </div>

                <div class="form-row">
                    <label for="passwordConf" class="form-label">Confirm Password</label>
                    <input type="password" name="passwordConf" id="passwordConf" value="<?php echo $passwordConf; ?>" class="form-input" />
                </div>

                <button type="submit" name="register-btn" class="btn btn-block">
                    Register
                </button>
            </form>
        </article>
    </section>
</main>
    
<?php include(ROOT_PATH . '/views/includes/public/footer.php'); ?>