<?php

include(ROOT_PATH . "/app/server/db.php");
include(ROOT_PATH . "/app/helpers/validateRecipe.php");

$errors = array();
$table = 'recipes';

$id = '';
$category_id = '';
$user_id = '';
$title = '';
$description = '';
$prep_time = '';
$cook_time = '';
$serving = '';
$tags = '';
$published = '';

$categories = selectAll('categories');
$recipes = selectAll($table);
$persons = ['1 person', '2 persons', '4 persons', '6 persons', '8 persons'];

if (isset($_GET['id'])) {
    $recipe = selectOne($table, ['id' =>$_GET['id']]);

    $id = $recipe['id'];
    $category_id = $recipe['category_id'];
    $user_id = $recipe['user_id'];
    $title = $recipe['title'];
    $description = $recipe['description'];
    $prep_time = $recipe['prep_time'];
    $cook_time = $recipe['cook_time'];
    $serving = $recipe['serving'];
    $tags = $recipe['tags'];
    $published = $recipe['published'];
}

if(isset($_POST['add-recipe'])){
    $errors = validateRecipe($_POST);
    //  dd($_FILES['image']['name']);

    if(!empty($_FILES['image']['name'])){

        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . '/assets/images/uploads/' . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if($result){
            $_POST['image'] =  $image_name;
        }else {
            array_push($errors, 'Failed to upload image');
        }
    } else {
        array_push($errors, 'Post image required');
    }

    if (count($errors) === 0) {
        unset($_POST['add-recipe']);

        // $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['description'] = htmlentities($_POST['description']);
        $recipe_id = create($table, $_POST);
        $_SESSION['message'] = 'Recipe created successfully';
        $_SESSION['type'] = 'alert-success';

        header('location: ' . BASE_URL . '/views/authorized/recipes/index.php');
        exit();
    } else {
        $category_id = $_POST['category_id'];
        $user_id = $_POST['user_id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $prep_time = $_POST['prep_time'];
        $cook_time = $_POST['cook_time'];
        $serving = $_POST['serving'];
        $tags = $_POST['tags'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}

if (isset($_GET['del_recipe_id'])) {
    // adminOnly();
    $count = delete($table, $_GET['del_recipe_id']);
    $_SESSION['message'] = 'Recipe deleted successfuly.';
    $_SESSION['type'] = 'alert-success';
    header('location: ' . BASE_URL . '/views/authorized/recipes/index.php');
    exit();
}

if(isset($_POST['update-recipe'])){
    $errors = validateRecipe($_POST);
    // dd($_POST);

    if(!empty($_FILES['image']['name'])){
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . '/assets/images/uploads/' . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if($result){
            $_POST['image'] =  $image_name;
        }else {
            array_push($errors, 'Failed to upload image');
        }
    }
    // else {
    //     array_push($errors, 'Post image required');
    // }

    if(count($errors) == 0){
        $id = $_POST['id'];
        unset($_POST['update-recipe'], $_POST['id']);
        // dd($_POST);
        // $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['description'] = htmlentities($_POST['description']);

        $recipe_id = update($table, $id, $_POST);
        $_SESSION['message'] = 'Recipe updated successfuly.';
        $_SESSION['type'] = 'alert-success';
        header('location: ' . BASE_URL . '/views/authorized/recipes/index.php');
        exit();
    }else {
        $category_id = $_POST['category_id'];
        $user_id = $_POST['user_id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $prep_time = $_POST['prep_time'];
        $cook_time = $_POST['cook_time'];
        $serving = $_POST['serving'];
        $tags = $_POST['tags'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}