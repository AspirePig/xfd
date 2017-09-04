
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>TEST</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="header">
				<div id="logo">
					<a href="welcome.php"><img src="images/logo.png" alt="LOGO" height="82" width="125"></a>
				</div>
				<div id="navigation">
					<ul>
						<li>
							<a href="welcome.php">主页</a>
						</li>
						<li class="selected">
							<a href="test.php">考核页面</a>
						</li>
						<li>
							<a href=#>题库下载</a>
						</li>
						<li>
							<a href="contact.php">联系我们</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="contents">
				<div class="box">
					<div>
						<div class="body">

                            <br>
                            <h1>请认真作答以下题目</h1>
							<h2>Please answer the following questions seriously</h2><font face="黑体"size="5">

							<?php
                                $con = mysqli_connect("localhost","gestboard","gestboard");

                                if(!$con)
                                {
                                    die('could not connect:' . mysqli_connect_error());
                                }
								mysqli_set_charset($con,"utf8");

                                mysqli_select_db($con,"gestboard");
								
                                $No = 1;
								
								if(!empty($_POST['No']))
								{
									$No = $_POST['No'];
								}
								
								$i = 3 * $No - 2;

                                $result = mysqli_query($con,"SELECT * FROM xuanzeti WHERE tihao = $i");
                            
                                while($row = mysqli_fetch_array($result))
                                {
                                    echo "选择题1";
                                    echo '<br />';
                                    echo $row['timu'];
                                    echo '<br />';
                                    echo '<br />';
                                }
                            ?>
                            <input name="" type="button"  value="点击显示答案"  id="btn" onclick="btn()"  style="position:absolute;">
                            <div id="box">
                                <font color="red">
									<?php
                                        $result = mysqli_query($con,"SELECT * FROM xuanzeti WHERE tihao=$i");
                                        
                                        while($row = mysqli_fetch_array($result))
                                        {
                                            echo '<br />';
                                            echo '<br />';
                                            echo $row['daan'];
                                        }
                                    ?>
                                </font>
                            </div>
                            <?php
                                $i = $i + 1;
                            
                                $result = mysqli_query($con,"SELECT * FROM xuanzeti WHERE tihao=$i");
                            
                                while($row = mysqli_fetch_array($result))
                                {
                                    echo '<br />';
                                    echo '<br />';
                                    echo "选择题2";
                                    echo '<br />';
                                    echo $row['timu'];
                                    echo '<br />';
                                    echo '<br />';
                                }
                            ?>
                            <input name="" type="button"  value="点击显示答案"  id="funb" onclick="funb()"  style="position:absolute;">
                            <div id="funa">
                                <font color="red">
									<?php
                                        $result = mysqli_query($con,"SELECT * FROM xuanzeti WHERE tihao=$i");
                                
                                        while($row = mysqli_fetch_array($result))
                                        {
                                            echo '<br />';
                                            echo '<br />';
                                            echo $row['daan'];
                                        }
                                    ?>
                                </font>
                            </div>
                            <?php
                                $i = $i + 1;
                            
                                $result = mysqli_query($con,"SELECT * FROM xuanzeti WHERE tihao=$i");
                            
                                while($row = mysqli_fetch_array($result))
                                {
                                    echo '<br />';
                                    echo '<br />';
                                    echo "选择题3";
                                    echo '<br />';
                                    echo $row['timu'];
                                    echo '<br />';
                                    echo '<br />';
                                }
                            ?>
                            <input name="" type="button"  value="点击显示答案"  id="fund" onclick="fund()"  style="position:absolute;">
                            <div id="func">
                                <font color="red">
									<?php
                                        
                                        $result = mysqli_query($con,"SELECT * FROM xuanzeti WHERE tihao=$i");
                                
                                        while($row = mysqli_fetch_array($result))
                                        {
                                            echo '<br />';
                                            echo '<br />';
                                            echo $row['daan'];
                                            echo '<br />';
                                        }
                                	?>
                                </font>
                            </div>
                            <?php
                                $j = 2 * $No - 1;
                            
                                $result = mysqli_query($con,"SELECT * FROM tiankongti WHERE tihao=$j");
                            
                                while($row = mysqli_fetch_array($result))
                                {
                                    echo '<br />';
                                    echo '<br />';
                                    echo "填空题1";
                                    echo '<br />';
                                    echo $row['timu'];
                                    echo '<br />';
                                    echo '<br />';
                                }
                            ?>
                            <input name="" type="button"  value="点击显示答案"  id="funf" onclick="funf()"  style="position:absolute;">
                            <div id="fune">
                                <font color="red">
									<?php
                                        $result = mysqli_query($con,"SELECT * FROM tiankongti WHERE tihao=$j");
                                
                                        while($row = mysqli_fetch_array($result))
                                        {
                                            echo '<br />';
                                            echo '<br />';
                                            echo $row['daan'];
                                            echo '<br />';
                                        }
                                    ?>
                                </font>
                            </div>
                            <?php
                                $j = $j + 1;
                            
                                $result = mysqli_query($con,"SELECT * FROM tiankongti WHERE tihao=$j");
            
                                while($row = mysqli_fetch_array($result))
                                {
                                    echo '<br />';
                                    echo '<br />';
                                    echo "填空题2";
                                    echo '<br />';
                                    echo $row['timu'];
                                    echo '<br />';
                                    echo '<br />';
                                }
                            ?>
                            <input name="" type="button"  value="点击显示答案"  id="funh" onclick="funh()"  style="position:absolute;">
                            <div id="fung">
                                <font color="red">
									<?php
                                        $result = mysqli_query($con,"SELECT * FROM tiankongti WHERE tihao=$j");
                                
                                        while($row = mysqli_fetch_array($result))
                                        {
                                            echo '<br />';echo '<br />';
                                            echo $row['daan'];
                                            echo '<br />';
                                        }
                                    ?>
                                </font>
                            </div>
                            <?php
                            
                                $result = mysqli_query($con,"SELECT * FROM jiandati WHERE tihao=$No");
                            
                                while($row = mysqli_fetch_array($result))
                                {
                                    echo '<br />';
                                    echo '<br />';
                                    echo "简答题：";
                                    echo '<br />';
                                    echo $row['timu'];
                                    echo '<br />';
                                    echo '<br />';
                                }
                            ?>
                            <input name="" type="button"  value="点击显示答案"  id="funj" onclick="funj()"  style="position:absolute;">
                            <br><br>
                            <div id="funi">
                                <font color="red">
									<?php
                                        $result = mysqli_query($con,"SELECT * FROM jiandati WHERE tihao=$No");
                                        while($row = mysqli_fetch_array($result))
                                        {
                                            echo $row['daan'];
                                            echo '<br />';
                                            echo '<br />';
                                        }
                                    ?>
                                </font>
                            </div></font>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div id="footer">
			<div>
                <form action="test.php" method="post">
                    第 <select name="No" id="select">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                    </select> 页
                     <script>
 						document.getElementById("select").value=<?php echo $No?>
					</script>
                    <input type="submit" value="跳转"/>   
           		</form>
                
			</div>
			<p>
				Copyright &copy; 2017.杭州电子科技大学通信工程学院学生党建制
			</p>
		</div>
	</div>
