document.getElementById('search-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
    
    var searchQuery = document.getElementById('search-input').value.toLowerCase();
    var sectionId = ''; // Initialize the section ID
    
    // Logic to determine the section ID based on the search query
    if (searchQuery === 'vizag') {
      sectionId = 'vizag';
    } else if (searchQuery === 'rjy') {
      sectionId = 'rjy';
    }
    else if(searchQuery === 'krishna'){
        sectionId='krishna';
    }
    else if(searchQuery === 'kakinada'){
        sectionId='kakinada';
    }
    else if(searchQuery === 'temples'){
      sectionId='temples';
  }
    if (sectionId !== '') {
      var section = document.getElementById(sectionId);
      if (section) {
        section.scrollIntoView({ behavior: 'smooth' });
      }
    }
    else{
        alert("Entered place is not found");
      }
  });
  