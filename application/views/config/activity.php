

<script type="text/javascript">
	
	$(function(){

		$('#example').dataTable().makeEditable({
							sUpdateURL: "/cardReader/index.php/config/memo_update",
							aoColumns: [ 
			    {
					indicator: '儲存中...',
					tooltip: '點擊輸入日期',
					loadtext: '讀取中...',
			    	cancel: '取消',
			    	submit: '確定',
			    	onblur: 'ignore',
					type : 'text'
			    }, 
			    {
			    	indicator: '儲存中...',
			    	tooltip: '點擊選擇人數',
			    	loadtext: '讀取中...',
			    	type: 'select',
			    	cancel: '取消',
			    	submit: '確定',
			    	data: "{'0' :'請選擇', '1':'1', '2':'2', '3':'3', '4':'4', '5':'5', '5':'5', '6':'6', '7':'7', '8':'8', '9':'9', '10':'10' }"
                },
                null,
                null 
                ]
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
			<th>活動</th>
			<th>分場數</th>
			<th>研習會</th>
			<th>補課</th>	
			<th>課程連結</th>		
		</tr>
	</thead>
	<tbody>
		<tr class="odd_gradeX" id="2">
			<td>教學助理認證研習會</td>
			<td>3</td>	
			<td><input type="checkbox"></td>
			<td><input type="checkbox"></td>
			<td><input type="button" class="btn btn-inverse"></td>	
		</tr>
		<tr class="even_gradeC" id="4">
			<td>教學工作坊</td>	
			<td>4</td>	
			<td><input type="checkbox"></td>
			<td><input type="checkbox"></td>
			<td><input type="button" class="btn btn-inverse"></td>
		</tr>		
	</tbody>
</table>

</div>	