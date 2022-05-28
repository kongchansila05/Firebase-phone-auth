<!DOCTYPE html>
<html>
  <head>
    <title>Firebase Phone Verification</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="main.css" rel="stylesheet">

  </head>
  <body>
    <form action="verification.php">
      <h1>Firebase Phone verification In PHP</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="uname"><strong>Phone Number</strong></label>
        <input type="text" id="number" placeholder="Enter phone number" name="uname" required>
      </div>
      <div id="recaptcha-container"></div>
      <button type="button" onclick="phoneAuth();">Send Otp</button>
    
    </form>


    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>
    <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
    appId: "1:782524276572:android:8d6a304f447747139beb99",
    apiKey: "AIzaSyAI9cHNGNl19v_x1TDo6sewICaIDalon6Q",
    authDomain: "782524276572-e53h1s6ooq9kivqv7ri2l08n357i6mbj.apps.googleusercontent.com",
    projectId: "optical-hangar-349302",
    storageBucket: "optical-hangar-349302.appspot.com",
    messagingSenderId: "782524276572",
    measurementId: "G-CCJ2B0YHR3"
    };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
     firebase.analytics();
</script>
    <script src="firebase.js" type="text/javascript"></script>
  </body>
</html>
