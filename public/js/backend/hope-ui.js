/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************************!*\
  !*** ./resources/js/backend/hope-ui.js ***!
  \*****************************************/
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }

document.addEventListener('alpine:init', function () {
  Alpine.data('sidebar', function () {
    return {
      selected: null,
      toggle: function toggle(value) {
        if (value !== this.selected) {
          this.selected = value;
        } else {
          this.selected = null;
        }
      },
      init: function init() {
        if (document.querySelector('.active') !== null) {
          var active = document.querySelector('.active').dataset.sidebarParent;

          if (active !== undefined) {
            this.selected = active;
          }
        }
      }
    };
  });
});

function toggleTooltip(event, placement, popoverID) {
  var element = event.target;

  while (element.nodeName !== 'BUTTON') {
    element = element.parentNode;
  }

  Popper.createPopper(element, document.getElementById(popoverID), {
    modifiers: [{
      name: 'offset',
      options: {
        offset: [0, 10]
      }
    }],
    placement: placement
  });
  document.getElementById(popoverID).classList.toggle('hidden');
} // //   popovers


function openPopover(event, placement, popoverID) {
  var element = event.target;

  while (element.nodeName !== 'BUTTON') {
    element = element.parentNode;
  }

  Popper.createPopper(element, document.getElementById(popoverID), {
    placement: placement
  });
  document.getElementById(popoverID).classList.toggle('hidden');
} //   Dropdown


function openDropdown(event, dropdownID) {
  var element = event.target;

  while (element.nodeName !== 'BUTTON') {
    element = element.parentNode;
  }

  var popper = Popper.createPopper(element, document.getElementById(dropdownID), {
    placement: 'bottom-start'
  });
  document.getElementById(dropdownID).classList.toggle('hidden');
  document.getElementById(dropdownID).classList.toggle('block');
} // Alerts


function closeAlert(event) {
  var element = event.target;

  while (element.nodeName !== 'BUTTON') {
    element = element.parentNode;
  }

  element.parentNode.parentNode.removeChild(element.parentNode);
} // modal


function toggleModal(modalID) {
  document.getElementById(modalID).classList.toggle('hidden');
  document.getElementById(modalID + '-backdrop').classList.toggle('hidden'); // document.getElementById(modalID).classList.toggle("flex");

  document.getElementById(modalID + '-backdrop').classList.toggle('flex');
} // tabpane Nav


function changeAtiveTab(event, wrapperID, color, tabID) {
  var tabsWrapper = document.getElementById(wrapperID);
  var tabsAnchors = tabsWrapper.querySelectorAll('[data-tab-toggle]');
  var tabsContent = tabsWrapper.querySelectorAll('[data-tab-content]');

  for (var i = 0; i < tabsAnchors.length; i++) {
    if (tabsAnchors[i].getAttribute('data-tab-toggle') === tabID) {
      tabsAnchors[i].classList.remove('text-' + color + '-500');
      tabsAnchors[i].classList.remove('bg-white');
      tabsAnchors[i].classList.add('text-white');
      tabsAnchors[i].classList.add('bg-' + color + '-500');
      tabsContent[i].classList.remove('hidden');
      tabsContent[i].classList.add('block');
    } else {
      tabsAnchors[i].classList.add('text-' + color + '-500');
      tabsAnchors[i].classList.add('bg-white');
      tabsAnchors[i].classList.remove('text-white');
      tabsAnchors[i].classList.remove('bg-' + color + '-500');
      tabsContent[i].classList.add('hidden');
      tabsContent[i].classList.remove('block');
    }
  }
}

function changeAtivepillTab(event, wrapperID, color, tabID) {
  var tabsWrapper = document.getElementById(wrapperID);
  var tabsAnchors = tabsWrapper.querySelectorAll('[data-tab-toggle]');
  var tabsContent = tabsWrapper.querySelectorAll('[data-tab-content]');

  for (var i = 0; i < tabsAnchors.length; i++) {
    if (tabsAnchors[i].getAttribute('data-tab-toggle') === tabID) {
      tabsAnchors[i].classList.remove('text-' + color + '-500');
      tabsAnchors[i].classList.remove('bg-white');
      tabsAnchors[i].classList.add('text-white');
      tabsAnchors[i].classList.add('bg-' + color + '-500');
      tabsContent[i].classList.remove('hidden');
      tabsContent[i].classList.add('block');
    } else {
      tabsAnchors[i].classList.add('text-' + color + '-500');
      tabsAnchors[i].classList.add('bg-white');
      tabsAnchors[i].classList.remove('text-white');
      tabsAnchors[i].classList.remove('bg-' + color + '-500');
      tabsContent[i].classList.add('hidden');
      tabsContent[i].classList.remove('block');
    }
  }
} // preview and code


