<!DOCTYPE html>
<html <?php language_attributes(); ?> class="dark scroll-smooth">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>

<body <?php body_class('antialiased selection:bg-primary-glow selection:text-black'); ?>>

    <!-- Header Navigation -->
    <header class="sticky top-0 z-50 w-full dark-glass">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-primary-glow text-black font-extrabold flex items-center justify-center shadow-lg group-hover:scale-105 transition-transform">
                    <span class="material-symbols-outlined text-2xl">carpenter</span>
                </div>
                <div>
                    <span class="font-bold text-xl tracking-tight text-soft-cream block leading-none"><?php bloginfo('name'); ?></span>
                    <span class="text-[10px] tracking-widest text-primary-glow uppercase font-semibold">Furniture Crafting Thailand</span>
                </div>
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden md:flex items-center space-x-8 text-sm font-medium">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="text-soft-cream hover:text-primary-glow transition-colors py-1">หน้าแรก</a>
                <a href="<?php echo esc_url(home_url('/services')); ?>" class="text-muted-gray hover:text-primary-glow transition-colors py-1">บริการงานคราฟต์</a>
                <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="text-muted-gray hover:text-primary-glow transition-colors py-1">ผลงาน Masterpiece</a>
                <a href="<?php echo esc_url(home_url('/about')); ?>" class="text-muted-gray hover:text-primary-glow transition-colors py-1">เกี่ยวกับโรงงาน</a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="text-muted-gray hover:text-primary-glow transition-colors py-1">ติดต่อเรา</a>
            </nav>

            <div class="hidden md:flex items-center gap-4">
                <button onclick="openModal()" class="bg-primary-glow hover:bg-primary-hover text-black px-6 py-2.5 rounded-xl font-bold text-sm transition-all shadow-lg flex items-center gap-2 transform hover:-translate-y-0.5">
                    <span class="material-symbols-outlined text-lg">edit_note</span>
                    <span>ส่งโจทย์ปรึกษาฟรี</span>
                </button>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <button onclick="toggleMobileMenu()" class="md:hidden text-soft-cream focus:outline-none p-2">
                <span class="material-symbols-outlined text-3xl">menu</span>
            </button>
        </div>

        <!-- Mobile Nav Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-card-dark border-b border-border-dark px-6 py-4 space-y-3">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="block text-soft-cream hover:text-primary-glow text-base py-1">หน้าแรก</a>
            <a href="<?php echo esc_url(home_url('/services')); ?>" class="block text-muted-gray hover:text-primary-glow text-base py-1">บริการงานคราฟต์</a>
            <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="block text-muted-gray hover:text-primary-glow text-base py-1">ผลงาน Masterpiece</a>
            <a href="<?php echo esc_url(home_url('/about')); ?>" class="block text-muted-gray hover:text-primary-glow text-base py-1">เกี่ยวกับโรงงาน</a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="block text-muted-gray hover:text-primary-glow text-base py-1">ติดต่อเรา</a>
            <button onclick="openModal(); toggleMobileMenu();" class="w-full mt-2 bg-primary-glow text-black py-3 rounded-xl font-bold text-sm flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-lg">edit_note</span>
                <span>ส่งโจทย์ปรึกษาฟรี</span>
            </button>
        </div>
    </header>
