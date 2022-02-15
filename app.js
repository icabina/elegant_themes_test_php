$(document).ready(function () {
  console.log("Jquery working");

  //===================================================================

  $("#task-form").submit(function (e) {
    const postData = {
      name: $("#add_name").val(),
      last: $("#add_last_name").val(),
      email: $("#add_email").val(),
      address: $("#add_address").val(),
      city: $("#add_city").val(),
      state: $("#add_state").val(),
      zip: $("#add_zip").val(),
      phone: $("#add_phone").val(),
      birthdate: $("#add_birthdate").val(),
    };
    let url = "add.php";
    //metodo post de Jquery
    $.post(url, postData, function (response) {
      console.log("response", response);
      //metodo trigger para limpiar el form
      $("#task-form").trigger("reset");
    });
    console.log("enviando");
    console.log(postData);
    e.preventDefault();
  });
});
