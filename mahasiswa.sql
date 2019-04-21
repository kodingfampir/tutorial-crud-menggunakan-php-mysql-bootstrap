/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : tutorial_kf

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-03-23 14:42:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for mahasiswa
-- ----------------------------
DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jkel` varchar(255) DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`,`nim`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mahasiswa
-- ----------------------------
INSERT INTO `mahasiswa` VALUES ('3', 'Gi', 'Gon', 'laki-laki', '24', 'jogja');
INSERT INTO `mahasiswa` VALUES ('6', 'Rio', 'tht', 'laki-laki', '24', 'Semarang');
INSERT INTO `mahasiswa` VALUES ('8', 'A21', 'Leo', 'laki-laki', '24', 'Demak');
INSERT INTO `mahasiswa` VALUES ('10', 'A23', 'Killua', 'laki-laki', '15', 'Jakarta');
