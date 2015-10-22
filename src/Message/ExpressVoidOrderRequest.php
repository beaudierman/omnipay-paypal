<?php

namespace Omnipay\PayPal\Message;

/**
 * PayPal Express Complete Authorize Request
 */
class ExpressVoidOrderRequest extends AbstractRequest
{
    public function getData()
    {
        $data = $this->getBaseData();
        $data['METHOD'] = 'DoVoid';
        $data['AUTHORIZATIONID'] = $this->getTransactionId();

        $data = array_merge($data, $this->getItemData());

        return $data;
    }
}
