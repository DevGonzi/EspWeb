<?php
session_start();
require_once("templates/config.inc.php");
require_once("templates/functions.inc.php");
$user = check_user();
include("templates/header.inc.php");
?>

<link rel="stylesheet" href="css/webradio.css">

<title>WebRadio</title>

<!-- Oben Mittig -->
<div class="iloveradio"><p>I Love Radio</p><script>(function(d, s){if(!window.rel){s = d.createElement("script");s.type = "text/javascript";s.async = true;s.id = "radio-de-embedded";s.src = "//www.radio.de/inc/microsite/js/full.js";d.getElementsByTagName("head")[0].appendChild(s);window.rel = true;}}(document));</script><div class="ng-app-embedded"><div ui-view class="microsite embedded-radio-player" data-playerwidth="500px" data-playertype="web_embedded" data-playstation="iloveradio" data-apikey="df04ff67dd3339a6fc19c9b8be164d5b5245ae93"></div></div></div>

<!-- Links -->
<div class="bigfm"><p>BigFM</p><script>(function(d, s){if(!window.rel){s = d.createElement("script");s.type = "text/javascript";s.async = true;s.id = "radio-de-embedded";s.src = "//www.radio.de/inc/microsite/js/full.js";d.getElementsByTagName("head")[0].appendChild(s);window.rel = true;}}(document));</script><div class="ng-app-embedded"><div ui-view class="microsite embedded-radio-player" data-playerwidth="500px" data-playertype="web_embedded" data-playstation="bigfm" data-apikey="df04ff67dd3339a6fc19c9b8be164d5b5245ae93"></div></div></div>

<div class="rbrs"><p>Radio Bonn / Rhein Sieg</p><script>(function(d, s){if(!window.rel){s = d.createElement("script");s.type = "text/javascript";s.async = true;s.id = "radio-de-embedded";s.src = "//www.radio.de/inc/microsite/js/full.js";d.getElementsByTagName("head")[0].appendChild(s);window.rel = true;}}(document));</script><div class="ng-app-embedded"><div ui-view class="microsite embedded-radio-player" data-playerwidth="500px" data-playertype="web_embedded" data-playstation="radiobrsieg" data-apikey="df04ff67dd3339a6fc19c9b8be164d5b5245ae93"></div></div></div>

<div class="bonnfm"><p>BonnFM</p><script>(function(d, s){if(!window.rel){s = d.createElement("script");s.type = "text/javascript";s.async = true;s.id = "radio-de-embedded";s.src = "//www.radio.de/inc/microsite/js/full.js";d.getElementsByTagName("head")[0].appendChild(s);window.rel = true;}}(document));</script><div class="ng-app-embedded"><div ui-view class="microsite embedded-radio-player" data-playerwidth="500px" data-playertype="web_embedded" data-playstation="bonnfm" data-apikey="df04ff67dd3339a6fc19c9b8be164d5b5245ae93"></div></div></div>


<!-- Rechts -->
<div class="live"><p>1Live</p><script>(function(d, s){if(!window.rel){s = d.createElement("script");s.type = "text/javascript";s.async = true;s.id = "radio-de-embedded";s.src = "//www.radio.de/inc/microsite/js/full.js";d.getElementsByTagName("head")[0].appendChild(s);window.rel = true;}}(document));</script><div class="ng-app-embedded"><div ui-view class="microsite embedded-radio-player" data-playerwidth="500px" data-playertype="web_embedded" data-playstation="1live" data-apikey="df04ff67dd3339a6fc19c9b8be164d5b5245ae93"></div></div></div>

<div class="swr3"><p>SWR3</p><script>(function(d, s){if(!window.rel){s = d.createElement("script");s.type = "text/javascript";s.async = true;s.id = "radio-de-embedded";s.src = "//www.radio.de/inc/microsite/js/full.js";d.getElementsByTagName("head")[0].appendChild(s);window.rel = true;}}(document));</script><div class="ng-app-embedded"><div ui-view class="microsite embedded-radio-player" data-playerwidth="500px" data-playertype="web_embedded" data-playstation="swr3" data-apikey="df04ff67dd3339a6fc19c9b8be164d5b5245ae93"></div></div></div>

<div class="radiobob"><p>RadioBOB!</p><script>(function(d, s){if(!window.rel){s = d.createElement("script");s.type = "text/javascript";s.async = true;s.id = "radio-de-embedded";s.src = "//www.radio.de/inc/microsite/js/full.js";d.getElementsByTagName("head")[0].appendChild(s);window.rel = true;}}(document));</script><div class="ng-app-embedded"><div ui-view class="microsite embedded-radio-player" data-playerwidth="500px" data-playertype="web_embedded" data-playstation="radiobob" data-apikey="df04ff67dd3339a6fc19c9b8be164d5b5245ae93"></div></div></div>



<?php include("templates/footer.inc.php"); ?>