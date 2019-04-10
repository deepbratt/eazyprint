<?php
	include("lib/encdec_paytm.php");
    $paytmParams = $_POST;
    $merchantKey="&XXl@_4MyCOx7F!l";
    $paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : "";
    $isValidChecksum = verifychecksum_e($paytmParams, $merchantKey, $paytmChecksum);
    if($isValidChecksum == "TRUE") {
        echo "<b>Checksum Matched</b>";
    } else {
        echo "<b>Checksum MisMatch</b>";
    }
?>