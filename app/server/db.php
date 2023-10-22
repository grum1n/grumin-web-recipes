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
    // $stmt->bind_param($conditions, 'is'); // is - is a type,  i as integer, s - as string // tutorial 7
    $stmt->bind_param($types, ...$values);  // spread operator  / apdate to version php 7
    $stmt->execute();
    return $stmt;
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
        // $sql = "SELECT * FROM $table WHERE username='grumin' AND admin=1";
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

        // $stmt = $conn->prepare($sql);
        // $values = array_values($conditions);
        // $types = str_repeat('s', count($values));
        // $stmt->bind_param($types, ...$values);
        // $stmt->execute();
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

    // $sql = "SELECT * FROM $table WHERE username='grumin' AND admin=1 LIMIT 1";
    $sql = $sql . " LIMIT 1";

    // $stmt = $conn->prepare($sql);
    // $values = array_values($conditions);
    // $types = str_repeat('s', count($values));
    // $stmt->bind_param($types, ...$values);
    // $stmt->execute();
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
    // dd($sql);

    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;
}

function update($table, $id, $data)
{

    //tutorial
    //https://www.youtube.com/watch?v=DRbH9yXQJ1Q&list=PL3pyLl-dgiqD0eKYJ-XSxrHaRh-zsA2tP&index=10
    //How to create a blog PHP and MySQL database #10 | Delete and update functions

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
    // $sql = "DELETE FROM users WHERE id=?";

    $sql = "DELETE FROM $table WHERE id=?";

    $stmt = executeQuery($sql, ['id' => $id]);
    return $stmt->affected_rows;
}
