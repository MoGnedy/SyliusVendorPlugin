<?php

declare(strict_types=1);

namespace Tests\Odiseo\SyliusVendorPlugin\Behat\Page\Shop\Vendor;

use FriendsOfBehat\PageObjectExtension\Page\SymfonyPage;

final class IndexPage extends SymfonyPage implements IndexPageInterface
{
    /**
     * @inheritdoc
     */
    public function getRouteName(): string
    {
        return 'odiseo_sylius_vendor_plugin_shop_vendor_index';
    }

    /**
     * @inheritdoc
     */
    public function hasPagesNumber(int $pagesNumber): bool
    {
        $vendorsNumberOnPage = count($this->getElement('vendors')->findAll('css', '.brand'));

        return $pagesNumber == $vendorsNumberOnPage;
    }

    /**
     * @inheritdoc
     */
    protected function getDefinedElements(): array
    {
        return array_merge(parent::getDefinedElements(), [
            'vendors' => '#odiseo-vendors'
        ]);
    }
}
