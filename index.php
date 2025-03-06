<?php
require_once 'config.php';
require_once 'action.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="container mt-5">
    <h2 class="text-center">Lista de Tarefas</h2>
    <form id="taskForm" class="d-flex">
        <input type="text" id="taskInput" name="task" class="form-control me-2" placeholder="Nova tarefa" required>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
    
    <ul id="taskList" class="list-group mt-3">
        <?php
        $result = $conn->query("SELECT * FROM tasks ORDER BY id DESC");
        while ($row = $result->fetch_assoc()) {
            echo "<li class='list-group-item d-flex justify-content-between'>
                    <span class='" . ($row['status'] == 'concluida' ? 'text-decoration-line-through' : '') . "'>" . $row['task'] . "</span>
                    <div>
                        <button class='btn btn-success btn-sm complete' data-id='" . $row['id'] . "'>✔</button>
                        <button class='btn btn-danger btn-sm delete' data-id='" . $row['id'] . "'>✖</button>
                    </div>
                </li>";
        }
        ?>
    </ul>

    <script src="script.js"></script>
</body>
</html>
