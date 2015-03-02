<?php
/* THEME OPTIONS */
require_once get_stylesheet_directory() . '/inc/class-theme-options.php';
$odin_theme_options = new Odin_Theme_Options( 
    'odin-options', // Slug/ID da página (Obrigatório)
    'Opções do tema', // Titulo da página (Obrigatório)
    'manage_options' // Nível de permissão (Opcional) [padrão é manage_options]
);
$odin_theme_options->set_tabs(
    array(
        array(
            'id' => 'home_cfg', // ID da aba e nome da entrada no banco de dados.
            'title' => 'Configurações', // Título da aba.
        ),
    )
);
$odin_theme_options->set_fields(
    array(
        'home_section' => array(
            'tab'   => 'home_cfg', // Sessão da aba odin_general
            'title' => 'Configurações da página inicial',
            'fields' => array(
                array(
                    'id' => 'home_random',
                    'label' => 'Selecione as imagens aleatórias da página inicial',
                    'type' => 'image_plupload',
                    //'description' => __( 'Descrition Example', 'odin' )
                ),
            )
        ),
    )
);