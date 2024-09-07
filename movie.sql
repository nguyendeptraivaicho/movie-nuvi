-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2017 at 09:44 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(32) CHARACTER SET utf8 NOT NULL,
  `hoTen` varchar(30) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `hoTen`, `email`, `phone`) VALUES
('hoai', '123456', 'Nguyen Minh Hoai', 'hoai.nguyenminh356@gmail.com', '01228940928');

-- --------------------------------------------------------

--
-- Table structure for table `loaiphim`
--

CREATE TABLE IF NOT EXISTS `loaiphim` (
  `maloai` varchar(10) CHARACTER SET utf8 NOT NULL,
  `tenloai` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`maloai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loaiphim`
--

INSERT INTO `loaiphim` (`maloai`, `tenloai`) VALUES
('phimbo', 'Phim bộ'),
('phimle', 'Phim lẻ');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `idtintuc` int(50) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `date` varchar(10) NOT NULL,
  `summary` text CHARACTER SET utf8 NOT NULL,
  `info1` text CHARACTER SET utf8 NOT NULL,
  `info2` text CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) NOT NULL,
  `info3` text CHARACTER SET utf8 NOT NULL,
  `info4` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`idtintuc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`idtintuc`, `title`, `date`, `summary`, `info1`, `info2`, `image`, `info3`, `info4`) VALUES
(1, 'Phòng vé Bắc Mỹ cán mốc doanh thu 10 tỷ USD', '26/11/2016', '2016 là năm mà ngành công nghiệp điện ảnh Bắc Mỹ đạt doanh thu 10 tỷ USD nhanh nhất từ trước tới nay.', 'Tin vui dành cho Hollywood đến từ Hiệp hội Chiếu phim Quốc gia nước Mỹ trong ngày 26/11. Theo đó, tổng doanh thu các bộ phim phát hành tại Bắc Mỹ trong năm 2016 đã chạm mốc 10 tỷ USD (tương đương 227.275 tỷ đồng). Tác phẩm ăn khách nhất tại thị trường điện ảnh lớn nhất thế giới trong năm nay hiện là phim hoạt hình Finding Dory của xưởng Pixar và Disney với 486,2 triệu USD.\r\n\r\nKế đó là bom tấn siêu anh hùng Captain America: Civil War (408,1 triệu USD), phim hoạt hình The Secret Life of Pets (367,6 triệu USD), The Jungle Book (364 triệu USD), và Deadpool (363,1 triệu USD). Trong số đó, ngoại trừ Pets đến từ Universal và Deadpool đến từ Fox, nhóm tác phẩm ăn khách còn lại đều do Disney phát hành.', 'Kỷ lục đạt doanh thu 10 tỷ USD nhanh nhất của phòng vé Bắc Mỹ trước đó xảy ra vào ngày 7/12/2013. Năm 2015, các nhà rạp nơi đây chỉ đạt đến ngưỡng doanh thu đáng mong đợi vào ngày 18/12. Song, nhờ bom tấn Star Wars: The Force Awakens, phòng vé Bắc Mỹ lập kỷ lục doanh thu lên tới 11,12 tỷ USD sau khi năm 2015 khép lại. Chỉ trong 14 ngày cuối năm, riêng phần bảy của Chiến tranh giữa các vì sao đã giúp thu về 652 triệu USD nội địa.\r\n\r\nPhòng vé Bắc Mỹ cán mốc doanh thu 10 tỷ USD 18:00 26/11/2016 2016 là năm mà ngành công nghiệp điện ảnh Bắc Mỹ đạt doanh thu 10 tỷ USD nhanh nhất từ trước tới nay. Tin vui dành cho Hollywood đến từ Hiệp hội Chiếu phim Quốc gia nước Mỹ trong ngày 26/11.', '1.jpg', 'Theo đó, tổng doanh thu các bộ phim phát hành tại Bắc Mỹ trong năm 2016 đã chạm mốc 10 tỷ USD (tương đương 227.275 tỷ đồng). Tác phẩm ăn khách nhất tại thị trường điện ảnh lớn nhất thế giới trong năm nay hiện là phim hoạt hình Finding Dory của xưởng Pixar và Disney với 486,2 triệu USD. Phong ve Bac My can moc doanh thu 10 ty USD hinh anh 1 Finding Dory đang tạm thời là phim ăn khách nhất khu vực Bắc Mỹ trong năm 2016. Ảnh: Disney. Kế đó là bom tấn siêu anh hùng Captain America: Civil War (408,1 triệu USD), phim hoạt hình The Secret Life of Pets (367,6 triệu USD), The Jungle Book (364 triệu USD), và Deadpool (363,1 triệu USD). Trong số đó, ngoại trừ Pets đến từ Universal và Deadpool đến từ Fox, nhóm tác phẩm ăn khách còn lại đều do Disney phát hành. Kỷ lục đạt doanh thu 10 tỷ USD nhanh nhất của phòng vé Bắc Mỹ trước đó xảy ra vào ngày 7/12/2013. Năm 2015, các nhà rạp nơi đây chỉ đạt đến ngưỡng doanh thu đáng mong đợi vào ngày 18/12. Song, nhờ bom tấn Star Wars: The Force Awakens, phòng vé Bắc Mỹ lập kỷ lục doanh thu lên tới 11,12 tỷ USD sau khi năm 2015 khép lại.', 'Chỉ trong 14 ngày cuối năm, riêng phần bảy của Chiến tranh giữa các vì sao đã giúp thu về 652 triệu USD nội địa. Trailer bộ phim ''Hành trình của Moana'': Bom tấn hoạt hình mới của xưởng Walt Disney có The Rock tham gia lồng tiếng, xoay quanh chuyến phiêu lưu ngoài đại dương của công chúa Moana và á thần Maui. Hiện Moana là tác phẩm được quan tâm nhất tại khu vực Bắc Mỹ trong kỳ nghỉ Lễ Tạ ơn sau khi ra rạp hôm 23/11. Bộ phim hoạt hình mới của xưởng Walt Disney dự kiến thu 85 triệu USD trong năm ngày đầu trình chiếu. Việc phòng vé Bắc Mỹ 2016 có thể phá vỡ kỷ lục của năm 2015 phụ thuộc rất nhiều vào thành tích của bom tấn Rogue One: A Star Wars Story và phim hoạt hình Sing. Cả hai dự kiến khởi chiếu vào trung tuần tháng 12 và nhắm tới kỳ nghỉ lễ Giáng sinh kéo dài. Ngoài ra, phim khoa học viễn tưởng lãng mạn Passengers và tác phẩm hành động chuyển thể từ trò chơi Assassin’s Creed cũng là hai cái tên tiềm năng khi dự kiến ra rạp từ 21/12.\r\n'),
(2, '''Thor: Ragnarok'' thắng lớn dù chưa chiếu ở Mỹ', '30/10/2017', 'Tác phẩm thứ 17 trong Vũ trụ Điện ảnh Marvel thu 107,6 triệu USD ở các thị trường ngoài Bắc Mỹ.', 'Trong số này, doanh thu cao nhất (15,8 triệu USD) đến từ nước Anh - quê hương của tài tử Tom Hiddleston (thủ vai Loki). Tiếp theo là các thị trường Hàn Quốc (15,3 triệu USD), Australia (8,4 triệu USD), Brazil (8,3 triệu USD) và Pháp (7,4 triệu USD). Ở nhiều nước, Thor: Ragnarok đạt doanh thu mở màn cao nhất tháng 10 trong lịch sử điện ảnh. Tuần sau, tác phẩm sẽ ra mắt ở nhiều thị trường quan trọng như Mỹ, Trung Quốc, Nhật, Nga và Đức.', 'Trong phần ba về Thor (Chris Hemsworth), thần sấm bị nữ thần chết Hela (Cate Blanchett) đẩy đến một hành tinh xa lạ. Tại đây, anh phải đối đầu với người đồng đội cũ Hulk trong một võ đài sinh tử. Trong khi đó, xứ Asgard sắp đối mặt với ngày tận thế Ragnarok. Tác phẩm được giới phê bình khen ngợi với 96% đánh giá tích cực trên Rotten Tomatoes.', 'set-top-thor-ragnarok-hulk-hel-5178-6771-1509334523.jpg', 'Ngày 29/10, Disney thông báo doanh thu vượt mức 4 tỷ USD trong năm 2017, trở thành hãng phim duy nhất cán mốc này 5 năm liên tiếp. Trong đó, 1,4 tỷ USD đến từ Bắc Mỹ. Các phim ăn khách nhất của hãng năm nay gồm Beauty and the Beast (1,26 tỷ USD toàn cầu), Guardians of the Galaxy 2 (863 triệu USD) và Pirates of the Caribbean 5 (794 triệu USD). Sắp tới, Thor: Ragnarok, Star Wars: The Last Jedi và Coco (hoạt hình của hãng Pixar) được dự đoán thắng lớn, tiếp tục giúp Disney nâng cao doanh thu dịp cuối năm.', 'Cuối tuần qua, phim kinh dị Jigsaw đứng đầu phòng vé Bắc Mỹ với 16,2 triệu USD, còn Geostorm đứng đầu phòng vé Trung Quốc với 33 triệu USD. Phim thảm họa có Gerard Butler đóng chính hiện đạt 136 triệu USD toàn cầu, trong khi kinh phí sản xuất là 120 triệu USD, chưa tính chi phí quảng bá. Theo Collider, dự án được cho là khiến hãng sản xuất lỗ khoảng 100 triệu USD.');

-- --------------------------------------------------------

--
-- Table structure for table `phim`
--

CREATE TABLE IF NOT EXISTS `phim` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `namephim` varchar(50) CHARACTER SET utf8 NOT NULL,
  `info` text CHARACTER SET utf8 NOT NULL,
  `summary` text CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `video` varchar(255) DEFAULT NULL,
  `rate` int(6) NOT NULL,
  `comment` int(255) NOT NULL,
  `release` varchar(50) NOT NULL,
  `actor` varchar(50) CHARACTER SET utf8 NOT NULL,
  `company` varchar(100) CHARACTER SET utf8 NOT NULL,
  `macountry` varchar(30) CHARACTER SET utf8 NOT NULL,
  `matl` varchar(30) CHARACTER SET utf8 NOT NULL,
  `maloai` varchar(10) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  KEY `matl` (`matl`),
  KEY `macountry` (`macountry`),
  KEY `macountry_2` (`macountry`),
  KEY `macountry_3` (`macountry`),
  KEY `macountry_4` (`macountry`),
  KEY `maloai` (`maloai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `phim`
