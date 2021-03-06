<?php
/**
 * This file is part of the rest-api package.
 *
 * (c) Mateusz Bosek <bosek.mateusz@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\ListView;

use AppBundle\Entity\File;
use AppBundle\Form\Type\Filter\FileFilterType;
use Vardius\Bundle\ListBundle\Column\Types\Type\{
    CallableType, PropertyType
};
use Vardius\Bundle\ListBundle\ListView\ListView;
use Vardius\Bundle\ListBundle\ListView\Provider\ListViewProvider;

/**
 * Class FileListViewProvider
 * @package AppBundle\ListView
 * @author Mateusz Bosek <bosek.mateusz@gmail.com>
 */
class FileListViewProvider extends ListViewProvider
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
            ->addColumn('path', PropertyType::class)
            ->addColumn('created', CallableType::class, [
                'callback' => function (File $user) {
                    $date = $user->getCreated();

                    return $date ? $date->getTimestamp() : $date;
                },
            ])
            ->addColumn('updated', CallableType::class, [
                'callback' => function (User $user) {
                    $updated = $user->getUpdated();

                    return $updated ? $updated->getTimestamp() : $updated;
                }
            ])
            ->addFilter(FileFilterType::class, 'provider.files_filter');

        return $listView;
    }
}
