<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
            <svg class="logo-icon" width="32" height="32" viewBox="0 0 32 32" fill="none">
                <rect width="32" height="32" rx="4" fill="#2E7D32"/>
                <path d="M8 22L16 8L24 22H8Z" fill="white" opacity="0.9"/>
                <path d="M12 22L16 14L20 22H12Z" fill="#2E7D32"/>
            </svg>
            <span class="logo-text">AD Cont</span>
            <span class="logo-tagline">Estrategia Contable y Tributaria</span>
        </a>
        <button class="menu-toggle" aria-label="Abrir menú">
            <span></span><span></span><span></span>
        </button>
        <nav class="main-nav">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav-list',
                'fallback_cb'    => 'mi_plantilla_fallback_menu',
            ]);
            ?>
        </nav>
    </div>
</header>

<?php
function mi_plantilla_fallback_menu() {
    echo '<ul class="nav-list">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">Inicio</a></li>';
    echo '<li><a href="#sobre-nosotros">Sobre Nosotros</a></li>';
    echo '<li><a href="#servicios">Servicios</a></li>';
    echo '<li><a href="#mision">Misión</a></li>';
    echo '<li><a href="#contacto">Contacto</a></li>';
    echo '</ul>';
}
?>