--

INSERT INTO `phim` (`id`, `namephim`, `info`, `summary`, `image`, `video`, `rate`, `comment`, `release`, `actor`, `company`, `macountry`, `matl`, `maloai`) VALUES
(1, 'xXx 3: The Return of Xander Cage', 'Xoay quanh nhân vật Xander Cage – một vận động viên thể thao mạo hiểm bất đắc dĩ phải làm việc cho cơ quan an ninh quốc gia Mỹ, xXx khai thác thế giới ngầm của những tên khủng bố với tham vọng thống trị bằng vũ khí sinh học. Tác phẩm ra mắt đầu tiên vào năm 2002, phần phim thứ hai được ra mắt sau đó ít lâu nhưng không có sự tham gia của Vin Diesel do anh chỉ vừa mới hoàn tất tác phẩm giả tưởng “Pitch Black”, vừa qua đã chính thức giới thiệu tới khán giả trailer đầu tiên của phần phim thứ ba – xXx: THE RETURN OF XANDER CAGE, trên trang cá nhân của anh.', 'Xoay quanh nhân vật Xander Cage – một vận động viên thể thao mạo hiểm bất đắc dĩ ... ', 'xxx3.jpg', '7d0QT4RkCu0', 4, 85, '20/1/2017', 'D.j. Caruso', 'Paramount Pictures', 'my', 'action', 'phimle'),
(2, 'TỪ BỎ EM GIỮ CHẶT EM', 'Dự án truyền hình Từ Bỏ Em, Giữ Chặt Em kể về quá trình đi tìm lại ký ức của nhà thiết kế Đỗ Thất Thất (Trần Kiều Ân). Khoảng ký ức sau năm 23 tuổi của cô bị mất đi. Cô xem người yêu của mình Trần Diệc Độ (Vương Khải) trở thành đối thủ, nhận Thích Thành – một người qua đường là vị hôn phu. Thất Thất không tin bản thân và người yêu đã chia tay nên quyết đi tìm lại ký ức đã mất. Trong lúc đó, Thích Thành luôn ở cạnh cô, chăm sóc và bảo vệ cô.\r\n', 'Dự án truyền hình Từ Bỏ Em, Giữ Chặt Em kể về quá trình đi tìm lại ký ức ...', 'Stay With Me.jpg', '0CIJcwoyMRs', 3, 30, '2016', 'Đặng Diễn Thành', 'Chưa rõ', 'trungquoc', 'romance', 'phimbo'),
(3, 'Masamune-kun no Revenge', 'Makabe Masamune lúc nhỏ chỉ là một con heo vô dụng yếu đuối, nhưng từ khi tỏ tình thất bại với Adagaki, tuyệt vọng khi bị chế nhạo nên Makabe quyết tâm nỗ lực rèn luyện mình và vạch ra một kế hoạch hoàn hảo để trả thù Adagaki. Tám năm sau, cậu đã trở thành một anh chàng đẹp trai, thân hình đầy đặn với thành tích xuất sắc đậu vào trường của Adagaki đang học. Liệu cậu có thể trả thù hay không? Cùng nhau theo dõi câu chuyện nào...', 'Makabe Masamune lúc nhỏ chỉ là một con heo vô dụng yếu đuối, nhưng từ khi tỏ tình thất bại...', 'Masamune-kun no Revenge.jpg', 'XmfXcVLA1d8', 5, 85, '5/1/2017', 'Takeoka, Hazuki', 'Silver Link', 'nhatban', 'romance', 'phimbo'),
(4, 'QUÝ CÔ THÔ LỖ (PHẦN 15)', 'Với mô-tip phim được xây dựng như một một phim tài liệu về cuộc sống hàng ngày, khán giả đã cùng trải nghiệm thế giới của một người phụ nữ độc thân có ngoại hình béo Young Ae cũng như những định kiến cô gặp phải từ tiền bối, bạn đồng nghiệp hết lần này đến lần khác. \r\n\r\nCó thể nói không chỉ truyền hình Hàn Quốc mà cả trên thế giới cũng không dễ để tìm được 1 bộ phim có thể thu hút khán giả tới 15 phần, đủ để cho thấy sức hấp dẫn của bộ phim được mệnh danh ‘phim truyền hình tuổi thọ dài nhất Hàn Quốc’.', 'Với mô-tip phim được xây dựng như một một phim tài liệu về cuộc sống hàng ngày ...', 'Rude Miss Young-Ae Season 15.jpg', 'nOgwDqG3Tzk', 3, 37, '31/10/2016', 'Han Sang-Jae', 'Chưa rõ', 'hanquoc', 'comedy', 'phimbo'),
(5, 'Spider-Man: Homecoming', 'Peter Parker khi này mới chỉ là một cậu học sinh trung học và nhận được sự giúp đỡ từ tỷ phú Tony Stark (Người Sắt). Mối quan hệ giữa Spider-Man và Iron Man hé mở từ Civil War và tiếp tục phát triển trong bộ phim này.', 'Peter Parker khi này mới chỉ là một cậu học sinh trung học ...', 'Spider-Man Homecoming.jpg', 'Y0LxOghNOdU', 5, 212, '7/7/2017', 'Jon Watts', 'Columbia Pictures, LStar Capital, Marvel Entertainment', 'my', 'action', 'phimle'),
(6, 'QUÁI VẬT BÓNG ĐÊM', 'Hai mẹ con phải đối đầu với một con quái vật đáng sợ khi họ liều lĩnh đi vào một con đường vắng vẻ.', 'Hai mẹ con phải đối đầu với một con quái vật đáng sợ ...', 'The Monster.jpg', 'RUYyqIAiJVc', 3, 32, '6/10/2016', 'Bryan Bertino', 'Atlas Independent, Unbroken Pictures', 'my', 'horror', 'phimle'),
(7, 'CƯỚP BIỂN VÙNG CARIBBE (PHẦN 5)', 'Trong phần 5, hồn ma của thuyền trưởng Salazar trở về và dự định tiêu diệt mọi cướp biển dám đi lại trên biển, kể cả Jack Sparrow. Để sống sót, Jack Sparrow lên đường đi tìm cây đinh ba huyền thoại của thần biển Poseidon (trong thần thoại Hy Lạp, Poseidon là anh em với thần Zeus, Hades và Hera. Poseidon tương đương với thần Neptune trong thần thoại La Mã), một báu vật có khả năng điều khiển biển theo ý muốn của người sử dụng.', 'Trong phần 5, hồn ma của thuyền trưởng Salazar trở về và ...', 'Pirates of the Caribbean.jpg', 'Vi5Q-m_0rIw', 5, 98, '26/5/2017', 'Joachim Rønning, Espen Sandberg', 'Walt Disney Pictures, Jerry Bruckheimer Films, Moving Picture Company', 'my', 'action', 'phimle'),
(8, 'XÁC SỐNG 7', 'Thế giới hậu dịch bệnh sẽ rộng lớn hơn rất nhiều. Và giờ không chỉ là Alexandria hay Hilltop nữa, mà còn là The Saviors và cộng đồng mới The Kingdom. Bên cạnh đó, "tình đoàn kết" có vẻ sẽ đóng vai trò quan trọng trong phần này thông qua các cảnh tái hiện lời nói trong quá khứ của các nhân vật. Dĩ nhiên là phải đoàn kết thì nhóm Rick mới có thể đánh bại được hội Negan chứ không thể đơn độc được. Giờ đây khi có sự tham gia của nhiều cộng đồng khác, có vẻ sẽ chuẩn bị có cuộc chiến thực sự.', 'Thế giới hậu dịch bệnh sẽ rộng lớn hơn rất nhiều. Và ...', 'The Walking Dead.jpg', 'wGm2zwg_-NY', 5, 161, '2016', 'Chưa rõ', 'American Movie Classics (AMC), Circle of Confusion, Valhalla Motion Pictures', 'my', 'horror', 'phimbo'),
(9, 'Assassin''s Creed', 'Nhờ vào một công nghệ cải tiến có thể phá vỡ những kí ức trong cấu trúc gien, Callum Lynch đã có thể làm sống lại kí ức về những cuộc phiêu lưu của tổ tiên mình – Aguilar – Tây Ban Nha vào thế kỉ 15. Thông qua kí ức này, Callum đã phát hiện rằng mình là hậu duệ của một hội kín bí ẩn mang tên Assassins và đồng thời tích lũy được hàng loạt kiến thức, kĩ năng không tưởng để đối đầu với một tổ chức đầy áp bức và hùng mạnh ngày nay – Hiệp Sĩ Dòng Đền.', 'Nhờ vào một công nghệ cải tiến có thể phá vỡ những kí ức ...', 'Assassin''s Creed.jpg', 'hulT7XYSPrw', 3, 25, '30/12/2016', 'Justin Kurzel', 'Regency Enterprises, Ubisoft Motion Pictures, DMC Film', 'my', 'action', 'phimle'),
(10, 'Tales of Zestiria the X 2nd Season', 'Phần 2 của Tales of Zestiria the X', 'Phần 2 của Tales of Zestiria the X', 'Tales of Zestiria the X 2nd Season.jpg', 'reBBW2zZVc8', 4, 22, '8/1/2017', 'Chưa rõ', 'ufotable', 'nhatban', 'action', 'phimbo'),
(11, 'The Boss Baby', 'Cậu bé Tim 7 tuổi vốn dĩ đang có một cuộc sống rất ấm êm và đầy màu hồng thì bỗng dưng phải đối mặt với “biến cố” lớn trong đời: có một đứa em trai và phải học cách làm anh. Mọi khi cậu luôn là tâm điểm trong mắt bố mẹ, nhưng giờ đây Tim phải chấp nhận san sẻ tình yêu thương. Chưa hết, đứa em trai quái chiêu của cậu còn “thống trị” toàn bộ căn nhà, bắt nạt Tim và luôn khóc thét trước mặt bố mẹ để dành quyền được dỗ dành.\r\n\r\nThế nhưng, em bé không còn “bé” như họ tưởng, “Nhóc trùm” nói giọng người lớn và cư xử như một dân anh chị, nhân vật bí ẩn bên trong lốt em bé này đến từ đâu và với mục đích gì?', 'Cậu bé Tim 7 tuổi vốn dĩ đang có một cuộc sống rất ấm êm và ...', 'The Boss Baby.jpg', 'O2Bsw3lrhvs', 5, 77, '31/3/2017', 'Tom Mcgrath', 'DreamWorks Animation', 'my', 'comedy', 'phimle'),
(12, 'Bệnh viện ma', 'Nội dung phim Bệnh Viện Ma nói về Thành là chàng trai tính tình hiền lành và tốt bụng và tranh đua với đời,là sinh viên vừa tốt nghiệp ngành y khoa xin vào làm việc tại bệnh viên.Tưởng chừng như có một công việc ổn định nhưng hằng đêm anh phát hiện ra những hiện tượng kỳ lạ, những hồn ma quanh quẩn tìm gặp bác sĩ..', 'Nội dung phim Bệnh Viện Ma nói về Thành ...', 'Benh Vien Ma.jpg', 'uxv665vA2Lk', 3, 11, '2016', 'Nhất Trung', 'Chưa rõ', 'vietnam', 'horror', 'phimle'),
(13, 'YÊU TINH', 'Goblin là một câu chuyện thần thoại kể về Kim Shin (Gong Yoo), trong quá khứ anh từng bị đâm bởi một thanh kiếm phép thuật, Kim Shin không những không chết mà còn có được cuộc sống bất tử. Ở thời hiện đại, anh vô tình gặp gỡ Wang Yeo (Lee Dong Wook), một thần chết mắc chứng mất trí nhớ. Cả 2 dọn về ở cùng nhau và gây ra đủ chuyện dở khóc dở cười. ', 'Goblin là một câu chuyện thần thoại kể về Kim Shin (Gong Yoo), trong quá khứ anh từng bị đâm bởi một thanh kiếm phép thuật...', 'Goblin.jpg', 'v0j8W91uSZo', 4, 123, '2/12/2016', 'Lee Eung-Bok', 'Chưa rõ', 'hanquoc', 'romance', 'phimbo'),
(14, 'DEADPOOL 2', 'Nam diễn viên Ryan Reynolds đã tung ra đoạn video nhá hàng phim Deadpool 2 cực kỳ vui nhộn mang tên "No Good Deed". Anh khả ái đã trở lại và ăn hại hơn gấp bội phần, làm màu với chém gió thì nhiều mà hành động chẳng được bao nhiêu...\r\n\r\nDeadpool là nhân vật phản anh hùng (anti-hero) cực kỳ được yêu thích trong vũ trụ Marvel. Bộ phim solo của "anh khả ái dọn dẹp ngang trái" vào năm 2016 đã thành công rực rỡ với doanh thu lên đến 783 triệu USD. Deadpool 2 dự kiến sẽ công chiếu vào ngày 2/3/2018.', 'Deadpool là nhân vật phản anh hùng (anti-hero) cực kỳ được yêu thích trong vũ trụ Marvel', 'poster.medium.jpg', 'Z5ezsReZcxU', 5, 212, '2/3/2018', 'David Leitch', 'Donners'' Company, Kinberg Genre, Marvel Entertainment', 'my', 'action', 'phimle');

