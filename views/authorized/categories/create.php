<?php 
include('../../../path.php'); 
include(ROOT_PATH . '/app/controllers/categories.php');
adminOnly();

$page_title = 'Categories - New | DASHBOARD';
?>

<?php include(ROOT_PATH . '/views/includes/authorized/header.php'); ?>
    <div class="dashboard-content">
        <div class="top-button-back">
            <a href="<?php echo BASE_URL . '/views/authorized/categories/index.php'; ?>">
                <i class="fa-solid fa-arrow-left-long"></i>
            </a>
        </div>
      
        
        <form action="create.php" method="POST" class="">
            <?php include(ROOT_PATH . '/app/helpers/formErrors.php') ?>
            <label html="name" class="form-label">Category Name</label>
            <input type="text" name="name" id="name" class="" value="<?php echo $name; ?>" />
        
            <label html="description" class="">Description</label>
            <textarea name="description" id="description"><?php echo $description; ?></textarea>
            
            <button type="submit" name="add-category" class="">
                Add
            </button>
        </form>  
    </div>
<?php include(ROOT_PATH . '/views/includes/authorized/footer.php'); ?>