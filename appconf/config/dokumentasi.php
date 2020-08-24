 Akun Percobaan:
1. email: fulan@gmail.com
   pass: 123
   username : fulan
2. email: lennon@gmail.com
   pass: 123
   username : lennon

+-------------------------------------------------------------------------------------------------------------------------------------------------+
Note : Yang terbaru letakkan di sebelah atas

+ Ditambahkan oleh : Imanudin Tanggal 23 Juli 2016 Pukul 23:07 WIB

  Config
  routes.php

  Controller:
  - user/Discussin.php
  - user/Main.php

  View:
  - user/view_upgrade
  - user/view_discussion
  - user/view_discussion_list
  - user/view_discussion_response
  - user/view_side
  

  Tabel Database :
  - template_diskusi
  - diskusi_grade
  - diskusi_response
  - diskusi_response_like


+ Ditambahkan oleh : Imanudin Tanggal 23 Juni 2016 Pukul 09:50 WIB

  Config
  routes.php

  Controller:
  - user/Classroom.php
  - user/Group.php
  - user/Setting.php

  View:
  - user/view_chatbody
  - user/view_classroom
  - user/view_group
  - user/view_status
  - user/view_status_classroom
  - user/view_status_group
  - user/view_comment
  - user/view_comment_classroom
  - user/view_comment_group
  - user/view_setting_akun
  - user/view_setting_privacy
  - user/view_profile_status
  - user/view_profile_comment
  - user/view_chatbody

  Helper:
  - function_helper.php (function timeAgo() )

  CSS:
  - assets/main/css/custom/custom.min.css

  Tabel Database :
  - status_update_group
  - status_response_like_group
  - status_response_group
  - status_report_group
  - status_like_group


+ Ditambahkan oleh : Yulian Tanggal 27 Mei 2016 Pukul 14:00 WIB
  function helper -> edit function lihatprofile

  View:
  user/view_profile
  user/view_profile_friends
  user/view_profile_home
  user/view_profile_status
  user/view_profile_comment

+ Ditambahkan oleh : Imanudin Tanggal 24 Mei 2016 Pukul 09:00 WIB
  - Penambahan fitur chat & message

  Config
  routes.php

  Controller:
  - user/Message.php
  - user/Main.php
  - Main.php

  View:
  - user/view_main
  - user/view_home
  - user/view_message
  - user/view_messagebody
  - user/view_chatbody

  CSS:
  - assets/main/css/custom/custom.min.css

  Gambar :
  - assets/ava/avatar/jpg

  Tabel Database :
  - chat

  + Ditambahkan oleh : Yulian Tanggal 23 Mei 2016 Pukul 12:47 WIB
  - Perbaikan fitur pertemanan
  - Update status di halaman profil pengguna
  - Peletakan tombol Logout

  Controller:
  - user/Profil_pengguna.php

  View:
  user/view_main
  user/view_profile
  user/view_profile_home
  user/view_profile_status
  user/view_profile_comment
  user/view_profile_friends

+ Ditambahkan oleh : Imanudin Tanggal 4 Mei 2016 Pukul 6:00 WIB
  
  Helper:
  - function_helper.php

  Config:
  - routes.php

  Controller:
  - Main.php
  - user/Main.php
  - user/Profil_pengguna.php
  - user/Classroom.php

  View:
  - user/view_main.php
  - user/view_home.php
  - user/view_side.php
  - user/view_status.php
  - user/view_comment.php
  - user/view_classroom.php
  - user/view_home_classroom.php
  - user/view_members_classroom.php
  - user/view_status_classroom.php
  - user/view_comment_classroom.php


  CSS:
  - assets/main/css/materialize.min.css
  - assets/main/css/custom/custom.min.css

+ Ditambahkan oleh : Billy Tanggal 22 April 2016 Pukul 20:23 WIB
  Fitur:
  Administrator = cara akses edurace.esy.es/edumin

  Controller:
  - edumin/Login
  - edumin/Main

  Model:
  - Model_admin
  - Model_login

  View:
  - edumin/*
  
  Folder
  - assets/assets/*

+ Ditambahkan oleh : Iqbal Tanggal 17 April 2016 Pukul 22:13 WIB =>> hak akses pertemanan. function lihatprofil('', '', '', '');

  controller:
  -Auth.php
  -Profil_pengguna.php

  view:
  -view_profile.php

  helper:
  -function_helper.php

+ Ditambahkan oleh : Imanudin Tanggal 17 April 2016 Pukul 9:00 WIB

  folder:
  assets/main/images/smileys

  config:
  config/autoload.php (library tambah table, helper tambah smiley)

  Controller:
  user/Main.php
  user/Setting.php
  Main.php

  View:
  user/view_main.php
  user/view_home.php
  user/view_setting_akun.php
  user/view_status.php
  user/view_comment.php


  CSS:
  assets/main/css/materialize.min.css > Pengubahan style sperti ukuran font, shadow, padding, margin dll.
  assets/main/css/custom/custom.min.css > Penambahan style

+ Ditambahkan oleh : Yulian Tanggal 16 April 2016 Pukul 4:27 WIB
  database:
  kolom USERNAME pada tabel Pengguna : VARCHAR(100) unique untuk akses ke halaman profil pengguna misal : edurace.esy.es/profil/username

  folder:
  assets/ava

  config:
  config/routes.php

  COntroller:
  user/Profil_pengguna
  Auth

  View:
  user/view_profile
  user/view_main
						