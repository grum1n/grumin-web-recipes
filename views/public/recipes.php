<?php 
    include('../../path.php'); 
    include(ROOT_PATH . "/app/controllers/recipes.php");

    $page_title = 'RECIPES';

    $recipes = array();
    $recipesTitle = '';

    if(isset($_GET['category_id'])) {
        $recipes = getRecipeByCategoryId($_GET['category_id']);
    } else if(isset($_POST['search-term'])) {
        $recipes = searchRecipes($_POST['search-term']);
        $recipesTitle = "You searched for '" . $_POST['search-term'] . "'";
    } else {
        $recipes = getPublishedRecipes();
    }
?>

<?php include(ROOT_PATH . '/views/includes/public/header.php'); ?>

<div class="" style="margin:20px auto;width:300px;">
    <form action="recipes.php" method="post">
        <input type="text" name="search-term" class="" placeholder="Search..." style="width:300px;">
    </form>
</div>
<p><?php echo $recipesTitle; ?></p>
<main>
    <section class="recipes-container">
        <?php include(ROOT_PATH . '/views/includes/public/sidebar.php'); ?>
        <div class="recipes-list">
            <?php if (count($recipes) >= 1) : ?>
                <?php foreach($recipes as $recipe) : ?>
                    <a href="<?php echo BASE_URL . '/views/public/single.php?recipe_id='  . $recipe['id']; ?>" class="recipe">
                        <img
                        src="<?php echo BASE_URL . '/assets/images/uploads/' . $recipe['image']; ?>"
                        class="img recipe-img"
                        alt="<?php echo $recipe['title']; ?>"
                        />
                        <h5><?php echo $recipe['title']; ?></h5>
                        <p>Prep : <?php echo $recipe['prep_time']; ?> | Cook : <?php echo $recipe['cook_time']; ?></p>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>
</main>
    
<?php include(ROOT_PATH . '/views/includes/public/footer.php'); ?>