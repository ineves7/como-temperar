<?php
get_header();

if (have_posts()) : while (have_posts()) : the_post();
?>
    <div class="pagina-tempero">
        <h1 class="titulo-tempero"><?php the_title(); ?></h1>

        <?php if (has_post_thumbnail()) : ?>
        <div class="tempero-thumb">
            <?php the_post_thumbnail('large'); ?>
        </div>
    <?php endif; ?>


        <div class="section-tempero">
            <div class="conteudo-tempero">
                <?php echo the_content(); ?>
            </div>
        <?php 

        // Exibir Benefícios
        $beneficios = get_post_meta(get_the_ID(), 'beneficios_tempero', true);
        if ($beneficios) {
            echo '<p><strong>Benefícios:</strong> ' . esc_html($beneficios) . '</p>';
        }

        // Exibir Origem, Sabores, Aromas e Categorias (Taxonomias)
        $origem = get_the_term_list(get_the_ID(), 'origem_tempero', '', ', ');
        $categoria = get_the_term_list(get_the_ID(), 'categoria_tempero', '', ', ');
        $sabores = get_the_term_list(get_the_ID(), 'sabores_tempero', '', ', ');
        $aromas = get_the_term_list(get_the_ID(), 'aromas_tempero', '', ', ');

        if ($origem) {
            echo '<p><strong>Origem:</strong> ' . $origem . '</p>';
        }
        if ($categoria) {
            echo '<p><strong>Categoria:</strong> ' . $categoria . '</p>';
        }
        if ($sabores) {
            echo '<p><strong>Sabores:</strong> ' . $sabores . '</p>';
        }
        if ($aromas) {
            echo '<p><strong>Aromas:</strong> ' . $aromas . '</p>';
        }

        // Exibir Imagens Adicionais
        $imagem_1 = get_post_meta(get_the_ID(), 'imagem_1_tempero', true);
        $imagem_2 = get_post_meta(get_the_ID(), 'imagem_2_tempero', true);

        if ($imagem_1) {
            echo '<div class="tempero-imagem"><img src="' . esc_url($imagem_1) . '" alt="Imagem 1"></div>';
        }
        if ($imagem_2) {
            echo '<div class="tempero-imagem"><img src="' . esc_url($imagem_2) . '" alt="Imagem 2"></div>';
        }
        ?>
    </div>

<?php
endwhile;
endif;

get_footer();
