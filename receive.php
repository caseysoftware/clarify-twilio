<?php

include 'creds.php';

$to = $_POST['To'];
$from = $_POST['From'];
$recording_url = $_POST['RecordingUrl'];

$bundle = new OP3Nvoice\Bundle($apiKey);
// todo: add a name
// todo: use the incoming post params to add metadata for a later search
$bundle->create($recording_url);