<?php
// Template part pour afficher une photo (extrait)

?>

<div class="photo-block">
    <img src="<?php echo esc_url(get_field('image_url')); ?>" alt="<?php the_title_attribute(); ?>" style="width:100%; height:100%; object-fit:cover;">
    <h3><?php the_title(); ?></h3>
    <p>Référence : <?php echo esc_html(get_field('reference')); ?></p>
    <p>Catégorie : <?php echo esc_html(get_field('categorie')); ?></p>
</div>
