  --
  -- Database: `attraction_list`
  --
  CREATE DATABASE IF NOT EXISTS `attraction_list` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
  USE `attraction_list`;

  -- --------------------------------------------------------

  --
  -- Table structure for table `attractions`
  --
  DROP TABLE IF EXISTS `attractions`;
  DROP TABLE IF EXISTS `regions`;
  CREATE TABLE `regions` (
    `region_id` int(5) NOT NULL AUTO_INCREMENT,
    `region` varchar(20) NOT NULL,
      PRIMARY KEY (`region_id`));

  DROP TABLE IF EXISTS `attractions`;
  CREATE TABLE `attractions` (
    `attraction_id` int(10) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `region_id` int(5) NOT NULL,
    `telephone` varchar(20),
    `url` varchar(255),
    PRIMARY KEY (`attraction_id`),
    FOREIGN KEY (`region_id`) REFERENCES `regions`(`region_id`));



  --
  -- Dumping data for table `attractions`
  --

  INSERT INTO `regions` (`region_id`,`region`) VALUES
  ('1','Meath'),
  ('2','Donegal'),
  ('3','Leitrim'),
  ('4','Dublin'),
  ('5','Carlow'),
  ('6','Galway'),
  ('7','Cork');

  INSERT INTO `attractions` (`attraction_id`,`name`, `region_id`, `telephone`, `url`) VALUES
  (1, 'Skryne Church', '1', '0469025152', 'https://www.skryneandrathfeighparish.ie/'),
  (2, 'Sliabh Liag Distillers', '2', '0749739875', 'http://sliabhliagdistillery.com'),
  (3, 'Passage West Maritime Museum CLG', '7', '0871363588', 'http://passagemuseum.ie/index.html'),
  (4, 'Fenagh Visitor Centre', '3', '0719645590', 'http://www.facebook.com/FenaghVisitorCentre'),
  (5, 'Dublin Discovered Boat Tours', '4', '014730000', 'http://www.instagram.com/dublindiscovered'),
  (6, 'Dublin Falconry', '4', '0876341574', 'https://www.dublinfalconry.ie/'),
  (7, 'Croke Park Stadium', '4', '015821593', 'https://crokepark.ie/'),
  (8, 'Carlow Cathedral', '5', '0599164087', 'http://www.carlowcathedral.ie'),
  (9, 'Aughnanure Castle', '6', '091552214', 'https://heritageireland.ie/visit/places-to-visit/aughnanure-castle/');


