-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2020 at 12:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umsldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE `buildings` (
  `building_id` int(11) NOT NULL,
  `building_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`building_id`, `building_name`) VALUES
(1, 'AB Ecology & Conservation Complex'),
(2, 'Alumni House'),
(3, 'Arts Administration Building'),
(4, 'Bellerive Hall'),
(5, 'Benton Hall'),
(6, 'BMT Performing Arts Center '),
(7, 'Anheuser-Busch Hall'),
(8, 'Campus Police Building'),
(9, 'Chancellors Residence'),
(10, 'Clark Hall'),
(11, 'E. Desmond Lee TLC'),
(12, 'Education Administration Building'),
(13, 'Express Script Hall'),
(14, 'Fine Arts Building'),
(15, 'Innovative Technology Building'),
(16, 'JC Penny Building'),
(17, 'Kathy J. Weinman Advocacy Center'),
(18, 'KWMU Grand Center'),
(19, 'La Gras'),
(20, 'Lucas Hall'),
(21, 'Mansion Hill Condos'),
(22, 'Marillac Hall'),
(23, 'Mark Twain Athletic Center'),
(24, 'Millennium Student Center'),
(25, 'MSC Garage North'),
(26, 'MSC Garage South'),
(27, 'Music Building'),
(28, 'Nursing Administration Building'),
(29, 'Oak Hall'),
(30, 'Patient Care Center'),
(31, 'Provincial House'),
(32, 'Recreation & Wellness Center'),
(33, 'Regional Center for Education & Work'),
(34, 'Research Building'),
(35, 'Sassin Building'),
(36, 'Science Learning Building'),
(37, 'Sculpture & Ceramics Annex'),
(38, 'Seton Center Hall'),
(39, 'Social Sciences & Business Building'),
(40, 'Softball Field'),
(41, 'South Campus Classroom Building'),
(42, 'South Campus Computer Building'),
(43, 'South Campus Garage'),
(44, 'St. Louis Mercantile Library'),
(45, 'Stadler Hall'),
(46, 'Thomas Jefferson Library'),
(47, 'UMSL Postal Services'),
(48, 'Villa Building'),
(49, 'Ward E. Barns Building'),
(50, 'West Drive Garage South'),
(51, 'WLC Center for Nanoscience'),
(52, 'Woods Hall'),
(53, 'Floor Techs');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Paper Products'),
(2, 'Chemicals'),
(3, 'Waste Management'),
(4, 'Gloves'),
(5, 'Brooms Handles & Frames'),
(6, 'Mop Handles'),
(7, 'Miscellaneous'),
(8, 'Floor Tech'),
(9, 'Labels'),
(10, 'PPE'),
(11, 'Equipment'),
(12, 'Dispensers'),
(13, 'joe rottman');

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `meeting_id` int(11) NOT NULL,
  `meeting_title` varchar(255) NOT NULL,
  `meeting_description` text NOT NULL,
  `meeting_location` text NOT NULL,
  `meeting_date` date NOT NULL,
  `meeting_time` time NOT NULL,
  `meeting_month` varchar(255) NOT NULL,
  `meeting_day` text NOT NULL,
  `month` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`meeting_id`, `meeting_title`, `meeting_description`, `meeting_location`, `meeting_date`, `meeting_time`, `meeting_month`, `meeting_day`, `month`) VALUES
(1, 'Covid 19 2020', '   Know how it spreads.\\\\\\\\r\\\\\\\\nLess common ways COVID-19 can spread.', '   Storeroom', '2020-12-09', '11:30:56', 'Dec', 'Monday', '2020-12-09'),
(7, 'gsdfdsfa', 'gvdsfdsf', 'adsfdsf', '2020-11-25', '09:34:55', 'Nov', 'Tuesday', '2020-11-14'),
(8, 'test3', 'Come and have some ice cream to celebrate the holidays', 'Storeroom ', '2020-11-03', '10:43:00', '', 'Friday', '2020-11-14'),
(9, 'tes4', 'oilahfjdlfjladf', 'adfadfsdgfasfdsf', '2020-11-01', '12:44:00', '', 'Friday', '2020-11-14'),
(10, 'test3', 'dfafsdfc', 'afddsfdsfaf', '2020-11-24', '15:45:00', '', 'Friday', '2020-11-14'),
(11, 'LAST TES', 'IS IT WORKING', 'MY OFFICE', '2020-11-26', '11:05:00', 'Nov', 'Thursday', '2020-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_amount` double(10,2) NOT NULL,
  `order_transaction` text NOT NULL,
  `order_status` text NOT NULL,
  `order_currency` text NOT NULL,
  `order_date` date NOT NULL,
  `order_name` text NOT NULL,
  `order_building` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_amount`, `order_transaction`, `order_status`, `order_currency`, `order_date`, `order_name`, `order_building`) VALUES
(10, 38.50, '1004896507', 'Completed', 'USD', '2020-11-17', 'rowz', 'Lucas Hall'),
(11, 43.76, '1217368098', 'Approved', 'USD', '2020-11-17', 'rowz', 'Music Building'),
(12, 43.76, '1322489877', 'Processing', 'USD', '2020-11-18', 'rowz', 'Clark Hall'),
(13, 22.88, '1062362904', 'Processing', 'USD', '2020-11-18', 'rowz', 'Benton Hall'),
(14, 22.88, '452855177', 'Processing', 'USD', '2020-11-18', 'rowz', 'Campus Police Building'),
(15, 22.88, '737645590', 'Processing', 'USD', '2020-11-18', 'rowz', 'Education Administration Building'),
(16, 45.76, '443131571', 'Processing', 'USD', '2020-11-18', 'rowz', 'Fine Arts Building'),
(17, 62.38, '1108335655', 'Processing', 'USD', '2020-11-18', 'rowz', 'Chancellors Residence'),
(19, 16.62, '150545688', 'Processing', 'USD', '2020-11-18', 'joe', 'La Gras'),
(20, 20.88, '1287691836', 'Processing', 'USD', '2020-11-19', 'rowz', 'Clark Hall'),
(21, 0.00, '700895007', 'Processing', 'USD', '2020-11-19', 'rowz', 'Alumni House'),
(22, 243.81, '1523463024', 'Approved', 'USD', '2020-11-20', 'rowz', 'Social Sciences & Business Building'),
(23, 7432.50, '1645772906', 'Completed', 'USD', '2020-11-20', 'rowz', 'Anheuser-Busch Hall');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_location` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_uom` tinytext NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_number` tinytext NOT NULL,
  `product_description` text NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_image` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_location`, `product_title`, `short_desc`, `product_quantity`, `product_uom`, `product_price`, `product_number`, `product_description`, `product_category_id`, `product_image`) VALUES
