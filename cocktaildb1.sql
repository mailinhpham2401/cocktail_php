-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 08. Sep 2019 um 22:03
-- Server-Version: 10.4.6-MariaDB
-- PHP-Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cocktaildb1`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `cocktails`
--

CREATE TABLE `cocktails` (
  `id` int(11) NOT NULL,
  `zutaten` varchar(256) NOT NULL,
  `name` varchar(100) NOT NULL,
  `overlay_text` varchar(256) NOT NULL,
  `zubereitung` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `cocktails`
--

INSERT INTO `cocktails` (`id`, `zutaten`, `name`, `overlay_text`, `zubereitung`) VALUES
(1, '2 cl Cointreau<br>\r\n4 cl Rum (weiss)<br>\r\n4 cl Rum (dunkel)<br>\r\n2 cl Rum (hochprozentig)<br>\r\n2 cl Grenadine<br>\r\n2 cl Sirup<br>\r\n4 cl Orangensaft<br>\r\n2 cl Zitronensaft<br>\r\n6 cl Ananassaft<br>\r\n0,2 l Crushed Ice', 'zombie', 'Der Zombie ist ein etwas stärkerer, sehr schmackhafter Cocktail. Für Parties ist er perfekt.', 'Die Zutaten Cointreau, alle Rum Sorten, Grenadine, Maracujasirup, Orangensaft, Zitronensaft, Ananassaft, mit Crushed Ice\r\nim Shaker kräftig schütteln und in ein Longdrinkglas abseihen. Mit Kirschen und einer Orangenscheibe garnieren.'),
(2, '2 cl Wodka<br>\r\n6 cl Tomatensaft<br>\r\n2 cl Zitronensaft<br>\r\n1 Prise	Salz und Pfeffer<br>\r\n1 Dash Tabasco<br>\r\n1 Dash Worcestersauce', 'bloody_mary', 'Die Bloody Mary ist ein beliebter Longdrink auf vielen Partys. Tomatensaft, Wodka und die feurige Note des Tabascos sorgen für das gewisse Etwas.', 'Alle Zutaten wie Wodka, Tomatensaft, Zitronensaft, Tabasco, Worcestersauce, Salz und Pfeffer in ein Rührglas geben und gut vermischen danach in ein Old-Fashioned-Glas giessen.\r\nMit einer Zitronen- od. Limettenscheibe garnieren.'),
(3, '6 cl Cachaca (Pitù)<br>\r\n1 St Limette<br>\r\n2 EL Rohrzucker<br>\r\n5 EL Crushed Ice', 'caipirinha', 'Der Caipirinha ist ein brasilianisches Kultgetränk mit Cachaça & Limettensaft. Ein erfrischender Cocktail, der bei keiner Party fehlen darf.', 'Die beiden Limettenenden der unbehandelten Limetten abschneiden, achteln und in ein Tumbler-Glas geben. Den braunen Zucker drüber verteilen und die Limettenstücke mit einem Stößel ausdrücken.\r\nZum Schluß Cachaca dazugeben. Das Glas mit Crushed Ice auffüllen und alles gut durchrühren. Eventuell noch einen Schuss Soadwasser hinzufügen und den Cocktail mit einem Trinkhalm servieren.\r\n'),
(5, '5 cl weißer Rum<br>\r\n12 cl Cola<br>\r\n1 cl Limettensaft<br>\r\nEiswürfel<br>\r\nLimettenscheibe', 'cuba libre', 'Mehr als nur Rum und Cola. Entdecke das besondere Cuba Libre Cocktailrezept mit Havana Club Especial!', 'Ca. 1 gehäuften Teelöffel Rohrzucker in ein Caipi Glas, eine Limette vierteln und je 2 Viertel in ein Glas ausdrücken. Limetten ins Glas geben und pro Glas 4 cl Havanna Club ins Glas. Mit Cola auffüllen und dann Eis dazu geben. Mit einem Strohhalm verrühren.\r\nSo ist es ein echter Cuba Libre'),
(6, '6 cl brauner Rum<br>\r\n2 cl Orangenlikör<br>\r\n1 cl Zuckersirup<br>\r\n1 cl Mandelsirup<br>\r\n5 cl Ananassaft', 'mai_tai', 'Der klassische Rum-Cocktail aus dem sonnigen Californien ist der Mai Tai - ein Rezept das Sie probieren müssen.', 'Die Limette auspressen und den Saft mit 5 Eiswürfeln in einen Shaker geben. Braunen Rum, Mandel- und Zuckersirup und Orangenlikör dazu geben und gut schütteln.\r\nDen Drink in ein Longdrinkglas auf Eis gießen und Trinkhalm servieren.'),
(7, '2 cl Limettensaft<br>\r\n1 cl Orangenlikör<br>\r\n3 cl Tequila<br>\r\n1 Schuss Limetten<br>\r\n1 Prise	Salz zum Garnieren', 'margarita', 'Der Margarita ist ein Klassiker unter den Cocktails. Ein schmackhafter Drink der toll aussieht.', 'Die vorgekühlte Cocktailschale mit Limettensaft und Salz garnieren.\r\nDen Cocktailshaker mit Crashed Ice füllen. Limettensaft, Orangenlikör und Tequila dazu geben und kräfig schütteln.\r\nDen Drink in die Cocktailschale gießen und sofort servieren.'),
(8, '15 cl Martinikelch<br>\r\nEiswürfel<br>\r\n7 cl. Gin<br>\r\n1 cl. Wermut', 'martini', 'Der Martini ist den meisten nur in klassischer James Bond Manier bekannt. Doch er überzeugt auch in zähligen anderen Variationen.', ' Das Rührglas zu drei Vierteln mit Eiswürfeln füllen. Gin oder Wodka und den Wermut dazugeben. Alles so lange mit dem Barlöffel verrühren, bis das Rührglas beschlägt.\r\nDen Inhalt des Rührglases durch das Barsieb in den Martinikelch gießen. Je nach Geschmack die Olive ins Glas geben oder den Glasrand mit der Innenseite der Zitronenschale einreiben und diese mit ins Cocktailglas geben.\r\n'),
(9, '4 cl Wodka<br>\r\n2 cl Limettensaft<br>\r\n200 ml Ginger Ale<br>\r\n6 Scheibe/n Gurke(n)<br>\r\n1 Zweig Minze', 'moscow_mule', 'Der Moscow Mule ist ein beliebter Klassiker & wird dank Thomas Henry Spicy Ginger zu einem echten Premium Drink!', 'Fülle einen Kupferbecher zur Hälfte mit Eiswürfeln, füge den Vodka hinzu, presse den Saft einer halben Limette über dem Glas aus und fülle alles mit Thomas Henry Spicy Ginger auf.\r\nVodka und die Schärfe des Ingwers vermischen sich im Moscow Mule zu einer Köstlichkeit, die ihresgleichen sucht.'),
(10, '6 cl Rum, weißer<br>\r\n2 cl Likör, (Kokoslikör)<br>\r\n10 cl Ananassaft<br>\r\n2 cl Schlagsahne<br>\r\n4 cl Kokosmilch<br>\r\n2 TL Zucker<br>\r\nEiswürfel<br>\r\nFrüchte', 'pina_colada', 'Ein klassischer Mix, der beweist, wie gut Malibu zur Ananas passt: Eine Piña Colada ist leicht herzustellen und zu genießen, besonders mit guten Freunden.', 'Weißen Rum, Kokoslikör, Ananassaft, Schlagsahne und Kokosmilch abmessen und nacheinander in den Shaker gießen. Zucker hinzugeben,den Shaker fest verschließen und kräftig schütteln. Ein Cocktailglas mit Eiswürfeln füllen und die Flüssigkeit aus dem Shaker darüber gießen. Mit frischen Früchten am Glasrand garniert servieren.'),
(11, '4 cl Wodka<br>\r\n2 cl Likör<br>\r\n2 cl Zitronensaft<br>\r\n1 cl Grenadine<br>\r\n4 cl Orangensaft<br>\r\n4 cl Ananassaft', 'sex_on_the_beach', 'Der Sex on the Beach ist einer der bekanntesten und beliebtesten Cocktails  herrlich cremig.', 'Den Shaker mit 4 Eiswürfeln füllen und die übrigen Zutaten dazugeben, kräftig durchschütteln.\r\nIn ein Longdrinkglas oder Ballonglas einige Eiswürfel geben und den Cocktail durch ein Barsieb dazugießen.\r\nMit Strohalmen und einer Orangenscheibe servieren.'),
(12, '2 cl süße Sahne<br>\r\n2 cl Kokosnusscreme<br>\r\n6 cl Ananassaft<br>\r\n2 cl Wodka<br>\r\n2 cl weißer Rum<br>\r\n1 cl Blue Curaçao<br>\r\n1 Scheibe Ananas', 'swimming_pool', 'Swimming Pool ist der Name eines sahnig-süßen, alkoholischen Cocktails auf Basis von weißem Rum und Wodka. ', 'Alle Zutaten bis auf den Curaçao-Likör wandern in einen Shaker mit Eis und werden gründlich geschüttelt. Anschließend gibst Du den Swimming Pool Fancy Drink ins Glas mit crushed ice (randvoll). Im letzten Schritt lässt Du den Blue Curacao (blau) darüber fließen. Eine Cocktailkirsche und eine Ananasscheibe dienen dem Dekorieren des Drinks.');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `vorname` varchar(255) NOT NULL,
  `benutzername` varchar(10) NOT NULL,
  `passwort` varchar(8) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `logincocktails`
--

CREATE TABLE `logincocktails` (
  `id` int(11) NOT NULL,
  `loginid` int(11) NOT NULL,
  `cocktailid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `cocktails`
--
ALTER TABLE `cocktails`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `logincocktails`
--
ALTER TABLE `logincocktails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `cocktails`
--
ALTER TABLE `cocktails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT für Tabelle `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `logincocktails`
--
ALTER TABLE `logincocktails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
