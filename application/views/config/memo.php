

<script type="text/javascript">
	
	$(function(){

		$('#example').dataTable().makeEditable({
							sUpdateURL: "/cardReader/index.php/config/memo_update"
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
			<th>備註</th>			
		</tr>
	</thead>
	<tbody>
		<tr class="odd_gradeX" id="2">
			<td>A Trident</td>	
		</tr>
		<tr class="even_gradeC" id="4">
			<td>Trident</td>			
		</tr>
		<tr class="even_gradeC" id="4">
			<td>Trident</td>			
		</tr>
		<tr class="even_gradeC" id="4">
			<td>Trident</td>			
		</tr>
	</tbody>
</table>

</div>	