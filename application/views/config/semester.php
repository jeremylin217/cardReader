

<script type="text/javascript">
	
	$(function(){

		$('#example').dataTable().makeEditable({
							sUpdateURL: "/cardReader/index.php/config/memo_update"
							});

		$('.btn').click(function(){			
			top.location.href='/cardReader/index.php/config/activity';
		});

	});
		
	
	
</script>

<div id="demo">

<input type="button" class="btn btn-primary" value="新增" onclick="show();" />
<input type="button" class="btn btn-primary" value="刪除" onclick="show();" />
<hr>

<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
	<thead>
		<tr>
			<th>學期</th>
			<th>活動連結</th>			
		</tr>
	</thead>
	<tbody>
		<tr class="odd_gradeX" id="2">
			<td>101-1</td>
			<td><input type="button" class="btn btn-inverse"></td>	
		</tr>
		<tr class="even_gradeC" id="4">
			<td>101-2</td>	
			<td><input type="button" class="btn btn-inverse"></td>	
		</tr>
		<tr class="even_gradeC" id="4">
			<td>102-1</td>	
			<td><input type="button" class="btn btn-inverse"></td>	
		</tr>
		<tr class="even_gradeC" id="4">
			<td>102-2</td>	
			<td><input type="button" class="btn btn-inverse"></td>	
		</tr>
	</tbody>
</table>

</div>	