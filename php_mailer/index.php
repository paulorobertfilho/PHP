<?php 
include_once './models/env.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PHP Email Sending using ajax</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <?php echo ajaxConfig();?>
  </head>
  <body>
    <div class="container">
      <section class="hero" data-pg-collapsed>
        <h1 class="margin-bottom">PHP Email Sending using ajax</h1>
        <div class="row">
          <div class="col-sm-6">
              <form role="form" class="form" onsubmit="return sendMail(this)"> 
              <div class="form-group"> 
                <label class="control-label">To Email address</label>                 
                <input type="email" class="form-control" placeholder="To: Email" name="email"> 
              </div>
              <div class="form-group"> 
                <label class="control-label">Your Message</label>                 
                <textarea class="form-control" rows="3" name="message"></textarea>
              </div>               
              <button type="submit" class="btn btn-primary btn-send submit">
                <span>Send</span>
                <img src="assets/images/loading.gif" class="hidden" />
              </button>               
              <div class="check-error"> 
                <p></p> 
              </div>
            </form>             
          </div>
        </div>
      </section>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/componets.js"></script>
    <script src="assets/js/home.js"></script>
  </body>
</html>
