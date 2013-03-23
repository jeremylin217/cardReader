

<script type="text/javascript">
	
	$(function(){
		$('.inquiryInfo').dataTable({			
			"bPaginate": false, 
			"bLengthChange": false, 			
			"bSort": false, 
			"bInfo": false,
			"bFilter": false		
		});

	});

	function show(){
		$('#inquiry').css('display', '');
	}
		
</script>

<form class="form-horizontal">
  <div class="control-group">
    <label class="control-label" for="inputEmail">學期</label>
    <div class="controls">
      <input type="text" id="inputEmail" >
    </div>
  </div>  
  <div class="control-group">
    <label class="control-label" for="inputEmail">學號</label>
    <div class="controls">
      <input type="text" id="inputEmail" >
    </div>
  </div>
  <div class="control-group">
    <div class="controls">      
      <input type="button" class="btn btn-primary" value="查詢" onclick="show();" />
    </div>
  </div>
</form>

<hr>

<div id="inquiry" style="display:none;">

	<ul class="unstyled">
		<li>學號：b97504021</li>
		<li>系所：歷史系</li>
		<li>姓名：王大明</li>
	</ul>

	<input type="button" class="btn btn-primary" value="101-1 學期"/>

	<table cellpadding="0" cellspacing="0" border="0" class="display inquiryInfo" >
		<thead>
			<tr>
				<th>活動類型</th>					
				<th>活動名稱</th>
				<th>進修時數</th>					
				<th>擔任講者</th>
				<th>認證</th>					
			</tr>
		</thead>
		<tbody>
			<tr class="odd_gradeX">				
				<td>研習會</td>
				<td>教學助理認證研習會</td>
				<td></td>
				<td>3</td>
				<td>X</td>				
			</tr>						
		</tbody>
	</table>

<br>

	<input type="button" class="btn btn-primary" value="101-2 學期"/>

	<table cellpadding="0" cellspacing="0" border="0" class="display inquiryInfo" >
		<thead>
			<tr>
				<th>活動類型</th>					
				<th>活動名稱</th>
				<th>進修時數</th>					
				<th>擔任講者</th>
				<th>認證</th>					
			</tr>
		</thead>
		<tbody>
			<tr class="odd_gradeX">				
				<td>研習會</td>
				<td>教學助理認證研習會</td>
				<td></td>
				<td>3</td>
				<td>X</td>				
			</tr>						
		</tbody>
	</table>
</div>