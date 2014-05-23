<?php

include 'vendor/autoload.php';

$response = new Services_Twilio_Twiml();
$response->say('Hello. This call will be recorded for quality assurance.');
$response->record(array(
    'action' => 'receive.php',
    'maxLength' => 20
));

print $response;