 <html xmlns="http://www.w3.org/1999/xhtml" >

<head>    
    <meta charset="utf-8">
    <title>Купить шары</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />   
    <link type="text/css" rel="stylesheet" media="all" href="styles.css" />
    <link type="text/css" rel="stylesheet" media="all" href="device.css" />
    <meta name="description" content="У нас вы можете купить ШАРЫ НА елку с гарантией лучшей цены. Все шары только выского качества."> 
    <meta name="Keywords" content="купить искуственную елку">  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>   
	<script type="text/javascript" src="js/device.js"></script> 
    <script type="text/javascript" src="assets/countdown/jquery.countdown.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=0.6" />
    <meta name="MobileOptimized" content="480" />
    <meta name="HandheldFriendly" content="false" /> 
    <!--------------------------------------   skript for counter---------------->
                <script type="text/javascript">
                    $(function () {
                        var note = $('#note'),
                                ts = new Date(2019, 28, 12), //МЕНЯТЬ ДАТУ ТУТ!!!!! дата НЕ включительно,  месяцы начинаются с "0"  Январь(1)-0, Февраль(2) - 1... Декабрь(12)- 12
                                newYear = true;
                        if ((new Date()) > ts) {
                            ts = (new Date()).getTime() + 00 * 2 * 60 * 60 * 1000;
                            newYear = false;
                        }
                        $('#countdown').countdown({
                            timestamp: ts,
                            callback: function (days, hours, minutes, seconds) {
                                var message = "";
                                message += "Дней: " + days + ", ";
                                message += "часов: " + hours + ", ";
                                message += "минут: " + minutes + " и ";
                                message += "секунд: " + seconds + " <br />";
                                if (newYear) {
                                    message += "";
                                }
                                else {
                                    message += "";
                                }
                                note.html(message);
                            }
                        });
                    });
                </script>
<!--------------------------------------   skript for counter-    END    ---------------> 


</head>
<body>
   <div class="header">
        <div class="center"> 
                            
            <div class="header_left">
                <div class="logo"><p><span style="color: #84f279;">Елочные шары</span> - MODERN Pro</p><span></span></div><!-- logo --> 
                <div class="name_site">
                    <h1>ЕЛОЧНЫЕ ШАРЫ С НАНЕСЕНИЕМ!<span>от одной штуки</span></h1>  
                    <div class="delivery"><p>ПРОДЛЕВАЕМ МЕГА СКИДКИ!!! </p></div>
                </div> 
                   
             <div class="spesial">
                   <p>ЛУЧШЕЕ ПРЕДЛОЖЕНИЕ НА ЕЛОЧНЫЕ ШАРЫ С НАНЕСЕНИЕМ! <span> </span>Шарики от <span>20 руб!</span> По самым низким ценам! <span>Шок цены!</span></p>  
                </div>
                
                    <div class="counter">
                    <h3 align="center" style="color:gold ;    font-size: 30px;
    text-shadow: none;
    background-color: rgba(227, 46, 59, 0.90);
    display: inline-block;
    position: relative;
    padding: 8px 20px;
    line-height: 1;">До сезонного повышения цен осталось:<br></h3>
                    <div class="share" id="countdown">
                        <div>
                            <div class="share_block share_block1">
                                <font>дней</font>
                            </div>
                            <div class="share_block share_block2">
                                <font>часов</font>
                            </div>
                            <div class="share_block share_block3">
                                <font>минут</font>
                            </div>
                            <div class="share_block share_block4">
                                <font>секунд</font>
                            </div>
                        </div>
                    </div>
                </div><!-- counter -->                                              
            </div> <!-- header_left -->    
            <div class="header_right">
               



 <div class="phone">			
<div style="text-align: center;font-size: 35px;"><a style="color:#333;" href="mailto:info@modern-pro.ru"> info@modern-pro.ru </a></div>	<p>
                  <strong> 
				  <a id="whatsapp" title = "Нажмите, чтобы отправить сообщение в WhatsApp" href="whatsapp://send?phone=89163804979" target="_blank"></a> 
				  <a id="viber" title = "Нажмите, чтобы отправить сообщение в Viber" href="viber://add?number=89163804979" target="_blank"></a>
				  <a id="telegram" title = "Нажмите, чтобы отправить сообщение в Telegram" href="tg://resolve?domain=newyear_2019" target="_blank"></a>
				  </strong>
				  </p>
				   <a id="calltomeatwork" href="tel: 8 (916) 380-49-79"> 8 (916) 380-49-79</a>
				 <div id="calltomeatwork" style="font-size: 23px;color: #272727; text-decoration: none; text-align:center">Звоните или пишите</div>
				 <!--  <a href="javascript:void(0)" class="back_call">Заказать звонок</a> --></div>
                <div class="work_time"><p>Работаем <strong>24/7</strong></p></div> 
                <div class="header_forma">
                    <h3>ЗАКАЖИТЕ<br><span style="color: #f0451f;"></span>  ШАРЫ<br>ПРЯМО СЕЙЧАС</h3>
                    <div class="order_box">                        
                        <div class="results" id="result1" style="">
                            <h4>Спасибо за заявку</h4>
                            <p>Ожидайте звонка от нашего менеджера</p>
                        </div>
                        <form id="order_form1" method="post"  >
                        <input type="hidden" name="project_name" value="Сообщение">
                        <input type="hidden" name="admin_email" value="info@modern-pro.ru">
                        <input type="hidden" name="form_subject" value="Заказ">   
						   <input type="hidden" name="форма" value="Верхняя форма" />
                            <label>
                                <input type="text" class="required" name="Имя" required = "true" value="" placeholder="Имя*" />
                            </label>                        
                            <label>
                                <input type="text" class="required" name="Телефон" required = "true"  value="" placeholder="Телефон*" />
                            </label>  
 <label>
                                <input type="text" class="required" name="Почта" required = "true"  value="" placeholder="E-mail*" />
                            </label>
