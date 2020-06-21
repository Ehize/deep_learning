<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My ChatBot</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <section class="chatbox">
            <div class="header">
                <h4>ChatBot</h4>
            </div>
            <div class="body" id="chatbody">
                <div class="scroller"></div>
            </div>
            <form class="chat" method="post" autocomplete="off">
                <div>
                    <input type="text" name="chat" id="chat" placeholder="Type Hello">
                </div>
                <div>
                    <input type="submit" value="Send" id="btn">
                </div>
            </form>
        </section>
    </div>
    <script src="app.js"></script>
</body>

</html>