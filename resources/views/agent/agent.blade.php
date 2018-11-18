<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="/store" method="post">
		{{csrf_field()}}
		电影名：<input type="text" name="m_name"><br>
		类型：<input type="text" name="m_type">
		<br>
		<input type="submit" value="提交">
	</form>
</body>
</html>