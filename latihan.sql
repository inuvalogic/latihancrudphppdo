/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : latihan

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-02-02 23:26:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for artikel
-- ----------------------------
DROP TABLE IF EXISTS `artikel`;
CREATE TABLE `artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of artikel
-- ----------------------------
INSERT INTO `artikel` VALUES ('1', 'Artikel pertama dari database', 'ini adalah artikel dari database yang pertama. ini adalah artikel dari database yang pertama. ini adalah artikel dari database yang pertama. ini adalah artikel dari database yang pertama. ini adalah artikel dari database yang pertama. ini adalah artikel dari database yang pertama. ini adalah artikel dari database yang pertama. \r\nini adalah artikel dari database yang pertama. ini adalah artikel dari database yang pertama. ini adalah artikel dari database yang pertama. ini adalah artikel dari database yang pertama. ini adalah artikel dari database yang pertama. ini adalah artikel dari database yang pertama. ini adalah artikel dari database yang pertama. \r\nini adalah artikel dari database yang pertama. ini adalah artikel dari database yang pertama. ini adalah artikel dari database yang pertama. ini adalah artikel dari database yang pertama. ini adalah artikel dari database yang pertama. ini adalah artikel dari database yang pertama. ini adalah artikel dari database yang pertama. \r\n');
INSERT INTO `artikel` VALUES ('2', 'Artikel kedua dari database', 'contoh artikel dari database yang kedua kali nya. contoh artikel dari database yang kedua kali nya. contoh artikel dari database yang kedua kali nya. contoh artikel dari database yang kedua kali nya. contoh artikel dari database yang kedua kali nya. contoh artikel dari database yang kedua kali nya. ');
INSERT INTO `artikel` VALUES ('4', 'Artikel ketiga dari database', 'ini adalah artikel ketiga yang ada didatabase. ini adalah artikel ketiga yang ada didatabase. ini adalah artikel ketiga yang ada didatabase. ini adalah artikel ketiga yang ada didatabase. ini adalah artikel ketiga yang ada didatabase. ini adalah artikel ketiga yang ada didatabase. ini adalah artikel ketiga yang ada didatabase. ini adalah artikel ketiga yang ada didatabase. ');

-- ----------------------------
-- Table structure for kontak
-- ----------------------------
DROP TABLE IF EXISTS `kontak`;
CREATE TABLE `kontak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `pesan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of kontak
-- ----------------------------
INSERT INTO `kontak` VALUES ('1', 'Wisnu Hafid', '081321425825', 'halo apa kabar?');
