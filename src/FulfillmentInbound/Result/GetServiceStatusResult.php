<?php

namespace SellerWorks\Amazon\FulfillmentInbound\Result;

use SellerWorks\Amazon\Common\ResultInterface;

/**
 * GetServiceStatus result object.
 */
final class GetServiceStatusResult implements ResultInterface
{
    /**
     * @var string
     */
    public $Status;
    
    /**
     * @var string
     */
    public $Timestamp;
}
