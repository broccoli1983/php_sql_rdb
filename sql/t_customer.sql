-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2021 年 7 月 15 日 16:33
-- サーバのバージョン： 10.4.19-MariaDB
-- PHP のバージョン: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacf_d08_10_002`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `t_customer`
--

CREATE TABLE `t_customer` (
  `id` int(11) NOT NULL,
  `last_name` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rubi_last_name` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rubi_first_name` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` int(8) NOT NULL,
  `gender_id` int(2) NOT NULL,
  `tel` int(12) NOT NULL,
  `job_id` int(10) NOT NULL,
  `zip` int(7) NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `t_customer`
--

INSERT INTO `t_customer` (`id`, `last_name`, `first_name`, `rubi_last_name`, `rubi_first_name`, `email`, `birthday`, `gender_id`, `tel`, `job_id`, `zip`, `address`, `created_at`, `updated_at`) VALUES
(7, 'aaa', 'bbb', 'aaa', 'bbb', 'broccolibroccolibroccoli@gmail.com', 19000101, 1, 921111111, 3, 1234567, '福岡市中央区大手門', '2021-07-03 14:15:53', '2021-07-03 14:15:53'),
(8, 'mori', 'hanako', 'もり', 'はなこ', 'hanako@aaa.co.jp', 20000101, 1, 921111111, 4, 1234567, '福岡市中央区大手門', '2021-07-06 17:19:05', '2021-07-06 17:19:05'),
(10, '山田', '太郎', 'やまだ', 'たろう', 'tarou@test.co.jp', 19000101, 2, 921111111, 2, 1234567, '福岡市中央区大手門', '2021-07-13 16:32:16', '2021-07-13 16:32:16'),
(11, '田中', '太郎', 'たなか', 'たろう', 'text@teat.co.jp', 20000101, 2, 921111111, 4, 1234567, '福岡市中央区大手門', '2021-07-13 17:24:31', '2021-07-13 17:24:31'),
(12, '環境', '良子', 'かんきょう', 'よいこ', 'test@test', 20010202, 1, 921111111, 4, 1234567, '福岡市中央区大手門', '2021-07-13 17:26:10', '2021-07-13 17:26:10'),
(14, '山田', '良子', 'やまだ', 'よいこ', 'test@test', 19990909, 1, 923038313, 1, 1234567, '福岡市中央区六本松', '2021-07-15 20:41:57', '2021-07-15 20:41:57');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `t_customer`
--
ALTER TABLE `t_customer`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `t_customer`
--
ALTER TABLE `t_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
