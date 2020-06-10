<html>

<link type="text/css" rel="stylesheet" href="css/products.css" />

<body>

<table id="main"><tr>

<td id="top">

<table id="buttons"><tr>
<td>
<img name="shop"
     onmouseover="show(this)"
     onmouseout="hide(this)" 
     src="http://localhost:8888/images/build/shop.png" />
</td>
<td>
<img name="gallery"
     onmouseover="show(this)"
     onmouseout="hide(this)" 
     src="http://localhost:8888/images/build/gallery.png" />
</td>
<td>
<img name="blog"
     onmouseover="show(this)"
     onmouseout="hide(this)"
     onclick="location='http://www.anartistica.com/blog/'"
     src="http://localhost:8888/images/build/blog.png" />
</td>
<td>
<img name="spanish_blog"
     onmouseover="show(this)"
     onmouseout="hide(this)" 
     src="http://localhost:8888/images/build/spanish_blog.png" />
</td>
<td>
<img name="contact"
     onmouseover="show(this)"
     onmouseout="hide(this)"
     onclick="location='http://www.anartistica.com/contact.php'"
     src="http://localhost:8888/images/build/contact.png" />
</td>
</tr></table id="buttons">

<script type="text/javascript">
function show(e) {
    e.src = 'http://localhost:8888/images/build/'+ e.name +'_pressed.png'
}
function hide(e) {
    e.src = 'http://localhost:8888/images/build/'+ e.name +'.png'
}
</script>

</td>

</tr><tr>

<td id="middle">

</td>

</tr><tr>

<td id="bottom">

</td>

</tr></table id="main">





</body>
</html>