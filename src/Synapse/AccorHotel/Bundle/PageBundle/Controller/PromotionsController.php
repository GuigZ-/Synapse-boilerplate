<?php

namespace Synapse\AccorHotel\Bundle\PageBundle\Controller;

use Synapse\Page\Bundle\Controller\PageContentController as SynapsePageContentController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Synapse\Page\Bundle\Entity\Page;

/**
 * Controller class for Page Synapse content type.
 */
class PromotionsController extends SynapsePageContentController
{
    public function renderAction($path, Request $request)
    {
        if (!$page = $this->get('synapse.page.loader')->retrieveByPath($path)) {
            throw new NotFoundHttpException(sprintf('No online page found at path "%s".',
                $path
            ));
        }

        return $this->get('synapse')
            ->createDecorator($page, 'promotions')
            ->decorate(array(
                'page' => $page,
                'request' => $request,
            ))
            ;
    }
}
