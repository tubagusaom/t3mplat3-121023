<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Advanced Drop-down Menu | CodingNepal</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <nav>
         <div class="drop-btn">
            Drop down <span class="fas fa-caret-down"></span>
         </div>
         <div class="tooltip"></div>
         <div class="wrapper">
            <ul class="menu-bar">
               <li>
                  <a href="#">
                     <div class="icon">
                        <span class="fas fa-home"></span>
                     </div>
                     Home 
                  </a>
               </li>
               <li class="setting-item">
                  <a href="#">
                     <div class="icon">
                        <span class="fas fa-cog"></span>
                     </div>
                     Settings & privacy <i class="fas fa-angle-right"></i>
                  </a>
               </li>
               <li class="help-item">
                  <a href="#">
                     <div class="icon">
                        <span class="fas fa-question-circle"></span>
                     </div>
                     Help & support <i class="fas fa-angle-right"></i>
                  </a>
               </li>
               <li>
                  <a href="#">
                     <div class="icon">
                        <span class="fas fa-user"></span>
                     </div>
                     About us 
                  </a>
               </li>
               <li>
                  <a href="#">
                     <div class="icon">
                        <span class="fas fa-comment-alt"></span>
                     </div>
                     Feedback 
                  </a>
               </li>
            </ul>
            <!-- Settings & privacy Menu-items -->
            <ul class="setting-drop">
               <li class="arrow back-setting-btn"><span class="fas fa-arrow-left"></span>Settings & privacy</li>
               <li>
                  <a href="#">
                     <div class="icon">
                        <span class="fas fa-user"></span>
                     </div>
                     Personal info 
                  </a>
               </li>
               <li>
                  <a href="#">
                     <div class="icon">
                        <span class="fas fa-lock"></span>
                     </div>
                     Password 
                  </a>
               </li>
               <li>
                  <a href="#">
                     <div class="icon">
                        <span class="fas fa-address-book"></span>
                     </div>
                     Activity log 
                  </a>
               </li>
               <li>
                  <a href="#">
                     <div class="icon">
                        <span class="fas fa-globe-asia"></span>
                     </div>
                     Languages 
                  </a>
               </li>
               <li>
                  <a href="#">
                     <div class="icon">
                        <span class="fas fa-sign-out-alt"></span>
                     </div>
                     Log out 
                  </a>
               </li>
            </ul>
            <!-- Help & support Menu-items -->
            <ul class="help-drop">
               <li class="arrow back-help-btn"><span class="fas fa-arrow-left"></span>Help & support</li>
               <li>
                  <a href="#">
                     <div class="icon">
                        <span class="fas fa-question-circle"></span>
                     </div>
                     Help centre 
                  </a>
               </li>
               <li>
                  <a href="#">
                     <div class="icon">
                        <span class="fas fa-envelope"></span>
                     </div>
                     Support Inbox 
                  </a>
               </li>
               <li>
                  <a href="#">
                     <div class="icon">
                        <span class="fas fa-comment-alt"></span>
                     </div>
                     Send feedback 
                  </a>
               </li>
               <li>
                  <a href="#">
                     <div class="icon">
                        <span class="fas fa-exclamation-circle"></span>
                     </div>
                     Report problem 
                  </a>
               </li>
            </ul>
         </div>
      </nav>
      <script>
         const drop_btn = document.querySelector(".drop-btn span");
         const tooltip = document.querySelector(".tooltip");
         const menu_wrapper = document.querySelector(".wrapper");
         const menu_bar = document.querySelector(".menu-bar");
         const setting_drop = document.querySelector(".setting-drop");
         const help_drop = document.querySelector(".help-drop");
         const setting_item = document.querySelector(".setting-item");
         const help_item = document.querySelector(".help-item");
         const setting_btn = document.querySelector(".back-setting-btn");
         const help_btn = document.querySelector(".back-help-btn");
           drop_btn.onclick = (()=>{
             menu_wrapper.classList.toggle("show");
             tooltip.classList.toggle("show");
           });
           setting_item.onclick = (()=>{
             menu_bar.style.marginLeft = "-400px";
             setTimeout(()=>{
               setting_drop.style.display = "block";
             }, 100);
           });
           help_item.onclick = (()=>{
             menu_bar.style.marginLeft = "-400px";
             setTimeout(()=>{
               help_drop.style.display = "block";
             }, 100);
           });
           setting_btn.onclick = (()=>{
             menu_bar.style.marginLeft = "0px";
             setting_drop.style.display = "none";
           });
           help_btn.onclick = (()=>{
             help_drop.style.display = "none";
             menu_bar.style.marginLeft = "0px";
           });
      </script>
   </body>
</html>