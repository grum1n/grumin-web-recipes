<?php

session_start();
require('config.php');

function dd($value) //to be deleted
{
    echo "<pre>", print_r($value, true), "</pre>";
    die();
}

function executeQuery($sql, $data)
{
    global $conn;

    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    // $stmt->bind_param($conditions, 'is'); // is - is a type,  i as integer, s - as string 
    $stmt->bind_param($types, ...$values);  // spread operator  / updated to version php 7
    $stmt->execute();
    return $stmt;
}


function getPublishedRecipes()
{
    global $conn;
    //SELECT * FROM recipes WHERE published=1
    $sql = "SELECT r.*, u.username FROM recipes AS r JOIN users AS u ON r.user_id=u.id WHERE r.published=?";
    $stmt = executeQuery($sql, ['published' => 1]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC); //fetch all
    return $records;
}


function getRecipeByCategoryId($category_id)
{
    global $conn;

    $sql = "SELECT r.*, u.username FROM recipes AS r JOIN users AS u ON r.user_id=u.id WHERE r.published=? AND category_id=?";
    $stmt = executeQuery($sql, ['published' => 1, 'category_id' => $category_id]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC); //fetch all
    return $records;
}

function selectAll($table, $conditions = [])
{
    global $conn;

    $sql = "SELECT * FROM $table";
    if (empty($conditions)) {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    } else {
        // return records that match conditions...
        // $sql = "SELECT * FROM $table WHERE username='John' AND admin=1";
        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i === 0) {
                // $sql = $sql . " WHERE $key=$value";
                $sql = $sql . " WHERE $key=?";
            } else {
                // $sql = $sql . " AND $key=$value";
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
       
        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC); //fetch all
        return $records;
    }
}

function selectOne($table, $conditions)
{
    global $conn;

    $sql = "SELECT * FROM $table";

    $i = 0;
    foreach ($conditions as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " WHERE $key=?";
        } else {
            $sql = $sql . " AND $key=?";
        }
        $i++;
    }

    // $sql = "SELECT * FROM $table WHERE username='John' AND admin=1 LIMIT 1";
    $sql = $sql . " LIMIT 1";
    $stmt = executeQuery($sql, $conditions);
    $records = $stmt->get_result()->fetch_assoc(); // return just particular record
    return $records;
}

function create($table, $data)
{
    // global $conn;
    // $sql = "INSERT INTO users (username, admin, email, password) VALUES (?, ?, ?, ?)";
    // $sql = "INSERT INTO users SET username=?, admin=?, email=?, password=?";

    $sql = "INSERT INTO $table SET ";

    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " $key=?";
        } else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }
    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;
}

function update($table, $id, $data)
{

    global $conn;
    // $sql = "UPDATE users SET username=?, admin=?, email=?, password=? WHERE id=?";

    $sql = "UPDATE $table SET ";

    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " $key=?";
        } else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }

    $sql = $sql . " WHERE id=?";
    $data['id'] = $id;
    $stmt = executeQuery($sql, $data);
    return $stmt->affected_rows;
}

function delete($table, $id)
{
    global $conn;
    $sql = "DELETE FROM $table WHERE id=?";

    $stmt = executeQuery($sql, ['id' => $id]);
    return $stmt->affected_rows;
}

function searchRecipes($term)
{
    $match = '%' . $term . '%';
    global $conn;
    $sql = "SELECT 
            r.*, u.username 
            FROM recipes AS r 
            JOIN users AS u 
            ON r.user_id=u.id 
            WHERE r.published=?
            AND r.title LIKE ? OR r.description LIKE ?";

    $stmt = executeQuery($sql, ['published' => 1, 'title' => $match, 'description' => $match]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC); //fetch all
    return $records;
}