function changetabpane(event, wrapperID, color, tabID) {
  var tabsWrapper = document.getElementById(wrapperID);
  var tabsAnchors = tabsWrapper.querySelectorAll('[data-tab-toggle]');
  var tabsContent = tabsWrapper.querySelectorAll('[data-tab-content]');

  for (var i = 0; i < tabsAnchors.length; i++) {
    if (tabsAnchors[i].getAttribute('data-tab-toggle') === tabID) {
      tabsAnchors[i].classList.remove('text-' + color + '-500');
      tabsAnchors[i].classList.remove('bg-white');
      tabsAnchors[i].classList.add('text-white');
      tabsAnchors[i].classList.add('bg-' + color + '-500');
      tabsContent[i].classList.remove('hidden');
      tabsContent[i].classList.add('block');
    } else {
      tabsAnchors[i].classList.add('text-' + color + '-500');
      tabsAnchors[i].classList.add('bg-white');
      tabsAnchors[i].classList.remove('text-white');
      tabsAnchors[i].classList.remove('bg-' + color + '-500');
      tabsContent[i].classList.add('hidden');
      tabsContent[i].classList.remove('block');
    }
  }
} // sidebar-toggle


var sidebarToggle = document.querySelectorAll('[data-toggle="sidebar"]');
Array.from(sidebarToggle, function (sidebarTogglebtn) {
  sidebarTogglebtn.addEventListener('click', function () {
    // document.getElementsByTagName('ASIDE').classList.toggle('sidebar-mini')
    var sidebar = document.querySelector('.sidebar');

    if (sidebar.classList.contains('sidebar-mini')) {
      sidebar.classList.remove('sidebar-mini');
    } else {
      sidebar.classList.add('sidebar-mini');
    }
  });
}); // dual-compact-toggle

var dualcompactToggle = document.querySelectorAll('[data-toggle="dual-compact"]');
Array.from(dualcompactToggle, function (dualcompactTogglebtn) {
  dualcompactTogglebtn.addEventListener('click', function () {
    // document.getElementsByTagName('ASIDE').classList.toggle('sidebar-mini')
    var sidebar1 = document.querySelector('.dual-compact');

    if (sidebar1.classList.contains('dual-compact-mini')) {
      sidebar1.classList.remove('dual-compact-mini');
    } else {
      sidebar1.classList.add('dual-compact-mini');
    }
  });
});

function slideout() {
  return {
    open: false,
    usedKeyboard: false,
    init: function init() {
      var _this = this;

      this.$watch('open', function (value) {
        value && _this.$refs.closeButton.focus();

        _this.toggleOverlay();
      });
      this.toggleOverlay();
    },
    toggleOverlay: function toggleOverlay() {
      document.body.classList[this.open ? 'add' : 'remove']('h-screen', 'overflow-hidden');
    }
  };
}

function toggleNavbar(collapseID, cID, sID) {
  document.getElementById(collapseID).classList.toggle('hidden');
  document.getElementById(collapseID).classList.toggle('flex');
  document.getElementById(cID).classList.toggle('hidden');
  document.getElementById(cID).classList.toggle('block');
  document.getElementById(sID).classList.toggle('hidden');
  document.getElementById(sID).classList.toggle('block');
}
/*---------------------------------------------------------------------
              LoaderInit
-----------------------------------------------------------------------*/


var loaderInit = function loaderInit() {
  var loader = document.querySelector('.loader');
  setTimeout(function () {
    loader.classList.add('hidden');
  }, 200);
};

document.addEventListener('DOMContentLoaded', function (event) {
  loaderInit();
}); // nouiSlider

