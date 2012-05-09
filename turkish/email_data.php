<?php

//---------------------------------------------------
//	Admin Notification of Mailinglist subscription
//--------------------------------------------------

function admin_notify_mailinglist_title()
{
return <<<EOF
E-Posta listenize yeni biri kayıt oldu
EOF;
}

function admin_notify_mailinglist()
{
return <<<EOF
E-Posta listesi başvurusu kabul edildi.

E-Posta Adresi: {email}
E-Posta Listesi: {mailing_list}
EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Entry
//--------------------------------------------------

function admin_notify_entry_title()
{
return <<<EOF
Yeni bir weblog yazısı yazıldı
EOF;
}

function admin_notify_entry()
{
return <<<EOF
Aşağıda belirtilen webloga yeni bir yazı yazıldı: 
{weblog_name}

Yazı başlığı:
{entry_title}

Gönderen/Yazan: {name}
E-Posta: {email}

Yazıyı okumak için aşağıdaki adrese gidiniz: 
{entry_url}

EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Member Registrations
//--------------------------------------------------

function admin_notify_reg_title()
{
return <<<EOF
Üye kayıt bilgilendirmesi
EOF;
}

function admin_notify_reg()
{
return <<<EOF
{name} isimli kişi yeni bir üye kayıt başvusurunda bulundu.

Site adı: {site_name}

Site kontrol paneli: {control_panel_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Comment
//--------------------------------------------------

function admin_notify_comment_title()
{
return <<<EOF
Yeni bir yorum aldınız
EOF;
}

function admin_notify_comment()
{
return <<<EOF

{weblog_name}
adlı weblog için yeni bir yorum yapıldı.

Yorum başlığı:
{entry_title}

Yorum adresi: 
{comment_url}

Yorumcu: {name}
E-Posta: {email}
URL: {url}
Konum: {location}

{comment}
EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Trackback
//--------------------------------------------------

function admin_notify_trackback_title()
{
return <<<EOF
Yeni bir takip talebi aldınız
EOF;
}

function admin_notify_trackback()
{
return <<<EOF
{entry_title}
başlklı yazınız için bir takip talebi aldınız.

Yazının adresi: 
{comment_url}

Takip talebinin gönderildiği weblog:
{sending_weblog_name}

Yazı Başlığı:
{sending_entry_title}

Weblog Adresi:
{sending_weblog_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Membership Activation Instructions
//--------------------------------------------------

function mbr_activation_instructions_title()
{
return <<<EOF
Aktivasyon kodunuz
EOF;
}

function mbr_activation_instructions()
{
return <<<EOF
Üyelik talebiniz için teşekkür ederiz.

Hesabınızı etkinleştirebilmek için lütfen aşağıdaki adrese gidin:

{unwrap}{activation_url}{/unwrap}

Teşekkürler!

{site_name}

{site_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Member Forgotten Password Instructions
//--------------------------------------------------

function forgot_password_instructions_title()
{
return <<<EOF
Üye Giriş Bilgileri
EOF;
}

function forgot_password_instructions()
{
return <<<EOF
{name},

Şifrenizi sıfırlamak için lütfen aşağıdaki adrese gidin:

{reset_url}

Şifreniz otomatik olarak sıfırlanacak ve size sistem tarafından yeni bir şifre gönderilecek.

Eğer şifrenizi sıfırlamak istemiyorsanız mesajda yer alan linke gitmeyin. 
Bu mesajda belirtilen link 24 saat içerisinde etkinliğini yitirecektir.

{site_name}
{site_url}
EOF;
}
/* END */



//---------------------------------------------------
//	Reset Password Notification
//--------------------------------------------------

function reset_password_notification_title()
{
return <<<EOF
Yeni Üye Giriş Bilgileri
EOF;
}

function reset_password_notification()
{
return <<<EOF
{name},

Yeni giriş bilgileriniz aşağıdadır:

Kullanıcı Adı: {username}
Şifre: {password}

{site_name}
{site_url}
EOF;
}
/* END */



//---------------------------------------------------
//	Validated Member Notification
//--------------------------------------------------

function validated_member_notify_title()
{
return <<<EOF
Üye hesabınız etkinleştirilmiştir
EOF;
}

function validated_member_notify()
{
return <<<EOF
{name},

Üye hesabınız etkinleştirilmiştir. Hesabınıza giriş yapabilirsiniz.

Teşekkürler!

{site_name}
{site_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Decline Member Validation
//--------------------------------------------------

function decline_member_validation_title()
{
return <<<EOF
Üyelik başvurunuz kabul edilmedi.
EOF;
}

function decline_member_validation()
{
return <<<EOF
{name},

Üzgünüz, site yöneticileri üyelik başvurunuzu kabul etmedi.

{site_name}
{site_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Mailinglist Activation Instructions
//--------------------------------------------------

function mailinglist_activation_instructions_title()
{
return <<<EOF
E-Posta Onayı
EOF;
}

function mailinglist_activation_instructions()
{
return <<<EOF
"{mailing_list}" adlı e-posta listesine katıldığınız için teşekkür ederiz!

Lütfen aşağıdaki linke tıklayarak e-posta adresinizi onaylayınız.

Eğer listemize eklenmek istemiyorsanız bu mesajı önemsemeyiniz.

{unwrap}{activation_url}{/unwrap}

Teşekkürler!

{site_name}
EOF;
}
/* END */



//---------------------------------------------------
//	Comment Notification
//--------------------------------------------------

function comment_notification_title()
{
return <<<EOF
Yorumunuza yeni bir cevap geldi
EOF;
}

function comment_notification()
{
return <<<EOF
{weblog_name}
adlı weblog için yazmış olduğunuz yoruma cevap yazıldı.

Cevap başlığı:
{entry_title}

Yorum adresi:
{comment_url}

{comment}

Bu yorum için daha fazla bilgilendirme mesajı almak istemiyorsanız aşağıdaki linke tıklayın:
{notification_removal_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Gallery Comment
//--------------------------------------------------

function admin_notify_gallery_comment_title()
{
return <<<EOF
Yeni bir yorum aldınız
EOF;
}

function admin_notify_gallery_comment()
{
return <<<EOF
{gallery_name}
adlı fotoğraf galerisi için bir yorum aldınız.

Yorum başlığı:
{entry_title}

Yorum adresi: 
{comment_url}

{comment}
EOF;
}
/* END */

//---------------------------------------------------
//	Gallery Comment Notification
//--------------------------------------------------

function gallery_comment_notification_title()
{
return <<<EOF
Yorumunuza yeni bir cevap geldi
EOF;
}

function gallery_comment_notification()
{
return <<<EOF
Aşağıda belirtilen galeride izlemekte olduğunuz bir fotoğraf girişine yapmış olduğunuz yoruma cevap yazıldı:
{gallery_name}

Yorum adresi:
{comment_url}

{comment}

Bu yorum için daha fazla bilgilendirme mesajı almak istemiyorsanız aşağıdaki linke tıklayın:
{notification_removal_url}
EOF;
}
/* END */



//---------------------------------------------------
//	Admin Notification of New Forum Post
//--------------------------------------------------

function admin_notify_forum_post_title()
{
return <<<EOF
{forum_name} adlı foruma yeni bir mesaj gönderildi
EOF;
}

function admin_notify_forum_post()
{
return <<<EOF
{name_of_poster} isimli kullanıcı {forum_name} adlı foruma bir mesaj gönderdi

Konu başlığı:
{title}

Mesaj adresi:
{post_url}

{body}
EOF;
}
/* END */


//---------------------------------------------------
//	Forum Post User Notification
//--------------------------------------------------

function forum_post_notification_title()
{
return <<<EOF
{forum_name} adlı foruma bir mesaj gönderildi
EOF;
}

function forum_post_notification()
{
return <<<EOF
{forum_name} adlı forumda takip ettiğiniz bir konuya yeni mesaj gönderildi.

Konu başlığı:
{title}

Mesaj Adresi:
{post_url}

{body}

Bu konu başlığı için daha fazla bilgilendirme mesajı almak istemiyorsanız aşağıdaki linke tıklayın:
{notification_removal_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Private Message Notification
//--------------------------------------------------

function private_message_notification_title()
{
return <<<EOF
Yeni bir Özel Mesaj aldınız
EOF;
}

function private_message_notification()
{
return <<<EOF

{recipient_name},

{sender_name} size '{message_subject}' başlıklı yeni bir Özel Mesaj Gönderdi.

{site_url}
adresinde sistemimize giriş yaparak Posta Kutu'nuda size gönderilen bu mesajı okuyabilirsiniz.

Eğer Özel Mesaj'larla ilgili daha fazla bilgilendirme mesajı almak istemiyorsanız, E-Posta Ayarlarında ilgili ayarı kapalı duruma getirebilirsiniz.
EOF;
}
/* END */


/* -------------------------------------
/*  Notification of Full PM InBox
/* -------------------------------------*/

function pm_inbox_full_title()
{
return <<<EOF
Özel Mesaj Kutu'nuz Doldu
EOF;
}

function pm_inbox_full()
{
return <<<EOF
{recipient_name},

{sender_name} isimli kullanıcı size bir Özel Mesaj göndermeye çalıştı. Ancak mesaj kutunuz dolduğu için gelen yeni mesajı size ulaştıramyoruz.
Özal Mesaj Kutunuz limitiniz olan {pm_storage_limit} mesajdan daha fazla mesaj barındıramaz.

Lütfen aşağıdaki adresten sisteme giriş yaparak, gereksiz veya eski mesajlarınızı posta kutunuzdan silin:
{site_url}
EOF;
}
/* END */


/* -------------------------------------
/*  Notification of Forum Topic Moderation
/* -------------------------------------*/

function forum_moderation_notification_title()
{
return <<<EOF
Kontrol Bilgilendirmesi: {forum_name}
EOF;
}

function forum_moderation_notification()
{
return <<<EOF
{name_of_recipient}, site yöneticilerinden biri mesajınızı gözden geçirerek aşağıda belrtilen kontrolü gerçekleştirdi:
{moderation_action}

Konu başlığı:
{title}

Kon adresi:
{thread_url}
EOF;
}
/* END */


/* -------------------------------------
/*  Notification of Forum Post Report
/* -------------------------------------*/

function forum_report_notification_title()
{
return <<<EOF
{forum_name} adlı forumda bir mesaj için kontrol talebi açıldı
EOF;
}

function forum_report_notification()
{
return <<<EOF
{reporter_name}, {author} tarafndan yazılan bir mesaj için kontrol talebinde bulundu:
{forum_name}

Kontrol talebi için belirtilen nedenler:
{reasons}

{reporter_name} tarafından eklenen notlar:
{notes}

Konu adresi:
{post_url}

Rapor edilen konunun içeriği:
{body}
EOF;
}
/* END */


/* -------------------------------------
//  OFFLINE SYSTEM PAGE
/* -------------------------------------*/

function offline_template()
{
return <<<EOF
<html>
<head>

<title>Site Kapalı</title>

<style type="text/css">

body { 
background-color:	#ffffff; 
margin:				50px; 
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size:			11px;
color:				#000;
background-color:	#fff;
}

a {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
letter-spacing:		.09em;
text-decoration:	none;
color:              #330099;
background-color:   transparent;
}
  
a:visited {
color:				#330099;
background-color:	transparent;
}

a:hover {
color:				#000;
text-decoration:    underline;
background-color:	transparent;
}

#content  {
border:				#999999 1px solid;
padding:			22px 25px 14px 25px;
}

h1 {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
font-size:			14px;
color:				#000;
margin-top: 		0;
margin-bottom:		14px;
}

p {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		12px;
margin-bottom: 		14px;
color: 				#000;
}
</style>

</head>

<body>

<div id="content">

<h1>Site Kapalı</h1>

<p>Sitemiz geçici bir süre için devre dışıdır.</p>

</div>

</body>

</html>
EOF;
}
/* END */


/* -------------------------------------
//  User Messages Template
/* -------------------------------------*/

function message_template()
{
return <<<EOF
<html>
<head>

<title>{title}</title>

<meta http-equiv='content-type' content='text/html; charset={charset}' />

{meta_refresh}

<style type="text/css">

body { 
background-color:	#ffffff; 
margin:				50px; 
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size:			11px;
color:				#000;
background-color:	#fff;
}

a {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
letter-spacing:		.09em;
text-decoration:	none;
color:              #330099;
background-color:   transparent;
}
  
a:visited {
color:				#330099;
background-color:	transparent;
}

a:active {
color:				#ccc;
background-color:	transparent;
}

a:hover {
color:				#000;
text-decoration:    underline;
background-color:	transparent;
}

#content  {
border:				#000 1px solid;
background-color: 	#DEDFE3;
padding:			22px 25px 14px 25px;
}

h1 {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
font-size:			14px;
color:				#000;
margin-top: 		0;
margin-bottom:		14px;
}

p {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		12px;
margin-bottom: 		14px;
color: 				#000;
}

ul {
margin-bottom: 		16px;
}

li {
list-style:			square;
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		8px;
margin-bottom: 		8px;
color: 				#000;
}

</style>

</head>

<body>

<div id="content">

<h1>{heading}</h1>

{content}

<p>{link}</p>

</div>

</body>

</html>
EOF;
}
/* END */


/* -------------------------------------
//  Mailing List Template
/* -------------------------------------*/

function mailinglist_template()
{
return <<<EOF
{message_text}

E-posta listesinden çıkmak için bu linke tıklayınız:
{if html_email}<a href="{unsubscribe_url}">{unsubscribe_url}</a>{/if}
{if plain_email}{unsubscribe_url}{/if}
EOF;
}
/* END */


?>