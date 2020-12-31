<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="func.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Jua&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="main2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>데이터보기</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<header>
	<img src="logo.jpg" width="800" height="auto">
	<input type="button" id="add" value="add">
</header>

<body>
	<div id="list">
	<hr><br>
	<div id="todo" class="to">
		<div class="do">TODO</div>
		<table>
		<tr><td>할일</td><td>누가</td><td>우선순위</td><td>상태</td></tr>	
			<?php
		$db=mysqli_connect('127.0.0.1','root','root','todo')or die('서버에 접속못해서 죽었다.');

		$query="select * from todolist";
		$result=mysqli_query($db,$query)or die("전달하는거 실패했다");

		while($row=mysqli_fetch_assoc($result)){
			$content=$row ['content'];
			$name=$row['name'];
			$number=$row['number'];
			$status=$row['status'];
			
			$content=iconv("euckr","utf-8",$content);
			$name=iconv("euckr","utf-8",$name);
			$number=iconv("euckr","utf-8",$number);
			$status=iconv("euckr","utf-8",$status);

			echo '<tr>';
			if($status==1){
			echo '<td>'.$content.'</td>';				
			echo '<td>'.$name.'</td>';				
			echo '<td>'.$number.'</td>';				
			echo '<td>'.$status.'</td>';				
			echo '<tr>';
			}

//			echo $content.'/'.$name.'/'.$number.'/'.$status.'<br/>';
			//todo($content,$name,$number,$status);
}

			mysqli_free_result($result);
			mysqli_close($db);
	?>
	</table>
	
	</div>
	<div id="doing" class="to">	
		<div class="do">DOING</div>
		<table>
		<tr><td>할일</td><td>누가</td><td>우선순위</td><td>상태</td></tr>			
			<?php
		$db=mysqli_connect('127.0.0.1','root','root','todo')or die('서버에 접속못해서 죽었다.');

		$query="select * from todolist";
		$result=mysqli_query($db,$query)or die("전달하는거 실패했다");

		while($row=mysqli_fetch_assoc($result)){
			$content=$row ['content'];
			$name=$row['name'];
			$number=$row['number'];
			$status=$row['status'];
			
			$content=iconv("euckr","utf-8",$content);
			$name=iconv("euckr","utf-8",$name);
			$number=iconv("euckr","utf-8",$number);
			$status=iconv("euckr","utf-8",$status);

			echo '<tr>';
			if($status==2){
			echo '<td>'.$content.'</td>';				
			echo '<td>'.$name.'</td>';				
			echo '<td>'.$number.'</td>';				
			echo '<td>'.$status.'</td>';				
			echo '<tr>';
			}

			}

			mysqli_free_result($result);
			mysqli_close($db);
	?>
	</table>
	</div>
	<div id="done" class="to">	
 		<div class="do">DONE</div>
		<table>
		<tr><td>할일</td><td>누가</td><td>우선순위</td><td>상태</td></tr>			
			<?php
		$db=mysqli_connect('127.0.0.1','root','root','todo')or die('서버에 접속못해서 죽었다.');

		$query="select * from todolist";
		$result=mysqli_query($db,$query)or die("전달하는거 실패했다");

		while($row=mysqli_fetch_assoc($result)){
			$content=$row ['content'];
			$name=$row['name'];
			$number=$row['number'];
			$status=$row['status'];
			
			$content=iconv("euckr","utf-8",$content);
			$name=iconv("euckr","utf-8",$name);
			$number=iconv("euckr","utf-8",$number);
			$status=iconv("euckr","utf-8",$status);

			echo '<tr>';
			if($status==3){
			echo '<td>'.$content.'</td>';				
			echo '<td>'.$name.'</td>';				
			echo '<td>'.$number.'</td>';				
			echo '<td>'.$status.'</td>';				
			echo '<tr>';
			}

//			echo $content.'/'.$name.'/'.$number.'/'.$status.'<br/>';
			//todo($content,$name,$number,$status);
}

			mysqli_free_result($result);
			mysqli_close($db);
	?>
	</table>
	</div>
	</div>



</body>
</html>