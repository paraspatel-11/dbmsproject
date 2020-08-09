<script>
var images = ["images/dr-deepal-parikh-zydus-hospitals--thaltej-ahmedabad-endocrinologists-1ulMjgLIi3.jpg","images/s1.jpg", "images/s2.jpg", "images/s3.jpg","images/s4.jpg"];

var i = 1;
var max = images.length;

function changeImage(){ 
  document.getElementById("slider").src = images[i++];
  if(i==max){
    i=0;
  }
}

setInterval(function(){changeImage()}, 8000);

</script>

<p align="center"><img src="images/dr-deepal-parikh-zydus-hospitals--thaltej-ahmedabad-endocrinologists-1ulMjgLIi3.jpg" class="img-responsive" width="100%" id="slider" align="center"></p>
