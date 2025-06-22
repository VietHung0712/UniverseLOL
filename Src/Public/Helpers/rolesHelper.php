<?php
require_once __DIR__ . '/../Models/roleClass.php';

use UniverseLOL\Role;

class RolesHelper extends EntityHelper
{
    protected static function getTableConfig(): string
    {
        return TableName::ROLE->value;
    }

    protected static function getClassName(): string
    {
        return Role::class;
    }

    protected static function getConfigCases(): array
    {
        return RoleConfig::cases();
    }

    protected static function getIdConfig(): string
    {
        return RoleConfig::ID->value;
    }
}
