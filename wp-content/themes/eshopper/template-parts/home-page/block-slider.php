<?php
    if ( ( $carousel = eshopper_get_carousel() ) !== null ) :
?>
<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php
                            $i = 0;
                            foreach ( $carousel as $item ) :
                            ?>
                            <li data-target="#slider-carousel" data-slide-to="<?php echo $i; ?>" <?php echo ( $i === CAROUSEL_ACTIVE_POSITION ) ? 'class="active"' : ''; ?>></li>
                            <?php
                            $i++;
                            endforeach;
                        ?>
                    </ol>

                    <div class="carousel-inner">
                        <?php
                                                var_dump('<pre>', apply_filters( 'the_title', $item->post_title, $item->ID ));
                                                die;
                            $j = 0;
                            foreach ( $carousel as $item ) :
                                $carousel_img           = wp_get_attachment_image_src( CFS()->get( 'carousel_image', $item->ID ), 'full' );
                                $carousel_img_price     = wp_get_attachment_image_src( CFS()->get( 'carousel_image_price', $item->ID ), 'full' );
                                $carousel_img_alt       = get_post_meta( CFS()->get( 'carousel_image', $item->ID ), '_wp_attachment_image_alt', true );
                                $carousel_img_price_alt = get_post_meta( CFS()->get( 'carousel_image_price', $item->ID ), '_wp_attachment_image_alt', true );
                                $carousel_btn           = CFS()->get( 'carousel_button', $item->ID );
                                $carousel_btn_target    = ( $carousel_btn['target'] === 'none' ) ? '' : 'target="' . $carousel_btn['target'] . '"';
                                ?>
                            <div class="item <?php echo ( $j === CAROUSEL_ACTIVE_POSITION ) ? 'active' : ''; ?>">
                                <div class="col-sm-6">
                                    <?php echo CFS()->get( 'carousel_description', $item->ID ); ?>
                                    <a class="btn btn-default get" href="<?php echo esc_url( $carousel_btn['url'] ); ?>" <?php echo $carousel_btn_target; ?>><?php echo $carousel_btn['text']; ?></a>
                                </div>
                                <div class="col-sm-6">
                                    <img src="<?php echo isset( $carousel_img[0] ) ? $carousel_img[0] : ''; ?>" class="girl img-responsive" alt="<?php echo $carousel_img_alt; ?>" />
                                    <img src="<?php echo isset( $carousel_img_price[0] ) ? $carousel_img_price[0] : ''; ?>"  class="pricing" alt="<?php echo $carousel_img_price_alt; ?>" />
                                </div>
                            </div>
                            <?php
                            $j++;
                            endforeach;
                        ?>
                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->
<?php endif;