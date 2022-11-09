<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-database.js"></script>

<link rel="stylesheet" href="css/normalize.css">

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.min.css'>

        <link rel="stylesheet" href="css/style.css">

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->
<script type="module">
const firebaseConfig = {
  apiKey: "AIzaSyC0kcnxHuOHmbEGsN4ti6G9PlI1kmve90A",
  authDomain: "bluechat-74ea8.firebaseapp.com",
  databaseURL: "https://bluechat-74ea8-default-rtdb.firebaseio.com",
  projectId: "bluechat-74ea8",
  storageBucket: "bluechat-74ea8.appspot.com",
  messagingSenderId: "132910368059",
  appId: "1:132910368059:web:876a4dedb078e68f09231e",
  measurementId: "G-ST81RXJ09B"
};

  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
</script>

<script>


  function sendMessage() {
    var message = document.getElementById("message").value;
    firebase.database().ref("messages").push().set({
      "message": message,
      "sender": myName
    });
    return false;
  }
</script>

<style>
  figure.avatar {
    bottom: 0px !important;
  }
  .btn-delete {
    background: red;
    color: white;
    border: none;
    margin-left: 10px;
    border-radius: 5px;
  }
</style>

<div class="chat">
  <div class="chat-title">
    <h1>BlueChat</h1>
    <h2>Chat For The BlueBird Mod Menu</h2>
    <figure class="avatar">
      <img src="https://cdn.discordapp.com/attachments/1004763103210258434/1019670566132785192/bluebirdiconfull.png" /></figure>
  </div>
  <div class="messages">
    <div class="messages-content"></div>
  </div>
  <div class="message-box">
    <textarea type="text" class="message-input" id="message" placeholder="Type message..."></textarea>
    <button type="submit" class="message-submit">Send</button>
  </div>

</div>
<div class="bg"></div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js'></script>

        <script src="js/index.js?v=<?= time(); ?>"></script>

<style>
    .fixed-bottom {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: lightseagreen;
        color: white;
        text-align: center;
        padding: 25px;
        font-size: 20px;
    }
</style>

