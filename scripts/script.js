document.addEventListener('DOMContentLoaded', () => {
    // Sample movie data
    const movies = [
        {
            id: 1,
            title: 'Movie 1',
            description: 'This is a description of Movie 1.',
            image: 'images/movie1.jpg',
            episodes: [
                { title: 'Episode 1', video: 'videos/movie1-ep1.mp4' },
                { title: 'Episode 2', video: 'videos/movie1-ep2.mp4' }
            ]
        },
        {
            id: 2,
            title: 'Movie 2',
            description: 'This is a description of Movie 2.',
            image: 'images/movie2.jpg',
            episodes: [
                { title: 'Episode 1', video: 'videos/movie2-ep1.mp4' },
                { title: 'Episode 2', video: 'videos/movie2-ep2.mp4' }
            ]
        }
    ];
    

    const movieList = document.getElementById('movie-list');
    const movieDetail = document.getElementById('movie-detail');
    const videoContainer = document.getElementById('video-container');
    const backButton = document.getElementById('back-button');
    const searchInput = document.getElementById('search-input');

    function showMovieDetail(movie) {
        movieList.style.display = 'none';
        movieDetail.style.display = 'block';

        videoContainer.innerHTML = `
            <h2>${movie.title}</h2>
            <p>${movie.description}</p>
            <video controls>
                <source src="${movie.video}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        `;
    }

    function showMovieList() {
        movieList.style.display = 'flex';
        movieDetail.style.display = 'none';
        videoContainer.innerHTML = ''; // Clear video container
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
