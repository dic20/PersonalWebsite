function displayDiv(disId, hideId, activeNavDiv, inactiveNavDiv) {
  //displaying the selected element
  $('#' + disId).css('display', 'block');

  //hiding the other displays
  for (i = 0; i < hideId.length; i++) {
    $('#' + hideId[i]).css('display', 'none');
  }

  //making active nav-div highlighted
  $('#' + activeNavDiv).css('background-color', '#D5D5D5');
  $('#' + activeNavDiv).children().css('color', '#96858F');
  $('#' + activeNavDiv).children().css('text-shadow', '1px 1px white');

  //making inactive nav-div un-highlighted
  for (j = 0; j < inactiveNavDiv.length; j++) {
    $('#' + inactiveNavDiv[j]).css('background-color', '#5859B4');
    $('#' + inactiveNavDiv[j]).children().css('color', '#D5D5D5');
    $('#' + inactiveNavDiv[j]).children().css('text-shadow', '2px 2px black, -2px 2px black, 2px -2px black, -2px -2px black');
  }
}

//initially the window is defaulted to load on the home page
window.onload = displayDiv('home', ['about', 'contact'], 'topNavDiv', ['secondNavDiv', 'thirdNavDiv']);
