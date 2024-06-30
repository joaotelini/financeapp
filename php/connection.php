<?php
    $host = "localhost";
    $db = "financeapp";
    $user = "root";
    $pass = "";

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    function executePreparedQuery($conn, $sql, $types = null, ...$params) {
        $stmt = $conn->prepare($sql);
        
        if (!$stmt) {
            die("Erro na preparação da consulta: " . $conn->error);
        }
        
        if (!empty($params)) {
            $stmt->bind_param($types, ...$params);
        }
        
        $stmt->execute();
        
        return $stmt->get_result();
    }
?>
