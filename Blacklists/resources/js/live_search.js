const searchInput = document.getElementById('isearch');
const searchResults = document.getElementById('search-results');

searchInput.addEventListener('input', function () {
    const query = searchInput.value.trim();

    if (query.length >= 2) { // Optional: Set a minimum query length
        fetch(`/live-search?query=${encodeURIComponent(query)}`)
            .then(response => response.json())
            .then(results => {
                // Clear previous search results
                searchResults.innerHTML = '';

                // Display new search results
                results.forEach(result => {
                    const resultItem = document.createElement('div');
                    resultItem.textContent = result.name;
                    searchResults.appendChild(resultItem);
                });
            });
    } else {
        searchResults.innerHTML = ''; // Clear results if query is too short
    }
});
