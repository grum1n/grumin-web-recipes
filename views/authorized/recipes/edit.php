<?php 
include('../../../path.php'); 
include(ROOT_PATH . '/app/controllers/recipes.php');
adminOnly();

$page_title = 'Recipes - Edit | DASHBOARD';
?>

<?php include(ROOT_PATH . '/views/includes/authorized/header.php'); ?>
    <div class="dashboard-content">
        <a href="<?php echo BASE_URL . '/views/authorized/recipes/index.php'; ?>">back</a>
        </br>
        <?php include(ROOT_PATH . '/app/helpers/formErrors.php') ?>
        
        <p>edit id: <?php echo $id; ?></p>
        
        <form action="edit.php" method="POST" class="form contact-form"  enctype="multipart/form-data">
            <input type="hidden" name="id" class="form-input" value="<?php echo $id; ?>" />
            <input type="hidden" name="user_id" class="form-input" value="<?php echo $user_id; ?>" />

            <div class="form-row">
                <label>Category</label>
                <select class="form-input" name="category_id">
                    <option value="">Select a Category</option>
                    <?php foreach($categories as $key => $category) : ?>
                        <?php if(!empty($category_id) && $category_id == $category['id']) : ?>
                                <option selected value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                            <?php else : ?>
                                <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                        <?php endif; ?>

                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="form-row">
                <label html="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-input" value="<?php echo $title; ?>" />
            </div>
            
            <div class="form-row">
                <label html="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-input" value="<?php echo $description; ?>" />
            </div>

            <div class="form-row">
                <label html="prep_time" class="form-label">prep_time</label>
                <input type="text" name="prep_time" id="prep_time" class="form-input" value="<?php echo $prep_time; ?>" />
            </div>

            <div class="form-row">
                <label html="cook_time" class="form-label">cook_time</label>
                <input type="text" name="cook_time" id="cook_time" class="form-input" value="<?php echo $cook_time; ?>" />
            </div>

            <div class="form-row">
                <label>Serving</label>
                <select class="form-input" name="serving">
                    <option value="">Select a persons</option>
                    <?php foreach($persons as $key => $person) : ?>
                        <?php if(!empty($serving) && $serving == $person) : ?>
                                <option selected value="<?php echo $person; ?>"><?php echo $person; ?></option>
                            <?php else : ?>
                                <option value="<?php echo $person; ?>"><?php echo $person; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-row">
                <label html="tags" class="form-label">tags</label>
                <input type="text" name="tags" id="tags" class="form-input" value="<?php echo $tags; ?>" />
            </div>

            <div class="form-row">
                   <?php if (empty($published) && $published == 0) : ?>
                        <label>
                            <input type="checkbox" name="published" /> Publish
                        </label>     
                    <?php else : ?>
                        <label>
                            <input type="checkbox" name="published" checked /> Publish
                        </label>    
                <?php endif; ?>
            </div>

            <div class="form-row">
                <label html="image" class="form-label">Image</label>
                <input type="file" name="image" id="image" class="form-input" />
            </div>
            
            <button type="submit" name="update-recipe" class="btn btn-block">
                update
            </button>
        </form>  
    </div>
<?php include(ROOT_PATH . '/views/includes/authorized/footer.php'); ?>