(function($) {
  'use strict';
  $(function() {
    $(".nav-settings").on("click", function() {
      $("#right-sidebar").toggleClass("open");
    });
    $(".settings-close").on("click", function() {
      $("#right-sidebar,#theme-settings").removeClass("open");
    });

    $("#settings-trigger").on("click" , function(){
      $("#theme-settings").toggleClass("open");
    });


    //background constants
    var navbar_classes = "navbar-danger navbar-success navbar-warning navbar-dark navbar-light navbar-primary navbar-info navbar-pink";
    var sidebar_classes = "sidebar-light sidebar-dark";
    var $body = $("body");
	var $nav = $("nav");

    //sidebar backgrounds
    $("#sidebar-light-theme").on("click" , function(){
      $body.removeClass("sidebar-dark");
      $body.addClass("sidebar-light");
      $(".sidebar-bg-options").removeClass("selected");
      $(this).addClass("selected");
	  localStorage.setItem('isDarkMode', false);
    });
    $("#sidebar-dark-theme").on("click" , function(){
      $body.removeClass(sidebar_classes);
      $body.addClass("sidebar-dark");
      $(".sidebar-bg-options").removeClass("selected");
      $(this).addClass("selected");
	  localStorage.setItem('isDarkMode', true);
    });
	
	if (localStorage.getItem('isDarkMode') === 'true') {
		document.body.classList.add('sidebar-dark');
	} 

    //Navbar Backgrounds
    $(".tiles.primary").on("click" , function(){
      $(".navbar").removeClass(navbar_classes);
      $(".navbar").addClass("navbar-primary");
      $(".tiles").removeClass("selected");
      $(this).addClass("selected");
	  localStorage.removeItem("bgOption");
	  localStorage.setItem('bgOption', 'primary');
    });
    $(".tiles.success").on("click" , function(){
      $(".navbar").removeClass(navbar_classes);
      $(".navbar").addClass("navbar-success");
      $(".tiles").removeClass("selected");
      $(this).addClass("selected");
	  localStorage.removeItem("bgOption");
	  localStorage.setItem('bgOption', 'success');
    });
    $(".tiles.warning").on("click" , function(){
      $(".navbar").removeClass(navbar_classes);
      $(".navbar").addClass("navbar-warning");
      $(".tiles").removeClass("selected");
      $(this).addClass("selected");
	  localStorage.removeItem("bgOption");
	  localStorage.setItem('bgOption', 'warning');
    });
    $(".tiles.danger").on("click" , function(){
      $(".navbar").removeClass(navbar_classes);
      $(".navbar").addClass("navbar-danger");
      $(".tiles").removeClass("selected");
      $(this).addClass("selected");
	  localStorage.removeItem("bgOption");
	  localStorage.setItem('bgOption', 'danger');
    });
    $(".tiles.light").on("click" , function(){
      $(".navbar").removeClass(navbar_classes);
      $(".navbar").addClass("navbar-light");
      $(".tiles").removeClass("selected");
      $(this).addClass("selected");
	  localStorage.removeItem("bgOption");
	  localStorage.setItem('bgOption', 'light');
    });
    $(".tiles.info").on("click" , function(){
      $(".navbar").removeClass(navbar_classes);
      $(".navbar").addClass("navbar-info");
      $(".tiles").removeClass("selected");
      $(this).addClass("selected");
	  localStorage.removeItem("bgOption");
	  localStorage.setItem('bgOption', 'info');
    });
    $(".tiles.dark").on("click" , function(){
      $(".navbar").removeClass(navbar_classes);
      $(".navbar").addClass("navbar-dark");
      $(".tiles").removeClass("selected");
      $(this).addClass("selected");
	  localStorage.removeItem("bgOption");
	  localStorage.setItem('bgOption', 'dark');
    });
    $(".tiles.default").on("click" , function(){
      $(".navbar").removeClass(navbar_classes);
      $(".tiles").removeClass("selected");
      $(this).addClass("selected");
	  localStorage.removeItem("bgOption");
	  localStorage.setItem("bgOption", "default");
    });
	if (localStorage.getItem('bgOption') !== null) {
		var themeNav = localStorage.getItem('bgOption');
		document.getElementById("top-nav").classList.add("navbar-" + themeNav);
	} 
  });
})(jQuery);
