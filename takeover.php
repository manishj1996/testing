
<html>
<body>
  <style>
html, body {
  background: #333;
  height: 100%;
  overflow: hidden;
  text-align: center;
}

.svg-wrapper {
  height: 60px;
    margin: 0 auto;
  position: relative;
  top: 50%;
  transform: translateY(-50%);
  width: 320px;
}

.shape {
  fill: transparent;
  stroke-dasharray: 300 900;
  stroke-dashoffset: -400;
  stroke-width: 8px;
  stroke: #19f6e8;
}

.text {
  color: #fff;
  font-family: 'Roboto Condensed';
  font-size: 15px;
  letter-spacing: 8px;
  line-height: 10px;
  position: relative;
  top: -48px;
}

@keyframes draw {
  0% {
    stroke-dasharray: 100 540;
    stroke-dashoffset: -300;
    stroke-width: 8px;
  }
  100% {
    stroke-dasharray: 760;
    stroke-dashoffset: 0;
    stroke-width: 5px;
  }
}

.svg-wrapper:hover .shape {
  -webkit-animation: 0.5s draw linear forwards;
  animation: 0.5s draw linear forwards;
}
</style>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

<div class="svg-wrapper">
  <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
    <rect class="shape" height="60" width="320" />
  </svg>
   <div class="text">PoC <br> <br>Sub-Domian Takeover </div>
</div>
  </body>
</html>
