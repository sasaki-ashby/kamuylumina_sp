<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TMJB28');</script>
<!-- End Google Tag Manager -->
<?php
if ( $_SERVER[ "SERVER_NAME" ] === 'aaa.armg.jp' ) {
	if ( $_SERVER[ 'REMOTE_ADDR' ] == "183.77.251.15" ) {
?>
<!-- www.armg.jp に対する OneTrust Cookie 同意通知の始点 -->

<script src="https://cdn-au.onetrust.com/scripttemplates/otSDKStub.js"  type="text/javascript" charset="UTF-8" data-domain-script="a9fc2c30-4494-48cc-9eb3-e57bf83890bc" ></script>
<script type="text/javascript">
function OptanonWrapper() { }
</script>
<!-- www.armg.jp に対する OneTrust Cookie 同意通知の終点 -->
<?php
}
}
?>
<?php
if ( $_SERVER[ "SERVER_NAME" ] === 'test.armg.jp' ) {
?>
<?php
}
?>
<?php
if ( $_SERVER[ "SERVER_NAME" ] === 'dev.armg.jp' ) {
?>
<!-- dev.armg.jp に対する OneTrust Cookie 同意通知の始点 -->
<script type="text/javascript" src="https://cdn-au.onetrust.com/consent/cee33fdf-baa2-406d-9a9d-4fcacedbc7dd/OtAutoBlock.js" ></script>
<script src="https://cdn-au.onetrust.com/scripttemplates/otSDKStub.js"  type="text/javascript" charset="UTF-8" data-domain-script="cee33fdf-baa2-406d-9a9d-4fcacedbc7dd" ></script>
<script type="text/javascript">
function OptanonWrapper() { }
</script>
<!-- dev.armg.jp に対する OneTrust Cookie 同意通知の終点 -->
<?php
}
?>
<!-- シャノン -->
<script src="/assets/common/js/ss_tracking.js"></script>
<!-- シャノン -->

<?php if(get_URL_pass(2) == "seminarinfo" ){ ?>
<!-- ▼リマーケティング タグの Facebookコード▼-->
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '983494741720718'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript>
<img height="1" width="1" style="display:none" 	src="https://www.facebook.com/tr?id=983494741720718&ev=PageView&noscript=1"	/>
</noscript>
<!-- DO NOT MODIFY --> 
<!-- End Facebook Pixel Code --> 
<!-- ▲リマーケティング タグの Facebookコード▲ -->
<?php } ?>
