<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Random Chat</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>

<body>
  <form id="form1">
    <div class="setuser">
      <p>Welcome! Please choose a username.</p>
      <div class="wrapper">
        <input class="username" id="username" type="text" maxlength=20 placeholder="Enter a username" /><button id="btnConfirm">Confirm</button>
      </div>
    </div>
    <div class="menu">
      <a href="#" class="back"><i class="fa fa-angle-left"></i> <img src="https://i.imgur.com/G4EjwqQ.jpg" draggable="false" /></a>
      <div class="name">Random chat</div>
    </div>
    <ol class="chat" id="chat">
    </ol>
    <div class="typezone">
      <input class="message" id="message" placeholder="Type a message..." disabled />
    </div>
  </form>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="../js/script.js"></script>

</body>

</html>