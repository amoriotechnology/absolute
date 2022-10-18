<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
$mail = new PHPMailer(true);

if(isset($_POST['appointment_btn'])){

    // echo '<pre>';
    // print_r($_POST); die;
    // echo '</pre>';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $date = $_POST['date'];
    $preffered = $_POST['preffered'];
    $book_appointment = $_POST['book_appointment'];
    $hear=$_POST['hear'];
    $message = $_POST['message'];
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
        $mail->isSMTP();                                           
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                  
        $mail->Username   = 'madhu.amoriotech@gmail.com';                     
        $mail->Password   = 'izzvuknurwbniqof';                               
        $mail->SMTPSecure = 'tls';            
        $mail->Port       = 587;                                   

        //Recipients
        // $mail->setFrom('madhu@yopmail.com', 'Madhu');
        $mail->setFrom('madhu@yopmail.com', 'Book An Appointment');
        $mail->addAddress('madhu@yopmail.com', 'Joe User');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment($image, 'Images');
        // $mail->addAttachment($image_1, 'Images');
        // $mail->addAttachment($ad_picture, 'Images');
        // $mail->addAttachment($image_1); 

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = "<b>Name :</b>  $name "."<br> <b>Email :</b>  $email "."<br>  <b>PhoneNumber :</b>  $phone_number "."<br> <b>Date :</b>  $date "."<br> <b>Preffered :</b>  $preffered "."<br> <b> Book an Appointment :</b>  $book_appointment "." <b>$hear</br> "."<br> <b> Message :</b>  $message "."<br> ";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        // echo 'Message has been sent';
        echo "<script>alert('Email Send Successfull')</script>";
        echo "<script>window.location.href='book_appointment.html'</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    }