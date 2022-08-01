jQuery(document).ready(function($){
  
  //action from bars and times navbar
  $('.fa-bars').click(function(){
    $(this).toggleClass('fa-times')    
    $('nav').slideToggle()
  })
  $('nav').click(function(){
    $('.fa-bars').removeClass('fa-times')
    $(this).slideUp()
  })

  alert('test')

  const sideMenu = document.querySelector("aside")
  const menuBtn = document.querySelector("#menu-btn")
  const closeBtn = document.querySelector("close-btn")
  const themeToggler = document.querySelector(".theme-toggle")
  
  menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block'
  })
  
  closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none'  
  })
  
  // change theme
  themeToggler.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme-variables')
    themeToggler.querySelector('span').classList.toggle('active')
  })
});