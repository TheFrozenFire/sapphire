<?php

/**
 * Persian (Iran) language pack
 * @package sapphire
 * @subpackage i18n
 */

i18n::include_locale_file('sapphire', 'en_US');

global $lang;

if(array_key_exists('fa_IR', $lang) && is_array($lang['fa_IR'])) {
	$lang['fa_IR'] = array_merge($lang['en_US'], $lang['fa_IR']);
} else {
	$lang['fa_IR'] = $lang['en_US'];
}

$lang['fa_IR']['AdvancedSearchForm']['ALLWORDS'] = 'همه کلمات';
$lang['fa_IR']['AdvancedSearchForm']['FROM'] = 'از';
$lang['fa_IR']['AdvancedSearchForm']['GO'] = 'برو';
$lang['fa_IR']['AdvancedSearchForm']['LASTUPDATED'] = 'آخرین بروزرسانی';
$lang['fa_IR']['AdvancedSearchForm']['LASTUPDATEDHEADER'] = 'آخرین بروزرسانی';
$lang['fa_IR']['AdvancedSearchForm']['PAGETITLE'] = 'عنوان صفحه';
$lang['fa_IR']['AdvancedSearchForm']['TO'] = 'به';
$lang['fa_IR']['AssetAdmin']['CHOOSEFILE'] = 'انتخاب فایل';
$lang['fa_IR']['BBCodeParser']['ALIGNEMENT'] = 'جاگذاری';
$lang['fa_IR']['BBCodeParser']['ALIGNEMENTEXAMPLE'] = 'به راست';
$lang['fa_IR']['BBCodeParser']['BOLD'] = 'نوشته درست';
$lang['fa_IR']['BBCodeParser']['BOLDEXAMPLE'] = 'درست';
$lang['fa_IR']['BBCodeParser']['COLORED'] = 'نوشته رنگی';
$lang['fa_IR']['BBCodeParser']['COLOREDEXAMPLE'] = 'نوشته آبی';
$lang['fa_IR']['BBCodeParser']['EMAILLINK'] = 'پیوند ایمیل';
$lang['fa_IR']['BBCodeParser']['IMAGE'] = 'عکس';
$lang['fa_IR']['BBCodeParser']['ITALIC'] = 'نوشته گژ';
$lang['fa_IR']['BBCodeParser']['ITALICEXAMPLE'] = 'گژ';
$lang['fa_IR']['BBCodeParser']['LINK'] = 'پیوند تارگاه';
$lang['fa_IR']['BBCodeParser']['UNDERLINE'] = 'نوشته با زیرخط';
$lang['fa_IR']['BBCodeParser']['UNDERLINEEXAMPLE'] = 'زیرخط';
$lang['fa_IR']['Boolean']['ANY'] = 'هر';
$lang['fa_IR']['Boolean']['NO'] = 'نه';
$lang['fa_IR']['Boolean']['YES'] = 'آری';
$lang['fa_IR']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT1'] = 'شما گذرواژه تان را دگرگون کردید برای';
$lang['fa_IR']['ChangePasswordEmail.ss']['EMAIL'] = 'ايميل';
$lang['fa_IR']['ChangePasswordEmail.ss']['HELLO'] = 'درود';
$lang['fa_IR']['ChangePasswordEmail.ss']['PASSWORD'] = 'كلمه عبور';
$lang['fa_IR']['CheckboxField']['NO'] = 'نه';
$lang['fa_IR']['CheckboxField']['YES'] = 'آری';
$lang['fa_IR']['CMSMain']['DELETE'] = 'حذف کردن از پیشنویس سایت';
$lang['fa_IR']['CMSMain']['DELETEFP'] = 'حذف کردن از منتشر شده های سایت';
$lang['fa_IR']['CMSMain']['RESTORE'] = 'بازنشاندن';
$lang['fa_IR']['CMSMain']['SAVE'] = 'ذخیره';
$lang['fa_IR']['ComplexTableField']['CLOSEPOPUP'] = 'بستن چنجره';
$lang['fa_IR']['ComplexTableField.ss']['ADDITEM'] = 'افزودن';
$lang['fa_IR']['ComplexTableField']['SUCCESSADD'] = '%s %s %s اضافه شد';
$lang['fa_IR']['ComplexTableField']['SUCCESSEDIT'] = '%s %s %s ذخيره شد';
$lang['fa_IR']['CompositeDateField']['DAY'] = 'روز';
$lang['fa_IR']['CompositeDateField']['DAYJS'] = 'روز';
$lang['fa_IR']['CompositeDateField']['MONTH'] = 'ماه';
$lang['fa_IR']['CompositeDateField']['MONTHJS'] = 'ماه';
$lang['fa_IR']['CompositeDateField']['VALIDATIONJS2'] = 'صحیح';
$lang['fa_IR']['CompositeDateField']['YEARJS'] = 'سال';
$lang['fa_IR']['ConfirmedFormAction']['CONFIRMATION'] = 'آيا شما مطمئن هستيد؟';
$lang['fa_IR']['ConfirmedPasswordField']['HAVETOMATCH'] = 'گذرواژه‌ها باید همانند هم باشند.';
$lang['fa_IR']['ConfirmedPasswordField']['NOEMPTY'] = 'گذرواژه نمی‌تواند تهی باشد';
$lang['fa_IR']['ConfirmedPasswordField']['SHOWONCLICKTITLE'] = 'تغيير كلمه عبور';
$lang['fa_IR']['ContentController']['DRAFTSITE'] = 'تارگاه چرکنویس';
$lang['fa_IR']['CreditCardField']['FIRST'] = 'نخست';
$lang['fa_IR']['CreditCardField']['FOURTH'] = 'چهارم';
$lang['fa_IR']['CreditCardField']['SECOND'] = 'دوم';
$lang['fa_IR']['CreditCardField']['THIRD'] = 'سوم';
$lang['fa_IR']['DataObject']['PLURALNAME'] = 'داده های اشیاء';
$lang['fa_IR']['DataObject']['SINGULARNAME'] = 'داده اشیاء';
$lang['fa_IR']['Date']['DAY'] = 'روز';
$lang['fa_IR']['Date']['DAYS'] = 'روز';
$lang['fa_IR']['Date']['HOUR'] = 'ساعت';
$lang['fa_IR']['Date']['HOURS'] = 'ساعت';
$lang['fa_IR']['Date']['MIN'] = 'دقیقه';
$lang['fa_IR']['Date']['MINS'] = 'دقیقه';
$lang['fa_IR']['Date']['MONTH'] = 'ماه';
$lang['fa_IR']['Date']['MONTHS'] = 'ماه ها';
$lang['fa_IR']['Date']['SEC'] = 'ثانیه';
$lang['fa_IR']['Date']['SECS'] = 'ثانیه';
$lang['fa_IR']['Date']['TIMEDIFFAGO'] = '%s قبل';
$lang['fa_IR']['Date']['TIMEDIFFAWAY'] = '%s دور';
$lang['fa_IR']['Date']['YEAR'] = 'سال';
$lang['fa_IR']['Date']['YEARS'] = 'سال';
$lang['fa_IR']['DateField']['TODAY'] = 'امروز';
$lang['fa_IR']['DateField']['VALIDDATEFORMAT2'] = 'لطفا تاریخ را صحیح را وارد نمایید (%s)';
$lang['fa_IR']['DropdownField']['CHOOSE'] = '(گزینش)';
$lang['fa_IR']['EmailField']['VALIDATIONJS'] = 'لطفاً آدرس ایمیل خود را وارد کنید.';
$lang['fa_IR']['ErrorPage']['400'] = '400 - درخواست نادرست';
$lang['fa_IR']['ErrorPage']['401'] = '401 - بدون مجوز';
$lang['fa_IR']['ErrorPage']['404'] = '404 - یافت نشد';
$lang['fa_IR']['ErrorPage']['406'] = '406 - پذیرفتنی نیست';
$lang['fa_IR']['ErrorPage']['408'] = '408 - زمان درخواست گذشت';
$lang['fa_IR']['ErrorPage']['410'] = '410 - از دست رفت';
$lang['fa_IR']['ErrorPage']['412'] = '412 - پیش شرط درست نبود';
$lang['fa_IR']['ErrorPage']['502'] = '502 - درگاه نادرست';
$lang['fa_IR']['ErrorPage']['CODE'] = 'شماره ایراد';
$lang['fa_IR']['ErrorPage']['DEFAULTERRORPAGETITLE'] = 'برگ پیدا نشد';
$lang['fa_IR']['ErrorPage']['PLURALNAME'] = 'برگ ایرادات';
$lang['fa_IR']['ErrorPage']['SINGULARNAME'] = 'برگ ایرادات';
$lang['fa_IR']['File']['Content'] = 'محتوا';
$lang['fa_IR']['File']['Filename'] = 'نام پرونده';
$lang['fa_IR']['File']['INVALIDEXTENSION'] = 'گسترش مجاز نیست (درست: %s)';
$lang['fa_IR']['File']['Name'] = 'نام';
$lang['fa_IR']['File']['PLURALNAME'] = 'فايل ها';
$lang['fa_IR']['File']['SINGULARNAME'] = 'فايل';
$lang['fa_IR']['File']['Sort'] = 'ترتیب چیدن';
$lang['fa_IR']['File']['Title'] = 'عنوان';
$lang['fa_IR']['File']['TOOLARGE'] = 'پرونده بیش از اندازه بزرگ است، بیشترین اندازه ممکن %s است.';
$lang['fa_IR']['FileIFrameField']['NOSOURCE'] = 'لطفا محل یک فایل را جهت پیوست انتخاب کنید';
$lang['fa_IR']['Folder']['DELSELECTED'] = 'حذف پرونده های انتخاب شده';
$lang['fa_IR']['Folder']['DETAILSTAB'] = 'جزئیات';
$lang['fa_IR']['Folder']['FILENAME'] = 'نام پرونده';
$lang['fa_IR']['Folder']['FILESTAB'] = 'فایلها';
$lang['fa_IR']['Folder']['PLURALNAME'] = 'فايل ها';
$lang['fa_IR']['Folder']['SINGULARNAME'] = 'فايل';
$lang['fa_IR']['Folder']['TITLE'] = 'عنوان';
$lang['fa_IR']['Folder']['TYPE'] = 'نوع';
$lang['fa_IR']['Folder']['UPLOADTAB'] = 'بالاگذاری';
$lang['fa_IR']['Folder']['VIEWASSET'] = 'مشاهده دارایی';
$lang['fa_IR']['ForgotPasswordEmail.ss']['HELLO'] = 'درود';
$lang['fa_IR']['ForgotPasswordEmail.ss']['TEXT3'] = 'برای';
$lang['fa_IR']['Form']['FIELDISREQUIRED'] = '%s نیاز است.';
$lang['fa_IR']['Form']['LANGAOTHER'] = 'زبان های دیگر';
$lang['fa_IR']['Form']['LANGAVAIL'] = 'زبان های موجود';
$lang['fa_IR']['Form']['VALIDATIONPASSWORDSDONTMATCH'] = 'گذرواژه‌ها همانند هم نیستند';
$lang['fa_IR']['Form']['VALIDATIONPASSWORDSNOTEMPTY'] = 'گذرواژه نباید تهی باشد';
$lang['fa_IR']['FormField']['NONE'] = 'هیچ کدام';
$lang['fa_IR']['Group']['Code'] = 'كد گروه';
$lang['fa_IR']['Group']['DefaultGroupTitleAdministrators'] = 'مدیران کل';
$lang['fa_IR']['Group']['DefaultGroupTitleContentAuthors'] = 'نویسندگان مطالب';
$lang['fa_IR']['Group']['Description'] = 'توضحیات';
$lang['fa_IR']['Group']['has_many_Permissions'] = 'مجوز‌ها';
$lang['fa_IR']['Group']['IPRestrictions'] = 'آی پی های محدود شده';
$lang['fa_IR']['Group']['Locked'] = 'بسته شده است؟';
$lang['fa_IR']['Group']['many_many_Members'] = 'اعضاء';
$lang['fa_IR']['Group']['Parent'] = 'گروه مادر';
$lang['fa_IR']['Group']['PLURALNAME'] = 'گروه ';
$lang['fa_IR']['Group']['SINGULARNAME'] = 'گروه';
$lang['fa_IR']['Group']['Sort'] = 'تربیت چیدن';
$lang['fa_IR']['HtmlEditorField']['BULLETLIST'] = 'لیست';
$lang['fa_IR']['HtmlEditorField']['BUTTONALIGNJUSTIFY'] = 'سراسر';
$lang['fa_IR']['HtmlEditorField']['BUTTONALIGNRIGHT'] = 'به راست';
$lang['fa_IR']['HtmlEditorField']['BUTTONINSERTFLASH'] = 'گذاشتن فلش';
$lang['fa_IR']['HtmlEditorField']['BUTTONINSERTIMAGE'] = 'گذاشتن عکس';
$lang['fa_IR']['HtmlEditorField']['BUTTONINSERTLINK'] = 'گذاشتن پیوند';
$lang['fa_IR']['HtmlEditorField']['BUTTONREMOVELINK'] = 'برداشتن پیوند';
$lang['fa_IR']['HtmlEditorField']['CHARMAP'] = 'نماد گذاری';
$lang['fa_IR']['HtmlEditorField']['CLOSE'] = 'بسته شود';
$lang['fa_IR']['HtmlEditorField']['COPY'] = 'کپی (CTRL+C)';
$lang['fa_IR']['HtmlEditorField']['CREATEFOLDER'] = 'ساخت پوشه';
$lang['fa_IR']['HtmlEditorField']['CSSCLASS'] = 'جاگیری / الگو';
$lang['fa_IR']['HtmlEditorField']['CUT'] = 'بریدن (CTRL+X)';
$lang['fa_IR']['HtmlEditorField']['DELETEROW'] = 'حذف ردیف';
$lang['fa_IR']['HtmlEditorField']['EDITCODE'] = 'ویرایش HTML';
$lang['fa_IR']['HtmlEditorField']['EMAIL'] = 'پست الکترونیک';
$lang['fa_IR']['HtmlEditorField']['FILE'] = 'پرونده';
$lang['fa_IR']['HtmlEditorField']['FLASH'] = 'فلش';
$lang['fa_IR']['HtmlEditorField']['FOLDER'] = 'پوشه';
$lang['fa_IR']['HtmlEditorField']['FOLDERCANCEL'] = 'لغو';
$lang['fa_IR']['HtmlEditorField']['FORMATADDR'] = 'آدرس';
$lang['fa_IR']['HtmlEditorField']['FORMATH1'] = 'Heading 1';
$lang['fa_IR']['HtmlEditorField']['FORMATH2'] = 'Heading 2';
$lang['fa_IR']['HtmlEditorField']['FORMATH3'] = 'Heading 3';
$lang['fa_IR']['HtmlEditorField']['FORMATH4'] = 'Heading 4';
$lang['fa_IR']['HtmlEditorField']['FORMATH5'] = 'Heading 5';
$lang['fa_IR']['HtmlEditorField']['FORMATH6'] = 'Heading 6';
$lang['fa_IR']['HtmlEditorField']['FORMATP'] = 'پاراگراف';
$lang['fa_IR']['HtmlEditorField']['FORMATPRE'] = 'الگوگذاری شده';
$lang['fa_IR']['HtmlEditorField']['IMAGE'] = 'عکس';
$lang['fa_IR']['HtmlEditorField']['IMAGEHEIGHTPX'] = 'بلندی';
$lang['fa_IR']['HtmlEditorField']['IMAGEWIDTHPX'] = 'پهنا';
$lang['fa_IR']['HtmlEditorField']['INSERTTABLE'] = 'گذاشتن جدول';
$lang['fa_IR']['HtmlEditorField']['LINK'] = 'پیوند';
$lang['fa_IR']['HtmlEditorField']['LINKEMAIL'] = 'پست الکترونیک';
$lang['fa_IR']['HtmlEditorField']['LINKEXTERNAL'] = 'تارگاه دیگر';
$lang['fa_IR']['HtmlEditorField']['LINKFILE'] = 'یک پرونده را بارگزاری کنید';
$lang['fa_IR']['HtmlEditorField']['LINKINTERNAL'] = 'برگ در تارگاه';
$lang['fa_IR']['HtmlEditorField']['LINKOPENNEWWIN'] = 'در پنجره جدید باز شود ؟';
$lang['fa_IR']['HtmlEditorField']['LINKTEXT'] = 'متن لینک';
$lang['fa_IR']['HtmlEditorField']['LINKTO'] = 'پیوند به';
$lang['fa_IR']['HtmlEditorField']['OK'] = 'پذیرش';
$lang['fa_IR']['HtmlEditorField']['OL'] = 'لیست شماره دار';
$lang['fa_IR']['HtmlEditorField']['PAGE'] = 'برگ';
$lang['fa_IR']['HtmlEditorField']['PASTE'] = 'چسباندن (CTRL+V)';
$lang['fa_IR']['HtmlEditorField']['PASTETEXT'] = 'نوشته ساده چسبانده شود';
$lang['fa_IR']['HtmlEditorField']['PASTEWORD'] = 'نوشته از MS Word چسبانده شود';
$lang['fa_IR']['HtmlEditorField']['REDO'] = 'دوباره (CTRL+Y)';
$lang['fa_IR']['HtmlEditorField']['SEARCHFILENAME'] = 'جستجو با نام فایل';
$lang['fa_IR']['HtmlEditorField']['SELECTALL'] = 'انتخاب همه (Ctrl+A)';
$lang['fa_IR']['HtmlEditorField']['SHOWUPLOADFORM'] = 'آپلود فایل';
$lang['fa_IR']['HtmlEditorField']['UNDO'] = 'برگشت (CTRL+Z)';
$lang['fa_IR']['HtmlEditorField']['UNLINK'] = 'برداشتن پیوند';
$lang['fa_IR']['HtmlEditorField']['UPLOAD'] = 'بارگیری';
$lang['fa_IR']['HtmlEditorField']['URL'] = 'نشانی';
$lang['fa_IR']['Image']['PLURALNAME'] = 'پرونده‌ها';
$lang['fa_IR']['Image']['SINGULARNAME'] = 'پرونده';
$lang['fa_IR']['Image_Cached']['PLURALNAME'] = 'پرونده‌ها';
$lang['fa_IR']['Image_Cached']['SINGULARNAME'] = 'پرونده';
$lang['fa_IR']['LoginAttempt']['Email'] = 'آدرس های ایمیل';
$lang['fa_IR']['LoginAttempt']['PLURALNAME'] = 'تلاش‌ برای ورود';
$lang['fa_IR']['LoginAttempt']['SINGULARNAME'] = 'تلاش برای ورود';
$lang['fa_IR']['Member']['ADDRESS'] = 'نشانی';
$lang['fa_IR']['Member']['belongs_many_many_Groups'] = 'گروه‌ها';
$lang['fa_IR']['Member']['BUTTONCHANGEPASSWORD'] = 'تغییر رمز عبور';
$lang['fa_IR']['Member']['BUTTONLOGIN'] = 'ورود';
$lang['fa_IR']['Member']['CONFIRMNEWPASSWORD'] = 'تکرار رمز عبور جدید';
$lang['fa_IR']['Member']['CONFIRMPASSWORD'] = 'تکرار رمز عبور';
$lang['fa_IR']['Member']['db_LockedOutUntil'] = 'بسته شده تا ';
$lang['fa_IR']['Member']['db_PasswordExpiry'] = 'تاریخ از میان رفتن گذرواژه';
$lang['fa_IR']['Member']['DefaultAdminFirstname'] = 'مدیر پیشفرض';
$lang['fa_IR']['Member']['EMAIL'] = 'پست الکترونیک';
$lang['fa_IR']['Member']['EMAILSIGNUPSUBJECT'] = 'از ثبت نام شما سپاس گزاریم';
$lang['fa_IR']['Member']['EMPTYNEWPASSWORD'] = 'رمز عبور جدید نمیتواند خالی باشد، لطفا دوباره تلاش کنید';
$lang['fa_IR']['Member']['FIRSTNAME'] = 'نام';
$lang['fa_IR']['Member']['GREETING'] = 'خوش آمدید';
$lang['fa_IR']['Member']['INTERFACELANG'] = 'زبان برنامه';
$lang['fa_IR']['Member']['INVALIDNEWPASSWORD'] = 'ما نمیتوانیم پسورد شما را قبول کنیم: %s';
$lang['fa_IR']['Member']['MOBILE'] = 'موبایل';
$lang['fa_IR']['Member']['NAME'] = 'نام';
$lang['fa_IR']['Member']['NEWPASSWORD'] = 'گذرواژه تازه';
$lang['fa_IR']['Member']['PASSWORD'] = 'رمز عبور';
$lang['fa_IR']['Member']['PERSONALDETAILS'] = 'شناسنامه فردی';
$lang['fa_IR']['Member']['PHONE'] = 'تلفن';
$lang['fa_IR']['Member']['PLURALNAME'] = 'اعضاء';
$lang['fa_IR']['Member']['SINGULARNAME'] = 'عضو';
$lang['fa_IR']['Member']['SUBJECTPASSWORDCHANGED'] = 'گذرواژه شما دگرگون شد';
$lang['fa_IR']['Member']['SUBJECTPASSWORDRESET'] = 'پیوند ازنوسازی گذرواژه شما';
$lang['fa_IR']['Member']['SURNAME'] = 'نام خانوادگی';
$lang['fa_IR']['Member']['USERDETAILS'] = 'شناسنامه کاربر';
$lang['fa_IR']['Member']['YOUROLDPASSWORD'] = 'رمز عبور قدیمی';
$lang['fa_IR']['MemberPassword']['PLURALNAME'] = 'گذرواژه‌های اعضاء';
$lang['fa_IR']['MemberPassword']['SINGULARNAME'] = 'گذرواژه عضو';
$lang['fa_IR']['NullableField']['IsNullLabel'] = 'خالی است';
$lang['fa_IR']['Page']['PLURALNAME'] = 'برگ‌ها';
$lang['fa_IR']['Page']['SINGULARNAME'] = 'صفحه';
$lang['fa_IR']['Permission']['AdminGroup'] = 'مدیر کل';
$lang['fa_IR']['Permission']['FULLADMINRIGHTS'] = 'توانایی‌های کامل مدیریتی:';
$lang['fa_IR']['Permission']['PLURALNAME'] = 'مجوزها';
$lang['fa_IR']['Permission']['SINGULARNAME'] = 'مجوز';
$lang['fa_IR']['PermissionCheckboxSetField']['AssignedTo'] = 'مجوز %s';
$lang['fa_IR']['Permissions']['CONTENT_CATEGORY'] = 'دسترسی محتوا';
$lang['fa_IR']['Permissions']['PERMISSIONS_CATEGORY'] = 'مجوز دسترسی ها و وظایف';
$lang['fa_IR']['PhoneNumberField']['VALIDATION'] = 'لطفاً شماره تلفن معتبر وارد کنید';
$lang['fa_IR']['QueuedEmail']['PLURALNAME'] = 'ایمیل در نوبت';
$lang['fa_IR']['QueuedEmail']['SINGULARNAME'] = 'ایمیل در نوبت';
$lang['fa_IR']['RedirectorPage']['OTHERURL'] = 'نشانی تارگاه دیگر';
$lang['fa_IR']['RedirectorPage']['PLURALNAME'] = 'برگ بازگردان';
$lang['fa_IR']['RedirectorPage']['REDIRECTTO'] = 'بازگردانی به';
$lang['fa_IR']['RedirectorPage']['REDIRECTTOEXTERNAL'] = 'یک تارگاه دیگر';
$lang['fa_IR']['RedirectorPage']['REDIRECTTOPAGE'] = 'یک برگ روی تارگاه شما';
$lang['fa_IR']['RedirectorPage']['SINGULARNAME'] = 'برگ بازگردان';
$lang['fa_IR']['RedirectorPage']['YOURPAGE'] = 'برگ روی تارگاه شما';
$lang['fa_IR']['RelationComplexTableField.ss']['ADD'] = 'افزودن';
$lang['fa_IR']['RelationComplexTableField.ss']['NOTFOUND'] = 'چیزی یافت نشد';
$lang['fa_IR']['SearchForm']['GO'] = 'برو';
$lang['fa_IR']['SearchForm']['SEARCH'] = 'جستجو';
$lang['fa_IR']['SearchForm']['SearchResults'] = 'نتایج جستجو';
$lang['fa_IR']['Security']['ALREADYLOGGEDIN'] = 'شما به این صفحه دسترسی ندارید. اگر حساب کاربری دیگری دارید که به این صفحه دسترسی دارد، شما میتوانید <a href="%s">دوباره وارد شوید.</a>.';
$lang['fa_IR']['Security']['EMAIL'] = 'ایمیل:';
$lang['fa_IR']['Security']['ENCDISABLED1'] = 'رمزگذاری گذرواژه ناکارآ شده است!';
$lang['fa_IR']['Security']['ENCDISABLED2'] = 'برای رمزگذاری گذرواژه خود، گزینه‌های گذرواژه را دگرگون کنید با افزودن';
$lang['fa_IR']['Security']['ENCRYPT'] = 'رمزگذاری همه گذرواژه‌ها';
$lang['fa_IR']['Security']['ID'] = 'شناسه:';
$lang['fa_IR']['Security']['IPADDRESSES'] = 'نشانی‌های IP';
$lang['fa_IR']['Security']['LOGIN'] = 'ورود';
$lang['fa_IR']['Security']['NOTHINGTOENCRYPT1'] = 'گذرواژه ای برای رمزگذاری نیست';
$lang['fa_IR']['SecurityAdmin']['ADVANCEDONLY'] = 'این بخش برای کاربران حرفه ای است.
این برگ را <a href="http://doc.silverstripe.com/doku.php?id=permissions:codes" target="_blank">بخوانید</a>
تا بیشتر بدانید.';
$lang['fa_IR']['SecurityAdmin']['CODE'] = 'کد';
$lang['fa_IR']['SecurityAdmin']['MEMBERS'] = 'کاربران';
$lang['fa_IR']['SecurityAdmin']['NEWGROUPPREFIX'] = 'new-';
$lang['fa_IR']['SecurityAdmin']['OPTIONALID'] = 'شناسه دلخواه';
$lang['fa_IR']['SecurityAdmin']['ROLES'] = 'وظایف';
$lang['fa_IR']['SecurityAdmin']['VIEWUSER'] = 'نمایش کاربر';
$lang['fa_IR']['SiteConfig']['DEFAULTTHEME'] = '(استفاده از پوسته پیشفرض)';
$lang['fa_IR']['SiteConfig']['EDITHEADER'] = 'چه کسی میتواند صفحات را در این سایت ویرایش کند؟';
$lang['fa_IR']['SiteConfig']['EDIT_PERMISSION'] = 'مدیریت پیکربندی سایت';
$lang['fa_IR']['SiteConfig']['PLURALNAME'] = 'تنظیمات سایت';
$lang['fa_IR']['SiteConfig']['SINGULARNAME'] = 'تنظیم سایت';
$lang['fa_IR']['SiteConfig']['SITENAMEDEFAULT'] = 'نام سایت شما';
$lang['fa_IR']['SiteConfig']['SITETITLE'] = 'عنوان سایت';
$lang['fa_IR']['SiteConfig']['TABACCESS'] = 'دسترسی';
$lang['fa_IR']['SiteConfig']['TABMAIN'] = 'اصلی';
$lang['fa_IR']['SiteConfig']['THEME'] = 'پوسته';
$lang['fa_IR']['SiteConfig']['TOPLEVELCREATE'] = 'چه کسی میتواند صفحه جدیدی در ریشه(root) سایت ایجاد کند؟';
$lang['fa_IR']['SiteConfig']['VIEWHEADER'] = 'چه کسی میتواند صفحات سایت را مشاهده کند؟';
$lang['fa_IR']['SiteTree']['ACCESSANYONE'] = 'همه';
$lang['fa_IR']['SiteTree']['ACCESSHEADER'] = 'چه کسی بتواند این صفحه را مشاهده کنید ؟';
$lang['fa_IR']['SiteTree']['ACCESSLOGGEDIN'] = 'کاربران وارد شده';
$lang['fa_IR']['SiteTree']['ACCESSONLYTHESE'] = 'فقط این افراد (انتخاب از لیست)';
$lang['fa_IR']['SiteTree']['ALLOWCOMMENTS'] = 'پذیرفتن نظرات در این صفحه ؟';
$lang['fa_IR']['SiteTree']['BUTTONSAVEPUBLISH'] = 'ذخیره و انتشار';
$lang['fa_IR']['SiteTree']['CHANGETO'] = 'تغییر به ';
$lang['fa_IR']['SiteTree']['Content'] = 'درون مایه';
$lang['fa_IR']['SiteTree']['DEFAULTCONTACTTITLE'] = 'تماس با ما';
$lang['fa_IR']['SiteTree']['DEFAULTHOMETITLE'] = 'خانه';
$lang['fa_IR']['SiteTree']['DEPENDENT_NOTE'] = 'صفحات زیر وابسته به این صفحه هستند. شامل صفحات مجازی، انتقال دهنده و صفحاتی با محتوای لینک';
$lang['fa_IR']['SiteTree']['DependtPageColumnURL'] = 'نشانی اینترنتی';
$lang['fa_IR']['SiteTree']['EDITANYONE'] = 'هر کسی بتواند به سیستم مدیریت محتوا وارد شود';
$lang['fa_IR']['SiteTree']['EDITHEADER'] = 'چه کسی بتواند این صفحه را ویرایش کند ؟';
$lang['fa_IR']['SiteTree']['EDITONLYTHESE'] = 'فقط این افراد (انتخاب از لیست)';
$lang['fa_IR']['SiteTree']['has_one_Parent'] = 'برگ مادر';
$lang['fa_IR']['SiteTree']['HOMEPAGEFORDOMAIN'] = 'دامنه(ها)';
$lang['fa_IR']['SiteTree']['HTMLEDITORTITLE'] = 'درون‌مایه';
$lang['fa_IR']['SiteTree']['PAGELOCATION'] = 'موقعیت صفحه';
$lang['fa_IR']['SiteTree']['PAGETITLE'] = 'نام برگ';
$lang['fa_IR']['SiteTree']['PAGETYPE'] = 'نوع برگ';
$lang['fa_IR']['SiteTree']['PARENTID'] = 'برگ مادر';
$lang['fa_IR']['SiteTree']['PARENTTYPE'] = 'جایگاه برگ';
$lang['fa_IR']['SiteTree']['PLURALNAME'] = 'لینک های سایت';
$lang['fa_IR']['SiteTree']['REMOVEDFROMDRAFT'] = 'حذف از پیش نویس سایت';
$lang['fa_IR']['SiteTree']['SHOWINSEARCH'] = 'نمایش در جستجو ؟';
$lang['fa_IR']['SiteTree']['SINGULARNAME'] = 'لینک سایت';
$lang['fa_IR']['SiteTree']['TABACCESS'] = 'دسترسی';
$lang['fa_IR']['SiteTree']['TABCONTENT'] = 'مطلب';
$lang['fa_IR']['SiteTree']['TABMAIN'] = 'اصلی';
$lang['fa_IR']['SiteTree']['TABREPORTS'] = 'گزارشات';
$lang['fa_IR']['SiteTree']['URL'] = 'نشانی';
$lang['fa_IR']['SiteTree']['URLSegment'] = 'بخش آدرس URL';
$lang['fa_IR']['SiteTree']['VIEW_DRAFT_CONTENT'] = 'مشاهده محتوای پیشنویس';
$lang['fa_IR']['TableField.ss']['ADD'] = 'افزودن ردیف تازه';
$lang['fa_IR']['TableListField']['PRINT'] = 'چاپ';
$lang['fa_IR']['TableListField']['SELECT'] = 'انتخاب';
$lang['fa_IR']['TableListField_PageControls.ss']['DISPLAYING'] = 'نمایش';
$lang['fa_IR']['TableListField_PageControls.ss']['OF'] = 'از';
$lang['fa_IR']['TableListField_PageControls.ss']['TO'] = 'به';
$lang['fa_IR']['TableListField_PageControls.ss']['VIEWFIRST'] = 'نشان دادن نخست';
$lang['fa_IR']['TableListField_PageControls.ss']['VIEWLAST'] = 'نشان دادن پایان';
$lang['fa_IR']['TableListField_PageControls.ss']['VIEWNEXT'] = 'نشان دادن پسین';
$lang['fa_IR']['TableListField_PageControls.ss']['VIEWPREVIOUS'] = 'نشان دادن پیشین';
$lang['fa_IR']['TimeField']['VALIDATEFORMAT'] = 'لطفا قالب زمان را صحیح وارد کنید (%s)';
$lang['fa_IR']['ToggleCompositeField.ss']['HIDE'] = 'نهان';
$lang['fa_IR']['ToggleCompositeField.ss']['SHOW'] = 'آشکار';
$lang['fa_IR']['ToggleField']['MORE'] = 'بیشتر';
$lang['fa_IR']['Translatable']['CREATE'] = 'ساخت ترجمه جدید';
$lang['fa_IR']['Translatable']['CREATEBUTTON'] = 'ایجاد';
$lang['fa_IR']['Translatable']['EXISTING'] = 'ترجمه های فعلی:';
$lang['fa_IR']['Translatable']['NEWLANGUAGE'] = 'زبان جدید';
$lang['fa_IR']['Translatable']['TRANSLATEALLPERMISSION'] = 'ترجمه به همه زبان های موجود';
$lang['fa_IR']['Translatable']['TRANSLATEPERMISSION'] = 'ترجمه %s';
$lang['fa_IR']['Translatable']['TRANSLATIONS'] = 'ترجمه ها';
$lang['fa_IR']['TreeSelectorField']['CANCEL'] = 'لغو';
$lang['fa_IR']['TreeSelectorField']['SAVE'] = 'نگاهداری';
$lang['fa_IR']['Versioned']['has_many_Versions'] = 'نسخه ها';
$lang['fa_IR']['VirtualPage']['HEADER'] = 'این یک صفحه مجازی است';
$lang['fa_IR']['VirtualPage']['PLURALNAME'] = 'صفحه های مجازی';
$lang['fa_IR']['VirtualPage']['SINGULARNAME'] = 'صفحه مجازی';
$lang['fa_IR']['Widget']['PLURALNAME'] = 'ابزارک';
$lang['fa_IR']['Widget']['SINGULARNAME'] = 'ابزارک';
$lang['fa_IR']['WidgetArea']['PLURALNAME'] = 'بخش ابزارک';
$lang['fa_IR']['WidgetArea']['SINGULARNAME'] = 'بخش ابزارک';

?>