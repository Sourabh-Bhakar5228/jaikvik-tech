<!-- Topbar Start -->
<div class="bg-dark d-none d-lg-block">
    <div class="container-fluid nav-top">
        <div class="row align-items-center" style="height: 45px">
            <!-- Left Section: Get Quote Button, Social Icons, WhatsApp -->
            <div class="col-auto position-relative">
                <div class="d-inline-flex align-items-center">
                    <!-- Get Quote Button -->
                    <a class="btn btn-sm me-2 quote-btn" href="javascript:void(0)" onclick="toggleQuotePopup()">
                        <span>Get a Quote</span>
                    </a>

                    <!-- Social Icons -->
                    <a class="btn btn-sm me-2" href="https://facebook.com" target="_blank">
                        <i class="fab fa-facebook-f text-white"></i>
                    </a>
                    <a class="btn btn-sm me-2" href="https://twitter.com" target="_blank">
                        <i class="fab fa-twitter text-white"></i>
                    </a>
                    <a class="btn btn-sm me-2" href="https://instagram.com" target="_blank">
                        <i class="fab fa-instagram text-white"></i>
                    </a>
                    <a class="btn btn-sm me-2" href="https://linkedin.com" target="_blank">
                        <i class="fab fa-linkedin-in text-white"></i>
                    </a>
                    <!-- WhatsApp Icon -->
                    <a class="btn btn-sm me-2 whatsapp-icon" href="javascript:void(0)" onclick="toggleWhatsAppPopup()">
                        <i class="fab fa-whatsapp text-white"></i>
                    </a>
                    <!-- WhatsApp Popup -->
                    <div id="whatsapp_popup" class="popup">
                        <div class="popup-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 class="mb-0">WhatsApp Chat</h6>
                                <a href="javascript:void(0)" onclick="toggleWhatsAppPopup()" class="close-btn">×</a>
                            </div>
                            <p>Connect with us instantly!</p>
                            <a href="https://wa.me/8307802850" target="_blank" class="btn btn-success btn-sm w-100">
                                <i class="fab fa-whatsapp me-1"></i> Start Chat
                            </a>
                        </div>
                    </div>
                    <!-- Quote Popup -->
                    <div id="quote_popup" class="popup">
                        <div class="popup-content">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h6 class="mb-0">Request a Quote</h6>
                                <a href="javascript:void(0)" onclick="toggleQuotePopup()" class="close-btn">×</a>
                            </div>
                            <form id="quoteForm" onsubmit="validateForm(event)">
                                <div class="mb-3">
                                    <input type="text" class="form-control form-control-sm" id="name" placeholder="Name" required>
                                    <div class="error-message" id="nameError"></div>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control form-control-sm" id="email" placeholder="Email" required>
                                    <div class="error-message" id="emailError"></div>
                                </div>
                                <div class="mb-3">
                                    <input type="tel" class="form-control form-control-sm" id="phone" placeholder="Phone" required>
                                    <div class="error-message" id="phoneError"></div>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control form-control-sm" id="company" placeholder="Company Name">
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control form-control-sm" id="message" placeholder="Message" rows="4"></textarea>
                                    <div class="error-message" id="messageError"></div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm w-100">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Section: Navigation Links -->
            <div class="col text-lg-end">
                <div class="d-inline-flex align-items-center">
                    <a class="btn btn-sm me-2 text-uppercase text-white" href="index.php">Home</a>
                    <a class="btn btn-sm me-2 text-uppercase text-white" href="about-us.php">About Us</a>
                    <a class="btn btn-sm me-2 text-uppercase text-white" href="blog.php">Our Blogs</a>
                    <a class="btn btn-sm me-2 text-uppercase text-white" href="contact-us.php">Contact Us</a>
                    <a class="btn btn-sm me-2 text-uppercase text-white" href="career.php">Careers</a>
                    <a class="btn btn-sm me-2 text-uppercase text-white" href="#">Admin</a>
                </div>
            </div>
        </div>
    </div>
</div>

