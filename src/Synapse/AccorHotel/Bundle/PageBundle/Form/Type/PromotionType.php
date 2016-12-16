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
use Synapse\Cmf\Bundle\Form\Type\Media\ImageChoiceType;

class PromotionType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('headtitle', TextType::class, ['required' => false])
            ->add('title', TextareaType::class, [])
            ->add('description', TextareaType::class, [])
            ->add('link', TextType::class, [])
            ->add('image', ImageChoiceType::class, [])
        ;
    }
}