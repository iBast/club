<?php

declare(strict_types=1);

namespace App\Crudit\Config;

use Lle\CruditBundle\Dto\Field\Field;
use Lle\CruditBundle\Crud\AbstractCrudConfig;
use Lle\CruditBundle\Contracts\CrudConfigInterface;
use App\Crudit\Datasource\GroupCredentialDatasource;
use Lle\CruditBundle\Field\TextField;

class GroupCredentialCrudConfig extends AbstractCrudConfig
{
    public function __construct(
        GroupCredentialDatasource $datasource
    ) {
        $this->datasource = $datasource;
    }

    /**
     * @param string $key
     * @return Field[]
     */
    public function getFields($key): array
    {
        // $allowed = Field::new('allowed');
        // $credential = Field::new('credential');
        $groupe = Field::new('groupe', TextField::class)->setOptions(['kikoo']);

        // You can return different fields based on the block key
        if ($key == CrudConfigInterface::INDEX || $key == CrudConfigInterface::SHOW) {
            return [
                // $allowed,
                // $credential,
                $groupe,
            ];
        }

        return [];
    }

    public function getRootRoute(): string
    {
        return 'app_crudit_groupcredential';
    }
}
