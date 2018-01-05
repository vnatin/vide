
<?php
$strOrderTotal = "100";
$siteUrl = "http://www.shuak-ast.kz";
$strOrderDescription = "%D0%9F%D0%BE%D0%B6%D0%B5%D1%80%D1%82%D0%B2%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5";
$strCurrency = "KZT";
$merchant_id = "502053";
$orderId = "";
$orderPhone = "+77074610454";
$orderEmail = "vnatin@vimart.kz";

$secretWord = "yE51mZhCJIytC23i";






$request = [
    'pg_amount'         => (int)$strOrderTotal,
    'pg_check_url'      => $siteUrl . '/check', //url for checking status of order. It must be a real url on website, and return "OK" or "rejected"
    'pg_description'    => $strOrderDescription, //any description of order
    'pg_encoding'       => 'UTF-8', //charset
    'pg_currency'       => $strCurrency, //currency of payment, default is KZT
    'pg_user_ip'        => $_SERVER['REMOTE_ADDR'],
    'pg_lifetime'       => !empty($lifetime) ? $lifetime * 3600 : 86400, //lifetime of payment, default is 86400 seconds
    'pg_merchant_id'    => $merchant_id, //id of merchant in PayBox system
    'pg_order_id'       => $orderId, //id of order in merchant database
    'pg_result_url'     => $siteUrl . '/callback', //url to which we will send the payment result
    'pg_request_method' => 'GET', //you can use GET, POST, XML
    'pg_salt'           => rand(21, 43433), //salt that will be used in encrypting the request
    'pg_success_url'    => $siteUrl . '/success', //here we will return the customer if payment was successful. It must be a real url on website
    'pg_failure_url'    => $siteUrl . '/fail', //here we will return the customer if the payment has failed. It must be a real url on website
    'pg_user_phone'     => $orderPhone, //phone of the customer, which he will see in the form of payment
    'pg_user_contact_email' => $orderEmail //email of the customer, where he will receive a notification of the status of payment
];

$request['pg_testing_mode'] = 0; //add this parameter to request for testing payments

//if you pass any of your parameters, which you want to get back after the payment, then add them. For example:
$request['client_name'] = 'Mr.Sam';
$request['client_address'] = 'Earth Planet';
$request['favorite color'] = 'Lime';

//specify where to send the request, for example payment.php
$url = 'payment.php';

//generate a signature and add it to the array

ksort($request);
array_unshift($request, $url);
array_push($request, $secretWord); //add your secret key (you can take it in your personal cabinet on paybox system)

$request['pg_sig'] = md5(implode(';', $request));

unset($request[0], $request[1]);

$query = http_build_query($request);

//redirect a customer to payment page
header('Location: https://paybox.kz/' . $url . '?' . $query);




echo"
<form method='GET' action='https://paybox.kz/payment.php'>
<input type='hidden' name='pg_merchant_id' value='$pg_merchant_id' />
<input type='hidden' name='pg_amount' value='$pg_amount' />
<input type='hidden' name='pg_currency' value='$pg_currency' />
<input type='hidden' name='pg_description' value='$pg_description' />
<input type='hidden' name='pg_salt' value='$pg_salt' />
<input type='hidden' name='pg_sig' value='$pg_sig' />
<input type='submit' value='100'>
</form>
";


echo $pg_sig;

?>
