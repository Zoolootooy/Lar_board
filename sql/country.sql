-- --------------------------------------------------------
-- Хост:                         D:\Учеба\ДИПЛОМ\DB\receipes.db
-- Версия сервера:               3.30.1
-- Операционная система:         
-- HeidiSQL Версия:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES  */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных main
CREATE DATABASE IF NOT EXISTS "main";
USE "main";

-- Дамп структуры для таблица main.Products
CREATE TABLE IF NOT EXISTS "Products" (
	"ID"	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	"Name"	TEXT NOT NULL UNIQUE
);

-- Дамп данных таблицы main.Products: -1 rows
/*!40000 ALTER TABLE "Products" DISABLE KEYS */;
INSERT INTO "Products" ("ID", "Name") VALUES
	(1, 'Курица'),
	(2, 'Свинина'),
	(3, 'Говядина'),
	(4, 'Баранина'),
	(5, 'Индюшка'),
	(6, 'Утка'),
	(7, 'Гусь'),
	(8, 'Телятина'),
	(9, 'Ягнятина'),
	(10, 'Кролик'),
	(11, 'Морковь'),
	(12, 'Свёкла'),
	(13, 'Картофель'),
	(14, 'Редис'),
	(15, 'Редька'),
	(16, 'Дайкон'),
	(17, 'Репа'),
	(18, 'Хрен'),
	(19, 'Капуста '),
	(20, 'Савойская капуста'),
	(21, 'Брюссельская капуста'),
	(22, 'Цветная капуста'),
	(23, 'Брокколи'),
	(24, 'Кольраби'),
	(25, 'Салат айсберг'),
	(26, 'Укроп'),
	(27, 'Петрушка'),
	(28, 'Кенза'),
	(29, 'Чабер'),
	(30, 'Майоран'),
	(31, 'Базилик'),
	(32, 'Лук'),
	(33, 'Чеснок'),
	(34, 'Томат'),
	(35, 'Тыква'),
	(36, 'Кабачок'),
	(37, 'Огурец'),
	(38, 'Баклажан'),
	(39, 'Тмин'),
	(40, 'Фасоль белая'),
	(41, 'Фасоль красная'),
	(42, 'Колбаса варёная'),
	(43, 'Колбаса копчёная'),
	(44, 'Колбаса сыровяленая'),
	(45, 'Сосиски'),
	(46, 'Сардельки'),
	(47, 'Салями'),
	(48, 'Майонез'),
	(49, 'Кетчуп'),
	(50, 'Горчица неострая'),
	(51, 'Горчица острая'),
	(52, 'Хлеб пшеничный'),
	(53, 'Хлеб ржаной'),
	(54, 'Гречка'),
	(55, 'Перловка'),
	(56, 'Пшеничная крупа'),
	(57, 'Пшенная крупа'),
	(58, 'Томатная паста'),
	(59, 'Масло подсолнечное'),
	(60, 'Соль'),
	(61, 'Шампиньоны'),
	(62, 'Сливки'),
	(63, 'Сыр твёрдый'),
	(64, 'Перец чёрный'),
	(65, 'Перец болгарский'),
	(66, 'Крабовые палочки'),
	(67, 'Кукуруза'),
	(68, 'Яйцо куриное'),
	(69, 'Ананас'),
	(70, 'Рис'),
	(71, 'Масло сливочное'),
	(72, 'Мука'),
	(73, 'Лавровый лист'),
	(74, 'Паприка'),
	(75, 'Сахар'),
	(76, 'Салат латук'),
	(77, 'Рукола');
/*!40000 ALTER TABLE "Products" ENABLE KEYS */;

-- Дамп структуры для таблица main.Products_Needs
CREATE TABLE IF NOT EXISTS "Products_Needs" (
	"ID_PN"	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	"Prod_Value"	TEXT NOT NULL,
	"ID_Pr"	INTEGER NOT NULL,
	"ID_Re"	INTEGER NOT NULL,
	FOREIGN KEY("ID_Pr") REFERENCES "Products"("ID"),
	FOREIGN KEY("ID_Re") REFERENCES "Recipe"("ID")
);

