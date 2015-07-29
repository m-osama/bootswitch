<?php
// Application-global configuration
// include 'config/db.php';
// Add models
// include 'models/Employee.php';
// include 'models/PdfReader.php';
// $class_employee = new Employee();
include 'views/header.php';
switch( $_GET['page'] ) {
	case 'list':
		$employees = $class_employee->getAll();
		include 'views/list.php';
		break;
	case 'view':
		$id = $_GET['id'];
		$employee = $class_employee->getOne( $id );
		include 'views/view.php';
		break;
	case 'upload':
		include 'views/update.php';
		}
		break;
	default:
		include 'views/home.php';
}
include 'views/footer.php';