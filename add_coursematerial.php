
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add course material</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>

<div class="logo">
<a href="dashboard.html"><img src="images/logo.png" height="50" width="50">
</a>
   
</div>
<div class="container">

    <div class="admin-product-form-container">

        <form action="add_coursematerialback.php" method="post" enctype="multipart/form-data">
            <h3>Add Course Material</h3>

            <input   placeholder="Course Id" name="c_id" class="box">
            <input type="file" placeholder="course_file" name="file" class="box">
            <input type="submit" class="btn" name="add_course" value="Add Course">
        </form>

    </div>

    
    <div class="product-display">
        <table class="product-display-table">
            <thead>
            <tr>
                
                <th>Material id</th>
                
            </tr>
            </thead>
            
                <tr>
                    <td> mone nai</td>
                    
                    <td>
                        <a href="#" class="delete">
                            <i class="fas fa-trash"></i> delete </a>
                    </td>
                </tr>     
        </table>

    </div>

    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

        :root{
            --green:#27ae60;
            --black:#333;
            --white:#fff;
            --bg-color:#eee;
            --box-shadow:0 .9rem 1rem rgba(0,0,0,.1);
            --border:.1rem solid var(--black);
        }

        *{
            font-family: 'Poppins', sans-serif;
            margin:0;
            padding:0;
            box-sizing: border-box;
            outline: none;
            border:none;
            text-decoration: none;

        }
        .delete{
            display: block;
            width: 100%;
            cursor: pointer;
            border-radius: .5rem;
            margin-top: 1rem;
            font-size: 1.7rem;
            padding:1rem 3rem;
            color:white;
            text-align: center;
            background: indianred;
        }

        html{
            font-size: 45%;
            /*overflow-x: hidden;*/
        }
        body{
            background-color: #F6F6F6;
        }

        .btn{
            display: block;
            width: 100%;
            cursor: pointer;
            border-radius: .5rem;
            margin-top: 1rem;
            font-size: 1.7rem;
            padding:1rem 3rem;
            background: #7faba8;
            color:white;
            text-align: center;
        }

        .btn:hover{
            background: powderblue;
            color: black;
        }
        .delete:hover{
            background: tomato;
        }

        .message{
            display: block;
            background: var(--bg-color);
            padding:1.5rem 1rem;
            font-size: 2rem;
            color:var(--black);
            margin-bottom: 2rem;
            text-align: center;
        }

        .container{
            max-width: 1200px;
            padding:2rem;
            margin:0 auto;
        }

        .admin-product-form-container.centered{
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;

        }

        .admin-product-form-container form{
            max-width: 100rem;
            margin:0 auto;
            padding:2rem;
            border-radius: .5rem;
            background: var(--bg-color);
        }

        .admin-product-form-container form h3{
            text-transform: uppercase;
            color:var(--black);
            margin-bottom: 1rem;
            text-align: center;
            font-size: 2.5rem;
        }

        .admin-product-form-container form .box{
            width: 100%;
            border-radius: .5rem;
            padding:1.2rem 1.5rem;
            font-size: 1.7rem;
            margin:1rem 0;
            background: var(--white);
            text-transform: none;
        }

        .product-display{
            margin:2rem 0;
        }

        .product-display .product-display-table{
            width: 100%;
            text-align: center;
        }

        .product-display .product-display-table thead{
            background: var(--bg-color);
        }

        .product-display .product-display-table th{
            padding:1rem;
            font-size: 2rem;
        }


        .product-display .product-display-table td{
            padding:1rem;
            font-size: 2rem;
            border-bottom: var(--border);
        }

        
    </style>
</body>
</html>