<header>
    <div class="header-main sticky-nav">
        <div class="container-fluid laptop-view">
            <div class="row align-items-center ">
                <div class="col-lg-1">
                    <div class="header-logo h1">
                        <a href="index.php">
                            <img src="https://jaikvik.in/lab/new-post-video/img/logo/logo-1.png" alt="" width="100%">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="main-menu d-flex justify-content-between align-items-center">
                        <ul>
                            <li class="dropdown position-static text-uppercase"><a href="Customized_Software.php">Software Development <i class="pe-7s-angle-down"></i></a>
                                <ul class="mega-menu d-block">
                                    <div class="row gy-2 gx-3 mt-1 align-items-center justify-content-start">
                                        <div class="col-lg-2">
                                            <a href="crm.php" class="container-img">
                                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/crm.jpg" alt="CRM Software" width="100%" class="image">
                                                <div class="image-text">CRM Software</div>
                                            </a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="mobile-application.php" class="container-img">
                                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/mobile-Application.jpg" alt="Mobile Application" width="100%" class="image">
                                                <div class="image-text">Mobile Application</div>
                                            </a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="ERP.php" class="container-img">
                                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/ERP.jpg" alt="ERP Software" width="100%" class="image">
                                                <div class="image-text">ERP Software</div>
                                            </a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="Customized_Software.php" class="container-img">
                                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/Costumized Software.jpg" alt="Customized Software" width="100%" class="image">
                                                <div class="image-text">Customized Software</div>
                                            </a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="Customized_Software.php" class="container-img">
                                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/packages.jpg" alt="Packages" width="100%" class="image">
                                                <div class="image-text">Packages</div>
                                            </a>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown position-static text-uppercase"><a href="website-development-page.php">Website Development <i class="pe-7s-angle-down"></i></a>
                                <ul class="mega-menu d-block">
                                    <div class="row mt-1 gy-2 gx-3 align-items-center justify-content-start">
                                        <div class="col-lg-2">
                                            <a href="website-development-page.php#web-ecommerce" class="container-img">
                                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/e-commerce.jpg" alt="E-Commerce" width="100%" class="image">
                                                <div class="image-text">E-Commerce</div>
                                            </a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="website-development-page.php#web-woocommerce" class="container-img">
                                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/woo-commerce.jpg" alt="WooCommerce" width="100%" class="image">
                                                <div class="image-text">WooCommerce</div>
                                            </a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="website-development-page.php#web-corporate" class="container-img">
                                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/corporate-website.jpg" alt="Corporate Website" width="100%" class="image">
                                                <div class="image-text">Corporate Website</div>
                                            </a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="website-development-page.php#web-portal" class="container-img">
                                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/online-portal.jpg" alt="Online Portal" width="100%" class="image">
                                                <div class="image-text">Online Portal</div>
                                            </a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="website-development-page.php" class="container-img">
                                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/packages.jpg" alt="Packages" width="100%" class="image">
                                                <div class="image-text">Packages</div>
                                            </a>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown position-static text-uppercase"><a href="digital-marketing.php">Digital Marketing <i class="pe-7s-angle-down"></i></a>
                                <ul class="mega-menu d-block">
                                    <div class="row mt-1 gy-2 gx-3 align-items-center justify-content-start">
                                        <div class="col-lg-2">
                                            <a href="social-media-page.php" class="container-img">
                                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/social-media-marketing.jpg" alt="Social Media Marketing" width="100%" class="image">
                                                <div class="image-text">Social Media Marketing</div>
                                            </a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="PPC-Meta-YouTube-Ads.php" class="container-img">
                                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/youtube-ads.jpg" alt="YouTube & Meta Ads" width="100%" class="image">
                                                <div class="image-text">YouTube & Meta Ads</div>
                                            </a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="Brand-promotion.php" class="container-img">
                                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/brand-identity-2.jpg" alt="Brand Identity" width="100%" class="image">
                                                <div class="image-text">Brand Identity</div>
                                            </a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="digital-marketing.php" class="container-img">
                                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/packages.jpg" alt="Packages" width="100%" class="image">
                                                <div class="image-text">Packages</div>
                                            </a>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown position-static text-uppercase"><a href="SEO-service.php">Google SEO Services <i class="pe-7s-angle-down"></i></a>
                                <ul class="mega-menu d-block">
                                    <div class="row mt-1 gy-2 gx-3 align-items-center justify-content-start">
                                        <div class="col-lg-2">
                                            <a href="SEO-service.php#website-audit" class="container-img">
                                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/website-audit.jpg" alt="Website Audit" width="100%" class="image">
                                                <div class="image-text">Website Audit</div>
                                            </a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="SEO-service.php#technical-seo" class="container-img">
                                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/technical-seo.jpg" alt="Technical SEO" width="100%" class="image">
                                                <div class="image-text">Technical SEO</div>
                                            </a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="SEO-service.php#on-page-seo" class="container-img">
                                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/on-page-seo.jpg" alt="On-Page SEO" width="100%" class="image">
                                                <div class="image-text">On-Page SEO</div>
                                            </a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="SEO-service.php#off-page-seo" class="container-img">
                                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/off-page-seo.jpg" alt="Off-Page SEO" width="100%" class="image">
                                                <div class="image-text">Off-Page SEO</div>
                                            </a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="SEO-service.php" class="container-img">
                                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/packages.jpg" alt="SEO Packages" width="100%" class="image">
                                                <div class="image-text">SEO Packages</div>
                                            </a>
                                        </div>
                                </ul>
                            </li>
                            <li class="dropdown position-static text-uppercase"><a href="Film_production.php">Film Production<i class="pe-7s-angle-down"></i></a>
                                <ul class="mega-menu d-block">
                                    <div class="row mt-1 gy-2 gx-3 align-items-center justify-content-start">
                                        <div class="col-lg-2">
                                            <a href="Film_production.php#corporate-video" class="container-img" data-section="corporate-video">
                                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/corporate-video-presentaion.jpg" alt="Corporate Video Presentation" width="100%" class="image">
                                                <div class="image-text">Corporate Video Presentation</div>
                                            </a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="Film_production.php#product-explainer" class="container-img" data-section="explanatory-video">
                                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/explanatory-video.jpg" alt="Explanatory Video" width="100%" class="image">
                                                <div class="image-text">Explanatory Video</div>
                                            </a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="Film_production.php#tv-commercial" class="container-img" data-section="tv-commercial">
                                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/tv-commercial-ads.jpg" alt="TV Commercial Ads" width="100%" class="image">
                                                <div class="image-text">TV Commercial Ads</div>
                                            </a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="Film_production.php#youtube-ads" class="container-img" data-section="youtube-ads">
                                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/youtube-ads.jpg" alt="YouTube Ads" width="100%" class="image">
                                                <div class="image-text">YouTube Ads</div>
                                            </a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="Film_production.php#photoshoot" class="container-img" data-section="photoshoot">
                                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/photoshoot .jpg" alt="Photoshoot" width="100%" class="image">
                                                <div class="image-text">Photoshoot</div>
                                            </a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="Film_production.php#model-shoot" class="container-img" data-section="model-shoot">
                                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/model-shoot.jpg" alt="Model Shoot" width="100%" class="image">
                                                <div class="image-text">Model Shoot</div>
                                            </a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="Film_production.php#interview-videos" class="container-img" data-section="interview">
                                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/interview.jpg" alt="Interview" width="100%" class="image">
                                                <div class="image-text">Interview and Podcast</div>
                                            </a>
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="Film_production.php" class="container-img" data-section="packages">
                                                <img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/packages.jpg" alt="Packages" width="100%" class="image">
                                                <div class="image-text">Packages</div>
                                            </a>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                        <div class="language">
                            <a href="javascript:void(0)" onclick="toggleLanguagePopup()" class="language-btn">Language</a>
                            <!-- Language Popup -->
                            <div id="language_popup" class="language-popup">
                                <div class="language-popup-content">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h6 class="mb-0">Select Language</h6>
                                        <a href="javascript:void(0)" onclick="toggleLanguagePopup()" class="close-btn">×</a>
                                    </div>
                                    <div id="google_translate_element"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-relative">
            <!-- Header Action Start -->
            <div class="container-fluid">
                <div class="header-actions mobile-view row">
                    <div class="col-6">
                        <a href="index.php">
                            <img src="https://jaikvik.in/lab/new-post-video/img/logo/logo-1.png" alt="" width="90%">
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                            <i class="fa-solid fa-bars-progress"></i>
                        </a>
                    </div>
                </div>
                <!-- Header Action End -->
            </div>
        </div>
    </div>
