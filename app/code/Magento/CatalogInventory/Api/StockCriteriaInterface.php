<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\CatalogInventory\Api;

/**
 * Interface StockCriteriaInterface
 * @api
 * @since 100.0.2
 *
 * @deprecated CatalogInventory will be replaced by Multi-Source Inventory (MSI)
 *             see https://github.com/magento-engcom/msi/wiki/Technical-Vision.-Catalog-Inventory
 */
interface StockCriteriaInterface extends \Magento\Framework\Api\CriteriaInterface
{
    /**
     * Add Criteria object
     *
     * @param \Magento\CatalogInventory\Api\StockCriteriaInterface $criteria
     * @return bool
     */
    public function addCriteria(\Magento\CatalogInventory\Api\StockCriteriaInterface $criteria);

    /**
     * Add scope filter to collection
     *
     * @param int $scope
     * @return bool
     */
    public function setScopeFilter($scope);
}
