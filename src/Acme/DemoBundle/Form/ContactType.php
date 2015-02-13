<?php

namespace Acme\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', 'email');
        $builder->add('message', 'textarea');

        $builder->add('category', 'choice', array(
                    'choices' => array('Sales' => 'Sales',
                                'Technical Questions' => 'Technical Questions',
                                'Other' => 'Other',
                                )
        ));

    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {

        $resolver->setDefaults(array(
            'data_class' => 'Acme\DemoBundle\Entity\Contact'
        ));
    }

    public function getName()
    {
        return 'contact';
    }
}
