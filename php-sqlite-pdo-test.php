<?php 

if (!extension_loaded('pdo')) {
	echo 'PHP PDO Extension is not loaded. Your PHP installation appears to be missing the PDO extension which is required for this version of WordPress.';
} else echo 'PHP PDO Extension is loaded.';

if (!extension_loaded('pdo_sqlite')) {
	echo 'PDO Driver for SQLite is missing. Your PHP installtion appears not to have the right PDO drivers loaded. These are required for this version of WordPress and the type of database you have specified.';
} else echo 'PDO Driver for SQLite is present.';

?>
