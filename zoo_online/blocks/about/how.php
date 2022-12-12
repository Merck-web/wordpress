<?php
$posts = get_posts(array(
    'post_type' => 'slider_how',
    'numberposts' => -1,
));
$countPostsHow = 0
?>

<section class="section how">
    <div class="how_top">
        <div class="how_container">
            <p class="title"><?php echo get_field('how_it_works'); ?></p>
            <p class="description"><?php echo get_field('how_it_works_desc'); ?>
            </p>
            <div class="slider">
                <div class="swiper swiper-container-how">
                    <div class="swiper-wrapper">
                        <?php
                        $i = 0;
                        foreach ($posts as $post):
                            setup_postdata($post);

                            $description = get_field('description');
                            $image = get_field('image');
                            ?>

                            <div class="swiper-slide">
                                <img src="<?php echo $image ?>" class="d-block w-100" alt="<?php echo $image ?>">
                            </div>
                            <?php
                            $i++;
                        endforeach;
                        $countPostsHow = count($posts);
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>

                <div class="range-slider">
                    <p class="count">
                        <span class="start">01</span>/
                        <span class="end">0<?php echo $countPostsHow; ?></span>
                    </p>
                    <input onchange="computedRangeHow(<?php echo count($posts); ?>)"
                           type="range"
                           value="1"
                           min="1"
                           step="1"
                           max="<?php echo $countPostsHow; ?>"
                    />
                </div>
            </div>
        </div>
    </div>
    <div class="how_bot">
        konfknmdsf
    </div>
</section>

<script>
    const startIndexHowSlide = document.querySelector('.section.how .range-slider .start');
    const endIndexHowSlide = document.querySelector('.section.how .range-slider .end');
    const inputRangeSliderHow = document.querySelector('.section.how .range-slider input');
    const howCarousel = document.querySelector('.section.how #carouselHowControls');
    const indicators = document.querySelectorAll('.section.how .indicators');

    const swiperHow = new Swiper('.swiper-container-how', {
        loop: false,
        slidesPerView: 1,
        grabCursor: true,
    });
    console.log(swiperHow)


    function computedRangeHow(allElements) {
        startIndexHowSlide.innerText = '0' + inputRangeSliderHow.value;
        howCarousel.addEventListener('to', function () {
        })
    }

</script>