(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["pageB-wallpaper-wallpaper"],{2909:function(t,e,a){"use strict";a("7a82"),Object.defineProperty(e,"__esModule",{value:!0}),e.default=function(t){return(0,i.default)(t)||(0,n.default)(t)||(0,r.default)(t)||(0,o.default)()};var i=s(a("6005")),n=s(a("db90")),r=s(a("06c5")),o=s(a("3427"));function s(t){return t&&t.__esModule?t:{default:t}}},3427:function(t,e,a){"use strict";a("7a82"),Object.defineProperty(e,"__esModule",{value:!0}),e.default=function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")},a("d9e2"),a("d401")},"3b27":function(t,e,a){"use strict";var i=a("f279"),n=a.n(i);n.a},6005:function(t,e,a){"use strict";a("7a82"),Object.defineProperty(e,"__esModule",{value:!0}),e.default=function(t){if(Array.isArray(t))return(0,i.default)(t)};var i=function(t){return t&&t.__esModule?t:{default:t}}(a("6b75"))},"6cb5":function(t,e,a){"use strict";a("7a82");var i=a("4ea4").default;Object.defineProperty(e,"__esModule",{value:!0}),e.default=void 0,a("14d9");var n=i(a("c7eb")),r=i(a("1da1")),o=i(a("2909")),s=i(a("4fef")),l=a("f758"),c={name:"TemplateWallpaper",mixins:[s.default],data:function(){return{show1:!1,cardCur:0,imageSeries:{},navBarRectInfo:{},navBarChangebaseLineHeight:0,navBarStyle:{color:"#FFFFFF",opacity:1,display:"flex"},navBarStyle2:{color:"rgba(255,255,255,0)",opacity:1,display:"flex"},navBarBackgroundColor:"rgba(255, 255, 255, 0)",activeBgAnimation:{},loadStatus:"loadmore",list:[],queryWhere:{page:1,size:20,series_uid:"",category_uid:""}}},onLoad:function(t){var e=JSON.parse(t.params);this.imageSeries=e,this.queryWhere.category_uid=e.category_uid||"",this.queryWhere.series_uid=e.uid||"",this.getImageList()},onReachBottom:function(){this.getImageList()},onReady:function(){var t=this;this.$nextTick((function(){t.initNavBarRectInfo()}))},onPageScroll:function(){this.updateNavBarRectInfo()},methods:{getImageList:function(){var t=this;(0,l.imageList)(this.queryWhere).then((function(e){var a;e.items.length>0?((a=t.list).push.apply(a,(0,o.default)(e.items)),t.queryWhere.page=e.page+1):t.loadStatus="nomore"}))},tn:function(t){uni.navigateTo({url:t})},cardSwiper:function(t){this.cardCur=t.detail.current},previewQRCodeImage:function(){wx.previewImage({urls:["https://tnuiimage.tnkjapp.com/advertise/qrcode.jpg"]})},showModal:function(t){this.openModal()},openModal:function(){this.show1=!0},initNavBarRectInfo:function(){var t=this;return(0,r.default)((0,n.default)().mark((function e(){var a,i;return(0,n.default)().wrap((function(e){while(1)switch(e.prev=e.next){case 0:return e.next=2,t._tGetRect("#navbar");case 2:return a=e.sent,e.next=5,t._tGetRect("#page_tips");case 5:if(i=e.sent,a.hasOwnProperty("top")&&i.hasOwnProperty("top")){e.next=9;break}return setTimeout((function(){t.initNavBarRectInfo()}),10),e.abrupt("return");case 9:t.navBarRectInfo={top:a.top},t.navBarChangebaseLineHeight=i.top-a.top;case 11:case"end":return e.stop()}}),e)})))()},updateNavBarRectInfo:function(){var t=this;this._tGetRect("#page_tips").then((function(e){var a=(null===e||void 0===e?void 0:e.top)||0;if(a){var i=a-t.navBarRectInfo.top,n=i/t.navBarChangebaseLineHeight;n<0?(t.navBarStyle.color="rgba(0, 0, 0, ${opacity})",t.navBarStyle2.color="rgba(0, 0, 0, ${opacity})",t.navBarBackgroundColor="rgba(255, 255, 255, 1)"):(t.navBarStyle.color="rgba(255, 255, 255, 1)",t.navBarStyle2.color="rgba(255, 255, 255, 0)",t.navBarBackgroundColor="rgba(255, 255, 255, ".concat(1-n,")"))}}))},handleWaterFallFinish:function(){this.loadStatus="loadmore"}}};e.default=c},b33e:function(t,e,a){"use strict";a.r(e);var i=a("b9a4"),n=a("d301");for(var r in n)["default"].indexOf(r)<0&&function(t){a.d(e,t,(function(){return n[t]}))}(r);a("3b27");var o=a("f0c5"),s=Object(o["a"])(n["default"],i["b"],i["c"],!1,null,"4968c364",null,!1,i["a"],void 0);e["default"]=s.exports},b9a4:function(t,e,a){"use strict";a.d(e,"b",(function(){return n})),a.d(e,"c",(function(){return r})),a.d(e,"a",(function(){return i}));var i={tnNavBar:a("3805").default,tnModal:a("915d").default,tnWaterfall:a("f96b").default,tnLazyLoad:a("2fc5").default,tnLoadMore:a("5390").default},n=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("v-uni-view",{staticClass:"tn-safe-area-inset-bottom"},[a("tn-nav-bar",{attrs:{fixed:!0,customBack:!0,bottomShadow:!1,backgroundColor:t.navBarBackgroundColor,id:"navbar"}},[a("v-uni-view",{staticClass:"tn-custom-nav-bar__back",style:[t.navBarStyle],attrs:{slot:"back"},on:{click:function(e){arguments[0]=e=t.$handleEvent(e),t.goBack.apply(void 0,arguments)}},slot:"back"},[a("v-uni-text",{staticClass:"icon tn-icon-left"}),a("v-uni-text",{staticClass:"icon tn-icon-discover-fill"})],1),a("v-uni-view",{staticClass:"tn-flex tn-flex-col-center tn-flex-row-center",style:[t.navBarStyle2]},[a("v-uni-view",{staticClass:"tn-text-bold tn-text-xl"},[t._v(t._s(t.imageSeries.title))])],1)],1),a("v-uni-swiper",{staticClass:"card-swiper",attrs:{circular:!0,autoplay:!0,duration:"500",interval:"5000"},on:{change:function(e){arguments[0]=e=t.$handleEvent(e),t.cardSwiper.apply(void 0,arguments)}}},t._l(t.list,(function(e,i){return a("v-uni-swiper-item",{key:i,class:t.cardCur==i?"cur":""},[a("v-uni-view",{staticClass:"swiper-item image-banner"},[a("v-uni-image",{attrs:{src:e.url+e.path,mode:"aspectFill"}})],1)],1)})),1),a("v-uni-view",{staticClass:"indication"},[t._l(t.list,(function(e,i){return[a("v-uni-view",{key:i+"_0",staticClass:"spot",class:t.cardCur==i?"active":""})]}))],2),a("v-uni-view",{staticClass:"shop-function tn-margin-bottom-xl",style:{paddingTop:t.vuex_custom_bar_height+"px"}},[a("v-uni-view",{staticClass:"tn-flex tn-flex-row-between tn-flex-col-center tn-margin"},[a("v-uni-view",{staticClass:"justify-content-item"},[a("v-uni-view",{staticClass:"tn-flex tn-flex-col-center tn-flex-row-left"},[a("v-uni-view",{staticClass:"tn-color-white",staticStyle:{width:"90vw"}},[a("v-uni-view",{staticClass:"tn-padding-right tn-text-xxl tn-text-bold"},[t._v(t._s(t.imageSeries.title))]),a("v-uni-view",{staticClass:"tn-padding-right tn-padding-top-sm tn-text-ellipsis tn-text-sm"},[a("v-uni-text",{staticClass:"tn-padding-right-sm"},[t._v("下列所有图片均来自网络图片，涉及侵权请联系客服删除")])],1)],1)],1)],1)],1)],1),a("tn-modal",{attrs:{custom:!0},model:{value:t.show1,callback:function(e){t.show1=e},expression:"show1"}},[a("v-uni-view",{staticClass:"custom-modal-content"},[a("v-uni-image",{staticStyle:{width:"100%"},attrs:{src:"https://tnuiimage.tnkjapp.com/advertise/qrcode.jpg",mode:"aspectFill"},on:{click:function(e){arguments[0]=e=t.$handleEvent(e),t.previewQRCodeImage.apply(void 0,arguments)}}}),a("v-uni-view",{staticClass:"tn-text-center tn-padding-top"},[t._v("欢迎加入【图鸟UI】圈子群")]),a("v-uni-view",{staticClass:"tn-text-center tn-padding-top tn-text-lg"},[t._v("点击上图，可识别微信二维码")])],1)],1),a("v-uni-view",{staticClass:"group-wrap tn-bg-white",attrs:{id:"page_tips"}},[a("v-uni-view",{staticStyle:{padding:"30rpx 20rpx"}},[a("tn-waterfall",{ref:"waterfall",on:{finish:function(e){arguments[0]=e=t.$handleEvent(e),t.handleWaterFallFinish.apply(void 0,arguments)}},scopedSlots:t._u([{key:"left",fn:function(e){var i=e.leftList;return t._l(i,(function(e,i){return a("v-uni-view",{key:e.uid,staticClass:"wallpaper__item",on:{click:function(a){arguments[0]=a=t.$handleEvent(a),t.tn("/pageA/details/details?image_uid="+e.uid)}}},[a("v-uni-view",{staticClass:"item__image"},[a("tn-lazy-load",{attrs:{threshold:6e3,height:"100%",image:e.url+e.path,index:e.uid,imgMode:"widthFix"}})],1),a("v-uni-view",{staticClass:"item__data"},[a("v-uni-view",{staticClass:"item__title-container"},[a("v-uni-text",{staticClass:"item__title tn-color-black"},[t._v(t._s(e.title))])],1),a("v-uni-view",{staticClass:"tn-flex tn-flex-row-between tn-flex-col-center tn-padding-top-xs"},[a("v-uni-view",{staticClass:"justify-content-item"},[a("v-uni-view",{staticClass:"tn-flex tn-flex-col-center tn-flex-row-left"},[a("v-uni-view",{staticClass:"logo-pic"},[a("v-uni-view",{staticClass:"logo-image"},[a("v-uni-view",{style:"background-image:url("+e.author.qr_url+");width: 40rpx;height: 40rpx;background-size: cover;"})],1)],1),a("v-uni-view",{staticClass:"tn-padding-left-xs"},[a("v-uni-text",{staticClass:"tn-color-gray tn-text-sm"},[t._v(t._s(e.user.nickname))])],1)],1)],1),a("v-uni-view",{staticClass:"justify-content-item"},[a("v-uni-text",{staticClass:"tn-icon-rocket tn-color-gray tn-padding-right-xs"}),a("v-uni-text",{staticClass:"tn-color-gray"},[t._v(t._s(e.download))])],1)],1)],1)],1)}))}},{key:"right",fn:function(e){var i=e.rightList;return t._l(i,(function(e,i){return a("v-uni-view",{key:e.uid,staticClass:"wallpaper__item",on:{click:function(a){arguments[0]=a=t.$handleEvent(a),t.tn("/pageA/details/details?image_uid="+e.uid)}}},[a("v-uni-view",{staticClass:"item__image"},[a("tn-lazy-load",{attrs:{threshold:6e3,height:"100%",image:e.url+e.path,index:e.uid,imgMode:"widthFix"}})],1),a("v-uni-view",{staticClass:"item__data"},[a("v-uni-view",{staticClass:"item__title-container"},[a("v-uni-text",{staticClass:"item__title tn-color-black"},[t._v(t._s(e.title))])],1),a("v-uni-view",{staticClass:"tn-flex tn-flex-row-between tn-flex-col-center tn-padding-top-xs"},[a("v-uni-view",{staticClass:"justify-content-item"},[a("v-uni-view",{staticClass:"tn-flex tn-flex-col-center tn-flex-row-left"},[a("v-uni-view",{staticClass:"logo-pic"},[a("v-uni-view",{staticClass:"logo-image"},[a("v-uni-view",{style:"background-image:url("+e.author.qr_url+");width: 40rpx;height: 40rpx;background-size: cover;"})],1)],1),a("v-uni-view",{staticClass:"tn-padding-left-xs"},[a("v-uni-text",{staticClass:"tn-color-gray tn-text-sm"},[t._v(t._s(e.user.nickname))])],1)],1)],1),a("v-uni-view",{staticClass:"justify-content-item"},[a("v-uni-text",{staticClass:"tn-icon-rocket tn-color-gray tn-padding-right-xs"}),a("v-uni-text",{staticClass:"tn-color-gray"},[t._v(t._s(e.download))])],1)],1)],1)],1)}))}}]),model:{value:t.list,callback:function(e){t.list=e},expression:"list"}})],1),a("tn-load-more",{attrs:{status:t.loadStatus}})],1)],1)},r=[]},d301:function(t,e,a){"use strict";a.r(e);var i=a("6cb5"),n=a.n(i);for(var r in i)["default"].indexOf(r)<0&&function(t){a.d(e,t,(function(){return i[t]}))}(r);e["default"]=n.a},d9a0:function(t,e,a){var i=a("24fb");e=i(!1),e.push([t.i,'@charset "UTF-8";\n/**\n * 下方引入的为Tuniao UI的集成样式文件，为scss预处理器，其中包含了一些"tn-"开头的自定义变量\n * 使用的时候，请将下面的一行复制到您的uniapp项目根目录的uni.scss中即可\n * Tuniao UI自定义的css类名和scss变量，均以"tn-"开头，不会造成冲突，请放心使用 \n */\n/* 瀑布流*/.wallpaper__item[data-v-4968c364]{background-color:#fff;overflow:hidden;margin:0 %?10?%;margin-bottom:%?40?%}.wallpaper__item .item[data-v-4968c364]{\n  /* 图片 start */\n  /* 图片 end */\n  /* 内容 start */\n  /* 标题 start */\n  /* 标题 end */\n  /* 标签 start */\n  /* 标签 end */\n  /* 内容 end */}.wallpaper__item .item__image[data-v-4968c364]{width:100%;height:auto;background-color:#fff;border:%?1?% solid #f8f7f8;border-radius:%?10?%;overflow:hidden}.wallpaper__item .item__data[data-v-4968c364]{padding:%?14?% %?0?%}.wallpaper__item .item__title-container[data-v-4968c364]{text-align:justify;line-height:%?38?%;vertical-align:middle}.wallpaper__item .item__title[data-v-4968c364]{font-size:%?30?%}.wallpaper__item .item__tags-container[data-v-4968c364]{display:flex;flex-direction:row;flex-wrap:nowrap;align-items:center;justify-content:flex-start}.wallpaper__item .item__tag[data-v-4968c364]{margin:%?10?%;color:#7c8191;background-color:#f3f2f7;padding:%?4?% %?14?% %?6?%;border-radius:%?10?%;font-size:%?20?%}.wallpaper__item .item__tag[data-v-4968c364]:first-child{margin-left:%?0?%!important}\n/* 胶囊*/.tn-custom-nav-bar__back[data-v-4968c364]{width:100%;height:100%;position:relative;display:flex;justify-content:space-evenly;align-items:center;box-sizing:border-box;background-color:rgba(0,0,0,.03);border-radius:%?1000?%;border:%?1?% solid hsla(0,0%,100%,.5);font-size:18px}.tn-custom-nav-bar__back .icon[data-v-4968c364]{display:block;flex:1;margin:auto;text-align:center}.tn-custom-nav-bar__back[data-v-4968c364]:before{content:" ";width:%?1?%;height:110%;position:absolute;top:22.5%;left:0;right:0;margin:auto;-webkit-transform:scale(.5);transform:scale(.5);-webkit-transform-origin:0 0;transform-origin:0 0;pointer-events:none;box-sizing:border-box;opacity:.05;background-color:#000}\n/* 内容 start*/.tn-plan-content__item[data-v-4968c364]{display:inline-block;line-height:%?45?%;padding:%?10?% %?30?%;margin:%?20?% %?20?% %?5?% %?0?%}.tn-plan-content__item--prefix[data-v-4968c364]{padding-right:%?10?%}\n/* 内容 end*/\n/* 轮播视觉差 start */.card-swiper[data-v-4968c364]{height:%?500?%!important}.card-swiper uni-swiper-item[data-v-4968c364]{width:%?750?%!important;left:%?0?%;box-sizing:border-box;overflow:initial}.card-swiper uni-swiper-item .swiper-item[data-v-4968c364]{width:100%;display:block;height:100%;-webkit-transform:scale(1);transform:scale(1);transition:all .2s ease-in 0s;will-change:transform;overflow:hidden}.card-swiper uni-swiper-item.cur .swiper-item[data-v-4968c364]{-webkit-transform:none;transform:none;transition:all .2s ease-in 0s;will-change:transform}.image-banner[data-v-4968c364]{display:flex;align-items:center;justify-content:center}.image-banner uni-image[data-v-4968c364]{width:100%;height:100%}\n/* 轮播指示点 start*/.indication[data-v-4968c364]{z-index:9999;width:100%;height:%?36?%;position:absolute;display:flex;flex-direction:row;align-items:center;justify-content:center;opacity:0}.spot[data-v-4968c364]{background-color:#fff;opacity:.6;width:%?10?%;height:%?10?%;border-radius:%?20?%;top:%?-60?%;margin:0 %?8?%!important;position:relative}.spot.active[data-v-4968c364]{opacity:1;width:%?30?%;background-color:#fff}\n/* 顶部店铺 */.shop-function[data-v-4968c364]{position:relative;z-index:1;margin-top:%?-450?%;padding-bottom:%?110?%;background-image:linear-gradient(hsla(0,0%,100%,.01),rgba(0,0,0,.4))}\n/* 用户头像 start */.logo-image[data-v-4968c364]{width:%?40?%;height:%?40?%;position:relative}.logo-pic[data-v-4968c364]{background-size:cover;background-repeat:no-repeat;background-position:top;border:%?6?% solid hsla(0,0%,100%,.25);box-shadow:%?0?% %?0?% %?80?% %?0?% rgba(0,0,0,.15);border-radius:50%;overflow:hidden}\n/* 内容*/.group-wrap[data-v-4968c364]{position:relative;z-index:1;margin-top:%?-130?%;margin-bottom:%?40?%;border-radius:%?30?% %?30?% 0 0}\n/* 阴影 start*/.mould-shadow[data-v-4968c364]{border-radius:%?15?%;box-shadow:%?0?% %?0?% %?50?% %?0?% rgba(0,0,0,.07)}.tn-tabbar-height[data-v-4968c364]{min-height:%?20?%;height:calc(%?40?% + env(safe-area-inset-bottom) / 2)}\n/* 图标容器5 start */.icon5__item[data-v-4968c364]{background-color:#fff;border-radius:%?10?%;padding:%?0?%;margin:%?0?%;-webkit-transform:scale(1);transform:scale(1);transition:-webkit-transform .3s linear;transition:transform .3s linear;transition:transform .3s linear,-webkit-transform .3s linear;-webkit-transform-origin:center center;transform-origin:center center}.icon5__item--icon[data-v-4968c364]{width:%?96?%;height:%?96?%;border-radius:50%;margin-bottom:%?18?%;position:relative;z-index:1}\n/* 瀑布流*/.product__item[data-v-4968c364]{background-color:#fff;overflow:hidden;margin:0 %?10?%;margin-bottom:%?20?%}.product__item .item[data-v-4968c364]{\n  /* 图片 start */\n  /* 图片 end */\n  /* 内容 start */\n  /* 标题 start */\n  /* 标题 end */\n  /* 标签 start */\n  /* 标签 end */\n  /* 内容 end */}.product__item .item__image[data-v-4968c364]{width:100%;height:auto;background-color:#fff;border:%?1?% solid #f8f7f8;border-radius:%?10?%;overflow:hidden}.product__item .item__data[data-v-4968c364]{padding:%?14?% %?0?%}.product__item .item__title-container[data-v-4968c364]{text-align:justify;line-height:%?38?%;vertical-align:middle}.product__item .item__store-type[data-v-4968c364]{height:%?28?%;font-size:%?20?%;position:relative;display:inline-flex;align-items:center;justify-content:center;padding:%?4?%;border-radius:%?6?%;white-space:nowrap;text-align:center;top:%?-2?%;margin-right:%?6?%}.product__item .item__title[data-v-4968c364]{font-size:%?30?%}.product__item .item__tags-container[data-v-4968c364]{display:flex;flex-direction:row;flex-wrap:nowrap;align-items:center;justify-content:flex-start}.product__item .item__tag[data-v-4968c364]{margin:%?10?%;color:#7c8191;background-color:#f3f2f7;padding:%?4?% %?14?% %?6?%;border-radius:%?10?%;font-size:%?20?%}.product__item .item__tag[data-v-4968c364]:first-child{margin-left:%?0?%!important}',""]),t.exports=e},db90:function(t,e,a){"use strict";a("7a82"),Object.defineProperty(e,"__esModule",{value:!0}),e.default=function(t){if("undefined"!==typeof Symbol&&null!=t[Symbol.iterator]||null!=t["@@iterator"])return Array.from(t)},a("a4d3"),a("e01a"),a("d3b7"),a("d28b"),a("3ca3"),a("ddb0"),a("a630")},f279:function(t,e,a){var i=a("d9a0");i.__esModule&&(i=i.default),"string"===typeof i&&(i=[[t.i,i,""]]),i.locals&&(t.exports=i.locals);var n=a("4f06").default;n("426f8ffc",i,!0,{sourceMap:!1,shadowMode:!1})},f758:function(t,e,a){"use strict";a("7a82");var i=a("4ea4").default;Object.defineProperty(e,"__esModule",{value:!0}),e.imageCategoryList=function(t){return n.default.get("img/category",{params:t}).then((function(t){return t.data}))},e.imageDownLoad=function(t){return n.default.get("img/download",{params:t}).then((function(t){return t.data}))},e.imageItemList=function(t){return n.default.get("img/item",{params:t}).then((function(t){return t.data}))},e.imageList=function(t){return n.default.get("img/list",{params:t}).then((function(t){return t.data}))},e.seriesList=function(t){return n.default.get("img/series",{params:t}).then((function(t){return t.data}))};var n=i(a("f8fb"))}}]);