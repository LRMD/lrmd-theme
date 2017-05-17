<?php get_header(); ?>
               <div class="wrapper">
                  <div class="sidebar" id="main-sidebar">
              <?php 


		wp_nav_menu( array( 
			'menu' => 'nav', 
			'depth' => 1, 
			'items_wrap' => '<ul class="nav">%3$s</ul>',
			'container' => ''  ) 
		); 

echo '<ul id="menu-navi" class="navi">';
wp_nav_menu( array( 
			'menu' => 'navi', 
			'depth' => 1, 
			'items_wrap' => '%3$s',
			'container' => ''  ) 
		); 
echo '</ul>';
			?>
			
                  </div>
                  <div class="mainContent">
                     <div class="box">
                        <div class="left-top-corner">
                           <div class="right-top-corner">
                              <div class="border-top"></div>
                           </div>
                        </div>
                        <div class="left-shad">
                           <div class="right-shad">
                              <div class="inside">
<?php if ( $wp_query->post_count > 1 ): ?>

                              	<p>Pašto adresas: p.d.1000, pšt. 1, LT-01014, Vilnius<br/>
                              	Patalpų adresas: Gelvonų g. 33, Vilnius<br/>
                              	Telefonas: +370 6575 7373<br/>
                              	El.paštas: <script>pastas('&#104;&#113;')</script></p>
<?php endif; ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h2><?php the_title(); ?></h2>
<?php the_content(__('(more...)')); ?>
<!-- p><i><?php the_time('Y-m-d') ?> parašė <?php echo get_the_author(); ?></i></p -->

<?php endwhile; else: ?>

<p><?php _e('Atleiskite, įrašų nerasta.'); ?></p>

<?php endif; ?>
           
                               <div class="clear"></div>
                              </div>
                           </div>
                        </div>
                        <div class="left-bot-corner">
                           <div class="right-bot-corner">
                              <div class="border-bot"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  
               </div>
        
<?php get_footer(); ?>
