{"version":3,"file":"share-popup.bundle.map.js","names":["this","BX","Landing","exports","main_core","main_core_events","landing_featuresPopup","landing_loc","landing_pageobject","landing_env","crm_form_embed","ui_feedback_form","bitrix24_phoneverify","PHONE_VERIFY_FORM_ENTITY","_cache","babelHelpers","classPrivateFieldLooseKey","_getFeaturesPopup","_showPhoneVerifySlider","SharePopup","EventEmitter","constructor","options","super","Object","defineProperty","value","_showPhoneVerifySlider2","_getFeaturesPopup2","writable","Cache","MemoryCache","setEventNamespace","subscribeFromOptions","events","setOptions","classPrivateFieldLooseBase","set","getOptions","get","show","hide","remember","FeaturesPopup","bindElement","items","id","title","Loc","getMessage","theme","Themes","Highlight","icon","className","link","label","onClick","Type","isNil","Helper","actionButton","editorWindow","PageObject","getEditorWindow","formEditorData","Env","getInstance","isPlainObject","formOptions","_this$getOptions","phoneVerified","Embed","openSlider","then","verified","landingParams","getRootWindow","isStringFilled","PAGE_URL_LANDING_SETTINGS","SidePanel","Reflection","getClass","Instance","open","Feedback","Form","portalUri","forms","lang","sec","zones","defaultForm","formId","PhoneVerify","setEntityType","setEntityId","startVerify","sliderTitle","description","Promise","resolve","Event","Crm","Bitrix24"],"sources":["share-popup.bundle.js"],"mappings":"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"}