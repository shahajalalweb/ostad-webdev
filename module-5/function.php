<?php

function isAdmin() {
    return ('admin' == isset($_SESSION['role']) && 'admin' == $_SESSION['role']);
}


function isEditor() {
    return ('manager' == isset($_SESSION['role']) && 'manager' == $_SESSION['role']);
}


function isUser () {
    return (isset($_SESSION['loginuser']));
}










?>

