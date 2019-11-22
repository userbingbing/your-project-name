<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<style type="text/css">
			
		</style>
	</head>
	<body>
		<form action="/home" method="post">
			<input type="text" name="abc">
			{{csrf_field()}}
			<button>提交</button>
		</form>
	</body>
	<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript">

	</script>
</html>