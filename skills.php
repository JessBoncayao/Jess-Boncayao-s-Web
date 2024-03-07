<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>


    <header class="header">
        <a href="#home" class="logo"> <span></span></a>


        <nav class="navbar">
            <a href="home.php" class="active">Home</a>
            <a href=about.php>About</a>
            <a href=skills.php>Skills</a>
            <a href=portfolio.php>Portfolio</a>
            <a href=comments.php>Comments</a>
            <a href=logout.php>Logout</a>
        </nav>
    </header>


    <h1 class="sub-title">
        My <span>Skills Set</span>
    </h1>


    <section>
        <div class="container1" id="skills">
            <h1 class="heading1">Coding <span>Skills</span></h1>
            <div class="Coding-bars">
                <div class="bars"><i style="color: #ffa500" class='bx bxl-html5'></i>
                    <div class="indfo">
                        <span>HTML</span>
                    </div>
                    <div class="progress-line html"><span></span>
                    </div>
                </div>
                <div class="bars"><i style="color: #3e60f7" class='bx bxl-css3'></i>
                    <div class="indfo">
                        <span>CSS</span>
                    </div>
                    <div class="progress-line css"><span></span>
                    </div>
                </div>
                <div class="bars"><i style="color: #eeff00" class='bx bxl-javascript'></i>
                    <div class="indfo">
                        <span>JAVASCRIPT</span>
                    </div>
                    <div class="progress-line javascript"><span></span>
                    </div>
                </div>
                <div class="bars"><i style="color: #e100ff" class='bx bxl-python'></i>
                    <div class="indfo">
                        <span>PYTHON</span>
                    </div>
                    <div class="progress-line python"><span></span>
                    </div>
                </div>
                <div class="bars"><i style="color: #56a2f8" class='bx bxl-postgresql'></i>
                    <div class="indfo">
                        <span>SQL</span>
                    </div>
                    <div class="progress-line postgresql"><span></span>
                    </div>
                </div>
            </div>
        </div>




        <div class="container">
            <h1 class="heading2">Editing <span>Skills</span></h1>
            <div class="radial-bars">

                <div class="radial-bar">
                    <svg x="0px" y="0px" viewBox="0 0 200 200">
                        <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                        <circle class="path path-1" cx="100" cy="100" r="80"></circle>
                    </svg>
                    <div class="percentage">70%</div>
                    <div class="text">Canva</div>
                </div>
                <div class="radial-bar">
                    <svg x="0px" y="0px" viewBox="0 0 200 200">
                        <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                        <circle class="path path-2" cx="100" cy="100" r="80"></circle>
                    </svg>
                    <div class="percentage">40%</div>
                    <div class="text">Figma</div>
                </div>
                <div class="radial-bar">
                    <svg x="0px" y="0px" viewBox="0 0 200 200">
                        <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                        <circle class="path path-3" cx="100" cy="100" r="80"></circle>
                    </svg>
                    <div class="percentage">45%</div>
                    <div class="text">PS</div>
                </div>
                <div class="radial-bar">
                    <svg x="0px" y="0px" viewBox="0 0 200 200">
                        <circle class="progress-bar" cx="100" cy="100" r="80"></circle>
                        <circle class="path path-4" cx="100" cy="100" r="80"></circle>
                    </svg>
                    <div class="percentage">50%</div>
                    <div class="text">Adove Lightroom</div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>