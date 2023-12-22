<?php $logo = get_field('logo_slider','options'); 

    if(!empty($logo)) 
    {     

    $count=count($logo) ?> 
<section class="partners-wrapp">
	<div class="margin">
    	
		<div class="partners-col1 desk">

        <div <?php if($count > 4){ ?> class="slider responsive"<?php }else{ ?> class="non-slider" <?php } ?>>
            
                
                <?php  foreach($logo as $value)
                    { 


                    if(!empty($value['logo_image']['url']))
                        { 
 

                        if(!empty($value['logo_image']['alt']))
                        { 

                            $alt=$value['logo_image']['alt'];

                        }else
                        {
                            $alt="Ashbourneroad-Dental-partner-logos";

                        }

     

                        if(!empty($value['logo_image']['title']))
                        { 

                            $title=$value['logo_image']['title'];

                        }else
                        {
                            $title="Ashbourneroad-Dental-partner-logos";

                        }

                        ?>
                        <?php if($count >4){ ?>

                    <div>

                    <?php } ?>

                        <div class="partners-row1">
                        
                            <?php  if(!empty($value['logo_link']))
                                    {

                                    if(!empty(get_field('no_follow','options')))
                                        { ?>
                                        <a href="<?php echo $value['logo_link']; ?>"  rel="nofollow" target="_blank">

                                        <img loading="lazy" src="<?php echo $value['logo_image']['url']; ?>" alt="<?php echo $alt; ?>"  title="<?php echo $title; ?>">

                                        </a>

                            <?php       } 
                                    else{ ?>

                                        <a href="<?php echo $value['logo_link']; ?>" target="_blank">

                                            <img loading="lazy" src="<?php echo $value['logo_image']['url']; ?>" alt="<?php echo $alt; ?>"  title="<?php echo $title; ?>">

                                        </a>

                            <?php       } 

                                    } 
                                else{ ?>


                                    <img loading="lazy" src="<?php echo $value['logo_image']['url']; ?>" alt="<?php echo $alt; ?>"  title="<?php echo $title; ?>">


                            <?php   } ?>

                        </div>

                    <?php if($count > 4){ ?>

                    </div>
                    
                    <?php } ?>
                    
                    <?php } }?>
                
                
                
            </div>
        </div>

        <div class="partners-col1 mob">

        <div <?php if($count > 1){ ?> class="slider responsive"<?php }else{ ?> class="non-slider" <?php } ?>>
            
                
                <?php  foreach($logo as $value)
                    { 


                    if(!empty($value['logo_image']['url']))
                        { 
 

                        if(!empty($value['logo_image']['alt']))
                        { 

                            $alt=$value['logo_image']['alt'];

                        }else
                        {
                            $alt="Ashbourneroad-Dental-partner-logos";

                        }

     

                        if(!empty($value['logo_image']['title']))
                        { 

                            $title=$value['logo_image']['title'];

                        }else
                        {
                            $title="Ashbourneroad-Dental-partner-logos";

                        }

                        ?>
                        <?php if($count >1){ ?>

                    <div>

                    <?php } ?>

                        <div class="partners-row1">
                        
                            <?php  if(!empty($value['logo_link']))
                                    {

                                    if(!empty(get_field('no_follow','options')))
                                        { ?>
                                        <a href="<?php echo $value['logo_link']; ?>"  rel="nofollow" target="_blank">

                                        <img loading="lazy" src="<?php echo $value['logo_image']['url']; ?>" alt="<?php echo $alt; ?>"  title="<?php echo $title; ?>">

                                        </a>

                            <?php       } 
                                    else{ ?>

                                        <a href="<?php echo $value['logo_link']; ?>" target="_blank">

                                            <img loading="lazy" src="<?php echo $value['logo_image']['url']; ?>" alt="<?php echo $alt; ?>"  title="<?php echo $title; ?>">

                                        </a>

                            <?php       } 

                                    } 
                                else{ ?>


                                    <img loading="lazy" src="<?php echo $value['logo_image']['url']; ?>" alt="<?php echo $alt; ?>"  title="<?php echo $title; ?>">


                            <?php   } ?>

                        </div>

                    <?php if($count > 1){ ?>

                    </div>
                    
                    <?php } ?>
                    
                    <?php } }?>
                
                
                
            </div>
        </div>
        
	</div>
</section>
<?php } ?>