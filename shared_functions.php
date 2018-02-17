<?php
function sendMsg($sendTo, $msg) {

    try {
        // Account details
        $apiKey = urlencode('3sC/BU7S7LI-d14vm2GSfGKeRnbkZuqf3IVzd7GM8L');	
        //$msg = "Dear " . $_SESSION['firstname'] . " Thank you for contacting us. Your Ticket No is:" . $ticketid . "  We will get back to you soon!";
        $sender = urlencode('MKHTPS');
        $data = array('apikey' => $apiKey, 'numbers' => $sendTo, "sender" => $sender, "message" => $msg);
        $ch = curl_init('https://api.textlocal.in/send/');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);        
    } catch (Exception $ex) {

    }    
}


?>