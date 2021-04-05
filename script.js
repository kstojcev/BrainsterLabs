document.querySelector(".navbar-toggler").addEventListener("click", toggleLogo);

function toggleLogo() {
  var logoVisibility = document.querySelector(".navbar-brand").style.visibility;
  if (logoVisibility == "visible" || logoVisibility == "") {
    document.querySelector(".navbar-brand").style.visibility = "hidden";
  } else {
    document.querySelector(".navbar-brand").style.visibility = "visible";
  }

  document
    .querySelector("#navbar-toggle-icon")
    .classList.toggle("fa-caret-down");
  document.querySelector("#navbar-toggle-icon").classList.toggle("fa-times");

  document.querySelector(".navbar").classList.toggle("nav-shown");
}

// Filters
document.querySelector("#filter-coding").addEventListener("click", showCoding);
document
  .querySelector("#filter-marketing")
  .addEventListener("click", showMarketing);
document.querySelector("#filter-design").addEventListener("click", showDesign);

function showCoding() {
  hideAll();

  if (!btnIsSelected("#filter-coding")) {
    document.querySelector("#filter-coding").classList.add("selected");
    document.querySelector("#filter-marketing").classList.remove("selected");
    document.querySelector("#filter-design").classList.remove("selected");

    var codingCards = document.querySelectorAll(".coding");
    for (var i = 0; i < codingCards.length; i++) {
      codingCards[i].style.display = "inline-block";
    }
  } else {
    document.querySelector("#filter-coding").classList.remove("selected");
    showAll();
  }
}

function showMarketing() {
  hideAll();

  if (!btnIsSelected("#filter-marketing")) {
    document.querySelector("#filter-marketing").classList.add("selected");
    document.querySelector("#filter-coding").classList.remove("selected");
    document.querySelector("#filter-design").classList.remove("selected");

    var marketingCards = document.querySelectorAll(".marketing");
    for (var i = 0; i < marketingCards.length; i++) {
      marketingCards[i].style.display = "inline-block";
    }
  } else {
    document.querySelector("#filter-marketing").classList.remove("selected");
    showAll();
  }
}

function showDesign() {
  hideAll();

  if (!btnIsSelected("#filter-design")) {
    document.querySelector("#filter-design").classList.add("selected");
    document.querySelector("#filter-coding").classList.remove("selected");
    document.querySelector("#filter-marketing").classList.remove("selected");
    var designCards = document.querySelectorAll(".design");
    for (var i = 0; i < designCards.length; i++) {
      designCards[i].style.display = "inline-block";
    }
  } else {
    document.querySelector("#filter-design").classList.remove("selected");
    showAll();
  }
}

function btnIsSelected(btn) {
  return document.querySelector(btn).classList.contains("selected");
}

function hideAll() {
  var cards = document.querySelectorAll(".card");
  for (var i = 0; i < cards.length; i++) {
    cards[i].style.display = "none";
  }
}

function showAll() {
  var cards = document.querySelectorAll(".card");
  for (var i = 0; i < cards.length; i++) {
    cards[i].style.display = "inline-block";
  }
}
