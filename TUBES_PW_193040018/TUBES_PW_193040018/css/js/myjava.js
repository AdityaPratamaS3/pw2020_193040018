//event pada saat link diklik
$('.nav-link').on('click', function () {
  //ambil isi Tujuan
  var Tujuan = $(this).attr('Tujuan');
  //tangkap elemen ybs
  var elemenTujuan = $(Tujuan);
  // pindahkan scroll
  $('body').animate({
    scrollTop: elemenTujuan.offset().top - 50
  });

  e.preventDefault();
});