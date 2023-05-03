Directory structure:
  /lib
    Comgate Payments library API

  /example
    Simple example showing how to use library

  my_ip_address.php
    Simple script showing your IP address

Configuration:
  Fill in config.php with connection details provided by Comgate

Usage example:
  $paymentsDatabase = new ComgatePaymentsSimpleDatabase(...);
  $paymentsProtocol = new ComgatePaymentsSimpleProtocol(...);
  try {
    $refId = $paymentsDatabase->createNextRefId();
    $paymentsProtocol->createTransaction(...);
    $transId = $paymentsProtocol->getTransactionId();
    $paymentsDatabase->saveTransaction(...);
    header('location: '.$paymentsProtocol->getRedirectUrl());
  } catch (Exception $e) {
    echo 'ERROR: ' . $e->getMessage();
  }
