<?php

namespace SellerWorks\Amazon\FulfillmentInbound\Entity;

/**
 * Information that is required by an Amazon-partnered carrier to ship a Small Parcel inbound shipment.
 */
final class PartneredSmallParcelDataInput
{
    /**
     * @var string
     */
    public $CarrierName;

    /**
     * @var Array<PartneredSmallParcelPackageInput>
     */
    public $PackageList;

    /**
     * {@inheritDoc}
     */
    public function getMetadata()
    {
        return [
            'CarrierName' => ['type' => 'scalar'],
            'PackageList' => ['type' => 'array', 'subtype' => PartneredSmallParcelPackageInput::class, 'namespace' => 'member'],
        ];
    }
}
