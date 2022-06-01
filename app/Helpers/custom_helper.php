<?php 
function userLogin() {
    $db = \config\Database::connect();
    return $db->table('users')->where('id_user', session('id_user'))->get()->getRow();
}

function countData($table) {
    $db = \config\Database::connect();
    return $db->table($table)->countAllResults();
}
?>