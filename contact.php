<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-learning</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <header>
        <h2 class="logo">LOGO</h2>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="#">Contacts</a></li>
            </ul>
        </nav>
    </header>
    <div class="container about-info">
        <main>
            <h1>My contact page</h1>
            <h2>Welcome to my car sales page!</h2>
            <p>Here you can find a vast variaty of cars and brands. Bear in mind some of the cars are quite pricy due to the quality value into them</p>
        </main>
        <aside>
            <div id="card">
                <div class="card-profile">
                    <h2 class="card-title">Hi, <?= '#' ?>!</h2>
                    <img src="<?= '#' ?>" alt="profile pic" width="70px" height="70px">
                </div>
                <p>I am a <?= '#' ?> with <?= '#' ?> years of experience giving the customers the best quality cars at the best price in the maket</p>
                <p>Please come by and say hello.</p>
            </div>
        </aside>
    </div>
    <!-- <section class="container">
        <h2 class="cars-title">There are our cars!</h2>
        <div id="car-cards">
            <?php foreach($cars as $car) : ?>
                <div class="car-card-title">
                <h3><?= $car->name ?></h3>
                <img src="<?= $car->image_url ?>" alt="ferrari" width="150px" height="150px">
                <p class="car-description">This is cars is priced as <?= $car->price ?>. It is <?= $car->howOld() ?> years old and only <?= $car->sales ?> people have it in the world</p>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="container">
        <button class="btn-chat">Call for Help</button>
        <div class="chat-container">
            <div class="chat-cards">
                <div class="buyer-card">
                <img src="<?= '#'?>" alt="buyer pic" width="50px" height="50px">
                    <div class="agent-chat">
                        <p><span>Buyer: </span> Hello, <?= '#' ?>. I was passing by and noticed that you are selling cars. I would like to buy the <?= '#' ?>. Is it available?</p>
                    </div>
                </div>
                <div class="agent-card">
                    <img src="<?= '#'?>" alt="agent pic" width="50px" height="50px">
                    <div class="agent-chat">
                        <p><span>Agent: </span> Hello, <?= '#'?>. Thanks for reaching me out. <?= '#'?></p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <footer>
        <p>By Helio Gocalves</p>
        <p>at 2020</p>
    </footer>
</body>
</html>