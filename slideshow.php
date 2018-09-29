<script>
var images = ["./images/s11.jpg", "./images/s21.jpg", "./images/s31.jpg","./images/s41.jpg"];

var i = 1;
var max = images.length;

function changeImage(){ 
  document.getElementById("slider").src = images[i++];
  if(i==max){
    i=0;
  }
}

setInterval(function(){changeImage()}, 1000);

</script>

<p align="center"><img src="images/s1.jpg" class="img-responsive" width="100%" id="slider" align="center"></p>
