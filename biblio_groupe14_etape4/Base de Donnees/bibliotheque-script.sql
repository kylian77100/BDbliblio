-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 05 jan. 2021 à 16:41
-- Version du serveur :  5.7.32
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données : `bibliothèque`
--

-- --------------------------------------------------------

--
-- Structure de la table `Auteur`
--

CREATE TABLE `Auteur` (
  `idPersonne` int(11) NOT NULL,
  `idLivre` varchar(15) NOT NULL,
  `idRole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Auteur`
--

INSERT INTO `Auteur` (`idPersonne`, `idLivre`, `idRole`) VALUES
(1, '2264069112', 1),
(3, '2264069112', 2),
(4, '2264069112', 3),
(1, '2264056002', 1),
(1, '2264056169', 1),
(6, '203585573X', 1),
(5, '208127857X', 1),
(5, '2253163503', 1),
(6, '2253041475', 1),
(8, '2253160466', 1),
(8, '2253038741', 1),
(8, '2253037923', 1),
(2, '2035867916', 1),
(9, '2070373096', 1),
(10, '2081219972', 1),
(11, '2266152182', 1),
(12, '2266152182', 3),
(13, '2809710562', 1),
(14, '2809710562', 3),
(15, '2809710562', 3),
(16, '2266203533', 4),
(17, '096573840X', 1),
(19, '9782012101388', 5),
(20, '9782012101388', 6),
(19, '2012101399', 5),
(20, '2012101399', 6),
(19, '2012101488', 5),
(20, '2012101488', 6),
(19, '2012101526', 5),
(20, '2012101526', 6),
(19, '2205009214', 5),
(20, '2205009214', 6),
(19, '9782800101583', 5),
(18, '9782800101583', 6),
(19, '9067930709', 5),
(18, '9067930709', 6),
(19, '9782205003055', 5),
(18, '9782205003055', 6),
(19, '2205006045', 5),
(18, '2205006045', 6),
(19, '2205005855', 5),
(18, '2205005855', 6);

-- --------------------------------------------------------

--
-- Structure de la table `Editeur`
--

CREATE TABLE `Editeur` (
  `id` int(11) NOT NULL,
  `libelle` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Editeur`
--

INSERT INTO `Editeur` (`id`, `libelle`) VALUES
(10, 'Dupuis'),
(11, 'Dargaud');

-- --------------------------------------------------------

--
-- Structure de la table `Genre`
--

CREATE TABLE `Genre` (
  `id` int(11) NOT NULL,
  `libelle` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Genre`
--

INSERT INTO `Genre` (`id`, `libelle`) VALUES
(6, 'Bande dessinée'),
(4, 'Essai'),
(3, 'Nouvelle'),
(5, 'Poésie'),
(2, 'Roman'),
(1, 'Théâtre');

-- --------------------------------------------------------

--
-- Structure de la table `Langue`
--

CREATE TABLE `Langue` (
  `id` int(11) NOT NULL,
  `libelle` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Langue`
--

INSERT INTO `Langue` (`id`, `libelle`) VALUES
(1, 'Anglais'),
(2, 'Français'),
(3, 'Japonais'),
(4, 'Espagnol'),
(5, 'Italien');

-- --------------------------------------------------------

--
-- Structure de la table `Livre`
--

CREATE TABLE `Livre` (
  `isbn` varchar(15) NOT NULL,
  `titre` varchar(500) NOT NULL,
  `editeur` int(11) NOT NULL,
  `annee` int(11) DEFAULT NULL,
  `genre` int(11) DEFAULT NULL,
  `langue` int(11) DEFAULT NULL,
  `nbpages` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Livre`
--

INSERT INTO `Livre` (`isbn`, `titre`, `editeur`, `annee`, `genre`, `langue`, `nbpages`) VALUES
('2012101399', 'Le Combat des Chefs', 11, 1966, 6, 2, 48),
('2012101488', 'Astérix chez les Helvètes', 11, 1973, 6, 2, 48),
('2012101526', 'Astérix en Corse', 11, 1973, 6, 2, 48),
('2205005855', 'Ma Dalton', 11, 1971, 6, 2, 48),
('2205006045', 'Chasseur de Primes', 11, 1972, 6, 2, 48),
('2205009214', 'Obélix et Compagnie', 11, 1976, 6, 2, 48),
('9067930709', 'Le 20ème de Cavalerie', 10, 1965, 6, 2, 48),
('9782012101388', 'Astérix et Cléopâtre', 11, 1965, 6, 2, 48),
('9782205003055', 'Le Pied-Tendre', 11, 1970, 6, 2, 48),
('9782800101583', 'Les Rivaux de Painful Gulch', 10, 1962, 6, 2, 48);

-- --------------------------------------------------------

--
-- Structure de la table `Personne`
--

CREATE TABLE `Personne` (
  `id` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Personne`
--

INSERT INTO `Personne` (`id`, `nom`, `prenom`) VALUES
(18, 'Morris', NULL),
(19, 'Gosciny', 'René'),
(20, 'Uderzo', 'Albert');

-- --------------------------------------------------------

--
-- Structure de la table `Role`
--

CREATE TABLE `Role` (
  `id` int(11) NOT NULL,
  `libelle` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Role`
--

INSERT INTO `Role` (`id`, `libelle`) VALUES
(5, 'Auteur'),
(6, 'Illustrateur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Editeur`
--
ALTER TABLE `Editeur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Genre`
--
ALTER TABLE `Genre`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `libelle` (`libelle`);

--
-- Index pour la table `Langue`
--
ALTER TABLE `Langue`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Livre`
--
ALTER TABLE `Livre`
  ADD PRIMARY KEY (`isbn`);

--
-- Index pour la table `Personne`
--
ALTER TABLE `Personne`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Role`
--
ALTER TABLE `Role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Editeur`
--
ALTER TABLE `Editeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `Genre`
--
ALTER TABLE `Genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `Langue`
--
ALTER TABLE `Langue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `Personne`
--
ALTER TABLE `Personne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `Role`
--
ALTER TABLE `Role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
