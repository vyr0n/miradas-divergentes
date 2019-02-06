        <aside class="Sidebar">
            <h2>Sidebar</h2>
            <?php
                if(is_active_sidebar( 'main_sidebar' )):
                    dynamic_sidebar('main_sidebar');
                else:
            ?>
                <article class="Widget">
                    <h3><?php _e('Buscar', 'mdwt');?></h3>
                    <?php get_search_form();?>
                </article>
            <?php endif;?>
        </aside>