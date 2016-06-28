$(document).ready(function(){
    
function windowSize(){
    if ($(window).width() <= '768'){
        $('.day').click(function(){
            $('.day').addClass('hide')
            $(this).addClass('show')
            //$(this).css('height', '100%');
            //$(this).css('width', '94%');
            //$(this).find( 'span' ).css('display', 'block');
           // $(this).find( 'span' ).css('float', 'left');
           $(this).addClass('day-mobil');
           $(this).find( 'a span' ).addClass('span-mob');
        })
    } 
    
    else {
        $('.day').removeClass('hide show');
        $(this).removeClass('day-mobil');
        $(this).find( 'a span' ).removeClass('span-mob');
    }
}
//$(window).load(windowSize); // при загрузке
//$(window).resize(windowSize); // при изменении размеров
// или "два-в-одном", вместо двух последних строк:
$(window).on('load resize',windowSize);
    
    
/*----------------------------------Form--------------------------------------*/     
$('.day a[href*=#zakaz] span').click(function(){
    
    $('#zakaz').css('display','block');
    $('#contacts').css('display','block');

    var timer = $(this).text();
    var weekday = $(this).parents().parents().children('.head-day').children('.nameday').text();
    var day = $(this).parents().parents().children('.head-day').children('.namedata').text();
    var dayID = $(this).parents().parents().children('.head-day').children('.dayID').text();
    var weekID = $(this).parents().parents().children('.head-day').children('.weekID').text();
    
    var price = $(this).attr("class");
    
    var arrayPrice = price.split(' ');
    if(arrayPrice[0] == 'l-time'){
        $('#prc strong').text('400');
        
       
        $('#prc').removeClass('prcGreen');
        $('#prc').addClass('prcBlue');
    }
    else{
        $('#prc strong').text('500');
        $('#prc').removeClass('prcBlue');
        $('#prc').addClass('prcGreen');
    }

    weekday = weekday.toLowerCase();
    var b = weekday.split("");
    b[0] = b[0].toUpperCase();;
    
    weekday = b.join("")

    $('#day').text(day);
    $('#weekday').text(weekday);
    $('#times').text(timer);
    $('#dayID').text(dayID);
    $('#weekID').text(weekID);


});

$('#user_agreement').click(function(){
    //$("#getCodeM").html('<img src="img/success.png">');
    jQuery("#getCodeMod").modal('show');
});
$('#modalClose').click(function(){
    jQuery("#getCodeMod").modal('hide');
});


$('.bt-buy').click(function(){
    
    var weekday     = $('#dayID').text();
    var times       = $('#times').text();
    var price       = $('#prc strong').text();
    var fio         = $('#fio').val();
    var phone       = $('#phone').val(); 
    var comment     = $('#comment').val();
    var promo       = $('#promo').val();
    var komnataID   = $('#komnataID').text(); ////
    var weekID      = $('#weekID').text(); 

    $('#fio').removeClass('vadidate');
    $('#phone').removeClass('vadidate');

    if(fio ==''){ $('#fio').addClass('vadidate'); }
    else if(phone==''){ $('#phone').addClass('vadidate'); }
    else{
            $.ajax({
             url: 'index',
             type: 'POST',
             data: {id:komnataID, weekday:weekday, times:times, price:price,fio:fio,phone:phone,comment:comment,promo:promo,weekID:weekID},
             success: function(data) {
                    
                    if(data == 'Свободно'){
                        $("#getCode").html('<img src="img/success.png">');
                        jQuery("#getCodeModal").modal('show');
                    }
                    else{
                        $("#getCode").html('<img src="img/close.png">');
                        jQuery("#getCodeModal").modal('show');
                    }
                 
                }
         });
    }
    
});


/*----------------------------------Form--------------------------------------*/   
$('#metro').click(function(){
    $('#cost').css('display','block');
    $('#komnataID').text('1');
    
});





/*----------------------------------Week--------------------------------------*/

    
    
    
    $('.dayimg').click(function(){
        
        var id = $(this).attr('id');
        
        if(id == 'firstWeekID'){
            $('#firstWeek').css("display", "block");
            $('#secondWeek').css("display", "none");
            $('#thirdWeek').css("display", "none");
            
            $('.day').removeClass('hide show');
            $('.day').removeClass('day-mobil');
            $('.day').find( 'a span' ).removeClass('span-mob');
            
        }

        if(id == 'secondWeekID'){
            $('#firstWeek').css("display", "none");
            $('#secondWeek').css("display", "block");
            $('#thirdWeek').css("display", "none");
            $('.day').removeClass('hide show');
            $('.day').removeClass('day-mobil');
            $('.day').find( 'a span' ).removeClass('span-mob');
        }
        if(id == 'thirdWeekID'){
            $('#firstWeek').css("display", "none");
            $('#secondWeek').css("display", "none");
            $('#thirdWeek').css("display", "block");
            $('.day').removeClass('hide show');
            $('.day').removeClass('day-mobil');
            $('.day').find( 'a span' ).removeClass('span-mob');
        }

        
    });

/*----------------------------------Week--------------------------------------*/       
    
$('a[href*=#]').bind("click", function(e){
var anchor = $(this);
$('html, body').stop().animate({
scrollTop: $(anchor.attr('href')).offset().top
}, 1000);
e.preventDefault();
});
return false;







});
