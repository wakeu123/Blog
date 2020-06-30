<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="3HjynndSPY4ZnXQdIrivKCULwsIbEwzJQMJwc=">
        <meta name="robots" content="follow,index">

        <title>{{ config('app.name') }}</title>

        <meta name="author" content="Wakeu Georges Favier">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">


        <!-- Styles -->
       @yield('css')
       <meta property="og:url" content="{{ request()->url() }}"/>
       @yield('og')
       <script type="text/javascript">
            var gdprAppliesGlobally=!1;
            function addFrame(){
                if(!window.frames.__cmpLocator)
                if(document.body){
                var a=document.body,e=document.createElement("iframe");
                e.style="display:none",e.name="__cmpLocator",a.appendChild(e)}else setTimeout(addFrame,5)
                }function stubCMP(a,e,n){
                    if(__cmp.a=__cmp.a||[],!a)return __cmp.a;"ping"===a?n({gdprAppliesGlobally:gdprAppliesGlobally,cmpLoaded:!1},!0):__cmp.a.push([a,e,n])}function cmpMsgHandler(d){var p="string"==typeof d.data,a=p?-1!==d.data.indexOf("__cmpCall")?JSON.parse(d.data):{}:d.data;if(a.__cmpCall){var c=a.__cmpCall;window.__cmp(c.command,c.parameter,function(a,e){var n={__cmpReturn:{returnValue:a,success:e,callId:c.callId}};d.source.postMessage(p?JSON.stringify(n):n,"*")})}}addFrame(),"function"!=typeof __cmp&&(window.__cmp=stubCMP,__cmp.msgHandler=cmpMsgHandler,window.addEventListener?window.addEventListener("message",cmpMsgHandler,!1):window.attachEvent("onmessage",cmpMsgHandler));
        </script>

  <script>(function(d){
      d.className=d.className.replace(/no-js/,'');
    })
    (document.documentElement);
  </script>

    <script type="text/javascript">
        var _acListener={version:"1.2.0",
        allowedKeys:["appConsent_uuid","appConsent_acn","appConsent_status"],
        isSupported:function(){
            try{
                return"localStorage"
                in window&&null!==window.localStorage}
            catch(a){
                return!1}},isValidData:function(a){var e=!1;return a&&a.version&&a.expire&&a.data&&a.version.trim()&&a.expire.trim()&&(e=!0),e},isOutdatedData:function(a){var e=new Date(a),t=new Date;return!(new Date(e)>new Date(t))},get:function(a){var e=localStorage.getItem(a);if(!(e&&e.length&&_acListener.allowedKeys.includes(a)))return null;try{var t=JSON.parse(e);return _acListener.isValidData(t)?_acListener.isOutdatedData(t.expire)?(_acListener.delete(a),null):t:null}catch(a){return null}},set:function(a,e){if(_acListener.allowedKeys.includes(a)){var t={version:e.version,expire:e.expire,data:e.data};if("appConsent_acn"===a){var n=_acListener.get("appConsent_acn"),r=r||window.acLib;if(n&&n.data&&n.data[r.datas.versionID]&&n.data[r.datas.versionID].length)t.data[r.datas.versionID][r.datas.buildID]=e.data;else if(t.data=n&&n.data?n.data:{},t.data[r.datas.versionID]=t.data[r.datas.versionID]||{},r.datas.hasOwnProperty("usingPubvendors")&&r.datas.usingPubvendors&&r.datas.hasOwnProperty("pubVendorsHash")){var s=r.datas.buildID+"_"+r.datas.pubVendorsHash;t.data[r.datas.versionID][s]=e.data}else t.data[r.datas.versionID][r.datas.buildID]=e.data}return localStorage.setItem(a,JSON.stringify(t)),!0}return!1},delete:function(a){_acListener.allowedKeys.includes(a)&&localStorage.removeItem(a)},clear:function(){_acListener.allowedKeys.forEach(function(a){_acListener.delete(a)})}};window._acListener=_acListener;
    </script>
    <script type="text/javascript">
                    apntag.anq.push(function() {
                    //apntag.debug = 1;
                    apntag.setPageOpts({
                        member: 3273,
                        disablePsa: true,
                        consentManagement: {
                        disabled: false,
                        timeout: 10000
                        }
                    });
                    });
    </script>
    <!-- Matomo -->
    <script type="text/javascript">
      var _paq = window._paq || [];
      /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
      _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
      _paq.push(["setCookieDomain", "*.localhost"]);
      _paq.push(["setDomains", ["*.localhost"]]);
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="//localhost/matomo/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '2']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <noscript><p><img src="//localhost/matomo/matomo.php?idsite=2&amp;rec=1" style="border:0;" alt="" /></p></noscript>
    <!-- End Matomo Code -->
    </head>
    <body class="responsive-layout   public-view custom-header">

    @yield('content')

    @include('front.partials._footers._footer')

    </body>
</html>
