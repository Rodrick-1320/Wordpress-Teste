<?php get_header(); ?>
<!--ANT RDK:  Puxa o cabeçalho do arquivo header -->

<div class="container py-4">
    <?php the_title('<h1 class="title-page">', '</h1>') ?>
    <!-- ANT RDK: Define o titulo do post como um h1 // o titulo vai ficar entre a abertura de um h1 e o fechamneto dessa mesma tag-->
    <?php the_content(); ?>
    <!-- Imprime o conteudo do post na pagina singular dele -->


    <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
</div>

<?php get_footer(); ?>
<!-- Puxa o rodapé da pagina -->
<?php

function custom_meta_box_markup()
{
  
}

function add_custom_meta_box()
{
    add_meta_box("demo-meta-box", "Custom Meta Box", "custom_meta_box_markup", "post", "side", "high", null);
}

add_action("add_meta_boxes", "add_custom_meta_box");

