
var activeInfo;

$(function(){

		activeInfo = $('#activeInfo').dataTable({			
			"bPaginate": false, 
			"bLengthChange": false, 			
			"bSort": false, 
			"bInfo": false,
			"bFilter": false		
		});

		$('#studentInfo').dataTable({			
			"bPaginate": false, 
			"bLengthChange": false, 			
			"bSort": false, 
			"bInfo": false,
			"bFilter": false		
		});

		$("#semester").editable("/cardReader/index.php/brush/attend_update", {
			data   : " {'101-1':'101-1','101-2':'101-2','selected':'101-1'}",
			type   : "select",
			cancel: '取消',
			submit: '修改',
			indicator: "儲存中...",
			tooltip: '滑鼠點此可編輯...',
			cssclass : "text",
			name: "edit",
			width: "90px"
		});

		$("#activityType").editable("/cardReader/index.php/brush/attend_update", {
			data   : " {'椰林講堂':'椰林講堂','教學工作坊':'教學工作坊','selected':'101-1'}",
			type   : "select",
			cancel: '取消',
			submit: '修改',
			indicator: "儲存中...",
			tooltip: '滑鼠點此可編輯...',
			cssclass : "text",
			name: "edit",
			width: "90px"
		});

		$("#courseName").editable("/cardReader/index.php/brush/attend_update", {
			data   : " {'討論設計':'討論設計','教學互動':'教學互動','selected':'101-1'}",
			type   : "select",
			cancel: '取消',
			submit: '修改',
			indicator: "儲存中...",
			tooltip: '滑鼠點此可編輯...',
			cssclass : "text",
			name: "edit",
			width: "90px"
		});
		
		$("#memo").editable("/cardReader/index.php/brush/attend_update", {
			data   : " {'討論設計':'討論設計','教學互動':'教學互動','selected':'101-1'}",
			type   : "select",
			cancel: '取消',
			submit: '修改',
			indicator: "儲存中...",
			tooltip: '滑鼠點此可編輯...',
			cssclass : "text",
			name: "edit",
			width: "90px"
		});
		
	});