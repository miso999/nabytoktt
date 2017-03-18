<?php
use Roots\Sage\Extras;

$query_images_args = array(
    'post_type' => 'attachment',
    'post_mime_type' =>'image',
    'post_status' => 'inherit',
    'posts_per_page' => -1,
    'nabytok' => 'postele,kuchyne,satniky,schody,exterier'

    );

$query_images = new WP_Query( $query_images_args );
$images = array();
foreach ( $query_images->posts as $index=>$image) {

    $terms =  wp_get_post_terms($image->ID, 'nabytok', array("fields" => "slugs"));
    $images[$index]['category'] =  $terms[0];
    $images[$index]['large'] = wp_get_attachment_image_src( $image->ID, 'large')[0];
    $images[$index]['thumb'] = wp_get_attachment_image_src( $image->ID, 'thumbnail')[0];
}

?>



<section class="primary filter-section" id="portfolio">

    <div style="text-align: center">
        <div>
            <span class="section-title"> Realizácie </span>
        </div>
        <span class="title-separator"></span>
        <div>
            <span class="section-subtitle">	Ukážky zhotovených prác	</span>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">

                <div class="filter-container isotopeFilters">
                    <ul class="list-inline filter">
                        <li class="list-inline-item"><a href="#" data-filter=".satniky">Šatníky</a><span>|</span></li>
                        <li class="list-inline-item"><a href="#" data-filter=".kuchyne">Kuchyne</a><span>|</span></li>
                        <li class="list-inline-item active"><a href="#" data-filter=".schody">Schody</a><span>|</span></li>
                        <li class="list-inline-item"><a href="#" data-filter=".postele">Postele</a><span>|</span></li>
                        <li class="list-inline-item"><a href="#" data-filter=".exterier">Exteriér</a><span>|</span></li>
                        <li class="list-inline-item"><a href="#" data-filter="*">Všetko </a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="portfolio-section port-col">
    <div class="container">

        <div class="isotopeContainer">

            <?php foreach ($images as $image) { ?>
            <div class="col-sm-4 isotopeSelector <?=$image['category']?> ">
                <article class="">
                    <figure>
                        <a title="First Image" class="fancybox-pop" rel="portfolio-1" href="<?=$image['large']?>">
                            <img height='250' src="<?=$image['thumb']?>" alt="">
                        </a>
                    </figure>
                </article>
            </div>
            <?php } ?>

        </div>

    </div>
</section>
