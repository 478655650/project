<?php $config = getConfig(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>{{$config->webname}}</title>
<link type="image/x-icon" href="favicon.ico" rel="icon">
<link rel="stylesheet" href="./homes/css/index.css"/>
<link rel="stylesheet" href="./homes/css/common.css"/>
<link rel="stylesheet" href="./homes/css/shake.css"/>
<script type="text/javascript" charset="UTF-8" src="./homes/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" charset="UTF-8" src="./homes/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" charset="UTF-8" src="./homes/js/form.js"></script>
<script type="text/javascript" charset="UTF-8" src="./homes/js/validate.js"></script>
<link rel="stylesheet" type="text/css" href="./homes/css/style.css"/>
<script type="text/javascript" charset="UTF-8" src="./homes/js/artdialog.js"></script>
<script type="text/javascript" charset="UTF-8" src="./homes/js/iframetools.js"></script>
<link rel="stylesheet" type="text/css" href="./homes/css/default.css"/>
<script type="text/javascript" charset="UTF-8" src="./homes/js/arttemplate.js"></script>
<script type="text/javascript" charset="UTF-8" src="./homes/js/arttemplate-plugin.js"></script>
<script type='text/javascript' src="./homes/js/common.js"></script>
<script type='text/javascript' src='./homes/js/site.js'></script>
<link rel="stylesheet" href="./homes/css/red.css"/>
<script type="text/javascript" src="./homes/js/jquery.sonline.js"></script>
<meta name='keywords' content='{{$config->keywords}}'>
<meta name='description' content='{{$config->content}}'>
</head>
<body>
<div class="mod-header__wrap js-unknown-role" id="js_main_nav">
	<div class="mod-header clearfix">
		<?php
				$cates = getCates(0);
				$sessionid = session('hid');
				$sessionid = DB::table('users')->where('id',$sessionid)->first();
				// dd($sessionid);
		 ?>
		 @if(!$sessionid)
		<div id="js-mod-header-login" class="mod-header__wrap-login">
			<a href="/login" class="mod-header__link-login js-login-op" id="js_login">登录</a>
			<a href="/register" class="mod-header__link-login js-login-op" id="js_login">注册</a>
			<a id="js-help" href="/site/help_list" class="mod-header__link-help">帮助</a>
		</div>
		@else
		<div id="js-mod-header-login" class="mod-header__wrap-login">
        <div class="mod-header_wrap-user" id="js_logout_outer">
					<i class="icon-red-circle" style="display:none;"></i>
	        <img src="/txkt./homes/picture/33c6424ed0cd4c5eb9c4c2f31fd20353.gif" class="mod-header__user-img js-avatar" width="30" height="30" onerror="this.src='{{$sessionid->profile}}'" />
          <p class="mod-header__user-name">
              <a href="/user" class="mod-header__user-operation">个人中心<i class="icon-select-down"></i></a>
          </p>
            <ul class="mod-header__user-operations">
	              <li><a href="/logout" class="js_logout mod-header__link-logout js-login-op">退出</a></li>
            </ul>
      	</div>
                  		<a id="js-help" href="/site/help_list" class="mod-header__link-help">帮助</a>
		</div>
		@endif

		<h1 class="mod-header-logo"><a href="/" title="腾讯课堂" class="mod-header__link-logo"></a></h1>
		<div class="mod-header__wrap-search" id="js-searchbox">
			<div class="mod-search">
				<form method='get' action='/s'>
					<input type='hidden' name='controller' value='site'/>
					<input type='hidden' name='action' value='search_list'/>
					<input class="mod-search__input" maxlength="38" type="text" name='word' autocomplete="off" value="输入关键字..."/>
					<input class="mod-search__btn-search i-search" type="submit" value="" onclick="checkInput('word','输入关键字...');"/>
				</form>
				<!--自动完成div 开始-->
				<ul class="auto_list" style='display:none'>
				</ul>
			</div>
			<div class="mod-search-word-list">
				<a href="/s?controller=site&action=search_list&word=会计基础学习" class="mod-search-word mod-search-word-hot" target="_blank">会计基础学习</a>
				<a href="/s?controller=site&action=search_list&word=新概念课文" class="mod-search-word mod-search-word-hot" target="_blank">新概念课文</a>
			</div>
		</div>
	</div>
</div>
<div class="wrap-banner">
	<div class="wrap-little-banner">
		<div class="wrap-activity-list" jump-end="true">
			@foreach($top as $k=>$v)
			<a href="{{$v->link}}" title="腾讯课堂" class="wrap-activity-item">{{$v->name}}</a>
			@endforeach
		</div>
		<div class="apply-entrance js-apply-entrance">
			<p class="apply-tt">
				学习平台
			</p>
			<ul class="apply-link-list">
				<li><a href="http://www.ouchn.edu.cn/" target="_blank" report-tdw="action=organization_comein">国家开放大学</a></li>
				<li><a href="http://www.buaa.edu.cn/" target="_blank" report-tdw="action=organization_comein">北京航空航天大学</a></li>
				<li><a href="http://www.neu.edu.cn/" target="_blank" report-tdw="action=organization_comein">东北大学</a></li>
				<li><a href="http://www.sjtu.edu.cn/" target="_blank" report-tdw="action=organization_comein">上海交通大学</a></li>
				<li><a href="http://www.ecust.edu.cn/" target="_blank" report-tdw="action=organization_comein">华东理工大学</a></li>
				<li><a href="http://www.ecnu.edu.cn/" target="_blank" report-tdw="action=organization_comein">华东师范大学</a></li>
			</ul>
		</div>
	</div>
	<div class="wrap-banner-bg clearfix">
		<div class="wrap-nav">
			<div class="mod-nav">
				<ul class="mod-nav__list allsort">
					<li class="mod-nav__li-first">
					<a id="js-course-list" href="javascript:;" class="mod-nav__course-all">
					<i class="icon-menu"></i><span>全部课程</span>
					</a>
					</li>

					<div class="sortlist" id='div_allsort' style='display:none'>
						@foreach($cates as $k=>$v)
						<li class="mod-nav__li js-mod-category ">

							<div class="mod-nav__wrap-nav-first">
								<i class="icon-font i-v-right"></i>
								<a href="/list?id={{$v->id}}" class="mod-nav__link-nav-first" target="_blank">{{$v->name}}</a>
							</div>
							@if($v->subcates)

							<div class="mod-nav__wrap-nav-hot">
								@foreach($v->subcates as $a=>$b)
								<a href="/list?id={{$b->id}}" class="mod-nav__link-nav-hot" target="_blank">{{$b->name}}</a>
								@endforeach
							</div>

							<div class="mod-nav__wrap-nav-side js-mod-category-side">
								<ul class="mod-nav__side-list">
									@foreach($v->subcates as $a=>$b)
									<li class="mod-nav__side-li">
										<a href="/site/pro_list/cat/7" class="mod-nav__link-nav-second" target="_blank">{{$b->name}}</a>
										<div class="mod-nav__wrap-nav-third">
											@foreach($b->subcates as $c=>$d)
											<a href="/list?id={{$d->id}}" class="mod-nav__link-nav-third mod-nav__wrap-nav-third_line" target="_blank">{{$d->name}}</a>
											@endforeach
										</div>
								  </li>
									@endforeach
						  	</ul>
							</div>
							@endif
					  </li>
						@endforeach


					</div>

				</ul>
			</div>
		</div>
	</div>
</div>
<div class="wrap-banner-core">
	<div class="wrap-big-banner">
		<div class="mod-big-banner" id="js_banner">
			<ul class="mod-big-banner__imgs">
				@foreach($lunbo as $k=>$v)
				<li>
				<a href="" class="mod-big-banner__link-img" title="{{$v->name}}" target="_blank" style="background:url(http://localhost/txkt/public/{{$v->image}}) center no-repeat;">
				</a>
				</li>
				@endforeach
			</ul>
		</div>
	</div>
	<div class="wrap-board">
		<div class="mod-board-clk" style="position:absolute;top:0px;width:230px;height:300px;cursor:pointer;">
		</div>
		<div class="mod-board">
			<div class="mod-board__top">
				<ul class="mod-board__top-notice-list">
					@foreach($article as $k=>$v)
					<li><a href="/article/{{$v->id}}" class="mod-board__top-notice" target="_blank">{{$v->title}}</a></li>
					@endforeach
				</ul>
			</div>
			<div class="mod-board__bottom">
				<a href="javascript:;" class="qr-app-link hover-leave">
				<div class="qr-app-link-inner">
					<i class="icon-app-phone"></i><i class="icon-app-animation"></i><span class="link-text">微信公众号</span>
				</div>
				<div class="qr-app-tips tips-force-out">
				</div>
				</a>
			</div>
		</div>
	</div>
</div>
<div class="wrap-activities">
	<a href="" class="activity-card__link" target="_blank"><img src="./homes/picture/20150803213000431.jpg" class="activity-card__img"/></a>
	<a href="" class="activity-card__link" target="_blank"><img src="./homes/picture/20150803213029100.png" class="activity-card__img"/></a>
	<a href="" class="activity-card__link" target="_blank"><img src="./homes/picture/20150803213103240.jpg" class="activity-card__img"/></a>
</div>
<div class="wrap-catalog-box wrap-catalog-box--full">
	<div class="mod-catalog-box" id="js-mod-catelog-box-hot">
		<div class="mod-catalog-box__header">
			<a class="mod-catalog-box__title" href="javascript:;">热门课程</a>
			<a id="js-like__link" class="mod-like__link" href="javascript:void(0);" onclick="hot_goods();"><i class="icon-font i-refresh"></i><span>换一批</span></a>
		</div>
		<div class="mod-catalog-box__content clearfix course-card-list-9-wrap">
			<div id="js-live-course">
				<ul class="course-card-list" id="speed_goods">
					<li class="course-card-item">
					<a href="/site/products/id/59" target="_blank" class="item-img-link">
					<img src="./homes/picture/f3477b8dbfdd4e80933f1c2114570c73.gif" alt="初升高物理衔接课" title="初升高物理衔接课" class="item-img" height="124" width="220"/>
					</a>
					<h4 class="item-tt">
					<a href="/site/products/id/59" target="_blank" class="item-tt-link" title="初升高物理衔接课">初升高物理衔接课</a>
					</h4>
					<div class="item-line">
						<span class="line-cell item-price">¥0.00</span>
					</div>
					</li>
					<li class="course-card-item">
					<a href="/site/products/id/49" target="_blank" class="item-img-link">
					<img src="./homes/picture/a32c4c0b23a944b196112e8cdee11164.gif" alt="股市精讲研究直播" title="股市精讲研究直播" class="item-img" height="124" width="220"/>
					</a>
					<h4 class="item-tt">
					<a href="/site/products/id/49" target="_blank" class="item-tt-link" title="股市精讲研究直播">股市精讲研究直播</a>
					</h4>
					<div class="item-line">
						<span class="line-cell item-price">¥0.00</span>
					</div>
					</li>
					<li class="course-card-item">
					<a href="/site/products/id/39" target="_blank" class="item-img-link">
					<img src="./homes/picture/e4928da25ebb47bfa9f5f5c5be015c57.gif" alt="PHP从零基础到项目实战高薪入职课【潭州学院】" title="PHP从零基础到项目实战高薪入职课【潭州学院】" class="item-img" height="124" width="220"/>
					</a>
					<h4 class="item-tt">
					<a href="/site/products/id/39" target="_blank" class="item-tt-link" title="PHP从零基础到项目实战高薪入职课【潭州学院】">PHP从零基础到项目实战高薪入职课【潭州学院】</a>
					</h4>
					<div class="item-line">
						<span class="line-cell item-price">¥0.00</span>
					</div>
					</li>
					<li class="course-card-item">
					<a href="/site/products/id/36" target="_blank" class="item-img-link">
					<img src="./homes/picture/8f07f0c231a04091b8481ad6b23bf621.gif" alt="7-平面设计入门" title="7-平面设计入门" class="item-img" height="124" width="220"/>
					</a>
					<h4 class="item-tt">
					<a href="/site/products/id/36" target="_blank" class="item-tt-link" title="7-平面设计入门">7-平面设计入门</a>
					</h4>
					<div class="item-line">
						<span class="line-cell item-price">¥0.00</span>
					</div>
					</li>
					<li class="course-card-item">
					<a href="/site/products/id/35" target="_blank" class="item-img-link">
					<img src="./homes/picture/733b995dedf545e6a8b8f2b11546b302.gif" alt="3Dmax建模（快速搞定入门)【云中帆教育】" title="3Dmax建模（快速搞定入门)【云中帆教育】" class="item-img" height="124" width="220"/>
					</a>
					<h4 class="item-tt">
					<a href="/site/products/id/35" target="_blank" class="item-tt-link" title="3Dmax建模（快速搞定入门)【云中帆教育】">3Dmax建模（快速搞定入门)【云中帆教育】</a>
					</h4>
					<div class="item-line">
						<span class="line-cell item-price">¥0.00</span>
					</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

	<div class="wrap-bg-gray6">
		<div class="wrap-catalog-box">
			<div class="mod-catalog-box mod-catalog-box_h" id="mod2">
				<script type="text/javascript">
                    $(document).ready(function(){
                        cutover("mod2",'1');
                    });
                </script>
				<div class="mod-catalog-box__header tabContainer">
					<a href="/site/pro_list/cat/6" class="mod-catalog-box__title" target="_blank">亲子课堂</a>
					<ul class="mod-catalog-box__nav">
						<li class="mod-catalog-box__nav-item current">
						<a href="/site/pro_list/cat/114" class="mod-catalog-box__link-nav" target="_blank">幼儿教育</a>
						</li>
						<li class="mod-catalog-box__nav-item">
						<a href="/site/pro_list/cat/115" class="mod-catalog-box__link-nav" target="_blank">学前早教</a>
						</li>
						<li class="mod-catalog-box__nav-item">
						<a href="/site/pro_list/cat/116" class="mod-catalog-box__link-nav" target="_blank">家长训练营</a>
						</li>
					</ul>
				</div>
				<div class="mod-catalog-box__content clearfix panelContainer">
					<a href="" class="mod-catalog-box__link-img" target="_blank">
					<img src="./homes/picture/20150803223638111.jpg" class="mod-catalog-box__img" height="220" width="465"/>
					</a>
					<div class="mod-catalog-box__content-bd course-card-list-9-wrap" style="display:block;">
						<ul class="course-card-list">
							<li class="course-card-item">
							<a href="/site/products/id/81" target="_blank" class="item-img-link">
							<img src="./homes/picture/1431d891ba1c4406a9206c2a77823187.gif" alt="婴幼儿成长手册必知" title="婴幼儿成长手册必知" class="item-img" height="124" width="220"/>
							</a>
							<h4 class="item-tt">
							<a href="/site/products/id/81" target="_blank" class="item-tt-link" title="婴幼儿成长手册必知">婴幼儿成长手册必知</a>
							</h4>
							<div class="item-line">
								<span class="line-cell item-price free">¥0.00</span>
							</div>
							</li>
							<li class="course-card-item">
							<a href="/site/products/id/72" target="_blank" class="item-img-link">
							<img src="./homes/picture/bbdb78e62cfc4964b9344741d26bb580.gif" alt="幼儿园开学前准备工作" title="幼儿园开学前准备工作" class="item-img" height="124" width="220"/>
							</a>
							<h4 class="item-tt">
							<a href="/site/products/id/72" target="_blank" class="item-tt-link" title="幼儿园开学前准备工作">幼儿园开学前准备工作</a>
							</h4>
							<div class="item-line">
								<span class="line-cell item-price free">¥0.00</span>
							</div>
							</li>
							<li class="course-card-item">
							<a href="/site/products/id/71" target="_blank" class="item-img-link">
							<img src="./homes/picture/763f6a60fb24413fa143b9f75e4599da.gif" alt="天才宝宝好习惯-从正确早教开始-宝妈必学【潭州亲情学院】" title="天才宝宝好习惯-从正确早教开始-宝妈必学【潭州亲情学院】" class="item-img" height="124" width="220"/>
							</a>
							<h4 class="item-tt">
							<a href="/site/products/id/71" target="_blank" class="item-tt-link" title="天才宝宝好习惯-从正确早教开始-宝妈必学【潭州亲情学院】">天才宝宝好习惯-从正确早教开始-宝妈必学【潭州亲情学院】</a>
							</h4>
							<div class="item-line">
								<span class="line-cell item-price free">¥0.00</span>
							</div>
							</li>
						</ul>
					</div>
					<div class="mod-catalog-box__content-bd course-card-list-9-wrap" style="display:none">
						<ul class="course-card-list">
							<li class="course-card-item">
							<a href="/site/products/id/62" target="_blank" class="item-img-link">
							<img src="./homes/picture/098f688c9e4a4b42b8c8f17090dba4a5.gif" alt="Elementary English 2" title="Elementary English 2" class="item-img" height="124" width="220"/>
							</a>
							<h4 class="item-tt">
							<a href="/site/products/id/62" target="_blank" class="item-tt-link" title="Elementary English 2">Elementary English 2</a>
							</h4>
							<div class="item-line">
								<span class="line-cell item-price free">¥0.00</span>
							</div>
							</li>
							<li class="course-card-item">
							<a href="/site/products/id/61" target="_blank" class="item-img-link">
							<img src="./homes/picture/d9d3eb8ab63e497e9a361ddfec927206.gif" alt="宝宝早教智力开发-性格培养-习惯养成-认知天赋培养-潭州亲情学院" title="宝宝早教智力开发-性格培养-习惯养成-认知天赋培养-潭州亲情学院" class="item-img" height="124" width="220"/>
							</a>
							<h4 class="item-tt">
							<a href="/site/products/id/61" target="_blank" class="item-tt-link" title="宝宝早教智力开发-性格培养-习惯养成-认知天赋培养-潭州亲情学院">宝宝早教智力开发-性格培养-习惯养成-认知天赋培养-潭州亲情学院</a>
							</h4>
							<div class="item-line">
								<span class="line-cell item-price free">¥0.00</span>
							</div>
							</li>
							<li class="course-card-item">
							<a href="/site/products/id/34" target="_blank" class="item-img-link">
							<img src="./homes/picture/c52b487c61264c949492dc9881ca343c.gif" alt="版权专利：乖孩子速成法" title="版权专利：乖孩子速成法" class="item-img" height="124" width="220"/>
							</a>
							<h4 class="item-tt">
							<a href="/site/products/id/34" target="_blank" class="item-tt-link" title="版权专利：乖孩子速成法">版权专利：乖孩子速成法</a>
							</h4>
							<div class="item-line">
								<span class="line-cell item-price free">¥18.00</span>
							</div>
							</li>
						</ul>
					</div>
					<div class="mod-catalog-box__content-bd course-card-list-9-wrap" style="display:none">
						<ul class="course-card-list">
							<li class="course-card-item">
							<a href="/site/products/id/63" target="_blank" class="item-img-link">
							<img src="./homes/picture/75f1a3ded9374a80aca285613107c515.gif" alt="好家长是这样炼成的" title="好家长是这样炼成的" class="item-img" height="124" width="220"/>
							</a>
							<h4 class="item-tt">
							<a href="/site/products/id/63" target="_blank" class="item-tt-link" title="好家长是这样炼成的">好家长是这样炼成的</a>
							</h4>
							<div class="item-line">
								<span class="line-cell item-price free">¥0.00</span>
							</div>
							</li>
							<li class="course-card-item">
							<a href="/site/products/id/33" target="_blank" class="item-img-link">
							<img src="./homes/picture/016e287f33d74f069a168c47f3090939.gif" alt="英文绘本亲子启蒙课I SPY PHONICS FUN 毛妈carol绘本亲子课堂" title="英文绘本亲子启蒙课I SPY PHONICS FUN 毛妈carol绘本亲子课堂" class="item-img" height="124" width="220"/>
							</a>
							<h4 class="item-tt">
							<a href="/site/products/id/33" target="_blank" class="item-tt-link" title="英文绘本亲子启蒙课I SPY PHONICS FUN 毛妈carol绘本亲子课堂">英文绘本亲子启蒙课I SPY PHONICS FUN 毛妈carol绘本亲子课堂</a>
							</h4>
							<div class="item-line">
								<span class="line-cell item-price free">¥0.00</span>
							</div>
							</li>
							<li class="course-card-item">
							<a href="/site/products/id/32" target="_blank" class="item-img-link">
							<img src="./homes/picture/1904b8b45158478dbd52f1494f35d287.gif" alt="培育优秀子女的规律（博瑞智家庭教育 家庭教育第一品牌）" title="培育优秀子女的规律（博瑞智家庭教育 家庭教育第一品牌）" class="item-img" height="124" width="220"/>
							</a>
							<h4 class="item-tt">
							<a href="/site/products/id/32" target="_blank" class="item-tt-link" title="培育优秀子女的规律（博瑞智家庭教育 家庭教育第一品牌）">培育优秀子女的规律（博瑞智家庭教育 家庭教育第一品牌）</a>
							</h4>
							<div class="item-line">
								<span class="line-cell item-price free">¥0.00</span>
							</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="wrap-bg-dark-gray">
	<div class="wrap-cooperation">
		<h3 class="cooperation-title">友情链接</h3>
		<ul class="cooperation-list" id="js-cooperation-list">
      @foreach($links as $k=>$v)
			<li><a href="{{$v->url}}" class="link-cooperation" title="{{$v->url}}" target="_blank">{{$v->linkname}}</a></li>
      @endforeach
  	</ul>
	</div>
