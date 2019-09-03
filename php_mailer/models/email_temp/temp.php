<?php
$now = strtotime("now");
$conYr = date("Y", $now);



if ($mailType == "sendmail") {

$email_temp = "
    <!DOCTYPE html>
    <html lang='en'>
      <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
      </head>
      <body>
      <body>
        <section style='padding-top: 50px;padding-bottom: 50px;'>
          <div class='container header' style='max-width: 600px;width: 90%;margin: 0 auto;position: relative;color: #fff;padding-left: 20px;padding-right: 20px;padding-bottom: 10px;'>
            <img src='$domain/assets/images/elogo.png' style='width: 100px;position: relative;left: -20px;'>
          </div>
          <div style='max-width: 600px;width: 90%;margin: 0 auto;position: relative;background-color: blue;padding: 10px 20px;color: #fff;'>
            <h3>$siteName</h3>
          </div>
          <div style='max-width: 600px;width: 90%;margin: 0 auto;position: relative;background-color: #FAFAFA;padding: 10px 20px;bottom: 1px solid #f0f0f0;border-bottom: 1px solid #c0c0c0;min-height: 200px;'>
            <p style='color: #4F4F4F;position: relative;font-size: 15px;font-weight: bold;'>Dear SiteOnwer,</p>
            <p>Welcome to PHP Mailer.</p>
            <p>Email has been received.</p>
            <br>
            <p><strong>Link</strong>: <a href='".strtoupper($domain)."' target='_blank'>Main Domain Link</a></p>
            <p><strong>Email ID</strong>: <a href='mailto:".strtoupper($send->email)."'>".strtoupper($send->email)."</a></p>
            <br>
            <p>Message: $send->message</p>
            <br>
            <p>Thank you!</p>
            <p>$siteName</p>
          </div>
          <div style='max-width: 600px;width: 90%;margin: 0 auto;position: relative;padding: 10px 20px 5px;text-align: center;'> 
            <p style='color: #CDCDCD;font-size: 12px;'>You received this mandatory email from us.
            <br>We do not send newsletters to your mail except you make a request us on any help.<br>© $conYr.</p> 
          </div>
        </section>
      </body>
    </html>
";

}

