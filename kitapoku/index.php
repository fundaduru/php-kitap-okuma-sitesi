<?php
include("header.php");






?>
<style type="text/css">
    :root {
  --left-bg-color: rgba(245, 59, 223, 0.5);
  --right-bg-color: rgba(177, 59, 245, 0.5);
  --left-btn-hover-color: rgba(245, 59, 223, 1);
  --right-btn-hover-color: rgba(177, 59, 245, 1);

}

* {
  box-sizing: border-box;
}

body {
  font-family: 'Inter', sans-serif;
  height: 100vh;
  margin: 0;
  overflow: hidden;
}

.container {
  position: relative;
  width: 100%;
  height: 100%;
  background-color: #333;
}

.split {
  position: absolute;
  width: 50%;
  height: 100%;
  overflow: hidden;
}

.split.left {
  left: 0;
  background: no-repeat center/cover
    url('style/hpft.jpg');
}

.split.left::before {
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: var(--left-bg-color);
}

.split.right {
  right: 0;
  background: no-repeat center/cover
    url('style/simyaci.jpg');
}

.split.right::before {
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: var(--right-bg-color);
}

h1 {
  font-size: 3rem;
  color: #fff;
  position: absolute;
  left: 50%;
  top: 20%;
  transform: translateX(-50%);
  text-shadow: 3px 3px 10px rgba(0, 0, 0, 1);
  white-space: nowrap;
}

.button {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-50%);
  text-decoration: none;
  color: #fff;
  border: #fff solid 3px;
  background-color: transparent;
  font-size: 1.5rem;
  font-weight: bold;
  width: 15rem;
  padding: 1.5rem;
 
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 40px;
  box-shadow: 3px 3px 10px rgba(0, 0, 0, 1);
  text-transform: uppercase;
}




@media (max-width: 800px) {
  h1 {
    font-size: 1.5rem;
    top: 40%;
  }

  
}
</style>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>ANASAYFA</title>
  </head>
  <body>
    <div class="container">
      
      <div class="split left">
        
        <a href=arsiv/hpft.php class="button">Tıklayınız</a>
      </div>

      <div class="split right">
        
        <a href="arsiv/simyaci.php" class="button">Tıklayınız</a>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>


