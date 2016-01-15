Service can recognize ``postal_code``, ``city`` and ``address`` (rest of address line) from address provided by VIES service (http://ec.europa.eu/taxation_customs/vies/?locale=en).

Example results:
# test markdown

| IsoCode  | Address line | Return data |
| ------------- | ------------- | ------------- |
| GB | C/O BMW UK GROUPTAX FR-3-UK SUMMIT ONE SUMMIT AVENUE<br>FARNBOROUGH<br>GU14 0FB | Array (<br>    [city] => Farnborough<br>    [code] => GU14 0FB<br>    [address] => C/o Bmw Uk Grouptax Fr-3-uk Summit One Summit Avenue<br>)<br> |
| GB | 28-29 THE BROADWAY EALING<br>LONDON<br>W5 2NP | Array (<br>    [city] => London<br>    [code] => W5 2NP<br>    [address] => 28-29 The Broadway Ealing<br>)<br> |
| GB | 28-29 THE BROADWAY<br>EALING<br>LONDON<br><br>W5 2NP | Array (<br>    [city] => London<br>    [code] => W5 2NP<br>    [address] => 28-29 The Broadway Ealing<br>)<br> |
| GB | 10 THE GRANGEWAY<br>GRANGE PARK<br>LONDON<br>N21 2HA | Array (<br>    [city] => London<br>    [code] => N21 2HA<br>    [address] => 10 The Grangeway Grange Park<br>)<br> |
| GB | 254 BANNERDALE ROAD<br>SHEFFIELD<br>S11 9FE | Array (<br>    [city] => Sheffield<br>    [code] => S11 9FE<br>    [address] => 254 Bannerdale Road<br>)<br> |
| PT | R FIGUEIRAS N 616 MAIA<br>4475-011<br>MAIA | Array (<br>    [city] => Maia<br>    [code] => 4475-011<br>    [address] => R Figueiras N 616 Maia<br>)<br> |
| LU | 40, RUE ANTOINE MEYER L-2153  LUXEMBOURG | Array (<br>    [city] => Luxembourg<br>    [code] => L-2153<br>    [address] => 40, Rue Antoine Meyer<br>)<br> |
| NL |  EEKHORSTWEG 00031 A 7942KC MEPPEL  | Array (<br>    [city] => Meppel<br>    [code] => 7942KC<br>    [address] => Eekhorstweg 00031 A<br>)<br> |
| BE | EZELSTRAAT 69 1 8000  BRUGGE | Array (<br>    [city] => Brugge<br>    [code] => 8000<br>    [address] => Ezelstraat 69 1<br>)<br> |
| IT | P.ZA FERRAVILLA N. 2  20092 CINISELLO BALSAMO MI  | Array (<br>    [city] => Cinisello Balsamo Mi<br>    [code] => 20092<br>    [address] => P.za Ferravilla N. 2<br>)<br> |
| BG | ул. Самуиловско шосе  №1А обл.СЛИВЕН, гр.СЛИВЕН 8800 | Array (<br>    [city] => <br>    [code] => 8800<br>    [address] => ул. самуиловско шосе  №1а обл.сливен, гр.сливен<br>)<br> |
| AT | Herrengasse 44<br>7471 Rechnitz | Array (<br>    [city] => Rechnitz<br>    [code] => 7471<br>    [address] => Herrengasse 44<br>)<br> |
| NO | Setesdalsveien 76<br>4617 KRISTIANSAND S | Array (<br>    [city] => Kristiansand S<br>    [code] => 4617<br>    [address] => Setesdalsveien 76<br>)<br> |
| PL | KORNELA UJEJSKIEGO 12 M7<br>30-102 KRAKÓW | Array (<br>    [city] => Kraków<br>    [code] => 30-102<br>    [address] => Kornela Ujejskiego 12 M7<br>)<br> |
| PL | AL. 29 LISTOPADA 155C<br>31-406 KRAKów | Array (<br>    [city] => Kraków<br>    [code] => 31-406<br>    [address] => Al. 29 Listopada 155c<br>)<br> |
| PL | AL. JERZEGO WASZYNGTONA 45/51<br>04-008 WARSZAWA | Array (<br>    [city] => Warszawa<br>    [code] => 04-008<br>    [address] => Al. Jerzego Waszyngtona 45/51<br>)<br> |
