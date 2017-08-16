$(function(){       //Получаем id ссылки
    $('.modal').click(function(){
        var element_id = this.id;
        var element_close = this.id;
        //получение id для закрытия модального окна
        element_close = '#close_' + element_close; 
        //получение id для открытия модального окна
        element_id = '#' + element_id + '_win';
        console.log(element_id);
        //Открываеи и закрываем модальное окно
        $(function(){
            //$("#partner_modal_win").css("filter","blur(5px)");
            $(element_id).css('display', 'block');    
        });
        $(element_close).click(function(){
            //$("#partner_modal_win").css("filter","blur(0px)");
            $(element_id).css('display', 'none');
        });
        return false;
    });
});

//Открытие и закрытие окон отправки
$(function(){
    $('#close_error').click(function(){
        $('#error').css('display', 'none');
    });
});

$(function(){
    $('#close_send').click(function(){
        $('#send').css('display', 'none');
    });
});