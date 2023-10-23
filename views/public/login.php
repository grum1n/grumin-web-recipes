<?php 
    include('../../path.php'); 
    include(ROOT_PATH . '/app/controllers/users.php');
    guestsOnly();

    $page_title = 'LOGIN';
?>

<?php include(ROOT_PATH . '/views/includes/public/header.php'); ?>

<main>
    <section class="contact-container">
        <article>
            <?php include(ROOT_PATH . '/app/helpers/formErrors.php') ?>
            <form action="login.php" method="POST" class="form contact-form">

                <div class="form-row">
                    <label for="username" value="<?php echo $username; ?>" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-input" />
                </div>

                <div class="form-row">
                    <label for="password" value="<?php echo $password; ?>" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-input" />
                </div>

                <button type="submit" name="login-btn" class="btn btn-block">
                    Sign IN
                </button>
            </form>
        </article>
    </section>
</main>
    
<?php include(ROOT_PATH . '/views/includes/public/footer.php'); ?>