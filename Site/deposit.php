<?php
session_start();

if(!(isset($_SESSION['loginUser']))){
    header("location: login.php");
}
?>
		<div class="wrapper d-flex align-items-stretch">

    <!-- side bar Content start -->

    <?php include('Sidebar/sidebar.php'); ?>

    <!-- side bar Content end -->

    <div id="content" class="p-4 p-md-5">

    <!-- top bar Content start -->

    <?php include('header/top.php'); ?>

    <!-- top bar Content end -->

    <div>
    <h4 class="mb-0 text-uppercase text-center header-title">Top-Up Instructions</h6>
          <hr />
          <div class="row">
            <div class="col-lg-12">
              <div class="profile card card-body px-3 pt-3 pb-0">
                <div class="profile-head">
                  <div class="photo-content">
                    <div class="cover-photo rounded">
                      <img style ="width:100%; height:200px" src="images/image1.jpg" alt="dfdfdf">
                    </div>
                  </div>
                  <!-- <div class="profile-info">
                    <div class="profile-photo">
                      <img src="assets/images/gallery/pexels-maitree-rimthong-1602726.jpg" class="img-fluid rounded-circle" alt="">
                    </div>
                  </div> -->

                </div>
              </div>
            </div>
          </div>

          <div>
          <div class="button-wrapper" style="text-align: center">
          <button style="padding: 20px" class="button button1" role="button">MTN RWANDA</button>
          <button style="padding: 20px" class="button button2" role="button">Vodacom Tanzania</button>
          <button style="padding: 20px" class="button button3" role="button">MTN UGANDA Deposit</button>
          </div>
          </div>
      </div>





      
      <div class="row col-md-12">
        <div class="card col-md-4 paymentform">
          <form method="post" action="depologic.php">
            <h2 class="card-text">
              Mpesa STK PUSH Deposit
            </h2>
            <input type="hidden" name="userid" value=2052>
            <div class="m-3">
              <h5>
                Enter the amount you wish to deposit.
              </h5>
              <h5>
                Press Deposit.You will be redirected to a different page.
              </h5>
              <h5>
                A pop up will appear on our phone, enter your M-PESA PIN
              </h5>
            </div>
            <div class="m-3">
              <label for="simpleinput" class="form-label text-white">Amount</label>
              <input type="number" id="simpleinput" class="form-control" name="amount" required>
            </div>
            <div class="m-3">
              <label for="simpleinput" class="form-label text-white">Phone Number</label>
              <input type="number" id="simpleinput" class="form-control" value="792533846">
            </div>
            <div class="m-3">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" required>
                <label class="form-check-label" for="exampleRadios1">
                  I agree payment cannot be reversed
                </label>
              </div>

            </div>
            <div class="m-3 text-center">
              <button type="submit" name="autodepo" class="btn btn-success waves-effect waves-light">
                <span class="btn-label"><i class="mdi mdi-check-all"></i></span>Deposit
              </button>
            </div>


          </form>
        </div> <!-- end col -->
        <div class="card col-md-4 paymentform">
          <form method="post" action="depositusingnewnumber.php">
            <h2 class="card-text">
              Deposit of funds via Mpesa using a different number
            </h2>
            <div class="m-3">
              <h5>
                Enter the amount you wish to deposit.
              </h5>
              <h5>
                Enter phone number . </h5>
              <h5>
                Press Deposit.You will be redirected to a different page.
              </h5>
            </div>

            <div class="m-3">
              <label for="simpleinput" class="form-label text-white">Amount</label>
              <input type="number" id="simpleinput" class="form-control" name="new_amount" required>
            </div>
            <div class="m-3">
              <label for="simpleinput" class="form-label text-white">New Deposit Phonenumber</label>
              <input type="number" id="simpleinput" class="form-control" name="new_deposit_number" required>
            </div>
            <div class="m-3">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" required>
                <label class="form-check-label" for="exampleRadios1">
                  I agree payment cannot be reversed
                </label>
              </div>

            </div>
            <div class="m-3 text-center">
              <button type="submit" name="new_autodepo" class="btn btn-primary">
                Deposit Using New Number
              </button>
            </div>


          </form>
        </div> <!-- end col -->
        <div class="card col-md-4 paymentform">
          <form method="post" action="depositforanotheruser.php">
            <h2 class="card-text">
              Deposit funds for a different username
            </h2>
            <div class="m-3">
              <h5>
                Enter the amount you wish to deposit.
              </h5>
              <h5>
                Enter correct username .
              </h5>
              <h5>
                Press Deposit.You will be redirected to a different page.
              </h5>
            </div>

            <div class="m-3">
              <label for="simpleinput" class="form-label text-white">Amount</label>
              <input type="number" id="simpleinput" class="form-control" name="new_amount" required>
            </div>
            <div class="m-3">
              <label for="simpleinput" class="form-label text-white">Enter Correct Username </label>
              <input type="text" id="simpleinput" class="form-control" name="deposit_username" required>
            </div>
            <div class="m-3">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" required>
                <label class="form-check-label" for="exampleRadios1">
                  I agree payment cannot be reversed
                </label>
              </div>

            </div>
            <div class="m-3 text-center">
              <button type="submit" name="depo_different_user" class="btn btn-secondary">
                Deposit For Different Username
              </button>
            </div>


          </form>
        </div> <!-- end col -->
      </div>














      </div>

    

   


   
       







                </div>
            </div>
        </div>
             </div>
        </div>
    </div>

    <!-- footer bar Content start -->

    <?php include('Footer/footer.php'); ?>

    <!-- footer bar Content end -->
