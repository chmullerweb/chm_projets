-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 22 juin 2020 à 16:23
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `monbook_charlotte`
--

-- --------------------------------------------------------

--
-- Structure de la table `accueil`
--

CREATE TABLE `accueil` (
  `id_accueil` int(11) NOT NULL,
  `nomprofil` varchar(500) NOT NULL,
  `claim` varchar(500) NOT NULL,
  `intro` text NOT NULL,
  `iduu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `accueil`
--

INSERT INTO `accueil` (`id_accueil`, `nomprofil`, `claim`, `intro`, `iduu`) VALUES
(1, 'Charlotte Muller', 'Everybody can coding', 'Un sympathique site vitrine pour vous faire découvrir mes créations en développement web.', 'TEXT_ACCUEIL');

-- --------------------------------------------------------

--
-- Structure de la table `hobbies`
--

CREATE TABLE `hobbies` (
  `id_hobbies` int(11) NOT NULL,
  `nom` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id_projet` int(11) NOT NULL,
  `iduu` varchar(500) NOT NULL DEFAULT 'TEXT_PROJET',
  `titre` varchar(500) NOT NULL,
  `presentation` text NOT NULL,
  `lien` varchar(500) DEFAULT 'https://github.com/chmullerweb?tab=repositories',
  `annee` int(11) NOT NULL,
  `visible` tinyint(1) DEFAULT NULL,
  `ordre` int(11) NOT NULL,
  `img_main` varchar(500) DEFAULT NULL,
  `img1` varchar(500) DEFAULT NULL,
  `img2` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id_projet`, `iduu`, `titre`, `presentation`, `lien`, `annee`, `visible`, `ordre`, `img_main`, `img1`, `img2`) VALUES
(1, 'TEXT_PROJET', 'Museum', 'Site fictif d\'un musée d\'art moderne', '', 2020, 1, 1, 'img/Museum1.jpg', 'img/Museum2.jpg', 'img/Museum3.jpg'),
(2, 'TEXT_PROJET', 'Codevores', 'Site fictif de mise en relation entre professionnelles du digital et des recruteurs', 'https://chmullerweb.github.io/CODEVORES.CO/', 2020, 1, 2, 'img/Codevores1.jpg', 'img/Codevores2.jpg', 'img/Codevores3.jpg'),
(3, 'TEXT_PROJET', 'Las Venturas Hospital', 'Site d\'un hôpital aux soins acidulés', 'https://github.com/chmullerweb?tab=repositories', 2020, 1, 3, 'img/lasVenturasHospital1.jpg', 'img/lasVenturasHospital2.jpg', 'img/lasVenturasHospital3.jpg'),
(5, 'TEXT_PROJET', 'Paul', 'test', 'https://github.com/chmullerweb?tab=repositories', 2021, 0, 6, 'img/Paul1.jpg', NULL, NULL),
(6, 'TEXT_PROJET', 'baba', 'lalala', 'url', 2020, 0, 8, NULL, NULL, NULL),
(7, 'TEXT_PROJET', 'Grosbidon', '', '', 0, 0, 0, 'img/Grosbidon1.jpg', 'img/Grosbidon2.jpg', 'img/Grosbidon3.jpg'),
(10, 'TEXT_PROJET', 'Hello', '', '', 0, 0, 9, 'img/Hello1.jpg', 'img/Hello2.jpg', 'img/Hello3.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `projets_technos`
--

CREATE TABLE `projets_technos` (
  `id_projets_technos` int(11) NOT NULL,
  `projet_id` int(11) NOT NULL,
  `techno_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `projets_technos`
--

INSERT INTO `projets_technos` (`id_projets_technos`, `projet_id`, `techno_id`) VALUES
(1, 5, 25),
(2, 5, 2),
(3, 3, 2),
(5, 2, 6),
(8, 1, 25),
(9, 1, 2),
(10, 1, 5),
(11, 1, 20),
(12, 1, 4),
(13, 2, 25),
(14, 2, 6),
(15, 2, 7),
(16, 2, 2),
(17, 2, 3),
(18, 3, 6),
(19, 3, 25);

-- --------------------------------------------------------

--
-- Structure de la table `reseaux`
--

CREATE TABLE `reseaux` (
  `id_reseau` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `lien` text NOT NULL,
  `iduu` varchar(500) NOT NULL DEFAULT 'TEXT_RESEAU'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reseaux`
--

INSERT INTO `reseaux` (`id_reseau`, `nom`, `lien`, `iduu`) VALUES
(1, 'Linkedin', 'https://www.linkedin.com/in/charlotte-muller-038354a7/', 'TEXT_RESEAU'),
(2, 'Github', 'https://github.com/chmullerweb', 'TEXT_RESEAU'),
(3, 'Telephone', '0669116750', 'TEXT_RESEAU'),
(4, 'Mail', 'ch_muller@outlook.fr', 'TEXT_RESEAU');

-- --------------------------------------------------------

--
-- Structure de la table `technos`
--

CREATE TABLE `technos` (
  `id_techno` int(11) NOT NULL,
  `iduu` varchar(500) NOT NULL DEFAULT 'TEXT_TECHNO',
  `nomtechno` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `technos`
--

INSERT INTO `technos` (`id_techno`, `iduu`, `nomtechno`) VALUES
(2, 'TEXT_TECHNO', 'css3'),
(3, 'TEXT_TECHNO', 'javascript'),
(4, 'TEXT_TECHNO', 'animation css'),
(5, 'TEXT_TECHNO', 'php'),
(6, 'TEXT_TECHNO', 'bootstrap'),
(7, 'TEXT_TECHNO', 'bulma'),
(10, 'TEXT_TECHNO', 'node.js'),
(20, 'TEXT_TECHNO', 'MySQL'),
(25, 'TEXT_TECHNO', 'HTML5');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_admin` int(11) NOT NULL,
  `nom` varchar(300) NOT NULL,
  `identifiant` varchar(300) NOT NULL,
  `motdepasse` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_admin`, `nom`, `identifiant`, `motdepasse`) VALUES
(1, 'Nicolas', 'nicolas', '007'),
(2, 'Bob', 'bob', 'leponge'),
(3, 'Muller', 'muller', 'cha');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accueil`
--
ALTER TABLE `accueil`
  ADD PRIMARY KEY (`id_accueil`),
  ADD UNIQUE KEY `section` (`claim`);

--
-- Index pour la table `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`id_hobbies`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id_projet`),
  ADD UNIQUE KEY `ordre` (`ordre`);

--
-- Index pour la table `projets_technos`
--
ALTER TABLE `projets_technos`
  ADD PRIMARY KEY (`id_projets_technos`);

--
-- Index pour la table `reseaux`
--
ALTER TABLE `reseaux`
  ADD PRIMARY KEY (`id_reseau`);

--
-- Index pour la table `technos`
--
ALTER TABLE `technos`
  ADD PRIMARY KEY (`id_techno`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `identifiant` (`identifiant`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `accueil`
--
ALTER TABLE `accueil`
  MODIFY `id_accueil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id_projet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `projets_technos`
--
ALTER TABLE `projets_technos`
  MODIFY `id_projets_technos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `reseaux`
--
ALTER TABLE `reseaux`
  MODIFY `id_reseau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `technos`
--
ALTER TABLE `technos`
  MODIFY `id_techno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
