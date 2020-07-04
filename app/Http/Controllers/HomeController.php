<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function testemail()
    {

        // is method a POST ?
            require 'vendor/autoload.php';                                                  // load Composer's autoloader

            $mail = new PHPMailer(true);                            // Passing `true` enables exceptions

            try {
                // Server settings
            $mail->SMTPDebug = 0;                                   // Enable verbose debug output
                $mail->isSMTP();                                        // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';                                             // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                                 // Enable SMTP authentication
                $mail->Username = 'anilofficialgupta@gmail.com';             // SMTP username
                $mail->Password = 'anilofficialgupta@123';              // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to

                //Recipients
                $mail->setFrom('anilofficialgupta@gmail.com', 'Mailer');
                $mail->addAddress('anilofficialgupta@gmail.com', 'Optional name');  // Add a recipient, Name is optional
                $mail->addReplyTo('anilofficialgupta@gmail.com', 'Mailer');
                // $mail->addCC('his-her-email@gmail.com');
                // $mail->addBCC('his-her-email@gmail.com');

                //Attachments (optional)
                // $mail->addAttachment('/var/tmp/file.tar.gz');            // Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');   // Optional name

                //Content
                $mail->isHTML(true);                                                                    // Set email format to HTML
                $mail->Subject = 'Request';
                // $mail->Subject = Request::input('subject');
                $mail->Body    = 'Request';                     // message

                $mail->send();
                echo "<pre>"; print_r('mail sended!.............'); echo "</pre>"; die('end of code');
                return back()->with('success','Message has been sent!');
            } catch (Exception $e) {
                return back()->with('error','Message could not be sent.');
            }
        // }
        // return view('phpmailer');
  // }


        // $get_email_template = array();
        // $data = array('name'=>"Virat Gandhi");
        // Mail::send(['text'=>'email.test'], $data, function($message) {
        //  $message->to('anilofficialgupta@gmail.com', 'Tutorials Point')->subject
        //     ('Laravel Basic Testing Mail');
        //  $message->from('xyz@gmail.com','Virat Gandhi');
        // });
        // echo "<pre>"; print_r('mail sended!.............'); echo "</pre>"; die('end of code');
    }
}
