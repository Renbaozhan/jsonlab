

CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'key',
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'name',
  `developer` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'developer',
  `developer_url` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'developer_url',
  `logo` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'developer_url',
  `note` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'note',
  `url` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'url',
  `action` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'action',
  `price` int(11)  NOT NULL DEFAULT 0 COMMENT 'price',
  `limit` int(11) NOT NULL DEFAULT 0 COMMENT 'limit',
  `free_call` int(11) NOT NULL DEFAULT 100 COMMENT 'free_call',
  `params` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'params',
  `returns` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'returns',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='service information' AUTO_INCREMENT=1;
INSERT into `service`
