<?php

?>
<section class="section head">
    <div class="content_bg">
        <?php if (get_field('page_title')): ?>
            <p><?php echo get_field('page_title') ?></p>
        <?php endif; ?>

        <button><span class="icon"></span><span class="text">watch online</span></button>
    </div>

    <div class="socials">

        <?php if (get_field('instagram')): ?>
            <a class="instagram" href="<?php echo get_field('instagram') ?>" target="_blank"></a>
        <?php endif; ?>

        <?php if (get_field('twitter')): ?>
            <a class="twitter" href="<?php echo get_field('twitter') ?>" target="_blank"></a>
        <?php endif; ?>

        <?php if (get_field('youtube')): ?>
            <a class="youtube" href="<?php echo get_field('youtube') ?>" target="_blank"></a>
        <?php endif; ?>

        <?php if (get_field('vk')): ?>
            <a class="vk" href="<?php echo get_field('vk') ?>" target="_blank"></a>
        <?php endif; ?>

    </div>

    <div class="head_slider">
        <!-- Slider main container -->
        <div class="swiper-container swiper-container-about">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <?php
                $posts = get_posts(array(
                    'post_type' => 'slider_about_zoo',
                    'numberposts' => 9,
                ));

                foreach ($posts as $post):
                    setup_postdata($post);

                    $description = get_field('description');
                    $image = get_field('image');
                    ?>


                    <div class="swiper-slide">

                        <div class="slide" style="background-image: url('<?php echo $image ?>');">
                            <div class="content">
                                <p class="description"><?php echo $description ?></p>
                                <div class="group_btn fbc">
                                    <button>
                                        <span class="icon play"></span>
                                        <span class="text">
                                        watch online
                                    </span>
                                    </button>
                                    <button data-bs-toggle="modal" href="#exampleModalToggle" role="button">
                                        <span class="icon donate"></span>
                                        <span class="text">
                                        donate
                                    </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                <?php endforeach;
                    wp_reset_postdata();
                ?>
            </div>

            <!-- If we need navigation buttons -->
            <!--            <div class="swiper-button-prev swiper-button-prev-about"></div>-->
            <!--            <div class="swiper-button-next swiper-button-next-about"></div>-->
        </div>

        <div class="range-slider">
            <p class="count">
                <span class="start">01</span>/
                <span class="end">0<?php echo count($posts); ?></span>
            </p>
            <input onchange="computedRange(<?php echo count($posts); ?>)"
                   type="range"
                   value="1"
                   min="1"
                   max="<?php echo count($posts); ?>"
                   step="1"
            />
        </div>
    </div>
</section>

<script>
    const startIndexSlide = document.querySelector('.range-slider .count .start');
    const endIndexSlide = document.querySelector('.range-slider .count .end');
    const inputSlideRange = document.querySelector('.range-slider input');

    const swiper = new Swiper('.swiper-container-about', {
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next-about',
            prevEl: '.swiper-button-prev-about',
        },
        slidesPerView: 5,
        grabCursor: true,
        breakpoints: {
            1620: {
                slidesPerView: 5,
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            450: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            0: {
                slidesPerView: 3,
                spaceBetween: 0
            },
        }
    });
    normalizeIndex = (swiper.activeIndex - 4)
    inputSlideRange.value = normalizeIndex
    computedRange();


    swiper.on('slideChange', function () {
        // console.log(swiper.activeIndex)
        // switch (swiper.activeIndex) {
        //     case 1:
        //         return swiper.activeIndex = 1
        //     case 2:
        //         return swiper.activeIndex = 2
        //     case 3:
        //         return swiper.activeIndex = 3
        //     case 4:
        //         return swiper.activeIndex = 1
        //     case 5:
        //         return swiper.activeIndex = 2
        //     case 6:
        //         return swiper.activeIndex = 3
        //     case 7:
        //         return swiper.activeIndex = 4
        //     case 8:
        //         return swiper.activeIndex = 5
        //     case 9:
        //         return swiper.activeIndex = 6
        //     case 10:
        //         return swiper.activeIndex = 7
        //     case 11:
        //         return swiper.activeIndex = 8
        //     case 12:
        //         return swiper.activeIndex = 9
        //     case 13:
        //         return swiper.activeIndex = 10
        //     default
        //         console.log('Сломалось нахуй')
        // }
    });


    function computedRange(allElements) {
        startIndexSlide.innerText = '0' + inputSlideRange.value
        swiper.slideTo(inputSlideRange.value)
        console.log(inputSlideRange.value)
    }


    //const modalAbout = document.querySelector('.head .modal_plant');
    //let modal
    //let openModal = false;
    //const content = document.querySelector('.head .swiper-wrapper');
    //content.onclick = function (event) {
    //    try {
    //        let target = event.target;
    //        let btn = target.closest('button');
    //        let verify = btn.getAttribute('data-action') === 'open_donat';
    //
    //        if (!!btn && !!verify) {
    //            openModal = true;
    //            toggleModal();
    //        }
    //    } catch (e) {
    //
    //    }
    //
    //}
    //
    //function toggleModal() {
    //    if (openModal) {
    //        disableScroll();
    //        modalAbout.innerHTML += `
    //                <div class="modal">
    //                     <?php //include 'donatWindow.php' ?>
    //                </div>`;
    //        modal = document.querySelector('.head .modal_plant .wrap');
    //    } else {
    //        modalAbout.innerHTML = '';
    //        enableScroll();
    //        if (modal) {
    //            modal = '';
    //        }
    //    }
    //
    //}
    //

    // left: 37, up: 38, right: 39, down: 40,
    // spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
    // const keys = {37: 1, 38: 1, 39: 1, 40: 1};

    // function preventDefault(e) {
    //     e.preventDefault();
    // }
    //
    // function preventDefaultForScrollKeys(e) {
    //     if (keys[e.keyCode]) {
    //         preventDefault(e);
    //         return false;
    //     }
    // }
    //
    // // modern Chrome requires { passive: false } when adding event
    // let supportsPassive = false;
    // try {
    //     window.addEventListener("test", null, Object.defineProperty({}, 'passive', {
    //         get: function () {
    //             supportsPassive = true;
    //         }
    //     }));
    // } catch (e) {
    // }
    //
    // const wheelOpt = supportsPassive ? {passive: false} : false;
    // const wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';
    //
    // // call this to Disable
    // function disableScroll() {
    //     window.addEventListener('DOMMouseScroll', preventDefault, false); // older FF
    //     window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
    //     window.addEventListener('touchmove', preventDefault, wheelOpt); // mobile
    //     window.addEventListener('keydown', preventDefaultForScrollKeys, false);
    // }
    //
    // // call this to Enable
    // function enableScroll() {
    //     window.removeEventListener('DOMMouseScroll', preventDefault, false);
    //     window.removeEventListener(wheelEvent, preventDefault, wheelOpt);
    //     window.removeEventListener('touchmove', preventDefault, wheelOpt);
    //     window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
    // }

    // toggleModal();
</script>

