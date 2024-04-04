console.log('map.js loaded');

    // Function to open Google Maps with directions to your restaurant
    function showDirections() {
      const restaurantLocation = { lat: 45.5124346, lng: -73.6931212 };
      const mapUrl = `https://www.google.com/maps/dir/?api=1&destination=${restaurantLocation.lat},${restaurantLocation.lng}`;
      window.open(mapUrl, '_blank');
    }

    // Initialize the map
    function initMap() {
      // Verify if the #map element exists
      const mapElement = document.getElementById('map');
      if (!mapElement) {
        console.error('No map element found.');
        return;
      }

      // Create a location for your restaurant
      const restaurantLocation = { lat: 45.5124346, lng: -73.6931212 };

      // Customize map options
      const mapOptions = {
        center: restaurantLocation,
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: [
          {
            featureType: 'poi',
            elementType: 'labels',
            stylers: [{ visibility: 'off' }],
          },
        ],
      };

      // Create a map with the specified options
      const map = new google.maps.Map(mapElement, mapOptions);

      // Add a marker for the restaurant's location
      const marker = new google.maps.Marker({
        position: restaurantLocation,
        map: map,
        title: 'Kuljit India',
      });
    }

    // Check if the Google Maps API script has loaded successfully
    if (typeof google !== 'undefined' && typeof google.maps !== 'undefined') {
      // Initialize the map
      initMap();
    } else {
      // Handle the case where the API script has not loaded
      console.error('Google Maps API script not loaded.');
    }
  