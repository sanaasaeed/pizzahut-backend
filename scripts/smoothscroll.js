$(".nav-link").on("click", function(e) {
  if (this.hash !== "") {
    console.log("Preventing Default.....");
    e.preventDefault();

    const hash = this.hash;

    $("html, body").animate(
      {
        scrollTop: $(hash).offset().top
      },
      800
    );
  }
});
