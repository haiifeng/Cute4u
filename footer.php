<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    <div> &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> · All Rights Reserved</div>
    <div>
        <?php _e('Powered by <a href="http://www.typecho.org">Typecho</a>'); ?> ·
        <?php _e('Theme by <a href="http://haiifeng.com:7001">Cute4u</a>'); ?>
    </div>
    <div>
        <a href="<?php $this->options->feedUrl(); ?>">文章(RSS)</a> · <!-- 文章的RSS地址连接 -->
        <a href="<?php $this->options->commentsFeedUrl(); ?>">评论(RSS)</a>. <!-- 评论的RSS地址连接 --> 
    </div>
</footer><!-- end #footer -->

<!-- APlayer音频播放器 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aplayer@1.10.1/dist/APlayer.min.css">
<div id="aplayer"></div>
<script src="//cdn.jsdelivr.net/npm/aplayer@1.10.1/dist/APlayer.min.js" integrity="sha256-6Y7CJDaltoeNgk+ZftgCD9jLgmGv4xKUo8nQ0HgAwVo=" crossorigin="anonymous"></script>

<!-- 返回顶部 -->
<div id="toTop" class="toTopAni"><span>🚀</span></div>

<?php $this->footer(); ?>

<!-- <?php echo(json_encode($this->widget('Widget_Metas_Category_List')->stack)) ?> -->

<script type="text/javascript" src="<?php $this->options->themeUrl('/js/utils.js'); ?>"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('/js/index.js'); ?>"></script>
</body>
</html>
