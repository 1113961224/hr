<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	添加
	<form action="/resource" method="post">
		{{csrf_field()}}
		<input type="submit" value="添加">
	</form>
</body>
</html>