<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('username'),
            TextField::new('password')->setFormTypeOption('attr', ['type' => 'password']),
            ChoiceField::new('roles')
                ->setChoices([
                    'Administrateur' => 'ROLE_ADMIN',
                    'Vétérinaire' => 'ROLE_VETERINAIRE',
                    'Employé' => 'ROLE_EMPLOYE',
                ])
                ->allowMultipleChoices(),
        ];
    }
}
