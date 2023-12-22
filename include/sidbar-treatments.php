<?php

$prev_url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

$terms = get_terms('treatmentcategory',array('hide_empty'=>true));

if(!empty($terms)) { ?>
<div class="sidbar-row3">
	<div class="sidbar-col3">
		<h2>Treatments</h2>
		<ul class="sidbar-bar3">
		<?php 

foreach ($terms as $term) {

	$pages = get_posts(array(

	'post_type' => 'treatment',

	'numberposts' => -1,

	'tax_query' => array(

		array(

			'taxonomy' => 'treatmentcategory',

			'field' => 'id',

			'terms' => $term->term_id, // Where term_id of Term 1 is "1".

			'include_children' => false

		)

	)

	));

	$count = count($pages);//print_r($pages);

	if($count == 1){

		$id = $pages[0]->ID;

		$link = get_permalink($id);

	} else {

		$link = get_term_link($term->term_id);

	}

	$query_args = get_posts(array(

		'post_type' => 'treatment',

			'tax_query' => array(

				array(

					'taxonomy' => 'treatmentcategory',

					'field' => 'term_id',

					'terms' => $term->term_id,

				)

			),

	));

	if (!empty($query_args)) {

		$category_link = get_category_link($term->term_id);

		   $terms = wp_get_post_terms( $post->ID, array( 'treatmentcategory' ) ); 

		$tr=$terms[0]->name; ?>

		<li <?php if($tr == $term->name){echo 'class="active"';  }?>><a href="<?php echo $link;?>"><?php echo $term->name;?></a></li>

	<?php } 

} ?>
			
		</ul>
	</div>
</div>
<?php } ?>