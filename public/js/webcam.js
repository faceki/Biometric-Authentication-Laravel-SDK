const BASE_URL = "https://app.faceki.com/";
const pathUrl = window.location.pathname;
const baseUrl = window.location.origin;
const pathUrlArray1 = pathUrl.split("/");
const pathUrlArray = pathUrlArray1.filter(function (el) {
    return el != '';
});
pathUrlArray.pop();
const newPath=pathUrlArray.join("/");
var video = document.getElementById('video');
const messageOne = document.querySelector('#message-1');
let token = ''
if(document.querySelector('#token') && document.querySelector('#token').value){
    token = document.querySelector('#token').value
}
var selfiepage = document.getElementById("selfiepage");
var is_mobile_device = false;
(function(a) {
    if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4)))
        is_mobile_device = true;
})(navigator.userAgent || navigator.vendor || window.opera);
button_callback();
function button_callback() {
          var video2 = document.getElementById("video2");
          var selfie_constraints = {
            audio: false,
            video: {
                width: {
                    ideal: (is_mobile_device==true)?1280:1920
                },
                height: {
                    ideal: (is_mobile_device==true)?720:1080
                },
                facingMode: "user"
            },
          };

          if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
            navigator.mediaDevices
              .getUserMedia(selfie_constraints, {
                    video: {
                        facingMode: 'user'
                    }
               })
              .then(function (stream) {
                video2.srcObject = stream;
                video2.setAttribute("autoplay", "");
                video2.setAttribute("muted", "");
                video2.setAttribute("playsinline", "");
                video2.play();
              })
              .catch(function (err0r) {
                console.log("Something went wrong!");
              });
          }
}

var imageData = '';
function takeASnap(vid) {
    const canvas = document.getElementById('canvas2');
    const ctx = canvas.getContext("2d");
    canvas.width = vid.videoWidth;
    canvas.height = vid.videoHeight;
    ctx.drawImage(vid, 0, 0);
    if(is_mobile_device==true){
     imageData = canvas.toDataURL("image/png", 0.7);
    }else{
     imageData = canvas.toDataURL("image/png", 1.0);
    }
    sessionStorage.setItem("selfie_image", imageData);
    console.log('data333',sessionStorage.getItem("selfie_image"));
    return new Promise((res, rej) => {
    canvas.toBlob(res, "image/png");
    });
}

function callApi(img_type){
    document.getElementById('loader').style.display = "block";
    video2.pause(); 
    takeASnap(video2).then(blob =>{
       selfiepage.style.display = "none";
       const file = new File([blob], "filename.jpeg");
       checkLiveness(file,type)
    });
}

const livenessurl = 'https://api.faceki.com/check_liveness';

function checkLiveness(file,type) {
    const data = new FormData();
    data.append('key', file);
    const req = new XMLHttpRequest();

    req.open('POST', livenessurl, true);
    req.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let resp = JSON.parse(this.response)
            if(resp && resp.score  /*&& resp.score>=0.50&& resp.quality>=0.60*/ && resp.probability>0.5 && resp.error==undefined){
                AuthenticateUser()
            }else if(resp && /*resp.score && resp.score<=0.50 &&*/ resp.probability<0.5 && resp.error==undefined){
                showAlert("Please try again!!")
            }else if(resp && resp.error_code=="FACE_CROPPED" && resp.error){
                showAlert(resp.error+", Try Again!!")
            }else if(resp && resp.error_code=="FACE_TOO_CLOSE" && resp.error){
                showAlert(resp.error+",Please keep your face more closer to your camera, Try Again!!")
            }else if(resp && resp.error_code=="FACE_NOT_FOUND" && resp.error){
                showAlert(resp.error+",Please make sure face should be completely inside camera frame, Try Again!!")
            }else if(resp && resp.error_code=="FACE_CLOSE_TO_BORDER" && resp.error){
                showAlert(resp.error+", Try Again!!")
            }else if(resp && resp.error_code=="FACE_TOO_SMALL" && resp.error){
                showAlert(resp.error+", Try Again!!")
            }else if(resp && resp.error_code=="UNKNOWN" && resp.error){
                showAlert("Something went wrong!!")
            }else{
                console.log(resp)
                showAlert("Image quality is not good, Make sure you are under proper lights, Try again!!")
            }
        }
    };
    req.send(data)
}

function showAlert(msg){
    var r = confirm(msg)
    if(r){
        resetCamUI()
    }else{
        window.close();
    }
}

function resetCamUI(){
    document.getElementById('loader').style.display = "none";
    selfiepage.style.display = "block";
    button_callback();
}

function AuthenticateUser(){
    const urlParams = new URLSearchParams(window.location.search);
    const jwt_token = urlParams.get('auth');
    let type = urlParams.get('route');
    var data = JSON.stringify({
        image: imageData
    });
    var url = BASE_URL+"verify";
    if(type == 'signup'){
        var mobile_number = localStorage.getItem("mobile_number")
        const name = localStorage.getItem("firstname")+" "+localStorage.getItem("lastname")
        const email_id = localStorage.getItem("email_id")
        data = JSON.stringify({
            image: imageData ,
            email:email_id,
            mobile_number:mobile_number,
            name: name
        });
        url = BASE_URL+"enroll"
    }
    if(type == 'login'){
        url = BASE_URL+"verify"
        data = JSON.stringify({
            image: imageData
        });
    }
    messageOne.textContent = 'Please wait we are verifying your identity...'
    if(type){
            fetch(url, {
                            method: "POST",
                            headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json',
                            'Authorization': jwt_token
                        },
                            body: data
                        }).then(response=>{
                           return response.json()
                    })
                    .then(function(res){
                        if(res.status==200){
                            console.log('response_data',res.data.face_id);
                            if(type == 'signup'){
                                var id = res.data.face_id;
                                window.location.replace(baseUrl+'/'+newPath+"/faceki-sign-in-complete?id=" + id);
                            }else{
                              if(res.data.face_id.length){
                                  if(res.data.face_id.length==1){
                                    var id = res.data.face_id[0];
                                    window.location.replace(baseUrl+'/'+newPath+"/faceki-sign-in-complete?id=" + id);
                                  }else{
                                     console.log('response_data2',res.data.face_id);
                                     var ids = res.data.face_id;
                                    window.location.replace(baseUrl+'/'+newPath+"/faceki-sign-in-list?ids=" + ids);
                                  }
                                }else{
                                   window.location.replace(baseUrl+'/'+newPath+"/loginfailed");
                                   messageOne.textContent = "Login Failed." 
                                }  
                            }
                        }else if(res.status==4001){
                            window.location.replace(baseUrl+'/'+newPath+"/error");
                        }else if(res.status==5001){
                            window.location.replace(baseUrl+'/'+newPath+"/lowquality");
                        }else if(res.status==6001){
                            window.location.replace(baseUrl+'/'+newPath+"/loginfailed");
                            messageOne.textContent = "Login Failed."
                        }else if(res.status==6002){
                            showAlert("Keep your face more closer to camera.")
                        }else if(res.status==5004){
                            showAlert("No Account found.")
                        }else if(res.status==401){
                            showAlert(""+res.data);
                        }else if (res.status==422){
                            showAlert(""+res.message);
                        }else if(res.status==1000){
                            window.location.replace(baseUrl+'/'+newPath+"/faceki-request-a-sign-in-pending");
                        }
                    }).catch(e=>{
                    console.log(e)
                })
            }
        }



function resetCam(camView,video){
    camView.style.display = "none"
    video.srcObject.getTracks().forEach(function(track) {
        track.stop();
    })
}

