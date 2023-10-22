<?php

function validateCategory($category)
{
    $errors = array();

    if (empty($category['name'])) {
        array_push($errors, 'Name is required');
    }

    if (empty($category['description'])) {
        array_push($errors, 'Description is required');
    }

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