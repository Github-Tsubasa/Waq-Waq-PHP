<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{   
    public  function    index(){

        return <<<E0F
  <html>
  <head>
  <title>Hello/Index</title>
  <style>
  body {font-size: 16pt; color: #999;
    }
  h1 {font-size:100pt; text-align:right; color:#eee;
      margin:-40px  0px  -50px  0px; }
  </style>
  </head>
  <body>
    <h1>Index</h1>
    <p>これはUesrsコントローラのIndexアクションです。</p>
  </body>
  </html>
  E0F;
    }
}
