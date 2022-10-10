<?php

namespace Humcommerce\StorePickup\Model\ResourceModel\Region;

use Humcommerce\StorePickup\Model\Region as RegionModel;
use Humcommerce\StorePickup\Model\ResourceModel\Region as RegionResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection {
    protected function _construct()
    {
        $this->_init(RegionModel::class, RegionResourceModel::class);
    }
}