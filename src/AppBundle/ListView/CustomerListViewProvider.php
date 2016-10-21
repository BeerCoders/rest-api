<?php

/**
 * This file is part of the rest-api package.
 *
 * (c) Rafał Lorenz <vardius@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\ListView;

use AppBundle\Form\Type\Filter\CustomerFilterType;
use Vardius\Bundle\ListBundle\Column\Types\Type\{
     PropertyType
};
use Vardius\Bundle\ListBundle\ListView\ListView;
use Vardius\Bundle\ListBundle\ListView\Provider\ListViewProvider;

/**
 * Class UserListViewProvider
 * @package AppBundle\ListView
 * @author Tomasz piasecki <tpiasecki85@gmail.com>
 */
class CustomerListViewProvider extends ListViewProvider
{
    /**
     * @inheritDoc
     */
    public function buildListView():ListView
    {
        $listView = $this->listViewFactory->get();

        $listView
            ->addColumn('id', PropertyType::class)
            ->addColumn('name', PropertyType::class)
            ->addColumn('phoneNumber', PropertyType::class)
            ->addColumn('number', PropertyType::class)
            ->addFilter(CustomerFilterType::class, 'provider.customers_filter');

        return $listView;
    }
}

