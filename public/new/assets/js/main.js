function handleClick(link) {
    // Remove active class from all links
    var links = document.querySelectorAll('a');
    links.forEach(function (el) {
      el.classList.remove('active');
    });

    // Add active class to the clicked link
    link.classList.add('active');

    // Save the active link to localStorage
    localStorage.setItem('activeLink', link.getAttribute('id'));
  }

  // Function to check and set the active link from localStorage
  function setActiveLink() {
    var activeLinkId = localStorage.getItem('activeLink');
    if (activeLinkId) {
      var activeLink = document.getElementById(activeLinkId);
      activeLink.classList.add('active');
    }
  }