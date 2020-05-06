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
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contacts</a></li>
            </ul>
        </nav>
    </header>
    <div class="container about-info">
        <main>
            <h1>About ME</h1>
            <h2>Welcome to my car sales page!</h2>
            <p>Here you can find a vast variaty of cars and brands. Bear in mind some of the cars are quite pricy due to the quality value into them</p>
        </main>
        <aside>
            <div id="card">
                <div class="card-profile">
                    <h2 class="card-title">Hi, I'm Nelson!</h2>
                    <img src="https://via.placeholder.com/70" alt="profile pic">
                </div>
                <p>I am sales agent with 20 years of experience ginving the customers the best quality cars at the best price in the maket</p>
                <p>Please come by and say hello.</p>
            </div>
        </aside>
    </div>
    <section class="container">
        <h2 class="cars-title">There are our cars!</h2>
        <div id="car-cards">
            <div class="car-card-title">
                <h3>Ferarri</h3>
                <img src="https://via.placeholder.com/150" alt="ferrari">
                <p class="car-description">This is cars is priced as 4000. It is 40 years old and only 5 people have it in the world</p>
            </div>
            <div class="car-card-title">
                <h3>Porsh</h3>
                <img src="https://via.placeholder.com/150" alt="porsh">
                <p class="car-description">This is cars is priced as 4000. It is 40 years old and only 5 people have it in the world</p>
            </div>
            <div class="car-card-title">
                <h3>Fiat</h3>
                <img src="https://via.placeholder.com/150" alt="Fiat">
                <p class="car-description">This is cars is priced as 4000. It is 40 years old and only 5 people have it in the world</p>
            </div>
        </div>
    </section>
    <section class="container">
        <button class="btn-chat">Call for Help</button>
        <div class="chat-container">
            <div class="chat-cards">
                <div class="agent-card">
                    <img src="https://via.placeholder.com/50" alt="agent pic">
                    <div class="agent-chat">
                        <p><span>Agent: </span> Hello, Buyer. Thanks for reaching me out. I will show you what cars are available for sale right away!</p>
                    </div>
                </div>
                <div class="buyer-card">
                <img src="https://via.placeholder.com/50" alt="buyer pic">
                    <div class="agent-chat">
                        <p><span>Buyer: </span> Hello, Agent. I was passing by and noticed that you are selling cars. I wonder if you've got them all!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <p>By Helio Gocalves</p>
        <p>at 2020</p>
    </footer>
</body>
</html>