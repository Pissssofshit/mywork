<!-- BEGIN HEADER INNER -->
<div class="page-header-inner">
<!-- BEGIN HORIZANTAL MENU -->
    <div class="page-logo">
        <div class="menu-toggler sidebar-toggler">

       </div>

    </div>

    <a href="javascript:;" style="positon:absolute;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">

    </a>
    <div class="" style="color:white;height:46px;min-height:46px;line-height:46px;float:right;width:120px;text-align:center;">
		<p>
			{{$user['userId']}}:{{$user['chsName']}}
			<a href="{{config('auth.sdk.baseurl')}}/index/logout">登出</a>
		</p>
    </div>
    <div class="hor-menu hor-menu-light hidden-sm hidden-xs loginus" style="float:right;height:46px;min-height:46px;line-height:46px;">
    </div>
    <style>
        a:link {
            color:#337ab7;
            text-decoration:none;
        }

        a:hover {
            color:#337ab7;
            text-decoration:none;
        }
        a:active {
            color:#337ab7;
            text-decoration:none;
        }
        a:visited {
            color:#337ab7;
            text-decoration:none;
        }
        .button{border: 1px solid #fff; background-color:#fff;color: #555; }
        .sub{border: 1px solid #0066FF;color:#0066FF }
        .button1{border: none; background-color:#fff;color: #0066FF; }

        .sub1{border: 1px solid #0066FF;color:#fff;background-color:#0066FF;border-radius: 5px;}
        a:hover{text-decoration:none}
        .table tr td{vertical-align: top;}
        .hor-menu img {
            vertical-align: middle;
            width: 30px;
            height: 30px;
            margin: 10px;
            cursor: pointer;
        }
        .loginus{
            display:none;
        }
        @media (min-width: 500px) {
            .loginus{
                display:block;
            }
        }

    </style>
    {{--<a style="float: right;line-height: 46px;margin-right: 10px;" target="_blank" href="https://quqi.com/6/194293">帮助手册</a>--}}
<!-- END TOP NAVIGATION MENU -->
</div>
<!-- END HEADER INNER -->
