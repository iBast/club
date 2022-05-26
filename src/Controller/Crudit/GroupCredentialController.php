<?php

declare(strict_types=1);

namespace App\Controller\Crudit;

use Symfony\Component\Routing\Annotation\Route;
use App\Crudit\Config\GroupCredentialCrudConfig;
use Lle\CruditBundle\Controller\TraitCrudController;
use Lle\CruditBundle\Controller\AbstractCrudController;

/**
 * @Route("/groupcredential")
 */
class GroupCredentialController extends AbstractCrudController
{
    use TraitCrudController;

    public function __construct(GroupCredentialCrudConfig $config)
    {
        $this->config = $config;
    }
}
