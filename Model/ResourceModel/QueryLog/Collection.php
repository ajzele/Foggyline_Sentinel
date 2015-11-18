<?php
/**
 * Copyright © 2016 Foggyline. All rights reserved.
 */

namespace Foggyline\Sentinel\Model\ResourceModel\QueryLog;

/**
 * Class Collection
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Foggyline\Sentinel\Model\QueryLog', 'Foggyline\Sentinel\Model\ResourceModel\QueryLog');
    }
}
