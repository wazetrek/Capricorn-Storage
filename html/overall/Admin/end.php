<script src="View/js/jquery.js"></script>
	<script src="View/js/jquery-ui-1.10.4.min.js"></script>
    <script type="text/javascript" src="View/js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="View/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="View/js/scroll/jquery.scrollTo.min.js"></script>
    <script src="View/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="View/assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="View/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="View/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="View/js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="View/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="View/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="View/js/calendar-custom.js"></script>
	<script src="View/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="View/js/jquery.customSelect.min.js" ></script>
	<script src="View/assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="View/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="View/js/sparkline-chart.js"></script>
    <script src="View/js/easy-pie-chart.js"></script>
	<script src="View/js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="View/js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="View/js/xcharts.min.js"></script>
	<script src="View/js/jquery.autosize.min.js"></script>
	<script src="View/js/jquery.placeholder.min.js"></script>
	<script src="View/js/gdp-data.js"></script>
	<script src="View/js/morris.min.js"></script>
	<script src="View/js/sparklines.js"></script>
	<script src="View/js/charts.js"></script>
	<script src="View/js/jquery.slimscroll.min.js"></script>
	<script type="text/javascript"src="View/js/admin/preview.js"></script>

	<!-- script Validaciones -->
	<script type="text/javascript" src="View/js/admin/validarCampos.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});

  </script>

  </body>
</html>
