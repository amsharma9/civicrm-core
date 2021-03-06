<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2017                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Core/ActionMapping.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:3ae720be63fdf4626db2d1508c2d8f44)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
/**
 * CRM_Core_DAO_ActionMapping constructor.
 */
class CRM_Core_DAO_ActionMapping extends CRM_Core_DAO {
  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_action_mapping';
  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var boolean
   */
  static $_log = false;
  /**
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Entity for which the reminder is created
   *
   * @var string
   */
  public $entity;
  /**
   * Entity value
   *
   * @var string
   */
  public $entity_value;
  /**
   * Entity value label
   *
   * @var string
   */
  public $entity_value_label;
  /**
   * Entity status
   *
   * @var string
   */
  public $entity_status;
  /**
   * Entity status label
   *
   * @var string
   */
  public $entity_status_label;
  /**
   * Entity date
   *
   * @var string
   */
  public $entity_date_start;
  /**
   * Entity date
   *
   * @var string
   */
  public $entity_date_end;
  /**
   * Entity recipient
   *
   * @var string
   */
  public $entity_recipient;
  /**
   * Class constructor.
   */
  function __construct() {
    $this->__table = 'civicrm_action_mapping';
    parent::__construct();
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Action Mapping ID') ,
          'required' => true,
          'table_name' => 'civicrm_action_mapping',
          'entity' => 'ActionMapping',
          'bao' => 'CRM_Core_DAO_ActionMapping',
          'localizable' => 0,
        ) ,
        'entity' => array(
          'name' => 'entity',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Action Mapping Entity') ,
          'description' => 'Entity for which the reminder is created',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_action_mapping',
          'entity' => 'ActionMapping',
          'bao' => 'CRM_Core_DAO_ActionMapping',
          'localizable' => 0,
        ) ,
        'entity_value' => array(
          'name' => 'entity_value',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Action Mapping Entity Value') ,
          'description' => 'Entity value',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_action_mapping',
          'entity' => 'ActionMapping',
          'bao' => 'CRM_Core_DAO_ActionMapping',
          'localizable' => 0,
        ) ,
        'entity_value_label' => array(
          'name' => 'entity_value_label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Value Label') ,
          'description' => 'Entity value label',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_action_mapping',
          'entity' => 'ActionMapping',
          'bao' => 'CRM_Core_DAO_ActionMapping',
          'localizable' => 0,
        ) ,
        'entity_status' => array(
          'name' => 'entity_status',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Status') ,
          'description' => 'Entity status',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_action_mapping',
          'entity' => 'ActionMapping',
          'bao' => 'CRM_Core_DAO_ActionMapping',
          'localizable' => 0,
        ) ,
        'entity_status_label' => array(
          'name' => 'entity_status_label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Status Label') ,
          'description' => 'Entity status label',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_action_mapping',
          'entity' => 'ActionMapping',
          'bao' => 'CRM_Core_DAO_ActionMapping',
          'localizable' => 0,
        ) ,
        'entity_date_start' => array(
          'name' => 'entity_date_start',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Entity Start Date') ,
          'description' => 'Entity date',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_action_mapping',
          'entity' => 'ActionMapping',
          'bao' => 'CRM_Core_DAO_ActionMapping',
          'localizable' => 0,
        ) ,
        'entity_date_end' => array(
          'name' => 'entity_date_end',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Entity End Date') ,
          'description' => 'Entity date',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_action_mapping',
          'entity' => 'ActionMapping',
          'bao' => 'CRM_Core_DAO_ActionMapping',
          'localizable' => 0,
        ) ,
        'entity_recipient' => array(
          'name' => 'entity_recipient',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Entity Recipient') ,
          'description' => 'Entity recipient',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_action_mapping',
          'entity' => 'ActionMapping',
          'bao' => 'CRM_Core_DAO_ActionMapping',
          'localizable' => 0,
        ) ,
      );
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }
  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName() {
    return self::$_tableName;
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog() {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'action_mapping', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'action_mapping', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of indices
   */
  public static function indices($localize = TRUE) {
    $indices = array();
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }
}
