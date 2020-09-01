<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?> 版权所有</a>.
    <div>
        <?php _e('Power by <a href="http://www.typecho.org">Typecho</a>'); ?>.
        <?php _e('Theme by <a href="http://www.typecho.org">Cute4u</a>'); ?>.
    </div>
    <div>
        <a href="<?php $this->options->feedUrl(); ?>">Entries (RSS)</a> <!-- 文章的RSS地址连接 -->
        <a href="<?php $this->options->commentsFeedUrl(); ?>">Comments (RSS)</a>. <!-- 评论的RSS地址连接 --> 
    </div>
</footer><!-- end #footer -->

<?php $this->footer(); ?>
</body>
</html>
