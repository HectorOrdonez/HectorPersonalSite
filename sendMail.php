<?php
/**
 * Project: Petulant-Octo-Tyrion
 * User: Hector Ordonez
 * Description: 
 * @date 24/04/14 15:58
 */

/**
 * var $name string User's name
 */
$name = '';

/**
 * var $mail string This should be a mail
 */
$mail = '';

/**
 *  var $msg string This contains the message
 */
$msg = '';

// Get parameters
$name = $_POST['name'];
$mail = $_POST['mail'];
$msg = $_POST['message'];

try {
    validateData($name, $mail, $msg);

    sendMail($name, $mail, $msg);
} catch (Exception $exception)
{
    header('HTTP/1.1 500 ' . $exception->getMessage());
    print json_encode(array(FALSE, $exception->getMessage()));
    exit;
}

print json_encode(array(TRUE, 'Message sent.'));

// End

/**
 * @param $name string
 * @param $mail string
 * @param $msg string
 * @throws Exception
 */
function validateData($name, $mail, $msg)
{
    if ($name == '' OR
        $mail == '' OR
        $msg == ''
    ) {
        throw new Exception('Uncompleted request');
    }

    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        throw new Exception('The entered e-mail is not valid');
    }
}

/**
 * Sends mail with given parameters.
 * Returns true if success. False otherwise.
 * 
 * @param $name string
 * @param $mail string
 * @param $msg string
 * @throws Exception
 */
function sendMail($name, $mail, $msg)
{
    $subject = "{$name} sent you an e-mail.";
    $to = 'zeratul_aiur@msn.com';
    $type = 'plain'; // or HTML
    $charset = 'utf-8';

    $mail     = 'no-reply@'.str_replace('www.', '', $_SERVER['SERVER_NAME']);
    $uniqid   = md5(uniqid(time()));
    $headers  = 'From: '.$mail."\n";
    $headers .= 'Reply-to: '.$mail."\n";
    $headers .= 'Return-Path: '.$mail."\n";
    $headers .= 'Message-ID: <'.$uniqid.'@'.$_SERVER['SERVER_NAME'].">\n";
    $headers .= 'MIME-Version: 1.0'."\n";
    $headers .= 'Date: '.gmdate('D, d M Y H:i:s', time())."\n";
    $headers .= 'X-Priority: 3'."\n";
    $headers .= 'X-MSMail-Priority: Normal'."\n";
    $headers .= 'Content-Type: multipart/mixed;boundary="----------'.$uniqid.'"'."\n\n";
    $headers .= '------------'.$uniqid."\n";
    $headers .= 'Content-type: text/'.$type.';charset='.$charset.''."\n";
    $headers .= 'Content-transfer-encoding: 7bit';

    $answer = mail($to, $subject, $msg, $headers);
    
    if ($answer === FALSE)
    {
        throw new Exception('Oh, this is embarrassing. Message could not be send. Can you please try by mail? ');
    }
}