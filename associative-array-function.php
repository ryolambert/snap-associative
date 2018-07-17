<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">

		<title>Snap Associative Array</title>
	</head>
	<body>
		<h1>Associative Array Function</h1>
		<h2>PHP Example</h2>
		<?php
					$array = array(

							"name" => "Andy",
							"age" => 42,
						],
						[
							"name" => "Buzz",
							"age" => 32,
						],
						[
							"name" => "Woody",
							"age" => 31,
						]
					]);

			function namePrint() {
				foreach ($array as $name => $string) {

					var_dump("Name: $name");
				}
			}

		?>
	</body>
</html>