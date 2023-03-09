-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 09 mars 2023 à 05:03
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `image` varchar(500) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `category_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `image`, `content`, `date`, `category_id`) VALUES
(226, 'How Art and Creativity Improve Your Brain Function', 'IMG-640953d37ee337.37420511.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus laudantium ea velit suscipit magnam illum, voluptatum, ducimus officia consequuntur incidunt expedita, culpa atque error saepe animi tempore qui accusamus quisquam?\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus laudantium ea velit suscipit magnam illum, voluptatum, ducimus officia consequuntur incidunt expedita, culpa atque error saepe animi tempore qui accusamus quisquam?\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus laudantium ea velit suscipit magnam illum, voluptatum, ducimus officia consequuntur incidunt expedita, culpa atque error saepe animi tempore qui accusamus quisquam?\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus laudantium ea velit suscipit magnam illum, voluptatum, ducimus officia consequuntur incidunt expedita, culpa atque error saepe animi tempore qui accusamus quisquam?\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus laudantium ea velit suscipit magnam illum, voluptatum, ducimus officia consequuntur incidunt expedita, culpa atque error saepe animi tempore qui accusamus quisquam?\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus laudantium ea velit suscipit magnam illum, voluptatum, ducimus officia consequuntur incidunt expedita, culpa atque error saepe animi tempore qui accusamus quisquam?\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus laudantium ea velit suscipit magnam illum, voluptatum, ducimus officia consequuntur incidunt expedita, culpa atque error saepe animi tempore qui accusamus quisquam?\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus laudantium ea velit suscipit magnam illum, voluptatum, ducimus officia consequuntur incidunt expedita, culpa atque error saepe animi tempore qui accusamus quisquam?', '2023-03-07', 2),
(227, 'The Science of Creativity: Exploring the Creative Process', 'IMG-6409541848c036.99200056.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero aut deleniti dignissimos excepturi autem quia quam, nulla consequuntur sunt tenetur. Quos, voluptates reprehenderit? Excepturi sint deserunt at, quidem libero itaque?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero aut deleniti dignissimos excepturi autem quia quam, nulla consequuntur sunt tenetur. Quos, voluptates reprehenderit? Excepturi sint deserunt at, quidem libero itaque?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero aut deleniti dignissimos excepturi autem quia quam, nulla consequuntur sunt tenetur. Quos, voluptates reprehenderit? Excepturi sint deserunt at, quidem libero itaque?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero aut deleniti dignissimos excepturi autem quia quam, nulla consequuntur sunt tenetur. Quos, voluptates reprehenderit? Excepturi sint deserunt at, quidem libero itaque?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero aut deleniti dignissimos excepturi autem quia quam, nulla consequuntur sunt tenetur. Quos, voluptates reprehenderit? Excepturi sint deserunt at, quidem libero itaque?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero aut deleniti dignissimos excepturi autem quia quam, nulla consequuntur sunt tenetur. Quos, voluptates reprehenderit? Excepturi sint deserunt at, quidem libero itaque?', '2023-03-13', 3),
(228, 'The Power of Art: How It Can Transform Communities', 'IMG-6409543e65f8a7.65931404.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero aut deleniti dignissimos excepturi autem quia quam, nulla consequuntur sunt tenetur. Quos, voluptates reprehenderit? Excepturi sint deserunt at, quidem libero itaque?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero aut deleniti dignissimos excepturi autem quia quam, nulla consequuntur sunt tenetur. Quos, voluptates reprehenderit? Excepturi sint deserunt at, quidem libero itaque?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero aut deleniti dignissimos excepturi autem quia quam, nulla consequuntur sunt tenetur. Quos, voluptates reprehenderit? Excepturi sint deserunt at, quidem libero itaque?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero aut deleniti dignissimos excepturi autem quia quam, nulla consequuntur sunt tenetur. Quos, voluptates reprehenderit? Excepturi sint deserunt at, quidem libero itaque?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero aut deleniti dignissimos excepturi autem quia quam, nulla consequuntur sunt tenetur. Quos, voluptates reprehenderit? Excepturi sint deserunt at, quidem libero itaque?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero aut deleniti dignissimos excepturi autem quia quam, nulla consequuntur sunt tenetur. Quos, voluptates reprehenderit? Excepturi sint deserunt at, quidem libero itaque?', '2023-04-04', 4),
(229, 'Why Creativity Matters More Than Ever ', 'IMG-640959670fce87.68480481.jpg', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus quisquam, sapiente dicta magnam fugiat voluptates, itaque in ratione consequuntur veniam aliquid harum reiciendis quos laudantium dolorem quae nesciunt tempore minus!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus quisquam, sapiente dicta magnam fugiat voluptates, itaque in ratione consequuntur veniam aliquid harum reiciendis quos laudantium dolorem quae nesciunt tempore minus!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus quisquam, sapiente dicta magnam fugiat voluptates, itaque in ratione consequuntur veniam aliquid harum reiciendis quos laudantium dolorem quae nesciunt tempore minus!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus quisquam, sapiente dicta magnam fugiat voluptates, itaque in ratione consequuntur veniam aliquid harum reiciendis quos laudantium dolorem quae nesciunt tempore minus!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus quisquam, sapiente dicta magnam fugiat voluptates, itaque in ratione consequuntur veniam aliquid harum reiciendis quos laudantium dolorem quae nesciunt tempore minus!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus quisquam, sapiente dicta magnam fugiat voluptates, itaque in ratione consequuntur veniam aliquid harum reiciendis quos laudantium dolorem quae nesciunt tempore minus!', '2023-03-06', 4),
(230, 'The Power of Art', 'IMG-640959dd52e2d2.67282750.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates dolorum ullam voluptate repudiandae cum harum natus veritatis praesentium magni ducimus amet reprehenderit, laboriosam quos ex illo. Officia quae vel assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates dolorum ullam voluptate repudiandae cum harum natus veritatis praesentium magni ducimus amet reprehenderit, laboriosam quos ex illo. Officia quae vel assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates dolorum ullam voluptate repudiandae cum harum natus veritatis praesentium magni ducimus amet reprehenderit, laboriosam quos ex illo. Officia quae vel assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates dolorum ullam voluptate repudiandae cum harum natus veritatis praesentium magni ducimus amet reprehenderit, laboriosam quos ex illo. Officia quae vel assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates dolorum ullam voluptate repudiandae cum harum natus veritatis praesentium magni ducimus amet reprehenderit, laboriosam quos ex illo. Officia quae vel assumenda.', '2023-03-28', 1),
(231, 'Creativity and Innovation', 'IMG-64095a2043a8c3.34614554.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe minima veniam nihil itaque blanditiis numquam repellendus quasi quidem. Fugiat nihil temporibus est doloremque consequuntur quo rerum quod ab cupiditate voluptas.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe minima veniam nihil itaque blanditiis numquam repellendus quasi quidem. Fugiat nihil temporibus est doloremque consequuntur quo rerum quod ab cupiditate voluptas.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe minima veniam nihil itaque blanditiis numquam repellendus quasi quidem. Fugiat nihil temporibus est doloremque consequuntur quo rerum quod ab cupiditate voluptas.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe minima veniam nihil itaque blanditiis numquam repellendus quasi quidem. Fugiat nihil temporibus est doloremque consequuntur quo rerum quod ab cupiditate voluptas.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe minima veniam nihil itaque blanditiis numquam repellendus quasi quidem. Fugiat nihil temporibus est doloremque consequuntur quo rerum quod ab cupiditate voluptas.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe minima veniam nihil itaque blanditiis numquam repellendus quasi quidem. Fugiat nihil temporibus est doloremque consequuntur quo rerum quod ab cupiditate voluptas.', '2023-03-21', 2);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`) VALUES
(1, 'sport'),
(2, 'politique'),
(3, 'culture'),
(4, 'économie');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `image_url`) VALUES
(8, 'IMG-63f8ad5b9eb931.19992653.jpg'),
(9, 'IMG-63f8ae20252d61.08451945.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_ibfk_1` (`category_id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
