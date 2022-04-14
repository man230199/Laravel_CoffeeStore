-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 19, 2022 lúc 11:03 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `coffee_store`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_content` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_article_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_at` date DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `article`
--

INSERT INTO `article` (`id`, `name`, `short_content`, `content`, `status`, `thumb`, `category_article_id`, `created`, `created_by`, `modified`, `modified_by`, `publish_at`, `type`) VALUES
(1, 'VĂN HÓA THƯỞNG THỨC CÀ PHÊ CỦA NGƯỜI CHÂU Á', '<p>Văn ho&aacute; c&agrave; ph&ecirc; sẽ phụ thuộc v&agrave;o những yếu tố li&ecirc;n quan đến &ldquo;h&igrave;nh th&aacute;i v&agrave; phong c&aacute;ch&rdquo; của l&agrave;n s&oacute;ng c&agrave; ph&ecirc; m&agrave; quốc gia đ&oacute; chịu ảnh hưởng. Ngo&agrave;i ra, ch&iacute;nh nhịp sống, những đặc điểm ri&ecirc;ng của mỗi v&ugrave;ng đất v&agrave; sở th&iacute;ch, t&iacute;nh c&aacute;ch...</p>', '<h3><strong>VĂN H&Oacute;A THƯỞNG THỨC C&Agrave; PH&Ecirc; CỦA NGƯỜI CH&Acirc;U &Aacute;</strong></h3>\r\n\r\n<p>Văn ho&aacute; c&agrave; ph&ecirc; sẽ phụ thuộc v&agrave;o những yếu tố li&ecirc;n quan đến &ldquo;h&igrave;nh th&aacute;i v&agrave; phong c&aacute;ch&rdquo; của l&agrave;n s&oacute;ng c&agrave; ph&ecirc; m&agrave; quốc gia đ&oacute; chịu ảnh hưởng. Ngo&agrave;i ra, ch&iacute;nh nhịp sống, những đặc điểm ri&ecirc;ng của mỗi v&ugrave;ng đất v&agrave; sở th&iacute;ch, t&iacute;nh c&aacute;ch của những người d&acirc;n bản địa sẽ quyết định trực tiếp đến văn ho&aacute; c&agrave; ph&ecirc;.&nbsp;</p>\r\n\r\n<p>Với những người d&acirc;n ch&acirc;u &Aacute; sẽ c&oacute; những n&eacute;t văn h&oacute;a thưởng thức c&agrave; ph&ecirc; kh&aacute;c biệt so với người ch&acirc;u &Acirc;u hay ch&acirc;u Mỹ. C&ugrave;ng xem những n&eacute;t kh&aacute;c biệt v&agrave; th&uacute; vị trong văn h&oacute;a thưởng thức c&agrave; ph&ecirc; của c&aacute;c nước ch&acirc;u &Aacute; nổi bật sau.&nbsp;</p>\r\n\r\n<p><strong>Việt Nam&nbsp;</strong></p>\r\n\r\n<p>Người Việt Nam th&igrave; chuộng c&agrave; ph&ecirc; sữa đ&aacute; truyền thống, c&agrave; ph&ecirc; đen đ&aacute; nguy&ecirc;n chất pha phin. D&ugrave; bất kỳ cửa h&agrave;ng c&agrave; ph&ecirc; n&agrave;o, từ sang trọng đến b&igrave;nh d&acirc;n đều thấy sự hiện diện của n&oacute;. Với người Việt, c&agrave; ph&ecirc; l&agrave; thức uống quen thuộc mỗi buổi s&aacute;ng. C&ograve;n đối với người S&agrave;i G&ograve;n th&igrave; c&agrave; ph&ecirc; lại được uống thường xuy&ecirc;n v&agrave; bất kỳ thời gian n&agrave;o trong ng&agrave;y. Văn h&oacute;a đi c&agrave; ph&ecirc; ch&iacute;nh l&agrave; c&aacute;ch người Việt gặp gỡ, kết nối v&agrave; gắn kết những người xung quanh.</p>\r\n\r\n<p><img alt=\"\" src=\"/storage/photos/blog/blog2.jpg\" style=\"height:400px; width:100%\" /></p>\r\n\r\n<p><strong>Th&aacute;i Lan&nbsp;</strong></p>\r\n\r\n<p>Những qu&aacute;n c&agrave; ph&ecirc; truyền thống, mang đậm hương vị kiểu Th&aacute;i vẫn được người Th&aacute;i y&ecirc;u chuộng hơn hết. Với kh&iacute; hậu n&oacute;ng ẩm n&ecirc;n những thức c&agrave; ph&ecirc; lạnh l&agrave; những m&oacute;n kho&aacute;i khẩu của họ. Ở ph&iacute;a Bắc th&agrave;nh phố Chiang Mai Th&aacute;i Lan cực kỳ nổi tiếng với m&oacute;n c&agrave; ph&ecirc; bia lạnh.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"/storage/photos/blog/blog3.jpg\" style=\"height:400px; width:100%\" /></p>\r\n\r\n<p>Đặc biệt, Oliang hay c&ograve;n gọi l&agrave; c&agrave; ph&ecirc; đ&aacute; kiểu Th&aacute;i l&agrave; m&oacute;n truyền thống y&ecirc;u th&iacute;ch của xứ sở ch&ugrave;a v&agrave;ng. Thức uống n&agrave;y được chế biến từ hỗn hợp b&atilde; c&agrave; ph&ecirc; Robusta, đường n&acirc;u, c&aacute;c loại hạt như bạch đậu khấu, bắp, đậu n&agrave;nh, hạt vừng&hellip; V&agrave;o những ng&agrave;y nắng n&oacute;ng, thức uống ngọt ng&agrave;o, quen thuộc n&agrave;y ch&iacute;nh l&agrave; m&oacute;n tuyệt vời nhất của người d&acirc;n địa phương cũng như du kh&aacute;ch đến Th&aacute;i. Nếu c&oacute; dịp đến đ&oacute;, bạn h&atilde;y thử n&oacute;.&nbsp;</p>', 'active', 'OGuwbm.jpg', 2, '2022-01-16 00:00:00', 'hailan', '2022-01-16 00:00:00', 'hailan', NULL, 'default'),
(2, 'CÀ PHÊ ĐẬM ĐÀ CHO NGÀY DÀI NĂNG LƯỢNG', '<p>C&agrave; ph&ecirc; l&agrave; thức uống chiếm giữ vị tr&iacute; số 1 trong l&ograve;ng của rất rất nhiều người để mỗi ng&agrave;y th&ecirc;m cảm hứng, mỗi ng&agrave;y th&ecirc;m năng lượng v&agrave; tr&agrave;n đầy x&uacute;c cảm. The Coffee House d&agrave;nh một t&igrave;nh y&ecirc;u s&acirc;u sắc với c&agrave; ph&ecirc;, lu&ocirc;n tr&acirc;n qu&yacute; đối với từng vị kh&aacute;ch...</p>', '<h3><strong>C&Agrave; PH&Ecirc; ĐẬM Đ&Agrave; CHO NG&Agrave;Y D&Agrave;I NĂNG LƯỢNG</strong></h3>\r\n\r\n<p>C&agrave; ph&ecirc; l&agrave; thức uống chiếm giữ vị tr&iacute; số 1 trong l&ograve;ng của rất rất nhiều người để mỗi ng&agrave;y th&ecirc;m cảm hứng, mỗi ng&agrave;y th&ecirc;m năng lượng v&agrave; tr&agrave;n đầy x&uacute;c cảm. The Coffee House d&agrave;nh một t&igrave;nh y&ecirc;u s&acirc;u sắc với c&agrave; ph&ecirc;, lu&ocirc;n tr&acirc;n qu&yacute; đối với từng vị kh&aacute;ch, vậy n&ecirc;n kh&ocirc;ng ngừng nỗ lực để đem đến những hương vị c&agrave; ph&ecirc; nguy&ecirc;n bản, thượng hạng, khuấy động vị gi&aacute;c v&agrave; thoả m&atilde;n gu s&agrave;nh c&agrave; ph&ecirc; của c&aacute;c t&iacute;n đồ. &nbsp;</p>\r\n\r\n<p>Original 1, d&ograve;ng sản phẩm c&agrave; ph&ecirc; rang xay được The Coffee House tinh tuyển từ những hạt Robusta của v&ugrave;ng đất Đắk Lắk nổi tiếng về c&agrave; ph&ecirc;. Giống c&agrave; ph&ecirc; được nu&ocirc;i dưỡng bởi từng lớp đất đỏ bazan m&agrave;u mỡ, đơm b&ocirc;ng nhờ nắng, nhờ mưa của đất trời v&agrave; trưởng th&agrave;nh từ đ&ocirc;i b&agrave;n tay cần mẫn của người n&ocirc;ng d&acirc;n y&ecirc;u nghề. Để rồi cho ra đời những tr&aacute;i c&agrave; ph&ecirc; đỏ mọng, chất lượng tốt nhất, được chắt chiu thu hoạch, rang xay tỉ mỉ trước khi về với The Coffee House v&agrave; trao tay kh&aacute;ch h&agrave;ng.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"/storage/photos/blog/espresso.jpeg\" style=\"height:400px; width:100%\" /></p>\r\n\r\n<p>C&ocirc;ng nghệ rang xay hiện đại, được thực hiện nghi&ecirc;m ngặt bởi những người thợ l&agrave;nh nghề, đ&atilde; g&oacute;p phần tạo n&ecirc;n hương vị đầy m&ecirc; hoặc của Original 1. T&ecirc;n gọi Original 1 đ&atilde; nhằm khẳng định n&oacute; l&agrave; sự tinh tu&yacute; của những hạt c&agrave; ph&ecirc; nguy&ecirc;n chất, kh&ocirc;ng tẩm ướp, kh&ocirc;ng pha trộn. Với 100% hạt Robusta Đắk Lắk đ&atilde; tạo n&ecirc;n Original 1 mạnh mẽ, l&ocirc;i cuốn, trọn vị đậm đ&agrave; đầy lưu luyến. Một sản phẩm vừa thỏa m&atilde;n vị gi&aacute;c của t&iacute;n đồ c&agrave; ph&ecirc; Việt, vừa tăng th&ecirc;m uy t&iacute;n của thương hiệu The Coffee House, vừa t&ocirc;n vinh chất nguy&ecirc;n bản v&agrave; gi&aacute; trị vốn c&oacute; của hạt c&agrave; ph&ecirc; n&uacute;i rừng Đắk Lắk.&nbsp;</p>\r\n\r\n<p>Với c&agrave; ph&ecirc; rang xay Original 1 hảo hạng của The Coffee House, mỗi buổi s&aacute;ng của bạn sẽ được bắt đầu đầy hứng khởi v&agrave; thật tỉnh t&aacute;o. Ng&agrave;y d&agrave;i bận rộn của bạn sẽ đầy ắp năng lượng v&agrave; th&uacute; vị. Những &yacute; tưởng mới sẽ được tu&ocirc;n tr&agrave;o, sức s&aacute;ng tạo c&agrave;ng được bung x&otilde;a. T&acirc;m trạng của bạn sẽ phấn chấn, tươi tỉnh khi hương thơm của n&oacute; dậy l&ecirc;n một c&aacute;ch quyến rũ. Bởi v&igrave;, Original 1 đ&atilde; được khẳng định l&agrave; một hương vị nguy&ecirc;n chất, cực kỳ l&ocirc;i cuốn, cực kỳ m&atilde;nh liệt được kiểm chứng v&agrave; y&ecirc;u th&iacute;ch bởi nhiều fans The Coffee House.</p>\r\n\r\n<p><img alt=\"\" src=\"/storage/photos/blog1.jpg\" style=\"height:400px; width:100%\" /></p>\r\n\r\n<p>Th&ecirc;m một điều nữa, những l&uacute;c bận rộn kh&ocirc;ng thể gh&eacute; Nh&agrave;, với c&agrave; ph&ecirc; rang xay Original 1 bạn sẽ thật tiện để thưởng thức ly c&agrave; ph&ecirc; đậm đ&agrave; gu truyền thống. Bạn c&oacute; thể thử l&agrave;m barista tại nh&agrave; thật dễ d&agrave;ng m&agrave; vị c&agrave; ph&ecirc; lại thơm ngon, tuyệt vời như khi bạn thưởng thức tại qu&aacute;n. Original 1 sẽ c&ugrave;ng bạn c&oacute; trải nghiệm c&agrave; ph&ecirc; theo c&aacute;ch ri&ecirc;ng ở mọi l&uacute;c, mọi nơi.</p>\r\n\r\n<p>Với tất cả ưu điểm về hương vị, chất lượng, sự tiện lợi, Original 1 trở th&agrave;nh một sản phẩm, một dấu ấn mạnh mẽ kh&ocirc;ng chỉ hợp gu người trẻ, m&agrave; cả những người s&agrave;nh điệu, s&agrave;nh sỏi c&agrave; ph&ecirc;.&nbsp;</p>', 'active', 'ipSHx5.jpg', 2, '2022-01-16 00:00:00', 'hailan', '2022-01-16 00:00:00', 'hailan', NULL, 'default'),
(3, 'YÊU THÍCH TRÀ HÃY ĐẾN VỚI THE COFFEE BLEND', '<p>Đối với mỗi thương hiệu, kh&ocirc;ng g&igrave; s&aacute;nh bằng khi t&ecirc;n của m&igrave;nh lu&ocirc;n nằm đầu danh s&aacute;ch trong t&acirc;m tr&iacute; của c&aacute;c kh&aacute;ch h&agrave;ng. The Coffee House vẫn kh&ocirc;ng ngừng nỗ lực để giữ vững vị tr&iacute;, xuất sắc trong đường đua...</p>', '<p>Đối với mỗi thương hiệu, kh&ocirc;ng g&igrave; s&aacute;nh bằng khi t&ecirc;n của m&igrave;nh lu&ocirc;n nằm đầu danh s&aacute;ch trong t&acirc;m tr&iacute; của c&aacute;c kh&aacute;ch h&agrave;ng. The Coffee House vẫn kh&ocirc;ng ngừng nỗ lực để giữ vững vị tr&iacute;, xuất sắc trong đường đua mới bằng việc lấy cảm nhận kh&aacute;ch h&agrave;ng l&agrave;m trung t&acirc;m v&agrave; mang lại những gi&aacute; trị đ&iacute;ch thực của tr&agrave; v&agrave; c&agrave; ph&ecirc; Việt. V&agrave; Nh&agrave; lu&ocirc;n tự h&agrave;o l&agrave; nơi tạo ra những hương vị &ldquo;đỉnh của ch&oacute;p&rdquo; d&agrave;nh tặng những t&iacute;n đồ y&ecirc;u tr&agrave;.&nbsp;</p>\r\n\r\n<p><strong>Nguồn tr&agrave; hảo hạng&nbsp;</strong></p>\r\n\r\n<p>Tr&agrave; ngon lu&ocirc;n đến từ chất lượng nguy&ecirc;n bản của n&oacute;. Để mang đến những sản phẩm m&ecirc; hoặc c&aacute;c vị kh&aacute;ch, The Coffee House đ&atilde; đặt ra ti&ecirc;u ch&iacute; chọn nguồn tr&agrave; hảo hạng ngay từ ng&agrave;y đầu ra mắt cho đến thời điểm hiện tại. L&acirc;m Đồng, cao nguy&ecirc;n nổi tiếng với những đặc sản tr&agrave; ngon từ xưa nay đ&atilde; được The Coffee House &ldquo;tận dụng&rdquo; để c&oacute; thể &ldquo;chạm đến tim&rdquo; kh&aacute;ch h&agrave;ng một c&aacute;ch nhanh nhất.</p>\r\n\r\n<p>Những b&uacute;p tr&agrave; phủ sương của mảnh đất với độ cao tr&ecirc;n 1500m m&aacute;t mẻ quanh năm, trải qua quy tr&igrave;nh chế biến, kiểm duyệt nghi&ecirc;m ngặt của c&aacute;c chuy&ecirc;n gia, đ&atilde; tạo n&ecirc;n những hương vị thơm ngon, vừa&nbsp; tinh khiết v&agrave; đậm đ&agrave; trong từng ngụm.&nbsp;</p>\r\n\r\n<p><strong>Sản phẩm đa dạng&nbsp;</strong></p>\r\n\r\n<p>Tại The Coffee House bạn sẽ cảm nhận sự đa dạng, độc đ&aacute;o của c&aacute;c loại tr&agrave;. Kh&ocirc;ng chỉ c&oacute; những t&aacute;ch tr&agrave; được barista pha chế tinh tế từ tr&agrave; tr&aacute;i c&acirc;y, tr&agrave; hạt hay tr&agrave; sữa, m&agrave; c&ograve;n c&oacute; cả những hương tr&agrave; tinh kh&ocirc;i v&agrave; nguy&ecirc;n bản nhất. H&igrave;nh thức của tr&agrave; cũng đa dạng kh&ocirc;ng k&eacute;m để mang đến trải nghiệm trọn vẹn. Đ&oacute; l&agrave; những ly tr&agrave; thanh m&aacute;t để nh&acirc;m nhi tại qu&aacute;n, dạng chai fresh tiện lợi để mang đi d&ugrave; bất cứ nơi đ&acirc;u, hay cả dạng tr&agrave; kh&ocirc;, tr&agrave; ho&agrave; tan để d&ugrave;ng tại nh&agrave;. The Coffee House sẽ giới thiệu đến bạn 03 hương tr&agrave; đặc trưng, nổi bật, c&ugrave;ng thưởng thức nh&eacute;.&nbsp;</p>\r\n\r\n<p><a href=\"https://thecoffeehouse.com/products/tra-hat-sen-da\"><strong>Tr&agrave; hạt sen</strong></a>&nbsp;nu&ocirc;ng chiều vị gi&aacute;c: Một ly tr&agrave; hạt sen chuẩn Nh&agrave;, bạn c&oacute; thể nh&igrave;n thấy r&otilde; r&agrave;ng 3 lớp ri&ecirc;ng biệt. Lớp đầu ti&ecirc;n l&agrave; &ldquo;milk foam&rdquo; b&eacute;o ngậy, lớp ở giữa l&agrave; tr&agrave; oolong m&agrave;u v&agrave;ng s&aacute;ng v&agrave; lắng đọng ở lớp đ&aacute;y l&agrave; những &ldquo;hạt ngọc&rdquo; sen v&agrave;ng. Sự kết hợp của vị tr&agrave; thanh m&aacute;t, hương thơm nhẹ nh&agrave;ng c&ugrave;ng vị b&eacute;o b&ugrave;i của hạt sen tươi, đặc biệt l&agrave; lớp kem sữa ph&ocirc; mai phủ l&ecirc;n bề mặt sẽ cho bạn một trải nghiệm c&acirc;n bằng v&agrave; ấn tượng về hương vị. Mỗi buổi s&aacute;ng hay chiều tối, chọn t&aacute;ch tr&agrave; hạt sen đều thật tuyệt vời.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"/storage/photos/blog/blog4.jpg\" style=\"height:400px; width:100%\" /></p>\r\n\r\n<p><a href=\"https://thecoffeehouse.com/products/tra-dao-cam-sa-da\"><strong>Tr&agrave; đ&agrave;o cam sả</strong></a>&nbsp;- Best seller: Đ&acirc;y l&agrave; một &ldquo;mảng m&agrave;u&rdquo; cực kỳ &ldquo;bắt vị&rdquo; v&agrave; rất th&acirc;n thuộc đối với c&aacute;c kh&aacute;ch h&agrave;ng của Nh&agrave;. Một hương tr&agrave; đậm đ&agrave;, vị chua ngọt quyến rũ từ cam v&agrave;ng, chấm ph&aacute; th&ecirc;m sự đặc sắc của đ&agrave;o, th&ecirc;m hương sả nồng n&agrave;n tr&ecirc;n nền tr&agrave; Oolong ủ mới 4 tiếng mỗi ng&agrave;y đ&atilde; tạo n&ecirc;n một sự hấp dẫn để lu&ocirc;n đứng đầu bảng &ldquo;best seller&rdquo;.&nbsp;</p>\r\n\r\n<p><a href=\"https://thecoffeehouse.com/collections/tra-tai-nha\"><strong>Tearoma</strong></a>&nbsp;- Khơi bừng cảm hứng: được xem l&agrave; một mảnh gh&eacute;p ho&agrave;n mỹ để l&agrave;m n&ecirc;n sự đa dạng, hợp gu trong phong c&aacute;ch tr&agrave; của giới trẻ s&agrave;nh điệu. Sự ra đời của Tearoma như &ldquo;chuẩn h&oacute;a&rdquo; hương tr&agrave; chất lượng, thơm ngon trong những ng&agrave;y bạn muốn tự tay pha cho m&igrave;nh một t&aacute;ch tr&agrave; để thư gi&atilde;n, khơi cảm hứng tại nh&agrave; hay tại văn phong. Những b&uacute;p tr&agrave; non đọng sương sớm, tạo n&ecirc;n hương Tearoma thơm phức, đậm đ&agrave;, lắng đọng vị ngọt nơi hậu vị. Cho bạn đến 04 lựa chọn l&agrave;: tr&agrave; xanh tự nhi&ecirc;n, hương thơm thoang thoảng; tr&agrave; sen thanh tao, quyến rũ; tr&agrave; l&agrave;i thơm nồng n&agrave;n, tinh tế v&agrave; Oolong đậm đ&agrave; tự nhi&ecirc;n, khơi dậy mọi gi&aacute;c quan.&nbsp; &nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"/storage/photos/blog/blog5.png\" style=\"height:400px; width:100%\" /></p>\r\n\r\n<p><strong>Cảm hứng vượt bậc</strong></p>\r\n\r\n<p>Tr&agrave; ngon, hương vị đa dạng, kết hợp với kh&ocirc;ng gian qu&aacute;n cực &ldquo;chill&rdquo;, ph&oacute;ng kho&aacute;ng, trẻ trung v&agrave; rộng mở giữa l&ograve;ng th&agrave;nh phố sẽ l&agrave; nơi tạo ra những cảm hứng vượt bậc, những cảm x&uacute;c tột c&ugrave;ng cho mỗi kh&aacute;ch h&agrave;ng đến với The Coffee House.</p>\r\n\r\n<p>Đặc biệt, những nốt hương mới lạ trong c&aacute;ch pha chế đầy s&aacute;ng tạo, c&aacute;i đẹp kh&ocirc;ng chỉ từ hương vị m&agrave; c&ograve;n l&agrave; cả sắc m&agrave;u, c&oacute; khi l&agrave; sự ph&acirc;n tầng lớp ấn tượng, c&oacute; khi l&agrave; sự quyện ho&agrave; nhưng vẫn cảm nhận r&otilde; từng vị, đ&oacute; ch&iacute;nh l&agrave; sự đặc sắc của Nh&agrave;. Mang đến cho bạn những cảm nhận trọn vẹn, đa dạng, h&agrave;o hứng, v&igrave; lu&ocirc;n lu&ocirc;n tạo ra những sự mới mẻ.&nbsp;</p>', 'active', 'FEnSwn.png', 2, '2022-01-17 00:00:00', 'hailan', '2022-01-17 00:00:00', 'hailan', NULL, 'default'),
(4, 'THE COFFEE BLEND- KHÔNG CHỈ ĐƠN THUẦN LÀ MỘT QUÁN CÀ PHÊ', '<p>Kh&ocirc;ng đơn thuần chỉ l&agrave; một chuỗi c&agrave; ph&ecirc; phục vụ thức uống chất lượng, thơm ngon, đi đ&ocirc;i với phong c&aacute;ch v&agrave; th&aacute;i độ th&acirc;n thiện để ghi điểm với cộng đồng kh&aacute;ch h&agrave;ng. Hơn thế, The Coffee House đ&atilde; lu&ocirc;n đầu tư v&agrave; ph&aacute;t triển để mang lại những gi&aacute; trị mới đầy &yacute; nghĩa.</p>', '<p>Kh&ocirc;ng đơn thuần chỉ l&agrave; một chuỗi c&agrave; ph&ecirc; phục vụ thức uống chất lượng, thơm ngon, đi đ&ocirc;i với phong c&aacute;ch v&agrave; th&aacute;i độ th&acirc;n thiện để ghi điểm với cộng đồng kh&aacute;ch h&agrave;ng. Hơn thế, The Coffee House đ&atilde; lu&ocirc;n đầu tư v&agrave; ph&aacute;t triển để mang lại những gi&aacute; trị mới đầy &yacute; nghĩa. Vậy n&ecirc;n, ngo&agrave;i gi&aacute; trị thương mại, The Coffee House c&ograve;n g&oacute;p phần mang đến những gi&aacute; trị về tinh thần, văn h&oacute;a v&agrave; phong c&aacute;ch sống&hellip; của người Việt.</p>\r\n\r\n<p><strong>Kết nối mọi người x&iacute;ch lại gần nhau hơn</strong></p>\r\n\r\n<p>C&acirc;u n&oacute;i cửa miệng &ldquo;Đi c&agrave; ph&ecirc; nh&eacute;!&rdquo; kh&ocirc;ng chỉ nhằm để thưởng thức c&agrave; ph&ecirc; m&agrave; c&ograve;n l&agrave; t&igrave;m kiếm sự kết nối v&agrave; sẻ chia giữa mọi người với nhau. Thấu hiểu nhu cầu đ&oacute; của c&aacute;c kh&aacute;ch h&agrave;ng, The Coffee House đ&atilde; tạo n&ecirc;n một kh&ocirc;ng gian thật thoải m&aacute;i, vừa năng động lại vừa ri&ecirc;ng tư, nhờ đ&oacute; c&oacute; thể đưa mọi người đến gần nhau hơn, kết nối v&agrave; sẻ chia th&acirc;n t&igrave;nh b&ecirc;n những t&aacute;ch c&agrave; ph&ecirc;, t&aacute;ch tr&agrave; đượm vị.</p>\r\n\r\n<p><img alt=\"\" src=\"/storage/photos/blog/blog6.jpg\" style=\"height:400px; width:100%\" /></p>\r\n\r\n<p>Trở th&agrave;nh điểm chọn l&yacute; tưởng mỗi khi c&oacute; lời mời gọi đi c&agrave; ph&ecirc;, The Coffee House l&agrave; nơi nơi khởi đầu của những c&acirc;u chuyện r&ocirc;m rả tr&ecirc;n b&agrave;n c&agrave; ph&ecirc;. Từ đ&oacute; gắn kết những mối quan hệ, th&ecirc;m thắm đượm t&igrave;nh cảm. Cũng như một chiếc cầu nối kết nối những mối quan hệ mới, khởi đầu cho những gi&aacute; trị kh&aacute;c.&nbsp;</p>\r\n\r\n<p><strong>Nu&ocirc;i dưỡng t&igrave;nh y&ecirc;u với c&agrave; ph&ecirc; v&agrave; tr&agrave; Việt</strong></p>\r\n\r\n<p>Việt Nam l&agrave; nước nổi tiếng về c&agrave; ph&ecirc; v&agrave; tr&agrave;, người Việt Nam qu&aacute; quen thuộc v&agrave; rất y&ecirc;u th&iacute;ch với hai thức uống n&agrave;y. Để g&igrave;n giữ, t&ocirc;n vinh gi&aacute; trị của tr&agrave; v&agrave; c&agrave; ph&ecirc; Việt kh&ocirc;ng c&aacute;ch n&agrave;o kh&aacute;c l&agrave; đem đến những sản phẩm chất lượng, đượm hương vị tinh tu&yacute; đến gần v&agrave; l&agrave;m h&agrave;i l&ograve;ng những vị kh&aacute;ch h&agrave;ng nội quốc.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"/storage/photos/blog/blog7.jpg\" style=\"height:400px; width:100%\" /></p>\r\n\r\n<p>V&agrave; h&agrave;nh tr&igrave;nh đ&oacute; đang c&oacute; sự chung tay, lan toả của The Coffee House. Kh&ocirc;ng chỉ l&agrave; nu&ocirc;i dưỡng t&igrave;nh y&ecirc;u c&agrave; ph&ecirc; v&agrave; tr&agrave; của h&agrave;ng triệu kh&aacute;ch h&agrave;ng, The Coffee House tiếp tục khơi dậy t&igrave;nh y&ecirc;u của những nh&acirc;n vi&ecirc;n, những nghệ nh&acirc;n pha chế gắn b&oacute; với nghề, những người n&ocirc;ng d&acirc;n trồng v&agrave; cả những người thợ rang xay, những chuy&ecirc;n gia kiểm tra chất lượng tiếp tục giữ lửa với c&agrave; ph&ecirc; Việt.&nbsp;</p>\r\n\r\n<p><strong>Truyền cảm hứng về lối sống hiện đại&nbsp;</strong></p>\r\n\r\n<p>Kh&ocirc;ng chỉ l&agrave; một nhịp sống b&ugrave;ng ch&aacute;y, năng động v&agrave; đầy cảm hứng khi thưởng thức hương vị c&agrave; ph&ecirc;. The Coffee House c&ograve;n truyền cảm hứng về lối sống hiện đại, tiếp cận v&agrave; bắt nhịp với những văn ho&aacute; mới, phong c&aacute;ch mới đầy trẻ trung đang du nhập v&agrave;o Việt Nam.&nbsp;</p>\r\n\r\n<p>The Coffee House mang đến cho người Việt, đặc biệt l&agrave; c&aacute;c bạn trẻ với lối sống hiện đại, bắt kịp xu hướng thế giới, d&aacute;m trải nghiệm những điều th&uacute; vị v&agrave; học hỏi từ những nơi ph&aacute;t triển. Cũng ch&iacute;nh v&igrave; vậy m&agrave; sự cảm nhận về hương vị c&agrave; ph&ecirc; tại The Coffee House sẽ trở n&ecirc;n đa dạng, phong ph&uacute; hơn rất nhiều khi ch&agrave;o đ&oacute;n những hương vị c&agrave; ph&ecirc; tr&ecirc;n to&agrave;n thế giới. Đ&oacute; l&agrave; c&aacute;c kiểu c&agrave; ph&ecirc; kiểu &Yacute; đặc sắc như Cappuccino, Latte, Macchiato, Mocha...; c&agrave; ph&ecirc; được rang xay tại chỗ hoặc c&aacute;c loại thức uống đậm chất s&aacute;ng tạo v&agrave; đầy mới lạ thay v&igrave; chỉ g&oacute;i gọn trong những loại thức uống c&agrave; ph&ecirc; truyền thống như c&agrave; ph&ecirc; đen đ&aacute;, c&agrave; ph&ecirc; sữa, bạc sỉu&hellip;</p>', 'active', 'aLZl1f.jpg', 2, '2022-01-17 00:00:00', 'hailan', NULL, NULL, NULL, 'featured'),
(5, 'CÁC LOẠI CÀ PHÊ TƯƠNG ỨNG VỚI 12 CUNG HOÀNG ĐẠO', '<p>Dương Cưu l&agrave; những con người nhiệt huyết, nhanh nhẹn, năng động v&agrave; đầy tham vọng. Vậy n&ecirc;n, một t&aacute;ch Espresso đậm đ&agrave; với đặc t&iacute;nh pha chế nhanh gọn, tức th&igrave; sẽ ngay lập tức mang đến cho Bạch Dương một trải nghiệm h&agrave;i l&ograve;ng, sẵn s&agrave;ng chiến đấu với những thử th&aacute;ch mới.&nbsp;&nbsp;</p>', '<p><strong>Bạch Dương (21/3 - 19/4): Espresso</strong></p>\r\n\r\n<p>Dương Cưu l&agrave; những con người nhiệt huyết, nhanh nhẹn, năng động v&agrave; đầy tham vọng. Vậy n&ecirc;n, một t&aacute;ch Espresso đậm đ&agrave; với đặc t&iacute;nh pha chế nhanh gọn, tức th&igrave; sẽ ngay lập tức mang đến cho Bạch Dương một trải nghiệm h&agrave;i l&ograve;ng, sẵn s&agrave;ng chiến đấu với những thử th&aacute;ch mới.&nbsp;&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"/storage/photos/blog/blog8.jpg\" style=\"height:400px; width:100%\" /></p>\r\n\r\n<p><strong>Kim Ngưu (20/4 - 20/5): Cappuccino</strong><br />\r\nNgưu th&iacute;ch sự sang trọng, th&iacute;ch hưởng thụ v&agrave; l&agrave; những con người c&oacute; gu thẩm mỹ tinh tế. Một t&aacute;ch Cappuccino đầy ắp bọt kem với bề mặt tạo h&igrave;nh đẹp mắt, hương vị quyến rũ sẽ rất hợp với kh&iacute; chất của Kim Ngưu nh&agrave; ta.</p>\r\n\r\n<p><img alt=\"\" src=\"/storage/photos/blog/blog9.jpg\" style=\"height:400px; width:100%\" /></p>\r\n\r\n<p><strong>Song Tử (21/5 - 21/6): Mocha</strong><br />\r\nSong Tử sở hữu một bộ n&atilde;o s&aacute;ng tạo, sự t&ograve; m&ograve; rất cao c&ugrave;ng với những &yacute; tưởng v&ocirc; hạn. Mocha với sự c&acirc;n bằng giữa hai vị ngọt v&agrave; đắng, ấn tượng, độc đ&aacute;o v&agrave; đầy t&iacute;nh nghệ thuật từ Latte Art sẽ rất hợp với cung ho&agrave;ng đạo &ldquo;đa nh&acirc;n c&aacute;ch&rdquo; v&agrave; ưa sự th&uacute; vị n&agrave;y.</p>\r\n\r\n<p><strong>Cự Giải (22/6 - 22/7): C&agrave; ph&ecirc; sữa</strong></p>\r\n\r\n<p>Cự Giải l&agrave; những con người truyền thống, ưa những g&igrave; xưa cũ, ch&uacute; trọng t&igrave;nh cảm chứ kh&ocirc;ng quan t&acirc;m nhiều đến vẻ bề ngo&agrave;i. Như vậy chắc hẳn một ly c&agrave; ph&ecirc; sữa pha phin từ c&agrave; ph&ecirc; rang xay nguy&ecirc;n chất sẽ rất hợp với Cự Giải đa cảm.</p>\r\n\r\n<p><img alt=\"\" src=\"/storage/photos/blog/blog10.jpg\" style=\"height:400px; width:100%\" /></p>\r\n\r\n<p><strong>Sư Tử (23/7 - 22/8): Macchiato</strong><br />\r\nSư Tử lu&ocirc;n ki&ecirc;u h&atilde;nh, quả cảm v&agrave; đầy l&yacute; tưởng. Sự h&ograve;a quyện của Espresso hảo hạng với vị đắng đậm đ&agrave; m&agrave; thanh tho&aacute;t, c&ugrave;ng vị b&eacute;o sữa của Macchiato l&agrave; sự lựa chọn ho&agrave;n hảo cho c&aacute; t&iacute;nh mạnh mẽ, b&ugrave;ng ch&aacute;y m&agrave; kh&ocirc;ng k&eacute;m phần l&atilde;ng mạn của Sư Tử.&nbsp;</p>\r\n\r\n<p><strong>Xử Nữ (23/8 - 22/9): C&agrave; ph&ecirc; Organic</strong><br />\r\nXử Nữ được xem l&agrave; cung ho&agrave;ng đạo th&ocirc;ng minh, sống c&oacute; nề nếp, trật tự v&agrave; c&oacute; tổ chức. Ngo&agrave;i ra, Xử Nữ đặc biệt quan t&acirc;m đến sức khoẻ của m&igrave;nh v&agrave; biết c&aacute;ch chăm s&oacute;c cho những người th&acirc;n. C&oacute; lẽ v&igrave; thế m&agrave; c&agrave; ph&ecirc; Organic sẽ l&agrave; những sự lựa chọn h&agrave;i l&ograve;ng c&aacute;c Xử Nữ.</p>\r\n\r\n<p><strong>Thi&ecirc;n B&igrave;nh (23/9 - 23/10): Caf&eacute; Au Lait</strong></p>\r\n\r\n<p>Thi&ecirc;n B&igrave;nh l&agrave; đại diện của c&aacute;i đẹp, c&aacute;c B&igrave;nh Nhi l&uacute;c n&agrave;o cũng theo đuổi sự ho&agrave;n mỹ. Caf&eacute; Au Lait - một phong c&aacute;ch của nước Ph&aacute;p kiều diễm v&agrave; duy&ecirc;n d&aacute;ng sẽ rất hợp với Thi&ecirc;n B&igrave;nh. Sự chuẩn mực v&agrave; ấn tượng của Caf&eacute; Au Lait khi kết hợp giữa c&agrave; ph&ecirc; v&agrave; kem dễ d&agrave;ng chinh phục những người cực kỳ quan t&acirc;m đến h&igrave;nh thức b&ecirc;n ngo&agrave;i như Thi&ecirc;n B&igrave;nh.</p>\r\n\r\n<p><strong>Thi&ecirc;n Yết (24/10 - 21/11): Breve Latte</strong><br />\r\nThi&ecirc;n Yết (Bọ Cạp) nồng nhiệt, s&acirc;u sắc, ki&ecirc;n quyết v&agrave; lu&ocirc;n muốn điều h&agrave;nh mọi thứ. Cạp Cạp cũng ch&iacute;nh l&agrave; những đại diện của sự b&iacute; ẩn, quyến rũ v&agrave; n&oacute;ng bỏng. Một t&aacute;ch Breve Latte với sự kết hợp đầy sắc sảo của espresso, milk foam sẽ rất hợp với những t&iacute;nh c&aacute;ch của Bọ Cạp v&agrave; sẽ tiếp tục th&uacute;c đẩy sự nhiệt huyết, động lực tăng cao.&nbsp; &nbsp;</p>\r\n\r\n<p><strong>Nh&acirc;n M&atilde; (22/11 - 21/12): Iced Coffee</strong><br />\r\nNh&acirc;n M&atilde; lu&ocirc;n ưa tự do, th&iacute;ch dịch chuyển n&ecirc;n sẽ cần nạp đầy năng lượng để phục vụ cho những hoạt động. Vậy n&ecirc;n, những c&aacute;i g&igrave; đ&oacute; đơn giản, dễ tiếp nhận sẽ hợp với M&atilde; M&atilde;. Thiết nghĩ một ly Iced Coffee giản dị nhưng đủ tinh tế, đủ sức mạnh để Nh&acirc;n M&atilde; &ldquo;sạc đầy pin&rdquo; cho những chuyến đi, những hoạt động kh&ocirc;ng ngừng nghỉ của bạn ấy.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"/storage/photos/blog/blog11.jpg\" style=\"height:400px; width:100%\" /></p>\r\n\r\n<p><strong>Ma Kết (22/12 - 19/11): Ristretto Espresso</strong><br />\r\nMa Kết th&igrave; cầu to&agrave;n, truyền thống m&agrave; đầy kh&aacute;t vọng. Ristretto Espresso đậm đ&agrave; bản chất của c&agrave; ph&ecirc; l&agrave; sự lựa chọn ho&agrave;n hảo cho c&aacute;c Kết Kết khi lu&ocirc;n đ&ograve;i hỏi sự tập trung cao độ để ho&agrave;n th&agrave;nh c&ocirc;ng việc v&agrave; thực hiện ho&aacute; những ho&agrave;i b&atilde;o của m&igrave;nh.&nbsp;</p>\r\n\r\n<p><strong>Bảo B&igrave;nh (20/1 - 18/2): Black Coffee</strong><br />\r\nBảo B&igrave;nh c&aacute; t&iacute;nh, thực tế, th&ocirc;ng minh v&agrave; c&oacute; tầm nh&igrave;n đ&aacute;ng nể. Với tu&yacute;p người c&aacute; t&iacute;nh mạnh như Bảo B&igrave;nh, một ly c&agrave; ph&ecirc; đen để đồng h&agrave;nh trong mọi h&agrave;nh tr&igrave;nh sẽ thật sự l&yacute; tưởng.&nbsp;</p>\r\n\r\n<p><strong>Song Ngư (19/2 - 20/3): Espresso con Panna</strong><br />\r\nSong Ngư mơ mộng, nội t&acirc;m v&agrave; dễ cảm động. Ch&iacute;nh sự th&acirc;n thiện v&agrave; cảm th&ocirc;ng của Ngư Ngư lu&ocirc;n thu h&uacute;t những người kh&aacute;c. V&agrave; sự tinh tế trong c&aacute;ch pha chế, tỉ mỉ trong c&aacute;ch tr&igrave;nh b&agrave;y c&ugrave;ng lớp kem b&ocirc;ng b&eacute;o mịn của Espresso con Panna - một n&eacute;t tinh hoa đến từ &Yacute; l&agrave; đại diện c&agrave; ph&ecirc; th&iacute;ch hợp với Song Ngư.</p>\r\n\r\n<p>Đ&oacute; ch&iacute;nh l&agrave; sự đồng điệu trong t&iacute;nh c&aacute;ch của c&aacute;c cung ho&agrave;ng đạo v&agrave; c&aacute;c loại c&agrave; ph&ecirc;. Tr&ecirc;n thực tế, bạn sẽ c&oacute; nhiều những sự lựa chọn v&agrave; sở th&iacute;ch của ri&ecirc;ng m&igrave;nh. &ldquo;Gu&rdquo; ch&iacute;nh x&aacute;c của bạn l&agrave; g&igrave;, c&ugrave;ng đến The Coffee House để thưởng thức những hương vị đậm đ&agrave;, tinh t&uacute;y nhất nh&eacute;!</p>', 'active', 'UxTF4p.jpg', 2, '2022-01-17 00:00:00', 'hailan', NULL, NULL, NULL, 'featured'),
(6, 'HÔM NAY, BẠN UỐNG GÌ?', '<p>Nhắc đến nước &Yacute; th&igrave; c&oacute; v&ocirc; v&agrave;n điều để n&oacute;i, từ kiến tr&uacute;c tuyệt đẹp, nghệ thuật sống động, phong cảnh l&atilde;ng mạn v&agrave; cả ẩm thực tinh tế. V&agrave; nền ẩm thực đồ sộ, đặc sắc của &Yacute; đ&atilde; m&ecirc; hoặc người d&acirc;n tr&ecirc;n khắp thế giới.</p>', '<p>Nhắc đến nước &Yacute; th&igrave; c&oacute; v&ocirc; v&agrave;n điều để n&oacute;i, từ kiến tr&uacute;c tuyệt đẹp, nghệ thuật sống động, phong cảnh l&atilde;ng mạn v&agrave; cả ẩm thực tinh tế. V&agrave; nền ẩm thực đồ sộ, đặc sắc của &Yacute; đ&atilde; m&ecirc; hoặc người d&acirc;n tr&ecirc;n khắp thế giới. Tại The Coffee House, phong c&aacute;ch &Yacute;, sự tinh t&uacute;y của &Yacute; cũng vương vấn bởi những hương vị đầy quyến được tạo n&ecirc;n từ &ldquo;chất liệu&rdquo; c&agrave; ph&ecirc;.&nbsp;</p>\r\n\r\n<p><strong>Mocha &ndash; Khơi gợi, l&ocirc;i cuốn kh&oacute; cưỡng</strong></p>\r\n\r\n<p>Mocha l&agrave; sự kết hợp đầy l&ocirc;i cuốn của c&agrave; ph&ecirc; espresso, xốt socola, sữa tươi v&agrave; lớp bọt sữa mịn. Với một tỉ lệ vừa phải, Mocha khơi gợi v&agrave; đầy quyến rũ khi tạo n&ecirc;n một tổng thể đẹp mắt. Vị đắng của socola, quyện h&ograve;a c&ugrave;ng vị đậm đ&agrave; nồng n&agrave;n của c&agrave; ph&ecirc;. Chưa hết, lớp bọt sữa mịn m&agrave;ng v&agrave; dậy l&ecirc;n vị thơm b&eacute;o của sữa tươi khiến Mocha trở n&ecirc;n b&iacute; ẩn, hấp dẫn l&agrave;m người ta muốn thử ngay.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"/storage/photos/blog/blog12.jpg\" style=\"height:400px; width:100%\" /></p>\r\n\r\n<p>Với sự thắm quyện của những hương vị đắng ngọt nồng n&agrave;n, Mocha được v&iacute; như t&igrave;nh y&ecirc;u đầu, c&oacute; cả sự cuốn h&uacute;t, m&atilde;nh liệt muốn chinh phục, cả sự ngọt ng&agrave;o pha lẫn vị đắng. V&igrave; hương vị kh&ocirc;ng qu&aacute; đắng cũng chẳng qu&aacute; ngọt, Mocha l&agrave; c&aacute;i t&ecirc;n y&ecirc;u th&iacute;ch của nhiều kh&aacute;ch h&agrave;ng tại The Coffee House bất kể độ tuổi hay giới t&iacute;nh. Đặc biệt, đ&acirc;y l&agrave; thức uống kh&ocirc;ng chất men nhưng lại g&acirc;y nghiện đối với nữ giới, người trẻ tuổi th&iacute;ch sự mới mẻ v&agrave; ngọt ng&agrave;o.&nbsp;&nbsp;</p>\r\n\r\n<p><strong>Cappuccino - Ki&ecirc;u kỳ, tinh tế đầy m&ecirc; hoặc</strong></p>\r\n\r\n<p>Cappuccino cũng l&agrave; sự kết hợp của c&agrave; ph&ecirc; espresso, sữa n&oacute;ng, k&egrave;m lớp bọt sữa bồng bềnh. Ch&iacute;nh lớp bọt sữa tr&ecirc;n bề mặt được tạo h&igrave;nh đẹp mắt đ&atilde; tạo n&ecirc;n sự ấn tượng v&agrave; thu h&uacute;t những người y&ecirc;u c&aacute;i đẹp.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"/storage/photos/blog/blog13.jpg\" style=\"height:400px; width:100%\" /></p>\r\n\r\n<p>V&agrave; v&igrave; sở hữu cả h&igrave;nh thức bắt mắt, hương vị nhẹ nh&agrave;ng, trầm lắng m&agrave; tinh tế, Cappuccino đ&atilde; trở n&ecirc;n ki&ecirc;u kỳ đầy hấp dẫn. Cappuccino, thức uống từ đất nước &Yacute; xinh đẹp với vị ngon đ&uacute;ng điệu khi được tạo n&ecirc;n bởi c&aacute;c barista chuy&ecirc;n nghiệp đ&atilde; chinh phục kh&ocirc;ng biết bao nhi&ecirc;u vị kh&aacute;ch h&agrave;ng kh&oacute; t&iacute;nh tr&ecirc;n thế giới. Nhấp một ngụm Cappuccino l&agrave; say đắm, hai ngụm l&agrave; đắm say, ba ngụm l&agrave; ngất ng&acirc;y.&nbsp;</p>\r\n\r\n<p><strong>Latte - Ho&agrave;n hảo về hương vị v&agrave; nh&atilde;n quan</strong></p>\r\n\r\n<p>Giống như Cappuccino, Latte cũng được pha chế gồm 3 lớp nguy&ecirc;n liệu ch&iacute;nh: c&agrave; ph&ecirc; espresso, sữa n&oacute;ng v&agrave; lớp bọt sữa thơm mịn. Nếu kh&ocirc;ng phải l&agrave; người s&agrave;nh thưởng thức c&agrave; ph&ecirc;, bạn sẽ kh&oacute; l&ograve;ng ph&acirc;n biệt được 2 loại c&agrave; ph&ecirc; n&agrave;y.&nbsp;</p>\r\n\r\n<p>Khi pha chế Latte, c&aacute;c Barista thường thể hiện sự s&aacute;ng tạo hoặc gửi gắm t&acirc;m &yacute; của họ đến thực kh&aacute;ch th&ocirc;ng qua những h&igrave;nh vẽ nghệ thuật v&agrave; tinh tế. Đ&oacute; được gọi l&agrave; Latte Art, một sự kh&eacute;o l&eacute;o v&agrave; &oacute;c thẩm mỹ của những con người d&agrave;nh t&igrave;nh y&ecirc;u với nghệ thuật pha chế. Latte v&agrave; Cappuccino thực chất điểm kh&aacute;c biệt ch&iacute;nh l&agrave; lượng bọt sữa, Cappuccino c&oacute; lớp bọt sữa d&agrave;y hơn so với Latte. Vậy n&ecirc;n, nếu bạn y&ecirc;u th&iacute;ch lớp bọt sữa b&eacute;o mịn, ngọt ngọt xen lẫn một ch&uacute;t x&iacute;u mằn mặn, ở một mức độ vừa đủ th&igrave; Latte sẽ l&agrave; sự lựa chọn ho&agrave;n hảo đấy.&nbsp;</p>\r\n\r\n<p>Cứ như vậy, sự kết hợp tinh tế giữa vị đắng c&agrave; ph&ecirc; Espresso nguy&ecirc;n chất h&ograve;a quyện c&ugrave;ng vị sữa n&oacute;ng ngọt ng&agrave;o, b&ecirc;n tr&ecirc;n l&agrave; một lớp bọt sữa mỏng nhẹ tạo n&ecirc;n một t&aacute;ch c&agrave; ph&ecirc; Latte ho&agrave;n hảo về hương vị lẫn nh&atilde;n quan. Latte thật sự sẽ rất đ&aacute;ng để bạn thưởng thức.&nbsp;</p>', 'active', 'eMShOI.jpg', 2, '2022-01-17 00:00:00', 'hailan', NULL, NULL, NULL, 'featured');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attribute`
--

CREATE TABLE `attribute` (
  `id` int(11) NOT NULL,
  `name` char(10) NOT NULL,
  `value` float NOT NULL,
  `status` char(10) NOT NULL,
  `ordering` int(11) NOT NULL,
  `created` date DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `attribute`
--

INSERT INTO `attribute` (`id`, `name`, `value`, `status`, `ordering`, `created`, `created_by`, `modified`, `modified_by`) VALUES
(1, 'Nhỏ', 0, 'active', 1, NULL, NULL, NULL, NULL),
(2, 'Vừa', 5000, 'active', 2, NULL, NULL, NULL, NULL),
(3, 'Lớn', 10000, 'active', 3, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` char(10) NOT NULL DEFAULT 'inactive',
  `created` date DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `_lft` int(11) NOT NULL,
  `_rgt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `created`, `created_by`, `modified`, `modified_by`, `parent_id`, `_lft`, `_rgt`) VALUES
(1, 'Root', 'inactive', '0000-00-00', '', '0000-00-00', '', NULL, 1, 8),
(2, 'Cà phê', 'active', '0000-00-00', '', '0000-00-00', '', 1, 4, 5),
(3, 'Trà sữa', 'active', NULL, NULL, NULL, NULL, 1, 2, 3),
(4, 'Bánh ngọt', 'active', NULL, NULL, NULL, NULL, 1, 6, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_article`
--

