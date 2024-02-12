-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 12 fév. 2024 à 12:06
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet-ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `address`
--

CREATE TABLE `address` (
  `Id` tinyint(4) DEFAULT NULL,
  `Street` varchar(32) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `CP` mediumint(9) DEFAULT NULL,
  `State` varchar(14) DEFAULT NULL,
  `Country` varchar(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `address`
--

INSERT INTO `address` (`Id`, `Street`, `City`, `CP`, `State`, `Country`) VALUES
(0, '20 rue de la Paix', 'Paris', 75002, 'Ile de France', 'France'),
(1, '25 avenue des Champs-Ã‰lysÃ©es', 'Paris', 75008, 'Ile de France', 'France'),
(2, '15 rue de Rivoli', 'Lyon', 69001, 'Auvergne-Rhône', 'France');

-- --------------------------------------------------------

--
-- Structure de la table `auth`
--

CREATE TABLE `auth` (
  `Id` tinyint(4) DEFAULT NULL,
  `Token` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `Id` tinyint(4) DEFAULT NULL,
  `Items` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `Id` tinyint(4) DEFAULT NULL,
  `Name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`Id`, `Name`) VALUES
(0, 'Génériques'),
(1, 'Vaccins'),
(2, 'Ustensiles médicales'),
(3, 'Dispositifs médical'),
(4, 'Echantillons bactéries'),
(5, 'Echantillons champigons'),
(6, 'Echantillons parasites'),
(7, 'Echantillons virus'),
(8, 'Echantillons autres agents pathogènes'),
(9, 'Organes');

-- --------------------------------------------------------

--
-- Structure de la table `command`
--

CREATE TABLE `command` (
  `Id` tinyint(4) DEFAULT NULL,
  `Items` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commands`
--

CREATE TABLE `commands` (
  `Id` tinyint(4) DEFAULT NULL,
  `Command` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commands`
--

INSERT INTO `commands` (`Id`, `Command`) VALUES
(0, '0'),
(1, '1'),
(2, '2');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `Id` smallint(6) DEFAULT NULL,
  `Comment` varchar(199) DEFAULT NULL,
  `User` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`Id`, `Comment`, `User`) VALUES
(0, 'Excellent produit, très efficace ! Je le recommande vivement.', 0),
(0, 'Livraison rapide et service client au top. Merci beaucoup !', 1),
(0, 'Produit conforme à mes attentes, je suis pleinement satisfait.', 2),
(1, 'Très content de mon achat, merci pour votre professionnalisme.', 0),
(1, 'Commande reçue en parfait état, je recommande ce vendeur.', 1),
(2, 'Super produit, je suis agréablement surpris par sa qualité.', 0),
(3, 'Service client réactif et aimable, je suis très satisfait.', 1),
(3, 'Ce produit a vraiment amélioré ma qualité de vie, je le recommande à tous.', 2),
(4, 'Livraison rapide et produit conforme à la description. Parfait !', 0),
(4, 'Je suis satisfait de mon achat, merci au vendeur pour sa réactivité.', 1),
(5, 'Excellent service client, j\'ai reçu des réponses rapides à mes questions.', 0),
(6, 'Ce produit est vraiment efficace, je le recommande sans hésitation.', 1),
(7, 'Livraison rapide et emballage soigné. Je suis très satisfait de mon achat.', 2),
(7, 'Produit de qualité, je suis très content de mon achat.', 0),
(8, 'Service client exceptionnel, ils ont résolu mon problème rapidement.', 1),
(9, 'Très bon rapport qualité-prix pour ce produit, je le recommande.', 0),
(10, 'Livraison rapide et produit conforme à mes attentes. Merci !', 1),
(11, 'Excellent vendeur, je recommande vivement !', 2),
(11, 'Produit de qualité, je suis entièrement satisfait de mon achat.', 0),
(12, 'Je suis très content de mon achat, merci beaucoup !', 1),
(12, 'Service client impeccable, je recommande ce vendeur.', 2),
(12, 'Produit conforme à mes attentes, je le recommande vivement.', 0),
(13, 'Très bon produit, je suis satisfait de mon achat.', 1),
(14, 'Livraison rapide et produit de qualité, je recommande ce vendeur.', 0),
(14, 'Excellent service client, j\'ai été très bien accompagné tout au long de mon achat.', 1),
(15, 'Ce produit correspond parfaitement à mes attentes, je suis satisfait.', 2),
(15, 'Livraison rapide et emballage soigné, je recommande ce vendeur.', 0),
(16, 'Service client réactif et produit de qualité, je recommande !', 1),
(17, 'Produit conforme à la description, je suis satisfait de mon achat.', 2),
(18, 'Très bon rapport qualité-prix, je recommande ce produit.', 0),
(19, 'Livraison rapide et produit conforme à mes attentes. Parfait !', 1),
(20, 'Ce produit est vraiment efficace, je le recommande à tous.', 2),
(20, 'Service client impeccable, merci pour votre professionnalisme.', 0),
(21, 'Livraison rapide et produit de qualité, je recommande ce vendeur.', 1),
(21, 'Excellent produit, je suis très satisfait de mon achat.', 2),
(22, 'Service client au top, ils ont répondu à toutes mes questions.', 0),
(23, 'Produit conforme à mes attentes, je suis très content de mon achat.', 1),
(24, 'Je recommande vivement ce produit, il est vraiment efficace.', 2),
(25, 'Livraison rapide et produit de qualité, je suis pleinement satisfait.', 0),
(25, 'Service client très professionnel, je recommande ce vendeur.', 1),
(26, 'Ce produit est vraiment génial, je le recommande à tous mes amis.', 2),
(26, 'Emballage soigné et livraison rapide, je suis très content de mon achat.', 0),
(27, 'Très satisfait de mon achat, je recommande ce produit sans hésitation.', 1),
(28, 'Service client très réactif, merci pour votre professionnalisme.', 2),
(28, 'Livraison rapide et produit de qualité, je recommande ce vendeur.', 0),
(29, 'Excellent produit, je suis très satisfait de mon achat.', 1),
(30, 'Produit conforme à la description, livraison rapide. Que demander de plus ?', 2),
(30, 'Service client efficace, ils ont répondu à toutes mes questions rapidement.', 0),
(31, 'Très bon produit, je recommande vivement ce vendeur.', 1),
(31, 'Livraison rapide et produit conforme à mes attentes, je suis satisfait.', 2),
(32, 'Service client au top, merci pour votre réactivité.', 0),
(33, 'Produit de qualité, je recommande ce vendeur sans hésitation.', 1),
(34, 'Livraison rapide et produit conforme à la description, que demander de plus ?', 2),
(34, 'Service client très réactif, merci pour votre professionnalisme.', 0),
(35, 'Excellent produit, je suis très satisfait de mon achat.', 1),
(35, 'Livraison rapide et emballage soigné, je recommande ce vendeur.', 2),
(36, 'Produit conforme à la description, je recommande vivement.', 0),
(36, 'Service client au top, merci pour votre professionnalisme.', 1),
(37, 'Très satisfait de mon achat, livraison rapide et produit conforme.', 2),
(38, 'Service client efficace, ils ont répondu à toutes mes questions.', 0),
(38, 'Livraison rapide et produit de qualité, je recommande ce vendeur.', 1),
(39, 'Très bon produit, je suis pleinement satisfait.', 2),
(40, 'Livraison rapide et produit conforme à mes attentes, je recommande.', 0),
(40, 'Service client très professionnel, merci pour votre réactivité.', 1),
(41, 'Produit de qualité, je suis très satisfait de mon achat.', 2),
(41, 'Livraison rapide et emballage soigné, je recommande vivement.', 0),
(42, 'Excellent produit, je recommande ce vendeur sans hésitation.', 1),
(43, 'Service client au top, merci pour votre réactivité.', 2),
(44, 'Très satisfait de mon achat, produit conforme à mes attentes.', 0),
(44, 'Livraison rapide et emballage soigné, je recommande ce vendeur.', 1),
(45, 'Service client efficace, merci pour votre professionnalisme.', 2),
(45, 'Produit de qualité, je suis très satisfait de mon achat.', 0),
(46, 'Livraison rapide et produit conforme à la description.', 1),
(46, 'Service client très réactif, je recommande vivement.', 2),
(47, 'Très bon produit, je recommande ce vendeur sans hésitation.', 0),
(47, 'Service client au top, merci pour votre réactivité.', 1),
(48, 'Livraison rapide et emballage soigné, je suis pleinement satisfait.', 2),
(48, 'Excellent produit, je recommande vivement ce vendeur.', 0),
(49, 'Service client efficace, merci pour votre professionnalisme.', 1),
(49, 'Produit conforme à mes attentes, je suis très satisfait.', 2),
(50, 'Livraison rapide et produit de qualité, je recommande vivement.', 0),
(50, 'Service client très professionnel, merci pour votre réactivité.', 1),
(51, 'Très satisfait de mon achat, produit conforme à la description.', 2),
(52, 'Livraison rapide et emballage soigné, je suis pleinement satisfait.', 0),
(52, 'Service client au top, merci pour votre réactivité.', 1),
(53, 'Excellent produit, je recommande vivement ce vendeur.', 2),
(53, 'Service client efficace, merci pour votre professionnalisme.', 0),
(54, 'Produit conforme à mes attentes, je suis très satisfait.', 1),
(54, 'Livraison rapide et produit de qualité, je recommande vivement.', 2),
(55, 'Service client très professionnel, merci pour votre réactivité.', 0),
(55, 'Très satisfait de mon achat, produit conforme à la description.', 1),
(56, 'Très bon produit, je recommande ce vendeur sans hésitation.', 2),
(56, 'Service client réactif et emballage soigné, je suis pleinement satisfait.', 0),
(57, 'Livraison rapide et produit de qualité, je recommande vivement.', 1),
(57, 'Service client efficace, merci pour votre professionnalisme.', 2),
(58, 'Excellent produit, je recommande vivement ce vendeur.', 0),
(58, 'Service client au top, merci pour votre réactivité.', 1),
(59, 'Produit conforme à mes attentes, je suis très satisfait.', 2),
(60, 'Service client très professionnel, merci pour votre réactivité.', 0),
(60, 'Très satisfait de mon achat, produit conforme à la description.', 1),
(61, 'Très bon produit, je recommande ce vendeur sans hésitation.', 2),
(61, 'Service client réactif et emballage soigné, je suis pleinement satisfait.', 0),
(62, 'Livraison rapide et produit de qualité, je recommande vivement.', 1),
(62, 'Service client efficace, merci pour votre professionnalisme.', 2),
(63, 'Excellent produit, je recommande vivement ce vendeur.', 0),
(63, 'Service client au top, merci pour votre réactivité.', 1),
(64, 'Produit conforme à mes attentes, je suis très satisfait.', 2),
(64, 'Livraison rapide et emballage soigné, je suis pleinement satisfait.', 0),
(65, 'Très satisfait de mon achat, produit conforme à la description.', 1),
(65, 'Service client très professionnel, merci pour votre réactivité.', 2),
(66, 'Très bon produit, je recommande ce vendeur sans hésitation.', 0),
(66, 'Service client réactif et emballage soigné, je suis pleinement satisfait.', 1),
(67, 'Livraison rapide et produit de qualité, je recommande vivement.', 2),
(67, 'Service client efficace, merci pour votre professionnalisme.', 0),
(68, 'Excellent produit, je recommande vivement ce vendeur.', 1),
(68, 'Service client au top, merci pour votre réactivité.', 2),
(69, 'Produit conforme à mes attentes, je suis très satisfait.', 0),
(69, 'Livraison rapide et emballage soigné, je suis pleinement satisfait.', 1),
(70, 'Très satisfait de mon achat, produit conforme à la description.', 2),
(70, 'Service client très professionnel, merci pour votre réactivité.', 0),
(71, 'Très bon produit, je recommande ce vendeur sans hésitation.', 1),
(71, 'Service client réactif et emballage soigné, je suis pleinement satisfait.', 2),
(72, 'Livraison rapide et produit de qualité, je recommande vivement.', 0),
(72, 'Service client efficace, merci pour votre professionnalisme.', 1),
(71, 'Profil utilisateur très complet, merci pour toutes ces informations !', 0),
(71, 'Utilisateur sympathique, merci pour votre confiance !', 1),
(71, 'Profil utilisateur intéressant, j\'espère avoir l\'occasion de discuter avec vous.', 2),
(72, 'Utilisateur sérieux et fiable, transaction sans aucun problème !', 0),
(72, 'Profil utilisateur de confiance, je recommande vivement !', 1),
(72, 'Utilisateur agréable, merci pour votre réactivité !', 2),
(73, 'Profil utilisateur bien renseigné, merci pour toutes ces informations !', 0),
(73, 'Utilisateur fiable et sérieux, je recommande sans hésitation !', 1),
(73, 'Profil utilisateur intéressant, merci pour votre confiance !', 2);

-- --------------------------------------------------------

--
-- Structure de la table `invoice`
--

CREATE TABLE `invoice` (
  `Id` tinyint(4) DEFAULT NULL,
  `Cart` tinyint(4) DEFAULT NULL,
  `Date` varchar(0) DEFAULT NULL,
  `Payment` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `invoices`
--

CREATE TABLE `invoices` (
  `Id` tinyint(4) DEFAULT NULL,
  `Invoice` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `invoices`
--

INSERT INTO `invoices` (`Id`, `Invoice`) VALUES
(0, '0'),
(1, '1'),
(2, '2');

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

CREATE TABLE `items` (
  `Id` tinyint(4) DEFAULT NULL,
  `Name` varchar(23) DEFAULT NULL,
  `Price` smallint(6) DEFAULT NULL,
  `Description` varchar(199) DEFAULT NULL,
  `Photo` tinyint(4) DEFAULT NULL,
  `Category` tinyint(4) DEFAULT NULL,
  `Seller` tinyint(4) DEFAULT NULL,
  `Rating` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`Id`, `Name`, `Price`, `Description`, `Photo`, `Category`, `Seller`, `Rating`) VALUES
(0, 'Ibuprofène', 3, 'Ibuprofène Prodilab 400 mg, 10 comprimés - générique pour Advil, Motrin.', 0, 0, 0, 0),
(1, 'Paracétamol (acétaminop', 2, 'Dolipranetabs 1000 Mg Comprimés Pelliculés Plq/8\r\nParacétamol - générique pour Tylenol, Panadol.', 1, 0, 0, 1),
(2, 'Omeprazol', 5, 'Omeprazole biogaran 20 mg, 28 gélules gastro-résistantes P - générique pour Prilosec.', 2, 0, 1, 2),
(3, 'Simvastatine', 5, 'SIMVASTATINE EG 20 mg, comprimé pelliculé sécable - générique pour Zocor.', 3, 0, 1, 3),
(4, 'Citalopram', 6, 'Citalopram biogaran 20 mg, 28 comprimés pelliculés sécables - générique pour Celexa.', 4, 0, 2, 4),
(5, 'Sertraline', 5, 'Sertraline almus 50 mg, 28 gélules - générique pour Zoloft.', 5, 0, 1, 5),
(6, 'Levothyroxine', 16, 'Levothyroxine	Generic	50mcg	30 tablets - générique pour Synthroid.', 6, 0, 0, 6),
(7, 'Amlodipine', 5, 'Amlodipine biogaran 5 mg, 30 gélules - générique pour Norvasc.', 7, 0, 1, 7),
(8, 'Metformine', 3, 'Metformine biogaran 1000 mg, 30 comprimés - générique pour Glucophage.', 8, 0, 1, 8),
(9, 'Losartan', 2, 'Losartan, 25 MG Tablets - générique pour Cozaar.', 9, 0, 0, 9),
(10, 'Prevnar 13', 150, 'vaccin antipneumococcique 13-valent - 1 dose', 10, 1, 0, 10),
(11, 'Gardasil 9', 150, 'vaccin contre le papillomavirus humain à 9 valences - 1 dose', 11, 1, 2, 11),
(12, 'Stamaril', 125, 'vaccin contre la fièvre jaune - 1 dose', 12, 1, 1, 12),
(13, 'Rotarix', 100, 'vaccin contre le rotavirus - 1 dose', 13, 1, 2, 13),
(14, 'Shingrix', 200, 'vaccin contre le zona - 1 dose', 14, 1, 1, 14),
(15, 'Pentacel', 150, 'vaccin combiné diphtérie, tétanos, coqueluche acellulaire, polio, Haemophilus influenzae de type b - 1 dose', 15, 1, 0, 15),
(16, 'Hepatitis B vaccine', 50, 'vaccin contre l\'hépatite B - 1 dose', 16, 1, 2, 16),
(17, 'Menveo', 100, 'vaccin méningococcique quadrivalent - 1 dose', 17, 1, 2, 17),
(18, 'Trumenba', 160, 'vaccin méningococcique B - 1 dose', 18, 1, 0, 18),
(19, 'Pneumovax 23', 90, 'vaccin antipneumococcique polyvalent - 1 dose', 19, 1, 1, 19),
(20, 'Tensiomètre électroniqu', 100, 'Mesure la pression artérielle. - 1 unité', 20, 2, 2, 20),
(21, 'Stéthoscope', 200, 'Stéthoscope - 1 unité', 21, 2, 1, 21),
(22, 'TISC', 100, '[TISC] Thermomètre infrarouge sans contact - 1 unité', 22, 2, 2, 22),
(23, 'Oxymètre de pouls', 50, 'Oxymètre de pouls - 1 unité', 23, 2, 0, 23),
(24, 'Garrot médical', 20, 'Garrot médical - 1 unité', 24, 2, 0, 24),
(25, 'Lampe diagnostic', 150, 'Lampe de diagnostic - 1 unité', 25, 2, 2, 25),
(26, 'CMM', 100, '[CMM] Canne de marche médicale - 1 unité', 26, 2, 1, 26),
(27, 'Trousse de premiers sec', 50, 'Trousse de premiers secours - 1 unité', 27, 2, 1, 27),
(28, 'Seringues/aiguilles', 5, 'Seringues et aiguilles - 1 seringue + 1 aiguille stéril', 28, 2, 2, 28),
(29, 'PEM', 30, '[PEM] Papier d\'examen médical - 1 Rouleau', 29, 2, 1, 29),
(30, 'IRM', 0, 'Imagerie par RÃƒÂ©sonance MagnÃƒÂ©tique - Produit des images dÃƒÂ©taillÃƒÂ©es des structures internes du corps en utilisant des champs magnÃƒÂ©tiques et des ondes radio. / ~1,5 millionÃ¢â€šÂ¬ sur dev', 30, 3, 0, 30),
(31, 'Scanner', 0, 'TomodensitomÃƒÂ©trie - CrÃƒÂ©e des images en coupe transversale du corps en utilisant des rayons X pour dÃƒÂ©tecter les diffÃƒÂ©rences de densitÃƒÂ© des tissus. / ~500kÃ¢â€šÂ¬ sur devis', 31, 3, 1, 31),
(32, 'Ãƒâ€°chographe', 32000, 'Ãƒâ€°chographe - Utilise des ondes sonores pour produire des images en temps rÃƒÂ©el des organes internes.', 32, 3, 2, 32),
(33, 'Endoscope', 7500, 'Instrument optique inséré dans le corps pour visualiser les organes internes ou effectuer des procédures chirurgicales mini-invasives.', 33, 3, 0, 3),
(34, 'MSP', 5000, 'Moniteur de Surveillance Patient - Surveille en continu les signes vitaux tels que la fréquence cardiaque, la pression artérielle, et la saturation en oxygène.', 34, 3, 2, 34),
(35, 'VM', 32500, 'Ventilateur mécanique -  Fournit un soutien respiratoire mécanique aux patients présentant des problèmes respiratoires.', 35, 3, 1, 35),
(36, 'Défibrillateur', 5600, 'Défibrillateur - Utilisé pour administrer un choc électrique afin de restaurer le rythme cardiaque normal en cas d\'arrêt cardiaque.', 36, 3, 1, 36),
(37, 'Laser chirurgical', 32000, 'Laser chirurgical - Ãƒâ€°met un faisceau laser utilisÃƒÂ© en chirurgie pour couper, vaporiser ou coaguler les tissus.', 37, 3, 1, 37),
(38, 'ASA', 0, 'Analyseur de Sang Automatique -  Effectue des analyses sanguines automatiques pour ÃƒÂ©valuer les paramÃƒÂ¨tres hÃƒÂ©matologiques et biochimiques. / ~50kÃ¢â€šÂ¬ sur devis', 38, 3, 2, 38),
(39, 'PaP', 2500, 'Pompe à perfusion - Administre avec précision des liquides médicamenteux ou des solutions nutritives à un patient.', 39, 3, 2, 39),
(40, 'Yersinia pestis', 2500, 'Echantillons d\'une colnie de bactéries Yersinia pestis - Attention, à manier avec précaution, responsable de la peste', 40, 4, 2, 40),
(41, 'Clostridium botulinum', 1600, 'Echantillon de la colonie de bactérie Clostridium botulinum - Produit la toxine botulique, l\'une des toxines les plus puissantes connues, provoquant le botulisme.', 41, 4, 1, 41),
(42, 'Mycobacterium tuberculo', 2700, 'Echantillon de la colonie de la bactérie Mycobacterium tuberculosis - Causant la tuberculose, une maladie respiratoire potentiellement mortelle.', 42, 4, 2, 42),
(43, 'O157:H7', 700, 'Echantillon de la colonie de la bactérie Escherichia coli (E. coli) O157:H7 - Certaines souches peuvent causer des infections sévères, notamment des infections alimentaires.', 43, 4, 0, 43),
(44, 'Salmonella spp.', 1200, 'Echantillon de la colonie de la bactérie Salmonella spp. - Responsable de nombreuses infections alimentaires, provoquant la salmonellose.', 44, 4, 0, 4),
(45, 'Vibrio cholerae', 0, 'Echantillon de la colonie de la bactérie Vibrio cholerae - Causant le choléra, une maladie diarrhéique aiguë potentiellement mortelle.', 45, 4, 2, 45),
(46, 'SARM', 32000, 'Staphylococcus aureus résistant à la méthicilline (SARM) - Une souche résistante aux antibiotiques pouvant causer des infections graves.', 46, 4, 0, 46),
(47, 'Neisseria meningitidis', 1400, 'Neisseria meningitidis - Provocant des infections graves, notamment la méningite.', 47, 4, 2, 47),
(48, 'Listeria monocytogenes', 2500, 'Listeria monocytogenes - Causant la listériose, une infection généralement associée à la consommation d\'aliments contaminés.', 48, 4, 0, 48),
(49, 'Helicobacter pylori ', 4900, 'Helicobacter pylori - Impliqué dans le développement d\'ulcères gastriques et de certains cancers de l\'estomac.', 49, 4, 2, 49),
(50, 'Candida albicans', 6500, 'Candida albicans - Un champignon opportuniste responsable de diverses infections chez les animaux, y compris chez les humains.', 50, 5, 1, 5),
(51, 'Aspergillus fumigatus', 6500, 'Aspergillus fumigatus - Peut causer des infections pulmonaires chez les individus immunodéprimés.', 51, 5, 1, 51),
(52, 'Plasmodium spp.', 200, 'Plasmodium spp. - Responsable du paludisme, un parasite transmis par les moustiques Anopheles.', 52, 5, 2, 52),
(53, 'Ascaris lumbricoides', 530, 'Ascaris lumbricoides - Un ver rond intestinal qui peut causer des infections chez les humains, connu sous le nom d\'ascaridiose.', 53, 5, 0, 53),
(54, 'Giardia lamblia', 650, 'Giardia lamblia - Un protozoaire responsable de la giardiase, une infection intestinale courante.', 54, 5, 0, 54),
(55, 'Taenia solium', 210, 'Taenia solium - Un ver plat responsable de la cysticercose, une maladie résultant de l\'ingestion de larves de Taenia solium.', 55, 5, 1, 55),
(56, 'Enterobius vermicularis', 420, 'Enterobius vermicularis - Un petit ver rond, communément appelé oxyure, qui peut infecter le côlon humain et provoquer la maladie appelée oxyurose.', 56, 5, 0, 56),
(57, 'Ankylostomes', 150, 'Ankylostomes (Ancylostoma duodenale et Necator americanus) - Des vers parasites qui infectent les intestins humains, provoquant l\'ankylostomiase.', 57, 5, 1, 57),
(58, 'Schistosoma spp.', 200, 'Schistosoma spp. - Les schistosomes sont des vers plats responsables de la schistosomiase, une maladie parasitaire affectant les voies urinaires et intestinales.', 58, 5, 2, 58),
(59, 'Trichomonas vaginalis', 620, 'Trichomonas vaginalis - Un protozoaire responsable de la trichomonase, une infection sexuellement transmissible affectant les voies génitales.', 59, 5, 1, 59),
(60, 'Toxoplasma gondii', 1200, 'Toxoplasma gondii - Un protozoaire parasite qui peut infecter divers organes, provoquant la toxoplasmose.', 60, 5, 2, 60),
(61, 'rypanosoma brucei', 420, 'Larves de mouche tsé-tsé (Trypanosoma brucei) - Responsables de la maladie du sommeil en Afrique, transmise par les piqûres de mouches tsé-tsé.', 61, 5, 1, 61),
(62, 'VIH', 5200, 'VIH (Virus de l\'immunodéficience humaine) - Responsable du syndrome d\'immunodéficience acquise (SIDA), le VIH attaque le système immunitaire et affaiblit la capacité du corps à lutter contre les infe', 62, 6, 0, 62),
(63, 'Virus Ebola', 5620, 'Virus Ebola - Les virus Ebola sont associés à des fièvres hémorragiques graves avec un taux de mortalité élevé.', 63, 6, 2, 63),
(64, 'H1N1', 2300, 'Virus de la grippe espagnole (H1N1)', 64, 6, 0, 64),
(65, 'Virus de la variole', 6200, 'Virus de la variole', 65, 6, 2, 65),
(66, 'Virus de la dengue', 4520, 'Virus de la dengue - Transmis par les moustiques, le virus de la dengue peut provoquer une fièvre sévère, voire une forme hémorragique potentiellement mortelle.', 66, 6, 1, 66),
(67, 'H5N1', 2500, 'Virus de la grippe aviaire (H5N1) -  le virus H5N1 peut être grave avec un taux de mortalité élevé.', 67, 6, 1, 67),
(68, 'Virus Zika', 2300, 'Virus Zika - peut entraîner des complications graves', 68, 6, 0, 68),
(69, 'Virus du SRAS', 5600, 'Virus du SRAS (syndrome respiratoire aigu sévère) - Le SRAS est un coronavirus qui provoque une maladie respiratoire sévère.', 69, 6, 2, 69),
(70, 'SARS-CoV-2', 9600, 'Virus de la COVID-19 (SARS-CoV-2)', 70, 6, 1, 70);

-- --------------------------------------------------------

--
-- Structure de la table `login_info`
--

CREATE TABLE `login_info` (
  `Id` tinyint(4) DEFAULT NULL,
  `mail` varchar(32) DEFAULT NULL,
  `Password` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `login_info`
--

INSERT INTO `login_info` (`Id`, `mail`, `Password`) VALUES
(0, 'yann.fournier@gmail.com', '$2y$10$NnyNqx3jr9dby0BEhEXBkeCWeWVj6SnqzffMHbc4auYNkDl4Pw6Ma'),
(1, 'alberic.walsh@gmail.com', '$2y$10$v9Najt5XJFThgEZhGv9kzefsZbe9Q53fzVwtyKnJu1V7neO4hap62'),
(2, 'adriana.pullig@gmail.com', '$2y$10$KQwz3lRxm8BRUTNlFM5G.e6c/g.QttxCVYIVCfqjCf1jmolwiIi/y');

-- --------------------------------------------------------

--
-- Structure de la table `payment`
--

CREATE TABLE `payment` (
  `Id` tinyint(4) DEFAULT NULL,
  `Payment` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `payment`
--

INSERT INTO `payment` (`Id`, `Payment`) VALUES
(0, 'Pay'),
(1, 'Vis'),
(2, 'Mas'),
(3, 'Ame');

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE `photo` (
  `Id` smallint(6) DEFAULT NULL,
  `Link` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `photo`
--

INSERT INTO `photo` (`Id`, `Link`) VALUES
(0, 'https://th.bing.com/th/id/OIP.Jo'),
(1, 'https://th.bing.com/th/id/OIP.Tn'),
(2, 'data:image/jpeg;base64,/9j/4AAQS'),
(3, 'https://th.bing.com/th/id/OIP.qd'),
(4, 'https://th.bing.com/th/id/OIP.xv'),
(5, 'https://th.bing.com/th/id/OIP.YD'),
(6, 'https://th.bing.com/th/id/OIP.H3'),
(7, 'data:image/jpeg;base64,/9j/4AAQS'),
(8, 'data:image/jpeg;base64,/9j/4AAQS'),
(9, 'https://th.bing.com/th/id/OIP.5P'),
(10, 'https://th.bing.com/th/id/OIP.Kz'),
(11, 'https://th.bing.com/th/id/OIP.f2'),
(12, 'data:image/jpeg;base64,/9j/4AAQS'),
(13, 'https://th.bing.com/th/id/OIP.Oh'),
(14, 'https://th.bing.com/th/id/OIP.8s'),
(15, 'data:image/jpeg;base64,/9j/4AAQS'),
(16, 'data:image/jpeg;base64,/9j/4AAQS'),
(17, 'https://th.bing.com/th/id/OIP.jy'),
(18, 'https://th.bing.com/th/id/OIP.S1'),
(19, 'https://th.bing.com/th/id/OIP.uP'),
(20, 'https://cdn.shopify.com/s/files/'),
(21, 'https://th.bing.com/th/id/OIP.Nb'),
(22, 'https://th.bing.com/th/id/OIP.YT'),
(23, 'https://th.bing.com/th/id/OIP.rg'),
(24, 'https://th.bing.com/th/id/OIP.17'),
(25, 'https://th.bing.com/th/id/OIP.la'),
(26, 'https://th.bing.com/th/id/OIP.tZ'),
(27, 'https://th.bing.com/th/id/OIP.0s'),
(28, 'https://th.bing.com/th/id/OIP.5M'),
(29, 'https://th.bing.com/th/id/OIP.Zr'),
(30, 'https://th.bing.com/th/id/OIP.HZ'),
(31, 'https://th.bing.com/th/id/OIP.u4'),
(32, 'https://th.bing.com/th/id/OIP.XN'),
(33, 'https://th.bing.com/th/id/OIP.J4'),
(34, 'https://th.bing.com/th/id/OIP.3o'),
(35, 'https://th.bing.com/th/id/OIP.d2'),
(36, 'https://th.bing.com/th/id/OIP.nC'),
(37, 'https://th.bing.com/th/id/OIP.Fh'),
(38, 'https://th.bing.com/th/id/OIP.pp'),
(39, 'https://th.bing.com/th/id/OIP.JW'),
(40, 'data:image/jpeg;base64,/9j/4AAQS'),
(41, 'https://th.bing.com/th/id/OIP.ni'),
(42, 'data:image/jpeg;base64,/9j/4AAQS'),
(43, 'https://th.bing.com/th/id/OIP.n3'),
(44, 'data:image/jpeg;base64,/9j/4AAQS'),
(45, 'data:image/jpeg;base64,/9j/4AAQS'),
(46, 'https://th.bing.com/th/id/OIP.mS'),
(47, 'https://th.bing.com/th/id/OIP.tu'),
(48, 'data:image/jpeg;base64,/9j/4AAQS'),
(49, 'data:image/jpeg;base64,/9j/4AAQS'),
(50, 'data:image/jpeg;base64,/9j/4AAQS'),
(51, 'data:image/jpeg;base64,/9j/4AAQS'),
(52, 'https://th.bing.com/th/id/OIP.SQ'),
(53, 'https://th.bing.com/th/id/OIP.nW'),
(54, 'data:image/jpeg;base64,/9j/4AAQS'),
(56, 'data:image/jpeg;base64,/9j/4AAQS'),
(54, 'data:image/jpeg;base64,/9j/4AAQS'),
(55, 'data:image/jpeg;base64,/9j/4AAQS'),
(57, 'data:image/jpeg;base64,/9j/4AAQS'),
(58, 'data:image/jpeg;base64,/9j/4AAQS'),
(59, 'https://th.bing.com/th/id/OIP.25'),
(60, 'https://th.bing.com/th/id/OIP.n3'),
(61, 'https://th.bing.com/th/id/OIP.aE'),
(62, 'data:image/jpeg;base64,/9j/4AAQS'),
(63, 'https://th.bing.com/th/id/OIP.8X'),
(64, 'https://th.bing.com/th/id/OIP.rs'),
(65, 'https://th.bing.com/th/id/OIP.Hv'),
(66, 'data:image/jpeg;base64,/9j/4AAQS'),
(67, 'data:image/jpeg;base64,/9j/4AAQS'),
(68, 'https://th.bing.com/th/id/OIP.YV'),
(69, 'https://th.bing.com/th/id/OIP.Pi'),
(70, 'data:image/jpeg;base64,/9j/4AAQS'),
(71, 'None'),
(72, 'None'),
(73, 'None');

-- --------------------------------------------------------

--
-- Structure de la table `prefer_payment`
--

CREATE TABLE `prefer_payment` (
  `Id` tinyint(4) DEFAULT NULL,
  `Payment` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `prefer_payment`
--

INSERT INTO `prefer_payment` (`Id`, `Payment`) VALUES
(0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `rating`
--

CREATE TABLE `rating` (
  `Id` smallint(6) DEFAULT NULL,
  `Rating` tinyint(4) DEFAULT NULL,
  `Comment` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `rating`
--

INSERT INTO `rating` (`Id`, `Rating`, `Comment`) VALUES
(0, 4, 0),
(1, 3, 1),
(2, 5, 2),
(3, 2, 3),
(4, 4, 4),
(5, 5, 5),
(6, 1, 6),
(7, 2, 7),
(8, 5, 8),
(9, 3, 9),
(10, 5, 10),
(11, 0, 11),
(12, 3, 12),
(13, 4, 13),
(14, 2, 14),
(15, 4, 15),
(16, 4, 16),
(17, 1, 17),
(18, 2, 18),
(19, 5, 19),
(20, 3, 20),
(21, 5, 21),
(22, 1, 22),
(23, 3, 23),
(24, 4, 24),
(25, 2, 25),
(26, 4, 26),
(27, 5, 27),
(28, 0, 28),
(29, 3, 29),
(30, 4, 30),
(31, 1, 31),
(32, 4, 32),
(33, 4, 33),
(34, 1, 34),
(35, 2, 35),
(36, 5, 36),
(37, 1, 37),
(38, 4, 38),
(39, 3, 39),
(40, 2, 40),
(41, 5, 41),
(42, 4, 42),
(43, 1, 43),
(44, 2, 44),
(45, 5, 45),
(46, 1, 46),
(47, 4, 47),
(48, 3, 48),
(49, 2, 49),
(50, 4, 50),
(51, 5, 51),
(52, 0, 52),
(53, 3, 53),
(54, 4, 54),
(55, 1, 55),
(56, 4, 56),
(57, 3, 57),
(58, 2, 58),
(59, 5, 59),
(60, 3, 60),
(61, 1, 61),
(62, 4, 62),
(63, 5, 63),
(64, 1, 64),
(65, 2, 65),
(66, 4, 66),
(67, 1, 67),
(68, 4, 68),
(69, 3, 69),
(70, 2, 70),
(71, 5, 71),
(72, 4, 72),
(73, 0, 73);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`Id`, `Name`, `Login_info`, `Address`, `Photo`, `Commands`, `Cart`, `Invoices`, `Prefer_payment`, `Rating`) VALUES
(0, 'YANN FOURNIER', 0, 0, 71, 0, 0, 0, 0, 71),
(1, 'ALBERIC WALSH', 1, 1, 72, 1, 1, 1, 1, 72),
(2, 'ADRIANA PULLIG', 2, 2, 73, 2, 2, 2, 0, 73);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
