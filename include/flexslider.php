
<?php
$slider = get_field('inner_slider','options');

$countSlider = count($slider);

if(!empty($slider))
    {
              
    shuffle($slider); ?>

<div class="flexslider">
  <?php if ($countSlider > 1) { $sliderban="slides"; } else { $sliderban="non-slider"; } ?>

    <ul class="<?php echo $sliderban; ?>">
	
		<?php

            $n=1;

            foreach($slider as $slid)
                {

                $img = aq_resize($slid['inner_slider_image']['url'],  2400,1192, true, true, true);

                $option1=$slid['position_1'];

                $option2=$slid['postion_2'];

                if(!empty($img))
                    { ?>
	            
					<li class="bgflex inner-slide<?php echo $n; ?>" style="background: url(<?php echo $img; ?>) no-repeat <?php echo ($option1=='top' && $option2=='top') ? 'top center;' : $option1." ".$option2; ?>;"></li>

				<?php }

                if($n==2)
                    {

                    $n=0;

                }

            $n++; 

            } ?>
                    
	</ul>
</div>
<?php } ?>