<label>
<select size="1"  name="Размер&nbsp;шаров" id="itemid">
    <option value="00" selected="selected">Выберите размер</option>
	<option value="6&nbsp;см"  >6&nbsp;см</option>
    <option value="7&nbsp;см">7&nbsp;см</option>
    <option value="8&nbsp;см">8&nbsp;см</option>
    <option value="10&nbsp;см">10&nbsp;см</option>
    <option value="12&nbsp;см">12&nbsp;см</option>
	<option value="15&nbsp;см">15&nbsp;см</option>
    <option value="20&nbsp;см">20&nbsp;см</option>
	<option value="25&nbsp;см">25&nbsp;см</option>
	<option value="30&nbsp;см">30&nbsp;см</option>
   </select>             
</label>	
<label>
 <input type="text" class="required" name="Количество" required = "true" value="" placeholder="Количество" />
</label>                         
                        
<label>
<select size="1"  name="Цвет" id="itemid">
    <option value="00" selected="selected">Цвет</option>
	<option value="Синий"  >Синий</option>
    <option value="Золотой">Золотой</option>
    <option value="Оранжевый">Оранжевый</option>
    <option value="Фиолетовый">Фиолетовый</option>
    <option value="Красный">Красный</option>
	<option value="Серебро">Серебро</option>
    <option value="Зеленый">Зеленый</option>
	<option value="Белый">Белый</option>
   </select>             
</label> 

<label>
<select size="1"  name="Нанесение" id="itemid">
    <option value="00" selected="selected">Нанесение</option>
	<option value="1+0">1+0</option>
    <option value="2+0">2+0</option>
    <option value="3+0">3+0</option>
    <option value="4+0">4+0</option>
   </select>             
</label> 
<label> 
  <p>Комментарий<Br>
   <textarea name="Комментарий" cols="40" rows="3" value="Комментарий" ></textarea></p>
</label> 
						
                            <input type="submit" class="submit batton1" value="Заказать" />
                        </form>
						
                        <p class="save" style="padding: 0;">Ваши данные не будут переданы третьим лицам </p>  
                    </div>               
                </div>
                <div class="header_forma_bottom"></div>
            </div> <!-- header_right -->                                  
        </div> <!-- center -->   
    </div><!-- header -->
    <div class="box_shad"></div>  
    <div class="conteiner">
        <div class="conteiner_block" id="conteiner_block1">
            <div class="center">                          
                <h2>ШАРЫ НОВОГОДНИЕ</h2>  
       <div class="centers">         
				<h3>Цена на ПЛАСТИКОВЫЕ шары:</h3>
<div class="item"><div class="price">                     
<p class="new_price">6 см – 25</p>
<p class="new_price">7 см – 35</p>
<p class="new_price">8 см – 40</p>
</div></div>
<div class="item"><div class="price">
<p class="new_price">10 см – 80</p>
<p class="new_price">12 см – 100</p>
<p class="new_price">15 см – 190</p>
</div></div>
<div class="item"><div class="price">
<p class="new_price">20 см – 480</p>
<p class="new_price">25 см – 705</p>
<p class="new_price">30 см – 2400</p>
</div></div>
<h3>Цена на СТЕКЛЯНЫЕ шары:</h3>
<div class="item"><div class="price">                     
<p class="new_price">6 см – 55</p>
<p class="new_price">8 см – 130</p>
</div></div>
<div class="item"><div class="price">
<p class="new_price">10 см – 290</p>
<p class="new_price">15 см – 900</p>
</div></div>
<div class="item"><div class="price">
<p class="new_price">20 см – 1500</p>
<p class="new_price">15 см – 2000</p>
</div></div>

