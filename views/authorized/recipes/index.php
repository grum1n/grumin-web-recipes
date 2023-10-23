<?php 
include('../../../path.php'); 
include(ROOT_PATH . '/app/controllers/recipes.php');

$page_title = 'Recipes | DASHBOARD';

?>

<?php include(ROOT_PATH . '/views/includes/authorized/header.php'); ?>

    <div class="dashboard-content">
        <?php include(ROOT_PATH . '/views/includes/authorized/messages.php'); ?>
        <br />
        <a href="<?php echo BASE_URL . '/views/authorized/recipes/create.php'; ?>">add new</a>
        </br>
        <table>
            <thead>
                <th>id</th>
                <th>Recipes</th>
                <th>category_id</th>
                <th>user_id</th>
                <th>description</th>
                <th>prep_time</th>
                <th>cook_time</th>
                <th>serving</th>
                <th colspan="2">Action</th>
            </thead>
            <tbody>
                <?php if(count($recipes) >= 1) : ?>
                    <?php foreach($recipes as $key => $recipe) : ?>

                        <tr class="rec">
                            <td><?php echo $recipe['id']; ?>. </td>
                            <td><img src="<?php echo BASE_URL . '/assets/images/uploads/' . $recipe['image']; ?>" width="100" alt="<?php echo $recipe['title']; ?>"> <?php echo $recipe['title']; ?></td>
                            <td><?php echo $recipe['category_id']; ?></td>
                            <td><?php echo $recipe['user_id']; ?></td>
                            <td><?php echo $recipe['description']; ?></td>
                            <td><?php echo $recipe['prep_time']; ?></td>
                            <td><?php echo $recipe['cook_time']; ?></td>
                            <td><?php echo $recipe['serving']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $recipe['id']; ?>" class="btn alert-success">
                                    Edit
                                </a>
                            </td>
                            <td>
                                <a href="index.php?del_recipe_id=<?php echo $recipe['id']; ?>" class="btn alert-danger" onclick="return confirm('Are you sure to delete this recipe?')">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <?php else : ?>
                        <tr class="rec">
                            <td colspan="11"> No data</td>
                        </tr>
                <?php endif; ?>

            </tbody>
        </table>
    </div>
   
<?php include(ROOT_PATH . '/views/includes/authorized/footer.php'); ?>