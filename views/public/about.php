<?php 
    include('../../path.php'); 

    $page_title = 'ABOUT';
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
          <a href="contact.html" class="btn"> contact </a>
        </article>
        <!-- needs fixes -->
        <img
            src="<?php echo BASE_URL . '/assets/images/web/about.jpeg'; ?>"
            alt="Person Pouring Salt in Bowl"
            class="img about-img"
        />
    </section>
    <section class="featured-recipes">
        <h5 class="featured-title">Look At This Awesomesouce!</h5>
        <div class="recipes-list">
          <!-- single recipe -->
          <a href="single-recipe.html" class="recipe">
            <img
                src="<?php echo BASE_URL . '/assets/images/web/recipe-1.jpeg'; ?>"
              class="img recipe-img"
              alt=""
            />
            <h5>Carne Asada</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <a href="single-recipe.html" class="recipe">
            <img
                src="<?php echo BASE_URL . '/assets/images/web/recipe-2.jpeg'; ?>"
              class="img recipe-img"
              alt=""
            />
            <h5>Greek Ribs</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <a href="single-recipe.html" class="recipe">
            <img
                src="<?php echo BASE_URL . '/assets/images/web/recipe-3.jpeg'; ?>"
              class="img recipe-img"
              alt=""
            />
            <h5>Vegetable Soup</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <!-- end of single recipe -->
        </div>
    </section>
</main>
    
<?php include(ROOT_PATH . '/views/includes/public/footer.php'); ?>