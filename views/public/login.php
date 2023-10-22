<?php 
    include('../../path.php'); 

    $page_title = 'LOGIN';
?>

<?php include(ROOT_PATH . '/views/includes/public/header.php'); ?>

<main>
    <section class="contact-container">
        <article>
            <form class="form contact-form">
                <div class="form-row">
                <label html="email" class="form-label">email</label>
                <input type="email" name="email" id="email" class="form-input" />
                </div>
                <div class="form-row">
                <label html="password" class="form-label">password</label>
                <input type="password" name="password" id="password" class="form-input" />
                </div>
                <!-- <button type="submit" class="btn btn-block">
                Sign IN
                </button> -->
                <a href="<?php echo BASE_URL . '/views/authorized/dashboard.php'; ?>">login</a>
            </form>
        </article>
    </section>
</main>
    
<?php include(ROOT_PATH . '/views/includes/public/footer.php'); ?>