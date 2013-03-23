

<script type="text/javascript">
	
	$(function(){

		$('#example').dataTable().makeEditable({
							sUpdateURL: "/cardReader/index.php/config/memo_update"
							});

		$('.btn').click(function(){			
			top.location.href='/cardReader/index.php/config/course';
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
			<th>課程名稱</th>
			<th>分場次</th>
			<th>開始時間</th>	
			<th>遲到(分)</th>				
		</tr>
	</thead>
	<tbody>
		<tr class="odd_gradeX" id="2">
			<td>討論課設計與提問</td>
			<td>
				<select>
					<option>1</option>
					<option>2</option>
					<option>3</option>
				</select>
			</td>	
			<td>09:00</td>
			<td>5</td>
		</tr>
		<tr class="even_gradeC" id="4">
			<td>增進溝通效率</td>	
			<td>
				<select>
					<option>1</option>
					<option>2</option>
				</select>
			</td>	
			<td>09:00</td>
			<td>10</td>
		</tr>		
	</tbody>
</table>

</div>	