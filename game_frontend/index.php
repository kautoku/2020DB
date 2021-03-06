<!DOCTYPE html>
<html lang="zh-TW">
    <head>
        <title>Database Project</title>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatiable" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/index.css">
    </head>

    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            
            <a class="navbar-brand" href="#"><img src="./img/db.png" class="logo">Esports Database</a>
           
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                       Team
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="./subpage/team.php">List</a>
                        <a class="dropdown-item" href="./subpage/Manager.php">Manager</a>
                        <a class="dropdown-item" href="./subpage/playerlist.php">Player</a>
                        <a class="dropdown-item" href="./subpage/Sponsor.php">Sponsor</a>
                        <a class="dropdown-item" href="./subpage/coach.php">coach</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Esports
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="./subpage/competition.php">Competition</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Game
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="./subpage/Game.php">List</a>
                    <a class="dropdown-item" href="./subpage/producer.php">Producer</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      Relation
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="./subpage/Has_joined.php">Has Joined</a>
                      <a class="dropdown-item" href="./subpage/Is_sponsor_of.php">Team Sponsor</a>
                    </div>
                  </li>
              </ul>
          
                       
            
        </nav>
        <div class="row">
            <div class="col">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <!-- 自動換頁 -->
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="3" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="2000" align="center">
                            <img src="./img/new01.jpg"d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item" data-interval="2000" align="center">
                            <img src="./img/New02.jpg" class="d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item" data-interval="2000" align="center">
                            <img src="./img/New03.jpg" class="d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item" data-interval="2000" align="center">
                            <img src="./img/New04.jpg" class="d-block w-50" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            
        </div>  

        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
