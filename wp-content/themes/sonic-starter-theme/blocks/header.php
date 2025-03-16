<?php
/**
 * Title: Header
 * Description: Header
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
$logo = get_field('logo');
$ctaText = get_field('cta_text');
$ctaLink = get_field('cta_url');
?>
<div class="block-header">
    <div class="logo">
        <img src="<?php echo $logo; ?>" alt="Page Logo">
    </div>
    <div class="menu-links">
        <ul>
            <?php if (have_rows('menu_links')): ?>

                <?php while (have_rows('menu_links')): the_row();
                    $title = get_sub_field('link_title');
                    $url = get_sub_field('link_url');
                    ?>
                    <li class="menu-item">
                        <a href="<?php echo esc_url($url); ?>">
                            <?php echo esc_html($title); ?>
                        </a>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
    <div class="desk-cta">
        <a href="<?php echo $ctaLink; ?>">
            <button>
                <?php echo $ctaText; ?>
            </button>
        </a>
    </div>
    <div class="hamburger-cta">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="close-menu-cta">
        <span>+</span>
    </div>
</div>
<div class="mobile-menu-items">
    <ul class="mobile-links">
        <?php if (have_rows('menu_links')): ?>

            <?php while (have_rows('menu_links')): the_row();
                $title = get_sub_field('link_title');
                $url = get_sub_field('link_url');
                ?>
                <li class="menu-item">
                    <a href="<?php echo esc_url($url); ?>">
                        <?php echo esc_html($title); ?>
                    </a>
                </li>
            <?php endwhile; ?>
        <?php endif; ?>
    </ul>

    <div class="mob-cta">
        <a href="<?php echo $ctaLink; ?>">
            <button>
                <?php echo $ctaText; ?>
            </button>
        </a>
    </div>
</div>