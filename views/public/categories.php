<?php 
    include('../../path.php'); 
    include(ROOT_PATH . "/app/controllers/categories.php");

    $page_title = 'TAGS';
?>

<?php include(ROOT_PATH . '/views/includes/public/header.php'); ?>

<main>
    <section class="tags-wrapper">
      <?php foreach($categories as $category) : ?>
        <a href="<?php echo BASE_URL . '/views/public/recipes.php?category_id=' . $category['id'] . '&name=' . $category['name']; ?>" class="tag">
          <h5><?= $category['name'] ?></h5>
          <p>1 recipe</p>
        </a>
      <?php endforeach; ?>
    </section>
</main>
    
<?php include(ROOT_PATH . '/views/includes/public/footer.php'); ?>