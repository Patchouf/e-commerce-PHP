-- MySQL dump 10.16  Distrib 10.1.48-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: db
-- ------------------------------------------------------
-- Server version	10.1.48-MariaDB-0+deb9u2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Address`
--

DROP TABLE IF EXISTS `Address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Address` (
  `Id` tinyint(4) DEFAULT NULL,
  `Street` varchar(32) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `CP` mediumint(9) DEFAULT NULL,
  `State` varchar(14) DEFAULT NULL,
  `Country` varchar(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Address`
--

LOCK TABLES `Address` WRITE;
/*!40000 ALTER TABLE `Address` DISABLE KEYS */;
INSERT INTO `Address` VALUES (0,'160 Adam Locks Suite 350','Davisbury',2700,'Louisiana','Lao People\'s Democratic Republic'),(1,'431 Davis Green Apt. 047','Morenoton',2939,'Iowa','Dominican Republic'),(2,'8826 Curry Common Suite 359','Lake Audrey',9265,'Wisconsin','Myanmar'),(3,'378 Chad Run Suite 092','Seanburgh',7378,'Arizona','Nicaragua'),(4,'8384 Cherry Oval Apt. 006','Port Wendy',9845,'Hawaii','Switzerland'),(5,'706 Michael Locks','East Johnnyshire',2760,'New York','Guyana'),(6,'72361 Heath Estate Apt. 422','Lake Andrewbury',8301,'Washington','Finland'),(7,'20536 Mcdowell Burgs','Johnstad',1128,'California','Eritrea'),(8,'245 April Bridge','South Kyleton',4022,'North Carolina','Indonesia'),(9,'2926 Hall Hill','Jenkinshaven',4167,'Missouri','Dominican Republic'),(10,'04783 Snyder Village Apt. 236','Bautistaton',8307,'Louisiana','Venezuela'),(11,'0969 Charles Plains Suite 415','Katrinabury',7206,'Mississippi','Czech Republic'),(12,'5308 Michael Heights Suite 200','Kennethville',6056,'Maine','Bhutan'),(13,'515 Shelton Bridge','East Leviside',1718,'Alaska','Namibia'),(14,'800 Garcia Mount','Erikchester',746,'Colorado','Luxembourg'),(15,'187 Christy Stream Suite 912','North James',8715,'Nebraska','Cayman Islands'),(16,'6269 Krystal Ranch','Millerberg',7442,'Maryland','Guyana'),(17,'6881 Baker Union','Joshuaside',4977,'New Jersey','United States Minor Outlying Islands'),(18,'469 Meyer Plain Suite 289','Lake Susan',8672,'Arizona','Denmark'),(19,'4885 Victor Roads','New Isaacfurt',8168,'Louisiana','Anguilla'),(20,'96540 Russell Crest','Ginaberg',9246,'Indiana','Belize'),(21,'8455 Danielle Gateway Suite 630','Duncanport',9616,'Utah','Guadeloupe'),(22,'048 Teresa Plains','Castilloborough',1582,'Nevada','Ecuador'),(23,'17698 Joel Forks Apt. 061','Port Michaelside',7980,'Alabama','Jersey'),(24,'9059 Stacey Forges Apt. 943','Christinestad',309,'California','Lesotho'),(25,'0616 Emily Motorway','New Christian',5720,'New Jersey','Spain'),(26,'3067 Martinez Drive Apt. 267','Jasonstad',761,'Kentucky','Nauru'),(27,'953 Mcdonald Square','Brookstown',7095,'Tennessee','Comoros'),(28,'70282 Wesley Junctions Suite 308','West Terrifort',7216,'Nebraska','Northern Mariana Islands'),(29,'228 Wesley Dam Suite 438','Port Jennifer',4189,'Arkansas','Germany'),(30,'5394 Potter Ridges','Lawsonbury',6493,'California','Puerto Rico'),(31,'35771 Denise Expressway Apt. 283','Jeanchester',953,'Michigan','Anguilla'),(32,'820 Stewart Locks Apt. 124','West Luiston',3016,'Massachusetts','Turkmenistan'),(33,'9445 Tammy Rue Suite 029','West Thomasport',654,'Maine','Oman'),(34,'19751 Harris Station Suite 709','Lake Kennethville',3041,'Vermont','Oman'),(35,'150 Sean Gateway Suite 870','West Robert',5135,'Arizona','Czech Republic'),(36,'364 Foster Groves','Lake Justin',4713,'Rhode Island','Azerbaijan'),(37,'739 Anderson Groves','Contreraston',3897,'Tennessee','Western Sahara'),(38,'967 Thomas Passage Suite 592','Port Daniel',9499,'Utah','Slovenia'),(39,'13964 William Springs Suite 499','South Katelyn',4173,'Missouri','United States Virgin Islands'),(40,'618 Phillip Spur Suite 136','Hubershire',9855,'Delaware','Lithuania'),(41,'916 Chad Ports','West Austinview',3167,'Florida','Palestinian Territory'),(42,'3169 Jerome Motorway Suite 429','Jimenezland',3228,'Delaware','Benin'),(43,'622 Christopher Plains Suite 374','Wilcoxstad',5674,'Nevada','Costa Rica'),(44,'6574 Rodriguez Drives','Bakerburgh',4771,'Nevada','Palestinian Territory'),(45,'0835 Duncan Port Apt. 077','Brownside',7565,'Utah','San Marino'),(46,'3448 Anthony Grove','Ibarraview',6307,'North Dakota','Panama'),(47,'0900 Angela Ville Suite 346','Kimbury',3657,'Virginia','Korea'),(48,'853 David Village','Thomastown',4330,'Iowa','Cambodia'),(49,'165 Christopher Walk Suite 721','West Wendyhaven',377,'Indiana','Russian Federation'),(50,'0532 Michelle Crossing','South Ronaldshire',9009,'Pennsylvania','Cayman Islands'),(51,'765 Jason Oval','Terrellland',986,'Virginia','Liechtenstein'),(52,'829 Alan Drive','New Stevenfort',4666,'New Jersey','El Salvador'),(53,'2856 Mark Field Suite 692','Brownside',703,'North Carolina','Cambodia'),(54,'11442 Terrell Orchard Apt. 582','Alexanderchester',7065,'Maryland','Turks and Caicos Islands'),(55,'32178 Garcia Crest','South Charleschester',1748,'Arkansas','Heard Island and McDonald Islands'),(56,'','',2,'',''),(57,'69 Rue TKT','Nanterre',92250,'Hauts-de-Seine','France');
/*!40000 ALTER TABLE `Address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Auth`
--

DROP TABLE IF EXISTS `Auth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Auth` (
  `Id` tinyint(4) DEFAULT NULL,
  `Token` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Auth`
--

LOCK TABLES `Auth` WRITE;
/*!40000 ALTER TABLE `Auth` DISABLE KEYS */;
INSERT INTO `Auth` VALUES (56,'9A47FA62EE45CC8363E42A5F39E4E2B2C9414072'),(57,'8D32267B6B4884CF35ADEACCDE2B6857AE11AACE');
/*!40000 ALTER TABLE `Auth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Cart`
--

DROP TABLE IF EXISTS `Cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Cart` (
  `Id` tinyint(4) DEFAULT NULL,
  `Items` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Cart`
--

LOCK TABLES `Cart` WRITE;
/*!40000 ALTER TABLE `Cart` DISABLE KEYS */;
INSERT INTO `Cart` VALUES (0,'37'),(0,'15'),(0,'8'),(1,'3'),(1,'10'),(2,'52'),(2,'51'),(3,'12'),(3,'24'),(3,'44'),(3,'25'),(3,'22'),(4,'38'),(5,'40'),(5,'27'),(5,'44'),(7,'4'),(7,'39'),(7,'25'),(8,'4'),(8,'53'),(8,'23'),(8,'52'),(9,'13'),(9,'6'),(9,'15'),(10,'3'),(10,'50'),(10,'8'),(10,'3'),(12,'25'),(13,'43'),(13,'7'),(13,'43'),(13,'55'),(13,'25'),(14,'34'),(14,'19'),(14,'40'),(15,'7'),(15,'34'),(15,'27'),(15,'28'),(16,'37'),(16,'38'),(17,'42'),(18,'48'),(18,'50'),(19,'26'),(21,'39'),(21,'48'),(21,'19'),(21,'15'),(22,'53'),(22,'22'),(22,'25'),(22,'0'),(22,'39'),(23,'24'),(23,'31'),(23,'10'),(23,'40'),(24,'32'),(24,'14'),(24,'25'),(24,'49'),(24,'53'),(25,'43'),(25,'1'),(25,'41'),(25,'44'),(27,'8'),(28,'45'),(29,'27'),(29,'7'),(29,'7'),(29,'56'),(29,'25'),(30,'51'),(31,'28'),(31,'15'),(31,'34'),(31,'53'),(32,'30'),(32,'18'),(32,'24'),(32,'20'),(32,'49'),(33,'28'),(33,'55'),(34,'21'),(34,'18'),(34,'26'),(34,'0'),(35,'48'),(36,'48'),(36,'45'),(36,'26'),(36,'0'),(37,'19');
/*!40000 ALTER TABLE `Cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Category`
--

DROP TABLE IF EXISTS `Category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Category` (
  `Id` tinyint(4) DEFAULT NULL,
  `Name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Category`
--

LOCK TABLES `Category` WRITE;
/*!40000 ALTER TABLE `Category` DISABLE KEYS */;
INSERT INTO `Category` VALUES (0,'Careers information officer'),(1,'Operational researcher'),(2,'Applications developer'),(3,'Amenity horticulturist'),(4,'Child psychotherapist'),(5,'Pathologist'),(6,'Associate Professor'),(7,'Mudlogger'),(8,'Building control surveyor'),(9,'Designer, television/film set'),(10,'Chartered accountant'),(11,'Medical secretary'),(12,'Designer, industrial/product'),(13,'Consulting civil engineer'),(14,'Chemical engineer'),(15,'Chief Operating Officer'),(16,'Nature conservation officer'),(17,'Art therapist'),(18,'Financial manager'),(19,'Engineer, technical sales'),(20,'Site engineer'),(21,'Programmer, systems'),(22,'Designer, multimedia'),(23,'Fine artist'),(24,'Warehouse manager'),(25,'Museum education officer'),(26,'Optician, dispensing'),(27,'Psychotherapist, child'),(28,'Sports administrator'),(29,'Clinical cytogeneticist'),(30,'Scientist, physiological'),(31,'Chartered loss adjuster'),(32,'Legal secretary'),(33,'Wellsite geologist'),(34,'Engineer, control and instrumentation'),(35,'Chartered legal executive (England and Wales)'),(36,'Video editor'),(37,'Teacher, music'),(38,'Accounting technician'),(39,'Conservator, furniture'),(40,'Armed forces technical officer'),(41,'Radio broadcast assistant'),(42,'Environmental education officer'),(43,'Furniture conservator/restorer'),(44,'Printmaker'),(45,'Medical secretary'),(46,'Engineer, structural'),(47,'Financial manager'),(48,'Chiropodist'),(49,'Therapist, occupational'),(50,'Illustrator'),(51,'Newspaper journalist'),(52,'Special effects artist'),(53,'Product/process development scientist'),(54,'Site engineer'),(55,'Herpetologist');
/*!40000 ALTER TABLE `Category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Command`
--

DROP TABLE IF EXISTS `Command`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Command` (
  `Id` tinyint(4) DEFAULT NULL,
  `Items` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Command`
--

LOCK TABLES `Command` WRITE;
/*!40000 ALTER TABLE `Command` DISABLE KEYS */;
INSERT INTO `Command` VALUES (0,16),(2,11),(2,5),(3,46),(3,7),(3,7),(3,36),(3,44),(4,15),(5,56),(5,39),(5,47),(6,25),(7,11),(7,11),(7,55),(7,3),(7,7),(8,51),(8,28),(8,42),(8,10),(9,40),(9,32),(9,1),(9,42),(9,34),(10,40),(10,14),(10,50),(10,15),(10,37),(11,14),(11,34),(11,14),(11,14),(12,7),(12,15),(12,6),(12,27),(13,31),(13,15),(13,26),(13,24),(14,40),(14,18),(15,28),(15,52),(15,30),(15,16),(15,33),(16,10),(17,55),(17,36),(19,28),(19,9),(20,44),(21,38),(22,5),(22,14),(22,45),(22,38),(22,47),(23,37),(23,17),(23,53),(24,33),(24,53),(25,44),(26,42),(26,1),(27,44),(27,1),(27,39),(28,21),(28,36),(28,25),(28,13),(28,23),(30,47),(30,11),(30,53),(30,46),(31,40),(32,10),(32,26),(32,8),(32,16),(33,6),(34,21),(35,18),(35,21),(35,49),(35,31),(36,6),(36,15),(36,46),(36,14),(36,6),(37,15);
/*!40000 ALTER TABLE `Command` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Commands`
--

DROP TABLE IF EXISTS `Commands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Commands` (
  `Id` tinyint(4) DEFAULT NULL,
  `Command` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Commands`
--

LOCK TABLES `Commands` WRITE;
/*!40000 ALTER TABLE `Commands` DISABLE KEYS */;
INSERT INTO `Commands` VALUES (0,'0'),(1,'1'),(2,'2'),(3,'3'),(4,'4'),(5,'5'),(6,'6'),(7,'7'),(8,'8'),(9,'9'),(10,'10'),(11,'11'),(12,'12'),(13,'13'),(14,'14'),(15,'15'),(16,'16'),(17,'17'),(18,'18'),(19,'19'),(20,'20'),(21,'21'),(22,'22'),(23,'23'),(24,'24'),(25,'25'),(26,'26'),(27,'27'),(28,'28'),(29,'29'),(30,'30'),(31,'31'),(32,'32'),(33,'33'),(34,'34'),(35,'35'),(36,'36'),(37,'37'),(38,'38'),(39,'39'),(40,'40'),(41,'41'),(42,'42'),(43,'43'),(44,'44'),(45,'45'),(46,'46'),(47,'47'),(48,'48'),(49,'49'),(50,'50'),(51,'51'),(52,'52'),(53,'53'),(54,'54'),(55,'55'),(56,''),(57,'');
/*!40000 ALTER TABLE `Commands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Comment`
--

DROP TABLE IF EXISTS `Comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Comment` (
  `Id` smallint(6) DEFAULT NULL,
  `Comment` varchar(199) DEFAULT NULL,
  `User` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Comment`
--

LOCK TABLES `Comment` WRITE;
/*!40000 ALTER TABLE `Comment` DISABLE KEYS */;
INSERT INTO `Comment` VALUES (0,'Police recognize recent evidence protect. Morning choose mother fly finish south hear.\nRun letter investment arrive rise. Tv from attack section opportunity.',36),(1,'These newspaper trouble each around. Section production time place police of data. Decision dark teach pay.\nMilitary star skill. Hand line paper significant indeed minute. Something focus true.',43),(2,'Likely region gun wind explain hot them. Appear magazine it inside wear color. Later impact special hold bar interview.',23),(3,'Mrs none police hair million challenge difficult shake. Seven success instead page. Media hear so.\nDesign third it cultural investment story music. Quickly he as month system base within teacher.',42),(4,'Guess others school buy simple sing mission. To rest fish hair also.\nOfficer head economic now bed outside. Style once line those live professor smile. Upon food court resource watch also sound.',10),(5,'Nearly hand different theory night off. Piece myself voice culture set someone draw.\nMention last story commercial service. Family threat painting despite black.',54),(6,'Vote baby ball second item. Several very truth. Blue trip century way wonder eye tree.\nKnow various politics never score marriage president thus. Financial interest see short.',18),(7,'Kitchen myself task scene. Rest use eight tough. Take husband analysis last.',55),(8,'Street always newspaper itself. Parent blue now population month pretty that. Building talk art only generation ten.',4),(9,'Enough art bed. Reflect history can family full suffer. Appear kitchen middle writer.\nLife southern walk network night. Throw hard leave memory realize challenge before.',56),(10,'Eat book easy. Step take participant. Them peace method audience.',21),(11,'Total probably old identify foreign fact big. Cup enough on sometimes every time gun. Behind early church arm.',30),(12,'Light watch assume. Also tough its light stock history.\nSpecific feeling sense answer stand agreement yard arm. Camera wrong professional author sport with.',44),(13,'Because bill former its main. Task street me per even return.\nItem father station air pick program or. Clear common do miss although rule green investment. Enjoy democratic tax usually.',23),(14,'Floor candidate edge team soldier her power. Son gas night technology commercial daughter up. Light lose color attorney.\nSeven prevent box Mr boy. Become away past others wind act without.',27),(15,'Value history land remain build. Answer among deep after on.\nSignificant soldier office citizen mouth wind third design. Change decision worker let degree system region.',23),(16,'Cost answer above pressure station fall opportunity. Cause too strong skill because raise process soon. For good economic very.',34),(17,'Lead involve trade away enjoy. Break her consider building bed wife. Politics interesting realize six. Describe camera property address military.',49),(18,'Every statement majority effort four conference street. Wide white leader major adult enough. Young ok paper example might present account.',32),(19,'Blood black choice catch as deep. Big trade lay raise. One someone religious. Leave catch us pick side center they near.',46),(20,'For concern she shoulder yard. Throw near his responsibility discussion certain every.\nPlace activity boy we general. Unit attack recent well service system decision.',31),(21,'Look push billion beautiful year nation growth. Affect recognize sometimes remember detail power along. People hard generation. Chance citizen line this arrive.\nTell project hold happen truth.',3),(22,'Policy prepare everybody pick. Scene once once themselves one. Subject growth answer themselves. Team tree throughout.\nAlso all these democratic. Avoid animal enter note by.',7),(23,'Bed piece present unit by buy. May soon Democrat total. Popular suddenly poor budget off chair theory herself.',19),(24,'Difference politics herself.\nEither the level nor hair build. Recent represent after worker. Computer still picture one.\nHappen drop everyone go. There it age. Condition gas play speech ahead.',51),(25,'Above old degree suffer occur. Realize piece tonight positive decade nature.',56),(26,'East others sit school. Half can indeed himself. Sea someone political throw anything.',37),(27,'Eight stage lead each force entire every. Entire western thus computer street. Rather oil figure.\nPerson just ahead set.\nCar address suggest wife book. Watch view perhaps student executive town.',2),(28,'Week protect behavior long room. Experience might white get table.\nChurch must likely. Successful hard significant public raise. Up purpose turn moment financial try player.',38),(29,'Environmental piece various today. Direction line rich keep discover have.\nLife test within. Wish to improve camera.\nConference available truth seat on future from.',19),(30,'Skill travel child area from. Trial lay various reflect how.\nAir when thing. Our window address discuss car color type. So down beautiful join book next money fire. Evening leg rock seek.',27),(31,'Talk energy floor want spring. Partner condition design knowledge director.\nRespond different stock become. Way American mission many finish sister wide.',35),(32,'Recent on business start success remember. What position admit say camera coach. Story opportunity democratic soldier.',2),(33,'Window study sell within capital simply man top. Understand you movie be. Wind my report special throughout word national edge.',53),(34,'Up system exist serve improve she. Foot husband can chair traditional. Edge full movie executive.',43),(35,'Cold keep traditional. Production party position employee.\nMethod money bad listen trouble they quickly. Western ever surface stage space.',18),(36,'Find movie around help inside. Blue together present but vote course.',52),(37,'Job quickly conference laugh their sense current. Republican they by body new decide. Draw oil note many.',42),(38,'Unit ahead manager performance good first. Something media then rise risk ready so.\nHealth beautiful fly rest. Size yet base avoid word increase those.\nFamily else six house sport cause kid big.',15),(39,'Suggest plant kitchen tree step side child. Yeah history matter want letter. Bar realize page red wish.',32),(40,'Give enjoy leave society tonight be. Chance more opportunity response receive art.',26),(41,'Spring hundred blood sound. Evening change seem spring dog summer. Gun politics senior order source central.\nSay sea choose. Travel news practice different.',41),(42,'Last contain sing lawyer. Spend safe politics democratic worry prevent. Personal set side machine like.\nNews draw safe different voice face general. Audience spring radio create easy protect case.',9),(43,'Reflect appear into plant. Fear third effect rest into consider.\nSong arm which good. Whether company themselves result tax north. Share increase cause.',19),(44,'Position special service eight. Those task push. Rule course need every industry.',41),(45,'One place radio both. Scientist reduce even power know.\nSuccessful son own table many heart tell study.\nMeeting pull public. Meeting but skill have center career not. Institution probably line hear.',15),(46,'Education animal plant. Hard truth prepare already. History almost reduce entire structure create attack. Fund million agreement later professional me.',44),(47,'Nature man consider girl. They black table community.\nThere price as bar development special ago.',48),(48,'Catch best commercial clearly particular audience suffer. Pattern religious left. Address new inside board.',27),(49,'Fact base give forward risk wall. Science fact others method energy. Close admit specific. Those often just.\nProduce form development but southern necessary long.',44),(50,'Easy suddenly break this suddenly watch. Account senior little this knowledge well free actually. Summer how imagine between.',55),(51,'Use hair feel reality type hard. Little less spring treat life affect. Resource nice protect kid. Occur seem she treat few once.',29),(52,'Action community standard center pick eye traditional. War human religious. Great strategy hospital throw. Market individual moment just property yourself.',39),(53,'Hospital crime space third. Across billion use region. Customer future back possible.\nStep opportunity color organization staff this. Reality business interview himself.',1),(54,'Spring energy attention. Rise try speech movie national help.\nReally build make player do building image. Able story money other none spring form.',5),(55,'Worry store special myself energy wonder already.\nWar could great treatment often maybe performance. Senior statement guy last leader financial. Cold present final woman.',27),(56,'Size training game policy half statement strong.\nCurrent deal rock. Machine lead bag government.',14),(57,'Peace assume message husband particularly. Soon note coach process. Skill imagine bar good have five.\nOpportunity recognize stuff unit various receive past. Economic happen how feel wrong.',54),(58,'A painting however cover degree wrong baby. Degree body rate wife simple capital create serious.',36),(59,'Behavior economy station commercial.\nAnswer among style cell cup. Mention difference report. Minute instead alone car summer explain west.\nHair bar yet when radio. Worry wide follow design here.',17),(60,'Past boy their clearly. Father resource quality doctor four blood tend against. Office life right door.\nEntire share bring.',0),(61,'Meet young professor reveal. Have strong claim. Memory he inside military sometimes race everything six.\nArtist feeling actually maybe but wife. Myself accept cost land. Note skin pay rich staff hot.',35),(62,'Fear everyone country join. Organization art name bank hope.\nGovernment actually start writer. Watch responsibility discover try. Tree ok question event. Good everybody well.',40),(63,'Rule movie director product society. Century skin plan two her lot agreement others. Gas interview late up example. Else nor all resource available.',54),(64,'Season finish us floor family. Year these research. Impact history share near black.\nAttorney American the tree. Me hot sing stand.\nGame trade vote.',48),(65,'Pull him letter let necessary national less. Other plant hair skin ago sing. Once would experience always. Attention sort machine note democratic.',37),(66,'Your past imagine student fish that. Drive should across operation car.',45),(67,'Ask provide unit shoulder matter cultural outside stuff. Us add argue even young civil. Box discussion myself tree always.',24),(68,'Research hospital various goal.\nThing alone friend enter base appear. Maintain late main school structure station successful parent.',3),(69,'Various great art have attack ask lawyer. Rest six question with church instead particularly.\nMaterial partner program. Least politics few phone under accept sit.',29),(70,'Great where should important rock community. Side ten plant. Detail law purpose get notice billion past.',53),(71,'Itself couple run herself safe nature rule threat. Century production sure. Resource better artist.',0),(72,'Teacher people true husband. Let do language property pass safe.',12),(73,'Argue Democrat authority education against environment second. Day year stock collection.\nYeah cause service idea my such. Project western performance only lose chair. No position fact reflect hope.',15),(74,'Debate available reach every play rich arm recognize. Fly stage try miss treatment effect different. Offer business soon teacher spend include drive.',52),(75,'Task bad worker friend view might population blood. Generation soldier professional. Officer bad visit meet certainly language. Part candidate Congress maintain tax soldier race.',55),(76,'Reach recently his against someone. Include respond listen agent order include body.\nRoom measure kid natural international hospital. Certainly capital performance cause car how ready.',31),(77,'Compare anything yes exactly weight begin various. He hold story voice including.',42),(78,'Discuss structure see almost. Simply somebody whose score.\nGood me alone determine myself. Pretty week investment bit. Certainly continue until these big.',40),(79,'Wall economic fast bed note read we.\nDiscussion identify get story. Want section she speech.',30),(80,'Author school attention usually training far. Join human investment stuff.\nFour lay those ahead next item mind. My as standard describe girl.',50),(81,'Tonight not table guy tree possible tend price. Already technology natural either statement everyone election. Especially still cold western law.',15),(82,'Them kid direction school its book. Forget north summer lose move.\nBeyond friend century begin nature. Short two so move. Billion support to material.\nEstablish green site second late in treat term.',1),(83,'Five gas item. Away authority order imagine.\nCover institution size cultural community next rather. Stock red deep option would fast worker. Fall mission care bed.',54),(84,'Difficult reduce citizen me agree bar age any.\nSimply oil his view. Already reality spend away.',13),(85,'Century line much plan suddenly response lose moment. Place standard recent now spend enough. Player tonight generation film myself can.',48),(86,'Religious compare world wind. Including toward person market until environment establish.\nMeasure several whatever. Surface break total hundred professional five. Often age than that.',50),(87,'General activity weight media prevent. Beat culture soon involve lawyer rate large.\nBall left board other.\nWalk model should glass game. Card general discuss. Sing rich rock material somebody go.',48),(88,'Sure tax goal lead. Democratic both heavy reduce.\nLarge education about buy street. Less run individual hard PM join. Bill current anyone Mr interest member far.',19),(89,'Cold network wear. Culture real popular pattern current sure action. Certainly group Congress safe discuss big street.\nAffect ever brother charge Democrat various thank. Impact sell marriage.',30),(90,'Its wide form management top daughter water. Edge item kind three. Visit impact management country. College dinner cause.',9),(91,'Government then shake crime hand you. Seem smile parent agreement. Degree despite policy feeling.\nSport subject land. Son yet culture good since draw. That travel guy first inside.',3),(92,'Determine window later common. According move another difference many year. Million some someone reduce.\nBetter recent bad fish determine. Send computer trial peace program still guy similar.',39),(93,'But remember short. Ten find imagine couple. Less sound stage particular almost.\nThan poor wind anything third model well. President agreement choose company.',36),(94,'Soon political history to data focus. Surface word take policy hotel role since partner. Gun course if daughter response threat similar.',27),(95,'Movie meet natural ago city. Mean right with police bed teach.\nQuickly serious also grow list ago direction. Wait south share put effect degree pass.',25),(96,'Summer go skin. Opportunity parent choose break a entire kind.\nBrother age box establish writer. Of age their. Resource none however bring suggest choice.\nTest wrong operation next. Yeah stop doctor.',15),(97,'Ready participant my task my class maintain. Floor space economy.\nAbility trouble around. Building admit seem anyone here set. Certain social health size imagine try instead.',51),(98,'Spring involve success move age Mrs exactly. Send still major. Worry use off series.\nCard computer hit official. Policy method admit recently white purpose.',26),(99,'Her value debate those must book. Evening fill beautiful whether. Concern approach society stage.\nPainting voice firm agree. Line career size no election shake return.\nBefore month up last force.',54);
/*!40000 ALTER TABLE `Comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Invoice`
--

DROP TABLE IF EXISTS `Invoice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Invoice` (
  `Id` tinyint(4) DEFAULT NULL,
  `Cart` tinyint(4) DEFAULT NULL,
  `Date` varchar(0) DEFAULT NULL,
  `Payment` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Invoice`
--

LOCK TABLES `Invoice` WRITE;
/*!40000 ALTER TABLE `Invoice` DISABLE KEYS */;
INSERT INTO `Invoice` VALUES (1,29,'',0),(1,50,'',0),(1,28,'',1),(1,43,'',3),(1,47,'',2),(2,29,'',2),(2,37,'',1),(3,19,'',3),(3,30,'',3),(3,55,'',5),(3,50,'',2),(3,55,'',3),(4,14,'',3),(4,36,'',2),(5,27,'',3),(5,50,'',1),(5,36,'',5),(6,50,'',5),(6,7,'',4),(7,15,'',0),(7,34,'',5),(7,12,'',4),(7,55,'',0),(7,53,'',2),(8,13,'',2),(8,9,'',1),(8,44,'',5),(8,19,'',0),(9,12,'',2),(9,32,'',2),(9,19,'',4),(9,16,'',5),(11,20,'',0),(11,46,'',4),(12,51,'',0),(12,50,'',1),(12,45,'',5),(13,35,'',0),(13,31,'',1),(13,17,'',1),(14,10,'',3),(15,38,'',0),(15,54,'',2),(15,26,'',2),(15,6,'',4),(15,13,'',3),(16,36,'',3),(16,19,'',4),(16,41,'',5),(16,53,'',3),(16,13,'',1),(17,13,'',3),(18,2,'',2),(18,0,'',2),(18,43,'',2),(18,47,'',5),(18,45,'',3),(19,0,'',3),(20,29,'',1),(20,44,'',2),(20,54,'',1),(21,54,'',3),(21,50,'',5),(21,11,'',2),(21,44,'',5),(22,24,'',5),(22,37,'',4),(22,31,'',0),(22,23,'',4),(24,29,'',2),(24,12,'',5),(24,11,'',5),(26,19,'',4),(26,21,'',5),(26,15,'',1),(26,54,'',2),(26,26,'',5),(27,19,'',1),(27,16,'',3),(28,32,'',4),(28,0,'',2),(28,33,'',3),(28,47,'',4),(28,11,'',3),(30,23,'',0),(30,8,'',0),(31,13,'',0),(31,25,'',2),(31,6,'',2),(32,31,'',4),(32,9,'',2),(32,35,'',5),(32,43,'',1),(34,3,'',2),(34,6,'',5),(34,20,'',5),(34,25,'',2),(35,34,'',0),(35,12,'',4),(36,9,'',3);
/*!40000 ALTER TABLE `Invoice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Invoices`
--

DROP TABLE IF EXISTS `Invoices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Invoices` (
  `Id` tinyint(4) DEFAULT NULL,
  `Invoice` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Invoices`
--

LOCK TABLES `Invoices` WRITE;
/*!40000 ALTER TABLE `Invoices` DISABLE KEYS */;
INSERT INTO `Invoices` VALUES (0,'0'),(1,'1'),(2,'2'),(3,'3'),(4,'4'),(5,'5'),(6,'6'),(7,'7'),(8,'8'),(9,'9'),(10,'10'),(11,'11'),(12,'12'),(13,'13'),(14,'14'),(15,'15'),(16,'16'),(17,'17'),(18,'18'),(19,'19'),(20,'20'),(21,'21'),(22,'22'),(23,'23'),(24,'24'),(25,'25'),(26,'26'),(27,'27'),(28,'28'),(29,'29'),(30,'30'),(31,'31'),(32,'32'),(33,'33'),(34,'34'),(35,'35'),(36,'36'),(37,'37'),(38,'38'),(39,'39'),(40,'40'),(41,'41'),(42,'42'),(43,'43'),(44,'44'),(45,'45'),(46,'46'),(47,'47'),(48,'48'),(49,'49'),(50,'50'),(51,'51'),(52,'52'),(53,'53'),(54,'54'),(55,'55'),(56,''),(57,'');
/*!40000 ALTER TABLE `Invoices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Items`
--

DROP TABLE IF EXISTS `Items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Items` (
  `Id` tinyint(4) DEFAULT NULL,
  `Name` varchar(23) DEFAULT NULL,
  `Price` smallint(6) DEFAULT NULL,
  `Description` varchar(199) DEFAULT NULL,
  `Photo` tinyint(4) DEFAULT NULL,
  `Category` tinyint(4) DEFAULT NULL,
  `Seller` tinyint(4) DEFAULT NULL,
  `Rating` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Items`
--

LOCK TABLES `Items` WRITE;
/*!40000 ALTER TABLE `Items` DISABLE KEYS */;
INSERT INTO `Items` VALUES (0,'Victoria Watson',3956,'Market clear go stock federal question somebody. Play statement score community artist. Play group send moment own some.',0,0,19,0),(1,'Grace Hudson',907,'Save home write lot usually. Piece throw view watch role foreign sound.',1,1,27,1),(2,'Melissa Mora',2446,'Wife major during finish. Itself skill marriage sometimes. Structure pay process anyone staff open continue.\nFear own there value south. Case future blood why maybe property run senior.',2,2,53,2),(3,'Tracy Johnson',7915,'Remember parent relate particularly society conference. Stand much manager father process. Congress appear simple not generation boy.',3,3,38,3),(4,'Jeffrey Gonzalez',6471,'Whatever draw live artist.\nEverybody budget doctor start daughter feel. Dream necessary ever join even north art. Read fish skill short.',4,4,3,4),(5,'Amy Silva',8906,'Spend clearly fall wait.\nWell number production may bill out military clear. Happen positive animal voice want actually. Affect administration effect old company family point describe.',5,5,12,5),(6,'Christy Hoover DVM',7872,'Newspaper main pretty require score once responsibility.\nInterview rise plant dream pull single to. Moment century far see image prevent.',6,6,39,6),(7,'Nathaniel Haynes',6017,'Explain draw get public what watch. Any market trouble night later. Use similar mouth sell prove sport.',7,7,30,7),(8,'Angela Hanson',7975,'Conference southern seven gun. Them why message month. Or after author from.\nQuality ahead require question instead often. Ten business than hospital.',8,8,39,8),(9,'Bryan Mcintyre',9154,'Tonight instead civil reason argue fast now. Often charge stuff see food more choose example.\nAt tonight student. Partner everybody season decision structure where. Tell cost politics anyone.',9,9,8,9),(10,'Elizabeth Williams',2090,'Represent fund few do official performance. Should science address friend. Response TV despite letter sell policy.',10,10,26,10),(11,'Andrew Phillips',9428,'Family conference ability necessary three group. Would check industry finally support heart memory.\nLoss respond age past. Training party them although evidence top.',11,11,45,11),(12,'Ana Davis',7574,'Science like budget music. Sea mean political clear. Occur blue economy chance adult responsibility.\nSomebody more give minute.\nNumber pretty write wrong threat. Difference land apply.',12,12,49,12),(13,'Abigail Thomas',137,'Project group agree only area traditional feel others. Listen spend teach often hope government over. They listen red road less address want.',13,13,29,13),(14,'Shane Stein',5276,'Her total box this. Conference night strong.\nRecognize through chair way keep me.\nStrategy view executive skill draw ready sell. Always just floor system.',14,14,27,14),(15,'Alexander Hernandez',224,'Site notice speech carry rise. Win moment quality girl firm. Stage should test blood growth cultural. Season improve yeah professional walk.',15,15,50,15),(16,'Curtis Johnson',7314,'Approach manager church difference sense story. Few push option measure short.',16,16,44,16),(17,'Joshua Dawson Jr.',4522,'Month whatever fact. Operation attack simple. Right player fight onto.',17,17,9,17),(18,'Aaron Sellers',1478,'Design data girl road. Support Republican item air crime fly. Behind report fight hand vote.\nLawyer who nor chance career. Anything produce staff character whole against.',18,18,55,18),(19,'Amy Morales',5297,'See personal side policy have situation deep. Name final television nice. Democratic decade common article democratic show per.',19,19,53,19),(20,'Jonathan Lowe',4594,'Whatever give common card. Majority despite media meeting front can fly. More quality yourself arm nearly.',20,20,23,20),(21,'Kayla Reyes',8711,'Per space agreement watch effect others arrive. Bar early front six best. Free bill low ability involve hard.\nCertain yet trial magazine bar. Everyone mouth hospital other college treatment.',21,21,17,21),(22,'Austin Dalton',157,'Republican guy for six could. Special bar ball idea source anyone.\nFall what especially dream. Hand information stage network discover throw.',22,22,49,22),(23,'Scott Barker',6373,'Fly cup provide born. American side body prevent do. Media treatment phone claim building.',23,23,30,23),(24,'Brian Castillo',7313,'Travel among education scene work summer. Let day early four section. Cultural trouble no including theory rule.\nDiscuss room yourself card question. Letter television us. Whose strong customer fall.',24,24,25,24),(25,'Erika Snyder',4058,'Right name strong news care example story. The accept without suddenly dinner.\nAvailable name ball picture her. Security perhaps large say it task.',25,25,56,25),(26,'Cassidy Alexander',4517,'Result million upon so. Clear human plant bad purpose join. Benefit bag hope determine young effort same coach.\nSignificant role instead.',26,26,28,26),(27,'Jamie Ewing',5303,'However relate collection production street probably. Perhaps at relate and spend. Air father cut wrong half service.',27,27,0,27),(28,'Ashley Schroeder',3910,'Have benefit now trial. Military population break. Station stand former threat require before.',28,28,48,28),(29,'George Paul',1129,'Avoid do statement stock build. But toward notice until stay.',29,29,52,29),(30,'Carmen Morales',2313,'Other American or significant support population image. Story each per our care lose movie.\nWho pull hard a mouth. With entire group PM stop often.',30,30,51,30),(31,'Michelle Alvarado',2614,'Mouth difference never house address particularly together. Practice become return save two room.',31,31,28,31),(32,'Jorge Myers',8741,'Guess time our pull authority better exist. Teacher condition of land nature take though. Series American shake.',32,32,15,32),(33,'Heather Winters',9699,'Guess condition if before.\nChange join argue pick. Question story age page later. Medical anyone many according one whom their.',33,33,23,33),(34,'Thomas Myers',3611,'Some successful language manage real. Help develop lose remember window remain.\nBut catch standard. Stock difficult continue standard identify. Player move author himself despite expert television.',34,34,35,34),(35,'Justin Liu',6362,'Floor source fact address. Understand owner per project road raise. While rise main pretty late glass.',35,35,28,35),(36,'Brian Wise',9713,'Growth where hold war describe prevent yard. About finally pressure Mrs fine.\nBlack investment near everything American.',36,36,40,36),(37,'Rachael Hobbs',3541,'Worry PM however serious pay. Media skin indeed effect simply live health. International call yeah decade or.',37,37,33,37),(38,'Connie Harrison',1697,'Sport go special future road or idea. Evidence color theory realize particularly.',38,38,8,38),(39,'Megan Rodriguez',7127,'Authority sign red theory. Soldier positive process federal.\nNewspaper Democrat attack music service hotel. Full time minute in. Actually character performance senior economy rule company.',39,39,54,39),(40,'Sarah Cuevas',8593,'Scientist quickly lot late.\nPaper growth office air power order individual. Bit tree man assume black society popular.\nHow prevent black return already move real. World thank language side push air.',40,40,37,40),(41,'Mary Gutierrez',8562,'Clearly worry full question.\nOnto window officer pay yourself. Create friend coach north board total share. To let environment else think because.',41,41,37,41),(42,'Stephanie Smith',2944,'Beat use prove peace. Read model today send always.\nShort reality sing. Begin writer across heavy. Red notice expect treat.\nBelieve end us across like hand house. Play down avoid and ever.',42,42,8,42),(43,'Emily Greene',8068,'Agree training economic term. With heavy foreign.\nLawyer watch in contain.\nNature until radio tonight. Carry explain get responsibility those stage upon.',43,43,24,43),(44,'Sabrina Coleman',5958,'Bill administration individual lot get nature whom. Street blood event cut issue still base news. If certainly hit.',44,44,6,44),(45,'David Cochran',4736,'Season newspaper reflect pattern. Night me similar truth rock question official. Space phone others country really watch hair.\nOut act reveal letter society.',45,45,35,45),(46,'Christopher Christensen',2472,'Visit letter describe guy. Soldier surface may material television.\nOften some degree indeed campaign avoid. Order teacher process agreement cultural development from.',46,46,41,46),(47,'Scott Perry',5410,'Develop argue argue system travel. Attack home relate nearly early. Avoid probably fight center lose box.\nBill center sea manager add for dinner less. Them positive office song could interest.',47,47,45,47),(48,'Scott Scott',7699,'His science herself south back wife nearly. Manager watch receive simple tend however address ahead. Right leave such these beautiful.\nFeeling method interest tree hotel. Team apply guess clear.',48,48,17,48),(49,'Matthew Hoffman',1152,'Act save first manager enter industry similar report. Word offer finally paper above. Property total leg enter.',49,49,2,49),(50,'George Murillo',7858,'Discuss leave base suffer paper. Garden full most interesting deal. Argue add section answer manage behavior easy.',50,50,31,50),(51,'Michael Galvan',6555,'Per without likely build be often cold. Main audience reflect common.\nNow surface wrong assume however stay. Scientist ground strategy entire seem.',51,51,10,51),(52,'Kathy Mccormick',8778,'Model without car. Talk shake mind letter dark kind. Year these reason best necessary third manager program.',52,52,16,52),(53,'Natalie Harris',4924,'End agent business force other hard land. Tonight else back. Choose out often computer situation. New necessary plan those measure PM sport.',53,53,35,53),(54,'Elizabeth Anderson',626,'Do just raise. Heavy water could art population. It around practice threat challenge wish possible toward. Plan discussion stage score road describe role.',54,54,29,54),(55,'Amanda Lee',973,'Service sport full tell positive management. Call local technology occur goal want production apply.\nCharge pay practice have half be.',55,55,22,55);
/*!40000 ALTER TABLE `Items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Login_info`
--

DROP TABLE IF EXISTS `Login_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Login_info` (
  `Id` tinyint(4) DEFAULT NULL,
  `mail` varchar(32) DEFAULT NULL,
  `Password` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Login_info`
--

LOCK TABLES `Login_info` WRITE;
/*!40000 ALTER TABLE `Login_info` DISABLE KEYS */;
INSERT INTO `Login_info` VALUES (0,'howellashley@example.net','c8373b41c793487ea4d1f87138fcfb1ae27b4abde6f9af200b8a5cde9f00ddcc'),(1,'maria93@example.org','08be8acb3c18d82d23f822d2cf285c04c9b01c776dfeb21021482586cc0d7744'),(2,'mackenzie31@example.org','873759039fc9325f61717b10484c26b43929c3fbac50e5e49de6930e10800461'),(3,'fowlersandra@example.net','a6d385eb6daff255c5780c29bc1816ce68b1c4331383349c1c17de768db33a4b'),(4,'moranjoshua@example.com','e71e93b4edd45a230d18b2a79d917895c394f7fef7b7d3c3c91380450afe3d7e'),(5,'ehale@example.com','d2099031220d72e584fc9d6bef762198e14d4bfd0d300347b8e87c534f70989a'),(6,'collinsshelby@example.com','c079a3605fbd519a75a2124ba549fb9b9e791adb3a3df6d27a94d23c3f626785'),(7,'hawkinsjoshua@example.com','2a2288e76f4cb92433ff3e25788aaed3d3ebe8bd59f6bfe1a5c6a1a86287c8f3'),(8,'jennifersmall@example.net','ca447f1ed5b08162ba96aba1ac4e0aa5a6edb3965d1bf5496436e2bb2bd6bf22'),(9,'donaldjames@example.net','6773c1264a061824be17921e9c547a64e0584b4748d4d740d2add097c8f5915b'),(10,'rwilkinson@example.org','5f08d03e70e9368c8e232ef524497637dfb0076b972f3171aef77ddc139dd163'),(11,'benjamin26@example.net','08d2dc7ddbf97608a01155e4cad8caf8e536cad25fa330a03841324fca7e9a87'),(12,'jonathanduncan@example.com','4c4a65b6470ba99fd3289523de8d2217566e8ca27c0c6f203756a409cf7282e0'),(13,'sonia12@example.org','a117f9ec57df12423d5c292d98bd2f62132ecefac287f2494bae05b3b5651b9d'),(14,'solomonandrea@example.net','00292f7cebbc8c0b5e2f4542e8a9a252d845eb313f429587cd1a1482672e332c'),(15,'griffinholly@example.com','44c6de95a8564cdfae01b77a514feb634c8bc32667c39baf048a5c189f3cd408'),(16,'scottrobert@example.net','839ac9fa8a21b9899f26d8ccab0a2d607dd61a9f2dfde26cb0dcdb40814544ee'),(17,'fgonzalez@example.net','3493c892a9df83f6d25b84b5255d35c3da1988ce91d0202aa9a0db3a24fb3b86'),(18,'pricelatoya@example.net','a648d78e604bd0a9a3f6c81b4a368d8c5c6195295212a5bc73d34fbdd8aa870c'),(19,'deborah37@example.net','4bd402344d6684f76c47b75899a52e943f003323f2f6319d688831027a255134'),(20,'pinedarachel@example.net','e71eabbc4b1d9a2efe4a54a5b590ab30679b48f065fba43ee7f135fbbbad9aa0'),(21,'bobby62@example.com','7499a41be556b22b6721b4b5aa0c4faaa91798674ab9bf77aabb1cd20782ea2f'),(22,'phughes@example.com','abe5fac0b17336f8012bd3bba5f1d12bfbf6d1191f31726dfcf11542dbef2b0a'),(23,'dgrimes@example.net','af1b1e30ed9f92fb26a90d20d1866a010eef82b2ed8645e6275a32bbb93872b4'),(24,'webbmichele@example.org','cd97abce1c273064049efbd696935a3f30b8d6ea28861d7c87eb1c100b91cf53'),(25,'justin00@example.org','6e2135d3d1cbfa133743d6a6c581f682fc71c90b424e5f45b2e4fc18731f9d62'),(26,'christopherrodriguez@example.com','a020461a10d823e87db35f7a4c8d20457039213df8d1964efaf91d006da9c4ad'),(27,'erin26@example.com','39481f319989d1d6abee27e5a2c96a692eee6318932d149869ffac04f9142512'),(28,'wgray@example.org','e62f2f5b6aede388cabc5b51b557ddf64f47ad188ee04a94416be91c2603ed1a'),(29,'fabbott@example.com','cda21918729d015aad63fbbb970c1a4d761cb558fb302c92895f54873555e4b5'),(30,'jessica65@example.net','f3e6acd3a1bd991f0299ff71f47ecf8f346f8ba8a3f8135b5b22a88729257ba7'),(31,'steven63@example.com','724a5a0db9abb22188f1639f9a2ceb914b9f840634b23c9f1863f2ab02d8449e'),(32,'vaughnmichael@example.org','39048982332682e6c1b8c4f45380a685668a10c2f2c4814c1025c3c22a8f574a'),(33,'ljohnson@example.net','7c9ab3bb3b941eff3e71a7f02c65985602fed482d45d6166009f22d2c7b86388'),(34,'alexanderlambert@example.org','967fb3db63c16bc3328088ac12fa66e228cb3aa68caa2dff09810978b61bd90e'),(35,'christine35@example.com','f0c63f13e44246f7f1f59c283fe794670a7c21947f6cc23f32e8c110c53b83fd'),(36,'lisa08@example.net','dc35f093a40e72b29fd386e2ab9ea0716715157ec95cd59490478a8a671704c1'),(37,'rachelnelson@example.net','a7ae149608c948597721fdb5532beedd4c72aacb0539469da3403d23c5ed5f35'),(38,'millershawn@example.org','e3c796f01fd5c263e1962d7ebea5f44504e29e41bbd7edef2c7c989170948efb'),(39,'pwu@example.com','7ba45371d4f6e59e0c5f165816e36b93a0b6e3c98e8ff39ddfbfddc1bdb6080a'),(40,'ashley18@example.net','b9c5024c1f9028191770bb80322d89234abd79ec91ae327848341c34b4b834a6'),(41,'anthonyramos@example.net','456cb6c56fb4b4d5b8487c2c1eccd5bd6e842df7108bd439873ed5eb711dfb1a'),(42,'vschaefer@example.org','f905969db73c8acc602e5fdde324e874222a3e22f470b920dc158b3e46cd3990'),(43,'rdavis@example.org','de37a044794cd349a106f278de01e015e73f6306f8107f940f890fc7cead93ee'),(44,'lisa45@example.org','432734d291d4445303da4cb2ae928c1e33ad8b9ebd8d8210e8c57ea12ab4c335'),(45,'hamiltonamy@example.net','bede88065d127e0235a55ee63be44fd008faec6c57eee30c4edcdd1e14504994'),(46,'fdavis@example.com','6ef8787685bade586c0679d587e4936a5d67e8910d44f798fd2171ce84da42eb'),(47,'leviwallace@example.org','5153f9bdea6dd593ba15242fa5809f8d40900e7350a4bdc3f6151da6b8cef99f'),(48,'dhall@example.net','d614aded8acca07f96c29b5dbbe3d580558721341e27322772daa710bb6ef048'),(49,'brownjessica@example.com','ca2a4a8ceb1816bbcb3ab9edbd9b8f20171dd2a49b073b0a5f62b990222e88f5'),(50,'johnsonsteven@example.net','f34b910e9d6abb72a9382fb5d154e57908c6d6c4fca45990639839d4a50fca16'),(51,'jimmy73@example.org','4560d8ec9701b7bacff0b671791e5bf415e51c5d1a68a015665a0ddd553d621a'),(52,'grant39@example.com','60c55e6cd99154e639aa9366a4aec9f24fda2f4c0df658cf4c8b98cda80e3c94'),(53,'michaelcoleman@example.net','7b2250a6a8aad1f772b4611a24b12330a143b40e364f876b64627c8844f3eb84'),(54,'johnsonmaria@example.org','7000ea059b668ff8ca7783b8cffdbb2da1bde1e18b7886608f4ac6d1d5bc4940'),(55,'hortonpaul@example.com','bea9fd7684142c038d6c833f17d2f1f2731bf1546ddf0dcbeb8b04926546b7f0'),(55,'adriana@ynov.com','0545493DE4891B35576AECDC44E0AACC9C08A4A26B39BE3DB4DCAA8F489A2BDC'),(56,'adriana@ynov.com','0545493DE4891B35576AECDC44E0AACC9C08A4A26B39BE3DB4DCAA8F489A2BDC'),(57,'julie@ynov.com','B025079C90813D4669136B2ED07512204EE05522BA3E647935F1A88DAF00FD43');
/*!40000 ALTER TABLE `Login_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Payment`
--

DROP TABLE IF EXISTS `Payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Payment` (
  `Id` tinyint(4) DEFAULT NULL,
  `Payment` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Payment`
--

LOCK TABLES `Payment` WRITE;
/*!40000 ALTER TABLE `Payment` DISABLE KEYS */;
INSERT INTO `Payment` VALUES (0,'ILS'),(1,'CZK'),(2,'HRK'),(3,'CUC'),(4,'GTQ');
/*!40000 ALTER TABLE `Payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Photo`
--

DROP TABLE IF EXISTS `Photo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Photo` (
  `Id` smallint(6) DEFAULT NULL,
  `Link` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Photo`
--

LOCK TABLES `Photo` WRITE;
/*!40000 ALTER TABLE `Photo` DISABLE KEYS */;
INSERT INTO `Photo` VALUES (0,'https://picsum.photos/567/1023'),(1,'https://dummyimage.com/935x752'),(2,'https://dummyimage.com/241x668'),(3,'https://placekitten.com/623/698'),(4,'https://dummyimage.com/835x471'),(5,'https://dummyimage.com/881x74'),(6,'https://picsum.photos/543/842'),(7,'https://dummyimage.com/790x523'),(8,'https://dummyimage.com/468x964'),(9,'https://placekitten.com/368/149'),(10,'https://dummyimage.com/554x763'),(11,'https://picsum.photos/797/827'),(12,'https://placekitten.com/137/901'),(13,'https://picsum.photos/496/836'),(14,'https://picsum.photos/119/270'),(15,'https://placekitten.com/822/572'),(16,'https://dummyimage.com/161x173'),(17,'https://dummyimage.com/367x611'),(18,'https://picsum.photos/727/455'),(19,'https://picsum.photos/419/282'),(20,'https://placekitten.com/535/981'),(21,'https://placekitten.com/807/282'),(22,'https://placekitten.com/1021/94'),(23,'https://placekitten.com/641/366'),(24,'https://placekitten.com/91/228'),(25,'https://dummyimage.com/763x732'),(26,'https://placekitten.com/874/360'),(27,'https://dummyimage.com/732x186'),(28,'https://placekitten.com/647/70'),(29,'https://dummyimage.com/565x50'),(30,'https://picsum.photos/216/504'),(31,'https://placekitten.com/463/794'),(32,'https://dummyimage.com/542x870'),(33,'https://placekitten.com/487/615'),(34,'https://placekitten.com/302/999'),(35,'https://placekitten.com/709/726'),(36,'https://dummyimage.com/529x250'),(37,'https://placekitten.com/289/580'),(38,'https://picsum.photos/675/781'),(39,'https://dummyimage.com/477x58'),(40,'https://placekitten.com/661/536'),(41,'https://placekitten.com/746/925'),(42,'https://placekitten.com/187/702'),(43,'https://dummyimage.com/103x215'),(44,'https://dummyimage.com/742x781'),(45,'https://picsum.photos/106/424'),(46,'https://dummyimage.com/703x806'),(47,'https://picsum.photos/663/664'),(48,'https://picsum.photos/619/743'),(49,'https://dummyimage.com/360x988'),(50,'https://picsum.photos/977/896'),(51,'https://placekitten.com/660/727'),(52,'https://placekitten.com/962/329'),(53,'https://placekitten.com/896/283'),(54,'https://placekitten.com/390/660'),(55,'https://dummyimage.com/343x580'),(56,'https://placekitten.com/680/958'),(57,'https://dummyimage.com/733x706'),(58,'https://placekitten.com/226/848'),(59,'https://placekitten.com/224/54'),(60,'https://dummyimage.com/887x1009'),(61,'https://placekitten.com/478/78'),(62,'https://picsum.photos/225/274'),(63,'https://placekitten.com/337/21'),(64,'https://picsum.photos/124/214'),(65,'https://placekitten.com/841/737'),(66,'https://placekitten.com/412/117'),(67,'https://placekitten.com/653/921'),(68,'https://dummyimage.com/987x478'),(69,'https://placekitten.com/918/356'),(70,'https://picsum.photos/630/467'),(71,'https://dummyimage.com/464x425'),(72,'https://picsum.photos/474/152'),(73,'https://placekitten.com/866/86'),(74,'https://dummyimage.com/686x346'),(75,'https://placekitten.com/991/324'),(76,'https://placekitten.com/444/285'),(77,'https://dummyimage.com/311x469'),(78,'https://picsum.photos/470/608'),(79,'https://picsum.photos/770/664'),(80,'https://placekitten.com/364/972'),(81,'https://dummyimage.com/11x509'),(82,'https://placekitten.com/628/258'),(83,'https://dummyimage.com/800x560'),(84,'https://placekitten.com/510/786'),(85,'https://picsum.photos/723/646'),(86,'https://picsum.photos/882/72'),(87,'https://placekitten.com/440/994'),(88,'https://dummyimage.com/301x212'),(89,'https://picsum.photos/240/778'),(90,'https://picsum.photos/198/740'),(91,'https://picsum.photos/362/376'),(92,'https://dummyimage.com/960x844'),(93,'https://dummyimage.com/938x942'),(94,'https://picsum.photos/528/574'),(95,'https://picsum.photos/940/647'),(96,'https://dummyimage.com/402x956'),(97,'https://placekitten.com/568/409'),(98,'https://dummyimage.com/746x550'),(99,'https://dummyimage.com/734x518');
/*!40000 ALTER TABLE `Photo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Prefer_payment`
--

DROP TABLE IF EXISTS `Prefer_payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Prefer_payment` (
  `Id` tinyint(4) DEFAULT NULL,
  `Payment` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Prefer_payment`
--

LOCK TABLES `Prefer_payment` WRITE;
/*!40000 ALTER TABLE `Prefer_payment` DISABLE KEYS */;
INSERT INTO `Prefer_payment` VALUES (56,0),(57,0);
/*!40000 ALTER TABLE `Prefer_payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Rating`
--

DROP TABLE IF EXISTS `Rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Rating` (
  `Id` smallint(6) DEFAULT NULL,
  `Rating` tinyint(4) DEFAULT NULL,
  `Comment` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Rating`
--

LOCK TABLES `Rating` WRITE;
/*!40000 ALTER TABLE `Rating` DISABLE KEYS */;
INSERT INTO `Rating` VALUES (0,5,0),(1,5,1),(2,4,2),(3,0,3),(4,5,4),(5,4,5),(6,3,6),(7,2,7),(8,3,8),(9,3,9),(10,4,10),(11,1,11),(12,4,12),(13,3,13),(14,0,14),(15,5,15),(16,1,16),(17,2,17),(18,4,18),(19,2,19),(20,2,20),(21,2,21),(22,0,22),(23,3,23),(24,5,24),(25,4,25),(26,4,26),(27,4,27),(28,4,28),(29,2,29),(30,3,30),(31,5,31),(32,5,32),(33,3,33),(34,1,34),(35,5,35),(36,0,36),(37,2,37),(38,1,38),(39,0,39),(40,4,40),(41,2,41),(42,3,42),(43,2,43),(44,5,44),(45,3,45),(46,3,46),(47,1,47),(48,5,48),(49,0,49),(50,1,50),(51,3,51),(52,1,52),(53,4,53),(54,1,54),(55,1,55),(56,0,56),(57,5,57),(58,5,58),(59,5,59),(60,3,60),(61,3,61),(62,3,62),(63,2,63),(64,1,64),(65,0,65),(66,2,66),(67,2,67),(68,5,68),(69,3,69),(70,4,70),(71,5,71),(72,4,72),(73,3,73),(74,4,74),(75,5,75),(76,2,76),(77,2,77),(78,5,78),(79,4,79),(80,2,80),(81,5,81),(82,3,82),(83,5,83),(84,2,84),(85,3,85),(86,2,86),(87,4,87),(88,5,88),(89,0,89),(90,2,90),(91,4,91),(92,1,92),(93,4,93),(94,0,94),(95,4,95),(96,4,96),(97,1,97),(98,5,98),(99,5,99);
/*!40000 ALTER TABLE `Rating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `User` (
  `Id` tinyint(4) DEFAULT NULL,
  `Name` varchar(18) DEFAULT NULL,
  `Login_info` tinyint(4) DEFAULT NULL,
  `Address` tinyint(4) DEFAULT NULL,
  `Photo` smallint(6) DEFAULT NULL,
  `Commands` tinyint(4) DEFAULT NULL,
  `Cart` tinyint(4) DEFAULT NULL,
  `Invoices` tinyint(4) DEFAULT NULL,
  `Prefer_payment` tinyint(4) DEFAULT NULL,
  `Rating` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
INSERT INTO `User` VALUES (0,'Lisa Byrd',0,0,56,0,0,0,5,56),(1,'Darrell Harrell',1,1,57,1,1,1,4,57),(2,'Julian Rojas',2,2,58,2,2,2,5,58),(3,'Jessica Barnes',3,3,59,3,3,3,0,59),(4,'Judy Ryan',4,4,60,4,4,4,3,60),(5,'Jennifer Peters',5,5,61,5,5,5,0,61),(6,'Yvonne King',6,6,62,6,6,6,0,62),(7,'Selena Willis',7,7,63,7,7,7,4,63),(8,'Gabriel Morgan',8,8,64,8,8,8,5,64),(9,'Michelle Le',9,9,65,9,9,9,0,65),(10,'Michael Elliott',10,10,66,10,10,10,2,66),(11,'Jonathan Rosario',11,11,67,11,11,11,0,67),(12,'Brian Carter',12,12,68,12,12,12,3,68),(13,'Randy Nichols',13,13,69,13,13,13,2,69),(14,'Thomas Smith',14,14,70,14,14,14,3,70),(15,'Andre Chapman',15,15,71,15,15,15,2,71),(16,'Alexander King',16,16,72,16,16,16,0,72),(17,'Jeremy Avery',17,17,73,17,17,17,3,73),(18,'Thomas Spencer',18,18,74,18,18,18,0,74),(19,'Joshua Brown',19,19,75,19,19,19,3,75),(20,'Rebecca Sharp',20,20,76,20,20,20,5,76),(21,'Jeffrey Carter',21,21,77,21,21,21,1,77),(22,'Mrs. Breanna Lopez',22,22,78,22,22,22,3,78),(23,'Suzanne Black',23,23,79,23,23,23,0,79),(24,'John Beltran',24,24,80,24,24,24,5,80),(25,'Nicole Delgado',25,25,81,25,25,25,1,81),(26,'Renee Oneal',26,26,82,26,26,26,5,82),(27,'Julie Duncan',27,27,83,27,27,27,5,83),(28,'Terry Smith',28,28,84,28,28,28,5,84),(29,'Gary Moreno',29,29,85,29,29,29,1,85),(30,'Dawn Schmidt',30,30,86,30,30,30,2,86),(31,'Alex Clark',31,31,87,31,31,31,5,87),(32,'Joseph Williams',32,32,88,32,32,32,1,88),(33,'Ms. Krista Garza',33,33,89,33,33,33,2,89),(34,'Melissa Collins',34,34,90,34,34,34,2,90),(35,'Sarah Johnston',35,35,91,35,35,35,4,91),(36,'John Ward',36,36,92,36,36,36,5,92),(37,'Cheryl Fletcher',37,37,93,37,37,37,3,93),(38,'Jeffrey Martinez',38,38,94,38,38,38,1,94),(39,'Christine Jackson',39,39,95,39,39,39,1,95),(40,'Nathan Wilson',40,40,96,40,40,40,4,96),(41,'Tara Turner',41,41,97,41,41,41,1,97),(42,'Brittany Bowers',42,42,98,42,42,42,1,98),(43,'Dr. Jacob Malone',43,43,99,43,43,43,2,99),(44,'Karla Bradford',44,44,100,44,44,44,4,100),(45,'Cynthia Lowery',45,45,101,45,45,45,2,101),(46,'Donna Wilcox',46,46,102,46,46,46,1,102),(47,'Levi Bauer',47,47,103,47,47,47,0,103),(48,'Ricardo Fowler',48,48,104,48,48,48,2,104),(49,'Jessica Cox',49,49,105,49,49,49,4,105),(50,'Mr. Jeremy Woods',50,50,106,50,50,50,5,106),(51,'Samantha Moreno',51,51,107,51,51,51,4,107),(52,'Craig Snyder',52,52,108,52,52,52,3,108),(53,'Michael Adkins',53,53,109,53,53,53,4,109),(54,'Amy Barker',54,54,110,54,54,54,0,110),(55,'Wendy Scott',55,55,111,55,55,55,5,111),(56,'Adriana',56,56,112,56,56,56,3,112),(57,'Julie',57,57,113,57,57,57,3,113);
/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-18 10:46:33
