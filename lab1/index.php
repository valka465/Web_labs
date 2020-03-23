<html>
<head>
<title>Делаем ссылкой кусочек текста</title>
</head>
<body style="background-image:url(../image/fon.jpg)">
<div align="center"> 
<br><br><br><?php echo '<b>Скажи мне, милый ребёнок: в каком ухе у меня жужжит?</b>'; ?>
<br><br><br>
В <a href="primer.html">правом</a> или <a href="primer.html">левом</a>?
</div>
<br><br><br>

  <html lang="en-US">
<head>
  <CENTER>

  <br><h1><font color = Black >Свой вариант</h1>
  <meta charset="utf-8">
    <title>anketa</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">

</head>
    <div id="login">
      <form name='form1'>
        <span class="fontawesome-user"></span>
          <input type="text" name='text1' id="user" placeholder="Ответ" >
       
        
        <input type="submit" value="Отправить" onclick="return Check()">

</form>

<script type="text/javascript">

function Check() {
  var passw = "Обоих|обоих|Обоих ухах|обоих ухах";
  var reg = new RegExp("^" + passw + "$");
  if(reg.test(document.form1.text1.value)) {   
    document.location.href = "index2.html";
  } else {   
    document.location.href = "primer.html";
  } 
  return false;
} 
</script>  
	<table align = "center">
  <tr>
    <td>Счет</td>
  </tr>
  <tr>
    <td>Карлсон</td>
    <td>3</td>
  </tr>
  <tr>
    <td>Френкенбок</td>
    <td>0</td>
  </tr>

</body>
</html>