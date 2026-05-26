<?php
/*
Template Name: Liquid Glass Homepage
*/

// Enqueue styles and scripts using standard WordPress hooks
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'liquid-glass-style', get_stylesheet_directory_uri() . '/liquid-glass-assets/style.css', array(), '1.0.0' );
    wp_enqueue_script( 'liquid-glass-gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', array(), '3.12.5', true );
    wp_enqueue_script( 'liquid-glass-main', get_stylesheet_directory_uri() . '/liquid-glass-assets/main.js', array('liquid-glass-gsap'), '1.0.0', true );
} );

get_header();
?>

<div class="liquid-glass-wrapper">
    
    <main>

        <!-- ═══ HERO ═══ -->
        <section class="hero" id="hero">
            <div class="hero-grid-bg"></div>
            <div class="orb orb--1"></div>
            <div class="orb orb--2"></div>

            <div class="hero-inner container">
                <div class="hero-content">
                    <p class="hero-label">
                        <span class="hero-dot"></span>
                        Creative Agency — Since 2019
                    </p>
                    <h1 class="hero-title">
                        <span class="hero-line">Kết Nối <em>Tiềm Năng,</em></span>
                        <span class="hero-line">Đột Phá <span class="text-stroke">Doanh Thu.</span></span>
                    </h1>
                    <p class="hero-sub">Giải pháp marketing 360° đo ni đóng giày cho tiệm Nails, Spa, Salon & Nhà hàng tại Hoa Kỳ. Chúng tôi mang khách hàng thật đến tận cửa nhà bạn — không phải con số ảo.</p>
                    
                    <!-- Stats Card - In flow -->
                    <div class="hero-stats-card">
                        <div class="stat-item">
                            <div class="stat-val"><strong class="counter" data-target="500">0</strong><span class="suffix">+</span></div>
                            <span class="label">Dự án</span>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <div class="stat-val"><strong class="counter" data-target="15">0</strong><span class="suffix">+</span></div>
                            <span class="label">Bang</span>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <div class="stat-val"><strong class="counter" data-target="98">0</strong><span class="suffix">%</span></div>
                            <span class="label">Hài lòng</span>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <div class="stat-val"><strong class="counter" data-target="10">0</strong><span class="suffix">M+</span></div>
                            <span class="label">Doanh thu ($)</span>
                        </div>
                    </div>

                    <div class="hero-actions">
                        <a href="#contact" class="btn btn--primary">
                            <span>Nhận Tư Vấn Miễn Phí</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </a>
                        <a href="#work" class="btn btn--ghost">Xem Portfolio</a>
                    </div>
                </div>
                <div class="hero-visual">
                    <div class="hero-illustration">
                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() . \'/liquid-glass-assets/img-hero-bg.png\' ); ?>" alt="" class="hero-illus-bg" aria-hidden="true">
                        <img
                            src="<?php echo esc_url( get_stylesheet_directory_uri() . \'/liquid-glass-assets/img-hero.png\' ); ?>"
                            alt="Marketing Agency Illustration"
                            class="hero-illus-main"
                            decoding="async"
                            fetchpriority="high"
                        >
                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() . \'/liquid-glass-assets/img-hero-float1.png\' ); ?>" alt="" class="hero-illus-float hero-illus-float--1" aria-hidden="true">
                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() . \'/liquid-glass-assets/img-hero-float2.png\' ); ?>" alt="" class="hero-illus-float hero-illus-float--2" aria-hidden="true">
                    </div>


                </div>
            </div>

            <div class="hero-scroll">
                <div class="scroll-line"></div>
                <span>Scroll</span>
            </div>
        </section>

        <!-- ═══ MARQUEE ═══ -->
        <div class="marquee">
            <div class="marquee-track">
                <span>NAILS</span><span class="sep">✦</span>
                <span>SPA</span><span class="sep">✦</span>
                <span>SALON</span><span class="sep">✦</span>
                <span>NHÀ HÀNG</span><span class="sep">✦</span>
                <span>BEAUTY</span><span class="sep">✦</span>
                <span>WELLNESS</span><span class="sep">✦</span>
                <span>BRANDING</span><span class="sep">✦</span>
                <span>SOCIAL MEDIA</span><span class="sep">✦</span>
                <span>NAILS</span><span class="sep">✦</span>
                <span>SPA</span><span class="sep">✦</span>
                <span>SALON</span><span class="sep">✦</span>
                <span>NHÀ HÀNG</span><span class="sep">✦</span>
                <span>BEAUTY</span><span class="sep">✦</span>
                <span>WELLNESS</span><span class="sep">✦</span>
                <span>BRANDING</span><span class="sep">✦</span>
                <span>SOCIAL MEDIA</span><span class="sep">✦</span>
            </div>
        </div>

        <!-- ═══ SERVICES ═══ -->
        <section class="services" id="services">
            <div class="container">
                <div class="section-head">
                    <p class="section-label">( 01 — Dịch Vụ )</p>
                    <h2 class="section-title">Giải pháp toàn diện,<br>kết quả đo lường được.</h2>
                    <p class="section-desc">Mỗi dịch vụ được thiết kế riêng cho ngành Beauty, Nails và F&B tại thị trường Mỹ. Không rập khuôn, không mì ăn liền — chỉ có những chiến lược được kiểm chứng bằng kết quả thật.</p>
                </div>
                <div class="services-grid">
                    <article class="svc-card" data-hover>
                        <div class="svc-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M8 14s1.5 2 4 2 4-2 4-2"/><line x1="9" y1="9" x2="9.01" y2="9"/><line x1="15" y1="9" x2="15.01" y2="9"/></svg>
                        </div>
                        <span class="svc-num">01</span>
                        <h3>Social Media Marketing</h3>
                        <p>Quản lý toàn diện Facebook, Instagram & TikTok. Sáng tạo nội dung cuốn hút, tối ưu tương tác và chuyển đổi trực tiếp, biến người xem thành khách hàng trung thành.</p>

                    </article>
                    <article class="svc-card" data-hover>
                        <div class="svc-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                        </div>
                        <span class="svc-num">02</span>
                        <h3>SEO & Website Design</h3>
                        <p>Thiết kế website chuẩn UI/UX, tốc độ cao và tích hợp hệ thống booking chuyên nghiệp. Đẩy mạnh SEO Local giúp tiệm luôn hiển thị Top 1 trên kết quả tìm kiếm khu vực.</p>

                    </article>
                    <article class="svc-card" data-hover>
                        <div class="svc-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                        </div>
                        <span class="svc-num">03</span>
                        <h3>Paid Ads (Facebook & Google)</h3>
                        <p>Chiến dịch quảng cáo tối ưu ngân sách, nhắm mục tiêu chuẩn xác theo Zip Code. Thực hiện A/B testing liên tục giúp tối đa tỷ lệ chuyển đổi (ROAS) với báo cáo minh bạch.</p>

                    </article>
                    <article class="svc-card" data-hover>
                        <div class="svc-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 19l7-7 3 3-7 7-3-3z"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><path d="M2 2l7.586 7.586"/><circle cx="11" cy="11" r="2"/></svg>
                        </div>
                        <span class="svc-num">04</span>
                        <h3>Branding & Thiết Kế</h3>
                        <p>Xây dựng bộ nhận diện đồng nhất từ Logo đến các ấn phẩm quảng cáo. Thiết kế sáng tạo, chuẩn in ấn Mỹ, giúp thương hiệu định vị sự chuyên nghiệp và nổi bật.</p>

                    </article>
                    <article class="svc-card" data-hover>
                        <div class="svc-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        </div>
                        <span class="svc-num">05</span>
                        <h3>Review & Reputation Management</h3>
                        <p>Kiểm soát và nâng tầm uy tín 5 sao trên Google & Yelp. Thu thập review tự nhiên, xử lý khủng hoảng khéo léo và duy trì hình ảnh thương hiệu tích cực 24/7.</p>

                    </article>
                    <article class="svc-card" data-hover>
                        <div class="svc-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                        </div>
                        <span class="svc-num">06</span>
                        <h3>Video & Photo Production</h3>
                        <p>Sản xuất hình ảnh, video quảng cáo chất lượng cao chuẩn Cinematic. Tối ưu định dạng cho TikTok, Reels và YouTube Shorts để gia tăng độ phủ sóng thương hiệu.</p>

                    </article>
                </div>
            </div>
        </section>

        <!-- ═══ PORTFOLIO / CASE STUDIES ═══ -->
        <section class="work" id="work">
            <div class="container">
                <div class="section-head">
                    <p class="section-label">( 02 — Portfolio )</p>
                    <h2 class="section-title">Dự án tiêu biểu.</h2>
                    <p class="section-desc">Không nói suông — đây là kết quả thực tế từ những khách hàng đã tin tưởng đồng hành cùng Easy Marketing.</p>
                </div>

                <div class="work-grid">
                    <!-- Case 1 -->
                    <div class="work-item" data-hover>
                        <div class="work-img">
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . \'/liquid-glass-assets/img-nails.png\' ); ?>" alt="Luxury Nails Houston" loading="lazy">
                            <div class="work-overlay">
                                <span class="work-cat">Nails Salon</span>
                                <span class="work-link">Xem chi tiết →</span>
                            </div>
                        </div>
                        <div class="work-info">
                            <h3>Luxury Nails — Houston, TX</h3>
                            <p>Social Marketing, Google Ads, SEO Local & Review Management. Đạt top 3 Google Maps khu vực Midtown chỉ trong 4 tháng.</p>
                            <div class="work-results">
                                <div class="work-metric"><strong>+40%</strong><span>Walk-in</span></div>
                                <div class="work-metric"><strong>-50%</strong><span>Chi phí Ads</span></div>
                                <div class="work-metric"><strong>4.9★</strong><span>Google Rating</span></div>
                            </div>
                        </div>
                    </div>

                    <!-- Case 2 -->
                    <div class="work-item" data-hover>
                        <div class="work-img">
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . \'/liquid-glass-assets/img-spa.png\' ); ?>" alt="LV Spa Atlanta" loading="lazy">
                            <div class="work-overlay">
                                <span class="work-cat">Spa & Wellness</span>
                                <span class="work-link">Xem chi tiết →</span>
                            </div>
                        </div>
                        <div class="work-info">
                            <h3>LV Spa — Atlanta, GA</h3>
                            <p>Branding, Social Media & Video Content. Đạt 5,000+ followers và tăng gấp đôi lượng booking qua Instagram DM sau 3 tháng.</p>
                            <div class="work-results">
                                <div class="work-metric"><strong>5K+</strong><span>Followers</span></div>
                                <div class="work-metric"><strong>3 tháng</strong><span>Đạt KPI</span></div>
                                <div class="work-metric"><strong>2x</strong><span>Booking</span></div>
                            </div>
                        </div>
                    </div>

                    <!-- Case 3 -->
                    <div class="work-item" data-hover>
                        <div class="work-img">
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . \'/liquid-glass-assets/img-restaurant.png\' ); ?>" alt="Pho Saigon Charlotte" loading="lazy">
                            <div class="work-overlay">
                                <span class="work-cat">Restaurant & F&B</span>
                                <span class="work-link">Xem chi tiết →</span>
                            </div>
                        </div>
                        <div class="work-info">
                            <h3>Phở Sài Gòn — Charlotte, NC</h3>
                            <p>SEO Maps, Website & Review Management. Tăng rating từ 3.8 lên 4.9★, đạt Top 3 "Vietnamese Restaurant" tại Charlotte.</p>
                            <div class="work-results">
                                <div class="work-metric"><strong>+65%</strong><span>Đơn Online</span></div>
                                <div class="work-metric"><strong>Top 3</strong><span>Google Maps</span></div>
                                <div class="work-metric"><strong>4.9★</strong><span>Google Rating</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ STATS ═══ -->
        <section class="stats">
            <div class="container stats-row">
                <div class="stat"><h3 class="stat-num counter" data-target="500">0</h3><span class="stat-suffix">+</span><p>Dự án hoàn thành</p></div>
                <div class="stat"><h3 class="stat-num counter" data-target="10">0</h3><span class="stat-suffix">M+</span><p>Doanh thu tạo ra ($)</p></div>
                <div class="stat"><h3 class="stat-num counter" data-target="98">0</h3><span class="stat-suffix">%</span><p>Khách hàng hài lòng</p></div>
                <div class="stat"><h3 class="stat-num counter" data-target="15">0</h3><span class="stat-suffix">+</span><p>Bang đang phục vụ</p></div>
            </div>
        </section>

        <!-- ═══ CLIENTS LOGOS ═══ -->
        <section class="clients">
            <div class="container">
                <div class="section-head center">
                    <p class="section-label">( Đối Tác Tin Tưởng )</p>
                    <h2 class="section-title">500+ doanh nghiệp đã chọn Easy.</h2>
                    <p class="section-desc">Từ tiệm mom-and-pop mới mở đến chuỗi 10+ chi nhánh trên nhiều tiểu bang — Easy Marketing tự hào đồng hành cùng cộng đồng Việt tại Mỹ.</p>
                </div>
                <div class="clients-grid">
                    <div class="client-card"><span class="client-name">Luxury Nails</span><small>Houston, TX</small></div>
                    <div class="client-card"><span class="client-name">LV Spa & Wellness</span><small>Atlanta, GA</small></div>
                    <div class="client-card"><span class="client-name">Phở Sài Gòn</span><small>Charlotte, NC</small></div>
                    <div class="client-card"><span class="client-name">K Nails & Spa</span><small>Denver, CO</small></div>
                    <div class="client-card"><span class="client-name">Diamond Nails</span><small>Orlando, FL</small></div>
                    <div class="client-card"><span class="client-name">Golden Touch Spa</span><small>San Jose, CA</small></div>
                    <div class="client-card"><span class="client-name">Bún Bò King</span><small>Dallas, TX</small></div>
                    <div class="client-card"><span class="client-name">Viet Beauty Bar</span><small>Seattle, WA</small></div>
                </div>
            </div>
        </section>

        <!-- ═══ TEAM ═══ -->
        <section class="team">
            <div class="container">
                <div class="section-head center">
                    <p class="section-label">( Đội Ngũ )</p>
                    <h2 class="section-title">Người thật, nhiệt huyết thật.</h2>
                    <p class="section-desc">Một đội ngũ trẻ, sáng tạo, am hiểu ngành — và quan trọng nhất: nói chung ngôn ngữ với bạn.</p>
                </div>
                <div class="team-grid">
                    <div class="team-card" data-hover>
                        <div class="team-ava">DT</div>
                        <h3>David Trần</h3>
                        <p class="team-role">Founder & CEO</p>
                        <p class="team-bio">10+ năm kinh nghiệm marketing tại thị trường Mỹ. Từng quản lý chiến dịch cho 200+ doanh nghiệp Việt.</p>
                    </div>
                    <div class="team-card" data-hover>
                        <div class="team-ava">AL</div>
                        <h3>Annie Lê</h3>
                        <p class="team-role">Creative Director</p>
                        <p class="team-bio">Chuyên gia branding & thiết kế. Tốt nghiệp Graphic Design tại Academy of Art University, San Francisco.</p>
                    </div>
                    <div class="team-card" data-hover>
                        <div class="team-ava">KP</div>
                        <h3>Kevin Phạm</h3>
                        <p class="team-role">Head of Ads & SEO</p>
                        <p class="team-bio">Google Certified Partner. Quản lý tổng ngân sách quảng cáo $500K+/năm. Chuyên tối ưu ROI cho ngành Beauty.</p>
                    </div>
                    <div class="team-card" data-hover>
                        <div class="team-ava">TN</div>
                        <h3>Tina Nguyễn</h3>
                        <p class="team-role">Social Media Manager</p>
                        <p class="team-bio">Content creator với 50K+ followers cá nhân trên TikTok. Biến mỗi tiệm thành một "influencer" địa phương.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ PROCESS ═══ -->
        <section class="process" id="process">
            <div class="container">
                <div class="section-head center">
                    <p class="section-label">( 03 — Quy Trình )</p>
                    <h2 class="section-title">4 bước đơn giản,<br>kết quả thấy ngay.</h2>
                    <p class="section-desc">Từ ngày đầu tiên đến khi khách đặt lịch — quy trình rõ ràng, minh bạch, không chờ đợi vô hạn.</p>
                </div>
                <div class="process-grid">
                    <div class="step" data-hover>
                        <div class="step-top"><span class="step-num">01</span><div class="step-line"></div></div>
                        <h3>Tư Vấn & Phân Tích</h3>
                        <p>Gọi miễn phí 30 phút. Lắng nghe câu chuyện kinh doanh, phân tích thị trường tại zip code của bạn, đánh giá đối thủ cùng khu vực và xác định cơ hội tăng trưởng cụ thể.</p>
                    </div>
                    <div class="step" data-hover>
                        <div class="step-top"><span class="step-num">02</span><div class="step-line"></div></div>
                        <h3>Lên Chiến Lược</h3>
                        <p>Xây dựng kế hoạch marketing đa kênh phù hợp ngân sách. Thiết kế brand identity, lên lịch content tháng, chọn kênh quảng cáo phù hợp nhất với ngành và khu vực của bạn.</p>
                    </div>
                    <div class="step" data-hover>
                        <div class="step-top"><span class="step-num">03</span><div class="step-line"></div></div>
                        <h3>Triển Khai & Vận Hành</h3>
                        <p>Đội ngũ sáng tạo bắt tay vào việc: thiết kế đồ họa, viết content, quay video, setup & chạy ads, tối ưu SEO và quản lý đánh giá Google/Yelp. Bạn chỉ cần làm nail, chúng tôi lo phần còn lại.</p>
                    </div>
                    <div class="step" data-hover>
                        <div class="step-top"><span class="step-num">04</span><div class="step-line"></div></div>
                        <h3>Đo Lường & Tối Ưu</h3>
                        <p>Báo cáo minh bạch hàng tuần bằng dashboard trực quan. Theo dõi lượt gọi, tin nhắn, đặt lịch thực tế. Họp review tháng để điều chỉnh chiến lược và liên tục tối đa ROI.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ ABOUT ═══ -->
        <section class="about" id="about">
            <div class="container about-layout">
                <div class="about-left">
                    <p class="section-label">( 04 — Về Chúng Tôi )</p>
                    <h2 class="section-title">Con đường<br>ngắn nhất đến<br>khách hàng.</h2>
                    <p class="about-quote">"Chúng tôi không bán marketing.<br>Chúng tôi bán khách hàng."</p>
                </div>
                <div class="about-right">
                    <p class="about-lead">Easy Marketing được thành lập năm 2019 tại Fayetteville, North Carolina — bởi một đội ngũ am hiểu sâu sắc cộng đồng doanh nghiệp Việt tại Mỹ. Chúng tôi không làm marketing chung chung — mỗi chiến lược đều được "đo ni đóng giày" cho từng ngành: Nails, Spa, Salon, và Nhà hàng.</p>
                    <div class="about-vals">
                        <div class="aval">
                            <h4>✦ Hiểu Ngành Sâu Sắc</h4>
                            <p>Đội ngũ từng vận hành và tư vấn cho 500+ tiệm trên 15 bang. Giải pháp sát thực tế vì chúng tôi sống cùng ngành Beauty & F&B.</p>
                        </div>
                        <div class="aval">
                            <h4>✦ Khách Hàng Thật</h4>
                            <p>Không chạy số liệu đẹp để "lừa" chủ tiệm. Easy tiếp cận người thật sự quan tâm đến dịch vụ và sẵn sàng chi trả — walk-in, gọi điện, đặt lịch.</p>
                        </div>
                        <div class="aval">
                            <h4>✦ Chi Phí Minh Bạch</h4>
                            <p>Mọi đồng ngân sách đều được theo dõi và báo cáo. Không hợp đồng dài hạn ràng buộc. Không chi phí ẩn. Hủy bất cứ lúc nào.</p>
                        </div>
                        <div class="aval">
                            <h4>✦ Sáng Tạo & Khác Biệt</h4>
                            <p>Ý tưởng mới mẻ, thiết kế ấn tượng. Không copy-paste giữa các tiệm. Mỗi thương hiệu được xây dựng bản sắc riêng.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ TESTIMONIALS ═══ -->
        <section class="testi" id="testimonials">
            <div class="container">
                <div class="section-head center">
                    <p class="section-label">( 05 — Phản Hồi )</p>
                    <h2 class="section-title">Khách hàng nói gì?</h2>
                    <p class="section-desc">Hàng trăm chủ tiệm trên khắp nước Mỹ đã tin tưởng và đồng hành cùng Easy Marketing.</p>
                </div>
                <div class="testi-carousel">
                    <div class="testi-track-wrap">
                        <div class="testi-track" id="testiTrack">
                            <blockquote class="testi-card" data-hover>
                                <div class="testi-stars">★★★★★</div>
                                <p>"Trước khi gặp Easy, tôi tự chạy ads mất $3,000/tháng mà không thấy hiệu quả gì cả. Sau 2 tháng hợp tác, lượng khách walk-in tăng 40% và chi phí quảng cáo giảm một nửa. Bây giờ tôi chỉ tập trung làm nail, phần marketing để Easy lo."</p>
</div>

<?php
get_footer();