<a href="#price"><h3>ВОЗМОЖНО ИЗГОТОВЛЕНИЕ ИМЕННЫХ ШАРОВ, ШАРОВ ПОШТУЧНО</h3></a>

				</div>
				
                <div class="item">
                    <h5>Золотой</h5>
					<div class="img"><div class="aligne"><img src="upload/gold.png" /></div></div>
                    <div class="name_prod" style="display: none;">&nbsp;</div>
                    
                    <a href="javascript:void(0)" class="order_product order2 batton2">Заказать</a>
                </div>
                <div class="item item" style="width: ;">
                    <h5>Серебро</h5>
					<div class="img"><div class="aligne"><img src="upload/silver.png" /></div></div>
                    <div class="name_prod" style="display: none;">&nbsp;</div>
                    <a href="javascript:void(0)" class="order_product order21 batton2">Заказать</a>
                   
                </div>
				<div class="item">
                    <h5>Оранжевый</h5>
					<div class="img"><div class="aligne"><img src="upload/orange.png" /></div></div>
                    <div class="name_prod" style="display: none;">&nbsp;</div>
                    
                    <a href="javascript:void(0)" class="order_product order2 batton2">Заказать</a>
                </div>  
				
				
                                                
            </div><!-- center -->
        </div>  <!-- conteiner_block1 --> 
        <div class="conteiner_block" id="conteiner_block1">
            <div class="center">                
                
				
				<div class="item item" style="width: ;">
                    <h5>Фиолетовый</h5>
					<div class="img"><div class="aligne"><img src="upload/violet.png" /></div></div> 
                    <div class="name_prod" style="display: none;">&nbsp;</div>                   
                    <a href="javascript:void(0)" class="order_product order21 batton2">Заказать</a>
                    
                </div>
                <div class="item item" style="width: ;">
                    <h5>Красный</h5>
					<div class="img"><div class="aligne"><img src="upload/red.png" /></div></div>
                    <div class="name_prod" style="display: none;">&nbsp;</div>
                    <a href="javascript:void(0)" class="order_product order21 batton2">Заказать</a>
                    
                </div>
                <div class="item">				   
                    <h5>Синий</h5>
                    <div class="img"><div class="aligne"><img src="upload/blue.png" /></div></div>
                    <div class="name_prod" style="display: none;">&nbsp;</div>
                   
                    <a href="javascript:void(0)" class="order_product order2 batton2">Заказать</a>
                </div>
				
				
               <div class="item item" style="width: ;">
                    <h5>Зеленый</h5>
					<div class="img"><div class="aligne"><img src="upload/grenn.png" /></div></div>
                    <div class="name_prod" style="display: none;">&nbsp;</div>
					
					<a href="javascript:void(0)" class="order_product order2 batton2">Заказать</a>
                    
                </div>
                <div class="item item5" style="width: ;">
                    <h5>Белый</h5>
					<div class="img"><div class="aligne"><img src="upload/white.png" /></div></div>
                    <div class="name_prod" style="display: none;">&nbsp;</div>
                    <a href="javascript:void(0)" class="order_product order21 batton2">Заказать</a>
                   
                </div>  
                

				
            </div><!-- center -->
        </div>  <!-- conteiner_block2 -->
         
		 <div class="conteiner_block" id="conteiner_block3">
            <div class="center">   
                 
				
		
<h3>Шары блестящие или матовые на выбор.</h3>
<h3>Минимальный заказ от 5000 руб.</h3>

<h3>Стоимость нанесения на ПЛАСТИКОВЫХ шарах, 6-10 см</h3>
				
		<div class="item"><div class="price">                     
<p class="price2">в один цвет:</p><br>
<p class="new_price">1-100 шт –&nbsp;&nbsp; 4500 руб</p>
<p class="new_price">200 шт&nbsp;&nbsp;&nbsp; –&nbsp;&nbsp; 5500 руб</p>
<p class="new_price">300 шт&nbsp;&nbsp;&nbsp; –&nbsp;&nbsp; 6500 руб</p>
<p class="new_price">400 шт&nbsp;&nbsp;&nbsp; –&nbsp;&nbsp; 7500 руб</p>
<p class="new_price">500 шт&nbsp;&nbsp;&nbsp; –&nbsp;&nbsp; 8500 руб</p>
<p class="new_price">1000 шт &nbsp;–&nbsp; 12000 руб</p>
<p class="new_price">1001 шт &nbsp;&nbsp;&nbsp;и &nbsp;&nbsp;&nbsp;&nbsp;более <br>– цена договорная</p>
<br>
</div></div>
<div class="item"><div class="price">
<p class="price2">в два цвета:</p><br>
<p class="new_price">1-100 шт –&nbsp;&nbsp; 5500 руб</p>
<p class="new_price">200 шт&nbsp;&nbsp;&nbsp; –&nbsp;&nbsp; 6500 руб</p>
<p class="new_price">300 шт&nbsp;&nbsp;&nbsp; –&nbsp;&nbsp; 7500 руб</p>
<p class="new_price">400 шт&nbsp;&nbsp;&nbsp; –&nbsp;&nbsp; 8500 руб</p>
<p class="new_price">500 шт&nbsp;&nbsp;&nbsp; –&nbsp;&nbsp; 9500 руб</p>
<p class="new_price">1000 шт &nbsp;–&nbsp; 14000 руб</p>
<p class="new_price">1001 шт &nbsp;&nbsp;&nbsp;и &nbsp;&nbsp;&nbsp;&nbsp;более <br> – цена договорная</p>
<br>
</div></div>
<div class="item"><div class="price">
<p class="price2">в три цвета:</p><br>
<p class="new_price">1-100 шт –&nbsp;&nbsp; 6500 руб</p>
<p class="new_price">200 шт&nbsp;&nbsp;&nbsp; –&nbsp;&nbsp; 7500 руб</p>
<p class="new_price">300 шт&nbsp;&nbsp;&nbsp; –&nbsp;&nbsp; 8500 руб</p>
<p class="new_price">400 шт&nbsp;&nbsp;&nbsp; –&nbsp;&nbsp; 9500 руб</p>
<p class="new_price">500 шт&nbsp;&nbsp;&nbsp; –&nbsp; 10500 руб</p>
<p class="new_price">1000 шт &nbsp;–&nbsp; 16000 руб</p>
<p class="new_price">1001 шт &nbsp;&nbsp;&nbsp;и &nbsp;&nbsp;&nbsp;&nbsp;более <br> – цена договорная</p>

