<?php get_header(); ?>


<main id="site-content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	    <?php get_template_part('template-parts/photo_block'); ?>

<article class="single-photo">
      <h1><?php the_title(); ?></h1>

      <?php if ( has_post_thumbnail() ) : ?>
        <div class="photo-thumbnail">
          <?php the_post_thumbnail('large'); ?>
        </div>
      <?php endif; ?>


      <div class="photo-meta">
        <p><strong>Date :</strong> <?php echo get_the_date(); ?></p>
        <?php if ( has_term('', 'categorie') ) : ?>
          <p><strong>Catégories :</strong> <?php the_terms(get_the_ID(), 'categorie'); ?></p>
        <?php endif; ?>
        <?php if ( has_term('', 'format') ) : ?>
          <p><strong>Formats :</strong> <?php the_terms(get_the_ID(), 'format'); ?></p>
        <?php endif; ?>
        <?php if ( get_post_meta(get_the_ID(), 'type', true) ) : ?>
          <p><strong>Type :</strong> <?php echo esc_html( get_post_meta( get_the_ID(), 'type', true ) ); ?></p>
        <?php endif; ?>
        <?php if ( get_post_meta(get_the_ID(), 'reference', true) ) : ?>
          <p><strong>Référence :</strong> <?php echo esc_html( get_post_meta( get_the_ID(), 'reference', true ) ); ?></p>
        <?php endif; ?>
      </div>


      <div class="photo-content">
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
