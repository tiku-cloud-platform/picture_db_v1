(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pageA-author-author~pageA-me-me~pageB-wallpaper-wallpaper~pages-index-index"],{"0bfd":function(t,e,i){"use strict";i.d(e,"b",(function(){return n})),i.d(e,"c",(function(){return o})),i.d(e,"a",(function(){return a}));var a={tnLoading:i("b748").default},n=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("v-uni-view",{staticClass:"tn-load-more-class tn-load-more"},[i("v-uni-view",{staticClass:"tn-load-more__wrap",class:[t.backgroundColorClass],style:[t.loadStyle]},[i("v-uni-view",{staticClass:"tn-load-more__line"}),i("v-uni-view",{staticClass:"tn-load-more__content",class:[{"tn-load-more__content--more":"loadmore"===t.status||"nomore"===t.status}]},[i("v-uni-view",{staticClass:"tn-load-more__loading"},[i("tn-loading",{staticClass:"tn-load-more__loading__icon",attrs:{mode:t.loadingIconType,show:"loading"===t.status&&t.loadingIcon,color:t.loadingIconColor}})],1),i("v-uni-view",{staticClass:"tn-load-more__text",class:[t.fontColorClass,{"tn-load-more__text--dot":"nomore"===t.status&&t.dot}],style:[t.loadTextStyle]},[t._v(t._s(t.showText))])],1),i("v-uni-view",{staticClass:"tn-load-more__line"})],1)],1)},o=[]},"218a":function(t,e,i){"use strict";var a=i("409c"),n=i.n(a);n.a},"2fc5":function(t,e,i){"use strict";i.r(e);var a=i("7f1c"),n=i("5657");for(var o in n)["default"].indexOf(o)<0&&function(t){i.d(e,t,(function(){return n[t]}))}(o);i("77fa");var r=i("f0c5"),s=Object(r["a"])(n["default"],a["b"],a["c"],!1,null,"570452d6",null,!1,a["a"],void 0);e["default"]=s.exports},"409c":function(t,e,i){var a=i("a1c2");a.__esModule&&(a=a.default),"string"===typeof a&&(a=[[t.i,a,""]]),a.locals&&(t.exports=a.locals);var n=i("4f06").default;n("6d277ab0",a,!0,{sourceMap:!1,shadowMode:!1})},"4e56":function(t,e,i){var a=i("24fb");e=a(!1),e.push([t.i,'@charset "UTF-8";\n/**\n * 下方引入的为Tuniao UI的集成样式文件，为scss预处理器，其中包含了一些"tn-"开头的自定义变量\n * 使用的时候，请将下面的一行复制到您的uniapp项目根目录的uni.scss中即可\n * Tuniao UI自定义的css类名和scss变量，均以"tn-"开头，不会造成冲突，请放心使用 \n */.tn-load-more__wrap[data-v-295721aa]{background-color:initial;display:flex;flex-direction:row;justify-content:center;align-items:center;color:#838383}.tn-load-more__line[data-v-295721aa]{vertical-align:middle;border:1px solid #838383;width:%?50?%;-webkit-transform:scaleY(.5);transform:scaleY(.5)}.tn-load-more__content[data-v-295721aa]{display:flex;flex-direction:row;justify-content:center;align-items:center;padding:0 %?12?%}.tn-load-more__content--more[data-v-295721aa]{position:relative}.tn-load-more__loading[data-v-295721aa]{margin-right:%?8?%}.tn-load-more__loading__icon[data-v-295721aa]{display:flex;flex-direction:row;justify-content:center;align-items:center}.tn-load-more__text[data-v-295721aa]{overflow:hidden;white-space:nowrap;text-overflow:ellipsis;line-height:%?30?%}.tn-load-more__text--dot[data-v-295721aa]{font-size:%?28?%}',""]),t.exports=e},"4e8b":function(t,e,i){"use strict";i.r(e);var a=i("f212"),n=i.n(a);for(var o in a)["default"].indexOf(o)<0&&function(t){i.d(e,t,(function(){return a[t]}))}(o);e["default"]=n.a},5368:function(t,e,i){var a=i("c8f9");a.__esModule&&(a=a.default),"string"===typeof a&&(a=[[t.i,a,""]]),a.locals&&(t.exports=a.locals);var n=i("4f06").default;n("6854ba92",a,!0,{sourceMap:!1,shadowMode:!1})},5390:function(t,e,i){"use strict";i.r(e);var a=i("0bfd"),n=i("4e8b");for(var o in n)["default"].indexOf(o)<0&&function(t){i.d(e,t,(function(){return n[t]}))}(o);i("9432");var r=i("f0c5"),s=Object(r["a"])(n["default"],a["b"],a["c"],!1,null,"295721aa",null,!1,a["a"],void 0);e["default"]=s.exports},5657:function(t,e,i){"use strict";i.r(e);var a=i("e84f"),n=i.n(a);for(var o in a)["default"].indexOf(o)<0&&function(t){i.d(e,t,(function(){return a[t]}))}(o);e["default"]=n.a},"59e8":function(t,e,i){"use strict";i("7a82"),Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0,i("a9e3");var a={name:"tn-loading",props:{mode:{type:String,default:"circle"},show:{type:Boolean,default:!0},animation:{type:Boolean,default:!0},color:{type:String,default:""},size:{type:Number,default:34}},computed:{loadStyle:function(){var t={};return t.width=this.size+"rpx",t.height=t.width,"circle"===this.mode&&(t.borderColor="#E6E6E6 #E6E6E6 #E6E6E6 ".concat(this.color?this.color:"#AAAAAA")),t}}};e.default=a},"5a20":function(t,e,i){"use strict";i.d(e,"b",(function(){return a})),i.d(e,"c",(function(){return n})),i.d(e,"a",(function(){}));var a=function(){var t=this.$createElement,e=this._self._c||t;return e("v-uni-view",{staticClass:"tn-waterfall-class tn-waterfall"},[e("v-uni-view",{staticClass:"tn-waterfall__column",attrs:{id:"tn-waterfall-left"}},[this._t("left",null,{leftList:this.leftList})],2),e("v-uni-view",{staticClass:"tn-waterfall__column",attrs:{id:"tn-waterfall-right"}},[this._t("right",null,{rightList:this.rightList})],2)],1)},n=[]},"77fa":function(t,e,i){"use strict";var a=i("5368"),n=i.n(a);n.a},"7f1c":function(t,e,i){"use strict";i.d(e,"b",(function(){return a})),i.d(e,"c",(function(){return n})),i.d(e,"a",(function(){}));var a=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("v-uni-view",{staticClass:"tn-lazy-load-class tn-lazy-load"},[i("v-uni-view",{staticClass:"tn-lazy-load__item",class:["tn-lazy-load__item--"+t.elIndex],style:[t.lazyLoadItemStyle]},[i("v-uni-view",{staticClass:"tn-lazy-load__item__content"},[t.error?i("v-uni-image",{staticClass:"tn-lazy-load__item__image tn-lazy-load__item__image--error",style:[t.imageStyle],attrs:{src:t.errorImg,mode:t.imgMode},on:{load:function(e){arguments[0]=e=t.$handleEvent(e),t.handleErrorImgLoaded.apply(void 0,arguments)},click:function(e){arguments[0]=e=t.$handleEvent(e),t.handleImgClick.apply(void 0,arguments)}}}):i("v-uni-image",{staticClass:"tn-lazy-load__item__image",style:[t.imageStyle],attrs:{src:t.show?t.image:t.loadingImg,mode:t.imgMode},on:{load:function(e){arguments[0]=e=t.$handleEvent(e),t.handleImgLoaded.apply(void 0,arguments)},error:function(e){arguments[0]=e=t.$handleEvent(e),t.handleImgError.apply(void 0,arguments)},click:function(e){arguments[0]=e=t.$handleEvent(e),t.handleImgClick.apply(void 0,arguments)}}})],1)],1)],1)},n=[]},8313:function(t,e,i){"use strict";i("7a82");var a=i("4ea4").default;Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0;var n=a(i("c7eb")),o=a(i("1da1"));i("a9e3"),i("99af"),i("fb6a"),i("14d9"),i("a434"),i("e9c4"),i("c740");var r={name:"tn-waterfall",props:{value:{type:Array,default:function(){return[]}},idKey:{type:String,default:"id"},addTime:{type:Number,default:200}},computed:{copyValue:function(){return this.cloneData(this.value)}},watch:{copyValue:function(t,e){var i=Array.isArray(e)&&e.length>0?e.length:0;this.tempList=this.tempList.concat(this.cloneData(t.slice(i))),this.splitData()}},data:function(){return{leftList:[],rightList:[],tempList:[]}},mounted:function(){this.tempList=this.cloneData(this.copyValue),this.splitData()},methods:{splitData:function(){var t=this;return(0,o.default)((0,n.default)().mark((function e(){var i,a,o;return(0,n.default)().wrap((function(e){while(1)switch(e.prev=e.next){case 0:if(t.tempList.length){e.next=2;break}return e.abrupt("return");case 2:return e.next=4,t._tGetRect("#tn-waterfall-left");case 4:return i=e.sent,e.next=7,t._tGetRect("#tn-waterfall-right");case 7:if(a=e.sent,o=t.tempList[0],o){e.next=11;break}return e.abrupt("return");case 11:i.height<a.height?t.leftList.push(o):i.height>a.height?t.rightList.push(o):t.leftList.length<=t.rightList.length?t.leftList.push(o):t.rightList.push(o),t.tempList.splice(0,1),t.tempList.length?setTimeout((function(){t.splitData()}),t.addTime):t.$emit("finish");case 14:case"end":return e.stop()}}),e)})))()},cloneData:function(t){return JSON.parse(JSON.stringify(t))},clear:function(){this.leftList=[],this.rightList=[],this.$emit("input",[]),this.tempList=[]},remove:function(t){var e=this,i=-1;i=this.leftList.findIndex((function(i){return i[e.idKey]==t})),-1!=i?this.leftList.splice(i,1):(i=this.rightList.findIndex((function(i){return i[e.idKey]==t})),-1!=i&&this.rightList.splice(i,1)),i=this.value.findIndex((function(i){return i[e.idKey]==t})),-1!=i&&this.$emit("input",this.value.splice(i,1))},modify:function(t,e,i){var a=this,n=-1;if(n=this.leftList.findIndex((function(e){return e[a.idKey]==t})),-1!=n?this.leftList[n][e]=i:(n=this.rightList.findIndex((function(e){return e[a.idKey]==t})),-1!=n&&(this.rightList[n][e]=i)),n=this.value.findIndex((function(e){return e[a.idKey]==t})),-1!=n){var o=this.cloneData(this.value);o[n][e]=i,this.$emit("input",o)}}}};e.default=r},"90c1":function(t,e,i){"use strict";i.d(e,"b",(function(){return a})),i.d(e,"c",(function(){return n})),i.d(e,"a",(function(){}));var a=function(){var t=this.$createElement,e=this._self._c||t;return this.show?e("v-uni-view",{staticClass:"tn-loading-class tn-loading",class:["tn-loading-"+this.mode,this.animation?"tn-loading-"+this.mode+"--animation":""],style:[this.loadStyle]}):this._e()},n=[]},9432:function(t,e,i){"use strict";var a=i("ecd5"),n=i.n(a);n.a},"9e91":function(t,e,i){"use strict";var a=i("e371"),n=i.n(a);n.a},a1c2:function(t,e,i){var a=i("24fb");e=a(!1),e.push([t.i,'@charset "UTF-8";\n/**\n * 下方引入的为Tuniao UI的集成样式文件，为scss预处理器，其中包含了一些"tn-"开头的自定义变量\n * 使用的时候，请将下面的一行复制到您的uniapp项目根目录的uni.scss中即可\n * Tuniao UI自定义的css类名和scss变量，均以"tn-"开头，不会造成冲突，请放心使用 \n */.tn-waterfall[data-v-36aa842e]{display:flex;flex-direction:row;align-items:flex-start}.tn-waterfall__column[data-v-36aa842e]{display:flex;flex-direction:column;flex:1;height:auto}',""]),t.exports=e},b1ed:function(t,e,i){"use strict";i.r(e);var a=i("59e8"),n=i.n(a);for(var o in a)["default"].indexOf(o)<0&&function(t){i.d(e,t,(function(){return a[t]}))}(o);e["default"]=n.a},b748:function(t,e,i){"use strict";i.r(e);var a=i("90c1"),n=i("b1ed");for(var o in n)["default"].indexOf(o)<0&&function(t){i.d(e,t,(function(){return n[t]}))}(o);i("9e91");var r=i("f0c5"),s=Object(r["a"])(n["default"],a["b"],a["c"],!1,null,"198243dd",null,!1,a["a"],void 0);e["default"]=s.exports},c8f9:function(t,e,i){var a=i("24fb");e=a(!1),e.push([t.i,'@charset "UTF-8";\n/**\n * 下方引入的为Tuniao UI的集成样式文件，为scss预处理器，其中包含了一些"tn-"开头的自定义变量\n * 使用的时候，请将下面的一行复制到您的uniapp项目根目录的uni.scss中即可\n * Tuniao UI自定义的css类名和scss变量，均以"tn-"开头，不会造成冲突，请放心使用 \n */.tn-lazy-load__item[data-v-570452d6]{background-color:#f4f4f4;overflow:hidden}.tn-lazy-load__item__image[data-v-570452d6]{display:block;border:%?1?% solid #f8f7f8;border-radius:%?10?%;overflow:hidden;width:100%;-webkit-transform:transition3d(0,0,0);transform:transition3d(0,0,0);will-change:transform}',""]),t.exports=e},ccbb:function(t,e,i){"use strict";i.r(e);var a=i("8313"),n=i.n(a);for(var o in a)["default"].indexOf(o)<0&&function(t){i.d(e,t,(function(){return a[t]}))}(o);e["default"]=n.a},e2f8:function(t,e,i){var a=i("24fb");e=a(!1),e.push([t.i,'@charset "UTF-8";\n/**\n * 下方引入的为Tuniao UI的集成样式文件，为scss预处理器，其中包含了一些"tn-"开头的自定义变量\n * 使用的时候，请将下面的一行复制到您的uniapp项目根目录的uni.scss中即可\n * Tuniao UI自定义的css类名和scss变量，均以"tn-"开头，不会造成冲突，请放心使用 \n */.tn-loading-circle[data-v-198243dd]{display:inline-flex;vertical-align:middle;width:%?28?%;height:%?28?%;background:0 0;border-radius:50%;border:2px solid;border-color:#e6e6e6 #e6e6e6 #e6e6e6 #aaa}.tn-loading-circle--animation[data-v-198243dd]{animation:tn-circle-data-v-198243dd 1s linear infinite;-webkit-animation:tn-circle-data-v-198243dd 1s linear infinite}.tn-loading-flower[data-v-198243dd]{display:inline-block;vertical-align:middle;width:%?28?%;height:%?28?%;background:transparent url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMjAiIGhlaWdodD0iMTIwIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCI+PHBhdGggZmlsbD0ibm9uZSIgZD0iTTAgMGgxMDB2MTAwSDB6Ii8+PHJlY3Qgd2lkdGg9IjciIGhlaWdodD0iMjAiIHg9IjQ2LjUiIHk9IjQwIiBmaWxsPSIjRTlFOUU5IiByeD0iNSIgcnk9IjUiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAgLTMwKSIvPjxyZWN0IHdpZHRoPSI3IiBoZWlnaHQ9IjIwIiB4PSI0Ni41IiB5PSI0MCIgZmlsbD0iIzk4OTY5NyIgcng9IjUiIHJ5PSI1IiB0cmFuc2Zvcm09InJvdGF0ZSgzMCAxMDUuOTggNjUpIi8+PHJlY3Qgd2lkdGg9IjciIGhlaWdodD0iMjAiIHg9IjQ2LjUiIHk9IjQwIiBmaWxsPSIjOUI5OTlBIiByeD0iNSIgcnk9IjUiIHRyYW5zZm9ybT0icm90YXRlKDYwIDc1Ljk4IDY1KSIvPjxyZWN0IHdpZHRoPSI3IiBoZWlnaHQ9IjIwIiB4PSI0Ni41IiB5PSI0MCIgZmlsbD0iI0EzQTFBMiIgcng9IjUiIHJ5PSI1IiB0cmFuc2Zvcm09InJvdGF0ZSg5MCA2NSA2NSkiLz48cmVjdCB3aWR0aD0iNyIgaGVpZ2h0PSIyMCIgeD0iNDYuNSIgeT0iNDAiIGZpbGw9IiNBQkE5QUEiIHJ4PSI1IiByeT0iNSIgdHJhbnNmb3JtPSJyb3RhdGUoMTIwIDU4LjY2IDY1KSIvPjxyZWN0IHdpZHRoPSI3IiBoZWlnaHQ9IjIwIiB4PSI0Ni41IiB5PSI0MCIgZmlsbD0iI0IyQjJCMiIgcng9IjUiIHJ5PSI1IiB0cmFuc2Zvcm09InJvdGF0ZSgxNTAgNTQuMDIgNjUpIi8+PHJlY3Qgd2lkdGg9IjciIGhlaWdodD0iMjAiIHg9IjQ2LjUiIHk9IjQwIiBmaWxsPSIjQkFCOEI5IiByeD0iNSIgcnk9IjUiIHRyYW5zZm9ybT0icm90YXRlKDE4MCA1MCA2NSkiLz48cmVjdCB3aWR0aD0iNyIgaGVpZ2h0PSIyMCIgeD0iNDYuNSIgeT0iNDAiIGZpbGw9IiNDMkMwQzEiIHJ4PSI1IiByeT0iNSIgdHJhbnNmb3JtPSJyb3RhdGUoLTE1MCA0NS45OCA2NSkiLz48cmVjdCB3aWR0aD0iNyIgaGVpZ2h0PSIyMCIgeD0iNDYuNSIgeT0iNDAiIGZpbGw9IiNDQkNCQ0IiIHJ4PSI1IiByeT0iNSIgdHJhbnNmb3JtPSJyb3RhdGUoLTEyMCA0MS4zNCA2NSkiLz48cmVjdCB3aWR0aD0iNyIgaGVpZ2h0PSIyMCIgeD0iNDYuNSIgeT0iNDAiIGZpbGw9IiNEMkQyRDIiIHJ4PSI1IiByeT0iNSIgdHJhbnNmb3JtPSJyb3RhdGUoLTkwIDM1IDY1KSIvPjxyZWN0IHdpZHRoPSI3IiBoZWlnaHQ9IjIwIiB4PSI0Ni41IiB5PSI0MCIgZmlsbD0iI0RBREFEQSIgcng9IjUiIHJ5PSI1IiB0cmFuc2Zvcm09InJvdGF0ZSgtNjAgMjQuMDIgNjUpIi8+PHJlY3Qgd2lkdGg9IjciIGhlaWdodD0iMjAiIHg9IjQ2LjUiIHk9IjQwIiBmaWxsPSIjRTJFMkUyIiByeD0iNSIgcnk9IjUiIHRyYW5zZm9ybT0icm90YXRlKC0zMCAtNS45OCA2NSkiLz48L3N2Zz4=) no-repeat;background-size:100%}.tn-loading-flower--animation[data-v-198243dd]{animation:tn-flower-data-v-198243dd 1s steps(12) infinite;-webkit-animation:tn-flower-data-v-198243dd 1s steps(12) infinite}@-webkit-keyframes tn-flower-data-v-198243dd{0%{transform:rotate(0deg);-webkit-transform:rotate(0deg)}to{transform:rotate(1turn);-webkit-transform:rotate(1turn)}}@keyframes tn-flower-data-v-198243dd{0%{transform:rotate(0deg);-webkit-transform:rotate(0deg)}to{transform:rotate(1turn);-webkit-transform:rotate(1turn)}}@-webkit-keyframes tn-circle-data-v-198243dd{0%{transform:rotate(0);-webkit-transform:rotate(0)}100%{transform:rotate(1turn);-webkit-transform:rotate(1turn)}}@keyframes tn-circle-data-v-198243dd{0%{transform:rotate(0);-webkit-transform:rotate(0)}100%{transform:rotate(1turn);-webkit-transform:rotate(1turn)}}',""]),t.exports=e},e371:function(t,e,i){var a=i("e2f8");a.__esModule&&(a=a.default),"string"===typeof a&&(a=[[t.i,a,""]]),a.locals&&(t.exports=a.locals);var n=i("4f06").default;n("2654c583",a,!0,{sourceMap:!1,shadowMode:!1})},e84f:function(t,e,i){"use strict";i("7a82"),Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0,i("a9e3"),i("99af"),i("c975");var a={name:"tn-lazy-load",props:{index:{type:[String,Number],default:""},image:{type:String,default:""},imgMode:{type:String,default:"scaleToFill"},loadingImg:{type:String},errorImg:{type:String,default:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZAAAAGQCAMAAAC3Ycb+AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODdDMjhENDYyQUQ2MTFFQTlDQ0VBODgxQjFFOEEyMEMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6ODdDMjhENDcyQUQ2MTFFQTlDQ0VBODgxQjFFOEEyMEMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4N0MyOEQ0NDJBRDYxMUVBOUNDRUE4ODFCMUU4QTIwQyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4N0MyOEQ0NTJBRDYxMUVBOUNDRUE4ODFCMUU4QTIwQyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PhLwhikAAAAzUExURZWVldfX162t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"},threshold:{type:[Number,String],default:100},isEffect:{type:Boolean,default:!0},duration:{type:[String,Number],default:500},effect:{type:String,default:"ease-in-out"},height:{type:[String,Number],default:450},borderRadius:{type:String,default:""}},computed:{thresholdValue:function(){var t=uni.upx2px(Math.abs(this.threshold));return this.threshold<0?-t:t},lazyLoadItemStyle:function(){var t={};return t.opacity=Number(this.opacity),this.borderRadius&&(t.borderRadius=this.borderRadius),t.transition="opacity ".concat(this.time/1e3,"s ").concat(this.effect),t.height=this.$t.string.getLengthUnitValue(this.height),t},imageStyle:function(){var t={};return"string"===typeof this.height&&-1===this.height.indexOf("%")&&(t.height=this.$t.string.getLengthUnitValue(this.height)),t}},watch:{show:function(t){var e=this;this.effect&&(this.time=0,this.opacity=0,setTimeout((function(){e.time=e.duration,e.opacity=1}),30))},image:function(t){t?(this.init(),this.error=!1):this.error=!0}},data:function(){return{elIndex:this.$t.uuid(),show:!1,opacity:1,time:this.duration,loadStatus:"",error:!1}},created:function(){this.observer={},this.observerName="lazyLoadContentObserver"},mounted:function(){var t=this;this.$nextTick((function(){uni.$once("tOnLazyLoadReachBottom",(function(){t.show||(t.show=!0)}))})),setTimeout((function(){t.disconnectObserver(t.observerName);var e=uni.createIntersectionObserver(t);e.relativeToViewport({bottom:t.thresholdValue}).observe(".tn-lazy-load__item--".concat(t.elIndex),(function(e){e.intersectionRatio>0&&(t.show=!0,t.disconnectObserver(t.observerName))})),t[t.observerName]=e}),50)},methods:{init:function(){this.error=!1,this.loadStatus=""},handleImgClick:function(){var t="";t=!1===this.show?"lazyImg":!0===this.error?"errorImg":"realImg",this.$emit("click",{index:this.index,whichImg:t})},handleImgLoaded:function(){(this.loadStatus="")?this.loadStatus="lazyed":"lazyed"==this.loadStatus&&(this.loadStatus="loaded",this.$emit("loaded",this.index))},handleErrorImgLoaded:function(){this.$emit("error",this.index)},handleImgError:function(){this.error=!0},disconnectObserver:function(t){var e=this[t];e&&e.disconnect()}}};e.default=a},ecd5:function(t,e,i){var a=i("4e56");a.__esModule&&(a=a.default),"string"===typeof a&&(a=[[t.i,a,""]]),a.locals&&(t.exports=a.locals);var n=i("4f06").default;n("eadc3c48",a,!0,{sourceMap:!1,shadowMode:!1})},f212:function(t,e,i){"use strict";i("7a82");var a=i("4ea4").default;Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0,i("b64b");var n=a(i("a3dd")),o={name:"tn-load-more",mixins:[n.default],props:{status:{type:String,default:"loadmore"},loadingIcon:{type:Boolean,default:!0},loadingIconType:{type:String,default:"circle"},loadingIconColor:{type:String,default:""},loadText:{type:Object,default:function(){return{loadmore:"加载更多",loading:"正在加载...",nomore:"没有更多了"}}},dot:{type:Boolean,default:!1},customStyle:{type:Object,default:function(){return{}}}},computed:{loadStyle:function(){var t={};return this.backgroundColorStyle&&(t.backgroundColor=this.backgroundColorStyle),Object.keys(this.customStyle).length>0&&Object.assign(t,this.customStyle),t},loadTextStyle:function(){var t={};return this.fontColorStyle&&(t.color=this.fontColorStyle),this.fontSizeStyle&&(t.fontSize=this.fontSizeStyle,t.lineHeight=this.$t.string.getLengthUnitValue(this.fontSize+2,this.fontUnit)),t},showText:function(){var t="";return t="loadmore"===this.status?this.loadText.loadmore||"加载更多":"loading"===this.status?this.loadText.loading||"正在加载...":"nomore"===this.status&&this.dot?this.dotText:this.loadText.nomore||"没有更多了",t}},data:function(){return{dotText:"●"}},methods:{loadMore:function(){"loadmore"===this.status&&this.$emit("loadmore")}}};e.default=o},f96b:function(t,e,i){"use strict";i.r(e);var a=i("5a20"),n=i("ccbb");for(var o in n)["default"].indexOf(o)<0&&function(t){i.d(e,t,(function(){return n[t]}))}(o);i("218a");var r=i("f0c5"),s=Object(r["a"])(n["default"],a["b"],a["c"],!1,null,"36aa842e",null,!1,a["a"],void 0);e["default"]=s.exports}}]);