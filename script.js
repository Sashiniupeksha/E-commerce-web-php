// Optional: Add functionality for search button
document.querySelector(".search-bar button").addEventListener("click", function() {
    const query = document.querySelector(".search-bar input").value;
    if (query) {
        window.location.href = `search-results.html?q=${encodeURIComponent(query)}`;
    }
});