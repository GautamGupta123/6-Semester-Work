let bt=document.getElementById("but");
let bt1=document.createElement('button');
bt1.style.width="90px";
bt1.style.height="30px";
bt1.textContent="another submit"
let bt2=document.createElement('button');
bt2.style.width="90px";
bt2.style.height="30px";
bt2.textContent="submitted";
let bd=document.getElementById("div")
bt.addEventListener('click',hello);
function hello(){
    bt.remove()
    bd.appendChild(bt1);
    bd.appendChild(bt2);
}