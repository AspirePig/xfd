<html>
<head>
	<meta charset="UTF-8">
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
</head>
<body>
<br />
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<form role="form" method='post' action=''>

				<div class="form-group">
					 <label for="exampleInputPassword1">请输入密码</label><input type="password" class="form-control" id="passwd" name='passwd' />
				</div>

			    <button type="submit" class="btn btn-default">进入</button>
			</form>
		</div>
	</div>
</div>

</body>
</html>

<?php
if(isset($_POST['passwd'])){
$passwd=htmlspecialchars($_POST['passwd']);

if($passwd!='xxxx'){
	    echo "<script>alert('密码错误');
	window.location.href = 'index.php';</script>";
	exit;
}


else{
	session_start();
// store session data
$_SESSION['name']='admin';  echo "<script>window.location.href = 'test.php';</script>";

}
}

?>
