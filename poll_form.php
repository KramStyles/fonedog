<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Poll Form</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #FAFAFA;
            font-family: Montserrat;
        }
        .container{
            width: 75%;
            min-height: 100px;
            margin: 100px auto;
        }
        .container p{
            margin: 30px 0;
        }
        label{
            color: #666;
            font-size: 14px;
            font-weight: bold;

        }
        .pascal_input{
            width: 100%;
            padding: 15px;
            font-size: 20px;
            color: dodgerblue;
            margin-top: 5px;
            margin-bottom: 25px;
            border: none;
            border-radius: 15px;
        }
        .pascal_input:hover{
            outline: none;
        }
        textarea{
            height: 150px;
        }

        input[type="button"]{
            text-align: center;
            padding: 20px;
            border: none;
            border-radius: 7px;
            color: white;
            font-weight: bold;
        }
        hr{
            margin: 30px 0;
            height: 10px;
            background-color: black;
            clear: both;
        }
        .right{
            float: right;
        }
        .left{
            float: left;
        }
        select{
            width: 100%;
            padding: 15px;
            border-color: white;
            background: white;
            display: block;
            margin: 10px 0;
            border-radius: 5px;
        }
        .wid-50{
            width: 45%;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Create a Poll</h1>
        <p>Complete the below fields to create your poll</p>

        <form>
            <label for="poll_title">POLL TITLE</label>
            <input type="text" id="poll_title" class="pascal_input" placeholder="Eg. Gala Night">

            <label for="poll_question_1">POLL QUESTION 1</label>
            <textarea id="poll_question_1" placeholder="Eg. What is your favorite colour?" class="pascal_input"></textarea>

            <label for="poll_option_1">Poll Option</label>
            <input type="text" class="pascal_input" placeholder="Eg. Blue" id="poll_option_1">

            <label for="poll_option_2">Poll Option</label>
            <input type="text" class="pascal_input" id="poll_option_2" placeholder="Eg. Dark Red">

            <input type="button" value="Add another Option">
            <input type="button" value="Remove last Option" class="right">

            <hr>

            <div class="left wid-50">
                <label for="poll_category">Poll Category</label>
                <select id="poll_category">
                    <option>Choose a category</option>
                    <option value="">Entertainment</option>
                    <option value="">Fashion</option>
                </select>
            </div>

            <div class="right wid-50">
                <label for="poll_visibility">Poll Visibility</label>
                <select name="" id="poll_visibility">
                    <option value="">Public</option>
                    <option value="">Private</option>
                </select>
            </div>
            <hr>
            <input type="button" value="Create New Poll" style="width: 100%; margin: 10px 0">
            <input type="button" value="Remove last Poll" style="width: 100%; margin: 10px 0">
            <input type="button" value="Create Your poll" style="width: 100%; margin: 10px 0">


        </form>
    </div>
</body>
</html>