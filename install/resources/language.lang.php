<?php
/*
	#########################################
	#########################################
	### Copyright By: Www.My-BB.Ir Group  ###
	### Persian  Translate  By: My-BB.Ir  ###
	#########################################
	#########################################
*/
/* INSTALL LANGUAGE VARIABLES */
$l['none'] = 'هیچ';
$l['not_installed'] = 'نصب نشده';
$l['installed'] = 'نصب شده';
$l['not_writable'] = 'غیر قابل نوشتن';
$l['writable'] = 'قابل نوشتن';
$l['done'] = 'انجام شد';
$l['next'] = 'مرحله بعد';
$l['error'] = 'خطا !';
$l['multi_byte'] = 'Multi Byte';
$l['recheck'] = 'بررسی دوباره';

$l['title'] = "سیستم نصب کننده مای بی بی";
$l['welcome'] = 'خوش آمدید';
$l['license_agreement'] = 'قرارداد استفاده';
$l['req_check'] = 'بررسی نیازمندی ها';
$l['db_config'] = 'پیکربندیِ پایگاه داده';
$l['table_creation'] = 'ایجاد جداول';
$l['data_insertion'] = 'ورود اطلاعات خام';
$l['theme_install'] = 'نصب پوسته';
$l['board_config'] = 'پیکربندی انجمن';
$l['admin_user'] = 'کاربر مدیر';
$l['finish_setup'] = 'پایان مراحل آماده سازی';

$l['table_population'] = 'ورود اطلاعات خام';
$l['theme_installation'] = 'افزودن پوسته';
$l['create_admin'] = 'ایجاد حساب مدیریت';

$l['already_installed'] = "مای بی بی در حال حاضر نصب شده است";
$l['mybb_already_installed'] = "<p>به سیستم نصب مای بی بی خوش آمدید {1}. مای بی بی دریافته است که قبلا در این مسیر پیکربندی شده است .</p>
<p>طلفا با توجه به نیازتان ، یکی از موارد زیر را انتخاب کنید :</p>

<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>بروز رسانی نسخه موجود به نسخهء {1} <span style=\"font-size: 80%; color: maroon;\">(توصیه ما انتخاب این گزینه است !)</span></h3>
	<p> این گزینه نسخه موجود از مای بی بی را به نسخه {1} بروزرسانی می‌کند.</p>
	<p>در صورتی که میخواهید اطلاعات قبلی شما از قبیل پست ها ، کاربران و ... از بین نرود باید از این گزینه استفاده کنید .</p>
	<form method=\"post\" action=\"upgrade.php\">
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"بروزرسانی مای بی بی به نسخهء {1} &raquo;\" /></div>
	</form>
</div>

<div style=\"padding: 4px;\">
	<h3>نصب یک رونوشت جدید از مای بی بی</h3>
	<p>با انتخاب این گزینه <span style=\"color: red;\">کلیه اطلاعات انجمن قبلی شما حـــــذف خواهد شد</span> و یک نسخه جدید از مای بی بی نصب خواهد شد .</p>
	<p>در صورتی که میخواهید نسخه مای بی بی را از ابتدا آغاز و تمام اطالاعات قبلی را پاک کنید ، باید از این گزینه استفاده نمایید .</p>
	<form method=\"post\" action=\"index.php\" onsubmit=\"return confirm('آیا شما مطمئن هستید که می‌خواهید یک نسخه تازه از مای بی بی را نصب کنید؟\\n\\nدر صورتی که از این گزینه استفاده کنید نسخه قبلی مای‌بی‌بی که بر روی سیستم شما بوده حذف خواهد شد و قابل بازگشتن نیست!');\">
		<input type=\"hidden\" name=\"action\" value=\"intro\" />
		<div class=\"next_button\"><input type=\"submit\" class=\"submit_button\" value=\"نصب مای بی بی {1} &raquo;\" /></div>
	</form>
</div>";

