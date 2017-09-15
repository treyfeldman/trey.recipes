<html>

<body>

<?php get_header(); ?>

<div class="page-wrapper">

    <div class="bg-container">
        <img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>"  class="full-bg"/>

        <h1><?php echo get_bloginfo( 'name' ); ?></h1>
        <h2 class="food-button">< food</h2>
        <h2 class="drinks-button">drink ></h2>

    </div>

    <div class="food-nav">

    </div>


    <div class="drinks-nav">

    </div>

    </div>

</div>

<?php wp_footer(); ?>
</body>

</html>