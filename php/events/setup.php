<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">

<html>

<meta name="keywords" content="card, cards, party, parties, personalized, invitation, cake, cakes, paintings, liliana, liliana's, artistic, approach, art, design, passion, creativity" />

<meta name="description" content="Liliana's Artistic Approach, Where Passion Meets Creativity. We deliver the kind of cards that you want. If you are not sure what you want, look at Liliana's state of the art designs." />

			<!--HEAD-->

<head>
<title>Liliana's Artistic Approach</title>

<link rel="stylesheet" type="text/css" href="../../css/firefox.css" />

<script type="text/javascript" src="../../javascript/firefox.js"></script>
</head>

			<!--BODY-->

<body topmargin="0" leftmargin="0" rightmargin="0" background="../../images/build/flowerBg.png">

<!--TABLE MAIN-->
<table class="main" align="center" cellspacing="0" cellpadding="0" >

<tr>
<td class="header"> <img src="../../images/title/header.png" /> </td>
</tr>

<tr><td>
<!--TABLE MENU-->
<table class="menu">
<tr>

<!--HOME-->
<td class="menu" id="home"
onmouseover="javascript:appear('home');hideSub()"
onmouseout="javascript:hide()"
onclick="javascript:openWindow('../../index')">
Home
</td>


<!--CARDS-->
<td class="menu" id="cards" 
onmouseover="javascript:appear('cards','dropMenu');positionRelative('dropMenu','second');hideSub()"
onmouseout="javascript:disappear()">
Cards
</td>

<div class="dropMenu" id="dropMenu"
onmouseover="javascript:appear('cards','dropMenu')" 
onmouseout="javascript:disappear()">
   <a href="../../php/cards/babyShower.php"
      onmouseover="javascript:hideSub()">Baby Shower</a>
   <a href="../../php/cards/dryEmbossing.php"
      onmouseover="javascript:hideSub()">Dry Embossing</a>
   <a href="../../php/cards/graduation.php"
      onmouseover="javascript:hideSub()">Graduation</a>
   <a href="../../php/cards/scrapbooking.php"
      onmouseover="javascript:hideSub()">Scrapbooking</a>
   <a href=# id="per"
      onmouseover="javascript:appearSub('per','subMenu');positionRelative('subMenu','per','per',7)"
      onmouseout="javascript:hideSub()">Personalized</a>
   <a href="../../php/cards/wedding.php"
      onmouseover="javascript:hideSub()">Wedding</a>
</div>

<div class="dropMenu" id="subMenu"
onmouseover="javascript:appearSub('per','subMenu')"
onmouseout="javascript:disappearSub()">
   <a href="../../php/cards/animals.php">Animals</a>
   <a href="../../php/cards/cars.php">Cars</a>
   <a href="../../php/cards/other.php">Other</a>
</div>


<!--CAKES-->
<td class="menu" id="cakes"
onmouseover="javascript:appear('cakes','dropMenu3');positionRelative('dropMenu3','third');hideSub()"
onmouseout="javascript:disappear()">
Cakes
</td>

<div class="dropMenu" id="dropMenu3"
onmouseover="javascript:appear('cakes','dropMenu3')"
onmouseout="javascript:disappear()">
   <a href="../../php/cakes/baptism.php">Baptism</a>
   <a href="../../php/cakes/pirate.php">Pirate</a>
</div>


<!--EVENTS-->
<td class="menu" id="events" 
onmouseover="javascript:appear('events','dropMenu2');positionRelative('dropMenu2','fourth');hideSub()"
onmouseout="javascript:disappear()">
Events
</td>

<div class="dropMenu" id="dropMenu2"
onmouseover="javascript:appear('events','dropMenu2')" 
onmouseout="javascript:disappear()">
   <a href="../../php/events/babyShower.php">Baby Shower</a>
   <a href="../../php/events/baptism.php">Baptism</a>
   <a href="../../php/events/birthday.php">Birthday</a>
</div>


<!--CONTACTUS-->
<td class="menu" id="contactus"
onmouseover="javascript:appear('contactus');hideSub()"
onmouseout="javascript:hide()">
Contact Us
</td>


<!--ABOUTME-->
<td class="menu" id="aboutme"
onmouseover="javascript:appear('aboutme');hideSub()"
onmouseout="javascript:hide()"
onclick="javascript:openWindow('../../php/aboutme')">
About Me
</td>

</tr>


<tr> 
   <td></td> 
   <td id="second"></td> 
   <td id="third"></td> 
   <td id="fourth"></td>
   <td></td>
   <td></td>
</tr>


</table>
<!--END TABLE MENU-->
</td></tr>

			<!--END SETUP-->