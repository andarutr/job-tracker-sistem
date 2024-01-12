-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 04:37 AM
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
-- Database: `jts_kitacoding`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `company` varchar(50) NOT NULL,
  `role` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `platform` varchar(25) NOT NULL,
  `apply_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('Send CV','Viewed','Interview HRD','Interview User','Success','Failed') NOT NULL,
  `link` varchar(128) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `user_id`, `company`, `role`, `description`, `platform`, `apply_at`, `status`, `link`, `created_at`, `updated_at`) VALUES
(1, 2, 'PT Berca Hardayaperkasa', 'PHP Developer', '<p>Description:<br>- Develop application based on user requirement<br>- Install and configurate application<br>- Support application after go-live<br>- Enhance application based on user requirements<br>- Optimize code and performance<br>- Tracing and bug fixing</p>', 'Linkedin', '2023-12-29 08:00:00', 'Send CV', 'https://www.berca.co.id/', '2024-01-07 06:39:03', '2024-01-07 06:39:03'),
(2, 2, 'PT. Prawathiya Karsa Pradiptha', 'PHP Developer', '<p>About the job :&nbsp;<br>The ideal candidate is a highly resourceful and innovative developer with extensive experience in the layout, design and coding of websites specifically in PHP format. You must also possess a strong knowledge of web application development using PHP programming language and MySQL Server databases.</p>\r\n<p>Responsibilities :<br>- Perform a mix of maintenance, enhancements, and new development as required<br>- Work in a data analyst role and with business intelligence applications<br>- Document features, technical specifications &amp; infrastructure Responsibilities<br>- Work cross-functionally to convert business needs into technical specifications</p>\r\n<p>Qualifications :<br>- 1-2 years\' of experience in web development<br>- Understanding CI and Laravel Framework<br>- Undestanding javascript<br>- Willing to be placed in cibubur area</p>', 'Linkedin', '2024-01-06 23:21:17', 'Viewed', 'https://www.pkp.co.id/en/', '2024-01-07 06:41:41', '2024-01-07 06:56:30'),
(3, 2, 'Tata Consultacy Services', 'Backend Developer', '<h2 class=\"text-heading-large\r\n                mb4\">About the job</h2>\r\n<p><strong>About TCS:</strong></p>\r\n<p>A purpose-led organization that is building a meaningful future through innovation, technology, and collective knowledge. We\'re #BuildingOnBelief.</p>\r\n<p>&nbsp;</p>\r\n<p>Tata Consultancy Services (TCS) is a global leader in IT services, digital and business solutions that partners with its clients to simplify, strengthen and transform their businesses. TCS offers a consulting-led, integrated portfolio of IT, BPS, infrastructure, engineering and assurance services. We ensure the highest levels of certainty and satisfaction through a deep-set commitment to our clients, comprehensive industry expertise and a global network of innovation and delivery centers. For more information, visit us at www.tcs.com.</p>\r\n<p>&nbsp;</p>\r\n<p>TCS began its operations in 1998 in Australia, starting from Sydney. Today it has regional offices across the country with a strong work force skilled across a range of IT-related infrastructure, business process and engineering projects. TCS&rsquo; growing clientele are a number of Australia&rsquo;s biggest companies.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Job Description:</strong></p>\r\n<ul>\r\n<li>Collaborate with Application Support Engineer to conduct root-cause analysis as and when needed and propose a corrective action plan.</li>\r\n<li>Analyze, Identify and learn, do bug fixing, develop/code new feature and/or enhance existing feature of application/microservices.</li>\r\n<li>Work independently to be able to communicate effectively with users, and development and support teams during downtimes and when there are questions or issues to be addressed</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Requirements:</strong></p>\r\n<ul>\r\n<li>Bachelor\'s degree in computer science, information technology, or a relevant field preferred.</li>\r\n<li>2+ years of strong development experience or as production support engineer.</li>\r\n<li>Good Knowledge in Java spring boot, Rest API, RDBMS such as PostgreSQL, SQL Server, Oracle, familiar with No SQL</li>\r\n<li>Familiar with Linux, Redis, CI/CD development, Git/Bitbucket or any source code repository</li>\r\n<li>Good knowledge with Agile Development process and software/tools such as Jira, Confluence, Bitbucket, Open Shift Container Platform</li>\r\n<li>Good point if has familiar with Cloud technologies such as AWS.</li>\r\n<li>Good in debugging skill and have experience in production support</li>\r\n<li>Good analytical and communication skill and problem solving.</li>\r\n<li>Able to work independently as well as a team to solve any technical issues in production.</li>\r\n<li>Experience in Finance (Banking) domain preferred</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Thank you for your interest in applying for this position with TCS. All applicants who meet the requirements will be considered equally and fairly for employment. We will review your application and will get back to you if we are considering your interest in this opportunity.</strong></p>', 'Linkedin', '2024-01-05 17:00:00', 'Failed', 'https://www.tcs.com/', '2024-01-11 19:02:29', '2024-01-11 19:02:29'),
(4, 2, 'Tata Consultacy Services', 'Web Developer', '<p><strong>Job Description:</strong></p>\r\n<ul>\r\n<li>Create well-designed and tested code using best practices for web development, including for responsive design and mobile display</li>\r\n<li>Create websites and interfaces using standard HTML/CSS practices, and incorporate data from back-end databases and services</li>\r\n<li>Develop or validate testing schedules that address all browsers and devices, ensuring web content can be accessed on any computer</li>\r\n<li>Maintain up-to-date knowledge of industry trends and technologies</li>\r\n<li>Perform UI design and coding and create reusable objects and wireframes for web pages and email templates</li>\r\n<li>Collaborate with a team to define, design, and ship new features</li>\r\n<li>Identify and correct bottlenecks and fix bugs</li>\r\n<li>Help maintain code quality, organization, and automatization</li>\r\n<li>Collaborate with Application Support Engineer to conduct root-cause analysis as and when needed and propose a corrective action plan.</li>\r\n<li>Work independently to be able to communicate effectively with users, and development and support teams during downtimes and when there are questions or issues to be addressed</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Requirements:</strong></p>\r\n<ul>\r\n<li>Bachelor\'s degree in computer science, information technology, or a relevant field preferred.</li>\r\n<li>Have at min. 3 years experience as a web developer or in a similar role (frontent developer).</li>\r\n<li>Dedication to innovative, sophisticated designs and collaborative problem-solving</li>\r\n<li>Experience in planning and developing websites across multiple products and organizations</li>\r\n<li>Extensive knowledge of web applications, programming languages, and web services &mdash; including API, CSS, CSS3, cross-browser compatibility, HTML, HTML5, JavaScript, jQuery, AngulasJS, security principles, REST, SOAP, and web user interface design</li>\r\n<li>Experience in implementing web development workflows and operations using a variety of tools</li>\r\n<li>Proficient understanding of code versioning tools (such as Git or SVN)</li>\r\n<li>Familiarity with continuous integration</li>\r\n<li>Experience in Finance (Banking) domain preferred</li>\r\n<li>Maintain up-to-date knowledge of industry trends and technologies</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Thank you for your interest in applying for this position with TCS. All applicants who meet the requirements will be considered equally and fairly for employment. We will review your application and will get back to you if we are considering your interest in this opportunity.</strong></p>', 'Linkedin', '2024-01-05 17:00:00', 'Send CV', 'https://www.tcs.com/', '2024-01-11 19:03:32', '2024-01-11 19:03:32'),
(5, 2, 'PT Indofood CBP Sukses Makmur Tbk', 'Programmer', '<h2 class=\"text-heading-large\r\n                mb4\">About the job</h2>\r\n<p><strong>Persyaratan Pekerjaan<br><br></strong></p>\r\n<ul>\r\n<li>Pendidikan S1 Teknik Informatika</li>\r\n<li>Lebih disukai yang berpengalaman minimal 4 tahun sebagai ASP Programmer/ Android Programmer</li>\r\n<li>Lebih disukai yang memiliki pengalaman terkait MVC technology, REST API technology, dan menggunakan reporting tools, seperti Dev Express/Telerik</li>\r\n<li>Memiliki pengalaman terkait PHP</li>\r\n<li>Kreatif dan memiliki antusiasme untuk mengembangkan keahlian diri</li>\r\n<li>Tersedia beberapa posisi lowong<br><br></li>\r\n</ul>\r\n<p><strong>Deskripsi Pekerjaan<br><br></strong>Sebagai ASP.Net Web Developer, bertanggung jawab dalam merancang, mengembangkan, dan melakukan uji coba pada software, dengan berdasar pada kebutuhan dan rancangan proses bisnis perusahaan.</p>', 'Linkedin', '2024-01-05 17:00:00', 'Send CV', '-', '2024-01-11 19:04:48', '2024-01-11 19:04:48'),
(6, 2, 'ITOMMEY Group', 'PHP Developer', '<h2 class=\"text-heading-large\r\n                \">About the job</h2>\r\n<p><strong>Responsibilities<br><br></strong></p>\r\n<ul>\r\n<li>Writing back-end code and building efficient PHP modules.</li>\r\n<li>Developing back-end portals with an optimized database.</li>\r\n<li>Troubleshooting application and code issues.</li>\r\n<li>Integrating data storage solutions.</li>\r\n<li>Responding to integration requests from front-end developers.</li>\r\n<li>Finalizing back-end features and testing web applications.</li>\r\n<li>Updating and altering application features to enhance performance<br><br></li>\r\n</ul>\r\n<p><strong>Requirements<br></strong></p>\r\n<ul>\r\n<li>Bachelor&rsquo;s degree in computer science or a similar field.</li>\r\n<li>Has Experience of PHP web frameworks including Laravel, and Codeigniter.</li>\r\n<li>Knowledge of front-end technologies including CSS3, JavaScript, and HTML5.</li>\r\n<li>Understanding of object-oriented PHP programming and Vue.</li>\r\n<li>Previous experience creating scalable applications.</li>\r\n<li>Proficient with code versioning tools including Git</li>\r\n<li>Familiarity with SQL/NoSQL databases.</li>\r\n<li>Ability to project manage.</li>\r\n<li>Good problem-solving skills.</li>\r\n</ul>', 'Linkedin', '2024-01-05 17:00:00', 'Send CV', 'https://dealls.com/loker/php-developer-1~itommey-group', '2024-01-11 19:05:57', '2024-01-11 19:05:57'),
(7, 2, 'ONE Indonesia', 'Backend Developer', '<article class=\"jobs-description__container\r\n          jobs-description__container--condensed\">\r\n<div class=\"jobs-description__content jobs-description-content\r\n            jobs-description__content--condensed\">\r\n<div id=\"job-details\" class=\"jobs-box__html-content jobs-description-content__text t-14 t-normal\r\n              jobs-description-content__text--stretch\" tabindex=\"-1\">\r\n<h2 class=\"text-heading-large\r\n                mb4\">About the job</h2>\r\n<p><strong>Role Description</strong></p>\r\n<p>This is a full-time on-site role for a Back End Developer located in Jakarta, Indonesia (for client : Banking Industry). The Back End Developer will be responsible for back-end web and software development including object-oriented programming (OOP) and programming. The Back End Developer will also work with front-end developers to ensure system functionality.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Qualifications</strong></p>\r\n<ul>\r\n<li>Freshgraduate are welcome</li>\r\n<li>Back-End Web Development and Software Development skills</li>\r\n<li>Object-Oriented Programming (OOP) skills</li>\r\n<li>Experience in working with front-end developers</li>\r\n<li>Strong problem-solving and analytical skills</li>\r\n<li>Proficiency in programming languages such as Java, Springboot and PHP</li>\r\n<li>Experience with databases such as MySQL, Oracle, and SQL Server</li>\r\n<li>Bachelor\'s or Master\'s degree in Computer Science, Software Engineering, or related field</li>\r\n<li>Excellent written and oral communication skills</li>\r\n</ul>\r\n</div>\r\n<div class=\"jobs-description__details\">&nbsp;</div>\r\n</div>\r\n</article>\r\n<footer></footer>', 'Linkedin', '2024-01-11 17:00:00', 'Send CV', 'https://oneindonesia.id/', '2024-01-11 20:10:29', '2024-01-11 20:10:29'),
(8, 2, 'PT. Equityworld Cyber 2 Tower', 'Administration', '<p>-</p>', 'Linkedin', '2024-01-11 17:00:00', 'Send CV', '-', '2024-01-11 20:19:53', '2024-01-11 20:19:53'),
(9, 2, 'Uninet Media Sakti', 'Backend Developer', '<h2 class=\"text-heading-large\r\n                mb4\">About the job</h2>\r\n<p><strong>Qualifications</strong></p>\r\n<ul>\r\n<li>Experienced as BackEnd Programmer min. 2 years</li>\r\n<li>Javascript (Vanilla JS), PHP (PHP Framework Lumen) and NodeJS proficiency</li>\r\n<li>Experienced with MySQL/PostgreSQL/MSSQL (Stored Procedure) and RestAPI</li>\r\n<li>Understanding Microservice architecture concept &amp; OOP concept into programming</li>\r\n<li>Familiar with VCS Tool with Git</li>\r\n<li>Strong analytical thinking &amp; problem solving skills</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Placement:</strong> Warung Buncit, South Jakarta</p>', 'Linkedin', '2024-01-11 17:00:00', 'Send CV', 'https://uninet.net.id', '2024-01-11 20:24:45', '2024-01-11 20:24:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2024_01_03_053823_create_applications_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@kitacoding.my.id', '$2y$12$vJVTqjjtzcHmx.4fMfQANucOV7fdCXp1RsCkszFz7I.EiQnyCJkzq', 1, '2024-01-07 06:31:52', '2024-01-07 06:31:52'),
(2, 'Andaru Triadi', 'andarutr@gmail.com', '$2y$12$vJVTqjjtzcHmx.4fMfQANucOV7fdCXp1RsCkszFz7I.EiQnyCJkzq', 0, '2024-01-07 06:31:52', '2024-01-07 09:23:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
