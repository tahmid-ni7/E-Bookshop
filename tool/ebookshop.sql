-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2019 at 08:14 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `book_name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(200) NOT NULL,
  `publisher` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `book_image` varchar(200) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `description`, `author`, `publisher`, `price`, `quantity`, `categoryId`, `book_image`, `create_date`) VALUES
(15, 'PHP and Mysql', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Joel Murach', 'SPD', '450', 6, 1, 'http://localhost/e-bookshop/uploads/image/book1.jpg', '2019-03-14 10:59:03'),
(16, 'Building Java Programs', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, repellendus, et Ipsum ut sequi modi quaerat repellat corporis dolore optio, labore eveniet, accusamus quidem quod possimus beatae voluptatibus sunt ; Recusandae', 'Stuart Reges', 'Marty Stepp', '300', 8, 1, 'http://localhost/e-bookshop/uploads/image/book2.jpg', '2019-03-14 11:05:57'),
(17, 'Operating System', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, repellendus, et Ipsum ut sequi modi quaerat repellat corporis dolore optio, labore eveniet, accusamus quidem quod possimus beatae voluptatibus sunt Recusandae.', 'R Sudha', 'AR publication', '185', 6, 1, 'http://localhost/e-bookshop/uploads/image/book3.jpg', '2019-03-14 11:09:10'),
(18, 'Cloud data management', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laborisnisi ut aliquip ex ea commodo consequat.', 'Liang Zhao', 'springer', '320', 10, 1, 'http://localhost/e-bookshop/uploads/image/book4.jpg', '2019-03-14 12:19:36'),
(19, 'Learn Python 3 The Hard Way', 'In Learn Python the Hard Way, Third Edition, you ll learn Python by working through 52 brilliantly crafted exercises. Read them. Type their code precisely.', 'Zed A Shaw', 'Unknown', '270', 2, 1, 'http://localhost/e-bookshop/uploads/image/Python.jpg', '2019-03-14 18:46:50'),
(20, 'Programming with codeigniter MVC', 'Bjarne Stroustrup, a Danish computer scientist, began his work on C++’s predecessor “C with Classes” in 1979.[6] The motivation for creating a new language originated from Stroustrup’s experience in programming for his Ph.D. thesis. Stroustrup found that Simula had features that were very helpful for large software development, but the language was too slow for practical use, while BCPL was fast but too low-level to be suitable for large software development. When Stroustrup started working in AT&T Bell Labs, he had the problem of analyzing the UNIX kernel with respect to distributed computing. Remembering his Ph.D. experience, Stroustrup set out to enhance the C language with Simula-like features. C was chosen because it was general-purpose, fast, portable and widely used. As well as C and Simula’s influences, other languages also influenced C++, including ALGOL 68, Ada, CLU and ML.', 'Eli orr', 'Packet', '222', 9, 1, 'http://localhost/e-bookshop/uploads/image/lrg.jpg', '2019-03-14 20:21:26'),
(22, 'PHP codeigniter for absoulate beginners', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Edounix', 'Packt', '198', 2, 1, 'http://localhost/e-bookshop/uploads/image/V10586_low.png', '2019-03-14 20:31:23'),
(25, 'A Curve in the Road', 'From USA Today bestselling author Julianne MacLean comes a suspenseful, emotionally charged novel that explores the secrets and hidden truths within a seemingly perfect marriage.\r\n\r\nAbbie MacIntyre is living the dream in the picturesque Nova Scotia town she calls home. She is a successful surgeon, is married to a handsome cardiologist, and has a model teenage son who is only months away from going off to college.\r\n\r\nBut then one fateful night, everything changes. When a drunk driver hits her car, Abbie is rushed to the hospital. She survives, but the accident forces unimaginable secrets out into the open and plagues Abbie with nightmares so vivid that she starts to question her grip on reality. Her perfect life begins to crack, and those cracks threaten to shatter her world completely.\r\n\r\nThe search for answers will test her strength in every way—as a wife, a career woman, and a mother—but it may also open the door for Abbie to move forward, beyond anger and heartbreak, to find out what she is truly made of. In learning to heal and trust again, she may just find new hope in the spaces left behind.\r\n\r\nBook club discussion questions are included in the book.', 'Julianne MacLean', 'Kindle', '422', 8, 6, 'http://localhost/e-bookshop/uploads/image/Screenshot_1131.jpg', '2019-03-16 05:34:55'),
(26, 'Confidential', 'From the bestselling author of Neighborly comes a twisty novel of psychological suspense about the lies three women tell to survive, and the ones they’d kill to keep hidden.\r\n\r\nEveryone loves therapist Michael Baylor. He’s handsome. He’s respected. And he’s provided a safe place for his female patients. Now he’s dead, and a detective is casting a tight net for the murderer—because the good doctor may have done some very bad things with the women who trusted him. That’s if their stories check out.\r\n\r\nThere’s Lucinda, who struggled to process her childhood trauma even as she was falling in love with Dr. Baylor. Greer, an accomplished career woman who was torn by her sudden desire to have children, so she went to Dr. Baylor for help but may have gotten more than she bargained for. And then there’s Flora, a beautiful former patient who’d been on intimate terms with the man she called Dr. Michael for two years. Some might even say she was obsessed with him.\r\n\r\nThree women caught in a tangled web of lies and secrets. And each with a motive for murder. With so much at stake, can any of them be trusted to tell the truth?', 'Ellie Monago', 'Kindle Edition', '320', 5, 6, 'http://localhost/e-bookshop/uploads/image/Screenshot_114.jpg', '2019-03-16 06:14:14'),
(27, 'Faking Forever', 'From New York Times bestselling author Catherine Bybee comes a new First Wives novel about wanting a family…and finding love.\r\n\r\nShannon Wentworth’s biological clock is ticking, and she isn’t going to let her single status keep her from having a baby. When her wedding-photography business takes her to Mexico, she has every intention of finding a willing baby daddy to help her out. Until the bride goes AWOL, leaving Shannon to coddle the arrogant fiancé who has accused her of sabotaging his wedding.\r\n\r\nVictor Brooks never could have imagined that he’d be on a honeymoon for one. Only here he is, taking a hard look at his life after the younger women he thought he loved walked out. The woman who volunteers to help him reflect is the last person he expects to be attracted to. Between the tequila, the sun, and one earth-shattering kiss, Victor finds Shannon a distraction too sexy to ignore.\r\n\r\nThey strike a deal: wait three months, cool off, and see if their tropical beach attraction is worth taking up when they go back home. Unfortunately, that’s just enough time for the past to come calling. All their best-laid plans are at risk. So is the last thing Shannon expected to matter the most: her heart.', 'Catherine Bybee', 'Kindle Edition', '398', 2, 6, 'http://localhost/e-bookshop/uploads/image/Screenshot_115.jpg', '2019-03-16 06:37:01'),
(28, 'The Orphan Sisters An utterly heartbreaking and gripping World War 2 historical novel', '‘I was gripped from the very first page… It was heartbreaking… I smiled through these happy times with them but also shed tears… I could not put it down… Will undoubtedly pull at your heart-strings. Just make sure you have a box of tissues ready!’ Stardust Book Reviews, 5 stars\r\n\r\nA heartbreaking, unputdownable and utterly unforgettable story of two young sisters cruelly abandoned by their mother at an orphanage. Fans of Wives of War, Lisa Wingate and Diney Costeloe will lose their hearts to this stunning World War Two novel. \r\n\r\n1929: Four-year-old Etty and eight-year-old Dorothy are abandoned at Blakely Hall orphanage by their mother, never to see her again. With no other family to speak of, the sisters worship their beloved mam – and they are confused and heartbroken to be deserted by her when they need her the most.\r\n\r\n1940: Etty and Dorothy are finally released from the confines of Blakely Hall – but their freedom comes when the country is in the grip of World War Two and its terrors. Amidst a devastating backdrop of screaming air-raid sirens and cold nights huddled in shelters, the sisters are desperate to put their broken childhoods behind them.\r\n\r\nBut trouble lies ahead. Dorothy must bid goodbye to her beloved husband when he’s sent to war and Etty must nurse a broken heart as she falls in love with the one man she can never be with.\r\n\r\nEtty and Dorothy survived the orphanage with the help of one another and neither sister can forget the awful betrayal of their mother, which has haunted them their whole lives. But when a shocking secret about their painful childhood comes to light, will the sisters ever be the same again?', 'Shirley Dickson', 'Kindle Edition', '200', 2, 6, 'http://localhost/e-bookshop/uploads/image/Screenshot_116.jpg', '2019-03-16 18:53:44'),
(29, 'Computer Science Distilled Learn the Art of Solving Computational Problems', 'A walkthrough of computer science concepts you must know. Designed for readers who don\'t care for academic formalities, it\'s a fast and easy computer science guide. It teaches the foundations you need to program computers effectively. After a simple introduction to discrete math, it presents common algorithms and data structures. It also outlines the principles that make computers and programming languages work.', 'Wladston Ferreira Filho', 'Raimondo Pictet', '260', 8, 1, 'http://localhost/e-bookshop/uploads/image/Screenshot_117.jpg', '2019-03-17 04:44:39'),
(30, 'The Self-Taught Programmer : The Definitive Guide to Programming Professionally', 'I am a self-taught programmer. After a year of self-study, I learned to program well enough to land a job as a software engineer II at eBay. Once I got there, I realized I was severely under-prepared. I was overwhelmed by the amount of things I needed to know but hadn&amp;#039;t learned yet. My journey learning to program, and my experience at my first job as a software engineer were the inspiration for this book. \r\n\r\nThis book is not just about learning to program; although you will learn to code. If you want to program professionally, it is not enough to learn to code; that is why, in addition to helping you learn to program, I also cover the rest of the things you need to know to program professionally that classes and books don&amp;#039;t teach you. &amp;quot;The Self-taught Programmer&amp;quot; is a roadmap, a guide to take you from writing your first Python program, to passing your first technical interview. I divided the book into five sections: \r\n\r\n1. Learn to program in Python 3 and build your first program. \r\n2. Learn Object-oriented programming and create a powerful Python program to get you hooked. \r\n3. Learn to use tools like Git, Bash, regular expressions and databases. Then use your new coding skills to build a web scraper. \r\n4. Study Computer Science fundamentals like data structures and algorithms.\r\n5. Finish with tips for working with a team and landing a programming job. \r\n\r\nYou CAN learn to program professionally. The path is there. Will you take it?', 'Cory Althoff', 'Kindle Edition', '180', 12, 1, 'http://localhost/e-bookshop/uploads/image/Screenshot_118.jpg', '2019-03-17 05:01:18'),
(31, 'Data Structures and Algorithms Made Easy: Data Structures and Algorithmic Puzzles', '\"Data Structures And Algorithms Made Easy: Data Structures and Algorithmic Puzzles\" is a book that offers solutions to complex data structures and algorithms. There are multiple solutions for each problem and the book is coded in C/C++, it comes handy as an interview and exam guide for computer scientists.\r\n\r\nA handy guide of sorts for any computer science professional, Data Structures And Algorithms Made Easy: Data Structures and Algorithmic Puzzles is a solution bank for various complex problems related to data structures and algorithms. It can be used as a reference manual by those readers in the computer science industry. This book serves as guide to prepare for interviews, exams, and campus work. In short, this book offers solutions to various complex data structures and algorithmic problems', 'Narasimha Karumanchi', 'Kindle Edition', '200', 8, 1, 'http://localhost/e-bookshop/uploads/image/Screenshot_119.jpg', '2019-03-19 09:09:59'),
(32, 'The Power of Habit: Why We Do What We Do in Life and Business', 'In The Power of Habit, award-winning business reporter Charles Duhigg takes us to the thrilling edge of scientific discoveries that explain why habits exist and how they can be changed. Distilling vast amounts of information into engrossing narratives that take us from the boardrooms of Procter &amp;amp; Gamble to the sidelines of the NFL to the front lines of the civil rights movement, Duhigg presents a whole new understanding of human nature and its potential. At its core, The Power of Habit contains an exhilarating argument: The key to exercising regularly, losing weight, being more productive, and achieving success is understanding how habits work. As Duhigg shows, by harnessing this new science, we can transform our businesses, our communities, and our lives.', 'Charles Duhigg', 'Unknown', '349', 15, 5, 'http://localhost/e-bookshop/uploads/image/Screenshot_1201.jpg', '2019-03-20 12:38:15');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `description`) VALUES
(1, 'Computer Science and Engineering', 'All the books from computer science and software engineering, and programming related books.'),
(2, 'Civil Engineering', 'All the books from Civil Engineering and environmental science department'),
(3, 'Machanical engineering', 'All the books from Machanical engineering.'),
(4, 'EEE', 'All the books from Electrical and Electronics Engineering Department.'),
(5, 'BBA', 'All the books from business administration.'),
(6, 'literature', 'All the novels, drama, poems, story books, and any other books of literature.'),
(7, 'Others', 'Other types of books, except these category.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'U',
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `contact`, `email`, `password`, `address`, `city`, `type`, `createdate`) VALUES
(1, 'Tahmid Nishat', '01822597379', 'tahmid.ni7@gmail.com', '$2y$12$dTg8uL7nwgN2HKNE1.K7c.9VvOCBKxmv0bW/KewDDRhAO8FfviuXC', 'Kamarpara', 'Dhaka', 'U', '2019-03-09 04:35:10'),
(7, 'Izaz Mahmud Tahur', '01683302276', 'izaz@gmail.com', '$2y$12$zmX.SQijiuC1oZUCF3ekleOlWnZlFFjfaj6d2XYleydtEbbF8yjPO', 'Maheshkhali', 'Coxs Bazar', 'A', '2019-03-09 04:35:25'),
(9, 'Mr Admin', '01822597379', 'admin@system.com', '$2y$12$ib8I47YZPQwapuxUwUZ3turJjKEx0OxmE9FZ7SWSIKLd3vVrUMNsO', 'Uttara', 'Dhaka', 'A', '2019-03-09 18:22:46'),
(17, 'Tahmid Nishat', '01822597379', 'tahmid@gmail.com', '$2y$12$JappExwfHgkgCjUpMFSV/eUEmxYzA0mW6A6GT4Uz3EElkdZATdNKC', 'Uttara Sector 10 Road 12', 'Dhaka', 'A', '2019-03-12 14:53:55'),
(19, 'MR User', '01683302276', 'user@system.com', '$2y$12$ofrfiQHKQNezH/4V4pwF7enxL89tgItbrERPjapFiGtc015GUQC3.', 'Uttara Sector 10 Road 12', 'Dhaka', 'U', '2019-03-12 17:05:51'),
(20, 'Nishat', '01683302276', 'nishat@gmail.com', '$2y$12$5sTv5IJMiabIrgfxGtHgDu0HPSPS/WBSC/Hq4kdzqGtPortbnG8K6', 'Uttara', 'Dhaka', 'U', '2019-03-12 17:07:17'),
(21, 'Abid Mahmud Abrar', '01683302276', 'abid@gmail.com', '$2y$12$NAnDI/6uPQPtwitJ7K4dvu.1VoCKoYhyGJ7nnUPaoztp3RvwvjGEu', 'Maheshkhali', 'Coxs Bazar', 'U', '2019-03-14 04:35:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
