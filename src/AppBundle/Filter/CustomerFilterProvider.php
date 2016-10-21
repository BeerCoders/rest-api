<?php


namespace AppBundle\Filter;

use Vardius\Bundle\ListBundle\Filter\Provider\FilterProvider;
use Vardius\Bundle\ListBundle\Filter\Types\Type\{
     TextType
};

/**
 * Class CustomerFilterProvider
 * @package AppBundle\Filter
 * @author Tomasz piasecki <tpiasecki85@gmail.com>
 */
class CustomerFilterProvider extends FilterProvider
{
    /**
     * @inheritDoc
     */
    public function build()
    {
        $this
            ->addFilter('name', TextType::class)
            ->addFilter('number', TextType::class)
            ->addFilter('phoneNumber', TextType::class);

    }
}