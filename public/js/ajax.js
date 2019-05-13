/*
function  insertarOFerta(){
	console.log("asddddddddddddddddddd");
		var imagen = $(this).serialize();
	

	$.ajax({
		url: "{{ route('insertOferta.storeOferta') }}",
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		type: 'POST',
		dataType: 'json',
		data:imagen,
		success: function(data){
			$('#insertarImagen').html(data.success);
		}
		
	});
}



function  insertarOFerta(){
	//var imagen = $('#formOferta1').serialize();
	var imagen = $("input[name='archivoMultimedia']").val();
	console.log(imagen);
	var token = $("input[name='_token']").val();
	console.log(token)

	$.ajax({
		url: "http://127.0.0.1:8000/backend",
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{data:imagen}
	});	
};



$("#insertarImagen").click(function(event) {
    event.preventDefault();
    var imagen = $("input[name='archivoMultimedia']").val();
    console.log(imagen);
    $.ajax({
        type: "post",
        url: "{{ route('insertOferta.storeOferta') }}",
        dataType: "json",
        data: imagen,
        success: function(data){
              alert("Data Save: " + data);
        },
        error: function(data){
             alert("Error")
        }
    });
});


$(document).ready(function(){
	$("#insertarImagen").click(function(){
	var imagen = $("input[name='archivoMultimedia']").val();
	var route = "http://127.0.0.1:8000/backend";
	var token = $("#token").val();
	console.log(route);

	$.ajax({
		async: true,
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'get',
		contentData: 'image/jpg',
		data: imagen,

		success:function(data){
			$("#formOferta1").html(data);
			console.log("succes");
		},	
		error: function (request, status, error) {
            console.log(error);
        }
		});
	});
});



$(document).ready(function(){
	$("#insertarImagen").click(function(){
	var imagen = $("input[name='archivoMultimedia']").val();
	var route = "http://127.0.0.1:8000/backend";
	var token = $("#token").val();
	console.log(route);

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		//dataType: 'JSON',
		data: imagen,
        
		success:function(data){
			//$("#formOferta1").html(data);
			console.log("succes");
			//console.log(data);
		},	
		error: function (request, status, error) {
            console.log(error);
        }
		});
	});
	$("#imagenOferta").on("change", function() {
        $("#formOferta1").submit();
    });
});


$(document).ready(function(){
	$("#insertarImagen").click(function(){
	var imagen = $("input[name='archivoMultimedia']").val();
	var route = "http://127.0.0.1:8000/backend";
	var token = $("#token").val();
	console.log(route);

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		//dataType: 'JSON',
		data: imagen,
        
		success:function(data){
			//$("#formOferta1").html(data);
			console.log("succes");
			//console.log(data);
		},	
		error: function (request, status, error) {
            console.log(error);
        }
		});
	});
	$("#imagenOferta").on("change", function() {
        $("#formOferta1").submit();
    });
});



  $(document).ready(function(){

 $('#upload_form').on('submit', function(event){
  event.preventDefault();
  console.log("entra paso1");
  $.ajax({
   url:"{{ route('billetes.storeOfertaImage') }}",
   method:"POST",
   data:new FormData(this),
   dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
    console.log("entra paso2");
    $('#message').css('display', 'block');
    $('#message').html(data.message);
    $('#message').addClass(data.class_name);
    $('#uploaded_image').html(data.uploaded_image);
   }
  })
 });

});

*/
