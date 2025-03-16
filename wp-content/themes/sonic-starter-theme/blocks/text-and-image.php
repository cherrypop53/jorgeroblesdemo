<?php
/**
 * Title: Text and Image with Button (Left)
 * Description: 50-50 block left.
 * Keywords: block, example
 * Category: custom-acf-blocks
 * Icon: admin-customizer
 * color: false
 * enqueue_style: true
 * enqueue_script: true
 * enqueue_libs:
 */
?>
<?php
$preTitle = get_field('pre_title');
$title = get_field('title');
$title2 = get_field('title2');
$textContent = get_field('text_content');
$imageURL = get_field('image_url');
$linkURL = get_field('link_url');
$linkLabel = get_field('link_label');
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<style>
    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-pagination{
        display: flex;
        justify-content: center;
    }

    .swiper-pagination-bullet {
        width: 30px;
        height: 30px;
        text-align: center;
        line-height: 20px;
        font-size: 12px;
        color: #000;
        opacity: 1;
        background: rgba(0, 0, 0, 0.2);
        font-weight: bold;
        font-size: 18px;
        display: grid;
        place-items: center;
    }

    .swiper-pagination-bullet-active {
        color: #fff;
        background: #7b69e9;
    }
</style>



<div class="slider-wrap">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="block-text-and-image" style="background-image: url('<?php echo $imageURL; ?>')">
                    <div class="component-left">
            <span class="pre-title">
                <?php echo $preTitle; ?>
            </span>
                        <h1 class="h1-first">
                            <?php echo $title; ?>
                        </h1>
                        <h1 class="h1-second">
                            <?php echo $title2; ?>
                        </h1>


                        <div class="text-content">
                            <?php echo $textContent; ?>
                        </div>

                        <div class="form">
                            <input type="text" placeholder="Your Email"> <button>Subscribe Now</button>
                        </div>
                        <div class="disclaimer">
                            <p>
                                Pure value – we’ll never spam you
                            </p>
                        </div>

                        <div class="button-set">
                            <a href="<?php echo $linkURL; ?>" class="btn btn-info"><?php echo $linkLabel; ?></a>
                        </div>
                    </div>
                    <div class="component-right">

                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="block-text-and-image" style="background-image: url('<?php echo $imageURL; ?>')">
                    <div class="component-left">
            <span class="pre-title">
                <?php echo $preTitle; ?>
            </span>
                        <h1 class="h1-first">
                            <?php echo $title; ?>
                        </h1>
                        <h1 class="h1-second">
                            <?php echo $title2; ?>
                        </h1>


                        <div class="text-content">
                            <?php echo $textContent; ?>
                        </div>

                        <div class="form">
                            <input type="text" placeholder="Your Email"> <button>Subscribe Now</button>
                        </div>
                        <div class="disclaimer">
                            <p>
                                Pure value – we’ll never spam you
                            </p>
                        </div>

                        <div class="button-set">
                            <a href="<?php echo $linkURL; ?>" class="btn btn-info"><?php echo $linkLabel; ?></a>
                        </div>
                    </div>
                    <div class="component-right">

                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="block-text-and-image" style="background-image: url('<?php echo $imageURL; ?>')">
                    <div class="component-left">
            <span class="pre-title">
                <?php echo $preTitle; ?>
            </span>
                        <h1 class="h1-first">
                            <?php echo $title; ?>
                        </h1>
                        <h1 class="h1-second">
                            <?php echo $title2; ?>
                        </h1>


                        <div class="text-content">
                            <?php echo $textContent; ?>
                        </div>

                        <div class="form">
                            <input type="text" placeholder="Your Email"> <button>Subscribe Now</button>
                        </div>
                        <div class="disclaimer">
                            <p>
                                Pure value – we’ll never spam you
                            </p>
                        </div>

                        <div class="button-set">
                            <a href="<?php echo $linkURL; ?>" class="btn btn-info"><?php echo $linkLabel; ?></a>
                        </div>
                    </div>
                    <div class="component-right">

                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        var swiper = new Swiper(".mySwiper", {
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                renderBullet: function (index, className) {
                    return '<span class="' + className + '">' + (index + 1) + "</span>";
                },
            },
        });
    });
</script>