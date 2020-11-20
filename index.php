<html>
<head>
    <title>Интернет-магазин</title>
    <link rel="stylesheet" href="./style/style.css">
    <style>
        header{
            background-color: white;
        }
        .content{
            padding:0% 10%;
        }
        #root-catalog{
            display:flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content:center;
        }
        .container-element{
            width: 24%;
            /*border: 1px solid black;*/
            display: flex;
            flex-direction:column;
            align-items: center;
            justify-content:center;
            height: 550px;
        }
        .container-element__imgContainer{
            width: 75%;
            height: 400px;
            border: 1px solid lightgray;
            display: flex;
            align-items: center;
            justify-content: center
        }
        .container-element__img{
            width: 90%;
            height: auto%;
        }
        .container-element__title{
            font-weight: bold;
        }
        .container-element__price{
            margin-bottom:10px;
        }
        .textContainer{
            text-align:center;
            margin-top: 30px;
        }
        .more-info-button{
            border: 1px solid black;
            border-radius: 15px;
            padding:5px;
        }
        .category-title{
            text-align:center;
            margin: auto;
        }
        .form-container{
            display:flex;
            align-items:center;
            justify-content:center;
            margin-top: 40px;
        }
    </style>
</head>
<body>
<?php
header("Access-Control-Allow-Origin: *");
include_once "header.php"; ?>
<div class="content">
    <?php include_once "controller.php";?>
</div>
<?php include_once "footer.php";
?>
</body>
</html>