<?php 
    include('../../path.php'); 
    include(ROOT_PATH . "/app/controllers/recipes.php");

    $page_title = 'CONTACT';
    $recipes = getPublishedRecipes();
    $i = 0;
?>

<?php include(ROOT_PATH . '/views/includes/public/header.php'); ?>

<main>
    <section class="contact-container">
        <article class="contact-info">
            <h3>Want To Get In Touch?</h3>
            <p>
                Four dollar toast biodiesel plaid salvia actually pickled banjo
                bespoke mlkshk intelligentsia edison bulb synth.
            </p>
            <p>Cardigan prism bicycle rights put a bird on it deep v.</p>
            <p>
                Hashtag swag health goth air plant, raclette listicle fingerstache
                cold-pressed fanny pack bicycle rights cardigan poke.
            </p>
        </article>
        <article>
            <form class="form contact-form">
                <div class="form-row">
                <label html="name" class="form-label">your name</label>
                <input type="text" name="name" id="name" class="form-input" />
                </div>
                <div class="form-row">
                <label html="email" class="form-label">your email</label>
                <input type="text" name="email" id="email" class="form-input" />
                </div>
                <div class="form-row">
                <label html="message" class="form-label">message</label>
                <textarea name="message" id="message" class="form-textarea"></textarea>
                </div>
                <button type="submit" class="btn btn-block">
                submit
                </button>
            </form>
        </article>
    </section>
    <section class="featured-recipes">
        <h5 class="featured-title">Look At This Awesome Food!</h5>
        <div class="recipes-list">
          <?php foreach ($recipes as $recipe) : ?>
            <?php if($i >= 3) {break;} else { ?>
            <a href="<?php echo BASE_URL . '/views/public/single.php?recipe_id='  . $recipe['id']; ?>" class="recipe">
              <img
                  src="<?php echo BASE_URL . '/assets/images/uploads/' . $recipe['image']; ?>"
                class="img recipe-img"
                alt=""
              />
              <h5>Carne Asada</h5>
              <p>Prep : 15min | Cook : 5min</p>
            </a>
          <?php $i++; } endforeach; ?>
        </div>
    </section>
   
</main>
    
<?php include(ROOT_PATH . '/views/includes/public/footer.php'); ?>