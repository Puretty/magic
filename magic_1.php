<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>手品ゲーム</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0" ></h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">

      </nav>
    </div>
  </header>

  <main class="px-3">
    <h2>※貴方が選んだ数字を当ててみます。※</h2>
  </main>
    <div class="container">

<?php
    echo "<br>";
    ini_set('display_errors', '0');

    $input_data = $_GET["val"];
    $input_len = strlen($input_data);
    $input_value = substr($input_data, 1, ($input_len - 1));
    $level = substr($input_data, 0, 1);
    switch($level)
    {
        case 0:
            masic_page($level,$input_value);
            break;
        case 1:
            masic_page($level,$input_value);
            break;
        case 2:
            masic_page($level,$input_value);
            break;
        case 3:
            masic_page($level,$input_value);
            break;
        case 4:
            masic_page($level,$input_value);
            break;
        case 5:
            masic_page($level,$input_value);
            break;
        case 6:
            result_page($input_value);
            break;
    }

    function masic_page($level, $current_value)
    {
        $in_count = 0;
        $line_count = 0;

        echo ($level+1),"段階：この中で選んだ数字がありますか？ <br>";
        $point = pow(2,$level);

        for($num = $point; $num < 50; $num++)
        {
            if($in_count == $point)
            {
                $num += $point;
                $in_count = 0;
            }

            echo $num, "&nbsp;&nbsp;&nbsp;&nbsp;";
            $in_count++;
            
            if($line_count != 0 && $line_count % 5 == 0)
            {
                echo "<br>";
                //$line_count = 0;
            }
            $line_count++;
        }
        echo "<br>";
        echo "<br>";
        echo "<button id=\"btnfun1\" style=\"font-size:15px;\" class=\"btn btn-lg btn-secondary fw-bold border-white bg-white\" name=\"btnfun1\" onClick='location.href=\"magic_1.php?val=",($level+1),($current_value +$point), "\"'>あります！！</button>";
        echo "&nbsp;";
        echo "<button id=\"btnfun2\" style=\"font-size:15px;\" class=\"btn btn-lg btn-secondary fw-bold border-white bg-white\" name=\"btnfun2\" onClick='location.href=\"magic_1.php?val=",($level+1),($current_value), "\"'>ありません！</button>";
    }

    function result_page($input_value)
    {
        echo "<p style=\"color: skyblue;\">貴方が選んだ数字 ", $input_value, "です。</p>";
        echo "<button id=\"btnfun2\" style=\"margin-top: 3%;\" class=\"btn btn-lg btn-secondary fw-bold border-white bg-white\" name=\"btnfun2\" onClick='location.href=\"magic.html\"'>最初に戻る</button>";
    }

?>

</div>

<footer class="mt-auto text-white-50">
 
</footer>
</div>

</html>