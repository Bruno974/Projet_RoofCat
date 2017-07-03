<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AnnonceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description', TextType::class)
            ->add('imageUrl', FileType::class, array(
                'data_class' => null))
            ->add('sexe', ChoiceType::class, array(
                'choices'  => array(
                    'Mâle' => 'male',
                    'Femelle' => 'femelle',
                )))
            ->add('age', TextType::class)
            ->add('signes', TextareaType::class)
            ->add('circonstances', TextareaType::class)
            ->add('identification', TextType::class)
            ->add('sterilisation',  ChoiceType::class, array(
                'choices'  => array(
                    'Oui' => 'oui',
                    'Non' => 'non',
                )))
            ->add('mail', TextType::class)
            ->add('mobile', TextType::class)
            ->add('race', EntityType::class, array(
                'class'        => 'AppBundle:Race',
                'choice_label' => 'nom',
                'multiple'     => false,))
            ->add('departement', EntityType::class, array(
                'class'        => 'AppBundle:Departement',
                'choice_label' => 'departementNom',
                'multiple'     => false,))
            // ->add('categorie', TextType::class)
            ->add('categorie', EntityType::class, array(
                'class'        => 'AppBundle:Categorie',
                'choice_label' => 'nom',
                'multiple'     => false,))

            ->add('Envoyer', SubmitType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Annonce'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_annonce';
    }


}
