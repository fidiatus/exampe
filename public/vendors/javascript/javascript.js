
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
var a = +$('input[name=nilai1]').val();
var b = +$('input[name=nilai2]').val();
var c = +$('input[name=nilai3]').val();
var d = +$('input[name=nilai4]').val();
var e = +$('input[name=nilai5]').val();
var f = +$('input[name=nilai6]').val();
var g = +$('input[name=nilai7]').val();
var h = +$('input[name=nilai8]').val();
var i = +$('input[name=nilai9]').val();
var j = +$('input[name=nilai10]').val();
var k = +$('input[name=nilai11]').val();
var l = +$('input[name=nilai12]').val();
var m = +$('input[name=nilai13]').val();
var n = +$('input[name=nilai14]').val();
var hasil = (a+b+c+d+e+f+g+h+i+j+k+l+m+n)/14;
$('#hasil').val((a+b+c+d+e+f+g+h+i+j+k+l+m+n)/14);

var y = +$('input[name=nilai_pembimbing]').val();
var z = +$('input[name=nilai_penguji]').val();
var jumlah =hasil + y + z;
$('#jumlah').val(hasil+y+z);

var total =jumlah /3 ;
$('#total').val(jumlah/3);
</script>
