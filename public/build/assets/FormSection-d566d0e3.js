import{k as m,G as n,o as r,e as i,b as l,w as a,r as e,a as t,i as c,n as p,f as u}from"./app-d81167d9.js";import{S as g}from"./SectionTitle-02b70821.js";const _={class:"md:grid md:grid-cols-3 md:gap-6"},b={class:"mt-5 md:mt-0 md:col-span-2"},h={class:"grid grid-cols-6 gap-6"},f={key:0,class:"flex items-center justify-end px-4 py-3 bg-gray-50 dark:bg-gray-800 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md"},S={__name:"FormSection",emits:["submitted"],setup(v){const o=m(()=>!!n().actions);return(s,d)=>(r(),i("div",_,[l(g,null,{title:a(()=>[e(s.$slots,"title")]),description:a(()=>[e(s.$slots,"description")]),_:3}),t("div",b,[t("form",{onSubmit:d[0]||(d[0]=c(y=>s.$emit("submitted"),["prevent"]))},[t("div",{class:p(["px-4 py-5 bg-white dark:bg-gray-800 sm:p-6 shadow",o.value?"sm:rounded-tl-md sm:rounded-tr-md":"sm:rounded-md"])},[t("div",h,[e(s.$slots,"form")])],2),o.value?(r(),i("div",f,[e(s.$slots,"actions")])):u("",!0)],32)])]))}};export{S as _};
