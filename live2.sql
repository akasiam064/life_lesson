-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.32-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for life_website
CREATE DATABASE IF NOT EXISTS `life_website` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `life_website`;

-- Dumping structure for table life_website.life_blog
CREATE TABLE IF NOT EXISTS `life_blog` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Image_URL_Sec1` varchar(255) NOT NULL,
  `Image_URL_Sec2` varchar(255) NOT NULL,
  `Image_URL_Sec3` varchar(255) NOT NULL,
  `Image_URL_Sec4` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `refer` varchar(255) NOT NULL,
  `dateset` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dumping data for table life_website.life_blog: ~4 rows (approximately)
INSERT INTO `life_blog` (`id`, `Image_URL_Sec1`, `Image_URL_Sec2`, `Image_URL_Sec3`, `Image_URL_Sec4`, `name`, `detail`, `refer`, `dateset`) VALUES
	(12, 'https://www.blognone.com/sites/default/files/styles/thumbnail/public/topics-images/Elon_Musk_2015.jpg?itok=1pIsI_fC', 'https://www.blognone.com/sites/default/files/styles/thumbnail/public/topics-images/Elon_Musk_2015.jpg?itok=1pIsI_fC', 'https://www.blognone.com/sites/default/files/styles/thumbnail/public/topics-images/Elon_Musk_2015.jpg?itok=1pIsI_fC', 'https://www.blognone.com/sites/default/files/styles/thumbnail/public/topics-images/Elon_Musk_2015.jpg?itok=1pIsI_fC', 'Elon Musk ระบุหากไม่มีกำแพงทางการค้า บริษัทรถ EV จีนจะทำลายบริษัทรถอื่นแทบทั้งโลก', 'Elon Musk พูดถึงบริษัทรถยนต์ไฟฟ้าจากจีนว่ากำลังแข็งแกร่งอย่างมาก และบริษัทรถยนต์ไฟฟ้าอื่นๆ นอกจีนนั้นต้องอาศัยกำแพงทางการค้าเพื่อให้ต่อสู้ได้ ไม่เช่นนั้นแล้วก็จะหายไปแทบทุกบริษัท โดยเขาพูดระหว่างการรายงานผลประกอบการของ Tesla ประจำปีนี้\r\n\r\nBYD เพิ่งทำยอดขา', 'https://www.blognone.com/', '2024-01-25 07:20:31'),
	(13, 'https://www.blognone.com/sites/default/files/styles/thumbnail/public/topics-images/twilio.png?itok=5Y8Q8_EQ', 'https://www.blognone.com/sites/default/files/styles/thumbnail/public/topics-images/twilio.png?itok=5Y8Q8_EQ', 'https://www.blognone.com/sites/default/files/styles/thumbnail/public/topics-images/twilio.png?itok=5Y8Q8_EQ', 'https://www.blognone.com/sites/default/files/styles/thumbnail/public/topics-images/twilio.png?itok=5Y8Q8_EQ', 'Twilio ประกาศยุติ Authy เวอร์ชั่น Desktop มีผลเดือนสิงหาคม 2567', 'Twilio ผู้ให้บริการแอป Authy ประกาศหยุดการสนับสนุนการใช้งานเวอร์ชั่น Desktop ได้แก่ Windows, macOS และ Linux ทั้งนี้ผู้ที่ใช้งานเครื่อง Mac ชิปตระกูล Apple Silicon M1 และ M2 จะยังสามารถดาวน์โหลดและติดตั้งได้ แต่จะเป็นเวอร์ชั่นของ iOS แทน โดยจะมีผลในเดือนส', 'Twilio', '2024-01-25 07:21:12'),
	(14, 'https://www.blognone.com/sites/default/files/styles/thumbnail/public/topics-images/openai_0.png?itok=GozF8tZz', 'https://www.blognone.com/sites/default/files/styles/thumbnail/public/topics-images/openai_0.png?itok=GozF8tZz', 'https://www.blognone.com/sites/default/files/styles/thumbnail/public/topics-images/openai_0.png?itok=GozF8tZz', 'https://www.blognone.com/sites/default/files/styles/thumbnail/public/topics-images/openai_0.png?itok=GozF8tZz', 'ไม่มีอะไรเปิดอีกต่อไป OpenAI เปลี่ยนนโยบาย ไม่เปิดเผยโครงสร้างและนโยบายการบริหารภายใน', 'เว็บไซต์ WIRED ยื่นเรื่องไปยัง OpenAI เพื่อขอเอกสารการสั่งการภายใน, บัญชีการเงิน, และกฎการควบคุมการขัดกันของผลประโยชน์ (conflict of interest) แต่กลับถูกปฎิเสธทั้งที่ OpenAI เคยประกาศว่าจะเปิดเผยข้อมูลเหล่านี้หากได้รับการร้องขอ', 'OpenAI', '2024-01-25 07:21:46'),
	(15, 'https://stc.utdstc.com/img/logos/Microsoft.png', 'https://stc.utdstc.com/img/logos/Microsoft.png', 'https://stc.utdstc.com/img/logos/Microsoft.png', 'https://stc.utdstc.com/img/logos/Microsoft.png', 'Microsoft Mesh แอพสร้างอวตารในโลกเสมือน 3D เข้าสถานะ GA เปิดใช้งานทั่วไปแล้ว', '\r\nไมโครซอฟท์เปิดตัว Mesh for Teams บริการประชุมโลกเสมือนด้วยร่างอวตาร ตั้งแต่ปลายปี 2021 และเปิดทดสอบจริงๆ แบบ public preview เมื่อเดือนตุลาคม 2023', 'Microsoft', '2024-01-25 07:23:00');

-- Dumping structure for table life_website.life_book
CREATE TABLE IF NOT EXISTS `life_book` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Image_URL_Sec1` varchar(255) NOT NULL,
  `Image_URL_Sec2` varchar(255) NOT NULL,
  `Image_URL_Sec3` varchar(255) NOT NULL,
  `Image_URL_Sec4` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `refer` varchar(255) NOT NULL,
  `dateset` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dumping data for table life_website.life_book: ~3 rows (approximately)
