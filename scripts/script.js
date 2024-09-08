document.addEventListener('DOMContentLoaded', () => {
    const movies = [
        {
            id: 1,
            title: 'Movie 1',
            description: 'This is a description of Movie 1.',
            image: 'images/movie1.jpg',
            episodes: [
                { title: 'Episode 1', videoUrl: 'https://youtu.be/USBi6RWOEtg?si=rHG2p0KcwcxqXVGK' },
                { title: 'Episode 2', videoUrl: 'https://youtu.be/USBi6RWOEtg?si=rHG2p0KcwcxqXVGK' }
            ]
        },
        {
            id: 2,
            title: 'Movie 2',
            description: 'This is a description of Movie 2.',
            image: 'images/movie2.jpg',
            episodes: [
                { title: 'Episode 1', videoUrl: 'https://youtu.be/USBi6RWOEtg?si=rHG2p0KcwcxqXVGK' },
                { title: 'Episode 2', videoUrl: 'https://youtu.be/USBi6RWOEtg?si=rHG2p0KcwcxqXVGK' }
            ]
        }
    ];

    const movieList = document.getElementById('movie-list');
    const movieDetail = document.getElementById('movie-detail');
    const episodeList = document.getElementById('episode-list');
    const videoContainer = document.getElementById('video-container');
    const backButton = document.getElementById('back-button');
    const searchInput = document.getElementById('search-input');

    function showEpisodeList(episodes) {
        episodeList.innerHTML = '';
        episodeList.style.display = 'block';
        videoContainer.innerHTML = ''; // Clear video container

        episodes.forEach((episode) => {
            const episodeButton = document.createElement('button');
            episodeButton.textContent = episode.title;
            episodeButton.onclick = () => showVideo(episode.videoUrl);
            episodeList.appendChild(episodeButton);
        });
    }

    function showVideo(videoUrl) {
        videoContainer.innerHTML = `
            <video controls>
                <source src="${videoUrl}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        `;
    }

    function showMovieDetail(movie) {
        movieList.style.display = 'none';
        movieDetail.style.display = 'flex';
        episodeList.style.display = 'block'; // Show episode list by default

        videoContainer.innerHTML = ''; // Clear video container

        showEpisodeList(movie.episodes);
    }

    function showMovieList() {
        movieList.style.display = 'flex';
        movieDetail.style.display = 'none';
        episodeList.style.display = 'none'; // Hide episode list when back to list
    }

    function renderMovies(filter = '') {
        movieList.innerHTML = '';

        const filteredMovies = movies.filter(movie => movie.title.toLowerCase().includes(filter.toLowerCase()));

        filteredMovies.forEach(movie => {
            const movieCard = document.createElement('div');
            movieCard.className = 'movie-card';
            
            movieCard.innerHTML = `
                <img src="${movie.image}" alt="${movie.title}">
                <h2>${movie.title}</h2>
                <p>${movie.description}</p>
                <button onclick="showMovieDetail(${movie.id})">View Details</button>
            `;
            
            movieList.appendChild(movieCard);
        });
    }

    searchInput.addEventListener('input', (event) => {
        const searchTerm = event.target.value;
        renderMovies(searchTerm);
    });

    window.showMovieDetail = function(id) {
        const movie = movies.find(m => m.id === id);
        if (movie) {
            showMovieDetail(movie);
        }
    }

    backButton.addEventListener('click', showMovieList);

    // Render initial movie list
    renderMovies();
});