$l['mybb_incorrect_folder'] = "<div class=\"border_wrapper upgrade_note\" style=\"padding: 4px;\">
	<h3>MyBB has detected that it is running from the \"Upload\" directory.</h3>
	<p>While there is nothing wrong with this, it is recommended that your upload the contents of the \"Upload\" directory and not the directory itself.<br /><br />For more information please see the <a href=\"http://docs.mybb.com/Help-Upload_Directory.html\" target=\"_blank\">MyBB Docs</a>.</p>
</div>";

$l['welcome_step'] = '<p>به سیستم نصب مای بی بی {1} خوش آمدید. این روند یک نسخه از سیستم مای‌بی‌بی را بر روی سرور شما نصب و پیکربندی می‌کند.</p>
<p>حالا که بر روی سرور شما یک نسخه از مای بی بی موجود هست باید پایگاه داده و تنظیمات مربوطه ایجاد شوند. در زیر یک نمای کلی از فرایند نصب مای بی بی را مشاهده می‌کنید:</p>
<ul>
	<li>بررسی نیازمندی ها</li>
	<li>پیکربندیِ پایگاه داده</li>
	<li>ایجاد جداول</li>
	<li>ورود اطلاعات خام</li>
	<li>نصب پوسته و قالب پیشفرض</li>
	<li>ایجاد حساب کاربری مدیریت برای مدیریت انجمن</li>
	<li>پیکربندی انجمن</li>
</ul>
<p>پس از اینکه هر مرحله با موفقیت انجام شد بر روی دکمه "مرحله بعد" کلیک کنید تا به مرحله بعدی بروید</p>
<p>حال بر روی "مرحله بعد" کلیک کنید تا قرارداد استفاده از نرم افزار را ببینید</p>
<p><input type="checkbox" name="allow_anonymous_info" value="1" id="allow_anonymous" checked="checked" /> <label for="allow_anonymous"> ارسال اطلاعات ناشناس درباره مشخصات سرور شما و ... به گروه مای‌بی‌بی</label> (<a href="http://docs.mybb.com/Anonymous_Statistics.html" style="color: #555;" target="_blank"><small>چه اطلاعاتی فرستاده می‌شود؟</small></a>)</p>';

$l['license_step'] = '<div class="license_agreement">
{1}
</div>
<p><strong>در صورت کلیک بر روی "مرحله بعد" شما قرارداد استفاده تیم مای‌بی‌بی را می‌پذیرید</strong></p>';


$l['req_step_top'] = '<p>قبل از اینکه شما بتوانید سیستم Mybb را نصب کنید ما باید بررسی کنیم که آیا سرور شما حداقل نیازمندی ها برای نصب نرم افزار را دارا باشد.</p>';
$l['req_step_reqtable'] = '<div class="border_wrapper">
			<div class="title">بررسی نیازمندی‌ها</div>
		<table class="general" cellspacing="0">
		<thead>
			<tr>
				<th colspan="2" class="first last">نیازمندیها</th>
			</tr>
		</thead>
		<tbody>
		<tr class="first">
			<td class="first">PHP Version:</td>
			<td class="last alt_col">{1}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Supported DB Extensions:</td>
			<td class="last alt_col">{2}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Supported Translation Extensions:</td>
			<td class="last alt_col">{3}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">PHP XML Extensions:</td>
			<td class="last alt_col">{4}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">Configuration File Writable:</td>
			<td class="last alt_col">{5}</td>
		</tr>
		<tr>
			<td class="first">Settings File Writable:</td>
			<td class="last alt_col">{6}</td>
		</tr>
		<tr>
			<td class="first">Cache Directory Writable:</td>
			<td class="last alt_col">{7}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">File Uploads Directory Writable:</td>
			<td class="last alt_col">{8}</td>
		</tr>
		<tr class="last">
			<td class="first">Avatar Uploads Directory Writable:</td>
			<td class="last alt_col">{9}</td>
		</tr>
		</tbody>
		</table>
		</div>';
$l['req_step_reqcomplete'] = '<p><strong>تبریک می‌گوییم شما نیازمندی های لازم برای نصب مای‌بی‌بی را دارا می‌باشید.</strong></p>
<p>بر روی دکمه "مرحله بعد" کلیک کنید تا به ادامه نصب برنامه بروید.</p>';

