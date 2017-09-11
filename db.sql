-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2017 at 07:21 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appetizing`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `id` smallint(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `ingredients` text,
  `preparation` text,
  `image` text,
  `user_id` int(10) DEFAULT NULL,
  `cookingtime` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `name`, `ingredients`, `preparation`, `image`, `user_id`, `cookingtime`) VALUES
(14, 'Easy one pot lasagne', '1 tablespoon olive oil_3 Italian sausage links, casing removed_1 (14.5-ounce) can diced tomatoes_1 teaspoon dried oregano_1 teaspoon dried basil_1/2 teaspoon garlic powder_1/2 teaspoon crushed red pepper flakes, optional_8 ounces farfalle pasta_Kosher salt and freshly ground black pepper, to taste_1 cup shredded mozzarella cheese_1/4 cup freshly grated Parmesan_1 cup ricotta cheese_2 tablespoons chopped fresh parsley leaves', 'Heat olive oil in a large skillet over medium high heat. Add Italian sausage and cook until browned, about 3-5 minutes, making sure to crumble the sausage as it cooks; drain excess fat.\r\nStir in diced tomatoes, tomato sauce, oregano, basil, garlic powder and red pepper flakes; season with salt and pepper, to taste.\r\nBring to a simmer and stir in pasta and 2 cups water. Bring to a boil; cover, reduce heat and simmer until pasta is cooked through, about 13-15 minutes.\r\nRemove from heat. Stir in mozzarella and Parmesan until well combined. Using a small cookie scoop, top with dollops of ricotta and cover until heated through, about 2-4 minutes.\r\nServe immediately, garnished with parsley, if desired.\r\n', 'img/lasagne.jpg', NULL, '30 min'),
(15, 'Whole-Wheat Apple Pancakes', '1 cup low-fat buttermilk_3/4 cup nonfat milk_2 large eggs_1 tablespoon honey_6 tablespoons pure maple syrup_1 medium apple, diced_3/4 cup all-purpose flour_3/4 cup whole-wheat four_2 teaspoons baking powder_1/2 teaspoon baking soda_1/4 teaspoon salt', 'Preheat the oven to 250. Put the apple in a microwave-safe bowl and tightly cover with plastic wrap; microwave on high until softened, about 2 minutes.\r\nIn a large bowl, whisk the flours, baking powder, baking soda and salt. In a small bowl, whisk the buttermilk, nonfat milk, eggs and honey, then slowly add the dry ingredients, stirring until just combined.\r\nHeat a large nonstick griddle or skillet over medium heat. Spoon 1/4 cup batter onto the griddle for each pancake and sprinkle each with apple, then drizzle a little more batter over the apple. Cook until the tops are bubbly and the edges are dry, about 2 minutes. Flip and cook until golden brown, 1 to 2 more minutes. Keep the pancakes warm on a baking sheet in the oven while making the rest.\r\nPlace 2 pancakes on each plate. Drizzle with the syrup.\r\n', 'img/pancake.jpg', NULL, '12 min'),
(16, 'Double Berry Breakfast Parfaits', '2 cups plain Greek yogurt_1 Â½ cups sliced strawberries_1 pint fresh blueberries_Honey, optional_Cinnamon, optional', 'In mason jars or bowls, begin layers with Â¼ cup of Greek yogurt, followed by a layer of strawberries and then blueberries. Repeat layering process until yogurt and berries are gone. If desired, add a drizzle of honey and sprinkling of cinnamon to yogurt layer before adding berries.', 'img/berry.jpg', NULL, '5 min');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` smallint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
