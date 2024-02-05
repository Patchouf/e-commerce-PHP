<?php

function hash_passwd($password) {
    return hash('sha256', $password);
}

?>
