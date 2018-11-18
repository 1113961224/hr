<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="/static/js/jquery-3.3.1.min.js"></script>
	<script src="/static/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="/static/bootstrap/css/bootstrap-table.min.css">
	<link rel="stylesheet" href="/static/bootstrap/css/bootstrap.css">
	<script src="/static/bootstrap/js/bootstrap-table.min.js"></script>
	<script src="/static/bootstrap/js/bootstrap-table-zh-CN.min.js"></script>
</head>
<body>
    电影名：<input type="text" name="m_name">
    <button class="layui-btn button" lay-submit="" style="width: 57px">查询</button>
	<table id="test"></table>
</body>
<script>
	 $('#test').bootstrapTable({
                    url: '/data',  // 请求URL
                    cache: false,    //是否使用缓存，默认为true，
                    striped: false,  //是否显示行间隔色
                    search: false,    //是否显示表格搜索，此搜索是客户端搜索，不会进服务端
                    searchOnEnterKey: true,  // 回车查询
                    showRefresh: false, //是否显示刷新按钮
                    showToggle: false,   //是否显示详细视图和列表视图的切换按钮
                    showColumns: false, //是否显示所有的列
                    minimumCountColumns: 2, //最少允许的列数
                    showPaginationSwitch: false,
                    clickToSelect: false,
                    detailView: false, // 是否显示父子表
                    pagination: true,  // 是否显示分页
                    paginationLoop: false,
                    classes: 'table table-hover table-bordered',
                    pageNumber: 1,                       //初始化加载第一页，默认第一页
                    pageSize: 10,                       //每页的记录行数（*）
                    pageList: [10, 20, 30],       //可供选择的每页的行数（*）
                    onClickCell: function (row, field, value, $element) {
                       
                    },
                    queryParams:function queryParams(params) {   //设置查询参数
                        var param = {

                            pageSize: params.pageSize,   //每页多少条数据
                            page: params.pageNumber, // 页码
                        };
                        $('body').find('[name]').each(function () {
                            var value = $(this).val();
                            if (value != '') {
                                param[$(this).attr('name')] = value;
                            }
                        });
                          return param;
                    },
                    sidePagination: 'server',   //服务端分页
                    //silentSort: false,
                    undefinedText: "空",//当数据为 undefined 时显示的字符
                    smartDisplay: false,
                    paginationPreText: '‹',//指定分页条中上一页按钮的图标或文字,这里是<
                    paginationNextText: '›',//指定分页条中下一页按钮的图标或文字,这里是>
                    escape: true,
                    idField: 'id',
                    maintainSelected: true,
					// toolbar: '.layui-row',  //工具按钮用哪个容器
                    queryParamsType: '', //默认值为 'limit' ,在默认情况下 传给服务端的参数为：offset,limit,sort
                    columns: [
                        {field: 'id', title: 'ID', align: 'center', sortable: false, halign: 'center'},
                        {field: 'm_name', title: '电影名', align: 'center', sortable: false, halign: 'center'},
                        {field: 'm_type', title: '类型', align: 'center', sortable: false, halign: 'center'},
                        {
                            title: '操作',
                            sortable: false,
                            halign: 'center',
                            // formatter属性 是用来对当前列的数据进行格式化操作
                            //row：代表当前行
							//value: 代表当前单元格中的值
                            formatter:  function (value, row, index) {
				                 if (row['status'] === 0) {
				                    return '预告';
				                 }
				                 if (row['status'] == 1) {
				                    return '上架';
				                 }
				                 if (row['status'] === 2) {
				                    return '下架';
				                 }
				                 return value;
				            },
                            clickToSelect: false,
                        },
                    ]
                });
      $(document).on('click', ".button",function(){
            $('#test').bootstrapTable('refresh',{query:{page:1}});
        });
</script>
</html>