function toggleSearch() {
  var searchbar = document.getElementById('search');
  console.log(searchbar.style.height);
  if(searchbar.style.height == '0px' || searchbar.style.height == '') {
    searchbar.style.height = '50px';
    searchbar.style.border = 'solid black 1px';
  } else {
    searchbar.style.height = '0px';
    searchbar.style.border = 'none';
  }
}

function show(btn) {
	var hide = document.getElementById("hide");
	var dot = document.getElementById("dotdotdot");
	dot.innerHTML = hide.innerHTML;
        btn.style.display = 'none';
}
