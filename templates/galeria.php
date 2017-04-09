<?php the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
 <div style="text-align: center">
        <div>
<h1 class="section-title"> 
<?=get_the_title();?>
 </h1>
        </div>
        <span class="title-separator"></span>
<?
$query_images_args = array(
    'post_type' => 'attachment',
    'post_mime_type' =>'image',
    'post_status' => 'inherit',
    'posts_per_page' => -1,
    //'nabytok' => 'postele,kuchyne,satniky,schody,exterier',
     'order' => 'ASC',
     'orderby' => 'rand'
    );

$query_images = new WP_Query( $query_images_args );
$images = array();
foreach ( $query_images->posts as $index=>$image) {

    $terms =  wp_get_post_terms($image->ID, 'nabytok', array("fields" => "slugs"));
 //   $images[$index]['category'] =  $terms[0];
    $images[$index]['large'] = wp_get_attachment_image_src( $image->ID, 'large')[0];
    $images[$index]['thumb'] = wp_get_attachment_image_src( $image->ID, 'thumbnail')[0];
}
?>

<section class="portfolio-section port-col">
    <div class="container">

        <div class="isotopeContainer">

            <?php foreach ($images as $image) { ?>

           


            <div class="col-sm-4 isotopeSelector">
                <article class="">
                    <figure>
                        <a rel="lightbox" href="<?=$image['large']?>">
                            <img height='250' src="<?=$image['thumb']?>" alt="">
                        </a>
                    </figure>
                </article>
            </div>
            <?php } ?>

        </div>

    </div>
</section>
