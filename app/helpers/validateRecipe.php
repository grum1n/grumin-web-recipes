<?php

function validateRecipe($recipe)
{
    $errors = array();

    if (empty($recipe['category_id'])) {
        array_push($errors, 'Category is required');
    }
    
    if (empty($recipe['user_id'])) {
        array_push($errors, 'User is required');
    }

    if (empty($recipe['title'])) {
        array_push($errors, 'Title is required');
    }

    if (empty($recipe['description'])) {
        array_push($errors, 'Description is required');
    }

    if (empty($recipe['prep_time'])) {
        array_push($errors, 'Prep time is required');
    }

    if (empty($recipe['cook_time'])) {
        array_push($errors, 'Cook time is required');
    }

    if (empty($recipe['serving'])) {
        array_push($errors, 'Serving is required');
    }
    if (empty($recipe['tags'])) {
        array_push($errors, 'Tags is required');
    }

    // if (empty($recipe['cover'])) {
    //     array_push($errors, 'Image is required');
    // }

    // $existingTopic = selectOne('topics', ['name' => $topic['name']]);

    // if ($existingTopic) {
    //     array_push($errors, 'Name already exists');
    // }

    // $existingTopic = selectOne('topics', ['name' => $topic['name']]);

    // if ($existingTopic) {
    //     if(isset($topic['update-topic']) && $existingTopic['id'] != $topic['id']){
    //         array_push($errors, 'Name already exists');
    //     }

    //     if(isset($post['add-topic'])){
    //         array_push($errors, 'Name already exists');
    //     }
    // }

    return $errors;
}