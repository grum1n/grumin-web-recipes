<?php 
    include('../../path.php'); 
    include(ROOT_PATH . "/app/controllers/recipes.php");

    $page_title = 'ABOUT';

    $recipes = array_reverse(getPublishedRecipes());

    $i = 0;
?>

<?php include(ROOT_PATH . '/views/includes/public/header.php'); ?>

<main>
    <section class="about-page">
        <article>
          <h2>I'm baby coloring book poke taxidermy</h2>
          <p>
            Taxidermy forage glossier letterpress heirloom before they sold out
            you probably haven't heard of them banh mi biodiesel chia.
          </p>
          <p>
            Taiyaki tumblr flexitarian jean shorts brunch, aesthetic salvia
            retro.
          </p>
          <a href="<?php echo BASE_URL . '/views/public/contact.php'; ?>" class="btn"> contact </a>
        </article>
        <!-- needs fixes -->
        <img
            src="<?php echo BASE_URL . '/assets/images/web/about.jpeg'; ?>"
            alt="Person Pouring Salt in Bowl"
            class="img about-img"
        />
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