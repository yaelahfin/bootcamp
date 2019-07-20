$(document).ready(function() {

    // grab list user and save to json
    $.ajax({
            type: 'get',
            dataType: "json",
            url: 'read.php',
            success: function(data) {
                listuser = data;
                $.each(data.user, function(key, value) {
                    userid = value.id;
                    namauser = value.nama;
                    hobi = value.work
                    kategori = value.kategori;
                    $("table").append("<tr><td>" + namauser + "</td><td>" + work + "</td><td>" + kategori + "</td><td><button id='" + key + "' class='edit bg-light'><img src='icons8-edit-50.png' width='40px' height='40px'></button><button id='" + userid + "' class='delete bg-light'><img src='icons8-trash-can-50.png' width='40px' height='40px'></button></td></tr>");
                })
            },
        }

    );
    // add user

    $("#tomboladd").click(function() {
        event.preventDefault();
        n_nama = $("#n_name").val();
        n_work = $("#n_work").val();
        n_kategori = $("#n_kategori").val();
        event.preventDefault();
        $.ajax({
            type: 'post',
            url: 'add.php',
            data: "nama=" + n_nama + "&work=" + n_work + "&kategori=" + n_kategori,
            success: function() {
                $("#adduser-container").modal("hide");
                $("#sukses").modal("show").delay(10000);
                location.reload();
            }
        });
        
    });
    // delete user
    $("body").on("click",".delete",function(event){
    	id = $(this).attr("id");
    	$.ajax({
    		type : 'post',
    		url : 'delete.php',
    		data : 'id='+id,
    		success : function(respon){
    			$("#delete").modal('show').delay(10000);
    			location.reload();
    		}
    	})
    });
    

    //  edit user
    $("body").on('click', '.edit', function(event) {
        event.preventDefault()
        key = $(this).attr('id');
        nama = listuser.user[key].nama;
        work = listuser.user[key].work;
        kategori = listuser.user[key].kategori;
        id = listuser.user[key].id;

        $("#editmodal").modal('show');
        $("#e_name").val(nama);
        $("#e_work").val(work);
        $("#e_kategori").val(kategori);
        $("#e_save").click(function() {
            event.preventDefault();

            nama = $("#e_name").val();
            work = $("#e_work").val();
            kategori = $("#e_kategori").val();

            $.ajax({
            	type : 'post',
            	url : 'edit.php',
            	data : "id="+id+"&nama="+nama+"&work="+work+"&kategori="+kategori,
            	success : function(respon){
            		$("#editmodal").hide();
            		$("#suksesedit").modal('show').delay(10000);
            		location.reload();
            	}
            })
        });

    });


});