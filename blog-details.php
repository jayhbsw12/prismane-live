<?php include("header-top.php"); ?>
<meta name="robots" content="noindex,nofollow">
<?php include("header.php"); ?>

<!-- Disable Smooth Scroll for Blog Detail Page -->
<script>
    window.disableSmoothScroll = true;
</script>

<?php
$slug = $_GET['slug'] ?? '';
if (!$slug) {
    echo "Invalid blog";
    exit;
}
?>

<div id="smooth-wrapper">
    <div id="smooth-content">
        <main>

            <!-- Blog detail start -->
            <section class="blog__detail">
                <div class="container g-0 line pt-140">
                    <span class="line-3"></span>

                    <div class="blog-detail-main-row">

                        <!-- TOC -->
                        <div class="blog-detail-toc-holder">
                            <div class="blog-detail-toc-wrapper p-3 d-flex flex-column">
                                <span class="fs-3 text-light">Table of contents</span>
                                <hr class="prismane-hr-blog">
                                <div class="d-flex flex-column mt-3" id="blog-toc"></div>
                            </div>
                        </div>

                        <!-- CONTENT -->
                        <div class="blog-detail-content-holder">

                            <div class="col-xxl-12 col-xl-12">
                                <div class="blog__detail-top">
                                    <h2 class="blog__detail-date animation__word_come"></h2>
                                    <h3 class="blog__detail-title animation__word_come"></h3>

                                    <div class="blog__detail-metalist">
                                        <div class="blog__detail-meta">
                                            <img src="assets/imgs/blog/detail/author.png" alt="Author Picture">
                                            <p>Written by <span id="blog-author"></span></p>
                                        </div>
                                        <div class="blog__detail-meta">
                                            <p>Read Time <span id="read-time"></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-12">
                                <div class="blog__detail-thumb">
                                    <img id="blog-image" src="" alt="Blog Thumbnail" data-speed="0.5">
                                </div>
                            </div>

                            <div class="col-xxl-8 col-xl-10 offset-xxl-1 offset-xl-1">
                                <div class="blog__detail-content" id="blog-content"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog detail end -->

            <!-- CTA -->
            <section class="cta__area">
                <div class="container line pb-110">
                    <div class="line-3"></div>
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="cta__content">
                                <p class="cta__sub-title">Work with us</p>
                                <h2 class="cta__title title-anim">We would love to hear more about your project</h2>
                                <div class="btn_wrapper">
                                    <a href="connect.php" class="wc-btn-primary btn-item btn-hover">
                                        <span></span>Let’s talk us <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <?php include("footer.php"); ?>
    </div>
</div>

<!-- ================= SCRIPT ================= -->
<script>
    document.addEventListener("DOMContentLoaded", function () {

        const slug = "<?php echo htmlspecialchars($slug); ?>";

        const headers = new Headers();
        headers.append("Accept", "application/json");
        headers.append("Origin", "https://designmasters.in");

        fetch(
            `https://hbapi.hbsoftweb.com/api/frontend/blog-by-url?blogUrl=${slug}&token=cf725a5ba7b2b3adc3f64ba16d2b2730c872af09ea3595dbb34893b2bd55b9c2`,
            { method: "GET", headers }
        )
            .then(res => res.json())
            .then(res => {

                if (!res.isSuccessfull || !res.data) return;

                const blog = res.data;

                /* ===== TOP META ===== */
                document.querySelector(".blog__detail-title").textContent = blog.blogTitle;
                document.querySelector(".blog__detail-date").textContent = blog.categoryNames.join(", ");
                document.getElementById("blog-author").textContent = blog.authorName;
                document.getElementById("blog-image").src = blog.blogImage;

                /* ===== CONTENT + TOC ===== */
                const content = document.getElementById("blog-content");
                const toc = document.getElementById("blog-toc");

                content.innerHTML = "";
                toc.innerHTML = "";

                let tocIndex = 1;
                let textForReadTime = "";

                blog.sections.forEach(section => {

                    if (section.sectionTitle.toLowerCase().includes("faq")) {
                        renderFAQ(section.description);
                        return;
                    }

                    const sectionId = section.sectionTitle.trim().toLowerCase().replace(/\s+/g, "-");

                    toc.insertAdjacentHTML("beforeend", `
        <a href="#${sectionId}" class="toc-item text-light fs-6 pb-3">
          ${tocIndex}. ${section.sectionTitle}
        </a>
      `);

                    content.insertAdjacentHTML("beforeend", `
        <section id="${sectionId}">
          <${section.titleTag}>${section.sectionTitle}</${section.titleTag}>
          ${section.description}
        </section>
      `);

                    textForReadTime += section.description.replace(/<[^>]*>/g, " ");
                    tocIndex++;
                });

                if (!toc.children.length) {
                    document.querySelector(".blog-detail-toc-holder").style.display = "none";
                }

                /* ===== READ TIME ===== */
                const words = textForReadTime.trim().split(/\s+/).length;
                const minutes = Math.max(1, Math.ceil(words / 200));
                document.getElementById("read-time").textContent = `${minutes} Minutes`;

            });

        /* ===== FAQ ACCORDION ===== */
        function renderFAQ(encodedHTML) {

            const wrapper = document.createElement("section");
            wrapper.className = "faq-wrapper mt-5";

            wrapper.innerHTML = `
      <h2>Frequently Asked Questions</h2>
      <div class="faq-accordion"></div>
    `;

            const container = wrapper.querySelector(".faq-accordion");

            const decoded = encodedHTML
                .replace(/&lt;/g, "<")
                .replace(/&gt;/g, ">");

            const temp = document.createElement("div");
            temp.innerHTML = decoded;

            temp.querySelectorAll("details").forEach((item, index) => {
                const summary = item.querySelector("summary")?.innerText || "";
                const answer = item.querySelector(".answer")?.innerHTML || "";

                container.insertAdjacentHTML("beforeend", `
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            ${summary}
          </button>
          <div class="faq-answer">
            ${answer}
          </div>
        </div>
      `);
            });

            document.getElementById("blog-content").appendChild(wrapper);

            document.querySelectorAll(".faq-question").forEach(btn => {
                btn.addEventListener("click", () => {
                    const expanded = btn.getAttribute("aria-expanded") === "true";
                    btn.setAttribute("aria-expanded", !expanded);
                    btn.nextElementSibling.style.display = expanded ? "none" : "block";
                });
            });
        }

    });
</script>

<!-- FAQ BASIC STYLING (SAFE, OVERRIDABLE) -->
<style>
    .faq-item {
        border-bottom: 1px solid #333;
        padding: 15px 0;
    }

    .faq-question {
        width: 100%;
        background: none;
        border: none;
        /* color: #fff; */
        font-size: 18px;
        text-align: left;
        cursor: pointer;
    }

    .faq-answer {
        display: none;
        padding-top: 10px;
        color: #ccc;
    }
</style>