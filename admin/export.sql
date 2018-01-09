-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2017 at 05:14 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twdm`
--

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `player_id` int(11) NOT NULL,
  `first_name` varchar(32) DEFAULT NULL,
  `last_name` varchar(32) DEFAULT NULL,
  `country` varchar(20) NOT NULL,
  `birthplace` varchar(32) DEFAULT NULL,
  `age` varchar(32) DEFAULT NULL,
  `ranking` varchar(33) DEFAULT NULL,
  `weight` varchar(64) DEFAULT NULL,
  `height` varchar(10) DEFAULT NULL,
  `coach` varchar(30) DEFAULT NULL,
  `about` varchar(1000) DEFAULT NULL,
  `img` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`player_id`, `first_name`, `last_name`, `country`, `birthplace`, `age`, `ranking`, `weight`, `height`, `coach`, `about`, `img`) VALUES
(1, 'Andy', 'Murray', 'GBR', 'GLASGOW, SCOTLAND', '30', '1', '84KG', '1.91', 'IVAN LENDL ', '> Began playing at age 3\r\n> Mother, Judy, who works in tennis and father, William, is a retail area manager; brother, Jamie, also plays on the ATP World Tour\r\n> Grew up playing football and tennis, and was once offered trials with Glasgow Rangers FC\r\n> Loves boxing, football and basketball, and regularly attends Miami Heat games (NBA)\r\n> Based in Barcelona from age 15-17\r\n> Played 1st full men’s singles match with roof closed at Wimbledon on June 29, 2009 vs. Wawrinka\r\n> On March 12, 2013, he was presented the Laureus World Breakthrough of the Year Award\r\n> Featured in GQ Magazine’s “20 Most Stylish Athletes of 2013”\r\n> Received OBE (Officer of the Most Excellent Order of the British Empire) medal from Prince William on Oct. 17, 2013\r\n', 'img/murray'),
(2, 'Novak', 'Djokovic', 'SRB', 'BELGRADE, SERBIA', '29', '2', '75KG', '1.88', 'Boris Becker', '> Nicknamed “Nole”\r\n> Began playing at age 4 and made pro debut at 16\r\n> Father, Srdjan; mother, Dijana; brothers; Marko (born Aug. 20, 1991) and Djordje (born July 17, 1995)\r\n> Father, uncle and aunt were all professional skiers and his father was also an excellent football player. His father wanted him to be a football player or skier but excelled in tennis at an early age.\r\n> Credits his family as inspiration for giving him so much support\r\n> Idol growing up was Pete Sampras\r\n> At age 12, attended Niki Pilic Academy in Munich and practiced there for almost 2 years before returning to Belgrade\r\n> Speaks Serbian, Italian, German, English and French\r\n> Favourite surface is hard, but considers himself well-rounded', 'img/djokovic'),
(3, 'Stan', 'Wawrinka', 'SUI', 'LAUSANNE, SWITZERLAND', '32', '3', '81KG', '1.83', 'Magnus Norman', '> Nicknamed ”Stan the Man” and “Stanimal”\r\n> Began playing at 8, stopped school at 15 to focus on tennis\r\n> Surname is Polish, but he is only Polish by ancestry\r\n> Father, Wolfram, is German; mother, Isabelle, is Swiss; brother, Jonathan; sisters, Djanaee and Naella. Parents work on an organic farm, helping handicapped people.\r\n> Enjoys movies and music. Fan of Lausanne ice hockey club.\r\n> Considers backhand his best shot\r\n> Swiss flag carrier at 2012 Olympics opening ceremony\r\n> Named 2013 Swiss of the Year by his country’s TV audience\r\n> Elected 2015 Swiss Sportsman of the Yea', 'img/wawrinka'),
(4, 'Rafael', 'Nadal', 'ESP', 'MANACOR, MALLORCA, SPAIN', '30', '4', '85KG', '185CM', 'Carlos Moya', '> Full name is Rafael Nadal Parera, nicknamed “Rafa”\r\n> Began playing tennis at age 4 with his uncle Toni\r\n> Plays left-handed but writes right-handed. Used to play with 2-handed forehand and backhand before his uncle made him change at age 9 or 10 to a 1-handed forehand.\r\n> Father, Sebastian, is a business partner with his 2 brothers of a restaurant, Sa Punta, and owner of a glass and windows company, Vidres Mallorca; mother, Ana Maria, is the Rafa Nadal Foundation president; sister, Maria Isabel\r\n> Comes from same island (Mallorca) as Carlos Moya. The city of Manacor is second-biggest in Mallorca.\r\n> His other uncle, Miguel Angel Nadal, is a former professional football player with stints on FC Barcelona, Real Mallorca and Spanish national team that competed in 1994, 1998 and 2002 World Cups\r\n> Founded the Rafa Nadal Foundation in 2008 and was presented with ATP Aces for Charity grant in 2011.', 'img/nadal'),
(5, 'Roger', 'Federer', 'SUI', 'BASEL, SWITZERLAND', '35', '5', '85KG', '1.85', 'Ivan Ljubicic', '> Began playing tennis at age 8\r\n> Mother, Lynette; father, Robert; sister, Diana\r\n> Idols growing up were Stefan Edberg, Boris Becker and Pete Sampras\r\n> Enjoys spending time with his family, relaxing on the beach, playing cards and table tennis. He is also a fervent fan of hometown football team, FC Basel.\r\n> Speaks English, German, Swiss German, and French\r\n> Since 2003, has won a record 33 ATP World Tour Awards: ATP No. 1 (5 times: 2004-07, 2009), Arthur Ashe Humanitarian of Year (2 times: 2006, 2013), Stefan Edberg Sportsmanship (12 times: 2004-09, 2011-16), ATPWorldTour.com Fans’ Favourite for a record 14 consecutive years (2003-16)\r\n> Ranked No. 2 on the Reputation Institute’s 2011 study of world’s most respected, admired and trusted personalities. Was second to Nelson Mandela but ahead of the likes of Bill Gates, Steve Jobs, Oprah Winfrey and Bono', 'img/federer'),
(6, 'Milos', 'Raonic', 'CAN', 'PODGORICA, MONTENEGRO', '26', '6', '98KG', '1.96', 'RICCARDO PIATTI', '> Began playing tennis at age 8\r\n> Moved from Podgorica, Montenegro to Canada at age 3\r\n> Father, Dusan; mother, Vesna, are both engineers; sister, Jelena and brother, Momir\r\n> Speaks English and Montenegrin\r\n> Idol growing up was Sampras: “I video-taped all his matches”\r\n> Was among the 1st group of players to join Tennis Canada’s National Training Centre in Montréal when it opened in 2007\r\n> Favourite surface, hard; shots, serve and forehand\r\n> Enjoys watching movies and spending time with family/friends\r\n> Founded Milos Raonic Foundation in 2012 to help disadvantaged youth become active, productive members of society. Foundation received ATP ACES for Charity $15,000 grant in 2016, which it matched for a total of $30,000.\r\n> Fan of FC Barcelona, Toronto Raptors (NBA) and Toronto Blue Jays (MLB)', 'img/raonic'),
(7, 'Dominic', 'Thiem', 'AUT', 'WIENER NEUSTADT, AUSTRIA', '23', '7', '82KG', '1.85', 'GÜNTER BRESNIK', '> Nicknamed “Dominator”\r\n> Began playing tennis at age 6\r\n> Father, Wolfgang, and mother, Karin, are professional tennis coaches; brother, Moritz, also plays tennis\r\n> Idols growing up were countrymen Stefan Koubek and Jürgen Melzer\r\n> Favourite shot is forehand and surface is clay\r\n> Favourite tournaments are Vienna and Kitzbühel\r\n> Big football fan and supports Chelsea FC\r\n> Also enjoys and follows ski jump competitions\r\n> Joined Austrian military service from Nov. 2014 to Apr. 2015 (did not miss any tournaments)\r\n> Physiotherapist is Alex Stober', 'img/thiem'),
(8, 'Marin', 'Cilic', 'CRO', '	MEDJUGORJE, BOSNIA-HERZEGOVINA', '28', '8', '89KG', '1.98', 'JONAS BJORKMAN ', '> Nicknamed “Chila” by his friends\r\n> Began playing at age 7 with his cousin, Tanja\r\n> Father, Zdenko; mother, Koviljka, are both retired; brothers: Vinko, Goran and Mile\r\n> Favourite football teams are AC Milan and the Croatian national team, admires players Kaka and Robinho\r\n> Enjoys playing on all surfaces but says hard and grass are best-suited surfaces for him\r\n> Recipient of 2016 Arthur Ashe Humanitarian Award after launching Marin Cilic Foundation in June 2016 to provide young people improved access to education\r\n> Admires countrymen Goran Ivanisevic and Ivan Ljubic', 'img/cilic'),
(9, 'Kei', 'Nishikori', 'JPN', 'SHIMANE, JAPAN', '27', '9', '75KG', '1.78', 'DANTE BOTTINI ', '> Began playing at age 5\r\n> Mother, Eri, is a piano teacher; father, Kiyoshi, is an engineer; sister, Reina\r\n> Moved from Shimane, Japan, to US at age 14, to train at the IMG Academy in Florida and didn\'t speak a word of English when he arrived. Still trains at IMG Academy.\r\n> Came to academy as a member of Masaaki Morita Tennis Fund group, which consists of a select few Japanese players sponsored by Mr. Morita, CEO of Sony\r\n> A former roommate of Zach Gilbert, son of ex-ATP Top 10 pro Brad Gilbert, who was his coach in 2011\r\n> Favourite surfaces are hard and clay, best shot is forehand\r\n> Named 2008 ATP Star of Tomorrow presented by Emirates\r\n> In 2011, played Chang in Tokyo to raise money for earthquake relief', 'img/nishikori'),
(10, 'David', 'Goffin', 'BEL', 'ROCOURT, BELGIUM', '26', '10', '68KG', '1.80', 'Thierry Van Cleemput', '> Nicknamed “La Goff”\r\n> Began playing tennis at age 6 with his father\r\n> Father, Michel, is a tennis coach at the Barchon Club in Liege; mother, Francoise; brother, Simon\r\n> Enjoys playing golf\r\n> Idol growing up was Roger Federer\r\n> Voted by fellow players in 2014 as the ATP Comeback Player of the Year\r\n> Trains with the Belgian Tennis Federation in Mons', 'img/goffin');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_description` varchar(100) DEFAULT NULL,
  `post_date` varchar(32) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `topic_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `topic_id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `topic_date` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstName` varchar(32) DEFAULT NULL,
  `lastName` varchar(32) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `pass` varchar(64) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstName`, `lastName`, `email`, `pass`, `role`) VALUES
(1, 'Octavian', 'Bostan', 'octav202@yahoo.com', 'test', 'user'),
(2, 'Simona', 'Bacanu', 'simona@yahoo.com', 'test', 'user'),
(3, 'test', 'test', 'test', 'test', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`topic_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