INSERT INTO `life_book` (`id`, `Image_URL_Sec1`, `Image_URL_Sec2`, `Image_URL_Sec3`, `Image_URL_Sec4`, `name`, `detail`, `refer`, `dateset`) VALUES
	(15, 'https://storage.naiin.com/system/application/bookstore/resource/product/201802/230495/1000205164_front_XXL.jpg?imgname=%E0%B8%9E%E0%B9%88%E0%B8%AD%E0%B8%A3%E0%B8%A7%E0%B8%A2%E0%B8%AA%E0%B8%AD%E0%B8%99%E0%B8%A5%E0%B8%B9%E0%B8%81-RICH-DAD-POOR-DAD-(%E0%B8%8', 'https://api.chulabook.com/images/pid-164893.jpg', 'https://api.chulabook.com/images/pid-164893.jpg', 'https://api.chulabook.com/images/pid-164893.jpg', 'พ่อรวยสอนลูก', 'จะบอกเล่าถึงความเชื่อผิดๆ ที่คิดว่าต้องมีเงินมากถึงจะรวยได้ ความเชื่อผิดๆ ที่คิดว่าบ้านเป็นทรัพย์สิน ความเชื่อผิดๆ ที่คิดว่าโรงเรียนจะสอนเรื่องเงินๆ ทองๆ ที่ถูกต้องให้กับลูกหลานของเรา โดยจะให้นิยามของทรัพย์สินและหนี้สินที่ถูกต้อง พร้อมความรู้ทางการเงินสำห', 'โรเบิร์ต คิโยซากิ', '2024-01-25 06:28:26'),
	(16, 'https://static.wixstatic.com/media/936e61_79719b81215f4ee1a3c22410da852cc5~mv2_d_1358_1950_s_2.jpg/v1/fill/w_326,h_469,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/936e61_79719b81215f4ee1a3c22410da852cc5~mv2_d_1358_1950_s_2.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbwzEEzfeY-sBuFsRvhzS4cXW_A2Pbowmu2RRwxdqhuAzdKSWUzrY94P8pEK-Qwlo95u8&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbwzEEzfeY-sBuFsRvhzS4cXW_A2Pbowmu2RRwxdqhuAzdKSWUzrY94P8pEK-Qwlo95u8&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbwzEEzfeY-sBuFsRvhzS4cXW_A2Pbowmu2RRwxdqhuAzdKSWUzrY94P8pEK-Qwlo95u8&usqp=CAU', 'อย่าหาว่าน้าสอน', 'อย่าหาว่าน้าสอน\r\n\r\n"น้าเน็ก" ชายที่เรารู้คุ้นเสียงคุ้นหน้า แต่ไม่เคยรู้ว่าตัวตนจริงเขาเป็นอย่างไร กับคมคิดติดขำที่ทำให้เห็นแง่มุมชีวิต จิตใจและความห่วงใยที่อยากส่งต่อ "ทุกเหตุการณ์เลวร้ายในชีวิต เมื่อเวลาผ่านไปสุดท้ายมักกลายเป็นเรื่องตลกเสมอ" "ถ้าเปิดหน้า', 'น้าเน้ก', '2024-01-25 07:01:56'),
	(17, 'https://storage.naiin.com/system/application/bookstore/resource/product/202209/559765/1000253855_front_XXL.jpg?imgname=%E0%B9%80%E0%B8%9E%E0%B8%A3%E0%B8%B2%E0%B8%B0%E0%B9%80%E0%B8%9B%E0%B9%87%E0%B8%99%E0%B8%A7%E0%B8%B1%E0%B8%A2%E0%B8%A3%E0%B8%B8%E0%B9%88%', 'https://storage.naiin.com/system/application/bookstore/resource/product/202209/559765/1000253855_back_XXXL.jpg?imgname=%E0%B9%80%E0%B8%9E%E0%B8%A3%E0%B8%B2%E0%B8%B0%E0%B9%80%E0%B8%9B%E0%B9%87%E0%B8%99%E0%B8%A7%E0%B8%B1%E0%B8%A2%E0%B8%A3%E0%B8%B8%E0%B9%88%', 'https://storage.naiin.com/system/application/bookstore/resource/product/202209/559765/1000253855_back_XXXL.jpg?imgname=%E0%B9%80%E0%B8%9E%E0%B8%A3%E0%B8%B2%E0%B8%B0%E0%B9%80%E0%B8%9B%E0%B9%87%E0%B8%99%E0%B8%A7%E0%B8%B1%E0%B8%A2%E0%B8%A3%E0%B8%B8%E0%B9%88%', 'https://storage.naiin.com/system/application/bookstore/resource/product/202209/559765/1000253855_back_XXXL.jpg?imgname=%E0%B9%80%E0%B8%9E%E0%B8%A3%E0%B8%B2%E0%B8%B0%E0%B9%80%E0%B8%9B%E0%B9%87%E0%B8%99%E0%B8%A7%E0%B8%B1%E0%B8%A2%E0%B8%A3%E0%B8%B8%E0%B9%88%', 'หนังสือเพราะเป็นวัยรุ่นจึงเจ็บปวด', 'เพราะเป็นวัยรุ่นจึงเจ็บปวด หนังสือที่ช่วยปลอบประโลมและชี้แนวทางการใช้ชีวิต\r\nให้กับวัยรุ่นที่กำลังหลงทางในโลกของความเป็นผู้ใหญ่ที่เพิ่งเริ่มต้น เขียนโดย\r\nคิมรันโด ที่ปรึกษาวัยรุ่นแห่งสาธารณรัฐเกาหลีใต้ คิมรันโด เขียนหนังสือเล่มนี้\r\nเพราะต้องการให้ลูกชายซึ่', 'คิมรันโด', '2024-01-25 07:03:34'),
	(18, '                        https://api.chulabook.com/images/pid-164893.jpg', '                        https://api.chulabook.com/images/pid-164893.jpg', '                        https://api.chulabook.com/images/pid-164893.jpg', 'https://api.chulabook.com/images/pid-164893.jpg', 'book', 'zxc', 'Mission to the moon ', '2024-01-25 08:20:15');

