<?php 
 return array (
  'create' => 
  array (
  ),
  'getTradePayCashAmount' => 
  array (
  ),
  'getRefundDays' => 
  array (
  ),
  'isOrderPaid' => 
  array (
  ),
  'createSpecialOrder' => 
  array (
  ),
  'getOrderProduct' => 
  array (
  ),
  'getOrderProductByOrderItem' => 
  array (
  ),
  'checkOrderBeforePay' => 
  array (
  ),
  'sumOrderItemPayAmount' => 
  array (
  ),
  'adjustOrderPrice' => 
  array (
    'module' => 'order',
    'action' => 'adjust_price',
    'param' => 'orderId',
    'postfix' => '',
    'funcName' => 'getOrder',
    'funcParam' => 
    array (
      0 => 'orderId',
      1 => 'newPayAmount',
    ),
    'service' => 'Order:OrderService',
  ),
  'getOrderAdjustInfo' => 
  array (
  ),
  'addDealer' => 
  array (
  ),
);