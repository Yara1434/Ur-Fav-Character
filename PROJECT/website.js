function myfunction(){
    var element= document.body;
    element.classList.toggle("darkmood");
}
let btn = document.getElementById('scrollbtn');
let btn1 = document.getElementById('scrollbtn1');


   window.onscroll=function(){
    if(scrollY>=400){
      btn.style.display='block';
      btn1.style.display='none'
    }   else{
         btn.style.display='none';
         btn1.style.display='block';
        }  
       
    }
    btn.onclick=function(){
      scroll({
      left:0,
      top:0,
      behavior:"smooth"
      })

    }
//    window.onscroll=function(){
//     if(scrollY<=400){
//       btn.style.display='block';
//     }   else{
//          btn.style.display='none';
//         }  
       
//     }
   
