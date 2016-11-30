<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="author" content="Krzysztof Łokaj" />
    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;subset=latin-ext" rel="stylesheet">
    <link href="./reset.css" rel="stylesheet" type="text/css" />
    <link href="./style.css" rel="stylesheet" type="text/css" />
	<title>Licznik odległości geograficznej</title>
</head>
<body>
    <div id="form">
            <form>
                <p>Punkt startowy</p>
                <div class="length">
                    Szerokość Geograficzna
                    <label>N</label><input type="radio" name="szerokosc_geograficzna" value="N" checked="" />
                    <label>S</label><input type="radio" name="szerokosc_geograficzna" value="S"  />
                    <input type="text" name="wartosc_szerokosc_geograficzna" value="0" />
                </div>
                <div class="length">
                    Wysokość Geograficzna
                    <label>W</label><input type="radio" name="wysokosc_geograficzna" value="W" checked="" />
                    <label>E</label><input type="radio" name="wysokosc_geograficzna" value="E" />
                    <input type="text" name="wartosc_wysokosc_geograficzna" value="0" />
                </div>
                <hr />
                <p>Punkt końcowy</p>
                <div class="length">
                    Szerokość Geograficzna
                    <label>N</label><input type="radio" name="kon_szerokosc_geograficzna" value="N" checked="" />
                    <label>S</label><input type="radio" name="kon_szerokosc_geograficzna" value="S"  />
                    <input type="text" name="kon_wartosc_szerokosc_geograficzna" value="0" />
                </div>
                <div class="length">
                    Wysokość Geograficzna
                    <label>W</label><input type="radio" name="kon_wysokosc_geograficzna" value="W" checked="" />
                    <label>E</label><input type="radio" name="kon_wysokosc_geograficzna" value="E" />
                    <input type="text" name="kon_wartosc_wysokosc_geograficzna" value="0" />
                </div>
                <button>Wyślij</button>
            </form>
            
        <div class="error hide">
            <div></div>
            <p>
                Błąd
            </p>
        </div>
        <div class="pozytywne hide">
            <div></div>
            <p>
                Poprawne
            </p>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
$("button").click(function(){
    $('.error').css("display","none");
    $('.pozytywne').css("display","none");
    
    //punkt startowy
    if($("input[name='wartosc_szerokosc_geograficzna']").val() == "")
        {
            $('.error p').html("Pole szerokość geograficzna nie może być puste");
            $('.error').fadeIn("400");
            return false;
        }
    if($("input[name='wartosc_wysokosc_geograficzna']").val() == "")
        {
            $('.error p').html("Pole wysokość geograficzna nie może być puste");
            $('.error').fadeIn("400");
            return false;
        }
    if($.isNumeric($("input[name='wartosc_szerokosc_geograficzna']").val())==false)
        {
            $('.error p').html("Pole szerokość geograficzna nie jest liczbą");
            $('.error').fadeIn("400");
            return false;
        }
    if($.isNumeric($("input[name='wartosc_wysokosc_geograficzna']").val())==false)
        {
            $('.error p').html("Pole wysokość geograficzna nie jest liczbą");
            $('.error').fadeIn("400");
            return false;
        }
    if(parseInt($("input[name='wartosc_szerokosc_geograficzna']").val()) < 0)
        {
            $('.error p').html("Pole szerokość geograficzna nie może być ujemne");
            $('.error').fadeIn("400");
            return false;
        }
    if(parseInt($("input[name='wartosc_wysokosc_geograficzna']").val()) < 0)
        {
            $('.error p').html("Pole wysokość geograficzna nie może być ujemne");
            $('.error').fadeIn("400");
            return false;
        }
    if(parseInt($("input[name='wartosc_szerokosc_geograficzna']").val()) >180)
        {
            $('.error p').html("Pole szerokość geograficzna nie może być większe niż 180");
            $('.error').fadeIn("400");
            return false;
        }
    if(parseInt($("input[name='wartosc_wysokosc_geograficzna']").val()) > 180)
        {
            $('.error p').html("Pole wysokość geograficzna nie może być większe niż 180");
            $('.error').fadeIn("400");
            return false;
        }
    //punkt koncowy
    if($("input[name='kon_wartosc_szerokosc_geograficzna']").val() == "")
        {
            $('.error p').html("Pole szerokość geograficzna nie może być puste");
            $('.error').fadeIn("400");
            return false;
        }
    if($("input[name='kon_wartosc_wysokosc_geograficzna']").val() == "")
        {
            $('.error p').html("Pole wysokość geograficzna nie może być puste");
            $('.error').fadeIn("400");
            return false;
        }
    if($.isNumeric($("input[name='kon_wartosc_szerokosc_geograficzna']").val())==false)
        {
            $('.error p').html("Pole szerokość geograficzna nie jest liczbą");
            $('.error').fadeIn("400");
            return false;
        }
    if($.isNumeric($("input[name='kon_wartosc_wysokosc_geograficzna']").val())==false)
        {
            $('.error p').html("Pole wysokość geograficzna nie jest liczbą");
            $('.error').fadeIn("400");
            return false;
        }
    if(parseInt($("input[name='kon_wartosc_szerokosc_geograficzna']").val()) < 0)
        {
            $('.error p').html("Pole szerokość geograficzna nie może być ujemne");
            $('.error').fadeIn("400");
            return false;
        }
    if(parseInt($("input[name='kon_wartosc_wysokosc_geograficzna']").val()) < 0)
        {
            $('.error p').html("Pole wysokość geograficzna nie może być ujemne");
            $('.error').fadeIn("400");
            return false;
        }
    if(parseInt($("input[name='kon_wartosc_szerokosc_geograficzna']").val()) > 180)
        {
            $('.error p').html("Pole szerokość geograficzna nie może być większe niż 180");
            $('.error').fadeIn("400");
            return false;
        }
    if(parseInt($("input[name='kon_wartosc_wysokosc_geograficzna']").val()) > 180)
        {
            $('.error p').html("Pole wysokość geograficzna nie może być większe niż 180");
            $('.error').fadeIn("400");
            return false;
        }
    var sciezkadowyslania = "";
    var startX = $("input[name='wartosc_szerokosc_geograficzna']").val();
    var startY = $("input[name='wartosc_wysokosc_geograficzna']").val();
    if($("input[type='radio'][name='szerokosc_geograficzna']:checked").val() == "S")
        {
            startX *= -1;
        }
    if($("input[type='radio'][name='wysokosc_geograficzna']:checked").val() == "W")
        {
            startY *= -1;
        }
    sciezkadowyslania = sciezkadowyslania+"start_x="+startX+"&start_y="+startY;
    var konX = $("input[name='kon_wartosc_szerokosc_geograficzna']").val();
    var konY = $("input[name='kon_wartosc_wysokosc_geograficzna']").val();
    if($("input[type='radio'][name='kon_szerokosc_geograficzna']:checked").val() == "S")
        {
            konX *= -1;
        }
    if($("input[type='radio'][name='kon_wysokosc_geograficzna']:checked").val() == "W")
        {
            konY *= -1;
        }
    sciezkadowyslania = sciezkadowyslania+"&kon_x="+konX+"&kon_y="+konY;
    $.ajax({
      url: "./liczdystans.php?"+sciezkadowyslania
    }).done(function( data ) {
      $(".pozytywne p").html(data);
      $('.pozytywne').fadeIn("400");
    });
        
    return false;
})

</script>
</body>
</html>