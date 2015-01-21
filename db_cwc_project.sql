/*
Navicat PGSQL Data Transfer

Source Server         : postgre
Source Server Version : 90400
Source Host           : localhost:5432
Source Database       : db_cwc_project
Source Schema         : public

Target Server Type    : PGSQL
Target Server Version : 90400
File Encoding         : 65001

Date: 2015-01-21 22:23:44
*/


-- ----------------------------
-- Sequence structure for tbl_usr_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."tbl_usr_id_seq";
CREATE SEQUENCE "public"."tbl_usr_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 28
 CACHE 1;
SELECT setval('"public"."tbl_usr_id_seq"', 28, true);

-- ----------------------------
-- Table structure for tbl_usr
-- ----------------------------
DROP TABLE IF EXISTS "public"."tbl_usr";
CREATE TABLE "public"."tbl_usr" (
"user_id" int4 DEFAULT nextval('tbl_usr_id_seq'::regclass) NOT NULL,
"user_name" varchar(10) COLLATE "default",
"email_address" varchar(50) COLLATE "default",
"password" varchar(32) COLLATE "default",
"full_name" varchar(50) COLLATE "default",
"phone_number" varchar(14) COLLATE "default"
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of tbl_usr
-- ----------------------------
INSERT INTO "public"."tbl_usr" VALUES ('18', 'milon', 'milon@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Milon H', '123456');
INSERT INTO "public"."tbl_usr" VALUES ('19', 'pallab', 'pallab@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '0', '0');
INSERT INTO "public"."tbl_usr" VALUES ('20', 'hamidur', 'hamidur@oldmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0', '0');
INSERT INTO "public"."tbl_usr" VALUES ('21', 'fokir', 'fokir@footpath.org', 'e10adc3949ba59abbe56e057f20f883e', 'Fokir Badshah', '420420422');
INSERT INTO "public"."tbl_usr" VALUES ('22', 'fdas', 'adf@adfa', 'e10adc3949ba59abbe56e057f20f883e', '0', '0');
INSERT INTO "public"."tbl_usr" VALUES ('23', 'gadf', 'adfgad@dga', 'e10adc3949ba59abbe56e057f20f883e', 'dfads asdfadf', '65486748');
INSERT INTO "public"."tbl_usr" VALUES ('24', 'milon', 'milon@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Milon Hossain', '017');
INSERT INTO "public"."tbl_usr" VALUES ('25', 'atik', 'rahmanatawur@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0', '0');
INSERT INTO "public"."tbl_usr" VALUES ('26', 'adf', 'dfad@fadsf', 'e10adc3949ba59abbe56e057f20f883e', 'adfasd', '32416768');
INSERT INTO "public"."tbl_usr" VALUES ('27', 'asdf', 'asdf@asfdf', 'dcddb75469b4b4875094e14561e573d8', 'asdf', '00000');
INSERT INTO "public"."tbl_usr" VALUES ('28', 'aaaa', 'asdfa@adfaf', 'b0baee9d279d34fa1dfd71aadb908c3f', 'adsf adfads', '321321435');

-- ----------------------------
-- Alter Sequences Owned By 
-- ----------------------------
ALTER SEQUENCE "public"."tbl_usr_id_seq" OWNED BY "tbl_usr"."user_id";

-- ----------------------------
-- Primary Key structure for table tbl_usr
-- ----------------------------
ALTER TABLE "public"."tbl_usr" ADD PRIMARY KEY ("user_id");
