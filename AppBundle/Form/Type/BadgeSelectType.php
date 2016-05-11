<?php
/**
 * Created by PhpStorm.
 * User: gabornagy
 * Date: 11/05/16
 * Time: 15:00
 */

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Form\Type\ManualBadgeType;
use AppBundle\Form\Type\AutomaticBadgeType;

class BadgeSelectType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', 'choice', array(
                'choices' => array('AutomaticBadgeType' => 'auto', 'ManualBadgeType' => 'manual'),
                'empty_data' => 1
            ))
            ->add('save', 'submit', array('label' => 'Create Task'));


        $formModifier = function (FormInterface $form, $sport = null) {
            $positions = null === $sport ? 'AutomaticBadgeType' : $sport;
            $class = 'AppBundle\\Form\\Type\\'.$positions;

            $form->add('badge',new $class());
        };

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {
                // this would be your entity, i.e. SportMeetup
                $data = $event->getData();

                $formModifier($event->getForm(), $data);
            }
        );

        $builder->get('type')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifier) {
                // It's important here to fetch $event->getForm()->getData(), as
                // $event->getData() will get you the client data (that is, the ID)
                $sport = $event->getForm()->getData();
dump($sport);
               // die;
                // since we've added the listener to the child, we'll have to pass on
                // the parent to the callback functions!
                $formModifier($event->getForm()->getParent(), $sport);
            }
        );

    }


    public function getName()
    {
        return 'badge_select';
    }

}