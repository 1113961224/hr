<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	修改
	<form action="/resource/1" method="post">
		{{csrf_field()}}
		{{method_field('put')}}
		<input type="submit" value="修改">
	</form>
</body>
</html>