<?php
include "src/bootstrap.php";

$mailer = new Mailer();

$mailer->addRecipient('tester1@example.com');
$mailer->addRecipient('terster2@example.com');
$mailer->addRecipient('tester3@example.com');

$mailer->send('The message has been sent to 3 recipients');