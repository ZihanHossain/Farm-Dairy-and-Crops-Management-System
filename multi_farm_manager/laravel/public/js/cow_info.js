jQuery(document).ready(function($){
<<<<<<< HEAD
    jQuery('#add').click(function () {
        jQuery('#modal').modal('show');
    });

    $("#add_staff_form").click(function (e) {
        e.preventDefault();

        let name = $("#name").val();
        let gender = $("#gender").val();
        let availability = $("#availability").val();
        let date = $("#date").val();
        let image = $("#image").val();

        $.ajaxSetup({
            
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/home/cow_info/add_cow",
            type: "POST",
            data: {
                name:name,
                gender:gender,
                availability:availability,
                date:date,
                image:image,
            },
            success:function(response)
            {
                console.log(1);
                if(response)
                {
                    alert('asdfsad');
                }
                else
                {
                    console.log(3);
                }
            }
            // success:function(response){
            //     console.log(response);
            //     alert(response);
            // },error:function(){ 
            //     console.log(response);
            //     alert("error!!!!");
            // }
        });
      });
=======
    jQuery('#edit').click(function () {
        jQuery('#modal').modal('show');
    });
>>>>>>> ad4f173baa1705cd6697ec07394a66486799b4e1
});