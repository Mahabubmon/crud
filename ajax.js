//insert Data start
$(".btn").click(function () {
  var name = $("#name").val();
  var email = $("#email").val();
  var pass = $("#pass").val();

  $.ajax({
    method: "POST",
    url: "action.php",
    data: { name: name, email: email, pass: pass },
    success: function (data) {
      read();
    },
  });
});
//insert Data end

//Read  Data start
function read() {
  var read = "";
  $.ajax({
    url: "read.php",
    method: "POST",
    data: { read: read },
    success: function (data) {
      $("#tbody").html(data);
    },
  });
}

//Read  Data end

//delete  Data start
function Delete(userId) {
  $con = confirm("Are You Sure");
  if ($con == true) {
    $.ajax({
      url: "delete.php",
      method: "POST",
      data: { userId: userId },
      success: function () {
        read();
      },
    });
  }
}
//delete  Data end
//edit  Data start
function Edit(userId) {
  var name = $("#name").val();
  var email = $("#email").val();
  var pass = $("#pass").val();

  $.ajax({
    url: "edit.php",
    method: "GET",
    data: { userId: userId },
    success: function (data) {
      $("body").html(data);
    },
  });
}
//edit  Data end
