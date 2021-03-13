<div class="col-12 align-self-center col-md-6 py-4 vcenter">
	<div class="px-2 d-flex justify-content-between align-items-center mb-2">
		<h2>
			(>‿◠)✌
			Blog Archive
		</h2>
		<a class="btn btn-light" href="<?php echo site_url('blog/create'); ?>" style="color:currentColor;">
			+ create a new one
		</a>
	</div>
	<p class="px-2">Hello there. My name is _____ and you can see all my stories here:</p>
	<?php foreach ($blog as $blog_item) : ?>
		<article class="py-3 article-card px-2">
			<a href="<?php echo site_url('blog/' . $blog_item['slug']); ?>">
				<h3><?php echo $blog_item['title']; ?></h3>
				<p class="mb-0">
					<?php
					echo implode(' ', array_slice(explode(' ', $blog_item['text']), 0, 20)) . "...";
					?>
				</p>
			</a>
		</article>
	<?php endforeach; ?>
</div>
