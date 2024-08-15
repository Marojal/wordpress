!function(){var e,t={62:function(e,t,l){"use strict";var o=window.wp.blocks,n=window.wp.element,a=window.wp.primitives,i=(0,n.createElement)(a.SVG,{viewBox:"0 0 24 24",xmlns:"http://www.w3.org/2000/svg"},(0,n.createElement)(a.Path,{d:"M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM5 4.5h14c.3 0 .5.2.5.5v8.4l-3-2.9c-.3-.3-.8-.3-1 0L11.9 14 9 12c-.3-.2-.6-.2-.8 0l-3.6 2.6V5c-.1-.3.1-.5.4-.5zm14 15H5c-.3 0-.5-.2-.5-.5v-2.4l4.1-3 3 1.9c.3.2.7.2.9-.1L16 12l3.5 3.4V19c0 .3-.2.5-.5.5z"})),r=window.wp.i18n,s=window.wp.blockEditor,u=window.wp.components,c=window.wp.data,h=window.wp.coreData;const p=(0,n.createElement)(n.Fragment,null,(0,n.createElement)(u.__experimentalToggleGroupControlOption,{value:"cover",label:(0,r._x)("Cover","Scale option for Image dimension control")}),(0,n.createElement)(u.__experimentalToggleGroupControlOption,{value:"contain",label:(0,r._x)("Contain","Scale option for Image dimension control")}),(0,n.createElement)(u.__experimentalToggleGroupControlOption,{value:"fill",label:(0,r._x)("Fill","Scale option for Image dimension control")})),g="cover",d={cover:(0,r.__)("Image is scaled and cropped to fill the entire space without being distorted."),contain:(0,r.__)("Image is scaled to fill the space without clipping nor distorting."),fill:(0,r.__)("Image will be stretched and distorted to completely fill the space.")};var m=e=>{let{clientId:t,attributes:{aspectRatio:l,width:o,height:a,scale:i,sizeSlug:c},setAttributes:h,imageSizeOptions:m=[]}=e;const _=(0,u.__experimentalUseCustomUnits)({availableUnits:(0,s.useSetting)("spacing.units")||["px","%","vw","em","rem"]}),v=(e,t)=>{const l=parseFloat(t);isNaN(l)&&t||h({[e]:l<0?"0":t})},f=(0,r._x)("Scale","Image scaling options"),w=a||l&&"auto"!==l;return(0,n.createElement)(s.InspectorControls,{group:"dimensions"},(0,n.createElement)(u.__experimentalToolsPanelItem,{hasValue:()=>!!l,label:(0,r.__)("Aspect ratio"),onDeselect:()=>h({aspectRatio:void 0}),resetAllFilter:()=>({aspectRatio:void 0}),isShownByDefault:!0,panelId:t},(0,n.createElement)(u.SelectControl,{__nextHasNoMarginBottom:!0,label:(0,r.__)("Aspect ratio"),value:l,options:[{label:(0,r.__)("Original"),value:"auto"},{label:(0,r.__)("Square"),value:"1"},{label:(0,r.__)("16:9"),value:"16/9"},{label:(0,r.__)("4:3"),value:"4/3"},{label:(0,r.__)("3:2"),value:"3/2"},{label:(0,r.__)("9:16"),value:"9/16"},{label:(0,r.__)("3:4"),value:"3/4"},{label:(0,r.__)("2:3"),value:"2/3"}],onChange:e=>h({aspectRatio:e})})),(0,n.createElement)(u.__experimentalToolsPanelItem,{className:"single-column",hasValue:()=>!!a,label:(0,r.__)("Height"),onDeselect:()=>h({height:void 0}),resetAllFilter:()=>({height:void 0}),isShownByDefault:!0,panelId:t},(0,n.createElement)(u.__experimentalUnitControl,{label:(0,r.__)("Height"),labelPosition:"top",value:a||"",min:0,onChange:e=>v("height",e),units:_})),(0,n.createElement)(u.__experimentalToolsPanelItem,{className:"single-column",hasValue:()=>!!o,label:(0,r.__)("Width"),onDeselect:()=>h({width:void 0}),resetAllFilter:()=>({width:void 0}),isShownByDefault:!0,panelId:t},(0,n.createElement)(u.__experimentalUnitControl,{label:(0,r.__)("Width"),labelPosition:"top",value:o||"",min:0,onChange:e=>v("width",e),units:_})),w&&(0,n.createElement)(u.__experimentalToolsPanelItem,{hasValue:()=>!!i&&i!==g,label:f,onDeselect:()=>h({scale:g}),resetAllFilter:()=>({scale:g}),isShownByDefault:!0,panelId:t},(0,n.createElement)(u.__experimentalToggleGroupControl,{__nextHasNoMarginBottom:!0,label:f,value:i,help:d[i],onChange:e=>h({scale:e}),isBlock:!0},p)),!!m.length&&(0,n.createElement)(u.__experimentalToolsPanelItem,{hasValue:()=>!!c,label:(0,r.__)("Resolution"),onDeselect:()=>h({sizeSlug:void 0}),resetAllFilter:()=>({sizeSlug:void 0}),isShownByDefault:!1,panelId:t},(0,n.createElement)(u.SelectControl,{__nextHasNoMarginBottom:!0,label:(0,r.__)("Resolution"),value:c||"thumbnail",options:m,onChange:e=>h({sizeSlug:e}),help:(0,r.__)("Select the size of the source image.")})))};function _(e){let{dimensions:t,style:l,className:o}=e;const a=(0,n.useMemo)((()=>function(e){let{width:t,height:l}=e;return`data:image/svg+xml;charset=UTF-8,${encodeURIComponent(`<svg width="${t}" height="${l}" viewBox="0 0 ${t} ${t}" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">\n\t\t\t<rect width="${t}" height="${t}" fill="#eeeeee"></rect>\n\t\t\t<path stroke="black" vector-effect="non-scaling-stroke" d="M ${t} ${t} 0 0" />\n\t\t</svg>`.replace(/[\t\n\r]/gim,"").replace(/\s\s+/g," ")).replace(/\(/g,"%28").replace(/\)/g,"%29")}`}(t)),[t]);return(0,n.createElement)("img",{alt:(0,r.__)("Placeholder image"),className:o,src:a,style:l,width:t.width,height:t.height})}function v(e,t){var l,o;return null==e||null===(l=e.media_details)||void 0===l||null===(o=l.sizes[t])||void 0===o?void 0:o.source_url}var f=l(184),w=l.n(f),b=JSON.parse('{"u2":"co-authors-plus/image"}');(0,o.registerBlockType)(b.u2,{edit:function(e){let{attributes:t,setAttributes:l,context:o,clientId:a}=e;const{aspectRatio:i,height:p,isLink:g,rel:d,scale:f,sizeSlug:b,verticalAlign:x,width:S,align:y}=t,E=(0,c.useSelect)((e=>e("co-authors-plus/blocks").getAuthorPlaceholder()),[]),C=o["co-authors-plus/author"]||E,k=o["co-authors-plus/layout"]||"",I=(0,c.useSelect)((e=>0!==C.featured_media&&e(h.store).getMedia(C.featured_media,{context:"view"})),[C.featured_media]),{imageSizes:O,imageDimensions:B}=(0,c.useSelect)((e=>e(s.store).getSettings()),[]),A=O.map((e=>{let{name:t,slug:l}=e;return{value:l,label:t}})),T=function(e,t,l){if(e&&"full"===l)return l;const o=function(e,t){if(!e)return Object.keys(t);const l=Object.keys(e.media_details.sizes),o=Object.keys(t);return Array.from(new Set([...l.filter((e=>o.includes(e)))]))}(e,t);return l&&o.includes(l)?l:o[0]}(I,B,b),N=function(e,t,l){if(!e)return{};const o=e.media_details.sizes[l];if("full"===l)return{width:o.width,height:o.height};const n=t[l];if(!0===n.crop||n.width===n.height)return{width:n.width,height:n.height};const a=o.width/o.height;return n.width>n.height?{width:n.width,height:n.width/a}:{width:n.height*a,height:n.height}}(I,B,T),P=I?{}:function(e,t){const l=e[t];return!0===l.crop||l.width===l.height?{width:l.width,height:l.height}:l.width>l.height?{width:l.width,height:l.width}:{width:l.height,height:l.height}}(B,T),z=(0,s.__experimentalUseBorderProps)(t),D=0!==C.id&&!1===I;return(0,n.createElement)(n.Fragment,null,(0,n.createElement)(m,{clientId:a,attributes:t,setAttributes:l,imageSizeOptions:A}),""===k?(0,n.createElement)(s.BlockControls,null,(0,n.createElement)(s.BlockAlignmentToolbar,{value:y,onChange:e=>{l({align:e})},controls:["none","left","center","right","wide","full"]})):null,D?null:(0,n.createElement)("figure",(0,s.useBlockProps)({className:w()({[`align${y}`]:!k&&y&&"none"!==y})}),I?(0,n.createElement)("img",{alt:(0,r.__)("Author featured image","co-authors-plus"),className:z.className,src:v(I,T),style:{width:!S&&p?"auto":S,height:!p&&S?"auto":p,aspectRatio:i,objectFit:f,verticalAlign:x,...z.style},width:N.width,height:N.height}):(0,n.createElement)(_,{className:z.className,dimensions:P,style:{width:!S&&p?"auto":S,height:!p&&S?"auto":p,aspectRatio:i,objectFit:f,verticalAlign:x,...z.style}})),(0,n.createElement)(s.InspectorControls,null,(0,n.createElement)(u.PanelBody,{title:(0,r.__)("Image Settings","co-authors-plus")},(0,n.createElement)(u.ToggleControl,{__nextHasNoMarginBottom:!0,label:(0,r.__)("Make featured image a link to author archive.","co-authors-plus"),onChange:()=>l({isLink:!g}),checked:g}),g&&(0,n.createElement)(u.TextControl,{__nextHasNoMarginBottom:!0,label:(0,r.__)("Link rel","co-authors-plus"),value:d,onChange:e=>l({rel:e})})),"default"===k?(0,n.createElement)(u.PanelBody,{initialOpen:!1,title:(0,r.__)("Co-Authors Layout","co-authors-plus")},(0,n.createElement)(u.SelectControl,{label:(0,r.__)("Vertical align","co-authors-plus"),value:x,options:[{value:"",label:(0,r.__)("Default","co-authors-plus")},{value:"baseline",label:(0,r.__)("Baseline","co-authors-plus")},{value:"bottom",label:(0,r.__)("Bottom","co-authors-plus")},{value:"middle",label:(0,r.__)("Middle","co-authors-plus")},{value:"sub",label:(0,r.__)("Sub","co-authors-plus")},{value:"super",label:(0,r.__)("Super","co-authors-plus")},{value:"text-bottom",label:(0,r.__)("Text Bottom","co-authors-plus")},{value:"text-top",label:(0,r.__)("Text Top","co-authors-plus")},{value:"top",label:(0,r.__)("Top","co-authors-plus")}],onChange:e=>{l({verticalAlign:""===e?void 0:e})},help:(0,r.__)("Vertical alignment defaults to bottom in the block layout and middle in the inline layout.","co-authors-plus")})):null))},icon:i})},184:function(e,t){var l;!function(){"use strict";var o={}.hasOwnProperty;function n(){for(var e=[],t=0;t<arguments.length;t++){var l=arguments[t];if(l){var a=typeof l;if("string"===a||"number"===a)e.push(l);else if(Array.isArray(l)){if(l.length){var i=n.apply(null,l);i&&e.push(i)}}else if("object"===a){if(l.toString!==Object.prototype.toString&&!l.toString.toString().includes("[native code]")){e.push(l.toString());continue}for(var r in l)o.call(l,r)&&l[r]&&e.push(r)}}}return e.join(" ")}e.exports?(n.default=n,e.exports=n):void 0===(l=function(){return n}.apply(t,[]))||(e.exports=l)}()}},l={};function o(e){var n=l[e];if(void 0!==n)return n.exports;var a=l[e]={exports:{}};return t[e](a,a.exports,o),a.exports}o.m=t,e=[],o.O=function(t,l,n,a){if(!l){var i=1/0;for(c=0;c<e.length;c++){l=e[c][0],n=e[c][1],a=e[c][2];for(var r=!0,s=0;s<l.length;s++)(!1&a||i>=a)&&Object.keys(o.O).every((function(e){return o.O[e](l[s])}))?l.splice(s--,1):(r=!1,a<i&&(i=a));if(r){e.splice(c--,1);var u=n();void 0!==u&&(t=u)}}return t}a=a||0;for(var c=e.length;c>0&&e[c-1][2]>a;c--)e[c]=e[c-1];e[c]=[l,n,a]},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,{a:t}),t},o.d=function(e,t){for(var l in t)o.o(t,l)&&!o.o(e,l)&&Object.defineProperty(e,l,{enumerable:!0,get:t[l]})},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},function(){var e={461:0,286:0};o.O.j=function(t){return 0===e[t]};var t=function(t,l){var n,a,i=l[0],r=l[1],s=l[2],u=0;if(i.some((function(t){return 0!==e[t]}))){for(n in r)o.o(r,n)&&(o.m[n]=r[n]);if(s)var c=s(o)}for(t&&t(l);u<i.length;u++)a=i[u],o.o(e,a)&&e[a]&&e[a][0](),e[a]=0;return o.O(c)},l=self.webpackChunkco_authors_plus=self.webpackChunkco_authors_plus||[];l.forEach(t.bind(null,0)),l.push=t.bind(null,l.push.bind(l))}();var n=o.O(void 0,[286],(function(){return o(62)}));n=o.O(n)}();