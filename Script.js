
           $(document).on('click', '.submit-detailss', function(ev){
            if($("#contact-formc").valid() == true){
               var form_data = $("#contact-formc").serialize();
                   
                $.post('fsend_mail_con.php', form_data , function(data,status){
                    console.log(data);
                    if(data == 1){
                        $(".success-messages").show(200);
                        $(".unsuccess-messages").hide(200);
                    }
                    else{
            
                        $(".unsuccess-messages").show(200);
                        $(".success-messages").hide(200);
                    }
                }); 
              }
               });