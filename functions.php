function enqueue_rive() {
    wp_enqueue_script(
        'rive-canvas',
        'https://unpkg.com/@rive-app/canvas@2.5.3',
        [],
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'enqueue_rive');