</body>
<script type="text/javascript">
	var btn1=document.getElementById('btn');
	var box1=document.getElementById('box');
	box1.style.display='none';
	function btn()
	{ 
		if(btn1.value=="点击显示答案")
		{
			box1.style.display='';btn1.value="点击隐藏答案";
		}
		else
		{
			box1.style.display='none';btn1.value="点击显示答案";
		}
	}
</script>
<script type="text/javascript">
	var fund1=document.getElementById('fund');
	var func1=document.getElementById('func');
	func1.style.display='none';
	function fund()
	{ 
		if(fund1.value=="点击显示答案")
		{
			func1.style.display='';fund1.value="点击隐藏答案";
		}
		else
		{
			func1.style.display='none';fund1.value="点击显示答案";
		}
	}
</script>
<script type="text/javascript">
	var funb1=document.getElementById('funb');
	var funa1=document.getElementById('funa');
	funa1.style.display='none';
	function funb()
	{ 
		if(funb1.value=="点击显示答案")
		{
			funa1.style.display='';funb1.value="点击隐藏答案";
		}
		else
		{
			funa1.style.display='none';funb1.value="点击显示答案";
		}
	}
</script>
<script type="text/javascript">
	var funf1=document.getElementById('funf');
	var fune1=document.getElementById('fune');
	fune1.style.display='none';
	function funf()
	{ 
		if(funf1.value=="点击显示答案")
		{
			fune1.style.display='';funf1.value="点击隐藏答案";
		}
		else
		{
			fune1.style.display='none';funf1.value="点击显示答案";
		}
	}
</script>
<script type="text/javascript">
	var funh1=document.getElementById('funh');
	var fung1=document.getElementById('fung');
	fung1.style.display='none';
	function funh()
	{ 
		if(funh1.value=="点击显示答案")
		{
			fung1.style.display='';funh1.value="点击隐藏答案";
		}
		else
		{
			fung1.style.display='none';funh1.value="点击显示答案";
		}
	}
</script>
<script type="text/javascript">
	var funj1=document.getElementById('funj');
	var funi1=document.getElementById('funi');
	funi1.style.display='none';
	function funj()
	{ 
		if(funj1.value=="点击显示答案")
		{
			funi1.style.display='';funj1.value="点击隐藏答案";
		}
		else
		{
			funi1.style.display='none';funj1.value="点击显示答案";
		}
	}
</script>
</html>
