///////////Update1 below
1)--Delete old DB and create new one with autoincrement
CREATE TABLE Applicants(
	appId INT PRIMARY KEY AUTO_INCREMENT,
    appFname VARCHAR(30),
    appLname VARCHAR(30),
    appDOB DATE,
    appEmail VARCHAR(30) ,
    appPhone INT,
    appAddress VARCHAR(30),
    appPassword LONGTEXT
);
--Employer's table
CREATE TABLE `employer_details` (
  `emp_id` int(11) NOT NULL,
  `emp_logo` blob NOT NULL,
  `emp_category` varchar(30) NOT NULL,
  `emp_name` varchar(30) NOT NULL,
  `emp_email` varchar(30) NOT NULL,
  `emp_phone` varchar(10) NOT NULL,
  `emp_location` varchar(30) NOT NULL,
  `emp_address` varchar(10) NOT NULL,
  `emp_url` varchar(30) NOT NULL,
  `emp_password` varchar(500) NOT NULL,
  `emp_verification` varchar(500) DEFAULT NULL,
  `emp_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

	ALTER TABLE `employer_details`
  ADD PRIMARY KEY (`emp_id`);

	ALTER TABLE `employer_details`
	  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
	COMMIT;
--end of employer's table

-- Dumping dat

CREATE TABLE `jobs` (
  `jobId` int(11) NOT NULL,
  `jobName` varchar(30) DEFAULT NULL,
  `jodDescr` text DEFAULT NULL,
  `jobLocation` varchar(45) NOT NULL,
  `jobSalary` double DEFAULT NULL,
  `jobCategory` varchar(45) NOT NULL,
  `jobClosingDate` date NOT NULL,
  `empId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobId`, `jobName`, `jodDescr`, `jobLocation`, `jobSalary`, `jobCategory`, `jobClosingDate`, `empId`) VALUES
(1, 'Accountant', 'The role holder will be responsible for ensuring steady preparation, processing of payments and reconciling accounts payable transactions.', 'Kisumu', 20000, 'Accounting and Finance', '2020-07-20', 1),
(2, 'Clerical Officer', 'The Demand-Driven Sweetpotato Breeding Project (DS breeding project), implemented by the Internatinal Potato Center and its partners, conducted qualitative study involving sweetpotato farmers.\r\nData were collected to facilitate understanding the traits farmers value in sweetpotato, how those traits are prioritized and of the reasons behind the selection of priority traits.', 'Nakuru', 20000, 'Data Entry', '2020-07-20', 3),
(3, 'Financial Risk Manager', 'Our client is an investment and asset management company in Africa. They seek to recruit a highly experienced and visionary Financial Risk Manager. The successful candidate will be responsible in detecting and scrutinizing all possible risks that may end up impacting on an organization’s financial success and making recommendations to the management on measures that can help mitigate the business risks.', 'Nairobi', 120000, 'Banking', '2020-08-19', 2),
(4, 'Purchasing Clerk', 'Our client is a leading integrated business solutions provider dealing with various systems including Queue Management, Visitor Management, Time & Attendance and Electronic Security Systems. They seek to hire an efficient purchasing Clerk with a high level of attention to detail who will be responsible for managing all the local procurement and inventory of the company.', 'Nairobi', 15000, 'Data Entry', '2020-07-10', 3),
(5, 'Finance Operations Officer', 'Do you want to build a career that is full of meaning and impact? The International Finance Corporation (IFC), a member of the World Bank Group, is the largest global development institution focused on the private sector in emerging markets. Working with more than 2,000 businesses worldwide, we use our capital, expertise, and influence to create markets and opportunities where they are needed most. Visit www.ifc.org', 'Nairobi', 140000, 'Banking', '2020-07-02', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobId`),
  ADD KEY `empId` (`empId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`empId`) REFERENCES `employers` (`empId`);

CREATE TABLE JobRequirements(
	jobReqId int PRIMARY KEY AUTO_INCREMENT,
    jobReqDescr Text,

    jobId INT,
    FOREIGN KEY(jobId) REFERENCES Jobs(jobId)
);

CREATE TABLE JobApplications(
	jobAppId int PRIMARY KEY AUTO_INCREMENT,
    jobAppStatus VARCHAR(30),
    jobAppCV TEXT,

    appId INT,
    jobId INT,
    FOREIGN KEY(appId) REFERENCES Applicants(appId),
    FOREIGN KEY(jobId) REFERENCES Jobs(jobId)

);

CREATE TABLE ApplicantQualifications(
	appQualId int PRIMARY KEY AUTO_INCREMENT,
    appQualName VARCHAR(30),
    appQualInstitution VARCHAR(30),

    jobAppId INT,
    FOREIGN KEY(jobAppId) REFERENCES jobApplications(jobAppId)
);

CREATE TABLE ApplicantPastJobs(
	appPastJobId int PRIMARY KEY AUTO_INCREMENT,
    appPastJobName VARCHAR(30),
    appPastJobYears DOUBLE,

    jobAppId INT,
	FOREIGN KEY(jobAppId) REFERENCES JobApplications(jobAppId)
);

CREATE TABLE CVs(
	cvId INT PRIMARY KEY AUTO_INCREMENT,
    cvReq1 TEXT,
    cvReq2 TEXT,
    cvGenerationDate DATE,

    jobAppId INT,
    FOREIGN KEY(jobAppId) REFERENCES JobApplications(jobAppId)
);

CREATE TABLE Bloggers(
	bloggerId INT PRIMARY KEY AUTO_INCREMENT,
    bloggerFname VARCHAR(30),
    bloggerLname VARCHAR(30),
    bloggerEmail VARCHAR(30),
    bloggerPhone INT
);

CREATE TABLE Articles(
	articleId INT PRIMARY KEY AUTO_INCREMENT,
    articleTitle VARCHAR(30),
    articleBody LONGTEXT,
    articleStatus VARCHAR(30),

	bloggerId INT,
    FOREIGN KEY(bloggerId) REFERENCES Bloggers(bloggerId)
);

CREATE TABLE ArticleRatings(
    articleRatingId INT PRIMARY KEY AUTO_INCREMENT,
    articleComment TEXT,
    articleRating DOUBLE,

    articleId INT,
    FOREIGN KEY(articleId) REFERENCES Articles(articleId)
);


2) --Add columns
   --jobAppExpectations
   --jobAppStrengths
   --jobAppWeaknesses to jobApplications table

  ALTER TABLE jobApplications
  ADD jobAppExpectations TEXT;

  ALTER TABLE jobApplications
  ADD jobAppStrengths TEXT;

  ALTER TABLE jobApplications
  ADD jobAppWeaknesses TEXT;
