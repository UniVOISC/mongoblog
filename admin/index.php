<?php

require_once '../app.php';

$data = array();
$status = (empty($_GET['status'])) ? 'dashboard':$_GET['status'];

switch ($status) {
    case 'create':
        break;

    default:
        $currentPage = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
        $data = $db->get($currentPage,'posts');

        $layout->view('admin/dashboard', array(
            'currentPage' => $data[0],
            'totalPages' => $data[1],
            'cursor' => $data[2]
        ));
        break;
}
