$(function(){$("#navbar-toggler").click(function(){$("#menu").toggle()}),$(".menu-bar").click(function(){$(".sidebar").slideToggle()}),$(".menu-bar-close").click(function(){$(".sidebar").hide()}),$("document").scroll(function(){$(".sidebar-menu").hide()})}),$(function(){$(".accordion .accordionHeader").prepend('<i class="fas fa-chevron-circle-right"></i>'),$(".accordion .accordionHeader").click(function(){$(".accordion .accordionContent").slideUp(),$(".accordion .accordionHeader i").removeClass("fa-chevron-circle-down fa-chevron-circle-right").addClass("fa-chevron-circle-right"),$(this).next().is(":visible")||($(this).next().slideDown(),$(this).find("i").toggleClass("fa-chevron-circle-right fa-chevron-circle-down"))})}),$(document).ready(function(){var c=$(".carousel-body li").length,o=1;for($("div.slide-caption").addClass("slideLeft").css({righ:"50%"}),i=1;i<=c;i++)$(".indicators").append('<li><span class="fa fa-circle"></span></li>');function e(){o>=c?o=1:o++,$(".indicators li").css({color:"#858585"}),$(".indicators li:nth-child("+o+")").css({color:"#019e67"}),$(".carousel-body li").hide(),$(".carousel-body li:nth-child("+o+")").fadeIn(1500)}$(".carousel-body li").hide(),$(".carousel-body li:first").show(),$(".indicators li:first").css({color:"#019e67"}),$(".indicators li").click(function(){var i=$(this).index()+1;console.log(i),$(".carousel-body li").hide(),$(".carousel-body li:nth-child("+i+")").fadeIn(1500),$(".indicators li").css({color:"#858585"}),$(this).css({color:"#019e67"}),o=i}),$(".right span").click(e),$(".left span").click(function(){o<=1?o=c:o--,$(".indicators li").css({color:"#858585"}),$(".indicators li:nth-child("+o+")").css({color:"#019e67"}),$(".carousel-body li").hide(),$(".carousel-body li:nth-child("+o+")").fadeIn(1500)}),setInterval(function(){e()},4e3)}),$(function(){$("ul.tabs li").click(function(){var i=$(this).attr("data-tab");$("ul.tabs li").removeClass("current"),$(".tab-content").removeClass("current"),$(this).addClass("current"),$("#"+i).addClass("current")}),$("ul.tabs-vertical li").click(function(){var i=$(this).attr("data-tab");$("ul.tabs-vertical li").removeClass("current-v"),$(".tab-content-vertical").removeClass("current-v"),$(this).addClass("current-v"),$("#"+i).addClass("current-v")})}),$(function(){$(".sticky-footer").prev("main").css({height:"80vh"})}),window.onscroll=function(){myFunction()};var header=document.getElementById("stickNavScroll"),sticky=header.offsetTop;function myFunction(){window.pageYOffset>sticky?header.classList.add("stickyNav-onScroll"):header.classList.remove("stickyNav-onScroll")}