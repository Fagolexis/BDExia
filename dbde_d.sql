-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 18 Avril 2017 à 07:49
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dbde`
--

-- --------------------------------------------------------

--
-- Structure de la table `activites`
--

CREATE TABLE `activites` (
  `ID_ACTIVITE` int(11) NOT NULL AUTO_INCREMENT,
  `ETAT_ACT` int(11) NOT NULL,
  `AUTEUR_ACT` int(11) NOT NULL,
  `NOM_ACTIVITE` char(255) NOT NULL,
  `DESCRIPTION_ACTIVITE` text NOT NULL,
  `PRIX_ACTIVITE` decimal(10,0) DEFAULT NULL,
  `LIEU` char(255) DEFAULT NULL,
  `INSCRITS_MAX` int(11) DEFAULT NULL,
  `AGE_MIN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `boutique`
--

CREATE TABLE `boutique` (
  `ID_PRODUIT` int(11) NOT NULL AUTO_INCREMENT,
  `DATE_PROD` int(11) NOT NULL,
  `STOCK` int(11) NOT NULL,
  `NOM_PRODUIT` char(255) NOT NULL,
  `DESCRIPTION_PRODUIT` text,
  `PRIX_PRODUIT` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `choix_vote`
--

CREATE TABLE `choix_vote` (
  `ID_CHOIX` int(11) NOT NULL AUTO_INCREMENT,
  `CHOIX` char(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `ID_COMMENTAIRE` int(11) NOT NULL AUTO_INCREMENT,
  `AUTEUR_COMM` int(11) NOT NULL,
  `IMG_COMM` int(11) NOT NULL,
  `COMMENTAIRE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `dates`
--

CREATE TABLE `dates` (
  `ID_DATE` int(11) NOT NULL AUTO_INCREMENT,
  `TYPE_DATE` int(11) NOT NULL,
  `DATE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `date_act`
--

CREATE TABLE `date_act` (
  `ID_DATE_ACT` int(11) NOT NULL,
  `DATE_ACT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `etats_activites`
--

CREATE TABLE `etats_activites` (
  `ID_ETAT` int(11) NOT NULL AUTO_INCREMENT,
  `ETAT` char(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `im_act`
--

CREATE TABLE `im_act` (
  `ID_IMG_ACT` int(11) NOT NULL,
  `IMG_ACT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `im_prod`
--

CREATE TABLE `im_prod` (
  `ID_IMG_PROD` int(11) NOT NULL,
  `IMG_PROD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `inscrits`
--

CREATE TABLE `inscrits` (
  `ID_INSCRIT` int(11) NOT NULL,
  `INSCRIT_ACT` int(11) NOT NULL,
  `INSCRIT_CHOIX` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `LIKES_USER` int(11) NOT NULL,
  `LIKES_IMG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE `photos` (
  `ID_IMG` int(11) NOT NULL AUTO_INCREMENT,
  `TYPE_IMG` int(11) NOT NULL,
  `AUTEUR_IMG` int(11) DEFAULT NULL,
  `DATE_IMG` int(11) NOT NULL,
  `CHEMIN` char(127) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `promotions`
--

CREATE TABLE `promotions` (
  `ID_PROMO` int(11) NOT NULL AUTO_INCREMENT,
  `PROMO` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_bin;

--
-- Contenu de la table `promotions`
--

INSERT INTO `promotions` (`ID_PROMO`, `PROMO`) VALUES
(1, 'A1'),
(2, 'A2'),
(3, 'A3'),
(4, 'A4'),
(5, 'A5');

-- --------------------------------------------------------

--
-- Structure de la table `roles_users`
--

CREATE TABLE `roles_users` (
  `ID_ROLE` int(11) NOT NULL AUTO_INCREMENT,
  `ROLE` char(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_bin;

--
-- Contenu de la table `roles_users`
--

INSERT INTO `roles_users` (`ID_ROLE`, `ROLE`) VALUES
(1, 'Etudiant'),
(2, 'BDE'),
(3, 'CESI');

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `ID_TYPE` int(11) NOT NULL AUTO_INCREMENT,
  `TYPE` char(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_bin;

--
-- Contenu de la table `types`
--

INSERT INTO `types` (`ID_TYPE`, `TYPE`) VALUES
(1, 'Principale'),
(2, 'Secondaire');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `ID_USER` int(11) NOT NULL AUTO_INCREMENT,
  `ROLE_USER` int(11) NOT NULL,
  `AVATAR_USER` int(11) DEFAULT NULL,
  `PROMO_USER` int(11) DEFAULT NULL,
  `NOM` char(255) NOT NULL,
  `PRENOM` char(255) NOT NULL,
  `MAIL` char(255) NOT NULL,
  `MDP` text NOT NULL,
  `NAISSANCE` date NOT NULL,
  `TELEPHONE` char(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_bin;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`ID_USER`, `ROLE_USER`, `AVATAR_USER`, `PROMO_USER`, `NOM`, `PRENOM`, `MAIL`, `MDP`, `NAISSANCE`, `TELEPHONE`) VALUES
(1, 3, NULL, 2, 'Lucas', 'Alexis', 'alexis.lucas1@viacesi.fr', 'test', '1997-10-24', '0635109657'),
(2, 2, NULL, 2, 'Caillat', 'François', 'francois.caillat@viacesi.fr', 'testf', '2002-03-25', NULL),
(3, 2, NULL, 2, 'Lebarillier', 'Quentin', 'quentin.lebarillier@viacesi.fr', 'testq', '1997-06-06', NULL),
(4, 1, NULL, 2, 'Cano', 'Alexandre', 'alexandre.cano@viacesi.fr', 'testc', '2002-03-25', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `activites`
--
ALTER TABLE `activites`
  ADD PRIMARY KEY (`ID_ACTIVITE`),
  ADD KEY `FK_ACTIVITE_A_UN_AUTEUR` (`AUTEUR_ACT`),
  ADD KEY `FK_ACTIVITE_A_UN_ETAT` (`ETAT_ACT`);

--
-- Index pour la table `boutique`
--
ALTER TABLE `boutique`
  ADD PRIMARY KEY (`ID_PRODUIT`),
  ADD KEY `FK_UN_PRODUIT_A_UNE_DATE_DE_PARUTION` (`DATE_PROD`);

--
-- Index pour la table `choix_vote`
--
ALTER TABLE `choix_vote`
  ADD PRIMARY KEY (`ID_CHOIX`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`ID_COMMENTAIRE`),
  ADD KEY `FK_UNE_PHOTO_PEUT_AVOIR_DES_COMMENTAIRES` (`IMG_COMM`),
  ADD KEY `FK_USER_PEUT_METTRE_PLUSIEURS_COMMENTAIRES` (`AUTEUR_COMM`);

--
-- Index pour la table `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`ID_DATE`),
  ADD KEY `FK_UN_DATE_A_UN_TYPE` (`TYPE_DATE`);

--
-- Index pour la table `date_act`
--
ALTER TABLE `date_act`
  ADD PRIMARY KEY (`ID_DATE_ACT`,`DATE_ACT`),
  ADD KEY `FK_ACTIVITE_A_UNE_AU_MOINS_UNE_DATE_DE_PARUTION` (`DATE_ACT`);

--
-- Index pour la table `etats_activites`
--
ALTER TABLE `etats_activites`
  ADD PRIMARY KEY (`ID_ETAT`);

--
-- Index pour la table `im_act`
--
ALTER TABLE `im_act`
  ADD PRIMARY KEY (`ID_IMG_ACT`,`IMG_ACT`),
  ADD KEY `FK_ACTIVITES_PEUT_AVOIR_AU_MOINS_UNE_IMAGE` (`IMG_ACT`);

--
-- Index pour la table `im_prod`
--
ALTER TABLE `im_prod`
  ADD PRIMARY KEY (`ID_IMG_PROD`,`IMG_PROD`),
  ADD KEY `FK_PRODUIT_A_AU_MOINS_UNE_PHOTO` (`IMG_PROD`);

--
-- Index pour la table `inscrits`
--
ALTER TABLE `inscrits`
  ADD PRIMARY KEY (`ID_INSCRIT`,`INSCRIT_ACT`,`INSCRIT_CHOIX`),
  ADD KEY `FK_USER_PEUT_PARTICIPER_A_UNE_OU_PLUSIEURS_ACTIVITES` (`INSCRIT_CHOIX`),
  ADD KEY `FK_USER_PEUT_PARTICIPER_A_UNE_OU_PLUSIEURS_ACTIVITES3` (`INSCRIT_ACT`);

--
-- Index pour la table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`LIKES_USER`,`LIKES_IMG`),
  ADD KEY `FK_USER_PEUT_AIMER_DES_PHOTOS` (`LIKES_IMG`);

--
-- Index pour la table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`ID_IMG`),
  ADD KEY `FK_PHOTO_A_UNE_DATE_DE_PUBLICATION` (`DATE_IMG`),
  ADD KEY `FK_UNE_PHOTO_A_UN_TYPE` (`TYPE_IMG`),
  ADD KEY `FK_UNE_PHOTO_PEUT_AVOIR_UN_AUTEUR` (`AUTEUR_IMG`);

--
-- Index pour la table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`ID_PROMO`);

--
-- Index pour la table `roles_users`
--
ALTER TABLE `roles_users`
  ADD PRIMARY KEY (`ID_ROLE`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`ID_TYPE`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_USER`),
  ADD KEY `FK_USER_A_UN_AVATAR` (`AVATAR_USER`),
  ADD KEY `FK_USER_A_UN_ROLE` (`ROLE_USER`),
  ADD KEY `FK_USER_PEUT_APPARTENIR_A_UNE_PROMOTION` (`PROMO_USER`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `activites`
--
ALTER TABLE `activites`
  ADD CONSTRAINT `FK_ACTIVITE_A_UN_AUTEUR` FOREIGN KEY (`AUTEUR_ACT`) REFERENCES `users` (`ID_USER`),
  ADD CONSTRAINT `FK_ACTIVITE_A_UN_ETAT` FOREIGN KEY (`ETAT_ACT`) REFERENCES `etats_activites` (`ID_ETAT`);

--
-- Contraintes pour la table `boutique`
--
ALTER TABLE `boutique`
  ADD CONSTRAINT `FK_UN_PRODUIT_A_UNE_DATE_DE_PARUTION` FOREIGN KEY (`DATE_PROD`) REFERENCES `dates` (`ID_DATE`);

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `FK_UNE_PHOTO_PEUT_AVOIR_DES_COMMENTAIRES` FOREIGN KEY (`IMG_COMM`) REFERENCES `photos` (`ID_IMG`),
  ADD CONSTRAINT `FK_USER_PEUT_METTRE_PLUSIEURS_COMMENTAIRES` FOREIGN KEY (`AUTEUR_COMM`) REFERENCES `users` (`ID_USER`);

--
-- Contraintes pour la table `dates`
--
ALTER TABLE `dates`
  ADD CONSTRAINT `FK_UN_DATE_A_UN_TYPE` FOREIGN KEY (`TYPE_DATE`) REFERENCES `types` (`ID_TYPE`);

--
-- Contraintes pour la table `date_act`
--
ALTER TABLE `date_act`
  ADD CONSTRAINT `FK_ACTIVITE_A_UNE_AU_MOINS_UNE_DATE_DE_PARUTION` FOREIGN KEY (`DATE_ACT`) REFERENCES `dates` (`ID_DATE`),
  ADD CONSTRAINT `FK_ACTIVITE_A_UNE_AU_MOINS_UNE_DATE_DE_PARUTION2` FOREIGN KEY (`ID_DATE_ACT`) REFERENCES `activites` (`ID_ACTIVITE`);

--
-- Contraintes pour la table `im_act`
--
ALTER TABLE `im_act`
  ADD CONSTRAINT `FK_ACTIVITES_PEUT_AVOIR_AU_MOINS_UNE_IMAGE` FOREIGN KEY (`IMG_ACT`) REFERENCES `activites` (`ID_ACTIVITE`),
  ADD CONSTRAINT `FK_ACTIVITES_PEUT_AVOIR_AU_MOINS_UNE_IMAGE2` FOREIGN KEY (`ID_IMG_ACT`) REFERENCES `photos` (`ID_IMG`);

--
-- Contraintes pour la table `im_prod`
--
ALTER TABLE `im_prod`
  ADD CONSTRAINT `FK_PRODUIT_A_AU_MOINS_UNE_PHOTO` FOREIGN KEY (`IMG_PROD`) REFERENCES `boutique` (`ID_PRODUIT`),
  ADD CONSTRAINT `FK_PRODUIT_A_AU_MOINS_UNE_PHOTO2` FOREIGN KEY (`ID_IMG_PROD`) REFERENCES `photos` (`ID_IMG`);

--
-- Contraintes pour la table `inscrits`
--
ALTER TABLE `inscrits`
  ADD CONSTRAINT `FK_USER_PEUT_PARTICIPER_A_UNE_OU_PLUSIEURS_ACTIVITES` FOREIGN KEY (`INSCRIT_CHOIX`) REFERENCES `choix_vote` (`ID_CHOIX`),
  ADD CONSTRAINT `FK_USER_PEUT_PARTICIPER_A_UNE_OU_PLUSIEURS_ACTIVITES2` FOREIGN KEY (`ID_INSCRIT`) REFERENCES `users` (`ID_USER`),
  ADD CONSTRAINT `FK_USER_PEUT_PARTICIPER_A_UNE_OU_PLUSIEURS_ACTIVITES3` FOREIGN KEY (`INSCRIT_ACT`) REFERENCES `activites` (`ID_ACTIVITE`);

--
-- Contraintes pour la table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `FK_USER_PEUT_AIMER_DES_PHOTOS` FOREIGN KEY (`LIKES_IMG`) REFERENCES `photos` (`ID_IMG`),
  ADD CONSTRAINT `FK_USER_PEUT_AIMER_DES_PHOTOS2` FOREIGN KEY (`LIKES_USER`) REFERENCES `users` (`ID_USER`);

--
-- Contraintes pour la table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `FK_PHOTO_A_UNE_DATE_DE_PUBLICATION` FOREIGN KEY (`DATE_IMG`) REFERENCES `dates` (`ID_DATE`),
  ADD CONSTRAINT `FK_UNE_PHOTO_A_UN_TYPE` FOREIGN KEY (`TYPE_IMG`) REFERENCES `types` (`ID_TYPE`),
  ADD CONSTRAINT `FK_UNE_PHOTO_PEUT_AVOIR_UN_AUTEUR` FOREIGN KEY (`AUTEUR_IMG`) REFERENCES `users` (`ID_USER`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_USER_A_UN_AVATAR` FOREIGN KEY (`AVATAR_USER`) REFERENCES `photos` (`ID_IMG`),
  ADD CONSTRAINT `FK_USER_A_UN_ROLE` FOREIGN KEY (`ROLE_USER`) REFERENCES `roles_users` (`ID_ROLE`),
  ADD CONSTRAINT `FK_USER_PEUT_APPARTENIR_A_UNE_PROMOTION` FOREIGN KEY (`PROMO_USER`) REFERENCES `promotions` (`ID_PROMO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
