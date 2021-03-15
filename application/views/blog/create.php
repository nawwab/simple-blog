<div class="col-12 align-self-center col-md-6 py-4 vcenter">
	<h2 class="px-2">
		✍( ͡❛ ͜ʖ ͡❛)
		Create new article
	</h2>

	<?= form_open('blog/create') ?>
	<div class="px-2">
		<div class="form-group mb-4">
			<label class="mb-1" for="title">title</label>
			<input class="form-control form-control-lg <?= !empty(form_error('title')) ? 'is-invalid' : '' ?>" type="text" name="title" id="title">
			<?= form_error('title', '<span class="invalid-feedback">', '</span>') ?>
		</div>

		<div class="form-group mb-4">
			<label class="mb-1" for="text">text</label>
			<textarea 
				class="form-control form-control-lg <?= !empty(form_error('text')) ? 'is-invalid' : '' ?>" 
				style="resize: none;" 
				name="text" 
				id="text" 
				cols="30" 
				rows="10"
			></textarea>
			<?= form_error('text', '<span class="invalid-feedback">', '</span>') ?>
		</div>

		<div class="d-flex justify-content-between">
			<a class="btn btn-light" href="<?= site_url('blog') ?>">cancel</a>
			<input class="btn btn-dark mr-4" type="submit" name="submit" value="Create new article">
		</div>
	</div>
	</form>
</div>
