-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 06:23 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `sl.no` int(11) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`sl.no`, `useremail`, `title`, `description`, `time`) VALUES
(2, 'sairamsenapati0022@gmail.com', 'sairam', '<p>of a definite article more than the lexical entry attached to the article.</p>\r\n', '0000-00-00 00:00:00'),
(4, 'sairamsenapati0022@gmail.com', 'sree', '<p>sairamsenaljksfdljk&nbsp;ments linked to certain noun types due to&nbsp;<a href=\"https://en.wikipedia.org/wiki/Lexicalization\" title=\"Lexicalization\">lexicalization</a>.</p>\r\n', '0000-00-00 00:00:00'),
(5, 'sairamsenapati0022@gmail.com', 'asdf', '<p>&quot;Definite article&quot; redirects here. For the Eddie Izzard comedy DVD, see&nbsp;<a href=\"https://en.wikipedia.org/wiki/Definite_Article\" title=\"Definite Article\">Definite Article</a>.</p>\r\n\r\n<p>A&nbsp;<strong>definite article</strong>&nbsp;is an article that marks a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Definiteness\" title=\"Definiteness\">definite noun phrase</a>. Definite articles such as English&nbsp;<em><a href=\"https://en.wikipedia.org/wiki/The\" title=\"The\">the</a></em>&nbsp;are used to refer to a particular member of a group. It may be something that the speaker has already mentioned or it may be otherwise something uniquely specified.</p>\r\n\r\n<p>For example, Sentence 1 uses the definite article and thus expresses a request for a particular book. In contrast, Sentence 2 uses an indefinite article and thus conveys that the speaker would be satisfied with any book.</p>\r\n', '2022-12-19 16:40:03'),
(6, 'sairamsenapati0022@gmail.com', 'bcd', '<p>saifaslkj;dsjlkf;</p>\r\n', '2022-12-19 19:32:09'),
(7, 'sairamsenapati0022@gmail.com', 'verb (used with object)', '<p>a written composition in prose, usually nonfiction, on a specific topic, forming an independent part of a book or other publication, as a newspaper or magazine.</p>\r\n\r\n<p>an individual object, member, or portion of a class; an item or particular:an article of food;articles of clothing.</p>\r\n\r\n<p>something of indefinite character or description:What is that article?</p>\r\n\r\n<p>an item for sale;&nbsp;<a href=\"https://www.dictionary.com/browse/commodity\">commodity</a>.</p>\r\n', '2022-12-19 19:36:05'),
(8, 'sairamsenapati0022@gmail.com', 'WILL YOU SAIL OR STUMBLE ON THESE GRAMMAR QUESTIONS?', '<ul>\r\n	<li>\r\n	<p>Since the&nbsp;article&nbsp;has been published, the Senate has actually voted against the government and the law will now come into effect this year.</p>\r\n\r\n	<p><a href=\"https://www.technologyreview.com/2020/09/16/1008495/podcast-covid-19-brazil-surveillance-state/\" rel=\"nofollow\">PODCAST: COVID-19 IS HELPING TURN BRAZIL INTO A SURVEILLANCE STATE</a>|ANTHONY GREEN|SEPTEMBER 16, 2020<a href=\"https://www.technologyreview.com/2020/09/16/1008495/podcast-covid-19-brazil-surveillance-state/\" rel=\"nofollow\">|MIT TECHNOLOGY REVIEW</a></p>\r\n	</li>\r\n	<li>\r\n	<p>This&nbsp;article&nbsp;was originally published on our Biology and Beyond channel in June 2020.</p>\r\n\r\n	<p><a href=\"http://nautil.us/issue/90/something-green/the-environmental-headache-in-your-shampoo?utm_source=RSS_Feed&amp;utm_medium=RSS&amp;utm_campaign=RSS_Syndication\" rel=\"nofollow\">THE ENVIRONMENTAL HEADACHE IN YOUR SHAMPOO - ISSUE 90: SOMETHING GREEN</a>|ANASTASIA BENDEBURY &amp; MICHAEL SHILO DELAY|SEPTEMBER 16, 2020<a href=\"http://nautil.us/issue/90/something-green/the-environmental-headache-in-your-shampoo?utm_source=RSS_Feed&amp;utm_medium=RSS&amp;utm_campaign=RSS_Syndication\" rel=\"nofollow\">|NAUTILUS</a></p>\r\n	</li>\r\n	<li>\r\n	<p>Complementing the Spotlight program are custom events, which are either sold as standalone products or as part of bigger editorial packages that can include everything from&nbsp;articles to custom video.</p>\r\n\r\n	<p><a href=\"https://digiday.com/media/eager-to-explore-more-business-insiders-virtual-events-strategy-lifts-volume-and-plants-evergreen-on-demand-feature/\" rel=\"nofollow\">&lsquo;EAGER TO EXPLORE MORE&rsquo;: BUSINESS INSIDER&rsquo;S VIRTUAL EVENTS STRATEGY LIFTS VOLUME AND PLANTS EVERGREEN ON-DEMAND FEATURE</a>|MAX WILLENS|SEPTEMBER 16, 2020<a href=\"https://digiday.com/media/eager-to-explore-more-business-insiders-virtual-events-strategy-lifts-volume-and-plants-evergreen-on-demand-feature/\" rel=\"nofollow\">|DIGIDAY</a></p>\r\n	</li>\r\n	<li>\r\n	<p>This&nbsp;article, the second in a series on global migration caused by climate change, is a result of a partnership between ProPublica and The New York Times Magazine, with support from the Pulitzer Center.</p>\r\n\r\n	<p><a href=\"http://feeds.propublica.org/link/9499/13878594/climate-change-will-force-a-new-american-migration\" rel=\"nofollow\">CLIMATE CHANGE WILL FORCE A NEW AMERICAN MIGRATION</a>|BY ABRAHM LUSTGARTEN, PHOTOGRAPHY BY MERIDITH KOHUT|SEPTEMBER 15, 2020<a href=\"http://feeds.propublica.org/link/9499/13878594/climate-change-will-force-a-new-american-migration\" rel=\"nofollow\">|PROPUBLICA</a></p>\r\n	</li>\r\n</ul>\r\n', '2022-12-19 19:37:06'),
(9, 'sairamsenapati0022@gmail.com', 'WORD ORIGIN FOR ARTICLE', '<ul>\r\n	<li>one of a class of objects; iteman article of clothing</li>\r\n	<li>an unspecified or previously named thing, esp a small objecthe put the article on the table</li>\r\n	<li>a distinct part of a subject or action</li>\r\n	<li>a written composition on a subject, often being one of several found in a magazine, newspaper, etc</li>\r\n</ul>\r\n', '2022-12-19 19:40:34'),
(10, 'sairamsenapati0022@gmail.com', 'Definition of an Article', '<h2>An article, according to the Merriam-Webster Dictionary, is defined as &ldquo;any of a small set of words or affixes (such as a, an, and the) used with nouns to limit or give definiteness to the application.&rdquo; According to the Collins Dictionary, &ldquo;an article is a kind of determiner. In English, &lsquo;a&rsquo; and &lsquo;an&rsquo; are called the indefinite article, and &lsquo;the&rsquo; is called the definite article.&rdquo; The Macmillan Dictionary defines an article as &ldquo;a type of determiner (=word used before a noun) that shows whether you are referring to a particular thing or to a general example of something. The indefinite article is &lsquo;a&rsquo; or &lsquo;an&rsquo; and the definite article is &lsquo;the&rsquo;.&rdquo;</h2>\r\n', '2022-12-19 19:41:59'),
(11, 'sairamsenapati0022@gmail.com', 'For example:', '<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><strong>The&nbsp;</strong>Sun sets in&nbsp;<strong>the</strong>&nbsp;west.</li>\r\n</ul>\r\n\r\n<p>In the above sentence, the nouns &lsquo;Sun&rsquo; and &lsquo;west&rsquo; are&nbsp;<a href=\"https://byjus.com/english/proper-nouns/\">proper nouns</a>&nbsp;and are specific and so the definite article has to be used.</p>\r\n\r\n<ul>\r\n	<li><strong>The</strong>&nbsp;children are playing cricket.</li>\r\n</ul>\r\n\r\n<p>In the above sentence, the definite article is used to determine the plural noun, &lsquo;children&rsquo;.</p>\r\n\r\n<ul>\r\n	<li>This is&nbsp;<strong>the</strong>&nbsp;world&rsquo;s longest river.</li>\r\n</ul>\r\n\r\n<p>In the above sentence, the definite article is used to denote the superlative degree of comparison.</p>\r\n\r\n<ul>\r\n	<li><strong>The&nbsp;</strong>crowd sang along with&nbsp;<strong>the&nbsp;</strong>band.</li>\r\n</ul>\r\n\r\n<p>In the above sentence, the definite article is used before the collective nouns, &lsquo;crowd&rsquo; and &lsquo;band&rsquo;.</p>\r\n', '2022-12-19 19:42:44'),
(12, 'sairamsenapati0022@gmail.com', 'Health and Human Rights: Submissions', '<p><em>Health and Human Rights</em><em>&nbsp;Journal</em>, a peer-reviewed open access journal under the editorship of Partners in Health co-founder Paul Farmer,<em> &nbsp;</em>is published twice a year, with new issues in June and December. Selected papers in press are made available prior to issue publication, thereby fast-tracking access to new research and enabling authors to cite their work early. Submissions are welcome at any time.</p>\r\n', '2022-12-19 20:08:06'),
(13, 'sairamsenapati0022@gmail.com', 'Full papers', '<p>Full papers are original academic articles (research, commentary, operationalization of human rights-based approaches to health, and analysis) which contribute to, and advance, health and human rights literature. These manuscripts must be 3500-7000 words (including references), and if selected by the editorial committee, will undergo external&nbsp; for peer review by at least two peers.</p>\r\n', '2022-12-19 20:08:27'),
(14, 'sairamsenapati0022@gmail.com', 'Perspective Essays', '<p>The editors welcome Perspective Essays which are shorter papers, up to 3000 words, including references. Perspective Essays provide authors with an opportunity to provide a well reasoned and evidence-informed viewpoint, which extends the health and human rights literature. Perspectives often engage with and examine leading edge issues, and are published on the website in advance of each issue, allowing timely responses to current debates. These manuscripts are reviewed by two external peers. They are published in the Perspectives Section of each issue of the Journal.</p>\r\n', '2022-12-19 20:08:51'),
(15, 'sairamsenapati0022@gmail.com', 'Letters to the Editor', '<p>We welcome Letters to the Editor of 500 words or less in response to specific articles. Individuals interested in writing a longer response (up to 1500 words) should consider a Viewpoint and present their perspective as a counterpoint to the article, rather than a specific critique. Letters are internally peer reviewed to check for accuracy and fairness.</p>\r\n', '2022-12-19 20:09:17'),
(16, 'kuladeep@gamil.com', 'Skslsdjlal', '<p>Article 48 was an amendment to the Weimar Constitution that allowed the president of the Weimar Republic in Germany to work around Parliament to carry out duties that protected the...</p>\r\n', '2022-12-20 10:43:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sl.no` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sl.no`, `username`, `useremail`, `password`) VALUES
(11, 'sree', 'sree@gamil.com', '$2y$10$Ed0ez3NOLgPHA7021sELpuWPlgyQUF5AoAGhiJDszyMznY.R56cSq'),
(12, 'p.kuldeep', 'kuladeep@gamil.com', '$2y$10$StCodtGdQ68soNWzH9honOyHERv/nq59GvIZTpQ/vbjhAdLcKc6JW'),
(13, 'sai', 'sai9078@gmail.com', '$2y$10$Z3yl1oEAvXZ.CFZEt7udw.hfg4qoNwdP/KQkaPmiOmo91nyTOQtuS'),
(14, 'user', 'user@gmail.com', '$2y$10$i/3Me8Z.mxXt.sS6Z/ceAeJMe8BFETluW1Q1SHl51NGzBFLO1BrGS'),
(15, 'usertwo', 'user2@gmail.com', '$2y$10$BD/O.OcWK7MgrZrYYtzTCujaLxxkZE/66pEbTJ3SX1/QCIaYP85Eu'),
(16, 'abcd', 'abcd@gmail.com', '$2y$10$GY0tiKeGI1bwzmxLN2EovOPVEwOsUHwQJf2Cj43iV7yF/2Zvg4s6q'),
(17, 'sai bhai', 'saibhai@gmail.com', '$2y$10$gcZ4JOIunu2P7fqu5hw96.EBUncMj6do9R28S6C91iYSlKadN.306'),
(18, 'siba', 'siba@gmail.com', '$2y$10$2aqYhDrmdaa0E4V8CtCXr.jUxSyNZuR2ZkTExAVOputF/CGgAPD3O'),
(21, 'arpit', 'arpit@gmail.com', '$2y$10$acFsImQ7RXPnq8Q9.XrjQ.CGJRU0f9CCoAx9TebP/TdFGcoUFB0cC'),
(24, 'sita', 'sita@gmail.com', '$2y$10$NAFdBcczmZX6eiOKsNQ.P.2Wfn.f75Mv1TwCtyDEZfq4mCef9du8W'),
(26, 'metera', 'metera@gmail.com', '1234'),
(27, 'sairam senapati', 'sairamsenapati0022@gmail.com', '$2y$10$c4QwKvTsMk4tI1cmiNk3o.uZIQGNdE3qnMPZvtWUhucK/guWXm2Pq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`sl.no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sl.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `sl.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sl.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
