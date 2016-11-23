<!DOCTYPE html>
<html>
<head>
	<title>chat</title>
</head>
<body>
<script type="text/javascript">
	function submitChat(){
		if (form1.uname.value=='' || form1.msg.value=='') {
			alert("All field are mandatry!");
			return;
		}
        form1.uname.readOnly =true;
        form1.uname.style.border='none';
		var uname=form1.uname.value;
			var msg=form1.msg.value;
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
					document.getElementById('chatLogs').innerHTML =xmlhttp.responseText;
		}	
	}
xmlhttp.open('Get','insert.php?uname='+uname+'&msg='+msg,true);
xmlhttp.send();
	}
	$(document).ready(function(){
$.ajaxSetup({cache:false});
setInterval(function(){$('#chatLogs').load('logs.php');},2000);
	});
</script>
<form name="form1">
	Enter your name please:<input type="text" name="uname"/><br>
	Your message:<br/>
	<textarea name="msg"></textarea><br>
	<a href="#" onclick="submitChat()">Send</a><br/><br/>
	<div id="chatLogs">
	Loading chatLogs please.......
		
	</div>
</form>
</body>
</html>