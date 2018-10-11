<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{asset('./favicon.ico')}}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>APTECH PHP LARAVEL CRUD USERS DEMO</title>
  <link rel="stylesheet" href="{{asset('./css/bootstrap.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('./css/styles.css')}}">
</head>

<body>
  @include('layout.header')
  <hr> 
@section('content') @show
  <hr>
  @include('layout.footer')
</body>

</html>

<?php
$arr = [
  "id" => 4469,
  "title" => "Crashzone - how to setup Estimage",
  "slug" => "crashzone-how-to-setup-estimage",
  "description" => "Crashzone - how to setup Estimage",
  "content" => "<div>\r\n\r\n<img src=\"http://www.crashzone.com.au/wp-content/uploads/2010/07/mini-front-end.jpg\" alt=\"Mini front end shot\" />\r\n\r\n<strong>Process for setting up Estimage on Crashzone</strong>\r\n\r\n* Contact Stelvio to download and install the Estimage program to your computer\r\n* Please note Stelvio charge you a yearly support fee\r\n* Estimage provides you with a user name and password to access their program\r\n* Once Estimage is installed Crashzone can finalise the settings and provide training.\r\n\r\nStelvio ( Estimage )\r\n\r\nPhone Number: 02 9455 1000\r\n<p style=\"font-weight: 300;\">Estimage Support: 02 9455 1055</p>\r\nWebsite: <a href=\"https://www.estimage.com/MainWeb/login.jsp\">www.estimage.com</a>\r\n\r\n&nbsp;\r\n\r\n<a title=\"Crashzone Estimage user manual\" href=\"http://www.crashzone.com.au/wp-content/uploads/2010/07/crashzone-estimage-user-manual-20100719.pdf\">Crashzone Estimage user manual</a>\r\n\r\nFor more information please contact support@crashzone.com.au\r\n\r\n</div>\r\n\r\n\r\n&nbsp;",
  "view" => 0,
  "reputation" => 0,
  "user_id" => 2048,
  "status" => "publish",
  "comment_status" => "open",
  "old_guid" => "http://www.crashzone.com.au/?p=4469",
  "created_at" => "2017-09-25 09:00:39",
  "updated_at" => "2017-11-01 05:54:40",
  "next_slug" => "classic-holden-found-with-998km-on-the-clock",
  "previous_slug" => "crashzone-is-the-1st-free-quote-system-you-can-use-right-in-your-web-browser",
  "author" => [
    "id" => 2048,
    "name" => "nam",
    "email" => "nam@autointegrity.com.au",
    "created_at" => "2018-08-24 07:13:57",
    "updated_at" => "2018-08-24 07:13:57"
  ],
  "images" => [
    [
      "id" => 885,
      "name" => "mini-front-end",
      "alt" => "mini-front-end",
      "slug" => "mini-front-end-7ab60774-e81f-36e8-ae05-e594189db14f",
      "path" => "/wp-content/uploads/2010/07/mini-front-end.jpg",
      "extension" => "jpg",
      "mime_type" => null,
      "size" => null,
      "created_at" => "2018-09-07 07:36:07",
      "updated_at" => "2018-09-07 07:36:07",
      "deleted_at" => null,
      "pivot" => [
        "post_id" => 4469,
        "image_id" => 885,
        "created_at" => "2018-09-07 07:36:07",
        "updated_at" => "2018-09-07 07:36:07"
      ]
    ]
  ],
  "categories" => [
    [
      "id" => 113,
      "parent_id" => null,
      "name" => "Insurance",
      "slug" => "insurance",
      "created_at" => "2018-08-07 12:29:43",
      "updated_at" => null,
      "deleted_at" => null,
      "posts_count" => 6,
      "pivot" => [
        "post_id" => 4469,
        "category_id" => 113,
        "created_at" => "2018-08-07 12:29:58",
        "updated_at" => null
      ]
    ]
  ]
];

?>