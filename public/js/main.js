/* O script abaixo possiblita definir a duração do computente
 div na tela durante o temp de 5s->(5000 milissegundos)
 */
 $("document").ready(function()
 {
     setTimeout(function()
     {
         $("div.alert").remove();
 
     },5000);
 });



//   Manipular a Div em que aparecem as mensagens

//  var chat = document.getElementById("chat");
//  chat.style.backgroundColor ="gray";
//  chat.style.borderRadius = "5px";
//  chat.style.height = "6rem";