/*jQuery(
  $("#heart").onClick(function () {
    $.ajax({
      url: "http://" + location.host + "/city-and-people/wp-admin/admin-ajax.php",
      data: filter.serialize(), // form data
      type: filter.attr("method"), // POST
      success: function (data) {
        $("#response").html(data); // insert data
      },
    });
  })
);

(function ($) {
  console.log(1);
  $.fn.myPostLikes = function (options) {
    options = $.extend(
      {
        countElement: ".like-count",
      },
      options
    );

    return this.each(function () {
      console.log(2);
      var $element = $(this),
        $count = $(options.countElement, $element),
        url =
          "http://" +
          location.host +
          "/city-and-people/wp-admin/admin-ajax.php",
        id = $element.data("id"), // Post's ID
        action = "my_update_likes",
        data = {
          action: action,
          post_id: id,
        };

      $element.on("click", function (e) {
        console.log(3);
        e.preventDefault();
        console.log(" url" + url);
        $.getJSON(url, data, function (json) {
          console.log(4);
          console.log(json);
          console.log(" jsc: " + json.count);
          if (json && json.count) {
            console.log(5);
            $count.text(json.count); // Update the count without page refresh
          }
        });
      });
    });
  };
})(jQuery);

(function ($) {
  $(function () {
    if ($(".my-post-like").length) {
      $(".my-post-like").myPostLikes();
    }
  });
})(jQuery);*/

// When a user clicks the like button
(function ($) {
  // get the whole object
  console.log(bloginfo);
  // get the site url
  console.log(bloginfo.site_url);
  // get the current queried post ID
  console.log(bloginfo.post_id.ID);
  console.log(1);
  $("#voices").on("click", function () {
    console.log(2);
    // AJAX call goes to our endpoint url
    $.ajax({
      url:
        bloginfo.site_url + "/wp-json/example/v2/likes/" + bloginfo.post_id.ID,
      type: "post",
      success: function () {
        console.log("works!");
      },
      error: function () {
        console.log("failed!");
      },
    });

    // Change the like number in the HTML to add 1
    //console.log(" vvhtml: " + $("#voices_value").html());
    var updated_likes = parseInt($("#voices_value").html()) + 1;
    //console.log(" ul: " + updated_likes);

    $("#voices_value").html(updated_likes);
    // Make the button disabled
  });
})(jQuery);