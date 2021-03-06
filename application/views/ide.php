<?php
// echo "<pre>";
// print_r($Code Arena_Data);
// echo "</pre>";
// die();
?>
<section class="banner inner-page">
  <div class="banner-img"><img src="<?=base_url('resources/user/assets/');?>images/banner/1.png" alt=""></div>
  <div class="page-title">  
    <div class="container">
      <h1>Code Arena</h1>
    </div>
  </div>
</section>
<section class="breadcrumb white-bg">
  <div class="container">
    <ul>
      <li><a href="<?=site_url('/home/');?>">Home</a></li>
      <li><a href="#">Code Arena</a></li>
    </ul>
  </div>
</section>
<div class="blog-page">
  <div class="container">
    <div class="row">


<?php $rp=base_url('resources/ide/'); ?>
<!-- <!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Online compiler and IDE powered by Judge0 API">
  <meta name="keywords" content="online compiler, online ide">
  <meta name="author" content="Herman Zvonimir Došilović">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 -->
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  
<!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->

<!--   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/fonts/glyphicons-halflings-regular.woff2" rel="stylesheet"> -->

<style type="text/css">
  .btn{
    width:auto !important;
    padding: 5px 10px;
    line-height: normal;
  }
</style>

  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">

  <link rel="stylesheet" href="<?=$rp?>css/codemirror.css">
  <script src="<?=$rp?>js/codemirror.js"></script>
  <script src="<?=$rp?>js/mode/simple.js"></script>
  <script src="<?=$rp?>js/mode/clike.js"></script>
  <script src="<?=$rp?>js/mode/clojure.js"></script>
  <script src="<?=$rp?>js/mode/crystal.js"></script>
  <script src="<?=$rp?>js/mode/elixir.js"></script>
  <script src="<?=$rp?>js/mode/erlang.js"></script>
  <script src="<?=$rp?>js/mode/go.js"></script>
  <script src="<?=$rp?>js/mode/haskell.js"></script>
  <script src="<?=$rp?>js/mode/javascript.js"></script>
  <script src="<?=$rp?>js/mode/mllike.js"></script>
  <script src="<?=$rp?>js/mode/octave.js"></script>
  <script src="<?=$rp?>js/mode/pascal.js"></script>
  <script src="<?=$rp?>js/mode/python.js"></script>
  <script src="<?=$rp?>js/mode/ruby.js"></script>
  <script src="<?=$rp?>js/mode/rust.js"></script>
  <script src="<?=$rp?>js/mode/shell.js"></script>

  <script src="<?=$rp?>js/download.js"></script>

  <link rel="stylesheet" href="<?=$rp?>css/addon/dialog.css">

  <script src="<?=$rp?>js/addon/searchcursor.js"></script>
  <script src="<?=$rp?>js/addon/search.js"></script>
  <script src="<?=$rp?>js/addon/dialog.js"></script>
  <script src="<?=$rp?>js/addon/matchbrackets.js"></script>
  <script src="<?=$rp?>js/addon/closebrackets.js"></script>

  <script src="<?=$rp?>js/keymap/vim.js"></script>

  <link rel="stylesheet" href="<?=$rp?>css/ide.css">
  <script src="<?=$rp?>js/ide.js"></script>

  <title>Judge0 IDE</title>
  <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
  <link rel="icon" href="./favicon.ico" type="image/x-icon">
<!-- </head>

