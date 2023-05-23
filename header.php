<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php wp_title( '-', true, 'right' );?></title>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/style.css" />
<?php wp_head() ?>
</head>
<body>
<div class="header">
	<div class="header-top">
		<div class="header-top-content">
			<a class="rssfeed" href="<?php bloginfo('rss2_url')?>" target="_blank">RSS订阅</a>
			<span class="sitedesc"><?php bloginfo( 'description' )?></span>
		</div><!-- .header-top-content -->
	</div><!-- .header-top -->
	<div class="header-mid">
		<h1 class="site-header">
			<a href="<?php bloginfo( 'url' )?>" rel="home" title="神评论"><img src="<?php echo get_template_directory_uri()?>/images/logo182x60.png" /></a>
		</h1>
		<?php get_search_form()?>
	</div><!-- .header-mid -->
	<div class="header-nav">
	<?php
		/*
		wp_nav_menu( $args )
		@参数 array $args, 传递此参数时用array(成员参数名=>成员参数值)
		特别说明：
		调用导航菜单时，可以直接复制以下代码。然后根据需要删除成员参数
		*/
		wp_nav_menu( array(
		'theme_location'     		=> 'zhudaohang',				//[保留] 定义菜单的名称/别名
		'container' 				=> false,			//[可删] 容器，菜单使用什么包裹，一般都是div
		'before'					=> '',				//[可删] 链接标记前面的文本，一般不用
		'after'					=> '',				//[可删] 链接标记后面的文本，一般不用
		'link_before'				=> '',				//[可删] 链接文本前面的文本，一般不用
		'link_after'				=> '',				//[可删] 链接文本后面的文本，一般不用
		'items_wrap'				=> '<ul id="%1$s" class="%2$s">%3$s</ul>',	//[可删]
		'depth'					=> -1,				//[可删] 深度，显示几级菜单，0-默认，有多少显示多少，-1-部分层级
		'walker'					=> ''				//[可删]			
		) );


		?>	
	</div><!-- .header-nav -->
</div><!-- .header -->
<div class="content">
	<div class="bread">
		<div class="location">您现在的位置：</div>
		<div class="breadcrumbs"><?php lingfeng_breadcrumbs() ?></div>
		<div class="clear"></div>
	</div><!-- .bread -->