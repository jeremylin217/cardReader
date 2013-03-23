

<script type="text/javascript" src="<?php echo $base_url ?>/js/passport.js" ></script>

<form class="form-horizontal">  
  <div class="control-group">
    <label class="control-label" for="inputEmail">學號</label>
    <div class="controls">
      <input type="text" id="inputEmail" >
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">護照號碼</label>
    <div class="controls">
      <input type="text" id="inputEmail" >
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">姓名</label>
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
    <label class="control-label" for="inputPassword">發照日期</label>    
    <div class="controls controls-row">
	  <input class="span3" type="text" placeholder="起">
	  <input class="span3" type="text" placeholder="迄">
	</div>
  </div>
  <div class="control-group">
    <div class="controls">      
      <input type="button" class="btn btn-primary" value="查詢" onclick="show();" />      
    </div>
  </div>
</form>

<hr>

<input type="button" class="btn btn-primary" value="新增" onclick="show();" />
<input type="button" class="btn btn-primary" value="匯出" onclick="show();" />

<div id="passport" style="display:;">
   
  <table cellpadding="0" cellspacing="0" border="0" class="display passportInfo" >
    <thead>
      <tr>
        <th>學號</th>         
        <th>姓名</th>
        <th>院別</th>         
        <th>系所</th>
        <th>身份別</th>                 
        <th>護照序號</th>
        <th>電話</th>
        <th>手機</th>        
        <th>發照日期</th>
      </tr>
    </thead>
    <tbody>
      <tr class="odd_gradeX">       
        <td>08351</td>
        <td>王大明</td>
        <td>文學院</td>
        <td>歷史系</td>
        <td>TA</td> 
        <td>88952</td>
        <td>02-3363336</td>
        <td>0911777888</td>        
        <td>2013/01/02</td>               
      </tr>           
    </tbody>
  </table>

</div>