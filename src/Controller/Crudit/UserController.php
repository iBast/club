<?php

declare(strict_types=1);

namespace App\Controller\Crudit;

use App\Crudit\Config\UserCrudConfig;
use Lle\CruditBundle\Controller\AbstractCrudController;
use Lle\CruditBundle\Controller\TraitCrudController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/user")
 */
class UserController extends AbstractCrudController
{
    use TraitCrudController;

    public function __construct(UserCrudConfig $config)
    {
        $this->config = $config;
    }
}
