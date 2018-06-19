<?php 
if(isset($_POST['submit'])){
    $to = "justa0904@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $last_name = $_POST['surname'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<!DOCTYPE html> 
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>form</title>
    </head>
    <body data-spy="scroll" data-target="#navbar" data-offset="100">


<form class="contact-form" method="post" id="contactForm" action="">
                                      
                        <div class="inputs-container form-group">
                            <label class="inputs-container__label" for="name">Imię</label>
                            <input type="text" id="name" name="name" placeholder="Imię" class="inputs-container__input form-control" required maxlength="50">
                        </div>                        
                        <div class="inputs-container form-group">
                            <label class="inputs-container__label" for="surname">Nazwisko</label>
                            <input type="text" id="surname" name="surname" placeholder="Nazwisko" class="inputs-container__input form-control" required maxlength="50">
                        </div>                        
                        <div class="inputs-container form-group">
                            <label class="inputs-container__label" for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Email" class="inputs-container__input form-control" required maxlength="50">
                        </div>                        
                        <div class="inputs-container form-group">
                            <label class="inputs-container__label" for="message">Wiadomość</label>
                            <textarea id="message" type="textarea" name="message" maxlength="6000" placeholder="Wiadomość..." class="inputs-container__input form-control" ></textarea> 
                        </div>                  
                    
                    <div class="modal-footer">
                        <button type="button" id="backBtn" class="btn btn-secondary" data-dismiss="modal">Anuluj</button>
                        <button type="submit" id="sendBtn" class="btn btn-primary">Wyślij</button>
                    </div>
                </form>

                </body>
                </html>