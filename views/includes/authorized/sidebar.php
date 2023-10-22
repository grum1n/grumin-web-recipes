<aside>
    <h4>Categories</h4>
    <div class="tags-list">
        <?php foreach($categories as $category) : ?>
            <a href="#">
                <?= $category['name'] ?>
            </a>
        <?php endforeach; ?>
    </div>
</aside>