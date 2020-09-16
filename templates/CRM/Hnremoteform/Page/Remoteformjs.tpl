
var hnremoteform_source_fid='{$hnremoteform_source_fid}';
{literal}
var hnCreateFieldDiv = function hnCreateFieldDiv(key, def, type, createFieldFunc, wrapFieldFunc) {
  
  if (key == 'custom_'+ hnremoteform_source_fid) {
    def.default_value=window.location.href;
  }
  
  var field = createFieldFunc(key, def, type);
  if (field === null) {
    return null;
  } 
  
  var div = wrapFieldFunc(key, def, field);
  if (key == 'custom_' + hnremoteform_source_fid) {
    div.style="border: 1px solid purple;  x-display: none";
  }
  return div;
};
{/literal}
