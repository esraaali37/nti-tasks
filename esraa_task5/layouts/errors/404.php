<?php
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=BioRhyme:wght@400;700;800&display=swap");

*,
*::before,
*::after {
  margin: 0;
  box-sizing: border-box;
}
body {
  background: #1d1e22;
  color: #fff;
  font-family: "BioRhyme", serif;
  overflow: hidden;
}
.big_text {
  display: grid;
  place-items: center;
  padding: 8rem;
}
.big_text h1 {
  font-size: 10rem;
  transform:translatez(20rem);
  
}
.color_blue{
  color:#1976D2;
  text-shadow: none;
  animation: visible 2s infinite;
  
}
.big_text p{
  letter-spacing:1px;
}
a{
  color:#1976D2;
}
.small_texts {
  display: flex;
  justify-content: space-around;
  
}
.small_texts p {
  color: #888a85;
  animation: float 8s infinite;
  transform: translatey(4rem);
}

@keyframes float {
  0% {
    transition: translatey(0);
  }
  100% {
    transform: translatey(-40rem);
    opacity: (0);
  }
}


@keyframes visible {
  0% {
    opacity:(1);
  }
  20%{
    opacity:(0.5);
    
  }
  50% {
    opacity: (0.3);
  }
  100%{
    opacity: (0.9);
    
  }
}

.small_texts p:nth-child(1) {
  animation-delay: 2.2s;
}
.small_texts p:nth-child(2) {
  animation-delay: 4s;
}
.small_texts p:nth-child(3) {
  animation-delay: 7s;
}
.small_texts p:nth-child(4) {
  animation-delay: 5.5s;
}
.small_texts p:nth-child(5) {
  animation-delay: 6.78s;
}
.small_texts p:nth-child(6) {
  animation-delay: 4.9s;
}
.small_texts p:nth-child(7) {
  animation-delay: 2.9s;
}
.small_texts p:nth-child(8) {
  animation-delay: 6s;
}
.small_texts p:nth-child(9) {
  animation-delay: 2.5s;
}
.small_texts p:nth-child(10) {
  animation-delay: 3.8s;
}
.small_texts p:nth-child(11) {
  animation-delay: 6s;
}
.small_texts p:nth-child(12) {
  animation-delay: 7s;
}
.small_texts p:nth-child(13) {
  animation-delay: 2.2s;
}

        </style>
</head>
<body>
<div class="container">
  <div class="big_text text">
    <h1>4<span class="color_blue">0</span>4</h1>
    <p>Page not found <a href="#">Home</a></p>
  </div>
  <div class="small_texts">

    <p >
      404
    </p>
    <p >
      404
    </p>
    <p class="text_3">
      404
    </p>
    <p class="text_4">
      404
    </p>
    <p class="text_5">
      404
    </p>
    <p class="text_6">
      404
    </p>
    <p class="text_7">
      404
    </p>
    <p class="text_8">
      404
    </p>
    <p class="text_9">
      404
    </p>
    <p class="text_10">
      404
    </p class="text_11">
    <p>
      404
    </p>
    <p class="text_12">
      404
    </p>
    <p class="text_13">
      404
    </p>
  </div>
</div>
</body>
</html>