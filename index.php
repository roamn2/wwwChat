<html>

<head>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <h1><img src="./assets/images/logo.bmp" height="71px" width="285px" /></h1>Chatroom: Test
    <script src="./assets/js/script.js" defer></script>

    <div class="box">
        <p style="font-size: 8px;" id="td"></p>
        <p style="font-size: 20px;" id="text"></p>
    </div><br>
    <input type="text" id="user" title="Enter your Username here. Max. amount of characters: 20" placeholder="Username"
        autocapitalize="off" maxlength="20" size="30" />
    <input type="text" id="message" title="Enter your Message here. Max. amount of characters: 100"
        placeholder="Message" autocapitalize="off" maxlength="100" size="120" />
    <font size="1px;">Text formatting: use HTML tags. <a href="textf.html"
            style="text-decoration: none; color: #0000ee;">Click here to see how to it.</a></font>
    &nbsp;&nbsp;|&nbsp;&nbsp;
    <button onclick="f()" type="button"
        title="Click here to post your Message (with Username). This will make your Message (and Username) public."
        id="submitbutton">Post!</button>
    </div>

    <!--
        <h1>freeChat</h1>
        <input id="user" placeholder="Username" type="text"></input>
        <input id="text" placeholder="Message" type="text"></input>
        <input id="post" value="Post!" type="submit"></input>
            
    -->
</body>

</html>