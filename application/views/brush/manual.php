
manual

<link href="<?php echo $base_url ?>/css/brush.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $base_url ?>/js/brush.js" ></script>

<script type="text/javascript">
	
	$(function(){


	});
		
	function test(){
		alert($('#semester').html());
		//表格重劃
		activeInfo.fnDraw();		
	}
		
</script>

<div id="demo">

<table cellpadding="0" cellspacing="0" border="0" class="display" id="activeInfo">
	<thead>
		<tr>
			<th>項目</th>
			<th>內容</th>					
		</tr>
	</thead>
	<tbody>
		<tr class="odd_gradeX">
			<td>學期</td>
			<td><div id="semester"></div></td>									
		</tr>
		<tr class="even_gradeC">
			<td>活動類型</td>	
			<td><div id="activityType"></div></td>			
		</tr>
		<tr class="even_gradeC">
			<td>課程名稱</td>	
			<td><div id="courseName"></div></td>			
		</tr>
		<tr class="even_gradeC">
			<td>備註</td>	
			<td><div id="memo"></div></td>			
		</tr>				
	</tbody>
</table>

</div>	

<div id="demo1" style="width:32%; float:left;">

<table cellpadding="0" cellspacing="0" border="0" class="display" id="studentInfo">
	<thead>
		<tr>
			<th>項目</th>	
			<th>內容</th>				
		</tr>
	</thead>
	<tbody>
		<tr class="odd_gradeX">
			<td>日期</td>
			<td><input type="text" name="date"/></td>					
		</tr>
		<tr class="even_gradeC">
			<td>時間</td>
			<td><input type="text" name="time"/></td>					
		</tr>
		<tr class="even_gradeC">
			<td>學號</td>
			<td><input type="text" name="studentId"/></td>					
		</tr>
		<tr class="even_gradeC">
			<td>系所</td>
			<td><input type="text" name="department"/></td>					
		</tr>
		<tr class="even_gradeC">
			<td>姓名</td>
			<td><input type="text" name="name"/></td>						
		</tr>				
	</tbody>
</table>

<input type="button" value="輸入" class="btn btn-inverse" style="float:right;" onclick="test();"/>

</div>	



