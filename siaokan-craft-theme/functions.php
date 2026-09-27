<?php
/**
 * Siaokan Craft Furniture Theme Functions & Setup
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function siaokan_craft_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    // Register Navigation Menus
    register_nav_menus(array(
        'primary' => __('Primary Header Menu', 'siaokan-craft'),
        'footer'  => __('Footer Menu', 'siaokan-craft'),
    ));

    // HTML5 Markup support
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'siaokan_craft_setup');

/**
 * Enqueue scripts and styles.
 */
function siaokan_craft_scripts() {
    // Tailwind CSS CDN
    wp_enqueue_script('tailwind-css', 'https://cdn.tailwindcss.com?plugins=forms,container-queries', array(), null, false);

    // Google Fonts: Prompt & Plus Jakarta Sans & Noto Serif Thai
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Prompt:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&family=Noto+Serif+Thai:wght@400;500;600;700&display=swap', array(), null);

    // Material Symbols
    wp_enqueue_style('material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap', array(), null);

    // Main Theme Stylesheet
    wp_enqueue_style('siaokan-craft-style', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'siaokan_craft_scripts');

/**
 * Register Custom Post Type: Masterpiece (ผลงานเฟอร์นิเจอร์)
 */
function siaokan_register_masterpiece_cpt() {
    $labels = array(
        'name'               => 'ผลงาน Masterpiece',
        'singular_name'      => 'ผลงาน Masterpiece',
        'menu_name'          => 'ผลงาน Masterpiece',
        'add_new'            => 'เพิ่มผลงานใหม่',
        'add_new_item'       => 'เพิ่มผลงาน Masterpiece ใหม่',
        'edit_item'          => 'แก้ไขผลงาน',
        'new_item'           => 'ผลงานใหม่',
        'view_item'          => 'ดูผลงาน',
        'search_items'       => 'ค้นหาผลงาน',
        'not_found'          => 'ไม่พบผลงาน',
        'not_found_in_trash' => 'ไม่พบผลงานในถังขยะ',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => array('slug' => 'masterpiece'),
        'capability_type'     => 'post',
        'menu_icon'           => 'dashicons-format-gallery',
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'taxonomies'          => array('category'),
    );

    register_post_type('masterpiece', $args);
}
add_action('init', 'siaokan_register_masterpiece_cpt');

/**
 * Configure Tailwind Inline Config in Head
 */
function siaokan_tailwind_config_head() {
    ?>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "deep-dark": "#0F0C0A",
                        "surface-dark": "#1A1512",
                        "card-dark": "#241D18",
                        "primary-glow": "#D48B38",
                        "primary-hover": "#E8A04D",
                        "cyan-river": "#2A9D8F",
                        "soft-cream": "#F4EFEA",
                        "muted-gray": "#A39386",
                        "border-dark": "#382D26"
                    },
                    fontFamily: {
                        "sans": ["Prompt", "Plus Jakarta Sans", "sans-serif"],
                        "display": ["Plus Jakarta Sans", "Prompt", "sans-serif"],
                        "serif-th": ["Noto Serif Thai", "serif"]
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #0F0C0A;
            color: #F4EFEA;
            font-family: 'Prompt', sans-serif;
        }

        .dark-glass {
            background: rgba(26, 21, 18, 0.88);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(212, 139, 56, 0.2);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.5);
        }

        .glow-border {
            border: 1px solid rgba(212, 139, 56, 0.35);
            box-shadow: 0 0 30px rgba(212, 139, 56, 0.12);
        }

        .resin-gradient-text {
            background: linear-gradient(135deg, #F4EFEA 0%, #D48B38 50%, #2A9D8F 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .reveal {
            opacity: 0;
            transform: translateY(28px);
            transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
    <?php
}
add_action('wp_head', 'siaokan_tailwind_config_head', 1);
