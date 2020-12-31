window.onload = function(){
//			alert("진입성공");
			var add=document.getElementById('add');
		 	add.addEventListener('click',function() {location.replace("input.php");});
		
		//하고싶은거는 우선순위별로 분류하고싶음
		//php문에서 파싱한 데이터를 js함수로 줘서 실행하기
			var todo=document.getElementById('todo');
			var doing=document.getElementById('doing');
			var done=document.getElementById('done');

			function toshowTest(name) {
				alert(name);
			}

			function todo(content,name,number,status) {
					var newDiv=document.createElement("div");
					var newContent=document.createTextNode(content+" "+name+" "+numer);
					newDiv.appendChild(newContent);
					if(status==1)doument.body.insertBefore(newDiv,todo);
					else if (status==2)document.body.insertBefore(newDiv,doing);
					else document.body.insertBefore(newDiv,done);

					alert("환영합니다! 추가에 성공했습니다!");
					}		


};
