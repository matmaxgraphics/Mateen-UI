//Navbar Toggling
function classToggle() {
  const navs = document.querySelectorAll('.navbar__Items')
  
  navs.forEach(nav => nav.classList.toggle('navbar__ToggleShow'));
}

document.querySelector('.navbar__Link-toggle')
  .addEventListener('click', classToggle);


//Project Page filter Script
  $(document).ready(function() {
  	$('.list').click(function() {
  		const value = $(this).attr('data-filter');
  		if (value === 'all') {
  			$('.itemBox').show('1000');
  		} else {
  			$('.itemBox').not('.'+value).hide('1000');
  			$('.itemBox').filter('.'+value).show('1000');


  		}
  	})
  })