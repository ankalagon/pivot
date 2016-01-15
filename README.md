Service can recognize ``postal_code``, ``city`` and ``address`` (rest of address line) from address provided by VIES service (http://ec.europa.eu/taxation_customs/vies/?locale=en).

Example results:
# test markdown

| IsoCode  | Address line | Return data |
| ------------- | ------------- | ------------- |
| GB | C/O BMW UK GROUPTAX FR-3-UK SUMMIT ONE SUMMIT AVENUE<br>FARNBOROUGH<br>GU14 0FB | Array (<br>    <space><space>[city] => Farnborough<br>    <space><space>[code] => GU14 0FB<br>    <space><space>[address] => C/o Bmw Uk Grouptax Fr-3-uk Summit One Summit Avenue<br>)<br> |
| GB | 28-29 THE BROADWAY EALING<br>LONDON<br>W5 2NP | Array (<br>    <space><space>[city] => London<br>    <space><space>[code] => W5 2NP<br>    <space><space>[address] => 28-29 The Broadway Ealing<br>)<br> |
| GB | 28-29 THE BROADWAY<br>EALING<br>LONDON<br><br>W5 2NP | Array (<br>    <space><space>[city] => London<br>    <space><space>[code] => W5 2NP<br>    <space><space>[address] => 28-29 The Broadway Ealing<br>)<br> |
| GB | 10 THE GRANGEWAY<br>GRANGE PARK<br>LONDON<br>N21 2HA | Array (<br>    <space><space>[city] => London<br>    <space><space>[code] => N21 2HA<br>    <space><space>[address] => 10 The Grangeway Grange Park<br>)<br> |
| GB | 254 BANNERDALE ROAD<br>SHEFFIELD<br>S11 9FE | Array (<br>    <space><space>[city] => Sheffield<br>    <space><space>[code] => S11 9FE<br>    <space><space>[address] => 254 Bannerdale Road<br>)<br> |
| PT | R FIGUEIRAS N 616 MAIA<br>4475-011<br>MAIA | Array (<br>    <space><space>[city] => Maia<br>    <space><space>[code] => 4475-011<br>    <space><space>[address] => R Figueiras N 616 Maia<br>)<br> |
| LU | 40, RUE ANTOINE MEYER L-2153  LUXEMBOURG | Array (<br>    <space><space>[city] => Luxembourg<br>    <space><space>[code] => L-2153<br>    <space><space>[address] => 40, Rue Antoine Meyer<br>)<br> |
| NL |  EEKHORSTWEG 00031 A 7942KC MEPPEL  | Array (<br>    <space><space>[city] => Meppel<br><space><space>&nbsp;&nbsp;[code] => 7942KC<br>    <space><space>[address] => Eekhorstweg 00031 A<br>)<br> |
| BE | EZELSTRAAT 69 1 8000  BRUGGE | Array (<br>    <space><space>[city] => Brugge<br>    <space><space>[code] => 8000<br>    <space><space>[address] => Ezelstraat 69 1<br>)<br> |
| IT | P.ZA FERRAVILLA N. 2  20092 CINISELLO BALSAMO MI  | Array (<br>    <space><space>[city] => Cinisello Balsamo Mi<br>    <space><space>[code] => 20092<br>    <space><space>[address] => P.za Ferravilla N. 2<br>)<br> |
| BG | ул. Самуиловско шосе  №1А обл.СЛИВЕН, гр.СЛИВЕН 8800 | Array (<br>    <space><space>[city] => <br>    <space><space>[code] => 8800<br>    <space><space>[address] => ул. самуиловско шосе  №1а обл.сливен, гр.сливен<br>)<br> |
| AT | Herrengasse 44<br>7471 Rechnitz | Array (<br>    <space><space>[city] => Rechnitz<br>    <space><space>[code] => 7471<br>    <space><space>[address] => Herrengasse 44<br>)<br> |
| NO | Setesdalsveien 76<br>4617 KRISTIANSAND S | Array (<br>    <space><space>[city] => Kristiansand S<br>    <space><space>[code] => 4617<br>    <space><space>[address] => Setesdalsveien 76<br>)<br> |
| PL | KORNELA UJEJSKIEGO 12 M7<br>30-102 KRAKÓW | Array (<br>    <space><space>[city] => Kraków<br>    <space><space>[code] => 30-102<br>    <space><space>[address] => Kornela Ujejskiego 12 M7<br>)<br> |
| PL | AL. 29 LISTOPADA 155C<br>31-406 KRAKów | Array (<br>    <space><space>[city] => Kraków<br>    <space><space>[code] => 31-406<br>    <space><space>[address] => Al. 29 Listopada 155c<br>)<br> |
| PL | AL. JERZEGO WASZYNGTONA 45/51<br>04-008 WARSZAWA | Array (<br>    <space><space>[city] => Warszawa<br>    <space><space>[code] => 04-008<br>    <space><space>[address] => Al. Jerzego Waszyngtona 45/51<br>)<br> |
