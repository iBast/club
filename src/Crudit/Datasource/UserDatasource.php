<?php

declare(strict_types=1);

namespace App\Crudit\Datasource;

use App\Crudit\Datasource\Filterset\UserFilterSet;
use App\Entity\User;
use Lle\CruditBundle\Datasource\AbstractDoctrineDatasource;

class UserDatasource extends AbstractDoctrineDatasource
{
    public function getClassName(): string
    {
        return User::class;
    }

    /**
    * @required
    * @param UserFilterSet $filterSet
    */
    public function setFilterset(UserFilterSet $filterSet): void
    {
         $this->filterset = $filterSet;
    }
}
