$(document).ready(function () {
  var current_fs, next_fs, previous_fs;
  var opacity;

  $(".nextBtn").click(function () {
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    // Validasi form sebelum beralih ke langkah berikutnya
    var isValid = true;
    current_fs.find(":input[required]").each(function() {
        if ($(this).val() === "") {
            isValid = false;
            $(this).addClass("error");
            $(this).siblings(".invalid-feedback").show();
        }
        else {
            $(this).removeClass("error");
            $(this).siblings(".invalid-feedback").hide();
        }
    });

    if (isValid) {
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        next_fs.show();

        current_fs.animate(
          { opacity: 0 },
          {
            step: function (now) {
              opacity = 1 - now;

              current_fs.css({
                display: "none",
                position: "relative",
              });
              next_fs.css({ opacity: opacity });
            },
            duration: 600,
          }
        );
    }
});

  $(".backBtn").click(function () {
    current_fs = $(this).parent();
    next_fs = $(this).parent().prev();

    $("#progressbar li")
      .eq($("fieldset").index(current_fs))
      .removeClass("active");

    next_fs.show();

    current_fs.animate(
      { opacity: 0 },
      {
        step: function (now) {
          opacity = 1 - now;

          current_fs.css({
            display: "none",
            position: "relative",
          });
          next_fs.css({ opacity: opacity });
        },
        duration: 600,
      }
    );
  });

  $("#msform").submit(function () {
    var txt = $("whatsapp");
    txt.val("'" + txt.val());
  });
});

window.addEventListener("load", function () {
  const form = this.document.getElementById("msform");
  form.addEventListener("submit", function (e) {
    e.preventDefault();
    const data = new FormData(form);
    const action = e.target.action;

    fetch(action, {
      method: "POST",
      body: data,
    }).then(() => {
      alert("Submit Form Sukses");
    });
  });
});

function display() {
  // Get
  const nama = document.getElementById("nama").value;
  const nim = document.getElementById("nim").value;
  const fakultas = document.getElementById("fakultas").value;
  const whatsapp = document.getElementById("whatsapp").value;
  const line = document.getElementById("line").value;
  const title = document.getElementById("title").value;
  const genre = document.getElementById("genre").value;
  const file = document.getElementById("file").value;
  const director = document.getElementById("director").value;

  // Store
  document.getElementById("display-nama").innerText = nama;
  document.getElementById("display-nim").innerText = nim;
  document.getElementById("display-fakultas").innerText = fakultas;
  document.getElementById("display-whatsapp").innerText = whatsapp;
  document.getElementById("display-line").innerText = line;
  document.getElementById("display-title").innerText = title;
  document.getElementById("display-genre").innerText = genre;
  document.getElementById("display-file").innerText = file;
  document.getElementById("display-director").innerText = director;
}

// Example starter JavaScript for disabling form submissions if there are invalid fields


