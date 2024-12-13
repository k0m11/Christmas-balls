<?php
 /* Здесь проверяется существование переменных */
 if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
 if (isset($_POST['name'])) {$name = $_POST['name'];}
 if (isset($_POST['itemid'])) {$itemid = $_POST['itemid'];}
 if (isset($_POST['type_form'])) {$type_form = $_POST['type_form'];}
 
/* Сюда впишите свою эл. почту */
 $address = "info@modern-pro.ru";

/* А здесь прописывается текст сообщения, \n - перенос строки */
 $mes = "\nТелефон: $phone\nИмя: $name\nРазмер: $itemid\nФорма: $type_form";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Заявка с сайта Новогодние шары'; //сабж
$email='admin@unlun.pp.ua'; // от кого
 $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");

ini_set('short_open_tag', 'On');

?>

<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">

    <title>Заявка отправленна</title>

<style>
	body {
    line-height: 1;
    height: 100%;
    font-family: Arial;
    font-size: 15px;
    color: #fff;
    
    height: 100%;
    background: url(thanks3.png);
}
h2 {
    font-size: 36px;
    line-height: 44px;
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    font-weight: bold;
}
.success {
    text-align: center;
}
.block_success {
    max-width: 960px;
    padding: 70px 30px 70px 30px;
    margin: 0px auto;
}
a {
    color: #fff;
}
	</style>
</head>

  <body>


    <div class="wrap_block_success">

      <div class="block_success">

        <h2>ПОЗДРАВЛЯЕМ! ВАШ ЗАКАЗ ПРИНЯТ!</h2>

      
        <p class="success">В ближайшее время с вами свяжется оператор. Пожалуйста, включите ваш контактный телефон.</p>

        <h3>Пожалуйста, проверьте правильность введенной вами информации</h3>

        <div class="wrap_list_info">

          <ul class="list_info">

            <li><span>Ф.И.O.: </span><?php echo $_POST['name']; ?></li>
            <li><span>Телефон: </span><?php echo $_POST['phone']; ?></li>
			

          </ul>
        </div>

        <p class="fail">Если вы ошиблись при заполнени формы, то, пожалуйста, <a href="./">заполните заявку еще раз</a></p>



      </div>

    </div>

  
</body>

</html>