</div>
<script type='text/javascript'>
//dom载入完毕执行
jQuery(function()
{
	$('#div_allsort').show();
	$('.allsort').hover(
		function(){
			$('#div_allsort').show();
		}
	);
	//index 分类展示
	$('#index_category tr').hover(
		function(){
			$(this).addClass('current');
		},
		function(){
			$(this).removeClass('current');
		}
	);
	//email订阅 事件绑定
	var tmpObj = $('input:text[name="orderinfo"]');
	var defaultText = tmpObj.val();
	tmpObj.bind({
		focus:function(){checkInput($(this),defaultText);},
		blur :function(){checkInput($(this),defaultText);}
	});
});
//电子邮件订阅
function orderinfo()
{
	var email = $('[name="orderinfo"]').val();
	if(email == '')
	{
		alert('请填写正确的email地址');
	}
	else
	{
		$.getJSON('/site/email_registry',{email:email},function(content){
			if(content.isError == false)
			{
				alert('订阅成功');
				$('[name="orderinfo"]').val('');
			}
			else
				alert(content.message);
		});
	}
}
//主页热门商品，换一换功能
function hot_goods(){
	$.getJSON("/block/hot_goods",function(content){
		if(content && content.length > 0){
			var html =  "";
			var award_value = '';
			for(var i = 0;i < content.length; i++)
			{
				if(content[i].award_value){
					award_value = content[i].award_value;
				}
				var imgUrl = "/@url@";
				imgUrl     = imgUrl.replace("@url@",content[i].img);
				html =  html+ '<li class="course-card-item">'
                        +'<a href="site/products/id/'+content[i].goods_id+'" target="_blank" class="item-img-link">'
                        +'<img src="'+imgUrl+'" alt="'+content[i].name +'" title="'+content[i].name +'" class="item-img" height="124" width="220" />'
                        +'</a>'
                        +'<h4 class="item-tt">'
                        +'<a href="site/products/id/'+content[i].goods_id+'" target="_blank" class="item-tt-link" title="'+content[i].name +'">'+content[i].name +'</a>'
                        +'</h4>'
                        +'<div class="item-line"><span class="line-cell item-price">¥'+content[i].sell_price +'</span>'
                      	+'</div>'
                        +'</li>';
			}
			$('#speed_goods').html(html);
		}
	});
}
</script>
<div class="mod-footer mod-footer_dark">
	<p>
			{{$config->copy}}
	</p>
	<p>
			深圳市腾讯计算机系统有限公司 版权所有 | <a target="_blank">腾讯课堂服务协议</a>
	</p>
