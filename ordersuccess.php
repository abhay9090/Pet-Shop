<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .conatiner{
            height: 600px;
            width: 100%;
            background-color: rgb(255, 252, 248);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .mainconatiner{
            height: 410px;
            width: 560px;
            border-radius: 8px;
            background-color: white;
            flex-direction: column;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            box-shadow: 0 8px 8px rgba(0, 0, 0, 0.1);
        }
        .check{
            height: 170px;
            width: 170px;
            background-image: url(sucess.png);
            background-size: cover;
        }
        .thankyou p{
           
        }
        button{
            height: 45px;
            width: 145px;
            border: none;
            color: white;
            border-radius: 7px;
            background-color: rgb(248, 169, 22);
        }
        button a{
            text-decoration: none;
            color: white;
            font-size: 16px;
            font-weight: 700;
        }

    </style>
</head>
<body>
    <div class="conatiner">
        <div class="mainconatiner">
            <div class="check">

            </div>
            <div class="thankyou" >
                <h2 style="margin-left: 110px;">Thank you for ordering!</h2>
                <div  style="margin-top: 20px; color: rgba(0, 0, 0, 0.59);">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.Nam ducimus cum  </p>
                <p style="margin-left: 70px;">accusantium,  laboriosam velit explicabo rem magni?</p>

                </div>
            </div>
            <button><a href="index.php">Continue Shoping</a></button>
        </div>
    </div>
</body>
</html>