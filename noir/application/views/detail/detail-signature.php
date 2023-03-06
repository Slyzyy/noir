<div class="title">
    <h2>Signature Hoodie</h2>
</div>



<div class="container">
    <ul class="thumb">
        <li><a href="<?= base_url('assets/img/detail/signature-hoodie/signature1.jpg') ?>" target="imgBox"><img src="<?= base_url('assets/img/detail/signature-hoodie/signature-thumb1.jpg') ?>" alt=""></a></li>
        <li><a href="<?= base_url('assets/img/detail/signature-hoodie/signature2.jpg') ?>" target="imgBox"><img src="<?= base_url('assets/img/detail/signature-hoodie/signature-thumb2.jpg') ?>" alt=""></a></li>
        <li><a href="<?= base_url('assets/img/detail/signature-hoodie/signature3.jpg') ?>" target="imgBox"><img src="<?= base_url('assets/img/detail/signature-hoodie/signature-thumb3.jpg') ?>" alt=""></a></li>
        <li><a href="<?= base_url('assets/img/detail/signature-hoodie/signature4.jpg') ?>" target="imgBox"><img src="<?= base_url('assets/img/detail/signature-hoodie/signature-thumb4.jpg') ?>" alt=""></a></li>
    </ul>
    <div class="imgBox"><img src="<?= base_url('assets/img/detail/signature-hoodie/signature1.jpg') ?>" alt=""></div>
</div>

<div class="price">
    <h2>IDR : 1.850.000</h2>
    <?php foreach ($clothing as $clth) : ?>
        <?= anchor('dashboard/tambah_ke_keranjang_clothing/' . $clth->id_brg, '<button type="button" class="button">Add To Cart</button>'); ?>
    <?php endforeach; ?>
</div>

<div class="content">
    <h2>Description</h2>
    <p> the 'Signature Blvck Hoodie' features a limited Blvck branded hood drawstring with a striking BLVCK logo across the left arm. It's perfect for a casual, laidback look.<br><br>Made from luxurious 100% Terry Cotton, all our hoodies are super soft to the touch and perfect for everyday wear.<br><br>Unisex fit. Fits regular size.</p>
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