(1, 0, 'Foam Block Fine Floor Sweep', '24In. Plastic Foam Block Fine Floor Sweep Flagged Polypropylene Fill.', 5, 'Each', 20.88, 'RUB9B02GY', 'Designed To Pick Up The Finest Debris. Available In Flagged Polypropylene Or Blended Horsehair Tampico For Removing Even Fine Dirt And Dust. Ideal For Highly Polished Or Waxed Floors. Two-Threaded Handle Holes On Either Side Of Block For Even Wear. Angle Brace Sku9B71 Adds Support And Stability. Handles Sold Separately.', 5, 'Broom_128.png'),
(2, 1, 'Fine Floor Sweep', '36 in. Broom Fine Gray Flagged Polypropylene Sweep', 7, 'Each', 21.88, 'CSM4501623', 'Industrial floor fine sweep with 2 threaded handle holes and 3in bristle trim. Satin-Tip flagged polypropylene for sweeping smooth high- gloss floors.', 5, 'Broom_128.png'),
(3, 2, 'Corn Broom Warehouse', 'Corn Broom Warehouse 1 1/8 in. dia 2.9 cm Stained/Lacquered Handle', 8, 'Each', 22.88, 'RUB6383BL', 'Designed for rugged indoor/outdoor cleaning. 100% natural broom corn fibers for long life and effective pick up. Remove fine dirt from even or rough surfaces. Hand-selected, heavy-duty lacquered pine handles.', 5, 'Broom_128.png'),
(4, 3, 'Duo-Sweep Warehouse Broom', 'Duo-Sweep 13 In. Warehouse Broom W/ 48 In. Metal Handle.', 15, 'Each', 16.62, 'CSM3688314', 'Two Handle Holes; One Angled, One Upright. Flagged Blue Filament Sweeps Fine Debris; Use Black Stiff Filament For Heavier Sweeping. Use Lobby Brooms With Dust Pans (Sold Separately) For Continuous Cleaning Of Convention Centers, Malls, And Theme Parks. 7\" Bristle Trim.', 5, 'Broom_128.png'),
(5, 4, 'Mop Handle', 'Mop Handle Quick Change Wood 60In.', 4, 'Each', 9.96, 'HIL22652', '60\" Hardwood Handle Constructed Of Heavy Duty Plated Metal That Resists Rust And Features A Release Bar For Fast Changing Of Mop Heads.', 5, 'Broom_128.png'),
(6, 5, 'Handle Clencher', 'Handle Clencher Fiberglass 60In.', 0, 'Each', 16.42, 'HIL22711', 'Extra Durable Nylon Construction Assures Long Life For This Jaw Style Handle. Ideal For Wide Headbands. 60\" Fiberglass Handle. Head Also Sold Separately.', 5, 'Broom_128.png'),
(7, 6, 'Dust Mop Frame', 'Handle 60In. Swivel Snap Wood - Dust Mop Frame - 1In. Diameter.', 5, 'Each', 11.07, 'HIL22608', 'Dust Mop Handle Features 180 Degree Swivel Action Or Rigid Position And Spring Clip For Easy Attachment To Dust Mop Frame. 60\" Wood Handle In 1\" Or 1 1/8\" Diameter.', 5, 'Broom_128.png'),
(8, 7, 'Handle Wood Threaded', 'Handle 60In. Wood Threaded 15/16In. Diameter.', 12, 'Each', 3.18, 'CSM4027100', 'Standard Threaded Handle Made Of Lacquered Hardwood.', 5, 'Broom_128.png'),
(9, 8, 'Broom Lobby', 'Broom Lobby Polypropylene Fill 6Cs.', 46, 'Each', 8.92, 'RUB6374BK', 'Ideal For One-Handed Cleaning Under Tables, Fixtures And Hard To Reach Areas. Ideal For Use In Malls, Restaurants And Lobbies. Tough Polypropylene With Flagged Bristles Trap Fine Particles. Will Not Stain, Discolor Or Absorb Odors. Can Be Used Wet Or Dry. Works Well With Lobby Pro Dust Pan (Sold Separately).\n\n', 5, 'Broom_128.png'),
(10, 9, 'Handle Wedge Mop', 'Handle Wedge Mop.', 5, 'Each', 10.60, 'RUBU110', '# Use The Trapper Looped-End Or Kut-A-Way Cut-End Triangle-Shaped Wedge Mops. # The Wood Handle With Heavy-Gauge Plated Wire Frame Fits Either Style Head.', 5, 'Broom_128.png'),
(11, 10, 'Gray Round Bucket', '14 Quart Gray Round Bucket W/ Handle.', 6, 'Each', 17.53, 'RUB2614GY', 'Heavy-Duty Thick Wall Construction. Brute Buckets Have Molded-In Graduations For Accurate Measuring.\n', 3, 'waste_128.png'),
(12, 11, 'Gray Round Container', '22 Gallon Gray Untouchable Round Container', 0, 'Each', 70.57, 'RUB3546GY', 'Available In Round, Half-Round And Square Shapes To Fit Every Application. Durable And Crack Resistant, Even Under Tough Indoor/Outdoor Conditions. Perfect For Hotel Lobbies, Offices, Restrooms, Shopping Malls, Restaurants And Other Public Locations.\n\n', 3, 'waste_128.png'),
(13, 12, 'Brute Dolly', '2640 Brute Dolly - 2620 2632 2643 2655 Containers.', 3, 'Each', 47.62, 'RUB2640BK', 'Easy Mobility And Maneuverability Of Heavy Loads. Up To 350 Lb. Continuous Static Load Rating. All Plastic Construction Resists Rust, Chipping And Denting. Heavy-Duty Wheels With Swivel Capabilities Provide For Ease Of Mobility. User-Friendly Solution For Moving Heavy Loads.\n', 3, 'waste_128.png'),
(14, 13, 'Deskside Recycling Container', '28 Quart Deskside Recycling Container Medium W/ Universal Recycle Symbol.', 3, 'Each', 5.84, 'RUB295673BL', 'An Easy And Effective Way To Recycle Paper. Contains Post Consumer Recycled Resin (Pcr) Exceeding Epa Guidelines. Designed To Be Used In Systems With Existing Office Containers And Accessories. Placed Beside Traditional Wastebaskets, Rubbermaids Deskside Recycling Containers Make It Easy To Separate Waste Paper. 28 1/8 Qt\n', 3, 'waste_128.png'),
(15, 14, 'Beige Wastebasket', 'Beige 28 1/8 Quart Wastebasket.', 3, 'Each', 5.45, 'RUB2956BG', 'Space-Efficient And Economical. Fits Under Standard Desk Height Even When Swing Top Is Fully Extended. All-Plastic Construction Won\'T Chip, Rust Or Dent. Rolled Rims Add Strength, And Are Easy To Clean.', 3, 'waste_128.png'),
(16, 15, 'Rim Caddy', 'Brute Rim Caddy - 2643 Containers.', 5, 'Each', 67.99, 'RUB9W87YW', 'Snaps Securely Onto The Rim Of Brute 44-Gallon Containers (2643 And 2643-60). User-Friendly Handles For Easy Maneuverability, And Minimizes Contact With Refuse. Easily Attach And Remove Poly- Liners. Efficiently Dispense Smaller Liners From Inside Brute Container. Spots For Bottles Wet-Floor Signs, Sponges, Lobby Dust Pan, Brushes, Liner Rolls, Gloves, And Whatever Else You Can Imagine. Bottles, Wet-Floor Sign, And Other Tools Stay In Place When Bag Is Unloaded In A Full Tipped Position Or An Upright Position. ', 3, 'waste_128.png'),
(17, 16, 'Funnel Top Round', 'Funnel Top Round Fits 2947 3546 Containers.', 6, 'Each', 30.01, 'RUB3548GY', 'Untouchable Containers Are Available In Round, Half-Round And Square Shapes For Every Application. # Durable And Crack Resistant, Even Under Tough Indoor/Outdoor Conditions. # Perfect For Hotel Lobbies, Restrooms, Shopping Malls, Restaurants And Snack Areas. Untouchable Tops For Hygienic, Hands-Free Refuse Disposal. # Drop And Swing Lid Designs Provide Easy Access For Refuse Disposal And Then Quickly Return To Hide Refuse From Public View. # Controls Waste, Odors And Smoking Debris. Styleline Series Lids Attractive Solutions To Your Waste Handling Problems. # Styleline Series Lids Combine Aesthetic Form With Ash-Trash Function. # Styleline Series Lids Include Retainer Hardware For Concealing Polyliner Bags. Color: Light Gray', 3, 'waste_128.png'),
(18, 17, 'Baseboard Stripper', 'Baseboard Stripper - 12 - 19 Oz. Cans.', 9, 'Each', 3.85, 'HIL0113355', ' This Heavy-Duty, Foaming Product Is Designed To Remove Excess Floor Finish Where Floor Machines Cannot Reach. The Thick, Penetrating Foam Clings To Vertical Surfaces Like Baseboards For Easy Removal Of Wax Build-Up. Wax Build-Up Is Quickly Emulsified By Chemical Action For Easy Removal, Leaving A Wax-Free Surface. Removes Heavy Wax Build-Up In Hard To Reach Areas. Clinging Foam Adheres To Surfaces. Easy Rinsing.\n', 7, 'Misc_128.png'),
(19, 18, 'Laundry Bleach & Disinfectant', 'Bleach 1 Gallon, 6/Cs.', 19, 'Cases', 19.68, 'KIKBLEACH6', 'Kik International Pure Bright Liquid Bleach: Disinfecting Bleach Meets Your Laundering Or Sanitizing Needs. Full-Strength, Concentrated Liquid Removes Odors And Stains. For The Brightest Whites, Always Add At Least Five Ounces To Your White Laundry Loads.', 2, 'chemicals_128.png'),
(20, 19, 'Carpet Pre-Spray', 'Carpet Pre-Spray   12 - 1 Quart Bottles.', 6, 'Cases', 47.00, 'HIL0081404', 'Carpet Pre-Spray is designed to maximize cleaning efficiency while minimizing harmful residue. Residue causes resoiling, which increases cleaning frequency, costing time and money.', 7, 'Misc_128.png'),
(21, 20, 'Clorox Fresh Scent Disinfecting Wipes', 'Clorox Fresh Scent Disinfecting Wipes 12 Per Case.', 0, 'Cases', 37.37, 'CLO01593', 'Clorox Commercial Solutons Clorox Disinfecting Wipes Provide Quick And Convenient Cleaning For High Traffic And High Touch Zones, Such As Elevator Buttons. Pre-Moistened Wipe That Cleans And Disinfects. Convenient Cleaning Anytime, Anywhere That You Need. Bleach-Free Formula. 12 Canisters Per Case. 35 Wipes Per Canister.', 10, 'PPE_128.png'),
(22, 21, 'Country Garden Air Freshner', 'Country Garden Air Freshener - 12 - 1 Quart Bottles.\n', 12, 'Cases', 38.33, 'HIL0101204', 'Can Be Sprayed On Nonporous Surfaces In Offices, Classrooms, Hospitals, Restrooms, Hotel Rooms, Or Wherever Odors Are A Problem. Malodor Counteractant Destroys A Wide Array Of Odors. Garden Fragrance Leaves A Pleasant Scent. Ready-To-Use, Spray Formula Makes It Easy To Use.\n', 2, 'chemicals_128.png'),
(23, 22, 'Deep Action', 'Deep Action - 4 - 1 Gallon Containers.', 3, 'Cases', 72.41, 'HIL0091806', 'Specially Formulated Embrittling Chemistry Encapsulates Dirt, Spots, And Stains In Carpeting. Low Moisture System Allows For Faster Dry Time, Saving Labor And Down Time. Carpet Should Be Dry In About 20 Minutes. Spots And Spills Do Not Wick Back Improving The Appearance Of The Carpet After It Dries. Low Moisture System Has Faster Dry Times, Saves On Labor And Down-Time. Embrittling Technology Encapsulates Dirt For Easier Vaccuming. Formulated For Minimal Residue And Free Rinsing.\n', 1, 'Paper-128.png'),
(24, 23, 'Defoamer II', 'Defoamer II - 4 - 1 Gallon Containers.', 5, 'Cases', 67.96, 'HIL0018306', 'A Concentrated, Stable White Emulsion, Specially Formulated To Eliminate Foam In Recovery Tanks Of Carpet Cleaning Equipment, Automatic Floor Scrubbers, And Wet Pickup Vacuums. It Acts Quickly To Help Prevent Foam From Being Pulled Into The Electrical Vacuum Motor, Where Moisture Can Cause Rust And Other Damage. Prevents Foam Buildup. No Moisture Reaches The Electrical Vacuum Motor. Works In Hot Or Cold Water.\n', 8, 'floor_tech_128.png'),
(25, 24, 'Devastator', 'Devastator - 4 - 1 Gallon Containers.', 0, 'Cases', 74.24, 'HIL0014706', 'A Fast-Acting Stripper Works Quickly To Remove The Toughest Wax And Polish Build-Ups. Removes Polish Coats That Have Been Repeatedly Burnished And Hardened With Ultra High-Speed Floor Machines. Does The Job The First Time. Reduces Labor Costs. May Be Used With A Floor Machine For Extremely Heavy Polish Build-Ups. Use On Masonry, Hard Floors And Vinyl Composition Flooring. It Should Not Be Used On Asphalt Tile, Linoleum, Rubber Floors, Synthetic Sports Floors, Or Any Surface That Has Been Painted.', 8, 'floor_tech_128.png'),
(26, 25, 'Devastator', 'Devastator - 5 Gallon Bag-In-Box.', 19, '5 Gallons', 92.71, 'HIL0014707', 'A Fast-Acting Stripper Works Quickly To Remove The Toughest Wax And Polish Build-Ups. Removes Polish Coats That Have Been Repeatedly Burnished And Hardened With Ultra High-Speed Floor Machines. Does The Job The First Time. Reduces Labor Costs. May Be Used With A Floor Machine For Extremely Heavy Polish Build-Ups. Use On Masonry, Hard Floors And Vinyl Composition Flooring. It Should Not Be Used On Asphalt Tile, Linoleum, Rubber Floors, Synthetic Sports Floors, Or Any Surface That Has Been Painted.', 8, 'floor_tech_128.png'),
(27, 26, 'Double Down', 'Double Down - 6 - 32 Oz. Bottles.', 2, 'Cases', 70.62, 'HIL0093285', 'Double Down Combines The Brightening And Cleaning Power Of Hydrogen Peroxide With A Blend Of Encapsulating Water-Based Polymers And Surfactants. When Mixed Together At The Point Of Contact, This Combination Provides Maximum Cleaning Effectiveness! Brightens And Deodorizes Carpets. Polymer Technology Encapsulates Soil For Easy Removal. Carpet And Rug Institute Approved.', 2, 'chemicals_128.png'),
(28, 27, 'Explorer', 'Explorer - 1 - 5 Gallon Bag-In-Box.', 17, '5 Gallons', 77.43, 'HIL0053407', 'A High Solids, Acrylic Copolymer Floor Polish Formulated To Provide A Clear, Wet-Looking, Protective Shine On Your Floors. Its Advanced Formula Is Perfect For Resilient Tile, Terrazzo, Unglazed Ceramic, Quarry Tile, Paver Brick, Natural Stone Or Concrete Flooring. Explorer Provides A Tough Approach To Beautiful Floors. It Resists Black Heel Marks, Scratching, And Scuffing. It\'S Tough Enough And Dries Fast Enough For Use In Main Lobbies, Entrances, And Major Traffic Corridors. Explorer Has Outstanding Detergent Resistance.', 8, 'floor_tech_128.png'),
(29, 28, 'Glass And Plastic Cleaner', 'Glass And Plastic Cleaner - 12 - 1 Quart Bottles.', 0, 'Cases', 30.72, 'HIL0100204', 'Cleans Windows, Mirrors, Glass Display Cases, Crt Screens, Tv Screens, Office Equipment, Plexiglas, Plastic, Painted Surfaces, Counters, Tabletops, Vinyl Upholstery And Any Surface Not Damaged By Water. Removes Dirt, Fingerprints, Grease, Smoke Film And Hair Spray. Non- Ammoniated Formula Evaporates Fast To Help Prevent Streaking Or Filming. Antistat Formula.', 2, 'chemicals_128.png'),
(30, 29, 'Gojo Pink & Klean Skin Cleanser', 'Gojo Pink & Klean Skin Cleanser 800 Ml 12 /Cs.', 8, 'Cases', 43.45, 'GOJ912812', 'Rich, Pearlized Pink Lotion Soap Formulated For Extra Value. Gentle Cleansing With A Clean Rinse. Pleasant, Light Floral Fragrance.', 2, 'chemicals_128.png'),
(31, 30, 'Green Select Bathroom Cleaner', 'Green Select Bathroom Cleaner - 4 - 2.5 Liter Containers.', 22, 'Cases', 59.44, 'HIL0082925', 'Green Select Bathroom Cleaner Is Formulated To Be Non-Toxic, Phosphate Free, Biodegradable, And Non-Flammable. Contains No Hazardous Ingredients And Is Formulated With Glycolic Acid, The Same Organic Acid Found In Sugar Cane, Beets And Fruits. Effective Cleaning Removes Soap Film And Hard Water Deposits. Good For Cleaning Ceramic Tile, Porcelain, Sinks, Toilet Bowls, Fiberglass, Plastic, Chrome, Showers, And Bathroom Surfaces.', 2, 'chemicals_128.png'),
(32, 31, 'Green Select Foaming Hand Soap', 'Green Select Foaming Hand Soap - 4-1 Gallon Containers.', 43, 'Cases', 39.32, 'HIL0039006', 'Green Select Foaming Hand Soap Is Green Seal Certified To Be Environmentally Preferable! It Contains No Added Fragrances, Dyes Or Toxic Materials.', 2, 'chemicals_128.png'),
(33, 32, 'Green Select Glass Cleaner ', 'Green Select Glass Cleaner - 4 - 2.5 Liter Containers.', 17, 'Cases', 61.32, 'HIL0082725', 'Green Select Glass Cleaner Will Clean Windows, Tv Screens, Porcelain, Plastic, Counter Tops, Restroom Fixtures, And Stainless Steel. Works Well As An All-Purpose Spray And Wipe For Any Surface Not Harmed By Water. Formulated To Be Effective With Cold Water, Contains No Phosphates And Is Biodegradable Which Means It Has A Lower Impact On The Environment.', 2, 'chemicals_128.png'),
(34, 33, 'Liquid Gum-Go', 'Liquid Gum-Go.', 3, 'Cases', 145.80, 'HIL0091204', 'Formulated For The Safe And Effective Removal Of Gum From Carpeting, Upholstery, And Hard Surfaces. Simply Apply Liquid Gum-Go To The Gum, Let The Product Work To Break The Bond, And Scrape Up The Gum With A Bone Knife Or Putty Knife.', 2, 'chemicals_128.png'),
(35, 34, 'Hair & Body Wash Gel ', 'Hair & Body Wash Gel - 4 - 1 Gallon Containers.', 5, 'Cases', 52.96, 'HIL0036406', 'A Luxurious Gel Body Wash For A Gentle All Over Cleansing. Fortified With Essential Oils For Skin Conditioning And A Clean Sweet Pea Fragrance. Perfect For General Washroom And Shower Settings In Lodgings, School And Athletic Facilities.', 2, 'chemicals_128.png'),
(36, 35, 'Heavy Duty Floor Cleaner', 'Heavy Duty Floor Cleaner - 4 - 2.5 Liter Containers.', 6, 'Cases', 80.20, 'HIL0080925', 'A Concentrated, Multipurpose Cleaner Formulated To Efficiently Remove A Wide Variety Of Dirt, Grime, And Grease. It Can Be Used For Cleaning Any Hard Surface Not Damaged By Water, Including Resilient Tile, Concrete, Paver Brick, And Quarry Tile.', 2, 'chemicals_128.png'),
(37, 36, 'Hil-Glo', 'Hil-Glo -  4 - 1 Gallon Containers.', 5, 'Cases', 57.31, 'HIL0053306', 'Specially Formulated Spray Buff Compound Which Gives Your Floors A Durable, High Gloss Quickly And Easily. Plus Hil-Glo Cleans The Surface Of Your Floor As It Polishes. It Delivers Maximum Gloss While It Cleans Stubborn Scuffs And Black Heel Marks.', 2, 'chemicals_128.png'),
(38, 37, 'Lemon Odor Counteractant', 'Lemon Odor Counteractant - 4 - 1 Gallon Containers.', 4, 'Cases', 69.95, 'HIL0018606', 'Ideal Choice For Combating Hard-To-Hide Odors In Restaurants, Hotels, Motels, Hospitals, Nursing Homes, Restrooms, Kitchens, Schools And Veterinary Clinics. It Can Be Safely Used On Any Washable, Nonporous Surface Including Floors, Toilets, Sinks, Garbage Containers, Ashtrays, Animal Cages And Kennels. Especially Effective For Suppressing Odors From Pets, Urine, Fecal Matter, Food And Cooking Odors, Smoke, Vomit, Body Odors And Mildew.', 2, 'chemicals_128.png'),
(39, 38, 'Lustre-Mist', 'Lustre-Mist Furniture Polish - 12 - 18 Oz. Cans.', 29, 'Each', 3.40, 'HIL0103155', 'A Unique Dust-Blocking, No Wax Formula For Use Directly On Surfaces As Well As On Cloths And Mitts. Dusts, Polishes And Shines In One Simple Step. Eliminates Dust Fly-Away And Leaves A Lasting Shine. Leaves No Waxy Build-Up. Reduces Dust Accumulation And Preserves The Beauty Of The Surface. Features A Soak-In Formula That Restores Life And Brilliance To Wood Surfaces And Adds A Beautiful Gloss To Less Porous Surfaces. Use On Marble, Solid Synthetic, Laminate, Plastic, Stainless Steel, Baked Enamel, Blinds, Cabinets, Appliances, Baseboards And Paneling.', 7, 'Misc_128.png'),
(40, 39, 'Mandarin-Cranberry Premium Foam Soap', 'Mandarin-Cranberry Premium Foam Soap - 6 - 14 Oz. Pump Bottles.', 14, 'Each', 6.60, 'HIL0039482', 'This Premium Foaming Soap Has Additional Active Ingredients That Makes It Our Thickest And Most Luxurious Foaming Soap Yet. Infused With Premium Moisturizers That Leave Your Skin Smooth And Clean With A Refreshing Citrus And Berry Scent.', 2, 'chemicals_128.png'),
(41, 40, 'Nutra Rinse', 'Nutra Rinse - 6 - 1/2 Gallon Containers.', 4, 'Cases', 86.22, 'HIL0071522', 'A High Quality Neutralizer And Conditioner Formulated To Help Eliminate Alkaline Residues On Floors. Its Special Chelating Action Ties Up The Insoluble Alkaline Salts Left Behind By Alkaline Strippers That Can Cause Floor Finishes To Powder Or Wear Poorly. Nutra-Rinse Allows Stripper Residue To Be Quickly And Easily Removed. Its Labor-Saving Formula Eliminates Multiple Rinsing Steps.', 2, 'chemicals_128.png'),
(42, 41, 'Nutra-Rinse', 'Nutra-Rinse - 4 - 1 Gallon Containers.', 1, 'Cases', 59.60, 'HIL0021906', 'A High Quality Neutralizer And Conditioner Formulated To Help Eliminate Alkaline Residues On Floors. Its Special Chelating Action Ties Up The Insoluble Alkaline Salts Left Behind By Alkaline Strippers That Can Cause Floor Finishes To Powder Or Wear Poorly. Nutra-Rinse Allows Stripper Residue To Be Quickly And Easily Removed. Its Labor-Saving Formula Eliminates Multiple Rinsing Steps.', 2, 'chemicals_128.png'),
(43, 42, 'Pre-Game', 'Pre-Game - 4 - 1 Gallon Containers.', 3, 'Cases', 45.16, 'HIL0045206', 'A Special Water-Based Formulation Designed For Scrubbing A Wood Floor In Preparation For Coating And Tacking Between Coats Of Wood Seals And Finishes. Pre-Game Helps Remove Dust, Dirt And Other Contaminants In Preparation For Coating. Tacking With Pre-Game Helps Ensure A Clean Surface For Coatings To Bond With. Pre-Game Leaves No Greasy Or Oily Residue To Destroy Gloss.', 2, 'chemicals_128.png'),
(44, 43, 'Re-Juv-Nal', 'Re-Juv-Nal - 4 - 2.5 Liter Containers.', 0, 'Cases', 46.52, 'HIL0081625', 'A Phosphate-Free, Ph Neutral Formulation Designed To Provide Effective Cleaning, Deodorizing, And Disinfection Where Housekeeping Is Of Prime Importance In Controlling Cross-Contamination From Treated Surfaces. R-Juv-Nal (Epa Reg # 1839-169-1658) Has Demonstrated Effectiveness Against Viruses Similar To 2019 Novel Coronavirus (Sars- Cov-2) On Hard, Non-Porous Surfaces. Therefore, This Product Can Be Used Against Sars- Cov-2, The Novel Coronavirus That Causes The Disease Covid- 19, When Used In Accordance With The Directions For Use Against Rotavirus On Hard, Non-Porous Surfaces. ', 2, 'chemicals_128.png'),
(45, 44, 'Seal 340', 'Seal 340 - 4 - 1 Gallon Containers.', 6, 'Each', 65.60, 'HIL0034006', 'A Seal And Finish. Seal 340 Was Formulated To Enhance The Rich, Natural Colors Of Your Hard Floors Without Leaving A Shiny, Plastic-Looking Surface. It Also Seals Resilient Tile Floors To Create A Smooth, Unbroken Base For High-Speed Finishes. Seal 340 Not Only Enhances The Natural Colors In Hard Floors,It Protects All Floors From Dirt, Spills, And Abrasions That Come From Heavy Traffic.', 2, 'chemicals_128.png'),
(46, 45, 'Soap Lotion Hand W Moisturizer', 'Enriched Lotion Hand Soap With Moisturizers 800Ml 4/Cs\n', 0, 'Cases', 40.48, 'RUB4013111', 'Enriched With Glycerin, Silk Proteins, Aloe Vera, And Vitamin E Hypoallergenic For Sensitive Skin. Light Passion Flower Fragrance. Rich, Teal Pearlized Appearance. Biodegradable.', 2, 'chemicals_128.png'),
(47, 46, 'Stainless Steel Cleaner & Polish', 'Stainless Steel Cleaner & Polish - Oil Based - 12 - 15 Oz. Cans.', 11, 'Each', 4.76, 'HIL0103455', 'Formulated With A Blend Of Cleaning Solvents And Fine Oils For A Superior Cleaning Job On Your Stainless Steel. This Product Cleans, Polishes And Protects The Surface Without Hard Rubbing. Does Not Leave An Oily Residue. With Regular Care This Product Can Help Prolong The Factory Finish. Resists Fingerprints, Grease And Water Spatter.', 7, 'Misc_128.png'),
(48, 47, 'Super Hil-Tone', 'Super Hil-Tone - 12 - 1 Quart Bottles.', 1, 'Cases', 83.88, 'HIL0101604', 'A High-Quality Dust Mop Treatment Formulated To Clean And Protect Seals And Finishes. Daily Dust Mopping With Super Hil-Tone Increases The Life And Beauty Of Your Floors By Reducing The Abrasive Effects Of Tracked In Dirt. Treatment With Super Hil-Tone Provides Excellent Resistance To Black Heel Marks, Scuffing, And Scratching.', 2, 'chemicals_128.png'),
(49, 48, 'Super Shine-All', 'Super Shine All 4 - 1 Gallon Containers\n', 2, 'Cases', 52.40, 'HIL0014006', 'Concentrated, Neutral Ph Formula Won\'T Harm Your Floor Finish. Perfect For Cleaning Resilient Tile, Asphalt Tile, Vinyl Floors, Synthetic Floors, Terrazzo, Quarry Tile, Paver Brick, Natural Stone And Coated Wood Floors. Protective Sheen Helps Preserve And Protect. Excellent Choice For Damp Mopping And Auto Scrubbing. Effective In Hard Or Soft, Hot Or Cold Water. Biodegradable. Phosphate Free.', 2, 'chemicals_128.png'),
(50, 49, 'Super Shine-All', 'Super Shine-All - 4 - 2.5 Liter Containers.', 6, 'Cases', 69.96, 'HIL0080825', 'Concentrated, Neutral Ph Formula Won\'T Harm Your Floor Finish. Perfect For Cleaning Resilient Tile, Asphalt Tile, Vinyl Floors, Synthetic Floors, Terrazzo, Quarry Tile, Paver Brick, Natural Stone And Coated Wood Floors. Protective Sheen Helps Preserve And Protect. Excellent Choice For Damp Mopping And Auto Scrubbing. Biodegradable. Phosphate Free.', 2, 'chemicals_128.png'),
(51, 50, 'Suprox-D', 'Suprox-D - 4 - 2.5 Liter Containers.', 24, 'Cases', 76.80, 'HIL0083225', 'Suprox-D Is An Epa Registered, Neutral Ph In Dilution, Hospital Disinfectant With The Cleaning Power Of Peroxide. Containing Twice The Amount Of Peroxide Than Most Brands, Suprox-D Excels At Cleaning And Can Be Used On Many Surfaces. Its Neutral Ph Makes It Safe On Floors, And The Peroxide Aids In Brightening Grout On Hard Tile Surfaces. Dye-Free And Fragrance Free.', 2, 'chemicals_128.png'),
(52, 51, 'Top Clean', 'Top Clean - 1 - 5 Gallon Bag-In-Box.', 13, '5 Gallons', 30.65, 'HIL0014407', 'A Fast-Acting, Synthetic Cleaner That Removes The Soil And Leaves The Shine. It Is Specially Formulated For Metal Cross-Linked Finishes As It Preserves The High-Gloss Appearance Without Leaving A Dulling Build-Up. Top Clean Has A Neutral Ph Formula Designed To Attack Dirt Without Harming Your Floor Or Your Floor Finish.', 8, 'floor_tech_128.png'),
(53, 52, 'Top Clean', 'Top Clean - 4 - 2.5 Liter Containers.', 13, 'Cases', 84.58, 'HIL0081025', 'A Fast-Acting, Synthetic Cleaner That Removes The Soil And Leaves The Shine. It Is Specially Formulated For Metal Cross-Linked Finishes As It Preserves The High-Gloss Appearance Without Leaving A Dulling Build-Up. Top Clean Has A Neutral Ph Formula Designed To Attack Dirt Without Harming Your Floor Or Your Floor Finish.', 2, 'chemicals_128.png'),
(54, 53, 'Top Clean', 'Top Clean 4 - 1 Gallon Containers.', 8, '5 Gallons', 25.60, 'HIL0014406', 'A Fast-Acting, Synthetic Cleaner That Removes The Soil And Leaves The Shine. It Is Specially Formulated For Metal Cross-Linked Finishes As It Preserves The High-Gloss Appearance Without Leaving A Dulling Build-Up. Top Clean Has A Neutral Ph Formula Designed To Attack Dirt Without Harming Your Floor Or Your Floor Finish.', 2, 'chemicals_128.png'),
(55, 54, 'Typhoon', 'Typhoon - 4 - 2.5 Liter Containers.', 7, 'Cases', 95.14, 'HIL0082125', 'Typhoon Takes Traditional Restroom Cleaning Technology And Turns It Upside Down. Unlike Many Typical Restroom Cleaners, Typhoon Does Not Contain Acids. Its Special Blend Of Surfactants And Solvents Combines To Produce Superior Cleaning Results. Plus, Its Pleasant Mint Fragrance Leaves Restroom Surfaces Fresh And Clean.', 2, 'chemicals_128.png'),
(56, 55, 'Vindicator', 'Vindicator + 4 - 2.5 Liter Containers.', 12, 'Cases', 93.36, 'HIL0080625', 'This Product Is A Phosphate-Free, Ph Neutral Formulation Designed To Provide Effective Cleaning, Deodorizing, And Disinfection Where Housekeeping Is Of Prime Importance In Controlling Cross-Contamination. Vindicator +, When Used As Directed, Is Formulated To Disinfect Hard, Non-Porous, Inanimate, Environmental Surfaces: Floors, Walls, Metal Surfaces, Stainless Steel Surfaces, Glazed Porcelain, Glazed Ceramic Tile, Plastic Surfaces, Vanity Tops, Shower Stalls, Bathtubs, And Cabinets.  Vindicator+ (Epa Reg # 1839-167-1658) Has Demonstrated Effectiveness Against Viruses Similar To 2019 Novel Coronavirus (Sars- Cov-2) On Hard, Non-Porous Surfaces. Therefore, This Product Can Be Used Against Sars- Cov-2, The Novel Coronavirus That Causes The Disease Covid- 19, When Used In Accordance With The Directions For Use Against Rotavirus On Hard, Non-Porous Surfaces. ', 2, 'chemicals_128.png'),
(57, 56, 'Majestic Vinegar Cleaner', 'Vinegar - 4 Gallons Per Case.', 4, 'Cases', 11.88, 'WLM09006B', 'Majestic Vinegar Cleaner. Cleaning agent. ', 2, 'chemicals_128.png'),
(58, 57, 'Frame Mop Dust', 'Frame Mop Dust 5In. X 24In. Swivel Snap Quick Change.', 18, 'Each', 3.12, 'HIL52815', 'These Heavy Duty, Industry Standard Frames Are Constructed Of Rust Resistant Plated Metal Wire For Long Life. Features Welded One Piece Construction.', 5, 'Broom_128.png'),
(59, 58, 'Frame Mop Dust ', 'Frame Mop Dust 5In. X 48In. Swivel Snap Quick Change.', 9, 'Each', 5.13, 'HIL52819', 'These Heavy Duty, Industry Standard Frames Are Constructed Of Rust Resistant Plated Metal Wire For Long Life. Features Welded One Piece Construction.', 5, 'Broom_128.png'),
(60, 59, 'Bowl Brush', '21In. Bowl Brush W/ Non-Scratching Bristles And Looped End.', 19, 'Each', 4.56, 'CSM363300', 'Non-Scratching Bristles Are Not Affected By Standard Bowl Cleaners.', 7, 'Misc_128.png'),
(61, 60, 'Flexible Putty Knife', 'Flexible Putty Knife With 1 1/2 In Carbon Steel Blade, Black\n', 0, 'Each', 2.66, '13A674', 'Flexible Blade Works Great For Hard To Reach And Small Areas. Polished Steel, Hollow Ground Blade Is Ideal For Compound Jobs. ', 11, 'Equipment_128.png'),
(62, 61, 'Flying Insect Killer', 'Flying Insect Killer, Aerosol, 15 Oz, Indoor/Outdoor, Deet-Free Deet Concentration, Permethrin', 31, 'Each', 6.00, '48LR73', 'Hot Shot Flying Insect Killer3 Aerosol Kills Houseflies, Mosquitoes And Other Flying Insects By Contact. Effective For Up To 4 Weeks Against Mosquitoes And Houseflies On Nonporous Surfaces. Water-Based. Clean, Fresh Scent.', 7, 'Misc_128.png'),
(63, 62, 'Manual Soap Dispenser', 'Affinity 1St Gen. Manual Soap Dispenser 1.25 L Black With Hillyard Logo', 0, 'Each', 0.00, 'HIL22281', 'One Reliable, Robust Dispenser Delivering Foam, Liquid Or Gel. Space- Saving Dispenser Design Utilizes 25% Less Plastic By Weight Than Other 1,250 Ml Dispensers Without Compromising Reliability Or Durability.', 12, 'soap-container.png'),
(64, 63, 'Pd Portable Dispensing Gun', 'Arsenal One Pd Portable Dispensing Gun', 7, 'Each', 24.19, 'HIL99706', 'Portable Dispensing Gun For Use With Arsenal One Refill Products. *Shown Here With An Arsenal One Refill. Asse 1055B Certified.', 11, 'Equipment_128.png'),
(65, 64, 'Big Jinx Roach & Ant Killer', 'Big Jinx Roach & Ant Killer, 14 Oz.', 14, 'Each', 5.43, 'CLR296', 'Provides Quick Killing Action And Residual Control. Kills Bugs You See And Even The Ones You Don#T See. Protects For Up To 3 Months. Pleasing Cherry Scent. Dielectric Breakdown Voltage Of 47,000 Volts. Spot And/Or Crack And Crevice Treatment.', 7, 'Misc_128.png'),
(66, 65, 'Bottle Carafe Poly', 'Bottle Carafe Poly 1 Qt.', 1347, 'Each', 0.62, 'HIL31950', 'Translucent Quart Spray Bottles In Quart Size. Sold As 1 32 Ounce Bottle. Trigger (Hil26011 Or Hil26013) Sold Separately. Made Of Polypropylene. Fda Compliant. 10\" X 3 3/8\"', 7, 'Misc_128.png'),
(67, 66, '44-Gallon Utility Container', 'Brute 44 Gallon Gray Utility Container W/ Vent Channel.', 4, 'Each', 46.80, 'RUB264360GY', 'Heavy-Duty, Round Container Without Lid Helps Decrease Workplace Injuries And Increase Productivity As Well As Safety And Cleanliness. Innovative Venting Channels Make Lifting Out Liners 50 Percent Easier, Improving Productivity And Reducing The Risk Of Injury. Integrated Cinches Secure The Liner, Allowing Efficient, Knot-Free Liner Changes. Reinforced Rounded Handles Make Lifting And Moving Easier, And Are Reinforced To Resist Tearing Or Damage From Even The Heaviest Loads. Contoured Base Handles Make The Container Easier To Lift And Control During Emptying. Strengthened Base Is Engineered To Be Dragged Over Rough Surfaces, Extending Life And Overall Durability Even In The Toughest Environments. Proprietary Design Constructed With The Highest Quality Material Plus A Uv Inhibitor Ensures Long Life In Even The Most Extreme Commercial Environments. It Never Fades, Warps, Cracks Or Can Be Crushed. Self-Draining Lid (Sold Separately) Eliminates Water Pooling.', 3, 'waste_128.png'),
(68, 67, 'Bulk Foam Soap Dispenser - Black', 'Bulk Foam Soap Dispenser - Black - 6 Per Case.', 0, 'Each', 6.67, 'HIL22297', '1000Ml Refillable Dispenser. Bottle Can Be Easily Removed For Cleaning And Filling. 1000Ml Capacity. Permanent Sturdy Pump. Pump And Cartridge Are Easily Removed For Cleaning Or Replacement. Lockable Cabinet Uses Same Key As Affinity Dispensers. Can Be Used For Liquid Soaps By Changing The Pump To Hil22097.', 12, 'soap-container.png'),
(69, 68, 'Soap Dispenser Automatic', 'Auto Bulk Fill 1200 Ml Soap Or Sanitizer Foam Dispenser Dispenser In White', 313, 'Each', 7.92, 'FSD1FM', 'Suitable For Liquid: Foaming Sanitizer/Soap (Bulk Pour In Refill). Refillable Bottle (1200Ml). Lockable With Window Design. Supports Dc(6V,1A) And Battery (The Standard Packing Does Not Include Dc Or Batteries). Light Indicator For Low Power. Includes Optional Drip Tray.', 12, 'soap-container.png'),
(70, 69, 'Chalk Anti-Dust', 'Crayola Nontoxic Anti-Dust Chalk, White, 12 Sticks/Box (50-1402)', 106, 'Cases', 21.05, 'BIN501402', 'Blackboard Chalk: Features 12 Sticks Of White Crayola Chalk For Use On Traditional Blackboards And Chalkboard Paint. Anti Dust Art Tools: Chalk Sticks Are Specially Formulated To Resist Breaking And Produce Less Dust Than Traditional Classroom Chalk. Classroom Supplies: Crayola Chalkboard Chalk Is Ideal For School Blackboards And Can Be An Essential Addition To School Supplies Lists. Safe & Nontoxic: Crayola Chalk Is Safe And Nontoxic, Ideal For Ages 3 & Up. Anti Dust. 12 Sticks. White Chalk. Great For The Classroom. 12Ct Anti Dust White Chalk Sticks Erases Easily. Low-Dust Chalk For Use On Most Chalkboards. Makes Clean, Smooth Lines.', 7, 'Misc_128.png'),
(71, 70, 'Universal Towel Dispenser - Manual', 'Dispenser Universal Hwrt Black.', 101, 'Each', 51.00, 'PAP306489', '7 7/8 In. Wide With A 1.9 In. Universal Core', 12, 'dispenser.png'),
(72, 71, 'Disposable Face Coverings', 'Disposable Ear Loop Nuisance Masks', 411, 'Cases', 40.00, '96620687', 'Nuisance Masks Are Disposable And Good For General Purpose Applications. They Offer Basic Protection To Help Reduce Irritants Including Dust, Pollen And Other Small Particles. Not Intended For Use By Healthcare Professionals Or For Any Medical Purpose', 10, 'PPE_128.png'),
(73, 72, 'Ostrich Feather Duster', 'Duster 23In. African Feather Duster - Brown Ostrich Feathers.', 4, 'Each', 12.18, 'IMP4603', 'Economy Ostrich Feather Duster Is Perfect For Dusting Irregular Surfaces, Small Spaces And Around Delicate Items. Fine, Soft Ostrich Feathers Have More Surface Area To Effectively Grab And Hold Dust Particles. Smooth Handle Is Durable And Lightweight To Provide Excellent Maneuverability. Convenient Hang Hole Allows Fast, Simple Storage. Length 23 Inches', 7, 'Misc_128.png'),
(74, 73, 'Starduster Lambswool Duster', 'Unger Starduster Lambswool Duster, 15\" Plastic Handle', 0, 'Each', 6.56, 'UNGLWDU0', 'Perfect For Dusting Shelves And Other Surfaces Superior Cleaning And Dust Removal Duster Can Be Used With Hiflo Nlite Poles By Attaching The Hiflo Nlite Locking Cone Adapter (Hfnlc) Or Telescopic Poles By Attaching The Ergotec Locking Cone (Ncan0). Bristle Material: Lambswool; Bristle Color: White; Handle Material: Plastic; Handle Color: Black. Unger Starduster Lambswool Duster, 15\" Handle, Sold As Each.', 7, 'Misc_128.png'),
(75, 74, 'Lambswool Duster', '33In. To 60In. Extended Twist-And-Lock Lambswool Duster', 18, 'Each', 7.97, 'IMP3106', 'Genuine 100% Lambswool Duster. Attracts Dust Like A Magnet; Will Not Streak Or Scratch. Ideal For Cleaning Ceiling Fans And Other Hard-To-Reach Areas; Washable', 7, 'Misc_128.png'),
(76, 75, 'Dustpan Plastic.', 'Dustpan Plastic.', 0, 'Each', 3.65, '', '', 5, 'Broom_128.png'),
(77, 76, 'Dustpan Short Handled.', 'Dustpan Short Handled.', 1, 'Each', 14.20, '', '', 5, 'Broom_128.png'),
(78, 77, 'Lambs Wool Duster', 'Duster Telescopic Lambs Wool Duster - 30In. - 45In.', 28, 'Each', 5.63, 'IMP3105', 'Attracts Dust Like A Magnet. Will Not Streak Or Scratch. Ideal For Cleaning Ceiling Fans And Other Hard-To-Reach Areas. Washable. Extends 30\" - 45\".', 7, 'Misc_128.png'),
(79, 78, 'Floor Sign', 'Floor Sign W/ Caution Wet Floor Imprint 2-Sided - Yellow.', 0, 'Each', 11.95, 'RUB611277YW', 'Lightweight And Versatile; Makes A Heavy Statement About Safety. Two-Sided, 25\" (63.5 Cm) Model For Use In Narrow Areas. Folding Design For Convenient Storage Or Transport On Janitor Cart.', 11, 'Equipment_128.png'),
(80, 79, 'Hand Crank Salt Spreader', '0.8 Gal./3 L Hand Crank Salt Spreader', 79, 'Each', 13.41, '8705A', 'Take A Bite Out Of Winter With The Chapin Hand Salt And Ice Melt Spreader. It Features A Rugged Poly Scoop With A Toothed Edge For Cutting Through Salt Making Scooping Easy. The Thumb Controlled Gate Adjustment And Trigger Gate Control Are Designed To Handle The Various Sizes Of Salt And Ice-Melt Smoothly, Enclosed Gears Keep Debris Out. The Impeller Is Designed To Provide An Even Spread Pattern. Durable Enough To Tackle The Ice All Season Long.', 11, 'Equipment_128.png'),
(81, 80, 'Hot Shot No Pest Strip', 'Hot Shot No Pest Strip Unscented Hanging Vapor Insect Repellent ', 31, 'Each', 5.96, 'B0019BK8AG', 'Hot Shot No Pest Strip Unscented Hanging Vapor Insect Repellent ', 7, 'Misc_128.png'),
(82, 81, 'Jet Force Wasp/Hornet', 'Claire Jet Force Wasp/Hornet 12/20 Oz', 0, 'Each', 8.27, 'CLR005', 'Long Range, Hornet And Yellow Jacket Killer Contains Tetramethrins And Other Active Ingredients. Literally Stop Pests In Flight. Powerful 20 Feet Blast Valve Allows Rapid Delivery. 20 Oz Can, 14 Oz Net Wt. Unit: Cs', 7, 'Misc_128.png'),
(83, 82, 'Waxed Paper Liners', 'Kraft Waxed Paper Liners W/ Gusset-Wax Finish.', 13, 'Cases', 20.37, 'HOS260', 'Fit Sanisac Container. 7-1/2\" X 3-1/2\" X 10-1/4\" Bags. 500 Per Case', 7, 'Misc_128.png'),
(84, 83, 'Upright Dust Pan', 'Lobby Pro Upright Dust Pan.', 29, 'Each', 17.60, 'RUB2531BK', 'Stylish Pan Design. Durable Rear Wheels Improve Wear Resistance. Ideal For Use In Malls, Restaurants And Lobbies. Will Not Stain, Discolor Or Absorb Odors. Adjustable Handle Grip Enhances User Comfort (Standard On 2533). Optional Hanger Bracket (2535) Allows For Easy Pan And Broom Transport And Storage. Bracket And Brooms Sold Separately.', 5, 'Broom_128.png'),
(85, 84, 'Glue Trap', 'Glue Trap, 10-1/4 In. L, 5-7/32 In. W, Pk2', 3, 'Each', 5.90, '3LMN7', 'Price For: Each Used For: Trapping Rats Overall Width: 5-7/32\" Includes: Hercules Putty(Tm) Item: Glue Trap Overall Length: 10-1/4\" Overall Height: 1/4\" Material: Plastic And Adhesive Trap Style: Bait Box Disposable: Yes Country Of Origin (Subject To Change): United States', 7, 'Misc_128.png'),
(86, 85, 'Urinal Screen', 'Ocean Mist 10/Pk Urinal Deodorizer Screen Wave 3D.', 12, 'Boxes', 29.57, '43235191', 'Sold In Boxes Of 10. Unique Hexagon Post & Lattice Technology Eliminates 99% Of Urine Splash. 2-Sided Design Ensures Correct Installation Every Time. Freshens The Urinal And The Restroom For 30 Days', 7, 'Misc_128.png'),
(87, 86, 'Deep Woods Insect Repellent', 'Deep Woods Insect Repellent, 6 Oz Aerosol', 22, 'Each', 0.00, 'SCJW 611081', '25% Deet Formula. Provides Up To Eight Hours Protection From Mosquitoes, Flies, Ticks, Chiggers And Fleas. Unscented, Non-Greasy And Resists Perspiration. Provides Long Lasting Repellency, Especially In Heavily Wooded Areas. Repels Disease Carrying Ticks, Mosquitoes, Black Flies, Sand Flies, Chiggers, Fleas, Gnats And No-See-Ums', 7, 'Misc_128.png'),
(88, 87, 'Chalkboard Eraser ', 'Quartet Chalkboard Eraser 5 X 2 X 1.', 163, 'Each', 4.14, 'QRT804526', 'This Absorbent Chalkboard Eraser Features A Soft Felt Surface To Remove Chalk Writing Both Quickly And Easily. Its Durable Design Is Made Of Six Strips Of Dense Felt On A Strong Felt Backing For Excellent Chalk Absorption And Cleaning Power. High-Quality Material Is Safe For Daily Use In Classrooms, Work Spaces And More. Chalkboard Eraser Is Perfect For Use On All Chalkboard Surfaces.', 7, 'Misc_128.png'),
(89, 88, 'Reclaimed Huck Towels', 'Reclaimed Huck Towels - 25 Lb Case Blue.', 25, 'Pounds', 4.60, 'MED2040', 'Reclaimed Huck Towels (Also Known As Surgical Towels) Are Cotton Hemmed Towel, And Hygenically Cleaned And Sanitized For Immediate Use. Towels Are Recycled From Surgical Cotton For An Environmentally Friendly Solution.', 7, 'Misc_128.png'),
(90, 89, 'Safety Scraper Replacement Blades', 'Safety Scraper Replacement Blades 100 /Box.', 5, 'Boxes', 19.98, 'UNGSRB30', 'No. 9 (11/2\") Razor Blades Packed In Convenient Re-Closable Plastic Trays So Blades Are Kept Safe And Dry To Prevent Rusting.', 11, 'Equipment_128.png'),
(91, 90, 'Safety Scraper', 'Safety Scraper W/ Unique Locking System.', 44, 'Cases', 3.10, 'UNGSR500', 'Unique Locking System Eliminates Blades From Sliding Out While Working. Uses Standard No. 9 (1 1/2\") Razor Blades (Not Included).', 11, 'Equipment_128.png'),
(92, 91, 'Jumbo Roll Toilet Paper Dispenser', 'Single 9In. Jumbo Roll Tissue Dispenser.', 20, 'Each', 8.12, 'VDCAE42V', 'Jumbo Roll Toilet Paper Dispenser - 9 Inch Single Roll, Wall Mount, Translucent Black', 12, 'dispenser.png'),
(93, 92, 'Dispenser Tissue', 'Dispenser Tissue 9\" Black Trans', 4, 'Each', 7.14, 'PAP42519', 'Our 9\" Tissue Dispenser Holds One Roll Of Toilet Tissue. This Dispenser Fits Where Larger Dispensers Can\'T, But Is Still Ideal For Heavy Traffic Washroom Usage.', 12, 'dispenser.png'),
(94, 93, 'Snow Shovel', 'Snow Shovel - 1 Ea', 19, 'Each', 20.39, '82761123', 'Snow Shovel - 1 Ea', 11, 'Equipment_128.png'),
(95, 94, 'Medium Duty Scrub Sponge', 'Sponge 74 C Scotch-Britetm Medium Duty Scrub Sponge - 20 Per Case.', 154, 'Each', 2.27, 'MIN61500110376', 'Our Premier Dual-Action, Medium-Duty Cleaning Pad/Sponge For Most Common Cleaning Jobs. Medium Abrasive Scotch-Brite(Tm) Material On One Side And Cellulose Sponge On The Other. Green/Yellow, 3.5\" X 6.25\" , 20 Per Case. Typical Applications: Walls, Tables, Fixtures, Countertops, Floors.', 7, 'Misc_128.png'),
(96, 95, 'Tampon.', 'Tampon.', 18, 'Each', 37.08, '', '', 7, 'Misc_128.png'),
(97, 96, 'Microfiber Glass Cloth - Blue', 'Trident Specialty Microfiber Glass Cloth - Blue.', 0, 'Packs', 14.22, 'HIL20023', 'Use For Glass And Mirrors. Fine Non-Streak Performance. 16 X 16 12 Pack', 7, 'Misc_128.png'),
(98, 97, 'Trigger Sprayer', 'Trigger Sprayer W/ 10In. Tube And 28Mm Neck General Purpose - White.', 1347, 'Each', 1.15, 'HIL26011', 'Adjustable Spray Trigger With Nylon Filter. Fits Hillyard Quart Bottles And Other Bottles With A 28Mm Neck. Quality Sprayer For General Purpose Applications Ergonomic Design, Comfortable, Value Priced Trigger Has Textured Grip 28/400 Mm Neck Finish', 7, 'Misc_128.png'),
(99, 98, 'Vector Fruit Fly Trap', 'Vector 960 Fruit Fly Traps-12 Traps.', 3, 'Cases', 108.95, 'B008ZVMXLK', 'Box Of 12 The 960 Vector Fruit Fly Trap Is Engineered With A 10-Hole Venting Lid To Optimize Drosophila Exposure To The Vapors Emitted From The Liquid Attractant. The Trap Lid Is Removable For Easy Monitoring And Identification Of Catch. There Are Outer And Inner Spill Resistant Rings To Reduce Accidental Loss Of The Liquid Attractant.', 7, 'Misc_128.png'),
(100, 99, 'Mop Bucket And Wringer', 'Wavebrake 44 Qt Down Press Combo Mop Bucket And Wringer.', 4, 'Each', 181.73, 'RUB757688YW', 'The Wavebrake Mop Bucket And Wringer System Reduces Splashing, Which Means A Safer Environment, Cleaner Floors, And Improved Productivity. Massive Capacity For The Largest Commercial Cleaning Jobs. Foot Pedal Water Evacuation Conveniently Located, No Lifting Required, For Worker Well-Being. Lasts 58 Times Longer Than Comparative Wringers. Tested To Exceed 50,000 Wringing Cycles, Average Wringers Perform Approximately 860 Cycles. Premium Tubular Steel And Structural Web Molded Plastic. Accepts Optional Dirty Water Bucket, 9C74.', 11, 'Equipment_128.png'),
(101, 100, 'Disposable Gloves Nitrile 2 Extra Large.', 'Nitrile, Disposable Gloves, 2Xl, Powder-Free, 6.7 Mil Palm Thickness', 0, 'Boxes', 14.16, '3NFC8', 'Powder-Free Nitrile Disposable Gloves Provide High Resistance To Puncture, Tearing, And Abrasion, And Good Resistance To Accidental Chemical Splash. Nitrile Gloves Are Generally Thinner And More Tactile Than Vinyl And Latex Gloves, While Maintaining Strength. Powder-Free, General Purpose Disposable Gloves Provide Basic Hand Protection Against Non-Hazardous Materials And Do Not Have A Powder Coating Inside The Glove, Reducing The Risk Of Allergic Reactions And Contamination. Eneral Purpose Disposable Gloves Are Used For Common Tasks Such As Cleaning, Handling Parts, And Other General Maintenance Tasks. Disposable Gloves Are Used Once And Thrown Away Or Recycled After Each Task To Reduce The Risk Of Cross-Contamination.', 4, 'Gloves_128.png'),
(102, 101, 'Exam Gloves Large', 'Exam Gloves Large - 100/Box, 10/Case.', 155, 'Boxes', 11.07, 'HIL30522', 'Ideal For Most Tasks Involving Minimal Risk Of Biological Contamination. Cost-Effective Solution Where Frequent Glove Changes Are Required. Meets Or Exceeds Astm And Fda Examination Glove Standards. Passes Astm F1671 For Resistance To Penetration By Bloodborne Pathogens', 4, 'Gloves_128.png'),
(103, 102, 'Exam Gloves Medium', 'Exam Gloves Medium - 100/Box, 10/Case.', 215, 'Boxes', 9.53, 'HIL30521', 'Ideal For Most Tasks Involving Minimal Risk Of Biological Contamination. Cost-Effective Solution Where Frequent Glove Changes Are Required. Meets Or Exceeds Astm And Fda Examination Glove Standards. Passes Astm F1671 For Resistance To Penetration By Bloodborne Pathogens', 4, 'Gloves_128.png'),
(104, 103, 'Exam Gloves Extra Large', 'Exam Gloves Xlarge - 100/Box, 10/Case.', 164, 'Boxes', 10.20, 'HIL30523', 'Ideal For Most Tasks Involving Minimal Risk Of Biological Contamination. Cost-Effective Solution Where Frequent Glove Changes Are Required. Meets Or Exceeds Astm And Fda Examination Glove Standards. Passes Astm F1671 For Resistance To Penetration By Bloodborne Pathogens', 4, 'Gloves_128.png'),
(105, 104, 'Chemical Resistant Gloves', 'Chemical Resistant Gloves, M, Glove Materials Nitrile, 1 PR', 0, 'Each', 1.51, '29UP83', 'Chemical Resistant, Water Resistant, Unsupported, Bisque Grip, Chlorinated, FDA Compliant', 4, 'Gloves_128.png'),
(106, 105, 'Chemical Resistant Gloves', 'Chemical Resistant Gloves, L, Glove Materials Nitrile, 1 PR', 0, 'Each', 1.54, '29UP84', 'Chemical Resistant, Water Resistant, Unsupported, Bisque Grip, Chlorinated, FDA Compliant', 4, 'Gloves_128.png'),
(107, 106, 'Chemical Resistant Gloves', 'Chemical Resistant Gloves, XL, Glove Materials Nitrile, 1 PR', 0, 'Each', 1.54, '29UP85', 'Chemical Resistant, Water Resistant, Unsupported, Bisque Grip, Chlorinated, FDA Compliant', 4, 'Gloves_128.png'),
(108, 107, 'Natural/Black Knit Gloves', 'Knit Gloves, Xl, Beige/Black, 1 Pr', 9, 'Pairs', 0.68, '2UUJ6', 'General Maintenance, Material Handling, Assembly, Shipping, And Receiving.  Double Sided.', 4, 'Gloves_128.png'),
(109, 108, 'Label Top Clean', 'Label Ready To Use #144 Top Clean.', 25, 'Each', 0.00, 'HIL31144', 'Color Coded, Pressure Sensitive Labe', 9, 'Labels-128.png'),
(110, 109, 'Label Super Hil-Tone', 'Label Ready To Use #215 Super Hil-Tone.', 25, 'Each', 0.00, 'HIL31215', 'Color Codes, Pressure Sensitive Labels.', 9, 'Labels-128.png'),
(111, 110, 'Label Nutra-Rinse', 'Label Ready To Use #219 Nutra-Rinse.', 25, 'Each', 0.00, 'HIL31219', 'Color Coded, Pressure Sensitive Labe', 9, 'Labels-128.png'),
(112, 111, 'Label Super Shine-All', 'Label Ready To Use #808 Arsenal Super Shine-All.', 25, 'Each', 0.00, 'HIL31603', 'Color Codes, Pressure Sensitive Labels.', 9, 'Labels-128.png'),
(113, 112, 'Label Heavy Duty Floor Cleaner', 'Label Ready To Use #809 Arsenal Heavy Duty Floor Cleaner.', 25, 'Each', 0.00, 'HIL31609', 'Color Codes, Pressure Sensitive Labels.', 9, 'Labels-128.png'),
(114, 113, 'Label Country Garden Air Freshener', 'Label Ready To Use Arsenal #804 Counntry Garden Air Freshener', 25, 'Each', 0.00, 'HIL31623', 'Color Codes, Pressure Sensitive Labels.', 9, 'Labels-128.png'),
(115, 114, 'Label Vindicator+', 'Label Ready To Use Arsenal #806 Vindicator+.', 99, 'Each', 0.00, 'HIL31625', 'Color Codes, Pressure Sensitive Labels.', 9, 'Labels-128.png'),
(116, 115, 'Label Re-Juv-Nal', 'Label Ready To Use Arsenal #816 Re-Juv-Nal.', 25, 'Each', 0.00, 'HIL31616', 'Color Codes, Pressure Sensitive Labels.', 9, 'Labels-128.png'),
(117, 116, 'Label Typhoon', 'Label Ready To Use Arsenal #821 Typhoon.', 25, 'Each', 0.00, 'HIL31821', 'Color Codes, Pressure Sensitive Labels.', 9, 'Labels-128.png'),
(118, 117, 'Label Glass Cleaner Green Select', 'Label Ready To Use Arsenal #827 Glass Cleaner Green Select.', 25, 'Each', 0.00, 'HIL31827', 'Color Codes, Pressure Sensitive Labels.', 9, 'Labels-128.png'),
(119, 118, 'Label Bathroom Cleaner Green Select', 'Label Ready To Use Arsenal #829 Bathroom Cleaner Green Select.', 25, 'Each', 0.00, 'HIL31829', 'Color Codes, Pressure Sensitive Labels.', 9, 'Labels-128.png'),
(120, 119, 'Label  Deep Action', 'Label Ready-To-Use #918 Deep Action.', 25, 'Each', 0.00, 'HIL31918', 'Color Codes, Pressure Sensitive Labels.', 9, 'Labels-128.png'),
(121, 120, 'Label Suprox - D', 'Rtu Label- Arsenal 832 Suprox - D.', 0, 'Each', 0.00, 'HIL31832', 'Color Codes, Pressure Sensitive Labels.', 9, 'Labels-128.png'),
(122, 121, 'Bag Red Liners.', 'Bag Red Liners.', 0, 'Each', 0.00, '', '', 3, 'waste_128.png'),
(123, 122, 'Duratuff Liners 60 Gal.', 'Duratuff Liners 60 Gal., 38X58, 0.97 Mil - Black, 100/Cs.', 25, 'Cases', 21.00, 'LL3860100K', 'Linear Low Density Lldpe Can Liners. When You\'Ve Got A Heavy Load, You Need A Bag That Will Stand Up To The Test. Duratuff Bags Pass With Flying Colors No Leaks, No Tears, And No Punctures. Just Superior Performance That\'S Suited To A Variety Of Industrial Applications. The Result: You Get Better Performance At A Lower Cost. Duratuff Bags Offer Dependable Performance And Are A Great, All- Purpose Solution For Industrial, Commercial, And Institutional Applications. Ideal For Everything From Paper And General Refuse, To Heavy Or Sharp Objects. Ideal When You Want The Feel Of A Thick, Strong Bag. Made With 100% Prime Virgin Resins Using Proprietary Formulas. Superior Strength, Puncture And Tear Resistance. Seamless Tubular Construction. Leak-Proof Star Seal. Available In Gauges From 0.34 To 2.00 Mil. Coreless Rolls For Ease Of Use And Storage. ', 3, 'waste_128.png'),
(124, 123, 'Payload Liners 56 Gal.', 'Payload Liners 56 Gal., 43X48, 1.7 Mil - Black, 100/Cs.', 0, 'Cases', 33.91, 'LR4348170K', 'Blended-Recycled Lldpe Can Liners. Hillyard Payload# Liners Meet Or Exceed Epa Guidelines For 10 Percent Post-Consumer Content. They#Re Made From A Combination Of Post-Consumer And Post Industrial Materials. And Here#S More Good News: You Don#T Have To Sacrifice Performance To Make An Environmentally Sound Choice. These Liners Deliver Strength And Thickness Equal To Your Toughest Applications. Even The Carton In Environmentally Friendly# Inks Used Are Water-Based And The Cartons Are Manufactured With Up To 60 Percent Recycled Content. Payload# Liners Are Made From Recycled Materials, So They#Re An Environmentally Better Choice. Perfect For Cost-Conscious Users Looking For A Thick Bag Suited To Heavy-Duty Applications Like Sharp, Heavy Or Irregular Waste. Made With High-Quality Blended Resins, Which Meet Or Exceed Epa Guidelines For 10% Post-Consumer Content. Super Tough # Great Puncture And Tear Resistance. Seamless Tubular Construction. Leak-Proof Star Steal. Designed For Extra-Heavy-Duty Use # Available In 1.00 To 2.00 Mil. Coreless Rolls For Ease Of Use And Storage. ', 3, 'waste_128.png');
INSERT INTO `products` (`product_id`, `product_location`, `product_title`, `short_desc`, `product_quantity`, `product_uom`, `product_price`, `product_number`, `product_description`, `product_category_id`, `product_image`) VALUES
(125, 124, 'Stellar Liners 60 Gal.', 'Stellar Liners 60 Gal., 38X60, 14 Mic - Natural, 200/Cs.', 23, 'Cases', 26.50, 'LH386014N', 'High Density-Hmw-Hdpe Can Liners. Gauge For Gauge, Stellar# Liners Handle Heavier Loads At A Lower Cost Versus Competitive Bags Made From Less-Advanced Films. These Liners Also Promote Environmental Source Reduction # Thinner, Stronger Films Mean Less Waste Going Into Incinerators Or Landfills. The Result: You Get Better Performance At A Lower Cost While Promoting Environmental Source Reduction. Stellar# Liners Bring Outstanding Performance And Environmental Source Reduction To A Wide Range Of Waste-Containment Needs, Including Foodservice, Commercial And Institutional Applications. These Liners Easily Handle Non-Sharp, Heavy, Wet Waste, Provide Highly Effective Odor Containment And Are An Environmentally Sound Choice. Made With Hmw-Hdpe Resins Using Our Exclusive Manufacturing Process. Maximum Strength And Load Capacity. Great Chemical Resistance And Odor Containment. Wide Range Of Temperature Resistance. Leak-Proof Star Seal. Coreless Rolls For Easy Use And Storage. ', 3, 'waste_128.png'),
(126, 125, 'Verde Liners 12-16 Gal.', 'Verde Liners 12-16 Gal., 24X33, 6 Mic - Natural, 1,000/Cs.', 55, 'Cases', 19.35, 'LHV24338N', 'Valued-Based Verde Can Liners Handle Heavier Loads At A Lower Cost Than Competitive Bags Made From Less-Advanced Films. These Liners Also Promote Environmental Source Reduction -- Thinner, Stronger Hillyard Films Mean Less Waste Going Into Incinerators Or Landfills. High Density Hmw-Dpe Value-Based Can Liners. Made With Fda Approved Hmw-Hdpe Resins (Natural Only) Using Our Exclusive Manufacutring Process. Exellent Chemical Resistance, Temperature Resistance And Odor Containment.Seamless Tubular Construction. Leak-Proof Star Steal. Sizes To Fit The Industry\'S Most Popular Receptacles. Convenient, Easy-Tear Perforation Separates Liners Within The Roll \n\n', 3, 'waste_128.png'),
(127, 126, 'Verde Liners 33 Gal.', 'Verde Liners 33 Gal., 33X40, 9 Mic - Natural, 500/Cs.', 22, 'Cases', 24.43, 'LHV334011N', 'Valued-Based Verde Can Liners Handle Heavier Loads At A Lower Cost Than Competitive Bags Made From Less-Advanced Films. These Liners Also Promote Environmental Source Reduction -- Thinner, Stronger Hillyard Films Mean Less Waste Going Into Incinerators Or Landfills. High Density Hmw-Dpe Value-Based Can Liners. Made With Fda Approved Hmw-Hdpe Resins (Natural Only) Using Our Exclusive Manufacutring Process. Exellent Chemical Resistance, Temperature Resistance And Odor Containment. Seamless Tubular Construction. Leak-Proof Star Steal. Sizes To Fit The Industry\'S Most Popular Receptacles. Convenient, Easy-Tear Perforation Separates Liners Within The Roll ', 3, 'waste_128.png'),
(128, 127, 'Utility Wax Mops', '24Oz Rayon Utility Wax Mops White - Narrow Band.', 36, 'Each', 6.23, 'HIL24543', 'With Quick Absorption And Liquid Release, 4-Ply Cut End Rayon Utility Wax Mops Are Great For Liquid Pick-Up, Economy Finishing And Disinfecting. Available In Both Narrow (1 1/4\") Or Wide (5\") Blue Headbands.', 6, 'Mop_128.png'),
(129, 128, 'Bowl Mop', 'Bowl Mop W/ Full Head.', 10, 'Each', 1.37, 'HIL20411', 'Full 5 3/4\" Mop Head For Greater Absorbency Acid-Resistant Polypropylene Strands.12\" Strong I-Beam Plastic Handle.', 7, 'Misc_128.png'),
(130, 129, 'Mop Dust', 'Mop 5In. X 24In. Infinity Twist Cotton Dust Mop - White.', 10, 'Each', 8.32, 'HIL52814', 'Industry Standard Dust Mop Is Constructed Of 4-Ply Cotton Blended Yarn Sewn To A Durable Synthetic Backing. Absorbent Yarn Provides Excellent Dust Retention And Is Ideal For General Maintenance. Natural Yarn With 3\" Wide Or 5\" Wide Blue Synthetic Backing. (60\" And 72\" Have White Backing.) Both Widths Are Available As Complete Sets (With Frame And 60\" Wood Handle ) Or Order Refills Separately.', 6, 'Mop_128.png'),
(131, 130, 'Dust Mop - Blue', 'Mop 5In. X 60In. Infinity Twist Cotton Dust Mop - Blue.', 5, 'Each', 28.52, 'HIL53409', 'Twisted Loop Yarn Provides Maximum Durability For Laundering And Heavy Use. No Cut Ends To Lint And Fray. Twisted Yarn Provides An Effective Dust Trap For Better Collection And Retention. Yarn Is Dyed Blue And Laundered.', 6, 'Mop_128.png'),
(132, 131, 'Mop Dust - White', 'Mop Dust 5In. X 60In. Infinity Twist- White.', 2, 'Each', 24.07, 'HIL52820', 'Industry Standard Dust Mop Is Constructed Of 4-Ply Cotton Blended Yarn Tufted Or Sewn To Durable Synthetic Backing. Absorbent Yarns Provides Excellent Dust Retention.', 6, 'Mop_128.png'),
(133, 132, 'Mop Fasttrack Finish', 'Mop Fasttrack Finish Narrow Band Head Medium-Blue & White.', 32, 'Each', 5.47, 'HIL24011', 'The Fasttrack Finish Mop Is Constructed Of A 6-Ply High-Wet Modulous Rayon Blend That Gives Quick, Controlled Liquid Release For Floor Finishing And Disinfecting. Blue And White Striped Yarn Keeps Mop Looking New And Identifies Mop As \"Finish Mop\" To Prevent Cross Contamination With Other Chemicals. Narrow (1 1/4\") Headband.', 6, 'Mop_128.png'),
(134, 133, 'Mop Wet Utility Wax', 'Mop Wet 12 Oz Rayon Utility Wax - White - Wide Band.', 0, 'Each', 4.73, ' HIL24516', 'With Quick Absorption And Liquid Release, 4-Ply Cut End Rayon Utility Wax Mops Are Great For Liquid Pick-Up, Economy Finishing And Disinfecting. Available In Both Narrow (1 1/4\") Or Wide (5\") Blue Headbands.', 6, 'Mop_128.png'),
(135, 134, 'Mop Wet Aggressor', 'Mop Wet Aggressor Loop Mop White -Large.', 37, 'Each', 5.68, 'HIL24992', 'High-Quality,Multi-Layered, Blended Cotton/Rayon/Synthetic Yarns Provides Good Absorption And Durability For This Top Of Line General Maintenance Mop. Excellent For General Cleaning.', 6, 'Mop_128.png'),
(136, 135, 'Mop Wet Super Crown ', 'Mop Wet Super Crown Blue-Large- Wide Band.', 51, 'Each', 7.11, 'HIL24987', 'High-Quality,Multi-Layered, Blended Cotton/Rayon/Synthetic Yarns Provides Good Absorption And Durability For This Top Of Line General Maintenance Mop. Excellent For General Cleaning.', 6, 'Mop_128.png'),
(137, 136, 'Caddy Bag', '2642 Brute Caddy Bag - 2632 2643 Containers.', 4, 'Each', 47.32, 'RUB2642YW', 'Snaps Securely Onto The Rim Of Brute 44-Gallon Containers (2643 And 2643-60). Durable Nylon Reinforced Vinyl Is Strong And Easy To Keep Clean. Twelve Pockets Of Various Sizes To Accommodate Most Cleaning Supplies. ', 3, 'waste_128.png'),
(138, 137, 'A-Gressive Staining & Mark Remover', 'A-Gressive Staining & Mark Remover 24 Pads /Cs.', 22, 'Cases', 25.77, 'HIL30312', 'This Innovative Cleaning Product Is Powered By The Microscopic Abrasive Qualities Of Genuine Melamine Resin-Based Foam. When Combined With Water, The Unique Properties Of Gentle Abrasion & Conformability \"Erase\" Away Stains And Marks Often Untouched By Many Chemical Products. This Breakthrough Approach To Cleaning Is Environmentally Sensitive And Ideal For Use In The Most Restrictive Of Regulatory Concerns As It Requires No Traditional Cleaning Chemicals Or Vocs. The Addition Of The Blue Durability Strip Provides Dimensional Stability To Harness Both The Power And The Longevity Of Each Individual Eraser. # Advanced Technology Melamine Foam Construction. # Use With Ordinary Tap Water Only - No Other Chemicals Or Vocs Needed. # Fortified With Blue Durability Strip For Maximum Life. # Easily Conforms To Contours & Grooves To Get To The Tough Stuff. # Ideal For Cleaning Crayon, Marker, Ink, Lipstick, Tea & Coffee Stains, Soap Scum, Scuff Marks, Fingerprints, Hard Water Spots, Red Wine Stains, Nicotine Film, Rust Spots, Pencil, Carbon. Residue, Burn Marks & Moore\n', 7, 'Misc_128.png'),
(139, 138, 'Black Heavy Duty Strip Pads', 'Black Heavy Duty Strip Pads 20\" - 20\" Pad - 5 Per Case.', 28, 'Cases', 27.49, 'HIL42920', 'Extra Aggressive Stripping Pad. Designed With Open Mesh Construction. Excellent For Removing Floor Finishes.', 8, 'floor_tech_128.png'),
(140, 139, 'Black Strip Pads', 'Black Strip Pads - 20\" Pad - 5 Per Case.', 22, 'Cases', 21.03, 'HIL42720', 'Designed For Heavy Duty Wet Stripping. Aggressively Removes Floor Finish And Dirt. Cleans Down To Original Surface.', 8, 'floor_tech_128.png'),
(141, 140, 'Champagne Burnish Pads', 'Champagne Burnish Pads - 20\" Pad - 5 Per Case.', 3, 'Cases', 20.75, 'HIL44020', 'Designed To Minimize Machine Drag While Producing An Unsurpassed Wet Look Gloss. Especially Effective On Medium To Hard Finishes. ', 8, 'floor_tech_128.png'),
(142, 141, 'Easer Burnish Pads', '20 In Non-Woven Polyester Fiber Round Burnishing Pad, 1500 To 3000 Rpm, Pink, 5 Pk ', 3, 'Each', 0.00, '5ND30', 'Environmentally Sustainable Pads Are Washable And Reusable. Burnishing Pads Are For Ultra High-Speed Floor Machines. The Eraser Pink 3600 Pads Produce Optimum Results On Harder Finishes And Heavy-Traffic Floors. Pads Remove Black Marks, Restore Excellent Gloss And Image Clarity.', 8, 'floor_tech_128.png'),
(143, 142, 'Pad 96 Utility Hand- Green', 'Green Nylon Scouring Pad.', 14, 'Each', 0.50, 'HIL29956', 'A Medium-Duty, Versatile Scouring Pad.', 7, 'Misc_128.png'),
(144, 143, 'Green Scrub Pads', 'Green Scrub Pads - 20\" Pad - 5 Per Case.', 3, 'Cases', 20.30, 'HIL42820', 'For Heavy Duty Wet Scrubbing Or Light Stripping. Aggressively Removes Dirt And Scuff Marks From Heavily Soiled Floors.', 8, 'floor_tech_128.png'),
(145, 144, 'High Productivity Pad', 'High Productivity Pad 7300, 20\".', 0, 'Each', 13.69, 'MIN61500014891', ' 20\" 3M(Tm) High Productivity Pad. Quickly And Thoroughly Removes Old Floor Finish, Dirt And Buildup. Unique, Open Web Construction Allows Stripping Solution To Flow Through Pad To Rinse Out Dirt And Reduce Loading For Increased Pad-To- Floor Contact And More Efficient Stripping. 5 Per Case. For Use On Rotary Or Automatic Low Speed (175-600 Rpm) Floor Machines. Recommended For Heavy Finish Buildup, Quick Stripping And Stain Removal. ', 8, 'floor_tech_128.png'),
(146, 145, 'Natural Extreme Burnish Pads', 'Natural Extreme Burnish Pads 20\" - 20\" Pad - 5 Per Case.', 1, 'Cases', 20.75, 'HIL42120', 'For Ultimate Results When Burnishing The Hardest Finishes. Blend Of Natural Fiber And Polyester With The Majority Natural Fiber. Provides The Optimum ?Wet Look? Finish.', 8, 'floor_tech_128.png'),
(147, 146, 'Pad 41 Utility - Brown', 'Pad 41 Utility - Brown.', 0, 'Packs', 4.48, 'HIL29960', 'All-Purpose Pad For Removing Finish Or Build-Up', 7, 'Misc_128.png'),
(148, 147, 'Pad 41 Utility- Black', 'Pad 41 Utility- Black.', 12, 'Packs', 4.52, 'HIL29957', 'A High Performance Pad For Extra Tough Jobs.', 7, 'Misc_128.png'),
(149, 148, 'Utility Swivel Holder W/ Pads', 'Pad 4170 Utility Swivel Holder W/ Pads.', 10, 'Each', 11.34, 'HIL29961', 'Swivel Holder With 3 Pads.', 7, 'Misc_128.png'),
(150, 149, 'White Light Duty Utility Pad', 'White Light Duty Utility Pad 4.5\"X10\".', 9, 'Packs', 4.48, 'HIL29959', 'Non-Abrasive Pad For Cleaning, Buffing And Polishing. For Use With Hil29961 Utility Pad Holder Kit', 7, 'Misc_128.png'),
(151, 150, 'White Polish Pads', 'White Polish Pads 20\" - 20\" Pad - 5 Per Case.', 4, 'Cases', 20.30, 'HIL42020', 'Extra Fine Pad For Polishing Clean Dry Floors. Use Dry Or With Restorative Chemicals To Produce A Wet Look Gloss.', 8, 'floor_tech_128.png'),
(152, 151, '3M White Super Polish', '3M White Super Polish Pad 4100, 17 In, 5/Case', 0, 'Each', 0.00, '61-5000-3595-3', '3M White Super Polish Pad 4100, 17 In, 5/Case. For Buffing Very Soft Finishes Or For Polishing Soft Waxes On Wood Floors. Removes Scuffs And Black Heel Marks And Enhances Floor Appearance. Equipment Type: Rotary Machine Speed: Low Speed, 175-600 Rpm', 8, 'floor_tech_128.png'),
(153, 152, 'Toilet Tissue, Jr Jumbo', 'Bathroom Tissue, 3.3\"X 1000\', Acclaim, 2-Ply, Jumbo Jr. (Rpjrt-2-Prem).', 158, 'Cases', 24.61, 'RPJRT-2-PREM', 'Bathroom Tissue, 3.3\"X 1000\', Acclaim, 2-Ply, Jumbo Jr.', 1, 'Paper-128.png'),
(154, 153, 'Bathroom Tissue Envision', 'Envision Standard Roll Embossed 2-Ply Toilet Paper By Gp Pro (Georgia-Pacific), 80 Rolls Per Case', 5, 'Cases', 38.43, 'GP19880', 'Environmentally Concerned Customers Appreciate The Reliable Performance Of Envision Standard Roll Embossed 2-Ply Toilet Paper. It Can Help Earn Leed Credits. A Sustainable Option, It Meets Green Seal Standard Gs-1 Based On Chlorine-Free Processing, Energy And Water Efficiency And Content Of 100% Recovered Material With A Minimum Of 25% Post-Consumer Material (See Greenseal.Org). It\'S Also Ul Ecologo Certified For Reduced Environmental Impact (View Specific Attributes Evaluated At Ul.Com/Eul-175). It\'S Also A Septic-Safe Toilet Paper Option, Great For All Standard Sewer And Septic Systems. Consumers Give This Toilet Paper High Marks For Its Softness, Quick Absorbency, Durability And Thickness. It\'S Great For Use In Education, Government, Manufacturing And Qsr Applications. The Smaller Size Carton Makes Handling Easier And Takes Up Less Of Your Valuable Storage Space Than Standard-Size Cases. The Leed Certification Mark Is A Registered Trademark Owned By The U.S. Green Building Council And Is Used By Permission.', 1, 'Paper-128.png'),
(155, 154, 'Multifold Paper Towels', 'Gp Pro Pacific Blue Basic M-Fold Recycled Papertowel', 12, 'Cases', 18.75, 'GP24590', 'Offers Dependable Absorbency, Thickness, And Strength. Green Seal Certified. Designed To Fit Into A Wide Range Of Multifold Or Trifold Towel Dispensers. 9.25\" X 9.5\" Folded Width: 3 1/4\" 250 Towels Per Pkg., 16 Pkg Per Case.', 1, 'Paper-128.png'),
(156, 155, 'Roll Towel (Pac)', 'Enmotion 10in Recycled Paper Towel Rolls By Gp Pro (Georgia-Pacific), Brown, 6 Rolls Per Case', 0, 'Cases', 23.60, 'GP89480', 'Brown Enmotion 10in Recycled Paper Towel Rolls Are A Sustainable Choice In Cost-Effective, High-Quality Paper Towels Specifically Engineered To Be Used With Our Enmotion 10in Automated Touchless Paper Towel Dispensers (59462A, 59460A, 59407A) Or Enmotion Impulse 10in 1-Roll Automated Touchless Paper Towel Dispensers (59488A, 59487A, 59447A) . Choose These Commercial Paper Towels For Dependable, Cost-Saving Performance And Customer Satisfaction. The High-Capacity 800\' X 10 Inch Paper Towel Rolls Help Minimize The Need For Refills. Shown Here In The 6-Roll Case, These Brown Paper Towels Are Also Available In A Space-Saving 3-Roll Case (89485). Enmotion 89480 Brown 10in Paper Towel Rolls Are Made With 100% Recycled Material And Contain At Least 50% Post-Consumer Recycled Fiber To Meet Or Exceed Epa Comprehensive Procurement Guidelines. A Usda Certified Biobased Product, They\'Re Also Ul Ecologo Certified For Reduced Environmental Impact. (View Specific Attributes Evaluated At Ul.Com/El Ul-175) Our Brown Enmotion 10\" Recycled Paper Towel Rolls Meet Green Seal Standard Gs-1, Based On Chlorine-Free Processing, Energy And Water Efficiency, And Content Of 100% Recovered Material, With A Minimum Of 50% Post-Consumer Material. (Learn More At Greenseal.Org)\nThe Leed Certification Mark Is A Registered Trademark Owned By The U.S. Green Building Council And Is Used By Permission.', 1, 'Paper-128.png'),
(157, 156, 'Roll Towel', 'Acclaim 2in Core Paper Towel Rolls By Gp Pro (Georgia-Pacific), White, 6 Rolls Per Case', 151, 'Cases', 23.75, 'GP26602', 'These Roll Towels Are Designed With A Larger 2 Inch Cores To Fit Into A Wide Range Of Everyday Hardwound Roll Towel Dispensers. Acclaim High Capacity White Economical Hardwound Towels Help You Keep Costs Under Control. Low Per-Unit Costs Makes These Towels The Affordable Choice For Areas Such As Washrooms In Government And Public Facilities, Office Buildings, Foodservice Facilities And Lodging. Acclaim Hardwound Roll Towels Let You Offer Your Customers Quality And Reliable Performance At A Low Cost', 1, 'Paper-128.png'),
(158, 157, 'Sensor Filter Bag', 'Sensor Filter Bag Pack 10/Pkg 25/Cs #5300.', 6, 'Each', 13.57, 'WIN86000500', 'For Use With Windsor Sensor And Versamatic Plus Vacuums', 7, 'Misc_128.png'),
(159, 158, 'Sensor Upright Vacuum', 'Sensor Upright Vacuum.', 7, 'Each', 424.41, 'WIN10120700', 'Hepa Final Stage Filtration Standard For Better Indoor Air Quality. Dual-Stage Filtration Provides Cleaner Air To The Filter, Extending The Life Up To 200-300 Hours, Saving You Time And Money. Bag-Full And Check Brush Indicators Are Mechanical For Even Greater Reliability. Daytime Cleaning And Operation In Noise-Sensitive Areas Possible With The Low Noise Level Of 67 Db(A).', 11, 'Equipment_128.png'),
(160, 159, 'Short Handle Scratch Brush', '7 3/4 inL Nylon Short Handle Scratch Brush, 5 PK', 0, 'Packs', 0.00, '1VAG5', 'Brush cleans threads, files, metal parts, and castings; remove rust, paint, scale, and solder.', 7, 'Misc_128.png'),
(161, 160, 'Arsenal 1 Green Select Glass Cleaner.', 'Arsenal 1 Green Select Glass Cleaner.', 0, 'Each', 0.00, '', '', 2, 'chemicals_128.png'),
(162, 161, 'Arsenal Suprox 1/2\" Gallon.', 'Arsenal Suprox 1/2\" Gallon.', 0, 'Each', 13.11, '', '', 2, 'chemicals_128.png'),
(163, 162, 'Belt Vac Eureka.', 'Belt Vac Eureka.', 0, 'Each', 0.00, '', '', 11, 'Equipment_128.png'),
(164, 163, 'Belt Vac Eureka/Kent.', 'Belt Vac Eureka/Kent.', 0, 'Each', 0.00, '', '', 11, 'Equipment_128.png'),
(165, 164, 'Bloodborne Kit', 'Bloodborne Pathogens Protection Kit, Blue/White, 1 Ea ', 0, 'Each', 0.00, '35KT07', 'Genuine First Aid Bloodborne Pathogens Kit Contains A Variety Of Products, Equipment, And Materials To Help Guard And Protect Caregivers And Others From Ill Or Injured Patients. The Hard Wall-Mountable Plastic Case Contains Separately Packaged Cpr Mask Pack And Spill Clean-Up Pack.', 11, 'Equipment_128.png'),
(166, 165, 'Bottle Gal Translucent Dilution.', 'Bottle Gal Translucent Dilution.', 0, 'Each', 0.00, '', '', 11, 'Equipment_128.png'),
(167, 166, 'Bottle Qt Translucent Dilution.', 'Bottle Qt Translucent Dilution.', 0, 'Each', 0.89, '', '', 7, 'Misc_128.png'),
(168, 167, 'Broom Large Angle.', 'Broom Large Angle.', 0, 'Each', 5.98, '', '', 5, 'Broom_128.png'),
(169, 168, 'Brush 8\" Counter.', 'Brush 8\" Counter.', 0, 'Each', 0.00, '', '', 5, 'Broom_128.png'),
(170, 169, 'Brush Spot Carpet.', 'Brush Spot Carpet.', 0, 'Each', 0.00, '', '', 5, 'Broom_128.png'),
(171, 170, 'Brush Wire Large.', 'Brush Wire Large.', 0, 'Each', 0.00, '', '', 7, 'Misc_128.png'),
(172, 171, 'Brush Wire Small.', 'Brush Wire Small.', 0, 'Each', 0.00, '', '', 7, 'Misc_128.png'),
(173, 172, 'Bucket 14 Qt.', 'Bucket 14 Qt.', 0, 'Each', 0.00, '', '', 3, 'waste_128.png'),
(174, 173, 'Cleaner Crew.', 'Cleaner Crew.', 0, 'Each', 0.00, '', '', 2, 'chemicals_128.png'),
(175, 174, 'Cleaner Heavy Duty.', 'Cleaner Heavy Duty.', 0, 'Each', 0.00, '', '', 2, 'chemicals_128.png'),
(176, 175, 'Cleaner Liberty.', 'Cleaner Liberty.', 0, 'Each', 0.00, '', '', 2, 'chemicals_128.png'),
(177, 176, 'Cleaner Murphy Oil.', 'Cleaner Murphy Oil.', 0, 'Each', 0.00, '', '', 2, 'chemicals_128.png'),
(178, 177, 'Cleaner Stride.', 'Cleaner Stride.', 0, 'Each', 0.00, '', '', 2, 'chemicals_128.png'),
(179, 178, 'Cleaner Virex.', 'Cleaner Virex.', 0, 'Each', 16.99, '', '', 2, 'chemicals_128.png'),
(180, 179, 'Dispenser Ppr Twl Chrome.', 'Dispenser Ppr Twl Chrome.', 0, 'Each', 0.00, '', '', 12, 'dispenser.png'),
(181, 180, 'Disposable Coveralls Large', 'Disposable Coveralls - White/L.', 11, 'Cases', 161.63, '6LY35', 'Lightweight Zipper-Front Coveralls Provide Puncture- And Tear-Resistant Protection And Freedom Of Movement In Wet Or Dry Applications. Inherent Protective Shield Stops Submicron Particles. Feature Anti- Static Fabric, Storm Flap, And Set-In Sleeves.', 11, 'Equipment_128.png'),
(182, 181, 'Disposable Coveralls Extra Large', 'Disposable Coveralls - White/Xl.', 3, 'Each', 2.68, '6LY36', 'Lightweight Zipper-Front Coveralls Provide Puncture- And Tear-Resistant Protection And Freedom Of Movement In Wet Or Dry Applications. Inherent Protective Shield Stops Submicron Particles. Feature Anti- Static Fabric, Storm Flap, And Set-In Sleeves.', 11, 'Equipment_128.png'),
(183, 182, 'Disposable Coveralls Extra Extra Large', 'Disposable Coveralls - White/Xxl.', 13, 'Each', 2.71, '6LY37', 'Lightweight Zipper-Front Coveralls Provide Puncture- And Tear-Resistant Protection And Freedom Of Movement In Wet Or Dry Applications. Inherent Protective Shield Stops Submicron Particles. Feature Anti- Static Fabric, Storm Flap, And Set-In Sleeves.', 11, 'Equipment_128.png'),
(184, 183, 'Disposable Sanitary Napkin.', 'Disposable Sanitary Napkin.', 0, 'Each', 42.71, '', '', 7, 'Misc_128.png'),
(185, 184, 'Eraser Felt Board - 12\".', 'Eraser Felt Board - 12\".', 0, 'Each', 0.00, '', '', 7, 'Misc_128.png'),
(186, 185, 'Pad 27 In Burnish Beige.', 'Pad 27 In Burnish Beige.', 0, 'Each', 3.90, '', '', 8, 'floor_tech_128.png'),
(187, 186, 'Funnel 1/2Pt.', 'Funnel 1/2Pt.', 0, 'Each', 0.00, '', '', 3, 'waste_128.png'),
(188, 187, 'Funnel 1Pt.', 'Funnel 1Pt.', 0, 'Each', 0.00, '', '', 3, 'waste_128.png'),
(189, 188, 'Funnel 2Qt.', 'Funnel 2Qt.', 0, 'Each', 0.00, '', '', 3, 'waste_128.png'),
(190, 189, 'Glove Flock Large.', 'Glove Flock Large.', 0, 'Each', 1.25, '', '', 4, 'Gloves_128.png'),
(191, 190, 'Glove Flock Medium.', 'Glove Flock Medium.', 0, 'Each', 0.00, '', '', 4, 'Gloves_128.png'),
(192, 191, 'Glove Flock Small.', 'Glove Flock Small.', 0, 'Each', 0.00, '', '', 4, 'Gloves_128.png'),
(193, 192, 'Glove Flock Xtra Large.', 'Glove Flock Xtra Large.', 0, 'Each', 0.00, '', '', 4, 'Gloves_128.png'),
(194, 193, 'Hand Sanitizer', 'Clean Freak Clean Freak Hand Sanitizer 1-Gallon', 10, 'Each', 29.99, '2560927', 'Clean Freaks Gallon Bottle Is An 80% Antiseptic Alcohol Hand Sanitizer. The Pump Top Makes For Easy Application, And The Gallon Volume Will Last For A Long Time. With An Orange Sent Added There Is Not Alcohol Smell. 80% Antiseptic Alcohol. 1 Gallon Bottles With Pump Top. Outrageous Orange Scent. Made In The Usa', 10, 'PPE_128.png'),
(195, 194, 'Lid Flip Top Square.', 'Lid Flip Top Square.', 0, 'Each', 0.00, '', '', 3, 'waste_128.png'),
(196, 195, 'Lid Funnel Top.', 'Lid Funnel Top.', 0, 'Each', 0.00, '', '', 3, 'waste_128.png'),
(197, 196, 'Liner Floor Style Sanitary Recpt 1000Cs.', 'Liner Floor Style Sanitary Recpt 1000Cs.', 0, 'Cases', 114.36, '', '', 3, 'waste_128.png'),
(198, 197, 'Mop Dust Acrylic Velcro Back 42In Bl 8Cs.', 'Mop Dust Acrylic Velcro Back 42In Bl 8Cs.', 0, 'Each', 5.00, '', '', 7, 'Misc_128.png'),
(199, 198, 'Quick & Clean Citrus-Scrub', 'Hillyard Quick & Clean Citrus-Scrub - 19 Oz Net Wt.', 0, 'Each', 4.93, 'HIL0102855', 'Formulated With Orange Citrus Solvents, Removes Dirty Hand Prints From Walls And Doors, Scuff Marks From Floors, Bathtub Rings, Soot, Smoke Film And More. Foam Clings To Vertical Surfaces For Quick Spot Cleaning. Spray On - Wipe Clean Foaming Action.', 2, 'chemicals_128.png'),
(200, 199, 'Sanitary Napkin Maxi Thin Pad 250 Cs.', 'Sanitary Napkin Maxi Thin Pad 250 Cs.', 0, 'Cases', 154.00, '', '', 7, 'Misc_128.png'),
(201, 200, 'Scraper Brute Long.', 'Scraper Brute Long.', 0, 'Each', 0.00, '', '', 11, 'Equipment_128.png'),
(202, 201, 'Shower Up.', 'Shower Up.', 0, 'Each', 0.00, '', '', 7, 'Misc_128.png'),
(203, 202, 'Sign Restroom Closed.', 'Sign Restroom Closed.', 0, 'Each', 0.00, '', '', 11, 'Equipment_128.png'),
(204, 203, 'Sponge Cellulose 8Au Large 24Cs.', 'Sponge Cellulose 8Au Large 24Cs.', 0, 'Cases', 21.00, '', '', 7, 'Misc_128.png'),
(205, 204, 'Sponge Cellulose Small.', 'Sponge Cellulose Small.', 0, 'Each', 0.00, '', '', 7, 'Misc_128.png'),
(206, 205, 'Squeegee Channel 12\".', 'Squeegee Channel 12\".', 0, 'Each', 0.00, '', '', 7, 'Misc_128.png'),
(207, 206, 'Squeegee Channel 18\".', 'Squeegee Channel 18\".', 0, 'Each', 0.00, '', '', 7, 'Misc_128.png'),
(208, 207, 'Squeegee Floor 30\".', 'Squeegee Floor 30\".', 0, 'Each', 5.53, '', '', 7, 'Misc_128.png'),
(209, 208, 'Squeegee Handle.', 'Squeegee Handle.', 0, 'Each', 0.00, '', '', 7, 'Misc_128.png'),
(210, 209, 'Squeegee Rubber 12\".', 'Squeegee Rubber 12\".', 0, 'Each', 0.00, '', '', 7, 'Misc_128.png'),
(211, 210, 'Squeegee Rubber 18\".', 'Squeegee Rubber 18\".', 0, 'Each', 0.00, '', '', 7, 'Misc_128.png'),
(212, 211, 'Steel Wool #3.', 'Steel Wool #3.', 0, 'Each', 0.00, '', '', 7, 'Misc_128.png'),
(213, 212, '4In. Replacement Blades', '4In. Replacement Blades - Ergotec Brute Maxi And Light Duty Scrapers', 0, 'Cases', 24.22, 'UNGRB10C', 'For Ergotec, Brute, Maxi And Light Duty Scrapers. 10 Carbon Steel Blades Per Dispenser. Reversible: 1/2 Sharp, 1/2 Blunt Blades. ', 11, 'Equipment_128.png'),
(214, 213, 'The Brute Scraper Blade.', 'The Brute Scraper Blade.', 0, 'Each', 1.25, '', '', 11, 'Equipment_128.png'),
(215, 214, 'Tide 36Lb Box.', 'Tide 36 Lb All-Purpose Cleaner Powder, Detergent', 0, 'Each', 54.11, '9339193', 'Tide Professional Floor Cleaners. High Levels Of Surfactant And Builders Combined To Cut Through Tough Grease. Easy-Rinse Powder Formula Is Ideal For Quarry Tile. Cleans Floors, Walls, Pots And Pans. Can Be Used With Chlorine Bleach And Contains No Phosphate.', 2, 'chemicals_128.png'),
(216, 215, 'Nylon Scouring Pad', '6 In X 9 In Nylon Scouring Pad, White, 20Pk', 0, 'Packs', 23.44, '2NTG7', 'Tough Guy Scouring Pad Is Nonabrasive, And Able To Clean Without Scratching.', 7, 'Misc_128.png'),
(217, 216, '23 Gallon Slim Jim', '23 Gallon Slim Jim W/ Venting Channels - Recycling - Blue.', 5, 'Each', 63.96, 'RUB354007BL', 'Features Innovative Patent-Pending Solutions That Increase Efficiency And Improve Worker Well-Being. Integrated, Patent-Pending Venting Channels Take The Strain Out Of Liner Removal. Space- Saving Profile Fits Virtually Anywhere. Four Patent-Pending Can Liner Cinches Improve Productivity. Molded-In Handles And Base Grips Make Lifting And Emptying Easier.\n', 3, 'waste_128.png'),
(218, 217, 'Slim Jim Paper Recycling Top', 'Slim Jim Paper Recycling Top - Slim Jim Containers - Blue.', 21, 'Each', 42.76, 'RUB270388BL', 'Promote Recycling And Improve Productivity. Interchangeable, Color-Coded Tops Promote Waste Separation: Slotted Blue Top For Paper; Green, Blue And Brown Round-Hole Tops For Glass Bottles, Jars And Metal Cans; Gray Handle Tops For General Refuse. All Tops Fit On 3540, 3541, 3554 Containers.', 3, 'waste_128.png'),
(219, 218, 'Laundry Detergent', 'Laundry Detergent 4 - 1 Gallon Containers.', 4, 'Cases', 76.84, ' HIL0045906', 'Formulated To Be Used As A Top Loading Detergent, Hillyard Laundry Detergent Is Effective In Cold, Warm Or Hot Water. This Product Will Efficiently Remove Stains And Odors And Has A Fresh Linen Fragrance. Hillyard Laundry Detergent Should Be Used At 1-3 Ounces Per Load, Depending On The Size Of The Load And Soil Content. Can Be\nUsed In High-Efficiency Machines At 1 Oz Per Load.', 2, 'chemicals_128.png'),
(220, 219, 'Doodlebugtm Pad Holder', '3Mtm Doodlebugtm Pad Holder 6472.', 10, 'Each', 12.32, 'MIN70071312071', 'Holder Features Special Grippers That Hold Pads Firmly In Place And Provide For Easy Attachment And Changing Of Pads. Swivel Head On Pad Holder Is Threaded To Attach To Standard Brush Handles. 4 Per Case', 7, 'Misc_128.png'),
(221, 220, 'Enmotion Roll Towel', 'Gp Pro Enmotion 8\" Roll Towel - 8.2\" X 700\'.', 24, 'Each', 46.70, 'GP89420', 'Specifically Designed To Be Used With Our Enmotion[R] 8\" Recessed Automated Towel Dispenser And Enmotion Impulse 8 Towel Dispenser. Usda Certified Biobased Product', 1, 'Paper-128.png'),
(222, 221, 'Furniture Dolly', '900 Lb Capacity Hardwood Furniture Dolly 30\" Long X 18\" Wide X 5-5/8\" High, 3\" Wheels', 2, 'Each', 33.76, '93779577', 'Material Handling & Storage - Furniture Dolly, 900 Lbs. Load Limit Hardwood Furniture Dolly', 11, 'Equipment_128.png'),
(223, 222, 'Tork Universal Hand Towel Roll', 'Tork Universal Hand Towel Roll.', 30, 'Each', 24.80, '214650', 'Tork Universal Hand Towel Rolls Offer The Perfect Combination Of Performance And Value. Easy To Load And Maintain For Ease Of Use. Embossing Enhances Hand Feel And Maximum Absorbency With Fewer Towels Used Per Hand Dry. Long-Lasting Rolls Minimize Maintenance Costs While Maximizing Service. Moderate Roll Size Of 425 Linear Feet For Smaller Spaces And Compact Dispensers. Made From 100% Recycled Fiber, Minimum 40% Post-Consumer Fibers, Providing Environmental Benefits And A Positive Image Builder.', 1, 'Paper-128.png'),
(224, 223, 'Rectangular Wastebasket', 'Continental 2818Bk 28 Qt. / 7 Gallon Black Rectangular Wastebasket', 10, 'Each', 10.11, '2818BK', 'Low-Profile Design Great For Offices And Front-Of-The-House Use At Restaurants. Features A Sleek Black Coloring And Versatile 28 Qt. Size. Made Of Extremely Durable Plastic. Ensures Long-Lasting Use. Lip At The Upper Rim Provides A Good Grip For Carrying. Can Accommodate A Variety Of Can Liners. Easy To Clean And Take Out The Trash\n', 3, 'waste_128.png'),
(225, 224, 'Comet Deodorizing Cleanser ', 'Comet Deodorizing Cleanser With Chlorinol 24/21 Oz.', 192, 'Each', 1.94, 'PG32987', 'Bleaches Tough Stains And Disinfects As It Cleans. Comet\'S Abrasive Powder Cleanser With Chlorine Bleach Is Great For Scouring Tough Stains On Toilet Bowls, Wall Tiles, Tubs, Sinks, Chrome, Stainless Steel, Stove Tops, Ranges And Pots And Pans. Its Gentle Abrasives Can Be Used On Fiberglass, Tubs And Showers, Imitation Marble And Similar Hard Plastic Surfaces. Effective Against Staph, Salmonella And Pseudomonas. Epa Registration No. 3573-51. 21-Oz. Container. 24 Containers Per Case. ', 2, 'chemicals_128.png'),
(226, 225, 'Purell Sanitizing Gel Refil', 'Purell Sanitizing Gel Refill - 40.6 Fl Oz (1200 Ml) - Kill Germs - Hand, Skin - Clear', 0, 'Cases', 79.30, 'GOJ545604', 'Refreshing Gel Kills 99.99 Percent Of Most Common Germs That May Cause Illness. Purell Advanced Hand Sanitizer Gel Is Clinically Proven To Maintain Skin Health. Smart-Flex Bottle Design Uses 30 Percent Less Material Than Hdpe. Patent-Pending, Controlled-Collapse Technology Maintains Bottle Shape Longer While Emptying. Sanitary Sealed Refill Helps Prevent Contamination. Removable Pump Allows Easier Recycling. The 1200 Ml. Refill Is Designed For Use In Purell Tfx Dispensers.', 10, 'PPE_128.png'),
(227, 226, 'Lemon Odor Counteractant', 'Lemon Odor Counteractant 12 - 1 Quart Bottles.', 3, 'Cases', 51.96, 'HIL0018604', 'Ideal Choice For Combating Hard-To-Hide Odors In Restaurants, Hotels, Motels, Hospitals, Nursing Homes, Restrooms, Kitchens, Schools And Veterinary Clinics. It Can Be Safely Used On Any Washable, Nonporous Surface Including Floors, Toilets, Sinks, Garbage Containers, Ashtrays, Animal Cages And Kennels. Especially Effective For Suppressing Odors From Pets, Urine, Fecal Matter, Food And Cooking Odors, Smoke, Vomit, Body Odors And Mildew. Water-Soluble Deodorant. Can Be Used On Carpet. Concentrated For Economical Use\n', 2, 'chemicals_128.png'),
(228, 227, 'Green Scrub Pads', 'Green Scrub Pads - 17\" Pad - 5 Per Case.', 10, 'Cases', 15.65, 'HIL42817', 'For Heavy Duty Wet Scrubbing Or Light Stripping. Aggressively Removes Dirt And Scuff Marks From Heavily Soiled Floors.', 8, 'floor_tech_128.png'),
(229, 228, 'Black Strip Pads', 'Black Strip Pads - 17\" Pad - 5 Per Case.', 15, 'Cases', 16.40, 'HIL42717', 'Designed For Heavy Duty Wet Stripping. Aggressively Removes Floor Finish And Dirt. Cleans Down To Original Surface.', 8, 'floor_tech_128.png'),
(230, 229, 'Champagne Burnish Pads', 'Champagne Burnish Pads - 27\" - 2 Per Case.', 0, 'Cases', 9.69, 'HIL44027', 'Designed To Minimize Machine Drag While Producing An Unsurpassed Wet Look Gloss. Especially Effective On Medium To Hard Finishes.', 8, 'floor_tech_128.png'),
(231, 230, 'Oven & Grill Cleaner', 'Aerosol Oven & Grill Cleaner 18 Oz.', 54, 'Cases', 42.12, 'HIL0103855', 'A Heavy-Duty Formulation That Works On Grease, Caked-On Foods And Other Cooking Soils. For Daytime Application Or Overnight Cleaning. This Formula Penetrates, Emulsifies And Holds The Soils So You Can Wipe The Surface Clean With Water. The Thick Foam Clings To Vertical Surfaces - No Running, No Dripping. This Product Is Also Excellent For Cleaning Grills, Rotisseries, Stove Burners, Electric Frying Pans, And Other Cookware That Is Resistant To Caustic.', 7, 'Misc_128.png'),
(232, 231, 'Plunger', 'Plunger 20 In.', 9, 'Each', 10.37, 'HIL29992', 'Designed For Toilets And Drains, Full Pressure Blows Through Clogs. 25\" X 6\".', 7, 'Misc_128.png'),
(233, 232, 'Toilet Bowl Brush', 'Toilet Bowl Brush Plastic Handle Polypropylene Fill 14 1/2In.', 16, 'Each', 3.28, 'RUB6310WH', 'Polypropylene And Crimped Polypropylene Filles. Stain And Odor Resistant.', 7, 'Misc_128.png'),
(234, 233, 'Sponge Cellulose', 'Sponge Cellulose 8Az Large 24Cs.', 5, 'Cases', 75.60, 'HIL29975', 'Extra Large Commercial Sponge- 24/Carton- Cellulose- Yellow', 7, 'Misc_128.png'),
(235, 234, 'Frame Mop Dust', 'Frame Mop Dust 5In. X 60In. Swivel Snap Quick Change.', 17, 'Each', 6.33, 'HIL52821', 'These Heavy Duty, Industry Standard Frames Are Constructed Of Rust Resistant Plated Metal Wire For Long Life. Features Welded One Piece Construction.', 5, 'Broom_128.png'),
(236, 235, 'Dust Mop - Blue', 'Mop 5In. X 48In. Infinity Twist Cotton Dust Mop - Blue.', 5, 'Each', 13.82, 'HIL53408', 'Twisted Loop Yarn Provides Maximum Durability For Laundering And Heavy Use. No Cut Ends To Lint And Fray. Twisted Yarn Provides An Effective Dust Trap For Better Collection And Retention. Yarn Is Dyed Blue And Laundered.', 5, 'Broom_128.png'),
(237, 236, 'Instant Hand Sanitizer Gel', 'Instant Hand Sanitizer Gel -   Affinity Touch-Free Refill.\n', 8, 'Cases', 44.83, 'HIL0040202', 'Hillyard Instant Hand Sanitizer Gel Is An Alcohol-Based Hand Sanitizer Formulated To Be Used Without Water For Maximum Convenience. It Is Designed To Help Prevent The Spread Of Infection And Cross-Contamination. Hillyard Instant Hand Sanitizer Gel Is Formulated W Ith Aloe And Conditioners To Keep Hands Conditioned During Repeated Use.', 10, 'PPE_128.png'),
(238, 237, 'Touch-Free Dispenser', 'Touch-Free Dispenser 1 L - Black - Hand Sanitizer.\n', 0, 'Each', 5.00, 'HIL22283', 'One Reliable, Robust Dispenser Delivering Foam, Liquid Or Gel. Space-Saving Dispenser Design Utilizes 25% Less Plastic By Weight Than Other 1,000 Ml Dispensers Without Compromising Reliability Or Durability. (Ea)', 12, 'soap-container.png'),
(239, 238, 'Affinity Expressions Manual Dispenser', 'Affinity Expressions Manual Dispenser.\n', 31, 'Each', 0.00, 'HIL22304', 'Affinity Expressions By Hillyard Combines One Dispenser With 4 Output Options. Maximum Flexibility, Maximum Performance. Implement A Hand Hygiene And Skincare Program That Utilizes The Same Dispenser For Foam And Liquid Hand Soap, Gel Or Spray Hand Sanitizer, And Foam Or Gel Body Wash.', 12, 'soap-container.png'),
(240, 239, 'Deep Action Bonnet', '17\" Deep Action Bonnet - 6 Per Case.\n', 0, 'Each', 0.00, 'HIL49917', 'Use With Any Standard Rotary Floor Machine For Routine Carpet Bonneting, Spot And Stain Removal Or Polishing Wood Floors. Ideal For Medium To Thick Pile Carpet And High Wet Situations. Thick Pile Of 6-Ply, Cut And Loop Yarn Provides Excellent Absorption.', 8, 'floor_tech_128.png'),
(241, 240, 'Deep Action Bonnet ', '19\" Deep Action Bonnet - 6 Per Case.\n\n', 0, 'Each', 0.00, 'HIL49919', 'Use With Any Standard Rotary Floor Machine For Routine Carpet Bonneting, Spot And Stain Removal Or Polishing Wood Floors. Ideal For Medium To Thick Pile Carpet And High Wet Situations. Thick Pile Of 6-Ply, Cut And Loop Yarn Provides Excellent Absorption.', 8, 'floor_tech_128.png'),
(242, 241, 'Deep Action Bonnet', '21\" Deep Action Bonnet - 6 Per Case.\n\n\n', 0, 'Each', 0.00, 'HIL49921', 'Use With Any Standard Rotary Floor Machine For Routine Carpet Bonneting, Spot And Stain Removal Or Polishing Wood Floors. Ideal For Medium To Thick Pile Carpet And High Wet Situations. Thick Pile Of 6-Ply, Cut And Loop Yarn Provides Excellent Absorption.', 8, 'floor_tech_128.png'),
(243, 242, 'Quick Dry Bonnet', '17\" Quick Dry Bonnet - 6 Per Case.\n', 0, 'Each', 0.00, 'HIL49934', 'Quick Dry Bonnets Are Made Of Absorbent Terry Cloth Material, So It Absorbs More Dirt And Moisture. Its Thin Profile Allows The Bonnet To Get In Full Contact With The Carpet, Resulting In Faster Dry Time And Better Dirt Pick Up. For Use With Hillyard Deep Action Carpet Bonnet Cleaner.', 8, 'floor_tech_128.png'),
(244, 243, 'Quick Dry Bonnet', '19\" Quick Dry Bonnet - 6 Per Case.\n\n', 0, 'Each', 0.00, 'HIL49936', 'Quick Dry Bonnets Are Made Of Absorbent Terry Cloth Material, So It Absorbs More Dirt And Moisture. Its Thin Profile Allows The Bonnet To Get In Full Contact With The Carpet, Resulting In Faster Dry Time And Better Dirt Pick Up. For Use With Hillyard Deep Action Carpet Bonnet Cleaner.', 8, 'floor_tech_128.png'),
(245, 244, 'Quick Dry Bonnet', '21\" Quick Dry Bonnet - 6 Per Case.\n\n', 0, 'Each', 0.00, 'HIL49938', 'Quick Dry Bonnets Are Made Of Absorbent Terry Cloth Material, So It Absorbs More Dirt And Moisture. Its Thin Profile Allows The Bonnet To Get In Full Contact With The Carpet, Resulting In Faster Dry Time And Better Dirt Pick Up. For Use With Hillyard Deep Action Carpet Bonnet Cleaner.', 8, 'floor_tech_128.png'),
(246, 245, 'Individual Roll Towels Covid19.', 'Individual Roll Towels Covid19.', 204, 'Each', 3.96, 'GP89420', 'Specifically Designed To Be Used With Our Enmotion[R] 8\" Recessed Automated Towel Dispenser And Enmotion Impulse 8 Towel Dispenser. Usda Certified Biobased Product', 10, 'PPE_128.png'),
(247, 246, 'Face Shields', 'Clear Uncoated Polycarbonate Anti-Fog Disposable Face Shield', 25, 'Each', 9.00, '15022544', 'Face Shield (Anti-Fog). Clear. Uncoated. Polycarbonate. Adjustable Head Strap.', 11, 'Equipment_128.png'),
(248, 247, 'Light Duty Scraper', '4 Foot Light Duty Scraper On Aluminum Pole.', 10, 'Each', 27.09, 'UNGLH12C', 'Light Duty Scraper With 4\\\" Blade For Gum, Stickers, Wax Build-Up And Caked-On Dirt. Scraper Heads Are Angled For Better Performance, Greater Control And Strength. Razor-Sharp Blade Eliminates The Need For Strenuous Scraping On All Hard Surface Floors Including Vinyl And Resilient Tile, Flat And Smooth Surfaces. Blunt Blade For Delicate, Uneven Floors. Lightweight, Aluminum. 48\\\" Long, .83\\\" Diameter Handle With Ergonomic Grip And Hanging Hole.', 11, 'Equipment_128.png'),
(249, 248, '4In. Replacement Blades', '4In. Replacement Blades - Ergotec Brute Maxi And Light Duty Scrapers.', 10, 'Packs', 10.03, 'UNGRB10C', 'For Ergotec, Brute, Maxi And Light Duty Scrapers. 10 Carbon Steel Blades Per Dispenser. Reversible: 1/2 Sharp, 1/2 Blunt Blades.', 11, 'Equipment_128.png'),
(250, 249, 'Microfiber Cloth - Blue', 'Trident General Purpose Microfiber Cloth - Blue 12\" X 12\".\n', 0, 'Dozen', 8.70, 'HIL20028', '250 Gram Weight Cloth For General Purpose Cleaning Tasks. 12\" X 12\" 12 Pack', 7, 'Misc_128.png'),
(251, 250, 'Microfiber Cloth - Red', 'Trident General Purpose Microfiber Cloth - Red 12\" X 12\".\n', 0, 'Dozen', 8.70, 'HIL20029', '250 Gram Weight Cloth For General Purpose Cleaning Tasks. 12\" X 12\" 12 Pack', 7, 'Misc_128.png'),
(252, 251, 'Microfiber Cloth - Green', 'Trident General Purpose Microfiber Cloth - Green 12\" X 12\".', 0, 'Dozen', 8.70, 'HIL20030', '250 Gram Weight Cloth For General Purpose Cleaning Tasks. 12\" X 12\" 12 Pack', 7, 'Misc_128.png'),
(253, 252, 'Microfiber Cloth - Yellow', 'Trident General Purpose Microfiber Cloth - Yellow 12\" X 12\".\n', 0, 'Dozen', 8.70, 'HIL20031', '250 Gram Weight Cloth For General Purpose Cleaning Tasks. 12\" X 12\" 12 Pack', 7, 'Misc_128.png'),
(254, 253, 'Shoe Cover', 'Shoe Cover Blue 50 Pr/Pk.\n', 0, 'Packs', 43.99, 'FSCBPK50', 'Disposable Polypropylene Shoe Covers Protect Carpets And Floors. Economical And Disposable. Made Of Polypropylene Non Woven Fabric', 10, 'PPE_128.png'),
(255, 254, 'Hand Sanitizing Wipes', 'Rico Hand Sanitizing Wipes.', 1809, 'Each', 7.99, 'HHRICOSW80EXP', 'Kills 99.9% Of Germs And Microorganisms. 50 Wipes Per Quantity.', 10, 'PPE_128.png'),
(256, 255, 'Hand Sanitizer Spray', 'Pack Of (36), 8 Oz Pump Spray Bottles Liquid Hand Sanitizer Citrus Scent', 1008, 'Each', 4.49, '16989212', 'This Product Is Not A Substitute For Proper Handwashing & Has Not Been Tested To Determine Its Efficacy Against Viruses Such As The Coronavirus', 10, 'PPE_128.png'),
(257, 256, 'Alcohol Gel Hand Sanitizer', 'Alcohol Gel Hand Sanitizer - 16 Oz. Pump Bottle - 24 Bottles/Case.', 312, 'Each', 7.77, 'WG641481', '70% Alcohol-Based Gel Hand Sanitizer With Moisturizing Aloe Vera Is Formulated To Be Used Without Water Or Towels. Ethyl Alcohol Scent; New And Improved Fragrance. Made In The Usa. 16 Oz. Pump Bottle (Actual Bottle Style May Vary). Sold 24 Bottles Per Case.', 10, 'PPE_128.png'),
(258, 257, 'Alcohol Gel Hand Sanitizer', 'Alcohol Gel Hand Sanitizer - 8 Oz. Disc Top Bottle - Pkg Qty 24.', 213, 'Each', 4.13, 'WG641499', ' 70% Alcohol-Based Gel Hand Sanitizer With Moisturizing Aloe Vera Is Formulated To Be Used Without Water Or Towels. Ethyl Alcohol Scent; New And Improved Fragrance. Made In The Usa. 8 Oz. Bottle With Disc Top Cap. Sold In Quantities Of 24 Per Case.', 10, 'PPE_128.png'),
(259, 258, 'Microfiber Carpet Bonnet', '21 In Microfiber Carpet Bonnet White 5Cs.', 16, 'Cases', 71.04, 'RUBQ261WH', 'Microfiber Carpet Bonnets Are Constructed With Microfiber That Provides Better Cleaning Power And Longer Product Life. Best-In-The-Industry Microfiber Provides Better Cleaning Power And Longer Product Life. Microfiber Carpet Bonnets Work With Standard Rotary Floor Machines. Standard Thickness Bonnets Work Well With Shampoo Or Solvent-Based Chemicals; Use With 175 Rpm Floor Machines. The Low-Profile Bonnet Provides Improved Operator Control On Rotary Floor Machines From 175 To 300 Rpm', 8, 'floor_tech_128.png'),
(260, 259, 'Towel Roll White', 'Towel Roll White High Capacity 800 Ft Per Roll 6 Rolls.', 130, 'Cases', 44.64, ' PAP22000', 'This Ecosoft Controlled Roll Towel Is Designed For Customers Who Prefer Recycled Toweling That Helps Create A Cleaner Environment. This Ecosoft Toweling Has Added Value And Benefits Such As Controlled Usage And Cost Savings When Combined With Hillyard Brand Controlled Roll Towel Dispensers. Its High Capacity Is Ideal For High-Traffic Areas, Office Buildings And Hotel Lobby Restrooms Or Convention Facilities. High-Capacity - Most Efficient Towel To Use With Large Capacity Hillyard Brand 42500-Series Dispensers. Made Entirely From 100% Recovered Materials. Contains A Minimum Of 40% Post-Consumer Waste, Which Meets Epa Guidelines 800 Linear Feet Per Roll 6 Rolls Per Case.', 1, 'Paper-128.png'),
(261, 260, 'Clarke Advance Vacuum Bags', 'Advance Vacuum Bags Clark Vacuum  Pack Of 10.', 0, 'Packages', 16.88, '107413584', '10-Pack Of Bags For The Advance Spectrum Upright Vacuums. These Bags Are Disposable And Incorporate An Easy-To-Install Design Which Allows For Fast Replacement For Immediate Use. Incorporated Allergen Filtration Makes Sure No Dust Or Debris Escape.', 11, 'Equipment_128.png'),
(262, 261, 'Black Cleaning Cart', 'Black Cleaning Cart w/ Zippered Yellow Vinyl Bag', 0, 'Each', 148.65, 'RUB617388BK', 'Collect waste and transport tools for efficient cleaning. Smooth, easy-to-clean surface. Zippered bag for easy trash removal. Non-marking 8\" (20.3 cm) wheels and 4\" (10.2 cm) casters. Optional locking compartment to keep cleaning chemicals out of reach.', 11, 'Equipment_128.png');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_title` text NOT NULL,
  `product_location` text NOT NULL,
  `product_number` text NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `order_building` text NOT NULL,
  `order_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`report_id`, `product_id`, `order_id`, `product_title`, `product_location`, `product_number`, `product_price`, `product_quantity`, `order_building`, `order_name`) VALUES
