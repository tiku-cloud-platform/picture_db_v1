(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pageB-result-result"],{"03d5":function(t,a,i){"use strict";var n=i("f837"),e=i.n(n);e.a},"194c":function(t,a,i){"use strict";i.r(a);var n=i("c5c8"),e=i.n(n);for(var o in n)["default"].indexOf(o)<0&&function(t){i.d(a,t,(function(){return n[t]}))}(o);a["default"]=e.a},4267:function(t,a,i){var n=i("24fb");a=n(!1),a.push([t.i,'@charset "UTF-8";\n/**\n * 下方引入的为Tuniao UI的集成样式文件，为scss预处理器，其中包含了一些"tn-"开头的自定义变量\n * 使用的时候，请将下面的一行复制到您的uniapp项目根目录的uni.scss中即可\n * Tuniao UI自定义的css类名和scss变量，均以"tn-"开头，不会造成冲突，请放心使用 \n */\n/* 胶囊*/.tn-custom-nav-bar__back[data-v-9cf06a4a]{width:100%;height:100%;position:relative;display:flex;justify-content:space-evenly;align-items:center;box-sizing:border-box;background-color:rgba(0,0,0,.15);border-radius:%?1000?%;border:%?1?% solid hsla(0,0%,100%,.5);color:#fff;font-size:18px}.tn-custom-nav-bar__back .icon[data-v-9cf06a4a]{display:block;flex:1;margin:auto;text-align:center}.tn-custom-nav-bar__back[data-v-9cf06a4a]:before{content:" ";width:%?1?%;height:110%;position:absolute;top:22.5%;left:0;right:0;margin:auto;-webkit-transform:scale(.5);transform:scale(.5);-webkit-transform-origin:0 0;transform-origin:0 0;pointer-events:none;box-sizing:border-box;opacity:.7;background-color:#fff}\n/* 页面阴影 start*/.img-shadow[data-v-9cf06a4a]{border-radius:%?15?%;box-shadow:%?0?% %?0?% %?50?% %?0?% rgba(0,0,0,.07)}.image-book[data-v-9cf06a4a]{padding:%?345?% %?0?%;font-size:%?16?%;font-weight:300;position:relative}.image-picbook[data-v-9cf06a4a]{background-size:cover;background-repeat:no-repeat;background-position:top;border-radius:%?10?%}\n/* 文章内容 end*/\n/* 图标容器15 start */.icon15__item[data-v-9cf06a4a]{width:30%;border-radius:%?10?%;padding:%?30?%;margin:%?20?% %?10?%;-webkit-transform:scale(1);transform:scale(1);transition:-webkit-transform .3s linear;transition:transform .3s linear;transition:transform .3s linear,-webkit-transform .3s linear;-webkit-transform-origin:center center;transform-origin:center center}.icon15__item--icon[data-v-9cf06a4a]{width:%?100?%;height:%?100?%;font-size:%?50?%;border-radius:50%;margin-bottom:%?18?%;position:relative;z-index:1}.icon15__item--icon[data-v-9cf06a4a]::after{content:" ";position:absolute;z-index:-1;width:100%;height:100%;left:0;bottom:0;border-radius:inherit;opacity:1;-webkit-transform:scale(1);transform:scale(1);background-size:100% 100%}\n/* 按钮 */.button-1[data-v-9cf06a4a]{background-color:rgba(0,0,0,.15);position:fixed;\n  /* bottom:200rpx;\n    right: 20rpx; */top:25%;right:%?30?%;z-index:1001;border-radius:100px}.button-2[data-v-9cf06a4a]{background-color:rgba(0,0,0,.15);position:fixed;\n  /* bottom:200rpx;\n    right: 20rpx; */top:35%;right:%?30?%;z-index:1001;border-radius:100px}.button-3[data-v-9cf06a4a]{background-color:rgba(0,0,0,.15);position:fixed;\n  /* bottom:200rpx;\n    right: 20rpx; */top:45%;right:%?30?%;z-index:1001;border-radius:100px}\n/* 用户头像 start */.logo-image[data-v-9cf06a4a]{width:%?100?%;height:%?100?%;position:relative}.logo-pic[data-v-9cf06a4a]{background-size:cover;background-repeat:no-repeat;background-position:top;border:%?6?% solid hsla(0,0%,100%,.25);box-shadow:%?0?% %?0?% %?80?% %?0?% rgba(0,0,0,.15);border-radius:50%;overflow:hidden}\n/* 底部tabbar start*/\n/* 毛玻璃*/.dd-glass[data-v-9cf06a4a]{width:100%;backdrop-filter:blur(%?20?%);-webkit-backdrop-filter:blur(%?20?%)}.footerfixed[data-v-9cf06a4a]{position:fixed;margin:%?40?% 5%;width:90%;bottom:calc(env(safe-area-inset-bottom) / 2);z-index:999;background-color:rgba(0,0,0,.15);box-shadow:%?0?% %?0?% %?30?% %?0?% rgba(0,0,0,.07)}.tabbar[data-v-9cf06a4a]{display:flex;align-items:center;min-height:%?110?%;justify-content:space-between;padding:0;height:calc(%?110?% + env(safe-area-inset-bottom) / 2)}.tabbar .action[data-v-9cf06a4a]{font-size:%?22?%;position:relative;flex:1;text-align:center;padding:0;display:block;height:auto;line-height:1;margin:0;overflow:initial}.tabbar .action .bar-icon[data-v-9cf06a4a]{width:%?100?%;position:relative;display:block;height:auto;margin:0 auto %?10?%;text-align:center;font-size:%?42?%}.tabbar .action .bar-icon uni-image[data-v-9cf06a4a]{width:%?50?%;height:%?50?%;display:inline-block}',""]),t.exports=a},"6aed":function(t,a,i){"use strict";i.d(a,"b",(function(){return e})),i.d(a,"c",(function(){return o})),i.d(a,"a",(function(){return n}));var n={tnNavBar:i("3805").default,tnLandscape:i("88c2").default},e=function(){var t=this,a=t.$createElement,i=t._self._c||a;return i("v-uni-view",{staticClass:"tn-safe-area-inset-bottom"},[i("tn-nav-bar",{attrs:{fixed:!0,alpha:!0,customBack:!0}},[i("v-uni-view",{staticClass:"tn-custom-nav-bar__back",attrs:{slot:"back"},on:{click:function(a){arguments[0]=a=t.$handleEvent(a),t.goBack.apply(void 0,arguments)}},slot:"back"},[i("v-uni-text",{staticClass:"icon tn-icon-left"}),i("v-uni-text",{staticClass:"icon tn-icon-home-capsule-fill"})],1)],1),i("v-uni-view",{staticClass:"tn-color-white"},[i("v-uni-view",{staticClass:"icon15__item--icon tn-flex tn-flex-row-center tn-flex-col-center tn-shadow-blur button-1",on:{click:function(a){arguments[0]=a=t.$handleEvent(a),t.tn("")}}},[i("v-uni-view",{staticClass:"tn-icon-iot-fill"})],1)],1),i("v-uni-view",{staticClass:"tn-margin",style:{paddingTop:t.vuex_custom_bar_height+10+"px"}},[i("v-uni-view",{staticClass:"tn-flex tn-flex-wrap tn-padding-bottom"},[i("v-uni-view",{staticStyle:{width:"100%"}},[i("v-uni-view",{staticClass:"img-shadow"},[i("v-uni-view",{staticClass:"image-picbook",staticStyle:{"background-image":"url('https://cdn.nlark.com/yuque/0/2022/jpeg/280373/1663570648149-assets/web-upload/767ea598-7700-4b91-8a1f-dde40dd0a671.jpeg')"}},[i("v-uni-view",{staticClass:"image-book"})],1)],1)],1)],1)],1),i("v-uni-view",{staticClass:"tabbar footerfixed dd-glass tn-color-white",staticStyle:{"border-radius":"100rpx"}},[i("v-uni-view",{staticClass:"action"},[i("v-uni-view",{staticClass:"bar-icon"},[i("v-uni-view",{staticClass:"tn-icon-delete"})],1),i("v-uni-view",{},[t._v("删除记录")])],1),i("v-uni-view",{staticClass:"action"},[i("v-uni-view",{staticClass:"bar-icon"},[i("v-uni-view",{staticClass:"tn-icon-download"})],1),i("v-uni-view",{},[t._v("下载原图")])],1),i("v-uni-view",{staticClass:"action"},[i("v-uni-view",{staticClass:"bar-icon"},[i("v-uni-view",{staticClass:"tn-icon-rocket"})],1),i("v-uni-view",{},[t._v("发布广场")])],1),i("v-uni-view",{staticClass:"action"},[i("v-uni-view",{staticClass:"bar-icon"},[i("v-uni-view",{staticClass:"tn-icon-circle-arrow"})],1),i("v-uni-view",{},[t._v("重新创作")])],1)],1),i("tn-landscape",{attrs:{show:t.show1,closePosition:"bottom",closeSize:60},on:{close:function(a){arguments[0]=a=t.$handleEvent(a),t.closeLandscape.apply(void 0,arguments)}}},[i("v-uni-view",{staticClass:"tn-color-white",staticStyle:{width:"100vw"}},[i("v-uni-view",{staticStyle:{margin:"120rpx 60rpx"}},[i("v-uni-view",{staticClass:"tn-flex tn-flex-col-top"},[i("v-uni-view",{},[i("v-uni-view",{staticClass:"logo-pic tn-shadow"},[i("v-uni-view",{staticClass:"logo-image"},[i("v-uni-view",{staticClass:"tn-shadow-blur",staticStyle:{"background-image":"url('https://cdn.nlark.com/yuque/0/2022/jpeg/280373/1664005699053-assets/web-upload/8645ea3a-e0a9-4422-8364-cc5ede305c9f.jpeg')",width:"100rpx",height:"100rpx","background-size":"cover"}})],1)],1),i("v-uni-view",{staticClass:"tn-icon-sex-male",staticStyle:{position:"absolute",margin:"-105rpx 0 0 72rpx","border-radius":"100rpx","background-color":"#FFFFFF",color:"#FF71D2",padding:"5rpx"}})],1),i("v-uni-view",{staticClass:"tn-padding-left-sm tn-padding-top-xs",staticStyle:{width:"100%"}},[i("v-uni-view",{staticClass:"tn-flex tn-flex-row-between tn-flex-col-between"},[i("v-uni-view",{staticClass:"justify-content-item"},[i("v-uni-text",{staticClass:"tn-text-lg tn-text-bold"},[t._v("不许凶我")]),i("v-uni-text",{staticClass:"tn-padding-left-sm tn-padding-right-xs"},[t._v("天使座")]),i("v-uni-text",{staticClass:"tn-icon-con-virgo"})],1)],1),i("v-uni-view",{staticClass:"tn-padding-top-xs"},[i("v-uni-view",{},[i("v-uni-text",{staticClass:"tn-text-df tn-color-gray--light"},[t._v("2022-12-30 16:23")])],1)],1)],1)],1),i("v-uni-view",{staticClass:"tn-flex tn-flex-row-between tn-flex-col-between tn-margin-top-xl tn-text-justify"},[i("v-uni-text",{},[t._v("人生就是这样，得意淡然，失意坦然；喜而不狂，忧而不伤")])],1)],1)],1)],1)],1)},o=[]},c5c8:function(t,a,i){"use strict";i("7a82");var n=i("4ea4").default;Object.defineProperty(a,"__esModule",{value:!0}),a.default=void 0;var e=n(i("4fef")),o={name:"TemplateResult",mixins:[e.default],data:function(){return{show1:!1}},methods:{tn:function(t){uni.navigateTo({url:t})},showLandscape:function(){this.openLandscape()},openLandscape:function(){this.show1=!0},closeLandscape:function(){this.show1=!1}}};a.default=o},d660:function(t,a,i){"use strict";i.r(a);var n=i("6aed"),e=i("194c");for(var o in e)["default"].indexOf(o)<0&&function(t){i.d(a,t,(function(){return e[t]}))}(o);i("03d5");var s=i("f0c5"),r=Object(s["a"])(e["default"],n["b"],n["c"],!1,null,"9cf06a4a",null,!1,n["a"],void 0);a["default"]=r.exports},f837:function(t,a,i){var n=i("4267");n.__esModule&&(n=n.default),"string"===typeof n&&(n=[[t.i,n,""]]),n.locals&&(t.exports=n.locals);var e=i("4f06").default;e("21c6fd78",n,!0,{sourceMap:!1,shadowMode:!1})}}]);