-- Дамп данных таблицы main.Products_Needs: -1 rows
/*!40000 ALTER TABLE "Products_Needs" DISABLE KEYS */;
INSERT INTO "Products_Needs" ("ID_PN", "Prod_Value", "ID_Pr", "ID_Re") VALUES
	(1, '1 стакан', 54, 1),
	(2, '300 г (фарш)', 1, 1),
	(3, '1 шт.', 32, 1),
	(4, '1 шт.', 11, 1),
	(5, '2 зубка', 33, 1),
	(6, '2 ст. ложки', 58, 1),
	(7, '20 г', 59, 1),
	(8, 'по вкусу', 60, 1),
	(9, '400 г (филе)', 1, 2),
	(10, '300 г', 61, 2),
	(11, '100 г', 32, 2),
	(12, '200 мл (20-30%)', 62, 2),
	(13, '150 г (из твёрдых сортов)', 63, 2),
	(14, '2 ст. ложки', 59, 2),
	(15, 'по вкусу', 60, 2),
	(16, 'по вкусу', 64, 2),
	(17, 'для украшения', 31, 2),
	(18, '500 г (на кости)', 4, 3),
	(19, '2-3 шт.', 13, 3),
	(20, '2 шт.', 11, 3),
	(21, '2 шт.', 65, 3),
	(22, '3-4 шт. (средние)', 34, 3),
	(23, '2 шт.', 32, 3),
	(24, '2 зубка', 33, 3),
	(25, 'щепотка сушеного', 31, 3),
	(26, 'по вкусу', 60, 3),
	(27, 'по вкусу', 64, 3),
	(28, '240 г', 66, 4),
	(29, '340 г (консервированна)', 67, 4),
	(30, '4 шт.', 68, 4),
	(31, '200 г', 63, 4),
	(32, '150 г', 48, 4),
	(33, 'по вкусу', 60, 4),
	(34, '500 г (филе)', 1, 5),
	(35, '1 банка (консервированная)', 67, 5),
	(36, '1 банка (консервированняе)', 69, 5),
	(37, '3 шт.', 68, 5),
	(38, '100 г', 63, 5),
	(39, 'по вкусу', 48, 5),
	(40, 'по вкусу', 60, 5),
	(41, 'по вкусу', 64, 5),
	(42, '1 шт.', 1, 6),
	(43, '0.5 стакана', 70, 6),
	(44, '1 головка', 33, 6),
	(45, '50 г', 71, 6),
	(46, '1 шт.', 32, 6),
	(47, '1 шт.', 11, 6),
	(48, '2 ст. ложки', 58, 6),
	(49, 'по вкусу', 60, 6),
	(50, '150 г', 1, 7),
	(51, '2 шт.', 68, 7),
	(52, '6 ст. ложек', 72, 7),
	(53, '1 шт.', 13, 7),
	(54, '1 шт.', 11, 7),
	(55, '1 шт.', 32, 7),
	(56, '1 шт.', 73, 7),
	(57, '0.5 ст. ложки', 60, 7),
	(58, 'по вкусу', 64, 7),
	(59, '250 г', 2, 8),
	(60, '3 шт.', 13, 8),
	(61, '1 шт.', 32, 8),
	(62, '2 зубчика', 33, 8),
	(63, '200 мл (15%)', 62, 8),
	(64, '50 г', 71, 8),
	(65, '30 г', 63, 8),
	(66, '1 ч. ложка', 74, 8),
	(67, '1 ч. ложка', 60, 8),
	(68, '1/4 ч. ложки', 64, 8),
	(69, '1 ч. ложка', 75, 8),
	(70, '2-3 веточки', 27, 8),
	(71, '2 небольших листа', 76, 8),
	(72, '400 г', 2, 9),
	(73, '3 шт.', 13, 9),
	(74, '1 шт.', 32, 9),
	(75, '3 зубчика', 33, 9),
	(76, '1 шт.', 68, 9),
	(77, '1 шт.', 73, 9),
	(78, '1-2 кусочка', 53, 9),
	(79, 'по вкусу', 60, 9),
	(80, 'по вкусу', 64, 9),
	(81, '6-7 веточек', 27, 9),
	(82, '400-500 г', 3, 10),
	(83, '1 шт', 65, 10),
	(84, '1 шт.', 32, 10),
	(85, '500-600 г', 13, 10),
	(86, '2-3 зубчика', 33, 10),
	(87, '2-3 ст. ложки', 58, 10),
	(88, 'по вкусу', 60, 10),
	(89, 'по вкусу', 64, 10),
	(90, 'ttt', 1, 11);
