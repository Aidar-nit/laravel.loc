<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="{{route('route_contact')}}" method="POST">
		@csrf
		<input type="text" name="name">
		<input type="text" name="email">
		<input type="submit" name="">
	</form>
	
</body>
</html>