</div>
<div class="wrap-side-operation" id="js-side-operation">
	<div class="mod-side-operation">
		<div style="display: block;" id="js-jump-container" class="js-jump-container">
			<a href="javascript:void(0)" class="mod-side-operation__jump-to-top" id="js-jump-to-top"><i class="icon-font i-to-top"></i></a>
		</div>
		<div class="side-service-item side-service-qq js-c-special">
			<a class="item-link-block" href="javascript:;" target="_blank">
			<i class="icon-font i-qq-border item-icon"></i>
			<span class="item-hover-text">在线客服</span>
			</a>
		</div>
		<div class="side-service-item side-service-weixin js-c-special">
			<i class="icon-font i-weixin-border item-icon"></i>
			<span class="item-hover-text">扫码关注</span>
			<div class="item-hover-tips">
			</div>
		</div>
		<div class="side-service-item side-service-qr-code">
			<i class="icon-font i-phone item-icon"></i>
			<span class="item-hover-text">移动课堂</span>
			<div class="item-hover-tips">
			</div>
		</div>
		<div class="side-service-item side-service-feedback">
			<a class="item-link-block js-feedback-link" href="javascript:;">
			<i class="icon-font i-edit item-icon"></i>
			<span class="item-hover-text">问题反馈</span>
			</a>
		</div>
	</div>
