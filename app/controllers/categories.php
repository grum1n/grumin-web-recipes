<?php

include(ROOT_PATH . "/app/server/db.php");
include(ROOT_PATH . "/app/helpers/validateCategory.php");

$errors = array();
$table = 'categories';
$id = '';
$name = '';
$description = '';

$categories = selectAll($table);

if(isset($_POST['add-category'])){
    $errors = validateCategory($_POST);
    if (count($errors) === 0) {
        unset($_POST['add-category']);
        $topic_id = create($table, $_POST);
        $_SESSION['message'] = 'Category created successfully';
        $_SESSION['type'] = 'alert-success';

        header('location: ' . BASE_URL . '/views/authorized/categories/index.php');
        exit();
    } else {
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $category = selectOne($table, ['id' => $id]);
    $id = $category['id'];
    $name = $category['name'];
    $description = $category['description'];
}

if (isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    $count = delete($table, $id);

    $_SESSION['message'] = 'Category id: ' . $id . ' deleted successfully !';
    $_SESSION['type'] = 'alert-success';

    header('location: ' . BASE_URL . '/views/authorized/categories/index.php');
    exit();
}

if (isset($_POST['update-category'])) {
    $errors = validateCategory($_POST);

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-category'], $_POST['id']);
        $topic_id = update($table, $id, $_POST);
    
        $_SESSION['message'] = 'Category updated successfully';
        $_SESSION['type'] = 'alert-success';
    
        header('location: ' . BASE_URL . '/views/authorized/categories/index.php');
        exit();
    } else {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
}
