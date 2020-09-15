  
var hnCreateFieldDiv = function hnCreateFieldDiv(key, def, type, createFieldFunc, wrapFieldFunc) {
  
  if (key == 'custom_17') {
    def.default_value=window.location.href;
  }
  
  var field = createFieldFunc(key, def, type);
  if (field === null) {
    return null;
  } 
  
  var div = wrapFieldFunc(key, def, field);
  if (key == 'custom_17') {
    div.style="border: 1px solid red;  x-display: none";
  }
  return div;
};
