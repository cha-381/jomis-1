/*
SQLyog Community Edition- MySQL GUI v6.03
Host - 5.1.73-community : Database - jobs
*********************************************************************
Server version : 5.1.73-community
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `jobs`;

USE `jobs`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `allproject` */

DROP TABLE IF EXISTS `allproject`;

CREATE TABLE `allproject` (
  `objid` int(11) NOT NULL AUTO_INCREMENT,
  `BudgetNo` varchar(100) DEFAULT NULL,
  `ProjectName` varchar(200) DEFAULT NULL,
  `SupplementedAmount` decimal(10,2) DEFAULT NULL,
  `ProjectBudget` decimal(10,2) DEFAULT NULL,
  `Balance1` decimal(10,2) DEFAULT NULL,
  `Charges` varchar(50) DEFAULT NULL,
  `Department` varchar(300) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `abbre` varchar(50) DEFAULT NULL,
  `year` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `obj_id` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`objid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `allproject` */

insert  into `allproject`(`objid`,`BudgetNo`,`ProjectName`,`SupplementedAmount`,`ProjectBudget`,`Balance1`,`Charges`,`Department`,`code`,`abbre`,`year`,`status`,`obj_id`) values (1,'2022-02-1','Other General Services','0.00','100000.00','100000.00','5-02-12-990','Information Techonology and Computer Services Office','0005','ITCSO','2022','Open',NULL),(2,'2022-02-2','Other Project','0.00','200000.00','200000.00','2-22-22-22','Information Techonology and Computer Services Office','0005','ITCSO','2022','Open',NULL),(3,'2022-02-2','Other Project','0.00','200000.00','200000.00','2-22-22-22','Information Techonology and Computer Services Office','0005','ITCSO','2022','Open',NULL),(4,'2022-02-1','Other General Services','0.00','100000.00','100000.00','5-02-12-990','Information Techonology and Computer Services Office','0005','ITCSO','2022','Open',NULL),(5,'2022-02-1','Other General Services','0.00','100000.00','100000.00','5-02-12-990','Information Techonology and Computer Services Office','0005','ITCSO','2022','Open',NULL),(6,'2022-02-1','Other General Services','0.00','100000.00','100000.00','5-02-12-990','Information Techonology and Computer Services Office','0005','ITCSO','2022','Open',NULL),(7,'2022-02-2','Other Project','0.00','200000.00','200000.00','2-22-22-22','Information Techonology and Computer Services Office','0005','ITCSO','2022','Open',NULL),(8,'2022-02-3','Other General Services','10000.00','10000.00','100000.00','5-02-12-990',NULL,'0005','ITCSO','2022',NULL,'1'),(9,'2022-03-3','Other General Services','0.00','300000.00','300000.00','5-02-12-990','Office of the City Mayor','0001','CMO','2022','Open',NULL),(11,'2022-03-4','Other General Services','0.00','300000.00','300000.00','5-02-12-990','City Budget and Management Office','0035','CBMO','2022','Open',NULL),(12,'2022-03-5','Project Base','0.00','100000.00','100000.00','33-333-333','City Budget and Management Office','0035','CBMO','2022','Open',NULL),(13,'2022-04-6','Other General Services','1000.00','1000.00','108500.00','5-02-12-990',NULL,'0005','ITCSO','2022',NULL,'1');

/*Table structure for table `barangay` */

DROP TABLE IF EXISTS `barangay`;

CREATE TABLE `barangay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `barangay` varchar(50) NOT NULL,
  PRIMARY KEY (`id`,`barangay`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `barangay` */

insert  into `barangay`(`id`,`barangay`) values (1,'1'),(2,'2'),(3,'3'),(4,'4'),(5,'5'),(6,'6'),(7,'Bagonbon'),(8,'Buluangan'),(9,'Codcod'),(10,'Guadalupe'),(11,'Nataban'),(12,'Palampas'),(13,'Punao'),(14,'Quezon'),(15,'Rizal'),(16,'Sipaway(Ermita)'),(17,'Sipaway(San Juan)');

/*Table structure for table `cedula` */

DROP TABLE IF EXISTS `cedula`;

CREATE TABLE `cedula` (
  `objid` int(11) NOT NULL AUTO_INCREMENT,
  `ID` varchar(50) DEFAULT NULL,
  `Filenames` longtext,
  PRIMARY KEY (`objid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `cedula` */

insert  into `cedula`(`objid`,`ID`,`Filenames`) values (1,'8',NULL),(2,'8','../dist/cedula/612734669_187.pdf');

/*Table structure for table `createjo` */

DROP TABLE IF EXISTS `createjo`;

CREATE TABLE `createjo` (
  `objid` int(11) NOT NULL AUTO_INCREMENT,
  `JobOrderNo` varchar(50) DEFAULT NULL,
  `Remarks` varchar(500) DEFAULT NULL,
  `Charges` varchar(100) DEFAULT NULL,
  `ProjectName` varchar(50) DEFAULT NULL,
  `ProjectBudget` decimal(10,2) DEFAULT NULL,
  `PreviousBalance` decimal(10,2) DEFAULT NULL,
  `Amount` decimal(10,2) DEFAULT NULL,
  `PayAmount` decimal(10,2) DEFAULT NULL,
  `PeriodCovered` varchar(100) DEFAULT NULL,
  `status` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `Filenames` longtext,
  `ReportPeriod` varchar(50) DEFAULT NULL,
  `TotalOver` varchar(50) DEFAULT NULL,
  `Department` varchar(100) DEFAULT NULL,
  `Uniq` varchar(100) DEFAULT NULL,
  `abbre` varchar(50) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `objid_pro` int(11) DEFAULT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `PayrollNo` varchar(100) DEFAULT NULL,
  `Laborers` varchar(100) DEFAULT NULL,
  `DateJo` varchar(100) DEFAULT NULL,
  `Schedules` varchar(300) DEFAULT NULL,
  `Item1` varchar(100) DEFAULT NULL,
  `Item2` varchar(100) DEFAULT NULL,
  `Item3` varchar(100) DEFAULT NULL,
  `Item4` varchar(100) DEFAULT NULL,
  `Item5` varchar(100) DEFAULT NULL,
  `Description1` varchar(500) DEFAULT NULL,
  `Description2` varchar(500) DEFAULT NULL,
  `Description3` varchar(500) DEFAULT NULL,
  `Description4` varchar(500) DEFAULT NULL,
  `Description5` varchar(500) DEFAULT NULL,
  `Subject` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`objid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `createjo` */

insert  into `createjo`(`objid`,`JobOrderNo`,`Remarks`,`Charges`,`ProjectName`,`ProjectBudget`,`PreviousBalance`,`Amount`,`PayAmount`,`PeriodCovered`,`status`,`Filenames`,`ReportPeriod`,`TotalOver`,`Department`,`Uniq`,`abbre`,`code`,`objid_pro`,`user_id`,`PayrollNo`,`Laborers`,`DateJo`,`Schedules`,`Item1`,`Item2`,`Item3`,`Item4`,`Item5`,`Description1`,`Description2`,`Description3`,`Description4`,`Description5`,`Subject`) values (1,'ITCSO624bf5a9d8cf3-2022-1',NULL,'5-02-12-990','Other General Services','109500.00','109500.00',NULL,NULL,'January 01 - 15, 2022',NULL,NULL,NULL,NULL,'Information Technology and Computer Services Office','ITCSO624bf5b313fbb','ITCSO','0005',1,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(2,'ITCSO624c284b6c2d5-2022-2',NULL,'5-02-12-990','Other General Services','109500.00','109500.00',NULL,NULL,'February 01 - 15, 2022',NULL,NULL,NULL,NULL,'Information Technology and Computer Services Office','ITCSO624c285dea9db','ITCSO','0005',1,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(3,'ITCSO624cfd87b84fc-2022-3',NULL,'5-02-12-990','Other General Services','109500.00','99400.00','10100.00',NULL,'January 01 - 15, 2022',NULL,NULL,NULL,NULL,'Information Technology and Computer Services Office','ITCSO624cfdb1b26db','ITCSO','0005',1,'1',NULL,'2','April 06,2022',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(4,'ITCSO624d243ea6d60-2022-4',NULL,'5-02-12-990','Other General Services','109500.00','96100.00','3300.00',NULL,'January 01 - 15, 2022',NULL,NULL,NULL,NULL,'Information Technology and Computer Services Office','ITCSO624d24466ec14','ITCSO','0005',1,'1',NULL,'1','April 06,2022',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(5,'ITCSO624d2e2977546-2022-5',NULL,'5-02-12-990','Other General Services','109500.00','96100.00',NULL,NULL,'January 01 - 15, 2022',NULL,NULL,NULL,NULL,'Information Technology and Computer Services Office','ITCSO624d2e3240af8','ITCSO','0005',1,'1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'');

/*Table structure for table `dayz` */

DROP TABLE IF EXISTS `dayz`;

CREATE TABLE `dayz` (
  `id` int(11) DEFAULT NULL,
  `DaysSched` varchar(500) DEFAULT NULL,
  `id_no` varchar(100) DEFAULT NULL,
  `user` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dayz` */

insert  into `dayz`(`id`,`DaysSched`,`id_no`,`user`) values (NULL,'Monday','5','1'),(NULL,'Tuesday','5','1'),(NULL,'Wenesday','5','1'),(NULL,'Thursday','5','1'),(NULL,'Friday','5','1'),(NULL,'Saturday','5','1'),(NULL,'Sunday','5','1'),(NULL,'Monday-Friday','5','1'),(NULL,'Monday-Friday w/ Holidays','5','1'),(NULL,'Monday-Saturday','5','1'),(NULL,'Monday-Saturday w/ Holidays','5','1'),(NULL,'Monday-Sunday','5','1');

/*Table structure for table `department` */

DROP TABLE IF EXISTS `department`;

CREATE TABLE `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(100) DEFAULT NULL,
  `abbre` varchar(50) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

/*Data for the table `department` */

insert  into `department`(`id`,`department`,`abbre`,`code`) values (1,'All','A','0000'),(2,'Office of the City Mayor','CMO','0001'),(3,'Office of the City Administrator','CAO','0002'),(4,'Sangguniang Panlungsod','SP','0003'),(5,'City Waterworks Department','CWD','0004'),(6,'Information Technology and Computer Services Office','ITCSO','0005'),(7,'Office of the City Treasurer','CTO','0006'),(8,'San Carlos City Hospital','SCCH','0007'),(9,'City Waterworks Department','CWD','0008'),(10,'City Enviroment and Management Office','CEMO','0009'),(11,'Office of Human Resource and Management','OHRM','0010'),(12,'Public Employment Service Office','PESO','0011'),(13,'City Engineering Office','CEO','0012'),(14,'General Services Department','GSD','0013'),(15,'Bureau of Fire Protection','BFP','0014'),(16,'City Disaster And Risk Reduction Management Office','CDRRMO','0015'),(17,'City Tourism Office','CMO/TOUR','0016'),(18,'Solid Waste Management Office','SWMO','0017'),(19,'Casuals Office','CMO/CAS','0018'),(20,'Business Permit and Licensing Office','BPLO','0019'),(21,'Bids and Awards Committee-Secretariat','BAC','0020'),(22,'City Legal Office','CMO/CLO','0021'),(23,'City Health Office','CHO','0023'),(24,'Department of Education','DepEd','0025'),(25,'Office of the City Assessor','OCA','0026'),(26,'City Planning and Development Office','CPDO','0027'),(27,'Accounting and Internal Audit Services Office','AIAS','0028'),(28,'City Public Library','CPL','0029'),(29,'Register of Deeds','ROD','0030'),(30,'City Prosecution Office','CPO','0031'),(31,'Philippine National Police','PNP','0032'),(32,'Regional Trial Court and Other Courts','RTCOC','0033'),(33,'Municipal Trial Court in Cities','MTCC','0034'),(34,'City Budget and Management Office','CBMO','0035'),(35,'Office of the City Auditor','CAUD','0036'),(36,'City Social Welfare and Development Office','CSWDO','0037'),(37,'Office of the City Agriculturist','OCAGRI','0038'),(38,'City Environment Management Office','CEMO','0039'),(39,'San Carlos City Hospital','SCCH','0040'),(40,'City Agricultures Office','AGRI','0041'),(41,'Department of Interior and Local Government','DILG','0042'),(42,'Cooperatives and Livelihood Development Office','CLDO','0043');

/*Table structure for table `eduattainment` */

DROP TABLE IF EXISTS `eduattainment`;

CREATE TABLE `eduattainment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `eduattainment` */

insert  into `eduattainment`(`id`,`level`) values (1,'Doctorate degree'),(2,'Professional school degree'),(3,'Master\'s degree'),(4,'Bachelor\'s degree'),(5,'Associate\'s degree (including occupational or acad'),(6,'Some college (1-4 years, no degree)'),(7,'High school graduate (or equivalent)'),(8,'High school (grades 9-12, no degree)'),(9,'Nursery, kindergarten, and elementary (grades 1-8)'),(10,'No schooling completed, or less than 1 year');

/*Table structure for table `empeducation` */

DROP TABLE IF EXISTS `empeducation`;

CREATE TABLE `empeducation` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EduAttainment` varchar(100) DEFAULT NULL,
  `ElementarySchool` varchar(100) DEFAULT NULL,
  `ElementaryYear` varchar(100) DEFAULT NULL,
  `ElementaryAward` varchar(100) DEFAULT NULL,
  `SecondarySchool` varchar(100) DEFAULT NULL,
  `SecondaryYear` varchar(100) DEFAULT NULL,
  `SchoolCollegeGra` varchar(100) DEFAULT NULL,
  `SecondaryAward` varchar(100) DEFAULT NULL,
  `YearPassingGra` varchar(100) DEFAULT NULL,
  `CourseGra` varchar(100) DEFAULT NULL,
  `CollegeAward` varchar(100) DEFAULT NULL,
  `Awards` varchar(100) DEFAULT NULL,
  `EmpCode` varchar(100) DEFAULT NULL,
  `Vocational` varchar(100) DEFAULT NULL,
  `VocationalYear` varchar(100) DEFAULT NULL,
  `VocationalAward` varchar(100) DEFAULT NULL,
  `Graduate` varchar(100) DEFAULT NULL,
  `GraduateYear` varchar(100) DEFAULT NULL,
  `GraduateAward` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `empeducation` */

insert  into `empeducation`(`ID`,`EduAttainment`,`ElementarySchool`,`ElementaryYear`,`ElementaryAward`,`SecondarySchool`,`SecondaryYear`,`SchoolCollegeGra`,`SecondaryAward`,`YearPassingGra`,`CourseGra`,`CollegeAward`,`Awards`,`EmpCode`,`Vocational`,`VocationalYear`,`VocationalAward`,`Graduate`,`GraduateYear`,`GraduateAward`) values (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,NULL,'','','','','','','','',NULL,'',NULL,'2','','','','','',''),(3,NULL,'','','','','','','','',NULL,'',NULL,'3','','','','','',''),(4,NULL,'','','','','','','','',NULL,'',NULL,'4','','','','','',''),(5,NULL,'','','','','','','','',NULL,'',NULL,'5','','','','','',''),(6,NULL,'CONG. VICENTE GUSTILO SR. MEM. SCHOOL','1990-1994','','JULIO LEDESMA NATIONAL HIGHSCHOOL','1994-1998','CENTRAL NEGROS COLLEGE','','1998-2002',NULL,'',NULL,'6','','','','','','');

/*Table structure for table `empexperience` */

DROP TABLE IF EXISTS `empexperience`;

CREATE TABLE `empexperience` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Employer1Name` varchar(50) DEFAULT NULL,
  `Employer2Name` varchar(50) DEFAULT NULL,
  `Employer3Name` varchar(50) DEFAULT NULL,
  `Employer1Designation` varchar(50) DEFAULT NULL,
  `Employer2Designation` varchar(50) DEFAULT NULL,
  `Employer3Designation` varchar(50) DEFAULT NULL,
  `Employer1CTC` varchar(50) DEFAULT NULL,
  `Employer2CTC` varchar(50) DEFAULT NULL,
  `Employer3CTC` varchar(50) DEFAULT NULL,
  `Employer1WorkDuration` varchar(50) DEFAULT NULL,
  `Employer2WorkDuration` varchar(50) DEFAULT NULL,
  `Employer3WorkDuration` varchar(50) DEFAULT NULL,
  `EmpCode` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `empexperience` */

insert  into `empexperience`(`ID`,`Employer1Name`,`Employer2Name`,`Employer3Name`,`Employer1Designation`,`Employer2Designation`,`Employer3Designation`,`Employer1CTC`,`Employer2CTC`,`Employer3CTC`,`Employer1WorkDuration`,`Employer2WorkDuration`,`Employer3WorkDuration`,`EmpCode`) values (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,'','','','','','','','','','','','','2'),(3,'','','','','','','','','','','','','3'),(4,'','','','','','','','','','','','','4'),(5,'','','','','','','','','','','','','5'),(6,'N/A','','','N/A','','','N/A','','','N/A','','','6');

/*Table structure for table `employeedetail` */

DROP TABLE IF EXISTS `employeedetail`;

CREATE TABLE `employeedetail` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `EmpFname` varchar(50) DEFAULT NULL,
  `EmpMname` varchar(50) DEFAULT NULL,
  `EmpLname` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `EmpExt` varchar(50) DEFAULT NULL,
  `EmpCode` int(50) DEFAULT NULL,
  `ControlNo` varchar(50) DEFAULT NULL,
  `EmpPhoto` longtext,
  `EmpGender` varchar(20) DEFAULT NULL,
  `EmpAddress` varchar(50) DEFAULT NULL,
  `EmpJoingdate` date DEFAULT NULL,
  `EmpBrgy` varchar(50) DEFAULT NULL,
  `EmpSkills` varchar(50) DEFAULT NULL,
  `EmpStatus` varchar(50) DEFAULT NULL,
  `EmpBlood` varchar(50) DEFAULT NULL,
  `EmpBirth` date DEFAULT NULL,
  `EmpCity` varchar(50) DEFAULT NULL,
  `EmpProvince` varchar(50) DEFAULT NULL,
  `EmpContactNo` varchar(50) DEFAULT NULL,
  `EmpEmail` varchar(50) DEFAULT NULL,
  `EmpDesignation` varchar(50) DEFAULT NULL,
  `EmpDept` varchar(500) DEFAULT NULL,
  `DeptCharge` varchar(500) DEFAULT NULL,
  `EmpEligible` varchar(50) DEFAULT NULL,
  `EmpNoService` varchar(50) DEFAULT NULL,
  `PostingDate` datetime DEFAULT NULL,
  `E_Status` varchar(50) DEFAULT NULL,
  `Charges` varchar(100) DEFAULT NULL,
  `Category` varchar(50) DEFAULT NULL,
  `Remarks` varchar(500) DEFAULT NULL,
  `PlaceBirth` varchar(200) DEFAULT NULL,
  `EmpCitizen` varchar(100) DEFAULT NULL,
  `EmpChild1` varchar(500) DEFAULT NULL,
  `EmpChildB1` varchar(50) DEFAULT NULL,
  `EmpChild2` varchar(500) DEFAULT NULL,
  `EmpChildB2` varchar(50) DEFAULT NULL,
  `EmpChild3` varchar(500) DEFAULT NULL,
  `EmpChildB3` varchar(50) DEFAULT NULL,
  `EmpChild4` varchar(500) DEFAULT NULL,
  `EmpChildB4` varchar(50) DEFAULT NULL,
  `EmpChild5` varchar(500) DEFAULT NULL,
  `EmpChildB5` varchar(50) DEFAULT NULL,
  `EmpChild6` varchar(500) DEFAULT NULL,
  `EmpChildB6` varchar(50) DEFAULT NULL,
  `EmpChild7` varchar(500) DEFAULT NULL,
  `EmpChildB7` varchar(50) DEFAULT NULL,
  `EmpChild8` varchar(500) DEFAULT NULL,
  `EmpChildB8` varchar(50) DEFAULT NULL,
  `EmpChild9` varchar(500) DEFAULT NULL,
  `EmpChildB9` varchar(50) DEFAULT NULL,
  `EmpChild10` varchar(500) DEFAULT NULL,
  `EmpChildB10` varchar(50) DEFAULT NULL,
  `SpouseFn` varchar(200) DEFAULT NULL,
  `SpouseMn` varchar(200) DEFAULT NULL,
  `SpouseLn` varchar(200) DEFAULT NULL,
  `SpouseEn` varchar(50) DEFAULT NULL,
  `Others` varchar(100) DEFAULT NULL,
  `SpouseOcc` varchar(100) DEFAULT NULL,
  `Report` varchar(100) DEFAULT NULL,
  `user` varchar(200) DEFAULT NULL,
  `EndDate` varchar(50) DEFAULT NULL,
  `Note` varchar(2000) DEFAULT NULL,
  `EduAttainment` varchar(100) DEFAULT NULL,
  `ElementarySchool` varchar(300) DEFAULT NULL,
  `ElementaryYear` varchar(100) DEFAULT NULL,
  `ElementaryAward` varchar(300) DEFAULT NULL,
  `SecondarySchool` varchar(300) DEFAULT NULL,
  `SecondaryYear` varchar(100) DEFAULT NULL,
  `SchoolCollegeGra` varchar(300) DEFAULT NULL,
  `SecondaryAward` varchar(300) DEFAULT NULL,
  `YearPassingGra` varchar(100) DEFAULT NULL,
  `CourseGra` varchar(100) DEFAULT NULL,
  `CollegeAward` varchar(300) DEFAULT NULL,
  `Awards` varchar(100) DEFAULT NULL,
  `Vocational` varchar(300) DEFAULT NULL,
  `VocationalYear` varchar(100) DEFAULT NULL,
  `VocationalAward` varchar(300) DEFAULT NULL,
  `Graduate` varchar(300) DEFAULT NULL,
  `GraduateYear` varchar(100) DEFAULT NULL,
  `GraduateAward` varchar(300) DEFAULT NULL,
  `Employer1Name` varchar(500) DEFAULT NULL,
  `Employer2Name` varchar(300) DEFAULT NULL,
  `Employer3Name` varchar(300) DEFAULT NULL,
  `Employer1Designation` varchar(500) DEFAULT NULL,
  `Employer2Designation` varchar(300) DEFAULT NULL,
  `Employer3Designation` varchar(300) DEFAULT NULL,
  `Employer1CTC` varchar(300) DEFAULT NULL,
  `Employer2CTC` varchar(300) DEFAULT NULL,
  `Employer3CTC` varchar(300) DEFAULT NULL,
  `Employer1WorkDuration` varchar(300) DEFAULT NULL,
  `Employer2WorkDuration` varchar(300) DEFAULT NULL,
  `Employer3WorkDuration` varchar(300) DEFAULT NULL,
  `SssNo` varchar(300) DEFAULT NULL,
  `PagIbigNo` varchar(300) DEFAULT NULL,
  `CtcNo` varchar(300) DEFAULT NULL,
  `CtcDate` date DEFAULT NULL,
  `CtcAt` varchar(300) DEFAULT NULL,
  `AtmNo` varchar(300) DEFAULT NULL,
  `TinNo` varchar(300) DEFAULT NULL,
  `PhilNo` varchar(300) DEFAULT NULL,
  `Filenames` longtext,
  `Vamos` longtext,
  `Cedula` longtext,
  `LastJO` varchar(500) DEFAULT NULL,
  `JO` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `employeedetail` */

insert  into `employeedetail`(`ID`,`EmpFname`,`EmpMname`,`EmpLname`,`EmpExt`,`EmpCode`,`ControlNo`,`EmpPhoto`,`EmpGender`,`EmpAddress`,`EmpJoingdate`,`EmpBrgy`,`EmpSkills`,`EmpStatus`,`EmpBlood`,`EmpBirth`,`EmpCity`,`EmpProvince`,`EmpContactNo`,`EmpEmail`,`EmpDesignation`,`EmpDept`,`DeptCharge`,`EmpEligible`,`EmpNoService`,`PostingDate`,`E_Status`,`Charges`,`Category`,`Remarks`,`PlaceBirth`,`EmpCitizen`,`EmpChild1`,`EmpChildB1`,`EmpChild2`,`EmpChildB2`,`EmpChild3`,`EmpChildB3`,`EmpChild4`,`EmpChildB4`,`EmpChild5`,`EmpChildB5`,`EmpChild6`,`EmpChildB6`,`EmpChild7`,`EmpChildB7`,`EmpChild8`,`EmpChildB8`,`EmpChild9`,`EmpChildB9`,`EmpChild10`,`EmpChildB10`,`SpouseFn`,`SpouseMn`,`SpouseLn`,`SpouseEn`,`Others`,`SpouseOcc`,`Report`,`user`,`EndDate`,`Note`,`EduAttainment`,`ElementarySchool`,`ElementaryYear`,`ElementaryAward`,`SecondarySchool`,`SecondaryYear`,`SchoolCollegeGra`,`SecondaryAward`,`YearPassingGra`,`CourseGra`,`CollegeAward`,`Awards`,`Vocational`,`VocationalYear`,`VocationalAward`,`Graduate`,`GraduateYear`,`GraduateAward`,`Employer1Name`,`Employer2Name`,`Employer3Name`,`Employer1Designation`,`Employer2Designation`,`Employer3Designation`,`Employer1CTC`,`Employer2CTC`,`Employer3CTC`,`Employer1WorkDuration`,`Employer2WorkDuration`,`Employer3WorkDuration`,`SssNo`,`PagIbigNo`,`CtcNo`,`CtcDate`,`CtcAt`,`AtmNo`,`TinNo`,`PhilNo`,`Filenames`,`Vamos`,`Cedula`,`LastJO`,`JO`) values (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ITCSO624122db7e5da-2022-5'),(2,'Charity','Peque','Madrid','SR.',2,'','','Male','ALGER','2021-07-29','Rizal','-','Single',NULL,'2022-01-27','SAN CARLOS CITY','NEGROS OCCIDENTAL','9319094917','darksmith04042020@gmail.com','JOB ORDER','Information Technology and Computer Services Office','Information Technology and Computer Services Office','-','0',NULL,'Active','Other General Services','Non-rotating','-','SAN CARLOS CITY, NEGROS OCCIDENTAL','FILIPINO','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'1','',NULL,NULL,'','','','','','','','',NULL,'',NULL,'','','','','','','','','','','','','','','','','','','','','','1970-01-01','','','','',NULL,NULL,NULL,NULL,'ITCSO624cfd87b84fc-2022-3'),(3,'BRIDGET','MADRID','DARAGOSA','JR.',3,'','','Female','CANLAON','1970-01-01','Palampas','-','Single',NULL,'1992-02-26','SAN CARLOS CITY','NEGROS OCCIDENTAL','--','-','EMERGENCY RESCUE TEAM','Office of the City Mayor','All','-','52',NULL,'Active','Other General Services','Rotating','-','Municipality of Calatrava','FILIPINO','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'1','',NULL,NULL,'','','','','','','','',NULL,'',NULL,'','','','','','','','','','','','','','','','','','','','','','1970-01-01','','','','',NULL,NULL,NULL,NULL,'ITCSO624cfd87b84fc-2022-3'),(4,'ANNAJESSA','MADRID','PEQUE','',4,'','','Female','FATIMA VILLAGE','2022-01-19','Palampas','-','Single',NULL,'1992-02-26','SAN CARLOS CITY','NEGROS OCCIDENTAL','-','-','JOB ORDER','Information Technology and Computer Services Office','Information Technology and Computer Services Office','-','0',NULL,'Active','Other General Services','Rotating','-','SAN CARLOS CITY, NEGROS OCCIDENTAL','FILIPINO','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'1','',NULL,NULL,'','','','','','','','',NULL,'',NULL,'','','','','','','','','','','','','','','','','','','','','','1970-01-01','','','','',NULL,NULL,NULL,NULL,'ITCSO624d243ea6d60-2022-4'),(5,'JOHN RHEY','RUBIS','MARTINEZ','',5,'','','Male','DOS HERMANOS ST.','2021-07-29','3','-','Married',NULL,'2021-12-27','SAN CARLOS CITY','NEG. OCC.','-','-','LABORER','City Engineering Office','Information Technology and Computer Services Office','-','0',NULL,'Active','Other Project','Non-rotating','-','CEBU CITY','FILIPINO','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,'1','',NULL,NULL,'','','','','','','','',NULL,'',NULL,'','','','','','','','','','','','','','','','','','','','','','1970-01-01','','','','',NULL,NULL,NULL,NULL,'ITCSO62346580b3fc9-2022-2'),(6,'MARY','PeÃ‘aflor','PeÃ‘aflor','',6,'','','Male','SAN JUAN BAY-BAY ST.','2021-07-29','6','N/A','Single',NULL,'1987-01-04','SAN CARLOS CITY','NEGROS OCCIDENTAL','9319094917','darksmith04042020@gmail.com','JOB ORDER','Information Technology and Computer Services Office','Information Technology and Computer Services Office','N/A','0',NULL,'Active','Other Project','Non-rotating','-','SAN CARLOS CITY, NEGROS OCCIDENTAL','FILIPINO','N/A','','','','','','','','','','','','','','','','','','','','N/A','N/A','N/A','','','N/A',NULL,'5','',NULL,NULL,'CONG. VICENTE GUSTILO SR. MEM. SCHOOL','1990-1994','','JULIO LEDESMA NATIONAL HIGHSCHOOL','1994-1998','CENTRAL NEGROS COLLEGE','','1998-2002',NULL,'',NULL,'','','','','','','N/A','','','N/A','','','N/A','','','N/A','','','N/A','N/A','16646621','2021-01-07','SAN CARLOS CITY','N/A','N/A','N/A',NULL,NULL,NULL,NULL,'ITCSO6241633e3db55-2022-6');

/*Table structure for table `jo_details` */

DROP TABLE IF EXISTS `jo_details`;

CREATE TABLE `jo_details` (
  `objid` int(11) NOT NULL AUTO_INCREMENT,
  `JobOrderNo` varchar(50) NOT NULL,
  `PayrollNo` varchar(50) DEFAULT NULL,
  `Laborers` varchar(50) DEFAULT NULL,
  `Amount` decimal(10,2) DEFAULT NULL,
  `PrevBal` decimal(10,2) DEFAULT NULL,
  `Balance` decimal(10,2) DEFAULT NULL,
  `DateJo` varchar(50) DEFAULT NULL,
  `Charge` varchar(100) DEFAULT NULL,
  `Schedules` varchar(50) DEFAULT NULL,
  `Filenames` longtext,
  `ReportPeriod` varchar(50) DEFAULT NULL,
  `Department` varchar(100) DEFAULT NULL,
  `ProjectName` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`objid`,`JobOrderNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `jo_details` */

/*Table structure for table `joborder` */

DROP TABLE IF EXISTS `joborder`;

CREATE TABLE `joborder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `JobOrderNo` varchar(50) DEFAULT NULL,
  `Charges` varchar(50) DEFAULT NULL,
  `ProjectName` varchar(50) DEFAULT NULL,
  `ProjectBudget` decimal(10,2) DEFAULT NULL,
  `PreviousBalance` decimal(10,2) DEFAULT NULL,
  `Period1` varchar(50) DEFAULT NULL,
  `Period2` varchar(50) DEFAULT NULL,
  `Emp1` varchar(50) DEFAULT NULL,
  `Emp2` varchar(50) DEFAULT NULL,
  `Rate1` decimal(10,2) DEFAULT NULL,
  `Rate2` decimal(10,2) DEFAULT NULL,
  `Time1` varchar(50) DEFAULT NULL,
  `Time2` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `joborder` */

/*Table structure for table `no` */

DROP TABLE IF EXISTS `no`;

CREATE TABLE `no` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `SssNo` varchar(50) DEFAULT NULL,
  `PagIbigNo` varchar(50) DEFAULT NULL,
  `CtcNo` varchar(50) DEFAULT NULL,
  `CtcDate` date DEFAULT NULL,
  `CtcAt` varchar(50) DEFAULT NULL,
  `AtmNo` varchar(50) DEFAULT NULL,
  `TinNo` varchar(50) DEFAULT NULL,
  `PhilNo` varchar(50) DEFAULT NULL,
  `EmpCode` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `no` */

insert  into `no`(`ID`,`SssNo`,`PagIbigNo`,`CtcNo`,`CtcDate`,`CtcAt`,`AtmNo`,`TinNo`,`PhilNo`,`EmpCode`) values (1,'','','','1970-01-01','','','','','1'),(2,'07-1326380-4','121274562323','10661276','2021-01-07','SAN CARLOS CITY','0050-98037-856','747-975-614-000','11-254360417','2'),(3,'07-1326380-4','121274562323','10661276','2021-01-07','SAN CARLOS CITY','0050-8221-7858','N/A','N/A','3'),(4,'2','2','2','2021-01-08','SAN CARLOS CITY','2','2','2','4'),(5,'2','2','2','2022-01-09','2','2','2','2','5'),(6,'3','3','3','2022-01-14','3','3','3','3','6'),(7,'','','','1970-01-01','','','','','7'),(8,'','','','1970-01-01','','','','','8'),(9,'','','','1970-01-01','','','','','9'),(10,'','','','1970-01-01','','','','','10'),(11,'','','','1970-01-01','','','','','2'),(12,'','','','1970-01-01','','','','','3'),(13,'','','','1970-01-01','','','','','4'),(14,'','','','1970-01-01','','','','','5'),(15,'N/A','N/A','16646621','2021-01-07','SAN CARLOS CITY','N/A','N/A','N/A','6');

/*Table structure for table `pag_ibig` */

DROP TABLE IF EXISTS `pag_ibig`;

CREATE TABLE `pag_ibig` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PayrollNo` varchar(50) DEFAULT NULL,
  `Pag_ibig_amount` decimal(10,2) NOT NULL,
  `CoveredMonth` varchar(20) DEFAULT NULL,
  `EmpCode` varchar(10) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `year` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pag_ibig` */

/*Table structure for table `payroll` */

DROP TABLE IF EXISTS `payroll`;

CREATE TABLE `payroll` (
  `objid` int(11) NOT NULL AUTO_INCREMENT,
  `PayrollNo` varchar(50) DEFAULT NULL,
  `JobOrderNo` varchar(50) DEFAULT NULL,
  `PayAmount` decimal(10,2) DEFAULT NULL,
  `PosingDate` date DEFAULT NULL,
  `JoAmount` decimal(10,2) DEFAULT NULL,
  `AvailableBalance` decimal(10,2) DEFAULT NULL,
  `PreviousBalance` decimal(10,2) DEFAULT NULL,
  `Charges` varchar(50) DEFAULT NULL,
  `id_no` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `ReportPeriod` varchar(50) DEFAULT NULL,
  `Uniq` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `Department` varchar(100) DEFAULT NULL,
  `abbre` varchar(50) DEFAULT NULL,
  `id_num` int(11) DEFAULT NULL,
  PRIMARY KEY (`objid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `payroll` */

/*Table structure for table `payroll_add` */

DROP TABLE IF EXISTS `payroll_add`;

CREATE TABLE `payroll_add` (
  `objid` int(11) NOT NULL AUTO_INCREMENT,
  `PayrollNo` varchar(50) DEFAULT NULL,
  `PayAmount` decimal(10,2) DEFAULT NULL,
  `AvailableBalance` decimal(10,2) DEFAULT NULL,
  `JobOrderNo` varchar(50) DEFAULT NULL,
  `id_no` int(11) DEFAULT NULL,
  `id_num` int(11) DEFAULT NULL,
  PRIMARY KEY (`objid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `payroll_add` */

/*Table structure for table `pdf` */

DROP TABLE IF EXISTS `pdf`;

CREATE TABLE `pdf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `JobOrderNo` varchar(50) DEFAULT NULL,
  `Filenames` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `pdf` */

insert  into `pdf`(`id`,`JobOrderNo`,`Filenames`) values (1,'ITCSO6202393c0fc0c-2022-2','../upload/612232750_198.pdf'),(2,'ITCSO621c3d2122e7e-2022-1','../upload/ACFrOgBjB9sSGZlKNfhRBuK8TlLM6rmiOEzrG2kdaGTIoaRFHgvjChAaosPL9GOgCT1pZacwDReocf9N0LlWQIFduMpfmRGfu5Qrtxz_kv52zwC1X5Un1qu94wEZZPY=.pdf');

/*Table structure for table `period` */

DROP TABLE IF EXISTS `period`;

CREATE TABLE `period` (
  `obj_id` int(11) NOT NULL AUTO_INCREMENT,
  `ID` varchar(50) DEFAULT NULL,
  `PeriodCovered1` varchar(50) DEFAULT NULL,
  `Period` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`obj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `period` */

/*Table structure for table `project` */

DROP TABLE IF EXISTS `project`;

CREATE TABLE `project` (
  `objid` int(11) NOT NULL AUTO_INCREMENT,
  `BudgetNo` varchar(50) DEFAULT NULL,
  `ProjectName` varchar(50) DEFAULT NULL,
  `ProjectBudget` decimal(10,2) DEFAULT NULL,
  `Actual` decimal(10,2) DEFAULT NULL,
  `Balance` decimal(10,2) DEFAULT NULL,
  `Charges` varchar(50) DEFAULT NULL,
  `Department` varchar(300) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `abbre` varchar(50) DEFAULT NULL,
  `year` varchar(20) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`objid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `project` */

insert  into `project`(`objid`,`BudgetNo`,`ProjectName`,`ProjectBudget`,`Actual`,`Balance`,`Charges`,`Department`,`code`,`abbre`,`year`,`status`) values (1,'2022-02-1','Other General Services','109500.00','110000.00','96100.00','5-02-12-990','Information Technology and Computer Services Office','0005','ITCSO','2022','Open'),(2,'2022-02-2','Other Project','200000.00','200000.00','194000.00','2-22-22-22','Information Technology and Computer Services Office','0005','ITCSO','2022','Open'),(3,'2022-03-3','Other General Services','300000.00','300000.00','300000.00','5-02-12-990','Office of the City Mayor','0001','CMO','2022','Open'),(5,'2022-03-4','Other General Services','300000.00','300000.00','299500.00','5-02-12-990','City Budget and Management Office','0035','CBMO','2022','Open'),(6,'2022-03-5','Project Base','100000.00','100000.00','100000.00','33-333-333','City Budget and Management Office','0035','CBMO','2022','Open');

/*Table structure for table `rate` */

DROP TABLE IF EXISTS `rate`;

CREATE TABLE `rate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Salary` decimal(10,2) DEFAULT NULL,
  `id_no` varchar(100) DEFAULT NULL,
  `user` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `rate` */

insert  into `rate`(`id`,`Salary`,`id_no`,`user`) values (1,'300.00',NULL,NULL),(2,'400.00',NULL,NULL),(3,'500.00',NULL,NULL),(4,'400.00','','1'),(5,'1000.00','4','1'),(6,'2000.00','4','1');

/*Table structure for table `recommendation` */

DROP TABLE IF EXISTS `recommendation`;

CREATE TABLE `recommendation` (
  `objid` int(11) NOT NULL AUTO_INCREMENT,
  `Filenames` longtext,
  `ID` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`objid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `recommendation` */

insert  into `recommendation`(`objid`,`Filenames`,`ID`) values (1,'../upload/612488097_193.pdf','8'),(2,'../upload/612232750_198.pdf','8'),(3,'../upload/611196890_217.pdf','8');

/*Table structure for table `schedule` */

DROP TABLE IF EXISTS `schedule`;

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `JobOrderNo` varchar(50) NOT NULL,
  `PayrollNo` varchar(50) DEFAULT NULL,
  `EmpPhoto` longtext,
  `FName` varchar(50) DEFAULT NULL,
  `Schedule` varchar(300) DEFAULT NULL,
  `Rate` decimal(10,2) DEFAULT NULL,
  `RegDays` varchar(100) DEFAULT NULL,
  `RegDays2` varchar(100) DEFAULT NULL,
  `Years` int(10) DEFAULT NULL,
  `Period` varchar(500) DEFAULT NULL,
  `Time1` varchar(100) DEFAULT NULL,
  `Time1_am_out` varchar(100) DEFAULT NULL,
  `Time1_pm_in` varchar(100) DEFAULT NULL,
  `Time1_pm_out` varchar(100) DEFAULT NULL,
  `EmpCode` varchar(50) DEFAULT NULL,
  `MName` varchar(50) DEFAULT NULL,
  `LName` varchar(50) DEFAULT NULL,
  `EName` varchar(50) DEFAULT NULL,
  `no` varchar(50) DEFAULT NULL,
  `noLaborers` varchar(50) DEFAULT NULL,
  `Month1` varchar(50) DEFAULT NULL,
  `Days1` varchar(50) DEFAULT NULL,
  `Time2` varchar(100) DEFAULT NULL,
  `Time2_am_out` varchar(100) DEFAULT NULL,
  `Time2_pm_in` varchar(100) DEFAULT NULL,
  `Time2_pm_out` varchar(100) DEFAULT NULL,
  `Rate1` decimal(10,2) DEFAULT NULL,
  `Month2` varchar(50) DEFAULT NULL,
  `Days2` varchar(50) DEFAULT NULL,
  `Time3` varchar(100) DEFAULT NULL,
  `Time3_am_out` varchar(100) DEFAULT NULL,
  `Time3_pm_in` varchar(100) DEFAULT NULL,
  `Time3_pm_out` varchar(100) DEFAULT NULL,
  `Rate2` decimal(10,2) DEFAULT NULL,
  `NoDays` float DEFAULT NULL,
  `Day1` varchar(10) DEFAULT NULL,
  `Day2` varchar(10) DEFAULT NULL,
  `Day3` varchar(10) DEFAULT NULL,
  `TotalAmount` decimal(10,2) DEFAULT NULL,
  `id_no` int(11) DEFAULT NULL,
  `sss` decimal(10,2) DEFAULT NULL,
  `pagIbig` decimal(10,2) DEFAULT NULL,
  `Schedule1` varchar(50) DEFAULT NULL,
  `Schedule2` varchar(50) DEFAULT NULL,
  `Amount` decimal(10,2) DEFAULT NULL,
  `objid_pro` varchar(50) DEFAULT NULL,
  `PrjAmount` decimal(10,2) DEFAULT NULL,
  `Uniq` varchar(100) DEFAULT NULL,
  `OldAmount` decimal(10,2) DEFAULT NULL,
  `OldPrjAmount` decimal(10,2) DEFAULT NULL,
  `Department` varchar(100) DEFAULT NULL,
  `Charges` varchar(100) DEFAULT NULL,
  `ID_sched` int(11) DEFAULT NULL,
  `abbre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`,`JobOrderNo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `schedule` */

insert  into `schedule`(`id`,`JobOrderNo`,`PayrollNo`,`EmpPhoto`,`FName`,`Schedule`,`Rate`,`RegDays`,`RegDays2`,`Years`,`Period`,`Time1`,`Time1_am_out`,`Time1_pm_in`,`Time1_pm_out`,`EmpCode`,`MName`,`LName`,`EName`,`no`,`noLaborers`,`Month1`,`Days1`,`Time2`,`Time2_am_out`,`Time2_pm_in`,`Time2_pm_out`,`Rate1`,`Month2`,`Days2`,`Time3`,`Time3_am_out`,`Time3_pm_in`,`Time3_pm_out`,`Rate2`,`NoDays`,`Day1`,`Day2`,`Day3`,`TotalAmount`,`id_no`,`sss`,`pagIbig`,`Schedule1`,`Schedule2`,`Amount`,`objid_pro`,`PrjAmount`,`Uniq`,`OldAmount`,`OldPrjAmount`,`Department`,`Charges`,`ID_sched`,`abbre`) values (1,'ITCSO624c284b6c2d5-2022-2',NULL,'','ANNAJESSA','Monday-Friday w/ Holidays','300.00','1',NULL,2022,'January','8:00AM - 4:00PM ',NULL,NULL,NULL,'','MADRID','PEQUE','','1',NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,'15','0','0','4500.00',2,NULL,NULL,NULL,NULL,NULL,'1',NULL,'ITCSO624c285dea9db',NULL,NULL,'Information Technology and Computer Services Office',NULL,4,'ITCSO'),(2,'ITCSO624c284b6c2d5-2022-2',NULL,'','Charity','Monday-Friday w/ Holidays','300.00','1',NULL,2022,'January','4:00PM - 12:00AM',NULL,NULL,NULL,'','Peque','Madrid','SR.','2',NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,'15','0','0','4500.00',2,NULL,NULL,NULL,NULL,NULL,'1',NULL,'ITCSO624c285dea9db',NULL,NULL,'Information Technology and Computer Services Office',NULL,2,'ITCSO'),(3,'ITCSO624c284b6c2d5-2022-2',NULL,'','BRIDGET','Monday-Saturday','300.00','2','15',2022,'January','8:00AM-12:PM/1:00PM-5:00PM',NULL,NULL,NULL,'','MADRID','DARAGOSA','JR.','3',NULL,'','','00:00',NULL,NULL,NULL,'0.00','','','00:00',NULL,NULL,NULL,'0.00',NULL,'10','0','0','3300.00',2,NULL,NULL,'','',NULL,'1',NULL,'ITCSO624c285dea9db',NULL,NULL,'Information Technology and Computer Services Office',NULL,3,'ITCSO'),(4,'ITCSO624cfd87b84fc-2022-3',NULL,'','BRIDGET','Monday-Sunday','300.00','11','15',2022,'January','8:00AM - 4:00PM ',NULL,NULL,NULL,'','MADRID','DARAGOSA','JR.','1','2','','','00:00',NULL,NULL,NULL,'0.00','','','00:00',NULL,NULL,NULL,'0.00',NULL,'5','0','0','4500.00',3,NULL,NULL,'','','10100.00','1','99400.00','ITCSO624cfdb1b26db',NULL,NULL,'Information Technology and Computer Services Office','5-02-12-990',3,'ITCSO'),(5,'ITCSO624cfd87b84fc-2022-3',NULL,'','Charity','Monday-Friday w/ Holidays','400.00','2','15',2022,'January','8:00AM - 4:00PM ',NULL,NULL,NULL,'','Peque','Madrid','SR.','2','2',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,'14','0','0','5600.00',3,NULL,NULL,NULL,NULL,'10100.00','1','99400.00','ITCSO624cfdb1b26db',NULL,NULL,'Information Technology and Computer Services Office','5-02-12-990',2,'ITCSO'),(6,'ITCSO624d243ea6d60-2022-4',NULL,'','ANNAJESSA','Monday-Friday','300.00','1','',2022,'January','8:00AM-12:PM/1:00PM-5:00PM',NULL,NULL,NULL,'','MADRID','PEQUE','','1','1','','','00:00',NULL,NULL,NULL,'0.00','','','00:00',NULL,NULL,NULL,'0.00',NULL,'11','0','0','3300.00',4,NULL,NULL,'','','3300.00','1','96100.00','ITCSO624d24466ec14',NULL,NULL,'Information Technology and Computer Services Office','5-02-12-990',4,'ITCSO');

/*Table structure for table `sequence` */

DROP TABLE IF EXISTS `sequence`;

CREATE TABLE `sequence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `sequence` */

insert  into `sequence`(`id`,`number`) values (1,'1'),(2,'2'),(3,'3'),(4,'4'),(5,'5'),(6,'6'),(7,'7'),(8,'8'),(9,'9'),(10,'10');

/*Table structure for table `sss` */

DROP TABLE IF EXISTS `sss`;

CREATE TABLE `sss` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PayrollNo` varchar(50) DEFAULT NULL,
  `sss_amount` decimal(10,2) NOT NULL,
  `CoveredMonth` varchar(50) NOT NULL,
  `EmpCode` varchar(50) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `year` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sss` */

/*Table structure for table `table_events` */

DROP TABLE IF EXISTS `table_events`;

CREATE TABLE `table_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `start_event` datetime DEFAULT NULL,
  `end_event` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `table_events` */

/*Table structure for table `tbl_info` */

DROP TABLE IF EXISTS `tbl_info`;

CREATE TABLE `tbl_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_info` */

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `ext_name` varchar(50) DEFAULT NULL,
  `contact_no` varchar(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `userpass` varchar(100) NOT NULL,
  `account_type` int(11) NOT NULL,
  `location` longtext,
  `Department` varchar(100) NOT NULL,
  `userStatus` varchar(50) DEFAULT NULL,
  `ProjectName` varchar(100) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `abbre` varchar(50) DEFAULT NULL,
  `Charges` varchar(100) DEFAULT NULL,
  `PrintDept` varchar(500) DEFAULT NULL,
  `JO` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`user_id`,`first_name`,`middle_name`,`last_name`,`ext_name`,`contact_no`,`position`,`email`,`username`,`userpass`,`account_type`,`location`,`Department`,`userStatus`,`ProjectName`,`code`,`abbre`,`Charges`,`PrintDept`,`JO`) values (1,'Charity','Peque','Madrid','','09175598230','Computer Operator I','madridcharity@gmail.com','cha','$2y$10$3FDVb6jTa.C/TWBVjQW7IOD4D9bMIp7TZQVyO0OjoyDF.J08yNadi',3,'chacha1.jpg','Information Technology and Computer Services Office','Active','Other General Services','0005','ITCSO','5-02-12-990','All','ITCSO624d2e2977546-2022-5'),(2,'GEORDAN ','MIRANDA','ILUSTRE','','09665030625','JOB ORDER','geeaimiranda751@gmail.com','geeai','$2y$10$Apm5.3gukDBoq73z.Rh5.uFCxdYQNecyhYgctqQJdwFIFZJxFkrXK',1,'geeai.jpg','Office of the City Mayor','Active',NULL,'0001','CMO',NULL,NULL,NULL),(3,'Janissa','Anis','Reducto','','09506887776','JOB ORDER','justaninreducto20@gmail.com','anin','$2y$10$3B07QxPELqyozRmKeMJhtuONcBnnfoCjeEeqt6E2IASULR/R56x02',1,'','Information Techonology and Computer Services Office','Active',NULL,'0005','ITCSO',NULL,NULL,NULL),(4,'Cha','Peq','Mad','','09101455619','Computer Operator I','bridgemae_09@yahoo.com','charity','$2y$10$YvOdsRNchX9sz1jI3p3EnOl9htN1O8ul.NSu32EvROaFvTRUw97IW',3,'Acer_Wallpaper_03_5000x2813.jpg','Office of the City Mayor','Active','Other General Services','0001','CMO','5-02-12-990',NULL,'CMO6226ab788397d-2022-1'),(5,'JR','RUB','MAR','','09319094917','Computer Operator I','darksmith04042020@gmail.com','JOHN','$2y$10$7hzlJAUCmKtLx0rSE7lalu7rztLAhtsFW3hvBQP/YpXlfMDAJMKFi',3,'','City Budget and Management Office','Active','Other General Services','0035','CBMO','5-02-12-990',NULL,'CBMO6225c2a959471-2022-1');

/*Table structure for table `timer` */

DROP TABLE IF EXISTS `timer`;

CREATE TABLE `timer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `TimeSched` varchar(100) DEFAULT NULL,
  `id_no` varchar(100) DEFAULT NULL,
  `user` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `timer` */

insert  into `timer`(`id`,`TimeSched`,`id_no`,`user`) values (1,'8:00AM - 4:00PM ','3','1'),(2,'4:00PM - 12:00AM','3','1'),(3,'8:00AM-12:PM/1:00PM-5:00PM','4','1');

/*Table structure for table `timers` */

DROP TABLE IF EXISTS `timers`;

CREATE TABLE `timers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `TimeSched` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

/*Data for the table `timers` */

insert  into `timers`(`id`,`TimeSched`) values (1,'12:00 AM'),(2,'12:30 AM'),(3,'1:00 AM'),(4,'1:30 AM'),(5,'2:00 AM'),(7,'2:30 AM'),(8,'3:00 AM'),(9,'3:30 AM'),(10,'4:00 AM'),(11,'4:30 AM'),(12,'5:00 AM'),(13,'5:30 AM'),(14,'6:00 AM'),(15,'6:30 AM'),(16,'7:00 AM'),(17,'7:30 AM'),(18,'8:00 AM'),(19,'8:30 AM'),(20,'9:00 AM'),(21,'9:30 AM'),(22,'10:00 AM'),(23,'10:30 AM'),(24,'11:00 AM'),(25,'11:30 AM'),(26,'12:00 PM'),(27,'1:00 PM'),(28,'1:30 PM'),(29,'2:00 PM'),(30,'2:30 PM'),(31,'3:00 PM'),(32,'3:30 PM'),(33,'4:00 PM'),(34,'4:30 PM'),(35,'5:00 PM'),(36,'5:30 PM'),(37,'6:00 PM'),(38,'6:30 PM'),(39,'7:00 PM'),(40,'7:30 PM'),(41,'8:00 PM'),(42,'8:30 PM'),(43,'9:00 PM'),(44,'9:30 PM'),(45,'10:00 PM'),(46,'10:30 PM'),(47,'11:00 PM'),(48,'11:30 PM');

/*Table structure for table `vamos` */

DROP TABLE IF EXISTS `vamos`;

CREATE TABLE `vamos` (
  `objid` int(11) NOT NULL AUTO_INCREMENT,
  `Filenames` longtext,
  `ID` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`objid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `vamos` */

insert  into `vamos`(`objid`,`Filenames`,`ID`) values (1,NULL,'8'),(2,NULL,'8'),(3,'../dist/vamos612537361_192.pdf','8'),(4,'../dist/vamos/San Carlos City (1).pdf','8');

/*Table structure for table `year` */

DROP TABLE IF EXISTS `year`;

CREATE TABLE `year` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `year` */

insert  into `year`(`id`,`year`) values (1,'2021'),(2,'2020'),(3,'2019'),(4,'2018'),(5,'2017'),(6,'2016'),(7,'2015'),(8,'2014'),(9,'2013'),(10,'2012'),(11,'2011'),(12,'2010');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
