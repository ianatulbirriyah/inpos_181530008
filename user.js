function simpan() {
    $.ajax({
        type: "POST",
        url: "ajax/ajax_user.php",
        data: {
            aksi: "simpan",
            id_user: $("#id_user").val(),
            nama_user: $("#nama_user").val(),
            email: $("#email").val(),
            lev_user: $("#lev_user").val()

        },
        dataType: "json",
        beforeSend: function (e) {
            if (e && e.overrideMineType) {
                e.overrideMineType("application/json;charset=UTF-8");
            }
        },
        success: function (response) {
            //respon dari server
            if (response.validasi == "success") {
                window.location = "index.php?page=user";
            }
        },
        error: function (xhr, ajaxOption, thrownError) {
            console.log(xhr.status);
            console.log(thrownError);
        }

    });
}

function hapus (id_user){

    swal ({
        title: "apakah anda yakin?",
        text: "akan mengpaus data ini",
        icon: "warning",
        buttons : true,
        dangerMode: true,
    })
    .then (willDelete => {
        if(willDelete){

            $.ajax({
                type: "POST",
                url: "ajax/ajax_user.php",
                data: {
                    aksi: "hapus",
                    id_user: id_user
                    
                },
                dataType: "json",
                beforeSend: function (e) {
                    if (e && e.overrideMineType) {
                        e.overrideMineType("application/json;charset=UTF-8");
                    }
                },
                success: function (response) {
                    //respon dari server
                    if (response.validasi == "success") {
                        window.location = "index.php?page=user";
                    }
                },
                error: function (xhr, ajaxOption, thrownError) {
                    console.log(xhr.status);
                    console.log(thrownError);
                }
        
            });

        } else {
            swal("Anda batal menghapus");
        }
    })

}

function get_data (id_user){
    $.ajax({
        type: "POST",
        url: "ajax/ajax_user.php",
        data: {
            aksi: "get_data",
            id_user: id_user
            
        },
        dataType: "json",
        beforeSend: function (e) {
            if (e && e.overrideMineType) {
                e.overrideMineType("application/json;charset=UTF-8");
            }
        },
        success: function (response) {
            //respon dari server
            $("#id_user").val(response.id_user);
            $("#nama_user").val(response.nama_user);
            $("#email").val(response.email);
            $("#lev_user").val(response.lev_user);
        },
        error: function (xhr, ajaxOption, thrownError) {
            console.log(xhr.status);
            console.log(thrownError);
        }

    });
}

function ubah (id_user){
    $.ajax({
        type: "POST",
        url: "ajax/ajax_user.php",
        data: {
            aksi: "ubah",
            id_user: $("#id_user").val(),
            nama_user: $("#nama_user").val(),
            email: $("#email").val(),
            lev_user: $("#lev_user").val()

        },
        dataType: "json",
        beforeSend: function (e) {
            if (e && e.overrideMineType) {
                e.overrideMineType("application/json;charset=UTF-8");
            }
        },
        success: function (response) {
            //respon dari server
            if (response.validasi == "success") {
                window.location = "index.php?page=user";
            }
        },
        error: function (xhr, ajaxOption, thrownError) {
            console.log(xhr.status);
            console.log(thrownError);
        }

    });
}

$(document).ready(function () {


    $("#btn_tambah").click(function () {
        $(".validasi-id_user").hide();
        $(".validasi-nama_user").hide();
        $(".validasi-email").hide();
        $(".validasi-lev_user").hide();
        $("#btn-update").hide();
        $("#btn-simpan").show();
      


        $("#id_user").val("");
        $("#nama_user").val("");
        $("#email").val("");
        $("#lev_user").val("");

    });

    $("#ubah").click(function () {
        $(".validasi-id_user").hide();
        $(".validasi-nama_user").hide();
        $(".validasi-email").hide();
        $(".validasi-lev_user").hide();
        $("#btn-simpan").hide();
        $("#btn-update").show();
        

    });

    $("#btn-simpan").click(function () {
        var id_user = $("#id_user").val();
        var nama_user = $("#nama_user").val();
        var email = $("#email").val();
        var lev_user = $("#lev_user").val();



        if (id_user == "") {
            $(".validasi-id_user").show();
        } else if (nama_user == "") {
            $(".validasi-nama_user").show();
        } else if (email == "") {
            $(".validasi-email").show();
        } else if (lev_user == "") {
            $(".validasi-lev_user").show();
        } else {
            simpan();
        }
    }); 

    $("#btn-update").click(function () {
        var id_user = $("#id_user").val();
        var nama_user = $("#nama_user").val();
        var email = $("#email").val();
        var lev_user = $("#lev_user").val();



        if (id_user == "") {
            $(".validasi-id_user").show();
        } else if (nama_user == "") {
            $(".validasi-nama_user").show();
        } else if (email == "") {
            $(".validasi-email").show();
        } else if (lev_user == "") {
            $(".validasi-lev_user").show();
        } else {
            ubah();
        }
    });
});