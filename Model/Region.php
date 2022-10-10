<?php

namespace Humcommerce\StorePickup\Model;

use Humcommerce\StorePickup\Model\ResourceModel\Region as RegionResourceModel;
use Magento\Framework\Model\AbstractModel;

class Region extends AbstractModel {
    protected function _construct()
    {
        $this->_init(RegionResourceModel::class);
    }
}