<?php get_header(); ?>
    <section class="cpw-container">
        <div class="cpw-row">
            <div class="post not-found">
                <h1 class="cpw-title"><?php _e('404', 'cpw');?></h1>
                <div class="cpw-content">
                    <h3><?php _e('Page Not Found', 'cpw'); ?></h3>
                    <p><?php _e('The Page You Are Looking For Does Not Exists.')?></p>
                    <a href="<?php echo esc_url(home_url('/'))?>">Back to home</a>
                </div><!-- entry-content -->
            </div>
        </div>
    </section>
<?php get_footer(); ?>