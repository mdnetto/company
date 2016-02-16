<?php

require __DIR__  . '/../../vendor/autoload.php';

$controller = new Company\Controllers\EmployeesController();

if (isset($_GET['id'])) {
  $controller->view('emp_no', $_GET['id']);
} else {
  $controller->index();
}
