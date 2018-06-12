<?php
      $body = ' ';
      include 'header.php';
?>
 
 <div class="category_background">
<div class="container text-center transparentblue_background full-width">
      <h1>Who We Are</h1>
</div>     
<div class="container">
      <div class="row large-topbottom-space vcenter">
            <div class="col-lg-3 col-lg-offset-1 col-lg-push-7 col-md-3 col-sm-offset-0 col-md-push-8 col-sm-5 col-sm-push-7 col-xs-8 col-xs-offset-2 topbottom-padding">
                  <img src="images/profilepic.png" class="img-responsive">
            </div>
            <div class=" col-lg-pull-5 col-md-6 col-md-offset-2 col-md-pull-4 col-sm-7 col-sm-pull-5 col-xs-12">
                  <div class="transparentblue_background topbottom-padding side-padding">
                       <p class="zero-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut egestas lorem ac magna vehicula sagittis. Curabitur vel nisl ornare, condimentum ligula non, lacinia lacus. Praesent luctus purus eu justo eleifend ullamcorper. Pellentesque nec ultrices eros. Vivamus consequat orci ut ex fermentum, quis ornare justo suscipit. Vestibulum erat dolor, rutrum non eleifend eget, tincidunt at nisl. Sed imperdiet purus accumsan leo facilisis, quis faucibus augue gravida. Sed scelerisque semper nunc, id consequat nibh hendrerit nec. Vivamus rhoncus quis tellus id suscipit. In rutrum erat nisi, et sollicitudin ipsum blandit sit amet.</p>
                  </div>
            </div>
      </div>
</div>
<?php
      function validateForm() {
            global $result, $name, $email, $message, $errName, $errEmail, $errMessage;

            $name = scrubInput($_POST['name']);
            $email = scrubInput($_POST['email']);
            $message = scrubInput($_POST['message']);
            //$human = intval($_POST['human']);
            $from = $email; 
            $to = 'adarraviv@gmail.com'; 
            $subject = 'Smart Device Visitor Message';
            $body ="From: $name\nE-Mail: $email\nMessage:\n$message";

            // Check if name has been entered
            if (empty($_POST['name'])) {
                  $errName = 'Please enter your name.';
            }else{
                  $errName = "";
            }

            if(empty($_POST['email'])){
                  $errEmail = "Please enter an email address.";
            }else{
              if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
              $emailErr = "Please enter a valid email address.";
              }
            }


            if (empty($_POST['message'])) {
                  $errMessage = 'Please enter your message.';
            }else{
                  $errMessage = "";
            }   

	    // If there are no errors, send the email
	 if ( $name != "" &&  $email != "" && $message != "" ) {
	      $result='<div class="alert alert-success zero-margin">Thank You! I will be in touch.</div>';
	      mail($to, $subject, $body, $from);
	} else {
	      $result='<div class="alert alert-danger zero-margin">Sorry there was an error sending your message. Please try again later.</div>';
	}
    }

      function scrubInput($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
      }

      if ($_SERVER[ 'REQUEST_METHOD' ] == "POST"){
            validateForm();
      }else{
            $result = $name = $email = $message = $errName = $errEmail = $errMessage = "";
      }

  ?>
<div class="transparentblue_background container full-width large-bottom-padding">
      <div class="container large-bottom-space">
            <div class="row">
                  <div class="col-md-10 col-md-offset-1 col-xs-12">
                        <h2 class="col-xs-12 text-center bottom-space">Send Us a Message</h2>
                        <form class="form-horizontal" type="submit" name="contact" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" onsubmit="return validateForm()" method="POST">
                                  <div class="col-xs-12 bottom-space">
                                         <?php echo $result; ?>  
                                  </div>
                                  <div class="col-xs-12 col-sm-6">
                                      <input aria-label="Name" type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="<?php echo $name; ?>">
                                       <?php echo "<p class='text-danger'>$errName</p>";?>
                                      <input  aria-label="email" type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo $email; ?>">
                                      <?php echo "<p class='text-danger'>$errEmail</p>";?>
                                  </div> 
                                  <div class="col-xs-12 col-sm-6">
                                        <textarea class="form-control" aria-label="Message" rows="8" id="message" name="message" placeholder="Message"><?php echo $message; ?></textarea>
                                        <?php echo "<p class='text-danger'>$errMessage</p>";?>
                                        <input id="submit" name="submit" type="submit" value="Send" class="btn btn-default btn btn-primary top-space bottom-space pull-right">
                                  </div>
                            </form>
                      </div>
            </div>
      </div>
</div>
</div>

<?php
      include 'footer.php';
?>
