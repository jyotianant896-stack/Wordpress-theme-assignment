<?php get_header(); ?>

<!-- HERO SECTION -->
<section class="hero">
    <div class="hero-content">
        <h1><?php the_field('hero_title'); ?></h1>
        <p><?php the_field('hero_subtitle'); ?></p>

        <a href="#" class="btn">
            <?php the_field('hero_button_text'); ?>
        </a>

        <!-- STATS BELOW BUTTON -->
        <div class="hero-stats">
            <div>
                <h3>200+</h3>
                <p>International Brands</p>
            </div>
            <div>
                <h3>2000+</h3>
                <p>High-Quality Products</p>
            </div>
            <div>
                <h3>30000+</h3>
                <p>Happy Customers</p>
            </div>
        </div>
    </div>

    <div class="hero-image">
        <?php $hero = get_field('hero_image'); ?>
        <img src="<?php echo is_array($hero) ? $hero['url'] : $hero; ?>" alt="Hero Image">
    </div>
</section>

<!-- BRAND LOGOS -->
<section class="brands">
    <div class="brand-container">
        <?php 
        $logos = ['brand_logo_1','brand_logo_2','brand_logo_3','brand_logo_4','brand_logo_5'];

        foreach($logos as $logo_field){
            $logo = get_field($logo_field);
            if($logo){
                $url = is_array($logo) ? $logo['url'] : $logo;
                echo '<img src="'.$url.'" alt="brand">';
            }
        }
        ?>
    </div>
</section>

<!-- NEW ARRIVALS -->
<section class="products">
    <h2>NEW ARRIVALS</h2>

    <div class="product-grid">

        <!-- PRODUCT 1 -->
        <div class="card">
            <?php $img1 = get_field('product1_image'); ?>
            <img src="<?php echo is_array($img1) ? $img1['url'] : $img1; ?>" alt="">
            <p><?php the_field('product1_name'); ?></p>
            <strong><?php the_field('product1_price'); ?></strong>
        </div>

        <!-- PRODUCT 2 -->
        <div class="card">
            <?php $img2 = get_field('product2_image'); ?>
            <img src="<?php echo is_array($img2) ? $img2['url'] : $img2; ?>" alt="">
            <p><?php the_field('product2_name'); ?></p>
            <strong><?php the_field('product2_price'); ?></strong>
        </div>

        <!-- PRODUCT 3 -->
        <div class="card">
            <?php $img3 = get_field('product3_image'); ?>
            <img src="<?php echo is_array($img3) ? $img3['url'] : $img3; ?>" alt="">
            <p><?php the_field('product3_name'); ?></p>
            <strong><?php the_field('product3_price'); ?></strong>
        </div>

    </div>

    <button class="view-btn">View All</button>
</section>

<?php get_footer(); ?>