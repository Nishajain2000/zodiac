<!doctype html>
<html lang="en">
    <head>
    <title>zodiac</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        
        </head>

<body>
    <div class="main">
        <div class="image-container"></div>
        <div class="form-container">
<h1>What is your zodiac sign</h1>
<form class="form">
    <label class="label">Enter your day;</label>
<input type="text" id="day" name="day">

<label class="label">Enter your month;</label>
<input type="text" id="month" name="month">

<a class="submit" href="javaScript: myfunction()">submit</a>
<p id="zodiac-description">The result will display here</p>
</form>
</div>
</div>



<script>
function myfunction(){
var day = document.getElementById("day").value;
var month = document.getElementById("month").value;
if (day >31|| month>12 )
{
    alert('your date or month is incorrect')
}


var info;
var text;
if((month==1 && (day>=1||day<31))){
    info="aquarius";
}                                      
else if((month==2 && (day>=1||day<28))){
    info="pisces";
}                                      
else if ((month==3 && (day>=1||day<=31))){
    info="aries";
}                                      
else if((month==4 &&  (day>=1||day<=30))){
    info="taurus";
}                                      
else if((month==5 && (day>=1||day<=31))){
    info="gemini";
}                                      
else if((month==6 && (day>=1||day<=30))){
    info="cancer";
}                                      
else if((month==7 && (day>=1||day<=31))){
}                                      
else if((month==8 && (day>=1||day<=30))){
    info="virgos";
}                                      
else if((month==9 && (day>=1||day<=31))){
    info="libra";
}                                      
else if((month==10 && (day>=1||day<=30))){
    info="scorpio";
}                                      
else if((month==11 && (day>=1||day<=30))){
    info="sagittarius";
}                                      
else if((month==12 && (day>=1||day<=31))){
	info="capricorn";
}                                      
else{
    text="we are unable to give you information";

}

switch(info)
{
    case "aquarius":
text="Despite the “aqua” in its name, Aquarius is actually the last air sign of the zodiac. Aquarius is represented by the water bearer, the mystical healer who bestows water, or life, upon the land. Accordingly, Aquarius is the most humanitarian astrological sign.";

break;
 
case "pisces":
    text="Pisces, a water sign, is the last constellation of the zodiac. It's symbolized by two fish swimming in opposite directions, representing the constant division of Pisces's attention between fantasy and reality. As the final sign, Pisces has absorbed every lesson — the joys and the pain, the hopes and the fears — learned by all of the other sign";
break;
    case "aries":
    text="Aries loves to be number one, so it’s no surprise that these audacious rams are the first sign of the zodiac. Bold and ambitious, Aries dives headfirst into even the most challenging situations";
break;
    case "taurus":
    text="Taurus is an earth sign represented by the bull. Like their celestial spirit animal, Taureans enjoy relaxing in serene, bucolic environments, surrounded by soft sounds, soothing aromas, and succulent flavors.";
break;
    case "gemini":
    text="Have you ever been so busy that you wished you could clone yourself just to get everything done? That’s the Gemini experience in a nutshell. Appropriately symbolized by the celestial twins, this air sign was interested in so many pursuits that it had to double itself";
break;
    case "cancer":
    text="Cancer is a cardinal water sign. Represented by the crab, this oceanic crustacean seamlessly weaves between the sea and shore, representing Cancer’s ability to exist in both emotional and material realms. Cancers are highly intuitive, and their psychic abilities manifest in tangible spaces: For instance, Cancers can effortlessly pick up the energies of a room";
break;
    case "leo":
    text="Roll out the red carpet, because Leo has arrived. Leo is represented by the lion, and these spirited fire signs are the kings and queens of the celestial jungle. They’re delighted to embrace their royal status: Vivacious, theatrical, and passionate, Leos love to bask in the spotlight and celebrate themselves.";
break;
    case "virgos":
    text="Virgo is an earth sign historically represented by the goddess of wheat and agriculture, an association that speaks to Virgo’s deep-rooted presence in the material world. Virgos are logical, practical, and systematic in their approach to life. This earth sign is a perfectionist at heart and isn’t afraid to improve skills through diligent and consistent practice. ";
break;
    case "libra":
    text="Libra is an air sign represented by the scales (interestingly, the only inanimate object of the zodiac), an association that reflects Libra's fixation on balance and harmony. Libra is obsessed with symmetry and strives to create equilibrium in all areas of life.";
break;
    case "scorpio":
    text="Scorpio is one of the most misunderstood signs of the zodiac. Because of its incredible passion and power, Scorpio is often mistaken for a fire sign. In fact, Scorpio is a water sign that derives its strength from the psychic, emotional realm.";
break;
    case "sagittarius":
    text="Represented by the archer, Sagittarians are always on a quest for knowledge. The last fire sign of the zodiac, Sagittarius launches its many pursuits like blazing arrows, chasing after geographical, intellectual, and spiritual adventures.";
break;
    case "capricorn":
    text="The last earth sign of the zodiac, Capricorn is represented by the sea goat, a mythological creature with the body of a goat and tail of a fish. Accordingly, Capricorns are skilled at navigating both the material and emotional realms. ";
}




document.getElementById("zodiac-description").innerHTML = text;
}
</script>
</body>
</html>
