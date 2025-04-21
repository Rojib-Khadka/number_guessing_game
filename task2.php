<?php
interface paymentProcesser{
    public function processPayment();
}
class Paypal{
    public function processPayment(){
        echo"payament from Paypal";
    }
}
class Stripe{
    public function processPayment(){
        echo"payament from Stripe";
    }
}
$Paypal=new Paypal();
$Stripe=new Stripe();
$Paypal->processPayment();
$Stripe->processPayment();




?>