<?php
/**
 * Title: Section Title
 * Description: Section Title
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
$text = get_field('text');
?>
<div class="block-section-title">
    <h2>
        <?php echo esc_html($title); ?>
    </h2>
    <p>
        <?php echo esc_html($text); ?>
    </p>
</div>