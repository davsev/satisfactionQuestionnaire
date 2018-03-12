$(document).ready(function() {
    var a = document.getElementsByClassName("question");
    for ( var i = 0; i < a.length; i++ ) {
        a[i].onclick = function(e) {
            e.preventDefault();
            var answer = this.getAttribute("data");
            //console.log(this.parentNode)
            document.querySelector('input[data="' + answer +'"]').checked = true;

            const building = document.getElementById('building').value;
            const floor = document.getElementById('floor').value;

            // console.log('the building no is', building);
            // console.log('the floor no is', floor);


            $.ajax({
                type: 'POST',
                url: 'inc/ajaxins.php',
                //data: {"answer": answer, "building": building, "floor": floor},
                data: 'answer='+answer+'&building='+building+'&floor='+floor,
                success: function(data){
                    console.log(data);
                    if(data == 'success'){      

                        swal({
                            title: "תשובתך נקלטה",
                            text: "תודה שעזרת לשמור על נקיון המכללה",
                            icon: "success",
                            button: false,
                        });

                        setTimeout(function() {
                        $(".swal-overlay--show-modal").fadeOut(300, function() { $(this).remove(); });
                    }, 4000);

                        // setTimeout(function() {
                        //     $('.swal-overlay--show-modal').fadeOut(500) 
                        //         // function(){
                        //         //     $(this).remove();
                        //         // })
                        // }, 4000);



                        //   setTimeout(function() {
                        //     $('.swal-overlay--show-modal').remove();
                        //   }, 5000);


                        

                          
                    }
                }
            });

        }
    }
        
    });




// $.ajax({
//     url: 'upload_data.php',
//     data: fd,
//     cache: false,
//     contentType: false,
//     processData: false,
//     type: 'POST',
//     success: function(data) {
//      console.log(data);
//         if(data == 'value already exists in the table') {  
//          alert('טופס זה נחתם על ידך בעבר');

//         }else{
//             alert('הטופס עלה למערכת בהצלחה');
//         }
//     }
// });



      

