jQuery(
  $("#heart").onClick(function () {
    $.ajax({
      url: "http://" + location.host + "/wp-admin/admin-ajax.php",
      data: filter.serialize(), // form data
      type: filter.attr("method"), // POST
      success: function (data) {
        $("#response").html(data); // insert data
      },
    });
  })
);
