<?php
// Delete blacklisted user
$locale['400'] = "Kullan&#305;c&#305;y&#305; Kara Listeden Sil";
$locale['401'] = "Kullan&#305;c&#305; Kara Listeden Silindi";
$locale['402'] = "Kara Liste Y&#246;netimine Geri D&#246;n";
$locale['403'] = "Site Y&#246;netimine Geri D&#246;n";
$locale['404'] = "Please enter Blacklist IP or Blacklist Email";
$locale['405'] = "Blacklist email address is not valid email.";
$locale['406'] = "Kara Liste";
// Add/Edit Blacklist Titles
$locale['420'] = "Kara Listeye Ekle";
$locale['421'] = "Kara Listeye Eklenmi&#351; &#220;yeyi D&#252;zenle";
// Add/Edit blacklist form
$locale['440'] = "Bu siteye giri&#351;ini engellemek istedi&#287;iniz kullan&#305;c&#305;n&#305;n IP adresini yada mail adresini yazarak kullan&#305;c&#305;y&#305; 
yasakl&#305; kullan&#305;c&#305;lar listesine ekleyebilirsiniz. &#304;sterseniz kullan&#305;c&#305; siteye geldi&#287;inde bir sebep g&#246;sterebilirsiniz.
L&#252;tfen Unutmay&#305;n: IPv6 adresleri sitemizde tam uzunluklar&#305;na d&#246;n&#252;&#351;t&#252;r&#252;lmektedirler, 
&#214;rne&#287;in, <em>ABCD:1234:5:6:7:8:9:FF</em> &#351;u &#351;ekilde g&#246;z&#252;kecektir: <em>ABCD:1234:0005:0006:0007:0008:0009:00FF</em>.
Bu i&#351;lemi yapmak i&#231;in IP adresini tam olarak &#246;rn: <em>123.123.123.123</em>, ya da <em>123.123.123 , 123.123</em> gibi bir b&#246;l&#252;m&#252;n&#252; girerek yapabilirsiniz. Kar&#305;&#351;&#305;k IP adresleri (Hem IPv6 hem IPv4 k&#305;s&#305;mlar&#305; i&#231;erenler) kara listede k&#305;smi e&#351;le&#351;me i&#231;in kontrol edilmeyeceklerdir.<br /><br />
Ayn&#305; &#351;ekilde e-posta adresi kullanarak da kullan&#305;c&#305;y&#305; yasakl&#305;lar listesine dahil edebilirsiniz.
&#246;rn: <em>isim@adres.com</em>, ya da t&#252;m domain ismini de yasaklayabilirsiniz. &#246;rn: <em>adres.com</em>.<br /><br />

% - matches any string.<br /><br />

%.%.%.%@domain.tld en az 3 nokta i&#231;eren her adresi yasaklar.<br />
%+%@domain.tld en az bir art&#305; i&#351;areti i&#231;eren her adresi yasaklar.<br />
%@domain.tld Belirtilen domaine ait t&#252;m adresleri yasaklar.<br />
%.domain.tld belirtilen domaine ait t&#252;m alt domain adreslerini yasaklar.<br />
%payday% belirlenen s&#246;zc&#252;&#287;&#252; i&#231;eren t&#252;m adresleri yasaklar &#214;rn; \"payday\" .<br />
domain.tld is an alias of %@domain.tld to make it compatible with rules defined in v7.<br />";

$locale['441'] = "Kara Listeye Eklenecek IP Adresi: <strong>ya da</strong>";
$locale['442'] = "Kara Listeye Eklenecek E-mail Adresi:";
$locale['443'] = "Kara Listeye Eklenme Sebebi";
$locale['444'] = "Kara Listeye Ekle";
// Current blacklisted users
$locale['460'] = "Kara Listedeki Kullan&#305;c&#305;lar";
$locale['461'] = "Kara Liste Bilgisi";
$locale['462'] = "Se&#231;enekler";
$locale['463'] = "D&#252;zenle";
$locale['464'] = "Sil";
$locale['465'] = "Kara Liste &#351;u anda bo&#351;.";
$locale['466'] = "Yok";
$locale['467'] = "Y&#246;netici";
$locale['468'] = "Tarih";