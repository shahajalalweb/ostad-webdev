<?php

function isAdmin() {
    return ('admin' == isset($_SESSION['role']) && 'admin' == $_SESSION['role']);
}


function isEditor() {
    return ('editor' == isset($_SESSION['role']) && 'editor' == $_SESSION['role']);
}











?>