<body> -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          e_learn
        </a>
      </div>
      <div class="navbar-form navbar-right">
        <div class="input-group">
          <div class="input-group-btn">
            <button id="insertTemplateBtn" type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Insert template">
              <span class="fa fa-file" aria-hidden="true"></span>
            </button>
          </div>
          <select class="form-control" id="selectLanguageBtn">
            <option value="1" mode="text/x-sh">Bash (4.4)</option>
            <option value="2" mode="text/x-sh">Bash (4.0)</option>
            <option value="3" mode="text/x-pascal">Basic (fbc 1.05.0)</option>
            <option value="4" mode="text/x-csrc">C (gcc 7.2.0)</option>
            <option value="5" mode="text/x-csrc">C (gcc 6.4.0)</option>
            <option value="6" mode="text/x-csrc">C (gcc 6.3.0)</option>
            <option value="7" mode="text/x-csrc">C (gcc 5.4.0)</option>
            <option value="8" mode="text/x-csrc">C (gcc 4.9.4)</option>
            <option value="9" mode="text/x-csrc">C (gcc 4.8.5)</option>
            <option value="10" mode="text/x-c++src">C++ (g++ 7.2.0)</option>
            <option value="11" mode="text/x-c++src">C++ (g++ 6.4.0)</option>
            <option value="12" mode="text/x-c++src">C++ (g++ 6.3.0)</option>
            <option value="13" mode="text/x-c++src">C++ (g++ 5.4.0)</option>
            <option value="14" mode="text/x-c++src">C++ (g++ 4.9.4)</option>
            <option value="15" mode="text/x-c++src">C++ (g++ 4.8.5)</option>
            <option value="16" mode="text/x-csharp">C# (mono 5.4.0.167)</option>
            <option value="17" mode="text/x-csharp">C# (mono 5.2.0.224)</option>
            <option value="18" mode="text/x-clojure">Clojure (1.8.0)</option>
            <option value="19" mode="text/x-crystal">Crystal (0.23.1)</option>
            <option value="20" mode="text/x-elixir">Elixir (1.5.1)</option>
            <option value="21" mode="text/x-erlang">Erlang (OTP 20.0)</option>
            <option value="22" mode="text/x-go">Go (1.9)</option>
            <option value="23" mode="text/x-haskell">Haskell (ghc 8.2.1)</option>
            <option value="24" mode="text/x-haskell">Haskell (ghc 8.0.2)</option>
            <option value="25" mode="text/plain">Insect (5.0.0)</option>
            <option value="26" mode="text/x-java">Java (OpenJDK 9 with Eclipse OpenJ9)</option>
            <option value="27" mode="text/x-java">Java (OpenJDK 8)</option>
            <option value="28" mode="text/x-java">Java (OpenJDK 7)</option>
            <option value="29" mode="text/javascript">JavaScript (nodejs 8.5.0)</option>
            <option value="30" mode="text/javascript">JavaScript (nodejs 7.10.1)</option>
            <option value="31" mode="text/x-ocaml">OCaml (4.05.0)</option>
            <option value="32" mode="text/x-octave">Octave (4.2.0)</option>
            <option value="33" mode="text/x-pascal">Pascal (fpc 3.0.0)</option>
            <option value="34" mode="text/x-python">Python (3.6.0)</option>
            <option value="35" mode="text/x-python">Python (3.5.3)</option>
            <option value="36" mode="text/x-python">Python (2.7.9)</option>
            <option value="37" mode="text/x-python">Python (2.6.9)</option>
            <option value="38" mode="text/x-ruby">Ruby (2.4.0)</option>
            <option value="39" mode="text/x-ruby">Ruby (2.3.3)</option>
            <option value="40" mode="text/x-ruby">Ruby (2.2.6)</option>
            <option value="41" mode="text/x-ruby">Ruby (2.1.9)</option>
            <option value="42" mode="text/x-rustsrc">Rust (1.20.0)</option>
            <option value="43" mode="text/plain">Text (plain text)</option>
          </select>
        </div>
        <button class="btn btn-success" id="runBtn" data-loading-text="Running...">
          <span class="fa fa-play" aria-hidden="true"></span> Run (F9)
        </button>
        <button class="btn btn-primary" id="saveBtn" data-loading-text="Saving...">
          <span class="fa fa-floppy-disk" aria-hidden="true"></span> Save (Ctrl+S)
        </button>
        <button class="btn btn-default" id="downloadSourceBtn" data-toggle="tooltip" data-placement="bottom" title="Download source">
          <span class="fa fa-download" aria-hidden="true"></span>
        </button>
        <!-- <div class="vertical-spacer"></div> -->
        <!-- <input type="checkbox" id="vimCheckBox" data-toggle="toggle" data-on="Vim Mode On" data-off="Vim Mode Off" data-onstyle="success"> -->
      </div>
    </div>
  </nav>

  <div id="sourceEditor" style="min-height: 320px !important"></div>

  <div class="container-fluid">
    <div class="row labels">
      <div id="inputLabel" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <h4>
          <span class="fa fa-code" aria-hidden="true"></span> Input <small>optional</small>
          <button class="btn btn-default pull-right" id="downloadInputBtn" data-toggle="tooltip" data-placement="top" title="Download input">
            <span class="fa fa-download" aria-hidden="true"></span>
          </button>
        </h4>
      </div>
      <div id="outputLabel" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <h4>
          <span class="fa fa-code" aria-hidden="true"></span> Output <small id="emptyIndicator">empty</small>
          <button class="btn btn-default pull-right" id="downloadOutputBtn" data-toggle="tooltip" data-placement="top" title="Download output">
            <span class="fa fa-download" aria-hidden="true"></span>
          </button>
          <small class="pull-right" id="statusLine"></small>
        </h4>
      </div>
    </div>

    <div class="row ioEditors">
      <div id="inputEditor" class="col-xs-6 col-sm-6 col-md-6 col-lg-6"></div>
      <div id="outputEditor" class="col-xs-6 col-sm-6 col-md-6 col-lg-6"></div>
    </div>

<!--     <div class="row">
      <div id="footer" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <p>
          © 2017 <a href="https://judge0.com">Judge0</a>,
          Powered by <a href="https://api.judge0.com">Judge0 API</a>,
          Available on <a href="https://github.com/judge0/ide">GitHub</a>
        </p>
      </div>
    </div> -->
  </div>
<!-- </body>
</html> -->



    </div>
  </div>
</div>






