$(document).ready(function() {
    $('.salle_select').change(function() {
      var day = 'Lundi';  // Update with the actual selected day
      var time = $(this).parent().parent().parent().prev().text().trim();  // Extract "Matin" or "Après-midi"
      var roomType = $(this).attr('name');
      var selectedValue = $(this).val();
  
      $.ajax({
        url: '/api/check-room-availability',
        method: 'POST',
        data: {
          day: day,
          time: time,
          roomType: roomType
        },
        success: function(response) {
          if (response.available && selectedValue !== 'Non disponible') {
            // Room is available and user selected a specific room
            // (Handle this scenario: e.g., display confirmation message)
          } else {
            // Either room is unavailable or user selected "Non disponible"
            $(this).val('Non disponible');
          }
        },
        error: function(error) {
          console.error('Error checking availability:', error);
          // Handle errors appropriately (e.g., display user-friendly error messages)
        }
      });
    });
  });
  