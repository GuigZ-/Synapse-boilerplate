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

class PromotionController extends Controller
{
    public function renderAction(ComponentInterface $component, ContentInterface $content)
    {
        /** @var Engine $synapse */
        $synapse = $this->get('synapse');

        if (!$data = $component->getData()) {
            return new Response('');
        }

        return $synapse
            ->createDecorator($component)
            ->decorate([
                'promotion' => $data
            ]);
    }
}