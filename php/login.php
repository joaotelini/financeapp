<?php
    require 'connection.php';

    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');

    $queryEmail = ("SELECT * FROM user WHERE email = ?");
    $stmt = $conn->prepare($queryEmail);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
       header('Location: ../pages/home.html');
    }