</div></div>

	<!---t-->
<h3>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</h3>
<h3 id="price">СТОИМОСТЬ НАНЕСЕНИЯ НА СТЕКЛЯННЫХ ШАРАХ, 6-10 СМ</h3>
			
		<div class="item"><div class="price">                     
<p class="price2">в один цвет:</p><br>
<p class="new_price">1-100 шт –&nbsp;&nbsp; 9000 руб</p>
<p class="new_price">200 шт&nbsp;&nbsp;&nbsp; –&nbsp;&nbsp; 11000 руб</p>
<p class="new_price">300 шт&nbsp;&nbsp;&nbsp; –&nbsp;&nbsp; 13000 руб</p>
<p class="new_price">400 шт&nbsp;&nbsp;&nbsp; –&nbsp;&nbsp; 15000 руб</p>
<p class="new_price">500 шт&nbsp;&nbsp;&nbsp; –&nbsp;&nbsp; 17000 руб</p>
<p class="new_price">1000 шт &nbsp;–&nbsp; &nbsp;24000 руб</p>
<p class="new_price">1001 шт &nbsp;&nbsp;&nbsp;и &nbsp;&nbsp;&nbsp;&nbsp;более <br>– цена договорная</p>
<br>
</div></div>
<div class="item"><div class="price">
<p class="price2">в два цвета:</p><br>
<p class="new_price">1-100 шт –&nbsp;&nbsp; 11000 руб</p>
<p class="new_price">200 шт&nbsp;&nbsp;&nbsp; –&nbsp;&nbsp; 13000 руб</p>
<p class="new_price">300 шт&nbsp;&nbsp;&nbsp; –&nbsp;&nbsp; 15000 руб</p>
<p class="new_price">400 шт&nbsp;&nbsp;&nbsp; –&nbsp;&nbsp; 17000 руб</p>
<p class="new_price">500 шт&nbsp;&nbsp;&nbsp; –&nbsp;&nbsp; 19000 руб</p>
<p class="new_price">1000 шт &nbsp;–&nbsp; &nbsp;28000 руб</p>
<p class="new_price">1001 шт &nbsp;&nbsp;&nbsp;и &nbsp;&nbsp;&nbsp;&nbsp;более <br> – цена договорная</p>
<br>
</div></div>
<div class="item"><div class="price">
<p class="price2">в три цвета:</p><br>
<p class="new_price">1-100 шт –&nbsp;&nbsp; 13000 руб</p>
<p class="new_price">200 шт&nbsp;&nbsp;&nbsp; –&nbsp;&nbsp; 15000 руб</p>
<p class="new_price">300 шт&nbsp;&nbsp;&nbsp; –&nbsp;&nbsp; 17000 руб</p>
<p class="new_price">400 шт&nbsp;&nbsp;&nbsp; –&nbsp;&nbsp; 19000 руб</p>
<p class="new_price">500 шт&nbsp;&nbsp;&nbsp; –&nbsp;&nbsp; 21000 руб</p>
<p class="new_price">1000 шт &nbsp;–&nbsp; &nbsp;32000 руб</p>
<p class="new_price">1001 шт &nbsp;&nbsp;&nbsp;и &nbsp;&nbsp;&nbsp;&nbsp;более <br> – цена договорная</p>

</div></div>
<!---/t-->
					
</div>
</div> 
 
