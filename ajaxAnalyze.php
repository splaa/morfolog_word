<?php
//{"text":"белый лев","formsSettings":"FREQUENT"}


if (!empty($_POST)) {
    $json = json_encode([
        'text' => $_POST['input'],
        'formsSettings' => $_POST['formsSettings']
    ]);

    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"], 0, 5)) == 'https' ? 'https' : 'http';
    $path = $protocol . '://';
    $path .= $_SERVER['HTTP_HOST'];
    $path .= '/analizator.php';

    $result = send($path, $json, false);

    print_r($result);
} else {
    echo '';
}


function send($url, $postBody, $decode = true, $auth = false, $timeout = 120)
{
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => $timeout,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $postBody,
        CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
    ]);

    $response = curl_exec($ch);

    if (curl_error($ch)) {
        return curl_error($ch);
    }

    curl_close($ch);

    if ($decode == true) {
        $response = json_decode($response, true);
    }

    return $response;

}