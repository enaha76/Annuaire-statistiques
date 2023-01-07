  const sideMenu =document.querySelector("aside");
  const menuBtn=document.querySelector("#menu-btn");
  const closeBtn=document.querySelector("#close-btn");
  const themetoggler=document.querySelector(".theme-toggler")
  //show sidebar 
  menuBtn.addEventListener('click',()=>{
    sideMenu.style.display= 'block';
  })
  //close sidebar
  closeBtn.addEventListener('click',()=>{
    sideMenu.style.display='none';
  })
  //change theme
  themetoggler.addEventListener('click',()=>{
    document.body.classList.toggle('dark-theme-variables');
    themetoggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themetoggler.querySelector('span:nth-child(2)').classList.toggle('active');

  })


