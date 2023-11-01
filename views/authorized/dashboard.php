<?php 
include('../../path.php'); 
include(ROOT_PATH . '/app/controllers/users.php');
adminOnly();

$page_title = 'DASHBOARD';
?>

<?php include(ROOT_PATH . '/views/includes/authorized/header.php'); ?>
    <div class="recipes-list">
        <?php include(ROOT_PATH . '/views/includes/authorized/messages.php'); ?>
        <br />
        Dashboard 
    </div>
<?php include(ROOT_PATH . '/views/includes/authorized/footer.php'); ?>

    