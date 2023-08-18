// const expandBtn = document.querySelector('.expand-btn');
// const expandContent = document.querySelector('.expand-content');

// expandBtn.addEventListener('click', () => {
//   if (expandContent.style.display === 'none') {
//     expandContent.style.display = 'block';
//     expandBtn.textContent = 'Show Less';
//   } else {
//     expandContent.style.display = 'none';
//     expandBtn.textContent = 'Learn More';
//   }
// });
// $('#button').click(() => {
//   var display = $('#popup').css('display');
//   if (display === "none") {
//       $('#popup').show();
//       $('#overlay').fadeIn();
//   }
//   else {
//       $('#popup').hide();
//       $('#overlay').fadeOut();
//   }
// });

// $('#overlay').click(() => {
//   $('#popup').hide();
//   $('#overlay').fadeOut();
// });
// remedy
const myModal9 = document.getElementById("myModal9");
const openModalButton9 = document.getElementById("openModalButton9");
const closeSpan9 = document.getElementsByClassName("close9")[0];
openModalButton9.addEventListener("click", function () {
  myModal9.style.display = "block";
});
closeSpan9.addEventListener("click", function () {
  myModal9.style.display = "none";
});
window.addEventListener("click", function (event) {
  if (event.target === myModal9) {
    myModal9.style.display = "none";
  }
});
// glimpse
const modal = document.getElementById("myModal");
const openModalButton = document.getElementById("openModalButton");
const closeSpan = document.getElementsByClassName("close")[0];
openModalButton.addEventListener("click", function () {
  modal.style.display = "block";
});
closeSpan.addEventListener("click", function () {
  modal.style.display = "none";
});
window.addEventListener("click", function (event) {
  if (event.target === modal) {
    modal.style.display = "none";
  }
});
// mycom
const modal4 = document.getElementById("myModal4");
const openModalButton4 = document.getElementById("openModalButton4");
const closeSpan4 = document.getElementsByClassName("close4")[0];
openModalButton4.addEventListener("click", function () {
  modal4.style.display = "block";
});
closeSpan4.addEventListener("click", function () {
  modal4.style.display = "none";
});
window.addEventListener("click", function (event) {
  if (event.target === modal4) {
    modal4.style.display = "none";
  }
});
// groundhog
const modal11 = document.getElementById("myModal11");
const openModalButton11 = document.getElementById("openModalButton11");
const closeSpan11 = document.getElementsByClassName("close11")[0];
openModalButton11.addEventListener("click", function () {
  modal11.style.display = "block";
});
closeSpan11.addEventListener("click", function () {
  modal11.style.display = "none";
});
window.addEventListener("click", function (event) {
  if (event.target === modal11) {
    modal11.style.display = "none";
  }
});


// login buttton groundhog
const modal112 = document.getElementById("myModal112");
const openModalButton112 = document.getElementById("openModalButton112");
const closeSpan112 = document.getElementsByClassName("close112")[0];
openModalButton112.addEventListener("click", function () {
  modal112.style.display = "block";
});
closeSpan112.addEventListener("click", function () {
  modal112.style.display = "none";
});
window.addEventListener("click", function (event) {
  if (event.target === modal112) {
    modal112.style.display = "none";
  }
});


const links = [
  { title: "North", url: "https://10.19.163.250:8443/CovMo/" },
  { title: "West", url: "https://10.55.190.250:8443/CovMo/" },
  { title: "East", url: "https://10.99.61.250:8443/CovMo/" },
  { title: "South", url: "https://10.91.114.250:8443/CovMo/" }
  // Add more links here as needed
];

const linkList = document.getElementById("linkList");

function createLinkElement(link) {
  const listItem = document.createElement("li1");
  const anchor = document.createElement("a");
  anchor.textContent = link.title;
  anchor.href = link.url;
  listItem.appendChild(anchor);
  return listItem;
}

function displayLinks() {
  links.forEach((link) => {
      const linkElement = createLinkElement(link);
      linkList.appendChild(linkElement);
  });
}

displayLinks();
// mobinet
const modal5 = document.getElementById("myModal5");
const openModalButton5 = document.getElementById("openModalButton5");
const closeSpan5 = document.getElementsByClassName("close5")[0];
openModalButton5.addEventListener("click", function () {
  modal5.style.display = "block";
});
closeSpan5.addEventListener("click", function () {
  modal5.style.display = "none";
});
window.addEventListener("click", function (event) {
  if (event.target === modal5) {
    modal5.style.display = "none";
  }
});

