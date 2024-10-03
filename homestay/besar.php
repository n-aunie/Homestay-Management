<html>
<script>
var fontsize = 1;
fantion zoomIn(){
   fontSize += 0.1;
   document.body.style.fontSize = fontSize = "em";
}
funtion zoomOut() {
    fontSize -= 0.1;
    document.body.style.fontSize = fontSize = "em";
}
</script>
<!--menyediakan butang besar kecil saiz font -->
<center>
<input type="button"value="Besar Teks" onClick="zoomIn()"/>
<input type="button"value="Kecil Teks" onClick="zoomOut()"/>
</center>
</html>