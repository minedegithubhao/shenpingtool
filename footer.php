<div class="clear"></div>
</div><!-- .content -->
<?php wp_footer()?>
<div class="footer">
    <div>
        <?php $my_footer = get_term_by('slug', 'footer', 'category'); ?>
        <p><?php  echo $my_footer->description ?></p>
    </div>
</div><!-- .footer -->
</body>
</html>