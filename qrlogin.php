<!-- Db_con connection -->
 <!-- Header -->
 <?php include('db_qrcode.php');?>

<!DOCTYPE html>

<html>
<head>

    <!-- Header -->
    <?php include('includes/header.php');?>

    <!-- Libraries -->
    <?php include('resources/libraries.php');?>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>

<script>
    function preventBack(){
        window.history.forward()
    };
        setTimeout("preventBack()", 0);
            window.onunload = function(){
            null;
        } 
</script>

<style>

body {
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    position: relative;
    overflow: hidden; /* Prevent scrollbars caused by the video */
    background-color:#15d17a;
}

.background-video {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1; /* Place the video behind other content */
    overflow: hidden; /* Hide any overflowing video */
    opacity:0.5;
   
}

#myVideo {
    object-fit: cover;
    width: 100%;
    height: 100%;
}

#login-button {
    background-color: #50C878; 
    color: white; 
}
.password-icon {
    position: absolute;
    top: 50%;
    right: 10px;    
    transform: translateY(-50%);
    cursor: pointer;    
}
.container-login {
    background-color: rgba(255, 255, 255, 0.8); /* Adjust opacity if needed */
    border-radius: 10px;
    padding: 20px;
    box-shadow: 5px 20px 4px rgba(0, 0, 0, 0.1);
    position: relative;
    z-index: 1;
}

.container-font {
    text-align: center;
    margin-bottom: 20px;

}

.play-button-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-20%, -20%);
    z-index: 2;
    cursor: pointer;
    font-size: 50px;
    color: white;
}
    #video-container {
      position: relative;
      width: 100%;
      margin-bottom: 10px;
    }

    #video {
      width: 100%;
      border-radius: 5px;
    }

    #capture-btn {
      position: absolute;
      bottom: 10px;
      left: 50%;
      transform: translateX(-50%);
      padding: 8px 16px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    #status {
      margin-top: 10px;
    }
</style>

</head>

<body>
    <div class="background-video">
        <video playsinline autoplay muted loop id="myVideo">
            <source src="video/video.mp4" type="video/mp4">
        </video>
    </div>
    <div class="container-login">
        <div class="container-font">
            <h3>QR CODE - LOGIN</h3>
        </div>
        <div id="video-container">
            <video id="video" autoplay playsinline></video>
            <button id="capture-btn" onclick="captureImage()">Capture</button>
        </div>
        <p id="status"></p>
    </div>


<script>
    let videoStream;

    async function startCamera() {
        try {
            const stream = await navigator.mediaDevices.getUserMedia({ video: { facingMode: 'environment' } });
            const video = document.getElementById('video');
            video.srcObject = stream;
            videoStream = stream;
        } catch (error) {
            console.error('Error accessing camera:', error);
        }
    }

    function stopCamera() {
        if (videoStream) {
            const tracks = videoStream.getTracks();
            tracks.forEach(track => track.stop());
        }
    }

    async function captureImage() {
        const video = document.getElementById('video');
        const canvas = document.createElement('canvas');
        const context = canvas.getContext('2d');
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        context.drawImage(video, 0, 0, canvas.width, canvas.height);

        const imageData = context.getImageData(0, 0, canvas.width, canvas.height);
        const code = jsQR(imageData.data, imageData.width, imageData.height);

        if (code) {
            if (code.data === '<?php echo $usernameFromDatabase; ?>') {
                document.getElementById('status').innerText = 'Login successful!';

                setTimeout(function() {
                window.location.href = 'user_information.php';
            }, 5000); // 5000 milliseconds = 5 seconds
            } else {
                document.getElementById('status').innerText = 'Invalid QR code.';
            }
        } else {
                document.getElementById('status').innerText = 'No QR code found in the image.';
        }
    }

    // Start the camera when the page loads
    startCamera();
</script>

<script src="https://cdn.rawgit.com/cozmo/jsQR/master/dist/jsQR.js"></script>
</body>
</html>