/*!40000 ALTER TABLE "Products_Needs" ENABLE KEYS */;

-- Дамп структуры для таблица main.Recipe
CREATE TABLE IF NOT EXISTS "Recipe" (
	"ID"	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	"Text"	TEXT NOT NULL,
	"Name"	TEXT
);

-- Дамп данных таблицы main.Recipe: -1 rows
/*!40000 ALTER TABLE "Recipe" DISABLE KEYS */;
INSERT INTO "Recipe" ("ID", "Text", "Name") VALUES
	(1, 'Как приготовить гречку по-купечески:

1. Гречку промыть. Смазать сковороду маслом (можно даже сливочным) и высыпать туда крупу, подсушить на среднем огне.
2. Натереть морковь, порезать лук (это можно делать во время "сушки" гречневой крупы). Обжарить в растительном масле до золотистого цвета.
3. Далее добавляем фарш, разбивая комочки.
4. И в конце добавить томатную пасту (или порезанные помидоры БЕЗ кожицы). Тщательно перемешать. И жарить на среднем огне минут 5 (пока фарш не потемнеет)
5. К мясу и овощам выложить гречку.
6. Залить кипятком так, чтобы гречка была слегка прикрыта водой. Посолить.
7. Тушить гречку по-купечески на медленном огне под крышкой, пока вода не испарится. Если гречка еще не готова, долить еще немного воды, повторить действия.
8. В готовую гречку по-купечески добавить мелко порезанный чеснок (или использовать чесночницу), перемешать. Можно добавить черный молотый перец и лавровый лист.
Подавать гречку по-купечески горячей.', 'Гречка по-купечески'),
	(2, 'Подготовьте все ингредиенты по рецепту жюльена с курицей и грибами.
1. Куриное филе нарежьте небольшими кусочками.
2. Курицу обжарьте на растительном масле несколько минут до полуготовности.
3. Лук мелко нарежьте, добавьте к курице и жарьте куриное филе с луком еще 3-4 минуты.
4. Шампиньоны крупно нарежьте и добавьте в сковороду.
5. После того, как выпарится влага из грибов, посолите, поперчите и готовьте курицу с луком и грибами еще 5-7 минут, до золотистого цвета.
6. Залейте мясо и грибы сливками, немного прогрейте всё вместе.
7. Сыр натрите на крупной терке и выложите сверху.
8. Выключите огонь и накройте сковороду крышкой.
9. Когда через 3-5 минут сыр расплавится, жюльен с грибами и курицей можно подавать к столу.
Если ваша сковорода позволяет, украсьте жульен с курицей листиками базилика и подавайте к столу прямо в этой посуде.
Или подавайте жюльен порционно на тарелке, украсив зеленью и дополнив блюдо свежими овощами.
Приятного аппетита!', 'Жюльен'),
	(3, 'Как приготовить шурпу из баранины:
1. Мясо залить водой, посолить, поставить на медленный огонь на 2-3 часа!
2. Когда мясо начнет отделяться от кости, пора резать овощи.
3. Все овощи режутся довольно крупно. Нарезаем картошку, морковь, перец, помидор, лук. Чеснок нарезать пластинками.
4. Добавить в кастрюлю картошку и морковь. Оставить на 30 минут на медленном огне.
5. Добавить перец, дать немного повариться, минут 15-20.
6. Добавить помидор и лук. Перемешать. Следом добавить специи и чеснок. Оставить, опять же на медленном огне, минут на 20-30.
Перед подачей на стол нашинковать зелень и добавить в каждую порцию шурпы.
Приятного аппетита!', 'Шурпа из баранины'),
	(4, 'Как приготовить быстрый крабовый салат:
1. Яйца вымыть, выложить в казанок, залить холодной водой, посолить, довести до кипения. Сварить вкрутую на среднем огне (10 минут).
2. Открыть баночку кукурузки, слить жидкость.
3. Твердый сыр натереть на терке.
4. Яйца очистить, нарезать кубиками.
5. Крабовые палочки нарезать.
6. Все ингредиенты выложить в миску, можно по вкусу посолить. Добавить майонез. Перемешать.
Быстрый крабовый салат готов.
Приятного аппетита!', 'Быстрый крабовый салат'),
	(5, '1. Куриное филе отварить в подсоленной воде со специями. Остудить и нарезать.
2. Яйца отварить вкрутую, остудить и почистить. Нарезать кубиками или натереть на терке.
3. Сыр натереть на терке. Слить жидкость из банки с консервированной кукурузой. Ананасы нарезать небольшими кусочками.
4. Смешать все ингредиенты салата и заправить майонезом.
5. По желанию украсить салат кольцами ананаса, зернами кукурузы и зеленью. Остудить перед подачей.', 'Салат с курицей и ананасом'),
	(6, 'Как приготовить суп харчо:

Курицу промойте и порежьте на порционные кусочки.
Залейте курицу 2,5 л кипящей водой и варите до готовности (30-40 минут) на среднем огне под крышкой.
Промойте рис.
Выложите в бульон промытый рис. Когда он начнет набухать (через 10-15 минут), посолите суп.
Очистите, вымойте и мелко порежьте лук и морковь.
Чеснок очистите от кожицы, мелко порежьте.
В сковороде разогрейте сливочное масло.
Обжарьте овощи на среднем огне, помешивая 2-3 минуты.
Перед окончанием жарки добавьте томатную пасту.
И хорошо перемешайте.
Чеснок переложите в сковороду к овощам. Тушите овощи вместе около 5–7 минут на самом маленьком огне, помешивая.
Переложите овощи в суп.
Отдельно приготовьте заправку для супа харчо. Очистите и порежьте чеснок, затем немного подавите его. Вымойте и нарежьте зелень.
Чеснок смешайте с мелко порубленной зеленью укропа и базилика.
Наш суп харчо готов. При подаче посыпать заправкой.
Приятного аппетита!', 'Суп "Харчо"'),
	(7, 'Картофель, морковь и лук очистите и вымойте.
Курицу выложите в кастрюлю, залейте ее водой. Добавьте соль. Отправьте кастрюлю на огонь и варите бульон на слабом огне 40 минут. Когда бульон закипит, обязательно соберите ложкой пену.
В миску вбейте одно яйцо.
Яйцо немного взбейте венчиком.
Теперь руки окуните в яйцо, затем в муку.
Потрите ладошки над тарелкой друг о друга. Таким образом проделайте несколько раз, чтобы использовать всю муку.
Лук нарежьте маленькими кубиками.
Морковь натрите на мелкой терке.
Разогрейте сковороду с растительным маслом. Обжарьте овощи на среднем огне в течение 3 минут.
Картофель нарежьте небольшими кубиками.
Достаньте мясо из бульона. Выложите в бульон нарезанный картофель.
Добавьте лавровый лист.
Мясо отделите от костей. Нарежьте мясо и выложите назад в бульон. Отправьте кастрюлю на слабый огонь и варите суп с картофелем и курицей в течение 20 минут.
Теперь выложите в суп зажарку.
Затирку просейте через сито.
Выложите затирку в суп.
Второе яйцо взбейте венчиком и влейте в суп. Варите суп с затиркой еще 10 минут. В готовый суп добавьте молотый перец.
Зеленый лук мелко нарежьте. Разлейте суп по тарелкам, украсьте зеленым луком и подавайте.
Приятного аппетита!', 'Суп "Затируха" с курицей'),
	(8, 'Подготовьте все ингредиенты. Удобно, когда всё находится под рукой.
Свежую петрушку можно заменить сушёной (в таком случае понадобится 1/2 ч. ложки).
Свежую петрушку измельчите острым ножом.
В сковороде растопите половину сливочного масла и выложите туда свиной фарш. Добавьте петрушку, сахар, паприку, итальянские травы, соль и чёрный перец.
Перемешайте фарш с зеленью и специями. Затем туда же на мелкой тёрке натрите очищенный зубчик чеснока (или выдавите через пресс). Обжарьте 5-6 минут, периодически разбивая деревянной лопаткой комочки фарша.
Мясо немного уменьшится в объёме (ужарится) и благодаря паприке, травам и чесноку приобретёт очень красивый цвет и аромат.
В кастрюлю налейте 1,5 л воды и на большом огне доведите до кипения.
Картофель очистите, нарежьте крупными кубиками и отправьте в кипящую воду. Варите картофель до готовности (примерно 12-15 минут).
Очищенный лук нарежьте мелкими кубиками. Оставшийся очищенный зубчик чеснока мелко нарежьте.
В другой сковороде растопите оставшееся сливочное масло и обжарьте лук и чеснок до золотистости.
Готовый картофель измельчите в отваре в пюре. Можно использовать для этого картофелемялку или погружной блендер.
Добавьте обжаренные лук и чеснок, доведите до кипения и варите 2-3 минуты.
Далее в кастрюлю влейте сливки, доведите до кипения и варите ещё 5 минут.
После этого выложите в кастрюлю фарш, добавьте соль по вкусу и варите ещё 10 минут.
Тосканский сливочный суп с фаршем готов. Выключите плиту. Оставьте суп на тёплой плите настаиваться ещё 5-7 минут.
Сыр натрите на мелкой тёрке. Разлейте суп по порционным тарелкам, выложите в каждую тарелку по половине листа салата латука и по 1/2 ст. ложки натёртого сыра.
Подавайте итальянский суп с фаршем к столу горячим. Ароматная Италия у вас дома - это тосканский суп с фаршем!', 'Тосканский суп с фаршем'),
	(9, 'Мясо вымыть, поместить в кастрюлю, влить 1,5 л холодной воды и поставить на огонь. Когда вода закипит, снять всю пену, добавить лавровый лист и варить мясо до готовности на медленном огне под крышкой, не допуская активного кипения бульона.
Картофель очистить и нарезать кубиками.
Лук очистить и нарезать кубиками, чеснок очистить.
Приготовить сухарики для подачи супа. Нарезать хлеб небольшими кусочками, выложить на сухую сковороду и поджарить в течение 4-5 минут.
Обжарить лук до легкого золотистого цвета. Посолить и поперчить.
Чеснок пропустить через пресс и обжарить вместе с луком (не более 1 минуты) до появления характерного яркого чесночного запаха.
Яйцо разбить в миску и взболтать вилкой.
Картофель выложить в кастрюлю.
Залить процеженным бульоном. Мясо нарезать на куски и тоже выложить в кастрюлю. Варить суп до готовности картофеля, посолить. Можно добавить специи по своему вкусу.
В суп выложить обжаренный лук с чесноком.
Тонкой струйкой влить взбитое яйцо. Яйцо сразу же свернется, образуя тонкие волокна. Добавить мелко нарезанную петрушку, довести до кипения и снять с огня.
Густой и наваристый чешский чесночный суп готов. Подавать с сухариками. Приятного аппетита.', 'Чешский чесночный суп'),
	(10, 'Как приготовить суп-гуляш:

Одну крупную луковицу мелко шинкуем.
Говядину нарезаем средними кусочками.
Болгарский перец очищаем от семян и режем небольшими кубиками.
Разогреваем кастрюлю, где будет готовиться блюдо. Наливаем достаточное количество растительного масла и обжариваем на нем лук примерно 2-3 минуты.
Добавляем мясо, солим и обжариваем еще 2-3 минуты.
Далее вливаем кипяток, чтобы он покрыл мясо, и варим на небольшом огне 30 минут.
В это время очищаем и нарезаем картофель средними по размеру кубиками.
В кастрюлю к мясу, куда я уже успела добавить перец и любимые приправы, добавляем картофель и снова заливаем кипятком, чтобы он полностью покрыл блюдо. Варим еще минут 20.
В самом конце добавляем болгарский перец и 2-3 столовые ложки томатной пасты. Также для остроты я добавила немного аджики, но это делать не обязательно.
Блюдо досолите по вкусу, добавьте чеснок и варите еще минут 10-15.', 'Суп-гуляш из говядины'),
	(11, 'T', 'Test'),
	(12, '13', '3123123');
/*!40000 ALTER TABLE "Recipe" ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
