<!DOCTYPE html>
<html>
</head>
	<link href="https://fonts.googleapis.com/css2?family=Jua&display=swap" rel="stylesheet">

	<script type="text/javascript">
		window.onload = function(){
			var back=document.getElementById('back');
		 	back.addEventListener('click',function() {location.replace("output.php");});
		};
	</script>
	<link rel="stylesheet" type="text/css" href="main2.css">
	<meta charset="utf-8">
<header>
	<img src="logo.jpg" width="800" height="auto">
</header><body>

		<div class="answer">
		<h1>할일 등록</h1>
		<br>
		<hr>
		<form action="insert.php" method="post">
		<table  id="inputTable">
		<tr><td>어떤 일인가요?</td><td><input type="name" id="content" name="content" placeholder="ex안드로이드 공부하기"></td></tr>			
		<tr><td>누가 할 일인가요?</td><td><input type="name" id="name" name="name" placeholder="홍길동"></td></tr>
		<tr><td>우선 순위를 선택하세요</td><td><input type="radio" name="grade" id="first" value="1">1순위&nbsp;&nbsp;&nbsp;
		<input type="radio" name="grade" id="second" value="2">2순위&nbsp;&nbsp;&nbsp;
		<input type="radio" name="grade" id="third" value="3">3순위&nbsp;</td></tr>
		<tr><td>현재 상태를 선택하세요</td><td>		<input type="radio" name="status" id="first2" value="1">해야할 일&nbsp;&nbsp;&nbsp;
		<input type="radio" name="status" id="second2" value="2">하고있는 일&nbsp;&nbsp;&nbsp;
		<input type="radio" name="status" id="third2" value="3">한 일&nbsp;<br><br>
</td></tr>

		</table>		
		<input type="button" id="back" value="이전으로" class="btn">
		<input type="submit" id="submit" class="btn">&nbsp;
		<input type="reset" id="reset" class="btn">
		</form>
</div>
</body>
</html>