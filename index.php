<?php
 
include('Mobile_Detect.php');
$detect = new Mobile_Detect();
 
if ( $detect->isAndroidtablet() || $detect->isIpad() || $detect->isBlackberrytablet() ) {
    // mostar versión para tablets
    header("Location: http://*.html");
} elseif( $detect->isAndroid() ) {
    // versión Android
    header("Location: http://*.html");
} elseif ( $detect->isIphone() ) {
    // versión iPhone
    header("Location: http://*.html");
} elseif ( $detect->isMobile() ) {
    // versión para otros móviles
    header("Location: http://*.html");
} else{
    // versión "normal"
    header("Location: http://*.html");
}
 
?>
