<?php
/**
 * Displays the Carousel widget on Home
 *
 * @package La Ceramica
 */

?>

<carousel v-model="slide"
:interval="4000"
>
    <carousel-slide
    class="cell-1"
    caption="First slide"
    alt="jaquar faucet prime"
    img-src='<?php echo the_field('carousel_1'); ?>'
    ></carousel-slide>
    <carousel-slide
    class="cell-1"
    caption="Second slide"
    alt="artize faucet confluence"
    img-src='<?php echo the_field('carousel_2'); ?>'
    ></carousel-slide>
    <carousel-slide
    caption="Third slide"
    alt="artize faucet dovetail"
    img-src='<?php echo the_field('carousel_3'); ?>'
    ></carousel-slide>
</carousel>