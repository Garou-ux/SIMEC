
//Controlador del post para iniciar sesión

//funcion para mostrar spiner despues de hacer un post
function Spinner(contenedor, mostrar) {
	if (mostrar) {
		$('#'+contenedor).waitMe({
			effect : 'bounce',
			text : '',
			bg : "rgba(150,150,150,0.7)",
			color : '#838786',
			maxSize : '',
			waitTime : -1,
			textPos : 'vertical',
			fontSize : '',
			source : '',
			onClose : function() {}
		});
	}else {
		$('#'+contenedor).waitMe('hide');
	}
}


// function Login(){
// var destino =$('#ValidateUser').val();
// var data =$("#FormLogin").serializeArray();
// console.log(data);
// console.log(destino);
// Spinner('hola', true);
// //se procede a hacer el post
 
// //Swal.fire('Any fool can use a computer')
// $.ajax({
// url:destino,
// type: 'GET',
// dataType: 'JSON',
// data: data,
// success :function(response, data) {
//   Spinner('hola', false);
//   console.log(response);
//   GetLocate(response.URL);
//  // location.href =response.URL;
// //   swal(response.mensaje.title, response.mensaje.mensaje, response.mensaje.tipo);
// },
// error: function(request, status, error) {
//   Spinner('hola', false);
// }
// });

// }