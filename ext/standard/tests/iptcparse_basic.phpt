--TEST--
iptcparse() function - basic functionality test
--FILE--
<?php
// This is the base64 encoded info from running the reference image found on the IPTC
// website: https://www.iptc.org/std-dev/photometadata/examples/google-licensable/example-page1.html
// through `getimagesize($imageName, $info)` and running `var_dump(base64_encode($info))`
// as the info string has a lot of non-printable characters in it.
$binaryBlock = base64_decode("UGhvdG9zaG9wIDMuMAA4QklNBAQAAAAAATIcAigAMFRoaXMgcGhvdG8gaXMgZm9yIG1ldGFkYXRhIHRlc3RpbmcgcHVycG9zZXMgb25seRwCNwAIMjAyMDAxMDgcAjwACzEzMzAwMSswMTAwHAJQAA1KYW5lIFBob3Rvc3R5HAJpABhUaGUgcmFpbHdheSBhbmQgdGhlIGNhcnMcAm4AEklQVEMvSmFuZSBQaG90b3N0eRwCdAAyqSBDb3B5cmlnaHQgMjAyMCBJUFRDIChUZXN0IEltYWdlcykgLSB3d3cuaXB0Yy5vcmccAngAV1RoZSByYWlsd2F5cyBvZiB0aGUgUzQ1IGxpbmUgYXJlIHJ1bm5pbmcgdmVyeSBjbG9zZSB0byBhIHNtYWxsIHN0cmVldCB3aXRoIHBhcmtpbmcgY2FycxwCAAACAAQ=");
$iptcTags = iptcparse($binaryBlock);
var_dump($iptcTags);
?>
--EXPECTF--
array(9) {
  ["2#040"]=>
  array(1) {
    [0]=>
    string(48) "This photo is for metadata testing purposes only"
  }
  ["2#055"]=>
  array(1) {
    [0]=>
    string(8) "20200108"
  }
  ["2#060"]=>
  array(1) {
    [0]=>
    string(11) "133001+0100"
  }
  ["2#080"]=>
  array(1) {
    [0]=>
    string(13) "Jane Photosty"
  }
  ["2#105"]=>
  array(1) {
    [0]=>
    string(24) "The railway and the cars"
  }
  ["2#110"]=>
  array(1) {
    [0]=>
    string(18) "IPTC/Jane Photosty"
  }
  ["2#116"]=>
  array(1) {
    [0]=>
    string(50) "%s Copyright 2020 IPTC (Test Images) - www.iptc.org"
  }
  ["2#120"]=>
  array(1) {
    [0]=>
    string(87) "The railways of the S45 line are running very close to a small street with parking cars"
  }
  ["2#000"]=>
  array(1) {
    [0]=>
    string(2) " "
  }
}
