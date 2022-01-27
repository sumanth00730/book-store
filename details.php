<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container border">
        <?php
            $conn=mysqli_connect("localhost","root","","book store");

            if(!$conn)
                echo mysqli_connect_error();
            else{
                $qur = "select bookid,bookname,price,author from eng1;";
                $res = mysqli_query($conn,$qur);
                if(!$res)
                    echo mysqli_connect_error();
                else{
                    if(mysqli_num_rows($res)>0){
                        echo $_POST["cat"];
                        while($rw = mysqli_fetch_array($res)){
                            echo "<div class='row'>";
                            echo "<div class='col-lg-4 border'>".$rw["bookid"].' '.$rw["bookname"].' '.$rw["price"].' '.$rw["author"]."</div>";
                            echo "</div>";
                        }
                    }else{
                        echo "zero rows";
                    }
                }
            }
        ?>
    </div>
</body>
</html>