{"version":3,"file":"script.map.js","names":["this","BX","Landing","exports","main_core","landing_sliderhacks","DiskFile","babelHelpers","classCallCheck","document","addEventListener","onClick","bind","createClass","key","value","event","target","href","getAttribute","JSON","parse","parentNode","nodeName","grandParentNode","indexOf","ajax","get","replace","data","Object","keys","map","setAttribute","click","preventDefault","stopPropagation","SearchResult","scrollToFirstBlock","result","querySelector","parent","classList","contains","window","scrollTo","top","offsetTop","behavior","TimeStamp","removeTimestamp","uri","location","toString","slice","history","replaceState","title","onEditButtonClick","Symbol","onBackButtonClick","onForwardButtonClick","onCopyLinkButtonClick","onUniqueViewIconClick","TopPanel","userData","Event","getEditButton","getBackButton","getForwardButton","getCopyLinkButton","getUniqueViewIcon","pushHistory","checkNavButtonsActivity","checkHints","initUniqueViewPopup","Dom","attr","currentTarget","landingId","Type","isString","openSlider","link","util","remove_url_param","node","clipboard","isCopySupported","copy","timeoutIds","popupParams","content","Loc","getMessage","darkMode","autoHide","zIndex","angle","offsetLeft","bindOptions","position","popup","PopupWindow","show","timeoutId","pop","clearTimeout","setTimeout","close","push","hasClass","removeClass","addClass","isArrayFilled","isNumber","historyState","SliderHacks","reloadSlider","length","getLayout","cache","remember","url","SidePanel","Instance","open","cacheable","customLeftBoundary","allowChangeHistory","events","onClose","split","splice","layout","linkPage","parseInt","getComputedStyle","width","style","UI","Hint","init","setUserId","id","setUserName","name","avatar","i","createUserItem","itemContainer","userUrl","origin","userItem","create","tag","props","userItemAvatar","userItemLink","text","append","defineProperty","Cache","MemoryCache","PageTransition","referrer","isSameHost","isDifferentPath","isIframeDisabled","previousUrl","URL","host","hostname","pathname","searchParams","body","readyState","Pub"],"sources":["script.js"],"mappings":"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"}