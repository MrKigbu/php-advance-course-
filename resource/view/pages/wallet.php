<?php
section('contentDashboard');
?>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm">
              <a class="opacity-3 text-dark" href="javascript:;">
                <svg width="12px" height="12px" class="mb-1" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>shop </title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1716.000000, -439.000000)" fill="#252f40" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(0.000000, 148.000000)">
                          <path d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                          <path d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </a>
            </li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Wallet</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Wallet</h6>
        </nav>
        
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="search" id="site-search" name="q" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
           
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
                <?php
    ade_include('pages/layout/topbar');
    ?>
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->      
        
      <div class ="container-fluid py-4">
    <!--wallet content here-->     
    <div class="row justify-content-center  mb-5" >
        <div class="col-6">
            <div class="card card-background card-background-mask-info h-100 tilt" data-tilt="" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                <div class="full-background" style="background-image: url('<?php echo assets('assets_admin/img/curved-images/white-curved.jpeg'); ?>"></div>
                <div class="card-body pt-4 text-center">
                  <h2 class="text-white mb-0 mt-2 up">Wallet Balance</h2>
                  <h1 class="text-white mb-0 up">$25,800</h1>
                  <span class="badge badge-lg d-block bg-gradient-dark mb-2 up">
                    Add more funds to your wallet
                  </span>                  
                </div>
              </div>
        </div>  
        <div class="text-center  mt-3 mb-3">
          <a href="javascript:;" class="btn bg-gradient-dark mb-2 px-5 up"
          onclick="loadModal()">Add Funds</a>
          
    </div>
      <?php
    ade_include('pages/layout/footer_text');
    ?>
     
    </div>
  </main>
<!-- Modal -->
<div class="modal fade" id="addFundWallet" tabindex="-1" aria-labelledby="addFundWalletLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addFundWalletLabel"> Fund Wallet </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post" id="addFund">
        <div class="form-group mb-4">
          <label for="amount">Enter amount</label>
            <input type="number" name="amount" id="amount" class="form-control" placeholder="Enter Amount">
          </div>

        <div class="form-group">
          <button type="submit" class="btn bg-gradient-primary w-100" >Add Funds</button>
        </div>
       </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>


<?php

endsection();
pushScript("scripts");

?>
<script src="https://checkout.flutterwave.com/v3.js"></script>
<script>
  let loadModal = () => {
    //do something...
    $('#addFundWallet').modal('show');
  }


   function makePayment(amount = 1000) {
	FlutterwaveCheckout({
		public_key: 'FLWPUBK_TEST-024eca5b01b91a28822c0e1f312ce43f-X',
		tx_ref: "<?php echo time(); ?>",
		amount: amount,
		currency: 'NGN',
		payment_options: 'card, mobilemoneyghana, ussd',
		

		customer: {
			email: "<?php echo htmlentities(auth()->getEmail())?>",
			phone_number:  "<?php echo htmlentities(auth()->getPhone())?>",
			name:  "<?php echo htmlentities(auth()->getFirstName())?>",
		},    
    meta: {
      tokenization: true
    },
		customizations: {
			title: 'Add fund',
			description: 'Fund your wallet',
			logo: 'https://www.logolynx.com/images/logolynx/22/2239ca38f5505fbfce7e55bbc0604386.jpeg',
		},
      callback: function(payment) {
       
        //get the transaction_id
        let transaction_id = payment.transaction_id;
        console.log(transaction_id);
        
        //verify payment 
       
       // ajax
        $.ajax({
          type: "GET",
          url: "<?php echo url('user/verify-transaction'); ?>/"  +
          transaction_id,
          data: {},
          dataType: "json",
          beforeSend: function(){
            //show loader 
            Swal.fire ({
              icon: 'info',
              title: 'please wait...',
              html: 'verifying payment',
              allowOutsideClick: false,
              didOpen: () => {
                Swal.showLoading()
              }
            });
          },
          success: function (response) {
            console.log('verification Response:', response); 
            Swal.fire({
              icon: 'success',
              title: 'payment Verified!',
              text: 'Your walet has been funded successfully.'
            });           
          },
          error: function(error) {
         //Swal fire alert 
          Swal.fire ({
              icon: 'error',
              title: 'payment not complete',
              text: 'please try again.'
            });
          }
        });

      },
      onclose: function(incomplete) {
        if (incomplete || window.verified === false) {
           //alert Swal
       Swal.fire({
        title: 'payment Cancelled',
        text: "you have cancelled your payment",
        icon: 'error',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK',
       });
        }
      }
	});
}

//jquerry
$(document).ready(function () {
  //submit #addFund
  $("#addFund").submit(function (e) { 
    e.preventDefault();
    let amount = $("input[name='amount']").val();
    if (amount==="") {
      alert("please enter amount");
      return false;
    }
    //make payment 
    makePayment(amount);

    //close modal 
    $('#addFundWallet').modal('hide');
    
  });
});
</script>
<?php
endPushScript();
extend('pages/layout/app', 'contentDashboard');