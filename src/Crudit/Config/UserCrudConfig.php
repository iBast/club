<?php
declare(strict_types=1);

namespace App\Crudit\Config;

use Lle\CruditBundle\Dto\Field\Field;
use Lle\CruditBundle\Crud\AbstractCrudConfig;
use Lle\CruditBundle\Contracts\CrudConfigInterface;
use App\Crudit\Datasource\UserDatasource;

class UserCrudConfig extends AbstractCrudConfig
{
    public function __construct(
        UserDatasource $datasource
    )
    {
        $this->datasource = $datasource;
    }

    /**
    * @param string $key
    * @return Field[]
    */
    public function getFields($key): array
    {
        $id = Field::new('id');
        $email = Field::new('email');
        $roles = Field::new('roles');
        $password = Field::new('password');

        // You can return different fields based on the block key
        if ($key == CrudConfigInterface::INDEX || $key == CrudConfigInterface::SHOW) {
            return [
               $id,
               $email,
               $roles,
               $password,
            ];
        }

        return [];
    }

    public function getRootRoute(): string
    {
        return 'app_crudit_user';
    }

}
