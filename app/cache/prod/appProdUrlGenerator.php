<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'cableonda_adminin_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Cableonda\\AdmininBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
        'sonata_admin_redirect' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => 'sonata_admin_dashboard',    'permanent' => 'true',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),),
        'sonata_admin_dashboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/dashboard',    ),  ),  4 =>   array (  ),),
        'sonata_admin_retrieve_form_element' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/get-form-field-element',    ),  ),  4 =>   array (  ),),
        'sonata_admin_append_form_element' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/append-form-field-element',    ),  ),  4 =>   array (  ),),
        'sonata_admin_short_object_information' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',    '_format' => 'html',  ),  2 =>   array (    '_format' => 'html|json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'html|json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/admin/core/get-short-object-description',    ),  ),  4 =>   array (  ),),
        'sonata_admin_set_object_field_value' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/set-object-field-value',    ),  ),  4 =>   array (  ),),
        'sonata_admin_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/search',    ),  ),  4 =>   array (  ),),
        'admin_cableonda_adminin_logslogin_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',    '_sonata_admin' => 'sonata.admin.logslogin',    '_sonata_name' => 'admin_cableonda_adminin_logslogin_list',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/cableonda/adminin/logslogin/list',    ),  ),  4 =>   array (  ),),
        'admin_cableonda_adminin_logslogin_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',    '_sonata_admin' => 'sonata.admin.logslogin',    '_sonata_name' => 'admin_cableonda_adminin_logslogin_create',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/cableonda/adminin/logslogin/create',    ),  ),  4 =>   array (  ),),
        'admin_cableonda_adminin_logslogin_batch' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',    '_sonata_admin' => 'sonata.admin.logslogin',    '_sonata_name' => 'admin_cableonda_adminin_logslogin_batch',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/cableonda/adminin/logslogin/batch',    ),  ),  4 =>   array (  ),),
        'admin_cableonda_adminin_logslogin_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',    '_sonata_admin' => 'sonata.admin.logslogin',    '_sonata_name' => 'admin_cableonda_adminin_logslogin_edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/cableonda/adminin/logslogin',    ),  ),  4 =>   array (  ),),
        'admin_cableonda_adminin_logslogin_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',    '_sonata_admin' => 'sonata.admin.logslogin',    '_sonata_name' => 'admin_cableonda_adminin_logslogin_delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/cableonda/adminin/logslogin',    ),  ),  4 =>   array (  ),),
        'admin_cableonda_adminin_logslogin_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',    '_sonata_admin' => 'sonata.admin.logslogin',    '_sonata_name' => 'admin_cableonda_adminin_logslogin_show',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/cableonda/adminin/logslogin',    ),  ),  4 =>   array (  ),),
        'admin_cableonda_adminin_logslogin_export' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',    '_sonata_admin' => 'sonata.admin.logslogin',    '_sonata_name' => 'admin_cableonda_adminin_logslogin_export',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/cableonda/adminin/logslogin/export',    ),  ),  4 =>   array (  ),),
        'leydi' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cableonda\\AdmininBundle\\Controller\\DefaultController::IndexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/leydi',    ),  ),  4 =>   array (  ),),
        'soap' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cableonda\\AdmininBundle\\Controller\\LogsesionesController::IndexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/soap',    ),  ),  4 =>   array (  ),),
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

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
