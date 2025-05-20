<?php get_header(); ?>
<!-- ------------------------------ CONTENT ------------------------------ -->
    <div class="header">
        <div class="header">
            <div class="inspiration_pd">
                <h1 class="inspiration-title">Tin tức Nhà Xinh</h1>
                <ul class="display-flex inspiration">

                    <!-- Lấy tin tức -->
                    <?php get_template_part('content/tintuc'); ?>

                </ul>
            </div>
            <div>
                <h1 class="title-tintuc"><?php single_cat_title(); ?></h1>
            </div>
        </div>
    </div>
</main>
<!-- ------------------------------ FOOTER ------------------------------ -->

<?php get_footer(); ?>