<?php
/**
 * Created by PhpStorm.
 * User: guigz
 * Date: 25/11/16
 * Time: 10:55
 */

namespace Synapse\AccorHotel\Bundle\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Synapse\Cmf\Framework\Engine\Engine;
use Synapse\Cmf\Framework\Theme\Component\Model\ComponentInterface;
use Synapse\Cmf\Framework\Theme\Content\Model\ContentInterface;
use Synapse\Cmf\Framework\Media\Image\Loader\LoaderInterface as ImageLoader;
use Synapse\Cmf\Framework\Engine\Engine as Synapse;

class PromotionController extends Controller
{
    /**
     * @var \Synapse\Cmf\Framework\Media\File\Loader\LoaderInterface
     */
    private $imageLoader;

    /**
     * @var \Synapse\AccorHotel\Bundle\PageBundle\Controller\Synapse
     */
    private $synapse;

    public function __construct(ImageLoader $imageLoader, Synapse $synapse)
    {
        $this->imageLoader = $imageLoader;
        $this->synapse = $synapse;
    }

    public function renderAction(ComponentInterface $component, ContentInterface $content)
    {
        /** @var Engine $synapse */
        $synapse = $this->synapse;

        if (!$data = $component->getData()) {
            return new Response('');
        }

        return $synapse
            ->createDecorator($component)
            ->decorate([
                'promotion' => $data,
                'image' => $this->imageLoader->retrieve($data['image'])
            ]);
    }
}