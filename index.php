<!DOCTYPE html>
<html>
<head>
    <title>Share a poem!</title>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie-edge"> <!-- If IE, render using the latest engine -->
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<header>
    <h1>Share a poem!</h1>
</header>
<nav>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
    </ul>
</nav>
<main>
    <div id="publishingArea">

        <div class="row">
            <div class="col">
                <p>
                    <label for="recipients">To</label>
                </p>
                <p>
                    <input type="email" id="recipients" name="recipients">
                </p>
            </div>
            <div class="col">
                <p>
                    <label for="subject">Subject</label>
                </p>
                <p>
                    <input type="text" id="subject" name="subject">
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p>
                    <label for="genre">Select genre</label>
                </p>
                <p>
                    <select id="genre" name="genre">
                        <option value="1">Romance</option>
                        <option value="2">Moody</option>
                        <option value="3">Fun</option>
                        <option value="4">Horror</option>
                    </select>
                </p>
            </div>
            <div class="col">
                <p>
                    <label for="poem">Select poem</label>
                </p>
                <p>
                    <select id="poem" name="poem">
                        <option value="1">Moonlight</option>
                        <option value="2">Moonlight 2</option>
                        <option value="3">Moonlight 3</option>
                        <option value="4">Moonlight 4</option>
                        <option value="5">Moonlight 5</option>
                        <option value="6">Moonlight 6</option>
                    </select>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p>
                    <label for="message">Message</label>
                </p>
                <p>
                    <textarea rows="30" cols="30"></textarea>
                </p>
            </div>
            <div class="row">
                <p>
                    <label for="signature">Add custom signature</label>
                </p>
                <p>
                    <textarea rows="10" cols="10"></textarea>
                </p>
            </div>
        </div>
    </div>
</main>
</body>
</html>