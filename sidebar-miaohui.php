<div class="sidebar">
    <ul id="primary-sidebar" class="primary-sidebar widget-area">
    <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-2' ); ?>
    <?php else: ?>
        //提示用户
        //或者，显示一些默认的边栏效果
    <?php endif; ?>	
    </ul>
</div><!-- .sidebar -->