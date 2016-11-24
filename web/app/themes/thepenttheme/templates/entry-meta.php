<div><time class="updated left"  datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
<p class="byline author vcard">&nbsp;– <?= __(' by', 'sage'); ?><a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"> <?= get_the_author(); ?></a></p>
</div><div id="clear"></div>