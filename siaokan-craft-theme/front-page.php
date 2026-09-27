<?php
/**
 * Template Name: Front Page Template
 */

get_header();
?>

<main>
    <!-- Hero Section: Dark Luxury Editorial -->
    <section class="relative py-16 lg:py-24 px-6 max-w-7xl mx-auto reveal active">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <!-- Left Column -->
            <div class="lg:col-span-7 space-y-6">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-surface-dark border border-primary-glow/40 text-primary-glow text-xs font-semibold uppercase tracking-wider">
                    <span class="w-2 h-2 rounded-full bg-cyan-river animate-ping"></span>
                    <span>รับทำ Furniture Crafting ตามสั่ง · โรงงาน อ.เมือง จ.นครราชสีมา</span>
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight tracking-tight">
                    ศิลปะแห่งไม้และเรซิ่น<br />
                    <span class="resin-gradient-text">บริการทำ Furniture Crafting</span>
                </h1>

                <p class="text-lg text-muted-gray leading-relaxed font-light">
                    เราคือผู้ผลิตและออกแบบงานตามสั่งเป็นหลัก ทั้งงานไม้จริง ไม้อัดปิดผิว งานลอยตัว งานบิวท์อิน<br/>
                    <span class="text-soft-cream font-medium">"อะไรที่เจ้าอื่นทำเราก็ทำ และเราทำมากกว่าเจ้าอื่นแน่นอน โดยเฉพาะงานไม้ผสานเรซิ่นเราเป็นเจ้าหลักของประเทศแน่นอน"</span>
                </p>

                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <button onclick="openModal()" class="bg-primary-glow hover:bg-primary-hover text-black px-8 py-4 rounded-xl font-bold text-base transition-all shadow-xl flex items-center gap-2 hover:scale-105">
                        <span class="material-symbols-outlined text-xl">draw</span>
                        <span>ปรึกษาและออกแบบฟรี</span>
                    </button>
                    <a href="<?php echo esc_url(home_url('/services')); ?>" class="border border-border-dark hover:border-primary-glow text-soft-cream px-8 py-4 rounded-xl font-medium text-base transition-all flex items-center gap-2 bg-surface-dark">
                        <span>ดูหมวดหมู่งานคราฟต์</span>
                        <span class="material-symbols-outlined text-lg">arrow_forward</span>
                    </a>
                </div>

                <!-- Counter Stats Bar -->
                <div class="grid grid-cols-3 gap-6 pt-8 border-t border-border-dark">
                    <div>
                        <span class="text-3xl font-extrabold text-primary-glow block">No.1</span>
                        <span class="text-xs text-muted-gray">เจ้าหลักไม้เรซิ่นในไทย</span>
                    </div>
                    <div>
                        <span class="text-3xl font-extrabold text-soft-cream block">100%</span>
                        <span class="text-xs text-muted-gray">Bespoke Made to Order</span>
                    </div>
                    <div>
                        <span class="text-3xl font-extrabold text-cyan-river block">โคราช</span>
                        <span class="text-xs text-muted-gray">โรงงาน อ.เมือง นครราชสีมา</span>
                    </div>
                </div>
            </div>

            <!-- Right Feature Hero Media Card -->
            <div class="lg:col-span-5 relative">
                <div class="relative rounded-3xl overflow-hidden glow-border group aspect-[4/5] shadow-2xl">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/hero-resin.jpg" alt="Amber Glow Resin River Table" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" />
                    <div class="absolute inset-0 bg-gradient-to-t from-deep-dark via-deep-dark/30 to-transparent p-8 flex flex-col justify-end">
                        <span class="text-xs font-bold text-primary-glow uppercase tracking-widest mb-1">Highlight Masterpiece</span>
                        <h3 class="text-2xl font-bold text-soft-cream">Amber Glow River Table</h3>
                        <p class="text-sm text-muted-gray font-light mt-1">โต๊ะไม้ผสานเรซิ่นสีทองคริสตัล หล่อสูญญากาศไร้ฟองอากาศ</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Quote Statement Section -->
    <section class="py-16 px-6 max-w-7xl mx-auto reveal">
        <div class="bg-card-dark p-10 md:p-14 rounded-3xl glow-border relative overflow-hidden">
            <div class="absolute top-0 right-0 p-8 text-primary-glow/10 pointer-events-none">
                <span class="material-symbols-outlined text-9xl">format_quote</span>
            </div>
            <div class="max-w-4xl mx-auto text-center space-y-6 relative z-10">
                <span class="text-xs font-bold text-primary-glow uppercase tracking-widest">Our Factory Commitment</span>
                <h2 class="text-2xl md:text-4xl font-extrabold text-soft-cream leading-tight">
                    "อะไรที่เจ้าอื่นทำเราก็ทำ และเราทำมากกว่าเจ้าอื่นแน่นอน<br/>
                    <span class="text-primary-glow">โดยเฉพาะงานไม้ผสานเรซิ่นเราเป็นเจ้าหลักของประเทศแน่นอน"</span>
                </h2>
                <p class="text-sm md:text-base text-muted-gray font-light">
                    เสี่ยวกัน Craft Furniture Thailand — โรงงานผู้ผลิตและออกแบบตรง อ.เมือง จ.นครราชสีมา
                </p>
            </div>
        </div>
    </section>

    <!-- 5 Services Breakdown Section -->
    <section class="py-20 bg-surface-dark border-y border-border-dark reveal">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-14 gap-4">
                <div>
                    <span class="text-xs font-bold text-primary-glow uppercase tracking-widest block mb-2">Our Services Breakdown</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-soft-cream">5 หมวดหมู่บริการทำ Furniture Crafting</h2>
                </div>
                <a href="<?php echo esc_url(home_url('/services')); ?>" class="text-sm font-semibold text-primary-glow hover:underline flex items-center gap-1">
                    <span>ดูรายละเอียดบริการทั้งหมด</span>
                    <span class="material-symbols-outlined text-base">arrow_forward</span>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Service 1 -->
                <div class="bg-card-dark p-8 rounded-2xl border border-border-dark hover:border-primary-glow transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-xl bg-primary-glow/10 text-primary-glow flex items-center justify-center mb-6 group-hover:bg-primary-glow group-hover:text-black transition-colors">
                        <span class="material-symbols-outlined text-2xl">water_drop</span>
                    </div>
                    <span class="text-xs font-bold text-primary-glow uppercase tracking-wider block mb-1">Highlight · เจ้าหลักของประเทศ</span>
                    <h3 class="text-xl font-bold text-soft-cream mb-3">1. งานไม้ผสานเรซิ่น</h3>
                    <p class="text-sm text-muted-gray font-light leading-relaxed mb-6">
                        โต๊ะเรซิ่น River Table ชิ้นงานตกแต่งเรซิ่นใสคุณภาพสูง ไม่เหลือง ไม่แตกร้าว หล่อสูญญากาศไร้ฟองอากาศ
                    </p>
                    <button onclick="openModalWithService('งานไม้ผสานเรซิ่น')" class="text-sm font-semibold text-primary-glow group-hover:text-primary-hover flex items-center gap-1">
                        <span>ปรึกษาสั่งทำ</span>
                        <span class="material-symbols-outlined text-base">arrow_forward</span>
                    </button>
                </div>

                <!-- Service 2 -->
                <div class="bg-card-dark p-8 rounded-2xl border border-border-dark hover:border-primary-glow transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-xl bg-primary-glow/10 text-primary-glow flex items-center justify-center mb-6 group-hover:bg-primary-glow group-hover:text-black transition-colors">
                        <span class="material-symbols-outlined text-2xl">forest</span>
                    </div>
                    <span class="text-xs font-bold text-primary-glow uppercase tracking-wider block mb-1">Solid Wood Craft</span>
                    <h3 class="text-xl font-bold text-soft-cream mb-3">2. งานไม้จริงสั่งทำ</h3>
                    <p class="text-sm text-muted-gray font-light leading-relaxed mb-6">
                        ไม้จริงแผ่นเดียว (Live Edge) คัดสรรลายไม้ธรรมชาติ คัดไม้ประดู่ ไม้ชะลอม ไม้สัก ขัดเคลือบเงาพรีเมียม
                    </p>
                    <button onclick="openModalWithService('งานไม้จริงสั่งทำ')" class="text-sm font-semibold text-primary-glow group-hover:text-primary-hover flex items-center gap-1">
                        <span>ปรึกษาสั่งทำ</span>
                        <span class="material-symbols-outlined text-base">arrow_forward</span>
                    </button>
                </div>

                <!-- Service 3 -->
                <div class="bg-card-dark p-8 rounded-2xl border border-border-dark hover:border-primary-glow transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-xl bg-primary-glow/10 text-primary-glow flex items-center justify-center mb-6 group-hover:bg-primary-glow group-hover:text-black transition-colors">
                        <span class="material-symbols-outlined text-2xl">layers</span>
                    </div>
                    <span class="text-xs font-bold text-primary-glow uppercase tracking-wider block mb-1">Veneer Craft</span>
                    <h3 class="text-xl font-bold text-soft-cream mb-3">3. งานไม้อัดปิดผิว</h3>
                    <p class="text-sm text-muted-gray font-light leading-relaxed mb-6">
                        ปิดผิววีเนียร์เกรดส่งออก ตัดแต่งเนียนเรียบไร้รอยต่อ เหมาะกับดีไซน์โมเดิร์น Luxury Minimal
                    </p>
                    <button onclick="openModalWithService('งานไม้อัดปิดผิว')" class="text-sm font-semibold text-primary-glow group-hover:text-primary-hover flex items-center gap-1">
                        <span>ปรึกษาสั่งทำ</span>
                        <span class="material-symbols-outlined text-base">arrow_forward</span>
                    </button>
                </div>

                <!-- Service 4 -->
                <div class="bg-card-dark p-8 rounded-2xl border border-border-dark hover:border-primary-glow transition-all duration-300 group">
                    <div class="w-12 h-12 rounded-xl bg-primary-glow/10 text-primary-glow flex items-center justify-center mb-6 group-hover:bg-primary-glow group-hover:text-black transition-colors">
                        <span class="material-symbols-outlined text-2xl">chair</span>
                    </div>
                    <span class="text-xs font-bold text-primary-glow uppercase tracking-wider block mb-1">Freestanding</span>
                    <h3 class="text-xl font-bold text-soft-cream mb-3">4. งานเฟอร์นิเจอร์ลอยตัว</h3>
                    <p class="text-sm text-muted-gray font-light leading-relaxed mb-6">
                        โต๊ะทานข้าว โต๊ะทำงาน คอนโซลทีวี และเคาน์เตอร์บาร์ ปรับขนาด ลายไม้ และสเปกตามใจ
                    </p>
                    <button onclick="openModalWithService('งานเฟอร์นิเจอร์ลอยตัว')" class="text-sm font-semibold text-primary-glow group-hover:text-primary-hover flex items-center gap-1">
                        <span>ปรึกษาสั่งทำ</span>
                        <span class="material-symbols-outlined text-base">arrow_forward</span>
                    </button>
                </div>

                <!-- Service 5 -->
                <div class="bg-card-dark p-8 rounded-2xl border border-border-dark hover:border-primary-glow transition-all duration-300 group lg:col-span-2">
                    <div class="w-12 h-12 rounded-xl bg-cyan-river/20 text-cyan-river flex items-center justify-center mb-6 group-hover:bg-cyan-river group-hover:text-black transition-colors">
                        <span class="material-symbols-outlined text-2xl">other_houses</span>
                    </div>
                    <span class="text-xs font-bold text-cyan-river uppercase tracking-wider block mb-1">Architectural Built-in</span>
                    <h3 class="text-xl font-bold text-soft-cream mb-3">5. งานตกแต่งบิวท์อินสั่งทำหน้างาน</h3>
                    <p class="text-sm text-muted-gray font-light leading-relaxed mb-6">
                        ทีมช่างเข้าวัดพื้นที่หน้างาน วาดแบบ 3D Render ผลิตตู้บิวท์อิน ผนังตกแต่ง ฟิตเข้ามุมไร้ช่องว่าง
                    </p>
                    <button onclick="openModalWithService('งานบิวท์อินสั่งทำหน้างาน')" class="text-sm font-semibold text-cyan-river group-hover:text-primary-glow flex items-center gap-1">
                        <span>จองคิววัดหน้างานฟรี</span>
                        <span class="material-symbols-outlined text-base">arrow_forward</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Dynamic Masterpiece Query Section from Custom Post Type -->
    <section class="py-20 px-6 max-w-7xl mx-auto reveal">
        <div class="flex flex-col md:flex-row items-start md:items-end justify-between mb-12 gap-4">
            <div>
                <span class="text-xs font-bold text-primary-glow uppercase tracking-widest block mb-2">Masterpiece Gallery</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-soft-cream">ผลงาน Furniture Crafting เด่น</h2>
            </div>
            <a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="text-sm font-semibold text-primary-glow hover:underline flex items-center gap-1">
                <span>ดูแกลเลอรีผลงานทั้งหมด</span>
                <span class="material-symbols-outlined text-base">arrow_forward</span>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php
            $masterpiece_query = new WP_Query(array(
                'post_type'      => 'masterpiece',
                'posts_per_page' => 3,
            ));

            if ($masterpiece_query->have_posts()) :
                while ($masterpiece_query->have_posts()) : $masterpiece_query->the_post();
                    ?>
                    <div class="rounded-2xl overflow-hidden bg-card-dark border border-border-dark hover:border-primary-glow transition-all duration-300 group">
                        <div class="h-64 overflow-hidden relative">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500')); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/hero-resin.jpg" alt="<?php the_title(); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                            <?php endif; ?>
                        </div>
                        <div class="p-6">
                            <h3 class="font-bold text-lg text-soft-cream"><?php the_title(); ?></h3>
                            <p class="text-xs text-muted-gray mt-1"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                // Default Static Showcase Fallback
                ?>
                <div class="rounded-2xl overflow-hidden bg-card-dark border border-border-dark hover:border-primary-glow transition-all duration-300 group">
                    <div class="h-64 overflow-hidden relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/hero-resin.jpg" alt="Amber Glow River Table" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-lg text-soft-cream">Amber Glow River Table</h3>
                        <p class="text-xs text-muted-gray mt-1">โต๊ะไม้ผสานเรซิ่นเรืองแสงสีอำพัน (ส่งมอบลูกค้าคฤหาสน์ จ.โคราช)</p>
                    </div>
                </div>

                <div class="rounded-2xl overflow-hidden bg-card-dark border border-border-dark hover:border-primary-glow transition-all duration-300 group">
                    <div class="h-64 overflow-hidden relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/cyan-river.jpg" alt="Deep Turquoise Ocean Table" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-lg text-soft-cream">Deep Turquoise Ocean Table</h3>
                        <p class="text-xs text-muted-gray mt-1">โต๊ะไม้แผ่นเดียวผสานเรซิ่นใสฟ้าคราม 10 ที่นั่ง</p>
                    </div>
                </div>

                <div class="rounded-2xl overflow-hidden bg-card-dark border border-border-dark hover:border-primary-glow transition-all duration-300 group">
                    <div class="h-64 overflow-hidden relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/workshop.jpg" alt="Bespoke Solid Wood Dining" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-lg text-soft-cream">Bespoke Solid Wood Dining</h3>
                        <p class="text-xs text-muted-gray mt-1">งานขัดมือทรงคุณค่า เคลือบผิวใสระดับกระจก 100 Gloss Unit</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer();
