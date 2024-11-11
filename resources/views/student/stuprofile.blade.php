<html>
 <head>
  <title>
   Student Profile
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   body {
            font-family: Arial, sans-serif;
            background-color: #e0e0e0;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #4a5d23;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header img {
            height: 40px;
        }
        .header .logout {
            display: flex;
            align-items: center;
        }
        .header .logout i {
            margin-left: 5px;
        }
        .container {
            background-color: #f0f0f0;
            padding: 20px;
            max-width: 800px;
            margin: 20px auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .profile-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .profile-header h2 {
            margin: 0;
            font-size: 18px;
            color: #333;
        }
        .profile-header p {
            margin: 5px 0;
            font-size: 14px;
            color: #666;
        }
        .profile-content {
            display: flex;
            align-items: flex-start;
        }
        .profile-picture {
            text-align: center;
            margin-right: 20px;
        }
        .profile-picture img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
        .profile-picture .upload-icon {
            background-color: #4a5d23;
            color: white;
            border-radius: 50%;
            padding: 5px;
            cursor: pointer;
            position: relative;
            top: -20px;
            left: 50px;
        }
        .profile-info {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .profile-info .info-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #4a5d23;
            color: white;
            padding: 10px;
            border-radius: 5px;
        }
        .profile-info .info-item span {
            flex: 1;
        }
        .profile-info .info-item i {
            margin-left: 10px;
            cursor: pointer;
        }
        .edit-profile {
            text-align: center;
            margin-top: 20px;
        }
        .edit-profile button {
            background-color: #4a5d23;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
  </style>
 </head>
 <body>
  <div class="header">
   <div class="logo">
    <img alt="University Logo" height="40" src="https://storage.googleapis.com/a1aa/image/jk431w38OQ75LFuhtx4u7yH0YfpvL0DeDiFCIc3XgI8HX8vTA.jpg" width="40"/>
   </div>
   <div class="logout">
    <span>
     LOGOUT
    </span>
    <i class="fas fa-sign-out-alt">
    </i>
   </div>
   <div class="profile">
    <span>
     STUDENT PROFILE
    </span>
    <img alt="Profile Icon" height="40" src="https://storage.googleapis.com/a1aa/image/POM1ZDwAJWY6O9GR3KT2KGw7fPmaJk0JveU72wG5MctJX8vTA.jpg" width="40"/>
   </div>
  </div>
  <div class="container">
   <div class="profile-header">
    <h2>
     FOR FIRST TIME LOGIN, PLEASE UPDATE YOUR PROFILE!
    </h2>
   </div>
   <div class="profile-content">
    <div class="profile-picture">
     <img alt="Profile Picture" height="150" src="https://storage.googleapis.com/a1aa/image/j0xvZ8A7ZLL9F5xWC50k1k7sfZhSfunwwE5jK2q18tuFX8vTA.jpg" width="150"/>
     <div class="upload-icon">
      <i class="fas fa-camera">
      </i>
     </div>
    </div>
    <div class="profile-info">
     <div class="info-item">
      <span>
       FULL NAME: NURUL FATIHAH
      </span>
      <i class="fas fa-edit">
      </i>
     </div>
     <div class="info-item">
      <span>
       MATRIC NUMBER: A22ECXXX
      </span>
      <i class="fas fa-edit">
      </i>
     </div>
     <div class="info-item">
      <span>
       I/C: 03XXXXXXXXXX
      </span>
      <i class="fas fa-edit">
      </i>
     </div>
     <div class="info-item">
      <span>
       ROOM NUMBER: 301 - M21
      </span>
      <i class="fas fa-edit">
      </i>
     </div>
     <div class="info-item">
      <span>
       COURSE: 1/SECBH
      </span>
      <i class="fas fa-edit">
      </i>
     </div>
     <div class="info-item">
      <span>
       EMAIL ADDRESS: nurulfatihah@graduate.utm.my
      </span>
      <i class="fas fa-edit">
      </i>
     </div>
    </div>
   </div>
   <div class="edit-profile">
    <button>
     EDIT PROFILE
    </button>
   </div>
  </div>
 </body>
</html>