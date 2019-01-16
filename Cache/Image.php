<?php

namespace MageSuite\ProductTile\Cache;

class Image implements CacheKeyModel, \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /**
     * @var \Magento\Catalog\Helper\Image
     */
    protected $imageHelper;

    public function __construct(\Magento\Catalog\Helper\Image $imageHelper)
    {
        $this->imageHelper = $imageHelper;
    }

    /**
     * @param \MageSuite\ProductTile\Block\Tile\Fragment $fragment
     * @return string[]
     */
    public function getCacheKeyInfo(\MageSuite\ProductTile\Block\Tile\Fragment $fragment)
    {
        $imageUrl = $this->imageHelper->init($fragment->getProduct(), 'category_page_grid')->getUrl();

        return [$imageUrl];
    }
}