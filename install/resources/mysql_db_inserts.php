<?php
/**
 * MyBB 1.6
 * Copyright 2010 MyBB Group, All Rights Reserved
 *
 * Website: http://mybb.com
 * License: http://mybb.com/about/license
 *
 * $Id$
 */

$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (1, 'ZIP File', 'application/zip', 'zip', 1024, 'images/attachtypes/zip.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (2, 'JPG Image', 'image/jpeg', 'jpg', 500, 'images/attachtypes/image.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (3, 'Text Document', 'text/plain', 'txt', 200, 'images/attachtypes/txt.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (4, 'GIF Image', 'image/gif', 'gif', 500, 'images/attachtypes/image.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (6, 'PHP File', 'application/x-httpd-php', 'php', 500, 'images/attachtypes/php.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (7, 'PNG Image', 'image/png', 'png', 500, 'images/attachtypes/image.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (8, 'Microsoft Word Document', 'application/msword', 'doc', 1024, 'images/attachtypes/doc.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (9, 'HTM File', 'text/html', 'htm', 100, 'images/attachtypes/html.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (10, 'HTML File', 'text/html', 'html', 100, 'images/attachtypes/html.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (11, 'JPEG Image', 'image/jpeg', 'jpeg', 500, 'images/attachtypes/image.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (12, 'GZIP Compressed File', 'application/x-gzip', 'gz', 1024, 'images/attachtypes/tar.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (13, 'TAR Compressed File', 'application/x-tar', 'tar', 1024, 'images/attachtypes/tar.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (14, 'CSS Stylesheet', 'text/css', 'css', 100, 'images/attachtypes/css.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (15, 'Adobe Acrobat PDF', 'application/pdf', 'pdf', 2048, 'images/attachtypes/pdf.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (16, 'Bitmap Image', 'image/bmp', 'bmp', 500, 'images/attachtypes/image.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (17, 'Microsoft Word 2007 Document', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'docx', 1024, 'images/attachtypes/doc.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (18, 'Microsoft Excel Document', 'application/vnd.ms-excel', 'xls', 1024, 'images/attachtypes/xls.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (19, 'Microsoft Excel 2007 Document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'xlsx', 1024, 'images/attachtypes/xls.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (20, 'Microsoft PowerPoint Document', 'application/vnd.ms-powerpoint', 'ppt', 1024, 'images/attachtypes/ppt.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (21, 'Microsoft PowerPoint 2007 Document', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'pptx', 1024, 'images/attachtypes/ppt.gif');";

$inserts[] = "INSERT INTO mybb_calendars (name,disporder,startofweek,showbirthdays,eventlimit,moderation,allowhtml,allowmycode,allowimgcode,allowvideocode,allowsmilies) VALUES ('Default Calendar',1,0,1,4,0,0,1,1,1,1);";

$inserts[] = "INSERT INTO mybb_forums (fid, name, description, linkto, type, pid, parentlist, disporder, active, open, threads, posts, lastpost, lastposter, lastposttid, allowhtml, allowmycode, allowsmilies, allowimgcode, allowvideocode, allowpicons, allowtratings, status, usepostcounts, password, showinjump, modposts, modthreads, modattachments, style, overridestyle, rulestype, rulestitle, rules) VALUES (1, 'My Category', '', '', 'c', 0, '1', 1, 1, 1, 0, 0, 0, '0', 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, '', 1, 0, 0, 0, 0, 0, 0, '', '');";
$inserts[] = "INSERT INTO mybb_forums (fid, name, description, linkto, type, pid, parentlist, disporder, active, open, threads, posts, lastpost, lastposter, lastposttid, allowhtml, allowmycode, allowsmilies, allowimgcode, allowvideocode, allowpicons, allowtratings, status, usepostcounts, password, showinjump, modposts, modthreads, modattachments, style, overridestyle, rulestype, rulestitle, rules) VALUES (2, 'My Forum', '', '', 'f', 1, '1,2', 1, 1, 1, 0, 0, 0, '0', 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, '', 1, 0, 0, 0, 0, 0, 0, '', '');";

$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (1, 1, 'عضویت کاربر', 'مزایای عضویت در این تالار.', 'برای استفاده از بعضی از بخش‌های این تالار نیاز است که در تالار عضو شوید. عضویت برای همه افراد آزاد می‌باشد و این عمل چند دقیقه بیشتر طول نمی‌کشد.<br />\r\n<br />\r\nزمانی که شما در تالار عضو می‌شوید می‌توانید برای سایر اعضا پیام بفرستید یا موضوع و مشکل خود را ارسال نمایید. ضمنا می‌توانید پروفایل ویژه خود را نیز داشته باشید.<br />\r\n<br />\r\nبرخی از مزایای عضویت در تالار عبارتند از:<br /> اشتراک در موضوع‌ها, علاقمندی‌ها, تغییر قالب تالار, دستیابی به ویرایشگر مخصوص خود و ارسال رایانامه برای اعضا.', 1, 1, 1);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (2, 1, 'بروز رسانی پروفایل', 'تغییر اطلاعات جاری مربوط به شما.', 'بعضی مواقع ممکن است که شما بخواهید اطلاعات پروفایل خود را بروز رسانی نمایید .اطلاعاتی مانند: اطلاعات مربوط به مسنجر, رمز ورود, یا تغییر آدرس رایانامه.<br> شما می‌توانید تمام اطلاعات کاربری خود را از طریق کنترل پنل ویژه خود در تالار تغییر دهید. برای دسترسی به کنترل پنل, تنها کافی است که بر روی عنوان کنترل پنل کاربر در منوی بالایی صفحه کلیک نمایید. از آنجا \"ویرایش مشخصات\" را انتخاب کرده و موارد مد نظر خود را تغییر دهید, سپس موافقت خود را با انجام تغییرات اعلام نمایید تا تغییرات جدید برای شما اجرا شود.', 1, 1, 2);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (3, 1, 'استفاده از کوکی‌ها در مای‌بی‌بی', 'این تالار از کوکی‌ها برای ثبت اطلاعات عضویت و ورود و خروج شما استفاده می‌کند.', 'در صورتی که شما در سایت عضو شده باشید اطلاعات مربوط به عضویت و ورود و خروج شما از طریق کوکی‌ها انجام می‌شود، ضمنا اطلاعات مربوط به آخرین بازدید شما از تالار هم از طریق کوکی‌ها ثبت می‌شود.<br />\r\n<br />\r\nکوکی‌ها اسناد متنی کوچکی هستند که در کامپیوتر شما ذخیره می‌شوند; استفاده از کوکی‌ها فقط برای موارد امنیتی می‌باشد و استفاده دیگری از آنها نمی‌شود.<br />\r\n<br />\r\nکوکی‌ها ضمنا اطلاعات مربوط به موضوع‌های خوانده شده توسط شما را نیز ثبت می‌نماید.<br />\r\n<br />\r\nبرای حذف تمام کوکی‌های ذخیره شده توسط این تالار می‌توانید <a href=\"misc.php?action=clearcookies\">اینجا</a>کلیک نمایید.', 1, 1, 3);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (4, 1, 'ورود و خروج', 'روش ورود و خروج از تالار.', 'وقتی شما برای یک بار وارد این تالار می‌شوید کوکی‌ها فعال می‌شوند واطلاعات ورود شما را ثبت می‌کنند و برای بار بعدی نیازی به وارد کردن رمز ورود و نام‌کاربری نمی‌باشد و شما به صورت خودکار وارد تالار خواهید شد. با استفاده از کوکی‌ها غیر از شما هیچ کس دیگری نمی‌تواند وارد اشتراک کاربری شما در این تالار شود.<br /> درصورتی کوکی‌ها برای شما هنگام بازدید اجرا نمی‌شوند که بعد از ورود به تالار از حساب کاربری خود خارج شوید.\r\n<br /><br />برای ورود فقط کافی است که بر روی گزینه ورود در بالا تالار کلیک نمایید. برای خروج نیز بر روی گزینه خروج در همان منوی بالای صفحه کلیک نمایید. در صورتی که عملیات خروج انجام نشد کوکی‌ها را از روی سیستم خود پاک کنید.', 1, 1, 4);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (5, 2, 'ارسال یک موضوع جدید', 'شروع یک موضوع جدید در تالار.', 'در صورتی که شما قبلا در تالار عضو شده اید و می‌خواهید یک موضوع جدید را ارسال نمایید، بسیار ساده است.فقط کافی است که در تالار مورد نظر خود بر روی دکمه \"موضوع جدید\" کلیک نمایید. لزوما شما دسترسی به تمام تالارها برای ارسال مطلب یا جواب ندارید. ممکن است که بعضی از تالارها برای مدیران باشد و یا اینکه مدیریت کل تالار آن را برای اعضای عادی قفل کرده باشد و فقط قابل مشاهده باشد.', 1, 1, 1);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (6, 2, 'ارسال یک پاسخ', 'پاسخ به موضوع‌ها در تالار.', 'ممکن است که شما علاقمند به دادن پاسخ به یک موضوع در تالارها باشید.برای اینکار می‌توانید بر روی دکمه. \"ارسال پاسخ\" در همان موضوع کلیک کرده و جواب خود را ارسال نمایید. ضمنا می‌توانید از قسمت پایین هر تالار از کادر ارسال پاسخ سریع نیز استفاده نمایید.\r\n<br /><br />در صورتی که برخی از جواب‌ها نامناسب باشد مدیران تالار این اجازه را دارند که ارسال‌های شما را ویرایش یا حذف نمایند.', 1, 1, 2);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (7, 2, 'مای‌کد', 'آشنایی با امکانات مای‌کد برای بهتر شدن ارسال‌های شما.', '<span dir=\"rtl\">نوع تگ‌ها و نمونه خروجی را در زیر هر یک از تگ‌ها مشاهده می‌کنید.</span>\r\n<p><br />[b]متن ضخیم[/b]<br />&nbsp;&nbsp;&nbsp;<b>متن ضخیم</b>\r\n<p>[i]متن مورب[/i]<br />&nbsp;&nbsp;&nbsp;<i>متن مورب</i>\r\n<p>[u]متن زیر خط دار[/u]<br />&nbsp;&nbsp;&nbsp;<u>متن زیر خط دار</u>\r\n<p>[s]متن باطل شده[/s]<br />&nbsp;&nbsp;&nbsp;<strike>متن باطل شده</strike>\r\n<p><br />[url]فرا پیوند[/url]<br />&nbsp;&nbsp;&nbsp;<a href=\"http://www.my-bb.ir/\">http://www.my-bb.ir</a>\r\n<p>[url=http://www.my-bb.ir]my-bb.ir[/url]<br />&nbsp;&nbsp;&nbsp;<a href=\"http://www.my-bb.ir/\">my-bb.ir</a>\r\n<p>[email]info@my-bb.ir[/email]<br />&nbsp;&nbsp;&nbsp;<a href=\"mailto:info@my-bb.ir\">info@my-bb.ir</a>\r\n<p>[email=info@my-bb.ir]رایانامه به مترجم[/email]<br />&nbsp;&nbsp;&nbsp;<a href=\"mailto:info@my-bb.ir\">رایانامه به مترجم</a>\r\n<p>[email=info@my-bb.ir?subject=mybb-translate]رایانامه با موضوع به مترجم[/email]<br />&nbsp;&nbsp;&nbsp;<a href=\"mailto:info@my-bb.ir?subject=mybb-persian-translate\">رایانامه با موضوع به مترجم</a>\r\n<p><br />[quote]نقل قول[/quote]<br />&nbsp;&nbsp;&nbsp;<quote>نقل قول</quote>\r\n<p>[code]خروجی کد[/code]<br />&nbsp;&nbsp;&nbsp;<code>خروجی کد</code>\r\n<p><br />[img]http://www.php.net/images/php.gif[/img]<br />&nbsp;&nbsp;&nbsp;<img src=\"http://www.php.net/images/php.gif\">\r\n<p>[img=50x50]http://www.php.net/images/php.gif[/img]<br />&nbsp;&nbsp;&nbsp;<img src=\"http://www.php.net/images/php.gif\" width=\"50\" height=\"50\" />\r\n<p><br />[color=red]متن قرمز[/color]<br />&nbsp;&nbsp;&nbsp;<font color=\"red\">متن قرمز</font>\r\n<p>[size=3]اندازه متن[/size]<br />&nbsp;&nbsp;&nbsp;<font size=\"3\">اندازه متن</font>\r\n<p>[font=Tahoma]نوع فونت[/font]<br />&nbsp;&nbsp;&nbsp;<font face=\"Tahoma\">نوع فونت</font>\r\n<p><br />[align=center]قرارگیری در مرکز[/align]<div align=\"center\">قرارگیری در مرکز</div>\r\n<p>[align=right]قرار گیری در راست[/align]<div align=\"right\">قرار گیری در راست</div>\r\n<p><br />[list]<br />[*]گزینه 1<br />[*]گزینه 2<br />[*]گزینه 3<br />[/list]<br /><ul><li>گزینه 1</li><li>گزینه 2</li><li>گزینه 3</li>\r\n</ul>\r\n<p><font size=\"1\" dir=\"rtl\">شما می‌توانید لیست‌ها را با استفاده از [list=1] بصورت شماره دار, و [list=a] بصورت یک لیست بر اساس حروف الفبا مرتب نمایید.</size>', 1, 1, 3);";

$inserts[] = "INSERT INTO mybb_helpsections (sid, name, description, usetranslation, enabled, disporder) VALUES (1, 'تعمیر و نگهداری کاربر', 'روش‌هایی که برای تعمیر و نگهداری حساب کاربری در انجمن وجود دارد.', 1, 1, 1);";
$inserts[] = "INSERT INTO mybb_helpsections (sid, name, description, usetranslation, enabled, disporder) VALUES (2, 'ارسال‌کردن', 'ارسال‌کردن، پاسخ دادن و روش‌های استفاده از انجمن', 1, 1, 2);";

$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(1, 'Bug', 'images/icons/bug.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(2, 'Exclamation', 'images/icons/exclamation.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(3, 'Question', 'images/icons/question.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(4, 'Smile', 'images/icons/smile.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(5, 'Sad', 'images/icons/sad.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(6, 'Wink', 'images/icons/wink.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(7, 'Big Grin', 'images/icons/biggrin.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(8, 'Tongue', 'images/icons/tongue.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(9, 'Brick', 'images/icons/brick.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(10, 'Heart', 'images/icons/heart.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(11, 'Information', 'images/icons/information.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(12, 'Lightbulb', 'images/icons/lightbulb.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(13, 'Music', 'images/icons/music.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(14, 'Photo', 'images/icons/photo.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(15, 'Rainbow', 'images/icons/rainbow.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(16, 'Shocked', 'images/icons/shocked.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(17, 'Star', 'images/icons/star.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(18, 'Thumbs Down', 'images/icons/thumbsdown.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(19, 'Thumbs Up', 'images/icons/thumbsup.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(20, 'Video', 'images/icons/video.gif');";

$inserts[] = "INSERT INTO mybb_profilefields (fid, name, description, disporder, type, length, maxlength, required, editable, hidden, postnum) VALUES (1, 'موقعیت', 'کجای این جهان زندگی می‌کنید؟', 1, 'text', 0, 255, 0, 1, 0, 0);";
$inserts[] = "INSERT INTO mybb_profilefields (fid, name, description, disporder, type, length, maxlength, required, editable, hidden, postnum) VALUES (2, 'اطلاعات', 'توضیح کوتاهی درباره‌ی خودتان و زندگی‌اتان بنویسید.', 2, 'textarea', 0, 0, 0, 1, 0, 0);";
$inserts[] = "INSERT INTO mybb_profilefields (fid, name, description, disporder, type, length, maxlength, required, editable, hidden, postnum) VALUES (3, 'جنسیت', 'لطفا جنسیت خود را از لیست زیر انتخاب کنید.', 0, 'select\nانتخاب نشده\nمرد\nزن\nدیگر', 0, 0, 0, 1, 0, 0);";

$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(1, 'Smile', ':)', 'images/smilies/smile.gif', 1, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(2, 'Wink', ';)', 'images/smilies/wink.gif', 2, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(3, 'Cool', ':cool:', 'images/smilies/cool.gif', 3, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(4, 'Big Grin', ':D', 'images/smilies/biggrin.gif', 4, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(5, 'Tongue', ':P', 'images/smilies/tongue.gif', 5, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(6, 'Rolleyes', ':rolleyes:', 'images/smilies/rolleyes.gif', 6, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(7, 'Shy', ':shy:', 'images/smilies/shy.gif', 7, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(8, 'Sad', ':(', 'images/smilies/sad.gif', 8, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(9, 'At', ':at:', 'images/smilies/at.gif', 9, 0);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(10, 'Angel', ':angel:', 'images/smilies/angel.gif', 0, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(11, 'Angry', ':@', 'images/smilies/angry.gif', 0, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(12, 'Blush', ':blush:', 'images/smilies/blush.gif', 0, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(13, 'Confused', ':s', 'images/smilies/confused.gif', 0, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(14, 'Dodgy', ':dodgy:', 'images/smilies/dodgy.gif', 0, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(15, 'Exclamation', ':exclamation:', 'images/smilies/exclamation.gif', 0, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(16, 'Heart', ':heart:', 'images/smilies/heart.gif', 0, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(17, 'Huh', ':huh:', 'images/smilies/huh.gif', 0, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(18, 'Idea', ':idea:', 'images/smilies/lightbulb.gif', 0, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(19, 'Sleepy', ':sleepy:', 'images/smilies/sleepy.gif', 0, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(20, 'Undecided', ':-/', 'images/smilies/undecided.gif', 0, 1);";


$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Google','Googlebot');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Lycos','lycos');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Ask.com','Teoma');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('What You Seek','whatuseek');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Internet Archive','archive_crawler');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Alexa Internet','ia_archiver');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Bing','bingbot');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Yahoo!','Slurp');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Baidu','Baiduspider');";

$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('1','calendar','<lang:group_calendar>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('2','editpost','<lang:group_editpost>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('3','forumbit','<lang:group_forumbit>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('4','forumjump','<lang:group_forumjump>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('5','forumdisplay','<lang:group_forumdisplay>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('6','index','<lang:group_index>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('7','error','<lang:group_error>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('8','memberlist','<lang:group_memberlist>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('9','multipage','<lang:group_multipage>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('10','private','<lang:group_private>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('11','portal','<lang:group_portal>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('12','postbit','<lang:group_postbit>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('13','redirect','<lang:group_redirect>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('14','showthread','<lang:group_showthread>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('15','usercp','<lang:group_usercp>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('16','online','<lang:group_online>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('17','moderation','<lang:group_moderation>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('18','nav','<lang:group_nav>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('19','search','<lang:group_search>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('20','showteam','<lang:group_showteam>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('21','reputation','<lang:group_reputation>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('22','newthread','<lang:group_newthread>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('23','newreply','<lang:group_newreply>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('24','member','<lang:group_member>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('25','warnings','<lang:group_warning>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('26','global','<lang:group_global>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('27','header','<lang:group_header>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('28','managegroup','<lang:group_managegroup>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('29','misc','<lang:group_misc>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('30','modcp','<lang:group_modcp>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('31','php','<lang:group_php>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('32','polls','<lang:group_polls>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('33','post','<lang:group_post>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('34','printthread','<lang:group_printthread>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('35','report','<lang:group_report>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('36','smilieinsert','<lang:group_smilieinsert>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('37','stats','<lang:group_stats>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('38','xmlhttp','<lang:group_xmlhttp>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('39','footer','<lang:group_footer>');";

$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (1, 0, 'Newbie', 1, '');";
$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (2, 1, 'Junior Member', 2, '');";
$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (3, 50, 'Member', 3, '');";
$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (4, 250, 'Senior Member', 4, '');";
$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (5, 750, 'Posting Freak', 5, '');";

?>