$l['req_step_span_fail'] = '<span class="fail"><strong>{1}</strong></span>';
$l['req_step_span_pass'] = '<span class="pass">{1}</span>';

$l['req_step_error_box'] = '<p><strong>{1}</strong></p>';
$l['req_step_error_phpversion'] = 'برای نصب مای بی بی به PHP نسخه 5.2.0 به بالا نیاز است به طوری که بر روی سرور شما نسخه {1} نصب است.';
$l['req_step_error_dboptions'] = 'مای بی بی به یک یا چند پسوند پایگاه داده مناسب نیاز دارد که بر روی سرور شما هیچ پسوندی یافت نشد.';
$l['req_step_error_xmlsupport'] = 'مای بی بی نیازمند PHP همراه با قابلیت پردازش اطلاعات XML می‌باشد. لطفا برای اطلاعات بیشتر صفحه <a href="http://www.php.net/xml" target="_blank">PHP.net</a> را مشاهده فرمائید.';
$l['req_step_error_configdefaultfile'] = 'فایل (inc/config.default.php) توانایی تغییر نام ندارد.لطفا به‌طور دستی نام فایلِ <u>config.default.php</u> را به <u>config.php</u> تغییر دهید تا فایل پیکربندی قابل نوشتن شود یا با ما تماس بگیرید <a href="http://my-bb.ir" targert="_blank">پشتیبانی مای‌بی‌بی</a>';
$l['req_step_error_configfile'] = 'فایل پیکربندی (inc/config.php) قابل نوشتن نیست.لطفا صفحه <a href="http://docs.mybb.com/CHMOD_Files.html" target="_blank">دسترسی‌ها</a> مطالعه کنید تا بتوانید دسترسی فایل را برای قابل نوشتن شده تغییر دهید.';
$l['req_step_error_settingsfile'] = 'فایل تنظیمات (inc/settings.php) قابل نوشتن نیست. لطفا صفحه <a href="http://docs.mybb.com/CHMOD_Files.html" target="_blank">دسترسی‌ها</a> مطالعه کنید تا بتوانید دسترسی فایل را برای قابل نوشتن شده تغییر دهید.';
$l['req_step_error_cachedir'] = 'پوشه کش (cache/) قابل نوشتن نیست. لطفا صفحه <a href="http://docs.mybb.com/CHMOD_Files.html" target="_blank">دسترسی‌ها</a> مطالعه کنید تا بتوانید دسترسی فایل را برای قابل نوشتن شده تغییر دهید.';
$l['req_step_error_uploaddir'] = 'پوشه پیوست‌ها (uploads/) قابل نوشتن نیست. لطفا صفحه <a href="http://docs.mybb.com/CHMOD_Files.html" target="_blank">دسترسی‌ها</a>  مطالعه کنید تا بتوانید دسترسی فایل را برای قابل نوشتن شده تغییر دهید.';
$l['req_step_error_avatardir'] = 'پوشه آواتارها (uploads/avatars/) قابل نوشتن نیست لطفا صفحه <a href="http://docs.mybb.com/CHMOD_Files.html" target="_blank">دسترسی‌ها</a> مطالعه کنید تا بتوانید دسترسی فایل را برای قابل نوشتن شده تغییر دهید.';
$l['req_step_error_cssddir'] = 'پوشه فایلهای سی اس اس (css/) قابل نوشتن نیست لطفا صفحه <a href="http://docs.mybb.com/CHMOD_Files.html" target="_blank">دسترسی‌ها</a> مطالعه کنید تا بتوانید دسترسی فایل را برای قابل نوشتن شده تغییر دهید.';
$l['req_step_error_tablelist'] = '<div class="error">
<h3>خطا</h3>
<p>تمام نیازمندی های سیستم مای‌بی‌بی رفع نشده است، به همین علت شما نمی توانید مراحل نصب را ادامه دهید. در زیر نیازهای رفع نشده نمایش داده شده است، لطفا موارد را تصحیح و دوباره سعی کنید.</p>
{1}
</div>';


