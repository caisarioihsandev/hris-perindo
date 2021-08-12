<!-- Label -->
<section class="label">
	<div class="container">
		<p>Home/Blog</p>
	</div>
</section>

<!-- About -->
<section class="blog">
	<div class="container">
		<h3>ARTICLE</h3>

		<div class="box-article">
			<?php foreach ($data['posts'] as $post):?>
				<h3><?= $post['post_title']; ?></h3>
				<p><?= $post['post_date']; ?></p>
				<p><?= (str_word_count($post['post_article']) > 30 ? substr($post['post_article'], 0, 200)."..." : $post['post_article']); ?></p>
				<a href="<?= BASE_URL; ?>/blog/detail/<?= $post['post_id']; ?>" class="button">Read more...</a>
				
			<?php endforeach; ?>	
		</div>
		
	</div>	
</section>