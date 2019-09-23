
// Siirry muuta-sivulle
$(document).on('click', '.muuta-object', function() {
    var id = $(this).attr('muuta-id');
    bootbox.confirm({
      message: "<h4>Oletko varma?</h4>",
      buttons: {
        confirm: {
          label: '<i class="fa fa-check"></i>Kyllä',
          className: 'btn-danger'
        },
        cancel: {
          label: '<i class="fa fa-check"></i>Ei',
          className: 'btn-primary'
        }
      },
      callback: function(result) {
        // Painettiinko Kyllä-painiketta?
        if(result == true) {
          // Kyllä painettiin, joten siirrytään muuta-sivulle
          var url = "muutaHenkilo.php?id=" + id;
          $(location).attr('href', url);
        }
      }
    })
  })

  
  // Siirry poista-sivulle
  $(document).on('click', '.poista-object', function() {
    var id = $(this).attr('poista-id');
    bootbox.confirm({
      message: "<h4>Oletko varma?</h4>",
      buttons: {
        confirm: {
          label: '<i class="fa fa-check"></i>Kyllä',
          className: 'btn-danger'
        },
        cancel: {
          label: '<i class="fa fa-check"></i>Ei',
          className: 'btn-primary'
        }
      },
      callback: function(result) {
        // Painettiinko Kyllä-painiketta?
        if(result == true) {
          // Kyllä painettiin, joten siirrytään poista-sivulle
          var url = "poistaHenkilo.php?id=" + id;
          $(location).attr('href', url);
        }
      }
    })
  })