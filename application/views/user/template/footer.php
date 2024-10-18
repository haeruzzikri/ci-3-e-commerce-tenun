<div class="footer">
    <div class="container">
        <div class="w3_footer_grids">
            <div class="col-md-4 w3_footer_grid">
                <h3>Hubungi Kami</h3>

                <ul class="address">
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Pringgasela Corp, Lombok Timur.</li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@email">TenunPringgasela@gmail.com</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a href="https://api.whatsapp.com/send?phone=087743329301&text=ANDA_BISA_BERKOMUNIKASI_DENGAN_ADMIN_MELALUI_WHATSAPP">(+62877) 4332 9301</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>Tentang Kami</h3>
                <ul class="info">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="<?= base_url(); ?>Tentang">Tentang Kami</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="about.html">Cara Berbelanja</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="footer-copy">

        <div class="container">
            <p>© 2022 Tenun Pringgasela. All rights reserved</p>
        </div>
    </div>

</div>
<div class="footer-botm">
    <div class="container">
        <div class="w3layouts-foot">
            <ul>
                <li><a href="https://www.instagram.com/__jikri/" class="w3_agile_instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="https://www.facebook.com/IBI.Jikriz/" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://www.twitter.com/_dzikir/" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="payment-w3ls">
            <img src="<?= base_url(); ?>assets/images/card.png" alt=" " class="img-responsive">
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<script src="<?= base_url(); ?>assets/user/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        var defaults = {
            containerID: 'toTop',
            containerHoverID: 'toTopHover',
            scrollSpeed: 4000,
            easingType: 'linear'
        };


        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<script src="<?= base_url(); ?>assets/user/js/skdslider.min.js"></script>
<link href="<?= base_url(); ?>assets/user/css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#demo1').skdslider({
            'delay': 5000,
            'animationSpeed': 2000,
            'showNextPrev': true,
            'showPlayButton': true,
            'autoSlide': true,
            'animationType': 'fading'
        });

        jQuery('#responsive').change(function() {
            $('#responsive_wrapper').width(jQuery(this).val());
        });

    });
</script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<!-- <script>
    $('.quantity').on('click', function(e) {
        e.preventDefault()
        var jumlah = $('[name=jumlah]').val();
        var id = $('[name=id]').val();

        console.log(id);

        $.ajax({
            type: "POST",
            url: "<?= base_url(); ?>Keranjang/update_keranjang",
            data: {
                jumlah: jumlah,
                id: id
            },
            success: function(data) {
                document.location.href = "<?= base_url(); ?>Keranjang/update_keranjang"
            }
        })
    })
</script> -->
<!-- <script>
    function update_jumlah() {
        let jumlah = {
            jml: parseInt($("#jumlah").val())
        };
        let harga = {
            hrg: parseInt($("#harga").val())
        };

        let total_harga = {}
        let harga_satuan = {}

        harga_satuan = ($("#harga").val() * $("#jumlah").val())
        total_harga = (harga_satuan)
        console.log(total_harga);
    }
    $(function() {
        $(".rate").on("change keyup", update_jumlah)
    })
</script> -->
</body>

</html>