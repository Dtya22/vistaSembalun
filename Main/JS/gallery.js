async function loadImagesFromDatabase() {
    try {
      // Simulasi mengambil data gambar dari database
      const imageData = await fetchImagesFromDatabase();
      displayImages(imageData);
    } catch (error) {
      console.error('Error loading images from database:', error);
    }
  }
  
  function fetchImagesFromDatabase() {
    return new Promise((resolve) => {
      // Simulasi mengambil data gambar dari database
      const imageData = ['resizedImageData', 'resizedImageData2', 'resizedImageData3'];
      resolve(imageData);
    });
  }
  
  function displayImages(imageData) {
    const cardContainer = document.getElementById('cardContainer');
  
    imageData.forEach((data) => {
      const card = document.createElement('div');
      card.classList.add('card');
  
      const img = document.createElement('img');
      img.src = data; // Menggunakan data gambar yang diambil dari database
      card.appendChild(img);
  
      const title = document.createElement('h3');
      title.textContent = 'Uploaded Image';
      card.appendChild(title);
  
      const description = document.createElement('p');
      description.textContent = 'This is an image uploaded by the user.';
      card.appendChild(description);
  
      cardContainer.appendChild(card);
    });
  }
  
  loadImagesFromDatabase();