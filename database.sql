-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 17 avr. 2023 à 16:49
-- Version du serveur : 10.5.16-MariaDB
-- Version de PHP : 8.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `chateauBourbonCleanA`
--

-- --------------------------------------------------------

--
-- Structure de la table `ajouterModifier`
--

DROP TABLE IF EXISTS `ajouterModifier`;
CREATE TABLE `ajouterModifier` (
  `id_utilisateur` int(11) NOT NULL,
  `id_biens` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `auteur` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `contenu` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `biens`
--

DROP TABLE IF EXISTS `biens`;
CREATE TABLE `biens` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `prix` float NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `region` enum('auverge-rhone-alpes','bourgogne-franche-comte','bretagne','centre-val-de-loire','corse','grand-est','hauts-de-france','ile-de-france','normandie','nouvelle-aquitaine','occitanie','paca','pays-de-la-loire') NOT NULL,
  `x` float NOT NULL,
  `y` float NOT NULL,
  `chambres` int(11) NOT NULL,
  `sdb` int(11) NOT NULL,
  `superficie` float NOT NULL,
  `pieces` int(11) NOT NULL,
  `epoque` enum('XV','XVI','XVII','XVIII','XIX','XX') NOT NULL,
  `statut` enum('classe','nonclasse') NOT NULL,
  `etat` enum('restauration','excellent') NOT NULL,
  `description` text NOT NULL,
  `urlVisite` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `biens`
--

INSERT INTO `biens` (`id`, `nom`, `visible`, `prix`, `adresse`, `region`, `x`, `y`, `chambres`, `sdb`, `superficie`, `pieces`, `epoque`, `statut`, `etat`, `description`, `urlVisite`) VALUES
(1, 'Chateau de Chambord', 1, 47000000, 'Chambord, France', 'centre-val-de-loire', 47.6157, 1.51767, 55, 25, 19000, 426, 'XVI', 'classe', 'excellent', 'Le château de Chambord est un château français situé dans la commune de Chambord, dans le département du Loir-et-Cher en région Centre-Val de Loire. Il a été construit au XVIe siècle pour François Ier et est considéré comme l\'un des plus beaux châteaux de la Renaissance française. Le château de Chambord est célèbre pour son architecture exceptionnelle, avec ses toits hérissés de tourelles et de cheminées, ses nombreuses fenêtres et ses balcons en fer à cheval. Il est également connu pour sa grande cour d\'honneur entourée de galeries et pour son double escalier à vis, qui est l\'un des éléments les plus emblématiques du château. Le château de Chambord est aujourd\'hui un site touristique très populaire et est classé au patrimoine mondial de l\'UNESCO. Excellent état', 'https://www.youtube.com/watch?v=Nlk9hoHP_kk'),
(24, 'Château d\'Usée', 1, 30000000, 'Rigny-Ussé, France', 'centre-val-de-loire', 47.2499, 0.291343, 25, 15, 10000, 254, 'XV', 'classe', 'excellent', 'Le château d\'Ussé est un château situé dans la commune de Rigny-Ussé, dans le département de l\'Indre-et-Loire en France. Il est connu pour être l\'un des plus beaux châteaux de la Loire et est considéré comme l\'un des châteaux les plus romantiques de France.\r\n\r\nLe château d\'Ussé a été construit au XVème siècle et a été rénové à plusieurs reprises au fil des siècles. Il se compose de cinq tours et d\'une grande cour intérieure. L\'intérieur du château est richement décoré, avec de belles peintures et de magnifiques meubles d\'époque. Le château est entouré de jardins à la française et d\'un parc boisé, qui offrent une vue imprenable sur la campagne environnante.\r\n\r\nLe château d\'Ussé est ouvert au public et est très populaire auprès des touristes. Il est possible de visiter le château et de découvrir l\'histoire de cet édifice emblématique. De nombreux événements sont organisés tout au long de l\'année, comme des concerts, des expositions et des spectacles de lumière, qui permettent de découvrir le château sous un autre angle.\r\nLe château est classé et en excellent état.', 'https://www.youtube.com/watch?v=zMdp4cI5Z1U'),
(25, 'Château de Versailles', 1, 100000000, 'Versailles, France', 'ile-de-france', 48.8047, 2.12173, 300, 150, 63154, 2300, 'XVII', 'classe', 'excellent', 'Le château de Versailles est un château situé à Versailles, en France. C\'est l\'un des châteaux les plus célèbres et les plus importants de France. Il a été construit au XVIIe siècle pour Louis XIV, dit le Roi-Soleil, et a été la résidence des rois de France jusqu\'à la Révolution française. Le château est connu pour ses jardins et son architecture somptueuse, ainsi que pour son rôle dans l\'histoire de la France. Il est maintenant un site touristique très populaire et est inscrit au patrimoine mondial de l\'UNESCO. Il est en excellent état.', 'https://www.youtube.com/watch?v=C4tgeO5A4As'),
(28, 'Non visible', 0, 424242, 'Non visible', 'grand-est', 10, 10, 10, 10, 10, 10, 'XX', 'nonclasse', 'excellent', 'Non visible', 'https://www.youtube.com/watch?v=Nlk9hoHP_kk');

-- --------------------------------------------------------

--
-- Structure de la table `consulterAchat`
--

DROP TABLE IF EXISTS `consulterAchat`;
CREATE TABLE `consulterAchat` (
  `id_contactAchat` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `consulterVente`
--

DROP TABLE IF EXISTS `consulterVente`;
CREATE TABLE `consulterVente` (
  `id_contactVente` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `contactAchat`
--

DROP TABLE IF EXISTS `contactAchat`;
CREATE TABLE `contactAchat` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `bienId` int(11) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contactAchat`
--

INSERT INTO `contactAchat` (`id`, `nom`, `mail`, `bienId`, `message`, `date`) VALUES
(8, 'John Smith', 'john.smith@gmail.com', 1, 'Bonjour je suis intéressé par votre château. Pourriez vous me contacter par mail pour convenir d\'un rendez-vous ?', '2023-01-09');

-- --------------------------------------------------------

--
-- Structure de la table `contactVente`
--

DROP TABLE IF EXISTS `contactVente`;
CREATE TABLE `contactVente` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contactVente`
--

INSERT INTO `contactVente` (`id`, `nom`, `mail`, `description`, `date`) VALUES
(2, 'John Doe', 'john.doe@gmail.com', 'Château de 1200m² avec 8 chambres, 4 salles de bain et 40 pièces. Il se situe en Alsace, dans le Haut-Rhin, pour plus d\'information veuillez me contacter par l\'adresse mail renseigné plus haut', '2023-01-09');

-- --------------------------------------------------------

--
-- Structure de la table `ecrireModifier`
--

DROP TABLE IF EXISTS `ecrireModifier`;
CREATE TABLE `ecrireModifier` (
  `id_utilisateur` int(11) NOT NULL,
  `id_articles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `roles` set('biens','blog') NOT NULL,
  `id_connexion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `mail`, `mdp`, `roles`, `id_connexion`) VALUES
(10, 'admin@admin.fr', '$2y$10$/IhL27mh/3SbH7C3j/2Q.ukdEUu7GIQoZwk1qKNe0gAIa2DSG9Eau', 'biens,blog', 'fT5/e7TCIa8F3DTqia+/sUmyNk5D/WGwFrKlAmy9YZBHPjBx9LgLWzP4fmjGEVs2tkMsDtpzo0Iot87nday+bLOqht3YOL8BsTsZCG4RWJFFw5jGojn3hBOsVKOFK39kDhcd7fayBM55vzg22+lbzhryIf5lRkEa');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ajouterModifier`
--
ALTER TABLE `ajouterModifier`
  ADD PRIMARY KEY (`id_utilisateur`,`id_biens`),
  ADD KEY `id_biens` (`id_biens`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `biens`
--
ALTER TABLE `biens`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `consulterAchat`
--
ALTER TABLE `consulterAchat`
  ADD PRIMARY KEY (`id_contactAchat`,`id_utilisateur`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `consulterVente`
--
ALTER TABLE `consulterVente`
  ADD PRIMARY KEY (`id_contactVente`,`id_utilisateur`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `contactAchat`
--
ALTER TABLE `contactAchat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contactVente`
--
ALTER TABLE `contactVente`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ecrireModifier`
--
ALTER TABLE `ecrireModifier`
  ADD PRIMARY KEY (`id_utilisateur`,`id_articles`),
  ADD KEY `id_articles` (`id_articles`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `biens`
--
ALTER TABLE `biens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `contactAchat`
--
ALTER TABLE `contactAchat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `contactVente`
--
ALTER TABLE `contactVente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `ajouterModifier`
--
ALTER TABLE `ajouterModifier`
  ADD CONSTRAINT `ajouterModifier_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `ajouterModifier_ibfk_2` FOREIGN KEY (`id_biens`) REFERENCES `biens` (`id`);

--
-- Contraintes pour la table `consulterAchat`
--
ALTER TABLE `consulterAchat`
  ADD CONSTRAINT `consulterAchat_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `consulterAchat_ibfk_2` FOREIGN KEY (`id_contactAchat`) REFERENCES `contactAchat` (`id`);

--
-- Contraintes pour la table `consulterVente`
--
ALTER TABLE `consulterVente`
  ADD CONSTRAINT `consulterVente_ibfk_1` FOREIGN KEY (`id_contactVente`) REFERENCES `contactVente` (`id`),
  ADD CONSTRAINT `consulterVente_ibfk_2` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `ecrireModifier`
--
ALTER TABLE `ecrireModifier`
  ADD CONSTRAINT `ecrireModifier_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `ecrireModifier_ibfk_2` FOREIGN KEY (`id_articles`) REFERENCES `articles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
