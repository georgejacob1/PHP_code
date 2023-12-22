<?php  

if(!empty(get_field('testimonials',38)))
    {   

    $testimonial =get_field('testimonials',38);

    $count_slide = count($testimonial) ?>

<div class="sidbar-col2">

	<div class="sidbar-row2">
 				<?php if ($count_slide > 2) { $sliderdeskteam="slider one-time";} else { $sliderdeskteam="non-slider";} ?>

        <div class="<?php echo $sliderdeskteam;  ?>">
		            <?php $i=0;

                        foreach($testimonial  as $testi)
                            { 

                            if(!empty($testi['description']))
                                { 

                                if($i<5)

                                    { ?>
			<div>
				<div class="sidbar-bar2">
					
					<span><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/star-sea-kelp-plain-icon.svg" alt="star" /></span>
				</div>
				<p>“<?php echo strip_shortcodes(wp_trim_words($testi['description'], 25,'...' ));?>”</p>
				<?php

                     if(!empty($testi['author'])){ ?> 

                      <h3><?php echo $testi['author']; ?></h3>

                     <?php   } ?>
			</div>
			<?php }
                                
                            }

                        $i++;

                    } ?>

		</div>

		<a href="<?php echo get_permalink(38);?>" class="sidbar-btn2">READ MORE</a>
	</div>
</div>
<?php } ?>