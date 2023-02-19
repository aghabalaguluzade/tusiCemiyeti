$(function(){


  let list_btn = document.getElementById('list_btn');
  let mobile = document.querySelector('.noactive');
  let content = document.querySelector('#mobile_body_content');

  list_btn.addEventListener('click', function() {
    if(mobile.className == 'noactive'){
      mobile.classList.add('navigation');
      mobile.classList.remove('noactive');
    }else{
      mobile.classList.remove('navigation');
      setTimeout(()=>{
        mobile.classList.add('noactive');
      }, 500)
    }
  }, false);

  content.addEventListener('click', function() {
    if(mobile.className == 'navigation'){
      mobile.classList.remove('navigation');
      setTimeout(()=>{
        mobile.classList.add('noactive');
      }, 500)
    }
  }, false);

  $('#nav li.has_sub').click(function(){
    $(this).toggleClass("active_sub");

 })
})
