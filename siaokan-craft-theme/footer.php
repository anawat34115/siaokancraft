    <!-- Modal Form -->
    <div id="inquire-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/80 backdrop-blur-md p-4">
        <div class="bg-card-dark rounded-2xl max-w-lg w-full p-8 shadow-2xl relative border border-primary-glow/40">
            <button onclick="closeModal()" class="absolute top-4 right-4 text-muted-gray hover:text-white">
                <span class="material-symbols-outlined text-xl">close</span>
            </button>
            <h3 class="text-xl font-bold text-soft-cream mb-1">ส่งโจทย์ทำ Furniture Crafting</h3>
            <p class="text-xs text-muted-gray mb-6">เสี่ยวกัน Craft Furniture Thailand (อ.เมือง จ.นครราชสีมา)</p>
            <form onsubmit="event.preventDefault(); closeModal(); alert('ส่งข้อมูลประเมินราคาเรียบร้อยแล้ว! ทีมงานจะติดต่อกลับภายใน 24 ชม.');" class="space-y-4">
                <div>
                    <label class="block text-xs text-muted-gray mb-1">ชื่อของคุณ</label>
                    <input type="text" required placeholder="เช่น คุณสมชาย" class="w-full px-4 py-3 rounded-xl bg-surface-dark border border-border-dark text-soft-cream text-sm focus:border-primary-glow focus:outline-none" />
                </div>
                <div>
                    <label class="block text-xs text-muted-gray mb-1">เบอร์โทรศัพท์ / LINE ID</label>
                    <input type="text" required placeholder="08X-XXX-XXXX หรือ LINE ID" class="w-full px-4 py-3 rounded-xl bg-surface-dark border border-border-dark text-soft-cream text-sm focus:border-primary-glow focus:outline-none" />
                </div>
                <div>
                    <label class="block text-xs text-muted-gray mb-1">ประเภทบริการที่สนใจ</label>
                    <select id="modal-service-select" class="w-full px-4 py-3 rounded-xl bg-surface-dark border border-border-dark text-soft-cream text-sm focus:border-primary-glow focus:outline-none">
                        <option value="งานไม้ผสานเรซิ่น">1. งานไม้ผสานเรซิ่น (เจ้าหลักของประเทศ)</option>
                        <option value="งานไม้จริงสั่งทำ">2. งานไม้จริงสั่งทำ (Live Edge / Solid Wood)</option>
                        <option value="งานไม้อัดปิดผิว">3. งานไม้อัดปิดผิว (Veneer Craft)</option>
                        <option value="งานเฟอร์นิเจอร์ลอยตัว">4. งานเฟอร์นิเจอร์ลอยตัว</option>
                        <option value="งานบิวท์อินสั่งทำหน้างาน">5. งานตกแต่งบิวท์อินสั่งทำ</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs text-muted-gray mb-1">รายละเอียดแบบ / ขนาดที่ต้องการ (ถ้ามี)</label>
                    <textarea id="modal-notes" rows="3" placeholder="ระบุขนาด เช่น โต๊ะทานข้าว 2.4x1.0 เมตร หรือแนวทางสไตล์ที่ชอบ..." class="w-full px-4 py-3 rounded-xl bg-surface-dark border border-border-dark text-soft-cream text-sm focus:border-primary-glow focus:outline-none"></textarea>
                </div>
                <button type="submit" class="w-full bg-primary-glow text-black py-3.5 rounded-xl font-bold text-base hover:bg-primary-hover transition-all flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined">send</span>
                    <span>ส่งข้อมูลประเมินราคาฟรี</span>
                </button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-surface-dark border-t border-border-dark py-12 px-6">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 mb-8 text-xs text-muted-gray">
            <div class="space-y-3 md:col-span-2">
                <div class="flex items-center gap-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="SIAOKAN CRAFT Logo" class="h-10 w-auto object-contain" />
                    <span class="font-bold text-lg text-soft-cream"><?php bloginfo('name'); ?></span>
                </div>
                <p class="font-light leading-relaxed max-w-md">
                    โรงงานผลิตและออกแบบ Furniture Crafting ตามสั่งเป็นหลัก งานไม้จริง ไม้อัดปิดผิว งานลอยตัว งานบิวท์อิน และผู้เชี่ยวชาญงานไม้ผสานเรซิ่นเจ้าหลักของประเทศไทย
                </p>
                <p class="text-primary-glow font-medium">📍 อ.เมือง จ.นครราชสีมา (โคราช)</p>
            </div>

            <div>
                <h4 class="font-bold text-soft-cream text-sm mb-3">เมนูเว็บไซต์</h4>
                <ul class="space-y-2">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-primary-glow transition-colors">หน้าแรก</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services')); ?>" class="hover:text-primary-glow transition-colors">บริการงานคราฟต์</a></li>
                    <li><a href="<?php echo esc_url(home_url('/portfolio')); ?>" class="hover:text-primary-glow transition-colors">ผลงาน Masterpiece</a></li>
                    <li><a href="<?php echo esc_url(home_url('/about')); ?>" class="hover:text-primary-glow transition-colors">เกี่ยวกับโรงงาน</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact')); ?>" class="hover:text-primary-glow transition-colors">ติดต่อเรา</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold text-soft-cream text-sm mb-3">ติดต่อโรงงาน</h4>
                <ul class="space-y-2">
                    <li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary-glow text-base">call</span> 081-234-5678</li>
                    <li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary-glow text-base">chat</span> LINE: @siaokancraft</li>
                    <li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary-glow text-base">location_on</span> อ.เมือง จ.นครราชสีมา</li>
                    <li class="flex items-center gap-2"><span class="material-symbols-outlined text-primary-glow text-base">schedule</span> จันทร์ - เสาร์: 08:30 - 17:30 น.</li>
                </ul>
            </div>
        </div>

        <div class="max-w-7xl mx-auto pt-6 border-t border-border-dark text-center text-xs text-muted-gray">
            <p>© <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
        </div>
    </footer>

    <script>
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                if (elementTop < windowHeight - 80) {
                    reveals[i].classList.add("active");
                }
            }
        }
        window.addEventListener("scroll", reveal);
        reveal();

        function toggleMobileMenu() {
            var menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }

        function openModal() {
            document.getElementById('inquire-modal').classList.remove('hidden');
            document.getElementById('inquire-modal').classList.add('flex');
        }

        function openModalWithService(serviceName) {
            document.getElementById('modal-service-select').value = serviceName;
            openModal();
        }

        function closeModal() {
            document.getElementById('inquire-modal').classList.add('hidden');
            document.getElementById('inquire-modal').classList.remove('flex');
        }
    </script>

    <?php wp_footer(); ?>
</body>

</html>
