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
