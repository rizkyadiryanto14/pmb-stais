function countdown(start, end) {
    var countdownElement = document.getElementById('countdown');
  
    // Hitung selisih waktu (dalam detik)
    var diff = Math.floor((end - start) / 1000);
  
    // Jika waktu akhir sudah lewat, tampilkan pesan
    if (diff <= 0) {
      countdownElement.innerHTML = 'Waktu habis';
      return;
    }
  
    // Hitung waktu mundur dalam jam, menit, dan detik
    var hours = Math.floor(diff / (60 * 60));
    var minutes = Math.floor((diff % (60 * 60)) / 60);
    var seconds = diff % 60;
  
    // Tampilkan waktu mundur pada halaman
    countdownElement.innerHTML = 'Sisa waktu: ' + hours + ' jam ' + minutes + ' menit ' + seconds + ' detik';
  
    // Perbarui waktu mundur setiap 1 detik
    setTimeout(function() {
      countdown(start, end);
    }, 1000);
  }
  