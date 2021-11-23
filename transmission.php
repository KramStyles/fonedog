<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fone Dog Solution Section</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #1A384E;
            color: #92B8D9;
            font-family: Montserrat;
        }
        .container{
            width: 80%;
            margin: 100px auto;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .children{
            background-color: #265F85;
            background-image: linear-gradient(to bottom, #265F85, #1A384E);
            text-align: center;
            padding: 50px;
            width: 48.5%;
            border-radius: 25px;
            box-shadow: 6px 6px 10px black;
            margin: 15px 0;
            position: relative;
        }
        .children img{
            width: 10%;
        }
        .children h1{
            margin: 20px 0;
        }
        .wid-32{
            width: 32%;
        }
        .wid-32 img{
            width: 20%;
        }
        .slide-down{
            background-image: linear-gradient(to bottom, #0f3c6e, #0A1F2E 150px);
            height: 100%;
            padding: 50px;
            width: 100%;
            border-radius: 25px;
            position: absolute;
            top: 0;
            left: 0;
            /*display: none;*/
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="children">
            <img src="images/phone-transfer.svg" alt="">
            <h1>Phone Transfer</h1>
            <p>Switch files between Android and ios.Easily transfer and backup text Messages,contacts, , videos, music, SMS oncomputer.</p>
            <div class="slide-down"></div>
            <div class="twins"></div>
        </div>
        <div class="children">
            <img src="images/android-data-recovery.svg" alt="">
            <h1>Android Data Recovery</h1>
            <p>Recover deleted messages, contacts, call logs, photos, videos, whatsapp data from android phone/tablets/SD card.</p>
            <div class="slide-down"></div>
            <div class="twins"></div>
        </div>
        <div class="children wid-32">
            <img src="images/ios-data-recovery.svg" alt="">
            <h1>IOs Data Recovery</h1>
            <p>Recover deleted messages, contacts, photos, call history, videos, Whatsapp and much more from iphone.</p>
            <div class="slide-down"></div>
            <div class="twins"></div>
        </div>
        <div class="children wid-32">
            <img src="images/ios-system-recovery.svg" alt="">
            <h1>IOS System Recovery</h1>
            <p>Repair your iphones and ipad back to normal status without data loss from various ios System issues.</p>
            <div class="slide-down"></div>
            <div class="twins"></div>
        </div>
        <div class="children wid-32">
            <img src="images/broken-android-data-extraction.svg" alt="">
            <h1>Broken Android Data Extraction</h1>
            <p>Restore photos, messages, whatsapp, videos, contacts, call history from broken samsung phone.</p>
            <div class="slide-down"></div>
            <div class="twins"></div>
        </div>
    </div>
</body>
</html>