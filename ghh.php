
<!DOCTYPE html>
<html>
<head>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->

  <!DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <title>ROBOT Control Panel</title>
  <style>
    body {
      background-color: #41627E;
      text-align: center;
      font-family: 'Lato', sans-serif;
    }

    img {
      margin: auto;
    }

    h3 {
      margin: auto;
      width: 400px;
      color: white;
      font-size: 3em;
      font-weight: 300;
      letter-spacing: 0.1em;
    }

    .middle {
      padding: 5%;
      display: flex;
      flex-direction: column;
      align-items: center;
      margin: auto;
    }

    .button-container {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      margin: 10px 0;
    }

    .button {
      border-radius: 50%;
      background-color: #7D2252;
      color: white;
      border: none;
      outline: 2px;
      padding: 20px;
      margin: 10px;
      font-size: 150%;
      transition-duration: 0.5s;
      cursor: pointer;
      box-shadow: 3px 3px 7px #333;
    }

    .button:hover {
      background-color: #41627E;
      color: white;
      transform: scale(1.1);
    }

    .button1 svg {
      transform: rotate(-90deg);
    }

    .button2 svg {
      transform: rotate(-180deg);
    }

    .button3 {
      background-color: white;
    }

    .button3:hover {
      background-color: #41627E;
    }

    .button4 svg {
      transform: rotate(0deg);
    }

    .button5 svg {
      transform: rotate(90deg);
    }

    .footer {
      margin: 5%;
      color: white;
    }
  </style>
</head>
<body>
  <div class="hole">
    <section>
      <img src="https://s-m.com.sa/images/logo.png" alt="no image">
      <h3>Robot control panel</h3>
    </section>
    <div class="middle">
      <div class="button-container">
        <button class="button button1">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path d="M8.122 24l-4.122-4 8-8-8-8 4.122-4 11.878 12z"/>
          </svg>
        </button>
      </div>
      <div class="button-container">
        <button class="button button2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path d="M8.122 24l-4.122-4 8-8-8-8 4.122-4 11.878 12z"/>
          </svg>
        </button>
        <button class="button button3">
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
               viewBox="0 0 22.1 22.1" style="enable-background:new 0 0 22.1 22.1;" xml:space="preserve">
            <path d="M11.1,22.1C11.1,22.1,11.1,22.1,11.1,22.1c-2.7,0-5.2-1-7.1-2.9C0.1,15.2,0.1,8.9,4,5c0.4-0.4,1-0.4,1.4,0
                c0.4,0.4,0.4,1,0,1.4c-3.1,3.1-3.1,8.2,0,11.3c1.5,1.5,3.5,2.3,5.7,2.3c0,0,0,0,0,0c2.1,0,4.1-0.8,5.7-2.3c3.1-3.1,3.1-8.2,0-11.3
                c-0.4-0.4-0.4-1,0-1.4c0.4-0.4,1-0.4,1.4,0c3.9,3.9,3.9,10.2,0,14.1C16.2,21,13.7,22.1,11.1,22.1z"/>
            <path d="M11.1,12.1c-0.6,0-1-0.4-1-1v-10c0-0.6,0.4-1,1-1s1,0.4,1,1v10C12.1,11.6,11.6,12.1,11.1,12.1z"/>
          </svg>
        </button>
        <button class="button button4">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path d="M8.122 24l-4.122-4 8-8-8-8 4.122-4 11.878 12z"/>
          </svg>
        </button>
      </div>
      <div class="button-container">
        <button class="button button5">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path d="M8.122 24l-4.122-4 8-8-8-8 4.122-4 11.878 12z"/>
          </svg>
        </button>
      </div>
    </div>
    <div class="footer">
      <p>By Ghofran AlQarni</p>
    </div>
  </div>
</body>
</html>

