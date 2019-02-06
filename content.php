        <article class="Content">
            <h1>Miradas Divergentes</h1>
            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                <article>
                    <h2>
                        <a href="<?php the_permalink();?>"><?php the_title();?></a>
                    </h2>
                    <?php the_excerpt();?>
                    <?php the_post_thumbnail();?>
                    <?php the_category();?>
                    <p>
                        <?php the_time(get_option('date_format'));?>
                    </p>
                </article>
                <?php //comments_template();?>
                <hr>
            <?php endwhile; else: ?>
                <p>Contenido solicitado no existe.</p>
            <?php  endif; ?>
        </article>
        <section class="Pagination">
            <?php echo paginate_links();?>
            <?php previous_post_link(); ?>
            <?php next_post_link(); ?>
        </section>