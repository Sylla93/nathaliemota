jQuery(document).ready(function($) {

    $('.btn-contact').click(function() {
    let ref = $(this).data('ref');
    $('#ref-photo').val(ref);
    $('#popup-contact').show();
  });
  $('#close-popup').click(function() {
    $('#popup-contact').hide();
  });

 console.log('Je suis présent au  milieu');
  
  
  const modal = $('#contact-modal');
  const closeBtn = modal.find('.modal-close');
  const photoRefField = $('#photo-ref'); // champ dans le formulaire CF7

  // Ouverture de la popup
  $('.open-contact-modal').on('click', function() {
    const ref = $(this).data('photo-ref'); // récupère la valeur du bouton
    modal.css('display', 'flex');
    $('body').css('overflow', 'hidden');

    // Préremplir le champ REF.PHOTO
    if (photoRefField.length) {
      photoRefField.val(ref);
    }
  });

  // Fermeture de la popup
  closeBtn.on('click', function() {
    modal.hide();
    $('body').css('overflow', '');
  });

  modal.on('click', function(e) {
    if (e.target === this) {
      modal.hide();
      $('body').css('overflow', '');
    }
  });
});