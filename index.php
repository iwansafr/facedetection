<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Face APP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }
        .container {
            width: 600px;
            background: rgba(0,0,0,0.05);
            margin: 0px auto;
            height: 96vh;
            padding-top: 30px;
            position: relative;
        }

        .container-footer {
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            bottom: 50px;
            width: 100%;
        }

        .button-footer {
            padding: 10px;
            background: #745296;
            font-size: 17px;
            color: #fff;
            width: 70%;
            cursor: pointer;
            border: 1px solid #745296;
            outline: none;
        }

        .user {
          width: 100%;
          padding: 5px;
          background: #fff;
          box-shadow: 0px 1px 2px 0px rgba(0,0,0,0.2);
          margin: 7px 0px;
          display: flex;
          align-items: center;
        }
        .user img {
          width: 100px;
          margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">

        <?php
$page = !empty($_GET['page']) ? $_GET['page'] : 'register';
include $page . ".php";
?>
        <div class="container-footer">
          <div style='width: 50%; text-align: center'>
            <a href="?page=register">
              <button class="button-footer">
                Register
              </button>
            </a>
          </div>
          <div style='width: 50%; text-align: center'>
            <a href="?page=detected">
              <button class="button-footer">
                Detected
              </button>
            </a>
          </div>
        </div>
    </div>
</body>
</html>
