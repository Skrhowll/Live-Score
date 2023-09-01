-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 01 sep. 2023 à 07:45
-- Version du serveur : 5.7.39
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE DATABASE Live_Score;
USE Live_Score;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `livescore`
--

-- --------------------------------------------------------

--
-- Structure de la table `competition`
--

CREATE TABLE `competition` (
  `id` int(11) NOT NULL,
  `libelle` varchar(150) NOT NULL,
  `logo` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `competition`
--

-- --------------------------------------------------------

--
-- Structure de la table `matchs`
--

CREATE TABLE `matchs` (
  `id` int(11) NOT NULL,
  `id_equipe1` int(11) DEFAULT NULL,
  `id_equipe2` int(11) NOT NULL,
  `score1` int(50) NOT NULL,
  `score2` int(11) NOT NULL,
  `id_competition` int(11) NOT NULL,
  `statut` VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `matchs`
--

-- --------------------------------------------------------

--
-- Structure de la table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `libelle` varchar(150) NOT NULL,
  `logo` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `team`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `mail` varchar(150) NOT NULL,
  `cle` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `matchs`
--
ALTER TABLE `matchs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipe1` (`id_equipe1`),
  ADD KEY `equipe2` (`id_equipe2`),
  ADD KEY `id_competition` (`id_competition`);

--
-- Index pour la table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`mail`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `competition`
--
ALTER TABLE `competition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `matchs`
--
ALTER TABLE `matchs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `matchs`
--
ALTER TABLE `matchs`
  ADD CONSTRAINT `fk_id_team` FOREIGN KEY (`id`) REFERENCES `team` (`id`),
  ADD CONSTRAINT `matchs_ibfk_1` FOREIGN KEY (`id_equipe1`) REFERENCES `team` (`id`),
  ADD CONSTRAINT `matchs_ibfk_2` FOREIGN KEY (`id_equipe2`) REFERENCES `team` (`id`),
  ADD CONSTRAINT `matchs_ibfk_3` FOREIGN KEY (`id_competition`) REFERENCES `competition` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

INSERT INTO Live_Score.competition (id, libelle, logo) VALUES(1, 'AFIP Premier League', 'img/competition/afip.jpeg');
INSERT INTO Live_Score.competition (id, libelle, logo) VALUES(2, 'Ligue 1', 'img/competition/Ligue1.png');
INSERT INTO Live_Score.competition (id, libelle, logo) VALUES(3, 'Liga Primera', 'img/competition/pl.jpg');
INSERT INTO Live_Score.competition (id, libelle, logo) VALUES(4, 'Bundesliga', 'img/competition/bundes.png');
INSERT INTO Live_Score.competition (id, libelle, logo) VALUES(5, 'La Liga Liga One', 'img/competition/laliga.jpg');
INSERT INTO Live_Score.competition (id, libelle, logo) VALUES(6, 'Onizuka League', 'img/competition/oni.jpg');

INSERT INTO Live_Score.team (id, libelle, logo) VALUES(1, 'Manchester City', 'img/team/Manchester_City.png');
INSERT INTO Live_Score.team (id, libelle, logo) VALUES(2, 'West Ham', 'img/team/West Ham.png');
INSERT INTO Live_Score.team (id, libelle, logo) VALUES(3, 'Tottenham', 'img/team/Tottenham.png');
INSERT INTO Live_Score.team (id, libelle, logo) VALUES(4, 'Liverpool', 'img/team/Liverpool.png');
INSERT INTO Live_Score.team (id, libelle, logo) VALUES(5, 'Arsenal', 'img/team/Asernal.png');
INSERT INTO Live_Score.team (id, libelle, logo) VALUES(6, 'Afip', 'img/team/afip.jpeg');
INSERT INTO Live_Score.team (id, libelle, logo) VALUES(7, 'Olympique Lyonnais', 'img/team/ol.svg.png');

INSERT INTO Live_Score.matchs(id, id_equipe1, id_equipe2, score1, score2, id_competition, statut) VALUES(1, 1, 2, 5, 0, 1, 'Terminé');
INSERT INTO Live_Score.matchs(id, id_equipe1, id_equipe2, score1, score2, id_competition, statut) VALUES(2, 3, 4, 2, 1, 4, 'En cours');
INSERT INTO Live_Score.matchs(id, id_equipe1, id_equipe2, score1, score2, id_competition, statut) VALUES(3, 2, 3, 4, 5, 3, 'En cours');
INSERT INTO Live_Score.matchs(id, id_equipe1, id_equipe2, score1, score2, id_competition, statut) VALUES(4, 4, 6, 0, 6, 6, 'Avenir');
INSERT INTO Live_Score.matchs(id, id_equipe1, id_equipe2, score1, score2, id_competition, statut) VALUES(5, 5, 4, 1, 0, 2, 'Terminé');
INSERT INTO Live_Score.matchs(id, id_equipe1, id_equipe2, score1, score2, id_competition, statut) VALUES(6, 6,5, 10, 0, 1, 'En cours');
INSERT INTO Live_Score.matchs(id, id_equipe1, id_equipe2, score1, score2, id_competition, statut) VALUES(7, 7, 2, 6, 4, 3, 'Avenir');
INSERT INTO Live_Score.matchs(id, id_equipe1, id_equipe2, score1, score2, id_competition, statut) VALUES(8, 6, 7, 5, 4, 4, 'Avenir');
INSERT INTO Live_Score.matchs(id, id_equipe1, id_equipe2, score1, score2, id_competition, statut) VALUES(9, 5, 2, 0, 1, 5, 'En cours');
INSERT INTO Live_Score.matchs(id, id_equipe1, id_equipe2, score1, score2, id_competition, statut) VALUES(10, 4, 1, 2, 2, 6, 'Terminé');