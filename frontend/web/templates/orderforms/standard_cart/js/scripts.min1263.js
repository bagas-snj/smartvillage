function hasDomainLookupEnded(){domainLookupCallCount++,3==domainLookupCallCount&&jQuery("#btnCheckAvailability").removeAttr("disabled").removeClass("disabled")}function hasProductDomainLookupEnded(e,n){domainLookupCallCount++,domainLookupCallCount==e&&(n.removeAttr("disabled").removeClass("disabled"),jQuery('input[name="domainoption"]').iCheck("enable"))}function domainGotoNextStep(){jQuery("#domainLoadingSpinner").show(),jQuery("#frmProductDomainSelections").submit()}function removeItem(e,n){jQuery("#inputRemoveItemType").val(e),jQuery("#inputRemoveItemRef").val(n),jQuery("#modalRemoveItem").modal("show")}function updateConfigurableOptions(e,n){jQuery.post("cart.php","a=cyclechange&ajax=1&i="+e+"&billingcycle="+n,function(e){jQuery("#productConfigurableOptions").html(jQuery(e).find("#productConfigurableOptions").html()),jQuery("input").iCheck({inheritID:!0,checkboxClass:"icheckbox_square-blue",radioClass:"iradio_square-blue",increaseArea:"20%"})}),recalctotals()}function recalctotals(){jQuery("#orderSummaryLoader").is(":visible")||jQuery("#orderSummaryLoader").fadeIn("fast");var e=Math.floor(1e6*Math.random()+1);window.lastSliderUpdateRequestId=e;var n=jQuery.post("cart.php","ajax=1&a=confproduct&calctotal=true&"+jQuery("#frmConfigureProduct").serialize());n.done(function(n){e==window.lastSliderUpdateRequestId&&jQuery("#producttotal").html(n)}),n.always(function(){jQuery("#orderSummaryLoader").delay(500).fadeOut("slow")})}function selectDomainPricing(e,n,t,a,i){jQuery("#domainSuggestion"+i).iCheck("check"),jQuery("[name='domainsregperiod["+e+"]']").val(t),jQuery("[name='"+e+"-selected-price']").html('<b class="glyphicon glyphicon-shopping-cart"></b> '+t+" "+a+" @ "+n)}function selectDomainPeriodInCart(e,n,t,a){var i=jQuery("#orderSummaryLoader");i.hasClass("hidden")&&i.hide().removeClass("hidden").fadeIn("fast"),jQuery("[name='"+e+"Pricing']").html(t+" "+a+' <span class="caret"></span>'),jQuery("[name='"+e+"Price']").html(n);var r=jQuery.post(window.location.pathname,{domain:e,period:t,a:"updateDomainPeriod",token:csrfToken});r.done(function(e){e.domains.forEach(function(e){jQuery("[name='"+e.domain+"Price']").parent("div").find(".renewal-price").html(e.renewprice+e.shortYearsLanguage).end()}),jQuery("#subtotal").html(e.subtotal),e.promotype&&jQuery("#discount").html(e.discount),e.taxrate&&jQuery("#taxTotal1").html(e.taxtotal),e.taxrate2&&jQuery("#taxTotal2").html(e.taxtotal2);var n=jQuery("#recurring");n.find("span:visible").not("span.cost").fadeOut("fast").end(),e.totalrecurringannually&&jQuery("#recurringAnnually").fadeIn("fast").find(".cost").html(e.totalrecurringannually),e.totalrecurringbiennially&&jQuery("#recurringBiennially").fadeIn("fast").find(".cost").html(e.totalrecurringbiennially),e.totalrecurringmonthly&&jQuery("#recurringMonthly").fadeIn("fast").find(".cost").html(e.totalrecurringmonthly),e.totalrecurringquarterly&&jQuery("#recurringQuarterly").fadeIn("fast").find(".cost").html(e.totalrecurringquarterly),e.totalrecurringsemiannually&&jQuery("#recurringSemiAnnually").fadeIn("fast").find(".cost").html(e.totalrecurringsemiannually),e.totalrecurringtriennially&&jQuery("#recurringTriennially").fadeIn("fast").find(".cost").html(e.totalrecurringtriennially),jQuery("#totalDueToday").html(e.total)}),r.always(function(){i.delay(500).fadeOut("slow").addClass("hidden").show()})}function loadMoreSuggestions(){var e,n=jQuery("#domainSuggestions");for(e=1;e<=10;e++){if(!(furtherSuggestions>0))return void jQuery("div.more-suggestions").find("a").addClass("hidden").end().find("span.no-more").removeClass("hidden");n.find("li.domain-suggestion.hidden.clone:first").not().hide().removeClass("hidden").slideDown(),furtherSuggestions=n.find("li.domain-suggestion.clone.hidden").length}}function validate_captcha(e){var n=jQuery("#g-recaptcha-response"),t=jQuery("#google-recaptcha"),a=jQuery("#inputCaptcha");if(n.length&&!n.val())return t.tooltip("show"),!1;if(a.length&&!a.val())return a.tooltip("show"),!1;var i=jQuery.post(e.attr("action"),e.serialize()+"&a=validateCaptcha","json");i.done(function(n){n.error?(jQuery("#inputCaptcha").attr("data-original-title",n.error).tooltip("show"),a.length&&jQuery("#inputCaptchaImage").replaceWith('<img id="inputCaptchaImage" src="includes/verifyimage.php" align="middle" />')):(jQuery("#captchaContainer").remove(),e.trigger("submit"))})}!function(e){function n(e,n,i){var r=e[0],o=/er/.test(i)?_indeterminate:/bl/.test(i)?p:f,d=i==_update?{checked:r[f],disabled:r[p],indeterminate:"true"==e.attr(_indeterminate)||"false"==e.attr(_determinate)}:r[o];if(/^(ch|di|in)/.test(i)&&!d)t(e,o);else if(/^(un|en|de)/.test(i)&&d)a(e,o);else if(i==_update)for(var s in d)d[s]?t(e,s,!0):a(e,s,!0);else n&&"toggle"!=i||(n||e[_callback]("ifClicked"),d?r[_type]!==c&&a(e,o):t(e,o))}function t(n,t,i){var u=n[0],m=n.parent(),y=t==f,g=t==_indeterminate,v=t==p,j=g?_determinate:y?h:"enabled",b=r(n,j+o(u[_type])),C=r(n,t+o(u[_type]));if(u[t]!==!0){if(!i&&t==f&&u[_type]==c&&u.name){var Q=n.closest("form"),k='input[name="'+u.name+'"]';k=Q.length?Q.find(k):e(k),k.each(function(){this!==u&&e(this).data(s)&&a(e(this),t)})}g?(u[t]=!0,u[f]&&a(n,f,"force")):(i||(u[t]=!0),y&&u[_indeterminate]&&a(n,_indeterminate,!1)),d(n,y,t,i)}u[p]&&r(n,_cursor,!0)&&m.find("."+l).css(_cursor,"default"),m[_add](C||r(n,t)||""),m.attr("role")&&!g&&m.attr("aria-"+(v?p:f),"true"),m[_remove](b||r(n,j)||"")}function a(e,n,t){var a=e[0],i=e.parent(),s=n==f,u=n==_indeterminate,c=n==p,m=u?_determinate:s?h:"enabled",y=r(e,m+o(a[_type])),g=r(e,n+o(a[_type]));a[n]!==!1&&(!u&&t&&"force"!=t||(a[n]=!1),d(e,s,m,t)),!a[p]&&r(e,_cursor,!0)&&i.find("."+l).css(_cursor,"pointer"),i[_remove](g||r(e,n)||""),i.attr("role")&&!u&&i.attr("aria-"+(c?p:f),"false"),i[_add](y||r(e,m)||"")}function i(n,t){n.data(s)&&(n.parent().html(n.attr("style",n.data(s).s||"")),t&&n[_callback](t),n.off(".i").unwrap(),e(_label+'[for="'+n[0].id+'"]').add(n.closest(_label)).off(".i"))}function r(e,n,t){if(e.data(s))return e.data(s).o[n+(t?"":"Class")]}function o(e){return e.charAt(0).toUpperCase()+e.slice(1)}function d(e,n,t,a){a||(n&&e[_callback]("ifToggled"),e[_callback]("ifChanged")[_callback]("if"+o(t)))}var s="iCheck",l=s+"-helper",u="checkbox",c="radio",f="checked",h="un"+f,p="disabled";_determinate="determinate",_indeterminate="in"+_determinate,_update="update",_type="type",_click="click",_touch="touchbegin.i touchend.i",_add="addClass",_remove="removeClass",_callback="trigger",_label="label",_cursor="cursor",_mobile=/ipad|iphone|ipod|android|blackberry|windows phone|opera mini|silk/i.test(navigator.userAgent),e.fn[s]=function(r,o){var d='input[type="'+u+'"], input[type="'+c+'"]',h=e(),m=function(n){n.each(function(){var n=e(this);h=n.is(d)?h.add(n):h.add(n.find(d))})};if(/^(check|uncheck|toggle|indeterminate|determinate|disable|enable|update|destroy)$/i.test(r))return r=r.toLowerCase(),m(this),h.each(function(){var t=e(this);"destroy"==r?i(t,"ifDestroyed"):n(t,!0,r),e.isFunction(o)&&o()});if("object"!=typeof r&&r)return this;var y=e.extend({checkedClass:f,disabledClass:p,indeterminateClass:_indeterminate,labelHover:!0},r),g=y.handle,v=y.hoverClass||"hover",j=y.focusClass||"focus",b=y.activeClass||"active",C=!!y.labelHover,Q=y.labelHoverClass||"hover",k=0|(""+y.increaseArea).replace("%","");return g!=u&&g!=c||(d='input[type="'+g+'"]'),k<-50&&(k=-50),m(this),h.each(function(){var r=e(this);i(r);var o,d=this,h=d.id,m=-k+"%",g=100+2*k+"%",w={position:"absolute",top:m,left:m,display:"block",width:g,height:g,margin:0,padding:0,background:"#fff",border:0,opacity:0},_=_mobile?{position:"absolute",visibility:"hidden"}:k?w:{position:"absolute",opacity:0},D=d[_type]==u?y.checkboxClass||"i"+u:y.radioClass||"i"+c,S=e(_label+'[for="'+h+'"]').add(r.closest(_label)),M=!!y.aria,P=s+"-"+Math.random().toString(36).substr(2,6),T='<div class="'+D+'" '+(M?'role="'+d[_type]+'" ':"");M&&S.each(function(){T+='aria-labelledby="',this.id?T+=this.id:(this.id=P,T+=P),T+='"'}),T=r.wrap(T+"/>")[_callback]("ifCreated").parent().append(y.insert),o=e('<ins class="'+l+'"/>').css(w).appendTo(T),r.data(s,{o:y,s:r.attr("style")}).css(_),!!y.inheritClass&&T[_add](d.className||""),!!y.inheritID&&h&&T.attr("id",s+"-"+h),"static"==T.css("position")&&T.css("position","relative"),n(r,!0,_update),S.length&&S.on(_click+".i mouseover.i mouseout.i "+_touch,function(t){var a=t[_type],i=e(this);if(!d[p]){if(a==_click){if(e(t.target).is("a"))return;n(r,!1,!0)}else C&&(/ut|nd/.test(a)?(T[_remove](v),i[_remove](Q)):(T[_add](v),i[_add](Q)));if(!_mobile)return!1;t.stopPropagation()}}),r.on(_click+".i focus.i blur.i keyup.i keydown.i keypress.i",function(e){var n=e[_type],i=e.keyCode;return n!=_click&&("keydown"==n&&32==i?(d[_type]==c&&d[f]||(d[f]?a(r,f):t(r,f)),!1):void("keyup"==n&&d[_type]==c?!d[f]&&t(r,f):/us|ur/.test(n)&&T["blur"==n?_remove:_add](j)))}),o.on(_click+" mousedown mouseup mouseover mouseout "+_touch,function(e){var t=e[_type],a=/wn|up/.test(t)?b:v;if(!d[p]){if(t==_click?n(r,!1,!0):(/wn|er|in/.test(t)?T[_add](a):T[_remove](a+" "+b),S.length&&C&&a==v&&S[/ut|nd/.test(t)?_remove:_add](Q)),!_mobile)return!1;e.stopPropagation()}})})}}(window.jQuery||window.Zepto),function(e,n){"object"!=typeof e.WHMCS&&(e.WHMCS=n)}(window,{hasModule:function(e){return"undefined"!=typeof WHMCS[e]&&Object.getOwnPropertyNames(WHMCS[e]).length>0},loadModule:function(e,n){if(!this.hasModule(e))if(WHMCS[e]={},"function"==typeof n)n.apply(WHMCS[e]);else for(var t in n)n.hasOwnProperty(t)&&(WHMCS[e][t]={},n[t].apply(WHMCS[e][t]))}}),function(e){WHMCS.hasModule("authn")||WHMCS.loadModule("authn",e)}({provider:function(){var e=!1;return this.feedbackContainer=function(){return jQuery(".providerLinkingFeedback")},this.btnContainer=function(){return jQuery(".providerPreLinking")},this.feedbackMessage=function(e){"undefined"==typeof e&&(e="complete_sign_in");var n=jQuery("p.providerLinkingMsg-preLink-"+e);return n.length?n.first().html():""},this.showProgressMessage=function(n){this.feedbackContainer().fadeIn("fast",function(){"function"!=typeof n||e||(e=!0,n())})},this.preLinkInit=function(e){var n='<i class="fa fa-fw fa-spinner fa-spin"></i> ';this.feedbackContainer().removeClass("alert-danger alert-success").addClass("alert alert-info").html(n+this.feedbackMessage()).hide();var t=this.btnContainer();if(t.length)if(t.data("hideOnPrelink")){var a=this;t.fadeOut("false",function(){a.showProgressMessage(e)})}else t.data("disableOnPrelink")?(t.find(".btn").addClass("disabled"),this.showProgressMessage(e)):this.showProgressMessage(e);else this.showProgressMessage(e)},this.displayError=function(e,n,t){jQuery("#providerLinkingMessages .provider-name").html(e);var a=this.feedbackMessage("connect_error");if(n){var i=this.feedbackMessage(n);i&&(a=i)}t&&$(".btn-logged-in-admin").length>0&&(a+=" Error: "+t),this.feedbackContainer().removeClass("alert-info alert-success").addClass("alert alert-danger").html(a).slideDown()},this.displaySuccess=function(e,n,t){var a=t.icon,i=n.htmlTarget,r=n.targetLogin,o=n.targetRegister,d=t.name,s="";switch(e.result){case"logged_in":case"2fa_needed":s=this.feedbackMessage("2fa_needed"),this.feedbackContainer().removeClass("alert-danger alert-warning alert-success").addClass("alert alert-info").html(s),window.location=e.redirect_url?e.redirect_url:n.redirectUrl;break;case"linking_complete":var l="";l=e.remote_account.email?e.remote_account.email:e.remote_account.firstname+" "+e.remote_account.lastname,l=l.trim(),s=this.feedbackMessage("linking_complete").trim().replace(":displayName",d),l&&(s=s.replace(/\.$/," ("+l+").")),this.feedbackContainer().removeClass("alert-danger alert-warning alert-info").addClass("alert alert-success").html(a+s);break;case"login_to_link":if(i===r)s=this.feedbackMessage("login_to_link-signin-required"),this.feedbackContainer().removeClass("alert-danger alert-success alert-info").addClass("alert alert-warning").html(a+s);else{var u=jQuery("input[name=email]"),c=jQuery("input[name=firstname]"),f=jQuery("input[name=lastname]");if(""===u.val()&&u.val(e.remote_account.email),""===c.val()&&c.val(e.remote_account.firstname),""===f.val()&&f.val(e.remote_account.lastname),i===o)"object"==typeof WHMCS.client.registration&&WHMCS.client.registration.prefillPassword(),s=this.feedbackMessage("login_to_link-registration-required"),this.feedbackContainer().fadeOut("slow",function(){$(this).removeClass("alert-danger alert-success alert-info").addClass("alert alert-warning").html(a+s).fadeIn("fast")});else{"object"==typeof WHMCS.client.registration&&WHMCS.client.registration.prefillPassword();var h=this;this.feedbackContainer().each(function(e,n){var t=$(n),i=t.siblings("div .providerPreLinking").data("linkContext");t.fadeOut("slow",function(){s="checkout-new"===i?h.feedbackMessage("checkout-new"):h.feedbackMessage("login_to_link-signin-required"),t.removeClass("alert-danger alert-success alert-info").addClass("alert alert-warning").html(a+s).fadeIn("fast")})})}}break;case"other_user_exists":s=this.feedbackMessage("other_user_exists"),this.feedbackContainer().removeClass("alert-info alert-success").addClass("alert alert-danger").html(a+s).slideDown();break;case"already_linked":s=this.feedbackMessage("already_linked"),this.feedbackContainer().removeClass("alert-info alert-success").addClass("alert alert-danger").html(a+s).slideDown();break;default:s=this.feedbackMessage("default"),this.feedbackContainer().removeClass("alert-info alert-success").addClass("alert alert-danger").html(a+s).slideDown()}},this.signIn=function(e,n,t,a,i){jQuery.ajax(e).done(function(e){a(),WHMCS.authn.provider.displaySuccess(e,n,t);var i=jQuery("#tableLinkedAccounts");i.length&&WHMCS.ui.dataTable.getTableById("tableLinkedAccounts").ajax.reload()}).error(function(){i(),WHMCS.authn.provider.displayError()})},this}}),function(e){WHMCS.hasModule("client")||WHMCS.loadModule("client",e)}({registration:function(){return this.prefillPassword=function(e){if(e=e||{},"undefined"==typeof e.hideContainer){var n=jQuery("#inputSecurityQId").attr("id")?"#containerPassword":"#containerNewUserSecurity";e.hideContainer=jQuery(n),e.hideInputs=!0}else"string"==typeof e.hideContainer&&e.hideContainer.length&&(e.hideContainer=jQuery(e.hideContainer));"undefined"==typeof e.form&&(e.form={password:[{id:"inputNewPassword1"},{id:"inputNewPassword2"}]});var t=function(){for(var n=WHMCS.utils.simpleRNG(),t=0,a=e.form.password.length;t<a;t++)jQuery("#"+e.form.password[t].id).val(n).trigger("keyup")};e.hideInputs?e.hideContainer.slideUp("fast",t):t()},this}}),function(e){WHMCS.hasModule("ui")||WHMCS.loadModule("ui",e)}({confirmation:function(){var e=[];return this.register=function(n){return"undefined"==typeof n&&(n="[data-toggle=confirmation]"),e.indexOf(n)<0&&e.push(n),jQuery(n).confirmation({rootSelector:n}),e},this},dataTable:function(){return this.tables={},this.register=function(){var e=this;jQuery("table.data-driven").each(function(n,t){e.getTableById(t.id,void 0)})},this.getTableById=function(e,n){if("undefined"==typeof this.tables[e]){var t=jQuery("#"+e);"undefined"==typeof n&&(n={paging:!1,searching:!1,ordering:!1,info:!1,language:{emptyTable:t.data("lang-empty-table")?t.data("lang-empty-table"):"No linked accounts found"},ajax:{url:t.data("ajax-url")}});var a=t.DataTable(n);if(t.data("on-draw"))a.on("draw.dt",function(e,n){var a=t.data("on-draw");"function"==typeof window[a]&&window[a](e,n)});else if(t.data("on-draw-rebind-confirmation")){var i=this;a.on("draw.dt",function(e){i.rebindConfirmation(e)})}this.tables[e]=a}return this.tables[e]},this.rebindConfirmation=function(e){for(var n=this,t=e.target.id,a=WHMCS.ui.confirmation.register(),i=0,r=a.length;i<r;i++)jQuery(a[i]).on("confirmed.bs.confirmation",function(e){e.preventDefault(),jQuery.post(jQuery(e.target).data("target-url"),{token:csrfToken}).done(function(e){"success"===e.status&&n.getTableById(t,void 0).ajax.reload()})})},this}}),function(e){WHMCS.hasModule("utils")||WHMCS.loadModule("utils",e)}(function(){return this.simpleRNG=function(){for(var e="./$_-#!,^*()|",n=0,t=0;n<3;t++)n+=Math.floor(10*Math.random()/2);n=Math.floor(n);for(var a="",i=0;i<n;i++)v=(Math.random()+1).toString(24).split(".")[1],a+=Math.random()>.5?btoa(v).substr(0,4):v,Math.random()>.5&&(a+=e.substr(Math.floor(13*Math.random()),1));return a},this}),"undefined"==typeof localTrans&&(localTrans=function(e,n){return"undefined"!=typeof _localLang&&"undefined"!=typeof _localLang[e]&&_localLang[e].length>0?_localLang[e]:n});var domainLookupCallCount,furtherSuggestions;jQuery(document).ready(function(){function e(){if("left"!=jQuery("#scrollingPanelContainer").css("float"))return n.stop().css("margin-top","0"),!1;var e=n.outerHeight(),r=0;"undefined"!=typeof t&&(r=t.top);var o=jQuery(window).scrollTop()-r+i;o>a-e&&(o=a-e),jQuery(window).scrollTop()>r?n.stop().animate({marginTop:o}):n.stop().animate({marginTop:0})}jQuery("#order-standard_cart").find("input").iCheck({inheritID:!0,checkboxClass:"icheckbox_square-blue",radioClass:"iradio_square-blue",increaseArea:"20%"}),jQuery("#inputCardNumber").length&&(jQuery("#inputCardNumber").payment("formatCardNumber"),jQuery("#inputCardCVV").payment("formatCardCVC"),jQuery("#inputCardStart").payment("formatCardExpiry"),jQuery("#inputCardExpiry").payment("formatCardExpiry"));var n=jQuery("#orderSummary");if(n.length){var t=jQuery("#scrollingPanelContainer").parent(".row").offset(),a=jQuery("#scrollingPanelContainer").parent(".row").outerHeight()-35,i=15;jQuery(window).resize(function(){t=jQuery("#scrollingPanelContainer").parent(".row").offset(),a=jQuery("#scrollingPanelContainer").parent(".row").outerHeight()-35,e()}),jQuery(window).scroll(function(){e()}),e()}if(jQuery("#frmConfigureProduct").submit(function(e){e.preventDefault();var n=jQuery("#btnCompleteProductConfig"),t=jQuery(n).html();jQuery(n).find("i").removeClass("fa-arrow-circle-right").addClass("fa-spinner fa-spin"),jQuery.post("cart.php","ajax=1&a=confproduct&"+jQuery("#frmConfigureProduct").serialize(),function(e){e?(jQuery("#btnCompleteProductConfig").html(t),jQuery("#containerProductValidationErrorsList").html(e),jQuery("#containerProductValidationErrors").removeClass("hidden").show(),jQuery(window).scrollTop()>jQuery("#containerProductValidationErrors").offset().top&&jQuery("html, body").scrollTop(jQuery("#containerProductValidationErrors").offset().top-15)):window.location="cart.php?a=confdomains"})}),jQuery("#productConfigurableOptions").on("ifChecked","input",function(){recalctotals()}),jQuery("#productConfigurableOptions").on("ifUnchecked","input",function(){recalctotals()}),jQuery("#productConfigurableOptions").on("change","select",function(){recalctotals()}),jQuery(".addon-products").on("click",".panel-addon",function(e){e.preventDefault();var n=jQuery(this);n.hasClass("panel-addon-selected")?n.find('input[type="checkbox"]').iCheck("uncheck"):n.find('input[type="checkbox"]').iCheck("check")}),jQuery(".addon-products").on("ifChecked",".panel-addon input",function(e){var n=jQuery(this).parents(".panel-addon");n.addClass("panel-addon-selected"),n.find('input[type="checkbox"]').iCheck("check"),n.find(".panel-add").html('<i class="fa fa-shopping-cart"></i> '+localTrans("addedToCartRemove","Added to Cart (Remove)")),recalctotals()}),jQuery(".addon-products").on("ifUnchecked",".panel-addon input",function(e){var n=jQuery(this).parents(".panel-addon");n.removeClass("panel-addon-selected"),n.find('input[type="checkbox"]').iCheck("uncheck"),n.find(".panel-add").html('<i class="fa fa-plus"></i> '+localTrans("addToCart","Add to Cart")),recalctotals()}),jQuery("#frmConfigureProduct").on("ifChecked",".addon-selector",function(e){recalctotals()}),0==jQuery(".domain-selection-options input:checked").length){var r=jQuery(".domain-selection-options input:first");jQuery(r).iCheck("check"),jQuery(r).parents(".option").addClass("option-selected")}jQuery("#domain"+jQuery(".domain-selection-options input:checked").val()).show(),jQuery(".domain-selection-options input").on("ifChecked",function(e){jQuery(".domain-selection-options .option").removeClass("option-selected"),jQuery(this).parents(".option").addClass("option-selected"),jQuery(".domain-input-group").hide(),jQuery("#domain"+jQuery(this).val()).show()}),jQuery("#frmProductDomain").submit(function(e){e.preventDefault();var n=jQuery(this).find('button[type="submit"]'),t=jQuery("#DomainSearchResults"),a=jQuery("#spotlightTlds"),i=jQuery("#domainSuggestions"),r=jQuery("#btnDomainContinue"),o=jQuery(".domain-selection-options input:checked").val(),d=jQuery("#"+o+"sld"),s=d.val(),l="",u=jQuery("#frmProductDomainPid").val(),c="";if("incart"==o)d=jQuery("#"+o+"sld option:selected"),s=d.text();else if("subdomain"==o)c=jQuery("#"+o+"tld option:selected"),l=c.text();else{if(c=jQuery("#"+o+"tld"),l=c.val(),s&&!l)return c.tooltip("show"),c.focus(),!1;"."!=l.substr(0,1)&&(l="."+l)}if(!s)return d.tooltip("show"),d.focus(),!1;if(d.tooltip("hide"),c.length&&c.tooltip("hide"),jQuery('input[name="domainoption"]').iCheck("disable"),domainLookupCallCount=0,n.attr("disabled","disabled").addClass("disabled"),jQuery(".domain-lookup-result").addClass("hidden"),jQuery("#primaryLookupResult div").hide(),jQuery("#primaryLookupResult").find(".register-price-label").show().end().find(".transfer-price-label").addClass("hidden"),jQuery(".domain-lookup-register-loader").hide(),jQuery(".domain-lookup-transfer-loader").hide(),jQuery(".domain-lookup-other-loader").hide(),"register"==o?jQuery(".domain-lookup-register-loader").show():"transfer"==o?jQuery(".domain-lookup-transfer-loader").show():jQuery(".domain-lookup-other-loader").show(),jQuery(".domain-lookup-loader").show(),i.find("li").addClass("hidden").end().find(".clone").remove().end(),jQuery("div.panel-footer.more-suggestions").addClass("hidden").find("a").removeClass("hidden").end().find("span.no-more").addClass("hidden"),jQuery(".btn-add-to-cart").removeAttr("disabled").find("span").hide().end().find("span.to-add").show(),r.addClass("hidden").attr("disabled","disabled"),"register"!=o&&(a.hide(),jQuery(".suggested-domains").hide()),t.is(":visible")||t.hide().removeClass("hidden").fadeIn(),"register"==o){jQuery(".suggested-domains").hide().removeClass("hidden").fadeIn("fast"),a.hide().removeClass("hidden").fadeIn("fast"),jQuery("#resultDomainOption").val(o);var f=jQuery.post("cart.php",{token:csrfToken,a:"checkDomain",type:"domain",domain:s+l},"json"),h=jQuery.post("cart.php",{token:csrfToken,a:"checkDomain",type:"spotlight",domain:s+l},"json"),p=jQuery.post("cart.php",{token:csrfToken,a:"checkDomain",type:"suggestions",domain:s+l},"json");f.done(function(e){jQuery.each(e.result,function(e,n){var t=n.pricing,a=jQuery("#primaryLookupResult"),i=a.find(".domain-available"),o=a.find(".domain-price"),d=a.find(".domain-unavailable"),s=a.find(".domain-invalid"),l=a.find(".domain-contact-support"),u=jQuery("#resultDomain"),c=jQuery("#resultDomainPricingTerm");if(a.removeClass("hidden").show(),jQuery(".domain-lookup-primary-loader").hide(),n.isValidDomain)n.isAvailable&&"string"!=typeof t?(n.preferredTLDNotAvailable&&d.show().find("strong").html(n.originalUnavailableDomain),l.hide(),i.show().find("strong").html(n.domainName),o.show().find("span.price").html(t[Object.keys(t)[0]].register).end().find("button").attr("data-domain",n.idnDomainName),u.val(n.domainName),c.val(Object.keys(t)[0]).attr("name","domainsregperiod["+n.domainName+"]"),r.removeAttr("disabled")):(d.show().find("strong").html(n.domainName),l.hide(),"string"==typeof t&&"ContactUs"==t&&l.show());else{var f=s.find("span.domain-length-restrictions");f.hide(),n.minLength>0&&n.maxLength>0&&(f.find(".min-length").html(n.minLength).end().find(".max-length").html(n.maxLength).end(),f.show()),s.show()}})}).always(function(){hasProductDomainLookupEnded(3,n)}),h.done(function(e){return"object"!=typeof e||0==e.result.length||e.result.error?void jQuery(".domain-lookup-spotlight-loader").hide():void jQuery.each(e.result,function(e,n){var t=n.tldNoDots,a=n.pricing,i=jQuery("#spotlight"+t+" .domain-lookup-result");jQuery(".domain-lookup-spotlight-loader").hide(),i.find("button").addClass("hidden").end(),n.isValidDomain?n.isAvailable&&"string"!=typeof a?i.find("span.available").html(a[Object.keys(a)[0]].register).removeClass("hidden").end().find("button.btn-add-to-cart").attr("data-domain",n.idnDomainName).removeClass("hidden"):"string"==typeof a?(""==a?i.find("button.unavailable").removeClass("hidden").end():i.find("button.domain-contact-support").removeClass("hidden").end(),i.find("span.available").addClass("hidden").end()):(i.find("button.unavailable").removeClass("hidden").end(),i.find("span.available").addClass("hidden").end()):i.find("button.invalid.hidden").removeClass("hidden").end().find("span.available").addClass("hidden").end().find("button").not("button.invalid").addClass("hidden"),i.removeClass("hidden")})}).always(function(){hasProductDomainLookupEnded(3,n)}),p.done(function(e){if("object"!=typeof e||0==e.result.length||e.result.error)return void jQuery(".suggested-domains").fadeOut("fast",function(){jQuery(this).addClass("hidden")});jQuery(".suggested-domains").removeClass("hidden");var n=1;jQuery.each(e.result,function(e,t){var a=t.tld,r=t.pricing;i.find("li:first").clone(!0,!0).appendTo(i);var o=i.find("li.domain-suggestion").last();o.addClass("clone").find("span.domain").html(t.sld).end().find("span.extension").html("."+a).end(),"string"==typeof r?(o.find("button.btn-add-to-cart").remove(),""!=r?o.find("button.domain-contact-support").removeClass("hidden").end().find("span.price").hide():o.remove()):o.find("button.btn-add-to-cart").attr("data-domain",t.idnDomainName).end().find("span.price").html(r[Object.keys(r)[0]].register).end(),n<=10&&o.removeClass("hidden"),n++,t.group&&o.find("span.promo").addClass(t.group).html(t.group.toUpperCase()).removeClass("hidden").end(),furtherSuggestions=i.find("li.domain-suggestion.clone.hidden").length,furtherSuggestions>0&&jQuery("div.more-suggestions").removeClass("hidden")}),jQuery(".domain-lookup-suggestions-loader").hide(),jQuery("#domainSuggestions").removeClass("hidden")}).always(function(){hasProductDomainLookupEnded(3,n)})}else if("transfer"==o){jQuery("#resultDomainOption").val(o);var m=jQuery.post("cart.php",{token:csrfToken,a:"checkDomain",type:"transfer",domain:s+l},"json");m.done(function(e){return"object"!=typeof e||0==e.result.length?void jQuery(".domain-lookup-primary-loader").hide():void jQuery.each(e.result,function(e,n){var t=n.pricing,a=jQuery("#primaryLookupResult"),i=a.find(".transfer-eligible"),o=a.find(".domain-price"),d=a.find(".transfer-not-eligible"),s=jQuery("#resultDomain"),l=jQuery("#resultDomainPricingTerm");jQuery(".domain-lookup-primary-loader").hide(),a.removeClass("hidden").show(),n.isRegistered?(i.show(),o.show().find(".register-price-label").hide().end().find(".transfer-price-label").removeClass("hidden").show().end().find("span.price").html(t[Object.keys(t)[0]].transfer).end().find("button").attr("data-domain",n.idnDomainName),s.val(n.domainName),l.val(Object.keys(t)[0]).attr("name","domainsregperiod["+n.domainName+"]"),r.removeAttr("disabled")):d.show()})}).always(function(){hasProductDomainLookupEnded(1,n)})}else if("owndomain"==o||"subdomain"==o||"incart"==o){var y=jQuery.post("cart.php",{token:csrfToken,a:"checkDomain",type:o,pid:u,domain:s+l},"json");y.done(function(e){return"object"!=typeof e||0==e.result.length?void jQuery(".domain-lookup-subdomain-loader").hide():void jQuery.each(e.result,function(e,n){n.status===!0?window.location="cart.php?a=confproduct&i="+n.num:(jQuery(".domain-lookup-primary-loader").hide(),jQuery("#primaryLookupResult").removeClass("hidden").show().find(".domain-invalid").show())})}).always(function(){hasProductDomainLookupEnded(1,n)})}r.removeClass("hidden")}),jQuery("#btnAlreadyRegistered").click(function(){jQuery("#containerNewUserSignup").slideUp("",function(){jQuery("#containerExistingUserSignin").hide().removeClass("hidden").slideDown("",function(){jQuery("#inputCustType").val("existing"),jQuery("#btnAlreadyRegistered").fadeOut("",function(){jQuery("#btnNewUserSignup").removeClass("hidden").fadeIn()})})}),jQuery("#containerNewUserSecurity").hide(),jQuery("#stateselect").attr("required")&&jQuery("#stateselect").removeAttr("required").addClass("requiredAttributeRemoved")}),jQuery("#btnNewUserSignup").click(function(){jQuery("#containerExistingUserSignin").slideUp("",function(){jQuery("#containerNewUserSignup").hide().removeClass("hidden").slideDown("",function(){jQuery("#inputCustType").val("new"),0==jQuery("#passwdFeedback").html().length&&jQuery("#containerNewUserSecurity").show(),jQuery("#btnNewUserSignup").fadeOut("",function(){jQuery("#btnAlreadyRegistered").removeClass("hidden").fadeIn()})})}),jQuery("#stateselect").hasClass("requiredAttributeRemoved")&&jQuery("#stateselect").attr("required","required").removeClass("requiredAttributeRemoved")}),jQuery(".payment-methods").on("ifChecked",function(e){jQuery(this).hasClass("is-credit-card")?jQuery("#creditCardInputFields").is(":visible")||jQuery("#creditCardInputFields").hide().removeClass("hidden").slideDown():jQuery("#creditCardInputFields").slideUp()}),jQuery("input[name='ccinfo']").on("ifChecked",function(e){"new"==jQuery(this).val()?jQuery("#existingCardInfo").slideUp("",function(){jQuery("#newCardInfo").hide().removeClass("hidden").slideDown()}):jQuery("#newCardInfo").slideUp("",function(){jQuery("#existingCardInfo").hide().removeClass("hidden").slideDown()})}),jQuery("#inputDomainContact").on("change",function(){"addingnew"==this.value?jQuery("#domainRegistrantInputFields").hide().removeClass("hidden").slideDown():jQuery("#domainRegistrantInputFields").slideUp()}),"function"==typeof registerFormPasswordStrengthFeedback?jQuery("#inputNewPassword1").keyup(registerFormPasswordStrengthFeedback):jQuery("#inputNewPassword1").keyup(function(){passwordStrength=getPasswordStrength(jQuery(this).val()),passwordStrength>=75?(textLabel=langPasswordStrong,cssClass="success"):passwordStrength>=30?(textLabel=langPasswordModerate,cssClass="warning"):(textLabel=langPasswordWeak,cssClass="danger"),jQuery("#passwordStrengthTextLabel").html(langPasswordStrength+": "+passwordStrength+"% "+textLabel),jQuery("#passwordStrengthMeterBar").css("width",passwordStrength+"%").attr("aria-valuenow",passwordStrength),jQuery("#passwordStrengthMeterBar").removeClass("progress-bar-success progress-bar-warning progress-bar-danger").addClass("progress-bar-"+cssClass)}),jQuery("#inputDomain").on("shown.bs.tooltip",function(){setTimeout(function(e){e.tooltip("hide")},5e3,jQuery(this))}),jQuery("#frmDomainChecker").submit(function(e){e.preventDefault();var n=jQuery("#frmDomainChecker"),t=jQuery("#inputDomain"),a=jQuery("#domainSuggestions"),i=jQuery("#google-recaptcha"),r=jQuery("#inputCaptcha");if(domainLookupCallCount=0,!t.val())return t.tooltip("show"),void t.focus();if(t.tooltip("hide"),jQuery("#captchaContainer").length)return void validate_captcha(n);i.tooltip("hide"),r.tooltip("hide"),jQuery("#btnCheckAvailability").attr("disabled","disabled").addClass("disabled"),jQuery(".domain-lookup-result").addClass("hidden"),jQuery(".domain-lookup-loader").show(),a.find("li").addClass("hidden").end(),a.find(".clone").remove().end(),jQuery("div.panel-footer.more-suggestions").addClass("hidden").find("a").removeClass("hidden").end().find("span.no-more").addClass("hidden"),jQuery(".btn-add-to-cart").removeAttr("disabled").find("span").hide().end().find("span.to-add").show(),jQuery(".suggested-domains").hide().removeClass("hidden").fadeIn("fast"),jQuery("#DomainSearchResults").is(":visible")||(jQuery(".domain-pricing").hide(),jQuery("#DomainSearchResults").hide().removeClass("hidden").fadeIn());var o=jQuery.post(n.attr("action"),n.serialize()+"&type=domain","json"),d=jQuery.post(n.attr("action"),n.serialize()+"&type=spotlight","json"),s=jQuery.post(n.attr("action"),n.serialize()+"&type=suggestions","json");o.done(function(e){return"object"!=typeof e||0==e.result.length||e.result.error?void jQuery(".domain-lookup-primary-loader").hide():void jQuery.each(e.result,function(e,n){
var t=n.pricing,a=jQuery("#primaryLookupResult"),i=a.find(".domain-available"),r=a.find(".domain-price"),o=a.find(".domain-contact-support"),d=a.find(".domain-unavailable"),s=a.find(".domain-invalid");if(jQuery(".domain-lookup-primary-loader").hide(),a.find(".btn-add-to-cart").removeClass("checkout"),a.removeClass("hidden").show(),n.isValidDomain)d.hide(),o.hide(),s.hide(),n.isAvailable&&"string"!=typeof t?(n.preferredTLDNotAvailable&&d.show().find("strong").html(n.originalUnavailableDomain),i.show().find("strong").html(n.domainName),r.show().find("span.price").html(t[Object.keys(t)[0]].register).end().find("button").attr("data-domain",n.idnDomainName)):(i.hide(),r.hide(),o.hide(),d.show().find("strong").html(n.domainName),"string"==typeof t&&"ContactUs"==t&&o.show());else{i.hide(),r.hide(),d.hide(),o.hide();var l=s.find("span.domain-length-restrictions");l.hide(),n.minLength>0&&n.maxLength>0&&(l.find(".min-length").html(n.minLength).end().find(".max-length").html(n.maxLength).end(),l.show()),s.show()}})}).always(function(){hasDomainLookupEnded()}),d.done(function(e){return"object"!=typeof e||0==e.result.length||e.result.error?void jQuery(".domain-lookup-spotlight-loader").hide():void jQuery.each(e.result,function(e,n){var t=n.tldNoDots,a=n.pricing,i=jQuery("#spotlight"+t+" .domain-lookup-result");jQuery(".domain-lookup-spotlight-loader").hide(),i.find("button").addClass("hidden").end(),n.isValidDomain?n.isAvailable&&"string"!=typeof a?i.find("button.unavailable").addClass("hidden").end().find("button.invalid").addClass("hidden").end().find("span.available").html(a[Object.keys(a)[0]].register).removeClass("hidden").end().find("button").not("button.unavailable").not("button.invalid").attr("data-domain",n.idnDomainName).removeClass("hidden"):"string"==typeof a?(""==a?i.find("button.unavailable").removeClass("hidden").end():i.find("button.domain-contact-support").removeClass("hidden").end(),i.find("button.invalid").addClass("hidden").end(),i.find("span.available").addClass("hidden").end()):i.find("button.invalid").addClass("hidden").end().find("button.unavailable").removeClass("hidden").end().find("span.available").addClass("hidden").end():i.find("button.invalid.hidden").removeClass("hidden").end().find("span.available").addClass("hidden").end().find("button").not("button.invalid").addClass("hidden"),i.removeClass("hidden")})}).always(function(){hasDomainLookupEnded()}),s.done(function(e){if("object"!=typeof e||0==e.result.length||e.result.error)return void jQuery(".suggested-domains").fadeOut("fast",function(){jQuery(this).addClass("hidden")});jQuery(".suggested-domains").removeClass("hidden");var n=1;jQuery.each(e.result,function(e,t){var i=t.tld,r=t.pricing;a.find("li:first").clone(!0,!0).appendTo(a);var o=a.find("li.domain-suggestion").last();o.addClass("clone").find("span.domain").html(t.sld).end().find("span.extension").html("."+i).end(),"string"==typeof r?(o.find("button.btn-add-to-cart").remove(),""!=r?o.find("button.domain-contact-support").removeClass("hidden").end().find("span.price").hide():o.remove()):o.find("button.btn-add-to-cart").attr("data-domain",t.idnDomainName).end().find("span.price").html(r[Object.keys(r)[0]].register).end(),n<=10&&o.removeClass("hidden"),n++,t.group&&(o.find("span.promo").addClass(t.group).removeClass("hidden").end(),o.find("span.sales-group-"+t.group).removeClass("hidden").end()),furtherSuggestions=a.find("li.domain-suggestion.clone.hidden").length,furtherSuggestions>0&&jQuery("div.more-suggestions").removeClass("hidden")}),jQuery(".domain-lookup-suggestions-loader").hide(),jQuery("#domainSuggestions").removeClass("hidden")}).always(function(){hasDomainLookupEnded()})}),jQuery(".btn-add-to-cart").on("click",function(){if(jQuery(this).hasClass("checkout"))return void(window.location="cart.php?a=confdomains");var e=jQuery(this).attr("data-domain"),n=jQuery('button[data-domain="'+e+'"]'),t=jQuery(this).attr("data-whois"),a=jQuery(this).hasClass("product-domain"),i=jQuery("#btnDomainContinue"),r=jQuery("#resultDomain"),o=jQuery("#resultDomainPricingTerm");n.attr("disabled","disabled");var d=jQuery(this).parents(".spotlight-tlds").length>0||jQuery(this).parents(".suggested-domains").length>0?1:0;jQuery.post(window.location.pathname,{a:"addToCart",domain:e,token:csrfToken,whois:t,sideorder:d},"json").done(function(t){n.find("span.to-add").hide(),"added"==t.result?(n.find("span.added").show().end(),a||n.removeAttr("disabled").addClass("checkout"),r.length&&!r.val()&&(r.val(e),o.val(t.period).attr("name","domainsregperiod["+e+"]"),i.length>0&&i.is(":disabled")&&i.removeAttr("disabled")),jQuery("#cartItemCount").html(t.cartCount)):n.find("span.unavailable").show()})}),jQuery("#frmDomainTransfer").submit(function(e){e.preventDefault();var n=jQuery("#frmDomainTransfer"),t=jQuery("#btnTransferDomain"),a=jQuery("#inputTransferDomain"),i=jQuery("#inputAuthCode"),r=a.val(),o=i.val(),d=!1,s=jQuery("#google-recaptcha"),l=jQuery("#inputCaptcha");return r?(a.tooltip("hide"),jQuery("#captchaContainer").length?void validate_captcha(n):(s.tooltip("hide"),l.tooltip("hide"),t.attr("disabled","disabled").addClass("disabled").find("span").hide().removeClass("hidden").end().find(".loader").show(),void jQuery.post(n.attr("action"),n.serialize(),"json").done(function(e){if("object"!=typeof e)return t.find("span").hide().end().find("#addToCart").show().end().removeAttr("disabled").removeClass("disabled"),!1;var n=e.result;"added"==n?(window.location="cart.php?a=confdomains",d=!0):1==n.isRegistered?1!=n.epp||o||(i.tooltip("show"),i.focus()):jQuery("#transferUnavailable").html(n.unavailable).hide().removeClass("hidden").fadeIn("fast",function(){setTimeout(function(e){e.fadeOut("fast")},3e3,jQuery(this))})}).always(function(){0==d&&t.find("span").hide().end().find("#addToCart").show().end().removeAttr("disabled").removeClass("disabled")}))):(a.tooltip("show"),a.focus(),!1)}),jQuery("#btnEmptyCart").click(function(){jQuery("#modalEmptyCart").modal("show")}),jQuery("#cardType li a").click(function(e){e.preventDefault(),jQuery("#selectedCardType").html(jQuery(this).html()),jQuery("#cctype").val(jQuery("span.type",this).html())}),jQuery(document).on("click",".domain-contact-support",function(e){e.preventDefault();var n=window.open();n.opener=null,n.location="submitticket.php"}),jQuery("#frmConfigureProduct input:visible, #frmConfigureProduct select:visible").first().focus(),jQuery("#frmProductDomain input[type=text]:visible").first().focus(),jQuery("#frmDomainChecker input[type=text]:visible").first().focus(),jQuery("#frmDomainTransfer input[type=text]:visible").first().focus(),jQuery(".tld-filters a").click(function(e){e.preventDefault(),jQuery(this).hasClass("label-success")?jQuery(this).removeClass("label-success"):jQuery(this).addClass("label-success"),jQuery(".tld-row").removeClass("filtered-row"),jQuery(".tld-filters a.label-success").each(function(e){var n=jQuery(this).data("category");jQuery('.tld-row[data-category*="'+n+'"]').addClass("filtered-row")}),jQuery(".filtered-row:even").removeClass("highlighted"),jQuery(".filtered-row:odd").addClass("highlighted"),jQuery('.tld-row:not(".filtered-row")').fadeOut("",function(){0==jQuery(".filtered-row").size()?jQuery(".tld-row.no-tlds").show():jQuery(".tld-row.no-tlds").hide()}),jQuery(".tld-row.filtered-row").fadeIn()}),jQuery(".filtered-row:even").removeClass("highlighted"),jQuery(".filtered-row:odd").addClass("highlighted"),jQuery(".promo-cart .btn-add").click(function(e){var n=jQuery(this);n.attr("disabled","disabled").find("span.loading").hide().removeClass("hidden").show().end(),jQuery.post(window.location.pathname,{a:"addUpSell",product_key:n.data("product-key"),token:csrfToken},function(e){return console.log(e.modal),"undefined"!=typeof e.modal?void openModal(e.modal,"",e.modalTitle,"","",e.modalSubmit,e.modelSubmitId):void window.location.reload(!0)},"json")}),jQuery(document).on("click","#btnAddUpSell",function(e){needRefresh=!0})});