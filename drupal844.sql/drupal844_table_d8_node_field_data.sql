
-- --------------------------------------------------------

--
-- Structure de la table `d8_node_field_data`
--

DROP TABLE IF EXISTS `d8_node_field_data`;
CREATE TABLE IF NOT EXISTS `d8_node_field_data` (
  `nid` int(10) UNSIGNED NOT NULL,
  `vid` int(10) UNSIGNED NOT NULL,
  `type` varchar(32) CHARACTER SET ascii NOT NULL COMMENT 'The ID of the target entity.',
  `langcode` varchar(12) CHARACTER SET ascii NOT NULL,
  `status` tinyint(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `uid` int(10) UNSIGNED NOT NULL COMMENT 'The ID of the target entity.',
  `created` int(11) NOT NULL,
  `changed` int(11) NOT NULL,
  `promote` tinyint(4) NOT NULL,
  `sticky` tinyint(4) NOT NULL,
  `default_langcode` tinyint(4) NOT NULL,
  `revision_translation_affected` tinyint(4) DEFAULT NULL,
  `ds_switch` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`nid`,`langcode`),
  KEY `node__id__default_langcode__langcode` (`nid`,`default_langcode`,`langcode`),
  KEY `node__vid` (`vid`),
  KEY `node_field__type__target_id` (`type`),
  KEY `node_field__uid__target_id` (`uid`),
  KEY `node_field__created` (`created`),
  KEY `node_field__changed` (`changed`),
  KEY `node__status_type` (`status`,`type`,`nid`),
  KEY `node__frontpage` (`promote`,`status`,`sticky`,`created`),
  KEY `node__title_type` (`title`(191),`type`(4))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='The data table for node entities.';

--
-- Déchargement des données de la table `d8_node_field_data`
--

INSERT INTO `d8_node_field_data` (`nid`, `vid`, `type`, `langcode`, `status`, `title`, `uid`, `created`, `changed`, `promote`, `sticky`, `default_langcode`, `revision_translation_affected`, `ds_switch`) VALUES
(1, 1, 'page', 'en', 1, 'Qui sommes-nous ?', 1, 1516358016, 1516358343, 0, 0, 1, 1, NULL),
(2, 2, 'page', 'en', 1, 'Conditions générales d\'utilisation', 1, 1516358362, 1516358574, 0, 0, 1, 1, NULL),
(3, 3, 'article', 'en', 1, 'Praemitto', 1, 1499011835, 1516358899, 0, 0, 1, 1, NULL),
(4, 4, 'article', 'en', 1, 'Dolor Metuo Pecus Plaga', 1, 1508676851, 1516358903, 1, 0, 1, 1, NULL),
(5, 5, 'article', 'en', 1, 'Pala Plaga', 0, 1515135061, 1516358906, 0, 0, 1, 1, NULL),
(6, 6, 'article', 'en', 1, 'Exputo Lenis', 1, 1500646978, 1516358906, 0, 0, 1, 1, NULL),
(7, 7, 'article', 'en', 1, 'Quia Quidne', 0, 1511574683, 1516358907, 0, 0, 1, 1, NULL),
(8, 8, 'article', 'en', 1, 'Incassum Quia Quis Valde', 0, 1494746963, 1516358907, 1, 0, 1, 1, NULL),
(9, 9, 'article', 'en', 1, 'Bene Humo Nulla Vero', 0, 1501527828, 1516358909, 0, 0, 1, 1, NULL),
(10, 10, 'article', 'en', 1, 'Antehabeo Defui Iriure Patria', 0, 1506775991, 1516358909, 0, 0, 1, 1, NULL),
(11, 11, 'article', 'en', 1, 'Humo Qui Sudo Tego Valetudo', 0, 1515578967, 1516358909, 0, 0, 1, 1, NULL),
(12, 12, 'article', 'en', 1, 'Melior', 1, 1506957241, 1516358911, 0, 0, 1, 1, NULL),
(13, 13, 'article', 'en', 1, 'Huic', 0, 1496343243, 1516358911, 1, 0, 1, 1, NULL),
(14, 14, 'article', 'en', 1, 'Conventio Quidem Suscipere Valetudo', 0, 1513541493, 1516358912, 0, 0, 1, 1, NULL),
(15, 15, 'article', 'en', 1, 'Caecus', 0, 1516082038, 1516358912, 1, 0, 1, 1, NULL),
(16, 16, 'article', 'en', 1, 'Iaceo', 1, 1487392538, 1516358917, 0, 0, 1, 1, NULL),
(17, 17, 'article', 'en', 1, 'Commodo Nibh Nunc Quia Ut', 1, 1497705849, 1516358919, 1, 0, 1, 1, NULL),
(18, 18, 'article', 'en', 1, 'Pecus', 0, 1506964874, 1516358919, 1, 0, 1, 1, NULL),
(19, 19, 'article', 'en', 1, 'Causa Cogo Esse Volutpat', 0, 1511746311, 1516358921, 1, 0, 1, 1, NULL),
(20, 20, 'article', 'en', 1, 'Ea Sit', 0, 1505219227, 1516358923, 1, 0, 1, 1, NULL),
(21, 21, 'article', 'en', 1, 'Commoveo Lucidus Suscipit', 1, 1490175381, 1516358926, 1, 0, 1, 1, NULL),
(22, 22, 'article', 'en', 1, 'Ibidem Magna Pneum', 0, 1488406634, 1516358926, 1, 0, 1, 1, NULL),
(23, 23, 'article', 'en', 1, 'Neo Nutus Olim Ymo', 1, 1508287415, 1516358926, 1, 0, 1, 1, NULL),
(24, 24, 'article', 'en', 1, 'Causa Genitus Incassum Uxor Veniam', 1, 1496651024, 1516358929, 1, 0, 1, 1, NULL),
(25, 25, 'article', 'en', 1, 'Ex', 1, 1507824837, 1516358931, 0, 0, 1, 1, NULL),
(26, 26, 'article', 'en', 1, 'Ex Olim', 0, 1507943579, 1516358931, 0, 0, 1, 1, NULL),
(27, 27, 'article', 'en', 1, 'At Genitus Lobortis Probo', 1, 1487279877, 1516358933, 0, 0, 1, 1, NULL),
(28, 28, 'article', 'en', 1, 'Consectetuer Haero Jumentum Scisco', 1, 1489467358, 1516358936, 0, 0, 1, 1, NULL),
(29, 29, 'article', 'en', 1, 'Gemino In Nunc', 1, 1498644879, 1516358938, 1, 0, 1, 1, NULL),
(30, 30, 'article', 'en', 1, 'Luctus', 0, 1502894684, 1516358938, 0, 0, 1, 1, NULL),
(31, 31, 'article', 'en', 1, 'Natu Os', 1, 1496520475, 1516358938, 0, 0, 1, 1, NULL),
(32, 32, 'article', 'en', 1, 'Augue Exerci Sino', 0, 1514229806, 1516358939, 1, 0, 1, 1, NULL),
(33, 33, 'article', 'en', 1, 'Abdo Elit Ille Luctus', 0, 1505196735, 1516358939, 0, 0, 1, 1, NULL),
(34, 34, 'article', 'en', 1, 'Pneum', 0, 1496366594, 1516358941, 1, 0, 1, 1, NULL),
(35, 35, 'article', 'en', 1, 'Jumentum', 0, 1485487076, 1516358943, 0, 0, 1, 1, NULL),
(36, 36, 'article', 'en', 1, 'Exerci', 0, 1506084374, 1516358943, 0, 0, 1, 1, NULL),
(37, 37, 'article', 'en', 1, 'Premo', 0, 1507733489, 1516358943, 1, 0, 1, 1, NULL),
(38, 38, 'article', 'en', 1, 'Melior Paratus Pneum', 1, 1507744091, 1516358945, 1, 0, 1, 1, NULL),
(39, 39, 'article', 'en', 1, 'Valetudo', 0, 1508933591, 1516358947, 0, 0, 1, 1, NULL),
(40, 40, 'article', 'en', 1, 'Genitus Importunus Quadrum Similis Wisi', 1, 1515096932, 1516358947, 1, 0, 1, 1, NULL),
(41, 41, 'article', 'en', 1, 'Capto Vulputate', 0, 1512719319, 1516358947, 1, 0, 1, 1, NULL),
(42, 42, 'article', 'en', 1, 'Cui Nisl Sagaciter', 1, 1513683501, 1516358951, 1, 0, 1, 1, NULL),
(43, 43, 'article', 'en', 1, 'Consequat', 1, 1494808732, 1516358953, 0, 0, 1, 1, NULL),
(44, 44, 'article', 'en', 1, 'Pneum', 0, 1495768753, 1516358955, 1, 0, 1, 1, NULL),
(45, 45, 'article', 'en', 1, 'Dolus Exerci', 0, 1498622039, 1516358955, 0, 0, 1, 1, NULL),
(46, 46, 'article', 'en', 1, 'Populus Sino', 0, 1484907328, 1516358955, 0, 0, 1, 1, NULL),
(47, 47, 'article', 'en', 1, 'Antehabeo Caecus Nunc Refoveo Vulpes', 0, 1490428292, 1516358955, 0, 0, 1, 1, NULL),
(48, 48, 'article', 'en', 1, 'Blandit Huic Illum Sino Vindico', 0, 1499588485, 1516358957, 1, 0, 1, 1, NULL),
(49, 49, 'article', 'en', 1, 'Caecus Exputo', 0, 1500513905, 1516358957, 1, 0, 1, 1, NULL),
(50, 50, 'article', 'en', 1, 'At Iustum Saluto Tamen', 0, 1510343477, 1516358957, 1, 0, 1, 1, NULL),
(51, 51, 'article', 'en', 1, 'Huic Persto Similis Vicis', 1, 1492884836, 1516358959, 1, 0, 1, 1, NULL),
(52, 52, 'article', 'en', 1, 'Gravis Si Vereor', 1, 1513384725, 1516358959, 1, 0, 1, 1, NULL),
(53, 53, 'article', 'en', 1, 'Adipiscing Consectetuer Populus Sino Suscipere', 0, 1502610100, 1516358961, 1, 0, 1, 1, NULL),
(54, 54, 'article', 'en', 1, 'Dignissim', 0, 1511802838, 1516358963, 1, 0, 1, 1, NULL),
(55, 55, 'article', 'en', 1, 'Huic', 1, 1513297143, 1516358963, 1, 0, 1, 1, NULL),
(56, 56, 'article', 'en', 1, 'Conventio Neo Quia Tation Velit', 1, 1502986214, 1516358968, 1, 0, 1, 1, NULL),
(57, 57, 'article', 'en', 1, 'Nibh Saluto Ullamcorper Vulputate', 0, 1500711796, 1516358970, 0, 0, 1, 1, NULL),
(58, 58, 'article', 'en', 1, 'Dolus Nimis Venio', 1, 1488154511, 1516358972, 1, 0, 1, 1, NULL),
(59, 59, 'article', 'en', 1, 'Abigo Lenis Lobortis', 0, 1503716872, 1516358972, 1, 0, 1, 1, NULL),
(60, 60, 'article', 'en', 1, 'Enim Fere Nulla Nunc Olim', 1, 1494003304, 1516358973, 0, 0, 1, 1, NULL),
(61, 61, 'article', 'en', 1, 'Facilisis Iaceo Singularis Sudo', 0, 1495635746, 1516358976, 1, 0, 1, 1, NULL),
(62, 62, 'article', 'en', 1, 'Eligo Ideo Quadrum', 0, 1499392268, 1516358977, 0, 0, 1, 1, NULL),
(63, 63, 'article', 'en', 1, 'Jugis Pagus', 0, 1504081794, 1516358977, 0, 0, 1, 1, NULL),
(64, 64, 'article', 'en', 1, 'Obruo', 0, 1502680333, 1516358977, 1, 0, 1, 1, NULL),
(65, 65, 'article', 'en', 1, 'Exputo', 1, 1516136149, 1516358977, 0, 0, 1, 1, NULL),
(66, 66, 'article', 'en', 1, 'Adipiscing Antehabeo Nisl', 0, 1512605376, 1516358979, 1, 0, 1, 1, NULL),
(67, 67, 'article', 'en', 1, 'Interdico', 1, 1489066037, 1516358979, 0, 0, 1, 1, NULL),
(68, 68, 'article', 'en', 1, 'Aptent Blandit Hendrerit Iriure Saepius', 1, 1492653736, 1516358981, 1, 0, 1, 1, NULL),
(69, 69, 'article', 'en', 1, 'At Roto', 1, 1513036851, 1516358984, 0, 0, 1, 1, NULL),
(70, 70, 'article', 'en', 1, 'Brevitas Dolore Humo Jumentum', 1, 1513577230, 1516358984, 0, 0, 1, 1, NULL),
(71, 71, 'article', 'en', 1, 'Acsi', 1, 1505798413, 1516358986, 1, 0, 1, 1, NULL),
(72, 72, 'article', 'en', 1, 'Saluto', 0, 1506092843, 1516358986, 0, 0, 1, 1, NULL),
(73, 73, 'article', 'en', 1, 'Natu Oppeto', 1, 1489589657, 1516358986, 0, 0, 1, 1, NULL),
(74, 74, 'article', 'en', 1, 'Capto Lucidus Metuo', 1, 1500193426, 1516358987, 0, 0, 1, 1, NULL),
(75, 75, 'article', 'en', 1, 'Exputo Lenis Vel Verto', 1, 1488209647, 1516358990, 1, 0, 1, 1, NULL),
(76, 76, 'article', 'en', 1, 'Abluo Cogo In Saepius Vulpes', 1, 1503937566, 1516358990, 0, 0, 1, 1, NULL),
(77, 77, 'article', 'en', 1, 'Mos Praesent Vulpes', 1, 1496283546, 1516358990, 1, 0, 1, 1, NULL),
(78, 78, 'article', 'en', 1, 'Elit Meus Occuro', 0, 1500663727, 1516358990, 1, 0, 1, 1, NULL),
(79, 79, 'article', 'en', 1, 'Bene', 1, 1505040785, 1516358992, 1, 0, 1, 1, NULL),
(80, 80, 'article', 'en', 1, 'Distineo Iaceo Suscipit Zelus', 1, 1488477092, 1516358992, 0, 0, 1, 1, NULL),
(81, 81, 'article', 'en', 1, 'Te', 0, 1510935252, 1516358992, 1, 0, 1, 1, NULL),
(82, 82, 'article', 'en', 1, 'Blandit Esca Huic Patria Vulputate', 0, 1490194710, 1516358993, 1, 0, 1, 1, NULL),
(83, 83, 'article', 'en', 1, 'Abbas Adipiscing Quidem', 1, 1486239506, 1516358995, 1, 0, 1, 1, NULL),
(84, 84, 'article', 'en', 1, 'Defui Plaga', 1, 1502214167, 1516358998, 0, 0, 1, 1, NULL),
(85, 85, 'article', 'en', 1, 'Abdo Aliquip Iusto Magna', 0, 1492145814, 1516358998, 0, 0, 1, 1, NULL),
(86, 86, 'article', 'en', 1, 'Utinam', 0, 1492620988, 1516358998, 0, 0, 1, 1, NULL),
(87, 87, 'article', 'en', 1, 'Inhibeo Metuo Minim Vicis', 1, 1492484950, 1516359000, 1, 0, 1, 1, NULL),
(88, 88, 'article', 'en', 1, 'Augue Minim Nutus Pagus Pneum', 1, 1497783606, 1516359000, 0, 0, 1, 1, NULL),
(89, 89, 'article', 'en', 1, 'Bene Inhibeo Iriure', 1, 1496623473, 1516359000, 1, 0, 1, 1, NULL),
(90, 90, 'article', 'en', 1, 'Qui', 1, 1501529681, 1516359001, 1, 0, 1, 1, NULL),
(91, 91, 'article', 'en', 1, 'Natu Pertineo Vereor', 1, 1490698329, 1516359004, 0, 0, 1, 1, NULL),
(92, 92, 'article', 'en', 1, 'Ad Autem Occuro Secundum Validus', 1, 1499864431, 1516359004, 0, 0, 1, 1, NULL),
(93, 93, 'article', 'en', 1, 'Distineo Velit', 1, 1495725303, 1516359004, 0, 0, 1, 1, NULL),
(94, 94, 'article', 'en', 1, 'Facilisis Iusto Lucidus Wisi', 0, 1507035082, 1516359004, 1, 0, 1, 1, NULL),
(95, 95, 'article', 'en', 1, 'Abdo Dignissim Luptatum', 0, 1494470590, 1516359005, 1, 0, 1, 1, NULL),
(96, 96, 'article', 'en', 1, 'Blandit', 0, 1514862223, 1516359008, 1, 0, 1, 1, NULL),
(97, 97, 'article', 'en', 1, 'Abigo Immitto Molior', 0, 1485565669, 1516359010, 0, 0, 1, 1, NULL),
(98, 165, 'article', 'en', 1, 'Odio', 1, 1496064863, 1517836898, 0, 0, 1, 1, NULL),
(99, 99, 'article', 'en', 1, 'Defui Virtus', 0, 1492945815, 1516359011, 0, 0, 1, 1, NULL),
(100, 100, 'article', 'en', 1, 'Incassum Laoreet Probo Secundum Zelus', 0, 1498574972, 1516359014, 1, 0, 1, 1, NULL),
(101, 101, 'article', 'en', 1, 'Eros', 0, 1487061372, 1516359014, 0, 0, 1, 1, NULL),
(102, 102, 'article', 'en', 1, 'Appellatio At', 1, 1492264939, 1516359015, 1, 0, 1, 1, NULL),
(103, 103, 'article', 'en', 1, 'Exputo Hendrerit Saepius Veniam', 0, 1509344472, 1516359015, 0, 0, 1, 1, NULL),
(104, 104, 'article', 'en', 1, 'Tamen', 1, 1503115570, 1516359015, 0, 0, 1, 1, NULL),
(105, 105, 'article', 'en', 1, 'Acsi Blandit Cui', 0, 1512766222, 1516359018, 0, 0, 1, 1, NULL),
(106, 106, 'article', 'en', 1, 'Sagaciter', 1, 1501423136, 1516359020, 0, 0, 1, 1, NULL),
(107, 107, 'article', 'en', 1, 'Abigo Genitus Ludus Ut Velit', 1, 1486088370, 1516359021, 0, 0, 1, 1, NULL),
(108, 108, 'article', 'en', 1, 'Humo Importunus', 1, 1511490504, 1516359021, 0, 0, 1, 1, NULL),
(109, 109, 'article', 'en', 1, 'Esse Pala', 1, 1508901943, 1516359024, 0, 0, 1, 1, NULL),
(110, 110, 'article', 'en', 1, 'Diam Euismod Quadrum Uxor', 1, 1503764308, 1516359024, 1, 0, 1, 1, NULL),
(111, 111, 'article', 'en', 1, 'Commoveo Consequat Venio', 1, 1500926961, 1516359024, 1, 0, 1, 1, NULL),
(112, 112, 'article', 'en', 1, 'Diam Ex Gemino Oppeto Scisco', 1, 1515751784, 1516359024, 0, 0, 1, 1, NULL),
(113, 113, 'article', 'en', 1, 'Nisl Proprius Ut Virtus Voco', 1, 1488137097, 1516359025, 1, 0, 1, 1, NULL),
(114, 114, 'article', 'en', 1, 'Commoveo Saepius', 1, 1499452385, 1516359028, 1, 0, 1, 1, NULL),
(115, 115, 'article', 'en', 1, 'Quadrum Quidem Utinam', 1, 1499478919, 1516359028, 1, 0, 1, 1, NULL),
(116, 116, 'article', 'en', 1, 'Abdo Eligo', 1, 1493672735, 1516359030, 1, 0, 1, 1, NULL),
(117, 117, 'article', 'en', 1, 'Incassum Patria Velit Vindico', 1, 1507796621, 1516359030, 1, 0, 1, 1, NULL),
(118, 118, 'article', 'en', 1, 'Iaceo Nimis Tincidunt', 0, 1496682429, 1516359030, 0, 0, 1, 1, NULL),
(119, 119, 'article', 'en', 1, 'Facilisis Feugiat Praesent Quidem Roto', 1, 1489377944, 1516359030, 1, 0, 1, 1, NULL),
(120, 120, 'article', 'en', 1, 'Imputo', 1, 1486654540, 1516359034, 0, 0, 1, 1, NULL),
(121, 121, 'article', 'en', 1, 'Dolore Lucidus Neque', 1, 1500097627, 1516359034, 0, 0, 1, 1, NULL),
(122, 122, 'article', 'en', 1, 'Nimis Vindico', 1, 1516061832, 1516359034, 0, 0, 1, 1, NULL),
(123, 123, 'article', 'en', 1, 'At Letalis Luctus Similis', 0, 1511149708, 1516359035, 1, 0, 1, 1, NULL),
(124, 124, 'article', 'en', 1, 'Ex Facilisi Saepius', 0, 1497484585, 1516359037, 0, 0, 1, 1, NULL),
(125, 125, 'article', 'en', 1, 'Aliquam Caecus Consectetuer Persto Quia', 1, 1515700796, 1516359037, 0, 0, 1, 1, NULL),
(126, 126, 'article', 'en', 1, 'Commoveo', 1, 1507371642, 1516359038, 1, 0, 1, 1, NULL),
(127, 127, 'article', 'en', 1, 'Iustum Scisco', 0, 1485629044, 1516359038, 0, 0, 1, 1, NULL),
(128, 128, 'article', 'en', 1, 'Commodo Paratus', 1, 1511442834, 1516359043, 1, 0, 1, 1, NULL),
(129, 129, 'article', 'en', 1, 'Commoveo', 1, 1501963245, 1516359044, 1, 0, 1, 1, NULL),
(130, 130, 'article', 'en', 1, 'Abluo Brevitas Valetudo', 1, 1489150456, 1516359046, 1, 0, 1, 1, NULL),
(131, 131, 'article', 'en', 1, 'Facilisis Premo Utrum', 0, 1502832888, 1516359046, 0, 0, 1, 1, NULL),
(132, 132, 'article', 'en', 1, 'Vicis', 1, 1502757699, 1516359046, 1, 0, 1, 1, NULL),
(133, 133, 'article', 'en', 1, 'Capto Pagus', 1, 1506247108, 1516359046, 0, 0, 1, 1, NULL),
(134, 134, 'article', 'en', 1, 'Genitus', 1, 1513814078, 1516359046, 1, 0, 1, 1, NULL),
(135, 135, 'article', 'en', 1, 'Erat Vel', 0, 1502770604, 1516359050, 0, 0, 1, 1, NULL),
(136, 136, 'article', 'en', 1, 'Lobortis', 0, 1516327401, 1516359053, 0, 0, 1, 1, NULL),
(137, 137, 'article', 'en', 1, 'Melior', 0, 1495202378, 1516359053, 0, 0, 1, 1, NULL),
(138, 138, 'article', 'en', 1, 'Defui Oppeto', 0, 1502078778, 1516359055, 0, 0, 1, 1, NULL),
(139, 139, 'article', 'en', 1, 'Damnum Nimis', 0, 1507396674, 1516359055, 0, 0, 1, 1, NULL),
(140, 140, 'article', 'en', 1, 'Interdico', 0, 1487472075, 1516359057, 1, 0, 1, 1, NULL),
(141, 141, 'article', 'en', 1, 'Conventio Gravis Lucidus Luptatum Validus', 1, 1511062934, 1516359057, 1, 0, 1, 1, NULL),
(142, 142, 'article', 'en', 1, 'Diam Modo', 0, 1513728954, 1516359059, 1, 0, 1, 1, NULL),
(143, 143, 'article', 'en', 1, 'Magna Minim Oppeto', 1, 1492997112, 1516359061, 1, 0, 1, 1, NULL),
(144, 144, 'article', 'en', 1, 'Abbas Iusto Probo Roto Sagaciter', 0, 1513161828, 1516359061, 1, 0, 1, 1, NULL),
(145, 145, 'article', 'en', 1, 'Acsi Immitto Meus', 1, 1508649797, 1516359061, 0, 0, 1, 1, NULL),
(146, 146, 'article', 'en', 1, 'Brevitas Jugis', 1, 1504168032, 1516359061, 1, 0, 1, 1, NULL),
(147, 147, 'article', 'en', 1, 'Cogo Euismod', 0, 1485298270, 1516359061, 0, 0, 1, 1, NULL),
(148, 148, 'article', 'en', 1, 'Eu Pecus', 1, 1493660622, 1516359063, 1, 0, 1, 1, NULL),
(149, 149, 'article', 'en', 1, 'Saepius Vulpes', 1, 1492117287, 1516359063, 1, 0, 1, 1, NULL),
(150, 150, 'article', 'en', 1, 'Quis', 0, 1496953671, 1516359065, 0, 0, 1, 1, NULL),
(151, 151, 'article', 'en', 1, 'Aptent Diam Uxor Velit', 0, 1491306220, 1516359067, 1, 0, 1, 1, NULL),
(152, 152, 'article', 'en', 1, 'Acsi Cogo In Vulpes', 0, 1486448592, 1516359067, 0, 0, 1, 1, NULL),
(153, 153, 'hotel', 'en', 1, 'Le Bristol', 1, 1516360805, 1516374611, 1, 0, 1, 1, NULL),
(154, 154, 'hotel', 'en', 1, 'La Villa Florentine', 1, 1516360967, 1516374735, 0, 0, 1, 1, NULL),
(155, 155, 'hotel', 'en', 1, 'Hôtel du Palais', 1, 1516361045, 1516374712, 0, 0, 1, 1, NULL),
(156, 156, 'hotel', 'en', 1, 'Le Meurice', 1, 1516361133, 1516374636, 1, 0, 1, 1, NULL),
(157, 157, 'hotel', 'en', 1, 'Hôtel de Sèze', 1, 1516361195, 1516374689, 0, 0, 1, 1, NULL),
(158, 158, 'hotel', 'en', 1, 'Hôtel Albert 1er', 1, 1516361258, 1516374669, 1, 0, 1, 1, NULL),
(160, 160, 'restaurant', 'en', 1, 'Epicure', 1, 1516366686, 1516367930, 0, 0, 1, 1, NULL),
(161, 161, 'restaurant', 'en', 1, 'Flocon de Sel', 1, 1516366860, 1516696609, 0, 0, 1, 1, NULL),
(162, 162, 'restaurant', 'en', 1, 'Le Jardin des Sens', 1, 1516367002, 1516367077, 0, 0, 1, 1, NULL),
(163, 163, 'restaurant', 'en', 1, 'Le Meurice Alain Ducasse', 1, 1516367097, 1516368031, 0, 0, 1, 1, NULL);