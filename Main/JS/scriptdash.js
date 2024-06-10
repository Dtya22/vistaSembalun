import 'react'
console.log('Tes script')
document.getElementById("logout").addEventListener("click", function () {
  // Ganti URL berikut dengan URL tujuan Anda
  window.location.href = "index.php";
});
document.getElementById("view").addEventListener("click", function () {
  // Ganti URL berikut dengan URL tujuan Anda
  window.location.href = "index.php";
});
document
  .getElementById("seacrhForm")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Mencegah pengiriman formulir secara default

    // Ambil nilai yang dimasukkan pengguna
    var searchQuery = document
      .getElementById("searchInput")
      .value.trim()
      .toLowerCase();

    // Cek apakah kata kunci adalah "gallery"
    if (searchQuery === "gallery") {
      // Tampilkan galeri
      document.getElementById("gallery").style.display = "block";
    } else {
      // Sembunyikan galeri jika kata kunci tidak cocok
      document.getElementById("gallery").style.display = "none";
    }
  });
  function toggleGalleryOptions() {
    var options = document.getElementById('gallery-options');
    if (options.style.display === 'block') {
        options.style.display = 'none';
    } else {
        options.style.display = 'block';
    }
}

// Optional: Close the gallery options if clicked outside
document.addEventListener('click', function(event) {
    var galleryLink = document.querySelector('.gallery-link');
    var galleryOptions = document.getElementById('gallery-options');
    if (!galleryLink.contains(event.target) && !galleryOptions.contains(event.target)) {
        galleryOptions.style.display = 'none';
    }
});
document.getElementById("logout").addEventListener("click", function () {
  window.location.href = "index.php";
});
$(document).ready(function(){
  $('#uploadForm').submit(function(e){
      e.preventDefault();
      var formData = new FormData(this);

      $.ajax({
          url: 'upload.php',
          type: 'POST',
          data: formData,
          processData: false,
          contentType: false,
          success: function(response){
              alert(response);
          }
      });
  });
});
