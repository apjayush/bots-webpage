<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="./quiz.css">
</head>
<body>
    <nav class="navbar">
       <ul class="first_ul">
       <li class="nav_list"><a class="first_a" href="./index.php">Home</a></li>
        <li class="nav_list"><a class="first_a" href="./about.php">About</a></li>
        <li class="nav_list"><a class="first_a" href="./privacy_policy.php">Privacy Policy</a></li>
        <li class="nav_list"><a class="first_a" href="./quiz1.php">Start Quiz</a></li>
       </ul>
    </nav>

    <div class="container">
    <h2 class="head">Enter your details to get results</h2>
    <hr>
    <label for="name" class="labelHead">Enter your name   : 
    <input type="text" id="name" name="name" width="200px">
    </label>
    <label for="email" class="labelHead">Enter your email :
    <input type="email" id="email" name="email" width="200px">
    </label>
    <button type="submit" class="submitBtn" id="btnSub">Submit</button>
    <h2 class="headSubmit" id="afterSub"></h2>
    </div>


    <script>
        let btnSub = document.getElementById('btnSub');
        let afterSub = document.getElementById('afterSub');
        btnSub.addEventListener('click', ()=>{
            let name = document.getElementById('name').value;
            let email = document.getElementById('email').value;
            if(name.length>0 && email.length>0 ){
                afterSub.innerHTML = 'Sending your scores shortly to your email';
            }
            else{
                alert('Enter valid name and password');
            }
            
        })
    </script>
</body>
</html>