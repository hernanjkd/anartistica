
<div id="gallery_form" style="text-align:center;position:relative;top:30%%;">
	Who disturbs my slumber?
  <input type="text" id="passcode" value="" />
  <input type="button" value="Walk in with Abu" onclick="loggin('passcode')" />
</div>

<script type="text/javascript" src="javascript/md5.js"></script>
<script type="text/javascript">

if (readCookie('australia') == 'kangaroo')
  writeForm()



function loggin(id) {

  var v = document.getElementById(id).value

  if (MD5(v) == 'f219ae0f63934abc8bc7f37b8ee72435') {

    writeForm()

    var d = new Date()
    d.setTime(d.getTime() + (24*60*60*1000))
    document.cookie = 'australia=kangaroo; expires='+ d.toGMTString() +'; path=/'
    }
}



function writeForm() {

    var form = ''+
'<form method="post" action="upload.php">'+
'<input type="file" name="image" />'+
'<input type="submit" />'+
'<br />'+
'<textarea rows="25" cols="90" name="description"></textarea>'+
'</form>'

    document.getElementById('gallery_form').innerHTML = form  
}



function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}


</script>