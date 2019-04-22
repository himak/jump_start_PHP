<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Forms</title>
</head>
<body>
	<form method="post" action="collect.php">
		<h1>Form #1</h1>

		<input name="data" placeholder="enter a string" type="text" />

		<button type="submit">submit</button>
	</form>

	<form method="get" action="collect.php">
		<h1>Form #2</h1>

		<input name="data" placeholder="enter a string" type="text" />

		<button type="submit">submit</button>
	</form>
</body>
</html>