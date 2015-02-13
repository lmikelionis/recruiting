<?php

namespace Acme\DemoBundle\Form\Model;

use Acme\DemoBundle\Entity\User;

class Contact
{
    /**
     * @Assert\Type(type="Acme\DemoBundle\Entity\Contact")
     * @Assert\Valid()
     */
    private $contact;

    public function setContact(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function getContact()
    {
        return $this->contact;
    }
}
