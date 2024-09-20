<?php

   include_once 'composer/autoload.php'; 
 
   MercadoPago\SDK::setAccessToken("TEST-#");
	$payment = new MercadoPago\Payment();
    $payment->transaction_amount = (float)$_POST['transactionAmount'];
    $payment->token = $_POST['token'];
    $payment->description = $_POST['description'];
    $payment->installments = (int)$_POST['installments'];
    $payment->payment_method_id = $_POST['paymentMethodId'];
    $payment->issuer_id = (int)$_POST['issuer'];
	$payment->notification_url = 'https://mestresdophp.com.br/mercado_pago/response.php';

    $payer = new MercadoPago\Payer();
    $payer->email = $_POST['email'];
    $payer->identification = array(
        "type" => $_POST['identificationType'],
        "number" => $_POST['identificationNumber']
    );
    $payment->payer = $payer;

    $payment->save();

    $response = array(
        'status' => $payment->status,
        'status_detail' => $payment->status_detail,
        'id' => $payment->id
    );
    echo json_encode($response);
	
?>

<a href="index.php">Voltar</a>