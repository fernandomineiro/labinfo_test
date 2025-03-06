<?php

if (isset($_POST['add_task'])) {
    $task = $_POST['task'];
    $stmt = $conn->prepare("INSERT INTO tasks (task) VALUES (?)");
    $stmt->bind_param("s", $task);
    $stmt->execute();
    exit;
}

if (isset($_POST['complete_task'])) {
    $id = $_POST['id'];
    $stmt = $conn->prepare("UPDATE tasks SET status='concluida' WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    exit;
}

if (isset($_POST['delete_task'])) {
    $id = $_POST['id'];
    $stmt = $conn->prepare("DELETE FROM tasks WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    exit;
}