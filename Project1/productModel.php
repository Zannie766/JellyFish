<div id="product-list">Đang tải sản phẩm...</div>

<script>
fetch('product.php')
    .then(response => response.text())
    .then(data => {
        document.getElementById('product-list').innerHTML = data;
    })
    .catch(error => {
        document.getElementById('product-list').innerHTML = "Lỗi khi tải sản phẩm.";
        console.error('Lỗi:', error);
    });
</script>
