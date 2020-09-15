/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
console.log('the bar' );

  
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
    console.log(div);
  }
  return div;
};
 
  /**
   * ### wrapField
   *
   * ```wrapField(key, def, field)```
   *
   * Return an HTML entity that includes both the given field and a label.
   *
   * #### Parameters
   *  - key - The unique string id for the field
   *  - def - The CiviCRM provided field definition object.
   *  - field - An HTML entity with the field 
   *
   * ### Returns
   *
   * HTML entity.
   */
var wrapField_17 = function wrapField_17(key, def, field) {
    var div = document.createElement('div');
    div.className = cfg.css.inputDiv;
    div.style="border: 1px solid red;";
    if (typeof def.html_type != 'undefined' && def.html_type == 'formatting') {
      var formatting = document.createElement('div');
      formatting.innerHTML = def.help_pre;
      div.appendChild(formatting);
      return div;
    }

    if (def.help_pre) {
      var small = document.createElement('small');
      small.className = cfg.css.small;
      small.innerHTML = def.help_pre;
      div.appendChild(small);
    }

    var label = document.createElement('label');
    if (cfg.displayLabels == true) {
      label.className = cfg.css.label;
    }
    else {
      // sr_only will hide except for screen readers.
      label.className = cfg.css.sr_only;
    }
    label.for = key;
    label.innerHTML = def.title;
    div.appendChild(label);

    div.appendChild(field);
    if (def.help_post) {
      var small = document.createElement('small');
      small.className = cfg.css.small;
      small.innerHTML = def.help_post;
      div.appendChild(small);
    }
    return div;
  };