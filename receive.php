<?php

include 'vendor/autoload.php';

$apiKey = 'update with your api key';

// The preg_replace just filters the to/from information to make sure we're only dealing with numbers.
//   It may be overkill in this case but better safe than sorry.
$to = $_POST['To'];
$to = preg_replace("/[^0-9]/", "", $to);

$from = $_POST['From'];
$from = preg_replace("/[^0-9]/", "", $from);

$recording_url = $_POST['RecordingUrl'];

$jsonData = '{"to": "'.$to.'", "from": "'.$from.'"}';

$bundle = new OP3Nvoice\Bundle($apiKey);
$bundle->create($recording_url, 'phone recording', '', '', $jsonData);