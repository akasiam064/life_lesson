let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");

closeBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("open");
  menuBtnChange();//calling the function(optional)
});

searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
  sidebar.classList.toggle("open");
  menuBtnChange(); //calling the function(optional)
});

// following are the code to change sidebar button(optional)
function menuBtnChange() {
 if(sidebar.classList.contains("open")){
   closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
 }else {
   closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
 }
}


    const button = document.querySelector(".button"),
    text = document.querySelector(".text");

    button.addEventListener("click", ()=>{
      button.classList.add("progress");
      text.innerText = "กำลังอัพโหลด..";

      setTimeout(()=>{
       button.classList.remove("progress"); //remove progress after 6s
       text.innerText = "อัพโหลด";
      },6000); //1000ms = 1s (6000 = 6s)

    });
  
