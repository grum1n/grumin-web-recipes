<?php if($page_title === 'HOME') : ?>
        <aside>
            <h4>Recipes</h4>
            <div class="tags-list">
                <?php foreach($categories as $category) : ?>
                    <a href="<?php echo BASE_URL . '/index.php?category_id=' . $category['id'] . '&name=' . $category['name']; ?>">
                        <?= $category['name'] ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </aside>
    <?php else : ?>
        <aside>
        <h4>Recipes</h4>
        <div class="tags-list">
            <?php foreach($categories as $category) : ?>
                <a href="<?php echo BASE_URL . '/views/public/recipes.php?category_id=' . $category['id'] . '&name=' . $category['name']; ?>">
                    <?= $category['name'] ?>
                </a>
            <?php endforeach; ?>
        </div>
    </aside>
<?php endif; ?>


