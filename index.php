<?php 
include('path.php'); 
include(ROOT_PATH . "/app/controllers/recipes.php");

$recipes = array();
$page_title = 'HOME';

if(isset($_GET['category_id'])) {
    // dd($_GET);
    $recipes = getRecipeByCategoryId($_GET['category_id']);
    // $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
} else {
    $recipes = getPublishedRecipes();
}

?>

<?php include(ROOT_PATH . '/views/includes/public/header.php'); ?>

<?php include(ROOT_PATH . '/views/includes/public/hero.php'); ?>

<main>
    <?php include(ROOT_PATH . '/views/includes/authorized/messages.php'); ?>
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

    