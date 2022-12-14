<script>
    


    window.formRequest= function(){
    $('input,select').removeClass('is-invalid');
    let first_name=$('#first_name').val();
    let last_name=$('#last_name').val();
    let username=$('#username').val();
    let sponsor_username=$('#sponsor_username').val();
    var position = $("input[name='position']:checked").val();
    var gender = $("input[name='gender']:checked").val();
    let email=$('#email').val();
    let country=$('#country').val();
    let phone=$('#phone').val();
    let password=$('#password').val();
    let password_confirmation=$('#password_confirmation').val();
    let formData= new FormData();
    formData.append('first_name',first_name);
    formData.append('last_name',last_name);
    formData.append('username',username);
    formData.append('sponsor_username',sponsor_username);
    formData.append('position',position);
    formData.append('gender',position);
    formData.append('email',email);
    formData.append('phone',phone);
    formData.append('password',password);
    formData.append('password_confirmation',password_confirmation);

    //axios post request
         axios.post("{{route('registration.store')}}",formData)
        .then(function (response){
            if(response.data.message){
                toastr.success(response.data.message)
                datatable.ajax.reload();
                clear();
                $('#modal').modal('hide');
            }else if(response.data.error){
              var keys=Object.keys(response.data.error);
              keys.forEach(function(d){
                $('#'+d).addClass('is-invalid');
                $('#'+d+'_msg').text(response.data.error[d][0]);
              })
            }
        })
    }
    $(document).on('keyup change','#username',function(){
        checkUsername();
    })
    function checkUsername(){
        let username=$('#username').val();
        if(username!=''){
            axios.get("{{URL::to('check-username')}}/"+username)
            .then(res=>{
                if(res.data==false){
                    $('#username').addClass('is-invalid');
                    $('#username_msg').text('invalid username given')
                }else{
                    $('#username').addClass('is-valid');
                    $('#username_msg').text('username available')
                    $('#username_msg').removeClass('invalid-feedback')
                    $('#username_msg').addClass('valid-feedback')
                    $('#username_msg').show();
                }
            })
        }
        
    }
</script>