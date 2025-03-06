<body>
<?php if (!empty($data['results'])): ?>
    <?php foreach ($data['results'] as $character): ?>
        <div>
            <h2><?php echo htmlspecialchars($character['name']); ?></h2>
            <img src="<?php echo htmlspecialchars($character['image']); ?>" alt="<?php echo htmlspecialchars($character['name']); ?>">
            <p>Estado: <?php echo htmlspecialchars($character['status']); ?></p>
            <p>Especie: <?php echo htmlspecialchars($character['species']); ?></p>
            <p>Género: <?php echo htmlspecialchars($character['gender']); ?></p> 
        </div>
    <?php endforeach; ?>
<?php endif; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>