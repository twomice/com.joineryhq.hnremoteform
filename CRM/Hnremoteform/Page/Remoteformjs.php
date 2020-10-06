<?php
use CRM_Hnremoteform_ExtensionUtil as E;

class CRM_Hnremoteform_Page_Remoteformjs extends CRM_Core_Page {

  public function run() {
    $this->assign('hnremoteform_source_fid', Civi::settings()->get('hnremoteform_source_fid'));
    if (Civi::settings()->get('hnremoteform_source_hide')) {
      $this->assign('hnremoteform_source_div_style', 'display: none');
    }
    // Process template, print, and exit.
    $pageTemplateFile = $this->getHookedTemplateFileName();
    header('Content-Type: application/javascript');
    echo CRM_Core_Smarty::singleton()->fetch($pageTemplateFile);
    CRM_Utils_System::civiExit();
  }

}
