<?php 
$quality_pro_options=quality_theme_data_setup(); 
$current_options = wp_parse_args(  get_option( 'quality_pro_options', array() ), $quality_pro_options );
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>	
	<?php if(has_post_thumbnail()): ?>
		<figure class="post-thumbnail">
		<?php $defalt_arg =array('class' => "img-responsive"); 
                
                if(!is_singular()){ ?>
                    <a  href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('', $defalt_arg); ?>
                                </a>
                        <?php
                                
                 }else{ 
                    the_post_thumbnail('', $defalt_arg); 
                   } ?>
		</figure>
	<?php endif; ?>
		<div class="post-content">
			<?php if($current_options['home_meta_section_settings'] == '' ) {?>		
			<div class="item-meta">
				<a class="author-image item-image" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ));?>"><?php echo get_avatar( get_the_author_meta('user_email'), $size = '40'); ?></a>
				<?php echo ' ';?><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ));?>"><?php echo esc_html( get_the_author());?></a>
				<br>
				<a class="entry-date" href="<?php echo esc_url( get_month_link(get_post_time('Y'),get_post_time('m'))); ?>">
				<?php echo esc_html( get_the_date() ); ?></a>
			</div>	
			<?php } ?>
			<?php if (!is_single() ) {?>
			<header class="entry-header">
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			</header>	
			<?php } ?>
			<div class="entry-content">
				<?php the_content(__('Read More','quality')); ?>
			</div>
			<?php if($current_options['home_meta_section_settings'] == '' ) {?>		
			<hr />
			<div class="entry-meta">
				<span class="comment-links"><?php comments_popup_link( esc_html__('Leave a comment', 'quality' ) ); ?></span>
				<?php $cat_list = get_the_category_list();
				if(!empty($cat_list)) { ?>
				<span class="cat-links"><?php esc_html_e('In','quality');?><?php the_category(' '); ?></span>
				<?php } ?>
				
			</div>
			<?php } ?>
		</div>
</article>			