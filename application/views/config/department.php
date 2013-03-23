
department

<script type="text/javascript">
	
	$(function(){

		$('#example').dataTable().makeEditable({
							sUpdateURL: "/cardReader/index.php/config/memo_update"
							});
		
	});
		
	
	
</script>

<div id="demo">

<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
	<thead>
		<tr>
			<th>科系</th>		
		</tr>
	</thead>
	<tbody>
		<tr class="odd_gradeX" id="2">
			<td>歷史系</td>
		</tr>
		<tr class="even_gradeC" id="4">
			<td>外文系</td>	
		</tr>		
	</tbody>
</table>

</div>	