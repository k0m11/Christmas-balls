/*END RETAIL*/

$(document).ready(function() {
    $("a.close").click(function (){
        $(".pop_up").css("display", "none");        
        $(".gallery ul li.active").removeClass("active"); 
    });
    $("#cart a.close").click(function (){
        $(".page_cart").css("display", "block"); 
    });
    $("#order_cart_pop_up a.close").click(function (){
        $(".page_cart").css("display", "block"); 
    });
    $("#order_yandex_cart_pop_up a.close").click(function (){
        $(".page_cart").css("display", "block"); 
    });
    $("a.order21").click(function (){                           
        $("#order1").css("display", "block");        
    });
     
    
    
    $(".pop_up_fon").click(function (){
        $(".pop_up").css("display", "none");
        $(".gallery ul li.active").removeClass("active");         
        $(".page_cart").css("display", "block");    
    });
    $("a.conf").click(function (){
        $("#conf").css("display", "block");        
    });
    $("a.back_call").click(function (){
        $("#back_call").css("display", "block");        
    });
     $("a.order_product").click(function (){        
        $("#cart").css("display", "block");        
    });
     $(".page_cart a").click(function () {
        $("#cart").css("display", "block"); 
        $(".page_cart").css("display", "none"); 
    });  
});


$(document).ready(function() {
    $(".more_order a").click(function () {
        $(".page_cart").css("display", "block"); 
        var elementClick = $(this).attr("href")
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 1000);
        $(".pop_up").css("display", "none");
        return false;
    });
});




