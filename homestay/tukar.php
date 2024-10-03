<body>
<center>
<!--menyediakan butang tukar warna font-->
<button id= "color">Tukar Warna</button>
</center>
<script>
document.getElementById('color').onclick = changeColor;
<!-- tukar warna di sini-->
var currentColor = "blue";
function changeColor() {
        if(currentColor == "blue"){
        document.body.style.color= "purple";
        currentColor = "purple"
        }else{
           document.body.style.color = "blue";
           currentColor = "blue";
        }
    }
</script>
</body>