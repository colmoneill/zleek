<?php theme_include('header'); ?>

<section class="article">
  <img src="<?php echo theme_url('/img/loading.gif'); ?>" class="loading" alt="Loading...">
  <div class="overlay"></div>
  <div class="featured-image" style="background-image: url(<?php echo article_custom_field('featured-image', 'http://www.wallope.com/wp-content/uploads/textures-wallpapers-334-free-wood-texture-grunge-wood-picture.jpg'); ?>);"></div>
  <article class="wrap post">
    <header class="post-header">
      <hgroup>
        <p class="category"><?php echo category_title(); ?></p>
        <h1><?php echo article_title(); ?></h1>
        <p class="lead"><?php echo article_description(); ?></p>
      </hgroup>
    </header>

    <?php echo article_markdown(); ?>
    


    <?php if(comments_open()): ?>
		<section class="comments">
			<?php if(has_comments()): ?>
			<ul class="commentlist">
				<?php $i = 0; while(comments()): $i++; ?>
				<li class="comment" id="comment-<?php echo comment_id(); ?>">
					<div class="wrap">
						<h2><?php echo comment_name(); ?></h2>
						<time><?php echo relative_time(comment_time()); ?></time>

						<div class="content">
							<?php echo comment_text(); ?>
						</div>

						<span class="counter"><?php echo $i; ?></span>
					</div>
				</li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>

			<form id="comment" class="commentform wrap" method="post" action="<?php echo comment_form_url(); ?>#comment">
				<?php echo comment_form_notifications(); ?>
 <h3>Comments?</h3>
				<p class="name">
					<label for="name">Your name:</label>
					<?php echo comment_form_input_name('placeholder="Your name"'); ?>
				</p>

				<p class="email">
					<label for="email">Your email address:</label>
					<?php echo comment_form_input_email('placeholder="Your email (won’t be published)"'); ?>
				</p>

				<p class="textarea">
					<label for="text">Your comment:</label>
					<?php echo comment_form_input_text('placeholder="Your comment"'); ?>
				</p>

				<p class="submit">
					<?php echo comment_form_button(); ?>
				</p>
			</form>

		</section>
		<?php endif; ?>
		
		
		    
                <aside class="categories">
						<h2 class="categories">Browse by categories</h2>
						<ul class="categories-list">
						<?php while(categories()): ?>
							<li>
								<a href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>">
									<?php echo category_count(); ?> posts in <span><?php echo category_title(); ?></span>
								</a>
							</li>
						<?php endwhile; ?>
						</ul>
					</aside>
					
					<h2 class="categories"> 
					<a href="http://colmoneill.net/blog/index.php/posts">Return to posts listing</a>
					</h2>
 
      

  </article>
</section>

<?php theme_include('footer'); ?>