<?php
 
include('Mobile_Detect.php');
$detect = new Mobile_Detect();
 
if ( $detect->isAndroidtablet() || $detect->isIpad() || $detect->isBlackberrytablet() ) {
    // mostar versi�n para tablets
    header("Location: http://*.html");
} elseif( $detect->isAndroid() ) {
    // versi�n Android
    header("Location: http://*.html");
} elseif ( $detect->isIphone() ) {
    // versi�n iPhone
    header("Location: http://*.html");
} elseif ( $detect->isMobile() ) {
    // versi�n para otros m�viles
    header("Location: http://*.html");
} else{
    // versi�n "normal"
    header("Location: http://*.html");
}
 
?>