$(document).ready(function() {
    // click on batton product
    $("a.order_product").click(function (){ 
       $('#order_cart_pop_up').show();
	   
	    rr = $(this).prev('.price').prev('.name_prod').text();
		if(rr == '') {
			rr = $(this).prev('.name_prod').text();
		}
		$('#tovar').attr('value',rr);
	   
     });// END click on batton product
     $("a.order9").click(function (){  
        console.log("cock"); 
        $("#order_cart_shari").show()
    });

    // click on batton recalckULATION CART
    $("a.recalck").click(function (){
        $(".total_summ strong").html("0");
        $(".pop_up_cart .product").each(function() {
            var price = $(this).children(".prise").children("p").children("strong").html();
            var size = $(this).children(".size").children("p").children("input").val();                    
            var itemprice = Number(price) * Number(size)
            $(this).children(".total_prise").children("p").children("strong").html(itemprice);                       
            var totalprice = Number($(".total_summ strong").html());            
            var totalprice = itemprice + totalprice;
            $(".total_summ strong").html(totalprice);                   
        });
        var totalprice = Number($(".total_summ strong").html()); 
            if(totalprice > 3000){
                $(".total_summ strong").html(totalprice);
                        $(".cart_sum strong").html(totalprice);
                        $(".total_summ .delivery_sum").css("display", "none");
                    }
                    else{
                        $(".total_summ strong").html(totalprice + 200);
                        $(".cart_sum strong").html(totalprice +200);
                        $(".total_summ .delivery_sum").css("display", "block");
            }
    });
    
    $("#cart a.close").click(function (){
        $(".total_summ strong").html("0");
        $(".pop_up_cart .product").each(function() {
            var price = $(this).children(".prise").children("p").children("strong").html();
            var size = $(this).children(".size").children("p").children("input").val();                    
            var itemprice = Number(price) * Number(size)
            $(this).children(".total_prise").children("p").children("strong").html(itemprice);                       
            var totalprice = Number($(".total_summ strong").html());            
            var totalprice = itemprice + totalprice;
            $(".total_summ strong").html(totalprice);                   
        });
        var totalprice = Number($(".total_summ strong").html()); 
            if(totalprice > 3000){
                $(".total_summ strong").html(totalprice);
                        $(".cart_sum strong").html(totalprice);
                        $(".total_summ .delivery_sum").css("display", "none");
                    }
                    else{
                        $(".total_summ strong").html(totalprice + 200);
                        $(".cart_sum strong").html(totalprice +200);
                        $(".total_summ .delivery_sum").css("display", "block");
            }
    });
    $("#cart .pop_up_fon").click(function (){
        $(".total_summ strong").html("0");
        $(".pop_up_cart .product").each(function() {
            var price = $(this).children(".prise").children("p").children("strong").html();
            var size = $(this).children(".size").children("p").children("input").val();                    
            var itemprice = Number(price) * Number(size)
            $(this).children(".total_prise").children("p").children("strong").html(itemprice);                       
            var totalprice = Number($(".total_summ strong").html());            
            var totalprice = itemprice + totalprice;
            $(".total_summ strong").html(totalprice);                   
        });
        var totalprice = Number($(".total_summ strong").html()); 
            if(totalprice > 3000){
               $(".total_summ strong").html(totalprice);
                        $(".cart_sum strong").html(totalprice);
                        $(".total_summ .delivery_sum").css("display", "none");
                    }
                    else{
                        $(".total_summ strong").html(totalprice + 200);
                        $(".cart_sum strong").html(totalprice +200);
                        $(".total_summ .delivery_sum").css("display", "block");
            }   
    });
    
    $(".more_order a").click(function (){
        $(".total_summ strong").html("0");
        $(".pop_up_cart .product").each(function() {
            var price = $(this).children(".prise").children("p").children("strong").html();
            var size = $(this).children(".size").children("p").children("input").val();                    
            var itemprice = Number(price) * Number(size)
            $(this).children(".total_prise").children("p").children("strong").html(itemprice);                       
            var totalprice = Number($(".total_summ strong").html());            
            var totalprice = itemprice + totalprice;
            $(".total_summ strong").html(totalprice);                   
        });
        var totalprice = Number($(".total_summ strong").html()); 
            if(totalprice > 3000){
                $(".total_summ strong").html(totalprice);
                        $(".cart_sum strong").html(totalprice);
                        $(".total_summ .delivery_sum").css("display", "none");
                    }
                    else{
                        $(".total_summ strong").html(totalprice + 200);
                        $(".cart_sum strong").html(totalprice +200);
                        $(".total_summ .delivery_sum").css("display", "block");
            }
    });
    
    
    
    $(".pay_online label").click(function (){
        $(".pay_online").addClass("pay_active");
        $(".pay_cash").removeClass("pay_active");
    });
    $(".pay_cash label").click(function (){
        $(".pay_cash").addClass("pay_active");
        $(".pay_online").removeClass("pay_active");
    });
    $("a.checkout").click(function (){
        $("#order_yandex_cart_pop_up input.targets").val("");
        $("#order_yandex_cart_pop_up input.sum").val("0"); 
        $("#order_cart_pop_up input.targets").val("");
        $("#order_cart_pop_up input.sum").val("0");
        $(".total_summ strong").html("0");
        
        if($(".pay_online").hasClass("pay_active")){            
            $(".pop_up_cart .product").each(function() {
                var name = $(this).children(".name").children("p").children(".name_tov").html();
                var artik = $(this).children(".name").children("p").children(".artik").html();
                
                var price = $(this).children(".prise").children("p").children("strong").html();
                var size = $(this).children(".size").children("p").children("input").val();            
                var itemprice = Number(price) * Number(size)
                $(this).children(".total_prise").children("p").children("strong").html(itemprice);                                       
                var totalprice = Number($(".total_summ strong").html());            
                var totalprice = itemprice + totalprice;
                $(".total_summ strong").html(totalprice); 
                $("#order_yandex_cart_pop_up input.sum").val(totalprice);   
                // make order
                var targets = $("#order_yandex_cart_pop_up input.targets").val();   
                var targets = targets+name+artik+"("+size+"шт)"+"="+itemprice+";";  
                $("#order_yandex_cart_pop_up input.targets").val(targets);                 
            });
            var totalprice = Number($(".total_summ strong").html());            
                    if(totalprice > 3000){
                        var totalprice = totalprice;
                    }
                    else{
                       var totalprice = 200 + totalprice;
                    }
                $(".total_summ strong").html(totalprice); 
                var totalprice = 1 * totalprice;
                $("#order_yandex_cart_pop_up input.sum").val(totalprice);   
                
              $("#order_yandex_cart_pop_up").css("display", "block");
              $("#cart").css("display", "none");  
        }
        else{
           $(".pop_up_cart .product").each(function() {
                var name = $(this).children(".name").children("p").children(".name_tov").html();
                var artik = $(this).children(".name").children("p").children(".artik").html();
                var price = $(this).children(".prise").children("p").children("strong").html();
                var size = $(this).children(".size").children("p").children("input").val();            
                var itemprice = Number(price) * Number(size)
                $(this).children(".total_prise").children("p").children("strong").html(itemprice);                                       
                var totalprice = Number($(".total_summ strong").html());            
                var totalprice = itemprice + totalprice;
                $(".total_summ strong").html(totalprice); 
                $("#order_cart_pop_up input.sum").val(totalprice);   
                // make order
                var targets = $("#order_cart_pop_up input.targets").val();   
                var targets = targets+name+artik+"("+size+"шт)"+"="+itemprice+";";  
                $("#order_cart_pop_up input.targets").val(targets);                 
            });
            var totalprice = Number($(".total_summ strong").html());            
                if(totalprice > 3000){
                        var totalprice = totalprice;
                    }
                    else{
                       var totalprice = 200 + totalprice;
                    }
            $(".total_summ strong").html(totalprice); 
            $("#order_cart_pop_up input.sum").val(totalprice); 
            
              $("#order_cart_pop_up").css("display", "block");
              $("#cart").css("display", "none"); 
        }
    });
    
    
});
    



$(document).ready(function() {
        //------------ remove error  -----
    $("input[type=text]").click(function (){      
    $(this).removeClass("error");
    $("form#order_form1").removeClass("stop");
    $("form#order_form2").removeClass("stop");
    $("form#order_form3").removeClass("stop");
    $("form#order_form4").removeClass("stop");
    $("form#order_cart").removeClass("stop");
    $("form#order_yandex_cart").removeClass("stop");

    });
    //------------ remove error END -----
 
    });

$(document).ready(function() {
    $("#presents .aligne").click(function (){
        $(".aligne").removeClass("active"); 
        $("#image2 .append").empty();
        $(this).addClass("active"); 
        var image = $(this).html();        
        $("#image2 .append").append(image);   
        $("#image2").css("display", "block");      
    });  
});