var rangeSlider = document.querySelectorAll('.range-slider');
Array.from(rangeSlider, function (elem) {
  if ((typeof noUiSlider === "undefined" ? "undefined" : _typeof(noUiSlider)) !== ( true ? "undefined" : 0)) {
    noUiSlider.create(elem, {
      start: [20, 80],
      connect: true,
      range: {
        min: 0,
        max: 100
      }
    });
  }
});
var slider = document.querySelectorAll('.slider');
Array.from(slider, function (elem) {
  if ((typeof noUiSlider === "undefined" ? "undefined" : _typeof(noUiSlider)) !== ( true ? "undefined" : 0)) {
    noUiSlider.create(elem, {
      start: 50,
      connect: [true, false],
      range: {
        min: 0,
        max: 100
      }
    });
  }
}); // vanillaDatepicker

var datepickers = document.querySelectorAll('.vanila-datepicker');
Array.from(datepickers, function (elem) {
  if ((typeof Datepicker === "undefined" ? "undefined" : _typeof(Datepicker)) !== ( true ? "undefined" : 0)) {
    new Datepicker(elem);
  }
});
var daterangePickers = document.querySelectorAll('.vanila-daterangepicker');
Array.from(daterangePickers, function (elem) {
  if ((typeof Datepicker === "undefined" ? "undefined" : _typeof(Datepicker)) !== ( true ? "undefined" : 0)) {
    new DateRangePicker(elem);
  }
}); // scrollbar
// let Scrollbar
// if (typeof Scrollbar !== typeof null) {
//     if (document.querySelectorAll('.data-scrollbar').length) {
//         Scrollbar = window.Scrollbar
//         Scrollbar.init(document.querySelector('.data-scrollbar'), {
//             continuousScrolling: false
//         })
//     }
// }

/*---------------------------------------------------------------------
Circle Progress
-----------------------------------------------------------------------*/

var progressBar = document.getElementsByClassName('circle-progress');

if (_typeof(progressBar) !== ( true ? "undefined" : 0)) {
  Array.from(progressBar, function (elem) {
    var minValue = elem.getAttribute('data-min-value');
    var maxValue = elem.getAttribute('data-max-value');
    var value = elem.getAttribute('data-value');
    var type = elem.getAttribute('data-type');

    if (elem.getAttribute('id') !== '' && elem.getAttribute('id') !== null) {
      new CircleProgress('#' + elem.getAttribute('id'), {
        min: minValue,
        max: maxValue,
        value: value,
        textFormat: type
      });
    }
  });
}
/*---------------------------------------------------------------------
              CounterUp 2
-----------------------------------------------------------------------*/


if (window.counterUp !== undefined) {
  var counterUp = window.counterUp['default'];
  var counterUp2 = document.querySelectorAll('.counter');
  Array.from(counterUp2, function (el) {
    if ((typeof Waypoint === "undefined" ? "undefined" : _typeof(Waypoint)) !== ( true ? "undefined" : 0)) {
      var waypoint = new Waypoint({
        element: el,
        handler: function handler() {
          counterUp(el, {
            duration: 1000,
            delay: 10
          });
          this.destroy();
        },
        offset: 'bottom-in-view'
      });
    }
  });
}
/*------------------------
Back To Top
--------------------------*/


if (document.querySelectorAll('back-to-top').length) {
  window.onscroll = function () {
    scrollFunction();
  };
}

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById('back-to-top').style.display = 'block';
  } else {
    document.getElementById('back-to-top').style.display = 'none';
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
/*------------------------
scrollspy
--------------------------*/
// function scrollToReveal() {
//   return {
//     sticky: false,
//     lastPos: window.scrollY + 0,
//     scroll() {
//       this.sticky = window.scrollY > this.$refs.navbar.offsetHeight && this.lastPos > window.scrollY;
//       this.lastPos = window.scrollY;
//     }
//   }
// }


window.addEventListener('DOMContentLoaded', function () {
  var observer = new IntersectionObserver(function (entries) {
    console.log(entries);
    entries.forEach(function (entry) {
      var id = entry.target.getAttribute('id');
      console.log(id);

      if (entry.intersectionRatio > 0) {
        if (id == 'scrollspyHeading1' || id == 'scrollspyHeading2' || id == 'scrollspyHeading3' || id == 'scrollspyHeading4' || id == 'scrollspyHeading5' || id == 'dropdown') {
          document.querySelector("div li a[href=\"#".concat(id, "\"]")).parentElement.classList.add('active');
        }
      } else {
        if (id == 'scrollspyHeading1' || id == 'scrollspyHeading2' || id == 'scrollspyHeading3' || id == 'scrollspyHeading4' || id == 'scrollspyHeading5' || id == 'dropdown') {
          document.querySelector("div li a[href=\"#".concat(id, "\"]")).parentElement.classList.remove('active');
        }
      }
    });
  }); // Track all sections that have an `id` applied

  document.querySelectorAll('section[id]').forEach(function (section) {
    observer.observe(section);
  });
}); // leaflet map

var elem = document.getElementById('map'); // Initialize the map

if (elem) {
  var map = L.map(elem); // Get the tile layer from OpenStreetMaps

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    // Specify the maximum zoom of the map
    maxZoom: 19
  }).addTo(map); // Set the view of the map
  // with the latitude, longitude and the zoom value

  map.setView([48.8584, 2.2945], 16); // Set the map view to the user's location
  // Uncomment below to set map according to user location
  // map.locate({setView: true, maxZoom: 16});
  // Show a market at the position of the Eiffel Tower

  var eiffelMarker = L.marker([48.8584, 2.2945]).addTo(map); // Bind popup to the marker with a popup

  eiffelMarker.bindPopup('Eiffel Tower').openPopup();
}
/*---------------------------------------------------------------------
Flatpickr
-----------------------------------------------------------------------*/


