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
                <h3 class="sec-title title-anim">Read Updated <br>Journal</h3>
                <p>
                  Read our blog and try to see everything from every perspective.
                  Our passion lies in making everything accessible and aesthetic for everyone.
                </p>
              </div>
            </div>
          </div>

          <!-- ✅ Dynamic Blogs Will Load Here -->
          <div class="row" id="blog-list">
            <!-- JS will inject blog cards -->
          </div>

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

<!-- ✅ Blog Fetch Script -->
<script>
document.addEventListener("DOMContentLoaded", function () {

  const blogContainer = document.getElementById("blog-list");

  const myHeaders = new Headers();
  myHeaders.append("Accept", "application/json");
  myHeaders.append("Origin", "https://designmasters.in");

  fetch(
    "https://hbapi.hbsoftweb.com/api/frontend/blogs?token=cf725a5ba7b2b3adc3f64ba16d2b2730c872af09ea3595dbb34893b2bd55b9c2",
    {
      method: "GET",
      headers: myHeaders
    }
  )
  .then(response => response.json())
  .then(res => {

    if (!res || !res.data || res.data.length === 0) {
      blogContainer.innerHTML = "<p>No blogs found.</p>";
      return;
    }

    res.data.forEach(blog => {

      const blogHTML = `
        <div class="col-xxl-6 col-xl-6 col-lg-6">
          <article class="blog__item-3">
            <div class="blog__img-wrapper-3">
              <a href="blog-details.php?slug=${blog.slug}">
                <div class="img-box">
                  <img class="image-box__item" src="${blog.image}" alt="${blog.title}">
                  <img class="image-box__item" src="${blog.image}" alt="${blog.title}">
                </div>
              </a>
            </div>

            <div class="blog__info-3">
              <h4 class="blog__meta">
                <a href="#">${blog.category_name ?? "Blog"}</a> · ${blog.publish_date}
              </h4>

              <h5>
                <a href="blog-details.php?slug=${blog.slug}" class="blog__title-3">
                  ${blog.title}
                </a>
              </h5>

              <a href="blog-details.php?slug=${blog.slug}" class="blog__btn">
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
  .catch(error => {
    console.error("Blog Fetch Error:", error);
    blogContainer.innerHTML = "<p>Unable to load blogs at the moment.</p>";
  });

});
</script>