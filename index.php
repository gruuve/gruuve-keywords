<!DOCTYPE html>
  <html>
    <head>
            <meta charset="utf-8">
            <link rel="icon" href="https://raw.githubusercontent.com/Gruuve/icon-source/master/icong.png">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="css/custom-index.css">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">


      <!--<meta name="viewport" content="width=device-width, initial-scale=1.0"/>-->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Gruuve Keyword</title>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0 h1"><font class="temp">Gruuve </font><font class="subtag">Search</font></span>
        </nav>
        <div class="jumbotron">
            <div class="container">
                <center><h1 class="display-4"><font class="subtag2">Welcome to</font><br><font class="temp2">Gruuve </font><font class="subtag2">Keyword Tool</font></h1></center>
            </div>
        </div>
       
           <div class="container subtag3"><center>
           We created the Gruuve Keyword tool to help people understand the importance of 
           SEO in todays world. You can serach the trending keywords using a particular query and use 
           in our search console.<br><br></center>

            <form action="index.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter Query</label>
                        <input type="text" class="form-control" placeholder="Enter Query" name="word">
                    </div>
                    <button type="submit" name="submit" class="btn btn-dark btn-lg">Check keywords</button>
            </form>
            <br><br><br>

            <center>

                <code class="subtag4">

                    <?php 
                    
                    if(isset($_POST['submit'])){

                        $word = $_POST['word'];

                        if ($word == ''){
                            echo "<script>alert('Please enter a query.')</script>";
                        } 
                        else
                        {
                            $word = trim(preg_replace('/\s+/',' ', $word));
                            $word = str_replace(' ', '+', $word);

                            $url = "";
                            $json = file_get_contents($url);
                            $res = json_decode($json);

                            foreach($res as $obj){
                                echo "$obj, ";
                            }
                        }

                    }
                    
                    
                    ?>

                </code>

            </center>


       </div>
    
    <br><br><br>
      
    </body>
    </html>


    
