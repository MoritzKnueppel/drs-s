

CREATE TABLE IF NOT EXISTS `comments` (
  `id_comments` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `content` longtext,
  `Blog_id_Blog` int(11) NOT NULL,
  PRIMARY KEY (`id_comments`),
  KEY `fk_comments_blog` (`Blog_id_Blog`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;



INSERT INTO `comments` (`id_comments`, `name`, `content`, `Blog_id_Blog`) VALUES
(1, NULL, 'ein weiterer test für komentare', 1),
(2, NULL, 'ein weiterer test für komentare', 1),
(3, 'name ist bob', 'kommentar ist leider geil', 1),
(4, 'test', 'testing', 1),
(5, 'dfhgdh', 'dfhfgh', 1);

ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments_blog` FOREIGN KEY (`Blog_id_Blog`) REFERENCES `blog` (`id_Blog`) ON DELETE NO ACTION ON UPDATE NO ACTION;

