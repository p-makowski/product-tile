<?php

$objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();

$product = $objectManager->create(\Magento\Catalog\Model\Product::class);
$product->setTypeId(\Magento\Catalog\Model\Product\Type::TYPE_SIMPLE)
    ->setId(400)
    ->setAttributeSetId(4)
    ->setName('Product')
    ->setSku('product')
    ->setUrlKey('product')
    ->setPrice(10)
    ->setVisibility(\Magento\Catalog\Model\Product\Visibility::VISIBILITY_BOTH)
    ->setStatus(\Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_ENABLED)
    ->setWebsiteIds([1])
    ->setStockData(['use_config_manage_stock' => 1, 'qty' => 0, 'is_qty_decimal' => 0, 'is_in_stock' => 1])
    ->setCanSaveCustomOptions(true)
    ->save();
