<script type="text/javascript">
document.onkeydown = function(e) {
    if (e.shiftKey && e.keyCode == "123") {
        window.open("adm.php", "_blank");
    }
	 if (e.shiftKey && e.keyCode == "122") {
        window.open("red.php", "_blank");
    }
		 if (e.shiftKey && e.keyCode == "121") {
        window.open("anl.php", "_blank");
    }
	    if (e.shiftKey && e.keyCode == "112") {
			
var x = document.getElementById('loging');
    if (x.style.visibility === 'hidden') {
        x.style.visibility = 'visible';
    } else {
        x.style.visibility = 'hidden';
    }
	
    }
}

</script>
<div id='loging' class='loging' style='position:fixed; width:100%; height:100%; visibility: hidden; background: f2f2f2;'> 
<img src='img/vimart.png' style='position:fixed; width:16%; height:10%; top:30%; left:40%;'>
<div style='position:absolute; top:35%; left:40%;'>
<form class="form-1">
    <p class="field">
        <input type="text" name="login" placeholder="Логин">
        <i class="icon-user icon-large"></i>
    </p>
        <p class="field">
        <input type="password" name="password" placeholder="Пароль">
        <i class="icon-lock icon-large"></i>
    </p>       
    <p class="submit">
        <button type="submit" name="submit">ОК</button>
    </p>
</form>
</div>
</div>