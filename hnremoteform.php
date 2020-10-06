<?php

require_once 'hnremoteform.civix.php';
// phpcs:disable
use CRM_Hnremoteform_ExtensionUtil as E;
// phpcs:enable


function hnremoteform_civicrm_remoteform_extraJsParams($id, &$params) {
  $params .= htmlentities("createFieldDivFunc: hnCreateFieldDiv,") . '<br />';
}

function hnremoteform_civicrm_remoteform_extraJsUrls($id, &$urls) {
  $urls[] = CRM_Utils_System::url('civicrm/hnremoteform/remoteformjs', NULL, TRUE, NULL, NULL, TRUE);
}

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function hnremoteform_civicrm_config(&$config) {
  _hnremoteform_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function hnremoteform_civicrm_xmlMenu(&$files) {
  _hnremoteform_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function hnremoteform_civicrm_install() {
  _hnremoteform_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function hnremoteform_civicrm_postInstall() {
  _hnremoteform_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function hnremoteform_civicrm_uninstall() {
  _hnremoteform_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function hnremoteform_civicrm_enable() {
  _hnremoteform_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function hnremoteform_civicrm_disable() {
  _hnremoteform_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function hnremoteform_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _hnremoteform_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function hnremoteform_civicrm_managed(&$entities) {
  _hnremoteform_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function hnremoteform_civicrm_caseTypes(&$caseTypes) {
  _hnremoteform_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function hnremoteform_civicrm_angularModules(&$angularModules) {
  _hnremoteform_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function hnremoteform_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _hnremoteform_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function hnremoteform_civicrm_entityTypes(&$entityTypes) {
  _hnremoteform_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_thems().
 */
function hnremoteform_civicrm_themes(&$themes) {
  _hnremoteform_civix_civicrm_themes($themes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function hnremoteform_civicrm_preProcess($formName, &$form) {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 */
function hnremoteform_civicrm_navigationMenu(&$menu) {
//  _hnremoteform_get_max_navID($menu, $max_navID);
  _hnremoteform_civix_insert_navigation_menu($menu, 'Administer/Customize Data and Screens', array(
    'label' => E::ts('Remote Forms: Hear Nebraska'),
    'name' => 'Remote Forms: Hear Nebraska',
    'url' => 'civicrm/admin/hnremoteform/settings',
    'permission' => 'administer CiviCRM',
    'operator' => 'AND',
    'separator' => NULL,
//    'navID' => ++$max_navID,
  ));
  _hnremoteform_civix_navigationMenu($menu);
}

/**
 * Log CiviCRM API errors to CiviCRM log.
 */
function _hnremoteform_log_api_error(CiviCRM_API3_Exception $e, string $entity, string $action, array $params) {
  $message = "CiviCRM API Error '{$entity}.{$action}': ". $e->getMessage() .'; ';
  $message .= "API parameters when this error happened: ". json_encode($params) .'; ';
  $bt = debug_backtrace();
  $error_location = "{$bt[1]['file']}::{$bt[1]['line']}";
  $message .= "Error API called from: $error_location";
  CRM_Core_Error::debug_log_message($message);
}

/**
 * CiviCRM API wrapper. Wraps with try/catch, redirects errors to log, saves
 * typing.
 */
function _hnremoteform_civicrmapi(string $entity, string $action, array $params, bool $silence_errors = TRUE) {
  try {
    $result = civicrm_api3($entity, $action, $params);
  } catch (CiviCRM_API3_Exception $e) {
    _hnremoteform_log_api_error($e, $entity, $action, $params);
    if (!$silence_errors) {
      throw $e;
    }
  }

  return $result;
}