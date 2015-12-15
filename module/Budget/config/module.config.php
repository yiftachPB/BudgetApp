<?php
return array(
    'zf-versioning' => array(
        'default_version' => 1,
        'uri' => array(
            0 => 'budget.rest.expense',
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Budget\\V1\\Rest\\Expense\\ExpenseResource' => 'Budget\\V1\\Rest\\Expense\\ExpenseResourceFactory',
        ),
    ),
    'router' => array(
        'routes' => array(
            'budget.rest.expense' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/expense[/:expense_id]',
                    'defaults' => array(
                        'controller' => 'Budget\\V1\\Rest\\Expense\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-rest' => array(
        'Budget\\V1\\Rest\\Expense\\Controller' => array(
            'listener' => 'Budget\\V1\\Rest\\Expense\\ExpenseResource',
            'route_name' => 'budget.rest.expense',
            'route_identifier_name' => 'expense_id',
            'collection_name' => 'expense',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Budget\\V1\\Rest\\Expense\\ExpenseEntity',
            'collection_class' => 'Budget\\V1\\Rest\\Expense\\ExpenseCollection',
            'service_name' => 'Expense',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Budget\\V1\\Rest\\Expense\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'Budget\\V1\\Rest\\Expense\\Controller' => array(
                0 => 'application/vnd.budget.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'Budget\\V1\\Rest\\Expense\\Controller' => array(
                0 => 'application/vnd.budget.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Budget\\V1\\Rest\\Expense\\ExpenseEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'budget.rest.expense',
                'route_identifier_name' => 'expense_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Budget\\V1\\Rest\\Expense\\ExpenseCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'budget.rest.expense',
                'route_identifier_name' => 'expense_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-content-validation' => array(
        'Budget\\V1\\Rest\\Expense\\Controller' => array(
            'input_filter' => 'Budget\\V1\\Rest\\Expense\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'Budget\\V1\\Rest\\Expense\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'amount',
            ),
        ),
    ),
);
