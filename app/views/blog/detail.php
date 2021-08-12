<!-- Label -->
<section class="label">
	<div class="container">
		<p>Home/Blog/<?= $data['post']['post_title']; ?></p>
	</div>
</section>

<!-- About -->
<section class="blog">
	<div class="container">
		<h3><?= $data['post']['post_title']; ?></h3>
		<p><?= $data['post']['post_date']; ?></p>
		<p><?= $data['post']['post_article']; ?></p>
		<button class="button" onclick="history.go(-1);">Back </button>
	</div>
</section>