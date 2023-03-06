<div id="bg">
    <h2>Noir</h2>
    <p>it's not just a color, it's a lifestyle</p>
</div>

</div>

<!-- Our Collection -->

<section class="our-collection">
    <h3>Our Collection</h3>
    <div class="xop-section">
        <ul class="xop-grid">
            <li>
                <a href="<?= base_url('bahan/kategori') ?>">
                    <div class="xop-box xop-img-1">
                        <a class="xop-info" href="<?= base_url('bahan/kategori') ?>">
                            <h3>Clothing</h3>
                        </a>
                    </div>
                </a>
            </li>
            <li>
                <div class="xop-box xop-img-2">
                    <a class="xop-info" href="#">
                        <h3>Leather</h3>
                    </a>
                </div>
            </li>
            <li>
                <div class="xop-box xop-img-3">
                    <a class="xop-info" href="#">
                        <h3>Accessories</h3>
                    </a>
                </div>
            </li>
            <li>
                <div class="xop-box xop-img-4">
                    <a class="xop-info" href="#">
                        <h3>Others</h3>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</section>

<script type="text/javascript">
    // Menu Toggle Button
    $(document).ready(function() {
        $(".menu-icon").on("click", function() {
            $("nav ul").toggleClass("showing");
        });
    });

    // Scrolling Effect
    $(window).on("scroll", function() {
        if ($(window).scrollTop()) {
            $('nav').addClass('black');
        } else {
            $('nav').removeClass('black');
        }
    });

    // Parallax Header
    var headerBg = document.getElementById('bg')
    window.addEventListener('scroll', function() {
        headerBg.style.opacity = 1 - +window.pageYOffset / 550 + ''
    })
</script>

</body>

</html>