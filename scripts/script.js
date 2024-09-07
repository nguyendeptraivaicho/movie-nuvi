document.addEventListener('DOMContentLoaded', () => {
    // Sample movie data
    const movies = [
        {
            title: 'Movie 1',
            description: 'This is a description of Movie 1.',
            image: 'images/movie1.jpg',
            video: 'videos/movie1.mp4'
        },
        {
            title: 'Movie 2',
            description: 'This is a description of Movie 2.',
            image: 'images/movie2.jpg',
            video: 'videos/movie2.mp4'
        }
        // Add more movies as needed
    ];

    const movieList = document.getElementById('movie-list');

    movies.forEach(movie => {
        const movieCard = document.createElement('div');
        movieCard.className = 'movie-card';

        movieCard.innerHTML = `
            <img src="${movie.image}" alt="${movie.title}">
            <h2>${movie.title}</h2>
            <p>${movie.description}</p>
            <video controls>
                <source src="${movie.video}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        `;

        movieList.appendChild(movieCard);
    });
});
