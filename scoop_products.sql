-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: sulley.cah.ucf.edu
-- Generation Time: Feb 12, 2017 at 10:16 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ja941580`
--

-- --------------------------------------------------------

--
-- Table structure for table `scoop_products`
--

CREATE TABLE `scoop_products` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `description` varchar(500) NOT NULL,
  `category` varchar(25) NOT NULL,
  `sub_category` varchar(25) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scoop_products`
--

INSERT INTO `scoop_products` (`id`, `name`, `description`, `category`, `sub_category`, `image_url`) VALUES
(1, 'Blueberry Crisp', 'Inspired by the berry bushes all over the hillsides of the Appalachian foothills, Blueberry Crisp is like a slice of fresh berry pie mixed with a scoop vanilla ice cream in every bite. Sweet vanilla ice cream made with high-quality vanilla from Madagascar and brown sugar oat streusel hand-crumbled and oven-toasted in our kitchen.', 'Scoops', 'Ice Cream', 'https://jenis.com/wp-content/uploads/2014/03/Brambleberry_Spoon_2016-400x800.jpg'),
(2, 'Churro', 'We love churros. The satisfying way the fried dough flakes and crisps as you take a bite. How the cinnamon-sugar coating makes your sweet sensors go haywire. Our flavor hits all the same notes with red-hot cinnamon ice cream speckled with pastry flakes and bits of toffee for crunch.', 'Scoops', 'Ice Cream', 'https://jenis.com/wp-content/uploads/2015/11/Churro-Spoon-WEB1-420x800.jpg'),
(3, 'Cookies N Cream', 'Our version is better than the sweet cream, chocolate cookie goodness you remember spooning up under a blanket fort. We make the truffle-like cookies from scratch in our kitchen using cocoa powder. Then we scent the cream with vanilla and add flecks of crisp white chocolate - a touch meant to mimic the cream inside the cookies', 'Scoops', 'Ice Cream', 'https://jenis.com/wp-content/uploads/2016/01/Black-White-Cookies-Spoon-8001-400x800.jpg'),
(4, 'Dark Chocolate', 'It\'s packed with so much real chocolate - the most possible, in fact - that it is overflowing with rich, bittersweet chocolate flavor, and is dense but still creamy, like the inside of a dark chocolate truffle. This is the chocolate ice cream to ruin all other chocolate ice creams.', 'Scoops', 'Ice Cream', 'https://jenis.com/wp-content/uploads/2014/10/Dark-Chocolate-Peppermint-Spoon-1400-400x800.jpg'),
(5, 'Cake Batter', 'Our Cake Batter is dense cream cheese ice cream, loaded with crumbles of soft vanilla cake and swirls of a honey-butter caramel sauce made in our kitchen. It\'s like the best blondie you\'ve ever tasted covered in caramel sauce.', 'Scoops', 'Ice Cream', 'https://jenis.com/wp-content/uploads/2016/08/Gooey-Butter-Cake-Spoon-1400-1-400x800.jpg'),
(6, 'Mint Chip', 'Mint Chip is all the cool peppermint cream and crunchy chop chocolate of mint chocolate chip you remember, but better than it ever was. We scent sweet cream ice cream with a natural, concentrated peppermint oil for a cool mint finish you can taste and feel.', 'Scoops', 'Ice Cream', 'https://jenis.com/wp-content/uploads/2016/01/Green-Mint-Chip-Spoon_0167-1400-copy-400x800.jpg'),
(7, 'Vanilla', 'Our Vanilla ice cream is light years away from \"plain.\" We source vanilla from an estate in Uganda that grows beans with the most vanillin crystals. It\'s the best vanilla you\'ve ever tasted with gorgeous, round, full-bodied vanilla flavor and a rich, smoky aroma. Treat yourself to an unforgettable vanilla ice cream with subtly sweet hints of jasmine, honey, smoke, and donuts.', 'Scoops', 'Ice Cream', 'https://jenis.com/wp-content/uploads/2014/03/WEB_IMG_5417_Ndali_Estate_Vanilla_Bean_Spoon-421x800.jpg'),
(8, 'Strawberry', 'We pick out our strawberries for flavor not size. They are so concentrated with sugar that, when roasted, they explode with the most intense strawberry flavor. The best ice cream is about pairing the right dairy with the right ingredients. We use fresh cultured buttermilk to complement the acidity of the berries for a strawberry flavor that\'s springy and bright.', 'Scoops', 'Ice Cream', 'https://jenis.com/wp-content/uploads/2014/07/Roasted-Strawberry-Buttermilk-Spoon-1400-421x800.jpg'),
(9, 'Salty Caramel', 'We crafted this flavor based on what we imagined salty French caramel would taste like, beginning with toasted sugar, not flavoring. It was an instant success, and we still make it the same way today, by toasting sugar in a kettle over fire. And then we blend it with cream and grass-grazed milk that enhance the butteriness of the caramel.', 'Scoops', 'Ice Cream', 'https://jenis.com/wp-content/uploads/2014/03/WEB_Salty_Caramel_Spoon_2015-420x800.jpg'),
(10, 'Key Lime', 'Imagine the best key lime pie you\'ve ever had - creamy, tart, citrusy, barely sweet. Now amplify it. That\'s what our Key Lime Frozen Yogurt tastes like. It\'s full-flavored and aromatic, made with key lime puree and all-natural lime oil for a citrusy bite you can taste and smell.', 'Scoops', 'Froyo', 'https://jenis.com/wp-content/uploads/2016/05/Key-Lime-BFY-Spoon-01-1400-400x800.jpg'),
(11, 'Lemon', 'Made with lemon juice and oil from lemon zest, cultured buttermilk, and organic yogurt, our Lemon Frozen Yogurt is tart and, like all of our yogurts, exceedingly creamy.', 'Scoops', 'Froyo', 'https://jenis.com/wp-content/uploads/2014/03/Lemon-BFY-Spoon-1400-1-400x800.jpg'),
(12, 'Mango', 'When we blend ripe mango with buttermilk and organic yogurt, the tropical fruit flavor blooms. The result is a Frozen Yogurt that\'s barely tart, ultra creamy, and exploding with ripe mango flavor.', 'Scoops', 'Froyo', 'https://jenis.com/wp-content/uploads/2016/08/Mango-Buttermilk-Frozen-Yogurt-Spoon-1400-400x800.jpg'),
(13, 'Roasted Chestnut', 'With their gentle nuttiness, almost caramelized flavor, and starchy body, roasted chestnuts are prime for blending with cultured buttermilk, organic yogurt, and cream. Add warm flavors, like vanilla and molasses, and the result is an ultra dense frozen yogurt that\'s toasty and nutty like a praline.', 'Scoops', 'Froyo', 'https://jenis.com/wp-content/uploads/2016/11/mont-blanc-spoon-1-1400-399x800.jpg'),
(14, 'Pink Grapefruit', 'With richness from cultured buttermilk and a savory bite from organic yogurt, it\'s our most addictingly bittersweet frozen yogurt. Every spoonful is just like biting into a fresh, juicy pink grapefruit.', 'Scoops', 'Froyo', 'https://jenis.com/wp-content/uploads/2016/05/Pink-Grapefruit-BFY-Spoon-1400-400x800.jpg'),
(15, 'Wild Blueberry', 'Our electrifying wild blueberry frozen yogurt is so intense, you can taste and even smell its vibrant hue. It\'s also tart and very creamy, made with fresh cultured buttermilk and organic yogurt.', 'Scoops', 'Froyo', 'https://jenis.com/wp-content/uploads/2015/04/Ultramarine-Blue-BFY-Spoon-1400-400x800.jpg'),
(16, 'Blackberry', 'Made with pulverized blackberries, this sorbet is sweet on the palate, slightly acidic, and bursting with a berry flavor that is as striking as its natural hue.', 'Scoops', 'Sorbet', 'https://jenis.com/wp-content/uploads/2014/10/Black-Currant-Lambic-Spoon-1400-400x800.jpg'),
(17, 'Orange-Lemon', 'Relax in the sun with a light and refreshing sorbet for summer. Made with freshly squeezed orange juice, lemon balm, and agave nectar.', 'Scoops', 'Sorbet', 'https://jenis.com/wp-content/uploads/2014/03/hot-toddy-sorbet-spoon-winter-2017_0585-edit-1400-400x800.jpg'),
(18, 'Poached Pear', 'Using wine in sorbet is a very traditional technique - fruit is poached in wine and the resulting sugary syrup is used as the base of sorbet. We amended this method to let the ingredients shine through. Our Riesling Poached Pear Sorbet is made with whole Bartlett pear puree, sweet and crisp Riesling, and sugar syrup for a sorbet that\'s light and rich.', 'Scoops', 'Sorbet', 'https://jenis.com/wp-content/uploads/2014/03/Riesling_Pear_Spoon_WebCrop-389x800.jpg'),
(19, 'Oh Fudge!', 'Made with creamy chocolate ice cream and seriously rich fudge, even if you\'ve never seen the movie this shake is named for, trust us, it\'s way better than a Red Rider BB Gun.', 'Sips', 'Shakes', 'http://sulley.cah.ucf.edu/~ja941580/dig4503/assignment1/img/ohfudge2.jpg'),
(20, 'Oreo Cookie', 'Few things go together like milk and cookies. Seriously, you think Santa would be okay with PB & J? No, the big guy wants milk and cookies. You shouldn\'t settle for less either.', 'Sips', 'Shakes', 'http://sulley.cah.ucf.edu/~ja941580/dig4503/assignment1/img/oreo2.jpg'),
(21, 'Cake Batter', 'What, you\'ve never wanted to take a piece of tasty yellow cake with some sweet and creamy ice cream and blend it all up until you can drink it? Really? Um, yeah, me neither.', 'Sips', 'Shakes', 'http://sulley.cah.ucf.edu/~ja941580/dig4503/assignment1/img/cakebatter2.jpg'),
(22, 'Vanilla', 'There\'s nothing \'vanilla\' about this shake! Well, you know, except for the actual Vanilla. There\'s a lot of that.', 'Sips', 'Shakes', 'http://sulley.cah.ucf.edu/~ja941580/dig4503/assignment1/img/vanilla2.jpg'),
(23, 'Strawberry', 'How can one shake contain so many strawberries?! I mean, they don\'t grow on trees! (They grow on plants)', 'Sips', 'Shakes', 'http://sulley.cah.ucf.edu/~ja941580/dig4503/assignment1/img/strawberry2.jpg'),
(24, 'Mint Chip', 'Mint ice cream and chocolate shavings, blended together and slurped through a straw? Yes, please!!', 'Sips', 'Shakes', 'http://sulley.cah.ucf.edu/~ja941580/dig4503/assignment1/img/mint2.jpg'),
(25, 'Strawberry Banana', 'Is there anything better than the combination of these two fruits? Honestly? They\'re really good by themselves... but when you put the two together and blend them up? Dee-lish!', 'Sips', 'Smoothies', 'http://sulley.cah.ucf.edu/~ja941580/dig4503/assignment1/img/strawberrybanana2.jpg'),
(26, 'Mango Pineapple', 'Okay, apparently I lived a sheltered life. I didn\'t try either of these fruits until I was in my teens... now I can\'t imagine living in a world without them!', 'Sips', 'Smoothies', 'http://sulley.cah.ucf.edu/~ja941580/dig4503/assignment1/img/mangopineapple2.jpg'),
(27, 'Blueberry Banana', 'The dictionary defines \'Blueberry\' as an \"Edible berry of any of several North American plants (genus Vaccinium).\" We define them as awesome, tasty, and I want some.', 'Sips', 'Smoothies', 'http://sulley.cah.ucf.edu/~ja941580/dig4503/assignment1/img/blueberrybanana2.jpg'),
(28, 'Strawberry Mango', 'Mangoes are all over the place these days! High in vitamins, minerals and anti-oxidants, we\'ve paired this little super-fruit with delicious, ripe strawberries. Order. Blend. Enjoy!', 'Sips', 'Smoothies', 'http://sulley.cah.ucf.edu/~ja941580/dig4503/assignment1/img/strawberrymango2.jpg'),
(29, 'Blueberry Pineapple', 'And lo, there was finally peace between the warring nations of the Blueberry and Pineapple people. And they rejoiced. Then we made this smoothie. And drank it. And it was good.', 'Sips', 'Smoothies', 'http://sulley.cah.ucf.edu/~ja941580/dig4503/assignment1/img/blueberrypineapple2.jpg'),
(30, 'Caramel', 'What\'s better than a delicious frapp&eacute; with whipped cream? How about a delicious frapp&eacute; with whipped cream AND caramel?', 'Sips', 'Frappes', 'http://sulley.cah.ucf.edu/~ja941580/dig4503/assignment1/img/caramel2.jpg'),
(31, 'Mocha', 'After your first sip you will be livin\' la vida mocha!', 'Sips', 'Frappes', 'http://sulley.cah.ucf.edu/~ja941580/dig4503/assignment1/img/mocha2.jpg'),
(32, 'Coffee', 'Do you like to stick to the classics? This coffee frapp&eacute; will be perfect for your afternoon pick-me-up (or dessert)!', 'Sips', 'Frappes', 'http://sulley.cah.ucf.edu/~ja941580/dig4503/assignment1/img/coffee2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scoop_products`
--
ALTER TABLE `scoop_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scoop_products`
--
ALTER TABLE `scoop_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
