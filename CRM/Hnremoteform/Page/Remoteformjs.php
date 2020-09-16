<?php
use CRM_Hnremoteform_ExtensionUtil as E;

class CRM_Hnremoteform_Page_Remoteformjs extends CRM_Core_Page {

  public function run() {

    header('Content-Type: application/javascript');
          header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
          header('Access-Control-Allow-Credentials: true');
          header('Access-Control-Max-Age: 86400');    // cache for 1 day
    
    $this->assign('hnremoteform_source_fid', Civi::settings()->get('hnremoteform_source_fid'));
            $pageTemplateFile = $this->getHookedTemplateFileName();
die(CRM_Core_Smarty::singleton()->fetch($pageTemplateFile));
    
    
  }

}
