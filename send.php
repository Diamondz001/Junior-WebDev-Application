<?php
include "src/bootstrap.php";

$mailer = new Mailer();

$mailer->addRecipient('tester1@example.com','Tester1');
$mailer->addRecipient('terster2@example.com','Tester2');
$mailer->addRecipient('tester3@example.com','Tester3');

$mailer->send('The message has been sent to 3 recipients');