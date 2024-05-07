{"version":3,"file":"script.map.js","names":["window","BXMainMailConfirm","options","mailboxes","listParams","action","init","params","getMailboxes","showList","id","bind","BX","type","isNotEmptyString","placeholder","message","required","settings","length","isFunction","callback","popupSettings","className","offsetLeft","angle","closeByEsc","events","onFirstShow","data","target","contentContainer","UI","Hint","items","handler","event","item","deleteIconClass","hasClass","findParent","class","layout","deleteSender","filter","value","index","menuWindow","removeMenuItem","selected","formated","showEditForm","mailbox","menuItemHtml","util","htmlspecialchars","name","can_delete","getItemIconsHtml","text","innerHTML","title","close","push","onclick","delimiter","itemText","itemClass","i","this","showEditHint","html","showForm","email","PopupMenu","destroy","concat","show","step","senderId","mode","dlg","PopupWindow","titleBar","draggable","closeIcon","lightShadow","contentColor","contentNoPaddings","cacheable","content","buttons","prepareDialogButtons","prepareDialog","formFieldHint","field","container","hint","findChildByClassName","removeClass","addClass","adjust","hide","hideNotify","error","findChild","showNotify","switchBlock","block","immediately","emailBlock","codeBlock","hideBlock","showBlock","setName","canCheckSmtp","style","position","height","display","offsetHeight","showBlockHeight","smtpLink","smtpBlock","useLimitCheckbox","smtpLimitField","attr","disabled","checked","preventDefault","setOverlay","nameField","emailField","focus","form","onPopupShow","ajax","url","add_url_param","act","method","dataType","onsuccess","publicField","smtpServerField","smtpPortField","smtpSslField","smtpLoginField","server","port","login","isPublic","hasNoLimit","limit","protocol","isOauth","disableSmtpFields","setTitleBar","Loc","getMessage","fireEvent","onfailure","PopupWindowButton","click","popup","btn","popupWindow","buttonNode","codeField","smtpPassField","smtpLimit","atom","pattern","RegExp","match","smtp","code","public","ssl","password","hasOwnProperty","result","confirmed","mailboxName","updateListCanDel","Notification","Center","notify","Dialogs","MessageBox","modal","MessageBoxButtons","OK_CANCEL","onOk","messageBox","Promise","resolve","reject","onCancel","el","disableAndHide","smtpPasswordField","smtpWarning","hideParentDialogRow","parent","closest","safeDisable","setAttribute"],"sources":["script.js"],"mappings":"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"}