<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>

</header>

<body>
    <div class="container">
        <header>
            <!-- <img src="imbacla.png" alt="">--->
        </header>
        <button class="accordion">Section 1</button>
        <div class="panel">
            <p>podes ver el recorrido</p><span onclick="openNav()">open</span>

            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <img src="parandis.jpg" alt="">
                </div>

            </div>
            </div>
            <button class="accordion">Section 2</button>
        <div class="panel">
            <p>podes ver el recorrido</p><span onclick="openNav()">open</span>

            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <img src="parandis.jpg" alt="">
                </div>

            </div>
            </div>
            <button class="accordion">Section 3</button>
        <div class="panel">
            <p>podes ver el recorrido</p><span onclick="openNav()">open</span>

            <div id="myNav3" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <img src="parandis.jpg" alt="">
                </div>

            </div>
            </div>
            <button class="accordion">Section 4</button>
        <div class="panel">
            <p>podes ver el recorrido</p><span onclick="openNav()">open</span>

            <div id="myNav4" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <img src="parandis.jpg" alt="">
                </div>

            </div>
            </div>
            <button class="accordion">Section 5</button>
        <div class="panel">
            <p>podes ver el recorrido</p><span onclick="openNav()">open</span>

            <div id="myNav5" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <img src="parandis.jpg" alt="">
                </div>

            </div>
            </div>
            <button class="accordion">Section 6</button>
        <div class="panel">
            <p>podes ver el recorrido</p>
            <span onclick="openNav()">open</span>

            <div id="myNav6" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <img src="parandis.jpg" alt="">
                </div>

            </div>
            </div>
            <button class="accordion">Section 7</button>
        <div class="panel">
            <p>podes ver el recorrido</p><span onclick="openNav()">open</span>

            <div id="myNav7" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <img src="parandis.jpg" alt="">
                </div>

            </div>
            </div>
            <button class="accordion">Section 8</button>
        <div class="panel">
            <p>podes ver el recorrido</p><span onclick="openNav()">open</span>

            <div id="myNav8" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <img src="parandis.jpg" alt="">
                </div>

            </div>
            </div>
            <button class="accordion">Section 9</button>
        <div class="panel">
            <p>podes ver el recorrido</p><span onclick="openNav()">open</span>

            <div id="myNav9" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <img src="parandis.jpg" alt="">
                </div>

            </div>
            </div>
            <button class="accordion">Section 10</button>
        <div class="panel">
            <p>podes ver el recorrido</p><span onclick="openNav()">open</span>

            <div id="myNav10" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <img src="parandis.jpg" alt="">
                </div>

            </div>
            </div>

            <button class="accordion">Section 11</button>
        <div class="panel">
            <p>podes ver el recorrido</p><span onclick="openNav()">open</span>

            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <img src="parandis.jpg" alt="">
                </div>

            </div>
            </div>
    </div>
    <script>
   var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

    </script>



</body>

</html>