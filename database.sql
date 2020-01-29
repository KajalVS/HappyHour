-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 16, 2019 at 05:54 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `HappyHour`
--

-- --------------------------------------------------------

--
-- Table structure for table `CustomerAddsFavourite`
--

CREATE TABLE `CustomerAddsFavourite` (
                                      `CustomerUID` int(10) NOT NULL,
                                      `FavouriteRID` int(10) NOT NULL
                                      ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `CustomerAddsFavourite`
--

INSERT INTO `CustomerAddsFavourite` (`CustomerUID`, `FavouriteRID`) VALUES
(2, 1),
(5, 2),
(6, 3),
(2, 4),
(5, 5),
(6, 6),
(2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `CustomerReviews`
--

CREATE TABLE `CustomerReviews` (
                                `CR_ID` int(11) NOT NULL,
                                `CustomerUID` int(10) NOT NULL,
                                `RestaurantID` int(10) NOT NULL,
                                `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                                `Comment` text COLLATE utf8_bin NOT NULL
                                ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `CustomerReviews`
--

INSERT INTO `CustomerReviews` (`CR_ID`, `CustomerUID`, `RestaurantID`, `Date`, `Comment`) VALUES
(1, 2, 1, '2019-03-15 06:00:00', 'Best food ever!'),
(2, 2, 2, '2019-02-27 07:00:00', 'Yummy, would recommend!'),
(3, 5, 3, '2019-03-21 06:00:00', 'Good food!'),
(4, 5, 4, '2019-03-15 06:00:00', 'Yum!'),
(5, 6, 5, '2019-01-31 07:00:00', 'Go there for the beer!'),
(6, 7, 6, '2019-01-16 07:00:00', 'Try the burger!'),
(7, 8, 7, '2019-01-04 07:00:00', 'Yummy!!!'),
(8, 9, 1, '2019-03-14 06:00:00', 'Best deals!!'),
(9, 10, 2, '2019-03-19 06:00:00', 'Love the Pigeon Hole!'),
(10, 11, 3, '2019-02-27 07:00:00', 'Has such good beer!!'),
(11, 12, 4, '2019-03-03 07:00:00', 'Would Recommend!!'),
(12, 13, 5, '2019-02-07 07:00:00', 'Best beeeeer !!'),
(13, 13, 6, '2019-01-07 07:00:00', 'BEST FOOD'),
(14, 14, 7, '2019-03-10 07:00:00', 'Has fun nights!!'),
(15, 15, 1, '2019-01-15 07:00:00', 'Good atmosphere'),
(16, 15, 2, '2019-01-19 07:00:00', 'Love this place!');

-- --------------------------------------------------------

--
-- Table structure for table `ManageRestaurant`
--

CREATE TABLE `ManageRestaurant` (
                                 `ManagerUID` int(10) NOT NULL,
                                 `RestaurantID` int(10) NOT NULL
                                 ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ManageRestaurant`
--

INSERT INTO `ManageRestaurant` (`ManagerUID`, `RestaurantID`) VALUES
(9, 3),
(7, 4),
(8, 6);

-- --------------------------------------------------------

--
-- Table structure for table `ManageTags`
--

CREATE TABLE `ManageTags` (
                           `AdminUID` int(10) NOT NULL,
                           `TagID` int(11) NOT NULL
                           ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ManageTags`
--

INSERT INTO `ManageTags` (`AdminUID`, `TagID`) VALUES
(3, 2),
(4, 3),
(3, 5),
(4, 6),
(3, 8),
(4, 9),
(3, 11),
(4, 12),
(3, 14),
(4, 15),
(3, 17),
(4, 18),
(3, 20),
(4, 21),
(3, 23),
(4, 24),
(3, 26),
(4, 27),
(3, 29),
(4, 30);

-- --------------------------------------------------------

--
-- Table structure for table `ManageUsers`
--

CREATE TABLE `ManageUsers` (
                            `AdminUID` int(11) NOT NULL,
                            `CustomerUID` int(10) NOT NULL
                            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ManageUsers`
--

INSERT INTO `ManageUsers` (`AdminUID`, `CustomerUID`) VALUES
(3, 9),
(3, 10),
(3, 11),
(3, 12),
(3, 13),
(4, 14),
(4, 15);

-- --------------------------------------------------------

--
-- Table structure for table `RegisteredUser`
--

CREATE TABLE `RegisteredUser` (
                               `UID` int(10) NOT NULL,
                               `Type` enum('Customer','Restaurant Manager','Admin') COLLATE utf8_bin NOT NULL DEFAULT 'Customer',
                               `FirstName` varchar(45) COLLATE utf8_bin NOT NULL,
                               `LastName` varchar(45) COLLATE utf8_bin NOT NULL,
                               `Email` varchar(100) COLLATE utf8_bin NOT NULL,
                               `isEmailConfirmed` tinyint(4) NOT NULL,
                               `token` varchar(10) COLLATE utf8_bin NOT NULL,
                               `Password` varchar(70) COLLATE utf8_bin NOT NULL,
                               `VerificationPoints` int(11) NOT NULL
                               ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `RegisteredUser`
--

INSERT INTO `RegisteredUser` (`UID`, `Type`, `FirstName`, `LastName`, `Email`, `isEmailConfirmed`, `token`, `Password`, `VerificationPoints`) VALUES
(2, 'Customer', 'Peter', 'Macoun', 'pete@gmail.com', 0, '', 'dog', 6),
(3, 'Admin', 'Kajal', 'Verikaya', 'kajal@hotmail.com', 0, '', 'dog', 1),
(4, 'Admin', 'Meghan', 'McGee', 'meghan@icloud.com', 0, '', 'dog', 1),
(5, 'Customer', 'Monika', 'Wal', 'monika@gmail.com', 0, '', 'dog', 1),
(6, 'Customer', 'Eli', 'Ashdown', 'eli@telus.net', 0, '', 'dog', 1),
(7, 'Restaurant Manager', 'Mike', 'Doe', 'mike@cannibale.ca', 0, '', 'dog', 1),
(8, 'Restaurant Manager', 'Stephen', 'Doe', 'stephen@pigandduke.ca', 0, '', 'dog', 1),
(9, 'Restaurant Manager', 'Dan', 'Barnlund', 'danbarnlund@worldbierhaus.com', 0, '', 'dog', 1),
(10, 'Customer', 'Melissa', 'Kish', 'melissa@gmail.com', 0, '', 'dog', 1),
(11, 'Customer', 'Jordan', 'Fish', 'jordan@icloud.com', 0, '', 'dog', 5),
(12, 'Customer', 'Amanda', 'Miller', 'amanda@gmail.com', 0, '', 'dog', 1),
(13, 'Customer', 'Maranda', 'Rosko', 'maranda@gmail.com', 0, '', 'dog', 1),
(14, 'Customer', 'Sara', 'Murray', 'sara_murray@gmail.com', 0, '', 'dog', 4),
(15, 'Customer', 'Danielle', 'Kayla', 'danielle@gmail.com', 0, '', 'dog', 1),
(18, 'Customer', 'Bob', 'Billy', 'bob@billy.com', 0, '', 'dog', 0),
(19, 'Restaurant Manager', 'Maya', 'Miller', 'maya.miller567@gmail.com', 1, 'wAu(K1p$qN', 'dog', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Restaurant`
--

CREATE TABLE `Restaurant` (
                           `RID` int(10) NOT NULL,
                           `Name` varchar(100) COLLATE utf8_bin NOT NULL,
                           `Location` varchar(300) COLLATE utf8_bin NOT NULL,
                           `PhoneNumber` varchar(10) COLLATE utf8_bin NOT NULL,
                           `Email` varchar(100) COLLATE utf8_bin DEFAULT NULL
                           ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `Restaurant`
--

INSERT INTO `Restaurant` (`RID`, `Name`, `Location`, `PhoneNumber`, `Email`) VALUES
(1, 'Earls Calgary Tin Palace', '2401 4th Street, Calgary AB', '4032284141', NULL),
(2, 'PigeonHole', '306 17 Ave SW, Calgary, AB', '4034524694', 'info@pigeonhole.com'),
(3, '1410 Bier Haus', '1410 17 Ave SW, Calgary, AB', '4032291410', 'danbarnlund@worldbierhaus.com'),
(4, 'Cannibale', '831 1 Ave NE, Calgary, AB', '4034545808', 'mike@cannibale.ca'),
(5, 'Last Best Brewing & Distilling', '607 11 Ave SW, Calgary, AB', '5873537387', NULL),
(6, 'The Pig & Duke', '1312 12 Ave SW, Calgary, AB', '4032458487', 'stephen@pigandduke.ca'),
(7, 'Ship & Anchor', '534 17 Ave SW, Calgary, AB', '4032453333', 'mgr@shipandanchor.com'),
(8, 'Mcdons', '123 Yummy Drivee Calgary Ab T2G1G1', '12345678', 'ronny@mcds.com');

-- --------------------------------------------------------

--
-- Table structure for table `RestaurantHours`
--

CREATE TABLE `RestaurantHours` (
                                `RestaurantID` int(10) NOT NULL,
                                `WeekDay` varchar(45) COLLATE utf8_bin NOT NULL,
                                `StartTime` varchar(20) COLLATE utf8_bin NOT NULL,
                                `EndTime` varchar(20) COLLATE utf8_bin NOT NULL
                                ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `RestaurantHours`
--

INSERT INTO `RestaurantHours` (`RestaurantID`, `WeekDay`, `StartTime`, `EndTime`) VALUES
(1, 'Friday', '11:00 AM', '2:00 AM'),
(1, 'Monday', '11:00 AM', 'Midnight'),
(1, 'Saturday', '11:00 AM', '2:00 AM'),
(1, 'Sunday', '10:00 AM', 'Midnight'),
(1, 'Thursday', '11:00 AM', '1:00 AM'),
(1, 'Tuesday', '11:00 AM', 'Midnight'),
(1, 'Wednesday', '11:00 AM', '1:00 AM'),
(2, 'Friday', '5:00 PM', 'Late'),
(2, 'Monday', '5:00 PM', 'Late'),
(2, 'Saturday', '5:00 PM', 'Late'),
(2, 'Sunday', 'Closed', 'Closed'),
(2, 'Thursday', '5:00 PM', 'Late'),
(2, 'Tuesday', '5:00 PM', 'Late'),
(2, 'Wednesday', '5:00 PM', 'Late'),
(3, 'Friday', '11:00 AM', '2:00 AM'),
(3, 'Monday', '11:00 AM', '1:00 AM'),
(3, 'Saturday', '10:00 AM', '2:00 AM'),
(3, 'Sunday', '10:00 AM', '1:00 AM'),
(3, 'Thursday', '11:00 AM', '2:00 AM'),
(3, 'Tuesday', '11:00 AM', '1:00 AM'),
(3, 'Wednesday', '11:00 AM', '1:00 AM'),
(4, 'Friday', '12:00 PM', '2:00 AM'),
(4, 'Monday', '4:00 PM', '12:00 AM'),
(4, 'Saturday', '12:00 PM', '2:00 AM'),
(4, 'Sunday', '4:00 PM', '12:00 AM'),
(4, 'Thursday', '4:00 PM', '12:00 AM'),
(4, 'Tuesday', '4:00 PM', '12:00 AM'),
(4, 'Wednesday', '4:00 PM', '12:00 AM'),
(5, 'Friday', '11:30 AM', '2:00 AM'),
(5, 'Monday', '11:30 AM', '12:00 AM'),
(5, 'Saturday', '11:30 AM', '2:00 AM'),
(5, 'Sunday', '10:00 AM', '12:00 AM'),
(5, 'Thursday', '11:30 AM', '12:00 AM'),
(5, 'Tuesday', '11:30 AM', '12:00 AM'),
(5, 'Wednesday', '11:30 AM', '12:00 AM'),
(6, 'Friday', '11:00 AM', '2:00 AM'),
(6, 'Monday', '11:00 AM', '1:00 AM'),
(6, 'Saturday', '10:00 AM', '2:00 AM'),
(6, 'Sunday', '10:00 AM', '1:00 AM'),
(6, 'Thursday', '11:00 AM', '1:00 AM'),
(6, 'Tuesday', '11:00 AM', '1:00 AM'),
(6, 'Wednesday', '11:00 AM', '1:00 AM'),
(7, 'Friday', '11:00 AM', '2:00 AM'),
(7, 'Monday', '11:00 AM', '2:00 AM'),
(7, 'Saturday', '11:00 AM', '2:00 AM'),
(7, 'Sunday', '10:00 AM', '2:00 AM'),
(7, 'Thursday', '11:00 AM', '2:00 AM'),
(7, 'Tuesday', '11:00 AM', '2:00 AM'),
(7, 'Wednesday', '11:00 AM', '2:00 AM');

-- --------------------------------------------------------

--
-- Table structure for table `RestaurantSocialMedia`
--

CREATE TABLE `RestaurantSocialMedia` (
                                      `RestaurantID` int(10) NOT NULL,
                                      `SocialMedia` varchar(300) COLLATE utf8_bin NOT NULL
                                      ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `RestaurantSocialMedia`
--

INSERT INTO `RestaurantSocialMedia` (`RestaurantID`, `SocialMedia`) VALUES
(1, 'https://www.facebook.com/earlsrestaurants'),
(1, 'https://www.instagram.com/earlsrestaurant/#'),
(2, 'https://twitter.com/pigeonholeycc'),
(2, 'https://www.instagram.com/pigeonholeyyc/'),
(3, 'https://twitter.com/Worldbierhaus'),
(3, 'https://www.facebook.com/1410WorldBierHaus'),
(3, 'https://www.instagram.com/1410worldbierhaus/'),
(4, 'https://twitter.com/cannibale_yyc'),
(4, 'https://www.instagram.com/cannibale_yyc/'),
(5, 'https://twitter.com/lastbestbrew?lang=en'),
(5, 'https://www.facebook.com/lastbestbrew/'),
(5, 'https://www.instagram.com/lastbestbrew/'),
(6, 'https://twitter.com/PigandDuke'),
(6, 'https://www.facebook.com/PigandDuke'),
(6, 'https://www.instagram.com/pigandduke12th/'),
(6, 'https://www.instagram.com/piganddukedowntown/'),
(7, 'https://twitter.com/Ship_and_Anchor');

-- --------------------------------------------------------

--
-- Table structure for table `Special`
--

CREATE TABLE `Special` (
                        `Name` varchar(400) COLLATE utf8_bin NOT NULL,
                        `RestaurantID` int(10) NOT NULL,
                        `Price` decimal(10,0) NOT NULL,
                        `Description` text COLLATE utf8_bin NOT NULL,
                        `Verified_Status` int(11) NOT NULL DEFAULT '0'
                        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `Special`
--

INSERT INTO `Special` (`Name`, `RestaurantID`, `Price`, `Description`, `Verified_Status`) VALUES
('$1/oz vino', 4, '1', 'Aperativo Monday', 1),
('$5.50 lb Wings', 6, '6', 'house rub, hot, dry hot, s & p, honey garlic, chipotle bbq, sriracha chili, gangnam style, wasabi ranch, parmesan truffle, jalapeño honey butter, greek rub, teriyaki ', 1),
('8\" Margherita Pizza', 1, '4', 'House tomato sauce, salted mozzarella, chiffonade basil', 1),
('Absolut & Stoli Flavoured Vodka', 3, '6', '1 oz', 1),
('Alberta Fried Chicken Wings', 5, '11', 'breaded, choice of Korean barbecue | Frank’s | sea salt, black pepper & lemon zest | 3 chili rub & lime | celery sticks, blue cheese dip', 1),
('All Flavoured Vodka', 6, '6', 'Vodka', 1),
('All dressed popcorn', 5, '4', 'Popcorn', 1),
('Beef Fat Fries', 5, '7', 'Fries', 1),
('Beer', 5, '5', '16 oz beer', 1),
('Buffalo Cauliflower', 1, '8', 'Tender cauliflower, buffalo sauce, ranch dip', 1),
('Caesars', 6, '6', 'Original Ceasars', 1),
('Chef\'s Weekly Pizza Feature', 7, '14', 'Weekly pizza special!', 1),
('Chicken Bites', 6, '6', '$6 per order', 1),
('Chix & Waffle', 3, '10', 'hand-breaded buttermilk fried popcorn chicken, Belgium waffle bowl, warm maple syrup, Sriacha aioli, spring onion', 1),
('Classic Burger', 6, '10', '6oz patty, pickle, cheddar, lto', 1),
('Cocktails', 5, '5', '1 oz', 1),
('Cono Sur', 3, '25', '1/2 Bottle Sparkling Rose - 750 mL', 1),
('Double Highballs', 6, '9', 'Highballs', 1),
('Feature Sweet', 7, '5', 'Weekly dessert special!', 1),
('Fries', 1, '4', 'Yukon gold fries', 1),
('Frog Legs', 6, '7', '$7 per order', 1),
('Garlic Fries', 1, '4', 'Tossed with fresh garlic and parsley, with creamy grana padano parmesan dip', 1),
('Grilled Bison Fry Bread', 5, '11', 'pickled Saskatoon berries, guacamole, cilantro, queso fresco cheese, bone marrow crema', 1),
('Hacker Pschorr Munich Gold', 3, '8', '20 oz', 1),
('Haus Cocktails', 3, '6', '1 oz', 1),
('Haus Red', 3, '23', '1/2 Bottle Cabernet Sauvignon - 750 mL', 1),
('Haus White', 3, '23', '1/2 Bottle Sauvignon Blanc - 750 mL', 1),
('Haus Wine', 3, '5', '6 oz', 1),
('Hawaiian Coconut Prawns', 1, '10', 'Crispy coconut crusted prawns, curry lime aioli', 1),
('Highballs', 5, '5', '1 oz spirit', 1),
('Hollas', 5, '2', '9 oz beer', 1),
('Holy Grale', 3, '4', 'Crushable Amber Ale | 5.0% | 16 oz', 1),
('House Wine', 6, '7', 'Please see in restaurant', 1),
('Italian cocktails', 4, '10', 'Aperativo Monday', 1),
('Kronenbourg Blanc', 3, '8', '20 oz', 1),
('La Marca', 3, '28', '1/2 Bottle Prosecco - 750 mL', 1),
('Leroy\'s Crispy Ribs', 1, '8', 'Earls famous dry ribs, savoury and seasoned with coarse salt and black pepper', 1),
('Local Craft Pints', 6, '7', 'Including Village Blonde, Village Wit, Annex Seasonal, Last Best Ipa', 1),
('Local Draft ', 3, '4', '16 oz', 1),
('Margherita Pizza', 3, '7', 'margherita pizza', 1),
('Mimosas', 6, '7', 'Orange Juice and Champange', 1),
('Mousse Cake', 3, '4', 'Lindor milk chocolate, almond crust,\nwhipped cream, berry compote', 1),
('North American Tall Cans', 6, '7', 'Tall Cans', 1),
('One Piece Fish N\' Chips with Slaw', 6, '10', 'Cow killa crushable amber beer battered cod, truffle parm chips, apple slaw, lemon, tartar sauce ', 1),
('Parmesan Fries with Truffle Mayo', 3, '4', 'parmesan fries with honey truffle aioli', 1),
('Pints Schofferhofer Grapefruit Lager', 6, '7', 'From germany', 1),
('Pints of Bavaria', 6, '7', 'From netherlands', 1),
('Pints of Phillips', 6, '7', 'Phillps Blue Buck Ale & Phillips Solaris White Peach Ale', 1),
('Pints of Toolshed', 6, '7', 'Tool shed cow killa crushable amber, tool shed people skills cream ale, tool shed red rage', 1),
('Pints of Village', 6, '7', 'Village Blonde, Village Wit, Village Cider', 1),
('Poke Tower', 3, '11', 'giner sesame marinated ahi tuna, mango, edamame beans, avocado, togarashi, sambal aioli, micro cilantro, sweet soy glaze, wonton chips', 1),
('Poutine', 5, '10', 'bacon gravy, fries, Sylvan Star cheese curds, crispy pig’s ear, sour cream, chives\nadd slow cooked egg 2', 1),
('Rio Grande Toast', 3, '7', 'smashed-to-order avocado, pico de gallo, chipotle feta,\nValentina, toasted ciabatta, micro cilantro', 1),
('Royal Lager Pints', 6, '7', 'Kelowna, BC', 1),
('Sabroso Nachos', 3, '9', 'cheddar, mozza, pico do gall, fresh jalapeno, Valentina lime crema, green onion, corn tortilla chips', 1),
('Shot of the day', 7, '5', 'Come in to see the feature!', 1),
('Somersby', 3, '8', '20 oz', 1),
('Soup of the Day', 7, '5', 'Come in to see the feature soup!', 1),
('Standard', 5, '5', '18 oz beer', 1),
('Steins of Hacker-Psschorr Gold Lager', 6, '12', 'From germany', 1),
('Street Chicken Tacos', 1, '6', 'Flour tortillas, white cheddar, cabbage, jalapeno crema, slow roasted achiote chicken, cilantro, fresh cut salsa', 1),
('Tall cans of Peroni', 4, '8', 'Aperativo Monday', 1),
('The Great Canadian Brunch', 6, '12', '2 eggs any style, hash browns, 2pc bacon or sausage,\n2pc marble rye or white toast, tomato slices,\norange wedge', 1),
('Tiki Cocktails', 4, '12', 'Tiki Tuesdays', 1),
('Two Pulled Pork Tacos', 6, '6', 'apple slaw, salsa verde, on a flour tortilla ', 1),
('Up & Down Burger', 3, '7', 'hand-pressed CAB chuck patty, American cheese, drunken BBQ onions,\nburger sauce, iceberg, tomato, pickle, tuxedo brioche', 1),
('Warm Spinach + Three Cheese Dip', 1, '10', 'A creamy blend of three cheeses and artichoke with a dash of Worcestershire sauce for a punch, topped with fresh chives + crumbled feta', 1),
('Well Highballs', 3, '4', '1 oz', 1),
('Yam Fries', 1, '6', 'With garlic aioli', 1);

-- --------------------------------------------------------

--
-- Table structure for table `SpecialTags`
--

CREATE TABLE `SpecialTags` (
                            `TagID` int(10) NOT NULL,
                            `SpecialName` varchar(400) COLLATE utf8_bin NOT NULL,
                            `RestaurantID` int(10) NOT NULL
                            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `SpecialTags`
--

INSERT INTO `SpecialTags` (`TagID`, `SpecialName`, `RestaurantID`) VALUES
(11, 'Buffalo Cauliflower', 1),
(11, 'Yam Fries', 1),
(16, 'Fries', 1),
(16, 'Garlic Fries', 1),
(16, 'Yam Fries', 1),
(17, 'Fries', 1),
(17, 'Garlic Fries', 1),
(20, 'Leroy\'s Crispy Ribs', 1),
(27, 'Street Chicken Tacos', 1),
(28, 'Street Chicken Tacos', 1),
(29, 'Warm Spinach + Three Cheese Dip', 1),
(30, 'Warm Spinach + Three Cheese Dip', 1),
(32, 'Buffalo Cauliflower', 1),
(33, 'Hawaiian Coconut Prawns', 1),
(34, 'Hawaiian Coconut Prawns', 1),
(35, 'Leroy\'s Crispy Ribs', 1),
(1, 'Up & Down Burger', 3),
(2, 'Margherita Pizza', 3),
(4, 'Hacker Pschorr Munich Gold', 3),
(4, 'Kronenbourg Blanc', 3),
(4, 'Local Draft ', 3),
(5, 'Haus Red', 3),
(5, 'Haus White', 3),
(5, 'Haus Wine', 3),
(5, 'La Marca', 3),
(10, 'Holy Grale', 3),
(14, 'Cono Sur', 3),
(14, 'Haus Red', 3),
(14, 'Haus White', 3),
(14, 'Haus Wine', 3),
(14, 'La Marca', 3),
(15, 'Margherita Pizza', 3),
(16, 'Parmesan Fries with Truffle Mayo', 3),
(18, 'Haus Red', 3),
(19, 'Haus White', 3),
(21, 'Sabroso Nachos', 3),
(22, 'Sabroso Nachos', 3),
(24, 'Haus Cocktails', 3),
(24, 'Holy Grale', 3),
(25, 'Well Highballs', 3),
(26, 'Well Highballs', 3),
(30, 'Parmesan Fries with Truffle Mayo', 3),
(31, 'Cono Sur', 3),
(31, 'Hacker Pschorr Munich Gold', 3),
(31, 'Haus Cocktails', 3),
(31, 'Kronenbourg Blanc', 3),
(31, 'Local Draft ', 3),
(31, 'Somersby', 3),
(31, 'Well Highballs', 3),
(36, 'Absolut & Stoli Flavoured Vodka', 3),
(37, 'Absolut & Stoli Flavoured Vodka', 3),
(39, 'Chix & Waffle', 3),
(40, 'Chix & Waffle', 3),
(41, 'Cono Sur', 3),
(42, 'Mousse Cake', 3),
(43, 'Mousse Cake', 3),
(44, 'Poke Tower', 3),
(45, 'Poke Tower', 3),
(46, 'Rio Grande Toast', 3),
(47, 'Somersby', 3),
(4, 'Tall cans of Peroni', 4),
(5, '$1/oz vino', 4),
(14, '$1/oz vino', 4),
(24, 'Italian cocktails', 4),
(24, 'Tiki Cocktails', 4),
(31, '$1/oz vino', 4),
(31, 'Italian cocktails', 4),
(31, 'Tall cans of Peroni', 4),
(31, 'Tiki Cocktails', 4),
(4, 'Beer', 5),
(12, 'Alberta Fried Chicken Wings', 5),
(16, 'Beef Fat Fries', 5),
(16, 'Poutine', 5),
(24, 'Cocktails', 5),
(25, 'Highballs', 5),
(26, 'Highballs', 5),
(31, 'Beer', 5),
(31, 'Cocktails', 5),
(31, 'Hollas', 5),
(31, 'Standard', 5),
(40, 'Alberta Fried Chicken Wings', 5),
(48, 'All dressed popcorn', 5),
(49, 'Grilled Bison Fry Bread', 5),
(50, 'Poutine', 5),
(1, 'Classic Burger', 6),
(4, 'Local Craft Pints', 6),
(4, 'North American Tall Cans', 6),
(4, 'Pints Schofferhofer Grapefruit Lager', 6),
(4, 'Pints of Bavaria', 6),
(4, 'Pints of Phillips', 6),
(4, 'Pints of Toolshed', 6),
(4, 'Pints of Village', 6),
(4, 'Royal Lager Pints', 6),
(4, 'Steins of Hacker-Psschorr Gold Lager', 6),
(5, 'House Wine', 6),
(7, 'Classic Burger', 6),
(12, '$5.50 lb Wings', 6),
(13, '$5.50 lb Wings', 6),
(14, 'House Wine', 6),
(24, 'Mimosas', 6),
(25, 'Double Highballs', 6),
(26, 'Double Highballs', 6),
(27, 'Two Pulled Pork Tacos', 6),
(28, 'Two Pulled Pork Tacos', 6),
(31, 'All Flavoured Vodka', 6),
(31, 'Caesars', 6),
(31, 'Double Highballs', 6),
(31, 'House Wine', 6),
(31, 'Mimosas', 6),
(36, 'All Flavoured Vodka', 6),
(37, 'All Flavoured Vodka', 6),
(40, 'Chicken Bites', 6),
(44, 'One Piece Fish N\' Chips with Slaw', 6),
(51, 'Caesars', 6),
(52, 'Frog Legs', 6),
(53, 'Local Craft Pints', 6),
(53, 'Pints Schofferhofer Grapefruit Lager', 6),
(53, 'Pints of Bavaria', 6),
(53, 'Pints of Phillips', 6),
(53, 'Pints of Toolshed', 6),
(53, 'Pints of Village', 6),
(53, 'Royal Lager Pints', 6),
(54, 'Mimosas', 6),
(55, 'One Piece Fish N\' Chips with Slaw', 6),
(56, 'One Piece Fish N\' Chips with Slaw', 6),
(57, 'The Great Canadian Brunch', 6),
(58, 'The Great Canadian Brunch', 6),
(2, 'Chef\'s Weekly Pizza Feature', 7),
(32, 'Shot of the day', 7),
(37, 'Shot of the day', 7),
(43, 'Feature Sweet', 7),
(59, 'Soup of the Day', 7);

-- --------------------------------------------------------

--
-- Table structure for table `SpecialTimes`
--

CREATE TABLE `SpecialTimes` (
                             `SpecialName` varchar(400) COLLATE utf8_bin NOT NULL,
                             `RestaurantID` int(10) NOT NULL,
                             `StartTime` varchar(20) COLLATE utf8_bin NOT NULL,
                             `EndTime` varchar(20) COLLATE utf8_bin NOT NULL,
                             `Weekday` varchar(45) COLLATE utf8_bin NOT NULL
                             ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `SpecialTimes`
--

INSERT INTO `SpecialTimes` (`SpecialName`, `RestaurantID`, `StartTime`, `EndTime`, `Weekday`) VALUES
('Buffalo Cauliflower', 1, '3:00 PM', '6:00 PM', 'Everyday'),
('Buffalo Cauliflower', 1, '9:00 PM', 'Close', 'Everyday'),
('Fries', 1, '3:00 PM', '6:00 PM', 'Everyday'),
('Fries', 1, '9:00 PM', 'Close', 'Everyday'),
('Garlic Fries', 1, '3:00 PM', '6:00 PM', 'Everyday'),
('Garlic Fries', 1, '9:00 PM', 'Close', 'Everyday'),
('Hawaiian Coconut Prawns', 1, '3:00 PM', '6:00 PM', 'Everyday'),
('Hawaiian Coconut Prawns', 1, '9:00 PM', 'Close', 'Everyday'),
('Leroy\'s Crispy Ribs', 1, '3:00 PM', '6:00 PM', 'Everyday'),
('Leroy\'s Crispy Ribs', 1, '9:00 PM', 'Close', 'Everyday'),
('Street Chicken Tacos', 1, '3:00 PM', '6:00 PM', 'Everyday'),
('Street Chicken Tacos', 1, '9:00 PM', 'Close', 'Everyday'),
('Warm Spinach + Three Cheese Dip', 1, '3:00 PM', '6:00 PM', 'Everyday'),
('Warm Spinach + Three Cheese Dip', 1, '9:00 PM', 'Close', 'Everyday'),
('Yam Fries', 1, '3:00 PM', '6:00 PM', 'Everyday'),
('Yam Fries', 1, '9:00 PM', 'Close', 'Everyday'),
('Absolut & Stoli Flavoured Vodka', 3, '3:00 PM', '6:00 PM', 'Everyday'),
('Absolut & Stoli Flavoured Vodka', 3, '9:00 PM', 'Close', 'Everyday'),
('Chix & Waffle', 3, '3:00 PM', '6:00 PM', 'Everyday'),
('Chix & Waffle', 3, '9:00 PM', 'Close', 'Everyday'),
('Cono Sur', 3, '3:00 PM', '6:00 PM', 'Everyday'),
('Cono Sur', 3, '9:00 PM', 'Close', 'Everyday'),
('Hacker Pschorr Munich Gold', 3, '3:00 PM', '6:00 PM', 'Everyday'),
('Hacker Pschorr Munich Gold', 3, '9:00 PM', 'Close', 'Everyday'),
('Haus Cocktails', 3, '3:00 PM', '6:00 PM', 'Everyday'),
('Haus Cocktails', 3, '9:00 PM', 'Close', 'Everyday'),
('Haus Red', 3, '3:00 PM', '6:00 PM', 'Everyday'),
('Haus Red', 3, '9:00 PM', 'Close', 'Everyday'),
('Haus White', 3, '3:00 PM', '6:00 PM', 'Everyday'),
('Haus White', 3, '9:00 PM', 'Close', 'Everyday'),
('Haus Wine', 3, '3:00 PM', '6:00 PM', 'Everyday'),
('Haus Wine', 3, '9:00 PM', 'Close', 'Everyday'),
('Holy Grale', 3, '3:00 PM', '6:00 PM', 'Everyday'),
('Holy Grale', 3, '9:00 PM', 'Close', 'Everyday'),
('Kronenbourg Blanc', 3, '3:00 PM', '6:00 PM', 'Everyday'),
('Kronenbourg Blanc', 3, '9:00 PM', 'Close', 'Everyday'),
('La Marca', 3, '3:00 PM', '6:00 PM', 'Everyday'),
('La Marca', 3, '9:00 PM', 'Close', 'Everyday'),
('Local Draft ', 3, '3:00 PM', '6:00 PM', 'Everyday'),
('Local Draft ', 3, '9:00 PM', 'Close', 'Everyday'),
('Margherita Pizza', 3, '3:00 PM', '6:00 PM', 'Everyday'),
('Margherita Pizza', 3, '9:00 PM', 'Close', 'Everyday'),
('Mousse Cake', 3, '3:00 PM', '6:00 PM', 'Everyday'),
('Mousse Cake', 3, '9:00 PM', 'Close', 'Everyday'),
('Parmesan Fries with Truffle Mayo', 3, '3:00 PM', '6:00 PM', 'Everyday'),
('Parmesan Fries with Truffle Mayo', 3, '9:00 PM', 'Close', 'Everyday'),
('Poke Tower', 3, '3:00 PM', '6:00 PM', 'Everyday'),
('Poke Tower', 3, '9:00 PM', 'Close', 'Everyday'),
('Rio Grande Toast', 3, '3:00 PM', '6:00 PM', 'Everyday'),
('Rio Grande Toast', 3, '9:00 PM', 'Close', 'Everyday'),
('Sabroso Nachos', 3, '3:00 PM', '6:00 PM', 'Everyday'),
('Sabroso Nachos', 3, '9:00 PM', 'Close', 'Everyday'),
('Somersby', 3, '3:00 PM', '6:00 PM', 'Everyday'),
('Somersby', 3, '9:00 PM', 'Close', 'Everyday'),
('Up & Down Burger', 3, '3:00 PM', '6:00 PM', 'Everyday'),
('Up & Down Burger', 3, '9:00 PM', 'Close', 'Everyday'),
('Well Highballs', 3, '3:00 PM', '6:00 PM', 'Everyday'),
('Well Highballs', 3, '9:00 PM', 'Close', 'Everyday'),
('$1/oz vino', 4, 'All day', 'All day', 'Monday'),
('Italian cocktails', 4, 'Alld ay', 'All day', 'Monday'),
('Tall cans of Peroni', 4, 'Alld ay', 'All day', 'Monday'),
('Tiki Cocktails', 4, 'Alld ay', 'All day', 'Tuesday'),
('Alberta Fried Chicken Wings', 5, '2:00 PM', '6:00 PM', 'Everyday'),
('All dressed popcorn', 5, '2:00 PM', '6:00 PM', 'Everyday'),
('Beef Fat Fries', 5, '2:00 PM', '6:00 PM', 'Everyday'),
('Beer', 5, '2:00 PM', '6:00 PM', 'Everyday'),
('Cocktails', 5, '2:00 PM', '6:00 PM', 'Everyday'),
('Grilled Bison Fry Bread', 5, '2:00 PM', '6:00 PM', 'Everyday'),
('Highballs', 5, '2:00 PM', '6:00 PM', 'Everyday'),
('Hollas', 5, '2:00 PM', '6:00 PM', 'Everyday'),
('Poutine', 5, '2:00 PM', '6:00 PM', 'Everyday'),
('Standard', 5, '2:00 PM', '6:00 PM', 'Everyday'),
('$5.50 lb Wings', 6, '4:00 PM', 'Close', 'Wednesday'),
('All Flavoured Vodka', 6, '4:00 PM', 'Close', 'Monday'),
('Caesars', 6, '4:00 PM', 'Close', 'Saturday'),
('Chicken Bites', 6, '4:00 PM', 'Close', 'Thursday'),
('Classic Burger', 6, '4:00 PM', 'Close', 'Monday'),
('Classic Burger', 6, '4:00 PM', 'Close', 'Saturday'),
('Double Highballs', 6, '4:00 PM', 'Close', 'Friday'),
('Double Highballs', 6, '4:00 PM', 'Close', 'Saturday'),
('Double Highballs', 6, '4:00 PM', 'Close', 'Sunday'),
('Frog Legs', 6, '4:00 PM', 'Close', 'Wednesday'),
('House Wine', 6, '4:00 PM', 'Close', 'Tuesday'),
('Local Craft Pints', 6, '4:00 PM', 'Close', 'Friday'),
('Local Craft Pints', 6, '4:00 PM', 'Close', 'Saturday'),
('Mimosas', 6, '4:00 PM', 'Close', 'Saturday'),
('Mimosas', 6, '4:00 PM', 'Close', 'Sunday'),
('North American Tall Cans', 6, '4:00 PM', 'Close', 'Monday'),
('One Piece Fish N\' Chips with Slaw', 6, '4:00 PM', 'Close', 'Friday'),
('Pints Schofferhofer Grapefruit Lager', 6, '4:00 PM', 'Close', 'Thursday'),
('Pints of Bavaria', 6, '4:00 PM', 'Close', 'Thursday'),
('Pints of Phillips', 6, '4:00 PM', 'Close', 'Tuesday'),
('Pints of Toolshed', 6, '4:00 PM', 'Close', 'Wednesday'),
('Pints of Village', 6, '4:00 PM', 'Close', 'Sunday'),
('Royal Lager Pints', 6, '4:00 PM', 'Close', 'Sunday'),
('Steins of Hacker-Psschorr Gold Lager', 6, '4:00 PM', 'Close', 'Thursday'),
('The Great Canadian Brunch', 6, '4:00 PM', 'Close', 'Saturday'),
('The Great Canadian Brunch', 6, '4:00 PM', 'Close', 'Sunday'),
('Two Pulled Pork Tacos', 6, '4:00 PM', 'Close', 'Tuesday'),
('Chef\'s Weekly Pizza Feature', 7, 'All day', 'All day', 'Daily'),
('Feature Sweet', 7, 'All day', 'All day', 'Daily'),
('Shot of the day', 7, 'All day', 'All day', 'Daily'),
('Soup of the Day', 7, 'All day', 'All day', 'Daily');

-- --------------------------------------------------------

--
-- Table structure for table `Tags`
--

CREATE TABLE `Tags` (
                     `TagID` int(10) NOT NULL,
                     `TagName` varchar(400) COLLATE utf8_bin NOT NULL
                     ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `Tags`
--

INSERT INTO `Tags` (`TagID`, `TagName`) VALUES
(1, '#burger'),
(2, '#pizza'),
(3, '#cheese'),
(4, '#beer'),
(5, '#wine'),
(6, '#halfbottlewine'),
(7, '#glutenfree'),
(8, '#dairyfree'),
(9, '#vegeterian'),
(10, '#cocktails'),
(11, '#healthy'),
(12, '#wings'),
(13, '#hotwings'),
(14, '#vino'),
(15, '#margheritapizza'),
(16, '#fries'),
(17, '#garlicfries'),
(18, '#redwine'),
(19, '#whitewine'),
(20, '#ribs'),
(21, '#nachos'),
(22, '#nacho'),
(23, '#burgers'),
(24, '#cocktail'),
(25, '#highballs'),
(26, '#highball'),
(27, '#tacos'),
(28, '#taco'),
(29, '#spinach'),
(30, '#dip'),
(31, '#drinks'),
(32, '#cauliflower'),
(33, '#coconut'),
(34, '#prawns'),
(35, '#crispyribs'),
(36, '#vodka'),
(37, '#shots'),
(38, '#lager'),
(39, '#waffle'),
(40, '#chicken'),
(41, '#wine'),
(42, '#cake'),
(43, '#dessert'),
(44, '#fish'),
(45, '#poke'),
(46, '#toast'),
(47, '#cider'),
(48, '#popcorn'),
(49, '#bison'),
(50, '#poutine'),
(51, '#caesar'),
(52, '#froglegs'),
(53, '#pint'),
(54, '#mimosa'),
(55, '#fish&chips'),
(56, '#fishandchips'),
(57, '#brunch'),
(58, '#breakfast'),
(59, '#soup');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CustomerAddsFavourite`
--
ALTER TABLE `CustomerAddsFavourite`
ADD PRIMARY KEY (`CustomerUID`,`FavouriteRID`),
ADD KEY `r_id_idx` (`FavouriteRID`);

--
-- Indexes for table `CustomerReviews`
--
ALTER TABLE `CustomerReviews`
ADD PRIMARY KEY (`CR_ID`),
ADD KEY `customer_id_idx` (`CustomerUID`),
ADD KEY `id_rest_idx` (`RestaurantID`);

--
-- Indexes for table `ManageRestaurant`
--
ALTER TABLE `ManageRestaurant`
ADD PRIMARY KEY (`ManagerUID`,`RestaurantID`),
ADD KEY `id_restaurant_idx` (`RestaurantID`);

--
-- Indexes for table `ManageTags`
--
ALTER TABLE `ManageTags`
ADD PRIMARY KEY (`AdminUID`,`TagID`),
ADD KEY `tag_id_idx` (`TagID`);

--
-- Indexes for table `ManageUsers`
--
ALTER TABLE `ManageUsers`
ADD PRIMARY KEY (`AdminUID`,`CustomerUID`),
ADD KEY `cuid_idx` (`CustomerUID`);

--
-- Indexes for table `RegisteredUser`
--
ALTER TABLE `RegisteredUser`
ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `Restaurant`
--
ALTER TABLE `Restaurant`
ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `RestaurantHours`
--
ALTER TABLE `RestaurantHours`
ADD PRIMARY KEY (`RestaurantID`,`WeekDay`);

--
-- Indexes for table `RestaurantSocialMedia`
--
ALTER TABLE `RestaurantSocialMedia`
ADD PRIMARY KEY (`RestaurantID`,`SocialMedia`);

--
-- Indexes for table `Special`
--
ALTER TABLE `Special`
ADD PRIMARY KEY (`Name`,`RestaurantID`),
ADD KEY `rest_id_idx` (`RestaurantID`);

--
-- Indexes for table `SpecialTags`
--
ALTER TABLE `SpecialTags`
ADD PRIMARY KEY (`TagID`,`SpecialName`,`RestaurantID`),
ADD KEY `special_name_idx` (`SpecialName`),
ADD KEY `id_rest_idx` (`RestaurantID`);

--
-- Indexes for table `SpecialTimes`
--
ALTER TABLE `SpecialTimes`
ADD PRIMARY KEY (`SpecialName`,`RestaurantID`,`Weekday`,`StartTime`,`EndTime`),
ADD KEY `restID_idx` (`RestaurantID`);

--
-- Indexes for table `Tags`
--
ALTER TABLE `Tags`
ADD PRIMARY KEY (`TagID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CustomerReviews`
--
ALTER TABLE `CustomerReviews`
MODIFY `CR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `RegisteredUser`
--
ALTER TABLE `RegisteredUser`
MODIFY `UID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `Restaurant`
--
ALTER TABLE `Restaurant`
MODIFY `RID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Tags`
--
ALTER TABLE `Tags`
MODIFY `TagID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `CustomerAddsFavourite`
--
ALTER TABLE `CustomerAddsFavourite`
ADD CONSTRAINT `c_uid` FOREIGN KEY (`CustomerUID`) REFERENCES `registereduser` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `r_id` FOREIGN KEY (`FavouriteRID`) REFERENCES `restaurant` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `CustomerReviews`
--
ALTER TABLE `CustomerReviews`
ADD CONSTRAINT `customer_id` FOREIGN KEY (`CustomerUID`) REFERENCES `registereduser` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `id_rest` FOREIGN KEY (`RestaurantID`) REFERENCES `restaurant` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ManageRestaurant`
--
ALTER TABLE `ManageRestaurant`
ADD CONSTRAINT `id_restaurant` FOREIGN KEY (`RestaurantID`) REFERENCES `restaurant` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `managerUID` FOREIGN KEY (`ManagerUID`) REFERENCES `registereduser` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ManageTags`
--
ALTER TABLE `ManageTags`
ADD CONSTRAINT `manager_uid` FOREIGN KEY (`AdminUID`) REFERENCES `registereduser` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tag_id` FOREIGN KEY (`TagID`) REFERENCES `tags` (`tagid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ManageUsers`
--
ALTER TABLE `ManageUsers`
ADD CONSTRAINT `Admin_UID` FOREIGN KEY (`AdminUID`) REFERENCES `registereduser` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `cuid` FOREIGN KEY (`CustomerUID`) REFERENCES `registereduser` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `RestaurantHours`
--
ALTER TABLE `RestaurantHours`
ADD CONSTRAINT `id_restaurant_hours` FOREIGN KEY (`RestaurantID`) REFERENCES `restaurant` (`RID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `RestaurantSocialMedia`
--
ALTER TABLE `RestaurantSocialMedia`
ADD CONSTRAINT `restaurantID` FOREIGN KEY (`RestaurantID`) REFERENCES `restaurant` (`RID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Special`
--
ALTER TABLE `Special`
ADD CONSTRAINT `rest_id` FOREIGN KEY (`RestaurantID`) REFERENCES `restaurant` (`RID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `SpecialTags`
--
ALTER TABLE `SpecialTags`
ADD CONSTRAINT `SpecialName` FOREIGN KEY (`SpecialName`) REFERENCES `special` (`Name`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `id_of_restaurant` FOREIGN KEY (`RestaurantID`) REFERENCES `restaurant` (`RID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tagID` FOREIGN KEY (`TagID`) REFERENCES `tags` (`tagid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `SpecialTimes`
--
ALTER TABLE `SpecialTimes`
ADD CONSTRAINT `Special_Name` FOREIGN KEY (`SpecialName`) REFERENCES `special` (`Name`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `restID` FOREIGN KEY (`RestaurantID`) REFERENCES `restaurant` (`RID`) ON DELETE CASCADE ON UPDATE CASCADE;

