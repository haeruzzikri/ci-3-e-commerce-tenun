<footer>
    <div class="footer-area">
        <p>Pringgasela Corp</p>
    </div>
</footer>
<!-- footer area end-->
<script>
    $(document).ready(function() {
        $('#dataTable3').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'print'
            ]
        });
    });
</script>
<!-- page container area end -->

<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>

<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
<script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
</script>

<!-- jquery latest version -->
<script src="<?= base_url(); ?>assets/admin/js/vendor/jquery-2.2.4.min.js"></script>
<!-- bootstrap 4 js -->
<script src="<?= base_url(); ?>assets/admin/js/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/owl.carousel.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/metisMenu.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/jquery.slimscroll.min.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/jquery.slicknav.min.js"></script>

<!-- start chart js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<!-- start highcharts js -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<!-- start zingchart js -->
<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
<script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
</script>
<!-- all line chart activation -->
<script src="<?= base_url(); ?>assets/admin/js/line-chart.js"></script>
<!-- all pie chart -->
<script src="<?= base_url(); ?>assets/admin/js/pie-chart.js"></script>
<!-- others plugins -->
<script src="<?= base_url(); ?>assets/admin/js/plugins.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/scripts.js"></script>
</body>

</html>