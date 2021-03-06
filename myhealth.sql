-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2018 at 02:39 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myhealth`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` int(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `adv`
--

CREATE TABLE `adv` (
  `adv_id` int(100) NOT NULL,
  `adv_name` varchar(200) NOT NULL,
  `adv_link` text NOT NULL,
  `adv_image_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adv`
--

INSERT INTO `adv` (`adv_id`, `adv_name`, `adv_link`, `adv_image_title`) VALUES
(1, 'Header adv (800 * 115)', '#', 'advwidth.JPG'),
(2, 'Homepage sidebar 1 adv (600 * 1000)', '#', 'advvertical.JPG'),
(3, 'Homepage sidebar 2 adv (600 * 1000)', '#', 'advvertical.JPG'),
(4, 'Details page adv (600 * 1000)', '#', 'advvertical.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(255) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `author_email` varchar(255) NOT NULL,
  `author_phone_number` varchar(255) NOT NULL,
  `author_joining_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `author_name`, `author_email`, `author_phone_number`, `author_joining_date`) VALUES
(1, 'সংবাদ প্রতিনিধি ', 'akternnasrin@gmail.com', '01735341932', '2018-03-21 09:02:08');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(255) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'লাইফস্টাইল'),
(2, 'সুস্থ্যজীবন'),
(3, 'সম্পর্ক'),
(4, 'খাবারদাবার'),
(5, 'নিউট্রিশন'),
(6, 'শরীরচর্চা'),
(7, 'অঙ্গ-প্রতঙ্গ '),
(8, 'ত্বকের যত্ন'),
(9, 'দাম্পত্য');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(255) NOT NULL,
  `post_category_id` int(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_intro` text NOT NULL,
  `post_content` text NOT NULL,
  `post_image` text NOT NULL,
  `post_views` int(255) NOT NULL,
  `post_status` varchar(255) NOT NULL,
  `specific_section` int(11) NOT NULL,
  `selected_post` int(11) NOT NULL,
  `post_archive_date` date NOT NULL,
  `post_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_author`, `post_title`, `post_intro`, `post_content`, `post_image`, `post_views`, `post_status`, `specific_section`, `selected_post`, `post_archive_date`, `post_date`) VALUES
(2, 2, '1', 'স্লিম হতে চান? মেনে চলুন পোশাকের এই নিয়মগুলো', '', '<p>স্লিম হতে অনেকে চেষ্টা করছেন নানা ভাবে। কেও পারছেন, কেও পারছেন না। তাতে কী? সামান্য পোশাকের কিছু পরিবর্তনে যদি নিজেকে স্লিম এবং&nbsp;sexy দেখাতে পারেন, তাহলে আর দেরি কেন? জেনে নিন পোশাক নির্বাচনের ক্ষেত্রে ৭টি পরামর্শ যা আপনাকে স্লিম এবং ফিট দেখাবে।</p><p>স্লিম হতে চান সবাই। কিন্তু বহু চেষ্টা করেও যারা ওজন কমাতে পারছেন না, তারা স্বাভাবিকের চেয়ে অনেক স্লিম হতে পারেন পোশাক নির্বাচনের মধ্য দিয়ে। এখানে নিজেকে স্লিম দেখাতে পোশাক নির্বাচনের ক্ষেত্রে ৭টি পরামর্শ দেওয়া হলো। বাড়িতে আয়নার সামনে দাঁড়িয়ে পরখ করে দেখতে পারবেন।<br /><strong>স্লিম হতে চান? মেনে চলুন পোশাকের এই নিয়ম গুলো</strong></p><p><strong>১. কালো রং নির্বাচন করুন :</strong>&nbsp;যেকোনো দেহকে চিকন করে দেয় কালো পোশাক। যেকোনো ধরনের কালো পোশাকেই স্বাভাবিকের চেয়ে বেশি স্লিম দেখাবে আপনাকে। এ কারণেই বহুকাল ধরে মানুষের কাছে কালো পোশাকের এতটা আবেদন। তাই চিকন হতে এই পরামর্শটি একেবারে মৌলিক।</p><p><strong>২. হিল জুতো পরুন :</strong>&nbsp;হিল জুতো নারীদের সৌন্দর্য ফুটিয়ে তুলতে অনন্য। এটি একাধারে আপনাকে লম্বা এবং চিকন করে দেবে। হিল জুতো পরার সঙ্গে সঙ্গে আপনার অবয়বটাই বদলে যাবে যা আরো আকর্ষণীয় হয়ে উঠবে।</p><p><strong>৩. আকৃতিকে কাজে লাগান :</strong>&nbsp;মোটা বা চিকন যেমনই হোন না কেনো, নারীসুলভ আকৃতি রয়েছে আপনার। এর বিশেষত্বকে কাজে লাগান। যেমন- যদি আপনার কোমর বেশ সরু হয় তবে তা ফুটিয়ে তুললে বেশ চিকন দেখাবে আপনাকে। যদি ভারী নিতম্ব হয়, তবে নিচের অংশে একটু ঢিলেঢালা পোশাক পরতে হবে যেনো তা চোখে না লাগে।</p><p><strong>৪. আনুভূমিক স্ট্রাইপ ও বড় প্রিন্ট এড়িয়ে চলুন :</strong>&nbsp;দেহের সঙ্গে আনুভূতিক স্ট্রাইপের পোশাক আপনাকে আরো মোটা করে দেবে। তা ছাড়া বড় বড় প্রিন্টের পোশাকও স্থূল করে দেয় দেহকে। তাই সরু এবং উলম্ব স্ট্রাইপের পোশাক পরুন। তা ছাড়া কোনো প্রিন্ট খাপ খাচ্ছে কিনা তা জেনে নিতে পারেন ফ্যাশন সচেতন কোনো বন্ধুর কাছ থেকে।</p><p><strong>৫. ডার্ক ওয়াশ জিন্স পরুন :</strong>&nbsp;জিন্সে স্লিম দেখাতে হলে ডার্ক রংয় বেছে নিন। কারণ হালকা রংয়ের জিন্সে আপনাকে মোটাসোটা দেখাবে। তাই জিন্স কেনার সময় সাবধান।</p><p><strong>৬. অ্যাক্সেসরিজের ব্যবহার :</strong>&nbsp;গহনাসহ সাজসজ্জার বিভিন্ন অ্যাক্সেরসরিজের ব্যবহারে নিজের দেহে স্লিম ভাব ফুটিয়ে তুলতে পারেন। সহজে চোখে পড়ে এমন নেকলেস বা দুল পরতে পারেন। এতে মানুষের চোখ আপনার গহনার দিকে বেশি থাকবে।</p><p><strong>৭. পিছ পা হবেন না :</strong>&nbsp;মোটা দেহকে স্লিম দেখানোর কাজ থেকে পিছ পা হবেন না। দেহ কমানোর জন্য বিভিন্ন ব্যায়াম চালিয়ে যান। এ ছাড়া এসব পরামর্শ প্রয়োগ করতে থাকুন। হতাশ হয়ে সব বন্ধ করে দিলে আত্মবিশ্বাস হারিয়ে ফেলবেন।</p>', 'deepika-padukone-in-slim-dress-696x392.jpg', 18, 'published', 1, 0, '2017-09-21', '\r\n১০:৫৫ মিঃ, সেপ্টেম্বর ২১, ২০১৭				'),
(3, 2, '1', 'অ্যান্টিবায়োটিক নিয়ে সচেতনতা সপ্তাহ', '<p>অ্যান্টিবায়োটিক নিয়ে সচেতনতা সপ্তাহ চলছে। অ্যান্টিবায়োটিকের অকার্যকারিতা বা রেজিসট্যান্স যে হারে বাড়ছে, তাতে ধারণা করা হচ্ছে যে ভবিষ্যতে সুপার বাগ বা অ্যান্টিবায়োটিক প্রতিরোধী ভয়ানক প্রাণসংহারী জীবাণুর কাছে মানুষের শোচনীয় পরাজয় ঘটবে। অ্যান্টিবায়োটিকের যথেচ্ছ ও ভুল ব্যবহার, অতিব্যবহার আবার কখনো কম মাত্রায় ব্যবহার এই রেজিসট্যান্সের জন্য দায়ী। এ জন্য চিকিৎসক, স্বাস্থ্যসেবীসহ সাধারণ মানুষকেও সতর্ক হতে হবে।</p>', '<p>অ্যান্টিবায়োটিক নিয়ে সচেতনতা সপ্তাহ চলছে। অ্যান্টিবায়োটিকের অকার্যকারিতা বা রেজিসট্যান্স যে হারে বাড়ছে, তাতে ধারণা করা হচ্ছে যে ভবিষ্যতে সুপার বাগ বা অ্যান্টিবায়োটিক প্রতিরোধী ভয়ানক প্রাণসংহারী জীবাণুর কাছে মানুষের শোচনীয় পরাজয় ঘটবে। অ্যান্টিবায়োটিকের যথেচ্ছ ও ভুল ব্যবহার, অতিব্যবহার আবার কখনো কম মাত্রায় ব্যবহার এই রেজিসট্যান্সের জন্য দায়ী। এ জন্য চিকিৎসক, স্বাস্থ্যসেবীসহ সাধারণ মানুষকেও সতর্ক হতে হবে।</p><p>* মনে রাখবেন ভাইরাসের বিরুদ্ধে অ্যান্টিবায়োটিক কাজ করে না। এটি কেবল ব্যাকটেরিয়াকে নাশ করতে পারে। আমরা প্রতিদিন নানা ধরনের ভাইরাসে আক্রান্ত হচ্ছি; যেমন: ফ্লু, ডায়রিয়া, সর্দি-কাশি, টনসিল বা গলনালির প্রদাহ, ডেঙ্গু বা চিকুনগুনিয়া ইত্যাদি। এসব রোগে অ্যান্টিবায়োটিকের কোনো ভূমিকা নেই। তাই জ্বর, কাশি, সর্দি হলেই অ্যান্টিবায়োটিক গ্রহণের জন্য ব্যতিব্যস্ত হবেন না। বিশেষ করে শিশুদের অভিভাবকেরা দ্রুত আরোগ্যের জন্য ডাক্তারকে অ্যান্টিবায়োটিক দিতে জোর করেন বা দোকান থেকে এমনিতেই কিনে আনেন। এটি ভয়ংকর পরিণতি ডেকে আনবে।</p><p>* অ্যান্টিবায়োটিক হতে হবে ওই সমস্যার জন্য নির্দিষ্ট। যেমন: প্রস্রাবের সংক্রমণে যে অ্যান্টিবায়োটিক ভালো কাজ করে, তা আবার নিউমোনিয়ায় না-ও করতে পারে। তাই সবচেয়ে ভালো হচ্ছে পরীক্ষা করে নিশ্চিত হয়ে সুনির্দিষ্ট অ্যান্টিবায়োটিক সেবন করা। টাইফয়েডের বা যক্ষ্মার মতো রোগের চিকিৎসার নামে দেশে কোনো পরীক্ষা ছাড়াই যথেচ্ছ অ্যান্টিবায়োটিক ব্যবস্থাপত্রে দেওয়া হচ্ছে, এটি নিয়ন্ত্রণ করতে হবে।</p><p>* একটি অ্যান্টিবায়োটিক সম্পূর্ণ মাত্রায় সম্পূর্ণ মেয়াদে গ্রহণ করতে হবে। কয়েক দিন সেবনের পর জ্বর বা সংক্রমণ ভালো হতে থাকলে অনেকেই ছেড়ে দেন। আবার কেউ বয়স অনুযায়ী পূর্ণ মাত্রায় না খেয়ে আন্ডার ডোজ খান। কেউ আবার পুরো কোর্স সম্পন্ন না করে মাঝে মাঝে ছেড়ে দেন। এসবই ক্ষতিকর।</p><p>অধ্যাপক খাজা নাজিমুদ্দিন,<br />মেডিসিন বিশেষজ্ঞ<br />সোর্স &ndash; প্রথম আলো।</p>', 'antibiotics.jpg', 27, 'published', 1, 0, '2017-09-21', '\r\n১১:৩১ মিঃ, সেপ্টেম্বর ২১, ২০১৭				'),
(4, 1, '1', 'সেনসিটিভ ত্বকের যত্ন', '', '<p>দেশি ইকমার্স সাইট বাগডুম ভিসা কার্ড ব্যবহারকারীদের জন্য বিশেষ ছাড় ঘোষণা দিয়েছে। সম্প্রতি ভিসা ও এসএসএল কমার্সের সঙ্গে চুক্তি করেছে প্রতিষ্ঠানটি। ফলে যেকোনো ভিসা ডেবিট এবং ক্রেডিট কার্ড ব্যবহারকারীরা বাগডুম ডটকম থেকে এসএসএল কমার্সের পেমেন্ট গেটওয়ের মাধ্যমে মূল্য পরিশোধ করলে ১১ শতাংশ অবধি ছাড় উপভোগ করতে পারবেন।</p>', 'sensitive.jpg', 18, 'published', 1, 0, '2017-09-21', '\r\n১১:৪৬ মিঃ, সেপ্টেম্বর ২১, ২০১৭				'),
(6, 2, '1', 'লাইসেন্স হারাচ্ছে উবার!', '<p>লন্ডনে উবারের লাইসেন্সের মেয়াদ শেষ হবে ৩০ সেপ্টেম্বর। ফলে লন্ডনে ৪০ হাজারেরও বেশি ড্রাইভার সরাসরি ক্ষতিগ্রস্থ হবে বলে জানা যায়। তবে আগামী ২১ দিনের মধ্যে উবার এই সিদ্ধান্তের বিরুদ্ধে আপিলের সুযোগ পাবে। বর্তমানে লন্ডনে ৩৫ লাখ উবার অ্যাপ ব্যবহারকারী আছে।</p>', '<p>এই অসুখের কথা বেশির ভাগ ক্ষেত্রেই রোগীরা বুঝতেই পারেন না। যখন রোগ ধরা পড়ে তখন পরিস্থিতি চলে যায় নিয়ন্ত্রণের বাইরে। কিডনির অসুখের মতো ভয়ানক অসুখ মানুষকে মৃত্যুর মুখে ঠেলে দেয়। অথচ বেশির ভাগ ক্ষেত্রেই রোগীরা টেরই পান না। একেবারে শেষে এসে যখন রোগ ধরা পড়ে তখন, ডায়ালিসিস করা বা কিডনি প্রতিস্থাপন করা ছাড়া আর কোনও উপায় থাকে না।</p><p>ভারতীয় সংবাদমাধ্যমে প্রকাশিত প্রতিবেদন থেকে জানা যাচ্ছে, ভারতের ১৭.২ শতাংশ মানুষ &lsquo;ক্রনিক কিডনি ডিজিজ&rsquo; বা &lsquo;সিকেডি&rsquo;তে ভুগছেন। স্টেজ ৩ বা তার থেকেও খারাপ অবস্থা ৬ শতাংশের। মার্কিন যুক্তরাষ্ট্রের যৌথ উদ্যোগে ভারতে সিকেডি-র পরিসংখ্যান তৈরি করতে গিয়ে সিক (স্ক্রিনিং অ্যান্ড আর্লি ইভলিউশন অফ কিডনি ডিজিজ)-এর সমীক্ষায় এমন তথ্যই মিলেছে।</p><p>জানা যাচ্ছে, এই &lsquo;ক্রনিক কিডনি ডিজিজ&rsquo;-এর প্রাথমিক অবস্থায় ধরা পড়ার সম্ভাবনা খুবই কম। এই রোগে আক্রান্ত হওয়ার পরেও মানুষের সাধারণ জীবন যাপনে তেমন কোনও অসুবিধা হয় না। ৬০ শতাংশ ক্ষেত্রেই অসুখটি ধরা পড়ে একেবারে অন্তিম স্টেজে এসে! এমনটাই জানাচ্ছেন দিল্লির ইনস্টিটিউট অফ লিভার অ্যান্ড বিলিয়ারি সায়েন্সেস-এর নেফ্রেলজি বিভাগের চিকিৎসক আরপি মাথুর।</p><p>কেন হয় এই অসুখ? ফর্টিস এস্কর্টস অ্যান্ড ইউরোলজি ইনস্টিটিউট-এর চিকিৎসক বিজয় খের জানাচ্ছেন, ৪০ শতাংশ ক্ষেত্রে ডায়াবেটিসের কারণেই এই অসুখ হয়। অনিয়ন্ত্রিত হাইপারটেনশনের ক্ষেত্রে সেটা ১০ থেকে ১৫ শতাংশ। অথচ খাবারে চিনি ও নুনের মাত্রা কমিয়ে, নিয়মিত ব্যায়াম করে, ধূমপান না করে ও ওজনকে নিয়ন্ত্রণে রাখতে পারলেই এই ধরনের অসুখকে মোকাবিলা করা যায় বলে তিনি জানাচ্ছেন।</p><p>আসলে আধুনিক যুগের দ্রুত গতির জীবন, অযথা ইঁদুর দৌড়&mdash; এসবের কারণে এই রোগগুলি ক্রমশ বাড়ছে বলেই মত চিকিৎসকদের। অনেক ক্ষেত্রেই ছোটখাটো অসুখকে পাত্তা না দেওয়ার ফলে কিডনির অসুখের মতো বড় অসুখকে কাবু করে ফেলে।</p><p>চিকিৎসক বিজয় খের জানাচ্ছেন, জাঙ্ক ফুড ও ধূমপান বর্জন করতে পারা ও খুব কম বয়স থেকে শরীরে নুন ও চিনির মাত্রাকে নিয়ন্ত্রণ করতে পারাটা অত্যন্ত প্রয়োজনীয়। এ জন্য ছাত্রাবস্থা থেকেই স্কুল ও অভিভাবকদের বিশেষ দায়িত্ব নিতে হবে বলে তিনি জানান।</p><p>কিডনি ভাল রাখতে হলে কী করতে হবে? ওই প্রতিবেদনে বলা হয়েছে দিনে অন্তত দুই লিটার পানি পান করা, রেড মিট ও জাঙ্ক ফুড না খাওয়া ও খাবারে বেশি নুন না খাওয়া। তা হলেই কিডনি ভালো থাকবে। পাশাপাশি বছরে একবার করে ডায়াবেটিস, হাইপার টেনশন ও কিডনি ফাংশান টেস্ট করানো। যদি পরিবারে কারও কিডনির অসুখের ইতিহাস থাকে ও বয়স ৬০-এর বেশি হয় সেক্ষেত্রে বছরে দু&rsquo;বার পরীক্ষা করাতে হবে। সূত্র: এবেলা।</p>', 'kidney-disease-blog-696x363.jpg', 28, 'published', 1, 0, '2017-09-24', '\r\n০৯:০৬ মিঃ, সেপ্টেম্বর ২৪, ২০১৭				'),
(11, 2, '1', 'অধূমপায়ীদেরও ফুসফুসের ক্যানসার হতে পারে', '', '<p>ধূমপান ফুসফুসের ক্যানসারের একটি অন্যতম ও প্রধান কারণ। যাঁরা দৈনিক ২ থেকে ৩ প্যাকেট সিগারেট সেবন করেন বা ২০-৩০ বছর ধরে ধূমপান করেন, তাঁদের মধ্যে ৯০ শতাংশ ব্যক্তিরই ফুসফুসের ক্যানসারের ঝুঁকি থাকে। তাই বলে যাঁরা ধূমপান করেন না, তাঁরা কি একেবারেই নিরাপদে থাকেন? অধূমপায়ীদেরও ফুসফুসের ক্যানসার হতে পারে। এমনকি নারীরাও এই ঝুঁকির মধ্যে রয়েছে। তাই ধূমপান করেন না বলে কিছু উপসর্গকে অবহেলা করবেন, তা হয় না।</p><p>* পরিবেশের ও কর্মক্ষেত্রের নানা দূষণ, গাড়ির ধোঁয়া ফুসফুসের ক্যানসারের কারণ হতে পারে। তাই কাঠ বা কয়লা পোড়ানোর ধোঁয়া বা যানবাহনের ধোঁয়া থেকে নিজেকে রক্ষা করুন। শিল্পকারখানায় কাজ করার সময় মাস্ক ব্যবহার করা ভালো।</p><p>* নারী ও অধূমপায়ীদের ভিন্ন ধরনের ক্যানসার হয়ে থাকে। পরোক্ষ ধূমপানও অন্যদের ক্যানসারের কারণ হয়ে দাঁড়াতে পারে।</p><p>* বেশ কিছুদিনের কাশি, কাশির সঙ্গে রক্তপাত, জ্বর, ওজন হ্রাস ইত্যাদি ফুসফুসের ক্যানসারের পরিচিত লক্ষণ। তবে কিছু অপরিচিত উপসর্গ নিয়েও ফুসফুসের ক্যানসার দেখা দিতে পারে। যেমন-গলার স্বর পরিবর্তন। ধূমপায়ী বা ব্রংকাইটিসের রোগীর সাধারণ কাশির ধরন পরিবর্তন। বুকে বা কাঁধে ব্যথা। ৫০ শতাংশ রোগী বুক বা কাঁধের ব্যথা নিয়েই কেবল চিকিৎসকের দ্বারস্থ হতে পারেন। ঘন ঘন নিউমোনিয়া বা ফুসফুসের সংক্রমণ হতে পারে একটি লক্ষণ।</p><p>* খুসখুসে কাশি বা শ্বাসকষ্টও এর লক্ষণ হতে পারে। অনেক সময় আমরা এগুলোকে অ্যালার্জি বা হাঁপানি ভেবে অবহেলা করি।</p><p>* দেহের অন্য কোনো অঙ্গের ক্যানসার ছড়িয়ে পড়ে ফুসফুসে বাসা বাঁধতে পারে। ব্রেস্ট, কোলন, প্রোস্টেট ক্যানসার ফুসফুসে বেশি ছড়ায়। এ ধরনের রোগের ইতিহাস থাকলে ফুসফুসজনিত কোনো উপসর্গকেই অবহেলা করা যাবে না।</p><p>ডা. মো. আজিজুর রহমান,<br />বক্ষব্যাধি বিশেষজ্ঞ<br />সোর্স &ndash; প্রথম আলো।</p>', 'cancer.jpg', 99, 'published', 1, 0, '2017-10-12', '\r\n০৮:৫১ মিঃ, অক্টোবর ১২, ২০১৭				'),
(13, 1, '1', 'ব্যায়ামে ধারাবাহিকতা জরুরী', '', '<p>একদিন করলাম, তারপর তিন দিন কোনো খবর নেই&mdash;এভাবে হবে না। বিশেষজ্ঞরা বলেন, সপ্তাহে ১৫০ মিনিট মাঝারি মানের ব্যায়াম (যেমন হাঁটা) করা যথেষ্ট, কিন্তু এক দিনের বেশি বিরতি দেওয়া চলবে না। এই ধারাবাহিকতা বজায় রাখা কঠিন। প্রতিদিন ব্যায়াম বা হাঁটার এই উদ্দীপনা কীভাবে বাড়ানো যায়?</p><p>যে ধরনের ব্যায়াম করতে ভালো লাগে, সেটিই করুন। কঠিন কিছু বেছে নিলে কদিন পরই আগ্রহ চলে যাবে। তাই হাঁটা, জগিং, সাঁতরানো বা সাইক্লিং হতে পারে আপনার পছন্দ। জিম করলে কাছাকাছি জায়গা বেছে নিন। ব্যায়ামটা যেন আপনার জীবনের ওপর বাড়তি বোঝা না হয়ে দাঁড়ায়।</p><p>ব্যায়ামের সঙ্গী হিসেবে কাউকে বেছে নিতে পারেন। কোনো বন্ধু বা পরিবারের সদস্য সঙ্গে থাকলে সময়টাও ভালো কাটল। এ ক্ষেত্রে বাড়তি লাভ হলো ব্যায়ামটা নিয়মিত হবে।</p><p>ব্যায়ামের মাঝে আনন্দ খুঁজে নিন। জোর করে করতে হচ্ছে এমনটা ভাবলে ক্লান্তি আসবে। সময়টা উপভোগ করুন। যাঁরা গান শুনতে ভালোবাসেন, তাঁরা ব্যায়ামের সময় গান শুনতে পারেন। আবার ঘরে বা ব্যায়ামাগারে বদ্ধ পরিবেশে হাঁপিয়ে উঠলে বাইরে গিয়ে ব্যায়াম করতে পারেন। পছন্দের খেলাধুলার অভ্যাস গড়ে তুলতে পারেন।</p><p>ব্যায়ামের কারণে কী কী উপকার পাচ্ছেন, তা নিয়ে ভাবুন। এই ভাবনা উৎসাহ জোগাবে। নির্দিষ্ট সময়ে ব্যায়াম করার জন্য অ্যালার্ম দিয়ে রাখতে পারেন। সকালে ব্যায়ামের অভ্যাস করলে রাতেই পোশাক-আশাক গুছিয়ে রাখার মতো কিছু প্রস্তুতি নিয়ে রাখুন।</p><p>ব্যায়ামের জন্য নতুন জুতা বা পোশাক কিনে নিন। বিশেষ ধরনের ঘড়ি বা মোবাইল অ্যাপস অনেকে ব্যবহার করেন, যা প্রতিদিন নির্দিষ্ট পদক্ষেপ নেওয়ার পর বা কতটুকু ক্যালরি ক্ষয় হচ্ছে তা জানিয়ে দেয়। এতে উৎসাহ বাড়ে।</p><p>ব্যায়ামের কারণে নিজের ফিটনেস কতটা বাড়ল তা লিখে রাখতে পারেন। আগে কতটা ওজন তুলতে পারতেন, কতখানি দৌড়ালে হাঁপিয়ে যেতেন বা কত বেশি দূর যেতে পারেন এখন তা তুলনা করুন।</p><p>সোর্স &ndash; প্রথম আলো।</p>', 'regular-exercise.jpg', 0, 'published', 1, 0, '2018-05-06', '\r\n০১:৪৫ মিঃ, মে ৬, ২০১৮				'),
(14, 2, '1', 'কফের সঙ্গে রক্ত মানেই যক্ষ্মা নয়', '', '<p>কফের সঙ্গে রক্ত দেখলে ঘাবড়ে যাওয়ারই কথা। কাশতে কাশতে রক্ত যাওয়া মানেই যক্ষ্মা&mdash;ধারণাটি কিন্তু ঠিক নয়। যদিও আমাদের দেশে যক্ষ্মার হার অনেক বেশি এবং কফের সঙ্গে রক্ত গেলে যক্ষ্মা পরীক্ষা করা জরুরি। তবু ভুলে গেলে চলবে না যে যক্ষ্মা ছাড়াও এ সমস্যার আরও নানা কারণ থাকতে পারে।</p><p>দীর্ঘদিনের কাশি, প্রচুর কফ নিঃসরণ, সঙ্গে রক্তপাত, যক্ষ্মা বা ফুসফুসে প্রদাহের পুরোনো ইতিহাস থাকলে ব্রংকিয়েকটেসিস নামের এ ধরনের রোগের কথা ভাবা হয়। সাধারণ এক্স-রের চেয়ে বুকের সিটি স্ক্যানে এ রোগ ধরা পড়ে ভালো। সাধারণ নিউমোনিয়াতেও কিন্তু হঠাৎ অনেক জ্বর, বুকব্যথা ও কাশির সঙ্গে মরিচা রঙের কফ হতে পারে। কাঁপুনি দিয়ে জ্বর, দুর্গন্ধযুক্ত কাশি ও কফের সঙ্গে রক্ত যায় ফুসফুসে ফোড়া হলে। বয়স্ক ব্যক্তির কাশি, গলা বসে যাওয়া, কফের সঙ্গে রক্তপাত, ওজন হ্রাস জাতীয় উপসর্গ দেখা দিলে ফুসফুসের ক্যানসারের বিষয়টিও মাথায় রাখা উচিত।</p><p>ফুসফুসের রোগেই শুধু কফের সঙ্গে রক্তপাত হয়, তা নয়। নানা রকম হৃদ্&zwnj;রোগেও হতে পারে। যেমন: বাতজ্বরের ইতিহাস, বুক ধড়ফড়ানি ও কফের সঙ্গে রক্ত যেতে পারে হৃদ্&zwnj;যন্ত্রের ভালভজনিত সমস্যায়। বুকের রক্তনালিতে হঠাৎ বাধা (পালমোনারি এম্বলিজম), শ্বাসকষ্ট ও কফের সঙ্গে রক্ত যেতে পারে। কিছু ওষুধের কারণে দেহের রক্তপাতের প্রবণতা বেড়ে যেতে পারে। বিভিন্ন ধরনের রক্তরোগ, যেমন-হিমোফিলিয়া, লিউকোমিয়া হলে যেকোনো ধরনের রক্তপাত হতে পারে।</p><p>কারণ যা-ই হোক, কফের সঙ্গে রক্ত যাওয়াটা মোটেই স্বাভাবিক ব্যাপার নয়। সঠিক রোগের ইতিহাস ও সঠিক পরীক্ষা-নিরীক্ষার মাধ্যমে এর কারণ অনুসন্ধান করা জরুরি। এ ধরনের উপসর্গের পেছনে লুকিয়ে থাকে নানা জটিল রোগ।</p><p>ডা. মো. আজিজুর রহমান<br />বক্ষব্যাধি বিশেষজ্ঞ<br />সোর্স &ndash; প্রথম আলো।</p>', 'Man-Coughing.jpg', 3, 'published', 1, 0, '2018-05-06', '\r\n০১:৫০ মিঃ, মে ৬, ২০১৮				'),
(15, 1, '1', 'মাড়ি থেকে রক্ত পড়া', '', '<p>দাঁত ব্রাশ করার সময় বা শক্ত কিছু খেতে গেলে যদি মাড়ি থেকে রক্ত বের হয়, তবে সচরাচর মাড়ির রোগ জিনজিভাইটিস হয়েছে বলে ধরে নেওয়া হয়। আমাদের মুখের ভেতর যে ব্যাকটেরিয়া থাকে, সেগুলো খাবারের সঙ্গে মিশে একধরনের আঠালো প্রলেপ তৈরি করে থাকে, যাকে বলা হয় ডেন্টাল প্ল্যাক বা দন্তমল। যদি দাঁত ব্রাশ করার সময় এই দন্তমল নিয়মিতভাবে পরিষ্কার করা না হয়, তবে তা দীর্ঘদিন জমে মাড়িতে প্রদাহ সৃষ্টি করে, মাড়ি ফুলে যায় ও রক্ত বের হয়।</p><p>* মাড়ির প্রদাহ রোধ করতে প্রতিদিন মুখ পরিষ্কার করতে হবে। ফ্লোরাইড-যুক্ত টুথপেস্ট দিয়ে প্রতিবার খাবারের পর দাঁত ব্রাশ করতে হবে। রাতে দাঁত ব্রাশের আগে ডেন্টাল ফ্লস (এক ধরনের সিল্ক সুতা) দিয়ে দুই দাঁতের ফাঁক থেকে খাদ্যকণা বের করে আনা উচিত। সেই সঙ্গে জীবাণুনাশক তরল মাউথওয়াশ ব্যবহার করা যায়।</p><p>* হঠাৎ করে নতুনভাবে ডেন্টাল ফ্লস ব্যবহার শুরু করলে বা নতুন ধরনের ফ্লস ব্যবহার করলে মাড়ি থেকে রক্ত পড়া বিচিত্র কিছু নয়। ডেন্টাল ফ্লসের ব্যবহার অভ্যাসে পরিণত হতে একটু সময় লাগে।</p><p>* টুথব্রাশ বেশি ক্ষয়প্রাপ্ত বা আঁকাবাঁকা থাকলে কিংবা দীর্ঘদিনের ক্ষয়ে যাওয়া টুথ ব্রাশ দিয়ে ব্রাশ করলে আঘাতের কারণে মাড়ি দিয়ে রক্ত পড়তে পড়ে। একটি টুথব্রাশ ছয় মাসের বেশি ব্যবহার করা ভালো নয়।</p><p>* যাঁরা ধূমপান করেন বা জর্দা গুল ব্যবহার করেন, তাঁদের মাড়ির প্রদাহ অন্যদের তুলনায় দ্বিগুণ। ধূমপান ও তামাকের ব্যবহারের কারণে ঘা বা প্রদাহ শুকাতেও দেরি হয়।</p><p>* অন্যান্য রোগের যেমন: ডায়াবেটিস, উচ্চ রক্তচাপ, হৃদ্&zwnj;রোগ, ক্যানসার, লিভার ও কিডনি রোগের কারণেও মাড়ির প্রদাহ বেশি হয়। এসব রোগ দেহের প্রতিরোধ শক্তিকে কমিয়ে ফেলে। এদের ক্ষেত্রে আরও যত্নবান হতে হবে। ছয় মাস অন্তর দাঁতের স্কেলিং ও পরীক্ষা করা ভালো। মানসিক রোগ, অ্যালার্জি ও উচ্চ রক্তচাপের ওষুধ মুখের শুষ্কতা তৈরি করে বলে মাড়ির প্রদাহ বেশি হয়। মুখের আর্দ্রতা বজায় রাখতে নিয়মিত কিছু টক জাতীয় ফল (আমলকী, কমলা, জাম্বুরা, আমড়া, লেবুর রস, কামরাঙা, জলপাই, বরই ইত্যাদি) এবং প্রচুর পানি পান করা ভালো।</p><p>* গর্ভাবস্থায় মাড়ি থেকে রক্ত পড়া খুব পরিচিত সমস্যা। কারণ, এই সময় মাড়ি সংবেদনশীল হয়ে যায়। অন্তঃসত্ত্বা মায়েদের তিন বেলা আহারের পর দাঁত ব্রাশ ও জীবাণুনাশক মাউথওয়াশ ব্যবহার করা ও ডেন্টাল চেকআপ নিয়মিত করা উচিত।</p><p>* রক্ত জমাট হওয়ার রোগ যেমন: হিমোফেলিয়া থাকলে কিংবা রক্ত তরলীকরণ ওষুধ (এসপিরিন, ক্লোপিড) খেলে হঠাৎ মাড়ির সমস্যা ছাড়াই মাড়ি থেকে রক্তপাত হতে পারে।</p><p>অধ্যাপক ড. অরূপ রতন চৌধুরী,<br />বারডেম হাসপাতাল<br />সোর্স &ndash; প্রথম আলো।</p>', 'teeth-1.jpg', 0, 'published', 1, 0, '2018-05-06', '\r\n০১:৫৬ মিঃ, মে ৬, ২০১৮				'),
(16, 1, '1', 'দ্রুত মন ভালো করার ১০ অব্যর্থ পদ্ধতি', '', '<p>আনন্দ আর বেদনা মিলিয়েই তো জীবন। মন খারাপ থাকলে শরীরও খারাপ হবে। তাই মন খারাপ রেখে লাভ কী বলুন! হুটহাট করে মন যদি খারাপও হয়ে যায়, নিমিষেই তা ভালো করে ফেলুন। কোনো কারণে যদি মন খারাপ থাকে বা নিজেকে সুখী না মনে হয় তবে চিন্তিত হবেন না। ভাবুন সময়টি যদিও চাপের, তবে হঠাৎ মজার কিছু ঘটবে, ভালো কিছু হবেই আপনার জীবনে। এমন আশার কথা শুনিয়ে ইয়াহু হেলথ দ্রুত মন ভালো করার কিছু উপায় জানিয়েছে। নিচে এমন ১০টি উপায় তুলে ধরা হল-</p><p><strong>১. খেলাধুলা করুন:&nbsp;</strong>পরিবারের সদস্যদের সঙ্গে একত্রিত হোন। প্রয়োজনে কিছু বন্ধুকেও দাওয়াত করতে পারেন। এরপর সবাই মিলে মজাদার কোনো খেলা খেলুন। ভালো বন্ধুদের সঙ্গ আপনার সময়গুলোকে আনন্দে ভরিয়ে তুলতে সাহায্য করবে। তবে অবশ্যই কম্পিউটার বা মোবাইল গেম খেলবেন না।</p><p><strong>২. হাঁটা শুরু করে দিন:</strong>&nbsp;ঘরে যদি কিছু করার না থাকে, তবে মন ভালো করতে হাঁটতে বেরিয়ে যান। বাইরের তাজা হাওয়া আপনার মনকে সতেজ করবে।</p><p><strong>৩. বন্ধুদের সঙ্গে কথা বলুন বা ফোন করুন:&nbsp;</strong>ম্যাসেজ করবেন না, বন্ধুর সঙ্গে ফোনে কথা বলুন। তাঁকে বলুন আপনার কষ্টের কথা। পরামর্শ চাইতে পারেন তাঁর কাছ থেকে।</p><p><strong>৪. নতুন কিছু করুন:&nbsp;</strong>নেতিবাচক ভাবনা থেকে বেরিয়ে যান। নতুন কিছু করুন। জিমে ভর্তি হোন বা রান্নার ক্লাসে ভর্তি হোন। আগামীকাল সকালে উঠে নতুন কী করবেন তাঁর পরিকল্পনা করুন।</p><p><strong>৫. বিচ্ছিন্ন হোন :&nbsp;</strong>এক বা দুই মিনিটের জন্য সামাজিক যোগাযোগের মাধ্যম থেকে বিছিন্ন হয়ে যান।</p><p><strong>৬. গান গাইতে পারেন :&nbsp;</strong>দ্রুত মন ভালো করতে গেয়ে উঠতে পারেন পছন্দের কোনো গান। গ্যারান্টি দিচ্ছি, মন ভালো হয়ে যাবে।</p><p><strong>৭. সাহায্য করুন :&nbsp;</strong>অন্যকে সাহায্য করুন। পরিবারের সদস্যদের কাজে সাহায্য করুন বা বন্ধুদের কাজে সাহায্য করুন।</p><p><strong>৮. বান্নাবান্না করুন :&nbsp;</strong>বেশি মন খারাপ লাগলে রাঁধতেও শুরু করতে পারেন। অনেক সময় রান্না করাও আপনার মেজাজকে ভালো করে দিতে পারে।</p><p><strong>৯. হাসুন :&nbsp;</strong>হয়তো হাসার মতো পরিস্থিতি নেই, তবু চেষ্টা করুন হাসার। হাসি কখনো কখনো চাপ কমাতে সাহায্য করে, মেজাজ ভালো রাখে, বিষণ্ণতাকেও দূরে রাখে। তাই হাসুন। এক্ষেত্রে মজার কোন জোকস পড়ুন অথবা কার্টুন দেখুন বা মুভি দেখতে পারেন।</p><p><strong>১০. সব ঠিক হয়ে যাবে :&nbsp;</strong>ভাবুন সব ঠিক হয়ে যাবে। যদিও খুব চাপের সময় এই ভাবনাটি সহজেই আসবে না, তবু ভাবুন &zwnj;সব ঠিক হবে।</p>', 'feel-happy-696x363.jpg', 1, 'published', 0, 0, '2018-05-06', '\r\n০৪:১১ মিঃ, মে ৬, ২০১৮				'),
(17, 1, '1', 'ফ্রিজে খাবার রাখার সময় মনে রাখুন কিছু বিষয়', '', '<p>আমাদের দৈনন্দিন জীবনের একটি গুরুত্বপূর্ণ অংশ হচ্ছে খাদ্য। খাবার ছাড়া আমরা একটি দিনও চিন্তা করতে পারি না। আমাদের শরীরের শক্তির একটি বড় উৎস হচ্ছে এই খাবার। তাই খাবারকে রাখা উচিৎ সুন্দর ভাবে আর সংরক্ষণের বেলায় হওয়া উচিৎ সচেতন। খাবার সংরক্ষণের কথা শুনলে আমাদের মাথায় সবার আগে যে শব্দটি আসে তা হচ্ছে ফ্রিজ। ফ্রিজ ছাড়া আমাদের দৈনন্দিন জীবন চিন্তা করা অসম্ভব। তাই এই ফ্রিজেরও চাই যত্ন। আর খাবার রাখা উচিৎ সঠিকভাবে। খাবার যদি সঠিকভাবে গুছিয়ে রাখা না হয় তাহলে দেখা যাবে ফ্রিজে জমে গিয়েছে ময়লা আর তাতে সৃষ্টি হয়েছে দুর্গন্ধ।</p><p>আমরা খাবার বেশি দিন সংরক্ষণ করতে ফ্রিজে রেখে দেই। তবে আমরা অনেকেই জানিনা যে, খাবার কিভাবে ফ্রিজে সয়রক্ষণ করতে হয়। সঠিক নিয়মে সংরক্ষণ না করলে অনেকসময় খাবারের মান কমে যায় আবার ক্ষতিকরও হয়ে ওঠে।</p><p>বহুদিন ফ্রিজ ব্যবহারের পরেও অনেকেই জানি না ফ্রিজে খাবার রাখার নিয়ম-কানুন। ফ্রিজে কাঁচা খাবার সংরক্ষণের পদ্ধতি এক রকম আবার রান্না করা খাবার সংরক্ষণের পদ্ধতি আরেক রকম। এ দুই ধরনের খাবার ফ্রিজে আলাদা করে রাখা উচিত। সঠিক নিয়মে সংরক্ষণ না করলে খাবারের পুষ্টিগুণ নষ্ট হয়ে যায় এমনকি খাবার বিষে পরিণত হতে পারে। তাই আজ থাকছে খাবার কিভাবে ফ্রিজে সংরক্ষণ করা যায় বা ফ্রিজে খাবার রাখার বিষয়ে কিছু পরামর্শ।</p><p>সাধারণত ডিপ ও নরমাল- এ দুই ভাগে বিভক্ত থাকে ফ্রিজ। এর মধ্যে কাঁচা মাংস, মাছ ইত্যাদি ডিপ অংশে এবং সবজি, ফল ইত্যাদি নরমাল অংশে রাখা হয়।</p><p>আমরা অনেকেই ভাবি ফ্রিজে খাবার ঢুকিয়ে রাখা মানে তা ঠিক থাকবে। তবে ঠাণ্ডার কারণে ব্যাকটেরিয়া ধীরে ধীরে কাজ করে। তাই ফ্রিজ থেকে খাবার বের করে তা অবশ্যই গরম করে নিয়ে তবেই খাবেন।</p><p><strong>ফ্রিজের তাপমাত্রা</strong><br />বিশেষজ্ঞরা বলছেন, ফ্রিজে আলাদা আলাদা তাপমাত্রায় খাবার রাখা উচিত। অবশ্যই ফ্রিজের তাপমাত্রার দিকে খেয়াল রাখবেন। প্রয়োজন অনুযায়ী কমাবেন এবং বাড়িয়ে দেবেন। বক্সে করে ফ্রিজে খাবার রাখতে হবে, বক্সগুলোর মাঝে কিছুটা জায়গা ফাঁকা রাখবেন। তাহলে ভেতরে বাতাস চলাচল করতে পারবে। ফ্রিজের নরমাল অংশের তাপমাত্রা সব সময় ৪০ ডিগ্রি ফারেনহাইট বা ৪ ডিগ্রি সেলসিয়াসে থাকা রাখতে হবে। আর ডিপ ফ্রিজের তাপমাত্রা হওয়া উচিত ০ ডিগ্রি ফারেনহাইট অথবা-১৭ ডিগ্রি সেন্টিগ্রেটের আশপাশে। অনেকে মাসের পর মাস ডিপ ফ্রিজে মৌসুমি ফলমূল রেখে দেন। সে ক্ষেত্রে অবশ্যই সংরক্ষণের নিয়মাবলি মেনে তারপর রাখতে হবে। তবে বেশি দিন রাখা উচিত না।</p><p><strong>আর কয়েকটি টিপস</strong><br />১. দরজার একেবারে নিচের তাকে ফলের রস, সস, জ্যাম, পানি রাখা যায়। এবং ইনসুলিন জাতীয় ওষুধ রাখা যাবে।</p><p>২. ফ্রিজের নিচের তাকে রাখুন দুধ। ১ ডিগ্রি তাপমাত্রা দুধ রাখার জন্য উপযুক্ত। তবে খাওয়ার কমপক্ষে এক ঘণ্টা আগে তা বের করে নিতে হবে। এতে দুধের গুণগত মান নষ্ট হয় না। দীর্ঘদিন সংরক্ষণের জন্য টক দই ডিপ ফ্রিজে রাখতে হবে।</p><p>৩. ফ্রিজের গায়ের সঙ্গে লাগিয়ে কোনো খাবার রাখবেন না। বিশেষ করে কোনো রকমের তাজা ফলমূল বা সবজি একেবারেই না।</p><p>৪. মাখন তো ফ্রিজে রাখতেই হয়, ঘি-কেও ফ্রিজে রাখতে পারেন অনেকদিন ভালো রাখার জন্য। তবে দুটিই রাখবেন একদম এয়ার টাইট পাত্রে।</p><p>৫. সাধারণ কাঁচা মাছ ও মাংস রাখতে ফ্রিজের ডিপ অংশ ব্যবহার করা হয়। কাঁচা মাছ, মাংস ১ ডিগ্রির কম তাপমাত্রায় সংরক্ষণ করুন। কাঁচা মাছ, মাংস এবং পোলট্রি প্রডাক্ট বাকি খাবারের সঙ্গে রাখবেন না। কারণ অনেক সময়ই কাঁচা মাছ-মাংস থেকে পানি বের হয়। সেই পানি বাকি খাবারে মিশে গেলে বিষক্রিয়া হওয়ার আশঙ্কা বৃদ্ধি পায়। ফ্রিজে যেমন মাংসই রাখুন না কেন, সেগুলো অবশ্যই ভালো করে ধুয়ে একদম পরিষ্কার করে রাখুন। এটা মাংসে বাজে গন্ধ হবে না, অনেকদিন পর্যন্ত সতেজ থাকবে, স্বাদ থাকবে অক্ষুণ্ণ।</p><p>৬. আইসক্রিম ও প্যাকেটজাত ফ্রোজেন ফুড ফ্রিজে রাখার ব্যাপারে সতর্ক হোন যেমন : রোল, সিঙ্গারা, সমুচা, পিঠা ইত্যাদি খাবার ফ্রিজের ডিপ অংশে রাখা যাবে। তাপমাত্রার সামান্য হেরফেরে এই খাবার নষ্ট হয়ে যায়।</p><p>৭. রান্না করা খাবার ফ্রিজে রাখার নিয়ম : রান্না করা খাবার ফ্রিজের নরমাল অংশের ওপরের তাকে রাখা যাবে। খাবার কখনই ৪ দিনের বেশি ফ্রিজে রাখা যাবে না। আর রান্না করা গরু, খাশি বা মুরগির মাংস এবং ডিম ফ্রিজে রাখতে পারবেন ৩-৪ দিন। একইভাবে রান্না করা মাছও ৩-৪ দিনের বেশি ফ্রিজে রেখে খাওয়া যাবে না। এক্ষেত্রে আরেকটি সহজ নিয়ম খুব কাজে আসে। ১-২ দিনের খাবারের ঠিক পেছনে যদি সবেমাত্র রান্না করা খাবার রাখা যায়, তাহলে দেখা গেছে বাসি খাবার বেশিক্ষণ পর্যন্ত ভালো থাকে।</p><p>৮. ফল এবং সবজি রাখার নিয়ম : ফ্রিজে রাখা মাত্র বিশেষ কিছু ফলের শরীর থেকে ইথাইলিন গ্যাস বের হয়, যা টাটকা সবজিকে নিমেষে নষ্ট করে দেয়। তাই কলা, জাম, নাশপাতি এবং টমেটো ফ্রিজে না রাখা ভালো। একইভাবে যেসব সবজির শরীর থেকে ইথাইলিন গ্যাস বের হয়, সেগুলোকে ফলের থেকে দূরে রাখতে হবে। ব্রকলি, গাজর, শসা, বেগুন, মটরশুঁটি, লেটুস প্রভৃতি সবজির সঙ্গে ফল রাখবেন না।</p><p>* সবজি বা ফল এয়ার টাইট কনটেইনারে রাখা যাবে না।</p><p>* সবজি পলিথিনের ব্যাগে রাখবেন না। সবজি রাখুন কাগজের প্যাকেটে কিংবা খবরের কাগজ দিয়ে মুড়ে। অনেকদিন সতেজ থাকবে। কিছু সবজি একটু ভিন্নভাবে রাখতে হয় ফ্রিজে। যেমন : মরিচের বোঁটা ফেলে রাখবেন, বা কাচের বয়ামের মধ্যে কাঁচা মরিচ রাখলে তা দীর্ঘ সময় পর্যন্ত ভালো থাকে। শাক কুটে রাখবেন, ধনে পাতা রাখবেন গোড়াসহ। সংরক্ষণ উপযোগী মৌসুমি সবজি সিদ্ধ করার পর বিভিন্ন বক্সভর্তি করে ফ্রিজে রাখা যায়। এতে দীর্ঘদিন পর্যন্ত সবজিগুলোর গুণগতমান ভালো থাকবে। আর মৌসুম শেষে সেগুলো রান্না করে খাওয়া যাবে। বেগুনে একটু তেল মেখে রাখতে পারেন।</p><p>৯. ফ্রিজে কাটা পেঁয়াজ রাখতে চাইলে পেঁয়াজ একটি এয়ার টাইট বক্সে রেখে সামান্য লবণ ছিটিয়ে দিন। তারপর বক্সটি মুখ বন্ধ করে প্লাস্টিকের ব্যাগে ভরে নিন। এছাড়া বাটা মসলা ফ্রিজে রাখতে চাইলে তা বক্সভর্তি করে রাখা যাবে।</p><p>১০. বেশিরভাগ ফ্রিজেই ডিম রাখার আলাদা জায়গা থাকে। ফ্রিজে ডিম রাখার সময় মোটা অংশটি নিচের দিকে ও সরু অংশটি ওপরে রাখুন। ডিম হাতলে না রেখে বাটিতে করে ফ্রিজের ভেতরে রাখুন।</p><p>* খুব বেশি খাবার একসঙ্গে না রেখে প্রয়োজন অনুযায়ী ছোট ছোট ভাগে ভাগ করে রাখতে পারেন। একসঙ্গে যদি বেশি খাবার রেখে দেন, তাহলে বের করে রান্নার আগে কাঁচা মাছ বা মাংস পুরোটাই আপনাকে ভিজিয়ে রাখতে হবে। আবার রান্না করা খাবার পুরোটাই জ্বাল দিতে হবে। এতে করে খাবারের পুষ্টি ও স্বাদ দুটোই নষ্ট হয়।</p><p>* ফ্রিজে খাবার রাখতে বি পি এ-ফ্রি লেবেল লাগানো প্লাস্টিকের কনটেইনার ব্যবহার করতে হবে। কাচের এয়ার টাইট কনটেইনারে খাবার রাখতে হবে। এবং ফ্রিজে সর্বদা এক টুকরো কাটা লেবু রাখুন। মাঝে মাঝে বেকিং সোডা মেশানো পানি দিয়ে ফ্রিজ মুছে নিন। এতে এক খাবারের গন্ধ অন্য খাবারে প্রবেশ করবে না। ফ্রিজে দুর্গন্ধ হবে না।</p><p><strong>কোন খাবার কতদিন ফ্রিজে রাখা যাবে</strong><br />** হট ডগ, পিৎজা, চিকেন প্যাটিস বা বার্গার জাতীয় খাবার খোলা অবস্থায় ১ সপ্তাহ, না খোলা অবস্থায় ২ সপ্তাহ।</p><p>** কাঁচা মাংস ফ্রিজে রাখলে ৩-৫ দিন ভালো থাকে। কাঁচা মুরগির মাংস আস্ত অবস্থায় ডিপ ফ্রিজে প্রায় ১ বছর ভালো থাকে। আর কাটা অবস্থায় ৫-৬ মাসের মধ্যে রান্না করে ফেলাই ভালো।</p><p>** স্যুপ সাধারণত ৩-৪ দিন ভালো থাকে। রান্না করা মুরগির মাংস, মাছ বা ডিমের কোনো পদ ৩-৪ দিন ফ্রিজে রাখা যাবে।</p>', 'how-to-store-refrigerateur-696x380.jpg', 0, 'published', 1, 0, '2018-05-06', '\r\n০৪:১৯ মিঃ, মে ৬, ২০১৮				'),
(18, 2, '1', 'বেশি শোষণ ক্ষমতাযুক্ত প্যাড থেকে জরায়ুর ক্যান্সার !', '', '<p>প্রত্যেক নারীর শরীর প্রকৃতির নিয়ম মেনে প্রত্যেক মাসের বিশেষ কয়েকটা দিন ঋতুচক্র পার করেন। এই সময়ে<br />নারীদের সবচেয়ে জরুরী ব্যবহার্য জিনিসটি হচ্ছে স্যানিটারি ন্যাপকিন। এই পণ্যটি নিয়ে লজ্জা পাওয়ার কিছু নেই, এটা খুবই সাধারণ একটি পণ্য। কিন্তু আমাদের দেশের নারীরা বিষয়টি লুকিয়ে রাখতে চান।</p><p>অসংখ্য নারী নানান রকম ইনফেকশনে আক্রান্ত হয়ে থাকেন শুধুমাত্র এই স্যানিটারি ন্যাপকিনের সম্পর্কে কোনও ধারনা না থাকার কারণে। খুব ভালো পণ্য ভেবে অনেক দাম দিয়ে এমন ন্যাপকিন ব্যবহার করেন, যা তাঁকে ফেলে দেয় স্বাস্থ্য ঝুঁকিতে। অনেকেই ভাবেন অনেক বেশি শোষণ ক্ষমতা সম্পন্ন, বেশি সময় লিকেজ প্রতিরোধ করে এমন প্যাড ব্যবহার করেন? জেনে নিন, এই ন্যাপকিন হতে পারেন আপনার ক্যান্সারের কারণ! লজ্জা নয়, সচেতনতা জরুরী। এই ব্যাপারে কিছু বিষয় তুলে ধরা হল-</p><p>১. স্যানিটারি ন্যাপকিন কতক্ষণ পর পর পরিবর্তন করা ভালো? এই তথ্যটি অনেকেই জানেন না। অনেকেই আছেন যারা একটি স্যানিটারি ন্যাপকিন কম ব্লিডিং হয়েছে ভেবে দীর্ঘসময় ধরে ব্যবহার করেন। রক্তপাত কম হোক বা বেশী, একটি স্যানিটারি ন্যাপকিন কখনোই দীর্ঘ সময় ব্যবহার করবেন না। তিন থেকে চার ঘণ্টা পর পর বদলে ফেলুন। যদি রক্তপাত বেশি হয়, তাহলে প্যাড নষ্ট হওয়া মাত্রই বদলে ফেলুন। জমে থাকা রক্তে নানান রকম জীবাণু সংক্রমণ করে আপনি আক্রান্ত হবেন যৌনাঙ্গের নানান রকম অসুখে ও ফাঙ্গাস ইনফেকশনে।</p><p>২. প্রত্যেকবার স্যানিটারি ন্যাপকিন বদলের সময় নিজেকে ভালোভাবে পরিছন্ন করে নিন। উষ্ণ জলের সঙ্গে জীবাণুনাশক সাবান বা বডি ওয়াশ দিয়ে নিজেকে ভালোভাবে পরিষ্কার করুন। তারপর স্থানটি জীবানুনাশক কোন লিকুইড দিয়ে ধুয়ে ও মুছে নিয়ে তবেই স্যানিটারি ন্যাপকিন ব্যবহার করুন।</p><p>৩. প্রত্যেকবার স্যানিটারি ন্যাপকিন পরিবর্তনের সময় পরনের প্যানটিও বদলে ফেলবেন। এটা জরুরী। নাহলে এত কষ্ট করে পরিষ্কার হওয়ার কোন মানে নেই।</p><p>৪. চেষ্টা করবেন অধিক শোষণ ক্ষমতা সম্পন্ন প্যাড ব্যবহার না করতে। এই ধরনের প্যাডে ব্যবহার করা হয় সিনথেটিক উপাদান এবং শোষণ ক্ষমতা বৃদ্ধি করার জন্য ব্যবহার করা হয় ডায়অক্সিন, রেয়নের মত ক্ষতিকর রাসায়নিক। যত বেশী শোষণ ক্ষমতা সম্পন্ন, এসব উপাদানের পরিমাণ ততই বেশী। আর এই সব উপাদান দায়ী জরায়ুর ক্যান্সার হতে শুরু করে সন্তান না হওয়া পর্যন্ত নানা রকম ভয়াবহ স্বাস্থ্য সমস্যার জন্য।</p><p>৫. কৃত্রিম সুগন্ধীযুক্ত প্যাড দেখে আকৃষ্ট হয়ে কিনে ফেলবেন না। চটকদার বিজ্ঞাপনেও ভুলবেন না। এই উপাদানগুলো আপনার গোপন অঙ্গে কালো দাগ ও এলার্জি তৈরী করতে পারে।</p><p>৬. প্যাড ব্যবহারের ক্ষেত্রে অধিক শোষণ ক্ষমতার দিকে না গিয়ে নরম তুলো বা সুতি কাপড়ের তৈরি অরগানিক প্যাড কিনুন। বিজ্ঞাপনে একটি পণ্যকে ভালো বললেই সেটা ভালো হয়ে যায় না।</p><p>৭. রক্তপাতের পরিমাণ কম থাকলে এবং আপনি যখন বাড়িতে আছে, তখন চেষ্টা করুন প্যাড ছাড়াই থাকতে। ২৪ ঘণ্টা এক টানা প্যাড পরিধান থেকে গোপন অঙ্গে দুর্গন্ধ তো হবেই, সেই সঙ্গে ব্যাকটেরিয়াল ও ফাঙ্গাস ইনফেকশনও হবে।</p>', 'maxresdefault-1-696x391.jpg', 1, 'published', 1, 0, '2018-05-06', '\r\n০৪:২৬ মিঃ, মে ৬, ২০১৮				'),
(19, 1, '1', 'সঠিক সময়ে ঘুম থেকে উঠতে যে কাজগুলো করতে হবে', '', '<p>সকালে ঘুম থেকে ওঠা কতোটা কষ্টকর তা আমরা সবাই জানি। ঘুমের আবেশে জড়িয়ে থাকার আরাম থেকে উঠতে কারোরই মন চায় না। কিন্তু যতই মন না মানুক, শত অনিচ্ছা সত্ত্বেও বিছানা থেকে উঠতে হয়। কিন্তু এই দোটানার মধ্যে থাকতে থাকতেই দেরি হয়ে যায় সকলের। ভোরের পাখি হওয়া আর হয়ে উঠে না। আর পুরো দিনটিই এর প্রভাবে কাটে।</p><p>সকালে দেরি করে ঘুম থেকে ওঠা যতটা স্বাস্থ্যের জন্য খারাপ, ঠিক ততোটাই মানসিক প্রশান্তির জন্য খারাপ। সকালের তাজা হাওয়া মন ও স্বাস্থ্যের জন্য অনেক ভালো। তাই সকালে জলদি ওঠার অভ্যাস করা সকলের জন্য বেশ জরুরী। আর এই ভোরে ওঠার কষ্টকর অভ্যাসকে সহজ করার রয়েছে বেশ ভালো কিছু উপায়। আসুন তবে জেনে নেই এই উপায় গুলো যাতে একটি ভালো অভ্যাস সহজে আয়ত্ত করা সম্ভব হয়।</p><p><strong>ঘুমের সময় নির্দিষ্ট করুন</strong><br />ব্যস্ত জীবনে কম বেশী সবারই রাতে একেক সময় কিংবা দেরি করে ঘুমাতে যাওয়া হয়। প্রথমে এই অভ্যাসটি দূর করতে হবে। কারণ রাতে দেরি করে ঘুমোতে গেলে ঘুম পুরো হয় না বলে ভোরে উঠা সম্ভব হয় না। আবার একেক দিন একেক সময় রাতে ঘুমোতে গেলে ঘুমের পরিমাণ ও সময় ওলট পালট হয়ে একটি বদ অভ্যাসের সৃষ্টি হয়। তাই চেষ্টা করুন রাতে একটি নির্দিষ্ট সময় ঘুমোতে যাবার। আর তা থেকে ঠিক ৬/৭ ঘণ্টা পর ঘুম থেকে উঠার চেষ্টা করুন। নিয়মিত একটু তাড়াতাড়ি নির্দিষ্ট সময়ে ঘুমোতে গেলে ও ভোরে ঘুম থেকে উঠলে অভ্যাসে পরিণত হয়ে যাবে।</p><p><strong>দূরে রাখুন অ্যালার্ম ঘড়ি</strong><br />অনেকেই আছেন ভোরে ঘুম থেকে ওঠার জন্য ঘড়িতে কিংবা মোবাইলে ফোন অ্যালার্ম দিয়ে বিছানায় কিংবা বিছানার পাশে রেখে ঘুমান। এবং প্রতিদিনই অ্যালার্ম বাজার সাথে সাথে হাতের নাগালে পেয়ে অ্যালার্ম বন্ধ করে আবার ঘুমিয়ে পড়েন। এই সমস্যা দূর করতে আপনাকে একটু কষ্ট করে অ্যালার্ম ঘড়িটা বিছানা থেকে দূরে রাখুন। যাতে আপনাকে সকালে অ্যালার্ম বন্ধ করার জন্য বিছানা থেকে উঠে যেতে হয়। আর বিছানা থেকে ওঠা আপনার ঘুম দূর করতে সাহায্য করবে।</p><p><strong>ঘরে ভোরের আলো ঢোকার ব্যবস্থা রাখুন</strong><br />ভোরের আলো কিংবা সকালের কুসুম আলো ঘরে না ঢোকার ব্যবস্থা না থাকলে রাতের আভা ঘর থেকে বের হয় না। ফলে ঘুমও কাটে না সহজে। বিছানা সরাসরি জানালার পাশে রাখার চেষ্টা করুন। যাতে সকালের আলো আপনার ঘুম ভাঙতে সাহায্য করে। ঘরে সকালের কোমল আলোয় ঘুম ভাঙ্গার সাথে সাথে মনও ভালো হয়ে যাবে। দিনের শুরু হবে আনন্দে।</p><p><strong>সকালের জন্য থাক কিছু জরুরি পরিকল্পনা</strong><br />অনেকেই আছেন দরকার না হলে ভোরে ঘুম থেকে উঠেন না। তাদের জন্য ভোরে উঠার অভ্যাস করার একটি সহজ উপায় হচ্ছে ভোরের দিকে কোনো জরুরী কাজ করার প্ল্যান করা। কাজটির জন্য হলেও ঘুম থেকে উঠতে কষ্ট একটু কম হবে। আর এভাবে কিছুদিন নিয়মিত ভোরে উঠতে পারলে তা আপনা আপনিই অভ্যাসে পরিনত হবে।</p><p><strong>অনিদ্রারোগ দূর করুন</strong><br />অনেকেই রাতে দেরি করে ঘুমানোর অভ্যাসটির কারনে অনিদ্রারোগে ভুগে থাকেন। এই রোগটি দূর করতে হবে। অনিদ্রারোগটি প্রাথমিক পর্যায়ের হলে হালকা আলোয় কিংবা অন্ধকার ঘরে ঘুমুতে চেষ্টা করুন অথবা বই পড়ার অভ্যাস করুন বিছানায় শুয়ে। আর অনিদ্রা বেশী হলে ডাক্তারের সাথে পরামর্শ করে এই রোগটি অতি সত্বর দূর করুন।</p><p><strong>ব্যায়ামের মাধ্যমে শরীরে ক্লান্তি আনুন</strong><br />অনেকেই আছেন যারা সকালে উঠতে চান কিন্তু রাতে ঘুমুতে পারেন না বলে সকালে ঘুম থেকে উঠতে দেরি হয়। এবং এর ফলশ্রুতিতে অন্যান্য অনেক কাজে দেরি হয়। ঘুম আসলে তখনই আসে যখন শরীরে ক্লান্তি আসে। শরীরে ক্লান্তি ভর করে বলেই ঘুমে চোখ বন্ধ হয়ে আসে। সকালে ব্যায়াম করলে দুটি উপকার পাবেন। প্রথমত, সকালের ঘুম ঘুম ভাব দূর হয়। এবং দ্বিতীয়ত পুরো দিনের কাজ করার ক্ষমতা অর্জন করে রাতে শরীরে ক্লান্তি আনতে সাহায্য করে। তাই ব্যায়াম করুন ও ভোরে উঠার অভ্যাস করুন।</p>', '1525603471image-17-696x464.jpg', 2, 'published', 0, 0, '2018-05-06', '\r\n০৪:৪৩ মিঃ, মে ৬, ২০১৮				'),
(20, 4, '1', 'খাবারে অ্যালার্জি', '', '<p>কারও দুধ খেলে পেট খারাপ হয়ে যায়। কারও বেগুনে মুখ চুলকায়। ডিম খেয়ে পেট ব্যথা শুরু হয় কারও কারও। এগুলো ফুড অ্যালার্জি বা খাবারে অ্যালার্জি। অ্যালার্জি থাকলে কেবল বেগুন, চিংড়ি বা গরুর মাংস বাদ&mdash;এই ধারণাও ভুল। কেননা একেজনের একেক ধরনের খাবারে অ্যালার্জি থাকে।</p><p>* দুধ: বিশেষ করে শিশুদের দুধে অ্যালার্জি বেশি হয়। একে বলে ল্যাকটোজ ইনটলারেন্স। দুধে যে ল্যাকটোজ নামের উপাদান থাকে তা হজম করার উৎসেচকে সমস্যা থাকে বলেই এমন হয়।</p><p>* শস্য: যব, ভুট্টা, ওট, ময়দা ইত্যাদি খাবারে গ্লুটেন থাকে, আর অনেকেরই গ্লুটেনে অ্যালার্জি থাকে। এ ছাড়া সিলিয়াক ডিজিজে আক্রান্ত রোগীরা গ্লুটেন খেতে পারেন না।</p><p>* ডিম: ডিমে অনেকেরই অ্যালার্জি থাকে। ডিমের আমিষ অংশ খেলে অনেকের প্রতিক্রিয়া হয়, চোখ লাল হতে পারে, ত্বকে চুলকানি হতে পারে। খুব ছোট শিশুদের ডিম না দেওয়াই ভালো।</p><p>* মাছ: সামুদ্রিক মাছ, চিংড়ি, ইলিশ, স্কুইড ইত্যাদিতে অ্যালার্জি হয় বেশি। সবারই চিংড়ি বা ইলিশ খাওয়া নিষেধ তা নয়। যাদের এসব খাবার খেলে প্রতিক্রিয়া হয় শুধু তাঁরাই বাদ দেবেন।</p><p>* বাদাম ও বীজ: বাদাম ও বীজজাতীয় খাবারেও অনেকের অ্যালার্জি হয়। এগুলোও আমিষজাতীয় খাবার। তাই ইমিউন সিস্টেমের ওপর প্রভাব ফেলে বেশি।</p><p><strong>কীভাবে বুঝবেন অ্যালার্জি?</strong><br />যদি একই ধরনের খাবার খেয়ে আপনার ত্বক ও মুখ জিবে চুলকানি, র&zwj;্যাশ, নাক দিয়ে পানি পড়া, চোখ লাল হওয়া, শুকনো কাশি, পেট কামড়ানো বা ব্যথা, ডায়রিয়া ইত্যাদি দেখা দেয় তবে বুঝবেন ওই খাবারে আপনার অ্যালার্জি আছে। অনেক সময় খুব তীব্র অ্যালার্জি থেকে শ্বাসকষ্ট, বুকে ব্যথা শুরু হয়ে যেতে পারে। সাধারণত পরিবারেও অ্যালার্জির ইতিহাস থাকে।</p><p><strong>কী করবেন?</strong><br />সহজ উপায় হলো ওই খাবারটি এড়িয়ে চলা। বাড়িতে তা সহজ, কিন্তু রেস্তোরাঁয় বা কেনা অনেক খাবারে এই উপাদান লুকিয়ে থাকতে পারে। সমস্যা দেখা দিলে অ্যান্টিহিস্টামিন খেতে পারেন। শ্বাসকষ্ট হলে চিকিৎসকের শরণাপন্ন হওয়াই ভালো।</p><p>ডা. আ ফ ম হেলালউদ্দিন<br />মেডিসিন বিশেষজ্ঞ, স্যার সলিমুল্লাহ মেডিকেল কলেজ<br />সূত্র &ndash; প্রথম আলো।</p>', '1525603717food-allergies-display.jpg', 2, 'published', 0, 0, '2018-05-06', '\r\n০৪:৪৮ মিঃ, মে ৬, ২০১৮				');

-- --------------------------------------------------------

--
-- Table structure for table `slider_video`
--

CREATE TABLE `slider_video` (
  `slider_video_id` int(255) NOT NULL,
  `slider_video_title` varchar(255) NOT NULL,
  `slider_video_youtube_id` varchar(255) NOT NULL,
  `slider_video_upload_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider_video`
--

INSERT INTO `slider_video` (`slider_video_id`, `slider_video_title`, `slider_video_youtube_id`, `slider_video_upload_date`) VALUES
(6, 'সুস্থ মন ও দেহের জন্য খাবার', 'guxledYcXcE', '2018-05-06 10:54:00'),
(8, 'বাদামের ভূমিকা', 'wzggdR4ICnk', '2018-05-06 10:54:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `adv`
--
ALTER TABLE `adv`
  ADD PRIMARY KEY (`adv_id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `slider_video`
--
ALTER TABLE `slider_video`
  ADD PRIMARY KEY (`slider_video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `adv`
--
ALTER TABLE `adv`
  MODIFY `adv_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `slider_video`
--
ALTER TABLE `slider_video`
  MODIFY `slider_video_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
