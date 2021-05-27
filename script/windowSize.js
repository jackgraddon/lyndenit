if (window.innerWidth < 750 || window.innerHeight < 600) {
  $("#windowSizeAlert").css("z-index", "100");
  $("#windowSizeAlert").css("opacity", "1");
} else {
  $("#windowSizeAlert").css("opacity", "0");
  setTimeout(() => {
    $("#windowSizeAlert").css("z-index", "-100");
  }, 300);
}
window.addEventListener("resize", () => {
  if (window.innerWidth < 750 || window.innerHeight < 600) {
    $("#windowSizeAlert").css("z-index", "100");
    $("#windowSizeAlert").css("opacity", "1");
  } else {
    $("#windowSizeAlert").css("opacity", "0");
    setTimeout(() => {
      $("#windowSizeAlert").css("z-index", "-100");
    }, 300);
  }
});
