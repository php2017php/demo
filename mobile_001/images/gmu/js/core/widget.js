(function(j,f,h){var m=[].slice,n=Object.prototype.toString,q=function(){},d=["options","template","tpl2html"],e=(function(){var t={},v=0,u="_gid";return function(z,y,A){var w=z[u]||(z[u]=++v),x=t[w]||(t[w]={});A!==h&&(x[y]=A);A===null&&delete x[y];return x[y]}})(),o=j.event;function i(t){return n.call(t)==="[object Object]"}function k(u,t){u&&Object.keys(u).forEach(function(v){t(v,u[v])})}function c(u){try{u=u==="true"?true:u==="false"?false:u==="null"?null:+u+""===u?+u:/(?:\{[\s\S]*\}|\[[\s\S]*\])$/.test(u)?JSON.parse(u):u}catch(t){u=h}return u}function g(x){var v={},u=x&&x.attributes,t=u&&u.length,w,y;while(t--){y=u[t];w=y.name;if(w.substring(0,5)!=="data-"){continue}w=w.substring(5);y=c(y.value);y===h||(v[w]=y)}return v}function l(u){var v=u.substring(0,1).toLowerCase()+u.substring(1),t=f.fn[v];f.fn[v]=function(y){var x=m.call(arguments,1),A=typeof y==="string"&&y,w,z;f.each(this,function(B,C){z=e(C,u)||new j[u](C,i(y)?y:h);if(A==="this"){w=z;return false}else{if(A){if(!f.isFunction(z[A])){throw new Error("\u7ec4\u4ef6\u6ca1\u6709\u6b64\u65b9\u6cd5\uff1a"+A)}w=z[A].apply(z,x);if(w!==h&&w!==z){return false}w=h}}});return w!==h?w:this};f.fn[v].noConflict=function(){f.fn[v]=t;return this}}function a(t,v){var u=this;if(t.superClass){a.call(u,t.superClass,v)}k(e(t,"options"),function(w,x){x.forEach(function(z){var A=z[0],y=z[1];if(A==="*"||(f.isFunction(A)&&A.call(u,v[w]))||A===v[w]){y.call(u)}})})}function s(t,v){var u=this;if(t.superClass){s.call(u,t.superClass,v)}k(e(t,"plugins"),function(w,x){if(v[w]===false){return}k(x,function(y,A){var z;if(f.isFunction(A)&&(z=u[y])){u[y]=function(){var B=u.origin,C;u.origin=z;C=A.apply(u,arguments);B===h?delete u.origin:(u.origin=B);return C}}else{u[y]=A}});x._init.call(u)})}function p(){var t=m.call(arguments),u=t.length,v;while(u--){v=v||t[u];i(t[u])||t.splice(u,1)}return t.length?f.extend.apply(null,[true,{}].concat(t)):v}function b(v,t,w,x,u){var z=this,y;if(i(x)){u=x;x=h}u&&u.el&&(x=f(u.el));x&&(z.$el=f(x),x=z.$el[0]);y=z._options=p(t.options,g(x),u);z.template=p(t.template,y.template);z.tpl2html=p(t.tpl2html,y.tpl2html);z.widgetName=v.toLowerCase();z.eventNs="."+z.widgetName+w;z._init(y);z._options.setup=(z.$el&&z.$el.parent()[0])?true:false;a.call(z,t,y);s.call(z,t,y);z._create();z.trigger("ready");x&&e(x,v,z)&&z.on("destroy",function(){e(x,v,null)});return z}function r(w,v,y){if(typeof y!=="function"){y=j.Base}var x=1,u=1;function t(A,z){if(w==="Base"){throw new Error("Base\u7c7b\u4e0d\u80fd\u76f4\u63a5\u5b9e\u4f8b\u5316")}if(!(this instanceof t)){return new t(A,z)}return b.call(this,w,t,x++,A,z)}f.extend(t,{register:function(A,B){var z=e(t,"plugins")||e(t,"plugins",{});B._init=B._init||q;z[A]=B;return t},option:function(A,B,C){var z=e(t,"options")||e(t,"options",{});z[A]||(z[A]=[]);z[A].push([B,C]);return t},inherits:function(z){return r(w+"Sub"+u++,z,t)},extend:function(B){var A=t.prototype,z=y.prototype;d.forEach(function(C){B[C]=p(y[C],B[C]);B[C]&&(t[C]=B[C]);delete B[C]});k(B,function(C,D){if(typeof D==="function"&&z[C]){A[C]=function(){var F=this.$super,E;this.$super=function(){var G=m.call(arguments,1);return z[C].apply(this,G)};E=D.apply(this,arguments);F===h?(delete this.$super):(this.$super=F);return E}}else{A[C]=D}})}});t.superClass=y;t.prototype=Object.create(y.prototype);t.extend(v);return t}j.define=function(u,t,v){j[u]=r(u,t,v);l(u)};j.isWidget=function(u,t){t=typeof t==="string"?j[t]||q:t;t=t||j.Base;return u instanceof t};j.Base=r("Base",{_init:q,_create:q,getEl:function(){return this.$el},on:o.on,one:o.one,off:o.off,trigger:function(v){var t=typeof v==="string"?new j.Event(v):v,u=[t].concat(m.call(arguments,1)),x=this._options[t.type],w=this.getEl();if(x&&f.isFunction(x)){false===x.apply(this,u)&&(t.stopPropagation(),t.preventDefault())}o.trigger.apply(this,u);w&&w.triggerHandler(t,(u.shift(),u));return this},tpl2html:function(v,u){var t=this.template;t=typeof v==="string"?t[v]:((u=v),t);return u||~t.indexOf("<%")?f.parseTpl(t,u):t},destroy:function(){this.$el&&this.$el.off(this.eventNs);this.trigger("destroy");this.off();this.destroyed=true}},Object);f.ui=j})(gmu,gmu.$);