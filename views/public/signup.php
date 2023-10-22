<?php 
    include('../../path.php'); 

    $page_title = 'SIGN UP';
?>

<?php include(ROOT_PATH . '/views/includes/public/header.php'); ?>

<main>
    <section class="contact-container">
        <article>
            <form class="form contact-form">
                <div class="form-row">
                <label html="name" class="form-label">name</label>
                <input type="text" name="name" id="name" class="form-input" />
                </div>
                <div class="form-row">
                <label html="email" class="form-label">email</label>
                <input type="email" name="email" id="email" class="form-input" />
                </div>
                <div class="form-row">
                <label html="password" class="form-label">password</label>
                <input type="password" name="password" id="password" class="form-input" />
                </div>
                <button type="submit" class="btn btn-block">
                    Register
                </button>
            </form>
        </article>
    </section>
</main>
    
<?php include(ROOT_PATH . '/views/includes/public/footer.php'); ?>