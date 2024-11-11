<html>
 <head>
  <title>
   Student Application Programme Form
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .header, .footer {
            background-color: #4a5d23;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header img, .footer img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
        .header .title, .footer .title {
            font-size: 20px;
            font-weight: bold;
        }
        .header .menu, .footer .menu {
            font-size: 16px;
        }
        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background-color: #e8f0e8;
        }
        .left-section, .right-section {
            width: 48%;
        }
        .left-section img {
            width: 100%;
            border: 1px solid #ccc;
        }
        .right-section {
            background-color: white;
            padding: 20px;
            border: 1px solid #ccc;
        }
        .right-section h2 {
            font-size: 18px;
            font-weight: bold;
        }
        .right-section p {
            font-size: 14px;
            margin-bottom: 10px;
        }
        .right-section input[type="text"], .right-section input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
        }
        .right-section input[type="file"] {
            display: none;
        }
        .right-section label[for="file-upload"] {
            display: block;
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
            cursor: pointer;
        }
        .right-section .buttons {
            display: flex;
            justify-content: space-between;
        }
        .right-section .buttons button {
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        .right-section .buttons .cancel {
            background-color: #ccc;
        }
        .right-section .buttons .submit {
            background-color: #4a5d23;
            color: white;
        }
  </style>
 </head>
 <body>
  <div class="header">
   <div class="title">
    MERITVIBE
   </div>
   <div class="menu">
    PROGRAMME FORM
   </div>
   <img alt="Profile icon" height="40" src="https://storage.googleapis.com/a1aa/image/boukduwVXi6mO9eR5kfLTcs0FUceo3PyWNaBFHPr74kpi4fOB.jpg" width="40"/>
  </div>
  <div class="container">
   <div class="left-section">
    <img alt="Event poster" height="500" src="https://storage.googleapis.com/a1aa/image/UQa4f30l550aeEn0YCrBsWSkXPGQXTFfAWBaGCDQU16ti4fOB.jpg" width="400"/>
   </div>
   <div class="right-section">
    <h2>
     STUDENT APPLICATION PROGRAMME FORM
    </h2>
    <p>
     PLEASE FILL OUT ALL FIELDS BELOW :
    </p>
    <p>
     NAME :
    </p>
    <input name="name" type="text"/>
    <p>
     MATRIC NUMBER :
    </p>
    <input name="matric-number" type="text"/>
    <p>
     EMAIL :
    </p>
    <input name="email" type="email"/>
    <p>
     UPLOAD YOUR SELFIE HERE:
    </p>
    <label for="file-upload">
     <i class="fas fa-upload">
     </i>
     Choose File
    </label>
    <input id="file-upload" name="selfie" type="file"/>
    <div class="buttons">
     <button class="cancel">
      CANCEL
     </button>
     <button class="submit">
      SUBMIT
     </button>
    </div>
   </div>
  </div>
  <div class="footer">
   <div class="title">
    MERITVIBE
   </div>
   <div class="menu">
    APPLICATION DASHBOARD
   </div>
   <img alt="Profile icon" height="40" src="https://storage.googleapis.com/a1aa/image/boukduwVXi6mO9eR5kfLTcs0FUceo3PyWNaBFHPr74kpi4fOB.jpg" width="40"/>
  </div>
 </body>
</html>
