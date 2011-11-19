<?php

/**
 * Hebrew (Israel) language pack
 * @package framework
 * @subpackage i18n
 */

i18n::include_locale_file(FRAMEWORK_DIR, 'en_US');

global $lang;

if(array_key_exists('he_IL', $lang) && is_array($lang['he_IL'])) {
	$lang['he_IL'] = array_merge($lang['en_US'], $lang['he_IL']);
} else {
	$lang['he_IL'] = $lang['en_US'];
}

$lang['he_IL']['BasicAuth']['ENTERINFO'] = 'נא הכנס שם משתמש וסיסמא';
$lang['he_IL']['BasicAuth']['ERRORNOTADMIN'] = 'משתמש זה אינו מנהל';
$lang['he_IL']['BasicAuth']['ERRORNOTREC'] = 'שם המשתמש / סיסמא לא מזוהה';
$lang['he_IL']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT1'] = 'שינית את הסיסמא עבור';
$lang['he_IL']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT2'] = 'כעת אתה יכול להשתמש בפרטים הבאים בכדי להתחבר:';
$lang['he_IL']['ChangePasswordEmail.ss']['HELLO'] = 'היי';
$lang['he_IL']['CMSMain']['SAVE'] = 'שמור';
$lang['he_IL']['ComplexTableField.ss']['ADDITEM'] = 'הוסף';
$lang['he_IL']['ComplexTableField.ss']['NOITEMSFOUND'] = 'לא נמצאו פריטים';
$lang['he_IL']['ComplexTableField.ss']['SORTASC'] = 'סדר בסדר עולה';
$lang['he_IL']['ComplexTableField.ss']['SORTDESC'] = 'סדר בסדר יורד';
$lang['he_IL']['ComplexTableField_popup.ss']['NEXT'] = 'הבא';
$lang['he_IL']['ComplexTableField_popup.ss']['PREVIOUS'] = 'הקודם';
$lang['he_IL']['ConfirmedFormAction']['CONFIRMATION'] = 'האם את/ה בטוח/ה?';
$lang['he_IL']['ConfirmedPasswordField']['SHOWONCLICKTITLE'] = 'שינוי סיסמה';
$lang['he_IL']['ContentController']['DRAFT_SITE_ACCESS_RESTRICTION'] = 'עליך להכנס עם סיסמת המערכת בכדי לצפות בדף טיוטה או בתוכן שמור. <a href="%s">לחזרה לאתר לחץ כאן</a>';
$lang['he_IL']['DataObject']['PLURALNAME'] = 'אובייקטי מידע';
$lang['he_IL']['DataObject']['SINGULARNAME'] = 'אובייקט מידע';
$lang['he_IL']['Date']['DAY'] = 'יום';
$lang['he_IL']['Date']['DAYS'] = 'ימים';
$lang['he_IL']['Date']['HOUR'] = 'שעה';
$lang['he_IL']['Date']['HOURS'] = 'שעות';
$lang['he_IL']['Date']['MIN'] = 'דקה';
$lang['he_IL']['Date']['MINS'] = 'דקות';
$lang['he_IL']['Date']['MONTH'] = 'חודש';
$lang['he_IL']['Date']['MONTHS'] = 'חודשים';
$lang['he_IL']['Date']['SEC'] = 'שניה';
$lang['he_IL']['Date']['SECS'] = 'שניות';
$lang['he_IL']['Date']['TIMEDIFFAGO'] = 'לפני %s';
$lang['he_IL']['Date']['TIMEDIFFAWAY'] = 'הפרש של %s';
$lang['he_IL']['Date']['YEAR'] = 'שנה';
$lang['he_IL']['Date']['YEARS'] = 'שנים';
$lang['he_IL']['DateField']['VALIDDATEFORMAT'] = 'נא הכנס תאריך תקין  (DD/MM/YYYY).
';
$lang['he_IL']['DropdownField']['CHOOSE'] = '(בחר)';
$lang['he_IL']['EmailField']['VALIDATION'] = 'נא הכנס כתובת דואר אלקטרוני.';
$lang['he_IL']['ErrorPage']['400'] = '400 - בקשה שגויה';
$lang['he_IL']['ErrorPage']['401'] = '401 - לא מורשה';
$lang['he_IL']['ErrorPage']['403'] = '403 - אין כניסה';
$lang['he_IL']['ErrorPage']['404'] = '404 - לא נמצא';
$lang['he_IL']['ErrorPage']['405'] = '405 - Method Not Allowed';
$lang['he_IL']['ErrorPage']['406'] = '406 - Not Acceptable';
$lang['he_IL']['ErrorPage']['407'] = '407 - דרוש זיהוי פרוקסי';
$lang['he_IL']['ErrorPage']['408'] = '408 - Request Timeout';
$lang['he_IL']['ErrorPage']['409'] = '409 - Conflict';
$lang['he_IL']['ErrorPage']['410'] = '410 - Gone';
$lang['he_IL']['ErrorPage']['411'] = '411 - Length Required';
$lang['he_IL']['ErrorPage']['412'] = '412 - Precondition Failed';
$lang['he_IL']['ErrorPage']['413'] = '413 - Request Entity Too Large';
$lang['he_IL']['ErrorPage']['414'] = '414 - Request-URI Too Long';
$lang['he_IL']['ErrorPage']['415'] = '415 - Unsupported Media Type';
$lang['he_IL']['ErrorPage']['416'] = '416 - Request Range Not Satisfiable';
$lang['he_IL']['ErrorPage']['417'] = '417 - Expectation Failed';
$lang['he_IL']['ErrorPage']['500'] = '500 - Internal Server Error';
$lang['he_IL']['ErrorPage']['CODE'] = 'הודעת שגיאה';
$lang['he_IL']['ErrorPage']['DEFAULTERRORPAGECONTENT'] = '<p>מצטערים, נראה שהדף שניסית להגיע אליו אינו קיים</p><p>אנא בדוק את הכתובת המבוקשת ונסה שנית</p>';
$lang['he_IL']['ErrorPage']['DEFAULTERRORPAGETITLE'] = 'הדף המבוקש לא נמצא';
$lang['he_IL']['ErrorPage']['PLURALNAME'] = 'דפי שגיאה';
$lang['he_IL']['ErrorPage']['SINGULARNAME'] = 'דף שגיאה';
$lang['he_IL']['File']['INVALIDEXTENSION'] = 'הרחבה לא מאושרת';
$lang['he_IL']['File']['PLURALNAME'] = 'קבצים';
$lang['he_IL']['File']['SINGULARNAME'] = 'קובץ';
$lang['he_IL']['File']['TOOLARGE'] = 'הקובץ גדול מדי, גודל מקסימום להעלאה: %s';
$lang['he_IL']['Folder']['PLURALNAME'] = 'קבצים';
$lang['he_IL']['Folder']['SINGULARNAME'] = 'קובץ';
$lang['he_IL']['ForgotPasswordEmail.ss']['HELLO'] = 'היי';
$lang['he_IL']['Form']['DATENOTSET'] = '(תאריך לא מוגדר)';
$lang['he_IL']['Form']['FIELDISREQUIRED'] = 'דרוש %s';
$lang['he_IL']['Form']['LANGAOTHER'] = 'שפות אחרות';
$lang['he_IL']['Form']['LANGAVAIL'] = 'שפות לבחריה';
$lang['he_IL']['Form']['NOTSET'] = '(לא מוגדר)';
$lang['he_IL']['Form']['VALIDATIONALLDATEVALUES'] = 'נא וודא שהכנסת את כל ערכי התאריך';
$lang['he_IL']['Form']['VALIDATIONCREDITNUMBER'] = 'נא וודא שהקשת את %s כרטיס האשראי בצורה תקינה.';
$lang['he_IL']['Form']['VALIDATIONFAILED'] = 'אימות נכשל';
$lang['he_IL']['Form']['VALIDATIONNOTUNIQUE'] = 'הערך שהוקש אינו יחודי';
$lang['he_IL']['Form']['VALIDATIONPASSWORDSDONTMATCH'] = 'הסיסמאות לא תואמות';
$lang['he_IL']['Form']['VALIDATIONPASSWORDSNOTEMPTY'] = 'הסיסמאות לא יכול להיות ריקות';
$lang['he_IL']['Form']['VALIDATIONSTRONGPASSWORD'] = 'הסיסמאות צריכות להכיל לפחות ספרה אחת ואות אחת';
$lang['he_IL']['Form']['VALIDCURRENCY'] = 'נא הכנס מטבע תקין.';
$lang['he_IL']['Group']['Code'] = 'קוד קבוצה';
$lang['he_IL']['Group']['has_many_Permissions'] = 'הרשאות';
$lang['he_IL']['Group']['Locked'] = 'נעול?';
$lang['he_IL']['Group']['many_many_Members'] = 'חברים רשומים';
$lang['he_IL']['Group']['Parent'] = 'קבוצת אב';
$lang['he_IL']['Group']['PLURALNAME'] = 'קבוצות';
$lang['he_IL']['Group']['SINGULARNAME'] = 'קבוצה';
$lang['he_IL']['GSTNumberField']['VALIDATION'] = 'נא הכנס מספר GST תקין';
$lang['he_IL']['HtmlEditorField']['BULLETLIST'] = 'רשימה עם תבליטים';
$lang['he_IL']['HtmlEditorField']['BUTTONALIGNCENTER'] = 'יישר למרכז';
$lang['he_IL']['HtmlEditorField']['BUTTONALIGNJUSTIFY'] = 'ישר לשני הצדדים';
$lang['he_IL']['HtmlEditorField']['BUTTONALIGNLEFT'] = 'יישר לשמאל';
$lang['he_IL']['HtmlEditorField']['BUTTONALIGNRIGHT'] = 'יישר לימין';
$lang['he_IL']['HtmlEditorField']['BUTTONBOLD'] = 'מודגש (Ctrl+B)
';
$lang['he_IL']['HtmlEditorField']['BUTTONINSERTFLASH'] = 'הכנס פלאש';
$lang['he_IL']['HtmlEditorField']['BUTTONINSERTIMAGE'] = 'הכנס תמונה';
$lang['he_IL']['HtmlEditorField']['BUTTONINSERTLINK'] = 'הכנס קישור';
$lang['he_IL']['HtmlEditorField']['BUTTONITALIC'] = 'נטוי (Ctrl+I)
';
$lang['he_IL']['HtmlEditorField']['BUTTONREMOVELINK'] = 'הסר קישור';
$lang['he_IL']['HtmlEditorField']['BUTTONSTRIKE'] = 'קו חוצה';
$lang['he_IL']['HtmlEditorField']['BUTTONUNDERLINE'] = 'קו תחתי  (Ctrl+U)
';
$lang['he_IL']['HtmlEditorField']['CREATEFOLDER'] = 'צור ספריה';
$lang['he_IL']['HtmlEditorField']['CSSCLASS'] = 'יישור/סגנון';
$lang['he_IL']['HtmlEditorField']['CSSCLASSCENTER'] = 'ממורכז, ללא טקסט בצדדים.';
$lang['he_IL']['HtmlEditorField']['CSSCLASSLEFT'] = 'לשמאל, עם טקסט מסודר מסביב.';
$lang['he_IL']['HtmlEditorField']['CSSCLASSRIGHT'] = 'לימין, עם טקסט מסודר מסביב.';
$lang['he_IL']['HtmlEditorField']['EMAIL'] = 'כתובת אימייל';
$lang['he_IL']['HtmlEditorField']['FILE'] = 'קובץ';
$lang['he_IL']['HtmlEditorField']['FOLDER'] = 'תיקיה';
$lang['he_IL']['HtmlEditorField']['FOLDERCANCEL'] = 'ביטול';
$lang['he_IL']['HtmlEditorField']['FORMATADDR'] = 'כתובת';
$lang['he_IL']['HtmlEditorField']['FORMATH1'] = 'כותרת 1';
$lang['he_IL']['HtmlEditorField']['FORMATH2'] = 'כותרת 2';
$lang['he_IL']['HtmlEditorField']['FORMATH3'] = 'כותרת 3';
$lang['he_IL']['HtmlEditorField']['FORMATH4'] = 'כותרת 4';
$lang['he_IL']['HtmlEditorField']['FORMATH5'] = 'כותרת 5';
$lang['he_IL']['HtmlEditorField']['FORMATH6'] = 'כותרת 6';
$lang['he_IL']['HtmlEditorField']['FORMATP'] = 'פיסקה';
$lang['he_IL']['HtmlEditorField']['FORMATPRE'] = 'ללא עיצוב';
$lang['he_IL']['HtmlEditorField']['HR'] = 'הוסף קו אופקי';
$lang['he_IL']['HtmlEditorField']['IMAGEDIMENSIONS'] = 'ממדים';
$lang['he_IL']['HtmlEditorField']['IMAGEHEIGHTPX'] = 'גובה';
$lang['he_IL']['HtmlEditorField']['IMAGEWIDTHPX'] = 'רוחב';
$lang['he_IL']['HtmlEditorField']['INDENT'] = 'הגדל כניסה';
$lang['he_IL']['HtmlEditorField']['LINKDESCR'] = 'תאור הקישור';
$lang['he_IL']['HtmlEditorField']['LINKOPENNEWWIN'] = 'לפתוח קישור בחלון חדש?';
$lang['he_IL']['HtmlEditorField']['OK'] = 'אישור';
$lang['he_IL']['HtmlEditorField']['OL'] = 'רשימה ממוספרת';
$lang['he_IL']['HtmlEditorField']['OUTDENT'] = 'הקטן כניסה';
$lang['he_IL']['HtmlEditorField']['UPLOAD'] = 'שלח';
$lang['he_IL']['Image']['PLURALNAME'] = 'קבצים/';
$lang['he_IL']['Image']['SINGULARNAME'] = 'קובץ';
$lang['he_IL']['Image_iframe.ss']['TITLE'] = 'מסגרת העלאת תמונה';
$lang['he_IL']['LoginAttempt']['PLURALNAME'] = 'נסיונות כניסה למערכת';
$lang['he_IL']['LoginAttempt']['SINGULARNAME'] = 'נסיון כניסה למערכת';
$lang['he_IL']['Member']['ADDRESS'] = 'כתובת';
$lang['he_IL']['Member']['belongs_many_many_Groups'] = 'קבוצות';
$lang['he_IL']['Member']['BUTTONCHANGEPASSWORD'] = 'שנה סיסמא';
$lang['he_IL']['Member']['BUTTONLOGIN'] = 'התחבר';
$lang['he_IL']['Member']['BUTTONLOGINOTHER'] = 'התחבר כמשתמש אחר';
$lang['he_IL']['Member']['BUTTONLOSTPASSWORD'] = 'שכחתי את הסיסמא';
$lang['he_IL']['Member']['CONFIRMNEWPASSWORD'] = 'אשר סיסמא חדשה';
$lang['he_IL']['Member']['CONFIRMPASSWORD'] = 'אשר סיסמא';
$lang['he_IL']['Member']['CONTACTINFO'] = 'פרטי קשר';
$lang['he_IL']['Member']['db_LockedOutUntil'] = 'נעול עד ';
$lang['he_IL']['Member']['db_PasswordExpiry'] = 'תאריך תפוגת סיסמא';
$lang['he_IL']['Member']['EMAIL'] = 'דואר אלקטרוני';
$lang['he_IL']['Member']['EMAILSIGNUPINTRO1'] = 'תודה על הרשמתך כחבר חדש, הפרטים שלך רשומים להלן לעיון בעתיד.';
$lang['he_IL']['Member']['EMAILSIGNUPINTRO2'] = 'אתה יכול להכנס לאתר בעזרת הנתונים הבאים';
$lang['he_IL']['Member']['EMAILSIGNUPSUBJECT'] = 'תודה שנרשמת';
$lang['he_IL']['Member']['ERRORNEWPASSWORD'] = 'הסיסמא החדשה שלך שגויה, נסה שנית.';
$lang['he_IL']['Member']['ERRORPASSWORDNOTMATCH'] = 'הסיסמא הנוכחית שלך לא תואמת, נא נסה שנית';
$lang['he_IL']['Member']['ERRORWRONGCRED'] = 'שגיאה בכתובת הדואר או הסיסמא.נא  נסה שנית.';
$lang['he_IL']['Member']['FIRSTNAME'] = 'שם פרטי';
$lang['he_IL']['Member']['GREETING'] = 'ברוך הבא';
$lang['he_IL']['Member']['INTERFACELANG'] = 'שפת ממשק';
$lang['he_IL']['Member']['LOGGEDINAS'] = 'אתה מחובר כ %s.
';
$lang['he_IL']['Member']['MOBILE'] = 'נייד';
$lang['he_IL']['Member']['NAME'] = 'שם';
$lang['he_IL']['Member']['NEWPASSWORD'] = 'סיסמא חדשה';
$lang['he_IL']['Member']['PASSWORD'] = 'סיסמא';
$lang['he_IL']['Member']['PASSWORDCHANGED'] = 'סיסמתך השתנתה ונשלח לך העתק בדואר אלקטרוני.';
$lang['he_IL']['Member']['PERSONALDETAILS'] = 'פרטים אישיים';
$lang['he_IL']['Member']['PHONE'] = 'טלפון';
$lang['he_IL']['Member']['PLURALNAME'] = 'חברים רשומים';
$lang['he_IL']['Member']['REMEMBERME'] = 'זכור אותי בפעם הבאה?';
$lang['he_IL']['Member']['SINGULARNAME'] = 'חבר רשום';
$lang['he_IL']['Member']['SUBJECTPASSWORDCHANGED'] = 'סיסמתך השתנתה';
$lang['he_IL']['Member']['SUBJECTPASSWORDRESET'] = 'קישור לאתחול הסיסמא שלך';
$lang['he_IL']['Member']['SURNAME'] = 'שם משפחה';
$lang['he_IL']['Member']['USERDETAILS'] = 'פרטי משתמש';
$lang['he_IL']['Member']['VALIDATIONMEMBEREXISTS'] = 'קיים כבר משתמש עם כתובת דואר זו.';
$lang['he_IL']['Member']['WELCOMEBACK'] = 'ברוך הבא,  %s
';
$lang['he_IL']['Member']['YOUROLDPASSWORD'] = 'הסיסמא הישנה שלך';
$lang['he_IL']['MemberAuthenticator']['TITLE'] = 'דואר אלקטרוני וסיסמא';
$lang['he_IL']['MemberPassword']['PLURALNAME'] = 'סיסמאות';
$lang['he_IL']['MemberPassword']['SINGULARNAME'] = 'סיסמה';
$lang['he_IL']['NumericField']['VALIDATION'] = '\'%s\' אינו מספר, רק מספרים מתקבלים עבור שדה זה.';
$lang['he_IL']['Page']['PLURALNAME'] = 'דפים';
$lang['he_IL']['Page']['SINGULARNAME'] = 'דף';
$lang['he_IL']['Permission']['PLURALNAME'] = 'הרשאות';
$lang['he_IL']['Permission']['SINGULARNAME'] = 'הרשאה';
$lang['he_IL']['PhoneNumberField']['VALIDATION'] = 'יש להכניס מספר טלפון תקין';
$lang['he_IL']['QueuedEmail']['PLURALNAME'] = 'הודעות ממתינות';
$lang['he_IL']['QueuedEmail']['SINGULARNAME'] = 'הודעה ממתינה';
$lang['he_IL']['RedirectorPage']['HASBEENSETUP'] = 'נוצר דף הפניה ללא יעד';
$lang['he_IL']['RedirectorPage']['HEADER'] = 'העמוד הזה יוביל משתמשים לעמוד אחר';
$lang['he_IL']['RedirectorPage']['OTHERURL'] = 'כתובת של אתר אחר';
$lang['he_IL']['RedirectorPage']['PLURALNAME'] = 'עמודי הפניה';
$lang['he_IL']['RedirectorPage']['REDIRECTTO'] = 'העבר אל';
$lang['he_IL']['RedirectorPage']['REDIRECTTOEXTERNAL'] = 'אתר אחר';
$lang['he_IL']['RedirectorPage']['REDIRECTTOPAGE'] = 'עמוד באתר שלך';
$lang['he_IL']['RedirectorPage']['SINGULARNAME'] = 'עמוד הפניה';
$lang['he_IL']['RedirectorPage']['YOURPAGE'] = 'עמוד באתר שלך';
$lang['he_IL']['Security']['ALREADYLOGGEDIN'] = 'אין לך הרשאה לעמוד זה. אם ברשותך חשבון אחר עם גישה לעמוד זה את יכול להתחבר איתו.';
$lang['he_IL']['Security']['BUTTONSEND'] = 'שלח לי קישור לאיפוס סיסמא';
$lang['he_IL']['Security']['CHANGEPASSWORDBELOW'] = 'אתה יכול לשנות את סיסמתך להלן.';
$lang['he_IL']['Security']['CHANGEPASSWORDHEADER'] = 'שנה את הסיסמא שלך';
$lang['he_IL']['Security']['ENTERNEWPASSWORD'] = 'נא הכנס סיסמא חדשה.';
$lang['he_IL']['Security']['ERRORPASSWORDPERMISSION'] = 'אתה מוכרח להיות מחובר על מנת לשנות את הסיסמא שלך!';
$lang['he_IL']['Security']['LOGGEDOUT'] = 'נותקת . אם ברצונך להתחבר שנית הכנס את הפרטים שלך';
$lang['he_IL']['Security']['LOSTPASSWORDHEADER'] = 'איבדת סיסמא';
$lang['he_IL']['Security']['NOTEPAGESECURED'] = 'עמוד זה אינו מאובטח. הכנס את הפרטים שלך להלן ונשלח אליך מייד.';
$lang['he_IL']['Security']['NOTERESETPASSWORD'] = 'הכנס את כתובת הדואר האלקטרוני שלך ונשלח אליך קישור שבעזרתו תוכל לאפס את הסיסמא שלך';
$lang['he_IL']['Security']['PASSWORDSENTHEADER'] = 'קישור לאיפוס סיסמא נשלח ל \'%s\'
';
$lang['he_IL']['Security']['PASSWORDSENTTEXT'] = 'תודה רבה! קישור לאיפוס הסיסמא נשלח ל \'%s\'.
';
$lang['he_IL']['SimpleImageField']['NOUPLOAD'] = 'לא הועלתה תמונה';
$lang['he_IL']['SiteTree']['ALLOWCOMMENTS'] = 'מותרות תגובות בדף זה?';
$lang['he_IL']['SiteTree']['APPEARSVIRTUALPAGES'] = 'תוכן זה מופיע גם בדפים הוירטואלים ב %s';
$lang['he_IL']['SiteTree']['CHANGETO'] = 'שנה ל-\'%s\'';
$lang['he_IL']['SiteTree']['Content'] = 'תוכן';
$lang['he_IL']['SiteTree']['HASBROKENLINKS'] = 'דף זה מכיל קישורים שבורים';
$lang['he_IL']['SiteTree']['has_one_Parent'] = 'דף אב';
$lang['he_IL']['SiteTree']['HOMEPAGEFORDOMAIN'] = 'שם מתחם';
$lang['he_IL']['SiteTree']['HTMLEDITORTITLE'] = 'תוכן';
$lang['he_IL']['SiteTree']['MENUTITLE'] = 'תווית ניווט';
$lang['he_IL']['SiteTree']['METADESC'] = 'תיאור';
$lang['he_IL']['SiteTree']['METAEXTRA'] = 'תגי מטא נוספים';
$lang['he_IL']['SiteTree']['METAHEADER'] = 'תגי מטא עבור מנועי חיפוש';
$lang['he_IL']['SiteTree']['METAKEYWORDS'] = 'מילות מפתח';
$lang['he_IL']['SiteTree']['METATITLE'] = 'כותרת';
$lang['he_IL']['SiteTree']['MODIFIEDONDRAFT'] = 'שונה באתר טיוטה';
$lang['he_IL']['SiteTree']['NOTEUSEASHOMEPAGE'] = 'השתמש בדף זה כדף הבית עבור הדומיינים הבאים (הפרד דומיינים בפסיק):';
$lang['he_IL']['SiteTree']['PAGESLINKING'] = 'העמודים הבאים מקושרים לעמוד הזה:';
$lang['he_IL']['SiteTree']['PAGETITLE'] = 'שם הדף';
$lang['he_IL']['SiteTree']['PAGETYPE'] = 'סוג דף';
$lang['he_IL']['SiteTree']['PLURALNAME'] = 'עצי אתר';
$lang['he_IL']['SiteTree']['SHOWINMENUS'] = 'להראות בתפריטים?';
$lang['he_IL']['SiteTree']['SHOWINSEARCH'] = 'לכלול בחיפוש?';
$lang['he_IL']['SiteTree']['SINGULARNAME'] = 'דפי האתר';
$lang['he_IL']['SiteTree']['TOPLEVEL'] = 'תוכן האתר (רמה עליונה)';
$lang['he_IL']['SiteTree']['URL'] = 'כתובת';
$lang['he_IL']['SiteTree']['URLSegment'] = 'מקטע כתובת';
$lang['he_IL']['SiteTree']['VALIDATIONURLSEGMENT1'] = 'קיים דף נוסף המשתמש בכתובת זו. הכתובת חייבת להיות ייחודית עבור כל דף.';
$lang['he_IL']['SiteTree']['VALIDATIONURLSEGMENT2'] = ' כתובת חוקית יכולה להיות מורכבת מאותיות, ספרות, מקף ומקף תחתון בלבד.';
$lang['he_IL']['TableField']['ISREQUIRED'] = 'ב %s נדרש \'%s\'';
$lang['he_IL']['TableField.ss']['CSVEXPORT'] = 'ייצא כCSV';
$lang['he_IL']['ToggleCompositeField.ss']['HIDE'] = 'הסתר';
$lang['he_IL']['ToggleCompositeField.ss']['SHOW'] = 'הצג';
$lang['he_IL']['ToggleField']['LESS'] = 'פחות';
$lang['he_IL']['ToggleField']['MORE'] = 'עוד';
$lang['he_IL']['Versioned']['has_many_Versions'] = 'גירסאות';
$lang['he_IL']['VirtualPage']['CHOOSE'] = 'בחר בעמוד לקשר אליו';
$lang['he_IL']['VirtualPage']['EDITCONTENT'] = 'לחץ כאן בכדי לערוך את התוכן';
$lang['he_IL']['VirtualPage']['HEADER'] = 'זהו עמוד ווירטואלי';
$lang['he_IL']['VirtualPage']['PLURALNAME'] = 'דפים וירטואליים';
$lang['he_IL']['VirtualPage']['SINGULARNAME'] = 'דף וירטואלי';
$lang['he_IL']['Widget']['PLURALNAME'] = 'Widgets';
$lang['he_IL']['Widget']['SINGULARNAME'] = 'Widget';
$lang['he_IL']['WidgetArea']['PLURALNAME'] = 'אזורי widget';
$lang['he_IL']['WidgetArea']['SINGULARNAME'] = 'אזור widget';

