<?php get_header(); ?>

<div class="container py-4" style="min-height:50vh">
    <h2>Posts</h2>
    <div class="row">
        <div class="col-lg-12" style="background-color: lightcyan">
            <div class="row">
                <!-- Começa o Loop. -->
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <!-- ANT RDK: Se houver post e em quanto houver faça.... -->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
                                    <p class="card-text"><?php the_excerpt(); ?></p>

                                    <div class="img"> <?php the_post_thumbnail('post-image', ['class' => 'w-100']); ?> </div>

                                    <a href="#" class="card-link"> Continue Lendo</a>
                                    <a href="#" class="card-link"></a>

                                </div>
                            </div>
                            <hr class="my-5">
                        </div>

                        <!-- Termina o Loop (mas repare no "else" - veja próxima linha) -->
                    <?php endwhile; ?>

            </div> <?php else : ?>

            <!-- O primeiro IF testou para ver se havia posts a serem mostrados -->
            <!-- Este ELSE diz ao WordPress o que fazer se não houver nenhum -->
            <p>Sorry, no posts matched your criteria.</p>

            <!-- Término verdadeiro do Loop -->
        <?php endif; ?>
        </div>
    </div>
    
        <?php
            $args = array( 
                'posts_per_page' => 3, 
                'post_type' => 'course', 
                'post_status' => 'publish' 
            );

            $my_custom_query = new WP_Query( $args );
        ?>

    <section class="container">
        <h2>Cursos</h2>

        <div class="row">
            <div class="col-lg-12" style="background-color: lightcyan">
                <div class="row">
                    
                    <?php if($my_custom_query->have_posts()): while($my_custom_query->have_posts()): $my_custom_query->the_post()?>

                    <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
                                    <p class="card-text"><?php the_excerpt(); ?></p>

                                    <div class="img"> <?php the_post_thumbnail(null, ['class' => 'w-100']); ?> </div>

                                    <a href="#" class="card-link"> Continue Lendo </a>
                                    <a href="#" class="card-link"></a>

                                </div>
                            </div>
                            <hr class="my-5">
                        </div>

                    <?php endwhile; endif; ?>

                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>