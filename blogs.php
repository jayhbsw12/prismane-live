<?php include("header-top.php"); ?>
<meta name="robots" content="noindex,nofollow">
<?php include("header.php"); ?>

<div id="smooth-wrapper">
  <div id="smooth-content">
    <main>

      <!-- Blog area start -->
      <section class="blog__area-3 blog-v3 blog__animation">
        <div class="container line">
          <div class="line-3"></div>

          <div class="row">
            <div class="col-xxl-12">
              <div class="sec-title-wrapper text-anim pt-130">
                <h2 class="sec-sub-title">Recent Blog</h2>
                <h3 class="sec-title title-anim">
                  Read Updated <br>Journal
                </h3>
                <p>
                  Read our blog and try to see everything from every perspective.
                  Our passion lies in making everything accessible and aesthetic for everyone.
                </p>
              </div>
            </div>
          </div>

          <!-- Dynamic Blogs -->
          <div class="row" id="blog-list"></div>

        </div>
      </section>
      <!-- Blog area end -->

      <!-- CTA area start -->
      <section class="cta__area">
        <div class="container line pb-110">
          <div class="line-3"></div>
          <div class="row">
            <div class="col-xxl-12">
              <div class="cta__content">
                <p class="cta__sub-title">Work with us</p>
                <h2 class="cta__title title-anim">
                  We would love to hear more about your project
                </h2>
                <div class="btn_wrapper">
                  <a href="contact.html" class="wc-btn-primary btn-item btn-hover">
                    <span></span>Let’s talk us <i class="fa-solid fa-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- CTA area end -->

    </main>

    <?php include("footer.php"); ?>
  </div>
</div>

<!-- ================= BLOG FETCH SCRIPT ================= -->
<script>
  document.addEventListener("DOMContentLoaded", function () {

    const blogContainer = document.getElementById("blog-list");

    const headers = new Headers();
    headers.append("Accept", "application/json");
    headers.append("Origin", "https://designmasters.in");

    fetch(
      "https://hbapi.hbsoftweb.com/api/frontend/blogs?token=cf725a5ba7b2b3adc3f64ba16d2b2730c872af09ea3595dbb34893b2bd55b9c2",
      { method: "GET", headers }
    )
      .then(res => res.json())
      .then(res => {

        if (!res.isSuccessfull || !Array.isArray(res.data) || !res.data.length) {
          blogContainer.innerHTML = "<p>No blogs found.</p>";
          return;
        }

        blogContainer.innerHTML = "";

        res.data.forEach(blog => {

          const category = Array.isArray(blog.categoryNames) && blog.categoryNames.length
            ? blog.categoryNames.join(", ")
            : "Blog";

          const blogHTML = `
        <div class="col-xxl-6 col-xl-6 col-lg-6">
          <article class="blog__item-3">
            <div class="blog__img-wrapper-3">
              <a href="./${blog.blogUrl}">
                <div class="img-box">
                  <img class="image-box__item"
                       src="${blog.blogImage}"
                       alt="${blog.blogTitle}"
                       loading="lazy">
                  <img class="image-box__item"
                       src="${blog.blogImage}"
                       alt="${blog.blogTitle}"
                       loading="lazy">
                </div>
              </a>
            </div>

            <div class="blog__info-3">
              <h4 class="blog__meta">
                <a href="#">${category}</a> · ${blog.publishDate}
              </h4>

              <h5>
                <a href="./${blog.blogUrl}" class="blog__title-3">
                  ${blog.blogTitle}
                </a>
              </h5>

              <a href="./${blog.blogUrl}" class="blog__btn">
                Read More
                <span><i class="fa-solid fa-arrow-right"></i></span>
              </a>
            </div>
          </article>
        </div>
      `;

          blogContainer.insertAdjacentHTML("beforeend", blogHTML);
        });

      })
      .catch(err => {
        console.error("Blog Fetch Error:", err);
        blogContainer.innerHTML = "<p>Unable to load blogs at the moment.</p>";
      });

  });
</script>