$l['db_step_config_db'] = '<p>حال وقت آن رسیده است که شما اطلاعات پایگاه داده را وارد کنید، در صورتی که شما این اطلاعات را ندارید با پشتیبانی هاست خود تماس بگیرید.</p>';
$l['db_step_config_table'] = '<div class="border_wrapper">
<div class="title">پیکربندیِ پایگاه داده</div>
<table class="general" cellspacing="0">
<tr>
	<th colspan="2" class="first last">تنظیمات پایگاه داده</th>
</tr>
<tr class="first">
	<td class="first"><label for="dbengine">نوع موتور پایگاه داده:</label></td>
	<td class="last alt_col"><select name="dbengine" id="dbengine" onchange="updateDBSettings();">{1}</select></td>
</tr>
{2}
</table>
</div>
<p>در صورتی که اطلاعات پایگاه داده را درست وارد کرده اید بر روی "مرحله بعد" کلیک کنید تا به مرحله بعد برود.</p>';

$l['database_settings'] = "تنظیمات پایگاه داده";
$l['database_path'] = "مسیر پایگاه داده:";
$l['database_host'] = "نام هاست پایگاه‌داده:";
$l['database_user'] = "نام‌کاربری پایگاه‌داده:";
$l['database_pass'] = "رمزعبور پایگاه داده:";
$l['database_name'] = "نام پایگاه داده:";
$l['table_settings'] = "تنظبمات جداول";
$l['table_prefix'] = "پیشوند جدول:";
$l['table_encoding'] = "کدبندی جدول:";

$l['db_step_error_config'] = '<div class="error">
<h3>خطا</h3>
<p>به نظر می‌رسد که یک یا چند خطا برای اطلاعات پایگاه داده به وجود آمده است:</p>
{1}
<p>لطفا اطلاعات خواسته شده را با دقت بیشتری وارد کنید و روی "مرحله بعد" کلیک کنید.</p>
</div>';
$l['db_step_error_invalidengine'] = 'شما یک موتور پایگاه داده نامعتبر انتخاب کرده اید لطفا یکی را از لیست زیر انتخاب کنید.';
$l['db_step_error_noconnect'] = 'نمی تواند به سرور پایگاه داده  \'{1}\' با این نام‌کاربری و رمز عبور وارد شود؟ آیا شما اطلاعات را صحیح وارد کرده اید؟';
$l['db_step_error_nodbname'] = 'نمی تواند پایگاه داده  \'{1}\' را انتخاب کند. آیا نام کاربری و رمزعبور وارد شده برای این پایگاه داده است؟';
$l['db_step_error_missingencoding'] = 'شما هیچ کدبندی ای را انتخاب نکرده اید. (اگر شما نمی‌دانید کدام را باید انتخاب کنید \'UTF-8 Unicode\' را انتخاب کنید.)';
$l['db_step_error_sqlite_invalid_dbname'] = 'شما نمی توانید از آدرس های نسبی برای موتور پایگاه داده SQLite استفاده کنید. لطفا از روش فایل سیستم (مثل: /home/user/database.db) برای موتور پایگاه داده SQLite استفاده کنید.';
$l['db_step_error_invalid_tableprefix'] = 'شما تنها می توانید از زیرخط (_) و حروف برای پیشوند جدول‌ها استفاده کنید.';
$l['db_step_error_tableprefix_too_long'] = 'شما می توانید پیشوندی با حداکثر 40 کاراکتر طول استفاده کنید، لطفا از پیشوند کوتاه تری استفاده کنید.';

$l['tablecreate_step_connected'] = '<p>اتصال به سرور پایگاه داده و پایگاه‌داده مشخص شده، با موفقیت انجام شد</p>
<p>موتو دیتابیس: {1} {2}</p>
<p>همه جداول پایگاه داده ایجاد شدند.</p>';
$l['tablecreate_step_created'] = 'در حال ساخت جدولِ {1}...';
$l['tablecreate_step_done'] = '<p>همه جدول ها با موفقیت ایجاد شدند، لطفا روی دکمه "مرحله بعد" کلیک کنید.</p>';

