<?php
require 'simple_html_dom.php';

$html = file_get_html('https://www.sunnyportal.com/Templates/Pxxxx');
$title = $html->find('title', 0);
$image1 = $html->find('div[class=widgetBox]', 1);
$image2 = $html->find('div[class=widgetBox]', 2);

echo $title->plaintext."<br>\n";
echo $image1->plaintext."<br>\n";
echo $image2->plaintext."<br>\n";


?>
