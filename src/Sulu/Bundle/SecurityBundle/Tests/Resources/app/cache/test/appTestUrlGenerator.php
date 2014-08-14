<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appTestUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appTestUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'sulu_security.roles_navigation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\NavigationController::rolesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/security/navigation/roles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sulu_security.template.role.form' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\TemplateController::roleformAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/security/template/role/form.html',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sulu_security.template.permission.form' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\TemplateController::permissionformAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/security/template/permission/form.html',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sulu_security.template.role.list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\TemplateController::roleListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/security/template/role/list.html',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_role_fields' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\RoleController::getFieldsAction',    '_format' => 'json',  ),  2 =>   array (    '_method' => 'GET',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/roles/fields',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'put_role_fields' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\RoleController::putFieldsAction',    '_format' => 'json',  ),  2 =>   array (    '_method' => 'PUT',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/roles/fields',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_roles' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\RoleController::cgetAction',    '_format' => 'json',  ),  2 =>   array (    '_method' => 'GET',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/roles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_role' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\RoleController::getAction',    '_format' => 'json',  ),  2 =>   array (    '_method' => 'GET',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/roles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'post_role' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\RoleController::postAction',    '_format' => 'json',  ),  2 =>   array (    '_method' => 'POST',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/roles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'put_role' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\RoleController::putAction',    '_format' => 'json',  ),  2 =>   array (    '_method' => 'PUT',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/roles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_role' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\RoleController::deleteAction',    '_format' => 'json',  ),  2 =>   array (    '_method' => 'DELETE',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/roles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_groups' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\GroupController::cgetAction',    '_format' => 'json',  ),  2 =>   array (    '_method' => 'GET',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/groups',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_group' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\GroupController::getAction',    '_format' => 'json',  ),  2 =>   array (    '_method' => 'GET',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/groups',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'post_group' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\GroupController::postAction',    '_format' => 'json',  ),  2 =>   array (    '_method' => 'POST',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/groups',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'put_group' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\GroupController::putAction',    '_format' => 'json',  ),  2 =>   array (    '_method' => 'PUT',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/groups',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_group' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\GroupController::deleteAction',    '_format' => 'json',  ),  2 =>   array (    '_method' => 'DELETE',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/groups',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_user' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\UserController::getAction',    '_format' => 'json',  ),  2 =>   array (    '_method' => 'GET',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'post_user' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\UserController::postAction',    '_format' => 'json',  ),  2 =>   array (    '_method' => 'POST',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'put_user' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\UserController::putAction',    '_format' => 'json',  ),  2 =>   array (    '_method' => 'PUT',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'patch_user' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\UserController::patchAction',    '_format' => 'json',  ),  2 =>   array (    '_method' => 'PATCH',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'put_user_settings' => array (  0 =>   array (    0 => 'id',    1 => 'key',    2 => '_format',  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\UserController::putSettingsAction',    '_format' => 'json',  ),  2 =>   array (    '_method' => 'PUT',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'key',    ),    2 =>     array (      0 => 'text',      1 => '/settings',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    4 =>     array (      0 => 'text',      1 => '/api/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_user_settings' => array (  0 =>   array (    0 => 'id',    1 => 'key',    2 => '_format',  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\UserController::getSettingsAction',    '_format' => 'json',  ),  2 =>   array (    '_method' => 'GET',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'key',    ),    2 =>     array (      0 => 'text',      1 => '/settings',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    4 =>     array (      0 => 'text',      1 => '/api/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_user' => array (  0 =>   array (    0 => 'id',    1 => '_format',  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\UserController::deleteAction',    '_format' => 'json',  ),  2 =>   array (    '_method' => 'DELETE',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/api/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'get_users' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'Sulu\\Bundle\\SecurityBundle\\Controller\\UserController::cgetAction',    '_format' => 'json',  ),  2 =>   array (    '_method' => 'GET',    '_format' => 'json|xml|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|xml|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
