<?php
    $error = ""; $successMessage = "";
//    $copy = isset($_POST['copy']) ? $_POST['copy'] : 'no';

    

    if ($_POST) {
        
        if (!$_POST["email"]) {
            
            $error .= "An email address is required.<br>";
            
        }
        
        if (!$_POST["subject"]) {
            
            $error .= "A subject is required.<br>";
            
        }
        
        if (!$_POST["text-area"]) {
            
            $error .= "A text-area is required.<br>";
            
        }
        
        if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            
            $error .= "The email address is invalid.<br>";
            
        }
        
        if ($error != "") {
            
            $error = '<div class="alert alert-danger" role="alert"><p>There were error(s) in your form:</p>' . $error . '</div>';
            
        }else {
            
            $emailTo = "alessandro.messori4@gmail.com";
            
            $clientMail = trim($_POST['email']);
            
            $subject = $_POST['subject'];
            
            $message = $_POST['text-area'];
            
            $headers = "From: ".$_POST['email'];
            

        
            
            if (mail($emailTo, $subject, $message, $headers)) {
                
                if  ($_POST['copy'] == 'Yes'){
                      mail($clientMail, $subject, $message, $headers); 
                }
                $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, we\'ll get back to you As soon as Possible!</div>';
                
                
            }else {
                
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later</div>';
                
                
            }
            
        }
    }
 ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Mail Form</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="css/form.css">


    </head>

    <body>
        <section>
            <h1>Your Personal Form</h1>
            <form method="post">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Enter the Subject of this email">
                </div>


                <div class="form-group">
                    <label for="text-area">Message</label>
                    <textarea name="text-area" class="form-control" id="text-area" rows="3" placeholder="Write your message here..."></textarea>
                </div>


                <div class="form-check">
                    <label class="form-check-label">
      <input type="checkbox" name="copy" value="Yes" class="form-check-input">

    </label>
                    <small>Send me a copy of this message</small>
                </div>
                <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                <div id="error">
                    <? echo $error;?>
                </div>
                <div id="success">
                    <? echo $successMessage; ?>
                </div>
            </form>
        </section>


        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script src="js/form.js"></script>
    </body>

    </html>