<h3 style="position: relative; top: -130px;">Срок от трех рабочих дней.</h3>

				 
				 
         
        <div class="conteiner_block" id="conteiner_block4">
            <div class="center">   
                 <h2>Купите у нас и не пожалеете!</h2>
                <div class="item">
                    <div class="img"><div class="aligne"><img src="upload/benefit1.png"></div></div>
                    <h4>Гарантируем лучшую цену</h4>
                    <p>Если вы найдёте более выгодное предложение чем у нас, то мы подарим вам дополнительную скидку в 10%.</p>    
                </div>  
                <div class="item">
                    <div class="img"><div class="aligne"><img src="upload/benefit2.png"></div></div>
                    <h4>*Бесплатная доставка</h4>
                    <p>При заказе от 5000 рублей, бесплатно доставим новогодние шары по Москве в пределах МКАД в удобное вам время и место. В другие регионы России цена доставки обговаривается с менеджером.</p>    
                </div>  
                <div class="item">
                    <div class="img"><div class="aligne"><img src="upload/benefit3.png"></div></div>
                    <h4>Мы дарим подарки</h4>
                    <p>Купите новогодние шары и получите подарок красивое елочное украшение. </p>    
                </div>  
                 <div class="item" <!--style="width: 70.33333%;-->">
                    <div class="img"><div class="aligne"><img src="upload/benefit4.png"></div></div>
                    <h4>Оплата при получении</h4>
                    <p>Мы доверяем вам. Никаких предоплат. Вы оплачиваете деньги только после передачи шаров вам в руки. При онлайн-оплате картой скидка 5%</p>    
                </div> 
				<div class="it"></div>
                                 
               <!-- <div class="item">
                    <div class="img"><div class="aligne"><img src="upload/benefit6.png"></div></div>
                    <h4>Мы продаем только оригинальные модели елок</h4>
                    <p>Если вы обратитесь к нам, то получите пушистую новогоднюю красавицу, которая не оставит равнодушным вас и ваших детей. Качество елок действительно превосходное.</p>    
                </div> -->                                               
            </div><!-- center -->
        </div>
        <!--<div class="conteiner_block" id="conteiner_block3">
            <div class="center">   
                <h2>Почему наша Ёлка?</h2>
                <div class="items">
                    <div class="item item1">
                        <h4>Без запаха</h4>
                        <p>Произведена из экологически чистых материалов</p>
                    </div>
                    <div class="item item2">
                        <h4>Сертифицирована</h4>
                        <p>Прошла все проверки Санитарно-Эпидемиологической службы и имеет все необходимые сертификаты качества   </p>
                    </div>
                    <div class="item item3">
                        <h4>Долговечна</h4>
                        <p>Ёлочка прослужит вам много лет. Иголки не осыпаются, прочный каркас, ветки не ломаются</p>
                    </div>
                    
                    <div class="item item4">
                        <h4>Устойчива</h4>
                        <p>Подставка из металла обеспечивает хорошую устойчивость</p>
                    </div>
                    <div class="item item5">
                        <h4>Эффектная</h4>
                        <p>Пышные ветки с снежным напылением и  шишки  делают ёлочку неотразимой</p>
                    </div>
                    <div class="item item6">
                        <h4>Практичная</h4>
                        <p>Поставляется в удобной компактной упаковке. Ёлку удобно перевозить, хранить и легко собирать</p>
                    </div>
                </div>
                <a href="javascript:void(0)" class="order21 batton3"></a>                                           
            </div>
        </div> -->


		<!-- conteiner_block3 --> 
        
		
		<div class="conteiner_block" id="conteiner_block6">
            <div class="center">   
                <h2>ФОТО Шаров</h2>
                <ul>
                    <li class="l1"><img src="images/photo1.jpg" /></li>
                    <li class="l2"><img src="images/photo2.jpg" /></li>
                    <li class="l3"><img src="images/photo3.jpg" /></li>
                    <li class="l4"><img src="images/photo4.jpg" /></li>
					<li class="l4"><img src="images/photo5.jpg" /></li>
					<li class="l4"><img src="images/photo6.jpg" /></li>
                </ul>
            </div>
        </div>  
		
       
       <!-- <div class="conteiner_block" id="conteiner_block6">
            <div class="center">   
                <h2>ФОТО Шаров</h2>
                <ul>
                    <li class="l1"><img src="upload/photo1.jpg" /></li>
                    <li class="l2"><img src="upload/photo2.jpg" /></li>
                    <li class="l3"><img src="upload/photo3.jpg" /></li>
                    <li class="l4"><img src="upload/photo4.jpg" /></li>
                </ul>
            </div>
        </div>  -->
        
        
     <div class="conteiner_block" id="poddelka">
           
            <div class="poddelka_bottom">
                <p>Мы заботимся о качестве вашего нового года </p>
            </div>
        </div>  
      <!--  <div class="conteiner_block" id="conteiner_block7">
            <div class="center">   
                <h2>КАК СДЕЛАТЬ ЗАКАЗ?</h2> 
                <ul>
                    <li><img src="upload/work1.jpg" /><p>Вы оставляете заявку на сайте </p></li>
                    <li><img src="upload/work2.jpg" />
                    <p>Менеджер с Вами связывается и получает подтверждение заказа </p></li>
                    <li><img src="upload/work3.jpg" /><p>Наш курьер оперативно доставляет ёлку по указанному адресу</p></li>
                    <li><img src="upload/work4.jpg" /><p>Вы оплачиваете ёлку после её получения</p></li>
                </ul>   
            </div>
        </div>-->  <!-- conteiner_block7 --> 
    
        <!--<div class="conteiner_block" id="conteiner_block9">
            <div class="center">   
                <h2>Отзывы</h2>
                <div class="reviews">
                     <div class="review">
                        <iframe width="100%" height="270" src="https://www.youtube.com/embed/X1Czigus6HU?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div> 
                    <div class="review" style="float: right;">
                        
                        <iframe width="100%" height="270" src="https://www.youtube.com/embed/k2KV7T_1vTI?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div> 
                    <div class="review">
                        <iframe width="100%" height="270" src="https://www.youtube.com/embed/m1YjT2V2ZuQ?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div> 
                    <div class="review" style="float: right;">
                        <iframe width="100%" height="270" src="https://www.youtube.com/embed/lPxxKsqpOnU?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>

                
                </div>       
            </div>
        </div> --><!--  conteiner_block9 --> 
         <div class="conteiner_block" id="conteiner_block10">
            <div class="center">   
                <div class="left"><p>СКАЗОЧНОГО <span style="color: #f4f19f;">НОВОГО ГОДА</span> ДОСТОИН КАЖДЫЙ!<br></p><p style="font-size: 2em">Вы тем более</p></div>
                <div class="right">
                    <div class="bottom_forma">
                       
					   <h3>ЗАКАЖИТЕ<br><span style="color: #f0451f;"></span>  ШАРЫ<br>ПРЯМО СЕЙЧАС</h3>
                        <div class="order_box">                        
                            <div class="results" id="result2" style="">
                                <h4>Спасибо за заявку</h4>
                                <p>Ожидайте звонка от нашего менеджера</p>
                            </div>
                           <!--нижняя форма--> <form id="order_form2" method="post"  >
                            <input type="hidden" name="project_name" value="Сообщение">
                            <input type="hidden" name="admin_email" value="info@modern-pro.ru">
                            <input type="hidden" name="form_subject" value="Заказ">   
							   <input type="hidden" name="форма" value="Нижняя форма" />
                                <label>
                                    <input type="text" class="required" name="Имя" required = "true" value="" placeholder="Имя*" />
                                </label>                        
                                <label>
                                    <input type="text" class="required" name="Телефон" required = "true" value="" placeholder="Телефон*" />
                                </label>
