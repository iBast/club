<?php

declare(strict_types=1);

namespace App\Crudit\Datasource;

use Lle\CredentialBundle\Entity\GroupCredential;
use Lle\CruditBundle\Datasource\AbstractDoctrineDatasource;

class GroupCredentialDatasource extends AbstractDoctrineDatasource
{
    public function getClassName(): string
    {
        return GroupCredential::class;
    }
}
