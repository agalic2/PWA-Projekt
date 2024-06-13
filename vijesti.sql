-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 11:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `novostirh`
--

-- --------------------------------------------------------

--
-- Table structure for table `vijesti`
--

CREATE TABLE `vijesti` (
  `id` int(11) NOT NULL,
  `naslov` varchar(255) NOT NULL,
  `sazetak` text NOT NULL,
  `tekst` text NOT NULL,
  `kategorija` varchar(50) NOT NULL,
  `slika` varchar(255) NOT NULL,
  `arhiva` tinyint(1) NOT NULL DEFAULT 0,
  `datum_unosa` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `vijesti`
--

INSERT INTO `vijesti` (`id`, `naslov`, `sazetak`, `tekst`, `kategorija`, `slika`, `arhiva`, `datum_unosa`) VALUES
(1, 'Gvardiol pojasnio razliku između pozicije u Cityju i reprezentaciji pa rekao: ‘Bit će kiša? Drago mi je‘', 'Joško Gvardiol i Borna Sosa stali su pred medije uoči susreta protiv Španjolske', 'Do utakmice Hrvatske i Španjolske na Europskom prvenstvu broji se sitno. Euro 2024. počinje u petak ogledom domaćina Njemačke i Škotske, a hrvatskim nogometašima ostalo je za odraditi samo još jedan trening prije nego što u subotu u 18 sati na Olimpijskom stadionu u Berlinu započne turnir dvobojom protiv crvene Furije.\r\n\r\nIzabranici Zlatka Dalića u međuvremenu svakodnevno odrađuju i medijske dužnosti, a danas su pred novinare u 17.15 sati izašli Joško Gvardiol i Borna Sosa. Mlade zvijezde Manchester Cityja i Ajaxa već su dovoljno iskusne, Gvardioli je ovo već treći veliki turnir, a Sosi drugi.\r\n\r\nGvardiol je dobio pitanje o poziciji lijevog beka i razlici u njegovoj ulozi u Manchester Cityju i Vatrenima.\r\n\r\n- Pozicija lijevi bek više-manje je ista, razlika je što u Manchester Cityu igramo ofenzivnije, Guardiola traži da ulazimo u &quot;džep&quot;, u međuprostor te smo ofenzivni kroz sredinu ili kao krila, dok u reprezentaciji izbornik traži i da idemo gore široko, ali i da ulazimo unutra pa su onda krila raširena visoko - pojasnio je Joško.', 'sport', 'gvardiolSOSA.jpg', 0, '2024-06-13 21:54:34'),
(3, 'On će biti najveća prijetnja vatrenima', 'Njihova glad za pobjedom je nevjerojatna i to se prenosi na nogomet&quot;, rekao je Dani Olmo', 'Španjolski nogometni reprezentativac Dani Olmo, koji je pet godina igrao za zagrebački Dinamo, očekuje neizvjesnu utakmicu s Hrvatskom u subotu na otvaranju Europskog prvenstva.\r\n\r\n&quot;Optimisti smo te ćemo izaći kako bismo pobijedili, ali spremni smo na sve&quot;, izjavio je 26-godišnji ofenzivni vezni igrač u četvrtak na konferenciji za medije.\r\nRekao je da je utakmica s Hrvatskom za njega posebna.\r\n&quot;Bit će to treći put da igram protiv njih. Znate da sam odrastao tamo i proveo pet godina u Dinamu, to mi je drugi dom. Hrvatska mi je posebno draga, pa me motivira što počinjem Europsko prvenstvo igrajući protiv njih&quot;, rekao je Olmo, igrač njemačkog RB Leipziga.\r\n\r\nZa Španjolsku je protiv Hrvatske nastupio 2021. u osmini finala Europskog prvenstva kada je Španjolska pobijedila 5-3 u produžetku te prije godinu dana kada je bila uspješnija u izvođenju jedanaesteraca u finalu Lige nacija, u kojem nije bilo pogodaka iz igre.', 'sport', 'Olmo.jpeg', 0, '2024-06-13 22:03:29'),
(4, 'Edin Džeko stigao u Dalmaciju: Spominje se njegov potpis za Hajduk', 'Kalinić i Džeko zajedno su igrali u Romi 2019./2020., tada je hrvatski napadač nastupio 19 puta za Vučicu.', 'Prema nekim informacijama Nikola Kalinić je pozvao Edina Džeku u Hajduk. Novi sportski direktor Bijelih već je pokazao da ima dobre veze jer je u klub doveo Gennara Gattusa.\r\n\r\nEdin Džeko je još prije puno godina obećao navijačima Hajduka da će doći pred kraj karijere, a s 38 godina mogao bi pojačati napad splitskog kluba.\r\nNapadač BiH trenutno i boravi u Dalmaciji. Vrijeme provodi u Dubrovniku gdje ima i svoj restoran. Iako njegov boravak u Hrvatskoj nije nikakva novost, sigurno je da dao novu nadu navijačima Hajduka.\r\n\r\nNa Instagramu je objavio nekoliko obiteljskih fotografija iz Grada.\r\n\r\nInteres za 38-godišnjaka postoji i iz Saudijske Arabije, oni bi mu zasigurno mogli ponuditi puno veća primanja od Hajduka, ali ljubav Edina prema Hajduku mogla bi presuditi u korist Splićana.\r\nPrethodne sezone u 46 nastupa postigao je 25 golova uz deset asistencija za slavni turski klub, s kojim nije uspio osvojiti naslov prvaka Turske.\r\n\r\nKalinić i Džeko zajedno su igrali u Romi 2019./2020., tada je hrvatski napadač nastupio 19 puta za Vučicu.', 'sport', 'dzekoIkalinic.jpg', 0, '2024-06-13 22:06:23'),
(5, 'Zelenski i Biden potpisali ugovor bez presedana!', 'Petnaest zemalja je već sklopilo slične dugoročne sigurnosne aranžmane s Ukrajinom', 'Predsjednici Sjedinjenih Američkih Država i Ukrajine su potpisali sporazum o dugoročnoj sigurnosnoj suradnji između Washingtona i Kijeva.\r\n\r\nAmerički predsjednik Joe Biden i ukrajinski predsjednik Volodimir Zelenski su u četvrtak potpisali bilateralni sporazum na marginama samita skupine G7 na jugu Italije.\r\n\r\nPetnaest zemalja je već sklopilo slične dugoročne sigurnosne aranžmane s Ukrajinom, uključujući Veliku Britaniju, Francusku i Njemačku.\r\nBidenov savjetnik za nacionalnu sigurnost Jake Sullivan je u srijedu rekao da sporazum neće sadržavati obvezu da Washington rasporedi američke vojnike u Ukrajini niti obvezu da Kijevu pošalje određene sustave naoružanja.\r\nNjihov dogovor ne predstavlja sporazum koji je ratificirao Kongres, što znači da će ga Donald Trump, bude li izabran za predsjednika u studenom, moći ukinuti.\r\n\r\nTrump je na sastanku s republikanskim zastupnicima u Kongresu kritizirao američku pomoć za Ukrajinu, njih je pozvao da smanje neke poreze te podržao carine, rekli su sudionici sastanka dok bivši američki predsjednik nastoji ujediniti stranku uoči izbora 5. studenog.\r\n\r\n&quot;On se pita koja će biti korist ako Ukrajina pobijedi&quot;, kazao je novinarima republikanac Don Bacon.', 'vijesti', 'biden.jpg', 0, '2024-06-13 22:09:31'),
(6, 'Radnici zagrebačke Plinare traže hitnu smjenu ', '‘Firmu destabilizira Uprava na čelu s Jeronimom Tomasom koji je sa svojim savjetnicima firmu doveo u ovu situaciju‘', 'Stotinjak radnika Gradske plinare Zagreb - Opskrba (GPZO) u četvrtak je na prosvjedu zbog gubitka posla opskrbe plinom zagrebačkih kućanstva, zatražilo od gradonačelnika i predsjednika Uprave Zagrebačkog holdinga da hitno smijene Upravu.\r\n\r\n&quot;Mi svi ovdje znamo da jedini koji destabiliziraju firmu je ova Uprava na čelu s gospodinom Jeronimom Tomasom koji je sa svojim savjetnicima firmu doveo u ovu situaciju&quot;, poručio je predsjednik Udruge radničkih sindikata Hrvatske Tomislav Rajković.\r\n\r\nOd gradonačelnika Tomislava Tomaševića i predsjednika Uprave Zagrebačkog holdinga Ivana Novakovića traže da hitno smjene Upravu i dovedu novu, koja će se znati nositi s novim problemima i sa situacijom u kojoj se Gradska plinara Zagreb - Opskrba (GPZO) našla.\r\n\r\nZahtjev za smjenom radnici su podržali uzvicima i pljeskom te porukama na transparentnima: &quot;Zbrinite Upravu&quot;, &quot;Uprava uživa povjerenje, a radnici?&quot;, &quot;Uprava - crveni karton&quot;.\r\nRajković je rekao da danas prosvjeduju i kako bi građanima Zagreba poručili da ne postoji bolja kompanija za opskrbu od GPZO-a i pozvali ih da nastave suradnju s GPZO-om po istoj ili sa sličnom cijenom koju će dobiti od Međimurje-plina.\r\n\r\nPredsjednik Sindikata distribucije plina i plinske tehnike Hrvatske Vlatko Kottnig rekao je da takva Uprava GPZO-a koja je dokazala svoje nekompetencije ne može voditi računa o radnicima.\r\n', 'vijesti', '33842945.jpg', 0, '2024-06-13 22:16:20'),
(7, 'Jandroković o koaliciji s DP-om: ‘Krenulo je dobro, no razlike su ponekad poprilične...‘', '‘Mi smo ti koji činimo većinu i koji moramo osigurati političku stabilnost i nesmetan‘', 'Predsjednik Hrvatskog sabora Gordan Jandroković rekao je u četvrtak kako je koalicija između HDZ-a i partnera te Domovinskog pokreta krenula dobro, u korektnoj atmosferi te svi u vladajućoj većini razumiju da su ponekad razlike poprilične i da trebaju imati razumijevanja jedni za druge.\r\n\r\n&quot;Čini mi se da je dosta dobro krenulo, imali smo jučer koalicijski sastanak gdje je u vrlo korektnoj atmosferi razmotreno nekoliko pitanja. Čini mi se da svi koji sudjeluju u parlamentarnoj većini razumiju da je ona relativno heterogena&quot;, rekao je Jandroković u emisiji &quot;S Markova trga&quot; Hrvatskog radija.\r\n\r\nImamo predstavnike liberala, manjina, DP koja je kao stranka nešto desnije od HDZ-a, dodao je.\r\n\r\n&quot;Kada svi zajedno sjednu i krenu razgovarati, onda vrlo brzo uvide da su ponekad razlike i poprilične i da treba imati razumijevanje i za onu drugu stranu jer na nama je velika odgovornost, mi smo ti koji činimo većinu i koji moramo osigurati i političku stabilnost i nesmetan rad Vlade&quot;, naveo je.\r\n\r\nKoalicijske sastanke ocijenio je bitnima jer na njima kroz dogovor i raspravu dolaze do najboljih rješenja.\r\n\r\n&quot;Bez obzira na ove početne korake, koji su uvijek malo teži nego kad se stvari uhodaju, vjerujem da će ova većina i Vlada uspješno provesti četiri godine za kormilom Hrvatske&quot;, ocijenio je.\r\n\r\nUpitan o DP-ovom zastupniku Stephenu Bartulici i njegovoj vožnje u Ferrariju, odnosno može li se to odraziti na vladajuću većinu, Jandroković je rekao ne, ‘jer su kolege iz te stranke prepoznale pogrešku koju je Bartulica napravio u noći europskih izbora‘.\r\n\r\nGovoreći o radu Sabora, inicijativu Mosta koji traži istražno povjerenstvo za rad Stožera u pandemiji ocijenio je ‘antivakserskom‘ te dodao kako je i dio zastupnika DP-a objasnio zašto je neće podržati.', 'vijesti', 'f_33838099_1280.jpg', 0, '2024-06-13 22:19:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vijesti`
--
ALTER TABLE `vijesti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vijesti`
--
ALTER TABLE `vijesti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