// netcool
const modal1 = document.getElementById("myModal1");
const openModalButton1 = document.getElementById("openModalButton1");
const closeSpan1 = document.getElementsByClassName("close1")[0];
openModalButton1.addEventListener("click", function () {
  modal1.style.display = "block";
});
closeSpan1.addEventListener("click", function () {
  modal1.style.display = "none";
});
window.addEventListener("click", function (event) {
  if (event.target === modal1) {
    modal1.style.display = "none";
  }
});


// vision
const modal2 = document.getElementById("myModal2");
const openModalButton2 = document.getElementById("openModalButton2");
const closeSpan2 = document.getElementsByClassName("close2")[0];
openModalButton2.addEventListener("click", function () {
  modal2.style.display = "block";
});
closeSpan2.addEventListener("click", function () {
  modal2.style.display = "none";
});
window.addEventListener("click", function (event) {
  if (event.target === modal2) {
    modal2.style.display = "none";
  }
});

// ribon
const modal7 = document.getElementById("myModal7");
const openModalButton7 = document.getElementById("openModalButton7");
const closeSpan7 = document.getElementsByClassName("close7")[0];
openModalButton7.addEventListener("click", function () {
  modal7.style.display = "block";
});
closeSpan7.addEventListener("click", function () {
  modal7.style.display = "none";
});
window.addEventListener("click", function (event) {
  if (event.target === modal7) {
    modal7.style.display = "none";
  }
});

// login ribon 
const modal71 = document.getElementById("myModal71");
const openModalButton71 = document.getElementById("openModalButton71");
const closeSpan71 = document.getElementsByClassName("close71")[0];
openModalButton71.addEventListener("click", function () {
  modal71.style.display = "block";
});
closeSpan71.addEventListener("click", function () {
  modal71.style.display = "none";
});
window.addEventListener("click", function (event) {
  if (event.target === modal71) {
    modal71.style.display = "none";
  }
});



const links7 = [
  { title: "DL_UW", url: "https://10.99.141.132" },
  { title: "MU", url: "https://10.99.141.133" },
  { title: "TN_CN", url: "https://10.99.141.134" },
  { title: "RJ", url: "https://10.99.141.135" },
  { title: "AP", url: "https://10.99.141.136" },
  { title: "UE", url: "https://10.99.141.137" },
  { title: "KK", url: "https://10.99.141.138" },
  { title: "MH", url: "https://10.99.141.140" },
  { title: "UN", url: "https://10.99.141.141" },
  { title: "MP", url: "https://10.3.56.4" },
  { title: "AS_NE", url: "https://10.3.56.5" },
  { title: "WB_KOL", url: "https://10.3.56.7" },
  { title: "KL", url: "https://10.3.56.8" },
  { title: "GJ", url: "https://10.3.56.9" },
  { title: "OR", url: "https://10.3.56.11" },
  { title: "BH", url: "https://10.3.56.12" },
  { title: "JK", url: "https://10.3.56.14" }
  // Add more links here as needed
];

const linkList7 = document.getElementById("linkList7");

function createLinkElement7(link) {
  const listItem = document.createElement("li1");
  const anchor = document.createElement("a");
  anchor.textContent = link.title;
  anchor.href = link.url;
  listItem.appendChild(anchor);
  return listItem;
}

function displayLinks7() {
  links7.forEach((link) => {
      const linkElement = createLinkElement7(link);
      linkList7.appendChild(linkElement);
  });
}

displayLinks7();



// msure 
const modal8 = document.getElementById("myModal8");
const openModalButton8 = document.getElementById("openModalButton8");
const closeSpan8 = document.getElementsByClassName("close8")[0];
openModalButton8.addEventListener("click", function () {
  modal8.style.display = "block";
});
closeSpan8.addEventListener("click", function () {
  modal8.style.display = "none";
});
window.addEventListener("click", function (event) {
  if (event.target === modal8) {
    modal8.style.display = "none";
  }
});





// fact 
const modal3 = document.getElementById("myModal3");
const openModalButton3 = document.getElementById("openModalButton3");
const closeSpan3 = document.getElementsByClassName("close3")[0];
openModalButton3.addEventListener("click", function () {
  modal3.style.display = "block";
});
closeSpan3.addEventListener("click", function () {
  modal3.style.display = "none";
});
window.addEventListener("click", function (event) {
  if (event.target === modal3) {
    modal3.style.display = "none";
  }
});




// airtel work 
const modal10 = document.getElementById("myModal10");
const openModalButton10 = document.getElementById("openModalButton10");
const closeSpan10 = document.getElementsByClassName("close10")[0];
openModalButton10.addEventListener("click", function () {
  modal10.style.display = "block";
});
closeSpan10.addEventListener("click", function () {
  modal10.style.display = "none";
});
window.addEventListener("click", function (event) {
  if (event.target === modal10) {
    modal10.style.display = "none";
  }
});
