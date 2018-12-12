    </body>
	<script src="<?= base_url()?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="<?php echo base_url();?>assetsadmin/js/plugins.js"></script>
    <script src="<?php echo base_url();?>assetsadmin/js/main.js"></script>
    <script src="<?php echo base_url();?>assetsadmin/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="<?php echo base_url();?>assetsadmin/js/dashboard.js"></script>
    <script src="<?php echo base_url();?>assetsadmin/js/widgets.js"></script>
    <script src="<?php echo base_url();?>assetsadmin/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="<?php echo base_url();?>assetsadmin/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url();?>assetsadmin/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="<?php echo base_url();?>assetsadmin/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>
</html>