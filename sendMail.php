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
    $to = 'zeratul_aiur@msn.com';
    $subject = "{$name} sent you an e-mail";
    $message = $msg;
    $headers = "From: {$mail} \r\n";
    $answer = mail($to, $subject, $message, $headers);
    
    if ($answer === FALSE)
    {
        throw new Exception('Oh, this is embarrassing. Message could not be send. Can you please try by mail? ');
    }
}