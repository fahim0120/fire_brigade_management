				</div>
			</div>
		</div>
	</div>
</div>

   <script src="<?php echo site_url('assets/jquery/jquery.min.js');?>"></script>
<!--   <script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/1.3.1/lodash.min.js"></script> -->
   <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
   <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>

 <script>
  $(document).ready(function() {


    var disSelect = $('#district');
    disSelect.change(function() {
      console.log('ok');
      var districtName = "";
      districtName += $("select option:selected").html();
      var request = $.ajax({
        url: "http://localhost/ci/license/get_all_thana",
        type: "GET",
        data: { district : districtName },
        dataType : "html"
      });

      request.done(function(response){
        //$("#district").html(response);
        $('#thana').html(response);
      });
    });
  });

</script>
</body>
</html>
