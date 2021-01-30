(function () {function e(a){return a&&a.__esModule?{d:a.default}:{d:a}}function g(t){return(g="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function h(t,e){return k(t)||j(t,e)||i()}function i(){throw new TypeError("Invalid attempt to destructure non-iterable instance")}function j(t,e){var n=[],i=!0,o=!1,r=void 0;try{for(var a,l=t[Symbol.iterator]();!(i=(a=l.next()).done)&&(n.push(a.value),!e||n.length!==e);i=!0);}catch(s){o=!0,r=s}finally{try{i||null==l.return||l.return()}finally{if(o)throw r}}return n}function k(t){if(Array.isArray(t))return t}var a={data:function(){return{previewFrameWindow:{},previewFrameDocument:{},previewHeight:0}},props:{markup:{type:String},styles:{type:String},script:{type:String},cssContent:{type:String},index:{type:Number}},mounted:function(){this.$root.$on("blockMoved",this.updateFrameIfEmpty),this.previewFrameWindow=this.$refs.previewFrame.contentWindow,this.previewFrameDocument=this.previewFrameWindow.document,this.updateContent();var e=document.createElement("script");if(e.type="text/javascript",e.innerHTML="\n      sendResizeEvent = function () {\n        if (window.frameElement) {\n          window.frameElement.dispatchEvent(new CustomEvent('sizechange', { detail: { height: document.documentElement.offsetHeight } }))\n        }\n      }\n      sendResizedEvent = function () {\n        console.log('on resize')\n      }\n    ",this.previewFrameDocument.getElementsByTagName("body")[0].appendChild(e),this.updateContent(),this.script){var t=document.createElement("script");t.type="text/javascript",t.innerHTML=this.script,this.previewFrameDocument.getElementsByTagName("body")[0].appendChild(t)}},methods:{updateContent:function(){var e=this;this.$nextTick().then(function(){e.$refs.previewFrame&&(e.previewFrameWindow=e.$refs.previewFrame.contentWindow,e.previewFrameDocument=e.previewFrameWindow.document,e.previewFrameDocument.open(),e.previewFrameDocument.write(e.$refs.previewFrameContent.innerHTML),e.previewFrameDocument.close(),e.resize())})},updateFrameIfEmpty:function(){var e=this;this.$nextTick().then(function(){e.$refs.previewFrame&&null===e.$refs.previewFrame.contentWindow.document.getElementById("kirby-builder-content")&&e.updateContent()})},onResize:function(e){this.resize()},resize:function(){if(this.previewFrameDocument.getElementById){var e=this.previewFrameDocument.getElementById("kirby-builder-content").scrollHeight;e>0&&(this.previewHeight=e)}},onFrameLoad:function(){this.resize()}},watch:{markup:function(e){this.updateContent()},styles:function(e){this.updateContent()},index:function(e){this.updateFrameIfEmpty()}}};if(typeof a==="function"){a=a.options}Object.assign(a,function(){var render=function(){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c("div",{staticClass:"kBuilderPreview"},[_c("iframe",{ref:"previewFrame",staticClass:"kBuilderPreview__frame",style:{height:_vm.previewHeight+"px"},on:{"load":_vm.onFrameLoad,"sizechange":_vm.onResize}}),_vm._v(" "),_c("script",{ref:"previewFrameContent",attrs:{"type":"text/template"}},[_vm._v("\n    <html lang=\"en\">\n      <head>\n        <meta charset=\"UTF-8\">\n        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">\n        <title>Kirby Builder Preview</title>\n        <style>\n          html,body{margin: 0;padding: 0;}\n          "+_vm._s(_vm.styles)+"\n        </style>\n      </head>\n      <body>\n        <div id=\"kirby-builder-content\">\n          "+_vm._s(_vm.markup)+"\n        </div>\n      </body>\n    </html>\n  ")])])};var staticRenderFns=[];return{render:render,staticRenderFns:staticRenderFns,_compiled:true,_scopeId:"data-v-c38ce0",functional:undefined}}());var d,f={},l=arguments[0];!function(e,t){"object"==typeof f?f=t():"function"==typeof d&&d.amd?d(t):(e=e||self).Mustache=t()}(f,function(){var e=Object.prototype.toString,t=Array.isArray||function(t){return"[object Array]"===e.call(t)};function n(e){return"function"==typeof e}function r(e){return e.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g,"\\$&")}function i(e,t){return null!=e&&"object"==typeof e&&t in e}var o=RegExp.prototype.test;var a=/\S/;function s(e){return!function(e,t){return o.call(e,t)}(a,e)}var c={"&":"&amp;","<":"&lt;",">":"&gt;","\"":"&quot;","'":"&#39;","/":"&#x2F;","`":"&#x60;","=":"&#x3D;"};var p=/\s*/,u=/\s+/,l=/\s*=/,h=/\s*\}/,f=/#|\^|\/|>|\{|&|=|!/;function v(e){this.string=e,this.tail=e,this.pos=0}function g(e,t){this.view=e,this.cache={".":this.view},this.parent=t}function d(){this.templateCache={_cache:{},set:function(e,t){this._cache[e]=t},get:function(e){return this._cache[e]},clear:function(){this._cache={}}}}v.prototype.eos=function(){return""===this.tail},v.prototype.scan=function(e){var t=this.tail.match(e);if(!t||0!==t.index)return"";var n=t[0];return this.tail=this.tail.substring(n.length),this.pos+=n.length,n},v.prototype.scanUntil=function(e){var t,n=this.tail.search(e);switch(n){case-1:t=this.tail,this.tail="";break;case 0:t="";break;default:t=this.tail.substring(0,n),this.tail=this.tail.substring(n);}return this.pos+=t.length,t},g.prototype.push=function(e){return new g(e,this)},g.prototype.lookup=function(e){var t,r,o,a=this.cache;if(a.hasOwnProperty(e))t=a[e];else{for(var s,c,p,u=this,l=!1;u;){if(e.indexOf(".")>0)for(s=u.view,c=e.split("."),p=0;null!=s&&p<c.length;)p===c.length-1&&(l=i(s,c[p])||(r=s,o=c[p],null!=r&&"object"!=typeof r&&r.hasOwnProperty&&r.hasOwnProperty(o))),s=s[c[p++]];else s=u.view[e],l=i(u.view,e);if(l){t=s;break}u=u.parent}a[e]=t}return n(t)&&(t=t.call(this.view)),t},d.prototype.clearCache=function(){void 0!==this.templateCache&&this.templateCache.clear()},d.prototype.parse=function(e,n){var i=this.templateCache,o=e+":"+(n||w.tags).join(":"),a=void 0!==i,c=a?i.get(o):void 0;return null==c&&(c=function(e,n){if(!e)return[];var i,o,a,c=!1,g=[],d=[],y=[],$=!1,m=!1,U="",b=0;function x(){if($&&!m)for(;y.length;)delete d[y.pop()];else y=[];$=!1,m=!1}function k(e){if("string"==typeof e&&(e=e.split(u,2)),!t(e)||2!==e.length)throw new Error("Invalid tags: "+e);i=new RegExp(r(e[0])+"\\s*"),o=new RegExp("\\s*"+r(e[1])),a=new RegExp("\\s*"+r("}"+e[1]))}k(n||w.tags);for(var C,E,j,T,Z,P,S=new v(e);!S.eos();){if(C=S.pos,j=S.scanUntil(i))for(var V=0,O=j.length;V<O;++V)s(T=j.charAt(V))?(y.push(d.length),U+=T):(m=!0,c=!0,U+=" "),d.push(["text",T,C,C+1]),C+=1,"\n"===T&&(x(),U="",b=0,c=!1);if(!S.scan(i))break;if($=!0,E=S.scan(f)||"name",S.scan(p),"="===E?(j=S.scanUntil(l),S.scan(l),S.scanUntil(o)):"{"===E?(j=S.scanUntil(a),S.scan(h),S.scanUntil(o),E="&"):j=S.scanUntil(o),!S.scan(o))throw new Error("Unclosed tag at "+S.pos);if(Z=">"==E?[E,j,C,S.pos,U,b,c]:[E,j,C,S.pos],b++,d.push(Z),"#"===E||"^"===E)g.push(Z);else if("/"===E){if(!(P=g.pop()))throw new Error("Unopened section \""+j+"\" at "+C);if(P[1]!==j)throw new Error("Unclosed section \""+P[1]+"\" at "+C)}else"name"===E||"{"===E||"&"===E?m=!0:"="===E&&k(j)}if(x(),P=g.pop())throw new Error("Unclosed section \""+P[1]+"\" at "+S.pos);return function(e){for(var t,n=[],r=n,i=[],o=0,a=e.length;o<a;++o)switch((t=e[o])[0]){case"#":case"^":r.push(t),i.push(t),r=t[4]=[];break;case"/":i.pop()[5]=t[2],r=i.length>0?i[i.length-1][4]:n;break;default:r.push(t);}return n}(function(e){for(var t,n,r=[],i=0,o=e.length;i<o;++i)(t=e[i])&&("text"===t[0]&&n&&"text"===n[0]?(n[1]+=t[1],n[3]=t[3]):(r.push(t),n=t));return r}(d))}(e,n),a&&i.set(o,c)),c},d.prototype.render=function(e,t,n,r){var i=this.parse(e,r),o=t instanceof g?t:new g(t,void 0);return this.renderTokens(i,o,n,e,r)},d.prototype.renderTokens=function(e,t,n,r,i){for(var o,a,s,c="",p=0,u=e.length;p<u;++p)s=void 0,"#"===(a=(o=e[p])[0])?s=this.renderSection(o,t,n,r):"^"===a?s=this.renderInverted(o,t,n,r):">"===a?s=this.renderPartial(o,t,n,i):"&"===a?s=this.unescapedValue(o,t):"name"===a?s=this.escapedValue(o,t):"text"===a&&(s=this.rawValue(o)),void 0!==s&&(c+=s);return c},d.prototype.renderSection=function(e,r,i,o){var a=this,s="",c=r.lookup(e[1]);if(c){if(t(c))for(var p=0,u=c.length;p<u;++p)s+=this.renderTokens(e[4],r.push(c[p]),i,o);else if("object"==typeof c||"string"==typeof c||"number"==typeof c)s+=this.renderTokens(e[4],r.push(c),i,o);else if(n(c)){if("string"!=typeof o)throw new Error("Cannot use higher-order sections without the original template");null!=(c=c.call(r.view,o.slice(e[3],e[5]),function(e){return a.render(e,r,i)}))&&(s+=c)}else s+=this.renderTokens(e[4],r,i,o);return s}},d.prototype.renderInverted=function(e,n,r,i){var o=n.lookup(e[1]);if(!o||t(o)&&0===o.length)return this.renderTokens(e[4],n,r,i)},d.prototype.indentPartial=function(e,t,n){for(var r=t.replace(/[^ \t]/g,""),i=e.split("\n"),o=0;o<i.length;o++)i[o].length&&(o>0||!n)&&(i[o]=r+i[o]);return i.join("\n")},d.prototype.renderPartial=function(e,t,r,i){if(r){var o=n(r)?r(e[1]):r[e[1]];if(null!=o){var a=e[6],s=e[5],c=e[4],p=o;return 0==s&&c&&(p=this.indentPartial(o,c,a)),this.renderTokens(this.parse(p,i),t,r,p)}}},d.prototype.unescapedValue=function(e,t){var n=t.lookup(e[1]);if(null!=n)return n},d.prototype.escapedValue=function(e,t){var n=t.lookup(e[1]);if(null!=n)return w.escape(n)},d.prototype.rawValue=function(e){return e[1]};var w={name:"mustache.js",version:"4.0.0",tags:["{{","}}"],clearCache:void 0,escape:void 0,parse:void 0,render:void 0,Scanner:void 0,Context:void 0,Writer:void 0,set templateCache(e){y.templateCache=e},get templateCache(){return y.templateCache}},y=new d;return w.clearCache=function(){return y.clearCache()},w.parse=function(e,t){return y.parse(e,t)},w.render=function(e,n,r,i){if("string"!=typeof e)throw new TypeError("Invalid template! Template should be a \"string\" but \""+(t(o=e)?"array":typeof o)+"\" was given as the first argument for mustache#render(template, view, partials)");var o;return y.render(e,n,r,i)},w.escape=function(e){return String(e).replace(/[&<>"'`=\/]/g,function(e){return c[e]})},w.Scanner=v,w.Context=g,w.Writer=d,w});var c={props:{endpoints:Object,block:Object,fieldGroup:Object,index:Number,columnsCount:Number,pageUid:String,pageId:String,encodedPageId:String,styles:String,script:String,parentPath:String,canDuplicate:Boolean},components:{BuilderPreview:a},mounted:function(){var e=this;this.block._uid||(this.block._uid=this.block._key+"_"+new Date().valueOf()+"_"+this._uid),this.activeFieldSet||(this.activeFieldSet=this.fieldSets[0].key),null!=this.block.expandedInitially&&(this.expanded=this.block.expandedInitially,delete this.block.expandedInitially),this.block.showPreviewInitially&&(this.showPreview=this.block.showPreviewInitially,delete this.block.showPreviewInitially),this.block.activeFieldSetInitially&&(this.activeFieldSet=this.block.activeFieldSetInitially,delete this.block.activeFieldSetInitially),this.block.isNew&&(this.isNew=!0,window.requestAnimationFrame(function(){e.isNew=!1,delete e.block.isNew}));var i=JSON.parse(localStorage.getItem(this.localUiStateKey));i&&null!==i.expanded&&(this.expanded=i.expanded),this.fieldGroup.defaultView&&"default"!=this.fieldGroup.defaultView&&!this.isNew?"preview"==this.fieldGroup.defaultView?this.showPreview=!0:this.activeFieldSet=this.fieldGroup.defaultView:i?(this.showPreview=i.showPreview,this.activeFieldSet=i.activeFieldSet):this.storeLocalUiState(),this.fieldGroup.preview&&this.showPreview&&this.expanded&&this.displayPreview(this.fieldGroup.preview)},data:function(){return{pending:!0,activeFieldSet:null,expanded:!0,isNew:!1,previewFrameContent:null,previewHeight:0,previewStored:!1,previewMarkup:"",showPreview:!1}},computed:{localUiStateKey:function(){return"kBuilder.uiState.".concat(this.block._uid)},extendedUid:function(){return this.pageId.replace("/","-")+"-"+this._uid},previewUrl:function(){return this.previewStored?"kirby-builder-preview/"+this.extendedUid+"?"+this.objectToGetParams(this.fieldGroup.preview)+"&pageid="+this.pageId:null},blockPath:function(){return this.parentPath+"+"+this.block._key},fieldSets:function(){var e=[];if(this.fieldGroup.tabs){for(var i in this.fieldGroup.tabs)if(this.fieldGroup.tabs.hasOwnProperty(i)){var t=this.fieldGroup.tabs[i];e.push(this.newFieldSet(t,i,this.block))}}else this.fieldGroup.fields&&e.push(this.newFieldSet(this.fieldGroup,"content",this.block,"edit",this.$t("edit")));return e},title:function(){var $gZU7$$interop$default=e(f);return this.fieldGroup.label?$gZU7$$interop$default.d.render(this.fieldGroup.label,this.block):this.fieldGroup.name}},methods:{onBlockInput:function(e){this.$emit("input",this.val)},displayPreview:function(){var e=this;this.showPreview=!0,this.expanded=!0;var i={preview:this.fieldGroup.preview,blockContent:this.block,block:this.fieldGroup,blockUid:this.extendedUid,pageid:this.pageId};this.$api.post("kirby-builder/rendered-preview",i).then(function(i){e.previewMarkup=i.preview,e.activeFieldSet=null,e.$refs.preview.resize()}),this.storeLocalUiState()},displayFieldSet:function(e){this.showPreview=!1,this.activeFieldSet=e,this.previewHeight=0,this.storeLocalUiState()},onPreviewLoaded:function(e){this.previewHeight=e.detail.height,this.activeFieldSet=null},toggleExpand:function(e){this.expanded="boolean"==typeof e?e:!this.expanded,this.expanded&&this.showPreview&&this.displayPreview(),this.storeLocalUiState()},newFieldSet:function(e,i,t,l,s){var n=this;Object.keys(e.fields).forEach(function(i){var t=n.endpoints.model;e.fields[i].endpoints={field:"kirby-builder/".concat(t,"/fields/").concat(n.blockPath,"+").concat(e.fields[i].name),model:t,section:n.endpoints.section},e.fields[i].parentPath=n.blockPath});var r={fields:e.fields,key:i,model:t,icon:l||e.icon||null,label:s||e.label||null};return r},objectToGetParams:function(e){return Object.keys(e).map(function(i){return i+"="+e[i]}).join("&")},storeLocalUiState:function(){var e={expanded:this.expanded,showPreview:this.showPreview,activeFieldSet:this.activeFieldSet};localStorage.setItem(this.localUiStateKey,JSON.stringify(e))},tabIcon:function(e){return e?e.indexOf("/")>-1&&e.indexOf(".")>-1?null:e:null},tabImage:function(e){return e&&e.indexOf("/")>-1&&e.indexOf(".")>-1?e:null}}};if(typeof c==="function"){c=c.options}Object.assign(c,function(){var render=function(){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c("div",{class:["kBuilderBlock","kBuilderBlock--col-"+_vm.columnsCount,"kBuilderBlock--type-"+_vm.block._key,{"kBuilderBlock--previewMode":_vm.showPreview&&_vm.expanded},{"kBuilderBlock--expanded":_vm.expanded},{"kBuilderBlock--pending":_vm.isNew},{"kBuilderBlock--collapsed":!_vm.expanded},{"kBuilderBlock--editMode":!_vm.showPreview&&_vm.expanded}]},[_c("div",{class:"kBuilderBlock__header kBuilderBlock__header--col-"+_vm.columnsCount},[_c("k-icon",{class:"kBuilder__dragDropHandle kBuilder__dragDropHandle--col-"+_vm.columnsCount,attrs:{"type":"sort"}}),_vm._v(" "),_c("span",{staticClass:"kBuilderBlock__label",on:{"click":_vm.toggleExpand}},[_c("k-icon",{staticClass:"kBuilderBlock__expandedIcon",class:{"kBuilderBlock__expandedIcon--expanded":_vm.expanded},attrs:{"type":"angle-down"}}),_vm._v(" "),_c("span",{domProps:{"innerHTML":_vm._s(_vm.title)}})],1),_vm._v(" "),_c("div",{staticClass:"kBuilderBlock__actions"},[_c("k-button-group",{staticClass:"kBuilderBlock__actionsGroup"},[_vm._l(_vm.fieldSets,function(fieldSet){return _vm.fieldSets.length>1||_vm.fieldGroup.preview?_c("k-button",{key:"showFierldSetButton-"+_vm._uid+fieldSet.key,staticClass:"kBuilderBlock__actionsButton",class:{"kBuilderBlock__actionsButton--active":_vm.activeFieldSet==fieldSet.key&&_vm.expanded},attrs:{"icon":_vm.tabIcon(fieldSet.icon),"image":_vm.tabImage(fieldSet.icon)},on:{"click":function($event){_vm.displayFieldSet(fieldSet.key);_vm.toggleExpand(true)}}},[_vm._v(_vm._s(fieldSet.label))]):_vm._e()}),_vm._v(" "),_vm.fieldGroup.preview?_c("k-button",{staticClass:"kBuilderBlock__actionsButton",class:{"kBuilderBlock__actionsButton--active":_vm.showPreview&&_vm.expanded},attrs:{"icon":"preview"},on:{"click":function($event){return _vm.displayPreview()}}},[_vm._v(_vm._s(_vm.$t("builder.preview")))]):_vm._e()],2),_vm._v(" "),_c("div",{staticClass:"kBuilderBlock__control"},[_c("k-dropdown",{staticClass:"kBuilderBlock__actionsDropDown"},[_c("k-button",{staticClass:"kBuilderBlock__actionsButton",attrs:{"icon":"dots"},on:{"click":function($event){return _vm.$refs["blockActions"].toggle()}}}),_vm._v(" "),_c("k-dropdown-content",{ref:"blockActions",staticClass:"kBuilderBlock__actionsDropDownContent",attrs:{"align":"right"}},[_vm.canDuplicate?_c("k-dropdown-item",{attrs:{"icon":"copy"},on:{"click":function($event){return _vm.$emit("clone",_vm.index,_vm.showPreview,_vm.expanded,_vm.activeFieldSet)}}},[_vm._v(_vm._s(_vm.$t("builder.clone")))]):_vm._e(),_vm._v(" "),_c("k-dropdown-item",{attrs:{"icon":"trash"},on:{"click":function($event){return _vm.$emit("delete",_vm.index)}}},[_vm._v(_vm._s(_vm.$t("delete")))])],1)],1)],1)],1)],1),_vm._v(" "),_c("div",{directives:[{name:"show",rawName:"v-show",value:_vm.expanded,expression:"expanded"}],staticClass:"kBuilderBlock__content"},[_vm.fieldGroup.preview?_c("builder-preview",{directives:[{name:"show",rawName:"v-show",value:_vm.showPreview,expression:"showPreview"}],ref:"preview",attrs:{"markup":_vm.previewMarkup,"styles":_vm.styles,"index":_vm.index,"script":_vm.script}}):_vm._e(),_vm._v(" "),_vm._l(_vm.fieldSets,function(fieldSet){return _vm.activeFieldSet===fieldSet.key?_c("k-fieldset",_vm._g({directives:[{name:"show",rawName:"v-show",value:!_vm.showPreview,expression:"!showPreview"}],key:fieldSet.key+_vm._uid,staticClass:"kBuilderBlock__form",attrs:{"value":{},"fields":fieldSet.fields,"validate":true},model:{value:fieldSet.model,callback:function($$v){_vm.$set(fieldSet,"model",$$v)},expression:"fieldSet.model"}},_vm.$listeners)):_vm._e()})],2)])};var staticRenderFns=[];return{render:render,staticRenderFns:staticRenderFns,_compiled:true,_scopeId:null,functional:undefined}}());var b={props:{counter:[Boolean,Object],disabled:Boolean,endpoints:Object,help:String,input:[String,Number],name:[String,Number],required:Boolean,type:String,value:{type:String,default:[]},fieldsets:Object,columns:Number,max:Number,label:String,preview:Object,pageId:String,pageUid:String,encodedPageId:String,cssUrls:String,jsUrls:String,parentPath:String},components:{BuilderBlock:c},mounted:function(){for(var t=this,e=function(){var e=h(i[n],2),o=e[0],r=e[1];fetch(r).then(function(t){return t.text()}).then(function(e){t.$set(t.cssContents,o,e)})},n=0,i=Object.entries(this.cssUrls);n<i.length;n++)e();for(var o=function(){var e=h(a[r],2),n=e[0],i=e[1];fetch(i).then(function(t){return t.text()}).then(function(e){t.$set(t.jsContents,n,e)})},r=0,a=Object.entries(this.jsUrls);r<a.length;r++)o()},data:function(){return{dragging:!1,toggle:!0,targetPosition:null,lastUniqueKey:0,cssContents:{},jsContents:{},dialogOpen:!1}},computed:{classObject:function(){var t={};return t["kBuilder--col-"+this.columnsCount]=!0,t["kBuilder--dragging"]=this.dragging,t},path:function(){return this.parentPath?"".concat(this.parentPath,"+").concat(this.name):this.name},columnsCount:function(){return this.columns?this.columns:"1"},columnWidth:function(){return this.columns?"1/"+this.columns:"1/1"},draggableOptions:function(){return{group:this._uid,handle:".kBuilder__dragDropHandle",forceFallback:!0,fallbackClass:"sortable-fallback",fallbackOnBody:!0,scroll:document.querySelector(".k-panel-view")}},blockCount:function(){return this.value.length},fieldsetCount:function(){return Object.keys(this.fieldsets).length},fieldsetKeys:function(){return Object.keys(this.fieldsets)},addBlockButtonLabel:function(){return this.$t("add")},supportedBlockTypes:function(){return Object.keys(this.fieldsets)}},methods:{onBlockInput:function(t){this.$emit("input",this.value)},onBlockMoved:function(t){this.$emit("input",this.value)},onBlockAdded:function(t){this.$emit("input",this.value)},onBlockRemoved:function(t){this.$emit("input",this.value)},onDragEnd:function(t){this.dragging=!1},onMove:function(t){return this.$root.$emit("blockMoved"),t.relatedContext.index!=this.value.length+1},onStartDrag:function(t){this.dragging=!0;var e=t.item.getElementsByClassName("kBuilderPreview__frame")[0];if(e){var n=e.contentWindow.document,i=document.getElementsByClassName("sortable-drag")[0].getElementsByClassName("kBuilderPreview__frame")[0].contentWindow.document;i.open(),i.write(n.documentElement.innerHTML),i.close()}},onClickAddBlock:function(t){this.targetPosition=t,1==this.fieldsetCount?this.addBlock(this.fieldsetKeys[0]):this.$refs.dialog.open()},onOpenDialog:function(){this.dialogOpen=!0},onCloseDialog:function(){this.dialogOpen=!1},addBlock:function(t){var e=null==this.targetPosition?this.value.length:this.targetPosition,n=this.fieldsets[t];this.value.splice(e,0,this.getBlankContent(t,n)),this.value[e].isNew=!0,this.$emit("input",this.value),this.$nextTick(function(){this.$emit("input",this.value)}),this.targetPosition=null,this.dialogOpen&&this.$refs.dialog.close()},cloneBlock:function(t,e,n,i){var o=JSON.parse(JSON.stringify(this.value[t]));this.deepRemoveProperty(o,"_uid"),this.value.splice(t+1,0,o);var r=this.value[t+1];r.uniqueKey=this.lastUniqueKey++,null!=e&&(r.showPreviewInitially=e),null!=n&&(r.expandedInitially=n),i&&(r.activeFieldSetInitially=i),r.isNew=!0,this.$emit("input",this.value),this.$nextTick(function(){this.$emit("input",this.value)})},getBlankContent:function(t,e){var n={_key:t};if(e.fields)Object.keys(e.fields).forEach(function(t){n[t]=e.fields[t].value||e.fields[t].default||null});else if(e.tabs)for(var i in e.tabs)e.tabs.hasOwnProperty(i)&&function(){var t=e.tabs[i];Object.keys(t.fields).forEach(function(e){n[e]=t.fields[e].value||t.fields[e].default||null})}();return n},deleteBlock:function(t){this.clearLocalUiStates(this.value[t]),this.value.splice(t,1),this.$emit("input",this.value)},deepRemoveProperty:function(t,e){var n=this;Object.keys(t).forEach(function(i){i===e?delete t[i]:t[i]&&"object"===g(t[i])&&n.deepRemoveProperty(t[i],e)})},clearLocalUiStates:function(t){for(var e in t)if(t.hasOwnProperty(e)){t[e];"_uid"===e?localStorage.removeItem("kBuilder.uiState.".concat(t[e])):"object"===g(t[e])&&this.clearLocalUiStates(t[e])}}}};if(typeof b==="function"){b=b.options}Object.assign(b,function(){var render=function(){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;return _c("k-field",{staticClass:"kBuilder",class:_vm.classObject,attrs:{"label":_vm.label}},[_c("k-draggable",{staticClass:"kBuilder__blocks k-grid",attrs:{"move":_vm.onMove,"list":_vm.value,"options":_vm.draggableOptions},on:{"update":_vm.onBlockMoved,"add":_vm.onBlockAdded,"remove":_vm.onBlockRemoved,"end":_vm.onDragEnd}},[_vm._l(_vm.value,function(blockValue,index){return _c("k-column",{key:blockValue._uid,staticClass:"kBuilder__column",attrs:{"width":_vm.columnWidth}},[!_vm.max||_vm.blockCount<_vm.max?_c("div",{staticClass:"kBuilder__inlineAddButton",class:{"kBuilder__inlineAddButton--horizontal":_vm.columnsCount==1,"kBuilder__inlineAddButton--vertical":_vm.columnsCount>1},on:{"click":function($event){return _vm.onClickAddBlock(index)}}}):_vm._e(),_vm._v(" "),_c("builder-block",{attrs:{"page-id":_vm.pageId,"page-uid":_vm.pageUid,"encoded-page-id":_vm.encodedPageId,"endpoints":_vm.endpoints,"block":blockValue,"fieldGroup":_vm.fieldsets[blockValue._key],"index":index,"columns-count":_vm.columnsCount,"styles":_vm.cssContents[blockValue._key],"script":_vm.jsContents[blockValue._key],"parentPath":_vm.path,"canDuplicate":!_vm.max||_vm.blockCount<_vm.max},on:{"input":_vm.onBlockInput,"clone":_vm.cloneBlock,"delete":_vm.deleteBlock}}),_vm._v(" "),_vm.columnsCount%index==0&&_vm.columnsCount>1&&(!_vm.max||_vm.blockCount<_vm.max)?_c("div",{staticClass:"kBuilder__inlineAddButton kBuilder__inlineAddButton--vertical kBuilder__inlineAddButton--after",on:{"click":function($event){return _vm.onClickAddBlock(index+1)}}}):_vm._e()],1)}),_vm._v(" "),!_vm.max||_vm.blockCount<_vm.max?_c("k-column",{attrs:{"width":_vm.columnWidth}},[_c("k-button",{staticClass:"kBuilder__addButton",attrs:{"icon":"add"},on:{"click":function($event){return _vm.onClickAddBlock()}}},[_vm._v(_vm._s(_vm.addBlockButtonLabel))])],1):_vm._e()],2),_vm._v(" "),_c("k-dialog",{ref:"dialog",staticClass:"kBuilder__dialog",on:{"open":_vm.onOpenDialog,"close":_vm.onCloseDialog}},[_c("k-list",_vm._l(_vm.fieldsets,function(value,key){return _c("k-list-item",{key:key,class:["kBuilder__addBlockButton","kBuilder__addBlockButton--"+key],attrs:{"text":value.name||value.label},on:{"click":function($event){return _vm.addBlock(key)}}},[_c("template",{slot:"options"},[_c("k-icon",{staticClass:"kBuilder__addBlockButtonIcon",attrs:{"type":"add"}})],1)],2)}),1)],1)],1)};var staticRenderFns=[];return{render:render,staticRenderFns:staticRenderFns,_compiled:true,_scopeId:null,functional:undefined}}());panel.plugin("timoetting/k-builder",{fields:{builder:b}});})();