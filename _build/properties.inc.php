<?php
/**
 * Default properties for getValue snippet
 *
 * @package getvalue
 * @subpackage build
 */
$properties = array(
    array(
        'name' => 'default',
        'desc' => 'A default value to use if no value is retrieved by the query.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'class',
        'desc' => 'The xPDOObject class to query the value from.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'where',
        'desc' => 'Query where conditions expressed as a JSON object.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'field',
        'desc' => 'The field to get from the object and return from the snippet',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'sortby',
        'desc' => 'An optional field to sort by.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
    ),
    array(
        'name' => 'sortbyEscaped',
        'desc' => 'Determines if the field name specified in sortby should be escaped. Defaults to 1.',
        'type' => 'list',
        'options' => array(
            array('text' => 'Yes','value' => '1'),
            array('text' => 'No','value' => '0'),
        ),
        'value' => '0',
    ),
    array(
        'name' => 'sortdir',
        'desc' => 'Order which to sort by. Defaults to DESC.',
        'type' => 'list',
        'options' => array(
            array('text' => 'ASC','value' => 'ASC'),
            array('text' => 'DESC','value' => 'DESC'),
        ),
        'value' => 'DESC',
    ),
    array(
        'name' => 'debug',
        'desc' => 'If true, will send the SQL query to the MODx log for inspection. Defaults to false.',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
    ),
);

return $properties;