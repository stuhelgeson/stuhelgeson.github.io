<?php
  if ($_POST["submit"]) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $from = 'Demo Contact Form'; 
    $to = 'helgesonse@domain.com'; 
    $subject = 'Message from Contact Demo ';
    
    $body ="From: $name\n E-Mail: $email\n Message:\n $message";
    // Check if name has been entered
    if (!$_POST['name']) {
      $errName = 'Please enter your name';
    }
    
    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errEmail = 'Please enter a valid email address';
    }
    
    //Check if message has been entered
    if (!$_POST['message']) {
      $errMessage = 'Please enter your message';
    }
    //Check if simple anti-bot test is correct
    if ($human !== 5) {
      $errHuman = 'Your anti-spam is incorrect';
    }
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
  if (mail ($to, $subject, $body, $from)) {
    $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
  } else {
    $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
  }
}
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet'> -->
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link href="style.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  </head>

  <body>

      <div class="container-fluid menu">
        <div class="row menuRow">
          <div class="col-sm-2 close-click border">
            <h3>CLOSE</h3>
          </div>
          <div class="col-sm-2 navLink border">
            <a href="index.html"><h3>HOME</h3></a>
          </div>
          <div class="col-sm-2 navLink border">
            <a href="about.html"><h3>ABOUT</h3></a>
          </div>
          <div class="col-sm-2 navLink border">
            <a href="projects.html"><h3>PROJECTS</h3></a>
          </div>
          <div class="col-sm-2 navLink border">
            <a href="StuHelgesonResume.pdf" target="_blank" class="hover"><h3>RESUME</h3></a>
          </div>
          <div class="col-sm-2 navLink">
            <a href="contact.html"><h3>CONTACT</h3></a>
          </div>
        </div>
      </div>

     <div class="wrapper">

       <div class="container-fluid">
        <div class="row menuIcon menu-click">
          <div class="col-sm-12">
            <img src="menuIcon.png" height="35px" width="35px">
          </div>
        </div>
       </div> 

      <div class="container-fluid about">
        
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-5">
            <h3>Contact</h3>
          </div>
          <div class="col-sm-6"></div>
        </div>


        <!--Form Begin-->
        <div class="row">
                <div class="col-md-6 col-md-offset-3">
                <form class="form-horizontal" role="form" method="post" action="contact.php">
                  <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                      <?php echo "<p class='text-danger'>$errName</p>";?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                      <?php echo "<p class='text-danger'>$errEmail</p>";?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="message" class="col-sm-2 control-label">Message</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                      <?php echo "<p class='text-danger'>$errMessage</p>";?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                      <?php echo "<p class='text-danger'>$errHuman</p>";?>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                      <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                      <?php echo $result; ?>  
                    </div>
                  </div>
                </form> 
              </div>
            </div><!--End of Form Row-->

      </div><!--end of content container-->

      <div class="container-fluid bottom">
       <!--
        <div class="row connect">
          <div class="col-sm-4"></div>
          <div class="col-sm-1">
            <h4>CONNECT</h4>
          </div>
          <div class="col-sm-1">
            <img src="linkIn.png" height="40px" width="40px">
          </div>
          <div class="col-sm-1">
            <img src="youtube.png" height="40px" width="40px">
          </div>
          <div class="col-sm-1">
            <img src="facebook.png" height="40px" width="40px">
          </div>
          <div class="col-sm-4"></div>
        </div>-->
        

        <div class="row watermark">
          <div class="col-lg-2"></div>
          <div class="col-lg-4 border">
            <h4>&copy 2015 STU HELGESON   |   ALL RIGHTS RESERVED</h4>
          </div>
          <div class="col-lg-4">
            <h4>WEBSITE DESIGNED AND DEVELOPED BY STU HELGESON</h4>
          </div>
          <div class="col-lg-2"></div>
        </div>
      </div> 

    </div>
    <!--JavaScript, JQuery-->
    <script src="jquery-1.10.2.min.js"></script>
    <script src="app.js"></script>

  </body>
 </html>