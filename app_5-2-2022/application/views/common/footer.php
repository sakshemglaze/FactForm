    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo base_url(); ?>user/logout">Logout</a>
          </div>
        </div>
      </div>
    </div>
    

    <script>  
    //==========Hide - Show Form ===========
        
      $(".single").click(function() {
        if($(this).is(":checked")) {

          var clientType = "type=single";
          $.ajax({
              url:'<?php echo base_url(); ?>add/createForm',
              type:'POST',
              data: clientType,
              dataType: 'json',
              success:function(as){

                  if(as.status){
                    // $(".form-section").show(function(){
                    //   $(".table td").css("width","70%");
                    //   $(".table th").css("width","70%");
                    // });
                    // $(".hide-col").hide();
                    // $(".question").hide();
                    location.href="<?php echo base_url(); ?>admin/personal-detail/"+as.data;
                  }
                  else{
                    alert("Problem occured while saving");
                  }

              }
          });
         
        } //else {
          //$(".form-section").hide();
          //$(".hide-col").show();
        //}
      });

      $(".double").click(function() {
        if($(this).is(":checked")) {

          var clientType = "type=double";
          $.ajax({
              url:'<?php echo base_url(); ?>add/createForm',
              type:'POST',
              data: clientType,
              dataType: 'json',
              success:function(as){

                  if(as.status){
                    // $(".form-section").show();
                    // $(".question").hide();
                    location.href="<?php echo base_url(); ?>admin/personal-detail/"+as.data;
                  }
                  else{
                    alert("Problem occured while saving");
                  }

              }
          });
        } //else {
          //$(".form-section").hide();
        //}
      });
    </script>
  </div>
</body>

</html>