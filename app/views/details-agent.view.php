<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Form</title>
</head>
<body>
    <h1>The Agent Form</h1>
    <form action="/agents" method="POST">
        <div>
            <label for="agentName"><span>Name: </span></label>
            <input type="text" name="name" id="agentName">
        </div>
        <div>
            <label for="agentUrl"><span>Url: </span></label>
            <input type="text" name="image_url" id="agentUrl">
        </div>
        <div>
            <label for="agentYear"><span>Year: </span></label>
            <input type="text" name="year" id="agentYear">
        </div>
        <div>
            <label for="agentColro"><span>Color: </span></label>
            <input type="text" name="color" id="agentColro">
        </div>
        <button type="submit">Click Me</button>
    </form>
</body>
</html>