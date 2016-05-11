<?php
/**
 * Created by PhpStorm.
 * User: gabornagy
 * Date: 11/05/16
 * Time: 12:02
 */

namespace AppBundle\Form\Type;

use AppBundle\Entity\AutomaticBadge;
use AppBundle\Entity\AutomaticBadgeOption;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AutomaticBadgeType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text',array('required'=>false))
            ->add('custom', 'text',array('required'=>false))
            ->add('options', 'collection', array('type' => new BadgeOptionType()))
            ->add('save', 'submit', array('label' => 'Create Task'))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {

        $a = new AutomaticBadgeOption();
        $a->setKey('hello');
        $a->setValue('world');

        $b = new AutomaticBadge();
        $b->setName('sdsd');
        $b->addOption($a);

        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\AutomaticBadge',
            'data' => $b,
        ));

    }


    public function getName()
    {
        return 'automatic_badge';
    }

}