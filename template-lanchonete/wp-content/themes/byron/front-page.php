<!--
 * Arquivo template da página inicial do site, ele é executado quando altera as configurações de leitura
 * ao selecionar para exibir uma página estática.
 *
-->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php get_header(); ?>
    <section id="cardapio">
        <div class="container cardapio">
        <h2 class="center-text">Cardápio</h2>
        <?php
            $args_cat = array(
                'orderby' => 'none',
                'order' => 'ASC',
                'hide_empty' => 0,
            );
            
            $categories = get_categories($args_cat);

            if (!empty($categories)):
                
                foreach ($categories as $category):
                    $args = array(
                        'post_type' => 'produtos',
                        'posts_per_page' => -1,
                        'cat' => $category->term_id
                    );
                    $query = new WP_Query($args);?>
                    <?php if ($query->have_posts()) :?>
                        <a class="toggle" data-id="<?php echo $category->term_id ?>"><h3><?php echo $category->name ?><i class="toggle-icon fas fa-angle-up rotate" data-id="<?php echo $category->term_id ?>"></i></h3></a>
                        <div class="produtos" id="<?php echo $category->term_id ?>">
                            <div class="container-grid">
                                <?php while ($query->have_posts()) : $query->the_post();?>
                                <div class="columns1-3 cardapio-conteudo">
                                    <?php the_post_thumbnail('produto') ?>
                                    <h4><?php the_title(); ?> <span>R$<?php the_field('preco'); ?></span></h4>
                                    <?php the_content(); ?>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <?php wp_reset_postdata(); // reset the query ?>
                    <?php endif;?>
                <?php endforeach; ?>
                
            <?php endif;?>
            </div>
        </div>
    
    </section>

<?php get_footer(); ?>

<?php endwhile; endif; ?>