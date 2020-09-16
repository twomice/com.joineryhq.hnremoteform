<?php

return array(
  'hnremoteform_source_fid' => array(
    'group_name' => 'Hnremoteform Settings',
    'group' => 'hnremoteform',
    'name' => 'hnremoteform_source_fid',
    'type' => 'Int',
    'add' => '5.0',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => ts('Custom field to store remote form URL; must be a text field attached to contributions. Select "none" to disable this feature.'),
    'title' =>  ts('Remote Source Custom Field'),
    'help_text' => '',
    'html_type' => 'Select',
    'html_attributes' => array(
      'class' => 'crm-select2',
      'style' => "width:auto;",
    ),
    'quick_form_type' => 'Element',
    'X_options_callback' => 'CRM_Hnremoteform_Form_Settings::getCustomFieldOptions',
  ),
 );
