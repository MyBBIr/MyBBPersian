<?php
/**
 * MyBB 1.8
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 * Website: http://www.mybb.com
 * License: http://www.mybb.com/about/license
 *
 */

$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (1, 'ZIP File', 'application/zip', 'zip', 1024, 'images/attachtypes/zip.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (2, 'JPG Image', 'image/jpeg', 'jpg', 500, 'images/attachtypes/image.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (3, 'Text Document', 'text/plain', 'txt', 200, 'images/attachtypes/txt.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (4, 'GIF Image', 'image/gif', 'gif', 500, 'images/attachtypes/image.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (5, 'Adobe Photoshop File', 'application/x-photoshop', 'psd', 1024, 'images/attachtypes/psd.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (6, 'PHP File', 'application/x-httpd-php', 'php', 500, 'images/attachtypes/php.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (7, 'PNG Image', 'image/png', 'png', 500, 'images/attachtypes/image.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (8, 'Microsoft Word Document', 'application/msword', 'doc', 1024, 'images/attachtypes/doc.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (9, 'HTM File', 'text/html', 'htm', 100, 'images/attachtypes/html.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (10, 'HTML File', 'text/html', 'html', 100, 'images/attachtypes/html.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (11, 'JPEG Image', 'image/jpeg', 'jpeg', 500, 'images/attachtypes/image.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (12, 'GZIP Compressed File', 'application/x-gzip', 'gz', 1024, 'images/attachtypes/tar.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (13, 'TAR Compressed File', 'application/x-tar', 'tar', 1024, 'images/attachtypes/tar.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (14, 'CSS Stylesheet', 'text/css', 'css', 100, 'images/attachtypes/css.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (15, 'Adobe Acrobat PDF', 'application/pdf', 'pdf', 2048, 'images/attachtypes/pdf.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (16, 'Bitmap Image', 'image/bmp', 'bmp', 500, 'images/attachtypes/image.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (17, 'Microsoft Word 2007 Document', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'docx', 1024, 'images/attachtypes/doc.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (18, 'Microsoft Excel Document', 'application/vnd.ms-excel', 'xls', 1024, 'images/attachtypes/xls.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (19, 'Microsoft Excel 2007 Document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'xlsx', 1024, 'images/attachtypes/xls.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (20, 'Microsoft PowerPoint Document', 'application/vnd.ms-powerpoint', 'ppt', 1024, 'images/attachtypes/ppt.png');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (21, 'Microsoft PowerPoint 2007 Document', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'pptx', 1024, 'images/attachtypes/ppt.png');";

$inserts[] = "INSERT INTO mybb_calendars (name,disporder,startofweek,showbirthdays,eventlimit,moderation,allowhtml,allowmycode,allowimgcode,allowvideocode,allowsmilies) VALUES ('Default Calendar',1,0,1,4,0,0,1,1,1,1);";

$inserts[] = "INSERT INTO mybb_forums (fid, name, description, linkto, type, pid, parentlist, disporder, active, open, threads, posts, lastpost, lastposter, lastposttid, allowhtml, allowmycode, allowsmilies, allowimgcode, allowvideocode, allowpicons, allowtratings, usepostcounts, usethreadcounts, password, showinjump, style, overridestyle, rulestype, rulestitle, rules) VALUES (1, 'دسته‌بندی من', '', '', 'c', 0, '1', 1, 1, 1, 0, 0, 0, '0', 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, '', 1, 0, 0, 0, '', '');";
$inserts[] = "INSERT INTO mybb_forums (fid, name, description, linkto, type, pid, parentlist, disporder, active, open, threads, posts, lastpost, lastposter, lastposttid, allowhtml, allowmycode, allowsmilies, allowimgcode, allowvideocode, allowpicons, allowtratings, usepostcounts, usethreadcounts, password, showinjump, style, overridestyle, rulestype, rulestitle, rules) VALUES (2, 'انجمن من', '', '', 'f', 1, '1,2', 1, 1, 1, 0, 0, 0, '0', 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, '', 1, 0, 0, 0, '', '');";

$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (1, 1, 'عضویت کاربر', 'مزایای عضویت در این تالار.', 'برای استفاده از بعضی از بخش‌های این تالار نیاز است که در تالار عضو شوید. عضویت برای همه افراد آزاد می‌باشد و این عمل چند دقیقه بیشتر طول نمی‌کشد.<br />\r\n<br />\r\nزمانی که شما در تالار عضو می‌شوید می‌توانید برای سایر اعضا پیام بفرستید یا موضوع و مشکل خود را ارسال نمایید. ضمنا می‌توانید پروفایل ویژه خود را نیز داشته باشید.<br />\r\n<br />\r\nبرخی از مزایای عضویت در تالار عبارتند از:<br /> اشتراک در موضوع‌ها, علاقمندی‌ها, تغییر قالب تالار, دستیابی به ویرایشگر مخصوص خود و ارسال رایانامه برای اعضا.', 1, 1, 1);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (2, 1, 'بروز رسانی پروفایل', 'تغییر اطلاعات جاری مربوط به شما.', 'بعضی مواقع ممکن است که شما بخواهید اطلاعات پروفایل خود را بروز رسانی نمایید .اطلاعاتی مانند: اطلاعات مربوط به مسنجر, رمز ورود, یا تغییر آدرس رایانامه.<br> شما می‌توانید تمام اطلاعات کاربری خود را از طریق کنترل پنل ویژه خود در تالار تغییر دهید. برای دسترسی به کنترل پنل, تنها کافی است که بر روی عنوان کنترل پنل کاربر در منوی بالایی صفحه کلیک نمایید. از آنجا \"ویرایش مشخصات\" را انتخاب کرده و موارد مد نظر خود را تغییر دهید, سپس موافقت خود را با انجام تغییرات اعلام نمایید تا تغییرات جدید برای شما اجرا شود.', 1, 1, 2);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (3, 1, 'استفاده از کوکی‌ها در مای‌بی‌بی', 'این تالار از کوکی‌ها برای ثبت اطلاعات عضویت و ورود و خروج شما استفاده می‌کند.', 'در صورتی که شما در سایت عضو شده باشید اطلاعات مربوط به عضویت و ورود و خروج شما از طریق کوکی‌ها انجام می‌شود، ضمنا اطلاعات مربوط به آخرین بازدید شما از تالار هم از طریق کوکی‌ها ثبت می‌شود.<br />\r\n<br />\r\nکوکی‌ها اسناد متنی کوچکی هستند که در کامپیوتر شما ذخیره می‌شوند; استفاده از کوکی‌ها فقط برای موارد امنیتی می‌باشد و استفاده دیگری از آنها نمی‌شود.<br />\r\n<br />\r\nکوکی‌ها ضمنا اطلاعات مربوط به موضوع‌های خوانده شده توسط شما را نیز ثبت می‌نماید.<br />\r\n<br />\r\nبرای حذف تمام کوکی‌های ذخیره شده توسط این تالار می‌توانید <a href=\"misc.php?action=clearcookies&amp;my_post_key={1}\">اینجا</a>کلیک نمایید.', 1, 1, 3);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (4, 1, 'ورود و خروج', 'روش ورود و خروج از تالار.', 'وقتی شما برای یک بار وارد این تالار می‌شوید کوکی‌ها فعال می‌شوند واطلاعات ورود شما را ثبت می‌کنند و برای بار بعدی نیازی به وارد کردن رمز ورود و نام‌کاربری نمی‌باشد و شما به صورت خودکار وارد تالار خواهید شد. با استفاده از کوکی‌ها غیر از شما هیچ کس دیگری نمی‌تواند وارد اشتراک کاربری شما در این تالار شود.<br /> درصورتی کوکی‌ها برای شما هنگام بازدید اجرا نمی‌شوند که بعد از ورود به تالار از حساب کاربری خود خارج شوید.\r\n<br /><br />برای ورود فقط کافی است که بر روی گزینه ورود در بالا تالار کلیک نمایید. برای خروج نیز بر روی گزینه خروج در همان منوی بالای صفحه کلیک نمایید. در صورتی که عملیات خروج انجام نشد کوکی‌ها را از روی سیستم خود پاک کنید.', 1, 1, 4);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (5, 2, 'ارسال یک موضوع جدید', 'شروع یک موضوع جدید در تالار.', 'در صورتی که شما قبلا در تالار عضو شده اید و می‌خواهید یک موضوع جدید را ارسال نمایید، بسیار ساده است.فقط کافی است که در تالار مورد نظر خود بر روی دکمه \"موضوع جدید\" کلیک نمایید. لزوما شما دسترسی به تمام تالارها برای ارسال مطلب یا جواب ندارید. ممکن است که بعضی از تالارها برای مدیران باشد و یا اینکه مدیریت کل تالار آن را برای اعضای عادی قفل کرده باشد و فقط قابل مشاهده باشد.', 1, 1, 1);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (6, 2, 'ارسال یک پاسخ', 'پاسخ به موضوع‌ها در تالار.', 'ممکن است که شما علاقمند به دادن پاسخ به یک موضوع در تالارها باشید.برای اینکار می‌توانید بر روی دکمه. \"ارسال پاسخ\" در همان موضوع کلیک کرده و جواب خود را ارسال نمایید. ضمنا می‌توانید از قسمت پایین هر تالار از کادر ارسال پاسخ سریع نیز استفاده نمایید.\r\n<br /><br />در صورتی که برخی از جواب‌ها نامناسب باشد مدیران تالار این اجازه را دارند که ارسال‌های شما را ویرایش یا حذف نمایند.', 1, 1, 2);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (7, 2, 'مای‌کد', 'آشنایی با امکانات مای‌کد برای بهتر شدن ارسال‌های شما.', '<span dir=\"rtl\">نوع تگ‌ها و نمونه خروجی را در زیر هر یک از تگ‌ها مشاهده می‌کنید.</span>\r\n<p><br />[b]متن ضخیم[/b]<br />&nbsp;&nbsp;&nbsp;<b>متن ضخیم</b>\r\n<p>[i]متن مورب[/i]<br />&nbsp;&nbsp;&nbsp;<i>متن مورب</i>\r\n<p>[u]متن زیر خط دار[/u]<br />&nbsp;&nbsp;&nbsp;<u>متن زیر خط دار</u>\r\n<p>[s]متن باطل شده[/s]<br />&nbsp;&nbsp;&nbsp;<strike>متن باطل شده</strike>\r\n<p><br />[url]فرا پیوند[/url]<br />&nbsp;&nbsp;&nbsp;<a href=\"http://www.my-bb.ir/\">http://www.my-bb.ir</a>\r\n<p>[url=http://www.my-bb.ir]my-bb.ir[/url]<br />&nbsp;&nbsp;&nbsp;<a href=\"http://www.my-bb.ir/\">my-bb.ir</a>\r\n<p>[email]info@my-bb.ir[/email]<br />&nbsp;&nbsp;&nbsp;<a href=\"mailto:info@my-bb.ir\">info@my-bb.ir</a>\r\n<p>[email=info@my-bb.ir]رایانامه به مترجم[/email]<br />&nbsp;&nbsp;&nbsp;<a href=\"mailto:info@my-bb.ir\">رایانامه به مترجم</a>\r\n<p>[email=info@my-bb.ir?subject=mybb-translate]رایانامه با موضوع به مترجم[/email]<br />&nbsp;&nbsp;&nbsp;<a href=\"mailto:info@my-bb.ir?subject=mybb-persian-translate\">رایانامه با موضوع به مترجم</a>\r\n<p><br />[quote]نقل قول[/quote]<br />&nbsp;&nbsp;&nbsp;<quote>نقل قول</quote>\r\n<p>[code]خروجی کد[/code]<br />&nbsp;&nbsp;&nbsp;<code>خروجی کد</code>\r\n<p><br />[img]http://www.php.net/images/php.gif[/img]<br />&nbsp;&nbsp;&nbsp;<img src=\"http://www.php.net/images/php.gif\">\r\n<p>[img=50x50]http://www.php.net/images/php.gif[/img]<br />&nbsp;&nbsp;&nbsp;<img src=\"http://www.php.net/images/php.gif\" width=\"50\" height=\"50\" />\r\n<p><br />[color=red]متن قرمز[/color]<br />&nbsp;&nbsp;&nbsp;<font color=\"red\">متن قرمز</font>\r\n<p>[size=3]اندازه متن[/size]<br />&nbsp;&nbsp;&nbsp;<font size=\"3\">اندازه متن</font>\r\n<p>[font=Tahoma]نوع فونت[/font]<br />&nbsp;&nbsp;&nbsp;<font face=\"Tahoma\">نوع فونت</font>\r\n<p><br />[align=center]قرارگیری در مرکز[/align]<div align=\"center\">قرارگیری در مرکز</div>\r\n<p>[align=right]قرار گیری در راست[/align]<div align=\"right\">قرار گیری در راست</div>\r\n<p><br />[list]<br />[*]گزینه 1<br />[*]گزینه 2<br />[*]گزینه 3<br />[/list]<br /><ul><li>گزینه 1</li><li>گزینه 2</li><li>گزینه 3</li>\r\n</ul>\r\n<p><font size=\"1\" dir=\"rtl\">شما می‌توانید لیست‌ها را با استفاده از [list=1] بصورت شماره دار, و [list=a] بصورت یک لیست بر اساس حروف الفبا مرتب نمایید.</size>', 1, 1, 3);";

$inserts[] = "INSERT INTO mybb_helpsections (sid, name, description, usetranslation, enabled, disporder) VALUES (1, 'تعمیر و نگهداری کاربر', 'روش‌هایی که برای تعمیر و نگهداری حساب کاربری در انجمن وجود دارد.', 1, 1, 1);";
$inserts[] = "INSERT INTO mybb_helpsections (sid, name, description, usetranslation, enabled, disporder) VALUES (2, 'ارسال‌کردن', 'ارسال‌کردن، پاسخ دادن و روش‌های استفاده از انجمن', 1, 1, 2);";

$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(1, 'Bug', 'images/icons/bug.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(2, 'Exclamation', 'images/icons/exclamation.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(3, 'Question', 'images/icons/question.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(4, 'Smile', 'images/icons/smile.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(5, 'Sad', 'images/icons/sad.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(6, 'Wink', 'images/icons/wink.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(7, 'Big Grin', 'images/icons/biggrin.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(8, 'Tongue', 'images/icons/tongue.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(9, 'Brick', 'images/icons/brick.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(10, 'Heart', 'images/icons/heart.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(11, 'Information', 'images/icons/information.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(12, 'Lightbulb', 'images/icons/lightbulb.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(13, 'Music', 'images/icons/music.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(14, 'Photo', 'images/icons/photo.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(15, 'Rainbow', 'images/icons/rainbow.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(16, 'Shocked', 'images/icons/shocked.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(17, 'Star', 'images/icons/star.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(18, 'Thumbs Down', 'images/icons/thumbsdown.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(19, 'Thumbs Up', 'images/icons/thumbsup.png');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES(20, 'Video', 'images/icons/video.png');";

$inserts[] = "INSERT INTO mybb_profilefields (fid, name, description, disporder, type, regex, length, maxlength, required, registration, profile, postbit, viewableby, editableby, postnum) VALUES (1, 'Location', 'Where in the world do you live?', 1, 'text', '', 0, 255, 0, 0, 1, 0, -1, -1, 0);";
$inserts[] = "INSERT INTO mybb_profilefields (fid, name, description, disporder, type, regex, length, maxlength, required, registration, profile, postbit, viewableby, editableby, postnum) VALUES (2, 'Bio', 'Enter a few short details about yourself, your life story etc.', 2, 'textarea', '', 0, 0, 0, 0, 1, 0, -1, -1, 0);";
$inserts[] = "INSERT INTO mybb_profilefields (fid, name, description, disporder, type, regex, length, maxlength, required, registration, profile, postbit, viewableby, editableby, postnum) VALUES (3, 'Sex', 'Please select your sex from the list below.', 3, 'select\nUndisclosed\nMale\nFemale\nOther', '', 0, 0, 0, 0, 1, 0, -1, -1, 0);";

$inserts[] = "INSERT INTO mybb_questions (qid, question, answer, shown, correct, incorrect, active) VALUES(1, 'مقدار 2 + 2 برابر با چیست؟', '4\n۴\nچهار\nFour', 0, 0, 0, 1);";

$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(1, 'Smile', ':)', 'images/smilies/smile.png', 1, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(2, 'Wink', ';)', 'images/smilies/wink.png', 2, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(3, 'Cool', ':cool:', 'images/smilies/cool.png', 3, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(4, 'Big Grin', ':D', 'images/smilies/biggrin.png', 4, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(5, 'Tongue', ':P', 'images/smilies/tongue.png', 5, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(6, 'Rolleyes', ':rolleyes:', 'images/smilies/rolleyes.png', 6, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(7, 'Shy', ':shy:', 'images/smilies/shy.png', 7, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(8, 'Sad', ':(', 'images/smilies/sad.png', 8, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(9, 'At', ':at:', 'images/smilies/at.png', 9, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(10, 'Angel', ':angel:', 'images/smilies/angel.png', 10, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(11, 'Angry', ':@', 'images/smilies/angry.png', 11, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(12, 'Blush', ':blush:', 'images/smilies/blush.png', 12, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(13, 'Confused', ':s', 'images/smilies/confused.png', 13, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(14, 'Dodgy', ':dodgy:', 'images/smilies/dodgy.png', 14, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(15, 'Exclamation', ':exclamation:', 'images/smilies/exclamation.png', 15, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(16, 'Heart', ':heart:', 'images/smilies/heart.png', 16, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(17, 'Huh', ':huh:', 'images/smilies/huh.png', 17, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(18, 'Idea', ':idea:', 'images/smilies/lightbulb.png', 18, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(19, 'Sleepy', ':sleepy:', 'images/smilies/sleepy.png', 19, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(20, 'Undecided', ':-/', 'images/smilies/undecided.png', 20, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(21, 'Cry', ':cry:', 'images/smilies/cry.png', 21, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(22, 'Sick', ':sick:', 'images/smilies/sick.png', 22, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(23, 'Arrow', ':arrow:', 'images/smilies/arrow.png', 23, 1);";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES(24, 'My', ':my:', 'images/smilies/my.png', 24, 1);";

$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Google','Googlebot');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Bing','bingbot');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Alexa Internet','ia_archiver');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Ask.com','Teoma');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Baidu','Baiduspider');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Yandex','YandexBot');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Blekko','Blekkobot');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Facebook','facebookexternalhit');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Twitter','Twitterbot');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Internet Archive','archive.org_bot');";

$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('1','calendar','<lang:group_calendar>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('2','editpost','<lang:group_editpost>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('3','forumbit','<lang:group_forumbit>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('4','forumjump','<lang:group_forumjump>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('5','forumdisplay','<lang:group_forumdisplay>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('6','index','<lang:group_index>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('7','error','<lang:group_error>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('8','memberlist','<lang:group_memberlist>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('9','multipage','<lang:group_multipage>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('10','private','<lang:group_private>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('11','portal','<lang:group_portal>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('12','postbit','<lang:group_postbit>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('13','posticons','<lang:group_posticons>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('14','showthread','<lang:group_showthread>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('15','usercp','<lang:group_usercp>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('16','online','<lang:group_online>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('17','moderation','<lang:group_moderation>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('18','nav','<lang:group_nav>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('19','search','<lang:group_search>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('20','showteam','<lang:group_showteam>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('21','reputation','<lang:group_reputation>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('22','newthread','<lang:group_newthread>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('23','newreply','<lang:group_newreply>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('24','member','<lang:group_member>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('25','warnings','<lang:group_warning>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('26','global','<lang:group_global>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('27','header','<lang:group_header>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('28','managegroup','<lang:group_managegroup>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('29','misc','<lang:group_misc>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('30','modcp','<lang:group_modcp>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('31','announcement','<lang:group_announcement>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('32','polls','<lang:group_polls>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('33','post','<lang:group_post>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('34','printthread','<lang:group_printthread>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('35','report','<lang:group_report>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('36','smilieinsert','<lang:group_smilieinsert>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('37','stats','<lang:group_stats>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('38','xmlhttp','<lang:group_xmlhttp>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('39','footer','<lang:group_footer>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('40','video','<lang:group_video>','1');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title,isdefault) VALUES ('41','sendthread','<lang:group_sendthread>','1');";

$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (1, 0, 'Newbie', 1, '');";
$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (2, 1, 'Junior Member', 2, '');";
$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (3, 50, 'Member', 3, '');";
$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (4, 250, 'Senior Member', 4, '');";
$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (5, 750, 'Posting Freak', 5, '');";