-- --------------------------------------------------------

--
-- Table structure for table `quoc gia`
--

CREATE TABLE IF NOT EXISTS `quoc gia` (
  `macountry` varchar(30) CHARACTER SET utf8 NOT NULL,
  `tencountry` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`macountry`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quoc gia`
--

INSERT INTO `quoc gia` (`macountry`, `tencountry`) VALUES
('hanquoc', 'Hàn Quốc'),
('my', 'Mỹ'),
('nhatban', 'Nhật Bản'),
('trungquoc', 'Trung Quốc'),
('vietnam', 'Việt Nam');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE IF NOT EXISTS `theloai` (
  `matl` varchar(30) CHARACTER SET utf8 NOT NULL,
  `tentl` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`matl`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`matl`, `tentl`) VALUES
('action', 'phim hành động'),
('comedy', 'phim hài hước'),
('horror', 'phim kinh dị'),
('romance', 'phim tình cảm-lãng mạng');

-- --------------------------------------------------------

--
-- Table structure for table `trangchu->phimle`
--

CREATE TABLE IF NOT EXISTS `trangchu->phimle` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `rate` int(11) NOT NULL,
  `comment` int(11) NOT NULL,
  `release` varchar(50) NOT NULL,
  `actor` varchar(100) CHARACTER SET utf8 NOT NULL,
  `country` varchar(50) CHARACTER SET utf8 NOT NULL,
  `company` varchar(100) CHARACTER SET utf8 NOT NULL,
  `info` text CHARACTER SET utf8 NOT NULL,
  `tl1` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `tl2` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trangchu->phimle`
--

INSERT INTO `trangchu->phimle` (`id`, `name`, `image`, `video`, `rate`, `comment`, `release`, `actor`, `country`, `company`, `info`, `tl1`, `tl2`) VALUES
(1, 'The Boss Baby', '/Web phim/Picture/Picture Movie/The Boss Baby (2).jpg', '/Web phim/Video/thebossbaby.mp4', 5, 80, '31/3/2017', 'Tom Mcgrath', 'Mỹ', 'DreamWorks Animation', '<p style="line-height:20px;text-indent:20px;">Cậu bé Tim 7 tuổi vốn dĩ đang có một cuộc sống rất ấm êm và đầy màu hồng thì bỗng dưng phải đối mặt với “biến cố” lớn trong đời: có một đứa em trai và phải học cách làm anh. Mọi khi cậu luôn là tâm điểm trong mắt bố mẹ, nhưng giờ đây Tim phải chấp nhận san sẻ tình yêu thương. Chưa hết, đứa em trai quái chiêu của cậu còn “thống trị” toàn bộ căn nhà, bắt nạt Tim và luôn khóc thét trước mặt bố mẹ để dành quyền được dỗ dành.</p>\r\n            <p style="line-height:20px;text-indent:20px;">Thế nhưng, em bé không còn “bé” như họ tưởng, “Nhóc trùm” nói giọng người lớn và cư xử như một dân anh chị, nhân vật bí ẩn bên trong lốt em bé này đến từ đâu và với mục đích gì?</p>', 'Phim lẻ', 'Phim hài hước'),
(2, 'Spider-Man: Homecoming', '/Web Phim/Picture/Picture Movie/spiderman.jpg', '/Web phim/Video/spiderman.mp4', 3, 35, '7/7/2017', 'Jon Watts', 'Mỹ', 'Columbia Pictures, LStar Capital, Marvel Entertainment', 'Peter Parker khi này mới chỉ là một cậu học sinh trung học và nhận được sự giúp đỡ từ tỷ phú Tony Stark (Người Sắt). Mối quan hệ giữa Spider-Man và Iron Man hé mở từ Civil War và tiếp tục phát triển trong bộ phim này.', 'phim hành động', 'phim lẻ'),
(3, 'Guardians Of The Galaxy 2', '/Web Phim/Picture/Picture Movie/Guardians Of The Galaxy 2.jpg', '', 5, 147, '5/5/2017', 'James Gunn', 'Mỹ', 'Marvel Studios, Walt Disney Studios Motion Pictures', '<p style="line-height:20px;text-indent:20px;">Nội dung của Guardians of the Galaxy Vol. 2 - Vệ Binh Giải Ngân Hà 2 chưa được hé lộ. Tuy nhiên, người hâm mộ dự đoán nó sẽ xoay quanh cuộc đi tìm một Viên đá Vô cực. Đó cũng là mục tiêu của ác nhân Thanos trong quá trình hoàn thành vũ khí hủy diệt Găng tay Vô cực.\r\nTheo kế hoạch, nhóm Vệ binh dải ngân hà sẽ song hành cùng Avengers ở cuộc chiến chống lại tên Thanos trong các tác phẩm tương lai.</p>\r\n<p style="line-height:20px;text-indent:20px;">Ngoài ra, danh tính của siêu anh hùng Star-Lord cũng sẽ được tiết lộ trong phần hai. \r\nTrong "Guardians of the Galaxy," nhóm anh hùng sẽ chạm trán Thanos - cũng là một nhân vật phản diện gây ra nhiều rắc rối cho những người hùng Avengers trong The Avengers: Age of Ultron Một tin đồn khác cho rằng phần tiếp theo của loạt phim "Avengers" sẽ kết thúc bằng việc người khổng lồ xanh Hulk bị đưa vào vũ trụ cùng với Thanos. Liệu Hulk có chạm trán nhóm Guardians hay không? </p>', 'phim hành động', 'phim lẻ'),
(4, 'Assassin''s Creed', '/Web Phim/Picture/Picture Movie/assassins-creed-movie (2).jpg', '', 4, 31, '21/12/2016', 'Justin Kurzel', 'Mỹ, Pháp, Anh, ', 'Regency Enterprises, Ubisoft Motion Pictures, DMC Film', 'Nhờ vào một công nghệ cải tiến có thể phá vỡ những kí ức trong cấu trúc gien, Callum Lynch đã có thể làm sống lại kí ức về những cuộc phiêu lưu của tổ tiên mình – Aguilar – Tây Ban Nha vào thế kỉ 15. Thông qua kí ức này, Callum đã phát hiện rằng mình là hậu duệ của một hội kín bí ẩn mang tên Assassins và đồng thời tích lũy được hàng loạt kiến thức, kĩ năng không tưởng để đối đầu với một tổ chức đầy áp bức và hùng mạnh ngày nay – Hiệp Sĩ Dòng Đền.', 'phim hành động', 'phim lẻ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(200) DEFAULT NULL,
  `Lname` varchar(200) DEFAULT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Fname`, `Lname`, `Username`, `Password`) VALUES
(1, 'nobita', 'trung', 'trung', '123456'),
(2, 'dsgsdg', 'fgfdh', 'hoai', '123456'),
(3, 'nguytienbao', 'tienbao', 'nguytienbao', 'bao123456'),
(4, 'phan thanh thai', 'thanh thai', 'phanthanhthai', 'thai123456');

-- --------------------------------------------------------

--
-- Table structure for table `userphim`
--

CREATE TABLE IF NOT EXISTS `userphim` (
  `IDUP` int(255) NOT NULL AUTO_INCREMENT,
  `id` int(255) NOT NULL,
  `UserID` int(255) NOT NULL,
  PRIMARY KEY (`IDUP`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `userphim`
--

INSERT INTO `userphim` (`IDUP`, `id`, `UserID`) VALUES
(54, 11, 1),
(55, 11, 3),
(56, 11, 4),
(58, 10, 1),
(59, 2, 1),
(60, 4, 1),
(61, 8, 1),
(62, 10, 4),
(63, 2, 4),
(64, 4, 4),
(65, 8, 4),
(66, 10, 3),
(68, 2, 3),
(69, 4, 3),
(70, 8, 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `phim`
--
ALTER TABLE `phim`
  ADD CONSTRAINT `phim_ibfk_1` FOREIGN KEY (`matl`) REFERENCES `theloai` (`matl`) ON UPDATE CASCADE,
  ADD CONSTRAINT `phim_ibfk_2` FOREIGN KEY (`macountry`) REFERENCES `quoc gia` (`macountry`) ON UPDATE CASCADE,
  ADD CONSTRAINT `phim_ibfk_3` FOREIGN KEY (`maloai`) REFERENCES `loaiphim` (`maloai`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