<label>
                                <input type="text" class="required" name="Почта" required = "true"  value="" placeholder="E-mail*" />
                            </label>

<label>
<select size="1"  name="Размер&nbsp;шаров" id="itemid">
    <option value="00" selected="selected">Выберите размер</option>
	<option value="6&nbsp;см">6&nbsp;см</option>
    <option value="7&nbsp;см">7&nbsp;см</option>
    <option value="8&nbsp;см">8&nbsp;см</option>
    <option value="10&nbsp;см">10&nbsp;см</option>
    <option value="12&nbsp;см">12&nbsp;см</option>
	<option value="15&nbsp;см">15&nbsp;см</option>
    <option value="20&nbsp;см">20&nbsp;см</option>
	<option value="25&nbsp;см">25&nbsp;см</option>
	<option value="30&nbsp;см">30&nbsp;см</option>
   </select>             
</label>	
<label>
 <input type="text" class="required" name="Количество" required = "true" value="" placeholder="Количество" />
</label> 

	<!--<label>
 <input type="text" class="required" name="Количество" required = "true" value="" placeholder="Количество" />
</label>                        
<label>
<select size="1"  name="Цвет" id="itemid">
    <option value="00" selected="selected">Цвет</option>
	<option value="Синий"  >Синий</option>
    <option value="Золотой">Золотой</option>
    <option value="Оранжевый">Оранжевый</option>
    <option value="Фиолетовый">Фиолетовый</option>
    <option value="Красный">Красный</option>
	<option value="Серебро">Серебро</option>
    <option value="Зеленый">Зеленый</option>
	<option value="Белый">Белый</option>
   </select> 
   </label>
   <label>
<select size="1"  name="Нанесение" id="itemid">
    <option value="00" selected="selected">Нанесение</option>
	<option value="1+0"  >1+0</option>
    <option value="2+0">2+0</option>
    <option value="3+0">3+0</option>
    <option value="4+0">4+0</option>
   </select>             
</label> 
   <label>  
   <p>Комментарий<Br>
   <textarea name="Комментарий" cols="40" rows="3" value="Комментарий" ></textarea></p>
</label> -->						
                                <input style="margin: -35px 0 0 0;    width: 220px;"  type="submit" class="submit batton1" value="Заказать" />
                                <p class="save">*Ваши данные не будут переданы третьим лицам</p>
                            </form>
                             
                        </div>               
                    </div>
                    <div class="bottom_forma_bottom"></div>
                </div>    
            </div><!-- center -->
        </div>  <!-- conteiner_block10 -->     
    </div><!-- conteiner -->
    <div class="footer">
        <div class="center">
            <div class="footer_left">
                <p>
<br>
<a style="font-size: 26px;color: #000;" href="tel:89163804979">8 (916) 380-49-79</a><br><br>
<span style="font-size: 20px;">Почта: info@modern-pro.ru</span>
<br>
</p>
                
            </div>
            <div class="footer_right">                
              <p>
              
			  <div class="logo"><p><span style="color: #84f279;">Елочные шары</span> - MODERN Pro</p><span></span></div>
			  
			 
              
              </p>
                
            </div>
           <div class="footer_center"><p><!--<span style="color: #84f279;">Шары</span>
		    <span>Интернет-магазин новогодних шаров</span><br/>
			 <a href="javascript:void(0)" class="conf">Политика конфиденциальности</a>
			<br/>-->
			</p>
			</div>         
        </div><!-- center -->
    </div><!-- footer -->  
    
  
   
