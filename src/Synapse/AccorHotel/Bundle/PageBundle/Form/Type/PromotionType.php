<?php
/**
 * Created by PhpStorm.
 * User: guigz
 * Date: 25/11/16
 * Time: 10:47
 */

namespace Synapse\AccorHotel\Bundle\PageBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class PromotionsType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', TextType::class, []);
        $builder->add('description', TextareaType::class, []);
        $builder->add('link', TextType::class, []);
    }
}