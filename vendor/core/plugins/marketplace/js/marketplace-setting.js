(()=>{function t(e){return t="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},t(e)}function e(t,e){for(var n=0;n<e.length;n++){var o=e[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(t,i(o.key),o)}}function i(e){var i=function(e,i){if("object"!=t(e)||!e)return e;var n=e[Symbol.toPrimitive];if(void 0!==n){var o=n.call(e,i||"default");if("object"!=t(o))return o;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===i?String:Number)(e)}(e,"string");return"symbol"==t(i)?i:i+""}var n=function(){return t=function t(){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),this.eventListeners()},i=[{key:"eventListeners",value:function(){var t=this;$(document).on("click",'[data-bb-toggle="commission-category-add"]',(function(e){return e.preventDefault(),e.stopPropagation(),t.addNewCommissionSetting(e.currentTarget),!1})),this.initRemoveCommissionEvent(),document.querySelectorAll(".tagify-commission-setting").forEach((function(e){t.tagify(e)}))}},{key:"tagify",value:function(t){new Tagify(t,{delimiters:null,enforceWhitelist:!0,whitelist:this.formatWhitelist(),dropdown:{enabled:1,classname:"extra-properties",searchBy:["name"]}})}},{key:"formatWhitelist",value:function(){var t=[];return window.tagifyWhitelist.map((function(e){t.push({value:e.name,id:e.id})})),t}},{key:"addNewCommissionSetting",value:function(){var t=$("#commission-setting-item-template").html(),e=$(".commission-setting-item").length,i=t.replace(/__index__/g,e);$(".commission-setting-item-wrapper").append(i);var n=document.querySelector("#commission-setting-item-".concat(e," .tagify-commission-setting"));this.tagify(n),this.initRemoveCommissionEvent()}},{key:"initRemoveCommissionEvent",value:function(){$(document).on("click",'[data-bb-toggle="commission-remove"]',(function(t){t.preventDefault(),t.stopPropagation(),$(t.target).closest(".commission-setting-item").remove()}))}}],i&&e(t.prototype,i),n&&e(t,n),Object.defineProperty(t,"prototype",{writable:!1}),t;var t,i,n}();$(document).ready((function(){new n}))})();