$l['populate_step_insert'] = '<p>حال که جداول ایجاد شدند، هم اکنون نوبت ورود اطلاعات خام درون این جداول هست.</p>';
$l['populate_step_inserted'] = '<p>اطلاعات خام با موفقیت وارد جدول‌ها شدند، لطفا روی دکمه "مرحله بعد" کلیک کنید.</p>';


$l['theme_step_importing'] = '<p>در حال وارد کردن پوسته و قالب پیش‌فرش...</p>';
$l['theme_step_imported'] = '<p>پوسته و قالب پیش‌فرض با موفقیت وارد شد، حال روی "مرحله بعد" کلیک کنید.</p>';


$l['config_step_table'] = '<p>اکنون وقت آن رسیده است که شما انجمن خود را پیکربندی کنید، در اینجا شما باید عنوان انجمن، آدرس انجمن، تنظیمات کوکی های دامنه ، ایمیل انجمن و ... را انجام دهید..</p>
		<div class="border_wrapper">
			<div class="title">پیکربندی انجمن</div>
			<table class="general" cellspacing="0">
				<tbody>
				<tr>
					<th colspan="2" class="first last">اطلاعات انجمن</th>
				</tr>
				<tr class="first">
					<td class="first"><label for="bbname">نام انجمن:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bbname" id="bbname" value="{1}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="bburl">آدرس انجمن (بدون اسلش در آخر آن):</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bburl" id="bburl" value="{2}" onkeyup="warnUser(this, \'این گزینه به صورت خودکار پر می‌شود، اگر درباره آن مطمئن نیستید تغییر در آن ایجاد نکنید, درغیر این صورت پیوند‌ها در انجمن شما ممکن است شکسته شوند.\')" onchange="warnUser(this, \'این گزینه به صورت خودکار پر می‌شود، اگر درباره آن مطمئن نیستید تغییر در آن ایجاد نکنید, درغیر این صورت پیوند‌ها در انجمن شما ممکن است شکسته شوند.\')" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">اطلاعات وبسایت</th>
				</tr>
				<tr>
					<td class="first"><label for="websitename">نام وبسایت:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="websitename" id="websitename" value="{3}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="websiteurl">آدرس وبسایت:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="websiteurl" id="websiteurl" value="{4}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">تنظیمات کوکی‌ها <a title="چیست؟" target="_blank" href="http://docs.mybb.com/Cookie_Settings.html">(؟)</a></th>
				</tr>
				<tr>
					<td class="first"><label for="cookiedomain">دامنه کوکی:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiedomain" id="cookiedomain" value="{5}" onkeyup="warnUser(this, \'این گزینه به صورت خودکار پر می‌شود، اگر درباره آن مطمئن نیستید تغییر در آن ایجاد نکنید, درغیر این صورت ورود و خروج در انجمن شما ممکن است شکسته شوند.\')" onchange="warnUser(this, \'این گزینه به صورت خودکار پر می‌شود، اگر درباره آن مطمئن نیستید تغییر در آن ایجاد نکنید, درغیر این صورت ورود و خروج در انجمن شما ممکن است شکسته شوند.\')" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="cookiepath">مسیر کوکی:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiepath" id="cookiepath" value="{6}" onkeyup="warnUser(this, \'این گزینه به صورت خودکار پر می‌شود، اگر درباره آن مطمئن نیستید تغییر در آن ایجاد نکنید, درغیر این صورت ورود و خروج در انجمن شما ممکن است شکسته شوند.\')" onchange="warnUser(this, \'این گزینه به صورت خودکار پر می‌شود، اگر درباره آن مطمئن نیستید تغییر در آن ایجاد نکنید, درغیر این صورت ورود و خروج در انجمن شما ممکن است شکسته شوند.\')" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">اطلاعات تماس</th>
				</tr>
				<tr class="last">
					<td class="first"><label for="contactemail">آدرس پست الکترونیک(ایمیل):</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="contactemail" id="contactemail" value="{7}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">تنظیمات امنیتی</th>
				</tr>
				<tr class="last">
					<td class="first"><label for="acppin">کد پین مدیریت:</label><br />اگر نمی‌خواهید از این استفاده کنید آن را خالی نگه‌دارید</td>
					<td class="last alt_col"><input type="password" class="text_input" name="pin" id="acppin" value="" /></td>
				</tr>
				</tbody>
			</table>
		</div>

	<p>هنگامی که اطلاعات خواسته شده را به طور کامل وارد کردید بر روی دکمه "مرحله بعد" کلیک کنید.</p>';

$l['config_step_error_config'] = '<div class="error">
<h3>خطا</h3>
<p>به نظر می‌رسد یک یا چند خطا در ورود اطلاعات وجود دارد:</p>
{1}
<p>مشکلات بالا را تصحیح و بر روی "مرحله بعد" کلیک کنید.</p>
</div>';
$l['config_step_error_url'] = 'شما آدرس انجمن خود را وارد نکرده اید.';
$l['config_step_error_name'] = 'شما عنوانی برای انجمن خود انتخاب نکرده اید.';
$l['config_step_revert'] = 'برای بازگردانی تنظیمات به مقدار پیش‌فرض کلیک کنید.';

$l['admin_step_setupsettings'] = '<p>در حال بارگذاری تنظیمات انجمن...</p>';
$l['admin_step_insertesettings'] = '<p>{1} تنظیم و {2} گروه تنظیم اضافه شد.</p>
<p>بروزرسانی تنظیمات با مقادیر تعریف شده توسط کاربر.</p>';
$l['admin_step_insertedtasks'] = '<p>{1} وظیفه جدید اضافه شد.</p>';
$l['admin_step_insertedviews'] = '<p>{1} نمای مدیریتی اضافه شد.</p>';
$l['admin_step_createadmin'] ='<p>شما احتیاج دارید که یک حساب کاربری برای مدیریت انجمن بسازید تا بتوانید انجمنتان را مدیریت کنید، پس فیلد های زیر را با دقت پر کنید.</p>';
$l['admin_step_admintable'] = '<div class="border_wrapper">
			<div class="title">اطلاعات حساب مدیریت</div>

		<table class="general" cellspacing="0">
		<thead>
		<tr>
			<th colspan="2" class="first last">اطلاعات حساب</th>
		</tr>
		</thead>
		<tr class="first">
			<td class="first"><label for="adminuser">نام‌کاربری:</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminuser" id="adminuser" value="{1}" /></td>
		</tr>
		<tr class="alt_row">
			<td class="first"><label for="adminpass">رمزعبور:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass" id="adminpass" value="" autocomplete="off" onchange="comparePass()" /></td>
		</tr>
		<tr class="last">
			<td class="first"><label for="adminpass2">تکرار‌رمزعبور:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass2" id="adminpass2" value="" autocomplete="off" onchange="comparePass()" /></td>
		</tr>
		<tr>
			<th colspan="2" class="first last">اطلاعات تماس</th>
		</tr>
		<tr class="first last">
			<td class="first"><label for="adminemail">آدرس ایمیل:</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminemail" id="adminemail" value="{2}" /></td>
		</tr>
	</table>
	</div>

	<p>پس از پر کردن اطلاعات خواسته شده بر روی دکمه "مرحله بعد" کلیک کنید.</p>';

$l['admin_step_error_config'] = '<div class="error">
<h3>خطا</h3>
<p>یک یا چند خطا در ورود اطلاعات مدیریت به وجود آمده است:</p>
{1}
<p>موارد خواسته شده را تصحیح و بر روی دکمه "مرحله بعد" کلیک کنید.</p>
</div>';
$l['admin_step_error_nouser'] = 'شما نام‌کاربری ای برای حساب مدیریت انتخاب نکرده اید.';
$l['admin_step_error_nopassword'] = 'شما رمزعبور برای حساب مدیریت انتخاب نکرده اید.';
$l['admin_step_error_nomatch'] = 'رمزهای عبور وارد شده با هم یکسان نیستند.';
$l['admin_step_error_noemail'] = 'شما نشانی پست الکترونیکی ای برای حساب مدیریت وارد نکرده اید.';
$l['admin_step_nomatch'] = 'رمزعبور با تکرار رمز عبور مطابقت ندارد. لطفا آن را قبل از ادامه درست کنید.';

$l['done_step_usergroupsinserted'] = "<p>در حال وارد کردن گروه های کاربری...";
$l['done_step_admincreated'] = '<p>در حال ساخت حساب مدیریت...';
$l['done_step_adminoptions'] = '<p>در حال ساخت دسترسی های مدیریت...';
$l['done_step_cachebuilding'] = '<p>در حال ساخت اطلاعات کش...';
$l['done_step_success'] = '<p class="success">نسخه مای‌بی‌بی شما با موفقیت نصب و پیکربندی شد.</p>
<p>گروه مای‌بی بی از شما قدر دان به خاطر نصب سیستم مای بی بی و حمایت از آنهاست، در صورتی که به مشکلی برخوردید می توانید با <a href="http://My-BB.Ir/" target="_blank">پشتیبانی فارسی این سیستم</a> تماس بگیرید.</p>';
$l['done_step_locked'] = '<p>سیستم نصب کننده قفل شد. برای بیرون آوردن سیستم از قفل برای نصب دوباره باید فایل \'lock\' که در همین پوشه از هاست موجود هست را پاک کنید.</p><p>شما می توانید با استفاده از این لینک <a href="../index.php">نسخه انجمن خود را</a> یا با استفاده از این لینک<a href="../admin/index.php">قسمت مدیریتی را</a>مشاهده فرمائید.</p>';
$l['done_step_dirdelete'] = '<p><strong><span style="colour:red">لطفا پوشه \'install\' را پاک کنید تا سیستم نصب مای بی بی بسته شود.</span></strong></p>';
$l['done_whats_next'] = '<div class="error"><p><strong>انتقال در دیگر نرم‌افزارهای انجمن ساز؟</strong></p><p>سیستم ادغام مای‌بی‌بی راه حلی مناسب برای ادغام چند انجمن مای‌بی‌بی با هم یا انتقال دیگر نرم‌افزارهای انجمن ساز مشهور به مای‌بی‌بی می‌باشد. برای اطلاعات بیشتر به <a target="_blank" href="http://www.mybb.com/downloads/merge-system">سیستم ادغام</a> مراجعه فرمائید.</p>';

/* UPGRADE LANGUAGE VARIABLES */
$l['upgrade'] = "فرایند بروزسانی";
$l['upgrade_welcome'] = "<p>به سیستم بروزرسانی مای بی بی نسخه {1} خوش آمدید.</p><p><strong>مطمئن شوید که یک پشتیبان از فایلها و پایگاه داده خود گرفته‌اید سپس</strong> بنابراین در صورتی که مشکلی رخ دهد شما به راحتی می توانید به عقب بازگردید و از اول تکرار کنید.</p><p>مطمئن شوید که در هر مرحله تنها یک بار بر روی دکمه 'مرحله بعد' کلیک کنید زیرا ممکن است لود صفحات مدتی به طول بینجامد.</p><p>قبل از ادامه شما باید نسخه مای‌بی‌بی که در حال استفاده از آن بودید را انتخاب کیند و بر روی 'مرحله بعد' کلیک کنید..</p>";
$l['upgrade_templates_reverted'] = 'تبدیل قالب‌ها';
$l['upgrade_templates_reverted_success'] = "<p>تمام قالب ها به نسخه جدید بروزرسانی شدند، لطفا بر روی دکمه 'مرحله بعد' کلیک کنید.</p>";
$l['upgrade_settings_sync'] = 'هماهنگ سازی تنظیمات';
$l['upgrade_settings_sync_success'] = "<p>تنظیمات انجمن با تنظیمات آخرین نسخه انجمن ساز هماهنگ شدند.</p><p>{1} تنظیم جدید به همراه {2} گروه تنظیم جدید اضافه شد..</p><p>برای ادامه بر روی دکمه 'مرحله بعد' کلیک کنید.</p>";
$l['upgrade_datacache_building'] = 'ایجاد اطلاعات کش‌ها';
$l['upgrade_building_datacache'] = '<p>در حال ایجاد کش‌ها...';
$l['upgrade_continue'] = 'لطفا برای ادامه بر روی دکمه "مرحله بعد" کلیک کنید.';
$l['upgrade_locked'] = "<p>نصب کننده با موفقیت قفل شد.</p><p>شما می توانید از  <a href=\"../index.php\">این لینک انجمن خود</a> را مشاهده یا از<a href=\"../{1}/index.php\">این لینک قسمت مدیریت</a> را مشاهده فرمائید.</p>";
$l['upgrade_removedir'] = 'لطفا این پوشته را برای امنیت بیشتر پاک کنید.';
$l['upgrade_congrats'] = "<p>تبریک می‌گوئیم، نسخه انجمن شما با موفقیت به {1} بروزرسانی شد..</p>{2}<p><strong>مرحله بعد چیست؟</strong></p><ul><li>شما باید از گزینه 'یافتن قالب‌های بروزشده' قالب هایی که نیاز به بروزرسانی دارند را پیدا و ویرایش کنید.</li><li>مطمئن شوید که انجمن به صورت کامل کار می کند.</li></ul>";
$l['upgrade_template_reversion'] = "اخطار در تبدیل قالب‌ها";
$l['upgrade_template_reversion_success'] = "<p>تمامی تغییرات در پایگاه داده ایجاد شد</p><p>قبل از کلیک بر روی 'مرحله بعد' از قالب های سفارشی شده خود یک پشتیبان تهیه کرده زیرا در این بروزرسانی تمامی قالب ها به قالب‌های بسته بروزرسانی تبدیل می شوند.";
$l['upgrade_send_stats'] = "<p><input type=\"checkbox\" name=\"allow_anonymous_info\" value=\"1\" id=\"allow_anonymous\" checked=\"checked\" /> <label for=\"allow_anonymous\">ارسال اطلاعات ناشناس درباره مشخصات سرور شما و ... به گروه مای‌بی‌بی</label> (<a href=\"http://docs.mybb.com/Anonymous_Statistics.html\" style=\"color: #555;\" target=\"_blank\"><small>چه اطلاعاتی فرستاده می‌شود؟</small></a>)</p>";

$l['please_login'] = "لطفا وارد شوید";
$l['login'] = "ورود";
$l['login_desc'] = "لطفا نام‌کاربری و رمزعبور خود را برای شروع فرایند بروزرسانی وارد کنید* شما باید یک مدیرکل معتبر باشید تا بتوانید فرایند بروزرسانی را انجام دهید.";
$l['login_username'] = "نام‌کاربری";
$l['login_password'] = "رمز‌عبور";
$l['login_password_desc'] = "لطفا توجه داشته‌باشید که رمز‌عبور به بزرگی‌و‌کوچکی حروف حساس است.";

/* Error messages */
$l['development_preview'] = "<div class=\"error\"><h2 class=\"fail\">هشدار</h2><p>این نسخه از مای‌بی‌بی نسخه توسعه یافته‌ای برای پیش‌نمایش و آزمایش می‌باشد.</p><p>هیچ پشتیبانی‌ای برای پلاگین‌ها یا پوسته‌ها صورت نمی‌گیرد. نصب یا بروزرسانی این نسخه بر روی انجمن‌اصلی خود یک ریسک است..</div>";
$l['locked'] = 'نصب کننده قفل شده است, لطفا فایل \'lock\' را از مسیر نصب مای‌بی‌بی حذف کنید.';
$l['task_versioncheck_ran'] = "وظیفه‌ی بررسی نسخه با موفقیت اجرا شد.";
$l['no_permision'] = "شما دسترسی اجرای فرایند بروزرسانی را ندارید. شما نیاز به دسترسی مدیر‌کل برای اجرای فرایند بروزرسانی دارید.<br /><br />اگر می‌خواهید خارج شوید، لطفا بر روی <a href=\"upgrade.php?action=logout&amp;logoutkey={1}\">اینجا</a> کلیک کنید. تا بتوانید با حساب‌کاربری مدیر‌کل خود وارد شوید.";
