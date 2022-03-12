<?php 
session_start();
        if (isset($_POST['submit']) && !empty($_POST['pseudo']) && !empty($_POST['password'])) {
            include_once('../database.php');
            $data = $pdo->query("SELECT * FROM `user` WHERE `pseudo`='" . $_POST['pseudo'] . "' AND `password`='" . $_POST['password'] . "'")->fetchAll();
            foreach($data as $row) {
                    $_SESSION['id'] = $row['id'];
                    header("location:../index.php");
                }
}
