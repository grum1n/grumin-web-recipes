<?php 
include('../../../path.php'); 
include(ROOT_PATH . '/app/controllers/categories.php');
adminOnly();

$page_title = 'Categories - New | DASHBOARD';
?>

<?php include(ROOT_PATH . '/views/includes/authorized/header.php'); ?>
    <div class="dashboard-content">
        <a href="<?php echo BASE_URL . '/views/authorized/categories/create.php'; ?>">add new</a>
        </br>
        <?php include(ROOT_PATH . '/app/helpers/formErrors.php') ?>
        
        <form action="create.php" method="POST" class="form contact-form">
            <div class="form-row">
                <label html="name" class="form-label">Category Name</label>
                <input type="text" name="name" id="name" class="form-input" value="<?php echo $name; ?>" />
            </div>
            <div class="form-row">
                <label html="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-input" value="<?php echo $description; ?>" />
            </div>
            
            <button type="submit" name="add-category" class="btn btn-block">
                add
            </button>
        </form>  
    </div>
<?php include(ROOT_PATH . '/views/includes/authorized/footer.php'); ?>