<?php

declare(strict_types=1);

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class GroupCredentialType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('allowed');
        $builder->add('credential');
        $builder->add('groupe');
    }

    public function getName(): string
    {
        return 'groupcredential_form';
    }
}
