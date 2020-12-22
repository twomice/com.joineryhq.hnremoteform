<?php

use CRM_Hnremoteform_ExtensionUtil as E;

return array(
  'hnremoteform_source_fid' => array(
    'group_name' => 'Hnremoteform Settings',
    'group' => 'hnremoteform',
    'name' => 'hnremoteform_source_fid',
    'type' => 'Int',
    'add' => '5.0',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => E::ts('Custom field to store remote form URL; must be a text field attached to contributions. Select "none" to disable this feature.'),
    'title' => E::ts('Remote Source Custom Field'),
    'help_text' => '',
    'html_type' => 'Select',
    'html_attributes' => array(
      'class' => 'crm-select2',
      'style' => "width:auto;",
    ),
    'quick_form_type' => 'Element',
    'X_options_callback' => 'CRM_Hnremoteform_Form_Settings::getCustomFieldOptions',
  ),
  'hnremoteform_source_hide' => array(
    'group_name' => 'Hnremoteform Settings',
    'group' => 'hnremoteform',
    'name' => 'hnremoteform_source_hide',
    'add' => '5.0',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => E::ts('Hide the Source Custom Field on remote forms?'),
    'title' => E::ts('Hide Source Field?'),
    'type' => 'Boolean',
    'quick_form_type' => 'YesNo',
    'default' => 0,
    'html_type' => 'radio',
  ),
);
