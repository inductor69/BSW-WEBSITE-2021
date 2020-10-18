<?php

use BotMan\BotMan\Messages\Conversations\Conversation;

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
require 'credentials.php';


class OnboardingConversation extends Conversation
{

    protected $firstname;

    public function askFirstname()
    {
        $this->ask('Hi, what is your name?', function($answer) {
            $firstName = $answer->getText();
            $this->say('Nice to meet you '.$firstName);
        });
    }


    public function run()
    {
        $this->askFirstname();
    }
}

class Query extends Conversation
{

    public $name;
    public $entrynumber;
    public $query;
    public $success;

    public function askName()
    {
        $this->ask('Hi, what is your name?', function($answer) {
            $this->name = $answer->getText();
            $this->say('Nice to meet you '.$this->name);
            $this->askEntryNumber();
        });
    }

    public function askEntryNumber()
    {
        $this->ask('May I know your entry number?', function($answer) {
            $this->entrynumber = $answer->getText();
            $this->say('Thankyou!');
            $this->takeQuery();
        });
    }

    public function takeQuery()
    {
        $this->ask('You may now describe the problem you are facing.', function($answer) {
            $this->query = $answer->getText();
            $this->mailStop();
        });
    }

    public function mailStop(){
        
        $this->ask('Say Y/y to confirm your request. Doing this will register it with the admin. Send N/n to cancel.', [
            [
                'pattern' => 'y|Y|yes|yep',
                'callback' => function () {
                    $this->say('Thankyou!');
                    $this->sendMail($this->name, $this->entrynumber, $this->query);
                }
            ],
            [
                'pattern' => 'nah|no|nope|n|N',
                'callback' => function () {
                    $this->say('Your request has been cancelled.');
                }
            ]
        ]);   
    }

    public function sendMail($name, $entrynumber, $query)
    {       
            $this->say('Please wait while I register your request ...');
            $nameM = $name;
            $entrynumberM = $entrynumber;
            $queryM = $query;
            $mail = new PHPMailer(true);

            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host = 'smtp.gmail.com';                    // Set the SMTP server to send through
            //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
            $mail->Port = 587;
            //Set the encryption mechanism to use - STARTTLS or SMTPS
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            //Whether to use SMTP authentication
            $mail->SMTPAuth = true;
            //Username to use for SMTP authentication - use full email address for gmail

            
            //Password to use for SMTP authentication
            $secret_class = new Credentials();
            $key = $secret_class->password;
            $mail->Password = $key;
            $user = $secret_class->email_address;
            $mail->Username = $user;
            //Recipients
            $mail->setFrom($user, 'Query via BSW Chatbot');
            $mail->addAddress('singhjapneetssa@gmail.com', 'Japneet Singh');     // Add a recipient
            $mail->addCC('singhjapneetssa@gmail.com');
        
            // Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        
            // Content
            $mailbody = 'Name: '.$nameM.'<br>Entry Number: '.$entrynumberM.'<br>Query: '.$queryM.'<br>';
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Query Request';
            $mail->Body    = $mailbody;

            $this->ask('Your request has been registered. Thankyou!', function($answer) {
                $this->name = $answer->getText();
                $this->say('Nice to meet you '.$this->name);
                $this->askEntryNumber();
            });
            $mail->send();
            $this->success = true;
            return;

        
      
    }

    public function acknowledge($success){
        if($success){
            $this->ask('Your request has been registered. Thankyou!', function($answer) {
                $this->name = $answer->getText();
                $this->say('Nice to meet you '.$this->name);
                $this->askEntryNumber();
            });
        }
    }

    public function run()
    {
        $this->askName();
    }
}

class FeatureRequest extends Conversation
{

    private $feature;
    public $success;

    public function askName()
    {
        $this->ask('Hi, please describe your feature request.', function($answer) {
            $feature = $answer->getText();
            $this->say('Thankyou! Your request has been registered.');
            $this->sendMail($feature);
        });
    }

    public function sendMail($feature)
    {
            $mail = new PHPMailer(true);

            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host = 'smtp.gmail.com';                    // Set the SMTP server to send through
            //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
            $mail->Port = 587;
            //Set the encryption mechanism to use - STARTTLS or SMTPS
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            //Whether to use SMTP authentication
            $mail->SMTPAuth = true;
            //Username to use for SMTP authentication - use full email address for gmail

            
            //Password to use for SMTP authentication
            $secret_class = new Credentials();
            $key = $secret_class->password;
            $mail->Password = $key;
            $user = $secret_class->email_address;
            $mail->Username = $user;
            //Recipients
            $mail->setFrom($user, 'Feature Request via BSW Chatbot');
            $mail->addAddress('singhjapneetssa@gmail.com', 'Japneet Singh');     // Add a recipient
        
            // Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        
            // Content
            $mailbody = 'Feature Request: '.$feature.'<br>';
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Feature Request';
            $mail->Body    = $mailbody;
        
            $mail->send();
            $success = true;
      
    }



    public function run()
    {
        $this->askName();
    }
}