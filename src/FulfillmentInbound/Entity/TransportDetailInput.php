<?php

namespace SellerWorks\Amazon\FulfillmentInbound\Entity;

/**
 * Information required to create an Amazon-partnered carrier shipping estimate, or to alert the Amazon Fulfillment
 * Network to the arrival of an inbound shipment by a non-Amazon-partnered carrier.
 */
final class TransportDetailInput
{
    /**
     * @var PartneredSmallParcelDataInput
     */
    public $PartneredSmallParcelData;

    /**
     * @var NonPartneredSmallParcelDataInput
     */
    public $NonPartneredSmallParcelData;

    /**
     * @var PartneredLtlDataInput
     */
    public $PartneredLtlData;

    /**
     * @var NonPartneredLtlDataInput
     */
    public $NonPartneredLtlData;
}
