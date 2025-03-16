<?php
/**
 * Title: Card - Horizontal
 * Description: Card - Horizontal
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
$title = get_field('title');
$content = get_field('content');
$author = get_field('author');
$date = get_field('date');
$image = get_field('image');
$authorPhoto = get_field('author_photo');
?>
<div class="block-card-horizontal">
    <div class="card-image" style="background-image: url('<?php echo $image; ?>')"></div>
    <div class="block-card-horizontal-data">
        <h3><?php echo $title; ?></h3>
        <p><?php echo $content; ?></p>
        <div class="author">
            <img src="<?php echo $authorPhoto; ?>" alt="">
            <div class="author-details">
                <h5>
                    <?php echo $author; ?>
                </h5>
                <span class="date">
                    <?php echo $date; ?>
                </span>
            </div>
        </div>
    </div>
</div>
