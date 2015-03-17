# terbilang

edit composer.json
require "yogirzlsinatrya/terbilang": "dev-master"


tambahkan providers pada app/config/app.php

'Yogirzlsinatrya\Terbilang\TerbilangServiceProvider',



Method
Terbilang::rupiah('10002323');

  output -> Sepuluh Juta Dua Ribu Tiga Ratus Dua Puluh Tiga
  
  
Terbilang::format('10002323');

  output -> Rp. 10.002.323,-