-- Dumping structure for table life_website.life_comment
CREATE TABLE IF NOT EXISTS `life_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `comment_time` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dumping data for table life_website.life_comment: ~3 rows (approximately)
INSERT INTO `life_comment` (`id`, `name`, `comment`, `comment_time`) VALUES
	(23, 'admin', 'test', '2024-01-16 09:11:05'),
	(24, 'admin', 'comment เทส', '2024-01-21 11:47:08'),
	(25, 'mem', 'lorsf sfkksfkassfk', '2024-01-21 11:50:48'),
	(26, 'Area City | Taining', 'ฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟฟaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2024-01-22 11:06:43');

-- Dumping structure for table life_website.life_counter
CREATE TABLE IF NOT EXISTS `life_counter` (
  `nouser` int(11) NOT NULL,
  `userIP` varchar(50) NOT NULL COMMENT 'IP ของผู้เข้าเว็บ',
  `dateCreate` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'วันเวลาที่เข้าชม'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dumping data for table life_website.life_counter: ~0 rows (approximately)
INSERT INTO `life_counter` (`nouser`, `userIP`, `dateCreate`) VALUES
	(1, '127.0.0.1', '2024-01-14 16:08:19');

-- Dumping structure for table life_website.life_podcat
CREATE TABLE IF NOT EXISTS `life_podcat` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `YT_URL` varchar(255) NOT NULL,
  `Image_URL_Sec2` varchar(255) NOT NULL,
  `Image_URL_Sec3` varchar(255) NOT NULL,
  `Image_URL_Sec4` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `refer` varchar(255) NOT NULL,
  `dateset` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dumping data for table life_website.life_podcat: ~4 rows (approximately)
INSERT INTO `life_podcat` (`id`, `YT_URL`, `Image_URL_Sec2`, `Image_URL_Sec3`, `Image_URL_Sec4`, `name`, `detail`, `refer`, `dateset`) VALUES
	(18, 'https://www.youtube.com/embed/2uTtgUyUBq4', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSslofCllXXrhE01ORSqPM-10RGRFL5enIRCA&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSslofCllXXrhE01ORSqPM-10RGRFL5enIRCA&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSslofCllXXrhE01ORSqPM-10RGRFL5enIRCA&usqp=CAU', '8 กิจกกรมยามเช้าที่เหมาะกับคน 8 ประเภท', 'หลังตื่นนอนเป็นช่วงเวลาที่สำคัญ\r\nและตัดสินวันนั้นทั้งวันของเราได้ดีที่สุด\r\nเราจะต่อสู้และผ่านพ้นหนึ่งวันได้อย่างไรนั้น\r\nสามารถดูได้จากกิจวัตรยามเช้าของเรา\r\n.\r\nมาดูกิจวัตรยามเช้า 8 รูปแบบ\r\nที่ทดลองแล้วพบว่าเป็นวิธีที่ดีที่สุด\r\nสำหรับคน 8 ประเภทได้ในพอดแคสต', 'Mission to the moon ', '2024-01-25 07:09:28'),
	(19, 'https://www.youtube.com/embed/3f_buRvBxEc', 'https://contentshifu.com/wp-content/uploads/2023/05/FeatureIMG_AW_Inteview-K-Ravid-Mission-to-te-moon.jpg', 'https://contentshifu.com/wp-content/uploads/2023/05/FeatureIMG_AW_Inteview-K-Ravid-Mission-to-te-moon.jpg', 'https://contentshifu.com/wp-content/uploads/2023/05/FeatureIMG_AW_Inteview-K-Ravid-Mission-to-te-moon.jpg', 'เข้าใจความเปลี่ยนแปลงของชีวิตผ่านแนวคิด Butterfly Effect', 'ทฤษฎีผีเสื้อขยับปีก (Butterfly Effect) \r\nเป็นปรากฏการณ์ที่เราพบเห็น\r\nในภาพยนตร์หรือสื่อต่างๆ\r\nทำให้รู้สึกได้ถึงพลังที่ยิ่งใหญ่ \r\nซึ่งอาจกระทบกับชีวิตของเรา\r\nและเกิดเรื่องราวไม่คาดคิดมากมายได้\r\nแต่ถ้ามองในมุมกลับ \r\nความเปลี่ยนแปลงที่เกิดขึ้นนั้น\r\nอาจเป็นคว', 'Mission to the moon ', '2024-01-25 07:10:22'),
	(20, 'https://www.youtube.com/embed/w6IXpshcKw0', 'https://contentshifu.com/wp-content/uploads/2023/05/FeatureIMG_AW_Inteview-K-Ravid-Mission-to-te-moon.jpg', 'https://contentshifu.com/wp-content/uploads/2023/05/FeatureIMG_AW_Inteview-K-Ravid-Mission-to-te-moon.jpg', 'https://contentshifu.com/wp-content/uploads/2023/05/FeatureIMG_AW_Inteview-K-Ravid-Mission-to-te-moon.jpg', 'รับมือกับความรู้สึกแย่ๆ อย่างไร', 'ความรู้สึกแย่ๆ นั้นเกิดได้กับทุกคน โดยที่แต่ละคนก็มีวิธีการรับมือที่แตกต่างกันออกไป\r\n.\r\nบางคนเริ่มต้นด้วยการแยกแยะเพื่อทำความเข้าใจปัญหาหรือบางคนอาจจะระบายออกมาด้วยการเขียน', 'Mission to the moon ', '2024-01-25 07:11:24'),
	(21, 'https://www.youtube.com/embed/_00E8OTTTFM', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1M24ruSkB7pkFnd5VbJ5Lvx79Mk96I8XCKPuf6IOIl2ISIcXa2QDyT0jW6jOpKJGLhRk&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1M24ruSkB7pkFnd5VbJ5Lvx79Mk96I8XCKPuf6IOIl2ISIcXa2QDyT0jW6jOpKJGLhRk&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1M24ruSkB7pkFnd5VbJ5Lvx79Mk96I8XCKPuf6IOIl2ISIcXa2QDyT0jW6jOpKJGLhRk&usqp=CAU', 'เปลี่ยนจาก \'คนที่ไม่เห็นคุณค่าในตัวเอง\' เป็น \'คนที่รู้จักรักตัวเอง', 'การรู้จักรักตัวเอง สำคัญกับชีวิตส่วนตัวและการงานอย่างไร การไม่เห็นคุณค่าในตัวเองเกิดจากอะไรได้บ้าง เราจะก้าวข้ามและเริ่มต้นรักตัวเองได้อย่างไร\r\n', 'the standard', '2024-01-25 07:13:42');

-- Dumping structure for table life_website.life_user
CREATE TABLE IF NOT EXISTS `life_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `urole` varchar(255) NOT NULL,
  `dateset` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dumping data for table life_website.life_user: ~3 rows (approximately)
INSERT INTO `life_user` (`id`, `img`, `email`, `username`, `password`, `urole`, `dateset`) VALUES
	(43, '', 'akasiam064aad@gmail.com', 'admin', '$2y$10$Yzkf/8QunsuV980hjrcbx.SIKKp3hrKYikjdGJiKSVHR7NI04pOXS', 'admin', '2024-01-20 18:20:20'),
	(48, '', 'akasiam123z@gmail.com', 'asdada', '$2y$10$1GJDa149CIiV9gOQI.cqhO0SRB38f9lG1s7b0KP6KA0491iUMRL9O', 'user', '2024-01-21 08:55:49'),
	(49, '', 'asdsa@ga.ca', 'mem', '$2y$10$i.yEfxYx920xJBrkypm05OOebcFlNfoOUfoXnaPxTO7aoGIVkwk42', 'user', '2024-01-21 11:46:44');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
