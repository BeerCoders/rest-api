<?php
/**
 * This file is part of the rest-api package.
 *
 * @author Rafał Lorenz <vardius@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Action;

use CrudBundle\Actions\Action\{
    DeleteAction, EditAction, ListAction, ShowAction
};
use Doctrine\Common\Collections\ArrayCollection;
use Vardius\Bundle\CrudBundle\Actions\Action\AddAction;
use Vardius\Bundle\CrudBundle\Actions\Provider\ActionsProvider as BaseProvider;

/**
 * Class BaseActionProvider
 * @package AppBundle\Action
 * @author Rafał Lorenz <vardius@gmail.com>
 */
class BaseActionProvider extends BaseProvider
{
    /**
     * Provides actions for controller
     */
    public function getActions():ArrayCollection
    {
        $this
            ->addAction(ListAction::class, [
                'rest_route' => true,
                'requirements' => [
                    '_format' => 'json|xml',
                    'page' => '\d+',
                    'limit' => '\d+',
                ],
//                'checkAccess' => [
//                    'attributes' => ['ROLE_USER']
//                ],
            ])
            ->addAction(AddAction::class, [
                'rest_route' => true,
                'requirements' => [
                    '_format' => 'json|xml'
                ],
//                'checkAccess' => [
//                    'attributes' => ['ROLE_USER']
//                ],
            ])
            ->addAction(EditAction::class, [
                'rest_route' => true,
                'requirements' => [
                    'id' => '\d+',
                    '_format' => 'json|xml'
                ],
//                'checkAccess' => [
//                    'attributes' => ['ROLE_USER']
//                ],
            ])
            ->addAction(DeleteAction::class, [
                'rest_route' => true,
                'requirements' => [
                    'id' => '\d+',
                    '_format' => 'json|xml'
                ],
//                'checkAccess' => [
//                    'attributes' => ['ROLE_USER']
//                ],
            ])
            ->addAction(ShowAction::class, [
                'rest_route' => true,
                'requirements' => [
                    'id' => '\d+',
                    '_format' => 'json|xml'
                ],
//                'checkAccess' => [
//                    'attributes' => ['ROLE_USER']
//                ],
            ]);

        return $this->actions;
    }
}
