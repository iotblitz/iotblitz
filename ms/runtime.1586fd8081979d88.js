(()=>{"use strict";var e,v={},m={};function a(e){var t=m[e];if(void 0!==t)return t.exports;var f=m[e]={exports:{}};return v[e](f,f.exports,a),f.exports}a.m=v,e=[],a.O=(t,f,d,b)=>{if(!f){var c=1/0;for(r=0;r<e.length;r++){for(var[f,d,b]=e[r],u=!0,n=0;n<f.length;n++)(!1&b||c>=b)&&Object.keys(a.O).every(p=>a.O[p](f[n]))?f.splice(n--,1):(u=!1,b<c&&(c=b));if(u){e.splice(r--,1);var o=d();void 0!==o&&(t=o)}}return t}b=b||0;for(var r=e.length;r>0&&e[r-1][2]>b;r--)e[r]=e[r-1];e[r]=[f,d,b]},a.d=(e,t)=>{for(var f in t)a.o(t,f)&&!a.o(e,f)&&Object.defineProperty(e,f,{enumerable:!0,get:t[f]})},a.f={},a.e=e=>Promise.all(Object.keys(a.f).reduce((t,f)=>(a.f[f](e,t),t),[])),a.u=e=>(8592===e?"common":e)+"."+{74:"b03688d0ea1ed3e0",132:"761dd153a97d057d",315:"22866f31e6c5348e",694:"291d3fe97d5dd4ac",744:"ec8fcf7a2ea94ff1",767:"622a08b734abb6e2",961:"41943d211a1130d4",1109:"20b09a8354850efd",1122:"9b5a2eae043b5324",1370:"6621d724b1b86918",1423:"b890d7905f481330",2043:"9f2055250c694996",2231:"30b658d593ab5f9f",2372:"d36d9d37176f7274",2470:"93873a08a635f9e6",2803:"397e2a5cd8aea6d8",3026:"51fe0af27e3fdf32",3514:"d4690f1d6b6ee620",3611:"8fc02aee962f0283",3722:"5e756249ef4c10a1",3794:"3c85d1a86e60f166",3870:"35e7bd647cb9ba74",3965:"694e00e38ee86bdb",4055:"2917a91f0f55bf65",4229:"b7a1ce0c2d8b0118",4844:"729031459e122256",5118:"2686ad70decd3f9c",5186:"802b41beb0321c0c",5373:"87733b0239badf34",5602:"12c7b0064ed07471",5938:"f091a11357b71607",5947:"76e112162ecda2b1",6022:"691c0484080a6718",6091:"acc94f91aaa22d36",6324:"fed649f6ea17aec7",6426:"29d1f674d9037998",6903:"fc2e821effd3f3a0",6942:"60582e8cd9fa017f",7016:"ba78498b45976be8",7327:"d2df5edd35b8fe3b",7493:"8aab5d950bcf753a",7878:"ba3a222db6584567",8052:"4e6f5fd2012fd58a",8062:"7be554e6c55fd4ae",8096:"55297b6b1860ea75",8167:"0a278a9caae8fec9",8254:"4e7837fbf5fa5127",8336:"547872ceaf77c2df",8375:"d48d03fdd2e5a3c0",8409:"a631855ec4113b0e",8483:"b155c1a0e6982019",8494:"85949893c1594cd0",8520:"d1e9340819a8643a",8592:"d90783e28cd06a59",8681:"e35eae57d19d8e20",9059:"af6b603d9adbab2a",9252:"3a19fabf58cf650c",9552:"93e9969e0fdd4636",9626:"64e3eb4fd2822953",9683:"985b190b0ef1cceb"}[e]+".js",a.miniCssF=e=>{},a.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={},t="sakai-ng:";a.l=(f,d,b,r)=>{if(e[f])e[f].push(d);else{var c,u;if(void 0!==b)for(var n=document.getElementsByTagName("script"),o=0;o<n.length;o++){var i=n[o];if(i.getAttribute("src")==f||i.getAttribute("data-webpack")==t+b){c=i;break}}c||(u=!0,(c=document.createElement("script")).type="module",c.charset="utf-8",c.timeout=120,a.nc&&c.setAttribute("nonce",a.nc),c.setAttribute("data-webpack",t+b),c.src=a.tu(f)),e[f]=[d];var l=(g,p)=>{c.onerror=c.onload=null,clearTimeout(s);var _=e[f];if(delete e[f],c.parentNode&&c.parentNode.removeChild(c),_&&_.forEach(h=>h(p)),g)return g(p)},s=setTimeout(l.bind(null,void 0,{type:"timeout",target:c}),12e4);c.onerror=l.bind(null,c.onerror),c.onload=l.bind(null,c.onload),u&&document.head.appendChild(c)}}})(),a.r=e=>{typeof Symbol<"u"&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},(()=>{var e;a.tt=()=>(void 0===e&&(e={createScriptURL:t=>t},typeof trustedTypes<"u"&&trustedTypes.createPolicy&&(e=trustedTypes.createPolicy("angular#bundler",e))),e)})(),a.tu=e=>a.tt().createScriptURL(e),a.p="",(()=>{var e={3666:0};a.f.j=(d,b)=>{var r=a.o(e,d)?e[d]:void 0;if(0!==r)if(r)b.push(r[2]);else if(3666!=d){var c=new Promise((i,l)=>r=e[d]=[i,l]);b.push(r[2]=c);var u=a.p+a.u(d),n=new Error;a.l(u,i=>{if(a.o(e,d)&&(0!==(r=e[d])&&(e[d]=void 0),r)){var l=i&&("load"===i.type?"missing":i.type),s=i&&i.target&&i.target.src;n.message="Loading chunk "+d+" failed.\n("+l+": "+s+")",n.name="ChunkLoadError",n.type=l,n.request=s,r[1](n)}},"chunk-"+d,d)}else e[d]=0},a.O.j=d=>0===e[d];var t=(d,b)=>{var n,o,[r,c,u]=b,i=0;if(r.some(s=>0!==e[s])){for(n in c)a.o(c,n)&&(a.m[n]=c[n]);if(u)var l=u(a)}for(d&&d(b);i<r.length;i++)a.o(e,o=r[i])&&e[o]&&e[o][0](),e[o]=0;return a.O(l)},f=self.webpackChunksakai_ng=self.webpackChunksakai_ng||[];f.forEach(t.bind(null,0)),f.push=t.bind(null,f.push.bind(f))})()})();