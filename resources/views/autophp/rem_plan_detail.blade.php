		@extends('autophp.common.index')
		@section('title')
		rem
		@endsection
         @section('content')
         <div class="page-bar">
				<ol class="breadcrumb" style="margin: 0px">
					<li><i class="fa fa-home"></i><a href="">rem</a></li>
					<li class="active">类型定义</li>
				</ol>
		</div>
		<ul class="clearfix">
				<li class="admin_tab"><a href="/autophp/rem_plan">列  表</a></li>
				<li class="admin_tab"><a href="/autophp/rem_plan/create">添  加</a></li>
		</ul>
		<div id="main" class="easyui-panel" title="当前位置：rem >> 类型定义">
			<div class="easyui-panel" border="false" style="padding:1px">
				<fieldset>
	<legend>详情</legend>
	<form action="" method="post">
		<ul class="list_A">
			<li><label class="display_name">计划ID:</label><span>{{$detail->plan_id}}</span></li><li><label class="display_name">计划名:</label><span>{{$detail->plan_name}}</span></li><li><label class="display_name">账号id:</label><span>{{$detail->account_id}}</span></li><li><label class="display_name">游戏id:</label><span>{{$detail->game_id}}</span></li><li><label class="display_name">站点id:</label><span>{{$detail->site_id}}</span></li><li><label class="display_name">状态:</label><span>{{$detail->state}}</span></li><li><label class="display_name">是否启用过:</label><span>{{$detail->is_1st}}</span></li><li><label class="display_name">类型:</label><span>{{$detail->category_id}}</span></li><li><label class="display_name">推广方式:</label><span>{{$detail->mode_id}}</span></li><li><label class="display_name">创建时间:</label><span>{{$detail->created_time}}</span></li><li><label class="display_name">更新时间:</label><span>{{$detail->updated_time}}</span></li><li class="clearfix"></li><li class="ml35"><input class="kbutton" type="button" value="编辑" id="btn_edit"  onclick="javascript:location.href='./{{$detail->plan_id}}/edit'"/><input class="kbutton" type="button" value="删除" id="btn_delete"  onclick="javascript:confirm('确认需要删除此记录！！！')? deleteItem('/autophp/rem_plan/{{$detail->plan_id}}', {'_method':'DELETE'}) : null;"/></li>
		</ul>
	</form>
</fieldset>


<script type="text/javascript">
	function deleteItem(url, params) {
		params._token = "{{$csrf_token}}" ;
		$.post(url, params, function(data){
			alert(data > 0 ? "删除成功":"删除失败");
			location.href="/autophp/rem_plan";
			
		});
	}
</script>
			</div>
		</div>
@endsection