(5, 254, 6, 'Dispenser Tissue', 'CUST92', 'PAP42519', 7.14, 1, 'Innovative Technology Building', 'rowz'),
(6, 2, 7, 'Fine Floor Sweep', 'CUST01', 'CSM4501623', 21.88, 1, 'Bellerive Hall', 'rowz'),
(8, 64, 8, 'Utility Swivel Holder W/ Pads', 'CUST148', 'HIL29961', 11.34, 1, 'Fine Arts Building', 'rowz'),
(9, 1, 9, 'Foam Block Fine Floor Sweep', 'CUST00', 'RUB9B02GY', 20.88, 1, 'Express Script Hall', 'rowz'),
(10, 2, 9, 'Fine Floor Sweep', 'CUST01', 'CSM4501623', 21.88, 1, 'Express Script Hall', 'rowz'),
(11, 2, 10, 'Fine Floor Sweep', 'CUST01', 'CSM4501623', 21.88, 1, 'Lucas Hall', 'rowz'),
(12, 4, 10, 'Duo-Sweep Warehouse Broom', 'CUST03', 'CSM3688314', 16.62, 1, 'Lucas Hall', 'rowz'),
(13, 1, 11, 'Foam Block Fine Floor Sweep', 'CUST00', 'RUB9B02GY', 20.88, 1, 'Music Building', 'rowz'),
(14, 3, 11, 'Corn Broom Warehouse', 'CUST02', 'RUB6383BL', 22.88, 1, 'Music Building', 'rowz'),
(15, 2, 12, 'Fine Floor Sweep', 'CUST01', 'CSM4501623', 21.88, 2, 'Clark Hall', 'rowz'),
(16, 3, 13, 'Corn Broom Warehouse', 'CUST02', 'RUB6383BL', 22.88, 1, 'Benton Hall', 'rowz'),
(17, 3, 14, 'Corn Broom Warehouse', 'CUST02', 'RUB6383BL', 22.88, 1, 'Campus Police Building', 'rowz'),
(18, 3, 15, 'Corn Broom Warehouse', 'CUST02', 'RUB6383BL', 22.88, 1, 'Education Administration Building', 'rowz'),
(19, 3, 16, 'Corn Broom Warehouse', 'CUST02', 'RUB6383BL', 22.88, 2, 'Fine Arts Building', 'rowz'),
(20, 3, 17, 'Corn Broom Warehouse', 'CUST02', 'RUB6383BL', 22.88, 2, 'Chancellors Residence', 'rowz'),
(21, 4, 17, 'Duo-Sweep Warehouse Broom', 'CUST03', 'CSM3688314', 16.62, 1, 'Chancellors Residence', 'rowz'),
(22, 4, 18, 'Duo-Sweep Warehouse Broom', 'CUST03', 'CSM3688314', 16.62, 2, 'KWMU Grand Center', 'rowz'),
(23, 5, 18, 'Mop Handle', 'CUST04', 'HIL22652', 9.96, 1, 'KWMU Grand Center', 'rowz'),
(24, 9, 18, 'Broom Lobby', 'CUST08', 'RUB6374BK', 8.92, 1, 'KWMU Grand Center', 'rowz'),
(25, 4, 19, 'Duo-Sweep Warehouse Broom', 'CUST03', 'CSM3688314', 16.62, 1, 'La Gras', 'joe'),
(26, 1, 20, 'Foam Block Fine Floor Sweep', '0', 'RUB9B02GY', 20.88, 1, 'Clark Hall', 'rowz'),
(27, 239, 21, 'Affinity Expressions Manual Dispenser', '238', 'HIL22304', 0.00, 1, 'Alumni House', 'rowz'),
(28, 248, 22, 'Light Duty Scraper', '247', 'UNGLH12C', 27.09, 9, 'Social Sciences & Business Building', 'rowz'),
(29, 263, 23, 'joe rottman', '262', 'RUB617388BK', 148.65, 50, 'Anheuser-Busch Hall', 'rowz');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `slide_id` int(11) NOT NULL,
  `slide_title` text NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`slide_id`, `slide_title`, `slide_image`) VALUES
