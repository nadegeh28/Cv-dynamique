<?php 

function create_custom_posts() {

    register_post_type('competences', [
        'labels' => [
            'name' => ('Compétences'),
        'singular_name' => ('Compétences')
        ],
        'public' => true,
        'has_archive'=> true,
        'show_in_rest' => true,
        'rewrite'=> ['slug'=> 'competences'],
    ]);

    register_post_type('langues', [
        'labels' => [
            'name' => 'Langues',
            'singular_name'=> ('Langues')
        
        ],
        'public' => true,
        'show_in_rest' => true,
        'has_archive'=> true,
        'rewrite'=> ['slug'=> 'langues'],
    ]);

    register_post_type('centre_d_interet', [
        'labels' => [
            'name' => ('Centre d\'interêt'),
            'singular_name' => ('Centre d\'interêt')
        ],
        'public' => true,
        'show_in_rest' => true,
        'has_archive'=> true,
        'rewrite'=> ['slug'=> 'centre_d_interet'],
    ]);

    register_post_type('exp_pro', [
        'labels' => [
            'name' => 'Expérences Professionnelles',
            'singular_name'=> ('Expériences Professionnelles')
        
        ],
        'public' => true,
        'show_in_rest' => true,
        'has_archive'=> true,
        'rewrite'=> [ 'slug' => 'exp_pro'],
        ]);

}

add_action('init', 'create_custom_posts');

function add_your_fields_meta_box() {
    add_meta_box(
        'your_fields_meta_box_',
        'Vendeuse',
        'show_your_fields_meta_box',
        'exp_pro',
        'normal',
        'high'

    );
}
add_action('add_meta_boxes', 'add_kiabi_meta_box');

function show_your_fields_meta_box( $post) {
    $start_date = get_post_meta($post->Kiabi, 'Juin_2021', true);
    $end_date = get_post_meta($post->Kiabi, 'Juin_2022', true); 

    echo '<label for="start_date">Juin 2021:</label>';
    echo '<input type="date" id="start_date" name="start_date" value="'.esc_attr($start_date).'"><br><br>';
    
    echo'<label for="end_date>Juin 2022:</label>';
    echo '<input type="date" id="end_date" name="end_date value="'.esc_attr($end_date).'"><br><br>';
}

function save_your_fields_meta( $post_id ) {
    if (array_key_exists('Juin_2021', $_POST) ) {
        update_post_meta( 
            $post_id, 
            'Juin_2021',
            $_POST['Juin_2021']
            );
} 
if (array_key_exists('Juin_2022', $_POST) ) {
    update_post_meta(
        $post_id,
        'Juin_2022',
        $_POST['Juin_2022']
    );
}

}

add_action('save_post', 'save_your_fileds_meta');
