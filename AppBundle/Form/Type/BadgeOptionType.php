<?php
/**
 * Created by PhpStorm.
 * User: gabornagy
 * Date: 04/05/16
 * Time: 14:50
 */

namespace AppBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BadgeOptionType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('key','hidden');
        $builder->add('value','text');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\AutomaticBadgeOption',
        ));
    }

    public function getName()
    {
        return 'badge_option';
    }

}