<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            width: fit-content;
            margin: 20px auto;
        }
        form >*{
            margin: 4px;
        }
        
        label{
            width: 200px;
        }
        button{
            margin: 30px 5px;
            padding:5px;
            cursor:pointer;
        }
        
    </style>
</head>
<body>
    <form action="thankyou" method="POST">
        @csrf
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom"/><br/>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" /><br/>
        <label for="msg">Message</label>
        <input type="text" name="msg" id="msg" /><br/>
        <button type="submit">Submit</button>
    </form>
</body>
</html>