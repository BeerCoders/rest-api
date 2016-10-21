<?php
/**
 * This file is part of the rest-api package.
 *
 * (c) Rafał Lorenz <vardius@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\EventListener;

use Elastica\Query;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Vardius\Bundle\ListBundle\Event\{
    ListEvents, ListResultEvent
};

/**
 * Class ListResultsSubscriber
 * @package Vardius\Bundle\ListBundle\EventListener
 * @author Rafał Lorenz <vardius@gmail.com>
 */
class ListResultsSubscriber implements EventSubscriberInterface
{
    /** @var ContainerInterface */
    protected $container;

    /**
     * ListResultsSubscriber constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            ListEvents::RESULTS => 'onResults'
        );
    }

    public function onResults(ListResultEvent $event)
    {
        $query = $event->getQuery();
        if ($query instanceof Query) {
//            $finder = $this->container->get('fos_elastica.finder.app.products');
//            $results = $finder->find($query);
//            $event->setResults($results);
        }
    }
}
