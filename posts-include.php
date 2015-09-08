<?php theme_include('header'); ?>

  <section class="article archive">
    <article class="wrap post">
      <h1 class="blog-title">Mainly Rambles</h1>
      <?php if(has_posts()): ?>
        <!-- We have posts, it's safe to loop. -->
        <ul class="post-list">
          <?php while(posts()): ?>
            <li>
              <h2><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h2>
              <h6 class="bold">in
	      <a href="<?php echo article_category_url(); ?>"><?php echo article_category(); ?></a>
	      | Read Time: <?php echo dg_est_reading_time(); ?>
	      | Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>">
	      <?php echo relative_time(article_time()); ?></time>  </h6>
              <?php if (article_description()): ?>
								<div class="article-excerpt__intro">
									<h6><?php echo article_description(); ?><a class="article-exceprt__readmore" href="<?php echo article_url(); ?>"> Continue Reading &#8594;</a></h6>
								</div>
								<?php endif; ?>

            </li>
            
          <?php endwhile; ?>
           <aside class="categories">
						<h2 class="categories">Browse by categories:</h2>
						<ul class="categories-list">
						<?php while(categories()): ?>
							<li>
						<h6><a href="<?php echo category_url(); ?>" title="<?php echo category_description(); ?>"></a>
									<?php echo category_title(); ?> <span><?php echo category_count(); ?></span>
								</a>
								</h6>
							</li>
						<?php endwhile; ?>
						</ul>
					</aside>

        </ul>
      <?php else: ?>
        <p>Yeah, I haven't actually written anything yet.</p>
      <?php endif; ?>
    </article>
  </section>



<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://95.85.45.15/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
    g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();

</script>
<noscript><p><img src="http://95.85.45.15/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

  <!-- Grab some fresh-squeezed jquery -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <!-- If they're out, get some from the cellar -->
  <script>window.jQuery || document.write('<script src="<?php echo theme_url('/js/jquery.js'); ?>"><\/script>')</script>

<script src="../../../../assets/js/hashgrid.js"></script>

  <!-- Custom JS -->
  <script src="<?php echo theme_url('/js/scripts.js'); ?>"></script>

    </body>
</html>