<div class="pop_up" id="image2"> <!-- .pop_up image -->
        <div class="pop_up_fon"></div>
        <div class="pop_up_image">
            
            <div class="image_box">
            <div class="pop_upscrol">
                <div class="append"></div>                
                </div>
                <a class="close" href="javascript:void(0)"></a>
            
            </div>
        </div>
   </div> <!-- .pop_up  image end-->       

               <!------------------------------------------  privacy policy ----------------------------------------------------->      
 <div class="pop_up" id="back_call"> <!-- .back_call -->
    <div class="pop_up_fon"></div>
    <div class="pop_up_form">
        <div class="order_box">
            <div class="forma" id="forma1">
                <h3 class="tit">Заказать звонок</h3>  
                <div class="results" id="result4" style="">
                    <h4>Спасибо за заявку</h4>
                    <p>Мы свяжемся с вами в ближайшее время</p>
                </div>
                <form id="order_form4" method="post"  >
				<input type="hidden" name="project_name" value="Сообщение">
                <input type="hidden" name="admin_email" value="info@modern-pro.ru">
                <input type="hidden" name="form_subject" value="Заказ">
                    <input type="hidden" name="форма" value="Всплывающая форма - заказать звонок" />                                                                                                         
                    <label>
                        <input type="text" class="required" name="Имя"  value="" required = "true" placeholder="Как к вам обращаться" />
                    </label>                        
                    <label>
                        <input type="text" class="required" name="Телефон" required = "true" value="" placeholder="Ваш телефон*" />
                    </label>        <label>
                                <input type="text" class="required" name="Почта" required = "true"  value="" placeholder="E-mail*" />
                            </label>
   
<label>

<select size="1"  name="Размер&nbsp;шаров" id="itemid">
    <option value="00" selected="selected">Выберите размер</option>
	<option value="6&nbsp;см"  >6&nbsp;см</option>
    <option value="7&nbsp;см">7&nbsp;см</option>
    <option value="8&nbsp;см">8&nbsp;см</option>
    <option value="10&nbsp;см">10&nbsp;см</option>
    <option value="12&nbsp;см">12&nbsp;см</option>
	<option value="15&nbsp;см">15&nbsp;см</option>
    <option value="20&nbsp;см">20&nbsp;см</option>
	<option value="25&nbsp;см">25&nbsp;см</option>
    <option value="30&nbsp;см">30&nbsp;см</option>
   </select>      
</label>	
	<label>
 <input type="text" class="required" name="Количество" required = "true" value="" placeholder="Количество" />
</label>                        
<label>
<select size="1"  name="Цвет" id="itemid">
    <option value="00" selected="selected">Цвет</option>
	<option value="Синий"  >Синий</option>
    <option value="Золотой">Золотой</option>
    <option value="Оранжевый">Оранжевый</option>
    <option value="Фиолетовый">Фиолетовый</option>
    <option value="Красный">Красный</option>
	<option value="Серебро">Серебро</option>
    <option value="Зеленый">Зеленый</option>
	<option value="Белый">Белый</option>
   </select> 
   </label> 
   <label> 
<select size="1"  name="Нанесение" id="itemid">
    <option value="00" selected="selected">Нанесение</option>
	<option value="1+0"  >1+0</option>
    <option value="2+0">2+0</option>
    <option value="3+0">3+0</option>
    <option value="4+0">4+0</option>
   </select>             
</label> 
   
 <label>   
   <textarea name="Комментарий" cols="40" rows="3" value="Комментарий" ></textarea>
</label> 				
                    <input type="submit" class="submit batton1" value="Заказать звонок" />
                </form>
            </div>
        </div>        
        <a class="close close2" href="javascript:void(0)"></a>
    </div>
</div> <!-- .pop_up back_call end-->

 <div class="pop_up" id="order1"> <!-- modal order -->
    <div class="pop_up_fon"></div>
    <div class="pop_up_form">
        <div class="order_box">
            <div class="forma" id="forma1">
                <h3 class="tit">Закажите<br><span style="color: #ff4315;">доставку</span><br>шаров прямо сейчас</h3>  
                <div class="results" id="result3" style="">
                    <h4>Спасибо за заявку</h4>
                    <p>Мы свяжемся с вами в ближайшее время</p>
                </div>
                <form id="order_form3" method="post"  >
                <input type="hidden" name="project_name" value="Сообщение">
                <input type="hidden" name="admin_email" value="info@modern-pro.ru">
                <input type="hidden" name="form_subject" value="Заказ">    
				<input type="hidden" name="форма" value="Всплывающая форма - Заказ шаров" />                                                                                                                             
                    <label>
                        <input type="text" class="required " name="Имя" required = "true" value="" placeholder="Как к вам обращаться" />
                    </label>                        
                    <label>
                        <input type="text" class="required" name="Телефон" required = "true" value="" placeholder="Ваш телефон*" />
                    </label>       
<label>
                                <input type="text" class="required" name="Почта" required = "true"  value="" placeholder="E-mail*" />
                            </label>
                    <label>
<select size="1"  name="Размер&nbsp;шаров" id="itemid">
    <option value="00" selected="selected">Выберите размер</option>
	<option value="6&nbsp;см"  >6&nbsp;см</option>
    <option value="7&nbsp;см">7&nbsp;см</option>
    <option value="8&nbsp;см">8&nbsp;см</option>
    <option value="10&nbsp;см">10&nbsp;см</option>
    <option value="12&nbsp;см">12&nbsp;см</option>
	<option value="15&nbsp;см">15&nbsp;см</option>
    <option value="20&nbsp;см">20&nbsp;см</option>		
	<option value="25&nbsp;см">25&nbsp;см</option>
    <option value="30&nbsp;см">30&nbsp;см</option>
   </select>      </label> 					
     <label>
 <input type="text" class="required" name="Количество" required = "true" value="" placeholder="Количество" />