var date_flatpickr = document.querySelectorAll('.date_flatpicker');
Array.from(date_flatpickr, function (elem) {
  console.log(elem, flatpickr);

  if ((typeof flatpickr === "undefined" ? "undefined" : _typeof(flatpickr)) !== ( true ? "undefined" : 0)) {
    flatpickr(elem, {
      minDate: 'today',
      dateFormat: 'Y-m-d'
    });
  }
});
/*---------------------------------------------------------------------
Range Flatpickr
-----------------------------------------------------------------------*/

var range_flatpicker = document.querySelectorAll('.range_flatpicker');
Array.from(range_flatpicker, function (elem) {
  if ((typeof flatpickr === "undefined" ? "undefined" : _typeof(flatpickr)) !== ( true ? "undefined" : 0)) {
    flatpickr(elem, {
      mode: 'range',
      minDate: 'today',
      dateFormat: 'Y-m-d'
    });
  }
});
/*---------------------------------------------------------------------
Inline Flatpickr
-----------------------------------------------------------------------*/

var inline_flatpickr = document.querySelectorAll('.inline_flatpickr');
Array.from(inline_flatpickr, function (elem) {
  if ((typeof flatpickr === "undefined" ? "undefined" : _typeof(flatpickr)) !== ( true ? "undefined" : 0)) {
    flatpickr(elem, {
      inline: true,
      minDate: 'today',
      dateFormat: 'Y-m-d'
    });
  }
});

function openNav() {
  document.getElementById('mySidenav').style.width = '450px'; // document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById('mySidenav').style.width = '0'; // document.body.style.backgroundColor = "white";
}

function darkMode(click_id) {
  if (click_id == 'dark') {
    var html = document.querySelector('html');
    html.classList.add('dark');
  } else {
    var _html = document.querySelector('html');

    _html.classList.remove('dark');
  }
}

function autoMode(click_id) {
  if (click_id == 'auto') {
    var html = document.querySelector('html');

    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
      html.classList.add('dark');
    } else {
      html.classList.remove('dark');
    }
  }
}

function Direction(dir_id) {
  if (dir_id == 'ltr') {
    var html = document.querySelector('html'); // html.removeAttribute('dir','rtl');

    html.setAttribute('dir', 'ltr');
  } else {
    var _html2 = document.querySelector('html'); // html.removeAttribute('dir','ltr');


    _html2.setAttribute('dir', 'rtl');
  }
} // function black() {
//   document.getElementById('sid').style.backgroundColor = "black";
//   document.getElementById('sid1').style.color = "white";
// }
// function blue() {
//   document.getElementById('sid').style.backgroundColor = "#4e68ea";
// }
// function white() {
//   document.getElementById('sid').style.backgroundColor = "white";
// }


function transparent() {
  document.getElementById('sid').style.backgroundColor = 'transparent';
  document.getElementById('side').style.backgroundColor = 'transparent';
}

function black() {
  document.getElementById('sid').style.backgroundColor = '#212529';
  document.getElementById('side').style.backgroundColor = '#212529';
}
/******/ })()
;