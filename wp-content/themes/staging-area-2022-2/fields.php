<?php
			if( function_exists('acf_add_local_field_group') ):

                acf_add_local_field_group(array(
                    'key' => 'group_62ffd5726f210',
                    'title' => 'Gaveta',
                    'fields' => array(
                        array(
                            'key' => 'field_62ffd5ae463cb',
                            'label' => 'Curso',
                            'name' => 'curso',
                            'type' => 'checkbox',
                            'instructions' => '',
                            'required' => 1,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'choices' => array(
                                'sim: Sim' => 'sim: Sim',
                                'não: Não' => 'não: Não',
                            ),
                            'allow_custom' => 0,
                            'default_value' => array(
                            ),
                            'layout' => 'vertical',
                            'toggle' => 0,
                            'return_format' => 'value',
                            'save_custom' => 0,
                        ),
                        array(
                            'key' => 'field_62ffd69a463cc',
                            'label' => 'Tipologia',
                            'name' => 'tipologia',
                            'type' => 'checkbox',
                            'instructions' => '',
                            'required' => 1,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'choices' => array(
                                'css: CSS' => 'css: CSS',
                                'html: HTML' => 'html: HTML',
                                'js: JavaScript' => 'js: JavaScript',
                                'php: PHP' => 'php: PHP',
                            ),
                            'allow_custom' => 0,
                            'default_value' => array(
                            ),
                            'layout' => 'vertical',
                            'toggle' => 0,
                            'return_format' => 'value',
                            'save_custom' => 0,
                        ),
                        array(
                            'key' => 'field_62ffd6ce463ce',
                            'label' => 'Postagem',
                            'name' => 'postagem',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => 'Data de criação do Post',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                    ),
                    'location' => array(
                        array(
                            array(
                                'param' => 'post_type',
                                'operator' => '==',
                                'value' => 'post',
                            ),
                        ),
                    ),
                    'menu_order' => 0,
                    'position' => 'normal',
                    'style' => 'default',
                    'label_placement' => 'top',
                    'instruction_placement' => 'label',
                    'hide_on_screen' => '',
                    'active' => true,
                    'description' => '',
                    'show_in_rest' => 0,
                ));
                
                endif;
