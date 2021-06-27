-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 12:20 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helloreader`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`, `description`) VALUES
(1, 'A BRIEF HISTORY OF TIME', 'A brief history of time-1.jpg', 220, 'A Brief History of Time: Genre: Scientific Book Author: Stephen Hawking In A Brief History of Time, Hawking writes in non-technical terms about the structure, origin, development and eventual fate of the Universe, which is the object of study of astronomy and modern physics. He talks about basic concepts like space and time, basic building blocks that make up the Universe (such as quarks) .'),
(2, 'COSMOS', 'Carl sagan cosmos-1.jpg', 230, ' Cosmos: (Note :book name is cosmos not carl Sagan) Genre: Scientific Book Author: Carl Sagan Cosmos is a 1980 popular science book by astronomer and Pulitzer Prize-winning  author Carl Sagan. Its 13 illustrated chapters, corresponding to the 13 episodes of  the Cosmos TV series, which the book was co-developed with and intended to  complement, explore the mutual development of science and civilization. One of  Sagan\'s main purposes for the book and television series was to explain complex  scientific ideas to anyone interested in learning.'),
(3, 'FAMOUST SCIENTIST', 'famous scientist-1.jpg', 240, 'Famous Scientist: Genre: Scientific Book Author: Charles Darwin One of the most delightful, witty, and beautifully written of all natural  histories, The Voyage of the Beagle recounts the young Darwin\'s 1831 to 1836 trip  to South America, the Galápagos Islands, Australia, and back again to England, a  journey that transformed his understanding of biology and fed the development  of his ideas about evolution.'),
(4, 'MAKE EVERY STEP COUNT', 'make every step count-1.jpg', 210, 'Make every Step Count: Genre: Scientific Book Author: Nina Barough Keep fit, tone-up and lose weight with Try It! Walking for Fitness. Walking is the  perfect way to achieve optimum health, hassle free, for all ages and abilities. Power-walking expert Nina Barough reveals there is a world of difference  between a casual stroll and an energising, body-sculpting power walk.'),
(5, 'ZODIAC', 'zodiac-1.jpg', 180, 'Holio Zodiac Count: Genre: Mystery Author: Leo It does not matter what the situation is, there are certain zodiac signs which  are born leaders and more powerful than their counterparts. Continue  reading if you want to find out which are the most powerful and courageous  signs of the zodiac that are born with leadership skills.'),
(6, 'HILL BILLY ELEGY', 'hill billy elegy-1.jpg', 170, 'HIl: Genre: Mystery Author: Jean Gion In this 1929 classic, an elegiac ode to Provence, Giono tells a simple tale of  peasants living in a valley. At the outset we are introduced to 12 characters living  in four houses at the foot of a hill. In one house is Gondran, Marguerite, and her  father, Janet. In another is Cesar Maurras, his mother, and their young welfare  worker. Besides the inhabitants of the other two houses'),
(7, 'KNIVES OUT', 'knives out-1.jpg', 200, 'Knives Out Genre: Mystery Author: Rian Johnson It is a 1986 horror novel by American author Stephen King. It was his  22nd book and his 17th novel written under his own name. The story follows the  experiences of seven children as they are terrorized by an evil entity that exploits  the fears of its victims to disguise itself while hunting its prey.Knives Out is a 2019  American mystery film written and directed by Rian Johnson, and produced by  Johnson and Ram Bergman. It follows a master detective investigating the death  of the patriarch of a wealthy, dysfunctional family. Knives Out had its world  premiere at the 2019 Toronto International Film Festival on September 7, 2019,  and was theatrically released in the United States on November 27 by Lionsgate  Films.'),
(8, 'THE DA VINCI CODE', 'the da vinci code-1.jpg', 185, 'The da vinci Genre: Mystery Author: Dan BrownThe Da Vinci Code follows \"symbologist\" Robert Langdon and cryptologist Sophie  Neveu after a murder in the Louvre Museum in Paris causes them to become  involved in a battle between the Priory of Sion and Opus Dei over the possibility  of Jesus Christ and Mary Magdalene having had a child together.'),
(9, 'IT', 'IT-1.jpg', 140, 'IT Genre: Horror Author: Stephen King It is a 1986 horror novel by American author Stephen King. It was his  22nd book and his 17th novel written under his own name. The story follows the  experiences of seven children as they are terrorized by an evil entity that exploits  the fears of its victims to disguise itself while hunting its prey.'),
(10, 'VAMPIRES', 'vampires-1.jpg', 130, 'Vampire Genre: Horror Author: Sheridan le Fanu Vampire literature covers the spectrum of literary work concerned principally  with the subject of vampires. The literary vampire first appeared in 18th-century  poetry, before becoming one of the stock figures of gothic fiction with the  publication of Polidori\'s The Vampyre (1819), which was inspired by the life and  legend of Lord Byron. Later influential works include the penny dreadful Varney  the Vampire (1847);'),
(11, 'MALORIE', 'malorie-1.jpg', 120, 'Malorie Genre: Horror Author: Josh Malerman Now from the mind of a true master of suspense comes the next chapter in Bird  Box. This time, Malorie is front and center, and she will confront the dangers of  her world head-on. Twelve years after Malorie and her children rowed up the river to safety, a  blindfold is still the only thing that stands between sanity and madness.'),
(12, 'BAOBA', 'baoba-1.jpg', 150, 'Baoba Genre: Horror Author: Adaobi Tricia Nwaubani Giant baobab trees have stood guard in Africa for centuries. Also known as \"trees  of life,\" baobabs provide food, water, shelter, and more for both people and  wildlife. The Baobab provides students with a detailed look at these strange,  ancient trees. The book can also be used to teach students how to identify main  idea and details and the correct use of coordinate adjectives.'),
(13, 'BATMAN', 'batman.jfif', 80, 'Batman Genre: Horror Author: DC Comics Batman is an ongoing American comic book series featuring the DC  Comics superhero Batman as its main protagonist. The character first appeared  in Detective Comics #27 (cover dated May 1939). Batman proved to be so popular  that a self-titled ongoing comic book series began publication with a cover date of  spring 1940. [2][3] It was first advertised in early April 1940, one month after the  first appearance of his new sidekick, Robin the Boy Wonder. Batman comics have  proven to be popular since the 1940s.'),
(14, 'X-MEN', 'x-men-1.jpg', 100, 'X men Genre: Horror Author: Stan Lee  Jack Kirby The X-Men are a team of fictional mutant superheroes appearing in American  comic books published by Marvel Comics. Created by artist/co-writer Jack  Kirby and writer Stan Lee, the characters first appeared in The X-Men #1  (September 1963) and formed one of the most recognizable and successful  franchises of Marvel Comics, appearing in numerous books, television  shows, films, and video games'),
(15, 'THE INCREDIBLE HULK', 'the incredible hulk.jfif', 130, 'Hulk Genre: Horror Author: Dr. Robert Bruce Banner The Hulk is a fictional superhero appearing in publications by the American publisher Marvel Comics. Created by writer Stan Lee and artist Jack Kirby, the  character first appeared in the debut issue of The Incredible Hulk (May 1962). In  his comic book appearances, the character is both the Hulk, a green-skinned,  hulking and muscular humanoid possessing a vast degree of physical strength,  and his alter eg'),
(16, 'MICKEY MOUSE', 'mickey mouse.jfif', 70, 'Mickey Genre: Horror Author: Walt Disney  Ub Iwerks Mickey Mouse is a cartoon character created in 1928 by Walt Disney and Ub  Iwerks at The Walt Disney Studios, who serves as the mascot of the Walt Disney  Company. An anthropomorphic mouse who typically wears red shorts, large  yellow shoes, and white gloves, Mickey is one of the world\'s most recognizable  fictional characters.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
