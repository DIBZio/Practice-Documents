<?php
require_once('./function.php');

if (isset($_GET['delete'])) {
    $id = @$_GET['delete'];
    deletedosen($id);
}

header('location: index.php');
