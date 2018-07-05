<?php
//
// var_dump($_SERVER['REQUEST_URI']);

// Load libs


switch ($_SERVER['REQUEST_URI']) {
	case '/staff':
		require_once('./controllers/Staff.php');
	break;
	case '/department':
		require_once('./controllers/Department.php');
	break;
}