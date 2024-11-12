<html>
 <head>
  <title>
   Student Profile
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
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
        .header .logout {
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        .header .logout i {
            margin-left: 5px;
        }
        .container {
            background-color: #d4e5b2;
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
            font-size: 24px;
            color: #333;
            font-weight: bold;
        }
        .profile-header p {
            margin: 5px 0;
            font-size: 16px;
            color: #666;
        }
        .profile-content {
            display: flex;
            align-items: flex-start;
        }
        .profile-picture {
            text-align: center;
            margin-right: 20px;
            position: relative;
            margin-top: 20px;
        }
        .profile-picture img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 5px solid white;
        }
        .profile-picture .upload-icon {
            background-color: white;
            color: #4a5d23;
            border-radius: 50%;
            padding: 5px;
            cursor: pointer;
            position: absolute;
            bottom: -10px;
            right: 10px;
            border: 2px solid #4a5d23;
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
            background-color: white;
            color: #4a5d23;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .profile-info .info-item:hover {
            background-color: #3b4a1a;
            color: white;
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
            background-color: white;
            color: #4a5d23;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .edit-profile button:hover {
            background-color: #3b4a1a;
            color: white;
        }
        .profile {
            display: flex;
            align-items: center;
        }
        .profile span {
            margin-right: 10px;
        }
        .info-label {
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }
        .info-value {
            background-color: white;
            color: #4a5d23;
            padding: 10px;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .info-value i {
            margin-left: 10px;
            cursor: pointer;
        }
        .info-value input {
            border: none;
            outline: none;
            background: transparent;
            color: inherit;
            width: 100%;
        }
        .hidden {
            display: none;
        }
  </style>
 </head>
 <body>
  <div class="header">
   <div class="logout" onclick="logout()">
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
    <img alt="Profile Icon" height="40" src="https://storage.googleapis.com/a1aa/image/KLuQvJ5AdOYkGhweRR5ew7Ddei7jig2rEJoOfW7IQM03yCBPB.jpg" width="40"/>
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
     <img id="profileImage" alt="Person Icon" height="150" src="https://storage.googleapis.com/a1aa/image/z1JBokokZaKyH9EJ0qfKtDMDUlJpu22u1EpOeYM1PcyytQwTA.jpg" width="150"/>
     <div class="upload-icon" onclick="document.getElementById('fileInput').click();">
      <i class="fas fa-camera">
      </i>
     </div>
     <input class="hidden" id="fileInput" type="file" accept="image/*" onchange="loadFile(event)"/>
    </div>
    <div class="profile-info">
     <div class="info-label">
      FULL NAME:
     </div>
     <div class="info-value">
      <input id="fullName" type="text" value="NURUL FATIHAH"/>
      <i class="fas fa-edit">
      </i>
     </div>
     <div class="info-label">
      MATRIC NUMBER:
     </div>
     <div class="info-value">
      <input id="matricNumber" type="text" value="A22ECXXX"/>
      <i class="fas fa-edit">
      </i>
     </div>
     <div class="info-label">
      I/C:
     </div>
     <div class="info-value">
      <input id="icNumber" type="text" value="03XXXXXXXXXX"/>
      <i class="fas fa-edit">
      </i>
     </div>
     <div class="info-label">
      ROOM NUMBER:
     </div>
     <div class="info-value">
      <input id="roomNumber" type="text" value="301 - M21"/>
      <i class="fas fa-edit">
      </i>
     </div>
     <div class="info-label">
      COURSE:
     </div>
     <div class="info-value">
      <input id="course" type="text" value="1/SECBH"/>
      <i class="fas fa-edit">
      </i>
     </div>
     <div class="info-label">
      EMAIL ADDRESS:
     </div>
     <div class="info-value">
      <input id="email" type="text" value="nurulfatihah@graduate.utm.my"/>
      <i class="fas fa-edit">
      </i>
     </div>
    </div>
   </div>
   <div class="edit-profile">
    <button onclick="saveProfile()">
     SAVE PROFILE
    </button>
   </div>
  </div>
  <script>
   function loadFile(event) {
        var image = document.getElementById('profileImage');
        image.src = URL.createObjectURL(event.target.files[0]);
    }

    function logout() {
        window.location.href = 'login.html'; // Replace 'login.html' with the actual login page URL
    }

    function saveProfile() {
        const profileData = {
            fullName: document.getElementById('fullName').value,
            matricNumber: document.getElementById('matricNumber').value,
            icNumber: document.getElementById('icNumber').value,
            roomNumber: document.getElementById('roomNumber').value,
            course: document.getElementById('course').value,
            email: document.getElementById('email').value
        };

        fetch('/api/saveProfile', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(profileData)
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Profile saved successfully!');
            } else {
                alert('Failed to save profile.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
  </script>
 </body>
</html>