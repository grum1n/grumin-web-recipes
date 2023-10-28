<?php 
    include('../../path.php'); 
    include(ROOT_PATH . "/app/controllers/recipes.php");
    
    $page_title = 'SINGLE';
    $tags = explode(',', $recipe['tags']);
?>

<?php include(ROOT_PATH . '/views/includes/public/header.php'); ?>

<main>
    <section class="recipe-hero">
        <img
        src="<?php echo BASE_URL . '/assets/images/uploads/' . $recipe['image']; ?>"
        class="img recipe-hero-img"
        />
        <article class="recipe-info">
        <h2><?php echo $recipe['title']; ?></h2>
        <p>
            <?php echo $recipe['description']; ?>
        </p>
        <div class="recipe-icons">
            <article>
            <i class="fas fa-clock"></i>
            <h5>prep time</h5>
            <p><?php echo $recipe['prep_time']; ?></p>
            </article>
            <article>
            <i class="far fa-clock"></i>
            <h5>cook time</h5>
            <p><?php echo $recipe['cook_time']; ?></p>
            </article>
            <article>
            <i class="fas fa-user-friends"></i>
            <h5>serving</h5>
            <p><?php echo $recipe['serving']; ?></p>
            </article>
        </div>
        <p class="recipe-tags">
            Tags :
            <?php foreach($tags as $tag): ?>
                <a href="#"><?= $tag ?></a>
            <?php endforeach; ?>
        </p>
        </article>
    </section>
    <!-- content -->
    <section class="recipe-content">
        <article>
        <h4>instructions</h4>
        <!-- single instruction -->
        <div class="single-instruction">
            <header>
            <p>step 1</p>
            <div></div>
            </header>
            <p>
            I'm baby mustache man braid fingerstache small batch venmo
            succulents shoreditch.
            </p>
        </div>
        <!-- end of single instruction -->
        <!-- single instruction -->
        <div class="single-instruction">
            <header>
            <p>step 2</p>
            <div></div>
            </header>
            <p>
            Pabst pitchfork you probably haven't heard of them, asymmetrical
            seitan tousled succulents wolf banh mi man bun bespoke selfies
            freegan ethical hexagon.
            </p>
        </div>
        <!-- end of single instruction -->
        <!-- single instruction -->
        <div class="single-instruction">
            <header>
            <p>step 3</p>
            <div></div>
            </header>
            <p>
            Polaroid iPhone bitters chambray. Cornhole swag kombucha
            live-edge.
            </p>
        </div>
        <!-- end of single instruction -->
        </article>
        <article class="second-column">
        <div>
            <h4>ingredients</h4>
            <p class="single-ingredient">1 1/2 cups dry pancake mix</p>
            <p class="single-ingredient">1/2 cup flax seed meal</p>
            <p class="single-ingredient">1 cup skim milk</p>
        </div>
        <div>
            <h4>tools</h4>
            <p class="single-tool">Hand Blender</p>
            <p class="single-tool">Large Heavy Pot With Lid</p>
            <p class="single-tool">Measuring Spoons</p>
            <p class="single-tool">Measuring Cups</p>
        </div>
        </article>
    </section>
</main>
    
<?php include(ROOT_PATH . '/views/includes/public/footer.php'); ?>