</header>
<!-- Header Area End -->
<div class="offcanvas-overlay"></div>

<!-- OffCanvas Menu Start -->
<div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
    <button class="offcanvas-close"></button>
    <div class="inner customScroll">
        <div class="offcanvas-menu mb-4">
            <ul>
                <li><a href="index.php"><span class="menu-text">Home</span></a></li>
                <li><a href="about-us.php"><span class="menu-text">About Us</span></a></li>
                <li><a href="#"><span class="menu-text">Services</span></a>
                    <ul class="sub-menu">
                        <li>
                            <a href="Customized_Software.php"><span class="menu-text">Software Development</span></a>
                            <ul class="sub-menu">
                                <li><a href="crm.php" class="container-img"><img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/crm.jpg" alt="CRM Software" width="100%" class="image">
                                        <div class="image-text">CRM Software</div>
                                    </a></li>
                                <li><a href="mobile-application.php" class="container-img"><img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/mobile-Application.jpg" alt="Mobile Application" width="100%" class="image">
                                        <div class="image-text">Mobile Application</div>
                                    </a></li>
                                <li><a href="ERP.php" class="container-img"><img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/ERP.jpg" alt="ERP Software" width="100%" class="image">
                                        <div class="image-text">ERP Software</div>
                                    </a></li>
                                <li><a href="Customized_Software.php" class="container-img"><img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/Costumized Software.jpg" alt="Customized Software" width="100%" class="image">
                                        <div class="image-text">Customized Software</div>
                                    </a></li>
                                <li><a href="Customized_Software.php" class="container-img"><img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/packages.jpg" alt="Packages" width="100%" class="image">
                                        <div class="image-text">Packages</div>
                                    </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="website-development-page.php"><span class="menu-text">Website Development</span></a>
                            <ul class="sub-menu">
                                <li><a href="website-development-page.php#web-ecommerce" class="container-img"><img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/e-commerce.jpg" alt="E-Commerce" width="100%" class="image">
                                        <div class="image-text">E-Commerce</div>
                                    </a></li>
                                <li><a href="website-development-page.php#web-woocommerce" class="container-img"><img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/woo-commerce.jpg" alt="WooCommerce" width="100%" class="image">
                                        <div class="image-text">WooCommerce</div>
                                    </a></li>
                                <li><a href="website-development-page.php#web-corporate" class="container-img"><img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/corporate-website.jpg" alt="Corporate Website" width="100%" class="image">
                                        <div class="image-text">Corporate Website</div>
                                    </a></li>
                                <li><a href="website-development-page.php#web-portal" class="container-img"><img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/online-portal.jpg" alt="Online Portal" width="100%" class="image">
                                        <div class="image-text">Online Portal</div>
                                    </a></li>
                                <li><a href="website-development-page.php" class="container-img"><img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/packages.jpg" alt="Packages" width="100%" class="image">
                                        <div class="image-text">Packages</div>
                                    </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="digital-marketing.php"><span class="menu-text">Digital Marketing</span></a>
                            <ul class="sub-menu">
                                <li><a href="social-media-page.php" class="container-img"><img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/social-media-marketing.jpg" alt="Social Media Marketing" width="100%" class="image">
                                        <div class="image-text">Social Media Marketing</div>
                                    </a></li>
                                <li><a href="PPC-Meta-YouTube-Ads.php" class="container-img"><img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/youtube-ads.jpg" alt="YouTube & Meta Ads" width="100%" class="image">
                                        <div class="image-text">YouTube & Meta Ads</div>
                                    </a></li>
                                <li><a href="Brand-promotion.php" class="container-img"><img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/brand-identity-2.jpg" alt="Brand Identity" width="100%" class="image">
                                        <div class="image-text">Brand Identity</div>
                                    </a></li>
                                <li><a href="digital-marketing.php" class="container-img"><img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/packages.jpg" alt="Packages" width="100%" class="image">
                                        <div class="image-text">Packages</div>
                                    </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="SEO-service.php"><span class="menu-text">Google SEO Services</span></a>
                            <ul class="sub-menu">
                                <li><a href="SEO-service.php#website-audit" class="container-img"><img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/website-audit.jpg" alt="Website Audit" width="100%" class="image">
                                        <div class="image-text">Website Audit</div>
                                    </a></li>
                                <li><a href="SEO-service.php#technical-seo" class="container-img"><img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/technical-seo.jpg" alt="Technical SEO" width="100%" class="image">
                                        <div class="image-text">Technical SEO</div>
                                    </a></li>
                                <li><a href="SEO-service.php#on-page-seo" class="container-img"><img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/on-page-seo.jpg" alt="On-Page SEO" width="100%" class="image">
                                        <div class="image-text">On-Page SEO</div>
                                    </a></li>
                                <li><a href="SEO-service.php#off-page-seo" class="container-img"><img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/off-page-seo.jpg" alt="Off-Page SEO" width="100%" class="image">
                                        <div class="image-text">Off-Page SEO</div>
                                    </a></li>
                                <li><a href="SEO-service.php" class="container-img"><img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/packages.jpg" alt="SEO Packages" width="100%" class="image">
                                        <div class="image-text">SEO Packages</div>
                                    </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="Film_production.php"><span class="menu-text">Film Production</span></a>
                            <ul class="sub-menu">
                                <li><a href="Film_production.php#corporate-video" class="container-img"><img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/corporate-video-presentaion.jpg" alt="Corporate Video Presentation" width="100%" class="image">
                                        <div class="image-text">Corporate Video Presentation</div>
                                    </a></li>
                                <li><a href="Film_production.php#product-explainer" class="container-img"><img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/explanatory-video.jpg" alt="Explanatory Video" width="100%" class="image">
                                        <div class="image-text">Explanatory Video</div>
                                    </a></li>
                                <li><a href="Film_production.php#tv-commercial" class="container-img"><img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/tv-commercial-ads.jpg" alt="TV Commercial Ads" width="100%" class="image">
                                        <div class="image-text">TV Commercial Ads</div>
                                    </a></li>
                                <li><a href="Film_production.php#youtube-ads" class="container-img"><img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/youtube-ads.jpg" alt="YouTube Ads" width="100%" class="image">
                                        <div class="image-text">YouTube Ads</div>
                                    </a></li>
                                <li><a href="Film_production.php#photoshoot" class="container-img"><img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/photoshoot .jpg" alt="Photoshoot" width="100%" class="image">
                                        <div class="image-text">Photoshoot</div>
                                    </a></li>
                                <li><a href="Film_production.php#model-shoot" class="container-img"><img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/model-shoot.jpg" alt="Model Shoot" width="100%" class="image">
                                        <div class="image-text">Model Shoot</div>
                                    </a></li>
                                <li><a href="Film_production.php#interview-videos" class="container-img"><img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/interview.jpg" alt="Interview" width="100%" class="image">
                                        <div class="image-text">Interview and Podcast</div>
                                    </a></li>
                                <li><a href="Film_production.php" class="container-img"><img src="https://jaikvik.in/lab/new-post-video/img/Jaikvik banner/new/packages.jpg" alt="Packages" width="100%" class="image">
                                        <div class="image-text">Packages</div>
                                    </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="blog.php"><span class="menu-text">Blogs</span></a></li>
                <li><a href="career.php"><span class="menu-text">Careers</span></a></li>
                <li><a href="contact-us.php"><span class="menu-text">Contact Us</span></a></li>
                <li><a href="javascript:void(0)" onclick="toggleLanguagePopup()"><span class="menu-text">Language</span></a></li>
            </ul>
        </div>
        <!-- OffCanvas Menu End -->
        <div class="offcanvas-social mt-auto">
            <ul>
                <li><a href="https://facebook.com"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="https://instagram.com"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Google fonts for Poppins -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

