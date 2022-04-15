
function isotope_filter(grid){
    var btn = "."+grid+"_btn";
    var grid = "."+grid+"_grid";

    $(".services_panel_btn").removeClass("active")
    $(btn).addClass("active")
    $(".eachgrid").fadeOut(100);
    $(grid).fadeIn(100);
}