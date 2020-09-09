<?php
/**
 * Cute4u 自定义皮肤
 * @author haiifeng
 * @version 1.0
 * @link http://haiifeng.com:7001
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');

/**
 * 提取富文本字符串的纯文本,并进行截取;
 * @param $string 需要进行截取的富文本字符串
 * @param $int 需要截取多少位
 */
function StringToText($string,$num){
	if($string){
		//把一些预定义的 HTML 实体转换为字符
		$html_string = htmlspecialchars_decode($string);
		//删除所有图片
		$content=preg_replace("/<[img|IMG].*?src=[\'\"](.*?(?:[\.gif|\.jpg|\.jpeg|\.png|\.tiff|\.bmp]))[\'|\"].*?[\/]?>/","",$html_string);
		//将空格替换成空
		$content = str_replace(" ", "", $content);
		//函数剥去字符串中的 HTML、XML 以及 PHP 的标签,获取纯文本内容
		$contents = strip_tags($content);
		//返回字符串中的前$num字符串长度的字符
		return mb_strlen($contents,'utf-8') > $num ? mb_substr($contents, 0, $num, "utf-8").'....' : mb_substr($contents, 0, $num, "utf-8");
	}else{
		return $string;
	}
}
?>

<div class="col-mb-12 col-8" id="main" role="main">
	<?php while($this->next()): ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
			<h2 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<ul class="post-meta" style="margin-bottom:0">
				<li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
				<li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
				<li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
			</ul>
            <div class="post-content row" itemprop="articleBody">
			<?php
				$c=$this->content;
				//默认渲染文章首图
				preg_match(
					"/<[img|IMG].*?src=[\'\"](.*?(?:[\.gif|\.jpg|\.jpeg|\.png|\.tiff|\.bmp]))[\'|\"].*?[\/]?>/",
					$c,
					$matches);
				//判断是否有图片
				if(mb_strlen($matches[0], 'utf-8') >0){
					echo '<div class="col-mb-12 col-4" style="padding-top: 10px;">'.$matches[0].'</div>'.'<div class="col-mb-12 col-8" ><p>'.StringToText($c,130).'</p></div>';
				}else{
					echo '<div class="col-mb-12 col-12" ><p>'.StringToText($c,130).'</p></div>';
				}
			?>
            </div>
        </article>
	<?php endwhile; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