<!-- Google Translate Script -->
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<!-- Styles -->
<style>
    .quote-btn {
        position: relative;
        background: #1a1a1a;
        color: #fff;
        padding: 5px 10px;
        border-radius: 5px;
        overflow: hidden;
        transition: all 0.3s ease;
        font-size: 12px;
    }

    .quote-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border: 2px solid transparent;
        border-radius: 5px;
        animation: rgbBorder 3s linear infinite;
        z-index: 0;
    }

    .quote-btn span {
        position: relative;
        z-index: 1;
    }

    .quote-btn:hover {
        background: #333;
        transform: scale(1.05);
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    }

    @keyframes rgbBorder {
        0% {
            border-color: #ff0000;
        }

        33% {
            border-color: #00ff00;
        }

        66% {
            border-color: #0000ff;
        }

        100% {
            border-color: #ff0000;
        }
    }

    /* Popup Styles */
    .popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(96, 94, 94, 0.6);
        z-index: 1000;
        justify-content: center;
        align-items: center;
        backdrop-filter: blur(5px);
    }

    .popup-content {
        background: linear-gradient(135deg, #535151, #f8f9fa);
        border-radius: 12px;
        padding: 30px;
        width: 100%;
        max-width: 450px;
        box-shadow: 0 8px 24px rgba(255, 255, 255, 0.2);
        position: relative;
        font-family: 'Poppins', sans-serif;
        animation: slideIn 0.3s ease-out;
    }

    /* Language Popup Styles */
    .language-popup {
        display: none;
        position: absolute;
        top: 100%;
        right: 0;
        width: 200px;
        z-index: 1000;
    }

    .language-popup-content {
        background: linear-gradient(135deg, #535151, #f8f9fa);
        border-radius: 8px;
        padding: 15px;
        box-shadow: 0 4px 12px rgba(255, 255, 255, 0.2);
        font-family: 'Poppins', sans-serif;
        animation: slideIn 0.3s ease-out;
    }

    @keyframes slideIn {
        from {
            transform: translateY(-10px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .popup-content h6,
    .language-popup-content h6 {
        font-size: 18px;
        color: #1a1a1a;
        margin: 0;
        font-weight: 600;
    }

    .popup-content .close-btn,
    .language-popup-content .close-btn {
        text-decoration: none;
        color: #333;
        font-size: 20px;
        line-height: 1;
        transition: color 0.3s ease;
    }

    .popup-content .close-btn:hover,
    .language-popup-content .close-btn:hover {
        color: #ff4444;
    }

    .popup-content .form-control {
        font-size: 15px;
        padding: 12px;
        border-radius: 8px;
        border: 1px solid #000000;
        width: 100%;
        transition: all 0.3s ease;
        background: #67606054;
        resize: vertical;
    }

    .popup-content .form-control:focus {
        outline: none;
        border-color: rgb(15, 15, 16);
        box-shadow: 0 0 8px rgba(51, 51, 52, 0.3);
    }

    .popup-content .form-control.is-invalid {
        border-color: #ff4444;
    }

    .popup-content .error-message {
        color: #ff4444;
        font-size: 12px;
        margin-top: 4px;
        display: none;
    }

    .popup-content .btn {
        font-size: 15px;
        padding: 12px;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .popup-content .btn-success {
        background-color: #25D366;
        border: none;
    }

    .popup-content .btn-primary {
        background: linear-gradient(90deg, #605e5e, #0b0c0cfa);
        border: none;
    }

    .popup-content .btn-primary:hover {
        background: linear-gradient(90deg, #0b0c0cfa, #605e5e);
        transform: translateY(-2px);
    }

    /* Language Button Styles */
    .language {
        position: relative;
        left: 90px;
    }

    .language-btn {
        color: #fff;
        text-decoration: none;
        padding: 8px 12px;
        display: block;
        transition: color 0.3s ease;
        /* font-family: 'Poppins', sans-serif; */
        font-size: 18px;
        font-weight: 500;
        /* border: 1px solid #fff; */
        border-radius: 5px;
    }

    .language-btn:hover {
        color: #ddd;
        background: rgba(255, 255, 255, 0.1);
    }

    /* Google Translate Styles */
    #google_translate_element {
        margin-top: 8px;
    }

    .goog-te-combo {
        width: 100%;
        padding: 6px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-family: 'Poppins', sans-serif;
        font-size: 12px;
    }

    /* Main Menu Styles */
    .main-menu ul {
        display: flex;
        align-items: center;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .main-menu ul li {
        position: relative;
    }

    .main-menu ul li a {
        color: #fff;
        text-decoration: none;
        padding: 10px 10px;
        display: block;
        transition: color 0.3s ease;
    }

    /* Responsive Design */
    @media (max-width: 576px) {
        .popup-content {
            width: 90%;
            padding: 20px;
        }

        .popup-content h6 {
            font-size: 16px;
        }

        .popup-content .form-control {
            font-size: 14px;
            padding: 10px;
        }

        .popup-content .btn {
            font-size: 14px;
            padding: 10px;
        }

        .language-popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            justify-content: center;
            align-items: center;
        }

        .language-popup-content {
            width: 90%;
            max-width: 250px;
            padding: 15px;
        }

        .language-popup-content h6 {
            font-size: 14px;
        }

        .goog-te-combo {
            font-size: 12px;
            padding: 6px;
        }
    }

    /* Updated Styles for Image Text Overlay */
    .container-img {
        position: relative;
        overflow: hidden;
    }

    .container-img .image {
        display: block;
        width: 100%;
        height: auto;
    }

    .image-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: linear-gradient(135deg, rgba(0, 0, 0, 0.6), rgba(83, 81, 81, 0.6));
        color: #fff;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        font-weight: 500;
        text-align: center;
        padding: 8px 12px;
        width: 80%;
        opacity: 1;
    }

    @media (max-width: 991px) {
        .image-text {
            font-size: 12px;
            padding: 6px 10px;
        }
    }

    @media (max-width: 576px) {
        .image-text {
            font-size: 10px;
            padding: 4px 8px;
        }
    }
</style>

<!-- Scripts -->
<script>
    // Toggle Quote Popup
    function toggleQuotePopup() {
        var popup = document.getElementById('quote_popup');
        popup.style.display = popup.style.display === 'flex' ? 'none' : 'flex';
        if (popup.style.display === 'none') {
            document.getElementById('quoteForm').reset();
            clearErrors();
        }
    }

    // Toggle WhatsApp Popup
    function toggleWhatsAppPopup() {
        var popup = document.getElementById('whatsapp_popup');
        popup.style.display = popup.style.display === 'flex' ? 'none' : 'flex';
    }

    // Toggle Language Popup
    function toggleLanguagePopup() {
        var popup = document.getElementById('language_popup');
        popup.style.display = popup.style.display === 'block' ? 'none' : 'block';
    }

    // Google Translate Initialization
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            autoDisplay: false
        }, 'google_translate_element');
    }

    // Form Validation
    function validateForm(event) {
        event.preventDefault();
        clearErrors();

        let isValid = true;
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const company = document.getElementById('company').value.trim();
        const message = document.getElementById('message').value.trim();

        // Name Validation
        if (name === '') {
            showError('name', 'Name is required');
            isValid = false;
        } else if (!/^[a-zA-Z\s]+$/.test(name)) {
            showError('name', 'Name should contain only letters and spaces');
            isValid = false;
        }

        // Email Validation
        if (email === '') {
            showError('email', 'Email is required');
            isValid = false;
        } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            showError('email', 'Please enter a valid email address');
            isValid = false;
        }

        // Phone Validation
        if (phone === '') {
            showError('phone', 'Phone number is required');
            isValid = false;
        } else if (!/^\+?\d{10,15}$/.test(phone.replace(/\s/g, ''))) {
            showError('phone', 'Please enter a valid phone number (10-15 digits)');
            isValid = false;
        }

        if (isValid) {
            // Log form data to console
            const formData = {
                name: name,
                email: email,
                phone: phone,
                company: company || 'N/A',
                message: message || 'N/A'
            };
            console.log('Form Data:', formData);

            // Simulate form submission
            alert('Form submitted successfully!');
            document.getElementById('quoteForm').reset();
            toggleQuotePopup();
        }
    }

    function showError(fieldId, message) {
        const field = document.getElementById(fieldId);
        const errorDiv = document.getElementById(fieldId + 'Error');
        field.classList.add('is-invalid');
        errorDiv.style.display = 'block';
        errorDiv.textContent = message;
    }

    function clearErrors() {
        const fields = ['name', 'email', 'phone', 'message'];
        fields.forEach(fieldId => {
            const field = document.getElementById(fieldId);
            const errorDiv = document.getElementById(fieldId + 'Error');
            field.classList.remove('is-invalid');
            errorDiv.style.display = 'none';
            errorDiv.textContent = '';
        });
    }

    // Hide popups initially
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('whatsapp_popup').style.display = 'none';
        document.getElementById('quote_popup').style.display = 'none';
        document.getElementById('language_popup').style.display = 'none';
    });

    // Highlight active link
    var links = document.querySelectorAll("a");
    var currentUrl = window.location.href;
    for (var i = 0; i < links.length; i++) {
        var link = links[i];
        if (link.href === currentUrl) {
            link.classList.add("active");
        } else {
            link.classList.remove("active");
        }
    }

    // jQuery Header Script
    (function($) {
        "use strict";
        var $window = $(window),
            $body = $("body");

        // Menu Fixed On Scroll
        $(window).on("scroll", function(e) {
            var window_top = $(window).scrollTop() + 1;
            if (window_top > 250) {
                $(".sticky-nav").addClass("menu_fixed animated fadeInDown");
            } else {
                $(".sticky-nav").removeClass("menu_fixed animated fadeInDown");
            }
        });

        // Off Canvas Function
        (function() {
            var $offCanvasToggle = $(".offcanvas-toggle"),
                $offCanvas = $(".offcanvas"),
                $offCanvasOverlay = $(".offcanvas-overlay"),
                $mobileMenuToggle = $(".mobile-menu-toggle");
            $offCanvasToggle.on("click", function(e) {
                e.preventDefault();
                var $this = $(this),
                    $target = $this.attr("href");
                $body.addClass("offcanvas-open");
                $($target).addClass("offcanvas-open");
                $offCanvasOverlay.fadeIn();
                if ($this.parent().hasClass("mobile-menu-toggle")) {
                    $this.addClass("close");
                }
            });
            $(".offcanvas-close, .offcanvas-overlay").on("click", function(e) {
                e.preventDefault();
                $body.removeClass("offcanvas-open");
                $offCanvas.removeClass("offcanvas-open");
                $offCanvasOverlay.fadeOut();
                $mobileMenuToggle.find("a").removeClass("close");
            });
        })();

        // Off Canvas Menu
        function mobileOffCanvasMenu() {
            var $offCanvasNav = $(".offcanvas-menu, .overlay-menu"),
                $offCanvasNavSubMenu = $offCanvasNav.find(".sub-menu");
            $offCanvasNavSubMenu.parent().prepend('<span class="menu-expand"></span>');
            $offCanvasNav.on("click", "li a, .menu-expand", function(e) {
                var $this = $(this);
                if ($this.attr("href") === "#" || $this.hasClass("menu-expand")) {
                    e.preventDefault();
                    if ($this.siblings("ul:visible").length) {
                        $this.parent("li").removeClass("active");
                        $this.siblings("ul").slideUp();
                        $this.parent("li").find("li").removeClass("active");
                        $this.parent("li").find("ul:visible").slideUp();
                    } else {
                        $this.parent("li").addClass("active");
                        $this.closest("li").siblings("li").removeClass("active").find("li").removeClass("active");
                        $this.closest("li").siblings("li").find("ul:visible").slideUp();
                        $this.siblings("ul").slideDown();
                    }
                }
            });
        }
        mobileOffCanvasMenu();
    })(jQuery);
</script>