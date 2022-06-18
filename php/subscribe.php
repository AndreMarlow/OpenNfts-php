<?php
require_once("Mail.php");

function sendEmail($email)
{

    $username = '348cb678c23865';
    $password = '9102de2a4bcf6d';
    $smtpHost = 'smtp.mailtrap.io';
    $smtpPort = '25';
    $to = $email;
    $from =  'andreyyybelovvv@gmail.com';

    $subject = "Thanks for Subscribing us - CodingNepal";
    $message = "Thanks for subscribing to our blog. You'll always receive updates from us. And we won't share and sell your information.";

    $name = 'Andrey';


    $headers = array(
        'From' => $name . " <" . $from . ">",
        'To' => $to,
        'Subject' => $subject
    );
    $smtp = Mail::factory('smtp', array(
        'host' => $smtpHost,
        'port' => $smtpPort,
        'auth' => true,
        'username' => $username,
        'password' => $password
    ));


    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ($mail = $smtp->send($to, $headers, $message)) {

            return <<<EOD
                    <div class="success-alert" style="
                        color: #00FF66;
                        font-weight: 500;
                        font-size: 14.7012px;
                        line-height: 47px;
                    ">
                        Thanks for Subscribing us.
                    </div>
                EOD;
        } else {
            return <<<EOD
                <div class="error-alert style="
                color: red;
                font-weight: 500;
                font-size: 14.7012px;
                line-height: 47px;">
                    Failed while sending your mail!
                </div>
                EOD;
        }
    } else {
        return <<<EOD
                    <div class="error-alert" style="
                    color: red;
                    font-weight: 500;
                    font-size: 14.7012px;
                    line-height: 47px;">
                        {$email} is not a valid email address!
                    </div>
                EOD;
    }
}


function storeToDatabase($email)
{
    $connection = mysqli_connect("localhost", "root", "1An32bE1!");
    $select_db = mysqli_select_db($connection, "andreyko");

    try {
        $connection->query("INSERT INTO users (email) VALUES('{$email}')");
    } catch (\Exception $e) {

        return <<<EOD
            <div class="alert error-alert">
                {$e->getMessage()}
            </div>
        EOD;
    }
}
