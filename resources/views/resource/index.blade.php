<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	首页
	<br>
	<a href="/resource/1">展示信息</a>
	<form action="/resource/1" method="post" style="display: inline-block;">
		{{method_field("DELETE")}}
		{{csrf_field()}}
		<button>删除</button>
	</form>
</body>
</html>