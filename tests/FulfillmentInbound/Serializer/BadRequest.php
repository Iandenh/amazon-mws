<?php

namespace SellerWorks\Amazon\Tests\FulfillmentInbound\Serializer;

use SellerWorks\Amazon\Common\RequestInterface;

/**
 * Returns the operational status of the Orders API section.
 */
final class BadRequest implements RequestInterface
{
    /**
     * {@inheritDoc}
     */
    public function getMetadata()
    {
        return [];
    }
}
