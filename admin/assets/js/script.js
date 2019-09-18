/* EVENTO SCROLL -> MUDAR O MENU

jQuery(function () {
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 400) {
     $("#menu").addClass("menu-diferente");
    } else {
     $("#menu").removeClass("menu-diferente");
    }
  });
}); */


function alert() {
var x;
var r=confirm("Tem certeza que deseja excluir?");
if (r==true) {
  x=" O registro será excluido!";}
else {
  x="Ok!"; }
document.getElementById("demo").innerHTML=x;
}