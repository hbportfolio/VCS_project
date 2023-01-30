<?php

if(isset($_POST['name']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['message'])) {
    if(!empty(trim($_POST['name'])) && !empty(trim($_POST['lname'])) && !empty(trim($_POST['email'])) && !empty(trim($_POST['message']))) {
        if(filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)) {
            include('../app/src/db.php');
        }
    }
}


