<?php
$data = [ 
'user_id' => '1',
'payment_id' => $_POST['razorpay_payment_id'],
'amount' => $_POST['totalAmount'],
'product_id' => $_POST['product_id'],
];
// you can write your database insertation code here
// after successfully insert transaction in database, pass the response accordingly
$arr = array('msg' => 'Payment successfully credited', 'status' => true);  
echo json_encode($arr);
?>