<div class="jaikvikModal">
    <div class="jaikvikModal-content">
        <div class="enquiryContent">
            <h3>Get a Quote</h3>
            <div class="jaikvikModal-close-btn"><i class="fa-regular fa-circle-xmark"></i></div>
        </div>
        <form action="enquriy-mail.php" method="post">
            <div class="row g-lg-3 g-md-3 gy-3">
                <div class="col-lg-6">
                    <div class="input-contain">
                        <input type="text" name="fname" required placeholder=" " autocomplete="off">
                        <label class="placeholder-text" for="fname">Full Name</label>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="input-contain">
                        <input type="text" name="phone" required placeholder=" " autocomplete="off">
                        <label class="placeholder-text" for="phone">Phone Number</label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="input-contain">
                        <input type="email" name="email" required placeholder=" " autocomplete="off">
                        <label class="placeholder-text" for="email">Email Address</label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="input-contain">
                        <input type="text" name="cname" required placeholder=" " autocomplete="off">
                        <label class="placeholder-text" for="email">Company Name</label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="input-contain">
                        <input type="text" name="subject" required placeholder=" " autocomplete="off">
                        <label class="placeholder-text" for="subject">Your Subject</label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div>
                        <textarea name="msg" rows="3" placeholder="Your Message" required autocomplete="off"></textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <button type="submit">Send Message</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
const jaikvikModal = document.querySelector(".jaikvikModal");
const openJaikvikModalBtns = document.querySelectorAll(".openJaikvikModalBtn");
const closeJaikvikModalBtn = document.querySelector(".jaikvikModal-close-btn");

openJaikvikModalBtns.forEach(button => {
    button.addEventListener("click", () => {
        jaikvikModal.classList.add("show");
    });
});

closeJaikvikModalBtn.addEventListener("click", () => {
    jaikvikModal.classList.remove("show");
});

window.addEventListener("click", (e) => {
    if (e.target === jaikvikModal) {
        jaikvikModal.classList.remove("show");
    }
});
</script>
