<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Role;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\ChoiceList\ChoiceList;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // $roles = $options['roles'];

        $builder
            ->add('username')
            ->add('password', PasswordType::class)
            ->add('nama_depan')
            ->add('nama_belakang')
            ->add('hp')
            ->add('role');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver
        ->setDefaults([
            'data_class' => User::class
        ]);
    }
}
