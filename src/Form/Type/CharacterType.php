<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class CharacterType
 *
 * @package  App\Form\Type
 * @author   novlike <novlike@gmail.com>
 */
class CharacterType extends AbstractType
{
    /**
     * Constructeur du formulaire
     *
     * @param FormBuilderInterface $builder Constructeur du formulaire
     * @param array                $options Options du formulaire
     *
     * @author novlike <novlike@gmail.com>
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'characters',
            CheckboxType::class,
            array(
                'label' => 'Le plus moral/honnête',
                'choices' => array(
                    'Marion' => 'M',
                    'Little Jean' => 'J',
                    'Robin' => 'R',
                    'Sheriff' => 'S'
                ),
                'multiple' => false,
            )
        );
    }
}
