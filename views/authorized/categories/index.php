<?php 
include('../../../path.php'); 
include(ROOT_PATH . '/app/controllers/categories.php');

$page_title = 'Categories | DASHBOARD';

?>

<?php include(ROOT_PATH . '/views/includes/authorized/header.php'); ?>

    <div class="dashboard-content">
        <?php include(ROOT_PATH . '/views/includes/authorized/messages.php'); ?>
        <br />
        <a href="<?php echo BASE_URL . '/views/authorized/categories/create.php'; ?>">add new</a>
        </br>
        <table>
            <thead>
                <th>id</th>
                <th>Name</th>
                <th colspan="2">Action</th>
            </thead>
            <tbody>
                <?php if(count($categories) >= 1) : ?>
                    <?php foreach($categories as $key => $category) : ?>

                        <tr class="rec">
                            <td><?php echo $category['id']; ?>. </td>
                            <td><?php echo $category['name']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $category['id']; ?>" class="btn alert-success">
                                    Edit
                                </a>
                            </td>
                            <td>
                                <a href="index.php?del_id=<?php echo $category['id']; ?>" class="btn alert-danger" onclick="return confirm('Are you sure to delete this category?')">
                                    Delete
                                </a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                    <?php else : ?>
                        <tr class="rec">
                            <td colspan="5"> No data</td>
                        </tr>
                <?php endif; ?>

            </tbody>
        </table>
    </div>
   
<?php include(ROOT_PATH . '/views/includes/authorized/footer.php'); ?>