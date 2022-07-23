<?php
$current = dirname(__FILE__);

$result_xml = $current . '/../src/result.xml';

if (! file_exists($result_xml)) {
  echo "$result_xml は存在していません." . "\n";
  exit(1);
}

$xsl = new DOMDocument();
$xsl->load($current . "/phpunit.xslt");
$xml = new DOMDocument();
$xml->load($result_xml);

$proc = new XsltProcessor();
$proc->importStylesheet($xsl);
$result_html = $proc->transformToXML($xml);
file_put_contents($current . "/../report/index.html", $result_html);