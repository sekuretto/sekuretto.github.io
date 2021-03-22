# Harjoitustyö  
## Web-portfolion päivitys

Alkuperäinen portfolioni (https://sekuretto.github.io/) kaipasi päivitystä, joten otin sen harjoitustyöni aiheeksi. Olen toteuttanut aiemman portfolio-sivun myös Bootstrapilla, mutta käyttäen valmista, ilmaista Bootstrap portfolio teemaa [Stylish Portfolio](https://startbootstrap.com/theme/stylish-portfolio), jonka rakennetta olin vain muokannut ja lisännyt sivulle oman sisältöni. Halusin tässä harjoitustyössä korvata tämän vanhan portfolion, ja oman oppimisen sekä osaamisen näytön kannalta luoda sivupohjan Bootstrapilla ja muilla webtekniikoilla nyt alusta loppuun ihan itse. Sivun sisällön ja kokonaisrakenteen pidin kuitenkin pääosin samana kuin aiemmassa portfoliossa. Olen tähän asti pitänyt käyttämäni teeman sivurakenteesta, joten halusin mukailla ja matkia sitä myös nyt sivua uusiessani. Mutta nyt harjoitustyön yhteydessä aioin ja pystyin pohtimaan paremmin sivuston eri osien rakennetta, visuaalisuutta ja toimivuutta; erityisesti tiettyjen sivu-osioiden ulkonäköä ja toimivuutta siinä tarkoituksessa, että käytän sivua työnhaussa portfoliona ja mainontana omista taidoistani. Halusin työssä harjoitella myös erityisesti Sassin käyttöä.  

![Screenshot alkuperäisestä portfoliosta](original_mobile.png)  

Alkuperäisen portfolioni lähdekoodi on nähtävissä [Githubin repositoriossani](https://github.com/sekuretto/sekuretto.github.io) kansiossa old_portfolio.  



## Resursointi (ajankäyttö)

Websivun koko rakenteen suunnitteluun ja sisältöön minun ei juuri tarvinnut käyttää aikaa, koska tosiaan hyödynsin pohjana jo aiempaa portfolio-sivuani. Käytin kuitenkin Figmaa, sekä Web-visualisointi -kurssin WV-H7 ja WV-H10-tehtäviä hyödykseni pohtiessani mitä muutoksia nyt tekisin sivun rakenteeseen tai ulkonäköön. Siksi minulla oli työtä aloittaessa jo aika selkeä kuva sivun rakenteesta sekä ulkonäöllisesti että HTML:n semanttisen rakenteen kannalta, joten aikaa ei kulunut työn aikana niin paljon erinnäiseen sivurakenteiden asettelujen testailuun tai ulkonäkövalintojen mietintään kuin olisi voinut kulua, jos olisin lähtenyt liikkeelle aivan tyhjästä ja ilman aiempaa sivuversiota. Lisäksi työtäni siivitti se, että halusin saada sivun julkaistavaan kuntoon mahdollisimman nopeasti, jotta voisin käyttää sitä työnhaun apuna ja taitojen näytteenä mahdollisimman nopeasti vanhan sivuversion tilalla.    

Kokonaisuudessaan harjoitustyön tekoon kului noin kuukausi, kun tein sitä muun koulutyön ja töidenhaun ohessa. Välillä omistin harjoitustyön teolle kokonaisen työpäivän kerrallaan ja vielä illallakin innostuttuani koodaamaan tai kirjoittamaan sisältöä. Välillä taas tein työtä muutaman tunnin kerrallaan eri päivinä.

Tarkemmin eriteltynä harjoitustyön rakenteluun kului vähän yli viikko, jos mittaan työskentelyäni karkeasti työpäivinä. Sivun perusrakenteen koodaamiseen Bootstrapin elementtien avulla ja vanhaa portfoliota mukaillen meni yhteensä noin neljä päivää. Pääosa tästä eli noin pari päivää meni pelkästään sivun sisällön tuotantoon ja muokkaamiseen ja media queryjen viilaamiseen. Samalla kaiken koodailun rinnalla tein alusta asti myös työn dokumentointia kirjoitellen muistiinpanoja työn eri vaiheista ja etenemisestä. 

Merkittävin kehitystyön vaihe oli sivujeni Skills-osio, jonka suunnitteluun ja rakenteluun kului kaksi päivää, mukaanluettuna sisällöntuotanto. Aloitin työn ensin tekemällä sivun tyylimäärittelyt pelkästään Bootstrapin omilla tyyleillä, joita muokkailin tarpeellisissa kohdissa omalla CSS:llä. Kun sivun rakenne ja sisältö alkoi olla kasassa, otin tässä vaiheessa käyttöön myös Sassin harjoitellakseni sen käyttöä. Yksi päivä kului kokonaisuudessaan siihen, kun muunsin kaiken siihenastisen sivulla käyttämäni oman CSS:ni Sassiksi, josta sitten käänsin sivulle uuden tyylitiedoston. Tässä vaiheessa työ alkoi olla pääpiirteissään ja sisällöltään jo valmis, ja julkaisin sivun Githubin pagesissa. Harjoitustyönä jatkoin silti sivun ja Sassin viilailua vielä suunnilleen kaksi päivää, pohtien ja testaillen Sassilla vielä sivun asetteluja ja korjaillen pikkuvirheitä. Toinen päivistä kului vielä pelkkään media queryjen lisäilyyn ja villaamiseen, jotta sain sisällön ja varsinkin kuvat asettumaan hyvin myös pienillä puhelimennäytöillä.   

Viimeisenä kulutin yhden päivän kirjoittaen kuntoon ja valmiiksi harjoitustyön dokumentaatiota. Kun siis lasken yhteen nämä karkeat työpäivät, kului harjoitustyön tekoon suunnilleen 10 päivää.




## Teknologiavalinnat perusteluineen

### Bootstrap
Käytin harjoitustyössä Bootstrapin uusinta versiota (v5.0.0-beta2). Uusimman version käyttäminen tarkoitti totta kai, että minulla oli käytettävissäni uusin Bootstrapin dokumentaatio sivujen rakentamisen apuna, ja sivut pysyvät myös pitempään yhteensopivina ja vakaina.  

Otin siis Bootstrapin elementteineen työhöni mukaan jo alusta asti, ja rakensin sivujen perusrakenteen sillä. Omalla CSS:llä ja Sassilla lähdin sitten muokkaamaan Bootstrapin elementtejä niiltä osin kuin tarvetta ilmeni, ja lisäsin myös omaa toiminnallisuutta elementteihin. Lisäksi hyödynsin Bootstrapin omia tyylejä ja classeja omien sivuelementtieni tyylien pohjana, millä tavoin sain vähennettyä kirjoitettavan CSS:n määrää. Mikä osaltaan taas vähensi päällekkäisten tyylimääritysten määrää ja selaimen turhaa tyylien ylikirjoittamista.  

Sivuille sijoitetuissa ikoneissa (kuten Github/LinkedIn) käytin Font Awesome -ikonikirjastoa. Bootstrapissa on toki olemassa omakin ikonikirjasto, mutta olen käyttänyt Font Awesomea usein jo aikaisemminkin, ja se on mielestäni ilmaisversionakin vielä laajempi ja huomattavasti monipuolisempi kuin muut olemassaolevat ikonikirjastot.  


### Flexbox/Grid  

Hyödynsin Flexboxia ja Gridiä tarpeen mukaan.

Flexboxia on hyödynnetty Skills-osion card-elementtien otsikoiden ja tähtien asettelussa, sekä social-link ikonien asettelussa, jotta ne on saatu aseteltua samalla riville siististi.

Gridiä hyödynsin sekä Skills- että Projects-osioiden korttien asettelussa, jotta niiden koko ja asemointi skaalautuu hyvin eri näyttökoossa.


### Selaintuki & skaalautuvuus

Bootstrap v5 ei tue Internet Explorer-selainta, mutta tukee IE:n korvaavaa Edgeä. Koska IE on tosiaan vähitellen poistumassa historiaan, eikä sen käyttöä enää edes suositella, totesin tämän harjoitustyön kannaltakin että selaintuki IE:lle tuskin enää on tarpeellinen.  

[Bootstrap v5.0](https://getbootstrap.com/docs/5.0/getting-started/browsers-devices/) tukee mobiilissa Androidin osalta Chromea, Firefoxia ja Android-selainta/WebViewtä. Desktopissa tukee Windowsin osalta Chromea, Firefoxia, Microsoft Edgeä ja Operaa. Koin että jos huolehdin skaalautuvuudesta ja selaintuesta ainakin näille selaimille ja alustoille, erityisesti Chromelle, Firefoxille ja Edgelle sekä mobile-versiona Androidille, se olisi riittävä selaintuen laajuus.  

Tarkoitukseni oli alunperin lähteä tekemään sivuja mobile first-periaatteella siten, että sivut skaalautuvat ja CSS on suunniteltu ensisijaisesti mobiililaitteen ruuduille. Ja olisin käyttänyt media queryjä CSS:ssä skaalaamaan sivut sitten isommille näytöille. Käytännössä totesin kuitenkin, että oli järkevämpi tehdä skaalautuvuus toisinpäin, eli suunnittelin ja toteutin sivut ensin desktop-koossa, koska todennäköisempää ehkä kuitenkin on että portfolio-sivuja katsotaan työnantajien ja rekrytoijien toimesta ensisijaisesti kunnon tietokoneen näytöiltä. Ja koska sivuillani on yllättävänkin paljon tekstisisältöä, se myös asemoituu siistimmin isolla näytöllä. Vasta desktop-tyylien oltua kunnossa lähdin skaalaamaan sivun sisältöä ja tyylejä pienemmille näytöille. Erityisesti otin skaalautuvuudessa huomioon gridit, ja sen että niiden sisältö ei alkanut näyttää ruudussa liian ahtaalta ja kapealta. Loin media breakpointteja myös reilusti enemmän kuin vain yleisimmät breakpointit, sillä halusin erityisesti sisällön leveyden ja yhden kuvista (About-osion omakuva) skaalautuvan ja asemoituvan nätisti minkäkokoisella näytöllä tahansa. Chromen Developer Tools oli siis skaalautumista säätäessä erityisen kovassa käytössä.  


### Git (pages) / Github  

Sivut on harjoitustyönä toteutettu JAMK Gitlabiin, josta niitä voi Pagesin avulla käyttää suoraan verkkosivuna. Sivujen toteutukseen käytin Git-versionhallintaa suoraan konsolista ja koodin sekä dokumentaation kirjoittamiseen käytin Visual Studio Codea.  

Sivut on julkaistu myös [Githubiin](https://github.com/sekuretto/sekuretto.github.io) github-pagesin päälle entisen version tilalle.  


### SASS  

Päätin pyrkiä käyttämään Sassia harjoitustyössä harjoitellakseni lisää sen käyttöä, ja koska jo Sassia harjoitellessa pidin sen modulaarisesta rakenteesta. Käytin Sassia asentamalla koneelle Node.js:n, ja Visual Studio Codella npm:n, jolloin saatoin asentaa ja käyttää Sassia suoraan Visual Studio Coden konsolista. Tämä oli käytettävyydeltäänkin ehdottomasti paras ja vakain tapa käyttää Sassia, koska olin Web-visualisoinnin H8-tehtävässä kokeillut myös Visual Studio Coden -lisäosaa Live Sass Compiler, joka ajoi sekin kyllä asiansa mutta oli 

- CSS animointi
- visuaalisuus (kuvat, animaatio, typografia, Google Material Design)
- hyvä skaalautuvuus ja selaintuki (mobile first!)
- omaa SVG-grafiikkaa  
- visuaalisuutta ja käyttöliittymäsuunnittelua mietitty  
- optimointi:  https://developers.google.com/speed/pagespeed/  
- raportoinnissa opiskelija osaa vertailla ja perustella valintojansa


### Visuaalisuus ja siihen liittyvät valinnat perusteluineen  

Erityisesti vanhan portfolioni Skills-, ja Portfolio-osiot kaipasivat mielestäni muutosta. Halusin lisätä Skills-osioon kullekin teknologia-osaamiseni osa-alueelle jonkinlaisen näkyvän mittarin taitoni vahvuudesta, jotta käyttäessäni sivujani työnhaussa ja mahdollinen työnantaja vierailee sivuillani hän saisi jo nopealla vilkaisulla kuvan taidoistani. Visuaalisesti selkein vaihtoehto tällaiselle mittarille oli mielestäni jonkinlainen 1-5 arvosanan skaala, esim. 1-5 tähteä riippuen taidon määrästä. Vaihtoehtona mietin myös progress-barien käyttöä tällaisena mittarina.  

https://www.w3schools.com/howto/howto_css_hero_image.asp  

Visuaalisessa mielessä huolehdin paljon siitä, että sivun eri osioiden ja elementtien ympärillä oli sopivasti tilaa. varsinkin sivun sivuilla. Näin siksi, että elementeillä on ns. "tilaa hengittää" ja sivu sisältöineen ei näytä ahtaalta ja täyteen pakatulta. 

Aloitus 18.2.2021 ->  lopetus 22.3.2021

Sivun perusrakenteen koodaamiseen Bootstrapin elementtien avulla ja vanhaa portfoliota mukaillen meni noin kolmisen päivää. Pari päivää kului melkein aamusta iltaan sivun sisällön tuotantoon ja muokkaamiseen, sekä tyylien ja erityisesti media queryjen viilaamiseen. Eniten aikaa kului Skills-osion muokkaamiseen, koska halusin tehdä sen eri tavalla kuin vanhassa versiossa. Vanhassa portfoliossa olin kirjaimellisesti vain listannut nimeltä merkittävämpiä IT-alan taitojani ja työkaluja, joita osaan käyttää. Nyt halusin kuitenkin tehdä osiosta huomattavasti visuaalisemman. Koska käytän sivua työnhaussa, halusin saada myös arvion osaamistasostani näkyväksi, jotta mahdollinen sivuillani käyvä työnantaja näkisi jo jollain tapaa nopeasti ei vain sen mitä osaan vaan myös kuinka hyvin mahdollisesti jotain osaan. Eli pohdin suunnitellessa, että lisään Skills-osioon kunkin taidon kohdalle jonkinlaisen 1-5 pisteen skaalan tai progress-mittarin tapaisen näyttämään taitotasoa.


Skills-osio:
Päädyin lopulta käyttämään tässä Bootstrapin card-elementtejä. Kukin kortti on siis nimetty tietyn taidon/ohjelmointikielen/työkalun mukaan, ja kyseisessä kortissa kerron lyhyesti osaamisestani ja mitä mahdollisesti olen tehnyt tällä taidolla. Visuaalisemman saan korteista kun lisäsin niiden otsikoihin myös taitotason mittariksi tähdet, jotka siis osoittavat asteikolla 1-5 arvioimani oman taitotasoni kunkin kortin taitolle. Korttien sisällössä voin myös avata 

Myös sivun pääkuvan (header/showcase) asemoinnin viilaamiseen meni jonkin verran aikaa, kun testailin CSS:n avulla sen kokoa ja background-määrityksiä. Tässä kohdassa käytin apuna myös W3Schoolsin How To -opasta [Hero Imagen](https://www.w3schools.com/howto/howto_css_hero_image.asp) teosta, ja tummensin kuvaa hieman lisää jotta sen päällä oleva teksti erottuu selvemmin. Käytin showcase-kuvan päällä olevassa pääotsikko-tekstissä myös hieman pehmeämpää valkoista väriä kuin puhdasta valkoista, joka erottuu kuvasta hyvin mutta ei kuitenkaan "loista" tumman kuvan päällä. 


Päivän verran lisää kulutin aikaa Sassin muokkaamiseen. Aloitin työn ensin vain Bootstrapilla ja muokkasin omia tyylejä erilliseen CSS-tiedostoon. Yksi päivä kului aikaa siihen, kun otin Sassin käyttöön ja käänsin tämän oman CSS-tiedostoni Sassiksi. Sassin kääntämällä uudella styles.css -tiedostolla korvasin sitten alkuperäisen CSS-tiedostoni.
Sassin viilailu: 1-2 päivää

Kuvagalleria: 1 päivä.

Dokumentointi: 1 päivä + varsinaisen koodaustyön ohessa tehdyt muistiinpanot etenemisestä

Jaoin Sass-tiedostoni seuraavalla tavalla:  
- style.scss: päätiedosto josta CSS käännetään, sisältää perus tyylit nav ja header(showcase) -osioiden tyyleille, sekä eri section -osioiden tyyleille  
- _config.scss: konfiguraatio-tyylit eli fontit ja muuttujat väreille  
- _gridcard.scss: sisältää tyylit grid-muotoiluille korttialueille sekä itse korteille  
- _media.scss: kaikki media queryt


### Pagespeed

Testasin alkuperäisen portfolion Pagespeed-tulokset:  
pagespeed_original_desktop.png  
pagespeed_original_mobile.png  

Pyrin harjoitustyössäni parantamaan tuloksia. Varsinkin mobile-version tulosta oli parannettava. Rehellisesti en alkuperäisen websivun luomisen yhteydessä ollut lainkaan tullut pohtineeksi sivujen toimivuutta tai kuvatiedostojen kokoa nopeuden kannalta, joten nyt oli harjoitustyössä hyvä tilaisuus siihenkin. Mobiiliversio kaipasi tuloksen perusteella erityisesti juuri grafiikan optimointia ja ylimääräisen koodin siivousta.

## Yleisiä mietteitä työn kulusta ja mitä tuli opittua

Opin ehdottomasti parempaa ymmärrystä Bootstrapin käytöstä.

https://getbootstrap.com/docs/5.0/getting-started/browsers-devices/

Aikataulutustani olisin sikäli voinut parantaa, että harjoitustyöni teko ja sen myötä kurssisuoritukseni myöhästyi aika roimasti suunnitellusta.

Aikataulu:  
etukäteen Figma-mallia ja Bootstrapin testailua sivun header-rakenteeseen  
Aloitus 18.2.2021 ->  lopetus ?.3.2021  

ähän ylimääräisenä työnä kului vielä päivä eräänlaiseen jatkokehittelyn suunnitteluun, koska pohdin myös kuvagalleria-osion lisäämistä sivuille ja testailin jo senkin koodausta ja asettelua yhdeksi osioksi sivulle. Ajatuksenani oli rakentaa sivulle vielä grid-muotoinen image gallery-osio, josta kunkin kuvan voisi avata omaan modal-ikkunaan Päätin kuitenkin jättää sen kehittelyn vielä tämän harjoitustyön ulkopuolelle.


## Arvosanaehdotus itselle perusteluineen