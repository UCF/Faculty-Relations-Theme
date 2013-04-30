<?php get_header();?>
	<?php $options = get_option(THEME_OPTIONS_NAME);?>
	<?php $page    = get_page_by_title('Home');?>

    <?php $description = $options['site_description'];?>
    <?php if($description):?>
        <div id="home-description" class="wide">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <?=$description; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif;?>

    <div class="container">
        <div class="page-content" id="home" data-template="home-description">
            <div class="row">
                <div class="site-image span8">
                    <?php $image = wp_get_attachment_image($options['site_image'], 'homepage')?>
                    <?php if($image):?>
                        <?=$image?>
                    <?php else:?>
                        <img width="770" src="<?=THEME_IMG_URL?>/default-site-image-540.jpg">
                    <?php endif;?>
                </div>

                <div class="right-column span4 last">
                    <?php $description = $options['site_description'];?>
                    <?php if($description):?>
                    <div class="description">
                        <p><?=$description?></p>
                    </div>
                    <?php endif;?>

                    <div class="search">
                        <?php get_search_form();?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="bottom span12">
                    <?php $content = str_replace(']]>', ']]&gt;', apply_filters('the_content', $page->post_content));?>
                    <?php if($content):?>
                    <?=$content?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
    <div id="events-header" class="wide">
        <div class="container">
            <div class="row">
                <div class="span12">Events & Deadlines</div>
            </div>
        </div>
    </div>
<?php get_footer();?>