CREATE TABLE `category_article` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` char(10) NOT NULL,
  `ordering` int(11) NOT NULL,
  `created` date DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `_lft` int(11) DEFAULT NULL,
  `_rgt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category_article`
--

INSERT INTO `category_article` (`id`, `name`, `status`, `ordering`, `created`, `created_by`, `modified`, `modified_by`, `parent_id`, `_lft`, `_rgt`) VALUES
(1, 'Root', 'inactive', 1, '0000-00-00', '', '0000-00-00', '', NULL, 1, 6),
(2, 'Tin tức', 'active', 1, NULL, NULL, NULL, NULL, 1, 2, 3),
(3, 'Khuyến mãi', 'active', 2, NULL, NULL, NULL, NULL, 1, 4, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `code` char(6) NOT NULL,
  `value_percent` int(11) NOT NULL DEFAULT 0,
  `value_price` int(11) NOT NULL DEFAULT 0,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `min_total` int(11) NOT NULL,
  `max_total` int(11) NOT NULL,
  `total_uses` int(11) NOT NULL,
  `status` char(50) DEFAULT 'inactive',
  `created` date DEFAULT NULL,
  `created_by` char(50) DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `modified_by` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `coupon`
--

INSERT INTO `coupon` (`id`, `code`, `value_percent`, `value_price`, `start_date`, `end_date`, `min_total`, `max_total`, `total_uses`, `status`, `created`, `created_by`, `modified`, `modified_by`) VALUES
(1, 'H1s53w', 10, 0, '0000-00-00', '0000-00-00', 200000, 500000, 5, 'inactive', NULL, NULL, NULL, NULL),
(2, 'b3WS45', 0, 20000, '0000-00-00', '0000-00-00', 200000, 500000, 5, 'inactive', NULL, NULL, NULL, NULL),
(3, 'Ps3df4', 0, 10000, '2022-01-01', '2022-01-10', 200000, 500000, 5, 'inactive', NULL, NULL, '2022-01-02', 'hailan'),
(4, '6Y4mO0', 0, 7000, '2022-01-01', '2022-01-09', 100000, 300000, 10, 'inactive', '2022-01-02', 'hailan', NULL, NULL),
(5, 'ZM19Qa', 15, 0, '2022-01-01', '2022-01-10', 100000, 300000, 5, 'active', '2022-01-02', 'hailan', '2022-01-02', 'hailan');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `price` float NOT NULL,
  `thumb` char(10) NOT NULL,
  `short_description` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `status` char(10) NOT NULL DEFAULT 'inactive',
  `is_home` char(3) NOT NULL DEFAULT 'no',
  `created` date DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `category_product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `thumb`, `short_description`, `description`, `status`, `is_home`, `created`, `created_by`, `modified`, `modified_by`, `category_product_id`) VALUES
