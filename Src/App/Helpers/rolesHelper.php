<?php
require_once "../Models/roleClass.php";
require_once "../Config/entitiesConfig.php";

use UniverseLOL\Role;

class RolesHelper
{
    public static function getRoles(mysqli $connect, array $columns): array
    {
        return Helper::getEntities($connect, Role::class, RoleConfig::cases(), $columns, TableName::ROLE->value);
    }

    public static function getRoleById(mysqli $connect,array $columns, string $value): ?Role
    {
        return Helper::getEntitiesFindByField($connect, Role::class, RoleConfig::cases(), $columns, TableName::ROLE->value, RoleConfig::ID->value, $value)[0];
    }
}
