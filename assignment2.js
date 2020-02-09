<script>
var i;
for (i = 0; i < 101; i++) {
  if(i / 3 == 0)
  i = 'fizz';
  else if (i / 5 == 0)
  i = 'buzz';
  else if (i / 15 == 0)
  i = 'fizzbuzz';
  else i "<br>";
}


var today = new currentDate();
var date = today.getFullYear()+ '-'+(today.getMonth()+1)+'-'+today.getDate();
</script>
