<template>
<div class="selfie">
    <div class="web-camera-container">
        <div class="camera-button text-center">
            <div class="p-3" v-if="!isCameraOpen">
              <h3>Confirm your identity - step 2</h3>
              <h5>Please take a clear photo of your {{ document }}</h5>
            </div>
            <div class="card p-3 " v-if="!isCameraOpen">
                <img src="/assets/images/idverify.jpg" class="img-fluid" />
            </div>
            <button type="button" class="btn button is-rounded" :class="{ 'filled-button is-primary' : !isCameraOpen, 'is-danger' : isCameraOpen}" @click="toggleCamera">
                <span v-if="!isCameraOpen">Open Camera</span>
                <span v-else>Close Camera</span>
            </button>
        </div>
    
        <div v-show="isCameraOpen && isLoading" class="camera-loading">
            <ul class="loader-circle">
            <li></li>
            <li></li>
            <li></li>
            </ul>
        </div>
    
        <div v-if="isCameraOpen" v-show="!isLoading" class="camera-box" :class="{ 'flash' : isShotPhoto }">
            
            <div class="camera-shutter" :class="{'flash' : isShotPhoto}"></div>
            
            <video v-show="!isPhotoTaken" ref="camera" :width="390" :height="337.5" autoplay></video>
            
            <canvas v-show="isPhotoTaken" id="photoTaken" ref="canvas" :width="390" :height="337.5"></canvas>
        </div>
    
        <div v-if="isCameraOpen && !isLoading" class="camera-shoot">
            <button type="button" class="button" @click="takePhoto">
            <img src="https://img.icons8.com/material-outlined/50/000000/camera--v2.png">
            </button>
        </div>
    
        <div v-if="isPhotoTaken && isCameraOpen" class="camera-download">
            <a id="downloadPhoto" class="btn filled-button text-white" role="button" @click="saveProceed">
            Save and Proceed
            </a>
        </div>
    </div>
</div>
</template>

<style>
.selfie {
    background: white;
    position: fixed;
    width: 100%;
    height: 100vh;
    z-index: 9999999;
    width: 100%;
    left: 0;
    top: 0;
    height: 100vh;
    background: white;
    display: flex;
    justify-content: center;
}
.cursor {
    cursor: pointer;
}
.web-camera-container {
	 margin-top: 2rem;
	 margin-bottom: 2rem;
	 padding: 2rem;
	 display: flex;
	 flex-direction: column;
	 justify-content: center;
	 align-items: center;
	 border: 1px solid #ccc;
	 border-radius: 4px;
	 max-width: 500px;
	 width: 95%;
}
 .web-camera-container .camera-button {
	 margin-bottom: 2rem;
}
 .web-camera-container .camera-box .camera-shutter {
	 opacity: 0;
	 width: 450px;
	 height: 337.5px;
	 background-color: #fff;
	 position: absolute;
}
 .web-camera-container .camera-box .camera-shutter.flash {
	 opacity: 1;
}
 .web-camera-container .camera-shoot {
	 margin: 1rem 0;
}
 .web-camera-container .camera-shoot button {
	 height: 60px;
	 width: 60px;
	 display: flex;
	 align-items: center;
	 justify-content: center;
	 border-radius: 100%;
}
 .web-camera-container .camera-shoot button img {
	 height: 35px;
	 object-fit: cover;
}
 .web-camera-container .camera-loading {
	 overflow: hidden;
	 height: 100%;
	 position: absolute;
	 width: 100%;
	 min-height: 150px;
	 margin: 3rem 0 0 -1.2rem;
}
 .web-camera-container .camera-loading ul {
	 height: 100%;
	 position: absolute;
	 width: 100%;
	 z-index: 999999;
	 margin: 0;
}
 .web-camera-container .camera-loading .loader-circle {
	 display: block;
	 height: 14px;
	 margin: 0 auto;
	 top: 50%;
	 left: 100%;
	 transform: translateY(-50%);
	 transform: translateX(-50%);
	 position: absolute;
	 width: 100%;
	 padding: 0;
}
 .web-camera-container .camera-loading .loader-circle li {
	 display: block;
	 float: left;
	 width: 10px;
	 height: 10px;
	 line-height: 10px;
	 padding: 0;
	 position: relative;
	 margin: 0 0 0 4px;
	 background: #999;
	 animation: preload 1s infinite;
	 top: -50%;
	 border-radius: 100%;
}
 .web-camera-container .camera-loading .loader-circle li:nth-child(2) {
	 animation-delay: 0.2s;
}
 .web-camera-container .camera-loading .loader-circle li:nth-child(3) {
	 animation-delay: 0.4s;
}
 @keyframes preload {
	 0% {
		 opacity: 1;
	}
	 50% {
		 opacity: 0.4;
	}
	 100% {
		 opacity: 1;
	}
}
 
</style>

<script>
export default {
    props: ["id"],
    data() {
      return {
        isCameraOpen: false,
        isPhotoTaken: false,
        isShotPhoto: false,
        isLoading: false,
        link: '#',
        document : ""
      }
    },
    methods: {
        toggleCamera() {
          if(this.isCameraOpen) {
            this.isCameraOpen = false;
            this.isPhotoTaken = false;
            this.isShotPhoto = false;
            this.stopCameraStream();
          } else {
            this.isCameraOpen = true;
            this.createCameraElement();
          }
        },
        
        createCameraElement() {
          this.isLoading = true;
          
          const constraints = (window.constraints = {
            audio: false,
            video: true
          });


          navigator.mediaDevices
            .getUserMedia(constraints)
            .then(stream => {
              this.isLoading = false;
              this.$refs.camera.srcObject = stream;
            })
            .catch(error => {
              this.isLoading = false;
              alert("May the browser didn't support or there is some errors.");
            });
        },
        
        stopCameraStream() {
          let tracks = this.$refs.camera.srcObject.getTracks();

          tracks.forEach(track => {
            track.stop();
          });
        },
        
        takePhoto() {
          if(!this.isPhotoTaken) {
            this.isShotPhoto = true;

            const FLASH_TIMEOUT = 50;

            setTimeout(() => {
              this.isShotPhoto = false;
            }, FLASH_TIMEOUT);
          }
          
          this.isPhotoTaken = !this.isPhotoTaken;
          const context = this.$refs.canvas.getContext('2d');
          context.drawImage(this.$refs.camera, 0, 0, 450, 337.5);
        },
        
        async saveProceed() {
          const download = document.getElementById("downloadPhoto");
          const canvas = document.getElementById("photoTaken").toDataURL("image/jpeg")
          const blob = await fetch(canvas).then(res => res.blob()); 
          const file = new File([blob], 'selfie.jpg', {type:"image/jpeg", lastModified:new Date()});
          var formdata = new FormData();
          formdata.append("image" , file)
          var data = {'image':file}
          await axios.post(`/api/uploadid/${this.id}`, formdata, {
          headers:{
              'Content-Type': 'application/json',
              'Allow-Origin' : "*",
              }
            })
          .then((response)=>{
              console.log(response)
              if(response.data == true){
                  alert(`${this.document} uploaded successfully, click okay to continue`)
                  window.location.assign("/agent/profile/upload-selfie-id")
              }
          })
          .catch((error)=>{
              console.log(error)
              alert("Something went wrong, Please try again!")
          })
      },
      async getProfile(){
          await axios.get(`/api/getProfile/${this.id}`)
          .then((response)=>{
              setTimeout(()=>{
                  if(response !== false){
                      const result = response.data
                      this.document = result.identification;
                  }

              }, 1000)
          })
      }
    },
    mounted() {
      this.getProfile();
    },
}
</script>