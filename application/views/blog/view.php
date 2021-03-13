<div class="col-12 col-md-6 align-self-center py-4">
	<div class="d-flex justify-content-between align-items-center">
		<a class="btn btn-light" href="<?php echo site_url('blog'); ?>" style="color:currentColor;">
			← back to home
		</a>
		<a class="btn btn-light" href="<?php echo site_url('blog/delete/' . $blog_item['slug']); ?>" style="color:currentColor;">
			x delete this article
		</a>
	</div>
	<h1 class="px-2">
		<? echo $blog_item['title'] ?>
	</h1>
	<p class="px-2"><?php echo $blog_item['text']; ?></p>
</div>
