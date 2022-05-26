<?php

declare(strict_types=1);

namespace App\Crudit\Datasource\Filterset;

use Lle\CruditBundle\Datasource\AbstractFilterSet;
use Lle\CruditBundle\Filter\FilterType\StringFilterType;

class UserFilterSet extends AbstractFilterSet
{
    /**
    * @return array
    */
    public function getFilters(): array
    {
        return [
            StringFilterType::new('id'),
            StringFilterType::new('email'),
            StringFilterType::new('roles'),
            StringFilterType::new('password'),
        ];
     }
}
