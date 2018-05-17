<form class="needs-validation" name="AddRent"  action="addRent.php" method="post">
    <div class="mb-3">
        <label for="name">name the rent</label><span> *</span>
        <div class="input-group">
            <input type="text" name="name" required>
        </div>
    </div>
    <div class="mb-3">
        <label for="adress">road</label><span> *</span>
        <div class="input-group">
            <input type="text" name="address" required>
        </div>
    </div>
    <div class="mb-3">
        <label for="num">number in road</label><span> *</span>
        <div class="input-group">
            <input type="number" min="1" name="num" required>
        </div>
    </div>
    <div class="mb-3">
        <label for="rooms">number of rooms</label><span> *</span>
        <div class="input-group">
            <input type="number" min="1" name="rooms" required>
        </div>
    </div>
    <div class="mb-3">
        <label for="rooms">price (EUR)</label><span> *</span>
        <div class="input-group">
            <input type="number" min="0.01" step="0.01" name="rooms" required>
        </div>
    </div>
</form>
