<?php
section('contentAuth');

?>
<section>
    <div class="page-header min-vh-100">
      <div class="container mt-5">
        <div class="row">
         <div class= "col-12 my-4"></div>
          <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h4 class="font-weight-bolder">Sign up</h4>
                <p class="mb-0">Enter your email and password to sign up</p>
              </div>
              <div class="card-body">
  <form id="registerForm" role="form" action="" method="POST">

    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
        <div class="form-group">
          <label for="first_name">First Name</label>
          <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" aria-describedby="first_name-addon">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
        <div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" aria-describedby="last_name-addon">
        </div>
      </div>
    </div>

    <div class="mb-3">
      <div class="form-group">
        <label for="phone_number">Phone Number</label>
        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number">

      </div>
    </div>

    <div class="mb-3">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
      </div>
    </div>

    <div class="mb-3">
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
      </div>
    </div>

    <div class="form-check form-switch mb-3">
      <input class="form-check-input" type="checkbox" id="rememberMe">
      <label class="form-check-label" for="rememberMe">Remember me</label>
    </div>

    <div class="text-center">
      <button type="submit" class="btn btn-lg bg-gradient-primary w-100 mt-4 mb-0">Sign Up</button>
    </div>

  </form>
</div>

              </div>
              <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <p class="mb-4 text-sm mx-auto">
                  Already have an account?
                  <a href="<?php echo url('login'); ?>", " class="text-primary text-gradient font-weight-bold">Sign in</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
              <img src="assets/img/shapes/pattern-lines.svg" alt="pattern-lines" class="position-absolute opacity-4 start-0">
              <div class="position-relative">
                <img class="max-width-500 w-100 position-relative z-index-2" src="assets/img/illustrations/chat.png">
              </div>
              <h4 class="mt-5 text-white font-weight-bolder">"Attention is the new currency"</h4>
              <p class="text-white">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
endsection();
pushScript ("scripts");
?>
<script>
    $(document).ready(function () {
      
        //form submit
        $("#registerForm").submit(function (e) { 
          //prevent from reloading the page
            e.preventDefault();
            //do this 
            var form = $(this);           
           
            //submit to server
            $.ajax({
                type: "POST",
                url: "<?php echo url('/register-user'); ?>",
                data: form.serialize(),
                dataType: "json",
                beforeSend: function() {
                    //show animation
                     //block form 
            form.block({
                message: '<div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>',
                css: {
                    border: 0,
                    padding: 0,
                    backgroundColor: 'none'
                },
                overlayCSS: {
                    backgroundColor: '#fff',
                    opacity: 0.8,
                    cursor: 'wait'
                }
            });
                },
                success: function (response) {
                    //show response from server
                    //unblock form
                    form.unblock();
                    //check if response code is 200
                    if (response.code == 200) {
                      //clear form
                        form[0].reset();
                        //show success message
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.message,
                            showConfirmButton: true,
                            confirmButtonText: 'login'
                        }).then((result) => {
                          //if user click on confirm button
                            if (result.isConfirmed) {
                                window.location.href = "<?php echo url('login'); ?>";
                            }
                        });
                    } else {
                        //show error message
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: response.message,
                            showConfirmButton: true,
                            //confirm button text
                            confirmButtonText: 'try again'
                        });
                    }
                }
            });
        });
    });
</script>

<?php

use App\Core\Model;

endPushScript();
extend('auth/layout/app', 'contentAuth');