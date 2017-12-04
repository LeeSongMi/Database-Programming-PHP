<!DOCTYPE html>
<html>
<?
	include ("./banner.h");
	include ("./table.css");
?>
  <body>
    <br><br>
    <table border = '0' width = '1000' align = 'center'>
      <tr>
        <td align = 'center'><font face = '나눔고딕' color = '555555'>
          <h3> 도서 검색 </h3>
        </td>
      </tr>
    </table>

    <table border = '0' width = '500' align = 'center'>
      <tr height = '25'>
        <td align = 'center' width = '500'>
          <select name = 'field'>
            <option value = 'title'>
              <font face = '나눔고딕' color = '555555'> 도서명 </font>
            </option>
            <option value = 'title'>
              <font face = '나눔고딕' color = '555555'> 저자 </font>
            </option>
          </select>
          <input type = 'text' value = '검색어를 입력하세요' name = 'key' size = '50'>
          <input type = 'submit' value = '검색'>
        </td>
      </tr>
    </table>

    <br>
    <table border = '1' width = '1000' align = 'center'>
      <tr height = '30' bgcolor = 'FFFFEFD5'>
        <td align = 'center' width = '100'><font face = '나눔고딕' color = '555555'>
          <b><center> 출판 </center></b>
        </font></td>
        <td align = 'center' width = '450'><font face = '나눔고딕' color = '555555'>
          <b><center> 도서명 </center></b>
        </font></td>
        <td align = 'center' width = '150'><font face = '나눔고딕' color = '555555'>
          <b><center> 저자 </center></b>
        </font></td>
        <td align = 'center' width = '150'><font face = '나눔고딕' color = '555555'>
          <b><center> 출판사 </center></b>
        </font></td>
        <td align = 'center' width = '150'><font face = '나눔고딕' color = '555555'>
          <b><center> 소장정보 </center></b>
        </font></td>
      </tr>
<!-- 검색 결과 출력 -->
    </table>
  </body>
</html>
