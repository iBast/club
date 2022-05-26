<?php

declare(strict_types=1);

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('id');
        $builder->add('email');
        $builder->add('roles');
        $builder->add('password');
    }

    public function getName(): string
    {
        return 'user_form';
    }
}
