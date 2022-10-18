<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
$mail = new PHPMailer(true);

if(isset($_POST['submit_btn'])){

    // echo '<pre>';
    // print_r($_POST); die;
    // echo '</pre>';

    $counter_remove = $_POST['counter_remove'];
    $layout_view = $_POST['layout_view'];
    $dimension_1 = $_POST['dimension_1'];
    $dimension_2 = $_POST['dimension_2'];
    $dimension_3 = $_POST['dimension_3'];
    $dimension_4 = $_POST['dimension_4'];
    $dimension_5 = $_POST['dimension_5'];
    $dimension_6 = $_POST['dimension_6'];
    $dimension_7 = $_POST['dimension_7'];
    $dimension_8 = $_POST['dimension_8'];
    $product_color = $_POST['product_color'];
    $popular_edge = $_POST['popular_edge'];
    $luxury_edge = $_POST['luxury_edge'];
    $sink = $_POST['sink'];
    $cut_outs = $_POST['cut_outs'];
    $cooktop = $_POST['cooktop'];
    $hear_about = $_POST['hear_about'];
    $hear=$_POST['hear'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $zipcode = $_POST['zipcode'];
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
        $mail->setFrom('madhu@yopmail.com', 'AbsoluteStones');
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
        $mail->Body    = "<b>Removal Existing Countertop :</b>  $counter_remove "."<br>  <b>Layout :</b>  $layout_view "."<br> <b> Dimension1 :</b>  $dimension_1 "."<br> <b> Dimension2 :</b>  $dimension_2 "."<br> <b> Dimension3 :</b>  $dimension_3 "."<br> <b> Dimension4 :</b>  $dimension_4 "."<br> <b> Dimension5 :</b>  $dimension_5 "."<br> <b> Dimension6 :</b>  $dimension_6 "."<br> <b> Dimension7 :</b>  $dimension_7 "."<br> <b> Dimension8 :</b>  $dimension_8 "."<br> <b> ProductColor :</b>  $product_color "."<br> 
        <b> PopularEdge :</b>  $popular_edge "."<br>  <b> LuxuryEdge :</b>  $luxury_edge "."<br> <b> CutsOuts :</b>  $cut_outs "."<br> <b> CookTop :</b>  $cooktop "."<br> <b> Sink :</b>  $sink "."<br>
        <b> How did you hear about us :</b>  $hear_about "." <b>$hear</b> "."<br> <b> Name :</b>  $name "."<br> <b> Email :</b>  $email "."<br> <b> Phonenumber :</b>  $phone_number "."<br> <b> Zipcode :</b>  $zipcode "."<br> <b> Message :</b>  $message "."<br>";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        // echo 'Message has been sent';
        echo "<script>alert('Email Send Successfull')</script>";
        echo "<script>window.location.href='select_quote.html'</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    }