function displayDiv(disId, hideId, activeNavDiv, inactiveNavDiv) {
  //displaying the selected element
  $('#' + disId).css('display', 'block');

  //hiding the other displays
  for (i = 0; i < hideId.length; i++) {
    $('#' + hideId[i]).css('display', 'none');
  }

  //making active nav-div highlighted
  $('#' + activeNavDiv).css('background-color', '#1E88E5');

  //making inactive nav-div un-highlighted
  for (j = 0; j < inactiveNavDiv.length; j++) {
    $('#' + inactiveNavDiv[j]).css('background-color', '#ddd');
  }
}

//initially the window is defaulted to load on the home page
window.onload = displayDiv('home', ['about', 'contact'], 'topNavDiv', ['secondNavDiv', 'thirdNavDiv']);
