

<script type="text/javascript" src="<?php echo $base_url ?>/js/attend.js" ></script>

<form class="form-horizontal">
  <div class="control-group">
    <label class="control-label" for="inputEmail">學期</label>
    <div class="controls">
      <input type="text" id="inputEmail" >
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">活動</label>
    <div class="controls">      
      <select>
        <option>全部</option>
      	<option>工作坊</option>
      	<option>研習會</option>
      </select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">課程</label>
    <div class="controls">      
      <select>
        <option>全部</option>
        <option>工作坊</option>
        <option>研習會</option>
      </select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">學號</label>
    <div class="controls">
      <input type="text" id="inputEmail" >
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">狀態</label>
    <div class="controls">      
      <select>
        <option>全部</option>
        <option>未通過</option>
        <option>通過</option>
        <option>已補課</option>
      </select>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">      
      <input type="button" class="btn btn-primary" value="查詢" onclick="show();" />      
    </div>
  </div>
</form>

<hr>

<div id="attend" style="display:;">
   
  <table cellpadding="0" cellspacing="0" border="0" class="display attendInfo" >
    <thead>
      <tr>
        <th>活動</th>         
        <th>活動日期</th>
        <th>課程</th>         
        <th>學號</th>
        <th>姓名</th>         
        <th>院系</th>
        <th>護照序號</th>
        <th>身份別</th>
        <th>刷到時間</th>
        <th>刷退時間</th>
        <th>狀態</th>
        <th>補課日期</th>
      </tr>
    </thead>
    <tbody>
      <tr class="odd_gradeX">       
        <td>教學助理認證研習會</td>
        <td>2013/12/1</td>
        <td></td>
        <td>3</td>
        <td>X</td> 
        <td>文學院外文系</td>
        <td>88952</td>
        <td></td>
        <td>10:00</td>
        <td>12:00</td>
        <td>已補課</td>
        <td>X</td>        
      </tr>           
    </tbody>
  </table>

</div>