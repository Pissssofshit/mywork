		@extends('autophp.common.index')
		@section('title')
		data
		@endsection
         @section('content')
         <div class="page-bar">
				<ol class="breadcrumb" style="margin: 0px">
					<li><i class="fa fa-home"></i><a href="">data</a></li>
					<li class="active">充值订单表</li>
				</ol>
		</div>
		<ul class="clearfix">
				<li class="admin_tab"><a href="/autophp/pay_log">列  表</a></li>
				<li class="admin_tab"><a href="/autophp/pay_log/create">添  加</a></li>
		</ul>
		<div id="main" class="easyui-panel" title="当前位置：data >> 充值订单表">
			<div class="easyui-panel" border="false" style="padding:1px">
				
			</div>
		</div>
@endsection