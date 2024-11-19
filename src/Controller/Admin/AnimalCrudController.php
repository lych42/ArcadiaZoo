<?php

namespace App\Controller\Admin;

use App\Entity\Animal;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField; 
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class AnimalCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Animal::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('prenom'),
            TextField::new('etat'),
            AssociationField::new('habitat')->setRequired(true),
            AssociationField::new('race')->setRequired(true),
            ImageField::new('image') ->setBasePath('public/images') 
            ->setUploadDir('public/images') 
            ->setUploadedFileNamePattern('[randomhash].[extension]') 
            ->setRequired(false),
        ];
    }
    
}
