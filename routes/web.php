<?php

use Illuminate\Support\Facades\Route;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testemail', function () {
    // require 'vendor/autoload.php';  

            $mail = new PHPMailer(true);                            // Passing `true` enables exceptions

            try {
                // Server settings
            	$mail->IsSMTP();
			    $mail->SMTPDebug = 0;
			    $mail->SMTPAuth = TRUE;
			    $mail->SMTPSecure = "ssl";
			    $mail->Port     = 465;  
			    $mail->name = "no-reply@sanchitsolutions.org";//info client
			    $mail->Password = "Qch9&-9cEEr8";//password
			    $mail->Host     = "mail.sanchitsolutions.org";//mail of clien tmail
			    $mail->Mailer   = "smtp";                           // Enable TLS encryption, `ssl` also accepted

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
            } catch (Exception $e) {
            	echo "<pre>"; print_r($e); echo "</pre>"; die('end of code');
            }
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


