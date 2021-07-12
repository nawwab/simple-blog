<div class="col-12 align-self-center col-md-6 py-4 vcenter">
	<div class="px-2 d-flex justify-content-between align-items-center mb-2">
		<h2>
			(>‿◠)✌
			Blog Archive
		</h2>
		<a class="btn btn-light" href="<?= site_url('blog/create') ?>" style="color:currentColor;">
			+ create a new one
		</a>
	</div>
	<p class="px-2">Hello there. My name is _____ and you can see all my stories here:</p>
	<?php foreach ($blogs as $blog_item) : ?>
		<article class="py-3 article-card px-2">
			<a href="<?= site_url('blog/' . $blog_item['slug']) ?>">
				<h3><?= $blog_item['title'] ?></h3>
				<div class="mb-0">
					<?php
						$first_paragraph = explode("</p>", $blog_item['text'])[0];
						$first_tag = substr($first_paragraph, 0, 3);

						if (strlen($first_paragraph) < 60 || $first_tag != "<p>") 
						{
							echo $first_paragraph;
						} else {
							echo implode(" ", array_slice(explode(" ", $first_paragraph), 0, 20)) . "...";
						}
					?>
				</div>
			</a>
		</article>
	<?php endforeach; ?>
</div>
