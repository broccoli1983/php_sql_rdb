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
-- テーブルの構造 `m_job`
--

CREATE TABLE `m_job` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `job` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `m_job`
--

INSERT INTO `m_job` (`id`, `job_id`, `job`) VALUES
(1, 1, '公務員'),
(2, 2, '経営者・役員'),
(3, 3, '会社員'),
(4, 4, '自営業'),
(5, 5, '自由業'),
(6, 6, '専業主婦'),
(7, 7, 'パート・アルバイト'),
(8, 8, '学生'),
(9, 99, 'その他');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `m_job`
--
ALTER TABLE `m_job`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `m_job`
--
ALTER TABLE `m_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
