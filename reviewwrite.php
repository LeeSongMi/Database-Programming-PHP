<html>
<?
	include ("./banner.h");
	include ("./table.css");
?>
<body>
	<br><br>
	<table width='800' align=center border=1><tr>
			<td align=left id=td1>제목</td><td align=right id=td1>작성자</td>
		</tr>
		<tr><td colspan=2> 리뷰 제목</td></tr>
		<tr><td colspan=2 id=td1><textarea name = 'rcontent' cols='100' rows='20'></textarea></td></tr>
		<tr><td align=left id=td1><input  type = 'submit' value='취소' style = 'width:80; height:25;'></td>
			<td align =right id=td1><input  type = 'submit' value='저장' style = 'width:80; height:25;'></td></tr>
	</table>
</body>
</html>