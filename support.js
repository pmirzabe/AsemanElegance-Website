
document.getElementById('supportForm').addEventListener('submit', function(e) {
    e.preventDefault();
    document.getElementById('supportForm').style.display = 'none';
    document.getElementById('thankYouMessage').style.display = 'block';
});
