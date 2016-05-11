<?php
/**
 * Created by PhpStorm.
 * User: gabornagy
 * Date: 11/05/16
 * Time: 12:07
 */

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ManualBadgeType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text',array('required'=>false))
            ->add('custom', 'text',array('required'=>false))
            ->add('save', 'submit', array('label' => 'Create Task'))
        ;
    }


    public function getName()
    {
        return 'manual_badge';
    }

}