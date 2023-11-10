$(document).ready(function () {
  new DataTable("#example");

  function showAllUsers() {
    $.ajax({
      url: "action.php",
      type: "POST",
      data: { action: "viwe" },
      successe: function (response) {
        console.log(response);
      },
    });
  }
});
