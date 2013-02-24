<?php

/*
 * This file is part of the Omnipay package.
 *
 * (c) Adrian Macneil <adrian@adrianmacneil.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Omnipay\PayPal\Message;

/**
 * PayPal Refund Request
 */
class RefundRequest extends AbstractRequest
{
    public function getData()
    {
        $data = $this->getBaseData('RefundTransaction');

        $this->validate(array('gatewayReference'));

        $data['TRANSACTIONID'] = $this->getGatewayReference();
        $data['REFUNDTYPE'] = 'Full';

        return $data;
    }
}
