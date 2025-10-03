let toggle=document.getElementById('toggle');
let label_toggle=document.getElementById( 'label_toggle');
toggle.addEventListener('change',(event)=>{
let checked=event.target.checked;
 document.body.classList.toggle('dark');
if (checked==true){
label_toggle.innerHTML='<i class="fa-solid fa-sun"></i>';
}else{
label_toggle.innerHTML='<i class="fa-solid fa-moon"*</i>';
}})