</label>                        
<label>
<select size="1"  name="Цвет" id="itemid">
    <option value="00" selected="selected">Цвет</option>
	<option value="Синий"  >Синий</option>
    <option value="Золотой">Золотой</option>
    <option value="Оранжевый">Оранжевый</option>
    <option value="Фиолетовый">Фиолетовый</option>
    <option value="Красный">Красный</option>
	<option value="Серебро">Серебро</option>
    <option value="Зеленый">Зеленый</option>
	<option value="Белый">Белый</option>
   </select>             
 </label> 
<label>
  <select size="1"  name="Нанесение" id="itemid">
    <option value="00" selected="selected">Нанесение</option>
	<option value="1+0"  >1+0</option>
    <option value="2+0">2+0</option>
    <option value="3+0">3+0</option>
    <option value="4+0">4+0</option>
   </select>             
   
 </label>   
   <label>   
   <p>Комментарий<Br>
   <textarea name="Комментарий" cols="40" rows="3" value="Комментарий" ></textarea></p>
</label>  
	  <input type="submit" class="submit batton1" value="Заказать" />
                </form>
                <p class="save" style="padding: 0;">*Ваши данные не будут переданы третьим лицам</p>
            </div>
        </div>        
        <a class="close close2" href="javascript:void(0)"></a>
    </div>
</div> <!-- .pop_up  modal order  end-->  
 

 <div class="pop_up" id="order_cart_pop_up" style=""> <!-- .order_cart -->
    <div class="pop_up_fon"></div>
    <div class="pop_up_form">
        <div class="order_box">
            <div class="forma" id="forma1">
                <h3 class="tit">С вами свяжется менеджер и подтвердит ваш заказ</h3>  
                <div class="results" id="result_cart" style="">
                    <h4>Спасибо за заказ!</h4>
                    <p>Мы свяжемся с вами в ближайшее время</p>
                </div>
                <form id="order_cart" method="post"  >
                <input type="hidden" name="project_name" value="Сообщение">
                <input type="hidden" name="admin_email" value="info@modern-pro.ru">
                <input type="hidden" name="form_subject" value="Заказ">   
                                                                                                         
                     
                    <label>
                        <input type="text" class="required" name="Имя" required = "true" value="" placeholder="Как к вам обращаться" />
                    </label>                        
                    <label>
                        <input type="text" class="required" name="Телефон" required = "true" value="" placeholder="Ваш телефон*" />
                    </label>          
<label>
                                <input type="text" class="required" name="Почта" required = "true"  value="" placeholder="E-mail*" />
                            </label>
   
                    <label>
<select size="1"  name="Размер&nbsp;шаров" id="itemid" >
    <option value="00" >Выберите размер</option>
	<option value="6&nbsp;см"  selected="selected">6&nbsp;см</option>
    <option value="7&nbsp;см">7&nbsp;см</option>
    <option value="8&nbsp;см">8&nbsp;см</option>
    <option value="10&nbsp;см">10&nbsp;см</option>
    <option value="12&nbsp;см">12&nbsp;см</option>
	<option value="15&nbsp;см">15&nbsp;см</option>
    <option value="20&nbsp;см">20&nbsp;см</option>
	<option value="25&nbsp;см">25&nbsp;см</option>
    <option value="30&nbsp;см">30&nbsp;см</option>
   </select>                
   </label> 	
   <label>
<input type="text" class="required" name="Количество" required = "true" value="" placeholder="Количество" />
</label>                        
<label>
<select size="1"  name="Цвет" id="itemid">
    <option value="00" selected="selected">Цвет</option>
	<option value="Синий"  >Синий</option>
    <option value="Золотой">Золотой</option>
    <option value="Оранжевый">Оранжевый</option>
    <option value="Фиолетовый">Фиолетовый</option>
    <option value="Красный">Красный</option>
	<option value="Серебро">Серебро</option>
    <option value="Зеленый">Зеленый</option>
	<option value="Белый">Белый</option>
   </select>             
</label> 
   <label>
  <select size="1"  name="Нанесение" id="itemid">
    <option value="00" selected="selected">Нанесение</option>
	<option value="1+0"  >1+0</option>
    <option value="2+0">2+0</option>
    <option value="3+0">3+0</option>
    <option value="4+0">4+0</option>
   </select>
   <label>   
   <p>Комментарий<Br>
   <textarea name="Комментарий" cols="40" rows="3" value="Комментарий" ></textarea></p>
</label> 
                    <input type="submit" class="submit batton1" value="Заказать" />
                </form>
                <p class="save" style="padding: 0;">*Ваши данные не будут переданы третьим лицам</p>
            </div>
        </div>        
        <a class="close close2" href="javascript:void(0)"></a>
    </div>
</div> <!-- .pop_up order_cart end--> 
     
        
	<script src="/balls/script_r.js"></script>
</body>
 
</html>