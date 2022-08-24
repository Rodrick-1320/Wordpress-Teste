<?php get_header(); ?>
<!--ANT RDK:  Puxa o cabeçalho do arquivo header -->

<div class="container py-4" style="min-height:50vh">
    <?php the_title('<h1 class="title-page">', '</h1>') ?>
    <!-- ANT RDK: Define o titulo do post como um h1 // o titulo vai ficar entre a abertura de um h1 e o fechamneto dessa mesma tag-->
    <div class="col-lg-12" style="background-color: lightcyan">
        <div class="container py-4">

            <?php the_content(); ?>
            <!-- Imprime o conteudo do post na pagina singular dele -->

            <?= get_the_date('Y/m/d'); ?>
        </div>

        <hr class="my-5">

        <div class="coment">
            <?php comment_form() ?>
        </div>

        <div class="coments">
            <ol class="comment-list">
                <?php
                $comments = get_comments(array(
                    'post_id' => $post->ID,
                    'number' => ''
                ));
                foreach ($comments as $comment) {
                    echo '<li>' . $comment->comment_content .  '</li>';
                }
                ?>
            </ol>
        </div>
    </div>
</div>

<?php get_footer(); ?>
<!-- Puxa o rodapé da pagina -->

<?php the_terms($post->ID, 'topics', 'Topics: ', ', ', ' '); ?>