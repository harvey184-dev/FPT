</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src="assets/vendors/jquery/dist/jquery.min.js"></script>
<script src="assets/vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>

<script src="assets/vendors/chart.js/dist/Chart.bundle.min.js"></script>
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/widgets.js"></script>
<script src="assets/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<script src="assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>

<!-- Script Table Data  -->
<script src="assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="assets/vendors/jszip/dist/jszip.min.js"></script>
<script src="assets/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="assets/vendors/pdfmake/build/vfs_fonts.js"></script>
<script src="assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="assets/js/init-scripts/data-table/datatables-init.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<script>
    (function($) {
        "use strict";
        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
</script>
<?php
$chartMonth04 = getChartByMonth(04);
$chartMonth05 = getChartByMonth(05);
$chartMonth06 = getChartByMonth(06);
?>
<script>
    new Morris.Area({
        // ID of the element in which to draw the chart.
        element: 'chart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [{
                year: '2024-04',
                orders: <?= $chartMonth04['total_orders'] ?>,
                sales: <?= $chartMonth04['total_prices'] ?>
            },
            {
                year: '2024-05',
                orders: <?= $chartMonth05['total_orders'] ?>,
                sales: <?= $chartMonth05['total_prices'] ?>
            },
            {
                year: '2024-06',
                orders: <?= $chartMonth06['total_orders'] ?>,
                sales: <?= $chartMonth06['total_prices'] ?>
            }
        ],
        // The name of the data record attribute that contains x-values.
        xkey: 'year',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['orders', 'sales'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Đơn hàng', 'Doanh thu']
    });
</script>
</body>

</html>