</div>
<script type='text/javascript'>
$(function()
{
		$('input:text[name="word"]').val("输入关键字...");
	$('input:text[name="word"]').bind({
		keyup:function(){autoComplete('/site/autoComplete','/site/search_list/word/@word@','');}
	});
	var mycartLateCall = new lateCall(200,function(){showCart('/simple/showCart')});
	//购物车div层
	$('.mycart').hover(
		function(){
			mycartLateCall.start();
		},
		function(){
			mycartLateCall.stop();
			$('#div_mycart').hide('slow');
		}
	);
});
//[ajax]加入购物车
function joinCart_ajax(id,type)
{
	$.getJSON("/simple/joinCart",{"goods_id":id,"type":type,"random":Math.random()},function(content){
		if(content.isError == false)
		{
			var count = parseInt($('[name="mycart_count"]').html()) + 1;
			$('[name="mycart_count"]').html(count);
			alert(content.message);
		}
		else
		{
			alert(content.message);
		}
	});
}
//列表页加入购物车统一接口
function joinCart_list(id)
{
	$.getJSON('/simple/getProducts',{"id":id},function(content){
		if(!content)
		{
			joinCart_ajax(id,'goods');
		}
		else
		{
			var url = "/block/goods_list/goods_id/@goods_id@/type/radio/is_products/1";
			url = url.replace('@goods_id@',id);
			artDialog.open(url,{
				id:'selectProduct',
				title:'选择货品到购物车',
				okVal:'加入购物车',
				ok:function(iframeWin, topWin)
				{
					var goodsList = $(iframeWin.document).find('input[name="id[]"]:checked');
					//添加选中的商品
					if(goodsList.length == 0)
					{
						alert('请选择要加入购物车的商品');
						return false;
					}
					var temp = $.parseJSON(goodsList.attr('data'));
					//执行处理回调
					joinCart_ajax(temp.product_id,'product');
					return true;
				}
			})
		}
	});
}
</script>
</body>
</html>
