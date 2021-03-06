<?php
/**
 * getValue
 *
 * Get a single value from any valid xPDOObject class.
 *
 * @author Jason Coward
 * @copyright Copyright 2010, Jason Coward
 * @version 1.0.0-beta - October 12, 2010
 *
 * Note that the xPDOObject derivative class must be in a package that is available to the modX instance.
 */
$value = !empty($default) ? $default : '';
if ($criteria = $modx->newQuery($class, $modx->fromJSON($where))) {
    $pk = $modx->getPK($class);
    if (!is_array($pk)) {
        $pk = array($pk);
    } else {
        $pk = array_values($pk);
    }
    $criteria->select($modx->getSelectColumns($class, '', '', array_merge($pk, array($field))));
    if (!empty($sortby)) {
        if (!empty($sortbyEscaped)) $sortby = $modx->escape($sortby);
        $criteria->sortby($sortby, $sortdir);
    }
    if (!empty($debug)) {
        $criteria->prepare();
        $modx->log(modX::LOG_LEVEL_ERROR, "SQL: {$criteria->toSql()}", '', __FUNCTION__, __FILE__, __LINE__);
    }
    if ($object = $modx->getObject($class, $criteria)) {
        $value = $object->get($field);
    }
}
return $value;
?>