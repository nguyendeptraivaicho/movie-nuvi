document.addEventListener('DOMContentLoaded', () => {
    // Sample movie data
    const movies = [
        {
            id: 1,
            title: 'Movie 1',
            description: 'This is a description of Movie 1.',
            image: 'images/movie1.jpg',
            video: 'videos/movie1.mp4'
        },
        {
            id: 2,
            title: 'Movie 2',
            description: 'This is a description of Movie 2.',
            image: 'images/movie2.jpg',
            video: 'videos/movie2.mp4'
        }
        // Add more movies as needed
    ];

    const movieList = document.getElementById('movie-list');
    const movieDetail = document.getElementById('movie-detail');
    const videoContainer = document.getElementById('video-container');
    const backButton = document.getElementById('back-button');

    function showMovieDetail(movie) {
        movieList.style.display = 'none';
        movieDetail.style.display = 'block';

        videoContainer.innerHTML = `
            <h2>${movie.title}</h2>
            <video controls>
                <source src="${movie.video}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p>${movie.description}</p>
        `;
    }

    function showMovieList() {
        movieList.style.display = 'flex';
        movieDetail.style.display = 'none';
    }

    movies.forEach(movie => {
        const movieCard = document.createElement('div');
        movieCard.className = 'movie-card';
        
        movieCard.innerHTML = `
            <img src="${movie.image}" alt="${movie.title}">
            <h2>${movie.title}</h2>
            <p>${movie.description}</p>
            <button onclick="showMovieDetail(${movie.id})">Watch Video</button>
        `;
        
        movieList.appendChild(movieCard);
    });

    window.showMovieDetail = function(id) {
        const movie = movies.find(m => m.id === id);
        if (movie) {
            showMovieDetail(movie);
        }
    }

    backButton.addEventListener('click', showMovieList);
});
