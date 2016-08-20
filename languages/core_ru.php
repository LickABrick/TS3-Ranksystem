<?PHP
$lang = array();
$lang['adduser']          = "Пользователь %s (Уникальный ID клиента: %s; ID в базе данных: %s) неизвестен -> добавлен к Ранг Системе.";
$lang['changedbid']       = "Пользователь %s (Уникальный ID клиента: %s) получил новый TeamSpeak Client-database-ID (%s). Обновление старой Client-database-ID (%s) и сбрасываем ему старое время!";
$lang['crawl']            = "Сканирование активности подключенных пользователей...";
$lang['clean']            = "Сканирование пользователей, которых должен удалить...";
$lang['cleanc']           = "Чистка пользователей";
$lang['cleancdesc']       = "С включением этой функцией старые пользователи в Ranksystem будут удалены.<br><br>С этой целью, Ranksystem синхронизируется с базой данных TeamSpeak. Пользователи, которых не существует в базе данных TeamSpeak, будут удалены из Ranksystem.<br><br>Эта функция работает когда 'Slowmode' дезактивирован!<br><br><br>Для автоматического регулирования базы данных TeamSpeak 3 можете использоваться ClientCleaner:<br>http://ts-n.net/clientcleaner.php";
$lang['cleandel']         = "%s пользователя удаленны из базы данных Ranksystem, так как они больше не существуют в базе данных TeamSpeak.";
$lang['cleanno']          = "Не найдены пользователи, которые подходили бы для удаления из базы данных.";
$lang['cleanp']           = "Период чистки БД RankSystem";
$lang['cleanpdesc']       = "Укажите время, которое должно пройти перед запуском 'чистка пользователей'.<br><br>Устанавливается в секундах.<br><br>Для больших баз данных рекомендуется использовать один раз в день.";
$lang['cleanrs']          = "Пользователи в базе данных Ranksystem: %s";
$lang['cleants']          = "Пользователи найдены в базе данных TeamSpeak: %s (at %s)";
$lang['days']             = "%s <small>Дней</small>";
$lang['dbconerr']         = "Ошибка подключения к базе данных: ";
$lang['delcldgrpif']      = "Ошибка удаления пользователя из группы сервера: %s";
$lang['delcldgrpsc']      = "Данные о сервер группах для пользователя %s успешно удалена.";
$lang['delclientsif']     = "%s Клиент(ов) удалено из базы данных Ранг Системы!";
$lang['delclientssc']     = "%s Клиент(ов) успешно удалено из базы данных Ранг Системы!";
$lang['errlogin']         = "Логин или пароль введены неверно! Попробуйте снова...";
$lang['errlogin2']			= "Brute force protection: Попробуйте повторить через %s секунд!";
$lang['errlogin3']			= "Brute force protection: Слишком много попыток. Вы были забанены на 300 секунд!";
$lang['error']            = "Ошибка ";
$lang['errremgrp']        = "Ошибка удаления пользователя с уникальным идентификатором UID: %s из группы сервера ID: %s!";
$lang['errremdb']         = "Ошибка удаления пользователя с уникальным идентификатором UID %s из базы данных Ранг Системы!";
$lang['errsel']           = "Ошибка удаления пользователя с уникальным идентификатором UID: %s<br>параметр 'удаление клиентов': %s<br>По условию 'Суммарное время онлайна': %s";
$lang['errukwn']          = "Произошла неизвестная ошибка!";
$lang['errupcount']       = "Ошибка подсчета суммарного времени подключения %s пользователя с UCI %s";
$lang['highest']          = "Достигнут высший ранг";
$lang['install']			= "Установка";
$lang['instdb']           = "Установка базы данных";
$lang['instdbsuc']        = "База данных %s успешно создана.";
$lang['isntwicfg']        = "Не получилось записать настройки базы данных! Пожалуйста, установите права на запись 'other/dbconfig.php' chmod 0777 и попробуйте снова.";
$lang['isntwicfg2']			= "Конфигурирование веб-интерфейса";
$lang['isntwichm']        = "Отсутствуют права на запись в папку \"%s\". Пожалуйста, установите на эту папку права chmod 0777 и повторите этот этап заново.";
$lang['isntwidbhost']     = "Адрес:";
$lang['isntwidbhostdesc'] = "Адрес сервера базы данных<br>(IP or DNS)";
$lang['isntwidbmsg']      = "Ошибка базы данных: ";
$lang['isntwidbname']     = "Имя:";
$lang['isntwidbnamedesc'] = "Название базы данных";
$lang['isntwidbpass']     = "Пароль:";
$lang['isntwidbpassdesc'] = "Пароль для подключения к базе данных";
$lang['isntwidbtype']     = "Тип базы данных:";
$lang['isntwidbtypedesc'] = "Тип базы данных<br><br>Для корректной работы у вас должен быть установлен PDO-Драйвер.<br>Для получения дополнительной информации см. http://ts-n.net/ranksystem.php";
$lang['isntwidbusr']      = "Пользователь:";
$lang['isntwidbusrdesc']  = "Пользователь с доступом к базе данных";
$lang['isntwidel']        = "Пожалуйста, удалите файл 'install.php' Веб-Сервера в целях безопасности! После откройте %s для настройки Системы рангов(RankSystem)!";
$lang['isntwiusr']        = "Пользователь Веб-Панели успешно создан.";
$lang['isntwiusrcr']      = "Создать создать аккаунт Администратора";
$lang['isntwiusrdesc']    = "Введите имя пользователя и пароль для доступа в Веб-Панель. С помощью Веб-Панели вы сможете настроить ранг систему.";
$lang['isntwiusrh']       = "Доступ - Веб-Панель";
$lang['listacsg']         = "Текущая сервер группа";
$lang['listcldbid']       = "ID клиента в базе данных";
$lang['listexgrp']        = "Не учитывается Ранг Системой (исключение по группам сервера).";
$lang['listexuid']        = "Не учитывается Ранг Системой (исключение по клиентам).";
$lang['listip']           = "IP-адрес";
$lang['listnick']         = "Никнейм";
$lang['listnxsg']         = "Следующая группа ранга";
$lang['listnxup']         = "Следующий Ранг через";
$lang['listrank']         = "Ранг";
$lang['listseen']         = "Последняя активность";
$lang['listsuma']         = "Сумм. время активности";
$lang['listsumi']         = "Сумм. время простоя";
$lang['listsumo']         = "Сумм. время подключения";
$lang['listuid']          = "Уникальный ID клиента(UID)";
$lang['login']				= "Авторизоваться";
$lang['nocount']          = "Пользователь %s (Уникальный Клиент ID: %s; Клиент ID %s) является query-пользователем -> не будет учитываться!";
$lang['noentry']          = "Записей не найдено..";
$lang['pass']             = "Пароль";
$lang['queryname']        = "Первый никнейм для бота уже занят другим пользователем. Пробуем использовать второй никнейм...";
$lang['sccrmcld']         = "Пользователь с уникальным ID %s успешно удален из базы данных Ранг Системы.";
$lang['sccupcount']       = "Пользователь с уникальным ID %s успешно переписан с итоговым временем онлайн %s.";
$lang['setontime']        = "Правка накопленного времени";
$lang['setontimedesc']    = "Укажите новое время в секундах, которое нужно задать выбранным клиентам. <br><br>Указанное время подключения будет учтено Ранг Системой и пользователь будет награжден новым Рангом, если он достиг его.";
$lang['sgrpadd']          = "Выдана сервер группа %s пользователю %s (Уникальный ID клиента: %s; ID в базе данных: %s).";
$lang['sgrprerr']         = "Что-то пошло не так, проблема с сервер группой пользователя %s (Уникальный ID клиента:: %s; ID в базе данных %s)!";
$lang['sgrprm']           = "С пользователя %s (Уникальный ID клиента: %s; ID в базе данных: %s) удалена сервер-группа %s.";
$lang['stix0001']         = "Статистика сервера";
$lang['stix0002']         = "Пользователей зарегистрировано в базе RankSystem";
$lang['stix0003']         = "Посмотреть подробнее";
$lang['stix0004']         = "Общий накопленный онлайн за всё время";
$lang['stix0005']         = "Топ онлайна за всё время";
$lang['stix0006']         = "Топ онлайна за месяц";
$lang['stix0007']         = "Топ онлайна за неделю";
$lang['stix0008']         = "Активность сервера";
$lang['stix0009']         = "За последние 7 дней";
$lang['stix0010']         = "За последние 30 дней";
$lang['stix0011']         = "За последние 24 часа";
$lang['stix0012']         = "Выберите период";
$lang['stix0013']         = "За день";
$lang['stix0014']         = "За неделю";
$lang['stix0015']         = "За месяц";
$lang['stix0016']         = "Соотнош. активн./AFK";
$lang['stix0017']         = "Версии клиентов";
$lang['stix0018']         = "Рейтинг стран";
$lang['stix0019']         = "Популярные платформы";
$lang['stix0020']         = "Текущая статистика";
$lang['stix0023']         = "Статус сервера";
$lang['stix0024']         = "Активен";
$lang['stix0025']         = "Неактивен";
$lang['stix0026']         = "Пользователей (В сети / Вмещается)";
$lang['stix0027']         = "Количество каналов";
$lang['stix0028']         = "Средний пинг на сервере";
$lang['stix0029']         =" Всего байтов получено";
$lang['stix0030']         = "Всего байтов отправлено";
$lang['stix0031']         = "Сервер онлайн";
$lang['stix0032']         = "Находится в оффлайне:";
$lang['stix0033']         = "<span id=\"days\">00</span> Дней, <span id=\"hours\">00</span> Часов, <span id=\"minutes\">00</span> Мин., <span id=\"seconds\">00</span> Сек.";
$lang['stix0034']         = "Средняя потеря пакетов";
$lang['stix0035']         = "Информация о сервере";
$lang['stix0036']         = "Название сервера";
$lang['stix0037']         = "Адрес сервера (IP : Порт)";
$lang['stix0038']         = "Защищен паролем";
$lang['stix0039']         = "Нет (Публичный сервер)";
$lang['stix0040']         = "Да (Приватный сервер)";
$lang['stix0041']         = "ID сервера";
$lang['stix0042']         = "Серверная платформа";
$lang['stix0043']         = "Версия сервера";
$lang['stix0044']         = "Дата создания (dd/mm/yyyy)";
$lang['stix0045']         = "Видимость в глобал. списке";
$lang['stix0046']         = "Отображается";
$lang['stix0047']         = "Не отображается";
$lang['stix0048']         = "Нет информации...";
$lang['stix0049']         = "Общий накопленный онлайн за месяц";
$lang['stix0050']         = "Общий накопленный онлайн за неделю";
$lang['stix0051']         = "Ошибка при получении даты";
$lang['stmy0001']         = "Моя статистика";
$lang['stmy0002']         = "Ранг";
$lang['stmy0003']         = "ID в базе данных:";
$lang['stmy0004']         = "Уникальный ID(UID):";
$lang['stmy0005']         = "Всего подключений к серверу:";
$lang['stmy0006']         = "Занесён в базу статистики";
$lang['stmy0007']         = "Проведенное время на сервере:";
$lang['stmy0008']         = "Онлайн за 7 дней:";
$lang['stmy0009']         = "Онлайн за 30 дней:";
$lang['stmy0010']         = "Получено достижений:";
$lang['stmy0011']         = "Достижение за онлайн на сервере";
$lang['stmy0012']         = "Уровень: Легенда";
$lang['stmy0013']         = "Вы провели в онлайне на сервере %s часа(ов).";
$lang['stmy0014']         = "Полностью выполнена вся цепочка";
$lang['stmy0015']         = "Уровень: Золото";
$lang['stmy0016']         = "% завершено до получения уровня \"Легенда\"";
$lang['stmy0017']         = "Уровень: Серебро";
$lang['stmy0018']         = "% завершено до получения уровня \"Золото\"";
$lang['stmy0019']         = "Уровень: Бронза";
$lang['stmy0020']         = "% завершено до получения уровня \"Серебро\"";
$lang['stmy0021']         = "Уровень: Без достижений";
$lang['stmy0022']         = "% завершено до получения уровня \"Бронза\"";
$lang['stmy0023']         = "Достижение за количество подключений";
$lang['stmy0024']         = "Уровень: Легенда";
$lang['stmy0025']         = "Всего ваших подключений к серверу: %s раз.";
$lang['stmy0026']         = "Уровень: Золото";
$lang['stmy0027']         = "Уровень: Серебро";
$lang['stmy0028']         = "Уровень: Бронза";
$lang['stmy0029']         = "Уровень: Без достижений";
$lang['stmy0030']         = "Прогресс до следующего ранга на сервере";
$lang['stnv0001']         = "Наши новости";
$lang['stnv0002']         = "Закрыть";
$lang['stnv0003']         = "Обновление информации о клиенте";
$lang['stnv0004']         = "Используйте это, если хотите чтобы обновилась информация о вас. К примеру, вы зашли под другим аккаунтом на сервер TeamSpeak и хотите увидеть его статистику.";
$lang['stnv0005']         = "Это работает только если вы подключены к серверу TeamSpeak в данный момент.";
$lang['stnv0006']         = "Обновить";
$lang['stnv0007']         = "Battle area - Содержимое";
$lang['stnv0008']         = "Вы можете создать состязание между двумя пользователями или командами.";
$lang['stnv0009']         = "Во время \"Битвы\" подсчитывается время, проведенное на сервере у обеих команд или игроков.";
$lang['stnv0010']         = "Для победы необходимо набрать больше времени в онлайне, чем команда противника.";
$lang['stnv0011']         = "(Продолжительность \"Битвы\" - 48 часов)";
$lang['stnv0012']         = "Команда победителей получает приз, который пользователь может затем использовать.";
$lang['stnv0013']         = "Полученный приз будет отображаться в вкладке<a href=\"my_stats.php\">Моя статистика</a>.";
$lang['stnv0014']         = "(Это может быть множитель времени(2x) на 8 часов или же бонус, в виде прибавки к основному времени (4 часа), и т.д.";
$lang['stnv0015']         = "Также, \"множители времени\" можно использовать для поднятия себя в рейтинге пользователей за неделю/месяц";
$lang['stnv0016']         = "Недоступно";
$lang['stnv0017']         = "Для доступа к этим данным необходимо, чтобы вы подключились к серверу TeamSpeak";
$lang['stnv0018']         = "Пожалуйста, подключитесь к TeamSpeak серверу и обновите вашу сессию, путём нажатия синей кнопки в верхнем правом углу браузера.";
$lang['stnv0019']         = "Статистика сервера - содержимое";
$lang['stnv0020']         = "Эта страница содержит информацию о вашей статистике и активности на сервере.";
$lang['stnv0021']         = "Большинство этой информации было собрано с момента начального старта системы RankSystem, никак не с момента первого запуска TeamSpeak сервера.";
$lang['stnv0022']         = "Данная информация получена из базы данных RankSystem и может отличаться от той, которая хранится в базе данных TeamSpeak.";
$lang['stnv0023']         = "К тому же, информация внутри диаграмм может расходиться с реальными цифрами из базы данных TeamSpeak 3. Это связано с тем, что старые версии RankSystem не собирали часть той информации, которая используется сейчас.";
$lang['stnv0024']         = "RankSystem — статистика TeamSpeak 3 сервера";
$lang['stnv0025']         = "Ограничение списка";
$lang['stnv0026']         = "Все";
$lang['stnv0027']         = "Информация на сайте может быть устаревшей! Кажется,\"система рангов\" больше не подключена к TeamSpeak 3 серверу. Потеряно соединение?";
$lang['stnv0028']         = "(Вы не подключены к TS3!)";
$lang['stnv0029']         = "Общая статистика";
$lang['stnv0030']         = "О RankSystem";
$lang['stnv0031']         = "Поиск также поддерживает шаблоны: никнейм пользователя, уникальный ID(UID) и ID клиента в базе данных.";
$lang['stnv0032']         = "Вы также можете использовать фильтр запроса (смотрите ниже). Для этого введите его в поисковое поле.";
$lang['stnv0033']         = "Также допустимы комбинации шаблонов и фильтров. Для этого введите первым фильтр, за ним без пробелов шаблон.";
$lang['stnv0034']         = "Это позволяет комбинировать множество фильтров, вводить которые необходимо последовательно.";
$lang['stnv0035']         = "<u>Пример:</u><br>filter:nonexcepted:TeamSpeakUser";
$lang['stnv0036']         = "Показывать только клиентов находящихся в исключении (клиентов, групп сервера или исключение канала).";
$lang['stnv0037']         = "Показывать только клиентов не находящихся в исключении клиентов";
$lang['stnv0038']         = "Показывать только клиентов находящихся в онлайне";
$lang['stnv0039']         = "Показывать только клиентов не находящихся в онлайне";
$lang['stnv0040']         = "Показывать только клиентов в указанных группах, она же - выборка юзеров по рангам<br>Замените <i>GROUPID</i> на желаемые ID группы ранга.";
$lang['stnv0041']         = "Показать клиентов, удовлетворяющих поисковому запросу по дате последнего посещения сервера.<br>Замените <i>OPERATOR</i> на '<' или '>' или '=' или '!='.<br>Также замените <i>TIME</i> на желаемую дату поиска в формате 'Y-m-d H-i'(год-месяц-день час-минута) (пример: 2016-06-18 20-25).<br>Более подробный пример запроса: filter:lastseen:<:2016-06-18 20-25:";
$lang['stnv0042']         = "Показывать только клиентов из указанной страны.<br>Замените <i>TS3-COUNTRY-CODE</i> на желаемый код страны.<br>Коды стран вы можете взять <a href=\"https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2\">Здесь(Википедия)</a>";
$lang['stri0001']         = "Информация о системе рангов";
$lang['stri0002']         = "Что такое TSN Ranksystem?";
$lang['stri0003']         = "Удобная система, позволяющая создать на сервере TeamSpeak 3 систему рангов-поощрений, основанную на времени, которое пользователи проводят на сервере. Ко всему прочему, она также занимается сбором информации о пользователях и последующим её отображением на сайте.";
$lang['stri0004']         = "Кто является её разработчиком?";
$lang['stri0005']         = "Когда была создана TSN Ranksystem?";
$lang['stri0006']         = "Альфа-релиз: 05/10/2014.";
$lang['stri0007']         = "Бета-релиз: 01/02/2015.";
$lang['stri0008']         = "Вы можете найти новую версию на сайте: <a href=\"http://ts-n.net/ranksystem.php\" target=\"_blank\">Ranksystem Website</a>.";
$lang['stri0009']         = "Как создавалась TSN Ranksystem?";
$lang['stri0010']         = "\"Система рангов\" разрабатывалась на языке";
$lang['stri0011']         = "При создании использовался следующий набор инструментов:";
$lang['stri0012']         = "Особая благодарность:";
$lang['stri0013']         = "<a href=\"http://nya-pw.ru/\" target=\"_blank\">sergey</a>, <a href=\"http://vk.com/akhachirov\" target=\"_blank\">Arselopster</a> & <a href=\"http://vk.com/zheez\" target=\"_blank\">DeviantUser</a> - За русскоязычный перевод текста.";
$lang['stri0014']         = "Bejamin Frost - За помощь в создании дизайна сайта с помощью Bootstrap.";
$lang['stri0015']         = "<a href=\"http://hydrake.eu/\" target=\"_blank\">ZanK</a> - За перевод интерфейса на итальянский.";
$lang['stri0016']         = "<a href=\"http://iraqgaming.net/\" target=\"_blank\">DeStRoYzR</a> & <a href=\"http://www.sagamer.net/\" target=\"_blank\">Jehad</a>  - для инициирования перевода на арабский язык";
$lang['stri0017']         = "<a href=\"http://whitecs.ro/\" target=\"_blank\">SakaLuX</a> - для инициирования перевода румынский";
$lang['sttw0001']         = "Рейтинг пользователей";
$lang['sttw0002']         = "Лучшие за неделю";
$lang['sttw0003']         = "Набрал %s часов онлайна";
$lang['sttw0004']         = "Топ-10 в графике(Разрыв между участниками)";
$lang['sttw0005']         = "Часов (Представляет собой 100 %)";
$lang['sttw0006']         = "%s часов (%s&#37;)";
$lang['sttw0007']         = "Участники топ-10 в сравнении";
$lang['sttw0008']         = "Топ-10 Vs остальные по времени онлайн";
$lang['sttw0009']         = "Топ-10 Vs остальные по активности";
$lang['sttw0010']         = "Tоп-10 Vs остальные по времени оффлайн";
$lang['sttw0011']         = "Топ-10 в графике";
$lang['sttw0012']         = "Остальные %s клиенты (в часах)";
$lang['sttw0013']         = "С %s Часами аквтиности";
$lang['sttm0001']         = "Лучшие за месяц";
$lang['stta0001']         = "Лучшие за все время";
$lang['upinf']            = "Доступна новая версия Ранг Системы; Сообщаю Клиентам на Сервере...";
$lang['upmsg']            = "\nЭй, доступна новая версия [B]Ранг Системы[/B]!\n\nТекущая версия: %s\n[B]новая версия: %s[/B]\n\nПожалуйста, посетите наш сайт [URL]http://ts-n.net/ranksystem.php[/URL] для получения более подробной информации.";
$lang['upsucc']           = "Обновление базы данных успешно выполнено.";
$lang['upuser']           = "Пользователь %s (Никнейм: %s; UID в базе данных: %s) получает новое количество (сумм. время подключения) из %s (активное время онлайна %s).";
$lang['upuserboost']      = "Пользователь %s (Никнейм: %s; UID в базе данных: %s) получает новое количество (сумм. время подключения) из %s (активное время онлайна %s) <b>[BOOST %sx]</b>.";
$lang['upusrerr']         = "Пользователь с уникальным ID %s не был найден (не правильно указан Уникальный ID или пользователь в настоящий момент не подключен к серверу Teamspeak)!";
$lang['upusrinf']         = "Пользователь %s был успешно информирован.";
$lang['user']             = "Логин";
$lang['wiaction']         = "Выполнить";
$lang['wiboost']          = "Бустер онлайна";
$lang['wiboostdesc']      = "Вы можете указать здесь ID групп сервера(Их необходимо создать на TeamSpeak сервере заранее), выступающие в роли множителя накапливаемого времени, которое получает пользователь за онлайн на сервере. Также вы должны указать на сколько должно умножаться время и период действия группы-множителя. Чем больше множитель времени, тем быстрее пользователь достигнет следующий ранг. По окончанию действия множителя, группа-множитель автоматически снимается с пользователя. Пример указания группы-множителя следующий: ID группы => множитель => время(В секундах). Если вы хотите сделать две такие группы, то просто разделите их между собой запятой.<br><br>Пример:<br>12=>2=>6000,13=>3=>2500,14=>5=>600<br><br>Из примера выше следует, что группа с ID 12 дает множитель времени х2 на 6000 секунд, а группа 13 имеет множитель х3 на 2500 секунд. 14 группа соответственно, имеет множитель х5 на 600 секунд.";
$lang['wibot1']				= "RankSystem был выключен. Более подробную информацию смотрите в логе ниже!";
$lang['wibot2']				= "RankSystem запущен. Более подробную информацию смотрите в логе ниже!";
$lang['wibot3']				= "RankSystem перезагружается. Более подробную информацию смотрите в логе ниже!";
$lang['wibot4']				= "Включить / Выключить бота RankSystem";
$lang['wibot5']				= "Запустить";
$lang['wibot6']				= "Остановить";
$lang['wibot7']				= "Перезапуститб";
$lang['wibot8']				= "Лог RankSystem:";
$lang['wibot9']				= "Заполните все обязательные поля перед запуском RankSystem!!";
$lang['wichdbid']         = "Client-database-ID reset";
$lang['wichdbiddesc']     = "Сбрасывает время онлайн пользователя, если его ID в базе данных клиента TeamSpeak изменился.<br><br>Пример:<br>Если пользователь удален из БД сервера TeamSpeak, то, новый ID в базе данных клиента будет записан со следующим подключением к серверу.";
$lang['wiconferr']        = "Есть ошибка в конфигурации Ranksystem. Пожалуйста, зайдите в Веб-Панель и проверьте настройки раздела 'Настройка Ранг Системы'. Особенно тщательно проверьте 'Ранги'!";
$lang['widaform']         = "Формат даты";
$lang['widaformdesc']     = "Выберите формат показа даты.<br><br>Пример:<br>%a дней, %h часов, %i минут, %s секунд";
$lang['widbcfgsuc']       = "Настройки Базы Данных успешно сохранены.";
$lang['widbcfgerr']       = "Ошибка сохранения настроек в базе данных! Ошибка подключения, проверьте на правильность настройки 'other/dbconfig.php'";
$lang['widelcld']         = "удаление пользователей";
$lang['widelcldgrp']      = "Обновить группы";
$lang['widelcldgrpdesc']  = "RankSystem хранит текущие группы рангов пользователей в своей базе данных и после того, как вы отредактируете этих пользователей, то пройдет некоторое время, прежде чем бот уберёт затронутых пользователей из их прежних групп ранга.<br>Однако, этой функцией вы можете принудительно запустить процесс обновления групп ранга у всех пользователей, которые в данный момент подключены к серверу.";
$lang['widelclddesc']     = "Удаление выбранных клиентов из базы данных RankSystem.<br><br>Клиент непосредственно на сервере Teamspeak не будет удален.";
$lang['widelsg']          = "Удалить их также из групп сервера";
$lang['widelsgdesc']      = "Выберите, если клиенты должны также быть удалены из последней заработанной ими группы-ранга.";
$lang['wideltime']        = "Время удаления";
$lang['wideltimedesc']    = "Очистка базы данных Ранг Системы от старых клиентов.<br>Введите время в секундах, достигнув которого, пользователь не будет удален из БД RankSystem.<br><br>0 - Удаление всех пользователей из БД RankSystem<br><br>При этом база данных пользователей на сервере TeamSpeak затронута не будет!";
$lang['wiexcid']		  = "Исключения каналов";
$lang['wiexciddesc']	  = "Через запятую должен будет указан список каналов, которые должна будет игнорировать система рангов<br><br>Находясь в этих каналах, пользователям не будет начислять время за онлайн на сервере. <br><br>Данную функция можно использовать к примеру, для AFK каналов.<br>При режиме 'активное время', эта функция становится бесполезной, т.к. в канале юзеру перестает вовсе начисляться время бездействия<br><br>Пользователи находящиеся в таких каналах, помечаются на этот период как 'исключение из списков RankSystem'. К тому же, данные пользователи перестают отображаться в 'stats/list_rankup.php' и становятся доступны только с фильтром поиска или с включенным отображением \"исключенных клиентов\"(Страница статистики - \"исключенный клиент\").";
$lang['wiexgrp']          = "Исключения сервер групп";
$lang['wiexgrpdesc']      = "Укажите через запятую ID групп сервера, которые будут игнорироваться Ранг Системой.<br>Если пользователь находится хоты бы в одной из этих групп, то Ранг Система будет игнорировать его.(Также не будет начислять онлайн)";
$lang['wiexuid']          = "Исключение для пользователей";
$lang['wiexuiddesc']      = "Укажите через запятую уникальные идентификаторы клиентов (UID), которых будет игнорировать Ранг Система(RankSystem) и им не будет засчитываться время, проведенное на сервере.<br>";
$lang['wigrptime']        = "Настройка рангов";
$lang['wigrptimedesc']    = "Укажите через какой промежуток времени, будут выдаваться группы сервера.<br><br>Время (в секундах)=>номер группы сервера(ServerGroupID)<br><br>К тому же, от выбранного режима будет зависеть.<br><br>Каждый параметр должен разделяться запятой.<br><br>Так же время должно быть указано по 'нарастающей'<br><br>Пример:<br>60=>9,120=>10,180=>11<br><br>По истечению 60 секунд пользователь получает сервер группу под SGID 9, по истечению еще 120 секунд пользователь получает сервер группу SGID 10, и так далее...";
$lang['wihladm']          = "Список пользователей (Admin-Mode)";
$lang['wihlcfg']          = "Настройка RankSystem";
$lang['wihldb']           = "Настройки Базы Данных";
$lang['wihlmsg']           = "Настройка оповещения";
$lang['wihlsty']          = "Отображение пользователей на странице статистики";
$lang['wihlts']           = "Настройка подключения к TeamSpeak";
$lang['wihlvs']           = "Прочие настройки";
$lang['wiignidle']        = "Игнорировать время бездействия";
$lang['wiignidledesc']    = "Задать период, в течение которого время бездействия будет игнорироваться.<br><br>Время бездействия - если клиент не выполняет каких-либо действий на сервере (=idle/бездействует), также время учитывается системой рангов. Только когда установленный лимит будет достигнут, система начнет подсчитывать время бездействия.<br><br>Эта функция работает только при включенном режиме 'Подсчитывать активное время'(при высчитывании группы-ранга, когда время бездействия вычитается из \"активного\" времени).<br><br>Использование этой функции оправдано в том случае, если пользователь \"слушает\" говорящих людей и при этом ему зачисляется \"время бездействия\", которое обнуляется при любом его действии. <br><br>0 = отключить данную функцию<br><br>Пример:<br>Игнорировать бездействие = 600 (секунд)<br>Клиенту 8 минут простоя не будут засчитаны системой рангов и оно будет ему засчитано как \"активное время\". Если пользователь находился 12 минут в бездействии при \"игнорировании бездействия\" в 10 минут, то ему будет зачислены только 2 минуты простоя.";
$lang['wilogout']         = "Выход";
$lang['wilog']            = "Папка логирования работы RankSystem";
$lang['wilogdesc']        = "Расположение логов Ranksystem на диске.<br><br>Пример:<br>/var/logs/ranksystem/<br><br>Убедитесь, что веб-пользователь имеет разрешение на редактирование этой папки/файлов(chmod).";
$lang['wimsgmsg']			= "Оповещение";
$lang['wimsgmsgdesc']        = "Задать сообщение, которое будет отправлено пользователю, при достижении высшего ранга.<br><br>Данное сообщение отправляется посредством личных сообщений на TeamSpeak 3 сервере. Текст поддерживает использование bb-кодов программы Teamspeak.<br>http://ts-n.net/lexicon.php?showid=97#lexindex<br><br>Кроме того, также поддерживаются следующие аргументы в сообщении:<br>%1\$s - дни<br>%2\$s - часы<br>%3\$s - минут<br>%4\$s - секунды<br><br>Пример:<br>Привет,\\nты достиг высший ранг, за время онлайн на сервере в течение %1\$s дней, %2\$s часов и %3\$s минут на нашем сервере.[B]Продолжай в том же духе![/B] ;-)";
$lang['wimsgusr']         = "Уведомление при повышении";
$lang['wimsgusrdesc']     = "Сообщение пользователю о повышение ранга.";
$lang['winav1']				= "TeamSpeak";
$lang['winav2']				= "База данных";
$lang['winav3']				= "Система";
$lang['winav4']				= "Прочее";
$lang['winav5']				= "Оповещения";
$lang['winav6']				= "Статистика";
$lang['winav7']				= "Администрирование";
$lang['winav8']				= "Запустить / Остановить бота";
$lang['winav9']				= "Доступно обновление!";
$lang['winav10']			= "Соединение с данным сайтом не защищено с помощью %s HTTPS%sЭто может повлечь за собой проблемы для вашей приватности и безопасности! %sДля использования HTTPS ваш веб-сервер должен поддерживать SSL-соединение.";
$lang['wiselcld']         = "Выбор клиентов";
$lang['wiselclddesc']     = "Выберите клиентов, путём ввода их последнего имени. В процессе ввода вы увидите подсказку<br>Для выбора нескольких пользователей нужно поставить запятую, которая поставится автоматически, после завершения ввода первого пользователя<br><br>После завершения ввода пользователей, выберите необходимое для них действие в селекторах ниже.";
$lang['wishcolas']        = "Текущая группа сервера";
$lang['wishcolasdesc']    = "Показ колонки 'Текущая группа сервера' в stats/list_rankup.php";
$lang['wishcolat']        = "Время активности";
$lang['wishcolatdesc']    = "Показ колонки 'Суммарное время активности' в stats/list_rankup.php";
$lang['wishcolcld']       = "Ник клиента";
$lang['wishcolclddesc']   = "Показ колонки 'Ник клиента' в stats/list_rankup.php";
$lang['wishcoldbid']      = "ID в Базе данных";
$lang['wishcoldbiddesc']  = "Показ колонки 'ID в Базе данных' в stats/list_rankup.php";
$lang['wishcolit']        = "Учитывать время простоя";
$lang['wishcolitdesc']    = "Показ колонки 'суммарное время простоя' в stats/list_rankup.php";
$lang['wishcolls']        = "Последний раз замечен";
$lang['wishcollsdesc']    = "Показ колонки 'Последний раз замечен' в stats/list_rankup.php";
$lang['wishcolnx']        = "Время до след. ранга";
$lang['wishcolnxdesc']    = "Показ колонки 'Следующий Ранг' в stats/list_rankup.php";
$lang['wishcolot']        = "Время подключения";
$lang['wishcolotdesc']    = "Показ колонки 'суммарное время подключения' в stats/list_rankup.php";
$lang['wishcolrg']        = "Ранг";
$lang['wishcolrgdesc']    = "Показ колонки 'Ранг' в stats/list_rankup.php";
$lang['wishcolsg']        = "Следующая сервер группа";
$lang['wishcolsgdesc']    = "Показ колонки 'следующая сервер группа' в stats/list_rankup.php";
$lang['wishcoluuid']      = "Client-ID";
$lang['wishcoluuiddesc']  = "Показ колонки 'уникальный ID клиента'(UID) в stats/list_rankup.php";
$lang['wishexcld']        = "Пользователи исключения";
$lang['wishexclddesc']    = "Показывать пользователей в list_rankup.php,<br>которые исключены и не участвуют в системе рангов.";
$lang['wishexgrp']        = "Группы исключения";
$lang['wishexgrpdesc']    = "Показывать пользователей в list_rankup.php, которые находятся в списке 'исключение клиента' и не должны учитываться RankSystem.";
$lang['wishhicld']        = "Пользователи с высшим рангом";
$lang['wishhiclddesc']    = "Показывать пользователей в list_rankup.php, который достиг высшего уровня в Ranksystem.";
$lang['wisupidle']        = "Режим";
$lang['wisupidledesc'] 	  = "Предоставлены два режима, от которых будет высчиваться ранг пользователей. 1) Время подключения(Общее время): Общее время подключения на сервере, складывается из \"Активного времени\" и \"времени бездействия\"(колонка 'Сумм. время подключения' в 'stats/list_rankup.php') 2) Активное время(Время активности): Время, которое пользователь не находился в бездействии.  Значение этого времени высчитывается путем вычитания \"времени бездействия из\" из \"Общего времени подключения на сервере\" (Колонка 'Сумм. время активности' в 'stats/list_rankup.php'). Не рекомендуется смена режима при уже отработавшем долгий срок старом, но допустимо.";
$lang['wisvconf']         = "Сохранить";
$lang['wisvsuc']          = "Изменения успешно сохранены!";
$lang['wisvres']		  = "Для принятия внесенных правок вам необходимо перезагрузить RankSystem!";
$lang['witime']           = "Часовой пояс";
$lang['witimedesc']       = "Выбрать часовой пояс, в котором находится сервер.";
$lang['wits3dch']         = "Канал по умолчанию";
$lang['wits3dchdesc']     = "При подключении на сервер, бот будет пытаться войти в этот канал и останется там.";
$lang['wits3host']        = "TS3 адрес хоста";
$lang['wits3hostdesc']    = "Адрес TeamSpeak 3 Сервера<br>(IP или DNS)";
$lang['wits3sm']  		  = "Замедленный режим";
$lang['wits3smdesc']  	  = "Замедленный режим позволяет предотвратить флуд query-командами на сервер, из-за которого RankSystem может получить временный бан со стороны TeamSpeak 3 сервера.<br><br>!!! Также это снижает нагрузку на ЦП и уменьшает расход трафика !!!<br><br>Однако, не включайте эту функцию, если нет в ней нужды, потому как с ней не работает очистка базы от неактивных пользователей. К тому же, замедленный режим значительно увеличивает время обработки разного рода процессов.";
$lang['wits3qnm']         = "Основн. ник бота";
$lang['wits3qnm2']        = "Запас. ник бота";
$lang['wits3qnm2desc']    = "Этот никнейм будет использоваться, если первый уже занят. Рекомендуется заполнить!";
$lang['wits3qnmdesc']     = "Никнейм, с которым будет авторизовываться Ранг система на сервере.<br>Убедитесь, что оно не занято кем-то другим.";
$lang['wits3querpw']      = "TS3 Query-Пароль";
$lang['wits3querpwdesc']  = "TeamSpeak 3 query-Пароль<br>Ваш пароль от query-пользователя.";
$lang['wits3querusr']     = "TS3 Query-Логин";
$lang['wits3querusrdesc'] = "TeamSpeak 3 query-Логин<br>По умолчанию: serveradmin<br>Конечно вы можете указать другой логин для Ranksystem.<br>Необходимые разрешения привилегий вы можете найти на:<br>http://ts-n.net/ranksystem.php";
$lang['wits3query']       = "TS3 Query-Порт";
$lang['wits3querydesc']   = "TeamSpeak 3 query-Порт<br>По умолчанию: 10011 (TCP)<br>Если порт изменен, то укажите его согласно настройкам из 'ts3server.ini'.";
$lang['wits3voice']       = "TS3 Voice-Порт";
$lang['wits3voicedesc']   = "TeamSpeak 3 voice-Порт<br>По умолчанию: 9987 (UDP)<br>Этот порт используется Teamspeak 3 клиентом для подключения к серверу.";
$lang['wiupcheck']        = "Проверка обновлений";
$lang['wiupcheckdesc']    = "Если проверка обновлений включена, то пользователь получит приватное сообщение, когда обновление доступно.";
$lang['wiuptime']         = "Интервал проверки";
$lang['wiuptimedesc']     = "Введите здесь через сколько секунд Ранг Система должна проверить наличие обновлений.<br>Внимание, после каждой проверки перечисленные пользователь получает уведомление. Если ни один из перечисленных пользователей не онлайн, Система Рангов будет пытаться уведомить пользователей при следующем сканировании.";
$lang['wiupuid']          = "Получатель обновлений";
$lang['wiupuiddesc']      = "Укажите через запятую уникальные ID(UID) клиентов, которые будут проинформированы о доступных обновлениях посредством приватного сообщения через TeamSpeak.";
$lang['wivlang']          = "Язык";
$lang['wivlangdesc']      = "Язык Ранг Системы<br><br>de - Deutsch<br>en - english<br>it - italiano<br>ru - Русский";
?>