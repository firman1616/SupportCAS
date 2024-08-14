/*
 Navicat Premium Data Transfer

 Source Server         : xamp
 Source Server Type    : MySQL
 Source Server Version : 100428 (10.4.28-MariaDB)
 Source Host           : localhost:5001
 Source Schema         : core

 Target Server Type    : MySQL
 Target Server Version : 100428 (10.4.28-MariaDB)
 File Encoding         : 65001

 Date: 14/08/2024 13:30:58
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for akses_modul
-- ----------------------------
DROP TABLE IF EXISTS `akses_modul`;
CREATE TABLE `akses_modul`  (
  `id_akses_modul` int NOT NULL AUTO_INCREMENT,
  `user_id` int NULL DEFAULT NULL,
  `modul_id` int NULL DEFAULT NULL,
  `menu_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_akses_modul`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of akses_modul
-- ----------------------------

-- ----------------------------
-- Table structure for departemen
-- ----------------------------
DROP TABLE IF EXISTS `departemen`;
CREATE TABLE `departemen`  (
  `id_dept` int NOT NULL AUTO_INCREMENT,
  `kode_dept` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_dept` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_dept`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of departemen
-- ----------------------------
INSERT INTO `departemen` VALUES (1, 'IT', 'ITE');
INSERT INTO `departemen` VALUES (2, 'PRD', 'Production');
INSERT INTO `departemen` VALUES (3, 'PPIC', 'Production Planing and Inventory Control');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu`  (
  `id_menu` int NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `url_menu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `modul_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_menu`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menu
-- ----------------------------

-- ----------------------------
-- Table structure for modul
-- ----------------------------
DROP TABLE IF EXISTS `modul`;
CREATE TABLE `modul`  (
  `id_modul` int NOT NULL AUTO_INCREMENT,
  `nama_modul` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `url_modul` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `icon_modul` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `seq` int NULL DEFAULT NULL,
  `status` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_modul`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of modul
-- ----------------------------
INSERT INTO `modul` VALUES (1, 'Dashboard', 'Dashboard', 'fas fa-tachometer-alt', 1, 1);
INSERT INTO `modul` VALUES (2, 'Setting', 'Setting/setting', 'fas fa-cogs', 50, 1);
INSERT INTO `modul` VALUES (3, 'Manufactuting', 'abv', 'fas fa-trash', 2, 1);
INSERT INTO `modul` VALUES (4, 'Sales', 'Sales', 'fas fa-users', 3, 1);
INSERT INTO `modul` VALUES (5, 'PO Approval', 'Approve', 'fas fa-clipboard-list', 4, 1);
INSERT INTO `modul` VALUES (6, 'PR Approval', 'pr_approve', 'fas fa-truck-loading', 5, 1);

-- ----------------------------
-- Table structure for permission
-- ----------------------------
DROP TABLE IF EXISTS `permission`;
CREATE TABLE `permission`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `permission` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permission
-- ----------------------------
INSERT INTO `permission` VALUES (1, 'Creat');
INSERT INTO `permission` VALUES (2, 'Read');
INSERT INTO `permission` VALUES (3, 'Update');
INSERT INTO `permission` VALUES (4, 'Delete');
INSERT INTO `permission` VALUES (5, 'Approve');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `role_id` int NULL DEFAULT NULL,
  `is_active` int NULL DEFAULT NULL,
  `dept_id` int NULL DEFAULT NULL,
  `date_created` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'Super Power User', 'firman', '$2y$10$gEH2UQKUreiVajJhq0FgIepD6FYFSHYZmbymBIjsvtQmZIzT9BH4G', 1, 1, 1, NULL);
INSERT INTO `user` VALUES (2, 'Dhadang Nurjaman', 'dhadang', '$2y$10$8XhnYCqC1XA6J11C87SBeedZzDdexbpTBTbyAY7tqT.BwJqg4R1HC', 1, 1, 3, '2024-06-02 14:16:00');
INSERT INTO `user` VALUES (3, 'Administrator', 'admin', '$2y$10$cgI1FfomTBRGKcnFd2iyzeINbViceQN1uo.xW.cvTjMdo6.QDBxT2', 1, 1, 1, '2024-08-14 08:26:04');

-- ----------------------------
-- Table structure for user_access_modul
-- ----------------------------
DROP TABLE IF EXISTS `user_access_modul`;
CREATE TABLE `user_access_modul`  (
  `id_user_access` int NOT NULL AUTO_INCREMENT,
  `role_id` int NULL DEFAULT NULL,
  `modul_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_user_access`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_access_modul
-- ----------------------------
INSERT INTO `user_access_modul` VALUES (1, 1, 1);
INSERT INTO `user_access_modul` VALUES (2, 1, 2);
INSERT INTO `user_access_modul` VALUES (3, 1, 5);
INSERT INTO `user_access_modul` VALUES (4, 1, 4);
INSERT INTO `user_access_modul` VALUES (5, 1, 6);
INSERT INTO `user_access_modul` VALUES (8, NULL, NULL);

-- ----------------------------
-- Table structure for user_role
-- ----------------------------
DROP TABLE IF EXISTS `user_role`;
CREATE TABLE `user_role`  (
  `id_role` int NOT NULL AUTO_INCREMENT,
  `role` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_role`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_role
-- ----------------------------
INSERT INTO `user_role` VALUES (1, 'Super User');
INSERT INTO `user_role` VALUES (2, 'Direksi');
INSERT INTO `user_role` VALUES (3, 'Manager');
INSERT INTO `user_role` VALUES (4, 'Section Head');
INSERT INTO `user_role` VALUES (5, 'Supervisor');
INSERT INTO `user_role` VALUES (6, 'Staff');

-- ----------------------------
-- Table structure for user_sub_menu
-- ----------------------------
DROP TABLE IF EXISTS `user_sub_menu`;
CREATE TABLE `user_sub_menu`  (
  `id_user_sub_menu` int NOT NULL AUTO_INCREMENT,
  `menu_id` int NULL DEFAULT NULL,
  `title` varchar(128) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `url` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `icon` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `is_active` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_user_sub_menu`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_sub_menu
-- ----------------------------
INSERT INTO `user_sub_menu` VALUES (1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1);
INSERT INTO `user_sub_menu` VALUES (2, 2, 'My Profile', 'user', 'fas fa-file-invoice', 1);
INSERT INTO `user_sub_menu` VALUES (3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1);
INSERT INTO `user_sub_menu` VALUES (4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1);
INSERT INTO `user_sub_menu` VALUES (5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1);
INSERT INTO `user_sub_menu` VALUES (6, 2, 'Hapus Profile', 'user/hapus_profile', '', 1);
INSERT INTO `user_sub_menu` VALUES (7, 1, 'Role', 'admin/role', 'fas fa-fw fa-cog', 1);

SET FOREIGN_KEY_CHECKS = 1;
