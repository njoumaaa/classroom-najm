-- phpMyAdmin SQL Dump
-- version 3.2.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Dim 24 Mars 2024 à 17:01
-- Version du serveur: 5.1.37
-- Version de PHP: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `projet__`
--

-- --------------------------------------------------------

--
-- Structure de la table `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `tel` int(8) NOT NULL,
  `password` varchar(8) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `information`
--

