<?php

/**
 * Russian (Russia) language pack
 * @package framework
 * @subpackage i18n
 */

i18n::include_locale_file(FRAMEWORK_DIR, 'en_US');

global $lang;

if(array_key_exists('ru_RU', $lang) && is_array($lang['ru_RU'])) {
	$lang['ru_RU'] = array_merge($lang['en_US'], $lang['ru_RU']);
} else {
	$lang['ru_RU'] = $lang['en_US'];
}

$lang['ru_RU']['AdvancedSearchForm']['ALLWORDS'] = 'Все слова';
$lang['ru_RU']['AdvancedSearchForm']['ATLEAST'] = 'Хотя бы одно слово';
$lang['ru_RU']['AdvancedSearchForm']['EXACT'] = 'Точная фраза';
$lang['ru_RU']['AdvancedSearchForm']['FROM'] = 'От';
$lang['ru_RU']['AdvancedSearchForm']['GO'] = 'Выполн.';
$lang['ru_RU']['AdvancedSearchForm']['LASTUPDATED'] = 'Последнее обновление';
$lang['ru_RU']['AdvancedSearchForm']['LASTUPDATEDHEADER'] = 'ПОСЛЕДНЕЕ ОБНОВЛЕНИЕ';
$lang['ru_RU']['AdvancedSearchForm']['PAGETITLE'] = 'Название страницы';
$lang['ru_RU']['AdvancedSearchForm']['RELEVANCE'] = 'Значимость';
$lang['ru_RU']['AdvancedSearchForm']['SEARCHBY'] = 'ИСКАТЬ ПО';
$lang['ru_RU']['AdvancedSearchForm']['SORTBY'] = 'СОРТИРОВАТЬ РЕЗУЛЬТАТЫ ПО';
$lang['ru_RU']['AdvancedSearchForm']['TO'] = 'До';
$lang['ru_RU']['AdvancedSearchForm']['WITHOUT'] = 'Без слов';
$lang['ru_RU']['BankAccountField']['VALIDATIONJS'] = 'Пожалуйста, введите действительный номер банка';
$lang['ru_RU']['BasicAuth']['ENTERINFO'] = 'Пожалуйста, введите имя пользователя и пароль.';
$lang['ru_RU']['BasicAuth']['ERRORNOTADMIN'] = 'Такой пользователь не является администратором.';
$lang['ru_RU']['BasicAuth']['ERRORNOTREC'] = 'Такое имя пользователя или пароль не существует';
$lang['ru_RU']['BBCodeParser']['ALIGNEMENT'] = 'Выравнивание';
$lang['ru_RU']['BBCodeParser']['ALIGNEMENTEXAMPLE'] = 'Выравнено по правому краю';
$lang['ru_RU']['BBCodeParser']['BOLD'] = 'Жирный текст';
$lang['ru_RU']['BBCodeParser']['BOLDEXAMPLE'] = 'Жирный';
$lang['ru_RU']['BBCodeParser']['CODE'] = 'Блок кода';
$lang['ru_RU']['BBCodeParser']['CODEDESCRIPTION'] = 'Блок неформатированного кода';
$lang['ru_RU']['BBCodeParser']['CODEEXAMPLE'] = 'Блок кода';
$lang['ru_RU']['BBCodeParser']['COLORED'] = 'Цветной текст';
$lang['ru_RU']['BBCodeParser']['COLOREDEXAMPLE'] = 'голубой текст';
$lang['ru_RU']['BBCodeParser']['EMAILLINK'] = 'Ссылка email';
$lang['ru_RU']['BBCodeParser']['EMAILLINKDESCRIPTION'] = 'Создать ссылку на этот email';
$lang['ru_RU']['BBCodeParser']['IMAGE'] = 'Изображение';
$lang['ru_RU']['BBCodeParser']['IMAGEDESCRIPTION'] = 'Показать изображ. в записи';
$lang['ru_RU']['BBCodeParser']['ITALIC'] = 'Курсив';
$lang['ru_RU']['BBCodeParser']['ITALICEXAMPLE'] = 'Курсив';
$lang['ru_RU']['BBCodeParser']['LINK'] = 'Сссылка с сайта';
$lang['ru_RU']['BBCodeParser']['LINKDESCRIPTION'] = 'Ссылка на другой сайт или URL';
$lang['ru_RU']['BBCodeParser']['STRUCK'] = 'Перечеркнутый текст';
$lang['ru_RU']['BBCodeParser']['STRUCKEXAMPLE'] = 'Перечеркнутый';
$lang['ru_RU']['BBCodeParser']['UNDERLINE'] = 'Подчеркнутый текст';
$lang['ru_RU']['BBCodeParser']['UNDERLINEEXAMPLE'] = 'Подчеркнутый';
$lang['ru_RU']['BBCodeParser']['UNORDERED'] = 'Ненумерованный список';
$lang['ru_RU']['BBCodeParser']['UNORDEREDDESCRIPTION'] = 'Ненумерованный список';
$lang['ru_RU']['BBCodeParser']['UNORDEREDEXAMPLE1'] = 'ненумерованный элемент 1';
$lang['ru_RU']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT1'] = 'Вы изменили свой пароль на';
$lang['ru_RU']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT2'] = 'Для того, чтобы войти, используйте сейчас следующие учетные данные:';
$lang['ru_RU']['ChangePasswordEmail.ss']['EMAIL'] = 'Email';
$lang['ru_RU']['ChangePasswordEmail.ss']['HELLO'] = 'Здравствуйте';
$lang['ru_RU']['ChangePasswordEmail.ss']['PASSWORD'] = 'Пароль';
$lang['ru_RU']['CMSMain']['DELETE'] = 'Удалить с тестового сайта';
$lang['ru_RU']['CMSMain']['DELETEFP'] = 'Удалить с опубликованного сайта';
$lang['ru_RU']['CMSMain']['RESTORE'] = 'Восстановить';
$lang['ru_RU']['CMSMain']['SAVE'] = 'Сохранить';
$lang['ru_RU']['ComplexTableField']['CLOSEPOPUP'] = 'Закрыть';
$lang['ru_RU']['ComplexTableField.ss']['ADDITEM'] = 'Добавить %s';
$lang['ru_RU']['ComplexTableField.ss']['CSVEXPORT'] = 'Экспорт в CSV';
$lang['ru_RU']['ComplexTableField.ss']['NOITEMSFOUND'] = 'Ничего не найдено';
$lang['ru_RU']['ComplexTableField.ss']['SORTASC'] = 'Сортировать по возрастанию';
$lang['ru_RU']['ComplexTableField.ss']['SORTDESC'] = 'Сортировать по убыванию';
$lang['ru_RU']['ComplexTableField']['SUCCESSADD'] = 'Добавлено %s %s %s';
$lang['ru_RU']['ComplexTableField']['SUCCESSEDIT'] = 'Сохранено %s %s %s';
$lang['ru_RU']['ComplexTableField_popup.ss']['NEXT'] = 'Следующ.';
$lang['ru_RU']['ComplexTableField_popup.ss']['PREVIOUS'] = 'Предыдущ.';
$lang['ru_RU']['CompositeDateField']['DAY'] = 'День';
$lang['ru_RU']['CompositeDateField']['DAYJS'] = 'день';
$lang['ru_RU']['CompositeDateField']['MONTH'] = 'Месяц';
$lang['ru_RU']['CompositeDateField']['MONTHJS'] = 'месяц';
$lang['ru_RU']['CompositeDateField']['VALIDATIONJS1'] = 'Пожалуйста, убедитесь, что вы установили';
$lang['ru_RU']['CompositeDateField']['VALIDATIONJS2'] = 'правильно.';
$lang['ru_RU']['CompositeDateField']['YEARJS'] = 'год';
$lang['ru_RU']['ConfirmedFormAction']['CONFIRMATION'] = 'Вы уверены?';
$lang['ru_RU']['ConfirmedPasswordField']['ATLEAST'] = 'Длина пароля должна быть не менее %s символов.';
$lang['ru_RU']['ConfirmedPasswordField']['BETWEEN'] = 'Длина пароля должна быть от %s до %s символов.';
$lang['ru_RU']['ConfirmedPasswordField']['HAVETOMATCH'] = 'Пароли должны совпадать.';
$lang['ru_RU']['ConfirmedPasswordField']['LEASTONE'] = 'Пароль должен содержать по крайней мере одну цифру и обну букву.';
$lang['ru_RU']['ConfirmedPasswordField']['MAXIMUM'] = 'Длина пароля должна быть не более %s символов.';
$lang['ru_RU']['ConfirmedPasswordField']['NOEMPTY'] = 'Пароли не могут быть пустыми.';
$lang['ru_RU']['ConfirmedPasswordField']['SHOWONCLICKTITLE'] = 'Изменить Пароль';
$lang['ru_RU']['ContentController']['DRAFT_SITE_ACCESS_RESTRICTION'] = 'Вы должны войти с паролем для Системы Управления (CMS), чтобы увидеть черновое или архивное содержимое. <a href="%s">Нажмите сюда, чтобы вернуться на опубликованный сайт.</a>';
$lang['ru_RU']['CreditCardField']['FIRST'] = 'первая';
$lang['ru_RU']['CreditCardField']['FOURTH'] = 'четвертая';
$lang['ru_RU']['CreditCardField']['SECOND'] = 'вторая';
$lang['ru_RU']['CreditCardField']['THIRD'] = 'третья';
$lang['ru_RU']['CreditCardField']['VALIDATIONJS1'] = 'Пожалуйста, убедитесь, что вы ввели ';
$lang['ru_RU']['CreditCardField']['VALIDATIONJS2'] = 'номер кредитной карты верно.';
$lang['ru_RU']['CurrencyField']['CURRENCYSYMBOL'] = '$';
$lang['ru_RU']['CurrencyField']['VALIDATIONJS'] = 'Введите верную денежную единицу.';
$lang['ru_RU']['DataObject']['PLURALNAME'] = 'Объекты';
$lang['ru_RU']['DataObject']['SINGULARNAME'] = 'Объект';
$lang['ru_RU']['Date']['DAY'] = 'день';
$lang['ru_RU']['Date']['DAYS'] = 'дней';
$lang['ru_RU']['Date']['HOUR'] = 'час';
$lang['ru_RU']['Date']['HOURS'] = 'час.';
$lang['ru_RU']['Date']['MIN'] = 'мин.';
$lang['ru_RU']['Date']['MINS'] = 'мин.';
$lang['ru_RU']['Date']['MONTH'] = 'месяц';
$lang['ru_RU']['Date']['MONTHS'] = 'месяца(ев)';
$lang['ru_RU']['Date']['SEC'] = 'сек.';
$lang['ru_RU']['Date']['SECS'] = 'сек.';
$lang['ru_RU']['Date']['TIMEDIFFAGO'] = '%s назад';
$lang['ru_RU']['Date']['TIMEDIFFAWAY'] = 'отсутствует %s';
$lang['ru_RU']['Date']['YEAR'] = 'год';
$lang['ru_RU']['Date']['YEARS'] = 'лет';
$lang['ru_RU']['DateField']['NOTSET'] = 'не установлено';
$lang['ru_RU']['DateField']['TODAY'] = 'сегодня';
$lang['ru_RU']['DateField']['VALIDATIONJS'] = 'Пожалуйста, введите верный формат даты (ДД/ММ/ГГГГ).';
$lang['ru_RU']['DateField']['VALIDDATEFORMAT'] = 'Пожалуйста, введите дату в верном формате (ДД/ММ/ГГГГ).';
$lang['ru_RU']['DMYDateField']['VALIDDATEFORMAT'] = 'Введите верный формат даты (ДД-ММ-ГГГГ).';
$lang['ru_RU']['DropdownField']['CHOOSE'] = '(Выберите)';
$lang['ru_RU']['EmailField']['VALIDATION'] = 'Пожалуйста, введите адрес email.';
$lang['ru_RU']['EmailField']['VALIDATIONJS'] = 'Пожалуйста, введите адрес email.';
$lang['ru_RU']['ErrorPage']['400'] = '400 - Плохой запрос';
$lang['ru_RU']['ErrorPage']['401'] = '401 - Неавторизован';
$lang['ru_RU']['ErrorPage']['403'] = '403 - Запрещено';
$lang['ru_RU']['ErrorPage']['404'] = '404 - Не найдено';
$lang['ru_RU']['ErrorPage']['405'] = '405 - Метод не поддерживается';
$lang['ru_RU']['ErrorPage']['406'] = '406 - Не приемлемо';
$lang['ru_RU']['ErrorPage']['407'] = '407 - Необходима авторизация прокси';
$lang['ru_RU']['ErrorPage']['408'] = '408 - Время ожидания истекло';
$lang['ru_RU']['ErrorPage']['409'] = '409 - Конфликт';
$lang['ru_RU']['ErrorPage']['410'] = '410 - Удален';
$lang['ru_RU']['ErrorPage']['411'] = '411 - Необходима длина';
$lang['ru_RU']['ErrorPage']['412'] = '412 - Условие «ложно»';
$lang['ru_RU']['ErrorPage']['413'] = '413 - Запрашиваемые данные слишком большие';
$lang['ru_RU']['ErrorPage']['414'] = '414 - Запрашиваемый URI слишком длинный';
$lang['ru_RU']['ErrorPage']['415'] = '415 - Неподдерживаемый тип данных';
$lang['ru_RU']['ErrorPage']['416'] = '416 - Запрашиваемый диапазон не достижим';
$lang['ru_RU']['ErrorPage']['417'] = '417 - Ожидаемое ошибочно';
$lang['ru_RU']['ErrorPage']['500'] = '500 - Внутренняя ошибка сервера';
$lang['ru_RU']['ErrorPage']['501'] = '501 - Невыполнимо';
$lang['ru_RU']['ErrorPage']['502'] = '502 - Плохой шлюз';
$lang['ru_RU']['ErrorPage']['503'] = '503 - Сервис недоступен';
$lang['ru_RU']['ErrorPage']['504'] = '504 - Шлюз не отвечает';
$lang['ru_RU']['ErrorPage']['505'] = '505 - Версия HTTP не поддерживается';
$lang['ru_RU']['ErrorPage']['CODE'] = 'Код ошибки';
$lang['ru_RU']['ErrorPage']['DEFAULTERRORPAGECONTENT'] = '<p>Извините, страница, к которой вы пытаетесь получить доступ, не существует.</p><p>Пожалуйста, проверьте правильность написания ссылки и попытайтесь снова.</p>';
$lang['ru_RU']['ErrorPage']['DEFAULTERRORPAGETITLE'] = 'Страница не найдена';
$lang['ru_RU']['ErrorPage']['PLURALNAME'] = 'Страница ошибки 404';
$lang['ru_RU']['ErrorPage']['SINGULARNAME'] = 'Страница ошибки 404';
$lang['ru_RU']['File']['Content'] = 'Содержание';
$lang['ru_RU']['File']['Filename'] = 'Имя файла';
$lang['ru_RU']['File']['INVALIDEXTENSION'] = 'Файлы с таким расширением недопустимы. Список разрешенных: %s.';
$lang['ru_RU']['File']['Name'] = 'Название';
$lang['ru_RU']['File']['NOFILESIZE'] = 'Размер файла 0 байт.';
$lang['ru_RU']['File']['PLURALNAME'] = 'Файлы';
$lang['ru_RU']['File']['SINGULARNAME'] = 'Файл';
$lang['ru_RU']['File']['Sort'] = 'Порядок сортировки';
$lang['ru_RU']['File']['Title'] = 'Заголовок';
$lang['ru_RU']['File']['TOOLARGE'] = 'Размер файла слишком велик, максимально допустимый размер %s';
$lang['ru_RU']['Folder']['CREATED'] = 'Первая загрузка';
$lang['ru_RU']['Folder']['DELETEUNUSEDTHUMBNAILS'] = 'Удалить неиспользуемые миниатюры';
$lang['ru_RU']['Folder']['DELSELECTED'] = 'Удалить выбранные файлы';
$lang['ru_RU']['Folder']['DETAILSTAB'] = 'Подробности';
$lang['ru_RU']['Folder']['FILENAME'] = 'Имя файла';
$lang['ru_RU']['Folder']['FILESTAB'] = 'Файлы';
$lang['ru_RU']['Folder']['LASTEDITED'] = 'Последнее обновление';
$lang['ru_RU']['Folder']['PLURALNAME'] = 'Файлы';
$lang['ru_RU']['Folder']['SINGULARNAME'] = 'Файл';
$lang['ru_RU']['Folder']['TITLE'] = 'Название';
$lang['ru_RU']['Folder']['TYPE'] = 'Тип';
$lang['ru_RU']['Folder']['UNUSEDFILESTAB'] = 'Неиспользуемые файлы';
$lang['ru_RU']['Folder']['UNUSEDFILESTITLE'] = 'Неиспользуемые файлы';
$lang['ru_RU']['Folder']['UNUSEDTHUMBNAILSTITLE'] = 'Неиспользуемые миниатюры';
$lang['ru_RU']['Folder']['UPLOADTAB'] = 'Загрузить';
$lang['ru_RU']['Folder']['URL'] = 'Ссылка';
$lang['ru_RU']['Folder']['VIEWASSET'] = 'Просмотр ресурса';
$lang['ru_RU']['Folder']['VIEWEDITASSET'] = 'Смотреть/Редакт. ресурсы';
$lang['ru_RU']['ForgotPasswordEmail.ss']['HELLO'] = 'Здравствуйте';
$lang['ru_RU']['ForgotPasswordEmail.ss']['TEXT1'] = 'Это ваша';
$lang['ru_RU']['ForgotPasswordEmail.ss']['TEXT2'] = 'ссылка переустановки пароля';
$lang['ru_RU']['ForgotPasswordEmail.ss']['TEXT3'] = 'для';
$lang['ru_RU']['Form']['DATENOTSET'] = '(Дата не установлена)';
$lang['ru_RU']['Form']['FIELDISREQUIRED'] = 'Поле %s является обязательным';
$lang['ru_RU']['Form']['LANGAOTHER'] = 'Другие языки';
$lang['ru_RU']['Form']['LANGAVAIL'] = 'Доступные языки';
$lang['ru_RU']['Form']['NOTSET'] = '(не установлено)';
$lang['ru_RU']['Form']['VALIDATIONALLDATEVALUES'] = 'Убедитесь, что вы установили все значения времени';
$lang['ru_RU']['Form']['VALIDATIONBANKACC'] = 'Пожалуйста введите верный банковский номер';
$lang['ru_RU']['Form']['VALIDATIONCREDITNUMBER'] = 'Пожалуйста, убедитесь, что номер карты %s введен Вами верно.';
$lang['ru_RU']['Form']['VALIDATIONFAILED'] = 'Проверка данных неудачна';
$lang['ru_RU']['Form']['VALIDATIONNOTUNIQUE'] = 'Введенное значение не уникально';
$lang['ru_RU']['Form']['VALIDATIONPASSWORDSDONTMATCH'] = 'Пароли не совпадают';
$lang['ru_RU']['Form']['VALIDATIONPASSWORDSNOTEMPTY'] = 'Пароли не могут быть пустыми';
$lang['ru_RU']['Form']['VALIDATIONSTRONGPASSWORD'] = 'Пароль должен содержать минимум одну цифру и один буквенно-числовой символ.';
$lang['ru_RU']['Form']['VALIDATOR'] = 'Валидатор';
$lang['ru_RU']['Form']['VALIDCURRENCY'] = 'Пожалуйста, введите верную валюту.';
$lang['ru_RU']['FormField']['NONE'] = 'не выбрано';
$lang['ru_RU']['Group']['Code'] = 'Код группы';
$lang['ru_RU']['Group']['Description'] = 'Описание';
$lang['ru_RU']['Group']['has_many_Permissions'] = 'Права групп пользователей';
$lang['ru_RU']['Group']['IPRestrictions'] = 'Ограничения по IP-адресам';
$lang['ru_RU']['Group']['Locked'] = 'Блокировано?';
$lang['ru_RU']['Group']['many_many_Members'] = 'Члены группы';
$lang['ru_RU']['Group']['Parent'] = 'Родительская группа';
$lang['ru_RU']['Group']['PLURALNAME'] = 'Группы';
$lang['ru_RU']['Group']['SINGULARNAME'] = 'Группа';
$lang['ru_RU']['Group']['Sort'] = 'Порядок сортировки';
$lang['ru_RU']['GSTNumberField']['VALIDATION'] = 'Пожалуйста, введите верный номер GST';
$lang['ru_RU']['GSTNumberField']['VALIDATIONJS'] = 'Пожалуйста, введите верный номер GST';
$lang['ru_RU']['HtmlEditorField']['ANCHOR'] = 'Вставить/Редактировать якорь';
$lang['ru_RU']['HtmlEditorField']['ANCHORVALUE'] = 'Якорь';
$lang['ru_RU']['HtmlEditorField']['BULLETLIST'] = 'Маркированный список';
$lang['ru_RU']['HtmlEditorField']['BUTTONALIGNCENTER'] = 'Ровнять по центру';
$lang['ru_RU']['HtmlEditorField']['BUTTONALIGNJUSTIFY'] = 'Выравнивание по ширине';
$lang['ru_RU']['HtmlEditorField']['BUTTONALIGNLEFT'] = 'Ровнять слева';
$lang['ru_RU']['HtmlEditorField']['BUTTONALIGNRIGHT'] = 'Ровнять справа';
$lang['ru_RU']['HtmlEditorField']['BUTTONBOLD'] = 'Полужирный (Ctrl+B)';
$lang['ru_RU']['HtmlEditorField']['BUTTONINSERTFLASH'] = 'Вставить Flash';
$lang['ru_RU']['HtmlEditorField']['BUTTONINSERTIMAGE'] = 'Вставить изображ.';
$lang['ru_RU']['HtmlEditorField']['BUTTONINSERTLINK'] = 'Вставить ссылку';
$lang['ru_RU']['HtmlEditorField']['BUTTONITALIC'] = 'Курсив (Ctrl+I)';
$lang['ru_RU']['HtmlEditorField']['BUTTONREMOVELINK'] = 'Удалить ссылку';
$lang['ru_RU']['HtmlEditorField']['BUTTONSTRIKE'] = 'Прочеркивание';
$lang['ru_RU']['HtmlEditorField']['BUTTONUNDERLINE'] = 'Почеркивание (Ctrl+U)';
$lang['ru_RU']['HtmlEditorField']['CHARMAP'] = 'Вставить символ';
$lang['ru_RU']['HtmlEditorField']['CLOSE'] = 'закрыть';
$lang['ru_RU']['HtmlEditorField']['COPY'] = 'Копировать (Ctrl+C)';
$lang['ru_RU']['HtmlEditorField']['CREATEFOLDER'] = 'создать папку';
$lang['ru_RU']['HtmlEditorField']['CSSCLASS'] = 'Выравнивание/Стиль';
$lang['ru_RU']['HtmlEditorField']['CSSCLASSCENTER'] = 'По центру без текста по бокам';
$lang['ru_RU']['HtmlEditorField']['CSSCLASSLEFT'] = 'Слева с обтеканием текста';
$lang['ru_RU']['HtmlEditorField']['CSSCLASSLEFTALONE'] = 'Независимо слева.';
$lang['ru_RU']['HtmlEditorField']['CSSCLASSRIGHT'] = 'Справа с обтеканием текста';
$lang['ru_RU']['HtmlEditorField']['CUT'] = 'Вырезать (Ctrl+X)';
$lang['ru_RU']['HtmlEditorField']['DELETECOL'] = 'Удалить столбец';
$lang['ru_RU']['HtmlEditorField']['DELETEROW'] = 'Удалить строку';
$lang['ru_RU']['HtmlEditorField']['EDITCODE'] = 'Редактировать код HTML';
$lang['ru_RU']['HtmlEditorField']['EMAIL'] = 'Адрес email';
$lang['ru_RU']['HtmlEditorField']['FILE'] = 'Файл';
$lang['ru_RU']['HtmlEditorField']['FLASH'] = 'Flash';
$lang['ru_RU']['HtmlEditorField']['FOLDER'] = 'Папка';
$lang['ru_RU']['HtmlEditorField']['FOLDERCANCEL'] = 'отменить';
$lang['ru_RU']['HtmlEditorField']['FORMATADDR'] = 'Адрес';
$lang['ru_RU']['HtmlEditorField']['FORMATH1'] = 'Заголовок 1';
$lang['ru_RU']['HtmlEditorField']['FORMATH2'] = 'Заголовок 2';
$lang['ru_RU']['HtmlEditorField']['FORMATH3'] = 'Заголовок 3';
$lang['ru_RU']['HtmlEditorField']['FORMATH4'] = 'Заголовок 4';
$lang['ru_RU']['HtmlEditorField']['FORMATH5'] = 'Заголовок 5';
$lang['ru_RU']['HtmlEditorField']['FORMATH6'] = 'Заголовок 6';
$lang['ru_RU']['HtmlEditorField']['FORMATP'] = 'Абзац';
$lang['ru_RU']['HtmlEditorField']['FORMATPRE'] = 'Преформатированный';
$lang['ru_RU']['HtmlEditorField']['HR'] = 'Горизонтальная линия';
$lang['ru_RU']['HtmlEditorField']['IMAGE'] = 'Изображение';
$lang['ru_RU']['HtmlEditorField']['IMAGEDIMENSIONS'] = 'Размеры';
$lang['ru_RU']['HtmlEditorField']['IMAGEHEIGHTPX'] = 'Высота';
$lang['ru_RU']['HtmlEditorField']['IMAGEWIDTHPX'] = 'Ширина';
$lang['ru_RU']['HtmlEditorField']['INDENT'] = 'Увеличить отступ';
$lang['ru_RU']['HtmlEditorField']['INSERTCOLAFTER'] = 'Вставить столбец справа';
$lang['ru_RU']['HtmlEditorField']['INSERTCOLBEF'] = 'Вставить столбец слева';
$lang['ru_RU']['HtmlEditorField']['INSERTROWAFTER'] = 'Вставить строку ниже';
$lang['ru_RU']['HtmlEditorField']['INSERTROWBEF'] = 'Вставить строку выше';
$lang['ru_RU']['HtmlEditorField']['INSERTTABLE'] = 'Вставить таблицу';
$lang['ru_RU']['HtmlEditorField']['LINK'] = 'Ссылка';
$lang['ru_RU']['HtmlEditorField']['LINKANCHOR'] = 'Якорь на этой странице';
$lang['ru_RU']['HtmlEditorField']['LINKDESCR'] = 'Описание ссылки';
$lang['ru_RU']['HtmlEditorField']['LINKEMAIL'] = 'Адрес email';
$lang['ru_RU']['HtmlEditorField']['LINKEXTERNAL'] = 'Другой сайт';
$lang['ru_RU']['HtmlEditorField']['LINKFILE'] = 'Скачивание файла';
$lang['ru_RU']['HtmlEditorField']['LINKINTERNAL'] = 'Страницу данного сайта';
$lang['ru_RU']['HtmlEditorField']['LINKOPENNEWWIN'] = 'Открыть ссылку в новом окне?';
$lang['ru_RU']['HtmlEditorField']['LINKTEXT'] = 'Текст ссылки';
$lang['ru_RU']['HtmlEditorField']['LINKTO'] = 'Ссылка на';
$lang['ru_RU']['HtmlEditorField']['OK'] = 'ок';
$lang['ru_RU']['HtmlEditorField']['OL'] = 'Нумерованый список';
$lang['ru_RU']['HtmlEditorField']['OUTDENT'] = 'Уменьшить отступ';
$lang['ru_RU']['HtmlEditorField']['PAGE'] = 'Страница';
$lang['ru_RU']['HtmlEditorField']['PASTE'] = 'Вставить (Ctrl+V)';
$lang['ru_RU']['HtmlEditorField']['PASTETEXT'] = 'Вставить неформатированный текст';
$lang['ru_RU']['HtmlEditorField']['PASTEWORD'] = 'Вставить из Word';
$lang['ru_RU']['HtmlEditorField']['REDO'] = 'Вернуть (Ctrl+Y)';
$lang['ru_RU']['HtmlEditorField']['SEARCHFILENAME'] = 'Искать по имени файла';
$lang['ru_RU']['HtmlEditorField']['SELECTALL'] = 'Выделить все (Ctrl+A)';
$lang['ru_RU']['HtmlEditorField']['UNDO'] = 'Отменить (Ctrl+Z)';
$lang['ru_RU']['HtmlEditorField']['UNLINK'] = 'Удалить гиперссылку';
$lang['ru_RU']['HtmlEditorField']['UPLOAD'] = 'загрузить';
$lang['ru_RU']['HtmlEditorField']['URL'] = 'URL';
$lang['ru_RU']['HtmlEditorField']['VISUALAID'] = 'Показать/Скрыть направляющие';
$lang['ru_RU']['Image']['PLURALNAME'] = 'Файлы';
$lang['ru_RU']['Image']['SINGULARNAME'] = 'Файл';
$lang['ru_RU']['Image_iframe.ss']['TITLE'] = 'Iframe загрузки изображений';
$lang['ru_RU']['LoginAttempt']['Email'] = 'Email';
$lang['ru_RU']['LoginAttempt']['IP'] = 'IP-адрес';
$lang['ru_RU']['LoginAttempt']['PLURALNAME'] = 'Попытка входа';
$lang['ru_RU']['LoginAttempt']['SINGULARNAME'] = 'Требуется авторизация';
$lang['ru_RU']['LoginAttempt']['Status'] = 'Статус';
$lang['ru_RU']['Member']['ADDRESS'] = 'Адрес';
$lang['ru_RU']['Member']['belongs_many_many_Groups'] = 'Группы';
$lang['ru_RU']['Member']['BUTTONCHANGEPASSWORD'] = 'Изменить пароль';
$lang['ru_RU']['Member']['BUTTONLOGIN'] = 'Войти';
$lang['ru_RU']['Member']['BUTTONLOGINOTHER'] = 'Войти под другим именем';
$lang['ru_RU']['Member']['BUTTONLOSTPASSWORD'] = 'Я забыл пароль';
$lang['ru_RU']['Member']['CONFIRMNEWPASSWORD'] = 'Подтвердить новый пароль';
$lang['ru_RU']['Member']['CONFIRMPASSWORD'] = 'Подтвердить пароль';
$lang['ru_RU']['Member']['CONTACTINFO'] = 'Контактная информация';
$lang['ru_RU']['Member']['db_LastVisited'] = 'Дата последнего видита';
$lang['ru_RU']['Member']['db_Locale'] = 'Локаль интерфейса';
$lang['ru_RU']['Member']['db_LockedOutUntil'] = 'Заблокировано до';
$lang['ru_RU']['Member']['db_NumVisit'] = 'Количество посещений';
$lang['ru_RU']['Member']['db_Password'] = 'Пароль';
$lang['ru_RU']['Member']['db_PasswordExpiry'] = 'Дата устаревания пароля';
$lang['ru_RU']['Member']['EMAIL'] = 'Email';
$lang['ru_RU']['Member']['EMAILSIGNUPINTRO1'] = 'Спасибо за регистрацию в качестве нового пользователя, ваши данные для дальнейшего использования указаны ниже.';
$lang['ru_RU']['Member']['EMAILSIGNUPINTRO2'] = 'Вы можете войти на сайт, используя параметры доступа, указанные ниже';
$lang['ru_RU']['Member']['EMAILSIGNUPSUBJECT'] = 'Спасибо за регистрацию';
$lang['ru_RU']['Member']['ENTEREMAIL'] = 'Введите email, чтобы получить ссылку на сброс пароля.';
$lang['ru_RU']['Member']['ERRORLOCKEDOUT'] = 'Ваша учетная запись временно заблокирована из-за слишком большого количества неудачных попыток авторизации. Пожалуйста, попытайтесь снова через 20 минут.';
$lang['ru_RU']['Member']['ERRORNEWPASSWORD'] = 'Вы ввели Ваш новый пароль по-разному, попробуйте снова';
$lang['ru_RU']['Member']['ERRORPASSWORDNOTMATCH'] = 'Введенный пароль неверен, попробуйте снова';
$lang['ru_RU']['Member']['ERRORWRONGCRED'] = 'Вероятно адрес email или пароль введены неверно. Попробуйте снова.';
$lang['ru_RU']['Member']['FIRSTNAME'] = 'Имя';
$lang['ru_RU']['Member']['GREETING'] = 'Добро пожаловать';
$lang['ru_RU']['Member']['INTERFACELANG'] = 'Язык интерфейса';
$lang['ru_RU']['Member']['LOGGEDINAS'] = 'Вы вошли как %s.';
$lang['ru_RU']['Member']['MOBILE'] = 'Мобильный';
$lang['ru_RU']['Member']['NAME'] = 'Имя';
$lang['ru_RU']['Member']['NEWPASSWORD'] = 'Новый пароль';
$lang['ru_RU']['Member']['PASSWORD'] = 'Пароль';
$lang['ru_RU']['Member']['PASSWORDCHANGED'] = 'Ваш пароль изменен, на Ваш email выслана копия.';
$lang['ru_RU']['Member']['PERSONALDETAILS'] = 'Личные данные';
$lang['ru_RU']['Member']['PHONE'] = 'Телефон';
$lang['ru_RU']['Member']['PLURALNAME'] = 'Члены группы';
$lang['ru_RU']['Member']['PROFILESAVESUCCESS'] = 'Сохранение прошло успешно';
$lang['ru_RU']['Member']['REMEMBERME'] = 'Запомнить меня?';
$lang['ru_RU']['Member']['SINGULARNAME'] = 'Член группы';
$lang['ru_RU']['Member']['SUBJECTPASSWORDCHANGED'] = 'Ваш пароль изменен';
$lang['ru_RU']['Member']['SUBJECTPASSWORDRESET'] = 'Ссылка для переустановки пароля';
$lang['ru_RU']['Member']['SURNAME'] = 'Фамилия';
$lang['ru_RU']['Member']['USERDETAILS'] = 'Данные пользователя';
$lang['ru_RU']['Member']['VALIDATIONMEMBEREXISTS'] = 'Этот адрес email уже зарегистрирован';
$lang['ru_RU']['Member']['WELCOMEBACK'] = 'С возвращением, %s';
$lang['ru_RU']['Member']['YOUROLDPASSWORD'] = 'Ваш прежний пароль';
$lang['ru_RU']['MemberAuthenticator']['TITLE'] = 'Email и Пароль';
$lang['ru_RU']['MemberPassword']['PLURALNAME'] = 'Пароли';
$lang['ru_RU']['MemberPassword']['SINGULARNAME'] = 'Пароль';
$lang['ru_RU']['MyEntity']['MyNamespace'] = 'Язык по умолчанию';
$lang['ru_RU']['MyNamespace']['MYENTITY'] = 'Всего %s штук';
$lang['ru_RU']['NullableField']['IsNullLabel'] = 'Недействительно';
$lang['ru_RU']['NumericField']['VALIDATION'] = '\'%s\' не является цифрой, в этом поле могут быть только цифры';
$lang['ru_RU']['NumericField']['VALIDATIONJS'] = 'не является числом, в этом поле допустимы только числа';
$lang['ru_RU']['Page']['PLURALNAME'] = 'Страницы';
$lang['ru_RU']['Page']['SINGULARNAME'] = 'Страница';
$lang['ru_RU']['Permission']['FULLADMINRIGHTS'] = 'Все права администратора';
$lang['ru_RU']['Permission']['PLURALNAME'] = 'Права доступа';
$lang['ru_RU']['Permission']['SINGULARNAME'] = 'Права';
$lang['ru_RU']['PhoneNumberField']['VALIDATION'] = 'Пожалуйста, введите верный номер телефона';
$lang['ru_RU']['RedirectorPage']['HASBEENSETUP'] = 'Страница перенаправления установлена без указания места перенаправления.';
$lang['ru_RU']['RedirectorPage']['HEADER'] = 'Эта страница будет перенаправлять пользователей на другую страницу';
$lang['ru_RU']['RedirectorPage']['OTHERURL'] = 'URL другого сайта';
$lang['ru_RU']['RedirectorPage']['PLURALNAME'] = 'Страница-редиректор';
$lang['ru_RU']['RedirectorPage']['REDIRECTTO'] = 'Перенаправлять на';
$lang['ru_RU']['RedirectorPage']['REDIRECTTOEXTERNAL'] = 'Другой сайт';
$lang['ru_RU']['RedirectorPage']['REDIRECTTOPAGE'] = 'Страницу Вашего сайта';
$lang['ru_RU']['RedirectorPage']['SINGULARNAME'] = 'Страница-редиректор';
$lang['ru_RU']['RedirectorPage']['YOURPAGE'] = 'Страница Вашего сайта';
$lang['ru_RU']['RelationComplexTableField.ss']['ADD'] = 'Добавить';
$lang['ru_RU']['RelationComplexTableField.ss']['CSVEXPORT'] = 'Экспорт в CSV';
$lang['ru_RU']['RelationComplexTableField.ss']['NOTFOUND'] = 'Ничего не найдено';
$lang['ru_RU']['SearchForm']['GO'] = 'Выполн.';
$lang['ru_RU']['SearchForm']['SEARCH'] = 'Поиск';
$lang['ru_RU']['Security']['ALREADYLOGGEDIN'] = 'У Вас нет доступа к этой странице. Если у вас имеется другая учетная запись, имеющая доступ к этой странице, введите ее данные ниже.';
$lang['ru_RU']['Security']['BUTTONSEND'] = 'Отправить мне ссылку переустановки пароля';
$lang['ru_RU']['Security']['CHANGEPASSWORDBELOW'] = 'Ниже Вы можете изменить свой пароль.';
$lang['ru_RU']['Security']['CHANGEPASSWORDHEADER'] = 'Измените свой пароль';
$lang['ru_RU']['Security']['EMAIL'] = 'Email:';
$lang['ru_RU']['Security']['ENCDISABLED1'] = 'Шифрование пароля отключено!';
$lang['ru_RU']['Security']['ENCDISABLED2'] = 'Для шифрования паролей измените настройки пароля, добавив';
$lang['ru_RU']['Security']['ENCDISABLED3'] = 'в mysite/_config.php';
$lang['ru_RU']['Security']['ENCRYPT'] = 'Шифрование всех паролей';
$lang['ru_RU']['Security']['ENCRYPTEDMEMBERS'] = 'Зашифрованные регистрационные данные участника &quot;';
$lang['ru_RU']['Security']['ENCRYPTWITH'] = 'Пароли будут зашифрованы с помощью алгоритма &quot;%s&quot;';
$lang['ru_RU']['Security']['ENCRYPTWITHOUTSALT'] = 'без добавления случайных символов для повышения безопасности.';
$lang['ru_RU']['Security']['ENCRYPTWITHSALT'] = 'с добавлением случайных символов для повышения безопасности.';
$lang['ru_RU']['Security']['ENTERNEWPASSWORD'] = 'Пожалуйста, введите новый пароль.';
$lang['ru_RU']['Security']['ERRORPASSWORDPERMISSION'] = 'Вы должны войти в систему, чтобы изменить Ваш пароль!';
$lang['ru_RU']['Security']['ID'] = 'ID:';
$lang['ru_RU']['Security']['IPADDRESSES'] = 'IP адреса';
$lang['ru_RU']['Security']['LOGGEDOUT'] = 'Вы вышли. Если Вы хотите войти снова, введите ваши учетные данные ниже.';
$lang['ru_RU']['Security']['LOGIN'] = 'Вход';
$lang['ru_RU']['Security']['LOSTPASSWORDHEADER'] = 'Восстановление пароля';
$lang['ru_RU']['Security']['NOTEPAGESECURED'] = 'Эта страница защищена. Пожалуйста, введите свои учетные данные для входа.';
$lang['ru_RU']['Security']['NOTERESETLINKINVALID'] = '<p>Ссылка сброса пароля неверна или срок её действия истек.</p><p>Вы можете <a href="%s">получить новую ссылку</a> или <a href="%s">войти в систему</a> и изменить свой пароль.</p>';
$lang['ru_RU']['Security']['NOTERESETPASSWORD'] = 'Введите Ваш адрес email, и Вам будет отправлена ссылка, по которой Вы сможете переустановить свой пароль';
$lang['ru_RU']['Security']['NOTHINGTOENCRYPT1'] = 'Нет паролей для шифрования';
$lang['ru_RU']['Security']['NOTHINGTOENCRYPT2'] = 'Нет участников с текстовыми паролями, пригодными для шифрования!';
$lang['ru_RU']['Security']['PASSWORDSENTHEADER'] = 'Ссылка для переустановки пароля отправлена для \'%s\'';
$lang['ru_RU']['Security']['PASSWORDSENTTEXT'] = 'Спасибо! Ссылка для переустановки пароля была отправлена для \'%s\'.';
$lang['ru_RU']['Security']['PERMFAILURE'] = 'Эта страница защищена, для доступа к ней требуются права администратора. Введите ниже свои регистрационные данные для доступа.';
$lang['ru_RU']['SecurityAdmin']['ADVANCEDONLY'] = 'Этот раздел только для опытных пользователей. Дополнительная информация на <a href="http://doc.silverstripe.com/doku.php?id=permissions:codes" target="_blank">этой странице</a>.';
$lang['ru_RU']['SecurityAdmin']['CODE'] = 'Код';
$lang['ru_RU']['SecurityAdmin']['GROUPNAME'] = 'Имя группы';
$lang['ru_RU']['SecurityAdmin']['IPADDRESSESHELP'] = '<p>Вы можете задать для этой группы диапазон разрешенных IP адресов. Введите каждый диапазон в отдельной строке. Диапазон может быть задан в одном из следующих 4-х форматов: <br />
203.96.152.12<br />
203.96.152/24<br />
203.96/16<br />
203/8<br /><br />Если вы введете один или несколько диапазонов IP адресов, то пользователи смогут быть участниками этой группы только в том случае, если они авторизуются с одного из разрешенных IP адресов. Это не препятствует общей авторизации на сайте, т.к. один и тот же пользователь может авторизоваться для доступа к разделам системы, для которых не установлены ограничения по IP адресам.';
$lang['ru_RU']['SecurityAdmin']['MEMBERS'] = 'Участники';
$lang['ru_RU']['SecurityAdmin']['OPTIONALID'] = 'Необязательный ID';
$lang['ru_RU']['SecurityAdmin']['PERMISSIONS'] = 'Права доступа';
$lang['ru_RU']['SecurityAdmin']['VIEWUSER'] = 'Просмотр пользователя';
$lang['ru_RU']['SimpleImageField']['NOUPLOAD'] = 'Не загружено ни одного изображения';
$lang['ru_RU']['SiteConfig']['TABACCESS'] = 'Доступ';
$lang['ru_RU']['SiteConfig']['TABMAIN'] = 'Главная';
$lang['ru_RU']['SiteTree']['ACCESSANYONE'] = 'Все';
$lang['ru_RU']['SiteTree']['ACCESSHEADER'] = 'Кто может просматривать эту страницу на моем сайте?';
$lang['ru_RU']['SiteTree']['ACCESSLOGGEDIN'] = 'Авторизованные пользователи';
$lang['ru_RU']['SiteTree']['ACCESSONLYTHESE'] = 'Только эти пользователи (выберите из списка)';
$lang['ru_RU']['SiteTree']['ADDEDTODRAFT'] = 'Добавлено к черновому сайту';
$lang['ru_RU']['SiteTree']['ALLOWCOMMENTS'] = 'Разрешить комментарии для этой страницы?';
$lang['ru_RU']['SiteTree']['APPEARSVIRTUALPAGES'] = 'Это содержимое также находится на виртуальных страницах в разделах %s.';
$lang['ru_RU']['SiteTree']['BUTTONCANCELDRAFT'] = 'Отменить изменения черновика';
$lang['ru_RU']['SiteTree']['BUTTONCANCELDRAFTDESC'] = 'Удалить черновик и вернуться к уже опубликованной странице';
$lang['ru_RU']['SiteTree']['BUTTONSAVEPUBLISH'] = 'Сохр. и опублик.';
$lang['ru_RU']['SiteTree']['BUTTONUNPUBLISH'] = 'Отмена публикации';
$lang['ru_RU']['SiteTree']['BUTTONUNPUBLISHDESC'] = 'Удалить эту страницу с опубликованного сайта';
$lang['ru_RU']['SiteTree']['CHANGETO'] = 'Изменить на &laquo;%s&raquo;';
$lang['ru_RU']['SiteTree']['Comments'] = 'Комментарии';
$lang['ru_RU']['SiteTree']['Content'] = 'Наполнение сайта';
$lang['ru_RU']['SiteTree']['DEFAULTABOUTCONTENT'] = '<p>Вы можете заполнить эту страницу собственным содержимым или удалить ее и создать новые страницы.<br /></p>';
$lang['ru_RU']['SiteTree']['DEFAULTABOUTTITLE'] = 'О нас';
$lang['ru_RU']['SiteTree']['DEFAULTCONTACTCONTENT'] = '<p>Вы можете заполнить эту страницу собственным содержимым или удалить ее и создать новые страницы.<br /></p>';
$lang['ru_RU']['SiteTree']['DEFAULTCONTACTTITLE'] = 'Контакты';
$lang['ru_RU']['SiteTree']['DEFAULTHOMECONTENT'] = '<p>Добро пожаловать в SilverStripe! Это главная страница по умолчанию. Вы можете редактировать ее в <a href="admin/">Системе Управления Содержимым</a>. Вы также можете обратиться к <a href="http://doc.silverstripe.com">документации для разработчиков</a> или начать с <a href="http://doc.silverstripe.com/doku.php?id=tutorials">учебных материалов.</a></p>';
$lang['ru_RU']['SiteTree']['DEFAULTHOMETITLE'] = 'Главная';
$lang['ru_RU']['SiteTree']['DependtPageColumnLinkType'] = 'Тип ссылки';
$lang['ru_RU']['SiteTree']['DependtPageColumnURL'] = 'URL';
$lang['ru_RU']['SiteTree']['EDITANYONE'] = 'Все у кого есть доступ к Системе (CMS)';
$lang['ru_RU']['SiteTree']['EDITHEADER'] = 'Кто может редактировать это в Системе (CMS)?';
$lang['ru_RU']['SiteTree']['EDITONLYTHESE'] = 'Только эти пользователи (выберите из списка)';
$lang['ru_RU']['SiteTree']['Editors'] = 'Группы редакторов';
$lang['ru_RU']['SiteTree']['HASBROKENLINKS'] = 'Эта страница содержит неверные ссылки.';
$lang['ru_RU']['SiteTree']['has_one_Parent'] = 'Родительская страница';
$lang['ru_RU']['SiteTree']['HOMEPAGEFORDOMAIN'] = 'Домен(ы)';
$lang['ru_RU']['SiteTree']['HomepageForDomain'] = 'Эта страница будет главной для домена';
$lang['ru_RU']['SiteTree']['HTMLEDITORTITLE'] = 'Содержимое';
$lang['ru_RU']['SiteTree']['INHERIT'] = 'Такие же как у родительской страницы';
$lang['ru_RU']['SiteTree']['many_many_BackLinkTracking'] = 'Отслеживание обратных ссылок';
$lang['ru_RU']['SiteTree']['many_many_ImageTracking'] = 'Отслеживание картинок';
$lang['ru_RU']['SiteTree']['many_many_LinkTracking'] = 'Отслеживание ссылок';
$lang['ru_RU']['SiteTree']['MENUTITLE'] = 'Метка в навигации';
$lang['ru_RU']['SiteTree']['METADESC'] = 'Описание';
$lang['ru_RU']['SiteTree']['METAEXTRA'] = 'Пользовательские мета-тэги';
$lang['ru_RU']['SiteTree']['METAHEADER'] = 'Мета-тэги для поисковых систем';
$lang['ru_RU']['SiteTree']['METAKEYWORDS'] = 'Ключевые слова';
$lang['ru_RU']['SiteTree']['METATITLE'] = 'Заголовок';
$lang['ru_RU']['SiteTree']['MODIFIEDONDRAFT'] = 'Изменено на черновом сайте';
$lang['ru_RU']['SiteTree']['NOTEUSEASHOMEPAGE'] = 'Использовать эту страницу в качестве домашней для следующих доменов: 
(несколько доменов разделяйте запятыми)';
$lang['ru_RU']['SiteTree']['PAGESLINKING'] = 'На эту страницу ссылаются следующие страницы:';
$lang['ru_RU']['SiteTree']['PAGETITLE'] = 'Название страницы';
$lang['ru_RU']['SiteTree']['PAGETYPE'] = 'Тип страницы';
$lang['ru_RU']['SiteTree']['PLURALNAME'] = 'Дерево сайта';
$lang['ru_RU']['SiteTree']['REMOVEDFROMDRAFT'] = 'Удалено с чернового сайта';
$lang['ru_RU']['SiteTree']['SHOWINMENUS'] = 'Показывать в меню?';
$lang['ru_RU']['SiteTree']['SHOWINSEARCH'] = 'Показывать в поиске?';
$lang['ru_RU']['SiteTree']['SINGULARNAME'] = 'Дерево сайта';
$lang['ru_RU']['SiteTree']['TABACCESS'] = 'Доступ';
$lang['ru_RU']['SiteTree']['TABBACKLINKS'] = 'Обратные ссылки';
$lang['ru_RU']['SiteTree']['TABBEHAVIOUR'] = 'Поведение';
$lang['ru_RU']['SiteTree']['TABCONTENT'] = 'Содержимое';
$lang['ru_RU']['SiteTree']['TABMAIN'] = 'Основное';
$lang['ru_RU']['SiteTree']['TABMETA'] = 'Мета-данные';
$lang['ru_RU']['SiteTree']['TABREPORTS'] = 'Отчеты';
$lang['ru_RU']['SiteTree']['ToDo'] = 'ТуДу-записи';
$lang['ru_RU']['SiteTree']['TODOHELP'] = '<p>Вы можете использовать это для отслеживания запланированных изменений в содержимом вашего сайта. Чтобы просмотреть все запланированные изменения на ваших страницах, откройте слева окно «Отчеты сайта» и выберите «Запланировано»</p>';
$lang['ru_RU']['SiteTree']['TOPLEVEL'] = 'Содержимое сайта (Верхний уровень)';
$lang['ru_RU']['SiteTree']['URL'] = 'URL';
$lang['ru_RU']['SiteTree']['URLSegment'] = 'Адрес страницы';
$lang['ru_RU']['SiteTree']['VALIDATIONURLSEGMENT1'] = 'Этот URL используется другой страницей. URL должен быть уникальным для каждой страницы';
$lang['ru_RU']['SiteTree']['VALIDATIONURLSEGMENT2'] = 'В адресе URL могут быть использованы только буквы, цифры и дефисы.';
$lang['ru_RU']['SiteTree']['Viewers'] = 'Группы чтения';
$lang['ru_RU']['TableField']['ISREQUIRED'] = 'В %s \'%s\' обязательно';
$lang['ru_RU']['TableField.ss']['ADD'] = 'Добавить новый ряд';
$lang['ru_RU']['TableField.ss']['CSVEXPORT'] = 'Экспортировать в CSV';
$lang['ru_RU']['TableListField']['CSVEXPORT'] = 'Экспорт в CSV';
$lang['ru_RU']['TableListField']['PRINT'] = 'Печать';
$lang['ru_RU']['TableListField_PageControls.ss']['DISPLAYING'] = 'Показано ';
$lang['ru_RU']['TableListField_PageControls.ss']['OF'] = 'из';
$lang['ru_RU']['TableListField_PageControls.ss']['TO'] = '-';
$lang['ru_RU']['TableListField_PageControls.ss']['VIEWFIRST'] = 'См. первое';
$lang['ru_RU']['TableListField_PageControls.ss']['VIEWLAST'] = 'См. последн.';
$lang['ru_RU']['TableListField_PageControls.ss']['VIEWNEXT'] = 'См. следующ.';
$lang['ru_RU']['TableListField_PageControls.ss']['VIEWPREVIOUS'] = 'См. предыдущ.';
$lang['ru_RU']['ToggleCompositeField.ss']['HIDE'] = 'Скрыть';
$lang['ru_RU']['ToggleCompositeField.ss']['SHOW'] = 'Показать';
$lang['ru_RU']['ToggleField']['LESS'] = 'меньше';
$lang['ru_RU']['ToggleField']['MORE'] = 'больше';
$lang['ru_RU']['Translatable']['CREATE'] = 'Создать новый перевод';
$lang['ru_RU']['Translatable']['CREATEBUTTON'] = 'Создать';
$lang['ru_RU']['Translatable']['EXISTING'] = 'Имеющиеся переводы:';
$lang['ru_RU']['Translatable']['NEWLANGUAGE'] = 'Новый язык';
$lang['ru_RU']['Translatable']['TRANSLATIONS'] = 'Переводы';
$lang['ru_RU']['TreeSelectorField']['CANCEL'] = 'отменить';
$lang['ru_RU']['TreeSelectorField']['SAVE'] = 'сохранить';
$lang['ru_RU']['Versioned']['has_many_Versions'] = 'Версии';
$lang['ru_RU']['VirtualPage']['CHOOSE'] = 'Выберите страницу, на которую ссылаетесь,';
$lang['ru_RU']['VirtualPage']['EDITCONTENT'] = 'Нажмите здесь для редактирования содержимого';
$lang['ru_RU']['VirtualPage']['HEADER'] = 'Это виртуальная страница';
$lang['ru_RU']['VirtualPage']['PLURALNAME'] = 'Виртуальная страница';
$lang['ru_RU']['VirtualPage']['SINGULARNAME'] = 'Виртуальная страница';
$lang['ru_RU']['Widget']['PLURALNAME'] = 'Виджеты';
$lang['ru_RU']['Widget']['SINGULARNAME'] = 'Виджет';
$lang['ru_RU']['WidgetArea']['PLURALNAME'] = 'Места для виджетов';
$lang['ru_RU']['WidgetArea']['SINGULARNAME'] = 'Место для виджета';

