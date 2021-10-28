-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 28 okt 2021 om 19:24
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keuzedeel_ecommerce`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ecommerce`
--

CREATE TABLE `ecommerce` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `price` float NOT NULL,
  `thema` tinytext NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `ecommerce`
--

INSERT INTO `ecommerce` (`id`, `name`, `img`, `price`, `thema`, `info`) VALUES
(1, 'Battlefield 6', 'battlefield.jpg', 99.99, '', 'Trek je kisten maar uit de kast, want in 2021 gaan we de strijd aan in Battlefield 2042. De game doet inspiratie op uit Battlefield 4, één van de meest geliefde games uit de Battlefield reeks. Ook zou de game een multiplayer modus met 128 spelers ondersteunen. Je leest hier alle geruchten over het nieuwste deel van Battlefield en zodra die uit is, koop je hem meteen bij Original Gamers.<br><br>\r\n\r\n<strong>Moderne instellingen</strong>\r\n<br>\r\n<br>\r\nIn trailers van developers zien we korte stukjes van een nieuwe game, wat zomaar BF 2042 kan zijn. Zo zien we moderne uitrusting en soldaten. Op het kanaal van Tom Henderson, die info lekt over nieuwe Battlefield games, kwam een specifiekere video voorbij. In de video, die nu verwijderd is, zagen we hoe de nieuwe Battlefield heel veel weg had van Battlefield 4. Voor veel Battlefield fans is dat heel goed nieuws. Het is 8 jaar geleden dat de geliefde game Battlefield 4 gereleased werd.<br><br>\r\n\r\n<strong>Extreme weersomstandigheden</strong>\r\n<br><br>\r\nExtreme weersomstandigheden bemoeilijken de nieuwe missies\r\nVolgens dezelfde Tom Henderson, die via zijn kanaal onofficiële trailers belicht, voeren weersomstandigheden de strijd verder op. Er komt een realistische dag-en-nacht cyclus. Dit houdt in dat elk etmaal weer nieuwe uitdagingen met zich meebrengt. Het weer omschrijft Henderson als \'dynamisch\': tijdens een missie beland je bijvoorbeeld in een tornado. Zo spelen de game ontwikkelaars in op de trend om de setting een grotere rol te geven, bijna als een extra personage, waarmee ze verhaallijn nog gelaagder maken.\r\n\r\n<br><br>\r\n\r\n<strong>128 spelers</strong>\r\n<br><br>\r\nBattlefield\r\nDeze game draait om de multiplayer mode. Daarnaast moet er ook een battle royale mode komen in de nieuwe Battlefield. Hierbij spring je uit een vliegtuig en verzamel je op de grond wapens en uitrusting, met als doel als laatste te overleven. Bovendien zouden er 7 grotere multiplayer mappen dan ooit komen. Die mappen ondersteunen 128 spelers. Het belooft een ware digitale oorlog te worden, wanneer de strijd ter land, ter zee en in de lucht losbarst.'),
(2, 'Cyber Punk', 'cyberpunk.jpg', 69.99, '', 'Cyberpunk 2077 is beschikbaar. Deze nieuwe game van ontwikkelaar CD Project RED is voor velen de meest geanticipeerde game van 2020. Wij vertellen je hier alles over Cyberpunk 2077.\r\n<br><br>\r\n<strong>De setting van Cyberpunk 2077</strong>\r\n<br><br>\r\nCyberpunk 2077 setting.\r\nCyberpunk 2077 speelt zich af in een fictieve nabije toekomst. Waar het allemaal gebeurt, is Night City. Night City staat onder controle van grote organisaties en robotics zijn essentieel in het dagelijks leven. Jij speelt als ‘V’, de hoofdpersoon van Cyberpunk. Met behulp van een uitgebreide tweaks maak jij van V een man, vrouw of iets ertussenin. Gaandeweg maak je V steeds meer eigen met de vele augments (upgrades), die installeerbaar zijn in het lichaam van V.\r\n<br><br>\r\n<strong>De gameplay van Cyberpunk 2077</strong>\r\n<br><br>\r\nGameplay van Cyberpunk 2077.\r\nCyberpunk 2077 is een first person shooter (FPS), wat wil zeggen dat je je karakter bestuurt alsof je zelf het personage bent. Je kiest in RPG-stijl hoe je de game speelt en welke stats je levelt. Dit zijn onder andere body, intelligence, technical en reflexes. Qua wapens heb je keuze zat en het is mogelijk de game volledig door te spelen zonder ook maar één iemand om te leggen. Cyberpunk geeft je alle vrijheid de game te spelen zoals jij wilt.\r\n<br><br>\r\n<strong>Augments en aanpassingen\r\nAugments Cyberpunk 2077.\r\n</strong>\r\n<br><br>\r\nZoals gezegd is de aanvankelijke character creation optie voor V enorm, waardoor je letterlijk elk deel van het lichaam van V aanpast. De augments helpen je een sterkere V te maken, maar niet alleen voor gevechten komen de augments van pas. Zo zijn er in Night City ook inwoners die een andere taal dan Engels spreken, die je na het installeren van de juiste chip pas verstaat.'),
(3, 'FIFA 22', 'fifa.png', 39.99, '', 'Beleef digitaal voetbal intenser dan ooit in FIFA 22 voor de PlayStation 5. Door diverse ontwikkelingen gedragen de spelers zich anders met en zonder bal. Ook het keeperssysteem is geheel opnieuw opgebouwd, waardoor iedere doelman anders is. Deze game speel je met maximaal 4 spelers.\r\n<br><br>\r\n<strong>Hyper motion</strong>\r\n<br><br>\r\nVoor de next-gen consoles is er HyperMotion gameplaytechnologie. HyperMotion verandert hoe spelers bewegen, of ze nou aan de bal zijn of niet. Daardoor zijn de wedstrijden realistischer en ervaar je ieder moment van de wedstrijd intenser.\r\n<br><br>\r\n<strong>\r\nMet of zonder bal\r\n</strong>\r\n<br><br>\r\nHyperMotion technologie maakt de integratie mogelijk van de allereerste motion capture van 22 professionele voetballers die met hoge intensiteit speelden. Bovendien leert het eigen machine learning algoritme van EA van meer dan 8,7 miljoen frames van geavanceerde wedstrijdregistratie, en schrijft vervolgens in realtime nieuwe animaties om organische voetbalbewegingen te creëren in een verscheidenheid aan interacties op het veld. Of het nu een schot, pass of voorzet is, HyperMotion verandert de manier waarop spelers op en naast de bal bewegen.\r\n<br><br>\r\n<strong>Nieuwe functies</strong>\r\n<br><br>\r\nDe nieuwe game biedt ook diepgaande en innovatieve functies in andere delen van de gameplay en de meest populaire modi, waaronder Career Mode, VOLTA FOOTBALL, Pro Clubs en FIFA Ultimate Team. Fans kunnen meer consistentie en onderscheidende persoonlijkheden tussen de palen verwachten met een compleet opnieuw opgebouwd keeperssysteem. Een geheel nieuwe Create a Club-ervaring in Career Mode, opnieuw ontworpen gameplay in VOLTA FOOTBALL en de introductie van FIFA Ultimate Team Heroes. Dat zijn volledig nieuwe items die de verhalen en glorie van cultspelers en fanfavorieten. Meer nieuws over FIFA 22-innovatie volgt in de loop van de zomer.'),
(4, 'Minecraft', 'minecraft.jpg', 19.99, '', 'Begin met minen en bouw het grootste fort ooit in Minecraft: Bedrock Edition. In de Bedrock versie van de best verkochte videogame ooit hak je, creëer je en vecht je, om jouw bouwwerk te beschermen. Extra in deze editie van Minecraft is cross-platform spelen. Dan speel je samen met je vrienden op bijvoorbeeld de Xbox en Nintendo Switch. Neem het onderweg op tegen verschillende mobs en ontvang speciale voorwerpen om jouw kasteel compleet te maken. Deze game speel je met maximaal 4 personen.\r\n<br><br>\r\n<strong>Minecraft</strong>\r\n\r\n<br><br>\r\nVerken willekeurig gegenereerde werelden en bouw fantastische dingen, van eenvoudige hutten tot grandioze kastelen. Speel in de Creative-modus met onbeperkte middelen of sla in de Survival-modus aan het graven en maak wapens en harnassen om gevaarlijke mobs van je af te houden. Met deze versie kun je samenspelen op allerlei verschillende apparaten, heb je toegang tot allerlei soorten content die de winkel in het spel te bieden heeft en ontvang je alle toekomstige spelupdates.\r\n\r\n<br><br>\r\n<strong>Kijk hoe Minecraft groeit</strong>\r\n\r\n<br><br>\r\nIn Minecraft: PlayStation 4 Edition begint het avontuur met je eigen verbeelding. Je kunt blokken breken, plaatsen en ermee doen wat je wilt. Probeer een zo diep mogelijk gat te graven of maak een schuilplaats om \'s nachts in te schuilen voor de verschrikkelijke monsters. Van stenen hut tot kasteel, van eenvoudig idee tot super-ambitieus plan; jij bepaalt hoe het spel wordt gespeeld.\r\n<br><br>\r\n<strong>Maak alles</strong>\r\n\r\n<br><br>\r\nWees dapper, nieuwsgierig en origineel. Maak alles, van een simpele boot tot een complete wereldstad. Je kunt de game alleen spelen of met maximaal zeven PlayStation Network-vrienden.');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `ecommerce`
--
ALTER TABLE `ecommerce`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `ecommerce`
--
ALTER TABLE `ecommerce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
