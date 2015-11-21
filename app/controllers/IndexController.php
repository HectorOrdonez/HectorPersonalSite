<?php
class IndexController extends BaseController {

    public function showWelcome()
    {
        return View::make('onlineCV.index');
    }

    public function contact()
    {
        // Get parameters
        $name = Input::get('name');
        $mail = Input::get('mail');
        $msg = Input::get('message');

        try {
            $this->validateEmailPost($name, $mail, $msg);

            $this->sendMail($name, $mail, $msg);
        } catch (Exception $exception)
        {
            header('HTTP/1.1 500 ' . $exception->getMessage());
            print json_encode(array(FALSE, $exception->getMessage()));
            exit;
        }

        print json_encode(array(TRUE, 'Message sent.'));
    }

    private function validateEmailPost($name, $mail, $msg)
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

    private function sendMail($name, $mail, $msg)
    {
        $subject = "{$name} ({$mail}) sent you an e-mail.";
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
        $headers .= 'Content-Type: multipart/mixed;boundary="----------'.$uniqid.'"'."\n";
        $headers .= '------------'.$uniqid."\n";
        $headers .= 'Content-type: text/'.$type.';charset='.$charset.''."\n";
        $headers .= 'Content-transfer-encoding: 7bit';

        $answer = mail($to, $subject, $msg, $headers);

        if ($answer === FALSE)
        {
            throw new Exception('Oh, this is embarrassing. Message could not be send. Can you please try by mail? ');
        }
    }
}
