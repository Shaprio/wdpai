<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
  <title>GAME PAGE</title>
</head>
<body>
  <div class="container">
    <div class="login-container">
        <!-- Wyświetlanie obrazów -->
        <div id="project-container">
            <img id="project-image" src="public/uploads/" />
        </div>

        <!-- Przycisk do ładowania kolejnego obrazu -->
        <button id="next-button">Następne zdjęcie</button>
        <a href="/profil">Back</a>

        <script>
            // Pobierz referencje do elementów w kodzie JavaScript
            const projectImage = document.getElementById('project-image');
            const nextButton = document.getElementById('next-button');

            // Pobierz listę plików ze zdjęciami
            const imageFiles = [
                <?php
                // Uzyskaj listę plików w folderze "uploads"
                $files = [];

                // Wygeneruj listę nazw plików w formacie JavaScript
                foreach ($projects as $project ) {
                    echo "'" . $project->getImage() . "',";
                }
                ?>
            ];

            console.log(imageFiles)


            // Utwórz zmienną do przechowywania indeksu aktualnego zdjęcia
            let currentImageIndex = 0;

            // Funkcja do ładowania kolejnego zdjęcia po kliknięciu przycisku
            function loadNextImage() {
                // Zwiększ indeks aktualnego zdjęcia
                currentImageIndex++;

                // Sprawdź, czy indeks nie przekroczył liczby dostępnych zdjęć
                if (currentImageIndex >= imageFiles.length) {
                    // Jeśli tak, przekieruj użytkownika do pierwszego zdjęcia lub wykonaj inną akcję
                    currentImageIndex = 0;
                }

                // Pobierz nazwę aktualnego zdjęcia
                const currentImage = imageFiles[currentImageIndex];

                // Zaktualizuj ścieżkę do obrazu
                projectImage.src = `public/uploads/${currentImage}`;

                // Opcjonalnie: Zatrzymaj propagację kliknięcia przycisku
                event.stopPropagation();
            }

            // Dodaj nasłuchiwanie na kliknięcie przycisku
            nextButton.addEventListener('click', loadNextImage);
        </script>
    </div>
  </div>
</body>
