<div class="title">
    <h2>Phanter Sweater</h2>
</div>



<div class="container">
    <ul class="thumb">
        <li><a href="<?= base_url('assets/img/detail/phanter-sweater/phanter1.jpg') ?>" target="imgBox"><img src="<?= base_url('assets/img/detail/phanter-sweater/phanter-thumb1.jpg') ?>" alt=""></a></li>
        <li><a href="<?= base_url('assets/img/detail/phanter-sweater/phanter2.jpg') ?>" target="imgBox"><img src="<?= base_url('assets/img/detail/phanter-sweater/phanter-thumb2.jpg') ?>" alt=""></a></li>
        <li><a href="<?= base_url('assets/img/detail/phanter-sweater/phanter3.jpg') ?>" target="imgBox"><img src="<?= base_url('assets/img/detail/phanter-sweater/phanter-thumb3.jpg') ?>" alt=""></a></li>
        <li><a href="<?= base_url('assets/img/detail/phanter-sweater/phanter4.jpg') ?>" target="imgBox"><img src="<?= base_url('assets/img/detail/phanter-sweater/phanter-thumb4.jpg') ?>" alt=""></a></li>
    </ul>
    <div class="imgBox"><img src="<?= base_url('assets/img/detail/phanter-sweater/phanter1.jpg') ?>" alt=""></div>
</div>

<div class="price">
    <h2>IDR : 1.450.000</h2>
    <?php foreach ($clothing as $clth) :
        if ($clth->id_brg == 1) {
        }
    ?>
        <?= anchor('dashboard/tambah_ke_keranjang_clothing/' . $clth->id_brg, '<button type="button" class="button">Add To Cart</button>'); ?>
    <?php endforeach; ?>
</div>

<div class="content">
    <h2>Description</h2>
    <p> the 'Blvck Panther Sweater' features a one-of-a-kind look with a 'Panther Illustration' embroidered on the front.<br><br>Made from ultra-soft 100% Terry Cotton, this limited edition sweater keeps you warm and stylish all day long.<br><br>Limited supply.<br><br>Unisex fit. Fits regular size.</p>
</div>

<div class="shipping-return">
    <h2>Shipping and Return</h2>
    <p>At Noir, we offer worldwide shipping for all customers. Domestic orders ship with UPS, FedEx, USPS or DHL. Orders within the US are eligible for complimentary free shipping > $100. International orders ship with DHL or UPS.<br><br>Returns are eligible for refund if a return authorisation request is made within 14 days of your original purchase. Please visit: Refund Policy</p>
</div>


</body>

<script type="text/javascript">
    $(window).on('scroll', function() {
        if ($(window).scrollTop()) {
            $('nav').addClass('black');
        } else {
            $('nav').removeClass('black');
        }
    })

    $(document).ready(function() {
        $('.thumb a').mouseover(function(e) {
            e.preventDefault();
            $('.imgBox img').attr("src", $(this).attr("href"));
        })
    })
</script>

</html>