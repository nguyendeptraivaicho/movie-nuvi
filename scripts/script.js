document.addEventListener('DOMContentLoaded', () => {
    // Sample movie data
    const movies = [
        {
            id: 1,
            title: 'Movie 1',
            description: 'This is a description of Movie 1.',
            image: 'images/movie1.jpg',
            episodes: [
                { id: 1, title: 'Episode 1', video: 'videos/movie1_episode1.mp4' },
                { id: 2, title: 'Episode 2', video: 'videos/movie1_episode2.mp4' }
            ]
        },
        {
            id: 2,
            title: 'Movie 2',
            description: 'This is a description of Movie 2.',
            image: 'images/movie2.jpg',
            episodes: [
                { id: 1, title: 'Episode 1', video: 'videos/movie2_episode1.mp4' },
                { id: 2, title: 'Episode 2', video: 'videos/movie2_episode2.mp4' }
            ]
        }
        // Add more movies as needed
    ];

    const movieList = document.getElementById('movie-list');
    const movieDetail = document.getElementById('movie-detail');
    const videoContainer = document.getElementById('video-container');
    const episodeList = document.getElementById('episode-list');
    const backButton = document.getElementById('back-button');

    function showMovieDetail(movie) {
        movieList.style.display = 'none';
        movieDetail.style.display = 'block';
        episodeList.style.display = 'block'; // Show episode list

        videoContainer.innerHTML = `
            <h2>${movie.title}</h2>
            <p>${movie.description}</p>
        `;

        episodeList.innerHTML = movie.episodes.map(episode => `
            <div class="episode-item">
                <h3>${episode.title}</h3>
                <button onclick="showEpisode(${movie.id}, ${episode.id})">Watch Episode</button>
            </div>
        `).join('');
    }

    function showEpisode(movieId, episodeId) {
        const movie = movies.find(m => m.id === movieId);
        const episode = movie.episodes.find(e => e.id === episodeId);
        
        if (episode) {
            videoContainer.innerHTML = `
                <h2>${episode.title}</h2>
                <video controls>
                    <source src="${episode.video}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            `;
        }
    }

    function showMovieList() {
        movieList.style.display = 'flex';
        movieDetail.style.display = 'none';
        episodeList.style.display = 'none'; // Hide episode list
        videoContainer.innerHTML = ''; // Clear video container
    }

    movies.forEach(movie => {
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

    window.showMovieDetail = function(id) {
        const movie = movies.find(m => m.id === id);
        if (movie) {
            showMovieDetail(movie);
        }
    }

    window.showEpisode = showEpisode;

    backButton.addEventListener('click', showMovieList);
});
