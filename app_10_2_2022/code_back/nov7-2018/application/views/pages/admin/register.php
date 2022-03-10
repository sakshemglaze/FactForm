
<div class="content-wrapper">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register a Client</div>
      <div class="card-body">
        <form id="registerForm">
          <div class="form-group">
            <label for="">Email</label>
            <input class="form-control" type="email" placeholder="Email" name="email">
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input class="form-control" id="password" type="password" placeholder="Password" name="password">
          </div>
          <div class="form-group">
            <label for="">Confirm password</label>
            <input class="form-control" type="password" placeholder="Confirm password" name="cpassword">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Register</button>
        </form>
      </div><!--/.card-body-->
    </div><!--/.card .card-register .mx-auto .mt-5-->
  </div><!--/.container-->

  <script>
    $(document).ready(function(){
      $("#registerForm").submit(function(event) {
          event.preventDefault();
      }).validate({
          rules: {
            email: "required",
            name: "required",
            password: {
              required: true,
              pwcheck: true
            },
            phone: {
              required: true,
              minlength: 10,
              maxlength: 10
            },
            cpassword: {
              required: true, 
              equalTo: '#password' 
            }
          },
          messages: {
            password: "(Minimum 1 Uppercase, 1 Lowercase, a special character, 1 digit)"
          },
          submitHandler: function(form) { 
            
              $.ajax({
                url:'<?php echo base_url(); ?>add/clientRegistration',
                type: 'POST',
                data: $('#registerForm').serialize(),
                dataType:'json',
                success:function(as){
                  if(as.status == true){
                    alert(as.message);
                    location.reload();
                  }
                  else if(!as.status){
                    alert("Error Occured while adding client. Please try again !!");
                  }
                }
              });
          }
      });

      $.validator.addMethod("pwcheck", function(value) {
        return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
            && /[a-z]/.test(value) // has a lowercase letter
            && /\d/.test(value) // has a digit
            && /[A-Z]/.test(value)
      });
    });
  </script>
 


