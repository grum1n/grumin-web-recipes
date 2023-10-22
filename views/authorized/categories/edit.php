<?php 
include('../../../path.php'); 
include(ROOT_PATH . '/app/controllers/categories.php');

$page_title = 'Categories - Edit | DASHBOARD';
?>

<?php include(ROOT_PATH . '/views/includes/authorized/header.php'); ?>
    <div class="dashboard-content">
        <a href="<?php echo BASE_URL . '/views/authorized/categories/index.php'; ?>">back</a>
        </br>
        <?php include(ROOT_PATH . '/app/helpers/formErrors.php') ?>
        
        <form action="edit.php" method="POST" class="form contact-form">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-row">
                <label html="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-input" value="<?php echo $name; ?>" />
            </div>
            <div class="form-row">
                <label html="description" class="form-label">Description</label>
                <input type="text" name="description" id="description" class="form-input" value="<?php echo $description; ?>" />
            </div>
            
            <button type="submit" name="update-category" class="btn btn-block">
                update
            </button>
        </form>  
    </div>
<?php include(ROOT_PATH . '/views/includes/authorized/footer.php'); ?>