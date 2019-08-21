/*
 Navicat Premium Data Transfer

 Source Server         : Blog
 Source Server Type    : MySQL
 Source Server Version : 100316
 Source Host           : localhost:3306
 Source Schema         : home_work

 Target Server Type    : MySQL
 Target Server Version : 100316
 File Encoding         : 65001

 Date: 21/08/2019 10:09:13
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `parent_id` int(10) NULL DEFAULT NULL COMMENT 'danh mục cha',
  `thumbnail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT 'Mô tả thể loại',
  `created_at` timestamp(0) NULL DEFAULT NULL COMMENT 'Ngày tạo',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `parent_id`(`parent_id`) USING BTREE,
  CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 36 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, 'Thời sự', NULL, '/thoisu.png', 'thoi-su', 'Chuyên mục thời sự', '2019-08-09 14:53:31');
INSERT INTO `categories` VALUES (2, 'Tin trong nước', 1, '/tintrongnuoc.png', 'tin-trong-nuoc', 'Chuyện mục thời sự - Tin trong nước', '2019-08-09 14:55:00');
INSERT INTO `categories` VALUES (3, 'Tin nước ngoài', 1, '/tinnuocngoai.png', 'tin-nuoc-ngoai', 'Chuyện mục thời sự - Tin nước ngoài', '2019-08-09 14:55:31');
INSERT INTO `categories` VALUES (4, 'Văn hóa - Xã hội', NULL, '/vanhoa.png', 'van-hoa-xa-hoi', 'Chuyên mục văn hóa - xã hội', '2019-08-09 14:56:12');
INSERT INTO `categories` VALUES (5, 'Công nghệ', NULL, '/congnghe.png', 'cong-nghe', 'Chuyên mục công nghệ', '2019-08-09 14:58:11');
INSERT INTO `categories` VALUES (6, 'Tin tức lập trình', 5, '/laptrinh.png', 'tin-tuc-lap-trinh', 'Chyện mục công nghệ - tin tức lập trình', '2019-08-09 14:58:50');
INSERT INTO `categories` VALUES (7, 'Tin tức công nghệ ', 5, '/tintuccongnghe.png', 'tin-tuc-cong-nghe', 'Chyên mục công nghệ - tin tức công nghệ', '2019-08-09 15:00:01');
INSERT INTO `categories` VALUES (8, 'Bùi Ngọc Tú', 2, 'g.jpg', 'the-gioi', 'notjing to say', '2019-08-09 14:56:12');

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'Tiêu đề bài viết',
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT 'Mô tả bài viết',
  `thumbnail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'ảnh bài viết',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT 'Nội dung bài viết',
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `view_count` bigint(20) NULL DEFAULT NULL COMMENT 'số lượng xem',
  `user_id` int(10) NULL DEFAULT NULL COMMENT 'tác giả',
  `category_id` int(10) NULL DEFAULT NULL COMMENT 'Bài post này thuộc danh mục nào',
  `created_at` timestamp(0) NULL DEFAULT NULL COMMENT 'Ngày tạo',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  INDEX `category_id`(`category_id`) USING BTREE,
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES (1, 'Hiệp ước INF sụp đổ, Mỹ tuyên bố sớm triển khai tên lửa ở châu Á đối phó Trung Quốc?', 'Ngày 3/8, một ngày sau khi Mỹ chấm dứt Hiệp ước kiểm soát tên lửa tầm trung và tầm ngắn (INF), Bộ trưởng Quốc phòng Mark Esper tuyên bố ủng hộ việc Mỹ sớm triển khai hệ thống tên lửa tầm trung mới ở châu Á.', '/anh.png', 'Reuters đưa tin, người đứng đầu Lầu Năm Góc Mark Esper ngày 3/8 tuyên bố ủng hộ việc Mỹ sớm bố trí các tên lửa tầm trung phóng từ mặt đất tại châu Á, một ngày sau khi Mỹ rút khỏi hiệp ước kiểm soát vũ khí quan trọng ký với Nga từ thời Chiến tranh Lạnh.\n\nTuyên bố trên được đưa ra giữa lúc Mỹ ngày càng quan ngại về những ưu thế quân sự của Trung Quốc tại khu vực châu Á- Thái Bình Dương.\n\nPhát biểu với báo giới tại Sydney, khi được hỏi liệu Mỹ có cân nhắc triển khai các loại tên lửa tầm trung ở châu Á hay không sau khi Mỹ và Nga đã chấm dứt hiệu lực của Hiệp ước các lực lượng hạt nhân tầm trung và tầm ngắn (INF), ông Esper nói: \"Vâng, tôi muốn việc này. Tôi muốn bố trí các tên lửa trong vòng vài tháng tới... nhưng việc này sẽ mất nhiều thời gian hơn dự kiến\".\n\nTrước đó, khi khi trả lời câu hỏi của các thành viên Ủy ban quân lực Thượng viện Mỹ hôm 11/7, Tướng Mark Milley, Tham mưu trưởng lục quân Mỹ, cũng tuyên bố Mỹ có thể triển khai tên lửa tầm trung ở châu Á.', 'hiep-uoc-inf-sup-do-my-tuyen-bo-som-trien-khai-ten-lua-o-chau-a-doi-pho-trung-quoc', 100, 1, 1, '2019-08-09 15:06:10');
INSERT INTO `posts` VALUES (2, 'Galaxy Note10 có gì hay ho hơn Galaxy S10?11111111111111111111', 'Samsung Galaxy Note10 vs Galaxy S10+ có sự khác biệt rõ ràng cả về ngoại hình cũng như các tính năng mới.', 'orig.jpg', 'Galaxy Note10 mới cuối cùng đã xuất hiện chính thức. Theo truyền thống, mỗi năm khi một thiết bị Galaxy Note mới xuất hiện, chúng chắc chắn được so sánh với các flagship mới nhất của Samsung từ dòng Galaxy S. Và năm nay, Galaxy S10+ là phiên bản mà gần nhất với Galaxy Note10 về thông số kỹ thuật và tính năng.Màn hình 1080p trên Galaxy Note10Màn hình của Galaxy Note10 chỉ nhỏ hơn 1 inch so với màn hình trên Galaxy S10 +, đáng chú ý hơn là độ phân giải trên Galaxy Note10 chỉ là 1080x2280 pixel so với 1440x3040 của Galaxy S10 +.', 'galaxy-note10-co-gi-hay-ho-hon-galaxy-s10', 1, 2, 7, '2019-08-09 15:06:13');
INSERT INTO `posts` VALUES (3, '150 tỷ đồng xây trạm bơm nước sông Hồng để “hồi sinh” sông Tô Lịch1111111111111111111111111', 'UBND TP Hà Nội đang giao các sở ngành nghiên cứu phương án đầu tư khoảng 150 tỷ đồng xây dựng trạm bơm nước từ sông Hồng vào hồ Tây và bổ cập cho sông Tô Lịch', '/t.jpg', 'Đề án trên với mục tiêu duy trì ổn định mực nước, thau rửa liên tục cải thiện chất lượng nước hồ, đảm bảo sự phát triển ổn định, bền vững cho các loại thủy sinh trong hồ Tây. Cùng đó, nguồn nước được bổ cập ở hồ Tây có thể điều tiết qua hai cửa xả hồ Tây A và bồ Tây B ra sông Tô Lịch.Nếu được các sở ngành và UBND TP Hà Nội thông qua, Công ty Thoát nước Hà Nội cho biết, thời gian xây dựng trạm bơm có công suất cấp nước 156.000 m3/ngày đêm khoảng nửa năm là hoàn thành. Theo Công ty Thoát nước Hà Nội tổng mức đầu tư cho dự án “hồi sinh” sông Tô Lịch này khoảng 150 tỷ đồng.', '150-ty-dong-xay-tram-bom-nuoc-song-hong-de-hoi-sinh-song-to-lich', 151, 3, 2, '2019-08-15 22:44:29');
INSERT INTO `posts` VALUES (4, 'Những dự án chiến hạm siêu khủng của Liên Xô từng bị “chết yểu”', 'Liên Xô luôn ôm hoài bão chế tạo những loại vũ khí hùng mạnh nhất nhưng đáng tiếc không phải ý tưởng táo bạo nào cũng đều trở thành hiện thực.', 'a.jpg', 'Vào những năm 1930, nhà lãnh đạo Liên Xô muốn tạo ra một hạm đội đại dương hùng mạnh để cân bằng với lực lượng hải quân của các cường quốc hàng thế giới lúc bấy giờ. Vì thế Liên Xô đã đặt trọng tâm chính vào việc chế tạo một số lượng lớn tàu tuần dương theo đề án “23 Liên Xô”. Những chiếc tàu này được dự tính sẽ trở thành những tàu chiến lớn nhất và hùng mạnh vào giữa những năm 1930, với chiều dài 270m và chiều rộng 38m, lượng giãn nước 65.000 tấn. \r\n\r\nCông suất động cơ hơn 200.000  mã lực, cho phép nó di chuyển với tốc độ 29 hải lý/giờ  (30 dặm/giờ). Mỗi con tàu có sức chứa khoảng 1.300 thủy thủ và các sỹ quan.', 'nhung-du-an-chien-ham-sieu-khung-cua-lien-xo-tung-bi-chet-yeu', 10, 4, 3, '2019-08-14 22:05:46');
INSERT INTO `posts` VALUES (5, 'Mỹ công bố quy định mới về định cư, từ chối nhận người nhập cư quá nghèo', 'Chính quyền Tổng thống Mỹ Donald Trump ngày 12/8 đã công bố một thay đổi lớn về chính sách định cư mà một số chuyên gia cho rằng có thể cắt giảm một nửa người nhập cư hợp pháp bằng cách từ chối thị thực tạm thời hoặc lâu dài (thẻ xanh) cho hàng trăm nghìn người vì quá nghèo. ', 'hu.jpg', 'Quy định mới, được gọi là “Quy định gánh nặng xã hội”, được đăng tải trên Công báo Liên bang - tạp chí chính thức của chính phủ liên bang Mỹ - và sẽ chính thức có hiệu lực từ ngày 15/10 tới. theo đó, quy định sẽ nhắm vào những người nhập cư nghèo nhiều khả năng phải phụ thuộc vào các hỗ trợ của chính phủ. Đơn xin thị thực tạm thời hay lâu dài sẽ bị từ chối nếu chính phủ thấy rằng người xin thị thực không đáp ứng các tiêu chuẩn thu nhập đủ cao, hoặc nếu họ phải nhận sự hỗ trợ của chính phủ trong tương lai như phúc lợi, hỗ trợ lương thực, nhà ở công cộng hoặc bảo hiểm y tế Medicaid.Reuters dẫn lời các chuyên gia nói rằng quy định dài 837 trang có thể là thay đổi mạnh mẽ nhất trong chính sách nhập nhập cư cứng rắn lâu nay của chính quyền Trump nhắm vào hệ thống di cư hợp pháp.Theo BBC, chính sách mới của chính quyền Trump sẽ khiến những người nhập cư hợp pháp nghèo gặp khó khăn hơn trong việc gia hạn thị thực hoặc xin thẻ xanh.Giới chức chính quyền nói rằng, quy định mới sẽ thúc đẩy “các ý tưởng về sự tự túc”, tức là người nhập cư phải có khả năng của chính họ để sống tại Mỹ mà không phụ thuộc vào các nguồn lực của chính phủ.', 'my-cong-bo-quy-dinh-moi-ve-dinh-cu-tu-choi-nhan-nguoi-nhap-cu-qua-ngheo', 3, 1, 1, '2019-08-15 22:44:24');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `avatar` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT 'Đường dẫn ảnh',
  `created_at` timestamp(0) NULL DEFAULT NULL COMMENT 'Ngày tạo',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Trần Minh Đức', 'ductm.kma@gmail.com', '$2y$10$ogjblHkl8/z5zVVZJj/PbumuFc3jiGZHWqaF5emuVNfPYPBf8nfyW', '/avata.png', '2019-08-09 14:47:54');
INSERT INTO `users` VALUES (2, 'Vũ Văn Thương', 'thuongvv.hust@gmail.com', '$2y$10$ogjblHkl8/z5zVVZJj/PbumuFc3jiGZHWqaF5emuVNfPYPBf8nfyW', '/avata.png', '2019-08-09 14:50:10');
INSERT INTO `users` VALUES (3, 'Nguyễn Văn Hiệp', 'hiepbk@gmail.com', '$2y$10$ogjblHkl8/z5zVVZJj/PbumuFc3jiGZHWqaF5emuVNfPYPBf8nfyW', '/image.png', '2019-08-09 14:50:42');
INSERT INTO `users` VALUES (4, 'Hoàng Trung Hiếu', 'hieuht@gmail.com', '$2y$10$ogjblHkl8/z5zVVZJj/PbumuFc3jiGZHWqaF5emuVNfPYPBf8nfyW', '/image.png', '2019-08-09 14:51:11');
INSERT INTO `users` VALUES (5, 'Nguyễn Hải Anh', 'haianh.bka@gmail.com', '$2y$10$ogjblHkl8/z5zVVZJj/PbumuFc3jiGZHWqaF5emuVNfPYPBf8nfyW', '/haianh.png', '2019-08-09 14:51:45');
INSERT INTO `users` VALUES (6, 'Trần Danh Tùng', 'tungtd.kma@gmail.com', 'jiGZHWqaF5emuVNfPYPBf8nfyW', '/anh.png', '2019-08-08 12:12:12');

SET FOREIGN_KEY_CHECKS = 1;
