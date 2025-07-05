				<?php

				require 'vendor/autoload.php';

				$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
				$dotenv->load();
				//echo $_ENV['DB_PASSWORD'];
				//var_dump(getenv('DB_PASSWORD'));


				$hostname="localhost";
				$username= "root";
$password = isset($_ENV['DB_PASSWORD']) ? $_ENV['DB_PASSWORD'] : null;

// Mensaje de error si la variable no está definida
if (!$password) {
	echo "<p style='color:red'><strong>Error: la variable DB_PASSWORD no está definida en el archivo .env</strong></p>";
	exit;
}
				$database="db_evoting";

				// UserInput Test
					function test_input($data) {
					  $data = trim($data);
					  $data = stripslashes($data);
					  $data = htmlspecialchars($data);
					
					  return $data;
					}	

								

?>