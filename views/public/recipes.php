<?php 
    include('../../path.php'); 

    $page_title = 'RESIPES';
?>

<?php include(ROOT_PATH . '/views/includes/public/header.php'); ?>

<main>
    <section class="recipes-container">
        <aside>
            <h4>recipes</h4>
            <div class="tags-list">
                <a href="tag-template.html">Beef (1)</a>
                <a href="tag-template.html">Breakfast (2)</a>
                <a href="tag-template.html">Carrots (3)</a>
                <a href="tag-template.html">Food (4)</a>
            </div>
        </aside>

        <div class="recipes-list">
            
            <a href="single-recipe.html" class="recipe">
                <img
                src="<?php echo BASE_URL . '/assets/images/web/recipe-1.jpeg'; ?>"
                class="img recipe-img"
                alt=""
                />
                <h5>Carne Asada</h5>
                <p>Prep : 15min | Cook : 5min</p>
            </a>
            
            <a href="single-recipe.html" class="recipe">
                <img
                src="<?php echo BASE_URL . '/assets/images/web/recipe-2.jpeg'; ?>"
                class="img recipe-img"
                alt=""
                />
                <h5>Greek Ribs</h5>
                <p>Prep : 15min | Cook : 5min</p>
            </a>
            
            <a href="single-recipe.html" class="recipe">
                <img
                src="<?php echo BASE_URL . '/assets/images/web/recipe-3.jpeg'; ?>"
                class="img recipe-img"
                alt=""
                />
                <h5>Vegetable Soup</h5>
                <p>Prep : 15min | Cook : 5min</p>
            </a>
            
            <a href="single-recipe.html" class="recipe">
                <img
                src="<?php echo BASE_URL . '/assets/images/web/recipe-3.jpeg'; ?>"
                class="img recipe-img"
                alt=""
                />
                <h5>Banana Pancakes</h5>
                <p>Prep : 15min | Cook : 5min</p>
            </a>
            
        </div>
    </section>
</main>
    
    
<?php include(ROOT_PATH . '/views/includes/public/footer.php'); ?>