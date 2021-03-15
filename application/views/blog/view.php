<?php 
	$paragraphs = explode(PHP_EOL, $blog_item['text']);
?>
<div class="col-12 col-md-6 align-self-center py-4">
	<div class="d-flex justify-content-between align-items-center mb-2">
		<a class="btn btn-light" href="<?= site_url('blog') ?>" style="color:currentColor;">
			<i class="fas fa-arrow-left"></i> <span>back to home</span>
		</a>
		<div class="btn-group">
			<a class="btn btn-light" href="<?= site_url('blog/delete/' . $blog_item['slug']) ?>" style="color:currentColor;" onclick="return confirm('Are you sure you want to delete article: <?= $blog_item['title'] ?>?')">
				<i class="far fa-trash-alt"></i>
			</a>
			<a class="btn btn-light" href="<?= site_url('blog/delete/' . $blog_item['slug']) ?>" style="color:currentColor;">
				<i class="far fa-edit"></i>
			</a>
		</div>
	</div>
	<h1 class="px-2">
		<?= $blog_item['title'] ?>
	</h1>
	<?php foreach ($paragraphs as $paragraph): ?>
		<p class="px-2">
			<?= $paragraph ?>
		</p>
	<?php endforeach ?>
</div>
