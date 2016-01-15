<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Eshopper
 */
?>

<div class="left-sidebar">
    <h2><?php _e( 'Category', THEME_NAME ); ?></h2>
    <div class="panel-group category-products" id="accordian"><!--category-products-->
        <?php
        $cat_args = array(
            'taxonomy'     => 'product_cat',
            'orderby'      => 'name',
            'show_count'   => 0,
            'pad_counts'   => 0,
            'hierarchical' => 1,
            'title_li'     => '',
            'hide_empty'   => 0
        );
        $categories = get_categories( $cat_args );
        if ( count( $categories ) ) :
            foreach ( $categories as $cat ) :

                $children = get_terms( $cat->taxonomy, array(
                    'parent'     => $cat->term_id,
                    'hide_empty' => false
                ) );

                if (  $cat->category_parent === 0 ) :
                ?>
                    <div class="panel panel-default">
                        <?php
                            if ( $children ) :
                            ?>
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#<?php echo $cat->slug; ?>">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        <?php echo $cat->name; ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="<?php echo $cat->slug; ?>" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <?php
                                            foreach( $children as $child ) {
                                                echo '<li><a href="' . get_term_link( $child->term_id, $child->taxonomy ) . '">' . $child->name . '</a></li>';
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <?php
                            else :
                                ?>
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="<?php echo get_term_link( $cat->term_id, $cat->taxonomy ); ?>"><?php echo $cat->name; ?></a></h4>
                                </div>
                                <?php
                            endif;
                        ?>
                    </div>
                <?php
                endif;
            endforeach;
        endif;
        ?>
    </div><!--/category-products-->

    <div class="brands_products"><!--brands_products-->
        <h2><?php _e( 'Brands', THEME_NAME ); ?></h2>
        <div class="brands-name">
            <ul class="nav nav-pills nav-stacked">
                <?php
                    $tags_args = array(
                        'taxonomy'     => 'product_tag',
                        'orderby'      => 'name',
                        'show_count'   => 1,
                        'pad_counts'   => 0,
                        'hierarchical' => 1,
                        'title_li'     => '',
                        'hide_empty'   => 0
                    );
                    $tags = get_categories( $tags_args );

                    if ( count( $tags ) ) :
                        foreach ( $tags as $tag ) :
                        ?>
                        <li>
                            <a href="<?php echo get_term_link( $tag->term_id, $tag->taxonomy ); ?>">
                                <span class="pull-right">(<?php echo $tag->category_count; ?>)</span>
                                <?php echo $tag->name; ?>
                            </a>
                        </li>
                        <?php
                        endforeach;
                    endif;
                ?>
            </ul>
        </div>
    </div><!--/brands_products-->

    <div class="price-range"><!--price-range-->
        <h2><?php _e( 'Price Range', THEME_NAME ); ?></h2>
        <div class="well text-center">
            <?php $price_range = eshopper_get_price_range(); ?>
            <input type="text" class="span2" value="" data-slider-min="<?php echo $price_range['min']; ?>" data-slider-max="<?php echo $price_range['max']; ?>" data-slider-step="<?php echo $price_range['step']; ?>" data-slider-value="<?php echo $price_range['default']; ?>" id="sl2" ><br />
            <b class="pull-left">$ <?php echo $price_range['min']; ?></b> <b class="pull-right">$ <?php echo $price_range['max']; ?></b>
        </div>
    </div><!--/price-range-->

    <div class="shipping text-center"><!--shipping-->
        <img src="<?php echo esc_url( THEME_URL . '/images/home/shipping.jpg' ); ?>" alt="<?php _e( 'Shipping', THEME_NAME ); ?>" />
    </div><!--/shipping-->

</div>