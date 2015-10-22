<?php

namespace Omnipay\PayPal\Message;

/**
 * PayPal Express Complete Authorize Request
 */
class ExpressAuthorizeOrderRequest extends AbstractRequest
{
    public function getData()
    {
        $this->validate('amount');

        $data = $this->getBaseData();
        $data['METHOD'] = 'DoAuthorization';
        $data['TRANSACTIONID'] = $this->getTransactionId();
        $data['AMT'] = $this->getAmount();
        $data['TRANSACTIONENTITY'] = 'Order';
        $data['CURRENCYCODE'] = $this->getCurrency();

        $data = array_merge($data, $this->getItemData());

        return $data;
    }
}
