function aksi_login1(){
    var email = $("#email").val();
    var password = $("#password").val();

    if(email == ""){
        alert("Email Belum Diisi");
    }else if(password == ""){
        alert("Password Belum Diisi");
    }else if(email == "181530021@gmail.com" && password == "UTSB"){
        alert("Anda Berhasil Login");
        window.location= "index.php";
    }else{
        alert("email dan password yang anda masukkan salah");
    }
}
function aksi_login2(){
    var email = $("#email").val();
    var password = $("#password").val();

    if(email == ""){
        $(".register-link").show();
        $("#validasi").html("email belum diisi").show();
    }else if(password == ""){
        $(".register-link").show();
        $("#validasi").html("email belim diisi").show();
    }else if(email == "181530021@gmail.com" && password == "UTSB"){
        window.location="index.php";
    }else{
        $(".register-link").show();
        $("#validasi").html("email dan password yang anda masukkan salah").show();
    }
}

$(document).ready(function(){
    $(".register-link").hide();
 $("#btnlogin").click(function(){
     aksi_login1();

 });
});