(1, 'Go Green', 'sustainability green igportrait.png'),
(2, 'recycle', 'recycle.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `user_firstname` text NOT NULL,
  `user_lastname` text NOT NULL,
  `user_role` text NOT NULL,
  `user_photo` text NOT NULL,
  `user_team` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `user_firstname`, `user_lastname`, `user_role`, `user_photo`, `user_team`) VALUES
(1, 'rowz', '$2y$10$iusesomecrazystrings2udMKBnriVkJj0sWcluGLpSm4uIao14h6', 'rowz@testing.com', 'Rosemary', 'Romero', 'admin', 'umsl_type_yellow_234r_171g_0b.jpg', 1),
(2, 'becky', '$2y$10$iusesomecrazystrings2usd4tvnPcFaqNGeifMT3OhdXRZWDd2L6', 'becky@testing.com', 'Becky', 'Lin', 'admin', 'umsl_type_white.jpg', 1),
(3, 'joe', '$2y$10$iusesomecrazystrings2usd4tvnPcFaqNGeifMT3OhdXRZWDd2L6', 'joe@testing.com', 'Joe', 'Rottman', 'Team Lead', 'umsl_type_red_152r_30g_50b.jpg', 1),
(5, 'test', '$2y$10$iusesomecrazystrings2usd4tvnPcFaqNGeifMT3OhdXRZWDd2L6', 'test@mail.com', 'test', 'test', 'Team Lead', 'umsl_type_black.jpg', 1),
(6, 'admin', '$2y$10$iusesomecrazystrings2upG.qZ1GY57wWwdAjpSXdWfbhIw9kune', 'admin@admin.com', 'admin', 'admin', 'admin', 'umsl_type_yellow_234r_171g_0b.jpg', 0),
(7, 'test', '$2y$10$iusesomecrazystrings2udMKBnriVkJj0sWcluGLpSm4uIao14h6', 'pedro@mail.com', 'Pedro', 'Garcia', 'Team Lead', 'umsl_type_red_152r_30g_50b.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`building_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`meeting_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buildings`
--
ALTER TABLE `buildings`
  MODIFY `building_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `meeting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
