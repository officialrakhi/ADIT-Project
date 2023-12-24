<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 10px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 80%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
</head>
<body>

<h2 style="text-align:center" > Project Team memeber </h2>
<br>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="rakhi.jpg" alt="rakhi" style="width:70%">
      <div class="container">
        <h2>Rakhi Tandon</h2>
  
        <p>rakhitandon20011998@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="neetu.jpg" alt="neetu" style="width:70%">
      <div class="container">
        <h2>Neetu</h2>
        
        <p>neetustar991@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="shristi.jpg" alt="shristi" style="width:70%">
      <div class="container">
        <h2>Shristi shreya</h2>
       
        <p>ak4462868@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

<div class="column">
    <div class="card">
      <img src="jaya.jpeg" alt="shristi" style="width:70%">
      <div class="container">
        <h2>Jaya Singh</h2>
       
        <p>singhjaya994@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>


</body>
</html>