(1, 'CREAMY LATTE', 50000, 'wj3Aeh.jpg', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n\r\n<p>&nbsp;</p>', 'active', 'no', '2022-01-13', 'hailan', '2022-01-14', 'hailan', 2),
(2, 'CAPUCCINO', 40000, 'Lm9hIV.jpg', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n\r\n<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word &quot;and&quot; and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn&rsquo;t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>', 'active', 'no', '2022-01-13', 'hailan', '2022-01-13', 'hailan', 2),
(3, 'Americano', 30000, 'Tx5tNJ.jpg', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n\r\n<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word &quot;and&quot; and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn&rsquo;t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>', 'active', 'no', '2022-01-13', 'hailan', '2022-01-14', 'hailan', 2),
(4, 'Bạc sỉu', 25000, 'ysvHKp.jpg', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n\r\n<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word &quot;and&quot; and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn&rsquo;t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>', 'active', 'no', '2022-01-13', 'hailan', '2022-01-14', 'hailan', 2),
(5, 'Espresso', 45000, 'EuaqsY.jpg', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n\r\n<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word &quot;and&quot; and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn&rsquo;t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>', 'active', 'no', '2022-01-13', 'hailan', '2022-01-14', 'hailan', 2),
(6, 'Cà phê đá', 20000, 'knfilo.jpg', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n\r\n<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word &quot;and&quot; and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn&rsquo;t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>', 'active', 'no', '2022-01-13', 'hailan', '2022-01-14', 'hailan', 2),
(7, 'Cà phê sữa đá', 30000, 'DSarqi.jpg', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n\r\n<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word &quot;and&quot; and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn&rsquo;t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>', 'active', 'no', '2022-01-13', 'hailan', '2022-01-13', 'hailan', 2),
(8, 'Trà đào', 35000, 'wKAjwo.jpg', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n\r\n<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word &quot;and&quot; and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn&rsquo;t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>', 'active', 'no', '2022-01-13', 'hailan', '2022-01-14', 'hailan', 3),
(9, 'Trà vải', 40000, 'p2yfTK.jpg', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n\r\n<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word &quot;and&quot; and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn&rsquo;t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>', 'active', 'no', '2022-01-13', 'hailan', '2022-01-14', 'hailan', 3),
(10, 'Trà sữa matcha', 35000, '592N8x.jpg', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n\r\n<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word &quot;and&quot; and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn&rsquo;t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>', 'active', 'no', '2022-01-13', 'hailan', NULL, NULL, 3),
(11, 'Trà sữa socola', 40000, '6wYr2O.png', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n\r\n<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word &quot;and&quot; and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn&rsquo;t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>', 'active', 'no', '2022-01-13', 'hailan', '2022-01-14', 'hailan', 3),
(12, 'Trà sữa trân châu đường đen', 50000, 'QqcG3H.jpg', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n\r\n<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word &quot;and&quot; and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn&rsquo;t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>', 'active', 'no', '2022-01-13', 'hailan', '2022-01-14', 'hailan', 3),
(13, 'Sữa tươi trân châu đường đen', 55000, 'GgMfXI.jpg', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n\r\n<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word &quot;and&quot; and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn&rsquo;t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>', 'active', 'no', '2022-01-13', 'hailan', '2022-01-14', 'hailan', 3),
(14, 'Bánh Tiramisu Ý', 30000, '9Y7r6e.jpg', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n\r\n<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word &quot;and&quot; and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn&rsquo;t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>', 'active', 'no', '2022-01-14', 'hailan', NULL, NULL, 4),
(15, 'Bánh Tiramisu Caramel', 30000, 'tqaofa.jpg', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n\r\n<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word &quot;and&quot; and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn&rsquo;t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>', 'active', 'no', '2022-01-14', 'hailan', NULL, NULL, 4),
(16, 'Bánh cheese dâu', 25000, 'FLlyCi.jpg', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n\r\n<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word &quot;and&quot; and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn&rsquo;t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>', 'active', 'no', '2022-01-14', 'hailan', '2022-01-14', 'hailan', 4),
(17, 'Bánh cheese dâu tây', 27000, 'rzANDH.jpg', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n\r\n<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word &quot;and&quot; and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn&rsquo;t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>', 'active', 'no', '2022-01-14', 'hailan', NULL, NULL, 4),
(18, 'Bánh tiramisu dâu', 30000, '1cnbyJ.jpg', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n\r\n<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word &quot;and&quot; and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn&rsquo;t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>', 'active', 'no', '2022-01-14', 'hailan', '2022-01-14', 'hailan', 4),
(19, 'Bánh Tiramisu Matcha', 32000, 'WtQg7x.jpg', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n\r\n<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word &quot;and&quot; and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn&rsquo;t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>', 'active', 'no', '2022-01-14', 'hailan', '2022-01-14', 'hailan', 4),
(20, 'Bánh mochi dâu', 32000, 'TASD8M.jpg', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n\r\n<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word &quot;and&quot; and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn&rsquo;t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>', 'active', 'no', '2022-01-14', 'hailan', NULL, NULL, 4),
(21, 'Bánh Mochi đậu đỏ', 25000, 'Ly4Z0J.jpg', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n\r\n<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word &quot;and&quot; and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn&rsquo;t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>', 'active', 'no', '2022-01-14', 'hailan', NULL, NULL, 4),
(22, 'Bánh Mochi Matcha', 27000, 'ir3T4B.jpg', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n\r\n<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word &quot;and&quot; and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn&rsquo;t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>', 'active', 'no', '2022-01-14', 'hailan', NULL, NULL, 4),
(23, 'Latte đá', 27000, 'Goxm3d.jpg', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n\r\n<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word &quot;and&quot; and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn&rsquo;t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>', 'active', 'no', '2022-01-14', 'hailan', NULL, NULL, 2),
(24, 'Latte nóng', 24000, 'FR9xfH.jpg', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>\r\n\r\n<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word &quot;and&quot; and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn&rsquo;t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>', 'active', 'no', '2022-01-14', 'hailan', NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `key_value` char(50) DEFAULT NULL,
  `value` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `setting`
--

INSERT INTO `setting` (`id`, `key_value`, `value`) VALUES
(1, 'setting-general', '{\"hotline\":\"037 7753 895\",\"hotline_description\":\"Qu\\u00fd kh\\u00e1ch vui l\\u00f2ng g\\u1ecdi v\\u00e0o hotline \\u0111\\u1ec3 c\\u00f3 th\\u1ec3 \\u0111\\u1eb7t b\\u00e0n tr\\u01b0\\u1edbc\",\"email\":\"training@zendvn.com\",\"openday\":\"Monday-Friday\",\"time\":\"8:00am-9:00pm\",\"copyright\":\"\\u00a9 2021 - B\\u1ea3n quy\\u1ec1n c\\u1ee7a C\\u00f4ng Ty L\\u1eadp Tr\\u00ecnh Zend Vi\\u1ec7t Nam\",\"address\":\"320\\/64 \\u0110o\\u00e0n V\\u0103n B\\u01a1 ph\\u01b0\\u1eddng 10 qu\\u1eadn 4\",\"address_description\":\"C\\u1eeda h\\u00e0ng n\\u1eb1m ngay t\\u1ea1i khu ph\\u1ed1 \\u1ea9m th\\u1ef1c\",\"about\":\"<p>C&ocirc;ng Ty C\\u1ed5 Ph\\u1ea7n L\\u1eadp Tr&igrave;nh Zend Vi\\u1ec7t Nam - M&atilde; s\\u1ed1 thu\\u1ebf: 0314390745 V\\u0103n ph&ograve;ng: T\\u1ea7ng 5, T&ograve;a nh&agrave; Songdo, 62A Ph\\u1ea1m Ng\\u1ecdc Th\\u1ea1ch, Ph\\u01b0\\u1eddng V&otilde; Th\\u1ecb S&aacute;u, Qu\\u1eadn 3, Th&agrave;nh ph\\u1ed1 H\\u1ed3 Ch&iacute; Minh \\u0110\\u1ecba \\u0111i\\u1ec3m h\\u1ecdc: S\\u1ed1 01, Kh\\u1ed1i A1, Chung c\\u01b0 Tam Ph&uacute;, 43 \\u0110\\u01b0\\u1eddng C&acirc;y Keo, Tam Ph&uacute;, Th\\u1ee7 \\u0110\\u1ee9c, H\\u1ed3 Ch&iacute; Minh Gi\\u1ea5y ph&eacute;p \\u0111\\u0103ng k&yacute; kinh doanh s\\u1ed1 0314390745 do S\\u1edf K\\u1ebf ho\\u1ea1ch v&agrave; \\u0110\\u1ea7u t\\u01b0 Th&agrave;nh ph\\u1ed1 H\\u1ed3 Ch&iacute; Minh c\\u1ea5p ng&agrave;y 09\\/05\\/2017<\\/p>\",\"map\":\"<iframe src=\'https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m14!1m8!1m3!1d7836.736726727483!2d106.740384!3d10.859562!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3bb323b29d50dca9!2zWmVuZFZOIC0gxJDDoG8gVOG6oW8gTOG6rXAgVHLDrG5oIFZpw6pu!5e0!3m2!1sen!2sus!4v1638011196498!5m2!1sen!2sus\' width=\'100%\' height=\'200\' style=\'border:0;\' allowfullscreen=\'\' loading=\'lazy\'><\\/iframe>\",\"logo\":\"klJ410Y8Xl.jpg\"}'),
(2, 'setting-mail', '{\"username\":\"man655259@gmail.com\",\"password\":\"epgbcxnvsdwwryhx\"}'),
(3, 'setting-bcc', '{\"bcc\":\"nguyenhuynhminhman2311999@gmail.com,man655259@gmail.com\"}'),
(4, 'setting-social', '{\"facebook\":\"https:\\/\\/www.facebook.com\\/groups\\/ZendVN.Group,https:\\/\\/www.facebook.com\\/groups\\/giaidetoeicmoingay990\",\"youtube\":\"https:\\/\\/www.youtube.com\\/user\\/luutruonghailan,https:\\/\\/www.youtube.com\\/c\\/luutruonghailan_zendvn\",\"instagram\":\"https:\\/\\/www.instagram.com\\/renebaebae\\/\"}'),
(5, 'setting-home-images', '{\"story_image\":\"bzZAPL.jpg\",\"statistic_background\":\"6pWek0.jpg\"}');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shipping`
--

CREATE TABLE `shipping` (
  `id` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `shipping` float NOT NULL,
  `status` char(10) NOT NULL,
  `created` date DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `modified_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `shipping`
--

INSERT INTO `shipping` (`id`, `city`, `shipping`, `status`, `created`, `created_by`, `modified`, `modified_by`) VALUES
(1, 'TPHCM', 0, 'active', '2022-01-05', 'hailan', NULL, NULL),
(2, 'Hà Nội', 20000, 'active', '2022-01-05', 'hailan', NULL, NULL),
(3, 'Cần Thơ', 30000, 'active', '2022-01-05', 'hailan', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `thumb` char(10) NOT NULL,
  `status` char(10) NOT NULL DEFAULT 'inactive',
  `link` char(200) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`id`, `name`, `description`, `thumb`, `status`, `link`, `created`, `created_by`, `modified`, `modified_by`) VALUES
(1, 'Trải Nghiệm Cà Phê Rang Xay Ngon Nhất', '<p>Hương vị c&agrave; ph&ecirc; khiến bạn kh&oacute; c&oacute; thể n&agrave;o cưỡng lại</p>', 'ccdiBr.jpg', 'active', NULL, '2022-01-14', 'hailan', '2022-01-14', 'hailan'),
(2, 'Không gian gần gũi và thoải mai', '<p>Gi&uacute;p cho bạn c&oacute; thể tận hưởng sự y&ecirc;n tĩnh v&agrave; hương vị tuyệt vời của c&agrave; ph&ecirc;</p>', 'BHkTuT.jpg', 'active', NULL, '2022-01-14', 'hailan', '2022-01-14', 'hailan'),
(3, 'Hương vị tuyệt vời và không gian gần gũi', '<p>Tận hưởng một ly c&agrave; ph&ecirc; c&ugrave;ng bạn b&egrave; hay gia đ&igrave;nh tại một kh&ocirc;ng gian rất gần gũi, tho&aacute;ng m&aacute;t</p>', 'Wpu2ed.jpg', 'active', NULL, '2022-01-14', 'hailan', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modified_by` varchar(45) DEFAULT NULL,
  `status` varchar(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `fullname`, `password`, `avatar`, `level`, `created`, `created_by`, `modified`, `modified_by`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123456', 'e10adc3949ba59abbe56e057f20f883e', '1ctW8mj8vq.png', 'admin', '2014-12-10 08:55:35', 'admin', '2019-05-04 14:47:14', 'hailan', 'active'),
(2, 'hailan', 'hailan@gmail.com', 'hailan', '7c6f3ef49405d8a330aaa19ca0d0f6af', '1eSGmvZ3gM.jpeg', 'member', '2014-12-13 07:20:03', 'admin', '2019-05-04 08:47:04', 'hailan', 'active'),
(3, 'user123', 'test@gmail.com', 'user123', 'e10adc3949ba59abbe56e057f20f883e', 'Hb1QSn1CL8.png', 'member', '2019-05-04 00:00:00', 'admin', '2019-05-04 08:47:07', 'hailan', 'inactive'),
(4, 'user456', 'user456@gmail.com', 'user456', 'e10adc3949ba59abbe56e057f20f883e', 'J1uknUz0T6.png', 'admin', '2019-05-04 00:00:00', 'admin', '2021-11-26 00:00:00', 'hailan', 'inactive');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_article_id` (`category_article_id`);

--
-- Chỉ mục cho bảng `attribute`
--
ALTER TABLE `attribute`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category_article`
--
ALTER TABLE `category_article`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_product_id` (`category_product_id`);

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `value` (`value`(768));

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `attribute`
--
ALTER TABLE `attribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `category_article`
--
ALTER TABLE `category_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`category_article_id`) REFERENCES `category_article` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_product_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
