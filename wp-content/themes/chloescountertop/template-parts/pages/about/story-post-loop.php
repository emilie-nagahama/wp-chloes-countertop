<?php
  $posts = get_field('story_blog_posts');

  if( $posts ): ?>
      <ul>
      <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
          <?php setup_postdata($post);
                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
          ?>
          <li>
            <a href="<?php echo get_permalink(); ?>">
              <div class="about-blog-thumb" style="background-image: url('<?php echo $thumb['0'];?>')">

              </div>
              <h4><?php echo the_title(); ?></h4>
            </a>
          </li>
      <?php endforeach; ?>
      </ul>
      <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
  <?php endif; ?>
