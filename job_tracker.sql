-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2024 at 01:29 PM
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
(7, 2, 'ONE Indonesia', 'Backend Developer', '<article class=\"jobs-description__container\r\n          jobs-description__container--condensed\">\r\n<div class=\"jobs-description__content jobs-description-content\r\n            jobs-description__content--condensed\">\r\n<div id=\"job-details\" class=\"jobs-box__html-content jobs-description-content__text t-14 t-normal\r\n              jobs-description-content__text--stretch\" tabindex=\"-1\">\r\n<h2 class=\"text-heading-large\r\n                mb4\">About the job</h2>\r\n<p><strong>Role Description</strong></p>\r\n<p>This is a full-time on-site role for a Back End Developer located in Jakarta, Indonesia (for client : Banking Industry). The Back End Developer will be responsible for back-end web and software development including object-oriented programming (OOP) and programming. The Back End Developer will also work with front-end developers to ensure system functionality.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Qualifications</strong></p>\r\n<ul>\r\n<li>Freshgraduate are welcome</li>\r\n<li>Back-End Web Development and Software Development skills</li>\r\n<li>Object-Oriented Programming (OOP) skills</li>\r\n<li>Experience in working with front-end developers</li>\r\n<li>Strong problem-solving and analytical skills</li>\r\n<li>Proficiency in programming languages such as Java, Springboot and PHP</li>\r\n<li>Experience with databases such as MySQL, Oracle, and SQL Server</li>\r\n<li>Bachelor\'s or Master\'s degree in Computer Science, Software Engineering, or related field</li>\r\n<li>Excellent written and oral communication skills</li>\r\n</ul>\r\n</div>\r\n<div class=\"jobs-description__details\">&nbsp;</div>\r\n</div>\r\n</article>\r\n<footer></footer>', 'Linkedin', '2024-01-12 06:44:08', 'Viewed', 'https://oneindonesia.id/', '2024-01-11 20:10:29', '2024-01-12 09:07:09'),
(8, 2, 'PT. Equityworld Cyber 2 Tower', 'Administration', '<p>-</p>', 'Linkedin', '2024-01-11 17:00:00', 'Interview HRD', 'https://www.equityworld-futures.com', '2024-01-11 20:19:53', '2024-01-13 06:11:16'),
(9, 2, 'Uninet Media Sakti', 'Backend Developer', '<h2 class=\"text-heading-large\r\n                mb4\">About the job</h2>\r\n<p><strong>Qualifications</strong></p>\r\n<ul>\r\n<li>Experienced as BackEnd Programmer min. 2 years</li>\r\n<li>Javascript (Vanilla JS), PHP (PHP Framework Lumen) and NodeJS proficiency</li>\r\n<li>Experienced with MySQL/PostgreSQL/MSSQL (Stored Procedure) and RestAPI</li>\r\n<li>Understanding Microservice architecture concept &amp; OOP concept into programming</li>\r\n<li>Familiar with VCS Tool with Git</li>\r\n<li>Strong analytical thinking &amp; problem solving skills</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Placement:</strong> Warung Buncit, South Jakarta</p>', 'Linkedin', '2024-01-11 17:00:00', 'Viewed', 'https://uninet.net.id', '2024-01-11 20:24:45', '2024-01-13 06:09:50'),
(10, 2, 'PT. Entrepreneur Trust Digital', 'Laravel CI+ Python', '<p>PT. Entrepreneur Trust Digital provide clients with our professional team which are adapt with all the latest technologies. Our services in IT Outsourcing are an efficient way to deliver IT solutions to any business to boost business performance.</p>\r\n<p>&nbsp;</p>\r\n<p>We are looking for talented individuals for Back End Developer, PHP(Laravel, CI) + Python Developer.</p>\r\n<p>&nbsp;</p>\r\n<p>Requirements :</p>\r\n<p>2 years Programming Language (PHP), PHP Development Framework (laravel, codeigniter),</p>\r\n<p>1 years Python</p>\r\n<p>Responsibility:</p>\r\n<ul>\r\n<li>Conducting analysis of website and application requirements</li>\r\n<li>Doing development on backend services or API</li>\r\n<li>Build applications for both web and mobile backend services</li>\r\n<li>Writing back-end code and building efficient PHP modules.</li>\r\n<li>Developing back-end portals with an optimized database</li>\r\n<li>Troubleshooting application and code issues.</li>\r\n<li>Integrating data storage solutions</li>\r\n<li>Building reusable code for future use</li>\r\n<li>Optimizing web pages for maximum speed and scalability</li>\r\n</ul>', 'Linkedin', '2024-01-12 05:00:00', 'Send CV', 'https://www.entrustdigital.co.id', '2024-01-12 09:09:24', '2024-01-12 09:09:24'),
(11, 2, 'Seiso', 'Web Developer', '<h2 class=\"text-heading-large\r\n                mb4\">About the job</h2>\r\n<p><strong>Company Description<br></strong></p>\r\n<p>Seiso is an IT service provider that focuses on delivering the best solutions for growing businesses. Our mission is to shine by providing the best services and experience for our clients. As a digital architect, we help businesses improve their processes to enhance customer experience, increase profitability, and improve competitiveness. We combine business, IT, and design backgrounds to provide consultancy services.</p>\r\n<p><strong>Role Description<br></strong></p>\r\n<p>This is an on-site internship role for a Web Developer. The Web Developer will be responsible for front-end and back-end web development, programming, and web design. The Web Developer will be working with a team of developers and designers to build and improve websites and web applications.</p>\r\n<p><strong>Qualifications<br></strong></p>\r\n<ul>\r\n<li>Back-End Web Development and Programming skills</li>\r\n<li>Front-End Development and Web Design skills</li>\r\n<li>Experience in Web Development</li>\r\n<li>Knowledge of web development frameworks and libraries</li>\r\n<li>Excellent problem-solving skills</li>\r\n<li>Ability to work in a team environment</li>\r\n<li>Bachelor\'s degree in Computer Science or related field</li>\r\n<li>Experience with Agile development methodologies is a plus</li>\r\n</ul>', 'Linkedin', '2024-01-12 05:00:00', 'Send CV', 'https://seiso.id', '2024-01-12 09:12:14', '2024-01-12 09:12:14'),
(12, 2, 'Talent Disruptors', 'Web Developer', '<article class=\"jobs-description__container\r\n          jobs-description__container--condensed\">\r\n<div class=\"jobs-description__content jobs-description-content\r\n            jobs-description__content--condensed\">\r\n<div id=\"job-details\" class=\"jobs-box__html-content jobs-description-content__text t-14 t-normal\r\n              jobs-description-content__text--stretch\" tabindex=\"-1\" data-artdeco-is-focused=\"true\"><strong>About Us:<br></strong>Talent Disruptors is a dynamic and forward-thinking company dedicated to revolutionizing the talent acquisition landscape. Our team is committed to pushing boundaries and leveraging cutting-edge technology to redefine how organizations attract, assess, and engage top-tier talent.<br><br><strong>Role Overview:<br></strong>We are seeking a skilled and motivated Web Developer to join our innovative tech team. As a Web Developer at Talent Disruptors, you will play a pivotal role in designing, developing, and maintaining our web applications to enhance user experience and support our business objectives.<br><br><strong>Responsibilities:<br></strong>\r\n<ul>\r\n<li>Collaboration: Work closely with cross-functional teams to gather and comprehend project requirements effectively.</li>\r\n<li>Design and Implementation: Conceptualize, design, and implement responsive, efficient, and scalable web solutions.</li>\r\n<li>Full-Stack Development: Develop and maintain both front-end and back-end functionality for web applications.</li>\r\n<li>UI/UX Technical Feasibility: Ensure the technical feasibility of UI/UX designs, translating creative concepts into practical solutions.</li>\r\n<li>Optimization: Optimize applications for maximum speed and scalability, enhancing overall performance.</li>\r\n<li>Integration: Collaborate seamlessly with other developers to integrate user-facing elements with server-side logic, ensuring a cohesive user experience.</li>\r\n<li>Troubleshooting: Identify, troubleshoot, debug, and resolve software defects and issues, maintaining the integrity of our web applications.</li>\r\n<li>Continuous Learning: Stay up-to-date with emerging web technologies and industry trends, incorporating relevant advancements into our development processes. <br><br></li>\r\n</ul>\r\n<strong>Qualifications:<br></strong>\r\n<ul>\r\n<li>Education: Bachelor\'s degree in Computer Science, Software Engineering, or a related field.</li>\r\n<li>Experience: Proven track record as a Web Developer with a robust portfolio showcasing diverse web development projects.</li>\r\n<li>Technical Proficiency: Strong command of HTML5, CSS3, JavaScript, and related frameworks/libraries.</li>\r\n<li>Front-End Expertise: Experience with front-end frameworks such as React, Angular, or Vue.js.</li>\r\n<li>Back-End Skills: Solid understanding of server-side languages, including proficiency in either Node.js or Python.</li>\r\n<li>Database Knowledge: Familiarity with database systems, including MySQL and MongoDB.</li>\r\n<li>Security Acumen: Knowledge of web security best practices.</li>\r\n<li>Problem-Solving: Strong problem-solving skills coupled with meticulous attention to detail.</li>\r\n<li>Communication Skills: Excellent communication and collaboration abilities, both verbal and written.</li>\r\n<li>Adaptability: Ability to thrive in a fast-paced, collaborative environment where adaptability is key to success. <br><br></li>\r\n</ul>\r\n<strong>Benefits:<br></strong>As a remote-first position with our US-based company, we\'re committed to offering a comprehensive benefits package that supports both your professional and personal well-being. Here\'s what you can expect:<br>\r\n<ul>\r\n<li>Competitive Pay: Your salary will be reflective of your experience, ensuring fair and rewarding compensation.</li>\r\n<li>Unlimited Paid Time Off: Enjoy the flexibility of unlimited holidays, vacation days, and sick leave to maintain a healthy work-life balance.</li>\r\n<li>Ongoing Training &amp; Development: We invest in your growth through continuous learning and development opportunities.</li>\r\n<li>Regular Salary Increases: As you grow with us, your salary will too, with periodic increases to recognize your contributions.</li>\r\n<li>Performance Bonuses: Your hard work doesn\'t go unnoticed &ndash; expect bonuses for outstanding performance.</li>\r\n<li>Growth Potential: As our company expands, so do your career opportunities, opening doors for professional advancement.</li>\r\n<li>Remote Work Flexibility: Experience the convenience and comfort of working remotely, connecting with a dynamic team from anywhere.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</article>', 'Linkedin', '2024-01-12 17:00:00', 'Send CV', 'https://www.talentdisruptors.com/', '2024-01-13 06:18:31', '2024-01-13 06:18:31'),
(13, 2, 'Creativeans', 'Web Developer', '<article class=\"jobs-description__container\r\n          jobs-description__container--condensed\">\r\n<div class=\"jobs-description__content jobs-description-content\r\n            jobs-description__content--condensed\">\r\n<div id=\"job-details\" class=\"jobs-box__html-content jobs-description-content__text t-14 t-normal\r\n              jobs-description-content__text--stretch\" tabindex=\"-1\">\r\n<h2 class=\"text-heading-large\r\n                mb4\">About the job</h2>\r\n<p>Creativeans is an award-winning brand consultancy with offices in Singapore, Jakarta, Milan, and Vancouver. We specialize in strategic branding and design, helping clients build meaningful brands that have a positive impact on the world. Our capabilities include branding, business design, UI/UX design, packaging design, and communication design. We work with businesses across industries and geographies, using our systematic approach and unique methodologies to solve strategic and creative challenges.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Role </strong></p>\r\n<p>We are looking to hire a skilled WordPress developer to design and implement attractive and functional websites for our clients. You will be responsible for both back-end and front-end development including the implementation of WordPress themes and plugins and site integration and security updates.</p>\r\n<p>To be a successful WordPress developer, you should have in-depth knowledge of front-end programming languages, a good eye for aesthetics, and strong content management skills. Ultimately, a top-class WordPress developer can create attractive, user-friendly websites that perfectly meet the design and functionality specifications of the client.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Responsibilities</strong></p>\r\n<p>Meeting with clients to discuss website design and function</p>\r\n<p>Designing and building the website front-end</p>\r\n<p>Creating the website architecture</p>\r\n<p>Designing and managing the website back-end including database and server integration</p>\r\n<p>Generating WordPress themes and plugins</p>\r\n<p>Conducting website performance tests</p>\r\n<p>Troubleshooting content issues</p>\r\n<p>Conducting WordPress training with the client</p>\r\n<p>Monitoring the performance of the live website</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Requirements</strong></p>\r\n<p>Bachelor&rsquo;s degree in computer science or a similar field</p>\r\n<p>Proven work experience as a WordPress developer</p>\r\n<p>Knowledge of front-end technologies including CSS3, JavaScript, HTML5, and jQuery</p>\r\n<p>Knowledge of code versioning tools including Git, Mercurial, and SVN</p>\r\n<p>Experience working with debugging tools such as Chrome Inspector and Firebug</p>\r\n<p>Good understanding of website architecture and aesthetics</p>\r\n<p>Ability to manage projects</p>\r\n<p>Good communication skills</p>\r\n</div>\r\n</div>\r\n</article>', 'Linkedin', '2024-01-12 17:00:00', 'Send CV', 'https://www.creativeans.com', '2024-01-13 06:21:00', '2024-01-13 06:21:00'),
(14, 2, 'Career Diversity', 'IT Engineer', '<p>-</p>', 'Linkedin', '2024-01-12 17:00:00', 'Send CV', 'https://career-diversity.com/careerdiversity-en/', '2024-01-13 06:27:58', '2024-01-13 06:27:58'),
(15, 2, 'BukuWarung', 'Frontend Engineer', '<div id=\"job-details\" class=\"jobs-box__html-content jobs-description-content__text t-14 t-normal\r\n              jobs-description-content__text--stretch\" tabindex=\"-1\" data-artdeco-is-focused=\"true\">\r\n<h2 class=\"text-heading-large\r\n                mb4\">About the job</h2>\r\n<strong>Overview<br><br></strong>BukuWarung is SEA&rsquo;s fastest growing startup and we are building the digital infrastructure for 60 million MSMEs in Indonesia, enabling them to efficiently manage and grow their business, starting with digital bookkeeping, online storefront &amp; payments. BukuWarung&rsquo;s vision is to empower 60 million MSMEs in Indonesia to become financially aware and enable them to manage and grow their business using technology.<br><br>BukuWarung is backed by top tier VCs globally: Peter Thiel&rsquo;s Valar Ventures, Goodwater Capital, Y-Combinator, AC Ventures, Quona Capital, East Ventures, Golden Gate Ventures, Rocketship.vc, Tanglin Venture Partners and strategic angel investors from Stripe, PayPal, Plaid, Grab, Gojek, Facebook, AirBnB, Fast, Mastercard etc.<br><br>We are looking for programmers with a keen eye for design for the position of front end engineer. Front end engineers are responsible for ensuring the alignment of web design and user experience requirements, optimizing web pages for maximum efficiency, and maintaining brand consistency across all web pages, among other duties.Front end engineers are required to work in teams alongside back end developers, graphic designers, and user experience designers to ensure all elements of web creation are consistent. This requires excellent communication and interpersonal skills.<br><br>Responsibilities:<br><br>\r\n<ul>\r\n<li>Determining the structure and design of web pages</li>\r\n<li>Ensuring user experience determines design choices</li>\r\n<li>Developing features to enhance the user experience</li>\r\n<li>Striking a balance between functional and aesthetic design</li>\r\n<li>Ensuring web design is optimized for smartphones</li>\r\n<li>Building reusable code for future use</li>\r\n<li>Optimizing web pages for maximum speed and scalability</li>\r\n<li>Utilizing a variety of markup languages to write web pages</li>\r\n<li>Maintaining brand consistency throughout the design<br><br><br></li>\r\n</ul>\r\nRequirements:<br><br>\r\n<ul>\r\n<li>Degree in computer science or related field with 1-3 years of experience</li>\r\n<li>Understanding of key design principles</li>\r\n<li>Proficiency in HTML, CSS, JavaScript, and jQuery</li>\r\n<li>Working knowledge of ReactJs, Next JS frameworks</li>\r\n<li>Experience with graphic design applications such as Adobe Illustrator</li>\r\n<li>Experience with responsive and adaptive design</li>\r\n<li>Understanding of SEO principles</li>\r\n<li>Good problem-solving skills</li>\r\n<li>Excellent verbal communication skills</li>\r\n<li>Good interpersonal skills</li>\r\n</ul>\r\nIf this sounds like you, please apply!</div>', 'Linkedin', '2024-01-13 17:00:00', 'Send CV', 'https://bukuwarung.com', '2024-01-14 04:56:09', '2024-01-14 04:56:09'),
(16, 2, 'PT. Sahabat Mikro Fintek', 'Frontend Developer', '<div class=\"jobs-box--fadein jobs-box--full-width jobs-box--with-cta-large jobs-description\r\n        \r\n        \r\n        \r\n         jobs-description--reformatted\r\n        \r\n        \">\r\n<article class=\"jobs-description__container\r\n          m4\">\r\n<div class=\"jobs-description__content jobs-description-content\r\n            \">\r\n<div id=\"job-details\" class=\"jobs-box__html-content jobs-description-content__text t-14 t-normal\r\n              jobs-description-content__text--stretch\" tabindex=\"-1\" data-artdeco-is-focused=\"true\">\r\n<h2 class=\"text-heading-large\r\n                mb4\">About the job</h2>\r\n<p><strong>Primary Job Role :</strong></p>\r\n<p>As an IT Front End Staff, you will be responsible for designing and developing the user interface of our digital products. You will work closely with the IT team to ensure that our products are visually appealing, easy to use, and accessible across various platforms.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Job Qualifications :</strong></p>\r\n<ul>\r\n<li>Bachelor\'s degree in Computer Science or a related field.</li>\r\n<li>Strong knowledge of front-end programming language JavaScript.</li>\r\n<li>Experience with front-end development frameworks such as Vue.js</li>\r\n<li>Knowledge of web design principles and user interface design.</li>\r\n<li>Familiarity with accessibility standards and guidelines.</li>\r\n<li>Strong problem-solving and troubleshooting skills.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Job Description :</strong></p>\r\n<ul>\r\n<li>Collaborate with designers and IT team members to create and maintain the user interface of our digital products, including web and mobile applications.</li>\r\n<li>Use front-end programming language JavaScript to develop user-friendly interfaces.</li>\r\n<li>Develop and maintain coding standards and guidelines for user interface development.</li>\r\n<li>Conduct user research to understand user behavior and preferences to inform interface design decisions.</li>\r\n<li>Ensure that the user interface is accessible to all users, including those with disabilities.</li>\r\n<li>Troubleshoot and debug issues with the user interface as needed.</li>\r\n</ul>\r\n</div>\r\n<div class=\"jobs-description__details\">&nbsp;</div>\r\n</div>\r\n</article>\r\n</div>', 'Linkedin', '2024-01-13 17:00:00', 'Send CV', 'https://www.samir.co.id', '2024-01-14 05:14:11', '2024-01-14 05:14:11'),
(17, 2, 'PT Prodia Widyahusada Tbk', 'IT System', '<div class=\"jobs-box--fadein jobs-box--full-width jobs-box--with-cta-large jobs-description\r\n        \r\n        \r\n        \r\n         jobs-description--reformatted\r\n        \r\n        \">\r\n<article class=\"jobs-description__container\r\n          m4\">\r\n<div class=\"jobs-description__content jobs-description-content\r\n            \">\r\n<div id=\"job-details\" class=\"jobs-box__html-content jobs-description-content__text t-14 t-normal\r\n              jobs-description-content__text--stretch\" tabindex=\"-1\" data-artdeco-is-focused=\"true\">\r\n<h2 class=\"text-heading-large\r\n                mb4\">About the job</h2>\r\n<p><strong>Responsibilities</strong></p>\r\n<ul>\r\n<li>Implement technology security solutions to improve security controls.</li>\r\n<li>Maintain system &amp; endpoint security assets (eg. Server, Client, Antivirus, MDM, Encryption, Patching, Hardening and etc).</li>\r\n<li>Solve the technical problems related to system &amp; endpoint security.</li>\r\n<li>Protect information assets and appropriate security log information.</li>\r\n<li>Report this job advert.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Qualifications</strong></p>\r\n<ul>\r\n<li>Bachelor\'s Degree in Information Engineering / Computer Engineering / Information System, min GPA 3.00</li>\r\n<li>Have min 1-2 years experience as endpoint security.</li>\r\n<li>Have experience securing applications &amp; ticketing problem for IT Security</li>\r\n<li>Strong network security basic.</li>\r\n<li>Knowledge of using and applying vulnerability assessment tools, such as UEM, MDM, Malware Analyst.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</article>\r\n</div>', 'Linkedin', '2024-01-13 17:00:00', 'Send CV', 'https://prodia.co.id', '2024-01-14 05:24:50', '2024-01-14 05:24:50');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
