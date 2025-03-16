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
$preTitle = get_field( 'pre_title' );
$title = get_field( 'title' );
$textContent = get_field( 'text_content' );
$imageURL = get_field( 'image_url' );
$linkURL = get_field( 'link_url' );
$linkLabel = get_field( 'link_label' );
?>
<div class="container">
    <div class="component-50-50 block-text-and-image-with-button-left">
        <div class="component-left">
        <span class="pre-title">
            <?php echo $preTitle; ?>
        </span>
            <h2>
                <?php echo $title; ?>
            </h2>

            <div class="text-content">
                <?php echo $textContent; ?>
            </div>


            <div class="button-set">
                <a href="<?php echo $linkURL; ?>" class="btn btn-info"><?php echo $linkLabel; ?></a>
            </div>
        </div>
        <div class="component-right">
            <img src="<?php echo $imageURL; ?>" alt="">
        </div>
    </div>
</div>