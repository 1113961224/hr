<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="/update" method="post">
		{{csrf_field()}}
		电影名：<input type="text" name="m_name" value="{{$info->m_name}}"><br>
		类型：<input type="text" name="m_type" value="{{$info->m_type}}">
		<br>
		<input type="hidden" value="{{$info->id}}" name="id">
		<input type="submit" value="提交">
	</form>
</body>
</html>