<section class="keep-reading-section">
  <div class="keep-reading-wrapper row columns position_rel">
    <?php
    $prev_post = get_previous_post();

    if (!empty( $prev_post )): ?>
      <div class="latest-news-single col_45 row">
        <a href="<?php echo $prev_post->guid ?>" class="blog-post-link">
          <div class="latest-thumb-wrapper row">
            <?php echo get_the_post_thumbnail(($prev_post->ID), 'post') ?>
          </div>
        </a>

        <a href="<?php echo $prev_post->guid ?>" class="blog-post-link">
          <div class="entry-meta col">
            <h3 class="heading-sm charcoal"><?php echo $prev_post->post_title ?></h3>
          </div>
        </a>
      </div><!-- .latest-news-single-->
    <?php endif ?>

    <div class="divider"></div>

    <?php
    $next_post = get_next_post();
    $nextthumbnail = get_the_post_thumbnail($prev_post->ID);
    if (!empty( $next_post )): ?>
    <div class="latest-news-single col_45 row">
      <a href="<?php echo $next_post->guid ?>" class="blog-post-link">
        <div class="latest-thumb-wrapper row">
          <?php echo $nextthumbnail; ?>
        </div>
      </a>

      <a href="<?php echo $next_post->guid ?>" class="blog-post-link">
        <div class="entry-meta col">
          <h3 class="heading-sm charcoal"><?php echo $next_post->post_title ?></h3>

        </div>
      </a>

    </div><!-- .latest-news-single-->
    <?php endif ?>
  </div><!-- kepp reading wrapper-->
</section>
