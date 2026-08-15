<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicationSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('applications')->truncate();
        DB::table('applications')->insert(array (
  0 => 
  array (
    'id' => 1,
    'user_id' => 2,
    'company' => 'PT Berca Hardayaperkasa',
    'role' => 'PHP Developer',
    'description' => '<p>Description:<br>- Develop application based on user requirement<br>- Install and configurate application<br>- Support application after go-live<br>- Enhance application based on user requirements<br>- Optimize code and performance<br>- Tracing and bug fixing</p>',
    'platform' => 'Linkedin',
    'apply_at' => '2023-12-28 17:00:00',
    'status' => 'Failed',
    'link' => 'https://www.berca.co.id/',
    'created_at' => '2024-01-07 06:39:03',
    'updated_at' => '2024-02-18 07:31:49',
  ),
  1 => 
  array (
    'id' => 2,
    'user_id' => 2,
    'company' => 'PT. Prawathiya Karsa Pradiptha',
    'role' => 'PHP Developer',
    'description' => '<p>About the job :&nbsp;<br>The ideal candidate is a highly resourceful and innovative developer with extensive experience in the layout, design and coding of websites specifically in PHP format. You must also possess a strong knowledge of web application development using PHP programming language and MySQL Server databases.</p>
<p>Responsibilities :<br>- Perform a mix of maintenance, enhancements, and new development as required<br>- Work in a data analyst role and with business intelligence applications<br>- Document features, technical specifications &amp; infrastructure Responsibilities<br>- Work cross-functionally to convert business needs into technical specifications</p>
<p>Qualifications :<br>- 1-2 years\' of experience in web development<br>- Understanding CI and Laravel Framework<br>- Undestanding javascript<br>- Willing to be placed in cibubur area</p>',
    'platform' => 'Linkedin',
    'apply_at' => '2024-01-06 17:00:00',
    'status' => 'Failed',
    'link' => 'https://www.pkp.co.id/en/',
    'created_at' => '2024-01-07 06:41:41',
    'updated_at' => '2024-01-16 16:52:34',
  ),
  2 => 
  array (
    'id' => 3,
    'user_id' => 2,
    'company' => 'Tata Consultacy Services',
    'role' => 'Backend Developer',
    'description' => '<h2 class="text-heading-large
                mb4">About the job</h2>
<p><strong>About TCS:</strong></p>
<p>A purpose-led organization that is building a meaningful future through innovation, technology, and collective knowledge. We\'re #BuildingOnBelief.</p>
<p>&nbsp;</p>
<p>Tata Consultancy Services (TCS) is a global leader in IT services, digital and business solutions that partners with its clients to simplify, strengthen and transform their businesses. TCS offers a consulting-led, integrated portfolio of IT, BPS, infrastructure, engineering and assurance services. We ensure the highest levels of certainty and satisfaction through a deep-set commitment to our clients, comprehensive industry expertise and a global network of innovation and delivery centers. For more information, visit us at www.tcs.com.</p>
<p>&nbsp;</p>
<p>TCS began its operations in 1998 in Australia, starting from Sydney. Today it has regional offices across the country with a strong work force skilled across a range of IT-related infrastructure, business process and engineering projects. TCS&rsquo; growing clientele are a number of Australia&rsquo;s biggest companies.</p>
<p>&nbsp;</p>
<p><strong>Job Description:</strong></p>
<ul>
<li>Collaborate with Application Support Engineer to conduct root-cause analysis as and when needed and propose a corrective action plan.</li>
<li>Analyze, Identify and learn, do bug fixing, develop/code new feature and/or enhance existing feature of application/microservices.</li>
<li>Work independently to be able to communicate effectively with users, and development and support teams during downtimes and when there are questions or issues to be addressed</li>
</ul>
<p>&nbsp;</p>
<p><strong>Requirements:</strong></p>
<ul>
<li>Bachelor\'s degree in computer science, information technology, or a relevant field preferred.</li>
<li>2+ years of strong development experience or as production support engineer.</li>
<li>Good Knowledge in Java spring boot, Rest API, RDBMS such as PostgreSQL, SQL Server, Oracle, familiar with No SQL</li>
<li>Familiar with Linux, Redis, CI/CD development, Git/Bitbucket or any source code repository</li>
<li>Good knowledge with Agile Development process and software/tools such as Jira, Confluence, Bitbucket, Open Shift Container Platform</li>
<li>Good point if has familiar with Cloud technologies such as AWS.</li>
<li>Good in debugging skill and have experience in production support</li>
<li>Good analytical and communication skill and problem solving.</li>
<li>Able to work independently as well as a team to solve any technical issues in production.</li>
<li>Experience in Finance (Banking) domain preferred</li>
</ul>
<p>&nbsp;</p>
<p><strong>Thank you for your interest in applying for this position with TCS. All applicants who meet the requirements will be considered equally and fairly for employment. We will review your application and will get back to you if we are considering your interest in this opportunity.</strong></p>',
    'platform' => 'Linkedin',
    'apply_at' => '2024-01-05 17:00:00',
    'status' => 'Failed',
    'link' => 'https://www.tcs.com/',
    'created_at' => '2024-01-11 19:02:29',
    'updated_at' => '2024-01-11 19:02:29',
  ),
  3 => 
  array (
    'id' => 4,
    'user_id' => 2,
    'company' => 'Tata Consultacy Services',
    'role' => 'Web Developer',
    'description' => '<p><strong>Job Description:</strong></p>
<ul>
<li>Create well-designed and tested code using best practices for web development, including for responsive design and mobile display</li>
<li>Create websites and interfaces using standard HTML/CSS practices, and incorporate data from back-end databases and services</li>
<li>Develop or validate testing schedules that address all browsers and devices, ensuring web content can be accessed on any computer</li>
<li>Maintain up-to-date knowledge of industry trends and technologies</li>
<li>Perform UI design and coding and create reusable objects and wireframes for web pages and email templates</li>
<li>Collaborate with a team to define, design, and ship new features</li>
<li>Identify and correct bottlenecks and fix bugs</li>
<li>Help maintain code quality, organization, and automatization</li>
<li>Collaborate with Application Support Engineer to conduct root-cause analysis as and when needed and propose a corrective action plan.</li>
<li>Work independently to be able to communicate effectively with users, and development and support teams during downtimes and when there are questions or issues to be addressed</li>
</ul>
<p>&nbsp;</p>
<p><strong>Requirements:</strong></p>
<ul>
<li>Bachelor\'s degree in computer science, information technology, or a relevant field preferred.</li>
<li>Have at min. 3 years experience as a web developer or in a similar role (frontent developer).</li>
<li>Dedication to innovative, sophisticated designs and collaborative problem-solving</li>
<li>Experience in planning and developing websites across multiple products and organizations</li>
<li>Extensive knowledge of web applications, programming languages, and web services &mdash; including API, CSS, CSS3, cross-browser compatibility, HTML, HTML5, JavaScript, jQuery, AngulasJS, security principles, REST, SOAP, and web user interface design</li>
<li>Experience in implementing web development workflows and operations using a variety of tools</li>
<li>Proficient understanding of code versioning tools (such as Git or SVN)</li>
<li>Familiarity with continuous integration</li>
<li>Experience in Finance (Banking) domain preferred</li>
<li>Maintain up-to-date knowledge of industry trends and technologies</li>
</ul>
<p>&nbsp;</p>
<p><strong>Thank you for your interest in applying for this position with TCS. All applicants who meet the requirements will be considered equally and fairly for employment. We will review your application and will get back to you if we are considering your interest in this opportunity.</strong></p>',
    'platform' => 'Linkedin',
    'apply_at' => '2024-01-05 17:00:00',
    'status' => 'Failed',
    'link' => 'https://www.tcs.com/',
    'created_at' => '2024-01-11 19:03:32',
    'updated_at' => '2024-02-18 07:32:10',
  ),
  4 => 
  array (
    'id' => 5,
    'user_id' => 2,
    'company' => 'PT Indofood CBP Sukses Makmur Tbk',
    'role' => 'Programmer',
    'description' => '<h2 class="text-heading-large
                mb4">About the job</h2>
<p><strong>Persyaratan Pekerjaan<br><br></strong></p>
<ul>
<li>Pendidikan S1 Teknik Informatika</li>
<li>Lebih disukai yang berpengalaman minimal 4 tahun sebagai ASP Programmer/ Android Programmer</li>
<li>Lebih disukai yang memiliki pengalaman terkait MVC technology, REST API technology, dan menggunakan reporting tools, seperti Dev Express/Telerik</li>
<li>Memiliki pengalaman terkait PHP</li>
<li>Kreatif dan memiliki antusiasme untuk mengembangkan keahlian diri</li>
<li>Tersedia beberapa posisi lowong<br><br></li>
</ul>
<p><strong>Deskripsi Pekerjaan<br><br></strong>Sebagai ASP.Net Web Developer, bertanggung jawab dalam merancang, mengembangkan, dan melakukan uji coba pada software, dengan berdasar pada kebutuhan dan rancangan proses bisnis perusahaan.</p>',
    'platform' => 'Linkedin',
    'apply_at' => '2024-01-05 17:00:00',
    'status' => 'Failed',
    'link' => '-',
    'created_at' => '2024-01-11 19:04:48',
    'updated_at' => '2024-02-18 07:32:45',
  ),
  5 => 
  array (
    'id' => 6,
    'user_id' => 2,
    'company' => 'ITOMMEY Group',
    'role' => 'PHP Developer',
    'description' => '<h2 class="text-heading-large
                ">About the job</h2>
<p><strong>Responsibilities<br><br></strong></p>
<ul>
<li>Writing back-end code and building efficient PHP modules.</li>
<li>Developing back-end portals with an optimized database.</li>
<li>Troubleshooting application and code issues.</li>
<li>Integrating data storage solutions.</li>
<li>Responding to integration requests from front-end developers.</li>
<li>Finalizing back-end features and testing web applications.</li>
<li>Updating and altering application features to enhance performance<br><br></li>
</ul>
<p><strong>Requirements<br></strong></p>
<ul>
<li>Bachelor&rsquo;s degree in computer science or a similar field.</li>
<li>Has Experience of PHP web frameworks including Laravel, and Codeigniter.</li>
<li>Knowledge of front-end technologies including CSS3, JavaScript, and HTML5.</li>
<li>Understanding of object-oriented PHP programming and Vue.</li>
<li>Previous experience creating scalable applications.</li>
<li>Proficient with code versioning tools including Git</li>
<li>Familiarity with SQL/NoSQL databases.</li>
<li>Ability to project manage.</li>
<li>Good problem-solving skills.</li>
</ul>',
    'platform' => 'Linkedin',
    'apply_at' => '2024-01-05 17:00:00',
    'status' => 'Failed',
    'link' => 'https://dealls.com/loker/php-developer-1~itommey-group',
    'created_at' => '2024-01-11 19:05:57',
    'updated_at' => '2024-02-18 07:32:55',
  ),
  6 => 
  array (
    'id' => 7,
    'user_id' => 2,
    'company' => 'ONE Indonesia',
    'role' => 'Backend Developer',
    'description' => '<article class="jobs-description__container
          jobs-description__container--condensed">
<div class="jobs-description__content jobs-description-content
            jobs-description__content--condensed">
<div id="job-details" class="jobs-box__html-content jobs-description-content__text t-14 t-normal
              jobs-description-content__text--stretch" tabindex="-1">
<h2 class="text-heading-large
                mb4">About the job</h2>
<p><strong>Role Description</strong></p>
<p>This is a full-time on-site role for a Back End Developer located in Jakarta, Indonesia (for client : Banking Industry). The Back End Developer will be responsible for back-end web and software development including object-oriented programming (OOP) and programming. The Back End Developer will also work with front-end developers to ensure system functionality.</p>
<p>&nbsp;</p>
<p><strong>Qualifications</strong></p>
<ul>
<li>Freshgraduate are welcome</li>
<li>Back-End Web Development and Software Development skills</li>
<li>Object-Oriented Programming (OOP) skills</li>
<li>Experience in working with front-end developers</li>
<li>Strong problem-solving and analytical skills</li>
<li>Proficiency in programming languages such as Java, Springboot and PHP</li>
<li>Experience with databases such as MySQL, Oracle, and SQL Server</li>
<li>Bachelor\'s or Master\'s degree in Computer Science, Software Engineering, or related field</li>
<li>Excellent written and oral communication skills</li>
</ul>
</div>
<div class="jobs-description__details">&nbsp;</div>
</div>
</article>
<footer></footer>',
    'platform' => 'Linkedin',
    'apply_at' => '2024-01-11 17:00:00',
    'status' => 'Failed',
    'link' => 'https://oneindonesia.id/',
    'created_at' => '2024-01-11 20:10:29',
    'updated_at' => '2024-02-18 07:33:05',
  ),
  7 => 
  array (
    'id' => 8,
    'user_id' => 2,
    'company' => 'PT. Equityworld Cyber 2 Tower',
    'role' => 'Administration',
    'description' => '<p>-</p>',
    'platform' => 'Linkedin',
    'apply_at' => '2024-01-11 17:00:00',
    'status' => 'Interview User',
    'link' => 'https://www.equityworld-futures.com',
    'created_at' => '2024-01-11 20:19:53',
    'updated_at' => '2024-01-15 00:25:23',
  ),
  8 => 
  array (
    'id' => 9,
    'user_id' => 2,
    'company' => 'Uninet Media Sakti',
    'role' => 'Backend Developer',
    'description' => '<h2 class="text-heading-large
                mb4">About the job</h2>
<p><strong>Qualifications</strong></p>
<ul>
<li>Experienced as BackEnd Programmer min. 2 years</li>
<li>Javascript (Vanilla JS), PHP (PHP Framework Lumen) and NodeJS proficiency</li>
<li>Experienced with MySQL/PostgreSQL/MSSQL (Stored Procedure) and RestAPI</li>
<li>Understanding Microservice architecture concept &amp; OOP concept into programming</li>
<li>Familiar with VCS Tool with Git</li>
<li>Strong analytical thinking &amp; problem solving skills</li>
</ul>
<p>&nbsp;</p>
<p><strong>Placement:</strong> Warung Buncit, South Jakarta</p>',
    'platform' => 'Linkedin',
    'apply_at' => '2024-01-11 17:00:00',
    'status' => 'Failed',
    'link' => 'https://uninet.net.id',
    'created_at' => '2024-01-11 20:24:45',
    'updated_at' => '2024-02-18 07:33:36',
  ),
  9 => 
  array (
    'id' => 10,
    'user_id' => 2,
    'company' => 'PT. Entrepreneur Trust Digital',
    'role' => 'Laravel CI+ Python',
    'description' => '<p>PT. Entrepreneur Trust Digital provide clients with our professional team which are adapt with all the latest technologies. Our services in IT Outsourcing are an efficient way to deliver IT solutions to any business to boost business performance.</p>
<p>&nbsp;</p>
<p>We are looking for talented individuals for Back End Developer, PHP(Laravel, CI) + Python Developer.</p>
<p>&nbsp;</p>
<p>Requirements :</p>
<p>2 years Programming Language (PHP), PHP Development Framework (laravel, codeigniter),</p>
<p>1 years Python</p>
<p>Responsibility:</p>
<ul>
<li>Conducting analysis of website and application requirements</li>
<li>Doing development on backend services or API</li>
<li>Build applications for both web and mobile backend services</li>
<li>Writing back-end code and building efficient PHP modules.</li>
<li>Developing back-end portals with an optimized database</li>
<li>Troubleshooting application and code issues.</li>
<li>Integrating data storage solutions</li>
<li>Building reusable code for future use</li>
<li>Optimizing web pages for maximum speed and scalability</li>
</ul>',
    'platform' => 'Linkedin',
    'apply_at' => '2024-01-11 17:00:00',
    'status' => 'Failed',
    'link' => 'https://www.entrustdigital.co.id',
    'created_at' => '2024-01-12 09:09:24',
    'updated_at' => '2024-02-18 07:33:31',
  ),
  10 => 
  array (
    'id' => 11,
    'user_id' => 2,
    'company' => 'Seiso',
    'role' => 'Web Developer',
    'description' => '<h2 class="text-heading-large
                mb4">About the job</h2>
<p><strong>Company Description<br></strong></p>
<p>Seiso is an IT service provider that focuses on delivering the best solutions for growing businesses. Our mission is to shine by providing the best services and experience for our clients. As a digital architect, we help businesses improve their processes to enhance customer experience, increase profitability, and improve competitiveness. We combine business, IT, and design backgrounds to provide consultancy services.</p>
<p><strong>Role Description<br></strong></p>
<p>This is an on-site internship role for a Web Developer. The Web Developer will be responsible for front-end and back-end web development, programming, and web design. The Web Developer will be working with a team of developers and designers to build and improve websites and web applications.</p>
<p><strong>Qualifications<br></strong></p>
<ul>
<li>Back-End Web Development and Programming skills</li>
<li>Front-End Development and Web Design skills</li>
<li>Experience in Web Development</li>
<li>Knowledge of web development frameworks and libraries</li>
<li>Excellent problem-solving skills</li>
<li>Ability to work in a team environment</li>
<li>Bachelor\'s degree in Computer Science or related field</li>
<li>Experience with Agile development methodologies is a plus</li>
</ul>',
    'platform' => 'Linkedin',
    'apply_at' => '2024-01-11 17:00:00',
    'status' => 'Failed',
    'link' => 'https://seiso.id',
    'created_at' => '2024-01-12 09:12:14',
    'updated_at' => '2024-01-16 16:51:58',
  ),
  11 => 
  array (
    'id' => 12,
    'user_id' => 2,
    'company' => 'Talent Disruptors',
    'role' => 'Web Developer',
    'description' => '<article class="jobs-description__container
          jobs-description__container--condensed">
<div class="jobs-description__content jobs-description-content
            jobs-description__content--condensed">
<div id="job-details" class="jobs-box__html-content jobs-description-content__text t-14 t-normal
              jobs-description-content__text--stretch" tabindex="-1" data-artdeco-is-focused="true"><strong>About Us:<br></strong>Talent Disruptors is a dynamic and forward-thinking company dedicated to revolutionizing the talent acquisition landscape. Our team is committed to pushing boundaries and leveraging cutting-edge technology to redefine how organizations attract, assess, and engage top-tier talent.<br><br><strong>Role Overview:<br></strong>We are seeking a skilled and motivated Web Developer to join our innovative tech team. As a Web Developer at Talent Disruptors, you will play a pivotal role in designing, developing, and maintaining our web applications to enhance user experience and support our business objectives.<br><br><strong>Responsibilities:<br></strong>
<ul>
<li>Collaboration: Work closely with cross-functional teams to gather and comprehend project requirements effectively.</li>
<li>Design and Implementation: Conceptualize, design, and implement responsive, efficient, and scalable web solutions.</li>
<li>Full-Stack Development: Develop and maintain both front-end and back-end functionality for web applications.</li>
<li>UI/UX Technical Feasibility: Ensure the technical feasibility of UI/UX designs, translating creative concepts into practical solutions.</li>
<li>Optimization: Optimize applications for maximum speed and scalability, enhancing overall performance.</li>
<li>Integration: Collaborate seamlessly with other developers to integrate user-facing elements with server-side logic, ensuring a cohesive user experience.</li>
<li>Troubleshooting: Identify, troubleshoot, debug, and resolve software defects and issues, maintaining the integrity of our web applications.</li>
<li>Continuous Learning: Stay up-to-date with emerging web technologies and industry trends, incorporating relevant advancements into our development processes. <br><br></li>
</ul>
<strong>Qualifications:<br></strong>
<ul>
<li>Education: Bachelor\'s degree in Computer Science, Software Engineering, or a related field.</li>
<li>Experience: Proven track record as a Web Developer with a robust portfolio showcasing diverse web development projects.</li>
<li>Technical Proficiency: Strong command of HTML5, CSS3, JavaScript, and related frameworks/libraries.</li>
<li>Front-End Expertise: Experience with front-end frameworks such as React, Angular, or Vue.js.</li>
<li>Back-End Skills: Solid understanding of server-side languages, including proficiency in either Node.js or Python.</li>
<li>Database Knowledge: Familiarity with database systems, including MySQL and MongoDB.</li>
<li>Security Acumen: Knowledge of web security best practices.</li>
<li>Problem-Solving: Strong problem-solving skills coupled with meticulous attention to detail.</li>
<li>Communication Skills: Excellent communication and collaboration abilities, both verbal and written.</li>
<li>Adaptability: Ability to thrive in a fast-paced, collaborative environment where adaptability is key to success. <br><br></li>
</ul>
<strong>Benefits:<br></strong>As a remote-first position with our US-based company, we\'re committed to offering a comprehensive benefits package that supports both your professional and personal well-being. Here\'s what you can expect:<br>
<ul>
<li>Competitive Pay: Your salary will be reflective of your experience, ensuring fair and rewarding compensation.</li>
<li>Unlimited Paid Time Off: Enjoy the flexibility of unlimited holidays, vacation days, and sick leave to maintain a healthy work-life balance.</li>
<li>Ongoing Training &amp; Development: We invest in your growth through continuous learning and development opportunities.</li>
<li>Regular Salary Increases: As you grow with us, your salary will too, with periodic increases to recognize your contributions.</li>
<li>Performance Bonuses: Your hard work doesn\'t go unnoticed &ndash; expect bonuses for outstanding performance.</li>
<li>Growth Potential: As our company expands, so do your career opportunities, opening doors for professional advancement.</li>
<li>Remote Work Flexibility: Experience the convenience and comfort of working remotely, connecting with a dynamic team from anywhere.</li>
</ul>
</div>
</div>
</article>',
    'platform' => 'Linkedin',
    'apply_at' => '2024-01-12 17:00:00',
    'status' => 'Failed',
    'link' => 'https://www.talentdisruptors.com/',
    'created_at' => '2024-01-13 06:18:31',
    'updated_at' => '2024-02-18 07:34:25',
  ),
  12 => 
  array (
    'id' => 13,
    'user_id' => 2,
    'company' => 'Creativeans',
    'role' => 'Web Developer',
    'description' => '<article class="jobs-description__container
          jobs-description__container--condensed">
<div class="jobs-description__content jobs-description-content
            jobs-description__content--condensed">
<div id="job-details" class="jobs-box__html-content jobs-description-content__text t-14 t-normal
              jobs-description-content__text--stretch" tabindex="-1">
<h2 class="text-heading-large
                mb4">About the job</h2>
<p>Creativeans is an award-winning brand consultancy with offices in Singapore, Jakarta, Milan, and Vancouver. We specialize in strategic branding and design, helping clients build meaningful brands that have a positive impact on the world. Our capabilities include branding, business design, UI/UX design, packaging design, and communication design. We work with businesses across industries and geographies, using our systematic approach and unique methodologies to solve strategic and creative challenges.</p>
<p>&nbsp;</p>
<p><strong>Role </strong></p>
<p>We are looking to hire a skilled WordPress developer to design and implement attractive and functional websites for our clients. You will be responsible for both back-end and front-end development including the implementation of WordPress themes and plugins and site integration and security updates.</p>
<p>To be a successful WordPress developer, you should have in-depth knowledge of front-end programming languages, a good eye for aesthetics, and strong content management skills. Ultimately, a top-class WordPress developer can create attractive, user-friendly websites that perfectly meet the design and functionality specifications of the client.</p>
<p>&nbsp;</p>
<p><strong>Responsibilities</strong></p>
<p>Meeting with clients to discuss website design and function</p>
<p>Designing and building the website front-end</p>
<p>Creating the website architecture</p>
<p>Designing and managing the website back-end including database and server integration</p>
<p>Generating WordPress themes and plugins</p>
<p>Conducting website performance tests</p>
<p>Troubleshooting content issues</p>
<p>Conducting WordPress training with the client</p>
<p>Monitoring the performance of the live website</p>
<p>&nbsp;</p>
<p><strong>Requirements</strong></p>
<p>Bachelor&rsquo;s degree in computer science or a similar field</p>
<p>Proven work experience as a WordPress developer</p>
<p>Knowledge of front-end technologies including CSS3, JavaScript, HTML5, and jQuery</p>
<p>Knowledge of code versioning tools including Git, Mercurial, and SVN</p>
<p>Experience working with debugging tools such as Chrome Inspector and Firebug</p>
<p>Good understanding of website architecture and aesthetics</p>
<p>Ability to manage projects</p>
<p>Good communication skills</p>
</div>
</div>
</article>',
    'platform' => 'Linkedin',
    'apply_at' => '2024-01-12 17:00:00',
    'status' => 'Failed',
    'link' => 'https://www.creativeans.com',
    'created_at' => '2024-01-13 06:21:00',
    'updated_at' => '2024-02-18 07:34:16',
  ),
  13 => 
  array (
    'id' => 14,
    'user_id' => 2,
    'company' => 'Career Diversity',
    'role' => 'IT Engineer',
    'description' => '<p>-</p>',
    'platform' => 'Linkedin',
    'apply_at' => '2024-01-12 17:00:00',
    'status' => 'Failed',
    'link' => 'https://career-diversity.com/careerdiversity-en/',
    'created_at' => '2024-01-13 06:27:58',
    'updated_at' => '2024-01-16 16:53:43',
  ),
  14 => 
  array (
    'id' => 15,
    'user_id' => 2,
    'company' => 'BukuWarung',
    'role' => 'Frontend Engineer',
    'description' => '<div id="job-details" class="jobs-box__html-content jobs-description-content__text t-14 t-normal
              jobs-description-content__text--stretch" tabindex="-1" data-artdeco-is-focused="true">
<h2 class="text-heading-large
                mb4">About the job</h2>
<strong>Overview<br><br></strong>BukuWarung is SEA&rsquo;s fastest growing startup and we are building the digital infrastructure for 60 million MSMEs in Indonesia, enabling them to efficiently manage and grow their business, starting with digital bookkeeping, online storefront &amp; payments. BukuWarung&rsquo;s vision is to empower 60 million MSMEs in Indonesia to become financially aware and enable them to manage and grow their business using technology.<br><br>BukuWarung is backed by top tier VCs globally: Peter Thiel&rsquo;s Valar Ventures, Goodwater Capital, Y-Combinator, AC Ventures, Quona Capital, East Ventures, Golden Gate Ventures, Rocketship.vc, Tanglin Venture Partners and strategic angel investors from Stripe, PayPal, Plaid, Grab, Gojek, Facebook, AirBnB, Fast, Mastercard etc.<br><br>We are looking for programmers with a keen eye for design for the position of front end engineer. Front end engineers are responsible for ensuring the alignment of web design and user experience requirements, optimizing web pages for maximum efficiency, and maintaining brand consistency across all web pages, among other duties.Front end engineers are required to work in teams alongside back end developers, graphic designers, and user experience designers to ensure all elements of web creation are consistent. This requires excellent communication and interpersonal skills.<br><br>Responsibilities:<br><br>
<ul>
<li>Determining the structure and design of web pages</li>
<li>Ensuring user experience determines design choices</li>
<li>Developing features to enhance the user experience</li>
<li>Striking a balance between functional and aesthetic design</li>
<li>Ensuring web design is optimized for smartphones</li>
<li>Building reusable code for future use</li>
<li>Optimizing web pages for maximum speed and scalability</li>
<li>Utilizing a variety of markup languages to write web pages</li>
<li>Maintaining brand consistency throughout the design<br><br><br></li>
</ul>
Requirements:<br><br>
<ul>
<li>Degree in computer science or related field with 1-3 years of experience</li>
<li>Understanding of key design principles</li>
<li>Proficiency in HTML, CSS, JavaScript, and jQuery</li>
<li>Working knowledge of ReactJs, Next JS frameworks</li>
<li>Experience with graphic design applications such as Adobe Illustrator</li>
<li>Experience with responsive and adaptive design</li>
<li>Understanding of SEO principles</li>
<li>Good problem-solving skills</li>
<li>Excellent verbal communication skills</li>
<li>Good interpersonal skills</li>
</ul>
If this sounds like you, please apply!</div>',
    'platform' => 'Linkedin',
    'apply_at' => '2024-01-13 17:00:00',
    'status' => 'Failed',
    'link' => 'https://bukuwarung.com',
    'created_at' => '2024-01-14 04:56:09',
    'updated_at' => '2024-01-18 01:21:50',
  ),
  15 => 
  array (
    'id' => 16,
    'user_id' => 2,
    'company' => 'PT. Sahabat Mikro Fintek',
    'role' => 'Frontend Developer',
    'description' => '<div class="jobs-box--fadein jobs-box--full-width jobs-box--with-cta-large jobs-description
        
        
        
         jobs-description--reformatted
        
        ">
<article class="jobs-description__container
          m4">
<div class="jobs-description__content jobs-description-content
            ">
<div id="job-details" class="jobs-box__html-content jobs-description-content__text t-14 t-normal
              jobs-description-content__text--stretch" tabindex="-1" data-artdeco-is-focused="true">
<h2 class="text-heading-large
                mb4">About the job</h2>
<p><strong>Primary Job Role :</strong></p>
<p>As an IT Front End Staff, you will be responsible for designing and developing the user interface of our digital products. You will work closely with the IT team to ensure that our products are visually appealing, easy to use, and accessible across various platforms.</p>
<p>&nbsp;</p>
<p><strong>Job Qualifications :</strong></p>
<ul>
<li>Bachelor\'s degree in Computer Science or a related field.</li>
<li>Strong knowledge of front-end programming language JavaScript.</li>
<li>Experience with front-end development frameworks such as Vue.js</li>
<li>Knowledge of web design principles and user interface design.</li>
<li>Familiarity with accessibility standards and guidelines.</li>
<li>Strong problem-solving and troubleshooting skills.</li>
</ul>
<p>&nbsp;</p>
<p><strong>Job Description :</strong></p>
<ul>
<li>Collaborate with designers and IT team members to create and maintain the user interface of our digital products, including web and mobile applications.</li>
<li>Use front-end programming language JavaScript to develop user-friendly interfaces.</li>
<li>Develop and maintain coding standards and guidelines for user interface development.</li>
<li>Conduct user research to understand user behavior and preferences to inform interface design decisions.</li>
<li>Ensure that the user interface is accessible to all users, including those with disabilities.</li>
<li>Troubleshoot and debug issues with the user interface as needed.</li>
</ul>
</div>
<div class="jobs-description__details">&nbsp;</div>
</div>
</article>
</div>',
    'platform' => 'Linkedin',
    'apply_at' => '2024-01-13 17:00:00',
    'status' => 'Failed',
    'link' => 'https://www.samir.co.id',
    'created_at' => '2024-01-14 05:14:11',
    'updated_at' => '2024-01-20 05:54:36',
  ),
  16 => 
  array (
    'id' => 17,
    'user_id' => 2,
    'company' => 'PT Prodia Widyahusada Tbk',
    'role' => 'IT System',
    'description' => '<div class="jobs-box--fadein jobs-box--full-width jobs-box--with-cta-large jobs-description
        
        
        
         jobs-description--reformatted
        
        ">
<article class="jobs-description__container
          m4">
<div class="jobs-description__content jobs-description-content
            ">
<div id="job-details" class="jobs-box__html-content jobs-description-content__text t-14 t-normal
              jobs-description-content__text--stretch" tabindex="-1" data-artdeco-is-focused="true">
<h2 class="text-heading-large
                mb4">About the job</h2>
<p><strong>Responsibilities</strong></p>
<ul>
<li>Implement technology security solutions to improve security controls.</li>
<li>Maintain system &amp; endpoint security assets (eg. Server, Client, Antivirus, MDM, Encryption, Patching, Hardening and etc).</li>
<li>Solve the technical problems related to system &amp; endpoint security.</li>
<li>Protect information assets and appropriate security log information.</li>
<li>Report this job advert.</li>
</ul>
<p>&nbsp;</p>
<p><strong>Qualifications</strong></p>
<ul>
<li>Bachelor\'s Degree in Information Engineering / Computer Engineering / Information System, min GPA 3.00</li>
<li>Have min 1-2 years experience as endpoint security.</li>
<li>Have experience securing applications &amp; ticketing problem for IT Security</li>
<li>Strong network security basic.</li>
<li>Knowledge of using and applying vulnerability assessment tools, such as UEM, MDM, Malware Analyst.</li>
</ul>
</div>
</div>
</article>
</div>',
    'platform' => 'Linkedin',
    'apply_at' => '2024-01-13 17:00:00',
    'status' => 'Failed',
    'link' => 'https://prodia.co.id',
    'created_at' => '2024-01-14 05:24:50',
    'updated_at' => '2024-02-18 07:34:32',
  ),
  17 => 
  array (
    'id' => 18,
    'user_id' => 2,
    'company' => 'Merkle Innovation',
    'role' => 'Backend Developer',
    'description' => '<div class="jobs-box--fadein jobs-box--full-width jobs-box--with-cta-large jobs-description
        
        
        
         jobs-description--reformatted
        
        ">
<article class="jobs-description__container
          m4">
<div class="jobs-description__content jobs-description-content
            ">
<div id="job-details" class="jobs-box__html-content jobs-description-content__text t-14 t-normal
              jobs-description-content__text--stretch" tabindex="-1" data-artdeco-is-focused="true">
<h2 class="text-heading-large
                mb4">About the job</h2>
<p><strong>Back-end Developer Responsibilities:</strong></p>
<ul>
<li>Compile and analyze data, processes, and codes to troubleshoot problems and identify areas for improvement.</li>
<li>Collaborating with the front-end developers and other team members to establish objectives and design more functional, cohesive codes to enhance the user experience.</li>
<li>Developing ideas for new programs, products, or features by monitoring industry developments and trends.</li>
<li>Recording data and reporting it to proper parties</li>
</ul>
<p><strong>Back-end Developer Requirements:</strong></p>
<ul>
<li>More education or experience may be required.</li>
<li>Fluency or understanding of specific languages, such as Laravel, Node.js and operating systems may be required.</li>
<li>Strong understanding of the web development cycle and programming techniques and tools.</li>
<li>Excellent project and time management skills.</li>
<li>Strong problem solving and verbal and written communication skills.</li>
<li>Ability to work independently or with a group.</li>
<li>Willingness to sit at desk for extended periods.</li>
</ul>
</div>
</div>
</article>
</div>',
    'platform' => 'Linkedin',
    'apply_at' => '2024-01-14 17:00:00',
    'status' => 'Failed',
    'link' => 'https://merkleinnovation.com',
    'created_at' => '2024-01-15 00:27:07',
    'updated_at' => '2024-01-18 01:20:50',
  ),
  18 => 
  array (
    'id' => 19,
    'user_id' => 2,
    'company' => 'PT Imaji Nusantara Karisma',
    'role' => 'Backend Developer',
    'description' => '<div class="jobs-box--fadein jobs-box--full-width jobs-box--with-cta-large jobs-description
        
        
        
         jobs-description--reformatted
        
        ">
<article class="jobs-description__container
          m4">
<div class="jobs-description__content jobs-description-content
            ">
<div id="job-details" class="jobs-box__html-content jobs-description-content__text t-14 t-normal
              jobs-description-content__text--stretch" tabindex="-1" data-artdeco-is-focused="true">
<h2 class="text-heading-large
                mb4">About the job</h2>
<ul>
<li>Pengalaman minimal 1 tahun dengan portofolio</li>
<li>Menguasai backend development dengan LARAVEL dan PHP</li>
<li>Menguasai CRUD dan query database dengan mySQL</li>
<li>Mengerti dan menguasai pembuatan system API</li>
<li>Mengerti cara setup dan managing linux backend server</li>
<li>Mengerti integrasi API google login dan play games</li>
</ul>
<p>Silahkan kirimkan CV dan Portofolio ke email : HRD@Imajidigistudio.com</p>
</div>
</div>
</article>
</div>',
    'platform' => 'Linkedin',
    'apply_at' => '2024-01-14 17:00:00',
    'status' => 'Failed',
    'link' => 'https://www.imajidigistudio.com',
    'created_at' => '2024-01-15 00:33:00',
    'updated_at' => '2024-02-18 07:34:40',
  ),
  19 => 
  array (
    'id' => 20,
    'user_id' => 2,
    'company' => 'PT Siaga Abdi Utama',
    'role' => 'Web Developer',
    'description' => '<div id="job-details" class="jobs-box__html-content jobs-description-content__text t-14 t-normal
              jobs-description-content__text--stretch" tabindex="-1" data-artdeco-is-focused="true">
<h2 class="text-heading-large
                mb4">About the job</h2>
<p>At SAU, we believe that extraordinary people deserve extraordinary opportunities, and we\'re excited to take you on a journey that you won\'t forget for the rest of your life. A job opening that promises not just a job but a fulfilling career.</p>
<p>We&rsquo;re #hiring for<strong> Fullstack Web Developer </strong>for <strong>Clients</strong>! Know anyone who might be interested?</p>
<p><strong>Responsibilities</strong></p>
<ul>
<li>Develop and maintain robust, scalable, and high-performance web applications using <strong>PHP</strong> and the <strong>CodeIgniter </strong>framework.</li>
<li>Perform database administration tasks, including design, optimization, and troubleshooting, with a focus on <strong>MySQL</strong>.</li>
<li>Utilize <strong>Golang </strong>for specific back-end development tasks and integrations.</li>
<li>Manage <strong>Linux </strong>servers, ensuring optimal performance, security, and reliability.</li>
<li>Collaborate with cross-functional teams, including designers and other developers, to deliver high-quality software solutions.</li>
<li>Contribute to the full software development lifecycle, from requirements gathering to deployment and maintenance</li>
<li>Stay updated on industry best practices and emerging technologies to enhance the development process.</li>
</ul>
<p><strong>Qualifications</strong></p>
<ul>
<li>Bachelor\'s degree in <strong>Computer Science, Information Technology,</strong> or a related field (or equivalent work experience).</li>
<li><strong>Minimum of 2 years of professional experience </strong>in <strong>web development </strong>with a focus on <strong>PHP </strong>and <strong>CodeIgniter</strong>.</li>
<li>Proficiency in <strong>JavaScript </strong>and experience with <strong>modern frameworks (React, Angular, or Vue). </strong></li>
<li>Expertise in database administration using <strong>MySQL </strong>or <strong>MongoDB </strong></li>
<li>Experience managing <strong>Linux </strong>servers in a production environment.</li>
<li>Strong problem-solving skills and the ability to work effectively in a collaborative team environment.</li>
<li>Proficiency in <strong>Golang </strong>for back-end development tasks.</li>
<li>Familiarity with modern <strong>JavaScript </strong>frameworks (<strong>React</strong>, <strong>Angular</strong>, or <strong>Vue)</strong>.</li>
<li>Motivated and able to thrive in a challenging, target-driven environment.</li>
<li>Excellent communication skills and the ability to articulate technical concepts to non-technical stakeholders</li>
</ul>
<p>Preferred Skills:</p>
<ul>
<li>Familiarity with <strong>front-end technologies</strong> such as<strong> HTML, CSS, and JavaScript.</strong></li>
<li>Knowledge of <strong>Redis </strong>for caching and optimization.</li>
<li>Experience with <strong>NoSQL </strong>databases, such as <strong>Elasticsearch</strong>, for efficient data retrieval and storage.</li>
<li>Knowledge of <strong>version control systems</strong>, preferably <strong>Git</strong>.</li>
<li>Understanding of web security best practices.</li>
</ul>
</div>',
    'platform' => 'Linkedin',
    'apply_at' => '2024-01-14 17:00:00',
    'status' => 'Failed',
    'link' => 'https://sauwork.co.id',
    'created_at' => '2024-01-15 00:35:07',
    'updated_at' => '2024-02-18 07:34:48',
  ),
  20 => 
  array (
    'id' => 21,
    'user_id' => 2,
    'company' => 'WINGS Group (PT Prakarsa Alam Segar) | Reschedule',
    'role' => 'IT Programmer Internship',
    'description' => '<p>-</p>',
    'platform' => 'Linkedin',
    'apply_at' => '2024-01-14 17:00:00',
    'status' => 'Interview HRD',
    'link' => '-',
    'created_at' => '2024-01-15 02:05:49',
    'updated_at' => '2024-01-16 16:50:18',
  ),
  21 => 
  array (
    'id' => 22,
    'user_id' => 2,
    'company' => 'PT Sindo Utama Jaya',
    'role' => 'Staff Admin',
    'description' => '<p>-</p>',
    'platform' => 'Instagram',
    'apply_at' => '2024-01-15 17:00:00',
    'status' => 'Failed',
    'link' => 'https://sindoutama.com',
    'created_at' => '2024-01-16 17:04:10',
    'updated_at' => '2024-02-18 07:35:39',
  ),
  22 => 
  array (
    'id' => 23,
    'user_id' => 2,
    'company' => 'Asian Technology Solutions',
    'role' => 'PHP Developer',
    'description' => '<div id="job-details" class="jobs-box__html-content jobs-description-content__text t-14 t-normal
              jobs-description-content__text--stretch" tabindex="-1" data-artdeco-is-focused="true">
<p>React JS &amp; PHP (Laravel)</p>
<p>Programming language</p>
<p>- NodeJS.</p>
<p>- PHP (Laravel).</p>
<p><strong>Databases</strong></p>
<p>- MySQL.</p>
<p>- SQL Server (Store Procedure).</p>
<p><strong>Experience</strong></p>
<p>- Have participated in a project with a team for at least 3 years (not a thesis internship or other type of internship)</p>
<p>- Have developed Web Applications with Node JS and PHP (Laravel) to Go Live and be used by users.</p>
<p>- Have used Store Procedure SQL in developed applications.</p>
<p>- Familiar with using GIT Repository and API.</p>
<p>- Preferably if cdd have used .Net / C#.</p>
</div>',
    'platform' => 'Linkedin',
    'apply_at' => '2024-01-19 17:00:00',
    'status' => 'Failed',
    'link' => 'https://www.asian-technology.com',
    'created_at' => '2024-01-20 06:03:06',
    'updated_at' => '2024-02-18 07:36:15',
  ),
  23 => 
  array (
    'id' => 24,
    'user_id' => 2,
    'company' => 'PT. HGT Services Indonesia',
    'role' => 'Magang IT Engineer',
    'description' => '<div class="JobDescriptionsc__TitleContainer-sc-22zrgx-1 hiYwUK">
<h2 class="JobDescriptionsc__Title-sc-22zrgx-0 hmPryy">Deskripsi pekerjaan Magang IT Engineer PT. HGT Services Indonesia</h2>
</div>
<div class="JobDescriptionsc__DescriptionContainer-sc-22zrgx-2 jCwTA-d">
<div class="DraftEditorContainersc__DraftEditorContainer-sc-me9dkr-0 hFcHCK">
<div class="DraftEditor-root">
<div class="DraftEditor-editorContainer">
<div class="public-DraftEditor-content" contenteditable="false" spellcheck="false">
<div data-contents="true">
<div class="" data-block="true" data-editor="7g46u" data-offset-key="499tq-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="499tq-0-0"><span data-offset-key="499tq-0-0"><span data-text="true">Persyaratan :</span></span></div>
</div>
<div class="" data-block="true" data-editor="7g46u" data-offset-key="1nv6q-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="1nv6q-0-0"><span data-offset-key="1nv6q-0-0"><span data-text="true">1. Minimal SMK jurusan TKJ (Teknik Komputer Jaringan)</span></span></div>
</div>
<div class="" data-block="true" data-editor="7g46u" data-offset-key="bft19-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="bft19-0-0"><span data-offset-key="bft19-0-0"><span data-text="true">2. Bersedia bekerja penuh waktu / Full time</span></span></div>
</div>
<div class="" data-block="true" data-editor="7g46u" data-offset-key="6vsm7-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="6vsm7-0-0"><span data-offset-key="6vsm7-0-0"><span data-text="true">3. Memahami dasar-dasar Hardware &amp; Network</span></span></div>
</div>
<div class="" data-block="true" data-editor="7g46u" data-offset-key="cq4s4-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="cq4s4-0-0"><span data-offset-key="cq4s4-0-0"><span data-text="true">4. Domisili di Jakarta Barat &amp; sekitarnya</span></span></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-22 17:00:00',
    'status' => 'Failed',
    'link' => 'https://www.hgt-services.com',
    'created_at' => '2024-01-22 19:33:02',
    'updated_at' => '2024-01-25 07:19:59',
  ),
  24 => 
  array (
    'id' => 25,
    'user_id' => 2,
    'company' => 'Pt. Swadharma Duta Data',
    'role' => 'IT Programmer',
    'description' => '<div class="Opportunitysc__JobDescriptionContainer-sc-gb4ubh-6 fhGqZb" aria-label="Job Description">
<div class="JobDescriptionsc__TitleContainer-sc-22zrgx-1 hiYwUK">
<h2 class="JobDescriptionsc__Title-sc-22zrgx-0 hmPryy">Deskripsi pekerjaan IT Programmer Pt. Swadharma Duta Data</h2>
</div>
<div class="JobDescriptionsc__DescriptionContainer-sc-22zrgx-2 jCwTA-d">
<div class="DraftEditorContainersc__DraftEditorContainer-sc-me9dkr-0 hFcHCK">
<div class="DraftEditor-root">
<div class="DraftEditor-editorContainer">
<div class="public-DraftEditor-content" contenteditable="false" spellcheck="false">
<div data-contents="true">
<ol class="public-DraftStyleDefault-ol" data-offset-key="9ebs-0-0">
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="1l4ld" data-offset-key="9ebs-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="9ebs-0-0"><span data-offset-key="9ebs-0-0"><span data-text="true">Pendidikan minimal S1 Ilmu komputer/ Sistem Informasi/ Informasi teknologi</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="1l4ld" data-offset-key="9eu0p-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="9eu0p-0-0"><span data-offset-key="9eu0p-0-0"><span data-text="true">Pengalaman minimal 1 tahun di bidang yang sama</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="1l4ld" data-offset-key="d1ree-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="d1ree-0-0"><span data-offset-key="d1ree-0-0"><span data-text="true">Memahami konsep full stack programming</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="1l4ld" data-offset-key="2gc0u-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="2gc0u-0-0"><span data-offset-key="2gc0u-0-0"><span data-text="true">Memahami konsep microservices Archicecture</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="1l4ld" data-offset-key="f8k96-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="f8k96-0-0"><span data-offset-key="f8k96-0-0"><span data-text="true">Memiliki kemampuan salah satu di bawah ini a. Menguasai Bahasa Pemrograman java dengan ZK framework b. Menguasai Bahasa Pemrograman .NET Core c. Menguasai Pemrograman PWAs (Progressive Web Apps) d. Menguasai Bahasa Pemrograman PHP e. Menguasai Pemrograman aplikasi Mobile (Android IOS)</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="1l4ld" data-offset-key="6rrjn-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="6rrjn-0-0"><span data-offset-key="6rrjn-0-0"><span data-text="true">Menguasai konsep RDBMS (Relational Database Managementem)</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="1l4ld" data-offset-key="b272b-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="b272b-0-0"><span data-offset-key="b272b-0-0"><span data-text="true">Menguasai sql language</span></span></div>
</li>
</ol>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="Opportunitysc__InterviewProcessContainer-sc-gb4ubh-7 hpgMOF">
<div class="JobDescriptionsc__TitleContainer-sc-22zrgx-1 hiYwUK">
<h2 class="JobDescriptionsc__Title-sc-22zrgx-0 hmPryy">Proses Wawancara</h2>
</div>
<div class="JobDescriptionsc__DescriptionContainer-sc-22zrgx-2 jCwTA-d">
<div class="DraftEditorContainersc__DraftEditorContainer-sc-me9dkr-0 hFcHCK">
<div class="DraftEditor-root">
<div class="DraftEditor-editorContainer">
<div class="public-DraftEditor-content" contenteditable="false" spellcheck="false">
<div data-contents="true">
<ol class="public-DraftStyleDefault-ol" data-offset-key="34s3k-0-0">
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="bb85p" data-offset-key="34s3k-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="34s3k-0-0"><span data-offset-key="34s3k-0-0"><span data-text="true">Interview HR</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="bb85p" data-offset-key="bi0l6-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="bi0l6-0-0"><span data-offset-key="bi0l6-0-0"><span data-text="true">Pengerjaan tes dasar pemrograman</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="bb85p" data-offset-key="53n9-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="53n9-0-0"><span data-offset-key="53n9-0-0"><span data-text="true">Interview User</span></span></div>
</li>
</ol>
</div>
</div>
</div>
</div>
</div>
</div>
</div>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-22 17:00:00',
    'status' => 'Failed',
    'link' => 'https://www.sdd.co.id',
    'created_at' => '2024-01-22 19:36:38',
    'updated_at' => '2024-02-18 07:36:25',
  ),
  25 => 
  array (
    'id' => 26,
    'user_id' => 2,
    'company' => 'PT. Enigma Camp',
    'role' => 'IT Bootcamp',
    'description' => '<div class="" data-block="true" data-editor="2t8gk" data-offset-key="f8ede-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="f8ede-0-0"><span data-offset-key="f8ede-0-0"><span data-text="true">Sebagai penyedia IT bootcamp dan IT talent management, </span></span><span data-offset-key="f8ede-0-1"><span data-text="true">Enigma Camp</span></span><span data-offset-key="f8ede-0-2"><span data-text="true"> menawarkan program pelatihan offline gratis (Enigma Camp 1.0) yang dijalankan selama kurang lebih 8 s/d 12 minggu dengan berbagai fasilitas pelengkap yaitu, tempat tinggal yang dilengkapi AC dan Wi-Fi, laptop untuk menunjang kegiatan pembelajaran, serta makan 3 (tiga) kali sehari. </span></span></div>
</div>
<div class="" data-block="true" data-editor="2t8gk" data-offset-key="df7hd-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="df7hd-0-0"><span data-offset-key="df7hd-0-0"><span data-text="true">Kualifikasi:</span></span></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="f79cd-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="2t8gk" data-offset-key="f79cd-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="f79cd-0-0"><span data-offset-key="f79cd-0-0"><span data-text="true">Usia maksimal 30 tahun.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="2t8gk" data-offset-key="8pjth-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="8pjth-0-0"><span data-offset-key="8pjth-0-0"><span data-text="true">Memiliki minat atau pengetahuan dasar programming.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="2t8gk" data-offset-key="3ni9g-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="3ni9g-0-0"><span data-offset-key="3ni9g-0-0"><span data-text="true">Lulusan SMA/SMK sederajat</span></span></div>
</li>
</ul>
<div class="" data-block="true" data-editor="2t8gk" data-offset-key="bdl4a-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="bdl4a-0-0"><span data-offset-key="bdl4a-0-0"><span data-text="true">Benefit:</span></span></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="dgaqh-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="2t8gk" data-offset-key="dgaqh-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="dgaqh-0-0"><span data-offset-key="dgaqh-0-0"><span data-text="true">Kesempatan bekerja bersama </span></span><span data-offset-key="dgaqh-0-1"><span data-text="true">hiring partners</span></span><span data-offset-key="dgaqh-0-2"><span data-text="true"> multinasional.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="2t8gk" data-offset-key="a1blk-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="a1blk-0-0"><span data-offset-key="a1blk-0-0"><span data-text="true">Gaji minimal UMP Jakarta.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="2t8gk" data-offset-key="chmld-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="chmld-0-0"><span data-offset-key="chmld-0-0"><span data-text="true">Sesi </span></span><span data-offset-key="chmld-0-1"><span data-text="true">Coaching, Monitoring</span></span><span data-offset-key="chmld-0-2"><span data-text="true">, dan </span></span><span data-offset-key="chmld-0-3"><span data-text="true">Mentoring</span></span><span data-offset-key="chmld-0-4"><span data-text="true"> selama bekerja.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="2t8gk" data-offset-key="67trq-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="67trq-0-0"><span data-offset-key="67trq-0-0"><span data-text="true">BPJS Kesehatan &amp; Ketenagakerjaan.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="2t8gk" data-offset-key="91o7g-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="91o7g-0-0"><span data-offset-key="91o7g-0-0"><span data-text="true">Asuransi Kesehatan Swasta.</span></span></div>
</li>
</ul>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-22 17:00:00',
    'status' => 'Failed',
    'link' => 'https://enigmacamp.com',
    'created_at' => '2024-01-22 19:41:50',
    'updated_at' => '2024-01-26 04:58:36',
  ),
  26 => 
  array (
    'id' => 27,
    'user_id' => 2,
    'company' => 'Pt Vanz Inovatif Teknologi (qbit)',
    'role' => 'IT Developer Intern',
    'description' => '<div class="" data-block="true" data-editor="5m4hf" data-offset-key="3vnmm-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="3vnmm-0-0"><span data-offset-key="3vnmm-0-0"><span data-text="true">Hello young students!</span></span></div>
</div>
<div class="" data-block="true" data-editor="5m4hf" data-offset-key="9fi69-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="9fi69-0-0"><span data-offset-key="9fi69-0-0"><span data-text="true">PT Vanz Inovatif Teknologi (qbit) is currently looking for IT Developer intern!</span></span></div>
</div>
<div class="" data-block="true" data-editor="5m4hf" data-offset-key="2hej5-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="2hej5-0-0"><span data-offset-key="2hej5-0-0">&nbsp;</span></div>
</div>
<div class="" data-block="true" data-editor="5m4hf" data-offset-key="1l02p-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="1l02p-0-0"><span data-offset-key="1l02p-0-0"><span data-text="true">Job Description:</span></span></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="dfpd7-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5m4hf" data-offset-key="dfpd7-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="dfpd7-0-0"><span data-offset-key="dfpd7-0-0"><span data-text="true">Create aplication as Front end/ Back end developer</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5m4hf" data-offset-key="7pobi-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="7pobi-0-0"><span data-offset-key="7pobi-0-0"><span data-text="true">Proactively collaborate with UIUX and Product Manager</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5m4hf" data-offset-key="3hno4-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="3hno4-0-0"><span data-offset-key="3hno4-0-0"><span data-text="true">perfome bug fixing and adding features</span></span></div>
</li>
</ul>
<div class="" data-block="true" data-editor="5m4hf" data-offset-key="29kbi-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="29kbi-0-0"><span data-offset-key="29kbi-0-0">&nbsp;</span></div>
</div>
<div class="" data-block="true" data-editor="5m4hf" data-offset-key="fscp0-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="fscp0-0-0"><span data-offset-key="fscp0-0-0"><span data-text="true">Requirements:</span></span></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="acvlm-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5m4hf" data-offset-key="acvlm-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="acvlm-0-0"><span data-offset-key="acvlm-0-0"><span data-text="true">Fresh graduate and senior year students are welcome</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5m4hf" data-offset-key="5lo85-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="5lo85-0-0"><span data-offset-key="5lo85-0-0"><span data-text="true">Have Knowledge in ReactJS, NodeJS and Javascript</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5m4hf" data-offset-key="f9han-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="f9han-0-0"><span data-offset-key="f9han-0-0"><span data-text="true">Have Knowledge in NestJs, React Native is a preferable.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5m4hf" data-offset-key="b9l3a-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="b9l3a-0-0"><span data-offset-key="b9l3a-0-0"><span data-text="true">Have Knowledge in VueJs, Micro-services is a plus</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5m4hf" data-offset-key="7aqcc-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="7aqcc-0-0"><span data-offset-key="7aqcc-0-0"><span data-text="true">Passion for writing clean code with excellent readability</span></span></div>
</li>
</ul>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-22 17:00:00',
    'status' => 'Failed',
    'link' => 'https://qbit.co.id',
    'created_at' => '2024-01-22 19:44:19',
    'updated_at' => '2024-01-25 07:19:42',
  ),
  27 => 
  array (
    'id' => 28,
    'user_id' => 2,
    'company' => 'PT Beautilosophi Mahandaru Indonesia',
    'role' => 'IT Developer',
    'description' => '<div class="" data-block="true" data-editor="987tv" data-offset-key="1kkeq-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="1kkeq-0-0"><span data-offset-key="1kkeq-0-0"><span data-text="true">Requirements :</span></span></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="17n50-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="987tv" data-offset-key="17n50-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="17n50-0-0"><span data-offset-key="17n50-0-0"><span data-text="true">Programming experience and understanding of modern technologies including: (PHP, Laravel, ANDROID, LINUX, SQL Server, MongoDB)</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="987tv" data-offset-key="9f88r-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="9f88r-0-0"><span data-offset-key="9f88r-0-0"><span data-text="true">Strong grasp of software architecture, design patterns, and scalable practices.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="987tv" data-offset-key="dp5us-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="dp5us-0-0"><span data-offset-key="dp5us-0-0"><span data-text="true">Clear communication skills for both technical and non-technical audiences.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="987tv" data-offset-key="7nses-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="7nses-0-0"><span data-offset-key="7nses-0-0"><span data-text="true">Understand accurate accounting applications</span></span></div>
</li>
</ul>
<div class="" data-block="true" data-editor="987tv" data-offset-key="56i8-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="56i8-0-0"><span data-offset-key="56i8-0-0">&nbsp;</span></div>
</div>
<div class="" data-block="true" data-editor="987tv" data-offset-key="al4oj-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="al4oj-0-0"><span data-offset-key="al4oj-0-0"><span data-text="true">Responsilibities :</span></span></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="31rim-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="987tv" data-offset-key="31rim-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="31rim-0-0"><span data-offset-key="31rim-0-0"><span data-text="true">Mengembangkan sistem IT yang sudah ada</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="987tv" data-offset-key="8ij6g-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="8ij6g-0-0"><span data-offset-key="8ij6g-0-0"><span data-text="true">Memelihara proses IT yang sudah berjalan</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="987tv" data-offset-key="3qmt3-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="3qmt3-0-0"><span data-offset-key="3qmt3-0-0"><span data-text="true">Menyelesaikan troubleshooting jika terdapat masalah pada sistem IT</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="987tv" data-offset-key="1ro57-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="1ro57-0-0"><span data-offset-key="1ro57-0-0"><span data-text="true">Mengkomunikasikan sistem IT kepada manajerial dan divisi lainnya terkait kerjasama</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="987tv" data-offset-key="8025n-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="8025n-0-0"><span data-offset-key="8025n-0-0"><span data-text="true">Membuat report IT yang sedang dikerjakan</span></span></div>
</li>
</ul>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-22 17:00:00',
    'status' => 'Send CV',
    'link' => '-',
    'created_at' => '2024-01-22 19:48:19',
    'updated_at' => '2024-01-22 19:48:19',
  ),
  28 => 
  array (
    'id' => 29,
    'user_id' => 2,
    'company' => 'PT. Tabitha Indonesia',
    'role' => 'IT Programmer',
    'description' => '<div class="" data-block="true" data-editor="a98t1" data-offset-key="9r00d-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="9r00d-0-0"><span data-offset-key="9r00d-0-0"><span data-text="true">Responsibilities</span></span></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="a3uup-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="a98t1" data-offset-key="a3uup-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="a3uup-0-0"><span data-offset-key="a3uup-0-0"><span data-text="true">Bertanggung jawab atas aplikasi program yang berjalan dan jaringan</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="a98t1" data-offset-key="f1n86-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="f1n86-0-0"><span data-offset-key="f1n86-0-0"><span data-text="true">Maintenance backup database</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="a98t1" data-offset-key="el4pb-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="el4pb-0-0"><span data-offset-key="el4pb-0-0"><span data-text="true">Membuat dan mengembangkan program sesuai kebutuhan perusahaan</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="a98t1" data-offset-key="60on9-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="60on9-0-0"><span data-offset-key="60on9-0-0"><span data-text="true">Memperbaiki bug/kelemahan sistem serta memastikan server berjalan normal</span></span></div>
</li>
</ul>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-24 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://tabitha.com',
    'created_at' => '2024-01-25 07:26:07',
    'updated_at' => '2024-01-25 07:26:07',
  ),
  29 => 
  array (
    'id' => 30,
    'user_id' => 2,
    'company' => 'PT Mitra Utama Madani',
    'role' => 'Programmer',
    'description' => '<div class="" data-block="true" data-editor="1ndo4" data-offset-key="6alp2-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="6alp2-0-0"><strong><span data-offset-key="6alp2-0-0"><span data-text="true">Kualifikasi :</span></span></strong></div>
</div>
<div class="" data-block="true" data-editor="1ndo4" data-offset-key="g5ef-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="g5ef-0-0"><span data-offset-key="g5ef-0-0"><span data-text="true">- Pria/ Wanita Usia maksimal 30 tahun</span></span></div>
</div>
<div class="" data-block="true" data-editor="1ndo4" data-offset-key="5he58-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="5he58-0-0"><span data-offset-key="5he58-0-0"><span data-text="true">- Pendidikan terakhir S1</span></span></div>
</div>
<div class="" data-block="true" data-editor="1ndo4" data-offset-key="ea1n7-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="ea1n7-0-0"><span data-offset-key="ea1n7-0-0"><span data-text="true">- Memiliki pengalaman dibidang IT Programmer</span></span></div>
</div>
<div class="" data-block="true" data-editor="1ndo4" data-offset-key="89tao-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="89tao-0-0"><span data-offset-key="89tao-0-0"><span data-text="true">- Memiliki pengetahuan yang baik dalam berbagai perangkat lunak, perangkat keras, sistem keamanan, jaringan, layanan TI</span></span></div>
</div>
<div class="" data-block="true" data-editor="1ndo4" data-offset-key="b709l-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="b709l-0-0"><span data-offset-key="b709l-0-0"><span data-text="true">- Memiliki pengetahuan yang baik tentang server, sistem operasi, SQL, Database Postgres, direktori aktif/pengontrol domain, dan tabel pivot</span></span></div>
</div>
<div class="" data-block="true" data-editor="1ndo4" data-offset-key="87i5j-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="87i5j-0-0"><span data-offset-key="87i5j-0-0"><span data-text="true">- Memiliki kemampuan yang kuat dalam pemecahan masalah dan pengalaman dukungan pelanggan</span></span></div>
</div>
<div class="" data-block="true" data-editor="1ndo4" data-offset-key="f0fs5-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="f0fs5-0-0"><span data-offset-key="f0fs5-0-0"><span data-text="true">- Kemampuan multitasking, bekerja di bawah tekanan dan memenuhi tenggat waktu yang dibutuhkan</span></span></div>
</div>
<div class="" data-block="true" data-editor="1ndo4" data-offset-key="4u01a-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="4u01a-0-0"><span data-offset-key="4u01a-0-0"><span data-text="true">- Keterampilan komunikasi yang sangat baik</span></span></div>
</div>
<div class="" data-block="true" data-editor="1ndo4" data-offset-key="8kakm-0-0">&nbsp;</div>
<div class="" data-block="true" data-editor="1ndo4" data-offset-key="9qpmf-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="9qpmf-0-0"><span data-offset-key="9qpmf-0-0">&nbsp;</span></div>
</div>
<div class="" data-block="true" data-editor="1ndo4" data-offset-key="7eue8-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="7eue8-0-0"><strong><span data-offset-key="7eue8-0-0"><span data-text="true">Jobdesk :</span></span></strong></div>
</div>
<div class="" data-block="true" data-editor="1ndo4" data-offset-key="3a4jn-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="3a4jn-0-0"><span data-offset-key="3a4jn-0-0"><span data-text="true">- Mengolah database</span></span></div>
</div>
<div class="" data-block="true" data-editor="1ndo4" data-offset-key="3mfrb-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="3mfrb-0-0"><span data-offset-key="3mfrb-0-0"><span data-text="true">- Mengelola teknologi web server</span></span></div>
</div>
<div class="" data-block="true" data-editor="1ndo4" data-offset-key="l84k-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="l84k-0-0"><span data-offset-key="l84k-0-0"><span data-text="true">- Melakukan integrasi cloud computing</span></span></div>
</div>
<div class="" data-block="true" data-editor="1ndo4" data-offset-key="3tm3e-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="3tm3e-0-0"><span data-offset-key="3tm3e-0-0"><span data-text="true">- Membangun software server side</span></span></div>
</div>
<div class="" data-block="true" data-editor="1ndo4" data-offset-key="3u9d2-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="3u9d2-0-0"><span data-offset-key="3u9d2-0-0"><span data-text="true">- Mengatur bahasa pemrograman server side.</span></span></div>
</div>
<div class="" data-block="true" data-editor="1ndo4" data-offset-key="d028d-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="d028d-0-0"><span data-offset-key="d028d-0-0"><span data-text="true">- Melakukan integrasi Application Programing Interface (API)</span></span></div>
</div>
<div class="" data-block="true" data-editor="1ndo4" data-offset-key="6qa7v-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="6qa7v-0-0"><span data-offset-key="6qa7v-0-0"><span data-text="true">- Mengelola Content Management System (CMS)</span></span></div>
</div>
<div class="" data-block="true" data-editor="1ndo4" data-offset-key="f002u-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="f002u-0-0"><span data-offset-key="f002u-0-0"><span data-text="true">- Mengembangkan Content Management System (CMS)</span></span></div>
</div>
<div class="" data-block="true" data-editor="1ndo4" data-offset-key="fl4ts-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="fl4ts-0-0"><span data-offset-key="fl4ts-0-0"><span data-text="true">- Mengatur dan menjamin keamanan web</span></span></div>
</div>
<div class="" data-block="true" data-editor="1ndo4" data-offset-key="bpa3p-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="bpa3p-0-0"><span data-offset-key="bpa3p-0-0"><span data-text="true">- Membuat laporan analisis dan statistik server</span></span></div>
</div>
<div class="" data-block="true" data-editor="1ndo4" data-offset-key="7h9k0-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="7h9k0-0-0"><span data-offset-key="7h9k0-0-0"><span data-text="true">- Menerjemahkan desain menjadi tampilan yang dapat diakses orang awam (pengguna)</span></span></div>
</div>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-24 17:00:00',
    'status' => 'Viewed',
    'link' => 'https://mum.id',
    'created_at' => '2024-01-25 07:29:19',
    'updated_at' => '2024-01-26 01:17:32',
  ),
  30 => 
  array (
    'id' => 31,
    'user_id' => 2,
    'company' => 'PT. DAYA EKA SAMUDERA JAKARTA',
    'role' => 'Programmer',
    'description' => '<div class="JobDescriptionsc__TitleContainer-sc-22zrgx-1 hiYwUK">
<h2 class="JobDescriptionsc__Title-sc-22zrgx-0 hmPryy">&nbsp;</h2>
</div>
<div class="JobDescriptionsc__DescriptionContainer-sc-22zrgx-2 jCwTA-d">
<div class="DraftEditorContainersc__DraftEditorContainer-sc-me9dkr-0 hFcHCK">
<div class="DraftEditor-root">
<div class="DraftEditor-editorContainer">
<div class="public-DraftEditor-content" contenteditable="false" spellcheck="false">
<div data-contents="true">
<div class="" data-block="true" data-editor="4ua" data-offset-key="52pnk-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="52pnk-0-0"><span data-offset-key="52pnk-0-0"><span data-text="true">Kualifikasi</span></span></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="fsn2i-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4ua" data-offset-key="fsn2i-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="fsn2i-0-0"><span data-offset-key="fsn2i-0-0"><span data-text="true">Dibutuhkan laki-laki atau perempuan</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4ua" data-offset-key="5r9od-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="5r9od-0-0"><span data-offset-key="5r9od-0-0"><span data-text="true">Maksimal usia 35 tahun</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4ua" data-offset-key="30rue-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="30rue-0-0"><span data-offset-key="30rue-0-0"><span data-text="true">Minimal pendidikan SMA/SMK jurusan Teknik Informatika</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4ua" data-offset-key="47slo-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="47slo-0-0"><span data-offset-key="47slo-0-0"><span data-text="true">Minimal pengalaman 1 tahun di bidang IT Programmer</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4ua" data-offset-key="1njbc-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="1njbc-0-0"><span data-offset-key="1njbc-0-0"><span data-text="true">Fresh Graduate welcome to apply</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4ua" data-offset-key="7ie0u-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="7ie0u-0-0"><span data-offset-key="7ie0u-0-0"><span data-text="true">Mengerti Visual Basic</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4ua" data-offset-key="3f53o-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="3f53o-0-0"><span data-offset-key="3f53o-0-0"><span data-text="true">Mengerti SQL server</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4ua" data-offset-key="bi87v-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="bi87v-0-0"><span data-offset-key="bi87v-0-0"><span data-text="true">Disiplin, cekatan, dan dapat bertanggung jawab</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4ua" data-offset-key="8nuf0-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="8nuf0-0-0"><span data-offset-key="8nuf0-0-0"><span data-text="true">Bersedia ditempatkan di Bekasi</span></span></div>
</li>
</ul>
<div class="" data-block="true" data-editor="4ua" data-offset-key="fufb7-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="fufb7-0-0"><span data-offset-key="fufb7-0-0">&nbsp;</span></div>
</div>
<div class="" data-block="true" data-editor="4ua" data-offset-key="1srs5-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="1srs5-0-0"><span data-offset-key="1srs5-0-0"><span data-text="true">Cakupan Pekerjaan:</span></span></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="dj9vd-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4ua" data-offset-key="dj9vd-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="dj9vd-0-0"><span data-offset-key="dj9vd-0-0"><span data-text="true">Membuat program menggunakan visual basic</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4ua" data-offset-key="fkvj8-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="fkvj8-0-0"><span data-offset-key="fkvj8-0-0"><span data-text="true">Bisa menggunakan SQL server</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4ua" data-offset-key="ari23-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="ari23-0-0"><span data-offset-key="ari23-0-0"><span data-text="true">Mampu menggunakan bahasa pemrograman visual basic dan SQL dengan baik</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4ua" data-offset-key="cf33n-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="cf33n-0-0"><span data-offset-key="cf33n-0-0"><span data-text="true">Memiliki pengetahuan troubleshooting software</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4ua" data-offset-key="fluv9-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="fluv9-0-0"><span data-offset-key="fluv9-0-0"><span data-text="true">Mampu menganalisa program</span></span></div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-25 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://www.desjakarta.com',
    'created_at' => '2024-01-25 19:09:05',
    'updated_at' => '2024-01-25 19:09:05',
  ),
  31 => 
  array (
    'id' => 32,
    'user_id' => 2,
    'company' => 'PT. INTISOFT MITRA SEJAHTERA',
    'role' => 'Programmer',
    'description' => '<div class="" data-block="true" data-editor="6s5pf" data-offset-key="9qtrv-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="9qtrv-0-0"><strong><span data-offset-key="9qtrv-0-0"><span data-text="true">IT PROGRAMMER/SUPPORT</span></span></strong></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="6n41l-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="6n41l-0-0"><span data-offset-key="6n41l-0-0"><span data-text="true">Kami PT Intisoft Mitra Sejahtera, sebuah perusahaan yang bergerak di bidang Banking and Finance Consultant Application berlokasi di daerah Srengseng, Kembangan. Kebon Jeruk, jakarta Barat membuka lowongan kerja posisi IT Programmer/Support dengan ketentuan sebagai berikut : </span></span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="10ra-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="10ra-0-0"><span data-offset-key="10ra-0-0">&nbsp;</span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="8meop-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="8meop-0-0"><strong><span data-offset-key="8meop-0-0"><span data-text="true">Tanggung Jawab Pekerjaan :</span></span></strong></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="82lki-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="82lki-0-0"><span data-offset-key="82lki-0-0"><span data-text="true">- Development Program </span></span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="c9v1r-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="c9v1r-0-0"><span data-offset-key="c9v1r-0-0"><span data-text="true">- Support Client/Problem Solving </span></span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="1e9i6-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="1e9i6-0-0"><span data-offset-key="1e9i6-0-0">&nbsp;</span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="8a1kg-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="8a1kg-0-0"><strong><span data-offset-key="8a1kg-0-0"><span data-text="true">Syarat Pengalaman :</span></span></strong></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="en5sa-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="en5sa-0-0"><span data-offset-key="en5sa-0-0"><span data-text="true">- Pengalaman minimal 1-3 Tahun</span></span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="1hfq6-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="1hfq6-0-0"><span data-offset-key="1hfq6-0-0"><span data-text="true">- Umur Maksimal 27 tahun</span></span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="fdbu0-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="fdbu0-0-0"><span data-offset-key="fdbu0-0-0"><span data-text="true">- Lulusan SMA/SMK Bidang IT, S1 Teknologi Informasi </span></span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="4plun-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="4plun-0-0"><span data-offset-key="4plun-0-0"><span data-text="true">- Kemampuan di software perbankan diutamakan</span></span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="61m8i-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="61m8i-0-0"><span data-offset-key="61m8i-0-0"><span data-text="true">- Fresh Graduated dipersilahkan melamar jika merasa punya&nbsp;</span></span><span data-offset-key="2p4pi-0-0"><span data-text="true">kemampuan tambahan</span></span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="f3t8v-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="f3t8v-0-0"><span data-offset-key="f3t8v-0-0">&nbsp;</span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="4ve9-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="4ve9-0-0"><strong><span data-offset-key="4ve9-0-0"><span data-text="true">Keahlian (tidak perlu menguasai semuanya) :</span></span></strong></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="5rlp5-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="5rlp5-0-0"><span data-offset-key="5rlp5-0-0"><span data-text="true">- PHP CI dan/atau Laravel</span></span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="e5o21-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="e5o21-0-0"><span data-offset-key="e5o21-0-0"><span data-text="true">- Android Studio/flutter Programmer lebih baik</span></span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="c43mq-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="c43mq-0-0"><span data-offset-key="c43mq-0-0"><span data-text="true">- Algoritma Pemrograman</span></span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="5oju2-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="5oju2-0-0"><span data-offset-key="5oju2-0-0"><span data-text="true">- Power Builder (PB) 11-12 dst</span></span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="9keca-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="9keca-0-0"><span data-offset-key="9keca-0-0"><span data-text="true">- Java (Spring) / Phyton</span></span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="19ttl-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="19ttl-0-0"><span data-offset-key="19ttl-0-0"><span data-text="true">- Database MySQL, mSQL, Oracle (menguasai salah satu)</span></span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="ffbvu-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="ffbvu-0-0"><span data-offset-key="ffbvu-0-0">&nbsp;</span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="97dpc-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="97dpc-0-0"><strong><span data-offset-key="97dpc-0-0"><span data-text="true">Kualifikasi :</span></span></strong></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="cldur-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="cldur-0-0"><span data-offset-key="cldur-0-0"><span data-text="true">- Pria/Wanita, Jujur, Team Work Attitude </span></span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="6qqe-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="6qqe-0-0"><span data-offset-key="6qqe-0-0"><span data-text="true">- Inisiatif, kreatif</span></span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="2kgbn-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="2kgbn-0-0"><span data-offset-key="2kgbn-0-0"><span data-text="true">- Semangat, punya mental yang dapat bekerja keras</span></span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="96vnb-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="96vnb-0-0"><span data-offset-key="96vnb-0-0"><span data-text="true">- Bertanggung jawab, jujur, dapat diandalkan.</span></span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="37rcv-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="37rcv-0-0"><span data-offset-key="37rcv-0-0">&nbsp;</span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="r5m7-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="r5m7-0-0"><strong><span data-offset-key="r5m7-0-0"><span data-text="true">Tunjangan :</span></span></strong></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="evsjv-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="evsjv-0-0"><span data-offset-key="evsjv-0-0"><span data-text="true">- Tunjangan Kesehatan</span></span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="2c9b1-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="2c9b1-0-0"><span data-offset-key="2c9b1-0-0"><span data-text="true">- Bonus</span></span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="d84lk-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="d84lk-0-0"><span data-offset-key="d84lk-0-0">&nbsp;</span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="2cfr-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="2cfr-0-0"><strong><span data-offset-key="2cfr-0-0"><span data-text="true">Insentif :</span></span></strong></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="2qf8d-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="2qf8d-0-0"><span data-offset-key="2qf8d-0-0"><span data-text="true">Bonus Project/Tahunan</span></span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="e51qr-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="e51qr-0-0"><span data-offset-key="e51qr-0-0">&nbsp;</span></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="91p3a-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="91p3a-0-0"><strong><span data-offset-key="91p3a-0-0"><span data-text="true">Waktu Bekerja :</span></span></strong></div>
</div>
<div class="" data-block="true" data-editor="6s5pf" data-offset-key="fli21-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="fli21-0-0"><span data-offset-key="fli21-0-0"><span data-text="true">Senin s/d Jumat, Jam 8 pagi s/d 5 sore</span></span></div>
</div>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-25 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://corsys.co.id/home',
    'created_at' => '2024-01-25 19:15:58',
    'updated_at' => '2024-01-25 19:15:58',
  ),
  32 => 
  array (
    'id' => 33,
    'user_id' => 2,
    'company' => 'MAXI Group',
    'role' => 'Programmer',
    'description' => '<div class="" data-block="true" data-editor="9ielr" data-offset-key="ej28m-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="ej28m-0-0"><strong><span data-offset-key="ej28m-0-0"><span data-text="true">Deskripsi Pekerjaan:</span></span></strong></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="bgjiq-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="9ielr" data-offset-key="bgjiq-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="bgjiq-0-0"><span data-offset-key="bgjiq-0-0"><span data-text="true">Melakukan koordinasi dengan tim ERP berkaitan dengan penugasan, penentuan prioritas, serta pembahasan teknis</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="9ielr" data-offset-key="2mbc1-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="2mbc1-0-0"><span data-offset-key="2mbc1-0-0"><span data-text="true">Merancang dan membuat sistem aplikasi komputer</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="9ielr" data-offset-key="5m881-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="5m881-0-0"><span data-offset-key="5m881-0-0"><span data-text="true">Menganalisa kebutuhan dari pengguna dan mengembangkan spesifikasi desain sistem agar sesuai kebutuhan pengguna</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="9ielr" data-offset-key="cligt-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="cligt-0-0"><span data-offset-key="cligt-0-0"><span data-text="true">Memantau kinerja sistem, troubleshooting dan debugging</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="9ielr" data-offset-key="1uhp9-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="1uhp9-0-0"><span data-offset-key="1uhp9-0-0"><span data-text="true">Melakukan back up terhadap source code sistem aplikasi komputer setiap kompilasi file terbaru</span></span></div>
</li>
</ul>
<div class="" data-block="true" data-editor="9ielr" data-offset-key="73c24-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="73c24-0-0"><strong><span data-offset-key="73c24-0-0"><span data-text="true">Kualifikasi Pekerjaan:</span></span></strong></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="elnqi-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="9ielr" data-offset-key="elnqi-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="elnqi-0-0"><span data-offset-key="elnqi-0-0"><span data-text="true">Pendidikan S1 Teknik Informatika / Sistem Informasi</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="9ielr" data-offset-key="aeltd-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="aeltd-0-0"><span data-offset-key="aeltd-0-0"><span data-text="true">Memiliki pengalaman handle ERP (Financial, Order Management, Supply Chain)</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="9ielr" data-offset-key="2po4o-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="2po4o-0-0"><span data-offset-key="2po4o-0-0"><span data-text="true">Menguasai bahasa pemrograman PHP Framework Laravel, PHP Programming</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="9ielr" data-offset-key="7fsch-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="7fsch-0-0"><span data-offset-key="7fsch-0-0"><span data-text="true">Solid dalam MySQL atau RDBMS lain seperti SQL Server, PostgreSQL.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="9ielr" data-offset-key="d99it-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="d99it-0-0"><span data-offset-key="d99it-0-0"><span data-text="true">Memiliki pengalaman dengan third party libraries, APIs</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="9ielr" data-offset-key="dc5eg-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="dc5eg-0-0"><span data-offset-key="dc5eg-0-0"><span data-text="true">Menguasai Back-End teknologi dan keunggulan dalam pemahaman HTML, CSS, Javascript adalah nilai tambah</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="9ielr" data-offset-key="682v4-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="682v4-0-0"><span data-offset-key="682v4-0-0"><span data-text="true">Memiliki pengalaman sebagai Business Analyst atau System Analyst (lebih diutamakan)</span></span></div>
</li>
</ul>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-25 17:00:00',
    'status' => 'Send CV',
    'link' => '-',
    'created_at' => '2024-01-25 19:17:50',
    'updated_at' => '2024-01-25 19:17:50',
  ),
  33 => 
  array (
    'id' => 34,
    'user_id' => 2,
    'company' => 'PT Fajar Lestari Sejati',
    'role' => 'Programmer',
    'description' => '<div class="" data-block="true" data-editor="8to8t" data-offset-key="bu3p5-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="bu3p5-0-0"><strong><span data-offset-key="bu3p5-0-0"><span data-text="true">Deskripsi Pekerjaan :</span></span></strong></div>
</div>
<div class="" data-block="true" data-editor="8to8t" data-offset-key="abkk0-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="abkk0-0-0"><span data-offset-key="abkk0-0-0"><span data-text="true">1. Melakukan perencanaan dan merancang struktur hingga tampilan program</span></span></div>
</div>
<div class="" data-block="true" data-editor="8to8t" data-offset-key="4t49-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="4t49-0-0"><span data-offset-key="4t49-0-0"><span data-text="true">2. Mengelola teknologi web server</span></span></div>
</div>
<div class="" data-block="true" data-editor="8to8t" data-offset-key="aslrv-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="aslrv-0-0"><span data-offset-key="aslrv-0-0"><span data-text="true">3. Mengelola performa sistem atau website</span></span></div>
</div>
<div class="" data-block="true" data-editor="8to8t" data-offset-key="384tu-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="384tu-0-0"><span data-offset-key="384tu-0-0"><span data-text="true">4. Memonitoring database software</span></span></div>
</div>
<div class="" data-block="true" data-editor="8to8t" data-offset-key="2l0vi-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="2l0vi-0-0"><span data-offset-key="2l0vi-0-0"><span data-text="true">5. Membuat program untuk kebutuhan perusahaan</span></span></div>
</div>
<div class="" data-block="true" data-editor="8to8t" data-offset-key="f8rd5-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="f8rd5-0-0"><span data-offset-key="f8rd5-0-0"><span data-text="true">6. Bekerjasama dengan tim IT untuk mencapai tujuan </span></span></div>
</div>
<div class="" data-block="true" data-editor="8to8t" data-offset-key="81o3a-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="81o3a-0-0"><span data-offset-key="81o3a-0-0">&nbsp;</span></div>
</div>
<div class="" data-block="true" data-editor="8to8t" data-offset-key="4gs0g-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="4gs0g-0-0"><strong><span data-offset-key="4gs0g-0-0"><span data-text="true">Kualifikasi :</span></span></strong></div>
</div>
<div class="" data-block="true" data-editor="8to8t" data-offset-key="athic-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="athic-0-0"><span data-offset-key="athic-0-0"><span data-text="true">1. Pria/Wanita</span></span></div>
</div>
<div class="" data-block="true" data-editor="8to8t" data-offset-key="b9jr0-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="b9jr0-0-0"><span data-offset-key="b9jr0-0-0"><span data-text="true">2. Maksimal Usia 30 Tahun</span></span></div>
</div>
<div class="" data-block="true" data-editor="8to8t" data-offset-key="1cfa0-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="1cfa0-0-0"><span data-offset-key="1cfa0-0-0"><span data-text="true">3. Pendidikan minimal S1 (Teknik Informatika, Sistem Informasi, Teknik Komputer)</span></span></div>
</div>
<div class="" data-block="true" data-editor="8to8t" data-offset-key="5l547-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="5l547-0-0"><span data-offset-key="5l547-0-0"><span data-text="true">4. Memiliki pengalaman sebagai programmer minimal 3 tahun</span></span></div>
</div>
<div class="" data-block="true" data-editor="8to8t" data-offset-key="ov6c-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="ov6c-0-0"><span data-offset-key="ov6c-0-0"><span data-text="true">5. Menguasai (HTML, PHP, Jquary, Android Studio, Kotlin, My SQL)</span></span></div>
</div>
<div class="" data-block="true" data-editor="8to8t" data-offset-key="di6p3-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="di6p3-0-0"><span data-offset-key="di6p3-0-0"><span data-text="true">6. Bisa bekerja secara individu maupun tim</span></span></div>
</div>
<div class="" data-block="true" data-editor="8to8t" data-offset-key="i569-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="i569-0-0"><span data-offset-key="i569-0-0"><span data-text="true">7. Memiliki kemampuan komunikasi yang baik</span></span></div>
</div>
<div class="" data-block="true" data-editor="8to8t" data-offset-key="9e33s-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="9e33s-0-0"><span data-offset-key="9e33s-0-0"><span data-text="true">8. Kemampuan untuk berpikir kreatif dalam merancang solusi perangkat lunak</span></span></div>
</div>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-25 17:00:00',
    'status' => 'Viewed',
    'link' => '-',
    'created_at' => '2024-01-25 19:20:08',
    'updated_at' => '2024-01-31 00:01:23',
  ),
  34 => 
  array (
    'id' => 35,
    'user_id' => 2,
    'company' => 'PT. Pelaut Naavee Indonesia',
    'role' => 'Programmer',
    'description' => '<div class="" data-block="true" data-editor="duepo" data-offset-key="95qkg-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="95qkg-0-0"><strong><span data-offset-key="95qkg-0-0"><span data-text="true">Qualifications:</span></span></strong></div>
</div>
<div class="" data-block="true" data-editor="duepo" data-offset-key="31q8a-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="31q8a-0-0"><span data-offset-key="31q8a-0-0"><span data-text="true">- Back End Developer have a minimum of 2 years of work experience in the related field required for this position.</span></span></div>
</div>
<div class="" data-block="true" data-editor="duepo" data-offset-key="50seu-0-0">&nbsp;</div>
<div class="" data-block="true" data-editor="duepo" data-offset-key="dkco-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="dkco-0-0"><span data-offset-key="dkco-0-0"><span data-text="true">- HTML&nbsp;</span></span></div>
</div>
<div class="" data-block="true" data-editor="duepo" data-offset-key="6qpuk-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="6qpuk-0-0"><span data-offset-key="6qpuk-0-0"><span data-text="true">- CSS (Bootstrap)</span></span></div>
</div>
<div class="" data-block="true" data-editor="duepo" data-offset-key="jg4c-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="jg4c-0-0"><span data-offset-key="jg4c-0-0"><span data-text="true">- Javascript (Jquery)</span></span></div>
</div>
<div class="" data-block="true" data-editor="duepo" data-offset-key="9ck19-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="9ck19-0-0"><span data-offset-key="9ck19-0-0"><span data-text="true">- Laravel</span></span></div>
</div>
<div class="" data-block="true" data-editor="duepo" data-offset-key="e5l5a-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="e5l5a-0-0"><span data-offset-key="e5l5a-0-0"><span data-text="true">- MySql&nbsp;</span></span></div>
</div>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-25 17:00:00',
    'status' => 'Send CV',
    'link' => '-',
    'created_at' => '2024-01-25 19:22:27',
    'updated_at' => '2024-01-25 19:22:27',
  ),
  35 => 
  array (
    'id' => 36,
    'user_id' => 2,
    'company' => 'Multimatics ID',
    'role' => 'Programmer',
    'description' => '<div class="" data-block="true" data-editor="9itf2" data-offset-key="aa656-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="aa656-0-0"><strong><span data-offset-key="aa656-0-0"><span data-text="true">Responsibilities:</span></span></strong></div>
</div>
<div class="" data-block="true" data-editor="9itf2" data-offset-key="2q12-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="2q12-0-0"><span data-offset-key="2q12-0-0"><span data-text="true">1. Developing software and/or application</span></span></div>
</div>
<div class="" data-block="true" data-editor="9itf2" data-offset-key="8vspc-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="8vspc-0-0"><span data-offset-key="8vspc-0-0"><span data-text="true">2. Responsible for software testing and manitaining</span></span></div>
</div>
<div class="" data-block="true" data-editor="9itf2" data-offset-key="55ku-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="55ku-0-0"><span data-offset-key="55ku-0-0"><span data-text="true">4. Ensure that the design is integrated with the functions and systems to make the website/applications runs well</span></span></div>
</div>
<div class="" data-block="true" data-editor="9itf2" data-offset-key="ame1r-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="ame1r-0-0"><span data-offset-key="ame1r-0-0"><span data-text="true">5. Implement the design concept to the data structure framework into the programming language that is mastered</span></span></div>
</div>
<div class="" data-block="true" data-editor="9itf2" data-offset-key="e7veu-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="e7veu-0-0"><span data-offset-key="e7veu-0-0"><span data-text="true">6. Develop a software that covers the entire process: creating a useful interface (UI/UX), features, data model structure and security.</span></span></div>
</div>
<div class="" data-block="true" data-editor="9itf2" data-offset-key="7vcad-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="7vcad-0-0"><span data-offset-key="7vcad-0-0">&nbsp;</span></div>
</div>
<div class="" data-block="true" data-editor="9itf2" data-offset-key="8ueu3-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="8ueu3-0-0"><strong><span data-offset-key="8ueu3-0-0"><span data-text="true">Requirements:</span></span></strong></div>
</div>
<ol class="public-DraftStyleDefault-ol" data-offset-key="kfmt-0-0">
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="9itf2" data-offset-key="kfmt-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="kfmt-0-0"><span data-offset-key="kfmt-0-0"><span data-text="true">Bachelor degree In Informatics Engineering / Information Systems / Computer Science</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="9itf2" data-offset-key="27igm-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="27igm-0-0"><span data-offset-key="27igm-0-0"><span data-text="true">Able to build websites with front end and back end framework</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="9itf2" data-offset-key="3gjn0-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="3gjn0-0-0"><span data-offset-key="3gjn0-0-0"><span data-text="true">Proficient in front end and back end programming languages ​​such as: (MySQL, HTML/CSS, Javascript, Java, PHP, Bootstrap)</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="9itf2" data-offset-key="3708a-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="3708a-0-0"><span data-offset-key="3708a-0-0"><span data-text="true">Having experience as a programmer min 2 years is preferable</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="9itf2" data-offset-key="dd2to-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="dd2to-0-0"><span data-offset-key="dd2to-0-0"><span data-text="true">Have experience making microservices is a plus</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="9itf2" data-offset-key="3l7t7-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="3l7t7-0-0"><span data-offset-key="3l7t7-0-0"><span data-text="true">Have a desire to learn new technologies</span></span></div>
</li>
</ol>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-25 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://multimatics.co.id',
    'created_at' => '2024-01-25 19:24:24',
    'updated_at' => '2024-01-25 19:24:24',
  ),
  36 => 
  array (
    'id' => 37,
    'user_id' => 2,
    'company' => 'Evolusi Teknologi Solusi',
    'role' => 'Programmer',
    'description' => '<div class="JobDescriptionsc__TitleContainer-sc-22zrgx-1 hiYwUK">
<h2 class="JobDescriptionsc__Title-sc-22zrgx-0 hmPryy">Deskripsi&nbsp;</h2>
</div>
<div class="JobDescriptionsc__DescriptionContainer-sc-22zrgx-2 jCwTA-d">
<div class="DraftEditorContainersc__DraftEditorContainer-sc-me9dkr-0 hFcHCK">
<div class="DraftEditor-root">
<div class="DraftEditor-editorContainer">
<div class="public-DraftEditor-content" contenteditable="false" spellcheck="false">
<div data-contents="true">
<ul class="public-DraftStyleDefault-ul" data-offset-key="115sh-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="6lq17" data-offset-key="115sh-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="115sh-0-0"><span data-offset-key="115sh-0-0"><span data-text="true">Minimum Bachelor\'s degree in Computer Science/Information Technology/System Information</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="6lq17" data-offset-key="d2ls8-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="d2ls8-0-0"><span data-offset-key="d2ls8-0-0"><span data-text="true">At least 1-2 years experience as Programmer</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="6lq17" data-offset-key="cn5-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="cn5-0-0"><span data-offset-key="cn5-0-0"><span data-text="true">Tech Stack : PHP/Java/Javascript</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="6lq17" data-offset-key="e6apk-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="e6apk-0-0"><span data-offset-key="e6apk-0-0"><span data-text="true">Placement : Jakarta Pusat</span></span></div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-25 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://evoteks.co.id',
    'created_at' => '2024-01-25 19:26:36',
    'updated_at' => '2024-01-25 19:26:36',
  ),
  37 => 
  array (
    'id' => 38,
    'user_id' => 2,
    'company' => 'SMAS Yappenda Jakarta',
    'role' => 'Programmer Sekolah',
    'description' => '<div class="" data-block="true" data-editor="1h3f2" data-offset-key="fk8bh-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="fk8bh-0-0"><span data-offset-key="fk8bh-0-0"><span data-text="true">SMA YAPPENDA membutuhkan programmer yang dapat menghandle terkait LMS dan sarana pembelajaran secara digital! </span></span><span data-offset-key="cam1h-0-0"><span data-text="true">Bekerja secara full time di sekolah (tidak mengajar hanya sebagai programmer).</span></span></div>
</div>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-25 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://www.smayappenda.sch.id',
    'created_at' => '2024-01-25 19:29:49',
    'updated_at' => '2024-01-25 19:29:49',
  ),
  38 => 
  array (
    'id' => 39,
    'user_id' => 2,
    'company' => 'PT. Wahana Sejahtera Indonesia',
    'role' => 'IT Programmer',
    'description' => '<div class="" data-block="true" data-editor="6hp0c" data-offset-key="2bu71-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="2bu71-0-0"><strong><span data-offset-key="2bu71-0-0"><span data-text="true">Jobdesk:</span></span></strong></div>
</div>
<div class="" data-block="true" data-editor="6hp0c" data-offset-key="6ksbj-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="6ksbj-0-0"><span data-offset-key="6ksbj-0-0"><span data-text="true">&bull; Mengolah database</span></span></div>
</div>
<div class="" data-block="true" data-editor="6hp0c" data-offset-key="3ihmm-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="3ihmm-0-0"><span data-offset-key="3ihmm-0-0"><span data-text="true">&bull; Mengelola teknologi web server</span></span></div>
</div>
<div class="" data-block="true" data-editor="6hp0c" data-offset-key="dhb96-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="dhb96-0-0"><span data-offset-key="dhb96-0-0"><span data-text="true">&bull; Melakukan integrasi cloud computing</span></span></div>
</div>
<div class="" data-block="true" data-editor="6hp0c" data-offset-key="b484k-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="b484k-0-0"><span data-offset-key="b484k-0-0"><span data-text="true">&bull; Membangun software server side</span></span></div>
</div>
<div class="" data-block="true" data-editor="6hp0c" data-offset-key="428ge-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="428ge-0-0"><span data-offset-key="428ge-0-0"><span data-text="true">&bull; Mengatur bahasa pemrograman server side.</span></span></div>
</div>
<div class="" data-block="true" data-editor="6hp0c" data-offset-key="1drj7-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="1drj7-0-0"><span data-offset-key="1drj7-0-0"><span data-text="true">&bull; Melakukan integrasi Application Programing Interface (API)</span></span></div>
</div>
<div class="" data-block="true" data-editor="6hp0c" data-offset-key="19fss-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="19fss-0-0"><span data-offset-key="19fss-0-0"><span data-text="true">&bull; Mengelola Content Management System (CMS)</span></span></div>
</div>
<div class="" data-block="true" data-editor="6hp0c" data-offset-key="csb6b-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="csb6b-0-0"><span data-offset-key="csb6b-0-0"><span data-text="true">&bull; Mengembangkan Content Management System (CMS)</span></span></div>
</div>
<div class="" data-block="true" data-editor="6hp0c" data-offset-key="5150l-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="5150l-0-0"><span data-offset-key="5150l-0-0"><span data-text="true">&bull; Mengatur dan menjamin keamanan web</span></span></div>
</div>
<div class="" data-block="true" data-editor="6hp0c" data-offset-key="fl1hs-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="fl1hs-0-0"><span data-offset-key="fl1hs-0-0"><span data-text="true">&bull; Membuat laporan analisis dan statistik server</span></span></div>
</div>
<div class="" data-block="true" data-editor="6hp0c" data-offset-key="h6n3-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="h6n3-0-0"><span data-offset-key="h6n3-0-0"><span data-text="true">&bull; Menerjemahkan desain menjadi tampilan yang dapat diakses orang awam (pengguna)</span></span></div>
</div>
<div class="" data-block="true" data-editor="6hp0c" data-offset-key="hv5d-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="hv5d-0-0"><span data-offset-key="hv5d-0-0">&nbsp;</span></div>
</div>
<div class="" data-block="true" data-editor="6hp0c" data-offset-key="9qkv-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="9qkv-0-0"><strong><span data-offset-key="9qkv-0-0"><span data-text="true">Kualifikasi:</span></span></strong></div>
</div>
<div class="" data-block="true" data-editor="6hp0c" data-offset-key="63uha-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="63uha-0-0"><span data-offset-key="63uha-0-0"><span data-text="true">1. Pendidikan Minimal S1 Teknik Komputer/ Informatika</span></span></div>
</div>
<div class="" data-block="true" data-editor="6hp0c" data-offset-key="804bc-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="804bc-0-0"><span data-offset-key="804bc-0-0"><span data-text="true">2. Memiliki pengalaman (minimal 1 tahun) dalam pemrograman web</span></span></div>
</div>
<div class="" data-block="true" data-editor="6hp0c" data-offset-key="asf58-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="asf58-0-0"><span data-offset-key="asf58-0-0"><span data-text="true">3. Memiliki kemauan untuk mempelajari tool, teknik, bahasa pemrograman dan tekonologi baru</span></span></div>
</div>
<div class="" data-block="true" data-editor="6hp0c" data-offset-key="36lum-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="36lum-0-0"><span data-offset-key="36lum-0-0"><span data-text="true">4. Menguasai HTML, Javascript, PHP (Codeigniter/ Laravel Framework), Python (Django/ Flask Framework) (nilai tambah), MySQL/ PostgreSQL/ MS SQL Server, Manajemen source code, ReactNative/ Flutter (nilai tambah), Talent Data Integration (nilai tambah)</span></span></div>
</div>
<div class="" data-block="true" data-editor="6hp0c" data-offset-key="89dem-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="89dem-0-0"><span data-offset-key="89dem-0-0"><span data-text="true">5. Memiliki pengetahuan dalam: Konsep OOP &amp; MVC, SLDC untuk Aplikasi Web, Konsep ETL &amp; Data Warehouse, OS Linux (nilai tambah), Konsep REST/ API (nilai tambah)</span></span></div>
</div>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-25 17:00:00',
    'status' => 'Send CV',
    'link' => '-',
    'created_at' => '2024-01-25 19:32:34',
    'updated_at' => '2024-01-25 19:32:34',
  ),
  39 => 
  array (
    'id' => 40,
    'user_id' => 2,
    'company' => 'PT Venturium System Indonesia',
    'role' => 'Junior Programmer',
    'description' => '<div class="" data-block="true" data-editor="9hmk8" data-offset-key="1iim-0-0">&nbsp;</div>
<div class="" data-block="true" data-editor="9hmk8" data-offset-key="b4fb0-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="b4fb0-0-0"><strong><span data-offset-key="b4fb0-0-0"><span data-text="true">Kualifikasi&nbsp;</span></span></strong></div>
</div>
<div class="" data-block="true" data-editor="9hmk8" data-offset-key="qdk0-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="qdk0-0-0"><span data-offset-key="qdk0-0-0"><span data-text="true">- Fresh Graduate minimal pernah terlibat/ membuat program berbasis web </span></span></div>
</div>
<div class="" data-block="true" data-editor="9hmk8" data-offset-key="4agvn-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="4agvn-0-0"><span data-offset-key="4agvn-0-0"><span data-text="true">- Menguasai Bahasa Pemrograman</span></span></div>
</div>
<div class="" data-block="true" data-editor="9hmk8" data-offset-key="4u23r-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="4u23r-0-0"><span data-offset-key="4u23r-0-0"><span data-text="true">- Menguasai SQL</span></span></div>
</div>
<div class="" data-block="true" data-editor="9hmk8" data-offset-key="ej9bl-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="ej9bl-0-0"><span data-offset-key="ej9bl-0-0"><span data-text="true">- Menguasai UI/ UX Design</span></span></div>
</div>
<div class="" data-block="true" data-editor="9hmk8" data-offset-key="f3h3m-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="f3h3m-0-0"><span data-offset-key="f3h3m-0-0"><span data-text="true">- Mempunyai kemampuan analitical yang tinggi</span></span></div>
</div>
<div class="" data-block="true" data-editor="9hmk8" data-offset-key="dqlof-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="dqlof-0-0"><span data-offset-key="dqlof-0-0"><span data-text="true">- Semangat belajar dan cepat menguasai teknonogi baru</span></span></div>
</div>
<div class="" data-block="true" data-editor="9hmk8" data-offset-key="dr0nj-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="dr0nj-0-0"><span data-offset-key="dr0nj-0-0"><span data-text="true">- Dapat membaca dan memahami dokumen teknis dalam Bahasa Inggris/ Bahasa Indonesia</span></span></div>
</div>
<div class="" data-block="true" data-editor="9hmk8" data-offset-key="bbmfj-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="bbmfj-0-0"><span data-offset-key="bbmfj-0-0"><span data-text="true">- Mempunyai kemampuan komunikasi yang baik dan dapat bekerjasama dalam team</span></span></div>
</div>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-25 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://www.vensys.co.id',
    'created_at' => '2024-01-25 19:34:26',
    'updated_at' => '2024-01-25 19:34:26',
  ),
  40 => 
  array (
    'id' => 41,
    'user_id' => 2,
    'company' => 'Tirtamarta BPK Penabur Pondok Indah',
    'role' => 'Guru TIK SMA',
    'description' => '<div class="" data-block="true" data-editor="60fn" data-offset-key="bf08e-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="bf08e-0-0"><strong><span data-offset-key="bf08e-0-0"><span data-text="true">PERSYARATAN:</span></span></strong></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="dk68o-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="60fn" data-offset-key="dk68o-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="dk68o-0-0"><span data-offset-key="dk68o-0-0"><span data-text="true">Pendidikan minimal S-1 dan sesuai dengan Mata Pelajaran terkait</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="60fn" data-offset-key="c6uou-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="c6uou-0-0"><span data-offset-key="c6uou-0-0"><span data-text="true">Memiliki IPK S1 minimal 3.0</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="60fn" data-offset-key="ct4k3-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="ct4k3-0-0"><span data-offset-key="ct4k3-0-0"><span data-text="true">Memiliki pengalaman lebih diutamakan</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="60fn" data-offset-key="e62nt-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="e62nt-0-0"><span data-offset-key="e62nt-0-0"><span data-text="true">Fresh graduates dipersilahkan untuk melamar</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="60fn" data-offset-key="89t5p-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="89t5p-0-0"><span data-offset-key="89t5p-0-0"><span data-text="true">Usia maksimal 37 tahun</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="60fn" data-offset-key="bt7k3-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="bt7k3-0-0"><span data-offset-key="bt7k3-0-0"><span data-text="true">Memiliki keterampilan teknis seperti: Menguasai platform &amp; teknologi pembelajaran; Memahami Kurikulum yang berlaku dengan baik; Memahami pedagogik dengan baik</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="60fn" data-offset-key="34ulc-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="34ulc-0-0"><span data-offset-key="34ulc-0-0"><span data-text="true">Memiliki soft skill seperti: Mampu berkomunikasi dengan baik; Memiliki etika yang baik; Detil dan Teliti; Memiliki komitmen, integritas &amp; loyalitas</span></span></div>
</li>
</ul>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-25 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://tirtamarta.sch.id',
    'created_at' => '2024-01-25 19:57:21',
    'updated_at' => '2024-01-25 19:57:21',
  ),
  41 => 
  array (
    'id' => 42,
    'user_id' => 2,
    'company' => 'SMK Walisongo Jakarta',
    'role' => 'Guru Informatika',
    'description' => '<div class="" data-block="true" data-editor="803c7" data-offset-key="e2a1c-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="e2a1c-0-0"><strong><span data-offset-key="e2a1c-0-0"><span data-text="true">Kualifikasi: </span></span></strong></div>
</div>
<div class="" data-block="true" data-editor="803c7" data-offset-key="fe0qf-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="fe0qf-0-0"><span data-offset-key="fe0qf-0-0"><span data-text="true">- Pendidikan S1 sesuai jurusan </span></span></div>
</div>
<div class="" data-block="true" data-editor="803c7" data-offset-key="9e9hr-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="9e9hr-0-0"><span data-offset-key="9e9hr-0-0"><span data-text="true">- Muslim/muslimah </span></span></div>
</div>
<div class="" data-block="true" data-editor="803c7" data-offset-key="10c33-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="10c33-0-0"><span data-offset-key="10c33-0-0"><span data-text="true">- Tidak sedang berkuliah </span></span></div>
</div>
<div class="" data-block="true" data-editor="803c7" data-offset-key="6v4dh-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="6v4dh-0-0"><span data-offset-key="6v4dh-0-0"><span data-text="true">- Siap bekerja full time </span></span></div>
</div>
<div class="" data-block="true" data-editor="803c7" data-offset-key="1pqj9-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="1pqj9-0-0"><span data-offset-key="1pqj9-0-0"><span data-text="true">- Dapat membaca Al-Qur\'an </span></span></div>
</div>
<div class="" data-block="true" data-editor="803c7" data-offset-key="8526f-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="8526f-0-0"><span data-offset-key="8526f-0-0"><span data-text="true">- Berdedikasi tinggi dalam mengajar dan mampu bekerjasama dalam tim </span></span></div>
</div>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-25 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://smkwalisongojakarta.sch.id',
    'created_at' => '2024-01-25 19:58:54',
    'updated_at' => '2024-01-25 19:58:54',
  ),
  42 => 
  array (
    'id' => 43,
    'user_id' => 2,
    'company' => 'SDIT Gema Insan Mandiri',
    'role' => 'Guru TIK SD',
    'description' => '<div class="JobDescriptionsc__TitleContainer-sc-22zrgx-1 hiYwUK">
<h2 class="JobDescriptionsc__Title-sc-22zrgx-0 hmPryy">Deskripsi pekerjaan Guru TIK SDIT Gema Insan Mandiri</h2>
</div>
<div class="JobDescriptionsc__DescriptionContainer-sc-22zrgx-2 jCwTA-d">
<div class="DraftEditorContainersc__DraftEditorContainer-sc-me9dkr-0 hFcHCK">
<div class="DraftEditor-root">
<div class="DraftEditor-editorContainer">
<div class="public-DraftEditor-content" contenteditable="false" spellcheck="false">
<div data-contents="true">
<ul class="public-DraftStyleDefault-ul" data-offset-key="24lo9-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="c29cg" data-offset-key="24lo9-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="24lo9-0-0"><span data-offset-key="24lo9-0-0"><span data-text="true">Muslim (laki-laki)</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="c29cg" data-offset-key="8nrn7-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="8nrn7-0-0"><span data-offset-key="8nrn7-0-0"><span data-text="true">Bermanhaj Salaf</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="c29cg" data-offset-key="e18gq-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="e18gq-0-0"><span data-offset-key="e18gq-0-0"><span data-text="true">Memiliki hafalan minimal 1 juz (juz 30)</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="c29cg" data-offset-key="1sd46-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="1sd46-0-0"><span data-offset-key="1sd46-0-0"><span data-text="true">Memiliki pengalaman mengajar TIK (lebih diutamakan)</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="c29cg" data-offset-key="akhls-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="akhls-0-0"><span data-offset-key="akhls-0-0"><span data-text="true">Pendidikan S1 (S.Kom)</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="c29cg" data-offset-key="dlhdi-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="dlhdi-0-0"><span data-offset-key="dlhdi-0-0"><span data-text="true">Tidak sedang kuliah/menempuh pendidikan</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="c29cg" data-offset-key="epikd-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="epikd-0-0"><span data-offset-key="epikd-0-0"><span data-text="true">Mencintai pekerjaan, jujur, rajin, disiplin, rapi, dan pekerja keras</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="c29cg" data-offset-key="7jnta-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="7jnta-0-0"><span data-offset-key="7jnta-0-0"><span data-text="true">Memiliki kepribadian sabar,mengayomi, dan mendidik</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="c29cg" data-offset-key="6bc31-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="6bc31-0-0"><span data-offset-key="6bc31-0-0"><span data-text="true">Komitmen dan dedikasi serta loyalitas kepada lembaga</span></span></div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-25 17:00:00',
    'status' => 'Viewed',
    'link' => 'https://www.sditgamaschool.sch.id',
    'created_at' => '2024-01-25 20:01:38',
    'updated_at' => '2024-01-26 00:39:27',
  ),
  43 => 
  array (
    'id' => 44,
    'user_id' => 2,
    'company' => 'PT Pro Sigmaka Mandiri',
    'role' => 'PHP Developer',
    'description' => '<div class="" data-block="true" data-editor="5qjbq" data-offset-key="2jo5k-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="2jo5k-0-0"><strong><span data-offset-key="2jo5k-0-0"><span data-text="true">Job Description</span></span></strong></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="fturl-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5qjbq" data-offset-key="fturl-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="fturl-0-0"><span data-offset-key="fturl-0-0"><span data-text="true">Writing clean, fast PHP to a high standard, in a timely and scalable way</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5qjbq" data-offset-key="biq3j-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="biq3j-0-0"><span data-offset-key="biq3j-0-0"><span data-text="true">Producing detailed specifications</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5qjbq" data-offset-key="8dnvj-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="8dnvj-0-0"><span data-offset-key="8dnvj-0-0"><span data-text="true">Troubleshooting, testing and maintaining the core product software and databases</span></span></div>
</li>
</ul>
<div class="" data-block="true" data-editor="5qjbq" data-offset-key="6pdlc-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="6pdlc-0-0"><strong><span data-offset-key="6pdlc-0-0"><span data-text="true">Minimum Qualifications</span></span></strong></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="for0o-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5qjbq" data-offset-key="for0o-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="for0o-0-0"><span data-offset-key="for0o-0-0"><span data-text="true">Candidate must possess at least Diploma, Bachelor\'s Degree in Engineering (Computer/Telecommunication), Engineering (Electrical/Electronic), Computer Science/Information Technology, Mathematics, Physics or equivalent.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5qjbq" data-offset-key="dqqu8-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="dqqu8-0-0"><span data-offset-key="dqqu8-0-0"><span data-text="true">At least 1 Year(s) of working experience as PHP Developer.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5qjbq" data-offset-key="e253v-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="e253v-0-0"><span data-offset-key="e253v-0-0"><span data-text="true">Experience with framework (Laravel, Code Igniter or others)</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5qjbq" data-offset-key="31uha-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="31uha-0-0"><span data-offset-key="31uha-0-0"><span data-text="true">Able to working with agile methodology</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5qjbq" data-offset-key="c7pes-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="c7pes-0-0"><span data-offset-key="c7pes-0-0"><span data-text="true">Work location at Jakarta</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5qjbq" data-offset-key="9botm-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="9botm-0-0"><span data-offset-key="9botm-0-0"><span data-text="true">Can join immediately is a plus</span></span></div>
</li>
</ul>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-25 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://prosigmaka.com',
    'created_at' => '2024-01-26 00:38:56',
    'updated_at' => '2024-01-26 00:38:56',
  ),
  44 => 
  array (
    'id' => 45,
    'user_id' => 2,
    'company' => 'PT Fusi Solusi Transformasi',
    'role' => 'Web Developer PHP',
    'description' => '<div class="" data-block="true" data-editor="culti" data-offset-key="b1qv1-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="b1qv1-0-0"><strong><span data-offset-key="b1qv1-0-0"><span data-text="true">Kualifikasi &amp; Skill:</span></span></strong></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="91fe5-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="culti" data-offset-key="91fe5-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="91fe5-0-0"><span data-offset-key="91fe5-0-0"><span data-text="true">Memiliki gelar/lulusan sarjana dalam bidang Teknik Informatika/ Ilmu Komputer / Sistem Imformasi atau bidang terkait.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="culti" data-offset-key="17fs4-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="17fs4-0-0"><span data-offset-key="17fs4-0-0"><span data-text="true">Berpengalaman menjadi web developer PHP selama minimal 3 tahun</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="culti" data-offset-key="ep9p-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="ep9p-0-0"><span data-offset-key="ep9p-0-0"><span data-text="true">Mahir menggunakan bahasa pemrograman PHP</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="culti" data-offset-key="34hq-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="34hq-0-0"><span data-offset-key="34hq-0-0"><span data-text="true">Menguasai framework codeigniter (CI), angular, vuejs</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="culti" data-offset-key="8vp35-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="8vp35-0-0"><span data-offset-key="8vp35-0-0"><span data-text="true">Menguasai pengembangan/teknologi backend menggunakan database oraqle dan sql server</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="culti" data-offset-key="baljk-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="baljk-0-0"><span data-offset-key="baljk-0-0"><span data-text="true">Terbiasa dengan manajemen proyek pengembangan aplikasi/software seperti waterfall dan agile</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="culti" data-offset-key="frcsf-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="frcsf-0-0"><span data-offset-key="frcsf-0-0"><span data-text="true">Memiliki pengalaman kerja dibidang perbankan</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="culti" data-offset-key="3dopc-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="3dopc-0-0"><span data-offset-key="3dopc-0-0"><span data-text="true">Mampu berkolaborasi bekerja dalam tim dengan baik</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="culti" data-offset-key="fsbr6-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="fsbr6-0-0"><span data-offset-key="fsbr6-0-0"><span data-text="true">Memiliki semangat kerja tinggi dan disiplin</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="culti" data-offset-key="dsp32-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="dsp32-0-0"><span data-offset-key="dsp32-0-0"><span data-text="true">Mampu bekerja dalam tim</span></span></div>
</li>
</ul>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-25 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://www.fusi24.com',
    'created_at' => '2024-01-26 00:41:39',
    'updated_at' => '2024-01-26 00:41:39',
  ),
  45 => 
  array (
    'id' => 46,
    'user_id' => 2,
    'company' => 'PT Avows Technologies',
    'role' => 'Backend Developer',
    'description' => '<div class="" data-block="true" data-editor="5npk4" data-offset-key="cq9e8-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="cq9e8-0-0"><span data-offset-key="cq9e8-0-0"><span data-text="true">Responsibilities:</span></span></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="8vfm8-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5npk4" data-offset-key="8vfm8-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="8vfm8-0-0"><span data-offset-key="8vfm8-0-0"><span data-text="true">Developing ideas for new programs, products, or features by monitoring industry developments and trends</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5npk4" data-offset-key="doqie-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="doqie-0-0"><span data-offset-key="doqie-0-0"><span data-text="true">Compile and analyze data, processes, and codes to troubleshoot problems and identify areas for improvement.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5npk4" data-offset-key="9u4h7-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="9u4h7-0-0"><span data-offset-key="9u4h7-0-0"><span data-text="true">Recording data and reporting it to proper parties, such as clients or leadership.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5npk4" data-offset-key="4c0tk-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="4c0tk-0-0"><span data-offset-key="4c0tk-0-0"><span data-text="true">Participating in continuing education and training to remain current on best practices, learn new programming languages, and better assist other team members.</span></span></div>
</li>
</ul>
<div class="" data-block="true" data-editor="5npk4" data-offset-key="d78no-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="d78no-0-0"><span data-offset-key="d78no-0-0">&nbsp;</span></div>
</div>
<div class="" data-block="true" data-editor="5npk4" data-offset-key="7b2mo-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="7b2mo-0-0"><span data-offset-key="7b2mo-0-0"><span data-text="true">Requirements:</span></span></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="6mrnn-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5npk4" data-offset-key="6mrnn-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="6mrnn-0-0"><span data-offset-key="6mrnn-0-0"><span data-text="true">Experience minimum 2 years as Web / Software Developer in Go / .Net / Java</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5npk4" data-offset-key="fhsea-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="fhsea-0-0"><span data-offset-key="fhsea-0-0"><span data-text="true">Familiar with API development and Microservices is a plus</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5npk4" data-offset-key="bop7a-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="bop7a-0-0"><span data-offset-key="bop7a-0-0"><span data-text="true">Experienced in Agile framework and CI/CD systems</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5npk4" data-offset-key="64agg-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="64agg-0-0"><span data-offset-key="64agg-0-0"><span data-text="true">Strong knowledge in SQL Server, MySQL efficient table schema &amp; database querying</span></span></div>
</li>
</ul>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-25 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://avowstech.com',
    'created_at' => '2024-01-26 00:45:53',
    'updated_at' => '2024-01-26 00:45:53',
  ),
  46 => 
  array (
    'id' => 47,
    'user_id' => 2,
    'company' => 'Bumi Amartha Teknologi Mandiri',
    'role' => 'Backend Developer',
    'description' => '<div class="" data-block="true" data-editor="aj8eo" data-offset-key="1o17q-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="1o17q-0-0"><strong><span data-offset-key="1o17q-0-0"><span data-text="true">Responsibilities</span></span></strong></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="f2v3c-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="aj8eo" data-offset-key="f2v3c-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="f2v3c-0-0"><span data-offset-key="f2v3c-0-0"><span data-text="true">Responsible for creating and maintaining technology at the back end of a website</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="aj8eo" data-offset-key="62dhf-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="62dhf-0-0"><span data-offset-key="62dhf-0-0"><span data-text="true">Integrate data from various back-end services and databases</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="aj8eo" data-offset-key="13iq6-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="13iq6-0-0"><span data-offset-key="13iq6-0-0"><span data-text="true">Create and maintain software documentation</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="aj8eo" data-offset-key="d64q1-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="d64q1-0-0"><span data-offset-key="d64q1-0-0"><span data-text="true">Focus on coding and debugging.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="aj8eo" data-offset-key="9c1og-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="9c1og-0-0"><span data-offset-key="9c1og-0-0"><span data-text="true">Knowledge of APIs, debugging techniques</span></span></div>
</li>
</ul>
<div class="" data-block="true" data-editor="aj8eo" data-offset-key="64tl7-0-0">&nbsp;</div>
<div class="" data-block="true" data-editor="aj8eo" data-offset-key="ajo9n-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="ajo9n-0-0"><strong><span data-offset-key="ajo9n-0-0"><span data-text="true">Qualifications</span></span></strong></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="1fdv0-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="aj8eo" data-offset-key="1fdv0-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="1fdv0-0-0"><span data-offset-key="1fdv0-0-0"><span data-text="true">Proven 1-3 years work experience as a Back-end developer</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="aj8eo" data-offset-key="fi5be-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="fi5be-0-0"><span data-offset-key="fi5be-0-0"><span data-text="true">In-depth understanding of the entire web development process (design, development and deployment)</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="aj8eo" data-offset-key="5d731-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="5d731-0-0"><span data-offset-key="5d731-0-0"><span data-text="true">Hands on experience with programming languages like Java, Golang, PHP .Net, Java Spring Boot, NodeJS, etc</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="aj8eo" data-offset-key="auufg-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="auufg-0-0"><span data-offset-key="auufg-0-0"><span data-text="true">Working knowledge of CMS framework</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="aj8eo" data-offset-key="7d5c9-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="7d5c9-0-0"><span data-offset-key="7d5c9-0-0"><span data-text="true">Familiarity with front-end languages (e.g. HTML, JavaScript and CSS)</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="aj8eo" data-offset-key="6sh2l-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="6sh2l-0-0"><span data-offset-key="6sh2l-0-0"><span data-text="true">Excellent analytical and time management skills</span></span></div>
</li>
</ul>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-25 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://www.amartek.id',
    'created_at' => '2024-01-26 00:48:27',
    'updated_at' => '2024-01-26 00:48:27',
  ),
  47 => 
  array (
    'id' => 48,
    'user_id' => 2,
    'company' => 'Dreamaxtion',
    'role' => 'Backend Developer',
    'description' => '<div class="" data-block="true" data-editor="5kn4l" data-offset-key="d1jei-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="d1jei-0-0"><strong><span data-offset-key="d1jei-0-0"><span data-text="true">Requirements :</span></span></strong></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="43aqi-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5kn4l" data-offset-key="43aqi-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="43aqi-0-0"><span data-offset-key="43aqi-0-0"><span data-text="true">2-3 year experience as a Backend Developer/Engineer</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5kn4l" data-offset-key="fnjbh-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="fnjbh-0-0"><span data-offset-key="fnjbh-0-0"><span data-text="true">Bachelor degree of Computer Science/ Computer Engineering/ Software Engineering/ Information System/ Information Technology</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5kn4l" data-offset-key="71e5a-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="71e5a-0-0"><span data-offset-key="71e5a-0-0"><span data-text="true">Able to use Laravel, java script, mysql (minimum intermediate) and vue.js (minimum beginner)</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5kn4l" data-offset-key="21krq-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="21krq-0-0"><span data-offset-key="21krq-0-0"><span data-text="true">Understanding English preferably</span></span></div>
</li>
</ul>
<div class="" data-block="true" data-editor="5kn4l" data-offset-key="6p1j8-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="6p1j8-0-0"><span data-offset-key="6p1j8-0-0">&nbsp;</span></div>
</div>
<div class="" data-block="true" data-editor="5kn4l" data-offset-key="2g1g3-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="2g1g3-0-0"><strong><span data-offset-key="2g1g3-0-0"><span data-text="true">Job Description: </span></span></strong></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="et7iu-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5kn4l" data-offset-key="et7iu-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="et7iu-0-0"><span data-offset-key="et7iu-0-0"><span data-text="true">Be involved and participate in the overall application lifecycle.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5kn4l" data-offset-key="1norj-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="1norj-0-0"><span data-offset-key="1norj-0-0"><span data-text="true">Collaborate with Front-end developers</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5kn4l" data-offset-key="7v82k-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="7v82k-0-0"><span data-offset-key="7v82k-0-0"><span data-text="true">Define and communicate technical and design requirements.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5kn4l" data-offset-key="2o1s-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="2o1s-0-0"><span data-offset-key="2o1s-0-0"><span data-text="true">Build high-quality reusable code that can be used in the future</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5kn4l" data-offset-key="2urnt-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="2urnt-0-0"><span data-offset-key="2urnt-0-0"><span data-text="true">Capable to integrating API</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5kn4l" data-offset-key="4l3o1-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="4l3o1-0-0"><span data-offset-key="4l3o1-0-0"><span data-text="true">Develop functional and sustainable web applications with clean codes</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5kn4l" data-offset-key="f5n7h-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="f5n7h-0-0"><span data-offset-key="f5n7h-0-0"><span data-text="true">Troubleshoot and debug applications</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5kn4l" data-offset-key="ab1k0-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="ab1k0-0-0"><span data-offset-key="ab1k0-0-0"><span data-text="true">Learn about new technologies</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5kn4l" data-offset-key="77fk2-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="77fk2-0-0"><span data-offset-key="77fk2-0-0"><span data-text="true">Stay up to date with current best practices</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5kn4l" data-offset-key="6hm25-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="6hm25-0-0"><span data-offset-key="6hm25-0-0"><span data-text="true">Conduct UI tests and optimize performance</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5kn4l" data-offset-key="d1o7a-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="d1o7a-0-0"><span data-offset-key="d1o7a-0-0"><span data-text="true">Manage cutting-edge technologies to improve applications</span></span></div>
</li>
</ul>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-25 17:00:00',
    'status' => 'Failed',
    'link' => 'https://dreamaxtion.com',
    'created_at' => '2024-01-26 00:50:56',
    'updated_at' => '2024-02-18 07:30:55',
  ),
  48 => 
  array (
    'id' => 49,
    'user_id' => 2,
    'company' => 'LahTube Islamic Video Sharing',
    'role' => 'Fullstack Developer',
    'description' => '<div class="" data-block="true" data-editor="5eb6u" data-offset-key="616qq-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="616qq-0-0"><strong><span data-offset-key="616qq-0-0"><span data-text="true">Kualifikasi :</span></span></strong></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="aq1sl-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5eb6u" data-offset-key="aq1sl-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="aq1sl-0-0"><span data-offset-key="aq1sl-0-0"><span data-text="true">Pengalaman minimal 2 tahun sebagai Full Stack Developer</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5eb6u" data-offset-key="eh0rg-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="eh0rg-0-0"><span data-offset-key="eh0rg-0-0"><span data-text="true">Menguasai lebih dari satu backend, diutamakan PHP</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5eb6u" data-offset-key="cead7-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="cead7-0-0"><span data-offset-key="cead7-0-0"><span data-text="true">Menguasai lebih dari satu frontend, diutamakan React.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5eb6u" data-offset-key="580p0-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="580p0-0-0"><span data-offset-key="580p0-0-0"><span data-text="true">Apabila menguasai React Native, menjadi nilai plus</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5eb6u" data-offset-key="899dm-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="899dm-0-0"><span data-offset-key="899dm-0-0"><span data-text="true">Mengerti Rest API</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5eb6u" data-offset-key="fcjdq-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="fcjdq-0-0"><span data-offset-key="fcjdq-0-0"><span data-text="true">Mengerti Database Mysql</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5eb6u" data-offset-key="7dupk-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="7dupk-0-0"><span data-offset-key="7dupk-0-0"><span data-text="true">Familiar dengan Gitlab / Github</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5eb6u" data-offset-key="4dnfd-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="4dnfd-0-0"><span data-offset-key="4dnfd-0-0"><span data-text="true">Familiar dengan Figma, Adobe XD, atau tools mockup lainnya</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5eb6u" data-offset-key="biitv-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="biitv-0-0"><span data-offset-key="biitv-0-0"><span data-text="true">Memiliki kemampuan interpersonal dan time management yang baik</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5eb6u" data-offset-key="5f0up-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="5f0up-0-0"><span data-offset-key="5f0up-0-0"><span data-text="true">Penempatan : Tebet, Jakarta Selatan (Branch Office)</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5eb6u" data-offset-key="dt9jc-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="dt9jc-0-0"><span data-offset-key="dt9jc-0-0"><span data-text="true">Diutamakan yang siap untuk bekerja secepatnya</span></span></div>
</li>
</ul>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-25 17:00:00',
    'status' => 'Viewed',
    'link' => 'https://www.lahtube.com',
    'created_at' => '2024-01-26 01:00:46',
    'updated_at' => '2024-02-08 20:03:27',
  ),
  49 => 
  array (
    'id' => 50,
    'user_id' => 2,
    'company' => 'Polargate Studio',
    'role' => 'Web Developer',
    'description' => '<div class="" data-block="true" data-editor="fqvoh" data-offset-key="eau4n-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="eau4n-0-0"><strong><span data-offset-key="eau4n-0-0"><span data-text="true">Requirements:</span></span></strong></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="6acl2-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="fqvoh" data-offset-key="6acl2-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="6acl2-0-0"><span data-offset-key="6acl2-0-0"><span data-text="true">Responsible</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="fqvoh" data-offset-key="gutb-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="gutb-0-0"><span data-offset-key="gutb-0-0"><span data-text="true">Eager to learn</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="fqvoh" data-offset-key="1iueq-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="1iueq-0-0"><span data-offset-key="1iueq-0-0"><span data-text="true">Can work as a team</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="fqvoh" data-offset-key="1aqqu-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="1aqqu-0-0"><span data-offset-key="1aqqu-0-0"><span data-text="true">Can work under pressure</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="fqvoh" data-offset-key="79e2g-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="79e2g-0-0"><span data-offset-key="79e2g-0-0"><span data-text="true">Helps build and maintain both the front-end and the back-end of a website and mobile application</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="fqvoh" data-offset-key="2e0i2-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="2e0i2-0-0"><span data-offset-key="2e0i2-0-0"><span data-text="true">Master in HTML5, CSS3, Javascript (Jquery), REST API. Understand Vue.Js is an advantage.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="fqvoh" data-offset-key="e90nn-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="e90nn-0-0"><span data-offset-key="e90nn-0-0"><span data-text="true">Master in PHP, Database, Git, and know one of PHP Framework (preferably Laravel).</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="fqvoh" data-offset-key="cgtns-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="cgtns-0-0"><span data-offset-key="cgtns-0-0"><span data-text="true">Has Experience in Android/iOS (or Flutter) development is an advantage.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="fqvoh" data-offset-key="221ra-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="221ra-0-0"><span data-offset-key="221ra-0-0"><span data-text="true">Ability to meet projects timeline</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="fqvoh" data-offset-key="14mpv-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="14mpv-0-0"><span data-offset-key="14mpv-0-0"><span data-text="true">Has good knowledge of server troubleshooting is an advantage.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="fqvoh" data-offset-key="3v30g-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="3v30g-0-0"><span data-offset-key="3v30g-0-0"><span data-text="true">Enjoy researching technical problems and learning new things.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="fqvoh" data-offset-key="55vjo-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="55vjo-0-0"><span data-offset-key="55vjo-0-0"><span data-text="true">Fresh graduates are welcomed.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="fqvoh" data-offset-key="5sisu-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="5sisu-0-0"><span data-offset-key="5sisu-0-0"><span data-text="true">Full-Time Position.</span></span></div>
</li>
</ul>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-25 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://www.polargate-studio.com',
    'created_at' => '2024-01-26 01:04:13',
    'updated_at' => '2024-01-26 01:04:13',
  ),
  50 => 
  array (
    'id' => 51,
    'user_id' => 2,
    'company' => 'PT Indocyber Global Teknologi',
    'role' => 'Backend Developer',
    'description' => '<div class="" data-block="true" data-editor="2hn1b" data-offset-key="b7pen-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="b7pen-0-0"><span data-offset-key="b7pen-0-0"><span data-text="true">Responsibilities :</span></span></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="6ahrv-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="2hn1b" data-offset-key="6ahrv-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="6ahrv-0-0"><span data-offset-key="6ahrv-0-0"><span data-text="true">Design, develop, and maintain reliable, scalable and maintainable APIs, database and multiple micro-services</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="2hn1b" data-offset-key="b3h0h-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="b3h0h-0-0"><span data-offset-key="b3h0h-0-0"><span data-text="true">Communicate with Product Manager, Front Engineer, QA, and Data teams to conduct further improvements</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="2hn1b" data-offset-key="9d8us-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="9d8us-0-0"><span data-offset-key="9d8us-0-0"><span data-text="true">Doing Code review with peers</span></span></div>
</li>
</ul>
<div class="" data-block="true" data-editor="2hn1b" data-offset-key="5too6-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="5too6-0-0"><span data-offset-key="5too6-0-0"><span data-text="true">Requirements :</span></span></div>
</div>
<div class="" data-block="true" data-editor="2hn1b" data-offset-key="9esme-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="9esme-0-0"><span data-offset-key="9esme-0-0"><span data-text="true">Must-Have / Mandatory</span></span></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="7jell-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="2hn1b" data-offset-key="7jell-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="7jell-0-0"><span data-offset-key="7jell-0-0"><span data-text="true">Bachelor&rsquo;s or higher degree in Computer Science or related fields.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="2hn1b" data-offset-key="ftm4q-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="ftm4q-0-0"><span data-offset-key="ftm4q-0-0"><span data-text="true">Minimum 2 years experience as Backend Engineer and developing APIs using Java Springboot or Quarkus/C#/PHP/NodeJS </span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="2hn1b" data-offset-key="3tla3-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="3tla3-0-0"><span data-offset-key="3tla3-0-0"><span data-text="true">Strong logical thinking, programming and algorithmic skills.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="2hn1b" data-offset-key="8427u-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="8427u-0-0"><span data-offset-key="8427u-0-0"><span data-text="true">Strong business logic - Integrate framework knowledge with business logic</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="2hn1b" data-offset-key="9mahq-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="9mahq-0-0"><span data-offset-key="9mahq-0-0"><span data-text="true">Familiarity with RESTful APIs, and JSON</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="2hn1b" data-offset-key="1toge-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="1toge-0-0"><span data-offset-key="1toge-0-0"><span data-text="true">A passion for learning new stacks and taking on new challenges</span></span></div>
</li>
</ul>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-25 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://www.indocyber.co.id',
    'created_at' => '2024-01-26 01:07:10',
    'updated_at' => '2024-01-26 01:07:10',
  ),
  51 => 
  array (
    'id' => 52,
    'user_id' => 2,
    'company' => 'PT Global Service Indonesia',
    'role' => 'Web Developer',
    'description' => '<ul class="public-DraftStyleDefault-ul" data-offset-key="856ma-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="bak5m" data-offset-key="856ma-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="856ma-0-0"><span data-offset-key="856ma-0-0"><span data-text="true">Mengembangkan aplikasi berbasis web</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="bak5m" data-offset-key="d4p30-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="d4p30-0-0"><span data-offset-key="d4p30-0-0"><span data-text="true">Menemukan dan memperbaiki </span></span><span data-offset-key="d4p30-0-1"><span data-text="true">bug </span></span><span data-offset-key="d4p30-0-2"><span data-text="true">dan melakukan pemrograman</span></span></div>
</li>
</ul>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-30 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://web.globalservice.co.id',
    'created_at' => '2024-01-26 01:08:30',
    'updated_at' => '2024-01-26 01:08:30',
  ),
  52 => 
  array (
    'id' => 53,
    'user_id' => 2,
    'company' => 'WIR Group',
    'role' => 'Internship Backend',
    'description' => '<div class="" data-block="true" data-editor="5bv0d" data-offset-key="5ouih-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="5ouih-0-0"><strong><span data-offset-key="5ouih-0-0"><span data-text="true">Having knowledge in:</span></span></strong></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="997ne-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5bv0d" data-offset-key="997ne-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="997ne-0-0"><span data-offset-key="997ne-0-0"><span data-text="true">Excel in PHP and MySQL</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5bv0d" data-offset-key="7svmj-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="7svmj-0-0"><span data-offset-key="7svmj-0-0"><span data-text="true">Codelgniter Framework</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5bv0d" data-offset-key="a8fag-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="a8fag-0-0"><span data-offset-key="a8fag-0-0"><span data-text="true">Object-oriented and HMVC programming</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5bv0d" data-offset-key="f9r9e-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="f9r9e-0-0"><span data-offset-key="f9r9e-0-0"><span data-text="true">Front End technologies including CSS3, JavaScript and HTML5</span></span></div>
</li>
</ul>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-25 17:00:00',
    'status' => 'Failed',
    'link' => 'https://wir.group/en',
    'created_at' => '2024-01-26 01:12:12',
    'updated_at' => '2024-01-30 21:21:02',
  ),
  53 => 
  array (
    'id' => 54,
    'user_id' => 2,
    'company' => 'Yayasan Pita Kuning Anak Indonesia',
    'role' => 'Web Developer Intern',
    'description' => '<div class="" data-block="true" data-editor="129km" data-offset-key="dg8t5-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="dg8t5-0-0"><strong><span data-offset-key="dg8t5-0-0"><span data-text="true">Requirements: </span></span></strong></div>
</div>
<div class="" data-block="true" data-editor="129km" data-offset-key="cfkdu-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="cfkdu-0-0"><span data-offset-key="cfkdu-0-0"><span data-text="true">1. Final year student or fresh graduate in Computer Science, Engineering or Information Technology or relevant major</span></span></div>
</div>
<div class="" data-block="true" data-editor="129km" data-offset-key="4m0lb-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="4m0lb-0-0"><span data-offset-key="4m0lb-0-0"><span data-text="true">2. Strong knowledge of CSS, HTML, and Database MySQL</span></span></div>
</div>
<div class="" data-block="true" data-editor="129km" data-offset-key="40c5v-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="40c5v-0-0"><span data-offset-key="40c5v-0-0"><span data-text="true">3. Strong knowledge of CMS Wordpress and familiar with page builder </span></span></div>
</div>
<div class="" data-block="true" data-editor="129km" data-offset-key="9oi1j-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="9oi1j-0-0"><span data-offset-key="9oi1j-0-0"><span data-text="true">4. Familiar with Learning Management System (LMS) is a plus</span></span></div>
</div>
<div class="" data-block="true" data-editor="129km" data-offset-key="5jns1-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="5jns1-0-0"><span data-offset-key="5jns1-0-0"><span data-text="true">5. Good communication and problem solving skill</span></span></div>
</div>
<div class="" data-block="true" data-editor="129km" data-offset-key="5smcv-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="5smcv-0-0"><span data-offset-key="5smcv-0-0"><span data-text="true">6. You are self starter and demonstrate a high level of resilience</span></span></div>
</div>
<div class="" data-block="true" data-editor="129km" data-offset-key="3rk1o-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="3rk1o-0-0"><span data-offset-key="3rk1o-0-0"><span data-text="true">7. Based in Jakarta </span></span></div>
</div>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-25 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://pitakuning.or.id',
    'created_at' => '2024-01-26 01:14:45',
    'updated_at' => '2024-01-26 01:14:45',
  ),
  54 => 
  array (
    'id' => 55,
    'user_id' => 2,
    'company' => 'Crowe',
    'role' => 'Internship IT',
    'description' => '<p><strong>Requirements:</strong></p>
<ol>
<li>Minimum Bachelor&rsquo;s degree (S1) in Computer Science/Information Technology, Information System from reputable university or 7th semester student</li>
<li>Fresh graduates are welcome</li>
<li>Able to work individually and in a team</li>
<li>Willing to work under pressure</li>
<li>Strong interpersonal and communication skills</li>
<li>Good oral and written communication skills in English</li>
</ol>',
    'platform' => 'Job Street',
    'apply_at' => '2024-01-25 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://crowe.com',
    'created_at' => '2024-01-26 04:59:48',
    'updated_at' => '2024-01-26 04:59:48',
  ),
  55 => 
  array (
    'id' => 56,
    'user_id' => 2,
    'company' => 'PT Nojorono Tobacco International',
    'role' => 'IT Internship',
    'description' => '<p><strong>Qualifications &amp; experience</strong></p>
<ul>
<li>Minimal Semester 5 dari jurusan IT atau Sistem Informasi</li>
<li>Menguasai minimal 1 bahasa pemprograman</li>
</ul>
<p><strong>Tasks &amp; responsibilities</strong></p>
<ul>
<li>Support tim internal Perusahaan dalam mengerjakan project digitalisasi di berbgai Departemen.</li>
</ul>
<p><strong>Benefits</strong></p>
<ul>
<li>Mendapatkan uang saku magang</li>
<li>Kesempatan untuk menjadi bagian dalam proses digitalisasi</li>
</ul>',
    'platform' => 'Job Street',
    'apply_at' => '2024-01-25 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://www.nojorono.com',
    'created_at' => '2024-01-26 05:11:21',
    'updated_at' => '2024-01-26 05:11:21',
  ),
  56 => 
  array (
    'id' => 57,
    'user_id' => 2,
    'company' => 'PT Map Zona Adiperkasa',
    'role' => 'IT Internship',
    'description' => '<p>Job Requirement :&nbsp;</p>
<ul>
<li>Min in 5th semester Bachelor Degree in Computer Science, Information Systems, Computer Engineering or Other equivalent education</li>
<li>Minimum 1 year experienceHave knowledge of hardware and software: Desktop PCs, Notebooks, Printers, Scanners, projectors, and other end User Computing devices</li>
<li>Have knowledge related to Desktop Operating System: Windows 7, 8, 10, Mac</li>
<li>Have knowledge of Client Desktop Security: Antivirus and Domain System</li>
<li>Have knowledge of Networks and computer connections such as: Wi-Fi, LAN, WAN, VPN, DNS, TCP/ IP, DHCP, Proxy/Internet</li>
</ul>
<p>Job Desc :&nbsp;</p>
<ul>
<li>Provide a document, schedule, and project management</li>
<li>Configuring and Installing Windows Desktop Operating Systems, checking problems Personal Computer Devices and Parts, personal software troubleshooting Standard Computer (MS Office, Web Browser, Email Application) Escalating problems to the company\'s internal IT staff related to the problem.</li>
<li>Provide project report</li>
</ul>',
    'platform' => 'Job Street',
    'apply_at' => '2024-01-25 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://map.co.id',
    'created_at' => '2024-01-26 05:13:00',
    'updated_at' => '2024-01-26 05:13:00',
  ),
  57 => 
  array (
    'id' => 58,
    'user_id' => 2,
    'company' => 'Scorpa Pranedya',
    'role' => 'IT Internship',
    'description' => '<ul>
<li>Final Year Student in Computer Science or a relevant major</li>
<li>Proficiency utilizing working with Databases and SQL (MySQL, SQL Server)</li>
<li>Working knowledge of programming languages (PHP, JavaScript, Shell, Bash, PowerShell)</li>
<li>Having good experience developing WordPress is a major plus</li>
<li>Having knowledge of LAN / WAN / WiFi and TCP IP Protocols is a plus</li>
<li>Having knowledge of managing Windows Server, Linux Server, and Containerization technology (Docker) is a plus</li>
<li>Demonstrated experience finding an issue based on Logs data.</li>
</ul>',
    'platform' => 'Indeed',
    'apply_at' => '2024-01-25 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://www.scorpapranedya.com',
    'created_at' => '2024-01-26 05:39:48',
    'updated_at' => '2024-01-26 05:39:48',
  ),
  58 => 
  array (
    'id' => 59,
    'user_id' => 2,
    'company' => 'PT Media Infobrand Indonesia',
    'role' => 'Web Programmer',
    'description' => '<div class="" data-block="true" data-editor="5oses" data-offset-key="b6v4m-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="b6v4m-0-0"><strong><span data-offset-key="b6v4m-0-0"><span data-text="true">General Qualifications:</span></span></strong></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="21dtc-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5oses" data-offset-key="21dtc-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="21dtc-0-0"><span data-offset-key="21dtc-0-0"><span data-text="true">Pendidikan Minimal D3/S1</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5oses" data-offset-key="d433c-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="d433c-0-0"><span data-offset-key="d433c-0-0"><span data-text="true">Berpengalaman di bidangnya minimal 1 tahun</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5oses" data-offset-key="eskas-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="eskas-0-0"><span data-offset-key="eskas-0-0"><span data-text="true">Mampu bekerja dengan target</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5oses" data-offset-key="foui1-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="foui1-0-0"><span data-offset-key="foui1-0-0"><span data-text="true">Memiliki kemampuan komunikasi yang baik</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5oses" data-offset-key="c0e3f-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="c0e3f-0-0"><span data-offset-key="c0e3f-0-0"><span data-text="true">Bertanggungjawab, jujur, dan teliti</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5oses" data-offset-key="fpb7-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="fpb7-0-0"><span data-offset-key="fpb7-0-0"><span data-text="true">Memiliki Kendaraan sendiri &amp; SIM A/SIM C</span></span></div>
</li>
</ul>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-26 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://infobrand.id',
    'created_at' => '2024-01-26 20:53:53',
    'updated_at' => '2024-01-26 20:53:53',
  ),
  59 => 
  array (
    'id' => 60,
    'user_id' => 2,
    'company' => 'PT Transisi Teknologi Mandiri (DIY)',
    'role' => 'PHP Laravel Developer',
    'description' => '<div class="JobDescriptionsc__DescriptionContainer-sc-22zrgx-2 jCwTA-d">
<div class="DraftEditorContainersc__DraftEditorContainer-sc-me9dkr-0 hFcHCK">
<div class="DraftEditor-root">
<div class="DraftEditor-editorContainer">
<div class="public-DraftEditor-content" contenteditable="false" spellcheck="false">
<div data-contents="true">
<div class="" data-block="true" data-editor="ehksn" data-offset-key="8bqb5-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="8bqb5-0-0"><span data-offset-key="8bqb5-0-0"><span data-text="true">Kualifikasi</span></span></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="575gf-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="ehksn" data-offset-key="575gf-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="575gf-0-0"><span data-offset-key="575gf-0-0"><span data-text="true">Minimal S1 Teknik Informatika atau relevan (lebih diutamakan)</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="ehksn" data-offset-key="esos1-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="esos1-0-0"><span data-offset-key="esos1-0-0"><span data-text="true">Pengalaman min 1th dengan Laravel PHP Framework, SQL dan Javascript</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="ehksn" data-offset-key="8sdps-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="8sdps-0-0"><span data-offset-key="8sdps-0-0"><span data-text="true">Pernah mengerjakan min 3 proyek aplikasi menggunakan Laravel</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="ehksn" data-offset-key="11aip-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="11aip-0-0"><span data-offset-key="11aip-0-0"><span data-text="true">Pernah mengerjakan proyek menggunakan REST API</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="ehksn" data-offset-key="55pih-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="55pih-0-0"><span data-offset-key="55pih-0-0"><span data-text="true">Mampu bekerja secara tim/individu</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="ehksn" data-offset-key="d48ag-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="d48ag-0-0"><span data-offset-key="d48ag-0-0"><span data-text="true">Bersedia mempelajari bahasa pemrograman lain (jika diperlukan)</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="ehksn" data-offset-key="4jt2v-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="4jt2v-0-0"><span data-offset-key="4jt2v-0-0"><span data-text="true">Domisili Yogyakarta dan sekitarnya (lebih diutamakan)</span></span></div>
</li>
</ul>
<div class="" data-block="true" data-editor="ehksn" data-offset-key="a4223-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="a4223-0-0"><span data-offset-key="a4223-0-0">&nbsp;</span></div>
</div>
<div class="" data-block="true" data-editor="ehksn" data-offset-key="3jl78-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="3jl78-0-0"><span data-offset-key="3jl78-0-0"><span data-text="true">Deskripsi Pekerjaan</span></span></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="6qkhp-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="ehksn" data-offset-key="6qkhp-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="6qkhp-0-0"><span data-offset-key="6qkhp-0-0"><span data-text="true">Melakukan pengembangan aplikasi berbasis web</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="ehksn" data-offset-key="1pca2-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="1pca2-0-0"><span data-offset-key="1pca2-0-0"><span data-text="true">Melakukan pengembangan REST API</span></span></div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-26 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://transisi.id',
    'created_at' => '2024-01-26 20:57:12',
    'updated_at' => '2024-01-26 20:57:12',
  ),
  60 => 
  array (
    'id' => 61,
    'user_id' => 2,
    'company' => 'PT Tonjoo Gagas Teknologi (DIY)',
    'role' => 'Laravel Developer',
    'description' => '<div class="" data-block="true" data-editor="1qmm0" data-offset-key="m302-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="m302-0-0"><strong><span data-offset-key="m302-0-0"><span data-text="true"> Requirement:</span></span></strong></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="cop8o-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="1qmm0" data-offset-key="cop8o-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="cop8o-0-0"><span data-offset-key="cop8o-0-0"><span data-text="true">Menguasai PHP minimal pengalaman 2 tahun.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="1qmm0" data-offset-key="39l1r-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="39l1r-0-0"><span data-offset-key="39l1r-0-0"><span data-text="true">Menguasai LARAVEL minimal pengalaman 2 tahun.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="1qmm0" data-offset-key="bh8pi-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="bh8pi-0-0"><span data-offset-key="bh8pi-0-0"><span data-text="true">Menguasai HTML, CSS, JS.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="1qmm0" data-offset-key="11o9t-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="11o9t-0-0"><span data-offset-key="11o9t-0-0"><span data-text="true">Menguasai Framework CSS Bootstrap, jQuery Menjadi Nilai tambah.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="1qmm0" data-offset-key="dmu04-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="dmu04-0-0"><span data-offset-key="dmu04-0-0"><span data-text="true">Menguasai Framework ( Laravel , CI , YII) Menjadi Nilai tambah.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="1qmm0" data-offset-key="dj79o-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="dj79o-0-0"><span data-offset-key="dj79o-0-0"><span data-text="true">Menguasai konsep pemrograman modern seperti OOP, dependency injection, queue, REST API, OAUTH dan ORM menjadi nilai tambah.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="1qmm0" data-offset-key="2tv60-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="2tv60-0-0"><span data-offset-key="2tv60-0-0"><span data-text="true">Menguasai react js / vue js (Optional) </span></span></div>
</li>
</ul>
<div class="" data-block="true" data-editor="1qmm0" data-offset-key="1cdpj-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="1cdpj-0-0"><span data-offset-key="1cdpj-0-0"><span data-text="true"><strong>Job Description:</strong></span></span></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="4habq-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="1qmm0" data-offset-key="4habq-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="4habq-0-0"><span data-offset-key="4habq-0-0"><span data-text="true">Pengembangan aplikasi berbasis PHP</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="1qmm0" data-offset-key="atqrj-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="atqrj-0-0"><span data-offset-key="atqrj-0-0"><span data-text="true">Integrasi front end kedalam backend </span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="1qmm0" data-offset-key="clnmm-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="clnmm-0-0"><span data-offset-key="clnmm-0-0"><span data-text="true">Integrasi API</span></span></div>
</li>
</ul>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-26 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://tonjoo.com',
    'created_at' => '2024-01-26 20:59:15',
    'updated_at' => '2024-01-26 21:02:22',
  ),
  61 => 
  array (
    'id' => 62,
    'user_id' => 2,
    'company' => 'PT. Faust Creative Group',
    'role' => 'Web Developer',
    'description' => '<div class="" data-block="true" data-editor="3kuvb" data-offset-key="22mj8-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="22mj8-0-0"><span data-offset-key="22mj8-0-0"><span data-text="true">Job Descriptions:</span></span></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="1cpdq-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="3kuvb" data-offset-key="1cpdq-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="1cpdq-0-0"><span data-offset-key="1cpdq-0-0"><span data-text="true">Membuat prototype, mockup, dan situs staging untuk ditinjau dan mendapatkan umpan balik</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="3kuvb" data-offset-key="1s5lf-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="1s5lf-0-0"><span data-offset-key="1s5lf-0-0"><span data-text="true">Mengoptimalkan situs web dan aplikasi agar cepat dimuat</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="3kuvb" data-offset-key="8daq5-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="8daq5-0-0"><span data-offset-key="8daq5-0-0"><span data-text="true">Desain untuk optimalisasi mobile</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="3kuvb" data-offset-key="vfm1-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="vfm1-0-0"><span data-offset-key="vfm1-0-0"><span data-text="true">Menangani dan memecahkan berbagai masalah situs web dan masalah pemrograman</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="3kuvb" data-offset-key="d3u9i-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="d3u9i-0-0"><span data-offset-key="d3u9i-0-0"><span data-text="true">Mengembangkan dan mengusulkan produk atau fitur baru dengan memantau pengguna</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="3kuvb" data-offset-key="f0f4c-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="f0f4c-0-0"><span data-offset-key="f0f4c-0-0"><span data-text="true">Melakukan maintenance website </span></span></div>
</li>
</ul>
<div class="" data-block="true" data-editor="3kuvb" data-offset-key="ep395-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="ep395-0-0"><span data-offset-key="ep395-0-0">&nbsp;</span></div>
</div>
<div class="" data-block="true" data-editor="3kuvb" data-offset-key="agnj3-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="agnj3-0-0"><span data-offset-key="agnj3-0-0"><span data-text="true">Job Requirements:</span></span></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="16ipf-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="3kuvb" data-offset-key="16ipf-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="16ipf-0-0"><span data-offset-key="16ipf-0-0"><span data-text="true">Pendidikan min SMA/SMK</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="3kuvb" data-offset-key="46olu-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="46olu-0-0"><span data-offset-key="46olu-0-0"><span data-text="true">Maintenance Network Server</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="3kuvb" data-offset-key="fj4pa-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="fj4pa-0-0"><span data-offset-key="fj4pa-0-0"><span data-text="true">Mampu menguasai situs website </span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="3kuvb" data-offset-key="59n5-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="59n5-0-0"><span data-offset-key="59n5-0-0"><span data-text="true">Diutamakan yang memiliki pengalaman</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="3kuvb" data-offset-key="6nfd0-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="6nfd0-0-0"><span data-offset-key="6nfd0-0-0"><span data-text="true">Dapat bekerja secara individu maupun tim </span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="3kuvb" data-offset-key="eav5d-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="eav5d-0-0"><span data-offset-key="eav5d-0-0"><span data-text="true">Proaktif &amp; kreatif</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="3kuvb" data-offset-key="7591h-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="7591h-0-0"><span data-offset-key="7591h-0-0"><span data-text="true">Bekerja secara remote </span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="3kuvb" data-offset-key="1g46t-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="1g46t-0-0"><span data-offset-key="1g46t-0-0"><span data-text="true">Volunteer selama 3 bulan</span></span></div>
</li>
</ul>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-26 17:00:00',
    'status' => 'Send CV',
    'link' => '-',
    'created_at' => '2024-01-26 21:03:55',
    'updated_at' => '2024-01-26 21:03:55',
  ),
  62 => 
  array (
    'id' => 63,
    'user_id' => 2,
    'company' => 'Evolusi Teknologi Solusi',
    'role' => 'Backend Developer',
    'description' => '<p><strong>Qualifications</strong></p>
<ul>
<li>Bachelor\'s degree in Computer Science or Information Technology or relevant</li>
<li>Minimum having 2 years experience in the related field</li>
<li>Good communication skills</li>
<li>Familiar with stack PHP Laravel, CI, and Golang</li>
<li>Having experience in using Java is a plus</li>
<li>Willing to work onsite in Central Jakarta</li>
</ul>',
    'platform' => 'Linkedin',
    'apply_at' => '2024-01-28 17:00:00',
    'status' => 'Interview HRD',
    'link' => 'https://evoteks.co.id',
    'created_at' => '2024-01-28 15:02:57',
    'updated_at' => '2024-01-31 17:50:10',
  ),
  63 => 
  array (
    'id' => 64,
    'user_id' => 2,
    'company' => 'Sinergi Digital Pustaka',
    'role' => 'IT Support',
    'description' => '<p><strong>Job Descriptions :</strong></p>
<ol>
<li>Menganalisa masalah dan instalasi perangkat, termasuk dekstop dan notebook, hardware, sistem operasi, network, security, printer, scanner, dan beberapa masalah yang terkait dengan PC, Notebook, printer dan server.</li>
</ol>
<p><strong>Qualifications :</strong></p>
<ol>
<li>Minimal lulusan SMK/D3/S1 jurusan Tehnik Komputer, Ilmu Komputer, atau sejenisnya.</li>
<li>Setidaknya mempunyai 6 bulan pengalaman di bidang IT hardware (PC, laptop, Printer, server).</li>
<li>Fresh Graduate dipersilahkan untuk melamar dengan syarat pernah ada pengalaman magang di bidang IT.</li>
<li>Bersedia bekerja sore hingga malam hari (support untuk project)</li>
<li>Dibutuhkan untuk area Meruya Jakarta Barat</li>
</ol>',
    'platform' => 'Job Street',
    'apply_at' => '2024-01-28 17:00:00',
    'status' => 'Send CV',
    'link' => '-',
    'created_at' => '2024-01-28 18:39:02',
    'updated_at' => '2024-01-28 18:39:02',
  ),
  64 => 
  array (
    'id' => 65,
    'user_id' => 2,
    'company' => 'PT Amazone Dunia Rekreasi',
    'role' => 'IT Support',
    'description' => '<ul>
<li>Melakukan pengecekan hingga memperbarui sistem operasi dan aplikasi yang dijalankan oleh pengguna.</li>
<li>Memastikan bahwa setiap aplikasi yang digunakan bisa berjalan dengan baik.</li>
<li>Bertanggung jawab pada mesin pendukung. Seperti&nbsp;<em>scanner, printer,&nbsp;</em>dan lain-lain.</li>
<li>Melakukan beberapa pengaturan pada&nbsp;<em>browser</em>&nbsp;yang sering digunakan.</li>
<li>Menjaga keamanan sistem dengan menggunakan&nbsp;<em>tools</em>&nbsp;seperti antivirus dan sejenis lainnya.</li>
<li>Melakukan&nbsp;<em>backup&nbsp;</em>secara berkala terhadap semua data perusahaan.</li>
<li>Memastikan bahwa setiap komputer yang digunakan bisa berkomunikasi dengan baik dan terhubung dengan sistem jaringan.</li>
<li>Memperbaiki dan mengecek jaringan komputer yang bermasalah.</li>
<li>Melakukan pembaruan dan pengecekan terhadap aplikasi atau sistem operasi yang digunakan.</li>
<li>Memastikan setiap data yang ada di komputer tidak bisa diambil oleh orang lain tanpa izin yang bersangkutan.</li>
</ul>
<p>&nbsp;</p>
<p><strong>Kualifikasi :&nbsp;</strong></p>
<ul>
<li>Pendidikan minimal D3/S1 Jurusan Komputer, Teknologi dan Informasi .</li>
<li>Berpengalaman dalam bidang IT, teknologi, jaringan minimal 1 tahun.</li>
<li>Memahami dan menguasai segala yang berhubungan dengan komputer.</li>
<li>Bersedia Untuk Bekerja di Hari Libur Nasional&nbsp;</li>
<li><em>Fresh graduate are welcome to apply.</em></li>
<li>Bertanggung jawab, memiliki inisiatif yang baik, dan mampu beradaptasi dengan lingkungan baru.</li>
<li>Memiliki kemampuan menyelesaikan tugas-tugas sesuai instruksi.</li>
<li>Disiplin dan mampu bekerja di bawah tekanan.</li>
<li>Memiliki motivasi diri dan kepribadian yang baik.</li>
<li>Proaktif, efisien dan sanggup bekerja individu dengan minimum supervise secara dinamis dalam tim.</li>
</ul>',
    'platform' => 'Job Street',
    'apply_at' => '2024-01-28 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://amazone.id',
    'created_at' => '2024-01-28 18:46:17',
    'updated_at' => '2024-01-28 18:46:17',
  ),
  65 => 
  array (
    'id' => 66,
    'user_id' => 2,
    'company' => 'Synapsis',
    'role' => 'Backend Engineer',
    'description' => '<div class="" data-block="true" data-editor="5injl" data-offset-key="2ec0h-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="2ec0h-0-0"><span data-offset-key="2ec0h-0-0"><span data-text="true">Job Description </span></span></div>
</div>
<ol class="public-DraftStyleDefault-ol" data-offset-key="bukrn-0-0">
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="bukrn-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="bukrn-0-0"><span data-offset-key="bukrn-0-0"><span data-text="true">Improve the quality of running program code.</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="1saf-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="1saf-0-0"><span data-offset-key="1saf-0-0"><span data-text="true">Collaborate with front-end engineers and other team members in developing programs.</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="cdh0p-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="cdh0p-0-0"><span data-offset-key="cdh0p-0-0"><span data-text="true">Preparing API for frontend developer and firmware developer use.</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="11usj-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="11usj-0-0"><span data-offset-key="11usj-0-0"><span data-text="true">Conduct limited testing of programs developed to ensure program quality.</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="330b2-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="330b2-0-0"><span data-offset-key="330b2-0-0"><span data-text="true">Learn new technologies and programming languages ​​to stay up-to-date with the latest developments.</span></span></div>
</li>
</ol>
<div class="" data-block="true" data-editor="5injl" data-offset-key="1fgte-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="1fgte-0-0"><span data-offset-key="1fgte-0-0"><span data-text="true">Job Requirements </span></span></div>
</div>
<ol class="public-DraftStyleDefault-ol" data-offset-key="5mmeq-0-0">
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="5mmeq-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="5mmeq-0-0"><span data-offset-key="5mmeq-0-0"><span data-text="true">Undergraduate students, Diploma students, or Fresh Graduate from IT or other related majors.</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="ce8p9-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="ce8p9-0-0"><span data-offset-key="ce8p9-0-0"><span data-text="true">Experience with Go Lang, especially working in frameworks such as Go Fiber.</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="b94i6-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="b94i6-0-0"><span data-offset-key="b94i6-0-0"><span data-text="true">Understand basic databases such as PostgreSQL, MongoDB, QuestDB, etc</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="4p0f4-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="4p0f4-0-0"><span data-offset-key="4p0f4-0-0"><span data-text="true">Understand the use of API.</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="d7fma-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="d7fma-0-0"><span data-offset-key="d7fma-0-0"><span data-text="true">Understand the Software Development Life Cycle concept.</span></span></div>
</li>
</ol>
<div class="" data-block="true" data-editor="5injl" data-offset-key="26asg-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="26asg-0-0"><span data-offset-key="26asg-0-0"><span data-text="true">Placement </span></span></div>
</div>
<ol class="public-DraftStyleDefault-ol" data-offset-key="7rps6-0-0">
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="7rps6-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="7rps6-0-0"><span data-offset-key="7rps6-0-0"><span data-text="true">Halim, East Jakarta</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="dilho-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="dilho-0-0"><span data-offset-key="dilho-0-0"><span data-text="true">Umbulharjo, Yogyakarta</span></span></div>
</li>
</ol>
<div class="" data-block="true" data-editor="5injl" data-offset-key="2qdu6-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="2qdu6-0-0"><span data-offset-key="2qdu6-0-0"><span data-text="true">Benefits </span></span></div>
</div>
<ol class="public-DraftStyleDefault-ol" data-offset-key="eqg00-0-0">
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="eqg00-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="eqg00-0-0"><span data-offset-key="eqg00-0-0"><span data-text="true">Certificate and Allowance.</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="6nsdd-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="6nsdd-0-0"><span data-offset-key="6nsdd-0-0"><span data-text="true">Career Path.</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="br0mv-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="br0mv-0-0"><span data-offset-key="br0mv-0-0"><span data-text="true">Meal allowances.</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="fm7mk-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="fm7mk-0-0"><span data-offset-key="fm7mk-0-0"><span data-text="true">24 Hour Office (AC + WiFi).</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="7drbn-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="7drbn-0-0"><span data-offset-key="7drbn-0-0"><span data-text="true">Dormitory (if required).</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="7o128-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="7o128-0-0"><span data-offset-key="7o128-0-0"><span data-text="true">Round-trip Economy Class Ticket Train.</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="33pcb-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="33pcb-0-0"><span data-offset-key="33pcb-0-0"><span data-text="true">Start-up Mentoring.</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="6ve4t-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="6ve4t-0-0"><span data-offset-key="6ve4t-0-0"><span data-text="true">Work in Team Experiences.</span></span></div>
</li>
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="fdo1b-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="fdo1b-0-0"><span data-offset-key="fdo1b-0-0"><span data-text="true">Extended Network.</span></span></div>
</li>
</ol>
<div class="" data-block="true" data-editor="5injl" data-offset-key="4p8ph-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="4p8ph-0-0"><span data-offset-key="4p8ph-0-0"><span data-text="true">Duration of employment </span></span></div>
</div>
<ol class="public-DraftStyleDefault-ol" data-offset-key="fu40j-0-0">
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="fu40j-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="fu40j-0-0"><span data-offset-key="fu40j-0-0"><span data-text="true">Minimum 4 months.</span></span></div>
</li>
</ol>
<div class="" data-block="true" data-editor="5injl" data-offset-key="fd7p-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="fd7p-0-0"><span data-offset-key="fd7p-0-0"><span data-text="true">Beginning of employment </span></span></div>
</div>
<ol class="public-DraftStyleDefault-ol" data-offset-key="7ioh7-0-0">
<li class="public-DraftStyleDefault-orderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="7ioh7-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="7ioh7-0-0"><span data-offset-key="7ioh7-0-0"><span data-text="true">Flexible can be adjusted according to campus policy.</span></span></div>
</li>
</ol>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-30 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://synapsis.id',
    'created_at' => '2024-01-30 21:30:07',
    'updated_at' => '2024-01-30 21:30:07',
  ),
  66 => 
  array (
    'id' => 67,
    'user_id' => 2,
    'company' => 'PT Jaya Mulia Permata',
    'role' => 'Fullstack Developer',
    'description' => '<div class="" data-block="true" data-editor="5injl" data-offset-key="d98v9-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="d98v9-0-0"><span data-offset-key="d98v9-0-0"><span data-text="true">Job Descriptions</span></span></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="50e3k-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="50e3k-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="50e3k-0-0"><span data-offset-key="50e3k-0-0"><span data-text="true">Collaborate with other engineers to develop and deploy application</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="208o-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="208o-0-0"><span data-offset-key="208o-0-0"><span data-text="true">Design, build, and maintain our application</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="ck67k-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="ck67k-0-0"><span data-offset-key="ck67k-0-0"><span data-text="true">Write efficient, modular, and reusable codes and libraries</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="eduvl-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="eduvl-0-0"><span data-offset-key="eduvl-0-0"><span data-text="true">Find and solve performance issues</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="coovb-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="coovb-0-0"><span data-offset-key="coovb-0-0"><span data-text="true">Perform restore and audit to reconstruct transactions history.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="s1q-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="s1q-0-0"><span data-offset-key="s1q-0-0"><span data-text="true">Participate in code reviews</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="aj39m-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="aj39m-0-0"><span data-offset-key="aj39m-0-0"><span data-text="true">Communicate best practices to the team</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="bng97-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="bng97-0-0"><span data-offset-key="bng97-0-0"><span data-text="true">Support problem solving about IT related issue</span></span></div>
</li>
</ul>
<div class="" data-block="true" data-editor="5injl" data-offset-key="ji9g-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="ji9g-0-0"><span data-offset-key="ji9g-0-0"><span data-text="true">Job Requirements</span></span></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="478o6-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="478o6-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="478o6-0-0"><span data-offset-key="478o6-0-0"><span data-text="true">Having 2 years of full time backend / frontend development experience is priority</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="9mr8v-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="9mr8v-0-0"><span data-offset-key="9mr8v-0-0"><span data-text="true">Full stack engineering experience in C#, WPF, XAML, PHP</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="9ft2a-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="9ft2a-0-0"><span data-offset-key="9ft2a-0-0"><span data-text="true">Command over front-end web technologies such as HTML, CSS</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="3ah4a-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="3ah4a-0-0"><span data-offset-key="3ah4a-0-0"><span data-text="true">Expert in SQL, database design, and familiarity with SQL Server</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="25eqa-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="25eqa-0-0"><span data-offset-key="25eqa-0-0"><span data-text="true">Experience with front and back end architectural patterns of high-scale applications</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="d9bii-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="d9bii-0-0"><span data-offset-key="d9bii-0-0"><span data-text="true">Experienced with software engineering best practices &ndash; Git (Github), Docker, code reviews, unit and integration testing</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="ep3e9-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="ep3e9-0-0"><span data-offset-key="ep3e9-0-0"><span data-text="true">Ability to communicate technical specifications both verbal and written</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="frufv-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="frufv-0-0"><span data-offset-key="frufv-0-0"><span data-text="true">Solid CS fundamentals &ndash; including data structures and algorithms</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="8nrp0-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="8nrp0-0-0"><span data-offset-key="8nrp0-0-0"><span data-text="true">Understanding of security, common attacks and defenses</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="7gvfe-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="7gvfe-0-0"><span data-offset-key="7gvfe-0-0"><span data-text="true">Fast learner &amp; good analytical thinking</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="5injl" data-offset-key="d3t66-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="d3t66-0-0"><span data-offset-key="d3t66-0-0"><span data-text="true">Strong problem solving and troubleshooting skills.</span></span></div>
</li>
</ul>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-30 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://jayamuliapermata.com/',
    'created_at' => '2024-01-30 21:32:55',
    'updated_at' => '2024-01-30 21:32:55',
  ),
  67 => 
  array (
    'id' => 68,
    'user_id' => 2,
    'company' => 'PT Qtera Mandiri',
    'role' => 'Backend Internship',
    'description' => '<div class="" data-block="true" data-editor="bas2s" data-offset-key="db4p4-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="db4p4-0-0"><span data-offset-key="db4p4-0-0"><span data-text="true">Hi Millenials People</span></span></div>
</div>
<div class="" data-block="true" data-editor="bas2s" data-offset-key="8in1n-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="8in1n-0-0"><span data-offset-key="8in1n-0-0"><span data-text="true">Let\'s Join Our Winning Team</span></span></div>
</div>
<div class="" data-block="true" data-editor="bas2s" data-offset-key="etpv3-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="etpv3-0-0"><span data-offset-key="etpv3-0-0"><span data-text="true">Kami mencari kandidat terbaik untuk mengisi posisi yang dibutuhkan oleh tim dengan tanggung jawab :</span></span></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="54cg4-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="bas2s" data-offset-key="54cg4-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="54cg4-0-0"><span data-offset-key="54cg4-0-0"><span data-text="true">Membantu membuat dan mengembangkan aplikasi web yang dibutuhkan perusahaan</span></span></div>
</li>
</ul>
<div class="" data-block="true" data-editor="bas2s" data-offset-key="7o4ag-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="7o4ag-0-0"><span data-offset-key="7o4ag-0-0"><span data-text="true">Kualifikasi :</span></span></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="dr819-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="bas2s" data-offset-key="dr819-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="dr819-0-0"><span data-offset-key="dr819-0-0"><span data-text="true">Freshgraduate dipersilakan melamar</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="bas2s" data-offset-key="b5hd-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="b5hd-0-0"><span data-offset-key="b5hd-0-0"><span data-text="true">Terbiasa menggunakan pemrograman Node JS dan Framework Express JS</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="bas2s" data-offset-key="f7v9v-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="f7v9v-0-0"><span data-offset-key="f7v9v-0-0"><span data-text="true">Memahami Database noSQL MongoDB (Mongose) dan Rest API</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="bas2s" data-offset-key="or63-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="or63-0-0"><span data-offset-key="or63-0-0"><span data-text="true">Lokasi Magang di area perkantoran Kelapa Gading, Jakarta Utara</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="bas2s" data-offset-key="33kct-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="33kct-0-0"><span data-offset-key="33kct-0-0"><span data-text="true">Waktu Magang minimal 6 bulan</span></span></div>
</li>
</ul>
<div class="" data-block="true" data-editor="bas2s" data-offset-key="fvveo-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="fvveo-0-0"><span data-offset-key="fvveo-0-0"><span data-text="true">Benefit :</span></span></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="15p63-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="bas2s" data-offset-key="15p63-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="15p63-0-0"><span data-offset-key="15p63-0-0"><span data-text="true">Upah bekerja</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="bas2s" data-offset-key="d4rvd-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="d4rvd-0-0"><span data-offset-key="d4rvd-0-0"><span data-text="true">Sertifikat Internship</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="bas2s" data-offset-key="7k0mg-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="7k0mg-0-0"><span data-offset-key="7k0mg-0-0"><span data-text="true">Peluang menjadi karyawan</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="bas2s" data-offset-key="e79fh-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="e79fh-0-0"><span data-offset-key="e79fh-0-0"><span data-text="true">Waktu kerja Senin-Jumat</span></span></div>
</li>
</ul>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-30 17:00:00',
    'status' => 'Failed',
    'link' => 'https://www.qtera.co.id',
    'created_at' => '2024-01-30 21:36:17',
    'updated_at' => '2024-02-08 20:02:24',
  ),
  68 => 
  array (
    'id' => 69,
    'user_id' => 2,
    'company' => 'Esensi Solusi Buana',
    'role' => 'Backend Developer',
    'description' => '<div class="" data-block="true" data-editor="4fo56" data-offset-key="7p8g2-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="7p8g2-0-0"><span data-offset-key="7p8g2-0-0"><span data-text="true">About the role:</span></span></div>
</div>
<div class="" data-block="true" data-editor="4fo56" data-offset-key="3250v-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="3250v-0-0"><span data-offset-key="3250v-0-0"><span data-text="true">The role of the Software Engineer is to build high-quality, innovative, and fully performing software that complies with coding standards and technical design.</span></span></div>
</div>
<div class="" data-block="true" data-editor="4fo56" data-offset-key="3e0jp-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="3e0jp-0-0"><span data-offset-key="3e0jp-0-0">&nbsp;</span></div>
</div>
<div class="" data-block="true" data-editor="4fo56" data-offset-key="bs9s5-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="bs9s5-0-0"><span data-offset-key="bs9s5-0-0"><span data-text="true">What you&rsquo;ll do (Responsibilities):</span></span></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="42vhl-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4fo56" data-offset-key="42vhl-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="42vhl-0-0"><span data-offset-key="42vhl-0-0"><span data-text="true">Develop software applications using programming languages and tools used in software development.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4fo56" data-offset-key="7ikd8-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="7ikd8-0-0"><span data-offset-key="7ikd8-0-0"><span data-text="true">Analyze technical problems and propose effective solutions while seeking guidance when needed.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4fo56" data-offset-key="2d359-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="2d359-0-0"><span data-offset-key="2d359-0-0"><span data-text="true">Work effectively in a team environment, collaborate with team members, and follow instructions from senior team members or team leads.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4fo56" data-offset-key="8kbsl-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="8kbsl-0-0"><span data-offset-key="8kbsl-0-0"><span data-text="true">Learn and adapt to new technologies, programming languages, and software development methodologies.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4fo56" data-offset-key="81k0b-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="81k0b-0-0"><span data-offset-key="81k0b-0-0"><span data-text="true">Maintain quality and attention to detail in software development tasks.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4fo56" data-offset-key="dr5ao-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="dr5ao-0-0"><span data-offset-key="dr5ao-0-0"><span data-text="true">Create document technical specifications, software designs, and coding changes.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4fo56" data-offset-key="4k3em-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="4k3em-0-0"><span data-offset-key="4k3em-0-0"><span data-text="true">Adhere to coding standards, software development best practices, and maintain confidentiality of sensitive information.</span></span></div>
</li>
</ul>
<div class="" data-block="true" data-editor="4fo56" data-offset-key="7obrr-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="7obrr-0-0"><span data-offset-key="7obrr-0-0"><span data-text="true">What capabilities you&rsquo;ll need (Requirements):</span></span></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="9suu-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4fo56" data-offset-key="9suu-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="9suu-0-0"><span data-offset-key="9suu-0-0"><span data-text="true">Have experience in software development, Proven track record of successfully delivering complex software projects.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4fo56" data-offset-key="5rsed-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="5rsed-0-0"><span data-offset-key="5rsed-0-0"><span data-text="true">Extensive experience and proficiency in PHP.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4fo56" data-offset-key="apvfo-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="apvfo-0-0"><span data-offset-key="apvfo-0-0"><span data-text="true">Understanding of software development principles, architecture, design patterns, and best practices.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4fo56" data-offset-key="b4sgj-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="b4sgj-0-0"><span data-offset-key="b4sgj-0-0"><span data-text="true">Familiarity with software development tools and frameworks, version control systems, and bug tracking systems.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4fo56" data-offset-key="ar82j-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="ar82j-0-0"><span data-offset-key="ar82j-0-0"><span data-text="true">Ability to analyze technical problems, propose effective solutions, and make informed decisions.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4fo56" data-offset-key="b41cv-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="b41cv-0-0"><span data-offset-key="b41cv-0-0"><span data-text="true">Good communication skills to effectively convey ideas and discuss technical concepts with team members.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4fo56" data-offset-key="fhpm7-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="fhpm7-0-0"><span data-offset-key="fhpm7-0-0"><span data-text="true">Proactive approach to self-learning and self-improvement in the field of software development.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4fo56" data-offset-key="3ms07-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="3ms07-0-0"><span data-offset-key="3ms07-0-0"><span data-text="true">Ability to plan, organize, and manage software development projects, including defining project scope, timeline, and resources.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4fo56" data-offset-key="6k18p-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="6k18p-0-0"><span data-offset-key="6k18p-0-0"><span data-text="true">Commitment to staying up-to-date with the latest advancements in software development technologies, methodologies, and best practices.</span></span></div>
</li>
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4fo56" data-offset-key="f3lov-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="f3lov-0-0"><span data-offset-key="f3lov-0-0"><span data-text="true">Ability to handle sensitive or confidential information with discretion.</span></span></div>
</li>
</ul>
<div class="" data-block="true" data-editor="4fo56" data-offset-key="1cn2j-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="1cn2j-0-0"><span data-offset-key="1cn2j-0-0">&nbsp;</span></div>
</div>
<div class="" data-block="true" data-editor="4fo56" data-offset-key="3327u-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="3327u-0-0"><span data-offset-key="3327u-0-0"><span data-text="true">Bonus points if you have the following skills:</span></span></div>
</div>
<ul class="public-DraftStyleDefault-ul" data-offset-key="b0ds7-0-0">
<li class="public-DraftStyleDefault-unorderedListItem public-DraftStyleDefault-reset public-DraftStyleDefault-depth0 public-DraftStyleDefault-listLTR" data-block="true" data-editor="4fo56" data-offset-key="b0ds7-0-0">
<div class="public-DraftStyleDefault-block public-DraftStyleDefault-ltr" data-offset-key="b0ds7-0-0"><span data-offset-key="b0ds7-0-0"><span data-text="true">Knowledge of multiple programming languages and libraries x (e.g. MySql, Dart, Go, Angular)</span></span></div>
</li>
</ul>',
    'platform' => 'Glints',
    'apply_at' => '2024-01-30 17:00:00',
    'status' => 'Send CV',
    'link' => 'https://www.esb.id',
    'created_at' => '2024-01-30 21:38:11',
    'updated_at' => '2024-01-30 21:38:11',
  ),
  69 => 
  array (
    'id' => 70,
    'user_id' => 2,
    'company' => 'PT Centrepark Citra Corpora',
    'role' => 'Staff Programmer',
    'description' => '<p class="MuiTypography-root MuiTypography-body1 css-spyb0n" style="color: rgb(76, 76, 76); font-family: MuseoSans; font-weight: 700; font-size: medium; line-height: 20px;">Job Deskripsi</p><p class="MuiTypography-root MuiTypography-body1 css-9wm0ee" style="font-family: MuseoSans; line-height: 20px; max-width: 100%; color: rgb(76, 76, 76);"></p><p><p></p></p><ul style="box-sizing: border-box;"><li style="box-sizing: border-box;">- Paham bahasa Program</li><li style="box-sizing: border-box;">- Develop Apps / Form / Dasboard,Web Base</li><li style="box-sizing: border-box;">- Develop IOT Device</li><li style="box-sizing: border-box;">- Mempunyai Keahlian Di Web (PHP,SQL,HTML,CSS</li><li style="box-sizing: border-box;">- IOT:Ctr,Arduino,Java,C,Phyton</li><li style="box-sizing: border-box;">- Mengoperasikan Software Teknis</li></ul>',
    'platform' => 'Karir',
    'apply_at' => '2024-01-30 17:00:00',
    'status' => 'Failed',
    'link' => 'https://centrepark.co.id',
    'created_at' => '2024-01-31 00:24:41',
    'updated_at' => '2024-02-18 07:30:01',
  ),
));
    }
}
