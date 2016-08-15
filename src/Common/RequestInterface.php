<?php

namespace SellerWorks\Amazon\Common;

/**
 * Interface for all Request objects.
 */
interface RequestInterface
{
    /**
     * Return metadata about this object.
     *
     * @return array
     */
    public function getMetadata();
}
