<?php

namespace AppBundle\Form\Type\Filter;

use AppBundle\Form\Type\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\{
    TextType
};
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class CustomerFilterType
 * @package AppBundle\Form\Type\Filter
 * @author Tomasz piasecki <tpiasecki85@gmail.com>
 */
class CustomerFilterType extends AbstractType
{
    /**
     * @inheritDoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        
        $builder
            ->add('number', TextType::class, [
                'required' => false
            ])
            ->add('name', TextType::class, [
                'required' => false
            ])
            ->add('phoneNumber', TextType::class, [
                'required' => false
            ])

            ->setMethod('GET');
    }

    /**
     * @inheritDoc
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Customer',
            'validation_group' => ['filter'],
        ]);
    }
}
