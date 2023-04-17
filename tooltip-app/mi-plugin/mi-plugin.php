<?php
function mi_shortcode() {
    $html = file_get_contents('https://raw.githubusercontent.com/FrandyEM/frandyem.github.io/main/index.html'); // Ruta a tu archivo HTML en GitHub
    return $html;
}
add_shortcode( 'mi_shortcode', 'mi_shortcode' ); // Registra el shortcode
?>
